<?php
namespace i2up\timing\v20240819;

use i2up\Http\Client;
use i2up\Http\Error;

class TimingBackup {
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
     * 1-1 备份 准备-4 备份 获取MsSql数据源
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeTimingBackupMssqlSource(array $body = array())
    {
        $url = $this -> url . '/timing/backup/mssql_source';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 1-1 备份 准备-1 备份/恢复 认证Oracle信息（目前未使用）
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function verifyTimingBackupOracleInfo(array $body = array())
    {
        $url = $this -> url . '/timing/backup/verify_oracle_info';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 1-1 备份 准备-2 备份/恢复 获取Oracle表空间（目前未使用）
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeTimingBackupOracleContent(array $body = array())
    {
        $url = $this -> url . '/timing/backup/oracle_content';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 1-1 备份 准备-3 备份 获取Oracle脚本路径
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function descibeTimingBackupOracleSriptPath(array $body = array())
    {
        $url = $this -> url . '/timing/backup/oracle_script_path';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 1-1 备份 准备-5 备份 获取MsSql数据库列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listTimingBackupMssqlDbList(array $body = array())
    {
        $url = $this -> url . '/timing/backup/mssql_db_list';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 备份 准备 验证oracle登录认证
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function verifyTimingBackupOracleLogin(array $body = array())
    {
        $url = $this -> url . '/timing/backup/oracle_login';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 1-2 备份 新建/编辑-1 备份 新建
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createTimingBackup(array $body = array())
    {
        $url = $this -> url . '/timing/backup';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 1-2 备份 新建/编辑-2 备份 获取单个
     * 
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function describeTimingBackup(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/timing/backup/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 1-2 备份 新建/编辑-3 备份 修改
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyTimingBackup(array $body = array())
    {
        $url = $this -> url . '/timing/backup/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * 1-3 备份 列表-1 备份 获取列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listTimingBackup(array $body = array())
    {
        $url = $this -> url . '/timing/backup';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 1-3 备份 列表-2 备份 状态
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listTimingBackupStatus(array $body = array())
    {
        $url = $this -> url . '/timing/backup/status';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 1-3 备份 列表-3 备份 删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteTimingBackup(array $body = array())
    {
        $url = $this -> url . '/timing/backup';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 1-3 备份 列表-4 备份 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function startTimingBackup(array $body = array())
    {
        $url = $this -> url . '/timing/backup/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 1-3 备份 列表-4 备份 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function stopTimingBackup(array $body = array())
    {
        $url = $this -> url . '/timing/backup/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 1-3 备份 列表-4 备份 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function startImmediateTimingBackup(array $body = array())
    {
        $url = $this -> url . '/timing/backup/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 备份 列表 - 查看更多
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function showTimingBackupDetailInfo(array $body = array())
    {
        $url = $this -> url . '/timing/backup/detail';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 1-4 备份 获取达梦数据库信息
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function descibeDmDbInfo(array $body = array())
    {
        $url = $this -> url . '/timing/backup/dm_db_info';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 1-5 备份 获取GaussDB库/表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listGaussDBDatabaseTables(array $body = array())
    {
        $url = $this -> url . '/timing/backup/list_gaussdb_database_tables';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 备份 - 获取备份点信息
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listTimingBackupPoint(array $body = array())
    {
        $url = $this -> url . '/timing/backup/bkup_point_list';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 备份 - 删除备份时间点
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteTimingBackupPoint(array $body = array())
    {
        $url = $this -> url . '/timing/backup/bkup_point';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 手动归档 - 获取备份时间点
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listBakVer(array $body = array())
    {
        $url = $this -> url . '/timing/backup/bak_ver_list';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 手动归档
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function bakDataArchive(array $body = array())
    {
        $url = $this -> url . '/timing/backup/bak_data_archive';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * GoldenDB 查询实例信息
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeGoldebDBInfo(array $body = array())
    {
        $url = $this -> url . '/timing/backup/goldendb_info';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * GoldenDB 校验实例
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function verifyGoldebDB(array $body = array())
    {
        $url = $this -> url . '/timing/backup/goldendb_verify';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 获取自定义数据类型
     * 
     * @return array
     */
    public function listCustomTypes()
    {
        $url = $this -> url . '/timing/backup/custom_type';
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 3-1 作业任务 列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listTimingWork(array $body = array())
    {
        $url = $this -> url . '/timing/work';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 3-2 作业任务 删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteTimingWork(array $body = array())
    {
        $url = $this -> url . '/timing/work';
        $res = $this -> httpRequest('delete', $url, $body);
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