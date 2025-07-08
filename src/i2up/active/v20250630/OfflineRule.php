<?php
namespace i2up\active\v20250630;

use i2up\Http\Client;
use i2up\Http\Error;

class OfflineRule {
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
     * 离线同步 - 列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listOfflineRule(array $body = array())
    {
        $url = $this -> url . '/offline_rule';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 离线同步 - 新建
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createActiveOfflineRule(array $body = array())
    {
        $url = $this -> url . '/offline_rule';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 离线同步 - 修改
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function updateActiveOfflineRule(array $body = array())
    {
        $url = $this -> url . '/offline_rule/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * 离线同步 - 状态
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listOfflineRuleStatus(array $body = array())
    {
        $url = $this -> url . '/offline_rule/status';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 离线同步 - 删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteOfflineRule(array $body = array())
    {
        $url = $this -> url . '/offline_rule';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 离线同步 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function resumeOfflineRule(array $body = array())
    {
        $url = $this -> url . '/offline_rule/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 离线同步 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function stopOfflineRule(array $body = array())
    {
        $url = $this -> url . '/offline_rule/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 离线同步 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function restartOfflineRule(array $body = array())
    {
        $url = $this -> url . '/offline_rule/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 离线同步 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function stopScheduleOfflineRule(array $body = array())
    {
        $url = $this -> url . '/offline_rule/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 离线同步 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function resumeScheduleOfflineRule(array $body = array())
    {
        $url = $this -> url . '/offline_rule/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 离线同步 - 字符集
     * 
     * @return array
     */
    public function getOfflineRuleCharset()
    {
        $url = $this -> url . '/offline_rule/charset';
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 离线同步 - 单条获取
     * 
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function describeOfflineRule(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/offline_rule/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 离线同步规则组 - 单条获取
     * 
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function getOfflineRuleGroup(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/offline_rule_group/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 离线同步规则组 - 修改
     * 
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function updateOfflineRuleGroup(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/offline_rule_group/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('put', $url);
        return $res;
    }

    /**
     * 离线同步 - 修改维护模式
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function switchOfflineRuleMaintenance(array $body = array())
    {
        $url = $this -> url . '/offline_rule/maintenance';
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