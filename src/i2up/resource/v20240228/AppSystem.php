<?php
namespace i2up\resource\v20240228;

use i2up\Http\Client;
use i2up\Http\Error;

class AppSystem {
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
     * 获取列表
     * 
     * @return array
     */
    public function secDirList()
    {
        $url = $this -> url . '/sec_dir';
        $res = $this -> httpRequest('get', $url);
        return $res;
    }
    /**
     * 新建
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createSecDir(array $body = array())
    {
        $url = $this -> url . '/sec_dir';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     * 修改
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifySecDir(array $body = array())
    {
        $url = $this -> url . '/sec_dir/' . $body['uuid'];
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }
    /**
     * 删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteSecDir(array $body = array())
    {
        $url = $this -> url . '/sec_dir';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }
    /**
     * 获取列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function appSystemList(array $body = array())
    {
        $url = $this -> url . '/app_sys';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     * 获取列表（附加成员列表）
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function appSystemMembersList(array $body = array())
    {
        $url = $this -> url . 'app_sys/get_app_sys_members';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     * 获取单个
     * 
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function describeAppSystem(array $body = array())
    {
        $url = $this -> url . '/app_sys/' . $body['uuid'];
        $res = $this -> httpRequest('get', $url);
        return $res;
    }
    /**
     * 新建
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createAppSystem(array $body = array())
    {
        $url = $this -> url . '/app_sys';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     * 修改
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyAppSystem(array $body = array())
    {
        $url = $this -> url . '/app_sys/' . $body['uuid'];
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }
    /**
     * 删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteAppSystem(array $body = array())
    {
        $url = $this -> url . '/app_sys';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }
    /**
     * 获取虚机成员列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function getVmList(array $body = array())
    {
        $url = $this -> url . '/app_sys/vm_list';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     * 查看全部成员列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function getMembersList(array $body = array())
    {
        $url = $this -> url . '/app_sys/members_list';
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