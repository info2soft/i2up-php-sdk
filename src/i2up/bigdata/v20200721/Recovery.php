<?php
/**
 * Create by PhpStorm
 * User: Lis
 * Date: 2020/7/24
 * Time: 9:52
 */

namespace i2up\bigdata\v20200721;

use i2up\Http\Client;
use i2up\Http\Error;

class Recovery {
    private $url;
    private $token;
    private $accessKey;
    private $secretKey;
    public function __constructor($auth)
    {
        $this -> url = $auth -> ip . 'bigdata';
        if ($auth -> tokenAuthType) {
            $this -> token = $auth -> token();
        } else {
            $this -> accessKey = $auth -> accessKey();
            $this -> secretKey = $auth -> secretKey();
        }
    }

    /**
     *  准备 - 获取备份列表
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listBackupHistory(array $body = array())
    {
        $url = $this -> url . '/recovery/bak_history';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     *  新建
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createBigdataRecovery(array $body = array())
    {
        $url = $this -> url . '/recovery';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     *  单个
     *
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function describeBigdataRecovery(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/recovery/' . $body['uuid'];
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
    public function deleteBigdataRecovery(array $body = array())
    {
        $url = $this -> url . '/recovery';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     *  列表
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listBigdataRecovery(array $body = array())
    {
        $url = $this -> url . '/recovery';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     *  状态
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listBigdataRecoveryStatus(array $body = array())
    {
        $url = $this -> url . '/recovery/status';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     *  认证
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function authBigdataPlatform(array $body = array())
    {
        $url = $this -> url . '/backup/auth';
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