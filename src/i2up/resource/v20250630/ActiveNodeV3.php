<?php
namespace i2up\resource\v20250630;

use i2up\Http\Client;
use i2up\Http\Error;

class ActiveNodeV3 {
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
     * 库节点列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listDbs(array $body = array())
    {
        $url = $this -> url . '/vers/v3/active/db';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 数据库节点 - 测试连接
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function checkDbLink(array $body = array())
    {
        $url = $this -> url . '/vers/v3/active/db/db_check';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 数据库节点 - 状态
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listDbStatus(array $body = array())
    {
        $url = $this -> url . '/vers/v3/active/db/status';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 数据库节点 - 新建
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createDbUnified(array $body = array())
    {
        $url = $this -> url . '/vers/v3/active/db';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 数据库节点 - 修改
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyDb(array $body = array())
    {
        $url = $this -> url . '/vers/v3/active/db/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * 数据库节点 - 查询表空间
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeDbSpace(array $body = array())
    {
        $url = $this -> url . '/vers/v3/active/db/space_query';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 数据库节点 - 删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteDb(array $body = array())
    {
        $url = $this -> url . '/vers/v3/active/db';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 数据库节点 - 导入
     * 
     * @return array
     */
    public function batchCreateDbs()
    {
        $url = $this -> url . '/vers/v3/active/db/batch';
        $res = $this -> httpRequest('post', $url);
        return $res;
    }

    /**
     * 数据库节点 - 维护模式切换
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function switchDbMaintenance(array $body = array())
    {
        $url = $this -> url . '/vers/v3/active/db/maintenance';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 数据库节点 - 查看
     * 
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function describeDb(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/vers/v3/active/db/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 数据库节点 - 身份认证信息
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function getActiveDbAuthInfo(array $body = array())
    {
        $url = $this -> url . '/vers/v3/active/db/auth_info';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 数据库节点 - 批量新建
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function batchCreateSqlserverDbs(array $body = array())
    {
        $url = $this -> url . '/vers/v3/active/db/db_batch';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 数据库节点 - 获取字符集
     * 
     * @return array
     */
    public function getCharset()
    {
        $url = $this -> url . '/vers/v3/active/db/charset';
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 机器节点 - 未激活节点
     * 
     * @return array
     */
    public function listInactiveNodes()
    {
        $url = $this -> url . '/vers/v3/active/node/inactive_list';
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 机器节点 - 激活（新建）
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function activeNode(array $body = array())
    {
        $url = $this -> url . '/vers/v3/active/node';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 机器节点 - 状态
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listNodeStatus(array $body = array())
    {
        $url = $this -> url . '/vers/v3/active/node/status';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 机器节点 - 列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listNodes(array $body = array())
    {
        $url = $this -> url . '/vers/v3/active/node';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 机器节点 - 查看
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function descriptNode(array $body = array())
    {
        $url = $this -> url . '/vers/v3/active/node/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 机器节点 - 状态信息实时流量
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function descriptNodeDebugInfo(array $body = array())
    {
        $url = $this -> url . '/vers/v3/active/node/debug_info';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 机器节点 - 修改
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyNode(array $body = array())
    {
        $url = $this -> url . '/vers/v3/active/node';
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * 机器节点 - 删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteNode(array $body = array())
    {
        $url = $this -> url . '/vers/v3/active/node';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 机器节点 - 升级
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function upgradeNode(array $body = array())
    {
        $url = $this -> url . '/vers/v3/active/node/upgrade';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 机器节点 - 维护模式切换
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function switchMaintenance(array $body = array())
    {
        $url = $this -> url . '/vers/v3/active/node/maintenance';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 机器节点 - 重新生成调试信息
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function rebuildActiveNode(array $body = array())
    {
        $url = $this -> url . '/vers/v3/active/node/rebuild';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 机器节点 - 刷新调试信息
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function refresgActiveNode(array $body = array())
    {
        $url = $this -> url . '/vers/v3/active/node/refresh';
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
        $url = $this -> url . '/vers/v3/active/node/process_restart';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 机器节点 - 下载日志文件
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function downloadFile(array $body = array())
    {
        $url = $this -> url . '/vers/v3/dl';
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