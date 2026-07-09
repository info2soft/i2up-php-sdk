<?php
namespace i2up\stream\v20260626;

use i2up\Http\Client;
use i2up\Http\Error;

class MaskRule {
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
     * 数据安全总览
     * 
     * @return array
     */
    public function listSummary()
    {
        $url = $this -> url . '/vers/v3/mask/summary';
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 数据安全总览 - 列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listSummaryView(array $body = array())
    {
        $url = $this -> url . '/vers/v3/mask/summary/list_view';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 脱敏规则 - 列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listMaskRules(array $body = array())
    {
        $url = $this -> url . '/vers/v3/mask/rule';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 脱敏规则 - 新建
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createMaskRules(array $body = array())
    {
        $url = $this -> url . '/vers/v3/mask/rule';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 脱敏规则 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function startMaskRule(array $body = array())
    {
        $url = $this -> url . '/vers/v3/mask/rule/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 脱敏规则 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function stopMaskRule(array $body = array())
    {
        $url = $this -> url . '/vers/v3/mask/rule/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 脱敏规则 - 删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteMaskRule(array $body = array())
    {
        $url = $this -> url . '/vers/v3/mask/rule';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 脱敏规则 - 单个
     * 
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function describeMaskRule(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/vers/v3/mask/rule/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 脱敏规则 - 状态
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listMaskRuleStatus(array $body = array())
    {
        $url = $this -> url . '/vers/v3/mask/rule/status';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 脱敏规则 - 导入脱敏文件配置
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function importMaskRuleInfo(array $body = array())
    {
        $url = $this -> url . '/vers/v3/mask/rule/import_rule/' . $body['uuid'];
        unset($body['uuid']);
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