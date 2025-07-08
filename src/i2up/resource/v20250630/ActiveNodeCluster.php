<?php
namespace i2up\resource\v20250630;

use i2up\Http\Client;
use i2up\Http\Error;

class ActiveNodeCluster {
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
     * Active集群 - 列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listActiveNodeCluster(array $body = array())
    {
        $url = $this -> url . '/active/node_cluster';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * Active集群 - 新建
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createActiveNodeCluster(array $body = array())
    {
        $url = $this -> url . '/active/node_cluster';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * Active集群 - 单个
     * 
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function getActiveNodeClusterInfo(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/active/node_cluster/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * Active集群 - 修改
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyActiveNodeCluster(array $body = array())
    {
        $url = $this -> url . '/active/node_cluster/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * Active集群 - 删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteActiveNodeCluster(array $body = array())
    {
        $url = $this -> url . '/active/node_cluster';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * Active集群 - 获取所有节点列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listClusterActiveNode(array $body = array())
    {
        $url = $this -> url . '/active/node_cluster/nodes';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * Active集群 - 新增节点
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function addNodeActiveNodeCluster(array $body = array())
    {
        $url = $this -> url . '/active/node_cluster/node';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * Active集群 - 移除节点
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function removeNodeActiveNodeCluster(array $body = array())
    {
        $url = $this -> url . '/active/node_cluster/node';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * Active集群 - 状态
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listActiveNodeClusterStatus(array $body = array())
    {
        $url = $this -> url . '/active/node_cluster/status';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * Active集群 - 维护模式切换
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function switchAdtiveNodeClusterMaintenance(array $body = array())
    {
        $url = $this -> url . '/active/node_cluster/maintenance';
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