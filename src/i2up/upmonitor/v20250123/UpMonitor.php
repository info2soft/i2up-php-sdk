<?php
namespace i2up\upmonitor\v20250123;

use i2up\Http\Client;
use i2up\Http\Error;

class UpMonitor {
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
     * Dashborad-虚拟化概览
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function upMonitorVpRuleStat(array $body = array())
    {
        $url = $this -> url . '/up_monitor/vp_overall';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * Dashboard-总览（系统概览）
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function upMonitorOverall(array $body = array())
    {
        $url = $this -> url . '/up_monitor/overall';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 平台监控-概览概要
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listUpMonitorPlatSummary(array $body = array())
    {
        $url = $this -> url . '/up_monitor/plat_summary';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 平台监控 - 事件记录
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listStatistics(array $body = array())
    {
        $url = $this -> url . '/up_monitor/statistics';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 平台监控 - 事件记录下载
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function downloadStatistics(array $body = array())
    {
        $url = $this -> url . '/up_monitor/statistics/download';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 平台监控 - 规则监控
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listUpMonitorRules(array $body = array())
    {
        $url = $this -> url . '/up_monitor/rules';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 平台监控-操作日志
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listOpLog(array $body = array())
    {
        $url = $this -> url . '/up_monitor/op_log';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 平台监控 - 用户信息
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listUser(array $body = array())
    {
        $url = $this -> url . '/up_monitor/user';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 平台监控 - 用户导出
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function exportUsers(array $body = array())
    {
        $url = $this -> url . '/up_monitor/user/export';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 子平台 - 认证
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function authUpMonitor(array $body = array())
    {
        $url = $this -> url . '/up_monitor/auth';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 子平台 - 获取子平台token
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeUpMonitorToken(array $body = array())
    {
        $url = $this -> url . '/up_monitor/token';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 子平台 - 新建
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createUpMonitor(array $body = array())
    {
        $url = $this -> url . '/up_monitor';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 子平台 - 修改
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyUpMonitor(array $body = array())
    {
        $url = $this -> url . '/up_monitor/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * 子平台 - 获取列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listUpMonitor(array $body = array())
    {
        $url = $this -> url . '/up_monitor';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 子平台 - 获取单个
     * 
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function describeUpMonitor(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/up_monitor/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 子平台 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function refreshUpMonitor(array $body = array())
    {
        $url = $this -> url . '/up_monitor/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 子平台 - 状态
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listUpMonitorStatus(array $body = array())
    {
        $url = $this -> url . '/up_monitor/status';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 子平台 - 删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteUpMonitor(array $body = array())
    {
        $url = $this -> url . '/up_monitor';
        $res = $this -> httpRequest('delete', $url, $body);
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