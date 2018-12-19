<?php

namespace i2up\vp\v20181217;

use i2up\Config;
use i2up\Http\Client;
use i2up\Http\Error;

class VirtualizationSupport {
    private $url;
    private $token;
    public function __construct($auth)
    {
        $this -> url = Config::baseUrl . 'vp';
        $this -> token = $auth -> token();
    }

    /**
     * 虚拟平台（vp）- 新建
     * @param array $body
     * @return array
     */
    public function createVp(array $body = array())
    {
        $url = $this -> url . '/platform';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 虚拟平台（vp）- 获取单个
     * @param array $body
     * $body['uuid'] String
     * @return array
     */
    public function describeVp(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/platform/' . $body['uuid'];
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 虚拟平台（vp）- 编辑
     * @param array $body
     * @return array
     */
    public function modifyVp(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/platform/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * 虚拟平台（vp）- 获取列表
     * @param array $body
     * $body['limit'] String  可选，每页显示条数
     * $body['page'] String  可选，页数
     * @return array
     */
    public function listVp(array $body = array())
    {
        $url = $this -> url . '/platform/';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 虚拟平台（vp）- 获取状态
     * @param array $body
     * $body['vp_uuids'] Array  vp_uuid 数组
     * @return array
     */
    public function listVpStatus(array $body = array())
    {
        $url = $this -> url . '/platform/status';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 虚拟平台（vp）- 删除
     * @param array $body
     * $body['vp_uuids'] Array  要删的平台uuid数组
     * @return array
     */
    public function deleteVp(array $body = array())
    {
        $url = $this -> url . '/platform/status';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 虚拟平台（vp）- 查询 虚机列表
     * @param array $body
     * $body['uuid'] String   必填
     * $body['path'] String  （*必填）存储路径，（根目录“/”） 当平台为esxi主机时，可以设置HostAgent，直接获取所有虚机列表
     * $body['force_rpc'] Number  1: 强制从RPC获取最新内容；0：从数据库缓存读取
     * @return array
     */
    public function listVM(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/platform/'. $body['uuid'] .'/vm';
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 虚拟平台（vp）- 查询 平台属性
     * @param array $body
     * $body['uuid'] String  必填
     * @return array
     */
    public function describeVpAttribute(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . 'platform/' . $body['uuid'] . '/info';
        $res = $this -> httpRequest('get', $url);
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