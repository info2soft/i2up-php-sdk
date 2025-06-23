<?php
namespace i2up\cloud\v20250630;

use i2up\Http\Client;
use i2up\Http\Error;

class CloudPlatform {
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
     * 云平台 - 准备 - 获取区域列表（从配置文件）
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listCloudPlatformRegion(array $body = array())
    {
        $url = $this -> url . '/cloud/platform/region_list';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 云平台 - 注册
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function registerCloudPlatform(array $body = array())
    {
        $url = $this -> url . '/cloud/platform';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 云平台 - 修改
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyCloudPlatform(array $body = array())
    {
        $url = $this -> url . '/cloud/platform/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * 云平台 - 获取单个
     * 
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function describeCloudPlatform(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/cloud/platform/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 云平台 - 列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listCloudPlatform(array $body = array())
    {
        $url = $this -> url . '/cloud/platform';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 云平台 - 删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteCloudPlatform(array $body = array())
    {
        $url = $this -> url . '/cloud/platform';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 云平台 - 状态
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listCloudPlatformStatus(array $body = array())
    {
        $url = $this -> url . '/cloud/platform/status';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 云平台 - 同步云主机
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function syncEcs(array $body = array())
    {
        $url = $this -> url . '/cloud/platform/sync_ecs';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 云平台 - 同步云硬盘
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function syncVolume(array $body = array())
    {
        $url = $this -> url . '/cloud/platform/sync_volume';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 云平台 - 获取规格列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listFlavor(array $body = array())
    {
        $url = $this -> url . '/cloud/platform/flavor_list';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 云平台 - 获取关联节点列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listRelativeNode(array $body = array())
    {
        $url = $this -> url . '/cloud/platform/node_list';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 云平台 - 切换维护
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function switchMaintenance(array $body = array())
    {
        $url = $this -> url . '/cloud/platform/maintenance';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 云平台 - 获取区域列表（从Npsvr）
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listRegions(array $body = array())
    {
        $url = $this -> url . '/cloud/platform/regions';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 云平台 - 获取项目列表（从Npsvr）
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listProjects(array $body = array())
    {
        $url = $this -> url . '/cloud/platform/projects';
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