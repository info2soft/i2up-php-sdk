<?php
namespace i2up\ContainerCls\v20260209;

use i2up\Http\Client;
use i2up\Http\Error;

class ContainerCls {
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
     * 备份 - 新建
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createContinerClusterBackup(array $body = array())
    {
        $url = $this -> url . '/v3/container_cluster_protect/backup';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 备份 - 列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listContainerClusterBackup(array $body = array())
    {
        $url = $this -> url . '/v3/container_cluster_protect/backup';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 备份 - 单个
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeContainerClusterBackup(array $body = array())
    {
        $url = $this -> url . '/v3/container_cluster_protect/backup/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 备份 - 修改
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyContainerClusterBackup(array $body = array())
    {
        $url = $this -> url . '/v3/container_cluster_protect/backup/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * 备份 - 删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteContainerClusterBackup(array $body = array())
    {
        $url = $this -> url . '/v3/container_cluster_protect/backup';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 备份 - 状态
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listContainerClusterBackupStatus(array $body = array())
    {
        $url = $this -> url . '/v3/container_cluster_protect/backup/status';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 备份 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function backupImmediateContainerClusterBackup(array $body = array())
    {
        $url = $this -> url . '/v3/container_cluster_protect/backup/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 备份 - 查看子任务列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listContainerClusterBackupSubTask(array $body = array())
    {
        $url = $this -> url . '/v3/container_cluster_protect/backup/sub_task';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 备份 - 查看备份信息(rpc获取)
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function getContainerClusterBackupInfo(array $body = array())
    {
        $url = $this -> url . '/v3/container_cluster_protect/backup/info';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 还原 - 新建
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createContainerClusterRecovery(array $body = array())
    {
        $url = $this -> url . '/v3/container_cluster_protect/recovery';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 还原 - 列表
     * 
     * @return array
     */
    public function listContainerClusterRecovery()
    {
        $url = $this -> url . '/v3/container_cluster_protect/recovery';
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 还原 - 单个
     * 
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function describeContainerClusterRecovery(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/v3/container_cluster_protect/recovery/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 还原 - 修改
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyContainerClusterRecovery(array $body = array())
    {
        $url = $this -> url . '/v3/container_cluster_protect/recovery/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * 还原 - 删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteContainerClusterRecovery(array $body = array())
    {
        $url = $this -> url . '/v3/container_cluster_protect/recovery';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 还原 - 状态
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listContainerClusterRecoveryStatus(array $body = array())
    {
        $url = $this -> url . '/v3/container_cluster_protect/recovery/status';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 还原 - 获取还原时间点
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listContainerClusterRecoveryPoint(array $body = array())
    {
        $url = $this -> url . '/v3/container_cluster_protect/recovery/rc_point';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 还原 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function startContainerClusterRecovery(array $body = array())
    {
        $url = $this -> url . '/v3/container_cluster_protect/recovery/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 还原 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function stopContainerClusterRecovery(array $body = array())
    {
        $url = $this -> url . '/v3/container_cluster_protect/recovery/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 还原 - 查看还原信息(rpc获取)
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function getContainerClusterRecoveryInfo(array $body = array())
    {
        $url = $this -> url . '/v3/container_cluster_protect/recovery/info';
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