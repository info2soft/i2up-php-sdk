<?php
namespace i2up\common\v20240819;

use i2up\Http\Client;
use i2up\Http\Error;

class Dir {
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
     * 目录 - 列举（子）目录（节点已注册）
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listDir(array $body = array())
    {
        $url = $this -> url . '/dir';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 目录 - 列举（子）目录（节点未注册）
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listDir2(array $body = array())
    {
        $url = $this -> url . '/dir2';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 目录 - 创建目录
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createDir(array $body = array())
    {
        $url = $this -> url . '/dir';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 目录 - 检查路径
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function checkDir(array $body = array())
    {
        $url = $this -> url . '/dir/check';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 目录 - 删除文件/路径（DTO云存储）
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteDir(array $body = array())
    {
        $url = $this -> url . '/dir';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 目录 - 删除的结果（DTO云存储）
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeDirDelStatus(array $body = array())
    {
        $url = $this -> url . '/dir/del_status';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 目录 - 备份卷路径
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listEtcdDir(array $body = array())
    {
        $url = $this -> url . '/dir/etcd_dir';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 目录 - 操作（DTO云存储）
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function operateDtoDir(array $body = array())
    {
        $url = $this -> url . '/dir/dto_operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 目录 - 定时还原文件类型
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listFileBackupDir(array $body = array())
    {
        $url = $this -> url . '/dir/file_dir';
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