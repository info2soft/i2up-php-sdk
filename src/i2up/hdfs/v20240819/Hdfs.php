<?php
namespace i2up\hdfs\v20240819;

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
     * 大数据平台 - 总览
     * 
     * @return array
     */
    public function hdfsSummary()
    {
        $url = $this -> url . '/hdfs/summary';
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * hdfs同步 - 新建
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
     * hdfs同步 - 修改
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
     * hdfs同步 - 列表
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
     * hdfs同步 - 获取单个
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
     * hdfs同步 - 删除
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
     * hdfs同步 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function startHdfs(array $body = array())
    {
        $url = $this -> url . '/hdfs/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * hdfs同步 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function stopHdfs(array $body = array())
    {
        $url = $this -> url . '/hdfs/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * hdfs同步 - 获取状态
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

    /**
     * hdfs差异比较 - 新建
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createHdfsCompare(array $body = array())
    {
        $url = $this -> url . '/hdfs_compare';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * hdfs差异比较 - 修改
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyHdfsCompare(array $body = array())
    {
        $url = $this -> url . '/hdfs_compare/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * hdfs差异比较 - 列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listHdfsCompare(array $body = array())
    {
        $url = $this -> url . '/hdfs_compare';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * hdfs差异比较 - 获取单个
     * 
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function describeHdfsCompare(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/hdfs_compare/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * hdfs差异比较 - 删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteHdfsCompare(array $body = array())
    {
        $url = $this -> url . '/hdfs_compare';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * hdfs差异比较 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function startHdfsCompare(array $body = array())
    {
        $url = $this -> url . '/hdfs_compare/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * hdfs差异比较 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function stopHdfsCompare(array $body = array())
    {
        $url = $this -> url . '/hdfs_compare/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * hdfs差异比较 - 获取状态
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listHdfsCompareStatus(array $body = array())
    {
        $url = $this -> url . '/hdfs_compare/status';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 差异比较 - 获取历史记录列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listHdfsCompareHistory(array $body = array())
    {
        $url = $this -> url . '/hdfs_compare/list_compare_history';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 差异比较 - 获取单个历史记录详情
     * 
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function describeHdfsCompareHistory(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/hdfs_compare/' . $body['uuid'] . '/compare_history';
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 差异比较 - 删除比较结果历史记录
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteHdfsCompareHistory(array $body = array())
    {
        $url = $this -> url . '/hdfs_compare/compare_history';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 差异比较 - 获取比较结果列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listHdfsCompareResult(array $body = array())
    {
        $url = $this -> url . '/hdfs_compare/list_compare_result';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 差异比较 - 获取比较结果详情列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listHdfsCompareResultDetail(array $body = array())
    {
        $url = $this -> url . '/hdfs_compare/list_compare_result_detail';
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