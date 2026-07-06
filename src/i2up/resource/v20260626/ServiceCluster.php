<?php
namespace i2up\resource\v20260626;

use i2up\Http\Client;
use i2up\Http\Error;

class ServiceCluster {
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
     * 服务集群 - 新建
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createServiceCls(array $body = array())
    {
        $url = $this -> url . '/service_cls';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 服务集群 - 修改
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyServiceCls(array $body = array())
    {
        $url = $this -> url . '/service_cls';
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * 服务集群 - 删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteServiceCls(array $body = array())
    {
        $url = $this -> url . '/service_cls';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 服务集群 - 单个
     * 
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function describeServiceCls(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/service_cls/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 服务集群 - 列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listServiceCls(array $body = array())
    {
        $url = $this -> url . '/service_cls';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 服务集群 - 状态
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listServiceClsStatus(array $body = array())
    {
        $url = $this -> url . '/service_cls/status';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 服务集群 - 集群节点检查 是否可删
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function chkServiceClsNode(array $body = array())
    {
        $url = $this -> url . '/service_cls/cls_node_chk';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 服务集群 - 配置 编辑
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function configServiceCls(array $body = array())
    {
        $url = $this -> url . '/service_cls/config';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 服务集群 - 配置 获取
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeServiceClsConfig(array $body = array())
    {
        $url = $this -> url . '/service_cls/config';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 服务集群 - 获取有效节点
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listServiceClsValidNode(array $body = array())
    {
        $url = $this -> url . '/service_cls/valid_node';
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