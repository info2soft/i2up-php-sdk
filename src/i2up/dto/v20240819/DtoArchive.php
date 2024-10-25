<?php
namespace i2up\dto\v20240819;

use i2up\Http\Client;
use i2up\Http\Error;

class DtoArchive {
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
     * 归档数据管理 - 列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listDtoArchive(array $body = array())
    {
        $url = $this -> url . '/dto/archive';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 归档数据管理 - 导出
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function exportDtoArchiveData(array $body = array())
    {
        $url = $this -> url . '/dto/archive/export';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 归档数据管理 - 获取年份
     * 
     * @return array
     */
    public function getDtoArchiveYear()
    {
        $url = $this -> url . '/dto/archive/archive_year';
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 归档数据管理 - 下载
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function downloadDtoArchiveData(array $body = array())
    {
        $url = $this -> url . '/dto/archive/download';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 归档数据管理 - 解冻
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function restoreDtoArchiveData(array $body = array())
    {
        $url = $this -> url . '/dto/archive/restore';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 归档数据管理统计 - 规则新建
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createDtoArchiveReportRule(array $body = array())
    {
        $url = $this -> url . '/dto/archive/report_rule';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 归档数据管理统计 - 规则修改
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyDtoArchiveReportRule(array $body = array())
    {
        $url = $this -> url . '/dto/archive/report_rule';
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * 归档数据管理统计 - 规则查看
     * 
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function describeDtoArchiveReportRule(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/dto/archive/report_rule/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 归档数据管理统计 - 规则删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteDtoArchiveReportRule(array $body = array())
    {
        $url = $this -> url . '/dto/archive/report_rule/';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 归档数据管理统计 - 规则列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listDtoArchiveReportRule(array $body = array())
    {
        $url = $this -> url . '/dto/archive/report_rule';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 归档数据管理统计 - 导出历史
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listDtoArchiveReportHistory(array $body = array())
    {
        $url = $this -> url . '/dto/archive/report_history';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 归档数据管理统计 - 统计报表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listDtoArchiveReportStatistics(array $body = array())
    {
        $url = $this -> url . '/dto/archive/report_statistics';
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