<?php
namespace i2up\bigdata\v20240819;

use i2up\Http\Client;
use i2up\Http\Error;

class Backup {
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
     * 备份 - 新建
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createBigdataBackup(array $body = array())
    {
        $url = $this -> url . '/bigdata/backup';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 备份 - 列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listBigdataBackup(array $body = array())
    {
        $url = $this -> url . '/bigdata/backup';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 备份 - 状态
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listBigdataBackupStatus(array $body = array())
    {
        $url = $this -> url . '/bigdata/backup/status';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 备份 - 单个
     * 
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function describeBigdataBackup(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/bigdata/backup/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 备份 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function startBigdataBackup(array $body = array())
    {
        $url = $this -> url . '/bigdata/backup/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 备份 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function stopBigdataBackup(array $body = array())
    {
        $url = $this -> url . '/bigdata/backup/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 备份 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function startImmediatelyBigdataBackup(array $body = array())
    {
        $url = $this -> url . '/bigdata/backup/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 备份 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function enableBigdataBackup(array $body = array())
    {
        $url = $this -> url . '/bigdata/backup/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 备份 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function disableBigdataBackup(array $body = array())
    {
        $url = $this -> url . '/bigdata/backup/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 备份 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function pauseBigdataBackup(array $body = array())
    {
        $url = $this -> url . '/bigdata/backup/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 备份 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function resumeBigdataBackup(array $body = array())
    {
        $url = $this -> url . '/bigdata/backup/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 备份 - 删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteBigdataBackup(array $body = array())
    {
        $url = $this -> url . '/bigdata/backup';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 备份 - 查看冷数据 -  建表语句
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listBigdataBackupTableDdl(array $body = array())
    {
        $url = $this -> url . '/bigdata/backup/table_ddl';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 大数据平台 - 认证
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function authBigdataPlatform(array $body = array())
    {
        $url = $this -> url . '/bigdata/backup/auth';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 条件获取hive数据库表名
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listBigdataHiveTable(array $body = array())
    {
        $url = $this -> url . '/bigdata/backup/hive_table_list';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 获取所有数据库
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listAllBigdataHiveDatabase(array $body = array())
    {
        $url = $this -> url . '/bigdata/backup/all_hive_database';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 大数据 - 获取hive库中相应表的区名
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function getBigdataBackupPartitions(array $body = array())
    {
        $url = $this -> url . '/bigdata/backup/partitions';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 备份 - 导入
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function importBigdataBackup(array $body = array())
    {
        $url = $this -> url . '/bigdata/backup/import';
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