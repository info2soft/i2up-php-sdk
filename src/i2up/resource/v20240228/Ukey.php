<?php
namespace i2up\resource\v20240228;

use i2up\Http\Client;
use i2up\Http\Error;

class Ukey {
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
    public function createUkey(array $body = array())
    {
        
        $url = $this -> url . 'ukey';
        
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
    public function modifyUkey(array $body = array())
    {
        
        $url = $this -> url . 'ukey/' . $body['uuid'];
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }
    /**
     *  单个
     * 
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function discribeUkey(array $body = array())
    {
        $url = $this -> url . 'ukey/' . $body['uuid'];
        $res = $this -> httpRequest('get', $url);
        return $res;
    }
    /**
     *  列表
     * 
     * @return array
     */
    public function listUkey()
    {
        
        $url = $this -> url . 'ukey';
        
        $res = $this -> httpRequest('get', $url);
        return $res;
    }
    /**
     *  删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteUkey(array $body = array())
    {
        
        $url = $this -> url . 'ukey';
        
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }
    /**
     *  操作 - 重置
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function resetUkey(array $body = array())
    {

        $url = $this -> url . 'ukey/operate';

        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     *  操作 - 克隆
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function cloneUkey(array $body = array())
    {

        $url = $this -> url . 'ukey/operate';

        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     *  操作 - 查看秘钥
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function getPwdUkey(array $body = array())
    {

        $url = $this -> url . 'ukey/operate';

        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     *  操作 - 关联节点
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function bindNodeUkey(array $body = array())
    {

        $url = $this -> url . 'ukey/operate';

        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     *  操作 - 解除绑定
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function untieNodeUkey(array $body = array())
    {

        $url = $this -> url . 'ukey/operate';

        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     *  状态
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listUkeyStatus(array $body = array())
    {
        
        $url = $this -> url . 'ukey/status';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  获取关联节点
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listUkeyNodeList(array $body = array())
    {
        
        $url = $this -> url . 'ukey/node_list';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  扫描
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function scanUkey(array $body = array())
    {
        
        $url = $this -> url . 'ukey/scan';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  口令导出接口
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function exportUkeyInfo(array $body = array())
    {
        
        $url = $this -> url . 'ukey/export_info';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  口令导入接口
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function importUkeyInfo(array $body = array())
    {
        
        $url = $this -> url . 'ukey/import_info';
        
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