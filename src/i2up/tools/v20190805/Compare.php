<?php

namespace i2up\tools\v20190805;

use i2up\Http\Client;
use i2up\Http\Error;

class Compare {
    private $url;
    private $logUrl;
    private $token;
    private $accessKey;
    private $secretKey;
    public function __construct($auth)
    {
        $this -> url = $auth -> ip . 'compare';
        $this -> logUrl = $auth -> ip . 'logs';
        if ($auth -> tokenAuthType) {
            $this -> token = $auth -> token();
        } else {
            $this -> accessKey = $auth -> accessKey();
            $this -> secretKey = $auth -> secretKey();
        }
    }
    /**
     * 1 新建
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createCompare(array $body = array())
    {
        $url = $this -> url;
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 2 获取单个(包括比较结果)
     *
     * @param array $body  参数详见 API 手册
     * $body['uuid'] String  必填 uuid
     * @return array
     */
    public function describeCompare(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/' . $body['uuid'];
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 2 获取比较结果详情
     *
     * @return array
     */
    public function describeCompareResults()
    {
        $url = $this -> logUrl;
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 1 获取列表
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listCompare(array $body = array())
    {
        $url = $this -> url;
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 2 状态
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listCompareStatus(array $body = array())
    {
        $url = $this -> url . '/status';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 4 操作  下载
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function downloadCompare(array $body = array())
    {
        $url = $this -> url . '/operate';
        $body['operate'] = 'download';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 3 删除
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteCompare(array $body = array())
    {
        $url = $this -> url;
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 1.1 获取结果列表（周期）
     *
     * @param array $body  参数详见 API 手册
     * $body['uuid'] String  必填 uuid
     * @return array
     */
    public function listCircleCompareResult(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/' . $body['uuid'] . '/result_list';
        unset($body['uuid']);
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