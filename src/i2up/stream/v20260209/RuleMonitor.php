<?php
namespace i2up\stream\v20260209;

use i2up\Http\Client;
use i2up\Http\Error;

class RuleMonitor {
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
     * 监控统计 - 机器节点折线图
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listActiveNodeChart(array $body = array())
    {
        $url = $this -> url . '/stream/resource/node_chart';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 监控统计 - 机器节点资源占用
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listActiveNodeResources(array $body = array())
    {
        $url = $this -> url . '/stream/resource/node_info';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 监控统计 - 设置机器节点默认监控路径
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function updateNodeDefaultMonitorPath(array $body = array())
    {
        $url = $this -> url . '/stream/resource/node_path';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 同步规则 - 获取监控配置
     * 
     * @return array
     */
    public function getSyncRuleMonitorConf()
    {
        $url = $this -> url . '/vers/v3/stream/monitor';
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 同步规则 - 更新监控配置
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifySyncRuleMonitorConf(array $body = array())
    {
        $url = $this -> url . '/vers/v3/stream/monitor';
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * 同步规则 - 监控信息导出
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function exportSyncRuleMonitorStat(array $body = array())
    {
        $url = $this -> url . '/active/rule/statistics_export';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 同步规则 - 规则状态监控 解析统计
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function syncRuleExtractStatistics(array $body = array())
    {
        $url = $this -> url . '/active/rule/extract_statistics';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 同步规则 - 规则状态监控 装载统计
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function syncRuleLoadStatistics(array $body = array())
    {
        $url = $this -> url . '/active/rule/load_statistics';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 同步规则 - 规则状态监控 表解析统计
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function syncRuleTableExtractStatistics(array $body = array())
    {
        $url = $this -> url . '/active/rule/table_extract_statistics';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 同步规则 - 规则状态监控 表装载统计
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function syncRuleTableLoadStatistics(array $body = array())
    {
        $url = $this -> url . '/active/rule/table_load_statistics';
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
        } else if ($method === 'put') {
            $ret = Client::put($url, $body, $header);
        }
        
        if (!$ret->ok()) {
            return array(null, new Error($url, $ret));
        }
        $r = ($ret->body === null) ? array() : $ret->json();
        $r['ret'] = $ret->statusCode;
        return array($r, null);
    }
}