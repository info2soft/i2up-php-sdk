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
    public function __construct($username, $pwd)
    {
        $this -> username = $username;
        $this -> password = $pwd;
        $this -> baseUrl = Config::baseUrl . 'auth/';
        $this -> authToken = $this -> getToken();
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
        if ($code === 0) {
            $token = $r['token'];
        } else {
            $token = '';
        }
        return $token;
    }
    public function token() {
        return $this -> authToken;
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
        if (isset($this -> token)) {
            $header = array('Authorization' => $this -> token);
        } else {
            $header = array();
        }
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