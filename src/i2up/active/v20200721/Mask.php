<?php
/**
 * Create by PhpStorm
 * User: Lis
 * Date: 2020/8/5
 * Time: 10:06
 */

namespace i2up\active\v20200721;

use i2up\Config;
use i2up\Http\Client;
use i2up\Http\Error;

class Mask {
    private $url;
    private $token;
    private $accessKey;
    private $secretKey;
    public function __constructor($auth)
    {
        $this -> url = $auth -> ip . 'mask';
        if ($auth -> tokenAuthType) {
            $this -> token = $auth -> token();
        } else {
            $this -> accessKey = $auth -> accessKey();
            $this -> secretKey = $auth -> secretKey();
        }
    }

    /**
     * 敏感类型列表
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listTypes(array $body = array())
    {
        $url = $this -> url . '/sens_type';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 新建脱敏算法
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createAlgo(array $body = array())
    {
        $url = $this -> url . '/newAlgo';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 脱敏算法列表
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listAlgos(array $body = array())
    {
        $url = $this -> url . '/algo';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 脱敏规则列表
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listMaskRules(array $body = array())
    {
        $url = $this -> url . '/rule';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 新建脱敏规则
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createMaskRules(array $body = array())
    {
        $url = $this -> url . '/rule';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 操作规则
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function tempFuncName(array $body = array())
    {
        $url = $this -> url . '/rule/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 删除规则
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteMaskRule(array $body = array())
    {
        $url = $this -> url . '/rule';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 获取状态
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listMaskRuleStatus(array $body = array())
    {
        $url = $this -> url . '/rule/status';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 集合列表
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listMap(array $body = array())
    {
        $url = $this -> url . '/sens_map';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 新建集合
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createMap(array $body = array())
    {
        $url = $this -> url . '/sens_map';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 修改集合
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyMap(array $body = array())
    {
        if (empty($body) || !isset($body['id'])) return $body;
        $url = $this -> url . '/sens_map/' . $body['id'];
        unset($body['id']);
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * 删除集合
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteMap(array $body = array())
    {
        $url = $this -> url . '/sens_map';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 获取单个集合
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function descriptMap(array $body = array())
    {
        if (empty($body) || !isset($body['id'])) return $body;
        $url = $this -> url . '/sens_map/' . $body['id'];
        unset($body['id']);
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 新建数据库集合
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createDbMap(array $body = array())
    {
        $url = $this -> url . '/sens_db_map';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 数据库集合列表
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listDbMap(array $body = array())
    {
        $url = $this -> url . '/sens_db_map';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 删除数据库集合
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteDbMap(array $body = array())
    {
        $url = $this -> url . '/sens_db_map';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 修改数据库集合
     *
     * @return array
     */
    public function modifyDbMap()
    {
        $url = $this -> url . '/sens_db_map';
        $res = $this -> httpRequest('delete', $url);
        return $res;
    }

    /**
     * 新建敏感发现任务
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createSensCheck(array $body = array())
    {
        $url = $this -> url . '/sens_check';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 修改敏感发现任务
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifySensCheck(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/sens_check/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * 删除敏感发现任务
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteSensCheck(array $body = array())
    {
        $url = $this -> url . '/sens_check/delete';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 获取敏感发现列表
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listSensCheck(array $body = array())
    {
        $url = $this -> url . '/sens_check';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 获取单个任务详情
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function descriptSensCheck(array $body = array())
    {
       if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/mask/sens_check/' . $body['uuid'];
        unset($body['uuid']);
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