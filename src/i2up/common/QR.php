<?php

namespace i2up\common;

use i2up\Config;
use i2up\Http\Client;
use i2up\Http\Error;

class QR {
    private $url;
    private $token;
    public function __construct($auth)
    {
        $this -> url = Config::baseUrl . 'qr';
        $this -> token = $auth -> token();
    }

    /**
     * 二维码 时间戳
     * @param array $body
     * $body['timestamp'] String  Unix 时间戳
     * @return array
     */
    public function describeTimeStamp(array $body = array())
    {
        $url = $this -> url . '/t';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 生成二维码图片
     * @param array $body
     * $body['point_size'] Number  非必填, 色块像素(大小)
     * $body['text'] String  二维码内容, 必填
     * $body['format'] String  非必填，示例：base64，png，（支持base64，和直接输出image）, 输入格式
     * @return array
     */
    public function createQRPic(array $body = array())
    {
        $url = $this -> url;
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 确认登录
     * @param array $body
     * $body['uuid'] String  二维码唯一ID
     * @return array
     */
    public function confirmLogin(array $body = array())
    {
        $url = $this -> url . '/event';
        $body['action'] = 1;
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 取消登录
     * @param array $body
     * $body['uuid'] String  二维码唯一ID
     * @return array
     */
    public function cancelLogin(array $body = array())
    {
        $url = $this -> url . '/event';
        $body['action'] = 2;
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 检查二维码有效性
     * @param array $body
     * $body['uuid'] String  二维码唯一ID
     * @return array
     */
    public function checkQrValidity(array $body = array())
    {
        $url = $this -> url . '/event';
        $body['action'] = 0;
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 获取二维码内容
     * @param array $body
     * $body['app_name'] String  APP类型名称, 可选
     * @return array
     */
    public function obtainQRContent(array $body = array())
    {
        $url = $this -> url . '/generate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 检查二维码状态
     * @param array $body
     * $body['uuid'] String   二维码唯一id
     * @return array
     */
    public function checkQRStatus(array $body = array())
    {
        $url = $this -> url . '/status';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    private function httpRequest($method, $url, $body = null)
    {
        if (isset($this -> token)) {
            $header = array('Authorization' => $this -> token);
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