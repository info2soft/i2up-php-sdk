<?php
namespace i2up\hw\v20260209;

use i2up\Http\Client;
use i2up\Http\Error;

class HDR {
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
     * 系统设置 - 更新云平台配置
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function updateSetting(array $body = array())
    {
        $url = $this -> url . '/sys/settings/';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * VDC管理员 - 保存云账户
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyProfile(array $body = array())
    {
        $url = $this -> url . '/user/hcs_info';
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * VDC管理员 - 查看当前登录用户信息
     * 
     * @return array
     */
    public function listProfile()
    {
        $url = $this -> url . '/user/profile/';
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 获取操作日志用户列表
     * 
     * @return array
     */
    public function getOpLogUsers()
    {
        $url = $this -> url . '/user/op_log_user';
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 统一许可 - 获取指定许可数据
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function getLicenseData(array $body = array())
    {
        $url = $this -> url . '/rest/license/data';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 统一许可 - 获取全部许可数据
     * 
     * @return array
     */
    public function getLicenseItems()
    {
        $url = $this -> url . '/rest/license/items';
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 统一许可 - 获取许可数据描述
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function getLicenseDescribe(array $body = array())
    {
        $url = $this -> url . '/rest/license/describe';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 统一许可 - 获取许可文件
     * 
     * @return array
     */
    public function getLicenseFiles()
    {
        $url = $this -> url . '/rest/license/files';
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 统一许可 - 更新许可文件
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function updateLicenseFile(array $body = array())
    {
        $url = $this -> url . '/rest/license/file';
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
        }
        
        if (!$ret->ok()) {
            return array(null, new Error($url, $ret));
        }
        $r = ($ret->body === null) ? array() : $ret->json();
        $r['ret'] = $ret->statusCode;
        return array($r, null);
    }
}