<?php

namespace i2up\timing\v20181217;

use i2up\Http\Client;
use i2up\Http\Error;

class TimingRecovery
{
    private $recoveryUrl;
    private $token;
    public function __construct($auth)
    {
        $this -> recoveryUrl = $auth -> ip . 'timing/recovery';
        $this -> token = $auth -> token();
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
     * $body['uuid'] String  必填 uuid
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
     * $body['uuid'] String  必填 uuid
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