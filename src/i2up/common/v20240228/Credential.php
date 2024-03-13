<?php
namespace i2up\common\v20240228;

use i2up\Http\Client;
use i2up\Http\Error;

class Credential {
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
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listCredential(array $body = array())
    {
        
        $url = $this -> url . 'credential';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     * 新建
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createCredential(array $body = array())
    {
        
        $url = $this -> url . 'credential';
        
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     * 获取单个
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeCredential(array $body = array())
    {
        
        $url = $this -> url . 'credential/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     * 修改
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyCredential(array $body = array())
    {
        
        $url = $this -> url . 'credential/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }
    /**
     * 删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteCredential(array $body = array())
    {
        
        $url = $this -> url . 'credential';
        
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }
    /**
     * 批量导入下载模板
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function downloadTemplate(array $body = array())
    {
        
        $url = $this -> url . 'dl';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     * 批量导入
     * 
     * @return array
     */
    public function batchImportCredential()
    {
        
        $url = $this -> url . 'credential/batch';
        
        $res = $this -> httpRequest('post', $url);
        return $res;
    }
    /**
     * 关联Ukey
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listBindUkey(array $body = array())
    {
        
        $url = $this -> url . 'credential/ukey_list';
        
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