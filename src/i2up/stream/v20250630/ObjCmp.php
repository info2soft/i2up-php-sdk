<?php
namespace i2up\stream\v20250630;

use i2up\Http\Client;
use i2up\Http\Error;

class ObjCmp {
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
     * 对象比较 - 新建
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createDatacheckObjCmp(array $body = array())
    {
        $url = $this -> url . '/vers/v3/sync_obj_cmp';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 对象比较 - 删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteDatacheckObjCmp(array $body = array())
    {
        $url = $this -> url . '/vers/v3/sync_obj_cmp';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 对象比较 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function stopObjCmp(array $body = array())
    {
        $url = $this -> url . '/vers/v3/sync_obj_cmp/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 对象比较 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function restartObjCmp(array $body = array())
    {
        $url = $this -> url . '/vers/v3/sync_obj_cmp/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 对象比较 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function cmpStopTimeObjCmp(array $body = array())
    {
        $url = $this -> url . '/vers/v3/sync_obj_cmp/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 对象比较 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function cmpResumeTimeObjCmp(array $body = array())
    {
        $url = $this -> url . '/vers/v3/sync_obj_cmp/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 对象比较 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function cmpImmediateObjCmp(array $body = array())
    {
        $url = $this -> url . '/vers/v3/sync_obj_cmp/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 对象比较 - 导出
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function exportSyncObjCmp(array $body = array())
    {
        $url = $this -> url . '/vers/v3/sync_obj_cmp/export';
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