<?php
namespace i2up\stream\v20240819;

use i2up\Http\Client;
use i2up\Http\Error;

class SyncRule {
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
     * 同步规则 - 列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listSyncRules(array $body = array())
    {
        $url = $this -> url . '/vers/v3/sync_rule';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 同步规则 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function resumeOracleRule(array $body = array())
    {
        $url = $this -> url . '/vers/v3/sync_rule/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 同步规则 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function stopOracleRule(array $body = array())
    {
        $url = $this -> url . '/vers/v3/sync_rule/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 同步规则 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function restartOracleRule(array $body = array())
    {
        $url = $this -> url . '/vers/v3/sync_rule/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 同步规则 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function startAnalysisOracleRule(array $body = array())
    {
        $url = $this -> url . '/vers/v3/sync_rule/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 同步规则 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function stopAnalysisOracleRule(array $body = array())
    {
        $url = $this -> url . '/vers/v3/sync_rule/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 同步规则 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function resetAnalysisOracleRule(array $body = array())
    {
        $url = $this -> url . '/vers/v3/sync_rule/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 同步规则 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function stopAndStopanalysisOracleRule(array $body = array())
    {
        $url = $this -> url . '/vers/v3/sync_rule/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 同步规则 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function duplicateOracleRule(array $body = array())
    {
        $url = $this -> url . '/vers/v3/sync_rule/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 同步规则 - 新建
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createSyncRule(array $body = array())
    {
        $url = $this -> url . '/vers/v3/sync_rule';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 同步规则 - 批量新建
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createBatchSyncRule(array $body = array())
    {
        $url = $this -> url . '/vers/v3/sync_rule/batch';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 同步规则 - 批量修改
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function batchModifySyncRule(array $body = array())
    {
        $url = $this -> url . '/vers/v3/sync_rule/batch';
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * 同步规则 - 删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteSyncRule(array $body = array())
    {
        $url = $this -> url . '/vers/v3/sync_rule';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 同步规则-获取单个
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeSyncRules(array $body = array())
    {
        $url = $this -> url . '/vers/v3/sync_rule/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 同步规则-状态
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listSyncRulesStatus(array $body = array())
    {
        $url = $this -> url . '/vers/v3/sync_rule/status';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 同步规则 - 分片信息
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listSyncRulesSliceStatus(array $body = array())
    {
        $url = $this -> url . '/vers/v3/sync_rule/slice_status';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 同步规则-日志（复用旧接口）
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listRuleLog(array $body = array())
    {
        $url = $this -> url . '/active/rule/log';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 同步规则 - 修改维护模式
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function switchSyncRuleMaintenance(array $body = array())
    {
        $url = $this -> url . '/vers/v3/sync_rule/maintenance';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 同步规则-选择用户
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeRuleUser(array $body = array())
    {
        $url = $this -> url . '/active/rule/select_user';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 同步规则-表修复
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function ruleTableFix(array $body = array())
    {
        $url = $this -> url . '/active/rule/table_fix';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 同步规则-获取scn号
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function ruleGetScn(array $body = array())
    {
        $url = $this -> url . '/active/rule/get_scn';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 同步规则 - 从底层获取SCN
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function ruleGetRpcScn(array $body = array())
    {
        $url = $this -> url . '/active/rule/get_rpc_scn';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 同步规则 - 从底层获取接管SCN
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function ruleGetReverseScn(array $body = array())
    {
        $url = $this -> url . '/active/rule/get_revert_rpc_scn';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 同步规则-偏移量信息
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listKafkaOffsetInfo(array $body = array())
    {
        $url = $this -> url . '/active/rule/kafka_offset';
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