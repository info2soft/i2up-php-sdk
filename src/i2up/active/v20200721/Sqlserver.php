<?php
/**
 * Create by PhpStorm
 * User: Lis
 * Date: 2020/8/5
 * Time: 16:28
 */

namespace i2up\active\v20200721;

use i2up\Http\Client;
use i2up\Http\Error;

class Sqlserver {
    private $url;
    private $token;
    private $accessKey;
    private $secretKey;
    public function __constructor($auth)
    {
        $this -> url = $auth -> ip . 'sqlserver/rule';
        if ($auth -> tokenAuthType) {
            $this -> token = $auth -> token();
        } else {
            $this -> accessKey = $auth -> accessKey();
            $this -> secretKey = $auth -> secretKey();
        }
    }


    /**
     * 新建
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createRule(array $body = array())
    {
        $url = $this -> url;
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 批量新建
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function batchCreateRule(array $body = array())
    {
        $url = $this -> url . '/batch_add';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 修改
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyRule(array $body = array())
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
    public function deleteRule(array $body = array())
    {
        $url = $this -> url;
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 启停
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function operateRule(array $body = array())
    {
        $url = $this -> url . '/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 状态获取
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listRuleStatus(array $body = array())
    {
        $url = $this -> url . '/status';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 批量新建时重名检查
     *
     * @return array
     */
    public function checkName()
    {
        $url = $this -> url . '/check_name';
        $res = $this -> httpRequest('post', $url);
        return $res;
    }

    /**
     * 列表
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listRule(array $body = array())
    {
        $url = $this -> url;
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