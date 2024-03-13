<?php
namespace i2up\resource\v20240228;

use i2up\Http\Client;
use i2up\Http\Error;

class CopyVolume {
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
     *  新建
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createCopyVolume(array $body = array())
    {
        
        $url = $this -> url . 'copy_volume';
        
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     *  修改
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyCopyVolume(array $body = array())
    {
        
        $url = $this -> url . 'copy_volume/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }
    /**
     *  单个
     * 
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function describeCopyVolume(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . 'copy_volume/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url);
        return $res;
    }
    /**
     *  列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function copyVolumeList(array $body = array())
    {
        
        $url = $this -> url . 'copy_volume';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteCopyVolume(array $body = array())
    {
        
        $url = $this -> url . 'copy_volume';
        
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }
    /**
     *  操作 - 挂载
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function mountCopyVolume(array $body = array())
    {
        
        $url = $this -> url . 'copy_volume/operate';
        
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     *  操作 - 卸载
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function unMountCopyVolume(array $body = array())
    {

        $url = $this -> url . 'copy_volume/operate';

        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     *  状态
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listCopyVolumeStatus(array $body = array())
    {
        
        $url = $this -> url . 'copy_volume/status';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     * 获取单个卷快照列表
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listSnapshotList(array $body = array())
    {
        
        $url = $this -> url . 'copy_volume/' . $body['uuid'] . '/snapshot_list';
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listCopyCdmVolume(array $body = array())
    {
        
        $url = $this -> url . 'copy_volume/copy_cdm_volume';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  新建 准备 获取客户端列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listCopyVolumeClient(array $body = array())
    {
        
        $url = $this -> url . 'copy_volume/client_list';
        
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
        return array($r, null);
    }
}