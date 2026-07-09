<?php
namespace i2up\backupSet\v20260626;

use i2up\Http\Client;
use i2up\Http\Error;

class BackupSetV3 {
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
     * 备份集管理 - 列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listBackupSet(array $body = array())
    {
        $url = $this -> url . '/vers/v3/backup_set';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 备份集管理 - 获取备份链
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listBackupSetChain(array $body = array())
    {
        $url = $this -> url . '/vers/v3/backup_set/chain';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 备份集管理 - 获取列表查询候选信息
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listQueryArgsBackupSet(array $body = array())
    {
        $url = $this -> url . '/vers/v3/backup_set/query_args';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 备份集管理 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function extendBackupSet(array $body = array())
    {
        $url = $this -> url . '/vers/v3/backup_set/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 备份集管理 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function expireBackupSet(array $body = array())
    {
        $url = $this -> url . '/vers/v3/backup_set/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 备份集管理 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function setPrimaryBackupSet(array $body = array())
    {
        $url = $this -> url . '/vers/v3/backup_set/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 备份集管理 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function mountBackupSet(array $body = array())
    {
        $url = $this -> url . '/vers/v3/backup_set/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 备份集管理 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function unmountBackupSet(array $body = array())
    {
        $url = $this -> url . '/vers/v3/backup_set/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 备份集管理 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function verifyBackupSet(array $body = array())
    {
        $url = $this -> url . '/vers/v3/backup_set/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 备份集管理 - 手动删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteDbBackupSet(array $body = array())
    {
        $url = $this -> url . '/vers/v3/backup_set';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 备份集管理 - 手动强制清理
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function manualForceDeleteDbBackupSet(array $body = array())
    {
        $url = $this -> url . '/vers/v3/backup_set/force_delete';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 备份集管理 - 手动清理备份集
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function manualForceCleanDbBackupSet(array $body = array())
    {
        $url = $this -> url . '/vers/v3/backup_set/clean_up';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 备份集复制 - 提交复制规则
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createBackupSetRepRule(array $body = array())
    {
        $url = $this -> url . '/vers/v3/backup_set/rule';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 备份集管理 - 单个
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeBackupSet(array $body = array())
    {
        $url = $this -> url . '/vers/v3/backup_set/single';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 备份集管理 - 已删除备份集 单个
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeDeletedBackupSet(array $body = array())
    {
        $url = $this -> url . '/vers/v3/backup_set/single_deleted';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 备份集管理 - 查看副本
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeBackupSetCopy(array $body = array())
    {
        $url = $this -> url . '/vers/v3/backup_set/copy_list';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 备份集复制 - 列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listBackupSetRule(array $body = array())
    {
        $url = $this -> url . '/vers/v3/backup_set/rule';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 备份集管理 - 验证
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function validateBackupSet(array $body = array())
    {
        $url = $this -> url . '/vers/v3/backup_set/verify';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 备份集管理 - 过期当前主副本 & 更新最小副本号备份集为主副本（内部程序调用）
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function resetPrimaryBackupSet(array $body = array())
    {
        $url = $this -> url . '/vers/v3/backup_set/reset_primary';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 备份集管理 - 查看备份链
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listBackupChain(array $body = array())
    {
        $url = $this -> url . '/vers/v3/backup_set/backup_chain';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 备份集管理 - 演练
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function drillBackupSet(array $body = array())
    {
        $url = $this -> url . '/vers/v3/backup_set/drill';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 获取（存在备份集的）实例客户端列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listSrcClient(array $body = array())
    {
        $url = $this -> url . '/vers/v3/backup_set/list_src_client';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 备份集管理 - 介质验证
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function validationBackupSet(array $body = array())
    {
        $url = $this -> url . '/vers/v3/backup_set/validation';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 备份集管理 - 获取介质验证结果
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function getValidationResult(array $body = array())
    {
        $url = $this -> url . '/vers/v3/backup_set/validation_result';
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