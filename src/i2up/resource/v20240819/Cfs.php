<?php
namespace i2up\resource\v20240819;

use i2up\Http\Client;
use i2up\Http\Error;

class Cfs {
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
     * 新建
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createCfs(array $body = array())
    {
        $url = $this -> url . '/cfs';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 修改
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyCfs(array $body = array())
    {
        $url = $this -> url . '/cfs/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * 获取详情
     * 
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function describeCfs(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/cfs/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listCfs(array $body = array())
    {
        $url = $this -> url . '/cfs';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteCfs(array $body = array())
    {
        $url = $this -> url . '/cfs';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 获取状态
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listCfsStatus(array $body = array())
    {
        $url = $this -> url . '/cfs/status';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function maintainCfs(array $body = array())
    {
        $url = $this -> url . '/cfs/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 验证连接
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function testConnect(array $body = array())
    {
        $url = $this -> url . '/cfs/test_connect';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 获取集群可用区、文件系统列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listCfsZoneFs(array $body = array())
    {
        $url = $this -> url . '/cfs/list_zone_fs';
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