<?php
namespace i2up\resource\v20260209;

use i2up\Http\Client;
use i2up\Http\Error;

class DiskPool {
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
     * 磁盘池 - 列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listDiskPool(array $body = array())
    {
        $url = $this -> url . '/disk_pool';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 磁盘池 - 新建
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createDiskPool(array $body = array())
    {
        $url = $this -> url . '/disk_pool';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 磁盘池 - 修改
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyDiskPool(array $body = array())
    {
        $url = $this -> url . '/disk_pool/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * 磁盘池 - 单个
     * 
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function describeDiskPool(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/disk_pool/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 磁盘池 - 删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteDiskPool(array $body = array())
    {
        $url = $this -> url . '/disk_pool';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 磁盘池 - 检查
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function checkDiskPool(array $body = array())
    {
        $url = $this -> url . '/disk_pool/check';
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