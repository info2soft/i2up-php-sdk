<?php
/**
 * Create by PhpStorm
 * User: Lis
 * Date: 2020/7/21
 * Time: 14:30
 */


namespace i2up\dashboard\v20190805;

use i2up\Config;
use i2up\Http\Client;
use i2up\Http\Error;

class Resource {
    private $url;
    private $token;
    private $accessKey;
    private $secretKey;
    public function __constructor($auth)
    {
        $this -> url = $auth -> ip . 'dashboard';
        if ($auth -> tokenAuthType) {
            $this -> token = $auth -> token();
        } else {
            $this -> accessKey = $auth -> accessKey();
            $this -> secretKey = $auth -> secretKey();
        }
    }
    /**
     * 资源概览
     *
     * @return array
     */
    public function resourceView()
    {
        $url = $this -> url . '/source';
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 设置资源保护覆盖率
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function resourceProtectionCoverage(array $body = array())
    {
        $url = $this -> url . '/resource_protection_coverage';
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * 任务概览列表
     *
     * @return array
     */
    public function taskView()
    {
        $url = $this -> url . '/task';
        $res = $this -> httpRequest('get', $url);
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