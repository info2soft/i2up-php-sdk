<?php
namespace i2up\stream\v20250630;

use i2up\Http\Client;
use i2up\Http\Error;

class SensCheck {
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
     * 敏感发现 - 新建
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createSensCheck(array $body = array())
    {
        $url = $this -> url . '/vers/v3/mask/sens_check';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 敏感发现 - 修改
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifySensCheck(array $body = array())
    {
        $url = $this -> url . '/vers/v3/mask/sens_check/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * 敏感发现 - 删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteSensCheck(array $body = array())
    {
        $url = $this -> url . '/vers/v3/mask/sens_check';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 敏感发现 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function startMaskRule(array $body = array())
    {
        $url = $this -> url . '/vers/v3/mask/sens_check/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 敏感发现 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function stopMaskRule(array $body = array())
    {
        $url = $this -> url . '/vers/v3/mask/sens_check/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 敏感发现 - 列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listSensCheck(array $body = array())
    {
        $url = $this -> url . '/vers/v3/mask/sens_check';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 敏感发现 - 单个
     * 
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function descriptSensCheck(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/vers/v3/mask/sens_check/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 敏感发现 - 状态
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listSensCheckStatus(array $body = array())
    {
        $url = $this -> url . '/vers/v3/mask/sens_check/status';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 敏感发现 - 结果
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listSensCheckResult(array $body = array())
    {
        $url = $this -> url . '/vers/v3/mask/sens_check/result/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 敏感发现 - 忽略结果
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listSensCheckIgnoreCol(array $body = array())
    {
        $url = $this -> url . '/vers/v3/mask/sens_check/ignore_col';
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
        $r['ret'] = $ret->statusCode;
        return array($r, null);
    }
}