<?php

namespace i2up\resource\v20190805;

use i2up\Http\Client;
use i2up\Http\Error;
use i2up\util\RSA;

class Cluster {
    private $url;
    private $token;
    private $accessKey;
    private $secretKey;
    public function __construct($auth)
    {
        $this -> url = $auth -> ip . 'cls';
        if ($auth -> tokenAuthType) {
            $this -> token = $auth -> token();
        } else {
            $this -> accessKey = $auth -> accessKey();
            $this -> secretKey = $auth -> secretKey();
        }
    }
    /**
     * 1 集群认证
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function authCls(array $body = array())
    {
        if (isset($body['os_pwd'])) {
            $RSA = new RSA();
            $body['os_pwd'] = $RSA -> encrypt_with_public_key($body['os_pwd']);
        }
        $url = $this -> url . '/auth';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 2 集群节点验证
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function verifyClsNode(array $body = array())
    {
        $url = $this -> url . '/node_verify';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 1 新建集群
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createCls(array $body = array())
    {
        $url = $this -> url;
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 2 获取单个集群
     *
     * @param array $body  参数详见 API 手册
     * $body['uuid'] String  必填 uuid
     * @return array
     */
    public function describeCls(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/' . $body['uuid'];
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 3 修改集群
     *
     * @param array $body  参数详见 API 手册
     * $body['uuid'] String  必填 uuid
     * @return array
     */
    public function modifyCls(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * 1 获取集群列表（基本信息）
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listCls(array $body = array())
    {
        $url = $this -> url;
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 2 集群状态
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listClsStatus(array $body = array())
    {
        $url = $this -> url . '/status';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 3 删除集群
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteCls(array $body = array())
    {
        $url = $this -> url;
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 4 集群操作
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function clsDetail(array $body = array())
    {
        $url = $this -> url . '/operate';
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