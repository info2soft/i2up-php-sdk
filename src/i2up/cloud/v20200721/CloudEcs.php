<?php
/**
 * Create by PhpStorm
 * User: Lis
 * Date: 2020/7/21
 * Time: 15:05
 */

namespace i2up\cloud\v20200721;

use i2up\Config;
use i2up\Http\Client;
use i2up\Http\Error;

class CloudEcs {
    private $url;
    private $token;
    private $accessKey;
    private $secretKey;
    public function __constructor($auth)
    {
        $this -> url = $auth -> ip . 'cloud/ecs';
        if ($auth -> tokenAuthType) {
            $this -> token = $auth -> token();
        } else {
            $this -> accessKey = $auth -> accessKey();
            $this -> secretKey = $auth -> secretKey();
        }
    }
    /**
     *  新建
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createEcs(array $body = array())
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
    public function listEcs(array $body = array())
    {
        $url = $this -> url;
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     *  列表 - 远程登录
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listVncConsole(array $body = array())
    {
        $url = $this -> url . '/vnc_console';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     *  状态
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listEcsStatus(array $body = array())
    {
        $url = $this -> url . '/status';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     *  获取空闲挂载点
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function attachPoint(array $body = array())
    {
        $url = $this -> url . '/attach_point';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     *  节点操作 - 绑定
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function bindNode(array $body = array())
    {
        $url = $this -> url . '/node_operate';
        $body['operate'] = 'bind';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     *  节点操作 - 解绑
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function untieNode(array $body = array())
    {
        $url = $this -> url . '/node_operate';
        $body['operate'] = 'untie';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }


    /**
     *  配置演练
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function configRehearse(array $body = array())
    {
        $url = $this -> url . '/rehearse_conf';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     *  演练组 - 列表
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listRehearseGroup(array $body = array())
    {
        $url = $this -> url . '/rehearse_group';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     *  演练组 - 新建/更新
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createRehearseGroup(array $body = array())
    {
        $url = $this -> url . '/rehearse_group';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     *  演练组 - 删除
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteRehearseGroup(array $body = array())
    {
        $url = $this -> url . '/rehearse_group';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     *  演练组 - 单个
     *
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeRehearseGroup(array $body = array())
    {
        $url = $this -> url . '/rehearse_group/' . $body['uuid'];
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