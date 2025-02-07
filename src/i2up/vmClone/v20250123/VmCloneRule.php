<?php
namespace i2up\vmClone\v20250123;

use i2up\Http\Client;
use i2up\Http\Error;

class VmCloneRule {
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
     * 虚机克隆规则 - 新建
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createVmCloneRule(array $body = array())
    {
        $url = $this -> url . '/vm_clone/rule';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 虚机克隆规则 - 获取列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listVmCloneRule(array $body = array())
    {
        $url = $this -> url . '/vm_clone/rule';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 虚机克隆规则 - 获取单个详情
     * 
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function describeVmCloneRule(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/vm_clone/rule/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 虚机克隆规则 - 删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteVmCloneRule(array $body = array())
    {
        $url = $this -> url . '/vm_clone/rule';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 虚机克隆规则 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function startVmCloneRule(array $body = array())
    {
        $url = $this -> url . '/vm_clone/rule/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 虚机克隆规则 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function stopVmCloneRule(array $body = array())
    {
        $url = $this -> url . '/vm_clone/rule/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 虚机克隆规则 - 获取状态
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listVmCloneRuleStatus(array $body = array())
    {
        $url = $this -> url . '/vm_clone/rule/status';
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