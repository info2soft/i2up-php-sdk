<?php
namespace i2up\common\v20260209;

use i2up\Http\Client;
use i2up\Http\Error;

class Permission {
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
     * 获取权限列表
     * 
     * @return array
     */
    public function listPermission()
    {
        $url = $this -> url . '/permission';
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 权限 - 类别
     * 
     * @return array
     */
    public function listCategory()
    {
        $url = $this -> url . '/permission/category';
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 权限 - 类别权限
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listCatPerms(array $body = array())
    {
        $url = $this -> url . '/permission/cat_perms';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 权限 - 类别权限（9版本双门户）
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listCatPerms9(array $body = array())
    {
        $url = $this -> url . '/permission/cat_perms9';
        $res = $this -> httpRequest('get', $url, $body);
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
        }
        
        if (!$ret->ok()) {
            return array(null, new Error($url, $ret));
        }
        $r = ($ret->body === null) ? array() : $ret->json();
        $r['ret'] = $ret->statusCode;
        return array($r, null);
    }
}