<?php
namespace i2up\common\v20260626;

use i2up\Http\Client;
use i2up\Http\Error;

class LicQuota {
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
     * 许可配额 - 总览
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function quotaOverview(array $body = array())
    {
        $url = $this -> url . '/lic_quota/quota_overview';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 许可配额 - 新增
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createLicQuota(array $body = array())
    {
        $url = $this -> url . '/lic_quota';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 许可配额 - 退订
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function unsubscribeLicQuota(array $body = array())
    {
        $url = $this -> url . '/lic_quota';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 许可配额 - 列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listLicQuota(array $body = array())
    {
        $url = $this -> url . '/lic_quota';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 许可配额 - 获取单个
     * 
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function describeLicQuota(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/lic_quota/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 许可配额 - 修改
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function updateLicQuota(array $body = array())
    {
        $url = $this -> url . '/lic_quota/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * 许可配额 - 获取绑定情况
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function getLicQuotaBindList(array $body = array())
    {
        $url = $this -> url . '/lic_quota/lic_bind';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 容量管理 - 获取配置
     * 
     * @return array
     */
    public function getLicQuotaSettings()
    {
        $url = $this -> url . '/lic_quota/settings';
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 容量管理 - 更新配置
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function updateLicQuotaSettings(array $body = array())
    {
        $url = $this -> url . '/lic_quota/settings';
        $res = $this -> httpRequest('put', $url, $body);
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