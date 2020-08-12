<?php
/**
 * Create by PhpStorm
 * User: Lis
 * Date: 2020/8/12
 * Time: 14:30
 */

namespace i2up\resource\v20190805;

use i2up\Http\Client;
use i2up\Http\Error;

class BoxVm {
    private $url;
    private $token;
    private $accessKey;
    private $secretKey;
    public function __constructor($auth)
    {
        $this -> url = $auth -> ip . 'box_vm';
        if ($auth -> tokenAuthType) {
            $this -> token = $auth -> token();
        } else {
            $this -> accessKey = $auth -> accessKey();
            $this -> secretKey = $auth -> secretKey();
        }
    }

    /**
     *  获取模板列表
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function templateList(array $body = array())
    {
        $url = $this -> url . '/template';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     *  新建
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createBoxVm(array $body = array())
    {
        $url = $this -> url;
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     *  列表
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function boxVmList(array $body = array())
    {
        $url = $this -> url;
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     *  单个
     *
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function describeBoxVm(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     *  删除
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteBoxVm(array $body = array())
    {
        $url = $this -> url;
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     *  状态
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listBoxVmStatus(array $body = array())
    {
        $url = $this -> url . '/status';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     *  操作 - register
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function registerBoxVm(array $body = array())
    {
        $url = $this -> url . '/operate';
        $body['operate'] = 'register';
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