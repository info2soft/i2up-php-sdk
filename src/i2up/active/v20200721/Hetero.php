<?php
/**
 * Create by PhpStorm
 * User: Lis
 * Date: 2020/8/11
 * Time: 15:12
 */

namespace i2up\active\v20200721;

use i2up\Http\Client;
use i2up\Http\Error;

class Hetero {
    private $url;
    private $token;
    private $accessKey;
    private $secretKey;
    public function __constructor($auth)
    {
        $this -> url = $auth -> ip . 'hetero';
        if ($auth -> tokenAuthType) {
            $this -> token = $auth -> token();
        } else {
            $this -> accessKey = $auth -> accessKey();
            $this -> secretKey = $auth -> secretKey();
        }
    }

    /**
     * 异构 - 新建
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createHeteroRule(array $body = array())
    {
        $url = $this -> url . '/rule';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 异构 - 删除
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function tempFuncName(array $body = array())
    {
        $url = $this -> url;
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 异构 - 获取列表
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listHeteroRule(array $body = array())
    {
        $url = $this -> url . '/rule';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 查看topic
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createHeteroTopic(array $body = array())
    {
        $url = $this -> url . '/topic';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 查看消费者
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createConsumer(array $body = array())
    {
        $url = $this -> url . '/view_consumer';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 消费
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function consumer(array $body = array())
    {
        $url = $this -> url . '/consumer';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }


    /**
     * 消费-新建
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createConsumerRule(array $body = array())
    {
        $url = $this -> url . '/consumer/rule';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 消费-修改
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyConsumerRule(array $body = array())
    {
        $url = $this -> url . '/consumer/rule';
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * 消费-删除
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteConsumerRules(array $body = array())
    {
        $url = $this -> url . '/consumer/rule';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 消费-状态
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listConsumerStatus(array $body = array())
    {
        $url = $this -> url . '/consumer/status';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 消费 - 操作 stop
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function stopConsumerRule(array $body = array())
    {
        $url = $this -> url . '/consumer/operate';
        $body['opearte'] = 'stop';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 消费-获取规则列表
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listConsumerRules(array $body = array())
    {
        $url = $this -> url . '/consumer/viewtype';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 消费-获取单条规则
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeConsumerRules(array $body = array())
    {
        $url = $this -> url . '/consumer/rule';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }


    /**
     * 拓扑-新建
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createHeteroGraph(array $body = array())
    {
        $url = $this -> url . '/graph';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 拓扑-添加
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function addHeteroGraph(array $body = array())
    {
        $url = $this -> url . '/graph/add';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 拓扑-获取列表
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listHeteroGraph(array $body = array())
    {
        $url = $this -> url . '/graph/list';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 拓扑-运行拓扑
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function runHeteroGraph(array $body = array())
    {
        $url = $this -> url . '/graph/run';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 拓扑-停止拓扑
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function stopHeteroGraph(array $body = array())
    {
        $url = $this -> url . '/graph/stop';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 拓扑-状态
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listGraphStatus(array $body = array())
    {
        $url = $this -> url . '/graph/status';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 拓扑-删除拓扑
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteHeteroGraph(array $body = array())
    {
        $url = $this -> url . '/graph';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 拓扑-拓扑详情
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function descriptGraphDetail(array $body = array())
    {
        $url = $this -> url . '/graph/detail';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 拓扑图-获取拓扑图
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listGraph(array $body = array())
    {
        $url = $this -> url . '/graph/graph';
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