<?php
namespace i2up\active\v20250630;

use i2up\Http\Client;
use i2up\Http\Error;

class RoutingRule {
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
     * 巡检规则 - 新建
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createReportRule(array $body = array())
    {
        $url = $this -> url . '/stream_routing';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 巡检规则 - 修改
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyReportRule(array $body = array())
    {
        $url = $this -> url . '/stream_routing';
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * 巡检规则 - 列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listReportRule(array $body = array())
    {
        $url = $this -> url . '/stream_routing';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 巡检规则 - 状态
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listReportRuleStatus(array $body = array())
    {
        $url = $this -> url . '/stream_routing/status';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 巡检规则 - 删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteReportRule(array $body = array())
    {
        $url = $this -> url . '/stream_routing';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 巡检规则 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function operateReportRule(array $body = array())
    {
        $url = $this -> url . '/stream_routing/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 巡检规则 - 导出历史
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listReportRuleHistory(array $body = array())
    {
        $url = $this -> url . '/stream_routing/history';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 同步规则 - 更新巡检kafka推送配置
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyStreamRoutingConf(array $body = array())
    {
        $url = $this -> url . '/stream_routing/config';
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * 同步规则 - 查看巡检kafka推送配置副本
     * 
     * @return array
     */
    public function listStreamRoutingConf()
    {
        $url = $this -> url . '/stream_routing/config';
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 巡检规则 - 删除历史
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteReportRuleHistory(array $body = array())
    {
        $url = $this -> url . '/stream_routing/history';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 巡检规则 - 获取巡检结果
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listReportRuleResult(array $body = array())
    {
        $url = $this -> url . '/stream_routing/result';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 巡检规则 - 获取资源
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listBizGroupResource(array $body = array())
    {
        $url = $this -> url . '/stream_routing/get_rules';
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