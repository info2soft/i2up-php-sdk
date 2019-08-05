<?php
namespace i2up\gts\v20190805;

use i2up\Config;
use i2up\Http\Client;
use i2up\Http\Error;

class Gts {
    private $url;
    private $token;
    private $accessKey;
    private $secretKey;
    public function __constructor($auth)
    {
        $this -> url = Config::baseUrl;
        if ($auth -> tokenAuthType) {
            $this -> token = $auth -> token();
        } else {
            $this -> accessKey = $auth -> accessKey();
            $this -> secretKey = $auth -> secretKey();
        }
    }

    /**
     * 解析许可授权
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeLic(array $body = array())
    {
        $url = $this -> url . 'lic/describe';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 关闭服务
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function closeService(array $body = array())
    {
        if (empty($body) || !isset($body['uid'])) return $body;
        $url = $this -> url . 'gts/service/' . $body['uid'];
        $res = $this -> httpRequest('post', $url);
        return $res;
    }

    /**
     * 服务列表list
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listService(array $body = array())
    {
        if (empty($body) || !isset($body['uid'])) return $body;
        $url = $this -> url . 'gts/service/' . $body['uid'];
        unset($body['uid']);
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 添加服务器
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createServer(array $body = array())
    {
        $url = $this -> url . 'gts/hello';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 租户授权详情
     *
     * @return array
     */
    public function describeQuota()
    {
        $url = $this -> url . 'gts/quota';
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 控制台概要
     *
     * @return array
     */
    public function describeSummary()
    {

        $url = $this -> url . 'gts/summary';
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