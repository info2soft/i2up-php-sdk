<?php
namespace i2up\Http;

use i2up\util\common;

final class Client
{
    public static function get($url, $body, array $headers = array())
    {
        if(isset($body) && is_array($body)) {
            if (!empty($body)) {
                $bodyStr = '';
                foreach ($body as $key => $value){
                    if (is_array($value)) {
                        $bodyStr .= urlencode($key) . '=' . json_encode($value, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) . '&';
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
        $headers['Content-Type'] = 'application/json';
        if ($body !== null) {
            $body = json_encode($body);
        }
        $request = new Request('DELETE', $url, $headers, $body);
        return self::sendRequest($request);
    }

    public static function post($url, $body, array $headers = array())
    {
        $headers['Content-Type'] = 'application/json';
        if ($body !== null) {
            $body = json_encode($body);
        }
        $request = new Request('POST', $url, $headers, $body);
        return self::sendRequest($request);
    }
    public static function put($url, $body, array $headers = array())
    {
        $headers['Content-Type'] = 'application/json';
        if ($body !== null) {
            $body = json_encode($body);
        }
        $request = new Request('PUT', $url, $headers, $body);
        return self::sendRequest($request);
    }


    public static function sendRequest($request)
    {
        $t1 = microtime(true);
        $ch = curl_init();
        $randomStr = mt_rand(0, 9999999999);
        $options = array(
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_SSL_VERIFYHOST => false,
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
            $url = $request -> url;
            $uri = parse_url($url);
            $common = new Common();
            $time = time();
            $nonce = $common -> uuid();
            $request -> headers['timestamp'] = $time;
            $request -> headers['nonce'] = $nonce;
            $signature = strtoupper($request -> method) . "\n" . $uri['path'] . "\n" . $randomStr . "\n" . $time . "\n" . $nonce;

            $body_arr = array();
            if ($request->body) {
                $request->method == 'GET'
                    ? parse_str($request->body, $body_arr)
                    : $body_arr = json_decode($request->body, true);
            }
            $body_arr['_'] = $randomStr;
            $sign_args = $body_arr;
            ksort($sign_args);
            $sign_fields = array();
            foreach ($sign_args as $arg => $value) {
                if ($value === null || $value === '') { // value为空不参与签名
                    continue;
                }
                if (!is_string($value)) {
                    $value = json_encode($value, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
                }
                array_push($sign_fields, "{$arg}={$value}");
            }
            unset($sign_args);
            $enhance_str = str_replace('"', '', implode('&', $sign_fields));

            if (isset($request -> headers['ACCESS-KEY'])) {
                $request -> headers['Signature'] = hash_hmac('sha256', $signature, $request -> headers['SECRET-KEY']);
                unset($request -> headers['SECRET-KEY']);
                $request -> headers['enhanceStr'] = hash_hmac('sha256', $enhance_str, $request -> headers['ACCESS-KEY']);
            } else {
                if (!empty($request -> headers['Authorization'])) {
                    $request -> headers['Signature'] =  hash_hmac('sha256', $signature, $request -> headers['Authorization']);
                    $request -> headers['enhanceStr'] = hash_hmac('sha256', $enhance_str, $request -> headers['Authorization']);
                }
            }
            foreach ($request->headers as $key => $val) {
                array_push($headers, "$key: $val");
            }
            $options[CURLOPT_HTTPHEADER] = $headers;
        }
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));

        echo 'request_method:'.$request->method . "\n";
        if ($request->method === 'POST' || $request->method === 'PUT' || $request->method === 'DELETE') {
            if (!empty($request->body)) {
                $body = json_decode($request->body);
                if ($body != null) {
                    $body -> _ = $randomStr;
                } else {
                    $body = array('_' => $randomStr);
                }
            } else {
                $body = array('_' => $randomStr);
            }
            $request->body = json_encode($body);
            echo 'body:'.$request -> body . "\n";
            $options[CURLOPT_POSTFIELDS] = $request->body;
        } else if ($request->method === 'GET') {
            $options[CURLOPT_URL] = $request->url . '?' . ($request->body ?: ''). '_=' . $randomStr;
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
