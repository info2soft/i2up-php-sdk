<?php
namespace i2up\common\v20250123;

use i2up\Http\Client;
use i2up\Http\Error;

class DbConvert {
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
     * 上传备份数据
     * 
     * @return array
     */
    public function dbConvertImport()
    {
        $url = $this -> url . '/db_convert/import';
        $res = $this -> httpRequest('post', $url);
        return $res;
    }

    /**
     * 获取convert列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function dbConvertListConverts(array $body = array())
    {
        $url = $this -> url . '/db_convert/convert_list';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 执行迁移
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function dbConvertMigrate(array $body = array())
    {
        $url = $this -> url . '/db_convert/migrate';
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
        }
        
        if (!$ret->ok()) {
            return array(null, new Error($url, $ret));
        }
        $r = ($ret->body === null) ? array() : $ret->json();
        $r['ret'] = $ret->statusCode;
        return array($r, null);
    }
}