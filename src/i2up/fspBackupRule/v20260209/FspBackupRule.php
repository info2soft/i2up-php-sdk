<?php
namespace i2up\fspBackupRule\v20260209;

use i2up\Http\Client;
use i2up\Http\Error;

class FspBackupRule {
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
     * 整机备份 - 新建
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createFspBackupRule(array $body = array())
    {
        $url = $this -> url . '/vers/v3/fsp/backup_rule';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 整机备份 - 列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listFspBackupRule(array $body = array())
    {
        $url = $this -> url . '/vers/v3/fsp/backup_rule';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 整机备份 - 单个
     * 
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function describeFspBackupRule(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/vers/v3/fsp/backup_rule/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 整机备份 - 修改
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyFspBackupRule(array $body = array())
    {
        $url = $this -> url . '/vers/v3/fsp/backup_rule/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * 整机备份 - 批量设置
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function batchModifyFspBackupRule(array $body = array())
    {
        $url = $this -> url . '/vers/v3/fsp/backup_rule/batch_update';
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * 整机备份 - 删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteFspBackupRule(array $body = array())
    {
        $url = $this -> url . '/vers/v3/fsp/backup_rule';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 整机备份 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function enableFspBackupRule(array $body = array())
    {
        $url = $this -> url . '/vers/v3/fsp/backup_rule/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 整机备份 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function disableFspBackupRule(array $body = array())
    {
        $url = $this -> url . '/vers/v3/fsp/backup_rule/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 整机备份 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function manualStartFspBackupRule(array $body = array())
    {
        $url = $this -> url . '/vers/v3/fsp/backup_rule/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 整机备份 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function cloneFspBackupRule(array $body = array())
    {
        $url = $this -> url . '/vers/v3/fsp/backup_rule/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 整机备份 - 状态
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listFspBackupRuleStatus(array $body = array())
    {
        $url = $this -> url . '/vers/v3/fsp/backup_rule/status';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 整机备份 - 获取节点设备列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listFspBackupDeviceInfo(array $body = array())
    {
        $url = $this -> url . '/vers/v3/fsp/backup_rule/device_info';
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