<?php
namespace i2up\recoveryRule\v20240228;

use i2up\Http\Client;
use i2up\Http\Error;

class RecoveryRule {
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
     * 新建
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createRecovery(array $body = array())
    {
        
        $url = $this -> url . 'recovery_rule';
        
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     * 修改
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyRecoveryRule(array $body = array())
    {
        $url = $this -> url . 'recovery_rule/' . $body['uuid'];
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }
    /**
     * 删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteRecoveryRule(array $body = array())
    {
        
        $url = $this -> url . 'recovery_rule';
        
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }
    /**
     * 获取列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listRecoveryRule(array $body = array())
    {
        
        $url = $this -> url . 'recovery_rule';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     * 获取单个详情
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeRecoveryRule(array $body = array())
    {
        $url = $this -> url . 'recovery_rule/' . $body['uuid'];
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     * 操作 - 开始
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function startRecoveryRule(array $body = array())
    {
        
        $url = $this -> url . 'recovery_rule/operate';
        
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     * 操作 - 停止
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function stopRecoveryRule(array $body = array())
    {

        $url = $this -> url . 'recovery_rule/operate';

        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     * 获取状态
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listRecoveryRuleStatus(array $body = array())
    {
        
        $url = $this -> url . 'recovery_rule/status';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     * 文件恢复 获取目录
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listDir(array $body = array())
    {
        
        $url = $this -> url . 'recovery_rule/dir';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     * Oracle 获取恢复点日志
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listTimingRecoveryOracleRcPointInfo(array $body = array())
    {
        
        $url = $this -> url . 'recovery_rule/rc_sbt';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     * Oracle 获取参数文件列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listSbtContrlFile(array $body = array())
    {
        
        $url = $this -> url . 'recovery_rule/sbt_contrlfile';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     * Oracle 获取DBID
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeSbtDbid(array $body = array())
    {
        
        $url = $this -> url . 'recovery_rule/sbt_dbid';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  获取列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listVerifyBackupMedia(array $body = array())
    {
        
        $url = $this -> url . 'recovery_rule/verify_backup_media';
        
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
        return array($r, null);
    }
}