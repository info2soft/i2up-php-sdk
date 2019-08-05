<?php

namespace i2up\rep\v20181217;

use i2up\Http\Client;
use i2up\Http\Error;

class RepBackup {
    private $url;
    private $token;
    public function __construct($auth)
    {
        $this -> url = $auth -> ip . 'rep/backup';
        $this -> token = $auth -> token();
    }

    /**
     * 复制规则 - 获取 cdp zfs池列表
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listRepBackupCdpZfs(array $body = array())
    {
        $url = $this -> url . '/cdp_zfs';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 新建规则
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createRepBackup(array $body = array())
    {
        $url = $this -> url;
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 获取单个规则
     *
     * @param array $body
     * $body['uuid'] String  必填 uuid
     * @return array
     */
    public function describeRepBackup(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/' . $body['uuid'];
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 修改规则
     *
     * @param array $body  参数详见 API 手册
     * $body['uuid'] String  必填 uuid
     * @return array
     */
    public function modifyRepBackup(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * 删除规则
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteRepBackup(array $body = array())
    {
        $url = $this -> url;
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 规则操作 启动
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function startRepBackup(array $body = array())
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
    public function stopRepBackup(array $body = array())
    {
        $url = $this -> url . '/operate';
        $body['operate'] = 'stop';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     * 规则状态
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listRepBackupStatus(array $body = array())
    {
        $url = $this -> url . '/status';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 获取规则列表（基本信息）
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listRepBackup(array $body = array())
    {
        $url = $this -> url;
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * cdp baseline 列表 获取
     *
     * @body['uuid'] String  必填 uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listRepBackupBaseLine(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/' . $body['uuid'] . '/cdp_bl_list';
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * cdp baseline 列表 删除
     *
     * @body['uuid'] String  必填 uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteRepBackupBaseline(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/' . $body['uuid'] . '/cdp_bl_list';
        unset($body['uuid']);
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 孤儿文件 列表 获取
     *
     * @body['uuid'] String  必填 uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listRepBackupOrphan(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/' . $body['uuid'] . '/orphan_list';
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 孤儿文件 列表 删除
     *
     * @body['uuid'] String  必填 uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteRepBackupOrphan(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/' . $body['uuid'] . '/orphan_list';
        unset($body['uuid']);
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 孤儿文件 下载
     *
     * @body['uuid'] String  必填 uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function downloadRepBackupOrphan(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/' . $body['uuid'] . '/orphan_download';
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 快照 列表 获取
     *
     * @param array $body  参数详见 API 手册
     * $body['uuid'] String  必填 uuid
     * @return array
     */
    public function listRepBackupSnapshot(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/' . $body['uuid'] . '/snapshot_list';
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 快照 列表 创建快照
     *
     * @param array $body  参数详见 API 手册
     * $body['uuid'] String  必填 uuid
     * @return array
     */
    public function createRepBackupSnapshot(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/' . $body['uuid'] . '/snapshot_list';
        $res = $this -> httpRequest('post', $url);
        return $res;
    }

    /**
     * 快照 列表 删除
     *
     * @param array $body  参数详见 API 手册
     * $body['uuid'] String  必填 uuid
     * @return array
     */
    public function deleteRepBackupSnapshot(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/' . $body['uuid'] . '/snapshot_list';
        unset($body['uuid']);
        $res = $this -> httpRequest('delete', $url, $body);
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