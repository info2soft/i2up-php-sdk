<?php
/**
 * Create by PhpStorm
 * User: Lis
 * Date: 2020/10/9
 * Time: 17:03
 */

namespace i2up\mountTask\v20201009;

use i2up\Config;
use i2up\Http\Client;
use i2up\Http\Error;

class MountTask {
    private $url;
    private $token;
    private $accessKey;
    private $secretKey;
    public function __constructor($auth)
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
    public function createMountTask(array $body = array())
    {
        $url = $this -> url . 'mount_task';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 列表
     *
     * @return array
     */
    public function listMountTask()
    {
        $url = $this -> url . 'mount_task';
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 获取单个
     *
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeMountTask(array $body = array())
    {
        $url = $this -> url . 'mount_task/' . $body['uuid'] . '';
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 删除
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteMountTask(array $body = array())
    {
        $url = $this -> url . 'mount_task';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 状态
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listMountTaskStatus(array $body = array())
    {
        $url = $this -> url . 'mount_task/status';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 操作
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function tempFuncName(array $body = array())
    {
        $url = $this -> url . 'mount_task/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 获取客户端iscsi
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function getIscsiInitiatorInfo(array $body = array())
    {
        $url = $this -> url . 'mount_task/iscsi_initiator_info';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 获取快照CLONE TARGET
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function getVolumeSnapshotTarget(array $body = array())
    {
        $url = $this -> url . 'mount_task/volume_snapshot_target';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 删除快照CLONE_TARGET
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteVolumeSnapshotTarget(array $body = array())
    {
        $url = $this -> url . 'mount_task/volume_snapshot_target';
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
        } else if ($method === 'put') {
            $ret = Client::put($url, $body, $header);
        } else if ($method === 'post') {
            $ret = Client::post($url, $body, $header);
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