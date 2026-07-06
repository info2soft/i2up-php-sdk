<?php
namespace i2up\recycleBin\v20260626;

use i2up\Http\Client;
use i2up\Http\Error;

class RecycleBin {
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
     * 回收站 - 获取列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listRecycleBin(array $body = array())
    {
        $url = $this -> url . '/recycle_bin';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 回收站 - 获取配置
     * 
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function describeRecycleBin(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/recycle_bin/' . $body['uuid'] . '/info';
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url);
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