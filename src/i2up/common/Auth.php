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

final class Auth extends BaseAuth
{
    /**
     * 获取手机验证码
     */
    public function describePhoneCode()
    {
        $url = $this -> url . 'auth/getPhoneCode';
        $res = $this -> httpRequest('post', $url);
        return $res;
    }

    /**
     * 注册账号
     */
    public function regAccount()
    {
        $url = $this -> url . 'auth/register';
        $res = $this -> httpRequest('post', $url);
        return $res;
    }

    /**
     * 重置密码
     */
    public function resetPwd()
    {
        $url = $this -> url . 'auth/reset/password';
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
        $url = $this -> url . 'auth/token';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
}
