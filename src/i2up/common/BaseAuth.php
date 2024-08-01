<?php
namespace i2up\common;

use i2up\Config;
use i2up\Http\Client;
use i2up\Http\Error;

class BaseAuth {

    protected $username;
    protected $password;

    protected $url;
    protected $authToken;
    protected $authSsoToken;
    protected $accessKey;
    protected $secretKey;

    public $tokenAuthType;
    public $ip;

    public function __construct(array $params = array())
    {
        $params = $params ?: array(
            'username' => Config::username,
            'pwd' => Config::password,
            'cache_path' => __DIR__ . '/../',
            'ip' => Config::baseUrl,
        );

        $this -> ip = $params['ip'];
        $this -> url = $params['ip'];
        if (isset($params['access_key'])) {
            $this -> tokenAuthType = false;
            $this -> accessKey = $params['access_key'];
            $this -> secretKey = $params['secret_key'];
        } else {
            $this -> tokenAuthType = true;
            $this -> username = $params['username'];
            $this -> password = $params['pwd'];
            $cache = $this -> getCacheToken($params['cache_path']);
            if (empty($cache)) {
                $this -> saveCacheToken($params['cache_path']);
            } else {
                $cacheTime = isset($cache[2]) ? (int) $cache[2] : 0;
                $time = time();
                $ip = isset($cache[3]) ? (string) $cache[3] : '';
                if ($time - $cacheTime >= 7200 || $ip !== $this->ip) {
                    $this -> saveCacheToken($params['cache_path']);
                } else {
                    $this -> authToken = $cache[0];
                    $this -> authSsoToken = $cache[1];
                }

            }
        }
    }
    private function getToken()
    {
        $headers = array('Accept' => 'application/json');
        $url = $this -> url . 'auth/token';
        $body = array('username' => $this -> username, 'pwd' => $this -> password);
        $ret = Client::post($url, $body, $headers);
        if (!$ret->ok()) {
            return array(null, new Error($url, $ret));
        }
        $r = ($ret->body === null) ? array('code' => -1) : $ret->json();
        $code = $r['code'];
        $arr = array();
        if ($code === 0) {
            $arr['token'] = $r['token'];
        } else {
            $arr['token'] = '';
        }
        return $arr;
    }
    public function token() {
        return $this -> authToken;
    }
    public function accessKey () {
        return $this -> accessKey;
    }
    public function secretKey () {
        return $this -> secretKey;
    }
    private function getCacheToken($cachePath)
    {
        if (file_exists($cachePath . '/cacheToken.txt')) {
            $res = file_get_contents($cachePath . '/cacheToken.txt');
            if (!empty($res)) {
                preg_match_all('/([a-zA-Z0-9\-_:\/.]+)\r/m',$res,$matches);
                return $matches[1];
            }
            return $res;
        }
        return null;

    }
    private function saveCacheToken($cachePath)
    {
        $token = $this -> getToken();
        $this -> authToken = $token['token'];
        $time = time();
        $ip = $this -> ip;
        $str = $this -> authToken . "\r". $this -> authSsoToken . "\r" . $time . "\r" . $ip . "\r";
        $f_handler = fopen($cachePath . '/cacheToken.txt', 'wb'); // 结果文件
        $f_handler and fwrite($f_handler, $str);
        fclose($f_handler);
    }

    protected function httpRequest($method, $url, $body = null)
    {
        $header = array();
        $ret = null;
        if ($method === 'get') {
            $ret = Client::get($url, $body, $header);
        } else if ($method === 'put') {
            $ret = Client::put($url, $body, $header);
        } else if ($method === 'post') {
            $ret = Client::post($url, $body, $header);
        } else if ($method === 'delete') {
            $ret = Client::delete($url, $body, $header);
        }

        if (!$ret->ok()) {
            return array(null, new Error($url, $ret));
        }
        $r = ($ret->body === null) ? array() : $ret->json();
        return array($r, null);
    }
}