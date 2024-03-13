<?php
namespace i2up\backupSet\v20240228;

use i2up\Http\Client;
use i2up\Http\Error;

class BackupSet {
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
     *  列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listBackupSet(array $body = array())
    {
        
        $url = $this -> url . 'backup_set';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  获取列表查询候选信息
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listQueryArgsBackupSet(array $body = array())
    {
        
        $url = $this -> url . 'backup_set/query_args';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  操作 - 延长期限
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function extendBackupSet(array $body = array())
    {
        
        $url = $this -> url . 'backup_set/operate';
        
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     *  操作 - 立即过期
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function expireBackupSet(array $body = array())
    {

        $url = $this -> url . 'backup_set/operate';

        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     *  操作 - 设为主副本
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function setPrimaryBackupSet(array $body = array())
    {

        $url = $this -> url . 'backup_set/operate';

        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     *  手动删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteDbBackupSet(array $body = array())
    {
        
        $url = $this -> url . 'backup_set';
        
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }
    /**
     *  标记删除（底层程序调用）
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteBackupSet(array $body = array())
    {
        
        $url = $this -> url . 'backup_set/delete';
        
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     *  提交复制规则
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createBackupSetRepRule(array $body = array())
    {
        
        $url = $this -> url . 'backup_set/rule';
        
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     *  单个
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeBackupSet(array $body = array())
    {
        
        $url = $this -> url . 'backup_set/single';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  已删除备份集 单个
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeDeletedBackupSet(array $body = array())
    {
        
        $url = $this -> url . 'backup_set/single_deleted';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  查看副本
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeBackupSetCopy(array $body = array())
    {
        
        $url = $this -> url . 'backup_set/copy_list';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  验证
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function validateBackupSet(array $body = array())
    {
        
        $url = $this -> url . 'backup_set/verify';
        
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     *  过期当前主副本 & 更新最小副本号备份集为主副本
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function resetPrimaryBackupSet(array $body = array())
    {
        
        $url = $this -> url . 'backup_set/reset_primary';
        
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     *  查看备份链
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listBackupChain(array $body = array())
    {
        
        $url = $this -> url . 'backup_set/backup_chain';
        
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