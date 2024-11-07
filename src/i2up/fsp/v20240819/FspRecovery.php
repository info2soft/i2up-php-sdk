<?php
namespace i2up\fsp\v20240819;

use i2up\Http\Client;
use i2up\Http\Error;

class FspRecovery {
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
     * 全服恢复-0 获取两节点网卡列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listFspRecoveryNic(array $body = array())
    {
        $url = $this -> url . '/fsp/recovery/nic_list';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 全服恢复-0 获取源节点磁盘和文件列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listFspRecoveryDir(array $body = array())
    {
        $url = $this -> url . '/fsp/recovery/dir_list';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 全服恢复-0 获取还原点
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listFspRecoveryPoint(array $body = array())
    {
        $url = $this -> url . '/fsp/recovery/point_list';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 全服恢复-1 检测条件-磁盘空间
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function verifyFspRecoveryVolumeSpace(array $body = array())
    {
        $url = $this -> url . '/fsp/recovery/verify_volume_space';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 全服恢复-1 检测条件-旧规则
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function verifyFspRecoveryOldRule(array $body = array())
    {
        $url = $this -> url . '/fsp/recovery/verify_old_rule';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 全服恢复-1 检测条件-系统版本
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function verifyFspRecoveryOsVersion(array $body = array())
    {
        $url = $this -> url . '/fsp/recovery/verify_os_version';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 全服恢复-2 新建规则
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createFspRecovery(array $body = array())
    {
        $url = $this -> url . '/fsp/recovery';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 全服恢复-2 修改规则
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyFspRecovery(array $body = array())
    {
        $url = $this -> url . '/fsp/recovery/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * 全服恢复-2 获取单个规则
     * 
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function desribeFspRecovery(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/fsp/recovery/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 全服恢复-3 删除规则
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteFspRecovery(array $body = array())
    {
        $url = $this -> url . '/fsp/recovery';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 全服恢复-3 获取规则列表（基本信息）
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listFspRecovery(array $body = array())
    {
        $url = $this -> url . '/fsp/recovery';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 全服恢复-3 规则操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function startFspRecovery(array $body = array())
    {
        $url = $this -> url . '/fsp/recovery/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 全服恢复-3 规则操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function stopFspRecovery(array $body = array())
    {
        $url = $this -> url . '/fsp/recovery/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 全服恢复-3 规则操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function moveFspRecovery(array $body = array())
    {
        $url = $this -> url . '/fsp/recovery/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 全服恢复-3 规则操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function rebootFspRecovery(array $body = array())
    {
        $url = $this -> url . '/fsp/recovery/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 全服恢复-3 规则状态
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listFspRecoveryStatus(array $body = array())
    {
        $url = $this -> url . '/fsp/recovery/status';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 全服恢复-获取磁盘信息
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listFspRecoveryDriverInfo(array $body = array())
    {
        $url = $this -> url . '/fsp/recovery/driver_info';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 全服恢复 - 目标机驱动URL列表
     * 
     * @return array
     */
    public function listFspRecoveryDriverListUrl()
    {
        $url = $this -> url . '/fsp/recovery/driver_url_list';
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 全服恢复 - 0 获取BIOS类型
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function getFspMoveBiosType(array $body = array())
    {
        $url = $this -> url . '/fsp/move/bios_type';
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