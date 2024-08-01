<?php
namespace i2up\taskCenter\v20240228;

use i2up\Http\Client;
use i2up\Http\Error;

class BatchTask {
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
     * 任务列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function batchTaskList(array $body = array())
    {
        $url = $this -> url . '/batch_task';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     * 任务状态
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function batchTaskStatus(array $body = array())
    {
        $url = $this -> url . '/batch_task/status';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     * 任务操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function startBatchTask(array $body = array())
    {
        $url = $this -> url . '/batch_task/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 任务操作
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function stopBatchTask(array $body = array())
    {
        $url = $this -> url . '/batch_task/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 任务操作
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteBatchTask(array $body = array())
    {
        $url = $this -> url . '/batch_task/operate';
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
        }
        
        if (!$ret->ok()) {
            return array(null, new Error($url, $ret));
        }
        $r = ($ret->body === null) ? array() : $ret->json();
        return array($r, null);
    }
}