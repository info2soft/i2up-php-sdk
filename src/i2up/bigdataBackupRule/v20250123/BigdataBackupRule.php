<?php
namespace i2up\bigdataBackupRule\v20250123;

use i2up\Http\Client;
use i2up\Http\Error;

class BigdataBackupRule {
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
     * 大数据备份 - 列表
     * 
     * @return array
     */
    public function listBigdataBackupRule()
    {
        $url = $this -> url . '/vers/v3/bigdata/backup_rule';
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 大数据备份 - 新建
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createBigdataBackupRule(array $body = array())
    {
        $url = $this -> url . '/vers/v3/bigdata/backup_rule';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 大数据备份 - 修改
     * 
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function modifyBigdataBackupRule(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/vers/v3/bigdata/backup_rule/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('put', $url);
        return $res;
    }

    /**
     * 大数据备份 - 单个
     * 
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function describeBigdataBackupRule(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/vers/v3/bigdata/backup_rule/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 大数据备份 - 状态
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listBigdataBackupRuleStatus(array $body = array())
    {
        $url = $this -> url . '/vers/v3/bigdata/backup_rule/status';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 大数据备份 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function manualStartBigdataBackupRule(array $body = array())
    {
        $url = $this -> url . '/vers/v3/bigdata/backup_rule/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 大数据备份 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function disableBigdataBackupRule(array $body = array())
    {
        $url = $this -> url . '/vers/v3/bigdata/backup_rule/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 大数据备份 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function enableBigdataBackupRule(array $body = array())
    {
        $url = $this -> url . '/vers/v3/bigdata/backup_rule/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 大数据备份 - 获取备份历史信息
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listBigdataBackupRuleBakHistory(array $body = array())
    {
        $url = $this -> url . '/vers/v3/bigdata/backup_rule/bak_history';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 大数据备份 - 获取Hive表信息
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listBigdataBackupRuleHiveTableInfo(array $body = array())
    {
        $url = $this -> url . '/vers/v3/bigdata/backup_rule/hive_table_info';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 大数据备份 - 获取Hive分区信息
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listBigdataBackupRuleHivePartitionInfo(array $body = array())
    {
        $url = $this -> url . '/vers/v3/bigdata/backup_rule/hive_partition_info';
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
        }
        
        if (!$ret->ok()) {
            return array(null, new Error($url, $ret));
        }
        $r = ($ret->body === null) ? array() : $ret->json();
        $r['ret'] = $ret->statusCode;
        return array($r, null);
    }
}