<?php

namespace i2up\common;

use i2up\Http\Client;
use i2up\Http\Error;

class Permission {
    private $url;
    private $token;
    public function __construct($auth)
    {
        $this -> url = $auth -> ip . 'permission/category';
        $this -> token = $auth -> token();
    }

    /**
     * @return array
     */
    public function listCategory()
    {
        $url = $this -> url;
        $res = $this -> get($url);
        return $res;
    }
    private function get($url, $body = null)
    {
        if (isset($this -> token)) {
            $header = array('Authorization' => $this -> token);
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
