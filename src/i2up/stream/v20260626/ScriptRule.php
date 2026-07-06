<?php
namespace i2up\stream\v20260626;

use i2up\Http\Client;
use i2up\Http\Error;

class ScriptRule {
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
     * 执行管理 - 新建
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createRule(array $body = array())
    {
        $url = $this -> url . '/vers/v3/mask/script_rule';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 执行管理 - 删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteRule(array $body = array())
    {
        $url = $this -> url . '/vers/v3/mask/script_rule';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 执行管理 - 列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listRules(array $body = array())
    {
        $url = $this -> url . '/vers/v3/mask/script_rule';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 执行管理 - 单个
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function descriptRule(array $body = array())
    {
        $url = $this -> url . '/vers/v3/mask/script_rule/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 执行管理 - 结果
     * 
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function getScriptRuleResultDetail(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/vers/v3/mask/script_rule/status_detail/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 执行管理 - 状态
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listRuleStatus(array $body = array())
    {
        $url = $this -> url . '/vers/v3/mask/script_rule/status';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 执行管理 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function startRule(array $body = array())
    {
        $url = $this -> url . '/vers/v3/mask/script_rule/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 执行管理 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function stopRule(array $body = array())
    {
        $url = $this -> url . '/vers/v3/mask/script_rule/operate';
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