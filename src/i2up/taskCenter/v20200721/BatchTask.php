<?php
/**
 * Create by PhpStorm
 * User: Lis
 * Date: 2020/7/21
 * Time: 14:16
 */

namespace i2up\taskCenter\v20200721;

use i2up\Http\Client;
use i2up\Http\Error;


class BatchTask {
    private $url;
    private $token;
    private $accessKey;
    private $secretKey;
    public function __constructor($auth)
    {
        $this -> url = $auth -> ip . 'batch_task';
        if ($auth -> tokenAuthType) {
            $this -> token = $auth -> token();
        } else {
            $this -> accessKey = $auth -> accessKey();
            $this -> secretKey = $auth -> secretKey();
        }
    }
    /**
     * 任务列表
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function BatchTaskList(array $body = array())
    {
        $url = $this -> url;
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 任务状态
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function BatchTaskStatus(array $body = array())
    {
        $url = $this -> url . '/status';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 操作 - 启动
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function startBatchTask(array $body = array())
    {
        $url = $this -> url . '/operate';
        $body['operate'] = 'start';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 操作 - 停止
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function stopBatchTask(array $body = array())
    {
        $url = $this -> url . '/operate';
        $body['operate'] = 'stop';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 操作 - 删除
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteBatchTask(array $body = array())
    {
        $url = $this -> url . '/operate';
        $body['operate'] = 'delete';
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