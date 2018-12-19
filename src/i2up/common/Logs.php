<?php

namespace i2up\common;

use i2up\Config;
use i2up\Http\Client;
use i2up\Http\Error;

class Logs {
    private $logsUrl;
    private $token;
    public function __construct($auth)
    {
        $this -> logsUrl = Config::baseUrl . 'logs';
        $this -> token = $auth -> token();
    }
    /**
     * 规则/任务日志
     * @param array $body
     * $body['uuid'] String    规则或者任务的uuid
     * $body['level'] Number    日志等级，非必填，默认所有；0：ERROR，1：WARNING，2：NORMAL, 日志等级
     * $body['start'] Number    时间戳，非必填, 查询开始时间
     * $body['page'] Number    默认为1, 符合条件范围的当前页数
     * $body['end'] Number    时间戳，非必填, 查询结束时间
     * $body['limit'] Number    默认为系统参数设置数量, 每页数量
     * @return array
     */
    public function listTaskLog(array $body = array())
    {
        $url = $this -> logsUrl;
        $log = $this -> get($url, $body);
        return $log;
    }

    /**
     * HA日志
     * @param array $body
     * $body['uuid'] String    HA规则的uuid
     * $body['level'] Number    日志等级，非必填，默认所有；0：ERROR，1：WARNING，2：NORMAL, 日志等级
     * $body['start'] Number    时间戳，非必填, 查询开始时间
     * $body['page'] Number    默认为1, 符合条件范围的当前页数
     * $body['end'] Number    时间戳，非必填, 查询结束时间
     * $body['limit'] Number    默认为系统参数设置数量, 每页数量
     * $body['node_uuid'] String    节点uuid, 不传返回所有的日志
     * @return array
     */
    public function listHALog(array $body = array())
    {
        $url = $this -> logsUrl . '/ha';
        $log = $this -> get($url, $body);
        return $log;
    }

    /**
     * 节点日志
     * @param array $body
     * $body['uuid'] String    节点uuid
     * $body['level'] Number    日志等级，非必填，默认所有；0：ERROR，1：WARNING，2：NORMAL, 日志等级
     * $body['start'] Number    时间戳，非必填, 查询开始时间
     * $body['page'] Number    默认为1, 符合条件范围的当前页数
     * $body['end'] Number    时间戳，非必填, 查询结束时间
     * $body['limit'] Number    默认为系统参数设置数量, 每页数量
     * @return array
     */
    public function listNodeLog(array $body = array())
    {
        $url = $this -> logsUrl . '/node';
        $log = $this -> get($url, $body);
        return $log;
    }

    /**
     * 任务日志
     * 结果和节点日志一样，请直接调用logs
     * @return array
     */
    public function listNpsvrLog()
    {
        $url =  $this -> logsUrl . '/npsvr';
        return $this -> get($url);
    }

    /**
     * @param array $body
     * $body['start_stamp'] Number  Unix时间戳, 实时流量开始时间点
     * $body['type'] String  real,实时 day,日流量 month,历史流量, 流量类型
     * $body['uuid'] String  规则或者任务的uuid
     * @return array
     */
    public function listTrafficLog(array $body = array())
    {
        $url = $this->logsUrl . '/traffic';
        $log = $this -> get($url, $body);
        return $log;
    }
    private function get($url, $body = null)
    {
        if (isset($this -> token)) {
            $header = array('Authorization' => $this -> token);
        } else {
            $header = array();
        }
        $ret = Client::get($url, $body, $header);
        if (!$ret->ok()) {
            return array(null, new Error($url, $ret));
        }
        $r = ($ret->body === null) ? array() : $ret->json();
        return array($r, null);
    }
}