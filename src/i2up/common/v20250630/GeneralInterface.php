<?php
namespace i2up\common\v20250630;

use i2up\Http\Client;
use i2up\Http\Error;

class GeneralInterface {
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
     * 版本信息
     * 
     * @return array
     */
    public function describeVersion()
    {
        $url = $this -> url . '/version';
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 新版本信息
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function latestVersion(array $body = array())
    {
        $url = $this -> url . '/check/latest_version';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 获取版本提交记录
     * 
     * @return array
     */
    public function listVersionHistory()
    {
        $url = $this -> url . '/version_history';
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 连接测试
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function nodeConnectTest(array $body = array())
    {
        $url = $this -> url . '/vers/v3/node/connect_test';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
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
        $url = $this -> url . '/dashboard/overall';
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
        $url = $this -> url . '/dashboard/user_summary';
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 概览 - 总览
     * 
     * @return array
     */
    public function statusOverall()
    {
        $url = $this -> url . '/dashboard/status_overall';
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 概览 - 数据集成 总览
     * 
     * @return array
     */
    public function statusStreamOverall()
    {
        $url = $this -> url . '/dashboard/stream_overall';
        $res = $this -> httpRequest('get', $url);
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
        $url = $this -> url . '/dashboard/overall_logs';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 概览 - 资源管理
     * 
     * @return array
     */
    public function listOverallResourceSta()
    {
        $url = $this -> url . '/dashboard/overall_resource';
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
        $url = $this -> url . '/dashboard/overall_real_time_copy';
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
        $url = $this -> url . '/dashboard/overall_ha';
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
        $url = $this -> url . '/dashboard/vp_rule';
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
        $url = $this -> url . '/dashboard/schedule_list';
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
     * 概览 - 总览V9
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function getDashboardStatOverall(array $body = array())
    {
        $url = $this -> url . '/dashboard/stat_overall';
        $res = $this -> httpRequest('get', $url, $body);
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
        $url = $this -> url . '/dashboard/plate';
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
        $url = $this -> url . '/dashboard/plate';
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 展示列 - 新建|修改
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createColumnExt(array $body = array())
    {
        $url = $this -> url . '/column_list';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 展示列 - 单个
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeColumnext(array $body = array())
    {
        $url = $this -> url . '/column_list';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 导出规则
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function exportRules(array $body = array())
    {
        $url = $this -> url . '/export_rules';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 导入规则
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function importRules(array $body = array())
    {
        $url = $this -> url . '/import_rules';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 统计报表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listStatisticsReport(array $body = array())
    {
        $url = $this -> url . '/statistics/report';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 签署CSR
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function csrSign(array $body = array())
    {
        $url = $this -> url . '/pki/csr_sign';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 证书清单
     * 
     * @return array
     */
    public function listCerts()
    {
        $url = $this -> url . '/pki/certs';
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 下载根证书
     * 
     * @return array
     */
    public function downloadCa()
    {
        $url = $this -> url . '/pki/download_ca';
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 异步rpc任务列表
     * 
     * @return array
     */
    public function listRpcTask()
    {
        $url = $this -> url . '/rpc_task';
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 后台任务列表
     * 
     * @return array
     */
    public function listCronTask()
    {
        $url = $this -> url . '/cron_task';
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 后台任务删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteCronTask(array $body = array())
    {
        $url = $this -> url . '/cron_task';
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