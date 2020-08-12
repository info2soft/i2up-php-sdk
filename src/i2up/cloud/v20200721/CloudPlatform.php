<?php
/**
 * Create by PhpStorm
 * User: Lis
 * Date: 2020/7/21
 * Time: 14:54
 */

namespace i2up\cloud\v20200721;

use i2up\Config;
use i2up\Http\Client;
use i2up\Http\Error;

class CloudPlatform {
    private $url;
    private $token;
    private $accessKey;
    private $secretKey;
    public function __constructor($auth)
    {
        $this -> url = $auth -> ip . 'cloud/platform';
        if ($auth -> tokenAuthType) {
            $this -> token = $auth -> token();
        } else {
            $this -> accessKey = $auth -> accessKey();
            $this -> secretKey = $auth -> secretKey();
        }
    }

    /**
     *  准备 - 获取区域列表
     *
     * @return array
     */
    public function listCloudPlatformRegion()
    {
        $url = $this -> url . '/region_list';
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     *  注册
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function registerCloudPlatform(array $body = array())
    {
        $url = $this -> url;
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     *  修改
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyCloudPlatform(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     *  删除
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteCloudPlatform(array $body = array())
    {
        $url = $this -> url;
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     *  列表
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listCloudPlatform(array $body = array())
    {
        $url = $this -> url;
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     *  获取单个
     *
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeCloudPlatform(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     *  同步云主机
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function syncEcs(array $body = array())
    {
        $url = $this -> url . '/sync_ecs';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     *  同步云硬盘
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function syncVolume(array $body = array())
    {
        $url = $this -> url . '/sync_volume';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     *  获取规格信息
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listFlavor(array $body = array())
    {
        $url = $this -> url . '/flavor_list';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     *  获取关联节点列表
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listRelativeNode(array $body = array())
    {
        $url = $this -> url . '/node_list';
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