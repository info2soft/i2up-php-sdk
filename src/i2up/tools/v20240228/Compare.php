<?php
namespace i2up\tools\v20240228;

use i2up\Http\Client;
use i2up\Http\Error;

class Compare {
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
     * 1 新建
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createCompare(array $body = array())
    {
        
        $url = $this -> url . '/compare';
        
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     * 1 修改
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyCompare(array $body = array())
    {
        
        $url = $this -> url . '/compare/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }
    /**
     * 2 获取单个(包括比较结果)
     * 
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function describeCompare(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/compare/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url);
        return $res;
    }
    /**
     * 2 获取比较结果详情
     * 
     * @return array
     */
    public function listCompareLogs()
    {
        
        $url = $this -> url . '/logs';
        
        $res = $this -> httpRequest('get', $url);
        return $res;
    }
    /**
     * 1 获取列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listCompare(array $body = array())
    {
        
        $url = $this -> url . '/compare';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     * 1.1 获取结果列表（周期）
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listCircleCompareResult(array $body = array())
    {
        
        $url = $this -> url . '/compare/' . $body['uuid'] . '/result_list';
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     * 2 状态
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listCompareStatus(array $body = array())
    {
        
        $url = $this -> url . '/compare/status';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     * 4 操作 - 启动
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function startCompare(array $body = array())
    {
        
        $url = $this -> url . '/compare/operate';
        
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     * 4 操作 - 停止
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function stopCompare(array $body = array())
    {

        $url = $this -> url . '/compare/operate';

        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     * 4 操作 - 立即启动
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function startImmediatelyCompare(array $body = array())
    {

        $url = $this -> url . '/compare/operate';

        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     * 4 操作 - 下载
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function downloadCompare(array $body = array())
    {

        $url = $this -> url . '/compare/operate';

        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     * 4 操作 - 删除
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteCompareByOperate(array $body = array())
    {

        $url = $this -> url . '/compare/operate';

        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     * 3 删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteCompare(array $body = array())
    {
        
        $url = $this -> url . '/compare';
        
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }
    /**
     * 接收任务执行结果
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function collectCompareResult(array $body = array())
    {
        
        $url = $this -> url . '/compare/collect_result';
        
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