<?php
namespace i2up\resource\v20240819;

use i2up\Http\Client;
use i2up\Http\Error;

class Npsvr {
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
     * npsvr - 新建
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createNpsvr(array $body = array())
    {
        $url = $this -> url . '/vp/npsvr';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * npsvr - 认证
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function authNpsvr(array $body = array())
    {
        $url = $this -> url . '/vp/npsvr/auth';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * npsvr - 列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listNpsvr(array $body = array())
    {
        $url = $this -> url . '/vp/npsvr';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * npsvr - 修改
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyNpsvr(array $body = array())
    {
        $url = $this -> url . '/vp/npsvr/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * npsvr - 删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteNpsvr(array $body = array())
    {
        $url = $this -> url . '/vp/npsvr';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * npsvr - 状态
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function getNpsvrStatus(array $body = array())
    {
        $url = $this -> url . '/vp/npsvr/status';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * npsvr - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function npsvrOperate(array $body = array())
    {
        $url = $this -> url . '/vp/npsvr/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * npsvr - 获取配置列表
     * 
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function listConfigItems(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/vp/npsvr/' . $body['uuid'] . '/list_config_items';
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * npsvr - 更新配置列表
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function updateConfigItems(array $body = array())
    {
        $url = $this -> url . '/vp/npsvr/' . $body['uuid'] . '/update_config_items';
        unset($body['uuid']);
        $res = $this -> httpRequest('put', $url, $body);
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