<?php

namespace i2up\common;

use i2up\Http\Client;
use i2up\Http\Error;

class Dir {
    private $dirUrl;
    private $token;
    private $accessKey;
    private $secretKey;
    public function __construct($auth)
    {
        $this -> dirUrl = $auth -> ip . 'dir';
        if ($auth -> tokenAuthType) {
            $this -> token = $auth -> token();
        } else {
            $this -> accessKey = $auth -> accessKey();
            $this -> secretKey = $auth -> secretKey();
        }
    }
    /**
     * 列举（子）目录结构（节点已注册）
     * @param array $body
     * $body['show_file'] Number   是否显示文件 0显示，1不显示
     * $body['node_uuid'] String   节点uuid，针对已经注册节点, 节点uuid
     * $body['dev'] Number   返回块设备列表：1, 返回块设备，win返回磁盘盘符；0, 正常目录返回
     * $body['path'] String   （绝对路径），获取盘符（挂载点）时，传 ‘/’；, 指定（父）目录
     * $body['rep_uuid'] String   可选，复制规则-cdp恢复时必传，为对应复制规则uuid
     * $body['bs_time'] String    可选，复制规则-cdp恢复时必传，为用户选择的[CDP恢复时间点]对应的 baseline 时间点
     * 列举（子）目录结构（节点未注册）
     * $body['port'] String    rpcserver端口， 针对未注册节点, rpc端口
     * $body['account'] String    操作系统账户或者auth.conf中配置, 节点认证账号
     * $body['path'] String    （绝对路径），获取盘符（挂载点）时，传 '/', 指定（父）目录
     * $body['ip'] String    rpcserver 地址， 针对未注册节点, 节点IP
     * $body['show_file'] Number    0，不显示，1：显示，默认为1, 是否显示文件
     * $body['password'] String    操作系统账户密码或者auth.conf中的配置, 节点认证密码
     * $body['i2id'] String    用认证码添加时，认证码
     * @return array
     */
    public function listDir(array $body = array()) {
        $url = $this->dirUrl;
        $list = $this -> httpRequest('get', $url, $body);
        return $list;
    }

    /**
     * 创建目录
     * @param array $body
     * $body['node_uuid'] String  已注册节点的uuid
     * $body['path'] String  要创建的路径(绝对路径)
     * @return array
     */
    public function createDir(array $body = array())
    {
        $url = $this -> dirUrl;
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 检查路径
     * @param array $body
     * $body['node_uuid'] String 已注册节点的uuid
     * $body['path'] String 要创建的路径(绝对路径)
     * @return array
     */
    public function checkDir(array $body = array()){
        $url = $this -> dirUrl . '/check';
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
        return array($r, null);
    }
}