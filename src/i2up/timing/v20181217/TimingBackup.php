<?php

namespace i2up\timing\v20181217;

use i2up\Config;
use i2up\Http\Client;
use i2up\Http\Error;

class TimingBackup {
    private $backupUrl;
    private $token;
    public function __construct($auth)
    {
        $this -> backupUrl = Config::baseUrl . 'timing/backup';
        $this -> token = $auth -> token();
    }
    /**
     * 1 备份 准备-4 备份 获取MsSql数据源
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeTimingBackupMssqlSource(array $body = array())
    {
        $url = $this -> backupUrl . '/mssql_source';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 1 备份 准备-1 备份/恢复 认证Oracle信息（目前未使用）
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function verifyTimingBackupOracleInfo(array $body = array())
    {

        $url = $this -> backupUrl . '/verify_oracle_info';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 1 备份 准备-2 备份/恢复 获取Oracle表空间（目前未使用）
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeTimingBackupOracleContent(array $body = array())
    {
        $url = $this -> backupUrl . '/oracle_content';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 1 备份 准备-3 备份 获取Oracle脚本路径
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function descibeTimingBackupOracleSriptPath(array $body = array())
    {
        $url = $this -> backupUrl . '/oracle_script_path';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 1 备份 准备-5 备份 获取MsSql数据库列表
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listTimingBackupMssqlDbList(array $body = array())
    {
        $url = $this -> backupUrl . '/mssql_db_list';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 2 备份 新建/编辑-1 备份 新建
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createTimingBackup(array $body = array())
    {
        $url = $this -> backupUrl;
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 2 备份 新建/编辑-2 备份 获取单个
     *
     * @param array $body  参数详见 API 手册
     * @body['uuid'] String  必填 uuid
     * @return array
     */
    public function describeTimingBackup(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> backupUrl . '/' . $body['uuid'];
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 2 备份 新建/编辑-3 备份 修改
     *
     * @param array $body  参数详见 API 手册
     * $body['uuid'] String  必填 uuid
     * @return array
     */
    public function modifyTimingBackup(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> backupUrl . '/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * 3 备份 列表-1 备份 获取列表
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listTimingBackup(array $body = array())
    {
        $url = $this -> backupUrl;
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 3 备份 列表-2 备份 状态
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listTimingBackupStatus(array $body = array())
    {
        $url = $this -> backupUrl . '/status';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 3 备份 列表-3 备份 删除
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteTimingBackup(array $body = array())
    {
        $url = $this -> backupUrl;
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 3 备份 列表-4 备份 启动
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function startTimingBackup(array $body = array())
    {
        $url = $this -> backupUrl . '/operate';
        $body['operate'] = 'start';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     * 3 备份 列表-4 备份 停止
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function stopTimingBackup(array $body = array())
    {
        $url = $this -> backupUrl . '/operate';
        $body['operate'] = 'stop';
        $res = $this -> httpRequest('post', $url, $body);
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