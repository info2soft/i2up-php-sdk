<?php

namespace i2up\upMonitor\v20190805;

use i2up\Config;
use i2up\Http\Client;
use i2up\Http\Error;

class UpMonitor {
    private $url;
    private $token;
    private $accessKey;
    private $secretKey;
    public function __constructor($auth)
    {
        $this -> url = Config::baseUrl . 'up_monitor';
        if ($auth -> tokenAuthType) {
            $this -> token = $auth -> token();
        } else {
            $this -> accessKey = $auth -> accessKey();
            $this -> secretKey = $auth -> secretKey();
        }
    }
    /**
     * 子平台 - 认证
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function authUpMonitor(array $body = array())
    {
        $url = $this -> url . '/auth';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 子平台 - 获取子平台token
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeUpMonitorToken(array $body = array())
    {
        $url = $this -> url . '/token';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 子平台 - 新建
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createUpMonitor(array $body = array())
    {
        $url = $this -> url;
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 子平台 - 修改
     *
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyUpMonitor(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * 子平台 - 获取单个
     *
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeUpMonitor(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/' . $body['uuid'];
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 子平台 - 获取列表
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listUpmonitor(array $body = array())
    {
        $url = $this -> url;
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 子平台 - 刷新
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function refreshUpMonitor(array $body = array())
    {
        $url = $this -> url . '/operate';
        $body['operate'] = 'refresh';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 子平台 - 状态
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listUpMonitorStatus(array $body = array())
    {

        $url = $this -> url . '/status';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 子平台 - 删除
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteUpMonitor(array $body = array())
    {
        $url = $this -> url;
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