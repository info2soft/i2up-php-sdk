<?php

namespace i2up\ha\v20190805;

use i2up\Http\Client;
use i2up\Http\Error;

class AppHighAvailability {
    private $url;
    private $token;
    private $accessKey;
    private $secretKey;
    public function __construct($auth)
    {
        $this -> url = $auth -> ip . 'ha';
        if ($auth -> tokenAuthType) {
            $this -> token = $auth -> token();
        } else {
            $this -> accessKey = $auth -> accessKey();
            $this -> secretKey = $auth -> secretKey();
        }
    }

    /**
     * 高可用列表
     * @param array $body
     * $body['filter_value'] String  过滤查询值  选填
     * $body['filter_type'] String  过滤查询条件  选填
     * $body['page'] String  第几页  default 1
     * $body['limit'] String  每页显示个数  default 10
     * @return array
     */
    public function listHA(array $body = array())
    {
        $url = $this -> url;
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 启动操作
     * @param array $body
     * $body['ha_uuid'] Array  节点uuid
     * $body['node_uuid'] String  批量操作或者对HA整理操作时，不传节点uuid
     * @return array
     */
    public function startHA(array $body = array())
    {
        $url = $this -> url . '/operate';
        $body['type'] = 'start';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 停止操作
     * @param array $body  参数同启动操作
     * @return array
     */
    public function stopHA(array $body = array())
    {
        $url = $this -> url . '/operate';
        $body['type'] = 'stop';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 强制切换操作
     * @param array $body  参数同启动操作
     * @return array
     */
    public function forceSwitchHA(array $body = array())
    {
        $url = $this -> url . '/operate';
        $body['type'] = 'force_switch';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 删除HA规则
     * @param array $body
     * $body['ha_uuid'] Array  uuid数组, HA规则uuid
     * @return array
     */
    public function deleteHA(array $body = array())
    {
        $url = $this -> url;
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 获取HA状态
     * @param array $body
     * $body['ha_uuid'] Array  数组, HA规则uuid
     * @return array
     */
    public function listHAStatus(array $body = array()){
        $url = $this -> url . '/status';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 新建高可用 - 检查HA名称是否重复
     * @param array $body
     * $body['ha_name'] Array  String HA名称
     * @return array
     */
    public function haVerifyName(array $body = array()){
        $url = $this -> url . '/verify_name';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * HA脚本目录
     * @param array $body
     * $body['master_uuid'] String  节点UUID
     * @return array
     */
    public function describeHAScriptPath(array $body = array())
    {
        $url = $this -> url . '/script_path';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 修改高可用
     * @param array $body
     * @return array
     */
    public function modifyHA(array $body = array())
    {
        $url = $this -> url;
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * 新建高可用
     * @param array $body
     * @return array
     */
    public function createHA(array $body = array())
    {
        $url = $this -> url;
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 节点网卡信息
     * @param array $body
     * $body['node_uuid'] Array  节点uuid数组
     * $body['master_uuid'] String  主节点uuid
     * @return array
     */
    public function listNicInfo(array $body = array())
    {
        $url = $this -> url . '/netif';
        $res = $this -> httpRequest('get', $url ,$body);
        return $res;
    }

    /**
     * 查看HA详细信息
     * @param array $body
     * $body['uuid'] String
     * @return array
     */
    public function describeHA(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/' . $body['uuid'];
        $res = $this -> httpRequest('get', $url);
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