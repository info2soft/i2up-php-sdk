<?php
namespace i2up\common\v20240228;

use i2up\Http\Client;
use i2up\Http\Error;

class Statistics {
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
     *  获取列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listStatistics(array $body = array())
    {
        
        $url = $this -> url . 'statistics';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  单条详情
     * 
     * @return array
     */
    public function describeStatistics(array $body = array())
    {
        if (empty($body) || !isset($body['id'])) return $body;
        $url = $this -> url . 'statistics/' . $body['id'];
        unset($body['id']);
        
        $res = $this -> httpRequest('get', $url);
        return $res;
    }
    /**
     *  标为已读
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function readStatistics(array $body = array())
    {
        
        $url = $this -> url . 'statistics';
        
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }
    /**
     *  整体统计 - 按功能统计
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listStatisticsChart(array $body = array())
    {
        
        $url = $this -> url . 'statistics/chart';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  发送配置
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function updateStatisticsConfig(array $body = array())
    {
        
        $url = $this -> url . 'statistics/config';
        
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     *  获取配置信息
     * 
     * @return array
     */
    public function listStatisticsConfig()
    {
        
        $url = $this -> url . 'statistics/config';
        
        $res = $this -> httpRequest('get', $url);
        return $res;
    }
    /**
     *  下载
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function downloadStatistics(array $body = array())
    {
        
        $url = $this -> url . 'statistics/download';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  整体统计下载
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function downloadStatisticsChart(array $body = array())
    {
        
        $url = $this -> url . 'statistics/chart_download';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  整体统计 - 按规则统计
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listStatisticsRuleChart(array $body = array())
    {
        
        $url = $this -> url . 'statistics/rule_chart';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     * 事件统计
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listStatisticsTrendChart(array $body = array())
    {
        
        $url = $this -> url . 'statistics/trend_chart';
        
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
        return array($r, null);
    }
}