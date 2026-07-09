<?php
namespace i2up\backupDomain\v20260626;

use i2up\Http\Client;
use i2up\Http\Error;

class BackupDomain {
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
     * 备份域 - 获取目标域存储单元列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listTargetDomainStorageUnit(array $body = array())
    {
        $url = $this -> url . '/vers/v3/backup_domain/storage_unit';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 备份域 - 获取目标域存储单元状态
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listTargetDomainStorageUnitStatus(array $body = array())
    {
        $url = $this -> url . '/vers/v3/backup_domain/storage_unit_status';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 备份域 - 新建
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createBackupDomain(array $body = array())
    {
        $url = $this -> url . '/vers/v3/backup_domain';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 备份域 - 修改
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyBackupDomain(array $body = array())
    {
        $url = $this -> url . '/vers/v3/backup_domain/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * 备份域 - 认证
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function authBackupDomain(array $body = array())
    {
        $url = $this -> url . '/vers/v3/backup_domain/auth';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 备份域 - 列表
     * 
     * @return array
     */
    public function listBackupDomain()
    {
        $url = $this -> url . '/vers/v3/backup_domain';
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 备份域 - 单个查看
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeBackupDomain(array $body = array())
    {
        $url = $this -> url . '/vers/v3/backup_domain/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 备份域 - 删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteBackupDomain(array $body = array())
    {
        $url = $this -> url . '/vers/v3/backup_domain';
        $res = $this -> httpRequest('delete', $url, $body);
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