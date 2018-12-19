<?php

namespace i2up\common;

use i2up\Config;
use i2up\Http\Client;
use i2up\Http\Error;

class Storage {
    private $url;
    private $token;
    public function __construct($auth)
    {
        $this -> url = Config::baseUrl . '/storage';
        $this -> token = $auth -> token();
    }

    /**
     * @param array $body
     * $body['node_uuid'] String  节点uuid与复制规则uuid二选一, 节点uuid
     * $body['rep_uuid'] String  复制规则uuid和节点二选一, 复制规则uuid
     * $body['byte_format'] Number  1，有且仅有1enable，其他值忽略, 格式化bytes
     * @return array
     */
    public function listStorageInfo(array $body = array())
    {
        $url = $this -> url;
        $res = $this -> get($url, $body);
        return $res;
    }
    private function get($url, $body)
    {
        if (isset($this -> token)) {
            $header = array('Authorization' => $this -> token);
        } else {
            $header = array();
        }
        $ret = null;
        $ret = Client::get($url, $body, $header);

        if (!$ret->ok()) {
            return array(null, new Error($url, $ret));
        }
        $r = ($ret->body === null) ? array() : $ret->json();
        return array($r, null);
    }
}