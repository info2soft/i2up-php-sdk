<?php

namespace i2up\system\v20181217;

use i2up\Http\Client;
use i2up\Http\Error;

class Lic {
    private $url;
    private $token;
    public function __construct($auth)
    {
        $this -> url = $auth -> ip . 'lic';
        $this -> token = $auth -> token();
    }
    /**
     * 1 获取激活所需信息（组激活，离线激活）
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeActivateInfo(array $body = array())
    {
        $url = $this -> url . '/activate';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 2 下载lic绑定信息、mac变更记录
     *
     * @param array $body  参数详见 API 手册
     * $body['uuid'] String  必填 uuid
     * @return array
     */
    public function downloadLicInfo(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/' . $body['uuid'] . '/download_lic_info';
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 3 获取控制机识别码
     *
     * @return array
     */
    public function describeLicCcHwCode()
    {
        $url = $this -> url . '/cc_hw_code';
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 4 获取节点识别码
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeLicObjHwCode(array $body = array())
    {
        $url = $this -> url . '/obj_hw_code';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 5 在线激活（激活所有许可并更新，页面下端）
     *
     * @return array
     */
    public function activateLicAll()
    {
        $url = $this -> url . '/activate';
        $res = $this -> httpRequest('put', $url);
        return $res;
    }

    /**
     * 1 添加 lic
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createLic(array $body = array())
    {
        $url = $this -> url;
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }


    /**
     * 2 更新 lic（批量，离线）
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function updateBatchLic(array $body = array())
    {
        $url = $this -> url . '/batch';
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * 5 获取单个 lic
     *
     * @param array $body  参数详见 API 手册
     * $body['uuid'] String  必填 uuid
     * @return array
     */
    public function describeLic(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/' . $body['uuid'];
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 6 获取 lic 列表
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listLic(array $body = array())
    {
        $url = $this -> url;
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 7 删除 lic
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteLic(array $body = array())
    {
        $url = $this -> url;
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 2 获取 Lic 绑定情况 列表（节点/VP管理）
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listLicObjBind(array $body = array())
    {
        $url = $this -> url . '/obj_bind';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 2 获取 Lic 绑定情况 列表（许可管理）
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listLicBind(array $body = array())
    {
        $url = $this -> url . '/lic_bind';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 1 更新绑定（许可管理）
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function updateLicBind(array $body = array())
    {
        $url = $this -> url . '/lic_bind';
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * 1 获取 Obj 列表
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listLicObj(array $body = array())
    {
        $url = $this -> url . '/obj';
        $res = $this -> httpRequest('get', $url, $body);
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