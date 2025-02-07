<?php
namespace i2up\resource\v20250123;

use i2up\Http\Client;
use i2up\Http\Error;

class DtoStorage {
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
     * 存储 - 新建
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createDtoStorage(array $body = array())
    {
        $url = $this -> url . '/dto/storage';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 存储 - 修改
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyDtoStorage(array $body = array())
    {
        $url = $this -> url . '/dto/storage/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * 存储 - 单个
     * 
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function describeDtoStorage(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/dto/storage/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 存储 - 列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listDtoStorage(array $body = array())
    {
        $url = $this -> url . '/dto/storage';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 存储 - 删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteDtoStorage(array $body = array())
    {
        $url = $this -> url . '/dto/storage';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 存储类别 - 修改 （待定）
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyDtoStorageType(array $body = array())
    {
        $url = $this -> url . '/dto/storage/storage_type';
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * 获取桶列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listBuckets(array $body = array())
    {
        $url = $this -> url . '/dto/storage/bucket_list';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 创建桶
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createBucket(array $body = array())
    {
        $url = $this -> url . '/dto/storage/bucket';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 存储 - 状态
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function getDtoStorageStatus(array $body = array())
    {
        $url = $this -> url . '/dto/storage/status';
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