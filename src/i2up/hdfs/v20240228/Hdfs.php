<?php
namespace i2up\hdfs\v20240228;

use i2up\Http\Client;
use i2up\Http\Error;

class Hdfs {
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
    public function createHdfs(array $body = array())
    {
        
        $url = $this -> url . '/hdfs';
        
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
    public function modifyHdfs(array $body = array())
    {
        
        $url = $this -> url . '/hdfs/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }
    /**
     *  列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listHdfs(array $body = array())
    {
        
        $url = $this -> url . '/hdfs';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  获取单个
     * 
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function describeHdfs(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/hdfs/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url);
        return $res;
    }
    /**
     *  删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteHdfs(array $body = array())
    {
        
        $url = $this -> url . '/hdfs';
        
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }
    /**
     *  操作 - 启动
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function StartHdfs(array $body = array())
    {

        $url = $this -> url . '/hdfs/operate';

        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     *  操作 - 停止
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function StopHdfs(array $body = array())
    {

        $url = $this -> url . '/hdfs/operate';

        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     *  获取状态
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listHdfsStatus(array $body = array())
    {
        
        $url = $this -> url . '/hdfs/status';
        
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