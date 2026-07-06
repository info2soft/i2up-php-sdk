<?php
namespace i2up\backupRule\v20260626;

use i2up\Http\Client;
use i2up\Http\Error;

class BackupRule {
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
     * 备份规则 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function enableBackupRule(array $body = array())
    {
        $url = $this -> url . '/backup_rule/operate';
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
        $url = $this -> url . '/backup_rule/operate';
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
        $url = $this -> url . '/backup_rule/operate';
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
        $url = $this -> url . '/backup_rule/operate';
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
        $url = $this -> url . '/backup_rule/operate';
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
        $url = $this -> url . '/backup_rule/operate';
        $res = $this -> httpRequest('post', $url, $body);
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
        $url = $this -> url . '/backup_rule';
        $res = $this -> httpRequest('delete', $url, $body);
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
        $url = $this -> url . '/backup_rule';
        $res = $this -> httpRequest('get', $url, $body);
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
        $url = $this -> url . '/backup_rule/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url);
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
        $url = $this -> url . '/backup_rule/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * 备份规则 - 新建
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createBackup(array $body = array())
    {
        $url = $this -> url . '/backup_rule';
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
        $url = $this -> url . '/backup_rule/status';
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
        $url = $this -> url . '/backup_rule/clean_nbu_cache';
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
        $url = $this -> url . '/backup_rule/script_path';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * oracle - 修改脚本
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyScript(array $body = array())
    {
        $url = $this -> url . '/backup_rule/script';
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * oracle - 获取脚本
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeScript(array $body = array())
    {
        $url = $this -> url . '/backup_rule/script';
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