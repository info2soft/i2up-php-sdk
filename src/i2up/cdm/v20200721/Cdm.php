<?php
/**
 * Create by PhpStorm
 * User: Lis
 * Date: 2020/7/21
 * Time: 10:48
 */

namespace i2up\cdm\v20200721;

use i2up\Http\Client;
use i2up\Http\Error;

class Cdm {
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
     * 备份点列表
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function getPointList(array $body = array())
    {
        $url = $this -> url . 'cdm/point_full_info_list';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 获取资源列表
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function getResourceList(array $body = array())
    {
        $url = $this -> url . 'cdm/drp_list';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 获取主机存储资源
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function getHostStorageList(array $body = array())
    {
        $url = $this -> url . 'cdm/host_storage_list';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * -- 列表
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function takeOverDrillList(array $body = array())
    {
        $url = $this -> url . 'cdm_rule';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * -- 新建
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createTakeOverDrill(array $body = array())
    {
        $url = $this -> url . 'cdm_rule';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * -- 删除
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteTakeOverDrill(array $body = array())
    {

        $url = $this -> url . 'cdm_rule';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * -- 获取单个
     *
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function describeTakeOverDrill(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . 'cdm_rule/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * -- 获取虚机状态
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function getVmStatus(array $body = array())
    {
        $url = $this -> url . 'cdm_rule/vm_status';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * -- 操作 - 启动
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function startTakeOverDrill(array $body = array())
    {
        $url = $this -> url . 'cdm_rule/operate';
        $body['operate'] = 'start';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * -- 操作 - 停止
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function stopTakeOverDrill(array $body = array())
    {
        $url = $this -> url . 'cdm_rule/operate';
        $body['operate'] = 'stop';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     * -- 操作 - 打开控制台
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function openConsoleTakeOverDrill(array $body = array())
    {
        $url = $this -> url . 'cdm_rule/operate';
        $body['operate'] = 'open_console';
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