<?php
/**
 * Create by PhpStorm
 * User: Lis
 * Date: 2020/8/24
 * Time: 14:17
 */

namespace i2up\dto\v20200721;

use i2up\Config;
use i2up\Http\Client;
use i2up\Http\Error;

class Dto {
    private $url;
    private $token;
    private $accessKey;
    private $secretKey;
    public function __constructor($auth)
    {
        $this -> url = $auth -> ip . 'dto';
        if ($auth -> tokenAuthType) {
            $this -> token = $auth -> token();
        } else {
            $this -> accessKey = $auth -> accessKey();
            $this -> secretKey = $auth -> secretKey();
        }
    }
    /**
     *  存储 - 新建
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createDtoStorage(array $body = array())
    {
        $url = $this -> url . '/storage';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     *  存储 - 修改
     *
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyDtoStorage(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/storage/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     *  存储 - 单个
     *
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function describeDtoStorage(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/storage/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     *  存储 - 列表
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listDtoStorage(array $body = array())
    {
        $url = $this -> url . '/storage';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     *  删除
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteDtoStorage(array $body = array())
    {
        $url = $this -> url . '/storage';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }


    /**
     *  主机- 认证
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function authDtoHost(array $body = array())
    {
        $url = $this -> url . '/host/auth';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     *  主机- 新建
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createDtoHost(array $body = array())
    {
        $url = $this -> url . '/host';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     *  主机- 修改
     *
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyDtoHost(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/host/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     *  主机- 单个
     *
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function describeDtoHost(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/host/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     *  主机- 列表
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listDtoHost(array $body = array())
    {
        $url = $this -> url . '/host';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     *  主机- 状态
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listDtoHostStatus(array $body = array())
    {
        $url = $this -> url . '/host/status';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     *  主机- 删除
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteDtoHost(array $body = array())
    {
        $url = $this -> url . '/host';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     *  主机- 归档时间范围
     *
     * @param array $body  参数详见 API 手册
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function listArchiveDate(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/host/' . $body['uuid']. '/archive_date';
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     *  主机- 获取恢复时间点
     *
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function tempFuncName(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/host/' . $body['uuid']. '/rc_time_point';
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     *  主机- 归档文件列表
     *
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listArchiveFile(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/host/' . $body['uuid']. '/archive_file';
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     *  主机- 底层加载规则
     *
     * @param array $body  参数详见 API 手册
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function host(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/host/' . $body['uuid']. '/load_rules';
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 规则 -  新建
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createDtoRule(array $body = array())
    {
        $url = $this -> url . '/rule';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 规则 - 修改
     *
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyDtoRule(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/rule/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * 规则 - 单个
     *
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function describeDtoRule(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/rule/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 规则 - 列表
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listDtoRule(array $body = array())
    {
        $url = $this -> url . '/rule';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 规则 - 状态
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listDtoRuleStatus(array $body = array())
    {
        $url = $this -> url . '/rule/status';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 规则 - 删除
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteDtoRule(array $body = array())
    {
        $url = $this -> url . '/rule';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 规则 - 操作 - 启动
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function startDtoRule(array $body = array())
    {
        $url = $this -> url . '/rule/operate';
        $body['operate'] = 'start';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 规则 - 操作 - 停止
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function stopDtoRule(array $body = array())
    {
        $url = $this -> url . '/rule/operate';
        $body['operate'] = 'stop';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 规则 - 操作 - 继续
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function resumeDtoRule(array $body = array())
    {
        $url = $this -> url . '/rule/operate';
        $body['operate'] = 'resume';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 规则 - 文件列表（比较 不同/丢失/失败/孤儿）
     *
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listDtoRuleFile(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/rule/' . $body['uuid'] . '/file';
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 规则 - 文件列表 删除孤儿（比较）
     *
     * @param array $body  参数详见 API 手册
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function deleteDtoRuleFile(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/rule/' . $body['uuid'] . '/file';
        unset($body['uuid']);
        $res = $this -> httpRequest('delete', $url);
        return $res;
    }

    /**
     * 规则 - 比较结果（比较）
     * @param array $body  参数详见 API 手册
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function listDtoRuleCmpResult(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/rule/' . $body['uuid'] . '/cmp_result';
        unset($body['uuid']);
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