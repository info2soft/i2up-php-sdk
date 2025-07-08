<?php
namespace i2up\resource\v20250630;

use i2up\Http\Client;
use i2up\Http\Error;

class DtoGateway {
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
     * 对象存储网关 - 新建
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createDtoGateway(array $body = array())
    {
        $url = $this -> url . '/vers/v3/dto_gateway';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 对象存储网关 - 修改
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyDtoGateway(array $body = array())
    {
        $url = $this -> url . '/vers/v3/dto_gateway/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * 对象存储网关 - 获取单条
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeDtoGateway(array $body = array())
    {
        $url = $this -> url . '/vers/v3/dto_gateway/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 对象存储网关 - 列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listDtoGateway(array $body = array())
    {
        $url = $this -> url . '/vers/v3/dto_gateway';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 对象存储网关 - 删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteDtoGateway(array $body = array())
    {
        $url = $this -> url . '/vers/v3/dto_gateway';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 对象存储网关 - 重置AK/SK
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function resetDtoGatewayAccessKey(array $body = array())
    {
        $url = $this -> url . '/vers/v3/dto_gateway/reset_key';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 对象存储网关 - 获取region绑定列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listDtoGatewayRegions(array $body = array())
    {
        $url = $this -> url . '/vers/v3/dto_gateway/region';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 对象存储网关 - 状态
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function getDtoGatewayStatus(array $body = array())
    {
        $url = $this -> url . '/vers/v3/dto_gateway/status';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 对象存储网关证书管理 - 列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listDtoGatewayCert(array $body = array())
    {
        $url = $this -> url . '/vers/v3/dto_gateway_cert';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 对象存储网关证书管理 - 删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteDtoGatewayCert(array $body = array())
    {
        $url = $this -> url . '/vers/v3/dto_gateway_cert';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 对象存储网关证书管理 - 新建
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createDtoGatewayCert(array $body = array())
    {
        $url = $this -> url . '/vers/v3/dto_gateway_cert';
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