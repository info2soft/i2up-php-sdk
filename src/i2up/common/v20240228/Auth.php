<?php
namespace i2up\common\v20240228;

use i2up\common\BaseAuth;
use i2up\Http\Client;
use i2up\Http\Error;

class Auth extends BaseAuth {
    /**
     * 获取手机、邮件、图片验证码
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeVerificationCode(array $body = array())
    {
        
        $url = $this -> url . 'auth/verification_code';
        
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     * 检查用户是否需要验证码
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function checkCaptcha(array $body = array())
    {
        
        $url = $this -> url . 'auth/check_captcha';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * check用户登录状态
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function checkLoginStatus(array $body = array())
    {
        
        $url = $this -> url . 'auth/token';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     * 是否超时或账号失效
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function heartbeat(array $body = array())
    {
        
        $url = $this -> url . 'auth/heartbeat';
        
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }
}