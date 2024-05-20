<?php
namespace i2up\cdm\v20240228;

use i2up\Http\Client;
use i2up\Http\Error;

class RemoteCoopy {
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
     * - 目标机器是否存在重复规则
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function verifyDuplicateCdmCoopyRule(array $body = array())
    {
        $url = $this -> url . '/cdm_remote_coopy/verify_duplicate_cdm_coopy_rule';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     *  新建
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createCdmRemoteCoopy(array $body = array())
    {
        $url = $this -> url . '/cdm_remote_coopy';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     *  列表获取
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listCdmRemoteCoopy(array $body = array())
    {
        $url = $this -> url . '/cdm_remote_coopy';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  操作
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function startCdmRemoteCoopy(array $body = array())
    {
        $url = $this -> url . '/cdm_remote_coopy/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     *  操作
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function stopCdmRemoteCoopy(array $body = array())
    {
        $url = $this -> url . '/cdm_remote_coopy/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     *  操作
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function startImmediatelyCdmRemoteCoopy(array $body = array())
    {
        $url = $this -> url . '/cdm_remote_coopy/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     *  操作
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function migrateCdmRemoteCoopy(array $body = array())
    {
        $url = $this -> url . '/cdm_remote_coopy/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     *  状态
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listCdmRemoteCoopyStatus(array $body = array())
    {
        $url = $this -> url . '/cdm_remote_coopy/status';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  删除
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteCdmRemoteCoopy(array $body = array())
    {
        $url = $this -> url . '/cdm_remote_coopy';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }
    /**
     * 远程复制规则单独获取
     *
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function describeCdmRemoteCoopy(array $body = array())
    {
        $url = $this -> url . '/cdm_remote_coopy/' . $body['uuid'];
        $res = $this -> httpRequest('get', $url);
        return $res;
    }
    /**
     * - 存储空间容量检查
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function verifyCdmCapacity(array $body = array())
    {
        $url = $this -> url . '/cdm_remote_coopy/verify_cdm_capacity';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     * CDM 检查原备存储是否有多余CDM许可
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listCdmRemoteCoopyLicense(array $body = array())
    {
        $url = $this -> url . '/cdm_remote_coopy/verify_license';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     * CDM 目标存储已存在目录检查
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function verifyCdmDirExist(array $body = array())
    {
        $url = $this -> url . '/cdm_remote_coopy/verify_dir_exist';
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