<?php

namespace i2up\tools\v20181217;

use i2up\Http\Client;
use i2up\Http\Error;

class Diagnose {
    private $url;
    private $token;
    public function __construct($auth)
    {
        $this -> url = $auth -> ip . 'diagnose';
        $this -> token = $auth -> token();
    }
    /**
     *  新建
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createDiagnose(array $body = array())
    {
        $url = $this -> url;
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     *  删除
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteDiagnose(array $body = array())
    {

        $url = $this -> url;
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     *  获取列表
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listDiagnose(array $body = array())
    {

        $url = $this -> url;
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     *  下载结果
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function downloadDiagnoseResult(array $body = array())
    {

        $url = $this -> url;
        $res = $this -> httpRequest('get', $url, $body);
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