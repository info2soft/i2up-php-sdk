<?php
namespace i2up\ha\v20240228;

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
     *  节点网卡信息
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
     *  HA脚本目录
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeHAScriptPath(array $body = array())
    {
        $url = $this -> url . 'ha/script_path';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  磁盘信息
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeVolumeInfo(array $body = array())
    {
        $url = $this -> url . 'ha/volume_info';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  检查是否重名
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
     *  新建
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
     *  修改
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
     *  查看详细信息
     * 
     * @return array
     */
    public function describeHA(array $body = array())
    {
        $url = $this -> url . '/ha/' . $body['uuid'];
        $res = $this -> httpRequest('get', $url);
        return $res;
    }
    /**
     *  列表
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
     *  状态
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
     *  操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function startHA (array $body = array())
    {
        $url = $this -> url . '/ha/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     *  操作
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
     *  操作
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
     *  删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteHA(array $body = array())
    {
        $url = $this -> url . 'ha';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }
    /**
     *  阶段选项
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
     * 新建
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
     *  列表
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
     *  删除
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
     *  修改
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyHAGroup(array $body = array())
    {
        $url = $this -> url . '/ha/group/' . $body['uuid'];
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }
    /**
     *  单个详细信息
     * 
     * @return array
     */
    public function describeHAGroup(array $body = array())
    {
        $url = $this -> url . '/ha/group/' . $body['uuid'];
        $res = $this -> httpRequest('get', $url);
        return $res;
    }
    /**
     *  组强制切换
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function forceSwitch(array $body = array())
    {
        $url = $this -> url . '/ha/group/' . $body['uuid'] . '/task';
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }
    /**
     *  切换状态
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listHASwitchTaskStatus(array $body = array())
    {
        $url = $this -> url . '/ha/group/' . $body['uuid'] . '/task/status';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  操作强制切换任务
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function resumeHAGroupSwitch (array $body = array())
    {
        $url = $this -> url . '/ha/group/' . $body['uuid'] . '/task';
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
        return array($r, null);
    }
}