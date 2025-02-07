<?php
namespace i2up\common\v20250123;

use i2up\Http\Client;
use i2up\Http\Error;

class Diagnose {
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
     * 诊断 - 新建
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createDiagnose(array $body = array())
    {
        $url = $this -> url . '/diagnose';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 诊断 - 获取列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listDiagnose(array $body = array())
    {
        $url = $this -> url . '/diagnose';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 诊断 - 删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteDiagnose(array $body = array())
    {
        $url = $this -> url . '/diagnose';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 获取虚机规则列表
     * 
     * @return array
     */
    public function listVpRules()
    {
        $url = $this -> url . '/diagnose/list_vp_rules';
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