<?php
/**
 * Create by PhpStorm
 * User: Lis
 * Date: 2020/8/5
 * Time: 9:57
 */

namespace i2up\active\v20200721;

use i2up\Http\Client;
use i2up\Http\Error;

class Db {
    private $url;
    private $token;
    private $accessKey;
    private $secretKey;
    public function __constructor($auth)
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
     * 数据库列表
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listDbs(array $body = array())
    {
        $url = $this -> url . 'active/db';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 修改数据库节点
     *
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyDb(array $body = array())
    {
        $url = $this -> url . 'active/db/' . $body['uuid'];
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * 测试数据库连接
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function checkDbLink(array $body = array())
    {
        $url = $this -> url . 'active/db/db_check';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 新建数据库节点
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createDb(array $body = array())
    {
        $url = $this -> url . 'active/db';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 删除数据库
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteDb(array $body = array())
    {
        $url = $this -> url . 'active/db';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 数据库状态
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listDbStatus(array $body = array())
    {
        $url = $this -> url . 'active/db/status';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 数据库健康信息
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeDbHealthInfo(array $body = array())
    {
        $url = $this -> url . 'active/db/health_info';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 表空间查询接口
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeDbSpace(array $body = array())
    {
        $url = $this -> url . 'active/db/space_query';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 获取单个数据库节点信息
     *
     * @param array $body  参数详见 API 手册
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function describeDb(array $body = array())
    {
        $url = $this -> url . 'active/db/' . $body['uuid'];
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 批量导入下载模板
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function importTemplate(array $body = array())
    {
        $url = $this -> url . 'dl';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 批量导入
     *
     * @return array
     */
    public function batchCreateDbs()
    {
        $url = $this -> url . 'active/db/batch';
        $res = $this -> httpRequest('get', $url);
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
        } else if ($method === 'put') {
            $ret = Client::put($url, $body, $header);
        } else if ($method === 'post') {
            $ret = Client::post($url, $body, $header);
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