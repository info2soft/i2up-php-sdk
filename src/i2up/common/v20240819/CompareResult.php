<?php
namespace i2up\common\v20240819;

use i2up\Http\Client;
use i2up\Http\Error;

class CompareResult {
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
     * 列表
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listCompareResult(array $body = array())
    {
        $url = $this -> url . '/compare_result/' . $body['uuid'] . '/list';
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function downloadCompareResult(array $body = array())
    {
        $url = $this -> url . '/compare_result/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteCompareResult(array $body = array())
    {
        $url = $this -> url . '/compare_result';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 查看配置
     * 
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function viewConfig(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/compare_result/' . $body['uuid'] . '/view_config';
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 文件差异详细信息列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listDiffDetail(array $body = array())
    {
        $url = $this -> url . '/diff_detail';
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