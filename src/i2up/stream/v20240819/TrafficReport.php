<?php
namespace i2up\stream\v20240819;

use i2up\Http\Client;
use i2up\Http\Error;

class TrafficReport {
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
     * 报表规则 - 列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listReportRule(array $body = array())
    {
        $url = $this -> url . '/report_rule';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 报表规则 - 查看报表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listReportRuleStatistics(array $body = array())
    {
        $url = $this -> url . '/report_rule/statistics';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 报表规则 - 导出历史
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listReportRuleHistory(array $body = array())
    {
        $url = $this -> url . '/report_rule/history';
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
        }
        
        if (!$ret->ok()) {
            return array(null, new Error($url, $ret));
        }
        $r = ($ret->body === null) ? array() : $ret->json();
        $r['ret'] = $ret->statusCode;
        return array($r, null);
    }
}