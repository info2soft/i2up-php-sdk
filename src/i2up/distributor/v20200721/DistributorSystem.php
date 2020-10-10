<?php
/**
 * Create by PhpStorm
 * User: Lis
 * Date: 2020/8/11
 * Time: 16:26
 */

namespace i2up\distributor\v20200721;

use i2up\Http\Client;
use i2up\Http\Error;

class DistributorSystem {
    private $url;
    private $token;
    private $accessKey;
    private $secretKey;
    public function __constructor($auth)
    {
        $this -> url = $auth -> ip;
        if ($auth -> tokenAuthType) {
            $this -> token = $auth -> token();
        } else {
            $this -> accessKey = $auth -> accessKey();
            $this -> secretKey = $auth -> secretKey();
        }
    }


    /**
     * 系统管理 - 获取配置
     *
     * @return array
     */
    public function listSysSetting()
    {
        $url = $this -> url . 'sys/settings';
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     *  更新配置
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function updateSetting(array $body = array())
    {
        $url = $this -> url . 'sys/settings';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     *  命令列表
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function queueList(array $body = array())
    {
        $url = $this -> url . 'distribution/sys/queue_list';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     *  命令列表 - 删除
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function queueDelete(array $body = array())
    {
        $url = $this -> url . 'distribution/sys/queue_list';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     *  一键升级 - 获取版本
     *
     * @return array
     */
    public function upgradeVersion()
    {
        $url = $this -> url . 'distribution/sys/upgrade_version';
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     *  一键升级
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function update(array $body = array())
    {
        $url = $this -> url . 'distribution/sys/upgrade';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     *  告警统计
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function alarmStat(array $body = array())
    {
        $url = $this -> url . 'distribution/sys/alarm_stat';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     *  告警日志
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function alarmLog(array $body = array())
    {
        $url = $this -> url . 'distribution/sys/alarm_log';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     *  告警日志 - 操作 - 删除
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteAlarmLog(array $body = array())
    {
        $url = $this -> url . 'distribution/sys/alarm_log_operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     *  告警日志 - 操作 - 已读
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function readAlarmLog(array $body = array())
    {
        $url = $this -> url . 'distribution/sys/alarm_log_operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 新增用户
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createUser(array $body = array())
    {
        $url = $this -> url . 'user';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 修改用户信息
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyUser(array $body = array())
    {
        if (empty($body) || !isset($body['id'])) return $body;
        $url = $this -> url . 'user/' . $body['id'];
        unset($body['id']);
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * 用户列表
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listUser(array $body = array())
    {
        $url = $this -> url . 'user';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 用户统计
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function statUser(array $body = array())
    {
        $url = $this -> url . 'user/stat';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }


    /**
     * 同步网关
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function syncGateway(array $body = array())
    {
        $url = $this -> url . 'distribution/sys/sync_gateway';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 同步账号
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function syncAccount(array $body = array())
    {
        $url = $this -> url . 'distribution/sys/sync_account';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 获取发送文件信息
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function sendFiles(array $body = array())
    {
        $url = $this -> url . 'distribution/sys/send_files';
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