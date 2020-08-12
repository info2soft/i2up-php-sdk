<?php
/**
 * Create by PhpStorm
 * User: Lis
 * Date: 2020/8/11
 * Time: 16:20
 */

namespace i2up\active\v20200721;

use i2up\Http\Client;
use i2up\Http\Error;

class Postgres {
    private $url;
    private $token;
    private $accessKey;
    private $secretKey;
    public function __constructor($auth)
    {
        $this -> url = $auth -> ip . 'pgsql/rule';
        if ($auth -> tokenAuthType) {
            $this -> token = $auth -> token();
        } else {
            $this -> accessKey = $auth -> accessKey();
            $this -> secretKey = $auth -> secretKey();
        }
    }
    /**
     * 列表
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listPgsqlRule(array $body = array())
    {
        $url = $this -> url;
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 新建
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createPgsqlRule(array $body = array())
    {
        $url = $this -> url;
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 修改
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyPgsqlRule(array $body = array())
    {
        $url = $this -> url;
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * 删除
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deletePgsqlRule(array $body = array())
    {
        $url = $this -> url;
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 状态
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listPgsqlStatus(array $body = array())
    {
        $url = $this -> url . '/status';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * postgres 日志
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listPgsqlRuleLog(array $body = array())
    {
        $url = $this -> url . '/log';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * postgres获取单个信息
     *
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describePgsqlRules(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/' . $body['uuid'];
        unset($body['uuid']);
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