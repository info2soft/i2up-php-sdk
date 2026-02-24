<?php
namespace i2up\backupRule\v20260209;

use i2up\Http\Client;
use i2up\Http\Error;

class BackupRuleV3 {
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
     * 备份规则 - 新建
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createBackup(array $body = array())
    {
        $url = $this -> url . '/vers/v3/backup_rule';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 备份规则 - 修改
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyBackupRule(array $body = array())
    {
        $url = $this -> url . '/vers/v3/backup_rule/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * 备份规则 - 批量设置
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function batchModifyBackupRule(array $body = array())
    {
        $url = $this -> url . '/vers/v3/backup_rule/batch_update';
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * 备份规则 - 获取单个详情
     * 
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function describeBackupRule(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/vers/v3/backup_rule/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 备份规则 - 获取列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listBackupRule(array $body = array())
    {
        $url = $this -> url . '/vers/v3/backup_rule';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 备份规则 - 删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteBackupRule(array $body = array())
    {
        $url = $this -> url . '/vers/v3/backup_rule';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 备份规则 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function enableBackupRule(array $body = array())
    {
        $url = $this -> url . '/vers/v3/backup_rule/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 备份规则 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function disableBackupRule(array $body = array())
    {
        $url = $this -> url . '/vers/v3/backup_rule/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 备份规则 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function manualStartBackupRule(array $body = array())
    {
        $url = $this -> url . '/vers/v3/backup_rule/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 备份规则 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function cloneBackupRule(array $body = array())
    {
        $url = $this -> url . '/vers/v3/backup_rule/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 备份规则 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function stopBackupRule(array $body = array())
    {
        $url = $this -> url . '/vers/v3/backup_rule/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 备份规则 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function rebootBackupRule(array $body = array())
    {
        $url = $this -> url . '/vers/v3/backup_rule/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 备份规则 - 获取状态
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listBackupRuleStatus(array $body = array())
    {
        $url = $this -> url . '/vers/v3/backup_rule/status';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 备份规则 - NBU备份清理临时数据
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function cleanNbuCache(array $body = array())
    {
        $url = $this -> url . '/vers/v3/backup_rule/clean_nbu_cache';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * Oracle备份 - 获取脚本路径
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeScriptPath(array $body = array())
    {
        $url = $this -> url . '/vers/v3/backup_rule/script_path';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * oracle - 获取备份脚本
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeBackupScript(array $body = array())
    {
        $url = $this -> url . '/vers/v3/backup_rule/script';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * oracle - 修改备份脚本
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyBackupScript(array $body = array())
    {
        $url = $this -> url . '/vers/v3/backup_rule/script';
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * oracle - 获取数据库列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listOracleDatabases(array $body = array())
    {
        $url = $this -> url . '/vers/v3/backup_rule/oracle_database';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * oracle - 获取数据库对象信息
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listOracleObjects(array $body = array())
    {
        $url = $this -> url . '/vers/v3/backup_rule/oracle_object';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * doris - 获取数据库列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listDorisDb(array $body = array())
    {
        $url = $this -> url . '/vers/v3/backup_rule/list_doris_db';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * polardbx备份加密开关状态
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function checkPolardbXEncrypt(array $body = array())
    {
        $url = $this -> url . '/vers/v3/backup_rule/check_polardb_x_encrypt';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * exchange获取备份内容
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeExchangeInfo(array $body = array())
    {
        $url = $this -> url . '/vers/v3/backup_rule/exchange_info';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * Elasticsearch获取索引
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listElasticsearchIndics(array $body = array())
    {
        $url = $this -> url . '/vers/v3/backup_rule/elasticsearch_indices';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * MongoDB - 获取数据库
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listMongoDBDatabases(array $body = array())
    {
        $url = $this -> url . '/vers/v3/backup_rule/mongodb_database';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * MongoDB - 获取表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listMongoDBTables(array $body = array())
    {
        $url = $this -> url . '/vers/v3/backup_rule/mongodb_tables';
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