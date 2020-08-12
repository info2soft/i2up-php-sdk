<?php
/**
 * Create by PhpStorm
 * User: Lis
 * Date: 2020/8/3
 * Time: 15:24
 */

namespace i2up\active\v20200721;

use i2up\Http\Client;
use i2up\Http\Error;

class Node {
    private $url;
    private $token;
    private $accessKey;
    private $secretKey;
    public function __constructor($auth)
    {
        $this -> url = $auth -> ip . 'active/node';
        if ($auth -> tokenAuthType) {
            $this -> token = $auth -> token();
        } else {
            $this -> accessKey = $auth -> accessKey();
            $this -> secretKey = $auth -> secretKey();
        }
    }

    /**
     * 未激活节点列表
     *
     * @return array
     */
    public function listInactiveNodes()
    {
        $url = $this -> url . '/inactive_list';
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 节点列表(搜索)
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listNodes(array $body = array())
    {
        $url = $this -> url;
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 节点状态
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listNodeStatus(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 配置详情
     *
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function descriptNode(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 激活
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function activeNode(array $body = array())
    {
        $url = $this -> url;
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 删除节点
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteNode(array $body = array())
    {
        $url = $this -> url;
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 节点升级
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function upgradeNode(array $body = array())
    {
        $url = $this -> url . '/upgrade';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 节点调试信息
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function descriptNodeDebugInfo(array $body = array())
    {
        $url = $this -> url . '/debug_info';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 修改节点
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyNode(array $body = array())
    {
        $url = $this -> url;
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