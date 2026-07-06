<?php
namespace i2up\common\v20260626;

use i2up\Http\Client;
use i2up\Http\Error;

class GeneralSettings {
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
     * etcd有效性检查
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function chkEtcdUrl(array $body = array())
    {
        $url = $this -> url . '/vers/v3/etcd/etcd_url_chk';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * ETCD - 新建/更新
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createUpdateEtcd(array $body = array())
    {
        $url = $this -> url . '/vers/v3/etcd';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * ETCD - 列表
     * 
     * @return array
     */
    public function listEtcd()
    {
        $url = $this -> url . '/vers/v3/etcd';
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * ETCD - 发现
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function scanEtcdConf(array $body = array())
    {
        $url = $this -> url . '/vers/v3/etcd/scan';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 服务调度器 - 新建/更新
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createUpdateScheduleSvr(array $body = array())
    {
        $url = $this -> url . '/vers/v3/schedule_svr';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 服务调度器 - 列表
     * 
     * @return array
     */
    public function listScheduleSvr()
    {
        $url = $this -> url . '/vers/v3/schedule_svr';
        $res = $this -> httpRequest('get', $url);
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