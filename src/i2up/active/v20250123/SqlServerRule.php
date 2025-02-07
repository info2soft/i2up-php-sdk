<?php
namespace i2up\active\v20250123;

use i2up\Http\Client;
use i2up\Http\Error;

class SqlServerRule {
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
     * 备端接管-获取网卡列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listBkTakeoveNetworkCard(array $body = array())
    {
        $url = $this -> url . '/sqlserver/bk_takeover/bk_network_card';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 备端接管-新建
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createBkTakeover(array $body = array())
    {
        $url = $this -> url . '/sqlserver/bk_takeover';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 备端接管-查看
     * 
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function describeBkTakeover(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/sqlserver/bk_takeover/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 备机接管-删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteBkTakeover(array $body = array())
    {
        $url = $this -> url . '/sqlserver/bk_takeover';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 备机接管-接管结果
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeBkTakeoverResult(array $body = array())
    {
        $url = $this -> url . '/sqlserver/bk_takeover/result';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 备机接管-操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function stopBkTakeover(array $body = array())
    {
        $url = $this -> url . '/sqlserver/bk_takeover/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 备机接管-操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function restartBkTakeover(array $body = array())
    {
        $url = $this -> url . '/sqlserver/bk_takeover/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 备端接管-获取状态
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listBkTakeoverStatus(array $body = array())
    {
        $url = $this -> url . '/sqlserver/bk_takeover/status';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 备端接管列表
     * 
     * @return array
     */
    public function listBkTakeover()
    {
        $url = $this -> url . '/sqlserver/bk_takeover';
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
        } else if ($method === 'post') {
            $ret = Client::post($url, $body, $header);
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