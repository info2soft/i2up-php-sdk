<?php
namespace i2up\active\v20250123;

use i2up\Http\Client;
use i2up\Http\Error;

class Mysql {
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
     * 同步规则 - 新建
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createMysqlRule(array $body = array())
    {
        $url = $this -> url . '/stream/rule';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 同步规则 - 列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listStreamRules(array $body = array())
    {
        $url = $this -> url . '/stream/rule';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 同步规则 - 修改
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyMysqlRule(array $body = array())
    {
        $url = $this -> url . '/stream/rule';
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * 同步规则 - 批量新建
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createBatchMysqlRule(array $body = array())
    {
        $url = $this -> url . '/stream/rule/batch';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 同步规则 - 批量修改
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function batchModifyMysqlRule(array $body = array())
    {
        $url = $this -> url . '/stream/rule/batch';
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * 同步规则 - 删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteMysqlRule(array $body = array())
    {
        $url = $this -> url . '/stream/rule';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 同步规则 - 获取单个信息
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeMysqlRule(array $body = array())
    {
        $url = $this -> url . '/stream/rule/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 同步规则 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function resumeMysqlRule(array $body = array())
    {
        $url = $this -> url . '/stream/rule/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 同步规则 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function stopMysqlRule(array $body = array())
    {
        $url = $this -> url . '/stream/rule/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 同步规则 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function restartMysqlRule(array $body = array())
    {
        $url = $this -> url . '/stream/rule/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 同步规则 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function startParsingMysqlRule(array $body = array())
    {
        $url = $this -> url . '/stream/rule/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 同步规则 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function stopParsingMysqlRule(array $body = array())
    {
        $url = $this -> url . '/stream/rule/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 同步规则 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function resetParsingMysqlRule(array $body = array())
    {
        $url = $this -> url . '/stream/rule/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 同步规则 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function startLoadMysqlRule(array $body = array())
    {
        $url = $this -> url . '/stream/rule/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 同步规则 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function stopLoadMysqlRule(array $body = array())
    {
        $url = $this -> url . '/stream/rule/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 同步规则 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function resetLoadMysqlRule(array $body = array())
    {
        $url = $this -> url . '/stream/rule/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 同步规则 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function duplicateMysqlRule(array $body = array())
    {
        $url = $this -> url . '/stream/rule/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 同步规则 - 状态（详细返回参考Oracle同步规则状态接口）
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listStreamStatus(array $body = array())
    {
        $url = $this -> url . '/stream/rule/status';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * mysql-表修复-新建
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createStreamTableFix(array $body = array())
    {
        $url = $this -> url . '/stream/rule/table_fix';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 同步规则 - 获取LSN
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function getStreamRuleLsn(array $body = array())
    {
        $url = $this -> url . '/stream/rule/lsn';
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