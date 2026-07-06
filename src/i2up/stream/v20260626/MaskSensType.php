<?php
namespace i2up\stream\v20260626;

use i2up\Http\Client;
use i2up\Http\Error;

class MaskSensType {
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
     * 敏感类型 - 修改
     * 
     * @body['id'] int  必填 ID
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifySensType(array $body = array())
    {
        $url = $this -> url . '/vers/v3/mask/sens_type/' . $body['id'];
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * 敏感类型 - 列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listTypes(array $body = array())
    {
        $url = $this -> url . '/vers/v3/mask/sens_type';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 敏感类型 - 单个
     * 
     * @body['id'] int  必填 ID
     * @return array
     */
    public function descriptSensType(array $body = array())
    {
        if (empty($body) || !isset($body['id'])) return $body;
        $url = $this -> url . '/vers/v3/mask/sens_type/' . $body['id'];
        unset($body['id']);
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
        } else if ($method === 'put') {
            $ret = Client::put($url, $body, $header);
        }
        
        if (!$ret->ok()) {
            return array(null, new Error($url, $ret));
        }
        $r = ($ret->body === null) ? array() : $ret->json();
        $r['ret'] = $ret->statusCode;
        return array($r, null);
    }
}