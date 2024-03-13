<?php
namespace i2up\dto\v20240228;

use i2up\Http\Client;
use i2up\Http\Error;

class Dto {
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
    public function createDtoRule(array $body = array())
    {
        $url = $this -> url . '/dto/rule';
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
    public function modifyDtoRule(array $body = array())
    {
        $url = $this -> url . '/dto/rule/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }
    /**
     *  单个
     * 
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function describeDtoRule(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/dto/rule/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url);
        return $res;
    }
    /**
     *  列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listDtoRule(array $body = array())
    {
        $url = $this -> url . '/dto/rule';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  状态
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listDtoRuleStatus(array $body = array())
    {
        $url = $this -> url . '/dto/rule/status';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteDtoRule(array $body = array())
    {
        $url = $this -> url . '/dto/rule';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }
    /**
     *  操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function startDtoRule(array $body = array())
    {
        $url = $this -> url . '/dto/rule/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     *  操作
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function stopDtoRule(array $body = array())
    {
        $url = $this -> url . '/dto/rule/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     *  操作
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function resumeDtoRule(array $body = array())
    {
        $url = $this -> url . '/dto/rule/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     *  操作
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function restartDtoRule(array $body = array())
    {
        $url = $this -> url . '/dto/rule/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     *  操作
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function disableDtoRule(array $body = array())
    {
        $url = $this -> url . '/dto/rule/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     *  操作
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function enableDtoRule(array $body = array())
    {
        $url = $this -> url . '/dto/rule/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     *  文件列表（比较 不同/丢失/失败/孤儿）
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listDtoRuleFile(array $body = array())
    {
        $url = $this -> url . '/dto/rule/' . $body['uuid'] . '/file';
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  文件列表 删除孤儿（比较）
     * 
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function deleteDtoRuleFile(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/dto/rule/' . $body['uuid'] . '/file';
        unset($body['uuid']);
        $res = $this -> httpRequest('delete', $url);
        return $res;
    }
    /**
     *  比较结果（比较）
     * 
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function listDtoRuleCmpResult(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/dto/rule/' . $body['uuid'] . '/cmp_result';
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url);
        return $res;
    }
    /**
     *  获取源端对应路径列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listDtoRuleSourcePath(array $body = array())
    {
        $url = $this -> url . '/dto/rule/source_path_list';
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