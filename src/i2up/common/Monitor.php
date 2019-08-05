<?php

namespace i2up\common;

use i2up\Http\Client;
use i2up\Http\Error;

class Monitor {
    private $url;
    private $token;
    private $accessKey;
    private $secretKey;
    public function __construct($auth)
    {
        $this -> url = $auth -> ip . 'monitor';
        if ($auth -> tokenAuthType) {
            $this -> token = $auth -> token();
        } else {
            $this -> accessKey = $auth -> accessKey();
            $this -> secretKey = $auth -> secretKey();
        }
    }

    /**
     * 磁盘信息
     * @param array $body
     * $body['uuid'] String
     * @return array
     */
    public function listDriversInfo(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/drivers_info/' . $body['uuid'];
        $res = $this -> httpRequest('get', $url);
        return $res;
    }


    /**
     * 当前硬件信息
     * @param array $body
     * $body['uuid'] String
     * @return array
     */
    public function listPhyInfo(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/phy_info/' . $body['uuid'];
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 获取图表展示项
     * @param array $body
     * $body['uuid'] String
     * @return array
     */
    public function listChartConfig(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/chart_config/' . $body['uuid'];
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 设置图表展示项
     * @param array $body
     * $body['uuid'] String
     * $body['storage_io'] Number
     * $body['nic_io'] Number
     * $body['per_core'] Number
     * $body['per_disk'] Number
     * $body['net_in'] Number
     * $body['net_out'] Number
     * @return array
     */
    public function setChartConfig(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/chart_config/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 获取备端系统状态（用于平台监控）
     * @return array
     */
    public function listBkNodeOverall()
    {
        $url = $this -> url . '/bk_node_overall';
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 图表数据
     * @param array $body
     * body['uuid'] String
     * body['start_time'] Number  Unix时间戳:154172980; get data form start_time
     * body['last_time'] Number  Unix时间戳:154172980; get data form after last time
     * @return array
     */
    public function listChartData(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/chart_data/' . $body['uuid'];
        unset($body['uuid']);
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
        }

        if (!$ret->ok()) {
            return array(null, new Error($url, $ret));
        }
        $r = ($ret->body === null) ? array() : $ret->json();
        return array($r, null);
    }
}