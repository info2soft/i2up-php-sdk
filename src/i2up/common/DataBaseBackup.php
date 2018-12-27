<?php

namespace i2up\common;

use i2up\Http\Client;
use i2up\Http\Error;

class DataBaseBackup {
    private $url;
    private $token;
    public function __construct($auth)
    {
        $this -> url = $auth -> ip . 'cc';
        $this -> token = $auth -> token();
    }

    /**
     * 配置导入
     * @param array $body
     * @return array
     */
    public function importConfig(array $body = array())
    {
        $url = $this -> url . '/import';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 配置导出
     * @param array $body
     * @return array
     */
    public function exportConfig(array $body = array())
    {
        $url = $this -> url . '/export';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 备份历史
     * @return array
     */
    public function listBackupHistory()
    {
        $url = $this -> url . '/backup_history';
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 备份配置
     * @param array $body
     * @return array
     */
    public function backupConfig(array $body = array())
    {
        $url = $this -> url . '/backup';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 备份配置详情
     * @return array
     */
    public function describeBackupConfig()
    {
        $url = $this -> url . '/backup';
        $res = $this -> httpRequest('get', $url);
        return $res;
    }
    private function httpRequest($method, $url, $body = null)
    {
        if (isset($this -> token)) {
            $header = array('Authorization' => $this -> token);
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