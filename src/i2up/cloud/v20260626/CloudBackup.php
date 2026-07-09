<?php
namespace i2up\cloud\v20260626;

use i2up\Http\Client;
use i2up\Http\Error;

class CloudBackup {
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
     * 备份 - 准备 - 工作机获取设备列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listDevice(array $body = array())
    {
        $url = $this -> url . '/cloud/ecs/device_info';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 备份 - 准备  备机获取可用云硬盘列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listIdleDevice(array $body = array())
    {
        $url = $this -> url . '/cloud/ecs/idle_device_info';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 备份(云容灾-整机复制) - 新建
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createBackup(array $body = array())
    {
        $url = $this -> url . '/cloud/backup';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 备份(云容灾-整机复制) - 修改
     * 
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function modifyBackup(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/cloud/backup/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('put', $url);
        return $res;
    }

    /**
     * 备份(云容灾-整机复制) - 删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteCloudBackup(array $body = array())
    {
        $url = $this -> url . '/cloud/backup';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 备份(云容灾-整机复制) - 列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listBackup(array $body = array())
    {
        $url = $this -> url . '/cloud/backup';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 备份(云容灾-整机复制) - 启停
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function startBackup(array $body = array())
    {
        $url = $this -> url . '/cloud/backup/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 备份(云容灾-整机复制) - 启停
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function stopBackup(array $body = array())
    {
        $url = $this -> url . '/cloud/backup/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 备份(云容灾-整机复制) - 启停
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function startImmediatelyBackup(array $body = array())
    {
        $url = $this -> url . '/cloud/backup/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 备份(云容灾-整机复制) - 单个
     * 
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function describeBackup(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/cloud/backup/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 整机复制 源端virtio驱动检查
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function verifySourceVirtioDriver(array $body = array())
    {
        $url = $this -> url . '/cloud/backup/verify_source_virtio_driver';
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