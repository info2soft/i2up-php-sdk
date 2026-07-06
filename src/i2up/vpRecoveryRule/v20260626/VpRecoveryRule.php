<?php
namespace i2up\vpRecoveryRule\v20260626;

use i2up\Http\Client;
use i2up\Http\Error;

class VpRecoveryRule {
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
    public function createVpRecoveryRule(array $body = array())
    {
        $url = $this -> url . '/vers/v3/vp/recovery_rule';
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
    public function modifyVpRecoveryRule(array $body = array())
    {
        $url = $this -> url . '/vers/v3/vp/recovery_rule/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * 获取列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listVpRecoveryRule(array $body = array())
    {
        $url = $this -> url . '/vers/v3/vp/recovery_rule';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 获取单个详情
     * 
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function describeVpRecoveryRule(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/vers/v3/vp/recovery_rule/' . $body['uuid'];
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
    public function deleteVpRecoveryRule(array $body = array())
    {
        $url = $this -> url . '/vers/v3/vp/recovery_rule';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function operateVpRecoveryRule(array $body = array())
    {
        $url = $this -> url . '/vers/v3/vp/recovery_rule/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 获取状态
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listVpRecoveryRuleStatus(array $body = array())
    {
        $url = $this -> url . '/vers/v3/vp/recovery_rule/status';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 瞬时恢复热迁移 - 获取磁盘列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listDiskList(array $body = array())
    {
        $url = $this -> url . '/vers/v3/vp/recovery_rule/disk_list';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 热迁移 - 检查磁盘是否允许迁移
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function canMigrateCheck(array $body = array())
    {
        $url = $this -> url . '/vers/v3/vp/recovery_rule/can_migrate_check';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 热迁移 - 执行热迁移
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function migrate(array $body = array())
    {
        $url = $this -> url . '/vers/v3/vp/recovery_rule/migrate';
        $res = $this -> httpRequest('post', $url, $body);
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