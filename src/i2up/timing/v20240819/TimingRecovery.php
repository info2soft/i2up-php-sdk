<?php
namespace i2up\timing\v20240819;

use i2up\Http\Client;
use i2up\Http\Error;

class TimingRecovery {
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
     * 2-1 恢复 准备-2 恢复 获取还原时间点 - Mssql
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listTimingRecoveryMssqlTime(array $body = array())
    {
        $url = $this -> url . '/timing/recovery/rc_mssql_time';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 2-1 恢复 准备-3 恢复 获取Mssql初始信息
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeTimingRecoveryMssqlInitInfo(array $body = array())
    {
        $url = $this -> url . '/timing/recovery/rc_mssql_init_info';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 2-1 恢复 准备-1 恢复 获取还原时间点 - 文件
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listTimingRecoveryPathList(array $body = array())
    {
        $url = $this -> url . '/timing/recovery/rc_path_list';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 2-1 恢复 准备-4 恢复 认证MsSql数据库
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function verifyTimingRecoveryMssqlInfo(array $body = array())
    {
        $url = $this -> url . '/timing/recovery/rc_verify_mssql_info';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 恢复 准备 获取oracle恢复点日志
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listTimingRecoveryOracleRcPointInfo(array $body = array())
    {
        $url = $this -> url . '/timing/recovery/rc_sbt';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 恢复 准备 获取MySQL备份目录信息
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeRcMysqlInfo(array $body = array())
    {
        $url = $this -> url . '/timing/recovery/rc_mysql_info';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 恢复 获取控制文件参数文件列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listSbtContrlFile(array $body = array())
    {
        $url = $this -> url . '/timing/recovery/sbt_contrlfile';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 恢复 获取DBID
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeSbtDbid(array $body = array())
    {
        $url = $this -> url . '/timing/recovery/sbt_dbid';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 2-2 恢复 新建/编辑-1 恢复 新建
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createTimingRecovery(array $body = array())
    {
        $url = $this -> url . '/timing/recovery';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 2-2 恢复 新建/编辑-3 恢复 修改
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyTimingRecovery(array $body = array())
    {
        $url = $this -> url . '/timing/recovery/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * 2-2 恢复 新建/编辑-2 恢复 获取单个
     * 
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function describeTimingRecovery(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/timing/recovery/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 2-3 恢复 列表-1 恢复 获取列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listTimingRecovery(array $body = array())
    {
        $url = $this -> url . '/timing/recovery';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 2-3 恢复 列表-3 恢复 删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteTimingRecovery(array $body = array())
    {
        $url = $this -> url . '/timing/recovery';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 2-3 恢复 列表-2 恢复 状态
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listTimingRecoveryStatus(array $body = array())
    {
        $url = $this -> url . '/timing/recovery/status';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 2-3 恢复 列表-4 恢复 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function startTimingRecovery(array $body = array())
    {
        $url = $this -> url . '/timing/recovery/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 2-3 恢复 列表-4 恢复 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function stopTimingRecovery(array $body = array())
    {
        $url = $this -> url . '/timing/recovery/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 2-4 恢复 mssql 获取单个组
     * 
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function describeGroupTimingRecovery(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/timing/recovery/' . $body['uuid'] . '/group';
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 恢复 检查 目录是否存在
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function timingRecoveryCheckDir(array $body = array())
    {
        $url = $this -> url . '/timing/recovery/check_dir';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 2-5 恢复 多库备份获取数据库列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listTimingRecoveryDbInfo(array $body = array())
    {
        $url = $this -> url . '/timing/recovery/db_info';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 恢复 - 准备1 - DB2获取时间列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listTimingRecoveryDb2Time(array $body = array())
    {
        $url = $this -> url . '/timing/recovery/rc_db2_time';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 恢复 获取GAUSS还原时间点
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listTimingRecoveryGaussTime(array $body = array())
    {
        $url = $this -> url . '/timing/recovery/gaussdb_rc_time';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 达梦 获取备份集信息
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeTimingRecoveryDmBackupInfo(array $body = array())
    {
        $url = $this -> url . '/timing/recovery/dm_backup_info';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 还原 - 临时挂载复制卷
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function mountVolume(array $body = array())
    {
        $url = $this -> url . '/timing/recovery/volume_operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 还原 - 临时挂载复制卷
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function statusVolume(array $body = array())
    {
        $url = $this -> url . '/timing/recovery/volume_operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 文件还原 - 挂载路径动作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function taskMountDir(array $body = array())
    {
        $url = $this -> url . '/timing/recovery/task_mount_dir';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 合成恢复获取还原时间点列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listFileSnapshot(array $body = array())
    {
        $url = $this -> url . '/timing/recovery/file_snapshot_list';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 合成恢复获取备份点数据库详细信息
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listDbNames(array $body = array())
    {
        $url = $this -> url . '/timing/recovery/db_names';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * Mysql表恢复 - 获取数据库表信息
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listMysqlDbTableInfo(array $body = array())
    {
        $url = $this -> url . '/timing/recovery/mysql_db_table_info';
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