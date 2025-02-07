<?php
namespace i2up\common\v20250123;

use i2up\Http\Client;
use i2up\Http\Error;

class Logs {
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
     * i2node日志-规则/任务日志（uuid）
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listTaskLog(array $body = array())
    {
        $url = $this -> url . '/logs';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * i2node日志-HA日志
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listHaLog(array $body = array())
    {
        $url = $this -> url . '/logs/ha';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * i2node日志-节点日志（m_uuid）
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listNodeLog(array $body = array())
    {
        $url = $this -> url . '/logs/node';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * npsvr日志-任务日志
     * 
     * @return array
     */
    public function listNpsvrLog()
    {
        $url = $this -> url . '/logs/npsvr';
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * traffic日志-logs.traffic
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listTrafficLog(array $body = array())
    {
        $url = $this -> url . '/logs/traffic';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * logserver-上传统计报表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function collectStatistics(array $body = array())
    {
        $url = $this -> url . '/collect_statistics';
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
        }
        
        if (!$ret->ok()) {
            return array(null, new Error($url, $ret));
        }
        $r = ($ret->body === null) ? array() : $ret->json();
        $r['ret'] = $ret->statusCode;
        return array($r, null);
    }
}