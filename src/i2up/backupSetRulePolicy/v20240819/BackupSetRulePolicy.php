<?php
namespace i2up\backupSetRulePolicy\v20240819;

use i2up\Http\Client;
use i2up\Http\Error;

class BackupSetRulePolicy {
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
     * 备份集复制策略 - 新建
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createReplicaTask(array $body = array())
    {
        $url = $this -> url . '/replica_task';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 备份集复制策略 - 修改
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyReplicaTask(array $body = array())
    {
        $url = $this -> url . '/replica_task/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * 备份集复制策略 - 列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listReplicaTask(array $body = array())
    {
        $url = $this -> url . '/replica_task';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 备份集复制策略 - 单个
     * 
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function describeReplicaTask(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/replica_task/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 备份集复制策略 - 删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteReplicaTask(array $body = array())
    {
        $url = $this -> url . '/replica_task';
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