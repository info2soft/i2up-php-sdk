<?php
namespace i2up\resource\v20260626;

use i2up\Http\Client;
use i2up\Http\Error;

class BigdataPlatform {
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
     * 备份主机 - 认证
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function authBigdataBackupHost(array $body = array())
    {
        $url = $this -> url . '/vers/v3/bigdata/backup_host/auth';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 备份主机 - 数据库认证
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function bigdataBackupHostDbAuth(array $body = array())
    {
        $url = $this -> url . '/vers/v3/bigdata/backup_host/db_auth';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 备份主机 - 新建
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createBigdataBackupHost(array $body = array())
    {
        $url = $this -> url . '/vers/v3/bigdata/backup_host';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 备份主机 - 列表
     * 
     * @return array
     */
    public function listBigdataBackupHost()
    {
        $url = $this -> url . '/vers/v3/bigdata/backup_host';
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 备份主机 - 单个
     * 
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function describeBigdataBackupHost(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/vers/v3/bigdata/backup_host/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 备份主机 - 修改
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyBigdataBackupHost(array $body = array())
    {
        $url = $this -> url . '/vers/v3/bigdata/backup_host/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * 备份主机 - 删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteBigdataBackupHost(array $body = array())
    {
        $url = $this -> url . '/vers/v3/bigdata/backup_host';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 备份主机 - 状态
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listBigdataBackupHoststatus(array $body = array())
    {
        $url = $this -> url . '/vers/v3/bigdata/backup_host/status';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 大数据平台 - 新建
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createBigdataPlatform(array $body = array())
    {
        $url = $this -> url . '/vers/v3/bigdata/platform';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 大数据平台 - 单个
     * 
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function describeBigdataPlatform(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/vers/v3/bigdata/platform/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 大数据平台 - 修改
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyBigdataPlatform(array $body = array())
    {
        $url = $this -> url . '/vers/v3/bigdata/platform/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * 大数据平台 - 列表
     * 
     * @return array
     */
    public function listBigdataPlatform()
    {
        $url = $this -> url . '/vers/v3/bigdata/platform';
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 大数据平台 - 删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteBigdataPlatform(array $body = array())
    {
        $url = $this -> url . '/vers/v3/bigdata/platform';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 大数据平台 - 状态
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listBigdataPlatformStatus(array $body = array())
    {
        $url = $this -> url . '/vers/v3/bigdata/platform/status';
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