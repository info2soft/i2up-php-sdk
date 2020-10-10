<?php
/**
 * Create by PhpStorm
 * User: Lis
 * Date: 2020/10/9
 * Time: 9:36
 */

namespace i2up\authorization\v20201009;

use i2up\Config;
use i2up\Http\Client;
use i2up\Http\Error;

class Authorization {
    private $url;
    private $token;
    private $accessKey;
    private $secretKey;
    public function __constructor($auth)
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
     *  用户列表
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function ListAuthorizationUser(array $body = array())
    {
        $url = $this -> url . 'authorization/user';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     *  用户授权情况
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function getAuthorizationUserBind(array $body = array())
    {
        $url = $this -> url . 'authorization/user_bind';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     *  更新用户授权
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function updateAuthorizationUserBind(array $body = array())
    {
        $url = $this -> url . 'authorization/user_bind';
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     *  资源授权情况
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function getAuthorizationResBind(array $body = array())
    {
        $url = $this -> url . 'authorization/res_bind';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     *  更新资源授权
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function updateAuthorizationResBind(array $body = array())
    {
        $url = $this -> url . 'authorization/res_bind';
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * 获取绑定
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function getAuthorizationBind(array $body = array())
    {
        $url = $this -> url . 'authorization/bind';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 更新绑定
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function updateAuthorizationBind(array $body = array())
    {
        $url = $this -> url . 'authorization/bind';
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