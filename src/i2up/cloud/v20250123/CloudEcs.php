<?php
namespace i2up\cloud\v20250123;

use i2up\Http\Client;
use i2up\Http\Error;

class CloudEcs {
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
     * 云主机 - 新建
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createEcs(array $body = array())
    {
        $url = $this -> url . '/cloud/ecs';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 云主机 - 列表 - 远程登录
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listVncConsole(array $body = array())
    {
        $url = $this -> url . '/cloud/ecs/vnc_console';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 云主机 - 状态
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listEcsStatus(array $body = array())
    {
        $url = $this -> url . '/cloud/ecs/status';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 云主机 - 列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listEcs(array $body = array())
    {
        $url = $this -> url . '/cloud/ecs';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 云主机 - 删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteEcs(array $body = array())
    {
        $url = $this -> url . '/cloud/ecs';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 云主机 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function startECS(array $body = array())
    {
        $url = $this -> url . '/cloud/ecs/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 云主机 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function stopECS(array $body = array())
    {
        $url = $this -> url . '/cloud/ecs/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 云主机 - 获取接管备选项
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function getTakeoverECSInfo(array $body = array())
    {
        $url = $this -> url . '/cloud/ecs/takeover_ecs_info';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 云主机 - 接管获取工作机网卡信息
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function getTakeoverVPCInfo(array $body = array())
    {
        $url = $this -> url . '/cloud/ecs/work_network_info';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 云主机 - 获取空闲挂载点
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function attachPoint(array $body = array())
    {
        $url = $this -> url . '/cloud/ecs/attach_point';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 云主机 - 节点操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function bindNode(array $body = array())
    {
        $url = $this -> url . '/cloud/ecs/node_operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 云主机 - 节点操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function untieNode(array $body = array())
    {
        $url = $this -> url . '/cloud/ecs/node_operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 云主机 - 配置演练
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function configRehearse(array $body = array())
    {
        $url = $this -> url . '/cloud/ecs/rehearse_conf';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 云主机 - 演练组 - 列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listRehearseGroup(array $body = array())
    {
        $url = $this -> url . '/cloud/ecs/rehearse_group';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 云主机 - 演练组 - 新建/更新
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createRehearseGroup(array $body = array())
    {
        $url = $this -> url . '/cloud/ecs/rehearse_group';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 云主机 - 演练组 - 删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteRehearseGroup(array $body = array())
    {
        $url = $this -> url . '/cloud/ecs/rehearse_group';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 云主机 - 演练组 - 单个
     * 
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function describeRehearseGroup(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/cloud/ecs/rehearse_group/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 云端拉起 - 获取云主机信息
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeEcs(array $body = array())
    {
        $url = $this -> url . '/cloud/ecs/ecs_info';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 云主机(接管演练) - 批量新建
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function batchCreateEcs(array $body = array())
    {
        $url = $this -> url . '/cloud/ecs/batch';
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