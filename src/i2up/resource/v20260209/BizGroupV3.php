<?php
namespace i2up\resource\v20260209;

use i2up\Http\Client;
use i2up\Http\Error;

class BizGroupV3 {
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
     * 1 分组-1 添加
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createBizGroup(array $body = array())
    {
        $url = $this -> url . '/vers/v3/biz_grp';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 3 其他-1 获取 Res 列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listBizGroupResource(array $body = array())
    {
        $url = $this -> url . '/vers/v3/biz_grp/res';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 2 分组关系-2 获取绑定情况
     * 
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function listBizGroupBind(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/vers/v3/biz_grp/' . $body['uuid'] . '/bind';
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 2 分组关系-1 更新绑定
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function updateBizGroupBind(array $body = array())
    {
        $url = $this -> url . '/vers/v3/biz_grp/' . $body['uuid'] . '/bind';
        unset($body['uuid']);
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * 1 分组-4 获取列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listBizGroup(array $body = array())
    {
        $url = $this -> url . '/vers/v3/biz_grp';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 1 分组-5 删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteBizGroup(array $body = array())
    {
        $url = $this -> url . '/vers/v3/biz_grp';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 1 分组-3 获取单个
     * 
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function describeBizGroup(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/vers/v3/biz_grp/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 1 分组-2 更新
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyBizGroup(array $body = array())
    {
        $url = $this -> url . '/vers/v3/biz_grp/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('put', $url, $body);
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