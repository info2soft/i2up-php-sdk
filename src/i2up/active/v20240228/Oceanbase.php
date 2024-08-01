<?php
namespace i2up\active\v20240228;

use i2up\Http\Client;
use i2up\Http\Error;

class Oceanbase {
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
     *  列表
     * 
     * @return array
     */
    public function listOceanRule()
    {
        $url = $this -> url . '/ocean/rule';
        $res = $this -> httpRequest('get', $url);
        return $res;
    }
    /**
     *  新建
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createOceanRule(array $body = array())
    {
        $url = $this -> url . '/ocean/rule';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     *  批量新建
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createBatchOceanRule(array $body = array())
    {
        $url = $this -> url . '/ocean/rule/batch';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     *  修改
     * 
     * @return array
     */
    public function modifyOceanRule()
    {
        $url = $this -> url . '/ocean/rule';
        $res = $this -> httpRequest('put', $url);
        return $res;
    }
    /**
     *  获取单个
     * 
     * @return array
     */
    public function describeOceanRule(array $body = array())
    {
        $url = $this -> url . '/ocean/rule/' . $body['id'];
        unset($body['id']);
        $res = $this -> httpRequest('get', $url);
        return $res;
    }
    /**
     *  删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteOceanRule(array $body = array())
    {
        $url = $this -> url . '/ocean/rule';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }
    /**
     *  操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function resumeOceanRule(array $body = array())
    {
        $url = $this -> url . '/ocean/rule/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     *  状态
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listSyncRulesStatus(array $body = array())
    {
        $url = $this -> url . '/ocean/rule/status';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  表修复
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createOceanTableFix(array $body = array())
    {
        $url = $this -> url . '/ocean/rule/table_fix';
        $res = $this -> httpRequest('post', $url, $body);
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
        } else if ($method === 'put') {
            $ret = Client::put($url, $body, $header);
        } else if ($method === 'delete') {
            $ret = Client::delete($url, $body, $header);
        }
        
        if (!$ret->ok()) {
            return array(null, new Error($url, $ret));
        }
        $r = ($ret->body === null) ? array() : $ret->json();
        return array($r, null);
    }
}