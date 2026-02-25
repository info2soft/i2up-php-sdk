<?php
namespace i2up\machineRecovery\v20260209;

use i2up\Http\Client;
use i2up\Http\Error;

class MachineRecovery {
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
     * 新建
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createMachineRecovery(array $body = array())
    {
        $url = $this -> url . '/machine_recovery';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 获取列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listMachineRecovery(array $body = array())
    {
        $url = $this -> url . '/machine_recovery';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 获取单个详情
     * 
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function describeMachineRecovery(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/machine_recovery/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 修改
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyMachineRecovery(array $body = array())
    {
        $url = $this -> url . '/machine_recovery/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * 删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteMachineRecovery(array $body = array())
    {
        $url = $this -> url . '/machine_recovery';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function startMachineRecovery(array $body = array())
    {
        $url = $this -> url . '/machine_recovery/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function stopMachineRecovery(array $body = array())
    {
        $url = $this -> url . '/machine_recovery/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function rebootMachineRecovery(array $body = array())
    {
        $url = $this -> url . '/machine_recovery/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 获取状态
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listMachineRecoveryStatus(array $body = array())
    {
        $url = $this -> url . '/machine_recovery/status';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 根据虚拟平台获取备份点列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listBkPointListByPlatform(array $body = array())
    {
        $url = $this -> url . '/machine_recovery/bk_point_list';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 获取快照时间点详情
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeBkPointInfo(array $body = array())
    {
        $url = $this -> url . '/machine_recovery/bk_point_info';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 检查 - 目标机环境
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function verifyEnvironment(array $body = array())
    {
        $url = $this -> url . '/machine_recovery/verify_environment';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 检查 - 磁盘检查
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function verifyVolumeSpace(array $body = array())
    {
        $url = $this -> url . '/machine_recovery/verify_volume_space';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 检查 - 目标机是否存在旧规则
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function verifyOldRule(array $body = array())
    {
        $url = $this -> url . '/machine_recovery/verify_old_rule';
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