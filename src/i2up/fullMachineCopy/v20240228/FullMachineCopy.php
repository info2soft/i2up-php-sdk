<?php
namespace i2up\fullMachineCopy\v20240228;

use i2up\Http\Client;
use i2up\Http\Error;

class FullMachineCopy {
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
     *  新建
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createFullMachineCopy(array $body = array())
    {
        $url = $this -> url . '/full_machine_copy';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     *  修改
     *
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyFullMachineCopy(array $body = array())
    {
        $url = $this -> url . '/full_machine_copy/' . $body['uuid'];
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }
    /**
     *  删除
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteFullMachineCopy(array $body = array())
    {
        $url = $this -> url . '/full_machine_copy';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }
    /**
     *  获取详情
     *
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function describeFullMachineCopy(array $body = array())
    {
        $url = $this -> url . '/full_machine_copy/' . $body['uuid'];
        $res = $this -> httpRequest('get', $url);
        return $res;
    }
    /**
     *  获取列表
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listFullMachineCopy(array $body = array())
    {
        $url = $this -> url . '/full_machine_copy';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  获取状态
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listFullMachineCopyStatus(array $body = array())
    {
        $url = $this -> url . '/full_machine_copy/status';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     *  操作
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function startFullMachineCopy(array $body = array())
    {
        $url = $this -> url . '/full_machine_copy/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     *  操作
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function stopFullMachineCopy(array $body = array())
    {
        $url = $this -> url . '/full_machine_copy/operate';
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