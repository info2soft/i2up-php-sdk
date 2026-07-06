<?php
namespace i2up\common\v20260626;

use i2up\Http\Client;
use i2up\Http\Error;

class BigScreen {
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
     * 大屏展示 - 新建
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createBigScreen(array $body = array())
    {
        $url = $this -> url . '/big_screen';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 大屏展示 - 修改
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyBigScreen(array $body = array())
    {
        $url = $this -> url . '/big_screen/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * 大屏展示 - 单个
     * 
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function describeBigScreen(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/big_screen/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 大屏展示 - 列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listBigScreen(array $body = array())
    {
        $url = $this -> url . '/big_screen';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 大屏展示 - 删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteBigScreen(array $body = array())
    {
        $url = $this -> url . '/big_screen';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 大屏展示 - logo上传
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function uploadBigScreenLogo(array $body = array())
    {
        $url = $this -> url . '/big_screen/logo';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 大屏展示 - logo删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteBigScreenLogo(array $body = array())
    {
        $url = $this -> url . '/big_screen/logo';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 大屏展示-logo列表
     * 
     * @return array
     */
    public function listBigScreenLogo()
    {
        $url = $this -> url . '/big_screen/logo_list';
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 大屏展示 - 更新配置
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function configBigScreen(array $body = array())
    {
        $url = $this -> url . '/big_screen/config';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 大屏展示 - 获取配置
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeBigScreenConfig(array $body = array())
    {
        $url = $this -> url . '/big_screen/config';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 大屏展示 - 清零
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function clearBigScreenStatData(array $body = array())
    {
        $url = $this -> url . '/big_screen/clear_data';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 大屏展示 - 获取规则
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listBigScreenStatRules(array $body = array())
    {
        $url = $this -> url . '/big_screen/rules';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 大屏展示-统计数据
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeBigScreenStat(array $body = array())
    {
        $url = $this -> url . '/big_screen/stat';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 大屏展示-拓扑图
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listBigScreenGraph(array $body = array())
    {
        $url = $this -> url . '/big_screen/graph';
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