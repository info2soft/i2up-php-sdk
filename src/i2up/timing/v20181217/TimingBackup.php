<?php

namespace i2up\timing\v20181217;

use i2up\Config;
use i2up\Http\Client;
use i2up\Http\Error;

class TimingBackup {
    private $backupUrl;
    private $recoveryUrl;
    private $token;
    public function __constructor($auth)
    {
        $this -> backupUrl = Config::baseUrl . 'timing/backup';
        $this -> recoveryUrl = Config::baseUrl . 'timing/recovery';
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

    /**
     * 1 恢复 准备-2 恢复 获取还原时间点 - Mssql
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listTimingRecoveryMssqlTime(array $body = array())
    {
        $url = $this -> recoveryUrl . '/rc_mssql_time';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 1 恢复 准备-3 恢复 获取Mssql初始信息
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeTimingRecoveryMssqlInitInfo(array $body = array())
    {
        $url = $this -> recoveryUrl . '/rc_mssql_init_info';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 1 恢复 准备-1 恢复 获取还原时间点 - 文件
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listTimingRecoveryPathList(array $body = array())
    {
        $url = $this -> recoveryUrl . '/rc_path_list';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 1 恢复 准备-4 恢复 认证MsSql数据库
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function verifyTimingRecoveryMssqlInfo(array $body = array())
    {

        $url = $this -> recoveryUrl . '/rc_verify_mssql_info';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 2 恢复 新建/编辑-1 恢复 新建
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createTimingRecovery(array $body = array())
    {
        $url = $this -> recoveryUrl;
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 2 恢复 新建/编辑-3 恢复 修改
     *
     * @param array $body  参数详见 API 手册
     * $body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function modifyTimingRecovery(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> recoveryUrl . '/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * 2 恢复 新建/编辑-2 恢复 获取单个
     *
     * @param array $body  参数详见 API 手册
     * $body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function describeTimingRecovery(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> recoveryUrl . '/' . $body['uuid'];
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 3 恢复 列表-1 恢复 获取列表
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listTimingRecovery(array $body = array())
    {
        $url = $this -> recoveryUrl;
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 3 恢复 列表-2 恢复 状态
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listTimingRecoveryStatus(array $body = array())
    {
        $url = $this -> recoveryUrl . '/status';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 3 恢复 列表-3 恢复 删除
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteTimingRecovery(array $body = array())
    {
        $url = $this -> recoveryUrl;
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 3 恢复 列表-4 恢复 启动
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function startTimingRecovery(array $body = array())
    {
        $url = $this -> recoveryUrl . '/operate';
        $body['operate'] = 'start';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 3 恢复 列表-4 恢复 停止
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function stopTimingRecovery(array $body = array())
    {
        $url = $this -> recoveryUrl . '/operate';
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