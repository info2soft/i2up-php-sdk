<?php
namespace i2up\active\v20240228;

use i2up\Http\Client;
use i2up\Http\Error;

class QianBaseSync {
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
     *  列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listQianbaseRule(array $body = array())
    {
        $url = $this -> url . '/qianbase/rule';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  新建
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createQianbaseRule(array $body = array())
    {
        $url = $this -> url . '/qianbase/rule';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     *  修改
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyQianbaseRule(array $body = array())
    {
        $url = $this -> url . '/qianbase/rule';
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }
    /**
     *  删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteQianbaseRule(array $body = array())
    {
        $url = $this -> url . '/qianbase/rule';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }
    /**
     *  状态
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listQianbaseStatus(array $body = array())
    {
        $url = $this -> url . '/qianbase/rule/status';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function resumeQianbaseRule(array $body = array())
    {
        $url = $this -> url . '/qianbase/rule/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     * qianbase日志
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listQianbaseRuleLog(array $body = array())
    {
        $url = $this -> url . '/qianbase/rule/log';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     * qianbase获取单个信息
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeQianbaseRules(array $body = array())
    {
        $url = $this -> url . '/qianbase/rule/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  新建
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createQbTbCmp(array $body = array())
    {
        $url = $this -> url . '/qianbase/tb_cmp';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     * qianbase状态接口
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listQbTbCmpStatus(array $body = array())
    {
        $url = $this -> url . '/qianbase/tb_cmp/status';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  获取单个
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeQbTbCmp(array $body = array())
    {
        $url = $this -> url . '/qianbase/tb_cmp/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteQbTbCmp(array $body = array())
    {
        $url = $this -> url . '/qianbase/tb_cmp';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }
    /**
     *  列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listQbTbCmp(array $body = array())
    {
        $url = $this -> url . '/qianbase/tb_cmp';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     * qianbase 历史结果
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listQbTbCmpResultTimeList(array $body = array())
    {
        $url = $this -> url . '/qianbase/tb_cmp/result_time_list';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     * 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function stopQbTbCmp(array $body = array())
    {
        $url = $this -> url . '/qianbase/tb_cmp/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     * 比较结果的删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeQbTbCmpResuluTimeList(array $body = array())
    {
        $url = $this -> url . '/qianbase/tb_cmp/result_time_list';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }
    /**
     * 比较任务结果
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeQbTbCmpResult(array $body = array())
    {
        $url = $this -> url . '/qianbase/tb_cmp/result';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     * 错误信息
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeQbTbCmpErrorMsg(array $body = array())
    {
        $url = $this -> url . '/qianbase/tb_cmp/error_msg';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     * 比较结果
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeQbTbCmpCmpResult(array $body = array())
    {
        $url = $this -> url . '/qianbase/tb_cmp/cmp_result';
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
        return array($r, null);
    }
}