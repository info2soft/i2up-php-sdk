<?php
namespace i2up\dtrack\v20250123;

use i2up\Http\Client;
use i2up\Http\Error;

class Dtrack {
    private $url;
    private $token;
    private $accessKey;
    private $secretKey;

    public function __construct($auth)
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
        $url = $this -> url . '/dtrack/backup/dev';
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
        $url = $this -> url . '/dtrack/backup/system_info';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 策略 - 检查是否重名
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function verifyDtrackBackupName(array $body = array())
    {
        $url = $this -> url . '/dtrack/backup/verify_name';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 策略 - 创建
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createDtrackBackup(array $body = array())
    {
        $url = $this -> url . '/dtrack/backup';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 策略 - 修改
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyDtrackBackup(array $body = array())
    {
        $url = $this -> url . '/dtrack/backup/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * 策略 - 获取单个
     * 
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function describeDtrackBackup(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/dtrack/backup/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 策略 - 获取列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listDtrackBackup(array $body = array())
    {
        $url = $this -> url . '/dtrack/backup';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 策略 - 获取状态
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listDtrackBackupStatus(array $body = array())
    {
        $url = $this -> url . '/dtrack/backup/status';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 策略 - 删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteDtrackBackup(array $body = array())
    {
        $url = $this -> url . '/dtrack/backup';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 策略 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function takeSnapshotDtrackBackup(array $body = array())
    {
        $url = $this -> url . '/dtrack/backup/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 策略 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteSnapshotDtrackBackup(array $body = array())
    {
        $url = $this -> url . '/dtrack/backup/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 策略 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function takeSnapshotCloneDtrackBackup(array $body = array())
    {
        $url = $this -> url . '/dtrack/backup/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 策略 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteSnapshotCloneDtrackBackup(array $body = array())
    {
        $url = $this -> url . '/dtrack/backup/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 策略 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function scanDtrackBackup(array $body = array())
    {
        $url = $this -> url . '/dtrack/backup/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 策略 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function cancelScanDtrackBackup(array $body = array())
    {
        $url = $this -> url . '/dtrack/backup/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 策略 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function syncDtrackBackup(array $body = array())
    {
        $url = $this -> url . '/dtrack/backup/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 策略 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function cancelSyncDtrackBackup(array $body = array())
    {
        $url = $this -> url . '/dtrack/backup/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 策略 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function suspendDtrackBackup(array $body = array())
    {
        $url = $this -> url . '/dtrack/backup/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 策略 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function resumeDtrackBackup(array $body = array())
    {
        $url = $this -> url . '/dtrack/backup/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 策略 - 添加历史记录（底层调）
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function addDtrackBackupHistory(array $body = array())
    {
        $url = $this -> url . '/dtrack/backup/' . $body['uuid'] . '/history';
        unset($body['uuid']);
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 策略 - 查询历史记录
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listDtrackBackupHistory(array $body = array())
    {
        $url = $this -> url . '/dtrack/backup/' . $body['uuid'] . '/history';
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 策略 - 获取快照列表
     * 
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function listDtrackBackupSnap(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/dtrack/backup/' . $body['uuid'] . '/snap';
        unset($body['uuid']);
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
        $url = $this -> url . '/dtrack/backup/ctl_drv';
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
        $url = $this -> url . '/dtrack/backup/reboot';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 策略 - 获取服务功能
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function dtrackBackupFeatureMatrix(array $body = array())
    {
        $url = $this -> url . '/dtrack/backup/feature_matrix';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * ISCSI发起者 - 获取名称
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeDtrackNodeInitiatorName(array $body = array())
    {
        $url = $this -> url . '/dtrack/node/initiator_name';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * ISCSI发起者 - 获取状态
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeDtrackNodeInitiatorStatus(array $body = array())
    {
        $url = $this -> url . '/dtrack/node/initiator_status';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * ISCSI发起者 - 获取版本
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeDtrackNodeInitiatorVersion(array $body = array())
    {
        $url = $this -> url . '/dtrack/node/initiator_version';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * MySQL - 配置访问参数
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function mysqlConf(array $body = array())
    {
        $url = $this -> url . '/dtrack/node/mysql_conf';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * MySQL - 获取访问参数
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listMysqlConf(array $body = array())
    {
        $url = $this -> url . '/dtrack/node/mysql_conf';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * MySQL - 获取数据库名
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listMysqlDb(array $body = array())
    {
        $url = $this -> url . '/dtrack/node/mysql_db';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * Oracle - 配置访问参数
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function oracleConf(array $body = array())
    {
        $url = $this -> url . '/dtrack/node/oracle_conf';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * Oracle - 获取访问参数
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listOracleConf(array $body = array())
    {
        $url = $this -> url . '/dtrack/node/oracle_conf';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * Oracle - 获取表空间
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listOracleDb(array $body = array())
    {
        $url = $this -> url . '/dtrack/node/oracle_db';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * SqlServer - 配置访问参数
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function sqlserverConf(array $body = array())
    {
        $url = $this -> url . '/dtrack/node/sqlserver_conf';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * SqlServer - 获取访问参数副本
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listSqlserverConf(array $body = array())
    {
        $url = $this -> url . '/dtrack/node/sqlserver_conf';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 还原 - 获取目标端列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listDtrackRecoveryTarget(array $body = array())
    {
        $url = $this -> url . '/dtrack/recovery/target';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 还原 - 是否发现目标端
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeDtrackRecoveryTargetDiscovered(array $body = array())
    {
        $url = $this -> url . '/dtrack/recovery/target_discovered';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 策略组 - 创建
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createDtrackGroup(array $body = array())
    {
        $url = $this -> url . '/dtrack/group';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 策略组 - 修改
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyDtrackGroup(array $body = array())
    {
        $url = $this -> url . '/dtrack/group/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * 策略组 - 获取单个
     * 
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function describeDtrackGroup(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/dtrack/group/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 策略组 - 获取列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listDtrackGroup(array $body = array())
    {
        $url = $this -> url . '/dtrack/group';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 策略组 - 获取状态
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listDtrackGroupStatus(array $body = array())
    {
        $url = $this -> url . '/dtrack/group/status';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 策略组 - 更新绑定
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function updateDtrackGroupBind(array $body = array())
    {
        $url = $this -> url . '/dtrack/group/' . $body['uuid'] . '/bind';
        unset($body['uuid']);
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * 策略 - 更新绑定
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function updateDtrackBackupBind(array $body = array())
    {
        $url = $this -> url . '/dtrack/backup/' . $body['uuid'] . '/bind';
        unset($body['uuid']);
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * 策略组 - 删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteDtrackGroup(array $body = array())
    {
        $url = $this -> url . '/dtrack/group';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 策略组 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function suspendDtrackGroup(array $body = array())
    {
        $url = $this -> url . '/dtrack/group/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 策略组 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function resumeDtrackGroup(array $body = array())
    {
        $url = $this -> url . '/dtrack/group/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 策略组 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function syncDtrackGroup(array $body = array())
    {
        $url = $this -> url . '/dtrack/group/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 策略组 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function cancelSyncDtrackGroup(array $body = array())
    {
        $url = $this -> url . '/dtrack/group/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 策略组 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function takeSnapshotDtrackGroup(array $body = array())
    {
        $url = $this -> url . '/dtrack/group/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 策略组 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteSnapshotDtrackGroup(array $body = array())
    {
        $url = $this -> url . '/dtrack/group/operate';
        $res = $this -> httpRequest('post', $url, $body);
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
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/dtrack/group/' . $body['uuid'] . '/snap';
        unset($body['uuid']);
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
        } else if ($method === 'post') {
            $ret = Client::post($url, $body, $header);
        } else if ($method === 'put') {
            $ret = Client::put($url, $body, $header);
        } else if ($method === 'delete') {
            $ret = Client::delete($url, $body, $header);
        }
        
        if (!$ret->ok()) {
            return array(null, new Error($url, $ret));
        }
        $r = ($ret->body === null) ? array() : $ret->json();
        $r['ret'] = $ret->statusCode;
        return array($r, null);
    }
}