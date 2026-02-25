<?php
namespace i2up\common\v20260209;

use i2up\Http\Client;
use i2up\Http\Error;

class StatisticsV3 {
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
     * 事件记录 - 获取列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listStatistics(array $body = array())
    {
        $url = $this -> url . '/vers/v3/statistics';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 事件记录 - 单条详情
     * 
     * @body['id'] int  必填 ID
     * @return array
     */
    public function describeStatistics(array $body = array())
    {
        if (empty($body) || !isset($body['id'])) return $body;
        $url = $this -> url . '/vers/v3/statistics/' . $body['id'];
        unset($body['id']);
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 事件记录 - 标为已读
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function readStatistics(array $body = array())
    {
        $url = $this -> url . '/vers/v3/statistics';
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * 事件统计 - 整体统计 - 按功能统计
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listStatisticsChart(array $body = array())
    {
        $url = $this -> url . '/vers/v3/statistics/chart';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 统计报表 - 发送配置
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function updateStatisticsConfig(array $body = array())
    {
        $url = $this -> url . '/vers/v3/statistics/config';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 统计报表 - 获取配置信息
     * 
     * @return array
     */
    public function listStatisticsConfig()
    {
        $url = $this -> url . '/vers/v3/statistics/config';
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 事件记录 - 下载
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function downloadStatistics(array $body = array())
    {
        $url = $this -> url . '/vers/v3/statistics/download';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 事件统计 - 整体统计下载
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function downloadStatisticsChart(array $body = array())
    {
        $url = $this -> url . '/vers/v3/statistics/chart_download';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 事件统计 - 整体统计 - 按规则统计
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listStatisticsRuleChart(array $body = array())
    {
        $url = $this -> url . '/vers/v3/statistics/rule_chart';
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
        $url = $this -> url . '/vers/v3/statistics/trend_chart';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 事件统计 - 获取显示项目
     * 
     * @return array
     */
    public function listStatisticsDisplayItems()
    {
        $url = $this -> url . '/vers/v3/statistics/display_items';
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 事件统计 - 设置显示项目
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function setStatisticsDisplayItems(array $body = array())
    {
        $url = $this -> url . '/vers/v3/statistics/display_items';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 备份集数据量统计
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listStatisticsBackupSet(array $body = array())
    {
        $url = $this -> url . '/vers/v3/statistics/backup_set';
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