<?php
namespace i2up\vpBackupRule\v20260626;

use i2up\Http\Client;
use i2up\Http\Error;

class VpBackupRule {
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
    public function createVpBackupRule(array $body = array())
    {
        $url = $this -> url . '/vers/v3/vp/backup_rule';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 修改
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyVpBackupRule(array $body = array())
    {
        $url = $this -> url . '/vers/v3/vp/backup_rule/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * 批量设置
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function batchModifyVpBackupRule(array $body = array())
    {
        $url = $this -> url . '/vers/v3/vp/backup_rule/batch_update';
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * 获取列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listVpBackupRule(array $body = array())
    {
        $url = $this -> url . '/vers/v3/vp/backup_rule';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 获取单个详情
     * 
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function describeVpBackupRule(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/vers/v3/vp/backup_rule/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteVpBackupRule(array $body = array())
    {
        $url = $this -> url . '/vers/v3/vp/backup_rule';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function operateVpBackupRule(array $body = array())
    {
        $url = $this -> url . '/vers/v3/vp/backup_rule/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 获取状态
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listVpBackupRuleStatus(array $body = array())
    {
        $url = $this -> url . '/vers/v3/vp/backup_rule/status';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 将虚机加入到规则
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function taskAddVms(array $body = array())
    {
        $url = $this -> url . '/vers/v3/vp/backup_rule/task_add_vms';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 虚拟化备份 - 新建/修改前置校验
     * 
     * @return array
     */
    public function preCheckVpBackupRule()
    {
        $url = $this -> url . '/vers/v3/vp/backup_rule/pre_check';
        $res = $this -> httpRequest('post', $url);
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