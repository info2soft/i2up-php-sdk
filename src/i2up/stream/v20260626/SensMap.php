<?php
namespace i2up\stream\v20260626;

use i2up\Http\Client;
use i2up\Http\Error;

class SensMap {
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
     * 敏感集合 - 单个
     * 
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function descriptMap(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/vers/v3/mask/sens_db_map/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 敏感集合 - 列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listMap(array $body = array())
    {
        $url = $this -> url . '/vers/v3/mask/sens_map';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 敏感集合 - 新建
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createMap(array $body = array())
    {
        $url = $this -> url . '/vers/v3/mask/sens_map';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 敏感集合 - 修改
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyMap(array $body = array())
    {
        $url = $this -> url . '/vers/v3/mask/sens_map/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * 敏感集合 - 删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteMap(array $body = array())
    {
        $url = $this -> url . '/vers/v3/mask/sens_map';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 类型列表 - 新建
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createDbMap(array $body = array())
    {
        $url = $this -> url . '/vers/v3/mask/sens_db_map';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 类型列表 - 列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listDbMap(array $body = array())
    {
        $url = $this -> url . '/vers/v3/mask/sens_db_map';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 类型列表 - 删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteDbMap(array $body = array())
    {
        $url = $this -> url . '/vers/v3/mask/sens_db_map';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 类型列表 - 修改
     * 
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function modifyDbMap(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/vers/v3/mask/sens_db_map/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('put', $url);
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