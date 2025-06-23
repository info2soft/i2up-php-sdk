<?php
namespace i2up\active\v20250630;

use i2up\Http\Client;
use i2up\Http\Error;

class Tidb {
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
     * 同步规则 - 新建
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createTidbRule(array $body = array())
    {
        $url = $this -> url . '/tidb/rule';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 同步规则 - 修改
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyTidbRule(array $body = array())
    {
        $url = $this -> url . '/tidb/rule';
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * 同步规则 - 删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteTidbRule(array $body = array())
    {
        $url = $this -> url . '/tidb/rule';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 同步规则 - 获取单个
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeTidbRule(array $body = array())
    {
        $url = $this -> url . '/tidb/rule/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 同步规则 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function resumeTidbRule(array $body = array())
    {
        $url = $this -> url . '/tidb/rule/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 同步规则 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function stopTidbRule(array $body = array())
    {
        $url = $this -> url . '/tidb/rule/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 同步规则 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function restartTidbRule(array $body = array())
    {
        $url = $this -> url . '/tidb/rule/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 同步规则 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function startParsingTidbRule(array $body = array())
    {
        $url = $this -> url . '/tidb/rule/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 同步规则 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function stopParsingTidbRule(array $body = array())
    {
        $url = $this -> url . '/tidb/rule/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 同步规则 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function resetParsingTidbRule(array $body = array())
    {
        $url = $this -> url . '/tidb/rule/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 同步规则 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function startLoadTidbRule(array $body = array())
    {
        $url = $this -> url . '/tidb/rule/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 同步规则 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function stopLoadTidbRule(array $body = array())
    {
        $url = $this -> url . '/tidb/rule/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 同步规则 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function resetLoadTidbRule(array $body = array())
    {
        $url = $this -> url . '/tidb/rule/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 同步规则 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function removeTidbRule(array $body = array())
    {
        $url = $this -> url . '/tidb/rule/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 同步规则 - 列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listTidbRules(array $body = array())
    {
        $url = $this -> url . '/tidb/rule';
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
        } else if ($method === 'put') {
            $ret = Client::put($url, $body, $header);
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