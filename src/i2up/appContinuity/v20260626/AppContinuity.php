<?php
namespace i2up\appContinuity\v20260626;

use i2up\Http\Client;
use i2up\Http\Error;

class AppContinuity {
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
     * 应用容灾 - 新建
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createAppContinuity(array $body = array())
    {
        $url = $this -> url . '/app_continuity';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 应用容灾 - 修改
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyAppContinuity(array $body = array())
    {
        $url = $this -> url . '/app_continuity/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * 应用容灾 - 删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteAppContinuity(array $body = array())
    {
        $url = $this -> url . '/app_continuity';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 应用容灾 - 获取详情
     * 
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function describeAppContinuity(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/app_continuity/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 应用容灾 - 列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listAppContinuity(array $body = array())
    {
        $url = $this -> url . '/app_continuity';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 应用容灾 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function startAppContinuity(array $body = array())
    {
        $url = $this -> url . '/app_continuity/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 应用容灾 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function stopAppContinuity(array $body = array())
    {
        $url = $this -> url . '/app_continuity/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 应用容灾 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function mmediatelyAppContinuity(array $body = array())
    {
        $url = $this -> url . '/app_continuity/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 应用容灾 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function eleteAppContinuity(array $body = array())
    {
        $url = $this -> url . '/app_continuity/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 应用容灾 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function failoverAppContinuity(array $body = array())
    {
        $url = $this -> url . '/app_continuity/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 应用容灾 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function failbackAppContinuity(array $body = array())
    {
        $url = $this -> url . '/app_continuity/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 应用容灾 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function criptAppContinuity(array $body = array())
    {
        $url = $this -> url . '/app_continuity/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 应用容灾 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function startVmAppContinuity(array $body = array())
    {
        $url = $this -> url . '/app_continuity/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 应用容灾 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function stopVmAppContinuity(array $body = array())
    {
        $url = $this -> url . '/app_continuity/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 应用容灾 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyVmAppContinuity(array $body = array())
    {
        $url = $this -> url . '/app_continuity/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 应用容灾 - 获取状态
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listAppContinuityStatus(array $body = array())
    {
        $url = $this -> url . '/app_continuity/status';
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