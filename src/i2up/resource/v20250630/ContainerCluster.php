<?php
namespace i2up\resource\v20250630;

use i2up\Http\Client;
use i2up\Http\Error;

class ContainerCluster {
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
     * 备份目标位置 - 新建
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createBackupDestination(array $body = array())
    {
        $url = $this -> url . '/vers/v3/backup_destination';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 备份目标位置 - 列表
     * 
     * @return array
     */
    public function listBackupDestination()
    {
        $url = $this -> url . '/vers/v3/backup_destination';
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 备份目标位置 - 单个
     * 
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function descibeBackupDestination(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/vers/v3/backup_destination/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 备份目标位置 - 修改
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyBackupDestination(array $body = array())
    {
        $url = $this -> url . '/vers/v3/backup_destination/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * 备份目标位置 - 删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteBackupDestination(array $body = array())
    {
        $url = $this -> url . '/vers/v3/backup_destination';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 备份目标位置 - 状态
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listBackupDestinationStatus(array $body = array())
    {
        $url = $this -> url . '/v3/backup_destination/status';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 容器集群 - 集群信息
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listContainerClusterInfo(array $body = array())
    {
        $url = $this -> url . '/v3/container_cluster/cls_info';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 容器集群 - 同步信息
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function syncContainerClusterInfo(array $body = array())
    {
        $url = $this -> url . '/v3/container_cluster/sync_info';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 容器集群 - 资源信息
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listContainerClusterResource(array $body = array())
    {
        $url = $this -> url . '/vers/v3/container_cluster/resource';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 容器集群 - 名字空间
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listContainerClsNamespace(array $body = array())
    {
        $url = $this -> url . '/vers/v3/container_cluster/namespace';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 容器集群-概览-状态
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function containerClusterMonitoringOverview(array $body = array())
    {
        $url = $this -> url . '/v3/container_cluster/monitoring/overview';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 容器集群-概览-节点
     * 
     * @return array
     */
    public function containerClusterMonitoringNode()
    {
        $url = $this -> url . '/v3/container_cluster/monitoring/node';
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 容器集群 - 新建
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createContainerCluster(array $body = array())
    {
        $url = $this -> url . '/v3/container_cluster';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 容器集群 - 列表
     * 
     * @return array
     */
    public function listContainerCluster()
    {
        $url = $this -> url . '/v3/container_cluster';
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 容器集群 - 单个
     * 
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function describeContainerCluster(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/v3/container_cluster/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 容器集群 - 修改
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyContainerCluster(array $body = array())
    {
        $url = $this -> url . '/v3/container_cluster/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * 容器集群 - 删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteContainerCluster(array $body = array())
    {
        $url = $this -> url . '/v3/container_cluster';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 回调设置 - 新建
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createCallbackSettings(array $body = array())
    {
        $url = $this -> url . '/vers/v3/callback_settings';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 回调设置 - 列表
     * 
     * @return array
     */
    public function listCallbackSettings()
    {
        $url = $this -> url . '/vers/v3/callback_settings';
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 回调设置 - 单个
     * 
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function describeCallbackSettings(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/vers/v3/callback_settings/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 回调设置 - 修改
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyCallbackSettings(array $body = array())
    {
        $url = $this -> url . '/vers/v3/callback_settings/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * 回调设置 - 删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteCallbackSettings(array $body = array())
    {
        $url = $this -> url . '/vers/v3/callback_settings';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 回调设置 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function cloneCallbackSettings(array $body = array())
    {
        $url = $this -> url . '/v3/callback_settings/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 回调设置 - 验证
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function verifyCallbackSettingsPod(array $body = array())
    {
        $url = $this -> url . '/v3/callback_settings/pod_verify';
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