<?php
namespace i2up\active\v20240228;

use i2up\Http\Client;
use i2up\Http\Error;

class Sqlserver {
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
     *  增量失败DML统计
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeSyncRules(array $body = array())
    {
        $url = $this -> url . '/sqlserver/rule/incre_dml_summary';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     *  已同步的对象具体信息
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeSyncRulesObjInfo(array $body = array())
    {
        $url = $this -> url . '/sqlserver/rule/sync_obj_info';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     *  新建
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createRule(array $body = array())
    {
        $url = $this -> url . '/sqlserver/rule';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     *  批量新建
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function batchCreateRule(array $body = array())
    {
        $url = $this -> url . '/sqlserver/rule/batch_add';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     *  修改
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyRule(array $body = array())
    {
        $url = $this -> url . '/sqlserver/rule';
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }
    /**
     *  删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteRule(array $body = array())
    {
        $url = $this -> url . '/sqlserver/rule';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }
    /**
     *  操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function resumeSqlserverRule(array $body = array())
    {
        $url = $this -> url . '/sqlserver/rule/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     *  状态（参考Oracle同步状态接口）
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listRuleStatus(array $body = array())
    {
        $url = $this -> url . '/sqlserver/rule/status';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     * 批量新建时重名检查
     * 
     * @return array
     */
    public function checkName()
    {
        $url = $this -> url . 'sqlserver/rule/check_name';
        $res = $this -> httpRequest('post', $url);
        return $res;
    }
    /**
     *  列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listRule(array $body = array())
    {
        $url = $this -> url . '/sqlserver/rule';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  新建
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createTbCmp(array $body = array())
    {
        $url = $this -> url . '/sqlserver/tb_cmp';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     * 日志
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listRuleLog(array $body = array())
    {
        $url = $this -> url . '/sqlserver/rule/log';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     *  获取单个
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeListRule(array $body = array())
    {
        $url = $this -> url . '/sqlserver/rule/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  获取单个
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeTbCmp(array $body = array())
    {
        $url = $this -> url . '/sqlserver/tb_cmp/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteTbCmp(array $body = array())
    {
        $url = $this -> url . '/sqlserver/tb_cmp';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }
    /**
     * 失败的对象
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeSyncRulesFailObj(array $body = array())
    {
        $url = $this -> url . '/sqlserver/rule/fail_obj';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     *  列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listTbCmp(array $body = array())
    {
        $url = $this -> url . '/sqlserver/tb_cmp';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     * 状态接口
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listTbCmpStatus(array $body = array())
    {
        $url = $this -> url . '/sqlserver/tb_cmp/status';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     * 表比较 历史结果查看表比较时间结果集
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listTbCmpResultTimeList(array $body = array())
    {
        $url = $this -> url . '/sqlserver/tb_cmp/result_time_list';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     * 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function stopTbCmp(array $body = array())
    {
        $url = $this -> url . '/sqlserver/tb_cmp/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     * 比较结果的删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeTbCmpResuluTimeList(array $body = array())
    {
        $url = $this -> url . '/sqlserver/tb_cmp/result_time_list';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }
    /**
     * 比较任务结果
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeTbCmpResult(array $body = array())
    {
        $url = $this -> url . '/sqlserver/tb_cmp/result';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     * 错误信息
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeTbCmpErrorMsg(array $body = array())
    {
        $url = $this -> url . '/sqlserver/tb_cmp/error_msg';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     * 比较结果
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeTbCmpCmpResult(array $body = array())
    {
        $url = $this -> url . '/sqlserver/tb_cmp/cmp_result';
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
        return array($r, null);
    }
}