<?php

namespace i2up\fsp\v20190805;

use i2up\Http\Client;
use i2up\Http\Error;

class FspMove {
    private $url;
    private $token;
    private $accessKey;
    private $secretKey;
    public function __construct($auth)
    {
        $this -> url = $auth -> ip . 'fsp/move';
        if ($auth -> tokenAuthType) {
            $this -> token = $auth -> token();
        } else {
            $this -> accessKey = $auth -> accessKey();
            $this -> secretKey = $auth -> secretKey();
        }
    }
    /**
     * 获取两节点网卡列表
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listFspMoveNic(array $body = array())
    {
        $url = $this -> url . '/nic_list';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 获取源节点磁盘和文件列表
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listFspMoveDir(array $body = array())
    {
        $url = $this -> url . '/dir_list';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 检测迁移条件-license
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function verifyFspMoveLicense(array $body = array())
    {
        $url = $this -> url . '/verify_license';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 检测迁移条件-旧规则
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function verifyFspMoveOldRule(array $body = array())
    {
        $url = $this -> url . '/verify_old_rule';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 检测迁移条件-磁盘
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function verifyFspMoveVolumeSpace(array $body = array())
    {
        $url = $this -> url . '/verify_volume_space';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 检测迁移条件-系统版本
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function verifyFspMoveOsVersion(array $body = array())
    {
        $url = $this -> url . '/verify_os_version';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 新建规则
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createFspMove(array $body = array())
    {
        $url = $this -> url;
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 修改规则
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyFspMove(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/' . $body['uuid'];
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * 获取单个规则
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeFspMove(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/' . $body['uuid'];
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 删除规则
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteFspMove(array $body = array())
    {
        $url = $this -> url;
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 获取规则列表（基本信息）
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listFspMove(array $body = array())
    {
        $url = $this -> url;
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 规则操作 启动
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function startFspMove(array $body = array())
    {
        $url = $this -> url . '/operate';
        $body['operate'] = 'start';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 规则操作 停止
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function stopFspMove(array $body = array())
    {
        $url = $this -> url . '/operate';
        $body['operate'] = 'stop';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     * 规则操作 迁移
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function moveFspMove(array $body = array())
    {
        $url = $this -> url . '/operate';
        $body['operate'] = 'move';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     * 规则操作 重启
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function rebootFspMove(array $body = array())
    {
        $url = $this -> url . '/operate';
        $body['operate'] = 'reboot';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     * 规则状态
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listFspMoveStatus(array $body = array())
    {
        $url = $this -> url . '/status';
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