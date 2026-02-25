<?php
namespace i2up\snapshotTask\v20260209;

use i2up\Http\Client;
use i2up\Http\Error;

class SnapshotTask {
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
     * 新建
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createSnapshotTask(array $body = array())
    {
        $url = $this -> url . '/snapshot_task';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 修改
     * 
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function modifySnapshotTask(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/snapshot_task/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('put', $url);
        return $res;
    }

    /**
     * 列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listSnapshotTask(array $body = array())
    {
        $url = $this -> url . '/snapshot_task';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteSnapshotTask(array $body = array())
    {
        $url = $this -> url . '/snapshot_task';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 状态
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listSnapshotTaskStatus(array $body = array())
    {
        $url = $this -> url . '/snapshot_task/status';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 快照任务-获取单个
     * 
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function describeSnapshotTask(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/snapshot_task/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function startImmediatelySnapshotTask(array $body = array())
    {
        $url = $this -> url . '/snapshot_task/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function startSnapshotTask(array $body = array())
    {
        $url = $this -> url . '/snapshot_task/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function stopSnapshotTask(array $body = array())
    {
        $url = $this -> url . '/snapshot_task/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 获取任务快照列表
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listSnapshotList(array $body = array())
    {
        $url = $this -> url . '/snapshot_task/' . $body['uuid'] . '/snapshot_list';
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 删除任务快照
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteSnapshotList(array $body = array())
    {
        $url = $this -> url . '/snapshot_task/' . $body['uuid'] . '/snapshot_list';
        unset($body['uuid']);
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