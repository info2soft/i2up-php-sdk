<?php
namespace i2up\nas\v20240228;

use i2up\Http\Client;
use i2up\Http\Error;

class Nas {
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
     *  组 新建
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function create(array $body = array())
    {
        
        $url = $this -> url . '/nas/sync';
        
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     *  组 获取单个
     * 
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function describe(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/nas/sync/group/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url);
        return $res;
    }
    /**
     *  组 编辑
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modify(array $body = array())
    {
        
        $url = $this -> url . '/nas/sync/group/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }
    /**
     *  获取 列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listNas(array $body = array())
    {
        
        $url = $this -> url . '/nas/sync';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  获取 状态
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listNasStatus(array $body = array())
    {
        
        $url = $this -> url . '/nas/sync/status';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  操作：启动
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function startNas(array $body = array())
    {
        
        $url = $this -> url . '/nas/sync/operate';
        
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     *  操作：停止
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function stopNas(array $body = array())
    {

        $url = $this -> url . '/nas/sync/operate';

        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     *  删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function delete(array $body = array())
    {
        
        $url = $this -> url . '/nas/sync';
        
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
        return array($r, null);
    }
}