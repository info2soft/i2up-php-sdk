<?php
namespace i2up\dashboard\v20260626;

use i2up\Http\Client;
use i2up\Http\Error;

class Dashboard {
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
     * 资源概览（旧）
     * 
     * @return array
     */
    public function resourceView()
    {
        $url = $this -> url . '/vers/v3/dashboard/source';
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 资源概览 - 获取资源池列表
     * 
     * @return array
     */
    public function listBackupCenter()
    {
        $url = $this -> url . '/dashboard/list_backup_center';
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 资源概览 - 获取资源使用率和保护覆盖率
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function getBackupCenterInfo(array $body = array())
    {
        $url = $this -> url . '/dashboard/backup_center_info';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 资源概览 - 获取接管、演练平台列表
     * 
     * @return array
     */
    public function listHosts()
    {
        $url = $this -> url . '/dashboard/list_hosts';
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 设置资源保护覆盖率
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function resourceProtectionCoverage(array $body = array())
    {
        $url = $this -> url . '/vers/v3/dashboard/resource_protection_coverage';
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * 任务概览列表
     * 
     * @return array
     */
    public function taskView()
    {
        $url = $this -> url . '/vers/v3/dashboard/task';
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 5 Dashboard - 获取规则列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function repBackup(array $body = array())
    {
        $url = $this -> url . '/dashboard/rep';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * Dashboard - 高可用列表
     * 
     * @return array
     */
    public function ha()
    {
        $url = $this -> url . '/dashboard/ha';
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 3 Dashboard - 获取节点列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function node(array $body = array())
    {
        $url = $this -> url . '/dashboard/node';
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