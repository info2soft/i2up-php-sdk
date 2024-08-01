<?php
namespace i2up\resource\v20240228;

use i2up\Http\Client;
use i2up\Http\Error;

class ReCyle {
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
     * 获取列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listRecycle(array $body = array())
    {
        
        $url = $this -> url . 'recycle';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     * 清理数据
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function cleanRecycle(array $body = array())
    {
        
        $url = $this -> url . 'recycle/operate';
        
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     * 删除记录
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteRecycle(array $body = array())
    {
        
        $url = $this -> url . 'recycle';
        
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }
    /**
     * 获取状态
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listRecycleStatus(array $body = array())
    {
        
        $url = $this -> url . 'recycle/status';
        
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