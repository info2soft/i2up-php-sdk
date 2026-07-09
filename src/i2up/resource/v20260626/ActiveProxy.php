<?php
namespace i2up\resource\v20260626;

use i2up\Http\Client;
use i2up\Http\Error;

class ActiveProxy {
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
     * proxy集群管理 - 新建
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createActiveProxy(array $body = array())
    {
        $url = $this -> url . '/vers/v3/stream/proxy';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * proxy集群管理 - 查看
     * 
     * @return array
     */
    public function describActiveProxy()
    {
        $url = $this -> url . '/vers/v3/stream/proxy';
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * proxy集群管理 - 列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listActiveProxy(array $body = array())
    {
        $url = $this -> url . '/vers/v3/active_proxy';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * proxy集群管理 - 状态
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listActiveProxyStatus(array $body = array())
    {
        $url = $this -> url . '/vers/v3/active_proxy/status';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * proxy集群管理 - 测试连接
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function connectActiveProxy(array $body = array())
    {
        $url = $this -> url . '/vers/v3/stream/check_proxy';
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