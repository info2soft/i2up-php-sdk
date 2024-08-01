<?php
namespace i2up\resource\v20240228;

use i2up\Http\Client;
use i2up\Http\Error;

class DtoLifeManagement {
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
     *  新建
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createDtoLm(array $body = array())
    {
        
        $url = $this -> url . 'dto/lm';
        
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     *  列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listDtoLm(array $body = array())
    {
        
        $url = $this -> url . 'dto/lm';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  修改
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyDtoLm(array $body = array())
    {
        
        $url = $this -> url . 'dto/lm';
        
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }
    /**
     *  操作 - 删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteDtoLm(array $body = array())
    {
        
        $url = $this -> url . 'dto/lm/operate';
        
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     *  操作 - 启用
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function startDtoLm(array $body = array())
    {

        $url = $this -> url . 'dto/lm/operate';

        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     *  操作 - 禁用
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function stopDtoLm(array $body = array())
    {

        $url = $this -> url . 'dto/lm/operate';

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
        }
        
        if (!$ret->ok()) {
            return array(null, new Error($url, $ret));
        }
        $r = ($ret->body === null) ? array() : $ret->json();
        return array($r, null);
    }
}