<?php
namespace i2up\stream\v20250630;

use i2up\Http\Client;
use i2up\Http\Error;

class Script {
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
     * 自定义脚本 - 新建
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createScript(array $body = array())
    {
        $url = $this -> url . '/vers/v3/mask/script';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 自定义脚本 - 修改
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyScript(array $body = array())
    {
        $url = $this -> url . '/vers/v3/mask/script/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * 自定义脚本 - 删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteScript(array $body = array())
    {
        $url = $this -> url . '/vers/v3/mask/script';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 自定义脚本 - 删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listScript(array $body = array())
    {
        $url = $this -> url . '/vers/v3/mask/script';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 自定义脚本 - 下载
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function downloadScript(array $body = array())
    {
        $url = $this -> url . '/vers/v3/mask/script/download';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 自定义脚本 - 单个
     * 
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function descriptScript(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/vers/v3/mask/script/' . $body['uuid'];
        unset($body['uuid']);
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