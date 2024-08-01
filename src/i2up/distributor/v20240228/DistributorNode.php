<?php
namespace i2up\distributor\v20240228;

use i2up\Http\Client;
use i2up\Http\Error;

class DistributorNode {
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
     *  【字段说明】
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function readme(array $body = array())
    {
        $url = $this -> url . '/distribution/node/readme';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     *  注册（底层）
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function register(array $body = array())
    {
        $url = $this -> url . '/distribution/node';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     *  更新状态（底层）
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function updateStatus(array $body = array())
    {
        $url = $this -> url . '/distribution/node/' . $body['uuid'] . '/status';
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }
    /**
     *  列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listNode(array $body = array())
    {
        $url = $this -> url . '/distribution/node';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  状态
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listNodeStatus(array $body = array())
    {
        $url = $this -> url . '/distribution/node/status';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  获取 节点
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeNode(array $body = array())
    {
        $url = $this -> url . '/distribution/node/' . $body['uuid'];
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  设置 文件
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function fileConfig(array $body = array())
    {
        $url = $this -> url . '/distribution/node/' . $body['uuid'] . '/file_config';
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }
    /**
     *  设置 警告
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function warnConfig(array $body = array())
    {
        $url = $this -> url . '/distribution/node/' . $body['uuid'] . '/warn_config';
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }
    /**
     *  升级
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function upgrade(array $body = array())
    {
        $url = $this -> url . '/distribution/node/' . $body['uuid'] . '/upgrade';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     *  删除
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function delete(array $body = array())
    {
        $url = $this -> url . '/distribution/node/' . $body['uuid'];
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }
    /**
     *  拓扑图
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function topography(array $body = array())
    {
        $url = $this -> url . '/distribution/node/topography';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  延迟图
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function latency(array $body = array())
    {
        $url = $this -> url . '/distribution/node/latency';
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