<?php
namespace i2up\common\v20260626;

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
     * 展示列 - 新建|修改
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createColumnExt(array $body = array())
    {
        $url = $this -> url . '/vers/v3/column_list';
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
        $url = $this -> url . '/vers/v3/column_list';
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
        $url = $this -> url . '/vers/v3/statistics/report';
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

    /**
     * 文件下载
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function dl(array $body = array())
    {
        $url = $this -> url . '/vers/v3/dl';
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