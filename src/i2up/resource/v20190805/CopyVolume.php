<?php
/**
 * Create by PhpStorm
 * User: Lis
 * Date: 2020/10/9
 * Time: 16:21
 */

namespace i2up\resource\v20190805;

use i2up\Config;
use i2up\Http\Client;
use i2up\Http\Error;

class CopyVolume {
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
     *  新建
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createCopyVolume(array $body = array())
    {
        $url = $this -> url . 'copy_volume';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     *  修改
     *
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function modifyCopyVolume(array $body = array())
    {
        $url = $this -> url . 'copy_volume/' . $body['uuid'] . '';
        $res = $this -> httpRequest('put', $url);
        return $res;
    }

    /**
     *  单个
     *
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function describeCopyVolume(array $body = array())
    {
        $url = $this -> url . 'copy_volume/' . $body['uuid'] . '';
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     *  列表
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function copyVolumeList(array $body = array())
    {

        $url = $this -> url . 'copy_volume';

        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     *  删除
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteCopyVolume(array $body = array())
    {
        $url = $this -> url . 'copy_volume';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     *  状态
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function tempFuncName(array $body = array())
    {
        $url = $this -> url . 'copy_volume/status';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 获取单个卷快照列表
     *
     * @param array $body  参数详见 API 手册
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function listSnapshotList(array $body = array())
    {
        $url = $this -> url . 'copy_volume/' . $body['uuid'] . '/snapshot_list';
        $res = $this -> httpRequest('get', $url);
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