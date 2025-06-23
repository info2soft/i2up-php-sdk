<?php
namespace i2up\common\v20250630;

use i2up\Http\Client;
use i2up\Http\Error;

class Webhook {
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
     * webhook渠道 - 新建
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createWebhook(array $body = array())
    {
        $url = $this -> url . '/webhook';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * Webhook渠道 - 修改
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyWebhook(array $body = array())
    {
        $url = $this -> url . '/webhook/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * Webhook渠道 - 列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listWebhook(array $body = array())
    {
        $url = $this -> url . '/webhook';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * Webhook渠道 - 单个
     * 
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function describeWebhook(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/webhook/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * Webhook渠道 - 删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteWebhook(array $body = array())
    {
        $url = $this -> url . '/webhook';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 内容模板 - 新建
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createWebhookContentTemplate(array $body = array())
    {
        $url = $this -> url . '/webhook/content_template';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 内容模板 - 修改
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyWebhookContentTemplate(array $body = array())
    {
        $url = $this -> url . '/webhook/content_template/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * 内容模板 - 列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listWebhookContentTemplate(array $body = array())
    {
        $url = $this -> url . '/webhook/content_template';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 内容模板 - 删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function delteWebhookContentTemplate(array $body = array())
    {
        $url = $this -> url . '/webhook/content_template';
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