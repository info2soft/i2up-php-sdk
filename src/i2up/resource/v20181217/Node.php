<?php

namespace i2up\resource\v20181217;

use i2up\Http\Client;
use i2up\Http\Error;
use i2up\util\RSA;

class Node {
    private $url;
    private $token;
    public function __construct($auth)
    {
        $this -> url = $auth -> ip . 'node';
        $this -> token = $auth -> token();
    }
    /**
     * 获取节点容量
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function checkCapacity(array $body = array())
    {
        $url = $this -> url . '/check_capacity';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 获取节点卷组列表
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listVg(array $body = array())
    {
        $url = $this -> url . '/vg';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 节点认证
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function authNode(array $body = array())
    {
        if (isset($body['os_pwd'])) {
            $RSA = new RSA();
            $body['os_pwd'] = $RSA ->encrypt_with_public_key($body['os_pwd']);
        }
        $url = $this -> url . '/auth';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 检查节点在线
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function checkNodeOnline(array $body = array())
    {

        $url = $this -> url . '/hello';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 新建节点
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createNode(array $body = array())
    {
        $url = $this -> url;
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 修改节点
     *
     * @param array $body  参数详见 API 手册
     * $body['uuid'] String  必填 uuid
     * @return array
     */
    public function modifyNode(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/' . $body['uuid'];
        unset($body['uuid']);
        if (isset($body['os_pwd'])) {
            $RSA = new RSA();
            $body['os_pwd'] = $RSA ->encrypt_with_public_key($body['os_pwd']);
        }
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * 获取单个节点
     *
     * @param array $body  参数详见 API 手册
     * $body['uuid'] String  必填 uuid
     * @return array
     */
    public function describeNode(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/' . $body['uuid'];
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 新建节点 - 批量
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createBatchNode(array $body = array())
    {
        if (isset($body['os_pwd'])) {
            $RSA = new RSA();
            $body['os_pwd'] = $RSA ->encrypt_with_public_key($body['os_pwd']);
        }
        $url = $this -> url . '/batch';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 获取节点存储信息
     *
     * @param array $body  参数详见 API 手册
     * @body['uuid'] String  必填 uuid
     * @return array
     */
    public function describeDeviceInfo(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/' . $body['uuid'] . '/device_info';
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 获取节点列表
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listNode(array $body = array())
    {
        $url = $this -> url;
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 节点操作
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function upgradeNode(array $body = array())
    {
        $url = $this -> url . '/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 节点状态
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listNodeStatus(array $body = array())
    {
        $url = $this -> url . '/status';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 删除节点
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteNode(array $body = array())
    {
        $url = $this -> url;
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }
    private function httpRequest($method, $url, $body = null)
    {
        if (isset($this -> token)) {
            $header = array('Authorization' => $this -> token);
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