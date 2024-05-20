<?php
/**
 * Create by PhpStorm
 * User: Lis
 * Date: 2020/10/10
 * Time: 13:49
 */

namespace i2up\dtrack\v20201009;

use i2up\Config;
use i2up\Http\Client;
use i2up\Http\Error;

class Dtrack {
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
     * 获取工作机设备列表
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listDtrackBackupDev(array $body = array())
    {
        $url = $this -> url . 'dtrack/backup/dev';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 查询工作机系统信息
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listDtrackBackupSystemInfo(array $body = array())
    {
        $url = $this -> url . 'dtrack/backup/system_info';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     *  检查是否重名
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function tempFuncName(array $body = array())
    {
        $url = $this -> url . 'dtrack/backup/verify_name';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     *  创建
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createDtrackBackup(array $body = array())
    {
        $url = $this -> url . 'dtrack/backup';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     *  修改
     *
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyDtrackBackup(array $body = array())
    {
        $url = $this -> url . 'dtrack/backup/' . $body['uuid'] . '';
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     *  获取单个
     *
     * @param array $body  参数详见 API 手册
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function describeDtrackBackup(array $body = array())
    {
        $url = $this -> url . 'dtrack/backup/' . $body['uuid'] . '';
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     *  获取列表
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listDtrackBackup(array $body = array())
    {
        $url = $this -> url . 'dtrack/backup';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     *  获取状态
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listDtrackBackupStatus(array $body = array())
    {
        $url = $this -> url . 'dtrack/backup/status';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     *  删除
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteDtrackBackup(array $body = array())
    {
        $url = $this -> url . 'dtrack/backup';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     *  操作 - 创建快照
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function take_snapshotDtrackBackup(array $body = array())
    {
        $url = $this -> url . 'dtrack/backup/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     *  操作 - 删除快照
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function delete_snapshotDtrackBackup(array $body = array())
    {
        $url = $this -> url . 'dtrack/backup/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     *  操作 - 创建克隆快照
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function take_snapshot_cloneDtrackBackup(array $body = array())
    {
        $url = $this -> url . 'dtrack/backup/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     *  操作 - 删除克隆快照
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function delete_snapshot_cloneDtrackBackup(array $body = array())
    {
        $url = $this -> url . 'dtrack/backup/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     *  操作 - scan
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function scanDtrackBackup(array $body = array())
    {
        $url = $this -> url . 'dtrack/backup/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     *  操作 - cancel scan
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function cancel_scanDtrackBackup(array $body = array())
    {
        $url = $this -> url . 'dtrack/backup/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     *  操作 - sync
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function syncDtrackBackup(array $body = array())
    {
        $url = $this -> url . 'dtrack/backup/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     *  操作 - cancel_sync
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function cancel_syncDtrackBackup(array $body = array())
    {
        $url = $this -> url . 'dtrack/backup/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     *  操作 - suspend
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function suspendDtrackBackup(array $body = array())
    {
        $url = $this -> url . 'dtrack/backup/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     *  操作 - resume
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function resumeDtrackBackup(array $body = array())
    {
        $url = $this -> url . 'dtrack/backup/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     *  添加历史记录（底层调）
     *
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function addDtrackBackupHistory(array $body = array())
    {
        $url = $this -> url . 'dtrack/backup/' . $body['uuid'] . '/history';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     *  查询历史记录
     *
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listDtrackBackupHistory(array $body = array())
    {
        $url = $this -> url . 'dtrack/backup/' . $body['uuid'] . '/history';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     *  获取快照列表
     *
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function listDtrackBackupSnap(array $body = array())
    {
        $url = $this -> url . 'dtrack/backup/' . $body['uuid'] . '/snap';
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 安装卸载驱动
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function dtrackBackupCtlDrv(array $body = array())
    {
        $url = $this -> url . 'dtrack/backup/ctl_drv';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 重启系统
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function dtrackBackupRebootSystem(array $body = array())
    {
        $url = $this -> url . 'dtrack/backup/reboot';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     *  获取服务功能
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function dtrackBackupFeatureMatrix(array $body = array())
    {
        $url = $this -> url . 'dtrack/backup/feature_matrix';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     *  获取名称
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeDtrackNodeInitiatorName(array $body = array())
    {
        $url = $this -> url . 'dtrack/node/initiator_name';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     *  获取状态
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeDtrackNodeInitiatorStatus(array $body = array())
    {
        $url = $this -> url . 'dtrack/node/initiator_status';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     *  获取版本
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeDtrackNodeInitiatorVersion(array $body = array())
    {
        $url = $this -> url . 'dtrack/node/initiator_version';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }


    /**
     *  获取目标端列表
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listDtrackRecoveryTarget(array $body = array())
    {

        $url = $this -> url . 'dtrack/recovery/target';

        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     *  是否发现目标端
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeDtrackRecoveryTargetDiscovered(array $body = array())
    {

        $url = $this -> url . 'dtrack/recovery/target_discovered';

        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 策略组 - 获取快照列表
     *
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function listDtrackGroupSnap(array $body = array())
    {
        $url = $this -> url . 'dtrack/group/' . $body['uuid'] . '/snap';
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