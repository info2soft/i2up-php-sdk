<?php
namespace i2up\resource\v20260209;

use i2up\Http\Client;
use i2up\Http\Error;

class Filesystem {
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
     * 文件系统 - 新建
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createFilesystem(array $body = array())
    {
        $url = $this -> url . '/filesystem';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 文件系统 - 修改
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyFilesystem(array $body = array())
    {
        $url = $this -> url . '/filesystem/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * 文件系统 - 单个
     * 
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function describeFilesystem(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/filesystem/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 文件系统 - 状态
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listFilesystemStatus(array $body = array())
    {
        $url = $this -> url . '/filesystem/status';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 文件系统 - 删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteFilesystem(array $body = array())
    {
        $url = $this -> url . '/filesystem';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 文件系统 - 列表
     * 
     * @return array
     */
    public function listFilesystem()
    {
        $url = $this -> url . '/filesystem';
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 文件系统 - 获取节点文件系统列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function loadFilesystemList(array $body = array())
    {
        $url = $this -> url . '/filesystem/load_filesystem_list';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 批量导入文件系统
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function importFilesystemList(array $body = array())
    {
        $url = $this -> url . '/filesystem/batch_import';
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