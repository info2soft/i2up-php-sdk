<?php

namespace i2up\common;

use i2up\Http\Client;
use i2up\Http\Error;

class Permission {
    private $url;
    private $token;
    private $accessKey;
    private $secretKey;
    public function __construct($auth)
    {
        $this -> url = $auth -> ip . 'permission';
        if ($auth -> tokenAuthType) {
            $this -> token = $auth -> token();
        } else {
            $this -> accessKey = $auth -> accessKey();
            $this -> secretKey = $auth -> secretKey();
        }
    }

    /**
     * 权限 - 类别
     * @return array
     */
    public function listCategory()
    {
        $url = $this -> url . '/category';
        $res = $this -> get($url);
        return $res;
    }

    /**
     * 权限 - 类别权限
     * @return array
     */
    public function listCatPerms()
    {
        $url = $this -> url . '/cat_perms';
        $res = $this -> get($url);
        return $res;
    }

    private function get($url, $body = null)
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
        $ret = Client::get($url, $body, $header);
        if (!$ret->ok()) {
            return array(null, new Error($url, $ret));
        }
        $r = ($ret->body === null) ? array() : $ret->json();
        return array($r, null);
    }
}
