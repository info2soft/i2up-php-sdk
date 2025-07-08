<?php
namespace i2up\stream\v20250630;

use i2up\Http\Client;
use i2up\Http\Error;

class MaskAlgo {
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
     * 脱敏算法 - 新建
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createAlgo(array $body = array())
    {
        $url = $this -> url . '/vers/v3/mask/algo';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 脱敏算法 - 列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listAlgos(array $body = array())
    {
        $url = $this -> url . '/vers/v3/mask/algo';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 脱敏算法 - 单个
     * 
     * @body['id'] int  必填 ID
     * @return array
     */
    public function descriptAlgo(array $body = array())
    {
        if (empty($body) || !isset($body['id'])) return $body;
        $url = $this -> url . '/vers/v3/mask/algo/' . $body['id'];
        unset($body['id']);
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 算法测试
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function algoTest(array $body = array())
    {
        $url = $this -> url . '/vers/v3/mask/algo/test';
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