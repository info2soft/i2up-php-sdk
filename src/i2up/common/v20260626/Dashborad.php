<?php
namespace i2up\common\v20260626;

use i2up\Http\Client;
use i2up\Http\Error;

class Dashborad {
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
     * Dashboard-统一监控平台
     * 
     * @return array
     */
    public function upMonitorOverall()
    {
        $url = $this -> url . '/dashboard/up_monitor_overall';
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * Dashboard-整体状态统计
     * 
     * @return array
     */
    public function overall()
    {
        $url = $this -> url . '/vers/v3/dashboard/overall';
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * Dashboard-sysadmin
     * 
     * @return array
     */
    public function sysadmin()
    {
        $url = $this -> url . '/vers/v3/dashboard/user_summary';
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 概览 - 总览V8
     * 
     * @return array
     */
    public function statusOverall()
    {
        $url = $this -> url . '/vers/v3/dashboard/status_overall';
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 概览 - 总览
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function getDashboardStatOverall(array $body = array())
    {
        $url = $this -> url . '/vers/v3/dashboard/stat_overall';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 概览 - 总览 日志
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listOverallLogs(array $body = array())
    {
        $url = $this -> url . '/vers/v3/dashboard/overall_logs';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 概览 - 资源管理&存储管理
     * 
     * @return array
     */
    public function listOverallResourceSta()
    {
        $url = $this -> url . '/vers/v3/dashboard/overall_resource';
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 概览 - 实时数据复制
     * 
     * @return array
     */
    public function listOverallRealTimeCopy()
    {
        $url = $this -> url . '/vers/v3/dashboard/overall_real_time_copy';
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 概览 - 应用高可用
     * 
     * @return array
     */
    public function listOverallHa()
    {
        $url = $this -> url . '/vers/v3/dashboard/overall_ha';
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 概览 - 副本管理
     * 
     * @return array
     */
    public function listOverallCdm()
    {
        $url = $this -> url . '/dashboard/overall_cdm';
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 概览 - 系统迁移
     * 
     * @return array
     */
    public function listOverallFspMv()
    {
        $url = $this -> url . '/dashboard/overall_fsp_mv';
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 概览 - 节点/复制规则 兼容6.1
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function nodeRepSummary(array $body = array())
    {
        $url = $this -> url . '/dashboard/node_rep_summary';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 概览 - 虚机概览，获取任务成功率
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listVpRuleStat(array $body = array())
    {
        $url = $this -> url . '/vers/v3/dashboard/vp_rule';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 概览 - 周期性定时数据复制规则概览
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listSchedule(array $body = array())
    {
        $url = $this -> url . '/vers/v3/dashboard/schedule_list';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 概览 - 总览 大数据冷热数据
     * 
     * @return array
     */
    public function getDashboardHotColdData()
    {
        $url = $this -> url . '/dashboard/hot_cold_data';
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 总览 - 板块信息 - 更新
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function updateDashboardPlate(array $body = array())
    {
        $url = $this -> url . '/vers/v3/dashboard/plate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 总览 - 板块信息 - 获取
     * 
     * @return array
     */
    public function getDashboardPlate()
    {
        $url = $this -> url . '/vers/v3/dashboard/plate';
        $res = $this -> httpRequest('get', $url);
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
        $r['ret'] = $ret->statusCode;
        return array($r, null);
    }
}