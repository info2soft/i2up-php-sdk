<?php
namespace i2up\nbuBackupSet\v20260626;

use i2up\Http\Client;
use i2up\Http\Error;

class NbuBackupSet {
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
     * NBU转储结果 - 历史结果
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listBackupWork(array $body = array())
    {
        $url = $this -> url . '/vers/v3/nbu_backup_set/history';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * NBU转储结果 - 获取列表查询候选信息副本
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listQueryArgsNbuBackupSet(array $body = array())
    {
        $url = $this -> url . '/vers/v3/nbu_backup_set/query_args';
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
        }
        
        if (!$ret->ok()) {
            return array(null, new Error($url, $ret));
        }
        $r = ($ret->body === null) ? array() : $ret->json();
        $r['ret'] = $ret->statusCode;
        return array($r, null);
    }
}