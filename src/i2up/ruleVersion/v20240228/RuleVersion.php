<?php
namespace i2up\ruleVersion\v20240228;

use i2up\Http\Client;
use i2up\Http\Error;

class RuleVersion {
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
     * 获取规则历史版本列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listRuleVersion(array $body = array())
    {
        $url = $this -> url . '/rule_version';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     * 查看具体配置
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeRuleVersionInfo(array $body = array())
    {
        $url = $this -> url . '/rule_version/info';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  操作
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function setMainRuleVersion(array $body = array())
    {
        $url = $this -> url . '/rule_version/operate';
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
        }
        
        if (!$ret->ok()) {
            return array(null, new Error($url, $ret));
        }
        $r = ($ret->body === null) ? array() : $ret->json();
        return array($r, null);
    }
}