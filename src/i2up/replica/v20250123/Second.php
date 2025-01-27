<?php
namespace i2up\replica\v20250123;

use i2up\Http\Client;
use i2up\Http\Error;

class Second {
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
     * 二级副本 - 新建
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createSecondReplica(array $body = array())
    {
        $url = $this -> url . '/replica/second';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 二级副本 - 获取列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listSecondReplica(array $body = array())
    {
        $url = $this -> url . '/replica/second';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 二级副本 - 获取详情
     * 
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function describeSecondReplica(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/replica/second/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 二级副本 - 修改
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifySecondReplica(array $body = array())
    {
        $url = $this -> url . '/replica/second';
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * 二级副本 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function startSecondReplica(array $body = array())
    {
        $url = $this -> url . '/replica/second/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 二级副本 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function stopSecondReplica(array $body = array())
    {
        $url = $this -> url . '/replica/second/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 二级副本 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function startVmSecondReplica(array $body = array())
    {
        $url = $this -> url . '/replica/second/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 二级副本 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function stopVmSecondReplica(array $body = array())
    {
        $url = $this -> url . '/replica/second/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 二级副本 - 删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteSecondReplica(array $body = array())
    {
        $url = $this -> url . '/replica/second';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 二级副本 - 获取状态
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listSecondReplicaStatus(array $body = array())
    {
        $url = $this -> url . '/replica/second/status';
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
        } else if ($method === 'put') {
            $ret = Client::put($url, $body, $header);
        } else if ($method === 'delete') {
            $ret = Client::delete($url, $body, $header);
        }
        
        if (!$ret->ok()) {
            return array(null, new Error($url, $ret));
        }
        $r = ($ret->body === null) ? array() : $ret->json();
        $r['ret'] = $ret->statusCode;
        return array($r, null);
    }
}