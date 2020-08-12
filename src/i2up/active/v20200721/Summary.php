<?php
/**
 * Create by PhpStorm
 * User: Lis
 * Date: 2020/8/11
 * Time: 15:45
 */

namespace i2up\active\v20200721;

use i2up\Http\Client;
use i2up\Http\Error;

class Summary {
    private $url;
    private $token;
    private $accessKey;
    private $secretKey;
    public function __constructor($auth)
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
     * 获取总览列表
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listLogWarning(array $body = array())
    {
        $url = $this -> url . 'active/summary/list_view';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 操作 - stop
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function stopView(array $body = array())
    {
        $url = $this -> url . 'view/operate';
        $body['operate'] = 'stop';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 操作 - resume
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function resumeView(array $body = array())
    {
        $url = $this -> url . 'view/operate';
        $body['operate'] = 'resume';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 操作 - resume
     *
     * @return array
     */
    public function listSummary()
    {
        $url = $this -> url . 'active/summary';
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