<?php
namespace i2up\common\v20250123;

use i2up\Http\Client;
use i2up\Http\Error;

class CcMonitor {
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
     * 主界面
     * 
     * @return array
     */
    public function listCcMonitor()
    {
        $url = $this -> url . '/cc_monitor';
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 单个节点状态
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listNodeStatus(array $body = array())
    {
        $url = $this -> url . '/cc_monitor/status';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 后台任务
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listCronTask(array $body = array())
    {
        $url = $this -> url . '/cc/cron_task';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 重置后台任务
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function resetCronTask(array $body = array())
    {
        $url = $this -> url . '/cc/cron_task_reset';
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * 修改后台任务时间间隔
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyCronTask(array $body = array())
    {
        $url = $this -> url . '/cc/cron_task_modify';
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * 控制台资源、状态信息
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeCcGeneralInfo(array $body = array())
    {
        $url = $this -> url . '/cc_monitor/general_info';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 控制台-服务操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function startCcService(array $body = array())
    {
        $url = $this -> url . '/cc_monitor/service/operation';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 控制台-服务操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function reloadCcService(array $body = array())
    {
        $url = $this -> url . '/cc_monitor/service/operation';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 控制台-服务操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function stopCcService(array $body = array())
    {
        $url = $this -> url . '/cc_monitor/service/operation';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 控制台-进程操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function killCcProcess(array $body = array())
    {
        $url = $this -> url . '/cc_monitor/process/operation';
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