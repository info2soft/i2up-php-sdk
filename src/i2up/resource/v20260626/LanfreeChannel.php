<?php
namespace i2up\resource\v20260626;

use i2up\Http\Client;
use i2up\Http\Error;

class LanfreeChannel {
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
     * LANFREE通道 - 新建
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createLanfreeChannel(array $body = array())
    {
        $url = $this -> url . '/lanfree_channel';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * LANFREE通道 - 列表
     * 
     * @return array
     */
    public function listLanfreeChannel()
    {
        $url = $this -> url . '/lanfree_channel';
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * LANFREE通道 - 单个
     * 
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function describeLanfreeChannel(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/lanfree_channel//' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * LANFREE通道 - 修改
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyLanfreeChannel(array $body = array())
    {
        $url = $this -> url . '/lanfree_channel//' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * LANFREE通道 - 删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteLanfreeChannel(array $body = array())
    {
        $url = $this -> url . '/lanfree_channel';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * LANFREE通道 - 状态
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listLanfreeChannelStatus(array $body = array())
    {
        $url = $this -> url . '/lanfree_channel/status';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 根据客户端、备端获取lanfree列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listLanfreeChannelByWkBk(array $body = array())
    {
        $url = $this -> url . '/lanfree_channel/list_by_wk_bk';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * LANFREE通道 - 查看通道
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listLanfreeChannelInfo(array $body = array())
    {
        $url = $this -> url . '/lanfree_channel/info';
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