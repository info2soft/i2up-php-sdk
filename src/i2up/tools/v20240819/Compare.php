<?php
namespace i2up\tools\v20240819;

use i2up\Http\Client;
use i2up\Http\Error;

class Compare {
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
     * 1 单体-1 新建
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createCompare(array $body = array())
    {
        $url = $this -> url . '/compare';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 单体-1 修改
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyCompare(array $body = array())
    {
        $url = $this -> url . '/compare/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * 1 单体-2 获取单个(包括比较结果)
     * 
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function describeCompare(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/compare/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 2 列表-1 获取列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listCompare(array $body = array())
    {
        $url = $this -> url . '/compare';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 2 列表-1.1 获取结果列表（周期）
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listCircleCompareResult(array $body = array())
    {
        $url = $this -> url . '/compare/' . $body['uuid'] . '/result_list';
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 2 列表-2 状态
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listCompareStatus(array $body = array())
    {
        $url = $this -> url . '/compare/status';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 2 列表-4 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function startCompare(array $body = array())
    {
        $url = $this -> url . '/compare/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 2 列表-4 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function stopCompare(array $body = array())
    {
        $url = $this -> url . '/compare/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 2 列表-4 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function startImmediatelyCompare(array $body = array())
    {
        $url = $this -> url . '/compare/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 2 列表-4 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function downloadCompare(array $body = array())
    {
        $url = $this -> url . '/compare/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 2 列表-3 删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteCompare(array $body = array())
    {
        $url = $this -> url . '/compare';
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