<?php
namespace i2up\guardData\v20260209;

use i2up\Http\Client;
use i2up\Http\Error;

class GuardData {
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
     * 节点管理 - 检查防篡改功能是否可用
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function nodeGuardDataEnabled(array $body = array())
    {
        $url = $this -> url . '/vers/v3/guard_data/node_guard_data_enabled';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 获取节点策略列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listGuardData(array $body = array())
    {
        $url = $this -> url . '/vers/v3/guard_data';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 新建策略
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createGuardData(array $body = array())
    {
        $url = $this -> url . '/vers/v3/guard_data';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 修改策略
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyGuardData(array $body = array())
    {
        $url = $this -> url . '/guard_data/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * 删除策略
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteGuardData(array $body = array())
    {
        $url = $this -> url . '/vers/v3/guard_data';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 获取防篡改节点状态
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listNodeStatus(array $body = array())
    {
        $url = $this -> url . '/vers/v3/guard_data/node_status';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 获取节点数据保护日志
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listGuardDataLogs(array $body = array())
    {
        $url = $this -> url . '/vers/v3/guard_data/list_guard_data_logs';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 威胁感知
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function threatPerception(array $body = array())
    {
        $url = $this -> url . '/vers/v3/guard_data/threat_perception';
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