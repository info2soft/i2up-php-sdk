<?php
namespace i2up\resource\v20250123;

use i2up\Http\Client;
use i2up\Http\Error;

class StorageUnit {
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
     * 存储单元 - 准备(查看容量)
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function getStorageUnitBkCapacity(array $body = array())
    {
        $url = $this -> url . '/storage_unit/capacity';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 存储单元 - 获取驱动数量
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function getStorageUnitDrivers(array $body = array())
    {
        $url = $this -> url . '/storage_unit/drivers';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 存储单元 - 新建
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createStorageUnit(array $body = array())
    {
        $url = $this -> url . '/storage_unit';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 存储单元 - 修改
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyStorageUnit(array $body = array())
    {
        $url = $this -> url . '/storage_unit/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * 存储单元 - 单个
     * 
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function describeStorageUnit(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/storage_unit/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 存储单元 - 列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listStorageUnit(array $body = array())
    {
        $url = $this -> url . '/storage_unit';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 存储单元 - 删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteStorageUnit(array $body = array())
    {
        $url = $this -> url . '/storage_unit';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 存储单元 - 状态
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listStorageUnitStatus(array $body = array())
    {
        $url = $this -> url . '/storage_unit/status';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 存储单元 - 提交前检查
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function chkStorageUnitRules(array $body = array())
    {
        $url = $this -> url . '/storage_unit/rules_chk';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 存储单元组 - 新建
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createStorageUnitGroup(array $body = array())
    {
        $url = $this -> url . '/storage_unit_group';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 存储单元组 - 修改
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyStorageUnitGroup(array $body = array())
    {
        $url = $this -> url . '/storage_unit_group/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * 存储单元组 - 单个
     * 
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function describeStorageUnitGroup(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/storage_unit_group/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 存储单元组 - 列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listStorageUnitGroup(array $body = array())
    {
        $url = $this -> url . '/storage_unit_group';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 存储单元组 - 删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteStorageUnitGroup(array $body = array())
    {
        $url = $this -> url . '/storage_unit_group';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 存储单元 - 可用并发数
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function getStorageUnitAvailableConcurrent(array $body = array())
    {
        $url = $this -> url . '/storage_unit/available_concurrent';
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