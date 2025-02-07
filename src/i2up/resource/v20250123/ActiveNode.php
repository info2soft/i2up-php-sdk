<?php
namespace i2up\resource\v20250123;

use i2up\Http\Client;
use i2up\Http\Error;

class ActiveNode {
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
     * 未激活机器节点列表
     * 
     * @return array
     */
    public function listInactiveNodes()
    {
        $url = $this -> url . '/active/node/inactive_list';
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 激活机器节点
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function activeNode(array $body = array())
    {
        $url = $this -> url . '/active/node';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 机器节点状态
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listNodeStatus(array $body = array())
    {
        $url = $this -> url . '/active/node/status';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 机器节点列表(搜索)
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listNodes(array $body = array())
    {
        $url = $this -> url . '/active/node';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 机器节点详细信息
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function descriptNode(array $body = array())
    {
        $url = $this -> url . '/active/node/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 状态信息
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function descriptNodeDebugInfo(array $body = array())
    {
        $url = $this -> url . '/active/node/debug_info';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 修改机器节点
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyNode(array $body = array())
    {
        $url = $this -> url . '/active/node';
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * 删除机器节点
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteNode(array $body = array())
    {
        $url = $this -> url . '/active/node';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 机器节点升级
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function upgradeNode(array $body = array())
    {
        $url = $this -> url . '/active/node/upgrade';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 机器节点升级副本
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function renewActiveNode(array $body = array())
    {
        $url = $this -> url . '/active/node/renew';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 机器节点-维护模式切换
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function switchMaintenance(array $body = array())
    {
        $url = $this -> url . '/active/node/maintenance';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 获取字符集
     * 
     * @return array
     */
    public function getCharset()
    {
        $url = $this -> url . '/active/db/charset';
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 库节点 - 维护模式切换
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function switchDbMaintenance(array $body = array())
    {
        $url = $this -> url . '/active/db/maintenance';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 库节点列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listDbs(array $body = array())
    {
        $url = $this -> url . '/active/db';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 测试数据库连接（7.1.75 ）
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function checkDbLink(array $body = array())
    {
        $url = $this -> url . '/active/db/db_check';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 库节点状态
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listDbStatus(array $body = array())
    {
        $url = $this -> url . '/active/db/status';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 库节点-新建 （格式统一7.1.75 ）
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createDbUnified(array $body = array())
    {
        $url = $this -> url . '/active/db';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 库节点 - 修改
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyDb(array $body = array())
    {
        $url = $this -> url . '/active/db/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('put', $url, $body);
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
        $url = $this -> url . '/active/db/space_query';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 删除库节点
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteDb(array $body = array())
    {
        $url = $this -> url . '/active/db';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 库节点 - 批量导入
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function batchCreateDbs(array $body = array())
    {
        $url = $this -> url . '/active/db/batch';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 机器节点 - 批量导入
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function batchCreateActiveNodes(array $body = array())
    {
        $url = $this -> url . '/active/node/batch';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 单个库节点信息
     * 
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function describeDb(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/active/db/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 重新生成
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function rebuildActiveNode(array $body = array())
    {
        $url = $this -> url . '/active/node/rebuild';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 刷新
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function refresgActiveNode(array $body = array())
    {
        $url = $this -> url . '/active/node/refresh';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 机器节点 - 重启进程
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function restartAllProcess(array $body = array())
    {
        $url = $this -> url . '/active/node/process_restart';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 库节点 - 身份认证信息
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function getActiveDbAuthInfo(array $body = array())
    {
        $url = $this -> url . '/active/db/auth_info';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 批量新建（sqlserver）
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function batchCreateSqlserverDbs(array $body = array())
    {
        $url = $this -> url . '/active/db/db_batch';
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