<?php
namespace i2up\bigdata\v20240228;

use i2up\Http\Client;
use i2up\Http\Error;

class Recovery {
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
     *  准备 - 获取备份列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listBackupHistory(array $body = array())
    {
        $url = $this -> url . '/bigdata/recovery/bak_history';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  新建
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createBigdataRecovery(array $body = array())
    {
        $url = $this -> url . '/bigdata/recovery';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     *  单个
     * 
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function describeBigdataRecovery(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/bigdata/recovery/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url);
        return $res;
    }
    /**
     *  删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteBigdataRecovery(array $body = array())
    {
        $url = $this -> url . '/bigdata/recovery';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }
    /**
     *  列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listBigdataRecovery(array $body = array())
    {
        $url = $this -> url . '/bigdata/recovery';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  状态
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listBigdataRecoveryStatus(array $body = array())
    {
        $url = $this -> url . '/bigdata/recovery/status';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function operateBigdataRecovery(array $body = array())
    {
        $url = $this -> url . '/bigdata/recovery/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     *  认证
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
     *  获取hive表详细信息
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function getTableInfoDetail(array $body = array())
    {
        $url = $this -> url . '/bigdata/recovery/table_info_detail';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     *  获取hive分区详细信息
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function getBigdataRecoveryPartitionInfoDetail(array $body = array())
    {
        $url = $this -> url . '/bigdata/recovery/partition_info_detail';
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
        return array($r, null);
    }
}