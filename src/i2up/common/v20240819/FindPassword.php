<?php
namespace i2up\common\v20240819;

use i2up\Http\Client;
use i2up\Http\Error;

class FindPassword {
    private $url;
    private $token;
    private $accessKey;
    private $secretKey;

    public function __construct($auth)
    {
        $this -> url = $auth -> ip;
        if ($auth -> tokenAuthType) {
            $this -> token = $auth -> token();
        } else {
            $this -> accessKey = $auth -> accessKey();
            $this -> secretKey = $auth -> secretKey();
        }
    }

    /**
     * 判断账号是否存在
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function isAccountExists(array $body = array())
    {
        $url = $this -> url . '/find_password/account';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 发送验证码
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function sendVerificationCode(array $body = array())
    {
        $url = $this -> url . '/find_password/account_verify';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 验证码校验
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function verifyVerficationCode(array $body = array())
    {
        $url = $this -> url . '/find_password/verification_code_verify';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 密码重置
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function resetPassword(array $body = array())
    {
        $url = $this -> url . '/find_password/reset_password';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    private function httpRequest($method, $url, $body = null)
    {
        if (isset($this -> token)) {
            $header = array('Authorization' => $this -> token);
        } else if (isset($this -> accessKey)) {
            $header = array(
                'ACCESS-KEY' => $this -> accessKey,
                'SECRET-KEY' => $this -> secretKey
            );
        } else {
            $header = array();
        }
        $ret = null;
        
        if ($method === 'get') {
            $ret = Client::get($url, $body, $header);
        } else if ($method === 'post') {
            $ret = Client::post($url, $body, $header);
        }
        
        if (!$ret->ok()) {
            return array(null, new Error($url, $ret));
        }
        $r = ($ret->body === null) ? array() : $ret->json();
        $r['ret'] = $ret->statusCode;
        return array($r, null);
    }
}