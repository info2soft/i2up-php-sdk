<?php
namespace i2up\common\v20250123;

use i2up\Http\Client;
use i2up\Http\Error;

class Auth {
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
     * 短信-1.时间戳
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeTimeStamp(array $body = array())
    {
        $url = $this -> url . '/auth/t';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 短信-2.生成短信、邮件、图片验证码关联信息
     * 
     * @return array
     */
    public function authGenerate()
    {
        $url = $this -> url . '/auth/generate';
        $res = $this -> httpRequest('post', $url);
        return $res;
    }

    /**
     * auth-获取手机、邮件、图片验证码
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeVerificationCode(array $body = array())
    {
        $url = $this -> url . '/auth/verification_code';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * auth-检查用户是否需要验证码（GET）
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function checkCaptcha(array $body = array())
    {
        $url = $this -> url . '/auth/check_captcha';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * auth-检查用户是否需要验证码（POST）
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function checkCaptcha(array $body = array())
    {
        $url = $this -> url . '/auth/check_captcha';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * auth-获取token
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function token(array $body = array())
    {
        $url = $this -> url . '/auth/token';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * auth-双因子认证
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function twoFactorAuth(array $body = array())
    {
        $url = $this -> url . '/auth/two_factor';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * auth-重置密码
     * 
     * @return array
     */
    public function resetPwd()
    {
        $url = $this -> url . '/auth/reset_password';
        $res = $this -> httpRequest('post', $url);
        return $res;
    }

    /**
     * auth-check用户登录状态
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function checkLoginStatus(array $body = array())
    {
        $url = $this -> url . '/auth/token';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * auth-注册账号(不开放)
     * 
     * @return array
     */
    public function regAccount()
    {
        $url = $this -> url . '/auth/register';
        $res = $this -> httpRequest('post', $url);
        return $res;
    }

    /**
     * auth-是否超时或账号失效
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function heartbeat(array $body = array())
    {
        $url = $this -> url . '/auth/heartbeat';
        $res = $this -> httpRequest('put', $url, $body);
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
        } else if ($method === 'put') {
            $ret = Client::put($url, $body, $header);
        }
        
        if (!$ret->ok()) {
            return array(null, new Error($url, $ret));
        }
        $r = ($ret->body === null) ? array() : $ret->json();
        $r['ret'] = $ret->statusCode;
        return array($r, null);
    }
}