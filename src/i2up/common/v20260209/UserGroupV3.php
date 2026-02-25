<?php
namespace i2up\common\v20260209;

use i2up\Http\Client;
use i2up\Http\Error;

class UserGroupV3 {
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
     * 用户组 - 修改授权绑定
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyUserGroupResBind(array $body = array())
    {
        $url = $this -> url . '/vers/v3/user_group/res_bind';
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * 用户组 - 获取授权绑定关系
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listUserGroupResBind(array $body = array())
    {
        $url = $this -> url . '/vers/v3/user_group/res_bind';
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