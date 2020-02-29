<?php
/**
 * Created by PhpStorm.
 * User: SERVER05
 * Date: 2018/12/7
 * Time: 13:43
 */

namespace i2up\common;

use i2up\Http\Client;
use i2up\Http\Error;
use i2up\Config;

final class Auth
{
    private $username;
    private $password;
    private $baseUrl;
    private $authToken;
    private $authSsoToken;
    private $accessKey;
    private $secretKey;
    public $tokenAuthType;
    public $ip;
    public function __construct(array $params = array())
    {
        $this -> ip = $params['ip'];
        $this -> baseUrl = $params['ip'] . 'auth/';
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
        $url = $this -> baseUrl . 'token';
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
            $arr['sso_token'] = $r['sso_token'];
        } else {
            $arr['token'] = '';
            $arr['sso_token'] = '';
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
        $this -> authSsoToken = $token['sso_token'];
        $time = time();
        $ip = $this -> ip;
        $str = $this -> authToken . "\r". $this -> authSsoToken . "\r" . $time . "\r" . $ip . "\r";
        $f_handler = fopen($cachePath . '/cacheToken.txt', 'wb'); // 结果文件
        $f_handler and fwrite($f_handler, $str);
        fclose($f_handler);
    }

    /**
     * 获取手机验证码
     */
    public function describePhoneCode()
    {
        $url = $this -> baseUrl . 'getPhoneCode';
        $res = $this -> httpRequest('post', $url);
        return $res;
    }

    /**
     * 注册账号
     */
    public function regAccount()
    {
        $url = $this -> baseUrl . 'register';
        $res = $this -> httpRequest('post', $url);
        return $res;
    }

    /**
     * 重置密码
     */
    public function resetPwd()
    {
        $url = $this -> baseUrl . 'reset/password';
        $res = $this -> httpRequest('post', $url);
        return $res;
    }

    /**
     * check用户登录状态
     * @param array $body
     * $body['access_token'] String  POST auth/token 返回的sso_token
     * @return array
     */
    public function checkLoginStatus(array $body = array())
    {
        $url = $this -> baseUrl . 'token';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    private function httpRequest($method, $url, $body = null)
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