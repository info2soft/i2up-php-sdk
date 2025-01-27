<?php
namespace i2up\stream\v20250123;

use i2up\Http\Client;
use i2up\Http\Error;

class TbCmp {
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
     * 表比较 - 新建
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createTbCmp(array $body = array())
    {
        $url = $this -> url . '/vers/v3/sync_tb_cmp';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 表比较 - 状态
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listSyncTbCmpStatus(array $body = array())
    {
        $url = $this -> url . '/vers/v3/sync_tb_cmp/status';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 表比较 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function stopTbCmp(array $body = array())
    {
        $url = $this -> url . '/vers/v3/sync_tb_cmp/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 表比较 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function restartTbCmp(array $body = array())
    {
        $url = $this -> url . '/vers/v3/sync_tb_cmp/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 表比较 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function cmpStopTime(array $body = array())
    {
        $url = $this -> url . '/vers/v3/sync_tb_cmp/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 表比较 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function cmpResumeTime(array $body = array())
    {
        $url = $this -> url . '/vers/v3/sync_tb_cmp/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 表比较 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function cmpImmediate(array $body = array())
    {
        $url = $this -> url . '/vers/v3/sync_tb_cmp/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 表比较 - 比较结果
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeSyncTbCmpResult(array $body = array())
    {
        $url = $this -> url . '/vers/v3/sync_tb_cmp/result';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 表比较 - 详细信息
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeTbCmpErrorMsg(array $body = array())
    {
        $url = $this -> url . '/vers/v3/sync_tb_cmp/error_msg';
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
        $r['ret'] = $ret->statusCode;
        return array($r, null);
    }
}