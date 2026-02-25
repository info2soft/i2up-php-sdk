<?php
namespace i2up\resource\v20260209;

use i2up\Http\Client;
use i2up\Http\Error;

class AppType {
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
     * 应用类型 - 新建
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createAppType(array $body = array())
    {
        $url = $this -> url . '/app_type';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 应用类型 - 列表
     * 
     * @return array
     */
    public function listAppType()
    {
        $url = $this -> url . '/app_type';
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 应用类型 - 单个
     * 
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function describeAppType(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/app_type/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 应用类型 - 修改
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyAppType(array $body = array())
    {
        $url = $this -> url . '/app_type/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * 应用类型 - 删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteAppType(array $body = array())
    {
        $url = $this -> url . '/app_type';
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