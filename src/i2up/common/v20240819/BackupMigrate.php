<?php
namespace i2up\common\v20240819;

use i2up\Http\Client;
use i2up\Http\Error;

class BackupMigrate {
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
     * 远程校验被迁移控制机状态
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function decribeCcMoveRemoteStatus(array $body = array())
    {
        $url = $this -> url . '/cc_move/check_remote_status';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 获取当前可迁移业务模块关系
     * 
     * @return array
     */
    public function decribeCcMoveModules()
    {
        $url = $this -> url . '/cc_move/check_modules';
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 配置迁移规则 - 新建
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createCcMove(array $body = array())
    {
        $url = $this -> url . '/cc_move/';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 配置迁移规则 - 状态
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function decribeCcMoveStatus(array $body = array())
    {
        $url = $this -> url . '/cc_move/status';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 配置迁移规则 - 列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listCcMove(array $body = array())
    {
        $url = $this -> url . '/cc_move/';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 配置迁移规则 - 删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteCcMove(array $body = array())
    {
        $url = $this -> url . '/cc_move/';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 获取单表数据（控制机后端调用）
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function decribeCcMoveTable(array $body = array())
    {
        $url = $this -> url . '/cc_move/table';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 配置迁移规则 - 重新迁移
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function makeCcMoveRemigrate(array $body = array())
    {
        $url = $this -> url . '/cc_move/remigrate';
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