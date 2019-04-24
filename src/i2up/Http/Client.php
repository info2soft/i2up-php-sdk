<?php
namespace i2up\Http;

use i2up\Config;
use i2up\Http\Request;
use i2up\Http\Response;

final class Client
{
    public static function get($url, $body, array $headers = array())
    {
        if(isset($body) && is_array($body)) {
            if (!empty($body)) {
                $bodyStr = '';
                foreach ($body as $key => $value){
                    if (is_array($value)) {
                        foreach ($value as $k => $v) {
                            $bodyStr .= urlencode($key) . '[]=' . urlencode($v) . '&';
                        }
                    } else {
                        $bodyStr .= urlencode($key) . '=' . urlencode($value) . '&';
                    }
                }
                $body = $bodyStr;
            } else {
                $body = null;
            }
        } else {
            $body = null;
        }
        $request = new Request('GET', $url, $headers, $body);
        return self::sendRequest($request);
    }
    public static function delete($url, $body, array $headers = array())
    {
        if ($body !== null) {
            $headers['Content-Type'] = 'application/json';
            $body = json_encode($body);
        }
        $request = new Request('DELETE', $url, $headers, $body);
        return self::sendRequest($request);
    }

    public static function post($url, $body, array $headers = array())
    {
        if ($body !== null) {
            $headers['Content-Type'] = 'application/json';
            $body = json_encode($body);
        }
        $request = new Request('POST', $url, $headers, $body);
        return self::sendRequest($request);
    }
    public static function put($url, $body, array $headers = array())
    {
        if ($body !== null) {
            $headers['Content-Type'] = 'application/json';
            $body = json_encode($body);
        }
        $request = new Request('PUT', $url, $headers, $body);
        return self::sendRequest($request);
    }


    public static function sendRequest($request)
    {
        $t1 = microtime(true);
        $ch = curl_init();
        $options = array(
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_SSL_VERIFYHOST => false,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HEADER => true,
            CURLOPT_NOBODY => false,
            CURLOPT_CUSTOMREQUEST => $request->method,
            CURLOPT_URL => $request->url,
        );

        // Handle open_basedir & safe mode
        if (!ini_get('safe_mode') && !ini_get('open_basedir')) {
            $options[CURLOPT_FOLLOWLOCATION] = true;
        }

        if (!empty($request->headers)) {
            $headers = array();
            foreach ($request->headers as $key => $val) {
                array_push($headers, "$key: $val");
            }
            $options[CURLOPT_HTTPHEADER] = $headers;
        }
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));

        echo 'request_method:'.$request->method . "\n";
        if ($request->method === 'POST' || $request->method === 'PUT' || $request->method === 'DELETE') {
            if (!empty($request->body)) {
                echo 'body:'.$request -> body . "\n";
                $options[CURLOPT_POSTFIELDS] = $request->body;
            }
        } else if ($request->method === 'GET') {
            if (!empty($request->body)) {
                $options[CURLOPT_URL] = $request->url . '?' . $request->body . '_=' . lcg_value();
            }
        }
        echo 'url:'.$options[CURLOPT_URL] . "\n";
        curl_setopt_array($ch, $options);
        $result = curl_exec($ch);
        $t2 = microtime(true);
        $duration = round($t2 - $t1, 3);
        $ret = curl_errno($ch);
        if ($ret !== 0) {
            $r = new Response(-1, $duration, array(), null, curl_error($ch));
            curl_close($ch);
            return $r;
        }
        $code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $header_size = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
        $headers = self::parseHeaders(substr($result, 0, $header_size));
        $body = substr($result, $header_size);
        return new Response($code, $duration, $headers, $body, null);
    }

    private static function parseHeaders($raw)
    {
        $headers = array();
        $headerLines = explode("\r\n", $raw);
        foreach ($headerLines as $line) {
            $headerLine = trim($line);
            $kv = explode(':', $headerLine);
            if (count($kv) > 1) {
                $kv[0] =self::ucwordsHyphen($kv[0]);
                $headers[$kv[0]] = trim($kv[1]);
            }
        }
        return $headers;
    }
    
    private static function ucwordsHyphen($str)
    {
        return str_replace('- ', '-', ucwords(str_replace('-', '- ', $str)));
    }
}
