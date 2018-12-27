<?php

namespace i2up\fsp\v20181217;

use i2up\Http\Client;
use i2up\Http\Error;

class FspBackup {
    private $url;
    private $token;
    public function __construct($auth)
    {
        $this -> url = $auth -> ip . 'fsp/backup';
        $this -> token = $auth -> token();
    }
    /**
     * 全服备份 0 获取两节点网卡列表
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listFspBackupNic(array $body = array())
    {
        $url = $this -> url . '/nic_list';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 全服备份 0 获取源节点磁盘和文件列表
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listFspBackupDir(array $body = array())
    {
        $url = $this -> url . '/dir_list';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 全服备份 1 检测条件-备份空间
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function verifyFspBackupCoopySpace(array $body = array())
    {
        $url = $this -> url . '/verify_coopy_space';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 全服备份 1 检测条件-license
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function verifyFspBackupLicense(array $body = array())
    {
        $url = $this -> url . '/verify_license';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 全服备份 1 检测条件-旧规则
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function verifyFspBackupOldRule(array $body = array())
    {
        $url = $this -> url . '/verify_old_rule';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 全服备份1 检测条件-系统版本
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function verifyFspBackupOsVersion(array $body = array())
    {
        $url = $this -> url . '/verify_os_version';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 全服备份 2 新建规则
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createFspBackup(array $body = array())
    {
        $url = $this -> url;
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 全服备份 2 修改规则
     *
     * @param array $body  参数详见 API 手册
     * $body['uuid'] String  必填 uuid
     * @return array
     */
    public function modifyFspBackup(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * 全服备份 2 获取单个规则
     *
     * @param array $body  参数详见 API 手册
     * $body['uuid'] String  必填 uuid
     * @return array
     */
    public function describeFspBackup(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 全服备份 3 删除规则
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteFspBackup(array $body = array())
    {
        $url = $this -> url;
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 全服备份 3 获取规则列表（基本信息）
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listFspBackup(array $body = array())
    {
        $url = $this -> url;
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 全服备份 3 规则操作 - 启动
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function startFspBackup(array $body = array())
    {
        $url = $this -> url . '/operate';
        $body['operate'] = 'start';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     * 全服备份 3 规则操作 - 停止
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function stopFspBackup(array $body = array())
    {
        $url = $this -> url . '/operate';
        $body['operate'] = 'stop';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     * 全服备份 3 规则操作 - 结束整机手工备份
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function finishFspBackup(array $body = array())
    {
        $url = $this -> url . '/operate';
        $body['operate'] = 'finish';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 全服备份 3 规则状态
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listFspBackupStatus(array $body = array())
    {
        $url = $this -> url. '/status';
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