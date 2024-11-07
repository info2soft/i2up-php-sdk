<?php
namespace i2up\active\v20240819;

use i2up\Http\Client;
use i2up\Http\Error;

class Summary {
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
     * 总览 - 同步任务
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listSummaryView(array $body = array())
    {
        $url = $this -> url . '/active/summary/list_view';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 数据库同步 - 总览
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listSummary(array $body = array())
    {
        $url = $this -> url . '/active/summary';
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
        }
        
        if (!$ret->ok()) {
            return array(null, new Error($url, $ret));
        }
        $r = ($ret->body === null) ? array() : $ret->json();
        $r['ret'] = $ret->statusCode;
        return array($r, null);
    }
}