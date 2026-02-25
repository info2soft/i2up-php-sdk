<?php
namespace i2up\resource\v20260209;

use i2up\Http\Client;
use i2up\Http\Error;

class NodeDbConfig {
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
     * 数据库配置信息-发现实例
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function nodeGetDatabaseInstances(array $body = array())
    {
        $url = $this -> url . '/vers/v3/node/db_instances';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 数据库信息配置 - 新建
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createNodeDbConfig(array $body = array())
    {
        $url = $this -> url . '/vers/v3/node/db_config';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 数据库信息配置 - 列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listNodeDbConfig(array $body = array())
    {
        $url = $this -> url . '/vers/v3/node/db_config';
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