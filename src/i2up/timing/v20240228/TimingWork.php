<?php
namespace i2up\timing\v20240228;

use i2up\Http\Client;
use i2up\Http\Error;

class TimingWork {
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
     * 1 作业任务 列表
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listTimingWork(array $body = array())
    {
        $url = $this -> url . '/timing/work';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     * 2 作业任务 删除
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteTimingWork(array $body = array())
    {
        $url = $this -> url . '/timing/work';
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