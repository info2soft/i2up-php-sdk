<?php
namespace i2up\common\v20250123;

use i2up\Http\Client;
use i2up\Http\Error;

class OpLogs {
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
     * 操作日志-获取操作日志列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listOpLog(array $body = array())
    {
        $url = $this -> url . '/op_log';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 操作日志-导入
     * 
     * @return array
     */
    public function importOpLog()
    {
        $url = $this -> url . '/op_log/import';
        $res = $this -> httpRequest('post', $url);
        return $res;
    }

    /**
     * （未添加）操作日志-日志下载
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function downloadOpLog(array $body = array())
    {
        $url = $this -> url . '/op_log/download';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 用户日志 - 列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listUserLog(array $body = array())
    {
        $url = $this -> url . '/op_log/user_log';
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