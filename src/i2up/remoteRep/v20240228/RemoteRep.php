<?php
namespace i2up\remoteRep\v20240228;

use i2up\Http\Client;
use i2up\Http\Error;

class RemoteRep {
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
    public function createRemoteRep(array $body = array())
    {
        $url = $this -> url . '/remote_rep';
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
    public function modifyRemoteRep(array $body = array())
    {
        $url = $this -> url . '/remote_rep/' . $body['uuid'];
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }
    /**
     *  列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listRemoteRep(array $body = array())
    {
        $url = $this -> url . '/remote_rep';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  获取单个
     * 
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function describeRemoteRep(array $body = array())
    {
        $url = $this -> url . '/remote_rep/' . $body['uuid'];
        $res = $this -> httpRequest('get', $url);
        return $res;
    }
    /**
     *  操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function startRemoteRep(array $body = array())
    {
        $url = $this -> url . '/remote_rep/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     *  操作
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function stopRemoteRep(array $body = array())
    {
        $url = $this -> url . '/remote_rep/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     *  操作
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function startImmediatelyRemoteRep(array $body = array())
    {
        $url = $this -> url . '/remote_rep/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     *  删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteRemoteRep(array $body = array())
    {
        $url = $this -> url . '/remote_rep';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }
    /**
     *  状态
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listRemoteRepStatus(array $body = array())
    {
        $url = $this -> url . '/remote_rep/status';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     * 根据存储池获取规则列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listStoragePoolRuleList(array $body = array())
    {
        $url = $this -> url . '/remote_rep/storage_pool_rules';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     * 根据存储池获取文件系统列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listFileSystem(array $body = array())
    {
        $url = $this -> url . '/remote_rep/file_system';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     * 获取（远程）复制卷的副本卷
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listFirstCloneVolume(array $body = array())
    {
        $url = $this -> url . '/remote_rep/mount_task';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     * 获取（二级）副本卷
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeCloneVolume(array $body = array())
    {
        $url = $this -> url . '/remote_rep/clone_volume';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     * 根据备份规则过滤存储节点
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function filterStorageNode(array $body = array())
    {
        $url = $this -> url . '/remote_rep/filter_storage';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  文件合成备份还原时间点
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listFileSnapshot(array $body = array())
    {
        $url = $this -> url . '/remote_rep/file_snapshot_list';
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