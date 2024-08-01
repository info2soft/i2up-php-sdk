<?php
/**
 * Create by PhpStorm
 * User: Lis
 * Date: 2020/7/21
 * Time: 16:41
 */

namespace i2up\ha\v20190805;

use i2up\Config;
use i2up\Http\Client;
use i2up\Http\Error;

class Cluster {
    private $url;
    private $token;
    private $accessKey;
    private $secretKey;
    public function __constructor($auth)
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
     *  集群服务器池 hello
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function registerHaCluster(array $body = array())
    {
        $url = $this -> url . 'ha/cls_pool/hello';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     *  集群服务器池 - 新建
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createHaCluster(array $body = array())
    {
        $url = $this -> url . 'ha/cls_pool';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     *  集群服务器池 - 修改
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyHaCluster(array $body = array())
    {
        $url = $this -> url . 'ha/cls_pool/' . $body['uuid'];
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     *  集群服务器池 - 删除
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteHaCluster(array $body = array())
    {
        $url = $this -> url . 'ha/cls_pool';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     *  集群服务器池 - 列表
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listHaCluster(array $body = array())
    {
        $url = $this -> url . 'ha/cls_pool';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     *  集群服务器池 - 操作 - 启动
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function startHaCluster(array $body = array())
    {
        $url = $this -> url . 'ha/cls_pool/operate';
        $body['operate'] = 'start';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     *  集群服务器池 - 操作 - 停止
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function stopHaCluster(array $body = array())
    {
        $url = $this -> url . 'ha/cls_pool/operate';
        $body['operate'] = 'stop';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     *  集群服务器池 - 单个
     *
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function describeHaCluster(array $body = array())
    {
        $url = $this -> url . 'ha/cls_pool/' . $body['uuid'];
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     *  名称查重
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function checkDupName(array $body = array())
    {

        $url = $this -> url . 'a/cls_pool/duplicate_name';

        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     *  集群服务器池 删除主机
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteHaClusterHost(array $body = array())
    {
        $url = $this -> url . 'ha/cls_pool/host';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     *  集群服务器池 虚IP查重
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listHaClusterIpDuplicate(array $body = array())
    {
        $url = $this -> url . 'ha/cls_pool/cluster_ip_duplicate';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     *  集群服务器池 UuID
     *
     * @return array
     */
    public function listHaClusterID()
    {
        $url = $this -> url . 'ha/cls_pool/cluster_uuid';
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     *  集群服务器池 监控信息
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listHaClusterMonitor(array $body = array())
    {
        $url = $this -> url . 'ha/cls_pool/monitor';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     *  集群服务器池 网卡信息
     *
     * @return array
     */
    public function listNicInfo()
    {
        $url = $this -> url . 'ha/net/if';
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     *  集群服务器池 获取状态
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listHaClusterStatus(array $body = array())
    {
        $url = $this -> url . 'ha/cls_pool/status';
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