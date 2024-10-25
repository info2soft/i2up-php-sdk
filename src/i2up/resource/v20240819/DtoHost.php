<?php
namespace i2up\resource\v20240819;

use i2up\Http\Client;
use i2up\Http\Error;

class DtoHost {
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
     * 主机 - 认证
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function authDtoHost(array $body = array())
    {
        $url = $this -> url . '/dto/host/auth';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 主机 - 新建
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createDtoHost(array $body = array())
    {
        $url = $this -> url . '/dto/host';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 主机 - 修改
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyDtoHost(array $body = array())
    {
        $url = $this -> url . '/dto/host/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * 主机 - 单个
     * 
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function describeDtoHost(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/dto/host/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 主机 - 列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listDtoHost(array $body = array())
    {
        $url = $this -> url . '/dto/host';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 主机 - 状态
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listDtoHostStatus(array $body = array())
    {
        $url = $this -> url . '/dto/host/status';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 主机 - 删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteDtoHost(array $body = array())
    {
        $url = $this -> url . '/dto/host';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 主机 - 获取集群节点
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listDtoHostClusterNode(array $body = array())
    {
        $url = $this -> url . '/dto/host/node';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 主机 - 删除集群节点
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteDtoHostClusterNode(array $body = array())
    {
        $url = $this -> url . '/dto/host/node';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 主机 - 归档时间范围
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listArchiveDate(array $body = array())
    {
        $url = $this -> url . '/dto/host/' . $body['uuid'] . '/archive_date';
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 主机 - 获取恢复时间点
     * 
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function listRcTimePoint(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/dto/host/' . $body['uuid'] . '/rc_time_point';
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 主机 - 归档文件列表
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listArchiveFile(array $body = array())
    {
        $url = $this -> url . '/dto/host/' . $body['uuid'] . '/archive_file';
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 主机 - 底层加载规则
     * 
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function listLoadRules(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/dto/host/' . $body['uuid'] . '/load_rules';
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 主机 - 查看备份记录
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listBakRecord(array $body = array())
    {
        $url = $this -> url . '/dto/host/' . $body['uuid'] . '/backup_record';
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 主机 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function upgradeDtoHost(array $body = array())
    {
        $url = $this -> url . '/dto/host/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 主机 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function maintainDtoHost(array $body = array())
    {
        $url = $this -> url . '/dto/host/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 主机 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function renewKeyDtoHost(array $body = array())
    {
        $url = $this -> url . '/dto/host/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 主机 - 回源
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function revertFile(array $body = array())
    {
        $url = $this -> url . '/dto/host/' . $body['uuid'] . '/revert_file';
        unset($body['uuid']);
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 主机 - 获取回源记录
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listRevertRecord(array $body = array())
    {
        $url = $this -> url . '/dto/host/' . $body['uuid'] . '/revert_record';
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
        } else if ($method === 'post') {
            $ret = Client::post($url, $body, $header);
        } else if ($method === 'put') {
            $ret = Client::put($url, $body, $header);
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