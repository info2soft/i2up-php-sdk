<?php
namespace i2up\active\v20250123;

use i2up\Http\Client;
use i2up\Http\Error;

class HeteroConsumer {
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
     * 异构-消费-新建
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createConsumerRule(array $body = array())
    {
        $url = $this -> url . '/vers/v3/consumer_rule';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 异构-消费-修改
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyConsumerRule(array $body = array())
    {
        $url = $this -> url . '/vers/v3/consumer_rule';
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * 异构-消费-删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteConsumerRules(array $body = array())
    {
        $url = $this -> url . '/vers/v3/consumer_rule';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 异构-消费-状态
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listConsumerStatus(array $body = array())
    {
        $url = $this -> url . '/vers/v3/consumer_rule/status';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 异构-消费-操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function stopConsumerRule(array $body = array())
    {
        $url = $this -> url . '/vers/v3/consumer_rule/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 异构-消费-操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function resumeConsumerRule(array $body = array())
    {
        $url = $this -> url . '/vers/v3/consumer_rule/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 异构-消费-获取规则列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listConsumerRules(array $body = array())
    {
        $url = $this -> url . '/vers/v3/consumer_rule';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 异构-消费-获取单条规则
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeConsumerRules(array $body = array())
    {
        $url = $this -> url . '/vers/v3/consumer_rule/' . $body['uuid'];
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