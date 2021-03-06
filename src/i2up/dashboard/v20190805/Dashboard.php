<?php

namespace i2up\dashboard\v20190805;

use i2up\Config;
use i2up\Http\Client;
use i2up\Http\Error;

class Dashboard {
    private $url;
    private $token;
    private $accessKey;
    private $secretKey;
    public function __construct($auth)
    {
        $this -> url = $auth -> ip . 'dashboard';
        if ($auth -> tokenAuthType) {
            $this -> token = $auth -> token();
        } else {
            $this -> accessKey = $auth -> accessKey();
            $this -> secretKey = $auth -> secretKey();
        }
    }

    /**
     * 整体状态统计
     * @return array
     */
    public function overall()
    {
        $url = $this -> url . '/overall';
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * Dashboard - 平台监控（整体状态统计）
     * @return array
     */
    public function upMonitorOverall()
    {
        $url = $this -> url . '/up_monitor_overall';
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 高可用列表
     * @param array $body
     * $body['page'] String  default 1
     * $body['limit'] String  default 30
     * @return array
     */
    public function HA(array $body = array())
    {
        $url = $this -> url . '/ha';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 虚机规则 成功率
     * @param array $body
     * $body['uuid'] String  可选，用虚机规则过滤
     * $body['type'] String  可选，用任务类型过滤， 'I2VP_BK'： 备份规则， 'I2VP_RC'：恢复规则， 'I2VP_MV'：迁移规则， 'I2VP_PT'：复制规则，
     * $body['wk_uuid'] String  可选，用虚拟平台过滤
     * $body['mode'] String  必传，显示近 week | month | year 的统计
     * $body['group_uuid'] String  可选， 用组规则过滤
     * @return array
     */
    public function describeVpRuleRate(array $body = array())
    {
        $url = $this -> url . '/vp_rule';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 虚机 保护率
     * @param array $body
     * $body['vp_uuid'] String  可选（不传获取所有）
     * @return array
     */
    public function describeVmProtectRate(array $body = array())
    {
        $url = $this -> url . '/vp_vm';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  获取规则列表
     *
     * @param array $body  参数详见 API 手册
     * $body['limit'] Number  可选，默认30
     * $body['page'] Number  可选，默认1
     * $body['type'] Number  0：default； 1：cluster； 2：block； 10：template
     * @return array
     */
    public function repBackup(array $body = array())
    {
        $url = $this -> url . '/rep';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  获取节点列表
     *
     * @param array $body  参数详见 API 手册
     * $body['limit'] Number  可选，默认30
     * $body['page'] Number 可选，默认1
     * $body['type'] Number 可选，默认0
     * @return array
     */
    public function node(array $body = array())
    {
        $url = $this -> url . '/node';
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
        return array($r, null);
    }
}