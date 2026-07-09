<?php
namespace i2up\fspRecoveryRule\v20260626;

use i2up\Http\Client;
use i2up\Http\Error;

class FspRecoveryRule {
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
     * 整机恢复 - 新建
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createFspRecoveryRule(array $body = array())
    {
        $url = $this -> url . '/vers/v3/fsp/recovery_rule';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 整机恢复 - 列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listFspRecoveryRules(array $body = array())
    {
        $url = $this -> url . '/vers/v3/fsp/recovery_rule';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 整机恢复 - 单个
     * 
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function listFspRecoveryRule(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/vers/v3/fsp/recovery_rule/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 整机恢复 - 删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteFspRecoveryRule(array $body = array())
    {
        $url = $this -> url . '/vers/v3/fsp/recovery_rule';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 整机恢复 - 修改
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyFspRecoveryRule(array $body = array())
    {
        $url = $this -> url . '/vers/v3/fsp/recovery_rule/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * 整机恢复 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function startFspRecoveryRule(array $body = array())
    {
        $url = $this -> url . '/vers/v3/fsp/recovery_rule/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 整机恢复 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function stopFspRecoveryRule(array $body = array())
    {
        $url = $this -> url . '/vers/v3/fsp/recovery_rule/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 整机恢复 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function rebootFspRecoveryRule(array $body = array())
    {
        $url = $this -> url . '/vers/v3/fsp/recovery_rule/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 整机恢复 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function powerOnFspRecoveryRule(array $body = array())
    {
        $url = $this -> url . '/vers/v3/fsp/recovery_rule/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 整机恢复 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function powerOffFspRecoveryRule(array $body = array())
    {
        $url = $this -> url . '/vers/v3/fsp/recovery_rule/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 整机恢复 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function openConsoleFspRecoveryRule(array $body = array())
    {
        $url = $this -> url . '/vers/v3/fsp/recovery_rule/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 整机恢复 - 状态
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listFspRecoveryRuleStatus(array $body = array())
    {
        $url = $this -> url . '/vers/v3/fsp/recovery_rule/status';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 整机恢复 - 获取BIOS类型
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function getFspRecoveryRuleBiosType(array $body = array())
    {
        $url = $this -> url . '/vers/v3/fsp/recovery_rule/bios_type';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 整机恢复 - 目标机驱动URL列表
     * 
     * @return array
     */
    public function listFspRecoveryRuleDriverListUrl()
    {
        $url = $this -> url . '/vers/v3/fsp/recovery_rule/driver_url_list';
        $res = $this -> httpRequest('get', $url);
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