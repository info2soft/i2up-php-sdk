<?php
namespace i2up\cdm\v20250123;

use i2up\Http\Client;
use i2up\Http\Error;

class CdmRecovery {
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
     * 整机恢复 --- 新建
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createCdmRecovery(array $body = array())
    {
        $url = $this -> url . '/cdm_recovery';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 整机恢复 --- 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function startCdmRecovery(array $body = array())
    {
        $url = $this -> url . '/cdm_recovery/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 整机恢复 --- 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function stopCdmRecovery(array $body = array())
    {
        $url = $this -> url . '/cdm_recovery/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 整机恢复 --- 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function recoveryCdmRecovery(array $body = array())
    {
        $url = $this -> url . '/cdm_recovery/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 整机恢复 --- 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function rebootCdmRecovery(array $body = array())
    {
        $url = $this -> url . '/cdm_recovery/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 整机恢复 --- 列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listCdmRecovery(array $body = array())
    {
        $url = $this -> url . '/cdm_recovery';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 整机恢复 --- 状态
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listCdmRecoveryStatus(array $body = array())
    {
        $url = $this -> url . '/cdm_recovery/status';
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
        }
        
        if (!$ret->ok()) {
            return array(null, new Error($url, $ret));
        }
        $r = ($ret->body === null) ? array() : $ret->json();
        $r['ret'] = $ret->statusCode;
        return array($r, null);
    }
}