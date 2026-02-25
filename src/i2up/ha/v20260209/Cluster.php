<?php
namespace i2up\ha\v20260209;

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
     * 应用高可用 - 集群服务器池 - 新建
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createHaCluster(array $body = array())
    {
        $url = $this -> url . '/vers/v3/ha/cls_pool';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 应用高可用 - 集群服务器池 - 修改
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyHaCluster(array $body = array())
    {
        $url = $this -> url . '/vers/v3/ha/cls_pool/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * 应用高可用 - 集群服务器池 删除主机
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteHaClusterHost(array $body = array())
    {
        $url = $this -> url . '/vers/v3/ha/cls_pool/host';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 应用高可用 - 集群服务器池 - 删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteHaCluster(array $body = array())
    {
        $url = $this -> url . '/vers/v3/ha/cls_pool';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 应用高可用 - 集群服务器池 - 列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listHaCluster(array $body = array())
    {
        $url = $this -> url . '/vers/v3/ha/cls_pool';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 应用高可用 - 集群服务器池 hello
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function registerHaCluster(array $body = array())
    {
        $url = $this -> url . '/vers/v3/ha/cls_pool/hello';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 应用高可用 - 集群服务器池 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function startHaCluster(array $body = array())
    {
        $url = $this -> url . '/vers/v3/ha/cls_pool/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 应用高可用 - 集群服务器池 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function stopHaCluster(array $body = array())
    {
        $url = $this -> url . '/vers/v3/ha/cls_pool/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 应用高可用 - 集群服务器池 - 单个
     * 
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function describeHaCluster(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/vers/v3/ha/cls_pool/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 集群服务器池 - 名称查重
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function checkDupName(array $body = array())
    {
        $url = $this -> url . '/vers/v3/ha/cls_pool/duplicate_name';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 应用高可用 - 集群服务器池 虚IP查重
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listHaClusterIpDuplicate(array $body = array())
    {
        $url = $this -> url . '/vers/v3/ha/cls_pool/cluster_ip_duplicate';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 应用高可用 - 集群服务器池 UuID
     * 
     * @return array
     */
    public function listHaClusterID()
    {
        $url = $this -> url . '/vers/v3/ha/cls_pool/cluster_uuid';
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 应用高可用 - 集群服务器池 监控信息
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listHaClusterMonitor(array $body = array())
    {
        $url = $this -> url . '/ha/cls_pool/monitor';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 应用高可用 - 集群服务器池 获取状态
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listHaClusterStatus(array $body = array())
    {
        $url = $this -> url . '/vers/v3/ha/cls_pool/status';
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