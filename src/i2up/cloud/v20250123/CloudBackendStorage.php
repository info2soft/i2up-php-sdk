<?php
namespace i2up\cloud\v20250123;

use i2up\Http\Client;
use i2up\Http\Error;

class CloudBackendStorage {
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
     * 后端存储列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listBackendStorages(array $body = array())
    {
        $url = $this -> url . '/cloud/backend_storage';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 后端存储，获取详情
     * 
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function describeBackendStorage(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/cloud/backend_storage/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 新建后端存储
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createBackendStorage(array $body = array())
    {
        $url = $this -> url . '/cloud/backend_storage';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 修改后端存储
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyBackendStorage(array $body = array())
    {
        $url = $this -> url . '/cloud/backend_storage/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * 删除后端存储
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteBackendStorage(array $body = array())
    {
        $url = $this -> url . '/cloud/backend_storage';
        $res = $this -> httpRequest('delete', $url, $body);
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