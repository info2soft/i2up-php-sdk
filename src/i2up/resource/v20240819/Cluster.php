<?php
namespace i2up\resource\v20240819;

use i2up\Http\Client;
use i2up\Http\Error;

class Cluster {
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
     * 1准备-1 集群认证
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function authCls(array $body = array())
    {
        $url = $this -> url . '/cls/auth';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 1准备-2 集群节点验证
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function verifyClsNode(array $body = array())
    {
        $url = $this -> url . '/cls/node_verify';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 1准备-3 根据集群IP获取节点信息
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function clsNodeInfo(array $body = array())
    {
        $url = $this -> url . '/cls/node_info';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 2编辑/新建-1 新建集群
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createCls(array $body = array())
    {
        $url = $this -> url . '/cls';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 2编辑/新建-2 获取单个集群
     * 
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function describeCls(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/cls/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 2编辑/新建-3 修改集群
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyCls(array $body = array())
    {
        $url = $this -> url . '/cls/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * 3列表-1 获取集群列表（基本信息）
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listCls(array $body = array())
    {
        $url = $this -> url . '/cls';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 3列表-2 集群状态
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listClsStatus(array $body = array())
    {
        $url = $this -> url . '/cls/status';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 3列表-3 删除集群
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteCls(array $body = array())
    {
        $url = $this -> url . '/cls';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 3列表-4 集群操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function clsDetail(array $body = array())
    {
        $url = $this -> url . '/cls/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 列表 - 状态(RAC)
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listRacStatus(array $body = array())
    {
        $url = $this -> url . '/cls/rac_status';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 获取GAUSS集群信息
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function getGaussInfo(array $body = array())
    {
        $url = $this -> url . '/cls/gauss_info';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 切换维护
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function switchMaintenance(array $body = array())
    {
        $url = $this -> url . '/cls/maintenance';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * Gauss HCS获取实例列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listGaussHcsInstances(array $body = array())
    {
        $url = $this -> url . '/cls/gauss_hcs_instances';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * Gauss HCS 恢复规则获取默认值
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listGaussHcsDefaultInstance(array $body = array())
    {
        $url = $this -> url . '/cls/gauss_hcs_default_instance';
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