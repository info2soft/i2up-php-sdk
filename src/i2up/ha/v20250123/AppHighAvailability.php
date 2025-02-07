<?php
namespace i2up\ha\v20250123;

use i2up\Http\Client;
use i2up\Http\Error;

class AppHighAvailability {
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
     * 高可用 - 节点网卡信息(应用高可用 - 集群服务器池 网卡信息)
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listNicInfo(array $body = array())
    {
        $url = $this -> url . '/ha/netif';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 高可用 - HA脚本目录
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeHAScriptPath(array $body = array())
    {
        $url = $this -> url . '/ha/script_path';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 高可用 - 磁盘信息
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeVolumeInfo(array $body = array())
    {
        $url = $this -> url . '/ha/volume_info';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 高可用 - 检查是否重名
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function haVerifyName(array $body = array())
    {
        $url = $this -> url . '/ha/verify_name';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 高可用 - 新建
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createHA(array $body = array())
    {
        $url = $this -> url . '/ha';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 高可用 - 修改
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyHA(array $body = array())
    {
        $url = $this -> url . '/ha';
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * 高可用 - 查看详细信息
     * 
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function describeHA(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/ha/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 高可用 - 列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listHA(array $body = array())
    {
        $url = $this -> url . '/ha';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 高可用 - 状态
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listHAStatus(array $body = array())
    {
        $url = $this -> url . '/ha/status';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 高可用 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function startHA(array $body = array())
    {
        $url = $this -> url . '/ha/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 高可用 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function stopHA(array $body = array())
    {
        $url = $this -> url . '/ha/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 高可用 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function forceSwitchHA(array $body = array())
    {
        $url = $this -> url . '/ha/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 高可用 - 删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteHA(array $body = array())
    {
        $url = $this -> url . '/ha';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 高可用组 - 阶段选项
     * 
     * @return array
     */
    public function listStageOptions()
    {
        $url = $this -> url . '/ha/group/stage_options';
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 高可用组-新建
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createHAGroup(array $body = array())
    {
        $url = $this -> url . '/ha/group';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 高可用组 - 列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listHAGroup(array $body = array())
    {
        $url = $this -> url . '/ha/group';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 高可用组 - 删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteHAGroup(array $body = array())
    {
        $url = $this -> url . '/ha/group';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 高可用组 - 修改
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyHAGroup(array $body = array())
    {
        $url = $this -> url . '/ha/group/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * 高可用组 - 单个详细信息
     * 
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function describeHAGroup(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/ha/group/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 高可用组 - 组强制切换
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function forceSwitchHAGroup(array $body = array())
    {
        $url = $this -> url . '/ha/group/' . $body['uuid'] . '/task';
        unset($body['uuid']);
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * 高可用组 - 切换状态
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listHASwitchTaskStatus(array $body = array())
    {
        $url = $this -> url . '/ha/group/' . $body['uuid'] . '/task/status';
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 高可用组 - 操作强制切换任务
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function resumeHAGroupSwitch(array $body = array())
    {
        $url = $this -> url . '/ha/group/' . $body['uuid'] . '/task';
        unset($body['uuid']);
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 高可用组 - 操作强制切换任务
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function pauseHAGroupSwitch(array $body = array())
    {
        $url = $this -> url . '/ha/group/' . $body['uuid'] . '/task';
        unset($body['uuid']);
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