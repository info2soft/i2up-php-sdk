<?php

namespace i2up\system\v20181217;

use i2up\Config;
use i2up\Http\Client;
use i2up\Http\Error;

class Settings {
    private $sysSettingUrl;
    private $token;
    public function __construct($auth)
    {
        $this -> sysSettingUrl = Config::baseUrl . 'sys';
        $this -> token = $auth -> token();
    }

    /**
     * 更新配置
     * @param array $body
     * @return array
     */
    public function updateSetting(array $body = array())
    {
        $url = $this -> sysSettingUrl . '/settings';
        $config = $this -> httpRequest('post', $url, $body);
        return $config;
    }

    /**
     * 获取配置
     * @return array
     */
    public function listSysSetting()
    {
        $url = $this -> sysSettingUrl . '/settings';
        $config = $this -> httpRequest('get', $url);
        return $config;
    }
    public function describeCCip()
    {
        $url = $this -> sysSettingUrl . '/settings/ips';
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