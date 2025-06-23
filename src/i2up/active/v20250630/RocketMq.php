<?php
namespace i2up\active\v20250630;

use i2up\Http\Client;
use i2up\Http\Error;

class RocketMq {
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
     * RocketMQ同步 - 新建
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createRocketMqRule(array $body = array())
    {
        $url = $this -> url . '/rocketmq/rule';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * RocketMQ同步 - 修改
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyRocketMqRule(array $body = array())
    {
        $url = $this -> url . '/rocketmq/rule';
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * RocketMQ同步 - 删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteRocketMqRules(array $body = array())
    {
        $url = $this -> url . '/rocketmq/rule';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * RocketMQ同步 - 状态
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listRocketMqStatus(array $body = array())
    {
        $url = $this -> url . '/rocketmq/status';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * RocketMQ同步 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function stopRocketMqRule(array $body = array())
    {
        $url = $this -> url . '/rocketmq/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * RocketMQ同步 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function resumeRocketMqRule(array $body = array())
    {
        $url = $this -> url . '/rocketmq/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * RocketMQ同步 - 列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listRocketMqRules(array $body = array())
    {
        $url = $this -> url . '/rocketmq/viewtype';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * RocketMQ同步 - 单条
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeRocketMqRules(array $body = array())
    {
        $url = $this -> url . '/rocketmq/' . $body['uuid'];
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