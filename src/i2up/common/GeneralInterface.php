<?php

namespace i2up\common;

use i2up\Http\Client;
use i2up\Http\Error;
use i2up\Config;

class GeneralInterface {
    private $url;
    private $token;
    public function __construct($auth)
    {
        $this -> url = Config:: baseUrl;
        $this -> token = $auth -> token();
    }

    /**
     * 版本信息
     * @return array
     */
    public function describeVersion()
    {
        $url = $this -> url . '/version';
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 初始化（升级）DB-migrate
     * @return array
     */
    public function updateDB()
    {
        $url = $this -> url . '/migrate';
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 统计报表list
     * @return array
     */
    public function listStatistics()
    {
        $url = $this -> url . '/statistics';
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 统计详情
     * @param array $body
     * $body['id'] String  统计报表list返回的id
     * @return array
     */
    public function describeStatistics(array $body = array())
    {
        if (empty($body) || !isset($body['id'])) return $body;
        $url = $this -> url . '/statistics/' . $body['id'];
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 标记已读
     * @param array $body
     * @return array
     */
    public function readStatistics(array $body = array())
    {
        $url = $this -> url . '/statistics';
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }
    private function httpRequest($method, $url, $body = null)
    {
        if (isset($this -> token)) {
            $header = array('Authorization' => $this -> token);
        } else {
            $header = array();
        }
        $ret = null;
        if ($method === 'get') {
            $ret = Client::get($url, $body, $header);
        } else if ($method === 'put') {
            $ret = Client::put($url, $body, $header);
        }

        if (!$ret->ok()) {
            return array(null, new Error($url, $ret));
        }
        $r = ($ret->body === null) ? array() : $ret->json();
        return array($r, null);
    }
}