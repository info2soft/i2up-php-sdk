<?php
namespace i2up\active\v20240228;

use i2up\Http\Client;
use i2up\Http\Error;

class ScriptMask {
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
     * 增加脚本
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createScript(array $body = array())
    {
        $url = $this -> url . '/mask/script';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     * 修改脚本
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyScript(array $body = array())
    {
        $url = $this -> url . '/mask/script/' . $body['uuid'];
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }
    /**
     * 删除脚本
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteScript(array $body = array())
    {
        $url = $this -> url . '/mask/script';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }
    /**
     * 获取脚本列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listScript(array $body = array())
    {
        $url = $this -> url . '/mask/script';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     * 下载脚本
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function downloadScript(array $body = array())
    {
        $url = $this -> url . '/mask/script/download';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     * 获取脚本详细信息
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function descriptScript(array $body = array())
    {
        $url = $this -> url . '/mask/script/' . $body['id'];
        unset($body['id']);
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     * 增加规则
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createRule(array $body = array())
    {
        $url = $this -> url . '/mask/script_rule';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     * 增加规则副本
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyScriptRule(array $body = array())
    {
        $url = $this -> url . '/mask/script_rule';
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }
    /**
     * 删除规则
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteRule(array $body = array())
    {
        $url = $this -> url . '/mask/script_rule';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }
    /**
     * 获取规则列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listRules(array $body = array())
    {
        $url = $this -> url . '/mask/script_rule';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     * 获取规则详细信息
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function descriptRule(array $body = array())
    {
        $url = $this -> url . '/mask/script_rule/' . $body['id'];
        unset($body['id']);
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     * 获取脚本执行结果
     * 
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function getScriptRuleResultDetail(array $body = array())
    {
        $url = $this -> url . '/mask/script_rule/status_detail/' . $body['uuid'];
        $res = $this -> httpRequest('get', $url);
        return $res;
    }
    /**
     * 获取规则状态
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listRuleStatus(array $body = array())
    {
        $url = $this -> url . '/mask/script_rule/status';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     * 启/停规则
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function operateRule(array $body = array())
    {
        $url = $this -> url . '/mask/script_rule/operate';
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
        return array($r, null);
    }
}