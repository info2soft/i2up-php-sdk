<?php
namespace i2up\rep\v20250123;

use i2up\Http\Client;
use i2up\Http\Error;

class RepRecovery {
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
     * 恢复-1 新建任务
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createRepRecovery(array $body = array())
    {
        $url = $this -> url . '/rep/recovery';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 恢复-1 获取单个任务
     * 
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function describeRepRecovery(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/rep/recovery/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 恢复-1 修改任务
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function updateRepRecovery(array $body = array())
    {
        $url = $this -> url . '/rep/recovery/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * 恢复-2 删除任务
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteRepRecovery(array $body = array())
    {
        $url = $this -> url . '/rep/recovery';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 恢复-2 获取任务列表（基本信息）
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listRepRecovery(array $body = array())
    {
        $url = $this -> url . '/rep/recovery';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 恢复-2 任务操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function startRepRecovery(array $body = array())
    {
        $url = $this -> url . '/rep/recovery/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 恢复-2 任务操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function stopRepRecovery(array $body = array())
    {
        $url = $this -> url . '/rep/recovery/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 恢复-2 任务操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function clearFinishRepRecovery(array $body = array())
    {
        $url = $this -> url . '/rep/recovery/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 恢复-2 任务状态
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listRepRecoveryStatus(array $body = array())
    {
        $url = $this -> url . '/rep/recovery/status';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * CDP 恢复-1 获取CDP时间范围
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listRepRecoveryCdpRange(array $body = array())
    {
        $url = $this -> url . '/rep/recovery/cdp_range';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * CDP 恢复-1 获取CDP日志列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listRepRecoveryCdpLog(array $body = array())
    {
        $url = $this -> url . '/rep/recovery/cdp_log';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 恢复 - CDP在线查看任意时间点数据
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function viewRepRecoveryData(array $body = array())
    {
        $url = $this -> url . '/rep/recovery/rc_data_view';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 恢复-状态 在线查看任意时间点数据专用
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listRcpRecoveryDataViewStatus(array $body = array())
    {
        $url = $this -> url . '/rep/recovery/rc_data_view_status';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 恢复 - 孤儿文件列表-CDP时间点数据
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listCDPRcData(array $body = array())
    {
        $url = $this -> url . '/rep/recovery/' . $body['uuid'] . '/orphan_list';
        unset($body['uuid']);
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