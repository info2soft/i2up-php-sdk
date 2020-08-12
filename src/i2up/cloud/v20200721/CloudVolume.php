<?php
/**
 * Create by PhpStorm
 * User: Lis
 * Date: 2020/7/21
 * Time: 15:04
 */

namespace i2up\cloud\v20200721;

use i2up\Config;
use i2up\Http\Client;
use i2up\Http\Error;

class CloudVolume {
    private $url;
    private $token;
    private $accessKey;
    private $secretKey;
    public function __constructor($auth)
    {
        $this -> url = $auth -> ip . 'cloud/volume';
        if ($auth -> tokenAuthType) {
            $this -> token = $auth -> token();
        } else {
            $this -> accessKey = $auth -> accessKey();
            $this -> secretKey = $auth -> secretKey();
        }
    }

    /**
     *  准备 - 获取可用区
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listZone(array $body = array())
    {
        $url = $this -> url . '/zone_list';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     *  新建
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createVolume(array $body = array())
    {
        $url = $this -> url;
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     *  删除
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteVolume(array $body = array())
    {
        $url = $this -> url;
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     *  挂载
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyVolume(array $body = array())
    {
        $url = $this -> url . '/attach';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     *  卸载
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function detachVolume(array $body = array())
    {
        $url = $this -> url . '/detach';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     *  列表
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listVolume(array $body = array())
    {
        $url = $this -> url;
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     *  状态
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listVolumeStatus(array $body = array())
    {
        $url = $this -> url . '/status';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     *  查询镜像列表
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listImage(array $body = array())
    {
        $url = $this -> url . '/image_info';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     *  挂载 获取同一可用区云主机
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listVolumeEcs(array $body = array())
    {
        $url = $this -> url . '/ecs';
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
        } else if ($method === 'put') {
            $ret = Client::put($url, $body, $header);
        } else if ($method === 'post') {
            $ret = Client::post($url, $body, $header);
        } else if ($method === 'delete') {
            $ret = Client::delete($url, $body, $header);
        }

        if (!$ret->ok()) {
            return array(null, new Error($url, $ret));
        }
        $r = ($ret->body === null) ? array() : $ret->json();
        return array($r, null);
    }
}