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
        $headers = array('Content-Type' => 'application/json', 'Accept' => 'application/json');
        $url = $this -> baseUrl . 'token';
        $body = json_encode(array('username' => $this -> username, 'pwd' => $this -> password));

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
    }

    /**
     * 注册账号
     */
    public function regAccount()
    {
    }

    /**
     * 重置密码
     */
    public function resetPwd()
    {

    }

    /**
     * check用户登录状态
     */
    public function checkLoginStatus()
    {
    }
}