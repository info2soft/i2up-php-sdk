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

class CloudBackup {
    private $url;
    private $token;
    private $accessKey;
    private $secretKey;
    public function __constructor($auth)
    {
        $this -> url = $auth -> ip . 'cloud';
        if ($auth -> tokenAuthType) {
            $this -> token = $auth -> token();
        } else {
            $this -> accessKey = $auth -> accessKey();
            $this -> secretKey = $auth -> secretKey();
        }
    }
    /**
     *  准备 - 工作机获取设备列表
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listDevice(array $body = array())
    {
        $url = $this -> url . '/ecs/device_info';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     *  新建
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createBackup(array $body = array())
    {
        $url = $this -> url . '/backup';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     *  修改
     *
     * @param array $body  参数详见 API 手册
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function modifyBackup(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/backup/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('put', $url);
        return $res;
    }

    /**
     *  删除
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteBackup(array $body = array())
    {
        $url = $this -> url . '/backup';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     *  列表
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function https(array $body = array())
    {
        $url = $this -> url . '/backup';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     *  操作 - 启动
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function startBackup(array $body = array())
    {
        $url = $this -> url . '/backup/operate';
        $body['operate'] = 'start';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     *  操作 - 停止
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function stopBackup(array $body = array())
    {
        $url = $this -> url . '/backup/operate';
        $body['operate'] = 'stop';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     *  操作 - 立即启动
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function startImmediatelyBackup(array $body = array())
    {
        $url = $this -> url . '/backup/operate';
        $body['operate'] = 'start_immediately';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     *  单个
     *
     * @param array $body  参数详见 API 手册
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function describeBackup(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/backup/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     *  云端拉起 - 获取云主机信息
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeEcs(array $body = array())
    {
        $url = $this -> url . '/ecs/ecs_info';
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