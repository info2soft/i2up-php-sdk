<?php
namespace i2up\retentionPolicy\v20240819;

use i2up\Http\Client;
use i2up\Http\Error;

class RetentionPolicy {
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
     * 全局保留期限设置 - 获取列表
     * 
     * @return array
     */
    public function listRetentionPolicy()
    {
        $url = $this -> url . '/retention_policy';
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 全局保留期限设置 - 修改保留期限
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyRetentionPoliciy(array $body = array())
    {
        $url = $this -> url . '/retention_policy';
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
        }
        
        if (!$ret->ok()) {
            return array(null, new Error($url, $ret));
        }
        $r = ($ret->body === null) ? array() : $ret->json();
        $r['ret'] = $ret->statusCode;
        return array($r, null);
    }
}