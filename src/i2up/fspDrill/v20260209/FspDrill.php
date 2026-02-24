<?php
namespace i2up\fspDrill\v20260209;

use i2up\Http\Client;
use i2up\Http\Error;

class FspDrill {
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
     * 演练 - 新建
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createFspDrillRule(array $body = array())
    {
        $url = $this -> url . '/vers/v3/fsp/drill_rule';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 演练 - 修改
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyFspDrillRule(array $body = array())
    {
        $url = $this -> url . '/vers/v3/fsp/drill_rule/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * 演练 - 获取详情
     * 
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function describeFspDrillRule(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/vers/v3/fsp/drill_rule/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 演练 - 获取列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listFspDrillRule(array $body = array())
    {
        $url = $this -> url . '/vers/v3/fsp/drill_rule';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 演练 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function operateFspDrillRule(array $body = array())
    {
        $url = $this -> url . '/vers/v3/fsp/drill_rule/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 演练 - 删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteFspDrillRule(array $body = array())
    {
        $url = $this -> url . '/vers/v3/fsp/drill_rule';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 演练 - 获取状态
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listFspDrillRuleStatus(array $body = array())
    {
        $url = $this -> url . '/vers/v3/fsp/drill_rule/status';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 副本管理 - 列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listFspDrillInfo(array $body = array())
    {
        $url = $this -> url . '/vers/v3/fsp/drill_info';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 副本管理 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function operateFspDrillinfo(array $body = array())
    {
        $url = $this -> url . '/vers/v3/fsp/drill_info/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 副本管理 - 状态
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listFspDrillInfoStatus(array $body = array())
    {
        $url = $this -> url . '/vers/v3/fsp/drill_info/status';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 副本管理 - 删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function delFspDrillRule(array $body = array())
    {
        $url = $this -> url . '/vers/v3/fsp/drill_info';
        $res = $this -> httpRequest('delete', $url, $body);
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