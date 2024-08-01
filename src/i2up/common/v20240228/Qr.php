<?php
namespace i2up\common\v20240228;

use i2up\Http\Client;
use i2up\Http\Error;

class Qr {
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
     * 1.时间戳
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeTimeStamp(array $body = array())
    {
        
        $url = $this -> url . 'qr/t';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     * 2.获取二维码内容
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function obtainQrContent(array $body = array())
    {
        
        $url = $this -> url . 'qr/generate';
        
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     * 3.生成二维码图片
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createQrPic(array $body = array())
    {
        
        $url = $this -> url . 'qr';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     * 4.确认/取消登录
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function confirmLogin(array $body = array())
    {
        
        $url = $this -> url . 'qr/event';
        
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     * 5.检查二维码状态
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function checkQrStatus(array $body = array())
    {
        
        $url = $this -> url . 'qr/status';
        
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
        }
        
        if (!$ret->ok()) {
            return array(null, new Error($url, $ret));
        }
        $r = ($ret->body === null) ? array() : $ret->json();
        return array($r, null);
    }
}