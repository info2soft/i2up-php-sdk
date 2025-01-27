<?php
namespace i2up\cloud\v20250123;

use i2up\Http\Client;
use i2up\Http\Error;

class CloudRehearse {
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
     * 云端演练-准备-主机列表
     * 
     * @return array
     */
    public function listHost()
    {
        $url = $this -> url . '/cloud/rehearse/host_list';
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 云端演练-准备-云主机列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listEcs(array $body = array())
    {
        $url = $this -> url . '/cloud/rehearse/ecs_list';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 云端演练-准备-恢复点信息
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listRecoveryPoint(array $body = array())
    {
        $url = $this -> url . '/cloud/rehearse/rc_point_info';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 云端演练-准备-区域可用区
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listAvailabilityZone(array $body = array())
    {
        $url = $this -> url . '/cloud/rehearse/availability_zone';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 云端演练-准备-规格列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listFlavor(array $body = array())
    {
        $url = $this -> url . '/cloud/rehearse/flavor_list';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 云端演练-准备-虚拟私有云列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listVpc(array $body = array())
    {
        $url = $this -> url . '/cloud/rehearse/vpc_list';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 云端演练-准备-虚拟子网列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listSubnet(array $body = array())
    {
        $url = $this -> url . '/cloud/rehearse/subnet_list';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 云端演练-准备-安全组列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listSecureGroup(array $body = array())
    {
        $url = $this -> url . '/cloud/rehearse/secure_group_list';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 云端演练-新建
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createRehearse(array $body = array())
    {
        $url = $this -> url . '/cloud/rehearse';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 云端演练 - 新建 - 批量
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createBatchRehearse(array $body = array())
    {
        $url = $this -> url . '/cloud/rehearse/batch';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 云端演练-列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listRehearse(array $body = array())
    {
        $url = $this -> url . '/cloud/rehearse';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 云端演练-列表-状态
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listRehearseStatus(array $body = array())
    {
        $url = $this -> url . '/cloud/rehearse/status';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 云端演练 - 列表 - 远程登陆
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listVncConsole(array $body = array())
    {
        $url = $this -> url . '/cloud/rehearse/vnc_console';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 云端演练-撤销
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function evacuateRehearse(array $body = array())
    {
        $url = $this -> url . '/cloud/rehearse/evacuate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 云端演练 - 批量撤销
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function evacuateBatchRehearse(array $body = array())
    {
        $url = $this -> url . '/cloud/rehearse/batch_evacuate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 云端演练-演练详情
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listRehearseDetail(array $body = array())
    {
        $url = $this -> url . '/cloud/rehearse/detail';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 云端演练-获取单个
     * 
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function describeRehearse(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/cloud/rehearse/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 云端演练-删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteRehearse(array $body = array())
    {
        $url = $this -> url . '/cloud/rehearse';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 云端演练-演练历史（被撤销的演练列表）
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listEvacuatedRehearse(array $body = array())
    {
        $url = $this -> url . '/cloud/rehearse/evacuated_list';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 云端演练 - 状态 - 底层上传
     * 
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function listNpsvrRehearseStatus(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/cloud/rehearse/' . $body['uuid'] . '/status';
        unset($body['uuid']);
        $res = $this -> httpRequest('put', $url);
        return $res;
    }

    /**
     * 云端演练 - 进度 - 底层上传
     * 
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function listNpsvrRehearseProgress(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/cloud/rehearse/' . $body['uuid'] . '/progress';
        unset($body['uuid']);
        $res = $this -> httpRequest('put', $url);
        return $res;
    }

    /**
     * 云端演练 - 演练网络配置 - 新建
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listNetwork(array $body = array())
    {
        $url = $this -> url . '/cloud/rehearse/network_conf';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 云端演练 - 演练网络配置 - 列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createNetwork(array $body = array())
    {
        $url = $this -> url . '/cloud/rehearse/network_conf';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 云端演练 - 子网下已使用的ip列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listSubnetUsedIp(array $body = array())
    {
        $url = $this -> url . '/cloud/rehearse/subnet_used_ip_list';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 云端演练 - 组演练 - 新建
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createGroup(array $body = array())
    {
        $url = $this -> url . '/cloud/rehearse/group';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 云端演练 - 组演练 - 列表
     * 
     * @return array
     */
    public function listGroup()
    {
        $url = $this -> url . '/cloud/rehearse/group';
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 云端演练 - 组演练 - 单个
     * 
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function describeGroup(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/cloud/rehearse/group/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 云端演练 - 组演练 - 删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteGroup(array $body = array())
    {
        $url = $this -> url . '/cloud/rehearse/group';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 云端演练 - 组演练 - 撤销
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createEvacuateGroup(array $body = array())
    {
        $url = $this -> url . '/cloud/rehearse/group_evacuate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 云端演练 - 组演练 - 列表状态
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listGroupStatus(array $body = array())
    {
        $url = $this -> url . '/cloud/rehearse/group_status';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 云端演练 - 组演练 - 历史列表
     * 
     * @return array
     */
    public function listEvacuatedGroup()
    {
        $url = $this -> url . '/cloud/rehearse/evacuated_group_list';
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 云端演练 - 批量获取演练信息
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listBatchRehearse(array $body = array())
    {
        $url = $this -> url . '/cloud/rehearse/batch';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 云端演练-准备-规格属性
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeFlavor(array $body = array())
    {
        $url = $this -> url . '/cloud/rehearse/flavor_info';
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