<?php
/**
 * Create by PhpStorm
 * User: Lis
 * Date: 2020/10/9
 * Time: 16:25
 */

namespace i2up\resource\v20190805;

use i2up\Config;
use i2up\Http\Client;
use i2up\Http\Error;

class StoragePool {
    private $url;
    private $token;
    private $accessKey;
    private $secretKey;
    public function __constructor($auth)
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
     * 新建存储池
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createStoragePool(array $body = array())
    {
        $url = $this -> url . 'storage_pool';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 修改存储池
     *
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyStoragePool(array $body = array())
    {
        $url = $this -> url . 'storage_pool/' . $body['uuid'] . '';
        unset($body['uuid']);
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * 查看列表
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function storagePoolList(array $body = array())
    {
        $url = $this -> url . 'storage_pool';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 获取单个
     *
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function describeStoragePool(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . 'storage_pool/' . $body['uuid'] . '';
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 删除
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteStoragePool(array $body = array())
    {
        $url = $this -> url . 'storage_pool';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 获取状态
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listStoragePoolStatus(array $body = array())
    {
        $url = $this -> url . 'storage_pool/status';
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
        } else if ($method === 'put') {
            $ret = Client::put($url, $body, $header);
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