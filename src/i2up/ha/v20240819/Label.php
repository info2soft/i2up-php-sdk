<?php
namespace i2up\ha\v20240819;

use i2up\Http\Client;
use i2up\Http\Error;

class Label {
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
     * 应用高可用 - 集群服务器池 标签 新建
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createLabel(array $body = array())
    {
        $url = $this -> url . '/ha/service_label';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 应用高可用 - 集群服务器池 标签 修改
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyLabel(array $body = array())
    {
        $url = $this -> url . '/ha/service_label/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * 应用高可用 - 集群服务器池 标签 删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteLabel(array $body = array())
    {
        $url = $this -> url . '/ha/service_label';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 应用高可用 - 集群服务器池 标签 列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listLabel(array $body = array())
    {
        $url = $this -> url . '/ha/service_label';
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