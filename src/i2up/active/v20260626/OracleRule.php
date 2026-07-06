<?php
namespace i2up\active\v20260626;

use i2up\Http\Client;
use i2up\Http\Error;

class OracleRule {
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
        $url = $this -> url . '/active/rule';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 同步规则 - 新建
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createOracleRule(array $body = array())
    {
        $url = $this -> url . '/active/rule';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 同步规则 - 批量新建
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createBatchOracleRule(array $body = array())
    {
        $url = $this -> url . '/active/rule/batch';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 同步规则 - 修改
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyOracleRule(array $body = array())
    {
        $url = $this -> url . '/active/rule';
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * 同步规则 - 批量修改
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyOracleRuleBatch(array $body = array())
    {
        $url = $this -> url . '/active/rule/batch';
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * 同步规则 - 删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteOracleRule(array $body = array())
    {
        $url = $this -> url . '/active/rule';
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
        $url = $this -> url . '/active/rule/' . $body['uuid'];
        unset($body['uuid']);
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
        $url = $this -> url . '/active/rule/operate';
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
        $url = $this -> url . '/active/rule/operate';
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
        $url = $this -> url . '/active/rule/operate';
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
        $url = $this -> url . '/active/rule/operate';
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
        $url = $this -> url . '/active/rule/operate';
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
        $url = $this -> url . '/active/rule/operate';
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
        $url = $this -> url . '/active/rule/operate';
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
        $url = $this -> url . '/active/rule/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 同步规则 - 状态
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listSyncRulesStatus(array $body = array())
    {
        $url = $this -> url . '/active/rule/status';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 同步规则-表修复
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeRuleTableFix(array $body = array())
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
    public function describeRuleGetScn(array $body = array())
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
    public function getRpcScn(array $body = array())
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
    public function getRevertRpcScn(array $body = array())
    {
        $url = $this -> url . '/active/rule/get_revert_rpc_scn';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 表比较-比较结果-差异修复
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function diffFix(array $body = array())
    {
        $url = $this -> url . '/active/tb_cmp/diff_fix';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 表比较 - 新建
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createTbCmp(array $body = array())
    {
        $url = $this -> url . '/active/tb_cmp';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 表比较 - 获取单个
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeTbCmp(array $body = array())
    {
        $url = $this -> url . '/active/tb_cmp/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 表比较 - 删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteTbCmp(array $body = array())
    {
        $url = $this -> url . '/active/tb_cmp';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 表比较 - 列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listTbCmp(array $body = array())
    {
        $url = $this -> url . '/active/tb_cmp';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 表比较-操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function stopTbCmp(array $body = array())
    {
        $url = $this -> url . '/active/tb_cmp/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 表比较-操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function restartTbCmp(array $body = array())
    {
        $url = $this -> url . '/active/tb_cmp/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 表比较-操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function cmpStopTime(array $body = array())
    {
        $url = $this -> url . '/active/tb_cmp/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 表比较-操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function cmpResumeTime(array $body = array())
    {
        $url = $this -> url . '/active/tb_cmp/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 表比较-操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function cmpImmediate(array $body = array())
    {
        $url = $this -> url . '/active/tb_cmp/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 表比较 - 历史结果（查看表比较时间结果集）
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listTbCmpResultTimeList(array $body = array())
    {
        $url = $this -> url . '/active/tb_cmp/result_time_list';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 表比较-比较结果的删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeTbCmpResultTimeList(array $body = array())
    {
        $url = $this -> url . '/active/tb_cmp/result_time_list';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 表比较-比较任务结果
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeTbCmpResult(array $body = array())
    {
        $url = $this -> url . '/active/tb_cmp/result';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 表比较-错误信息
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeTbCmpErrorMsg(array $body = array())
    {
        $url = $this -> url . '/active/tb_cmp/error_msg';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 表比较-表比对的详细信息
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeTbCmpCmpDesc(array $body = array())
    {
        $url = $this -> url . '/active/tb_cmp/cmp_describe';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 表比较-比较结果
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeTbCmpCmpResult(array $body = array())
    {
        $url = $this -> url . '/active/tb_cmp/' . $body['uuid'] . '/cmp_result/';
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 表比较-api 启动比较
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeTbCmpStart(array $body = array())
    {
        $url = $this -> url . '/active/tb_cmp/' . $body['uuid'] . '/start/';
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 表比较-删除(oracle)
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteTbCmpOracle(array $body = array())
    {
        $url = $this -> url . '/active/tb_cmp/tb_cmp_oracle';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 表比较状态
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listTbCmpStatus(array $body = array())
    {
        $url = $this -> url . '/active/tb_cmp/status';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 对象比较 - 列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listObjCmp(array $body = array())
    {
        $url = $this -> url . '/active/obj_cmp';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 对象比较 - 新建
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createObjCmp(array $body = array())
    {
        $url = $this -> url . '/active/obj_cmp';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 对象比较 - 删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteObjCmp(array $body = array())
    {
        $url = $this -> url . '/active/obj_cmp';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 对象比较 - 获取单个
     * 
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function describeObjCmp(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/active/obj_cmp/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 对象比较 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function stopObjCmp(array $body = array())
    {
        $url = $this -> url . '/active/obj_cmp/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 对象比较 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function restartObjCmp(array $body = array())
    {
        $url = $this -> url . '/active/obj_cmp/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 对象比较 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function cmpStopTimeObjCmp(array $body = array())
    {
        $url = $this -> url . '/active/obj_cmp/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 对象比较 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function cmpResumeTimeObjCmp(array $body = array())
    {
        $url = $this -> url . '/active/obj_cmp/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 对象比较 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function cmpImmediateObjCmp(array $body = array())
    {
        $url = $this -> url . '/active/obj_cmp/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 对象比较-比较结果时间列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listObjCmpResultTimeList(array $body = array())
    {
        $url = $this -> url . '/active/obj_cmp/result_time_list';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 对象比较-比较任务结果
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeObjCmpResult(array $body = array())
    {
        $url = $this -> url . '/active/obj_cmp/result';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 获取对象比较状态
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listObjCmpStatus(array $body = array())
    {
        $url = $this -> url . '/active/obj_cmp/status';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 对象比较-比较结果的删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeObjCmpResultTimeList(array $body = array())
    {
        $url = $this -> url . '/active/obj_cmp/result_time_list';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 对象比较-比较结果详细信息
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listObjCmpCmpInfo(array $body = array())
    {
        $url = $this -> url . '/active/obj_cmp/cmp_info';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 对象比较 - 删除（Oracle菜单）
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteOracleObjCmp(array $body = array())
    {
        $url = $this -> url . '/active/obj_cmp/obj_cmp_oracle';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 对象修复 - 新建
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createObjFix(array $body = array())
    {
        $url = $this -> url . '/active/obj_fix';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 对象修复 - 获取单个
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeObjFix(array $body = array())
    {
        $url = $this -> url . '/active/obj_fix/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 对象修复 - 删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteObjFix(array $body = array())
    {
        $url = $this -> url . '/active/obj_fix';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 对象修复 - 列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listObjFix(array $body = array())
    {
        $url = $this -> url . '/active/obj_fix';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 对象修复-操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function restartObjFix(array $body = array())
    {
        $url = $this -> url . '/active/obj_fix/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 对象修复-操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function stopObjFix(array $body = array())
    {
        $url = $this -> url . '/active/obj_fix/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 对象修复 - 修复结果
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeObjFixResult(array $body = array())
    {
        $url = $this -> url . '/active/obj_fix/result';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 对象修复--获取状态
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listObjFixStatus(array $body = array())
    {
        $url = $this -> url . '/active/obj_fix/status';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 备端接管-获取网卡列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listBkTakeoveNetworkCard(array $body = array())
    {
        $url = $this -> url . '/vers/v3/active/bk_takeover/bk_network_card';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 备端接管-新建
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createBkTakeover(array $body = array())
    {
        $url = $this -> url . '/vers/v3/active/bk_takeover';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 备端接管-查看
     * 
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function describeBkTakeover(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/vers/v3/active/bk_takeover/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 备机接管-删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteBkTakeover(array $body = array())
    {
        $url = $this -> url . '/vers/v3/active/bk_takeover';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 备机接管-接管结果
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeBkTakeoverResult(array $body = array())
    {
        $url = $this -> url . '/vers/v3/active/bk_takeover/result';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 备机接管-操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function stopBkTakeover(array $body = array())
    {
        $url = $this -> url . '/vers/v3/active/bk_takeover/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 备机接管-操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function restartBkTakeover(array $body = array())
    {
        $url = $this -> url . '/vers/v3/active/bk_takeover/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 备端接管-获取状态
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listBkTakeoverStatus(array $body = array())
    {
        $url = $this -> url . '/vers/v3/active/bk_takeover/status';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 备端接管列表
     * 
     * @return array
     */
    public function listBkTakeover()
    {
        $url = $this -> url . '/vers/v3/active/bk_takeover';
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 反向规则-新建
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createReverse(array $body = array())
    {
        $url = $this -> url . '/vers/v3/active/reverse';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 反向规则-删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteReverse(array $body = array())
    {
        $url = $this -> url . '/vers/v3/active/reverse';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 反向规则-获取单个规则信息
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeReverse(array $body = array())
    {
        $url = $this -> url . '/vers/v3/active/reverse/rule_single';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 反向规则-获取列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listReverse(array $body = array())
    {
        $url = $this -> url . '/vers/v3/active/reverse';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 反向规则-状态
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listReverseStatus(array $body = array())
    {
        $url = $this -> url . '/vers/v3/active/reverse/status';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 反向规则-停止
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function stopReverse(array $body = array())
    {
        $url = $this -> url . '/vers/v3/active/reverse/stop';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 反向规则-重启反向任务
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function restartReverse(array $body = array())
    {
        $url = $this -> url . '/vers/v3/active/reverse/restart';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 反向规则-查看
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeSingleReverse(array $body = array())
    {
        $url = $this -> url . '/vers/v3/active/reverse';
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * 同步规则 - 修改维护模式
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function switchActiveRuleMaintenance(array $body = array())
    {
        $url = $this -> url . '/active/rule/maintenance';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 同步规则 - 通用操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function syncRuleCommonOperate(array $body = array())
    {
        $url = $this -> url . '/active/rule/common_operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 同步规则 - 通用状态
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listSyncRulesGeneralStatus(array $body = array())
    {
        $url = $this -> url . '/active/rule/general_status';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 同步规则 - 装载信息流量图
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeSyncRulesLoadInfo(array $body = array())
    {
        $url = $this -> url . '/active/rule/load_info';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 同步规则 - 流量图
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeSyncRulesMrtg(array $body = array())
    {
        $url = $this -> url . '/active/rule/mrtg';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 同步规则 - 日志
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
     * 同步规则 - 已同步表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listRuleSyncTable(array $body = array())
    {
        $url = $this -> url . '/active/rule/sync_table';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 同步规则 - 已同步的对象
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeSyncRulesHasSync(array $body = array())
    {
        $url = $this -> url . '/active/rule/sync_obj';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 同步规则 - 已同步的对象具体信息
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeSyncRulesObjInfo(array $body = array())
    {
        $url = $this -> url . '/active/rule/sync_obj_info';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 同步规则 - 同步失败的对象
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeSyncRulesFailObj(array $body = array())
    {
        $url = $this -> url . '/active/rule/fail_obj';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 同步规则 - 偏移量信息
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

    /**
     * 同步规则 - 增量失败DDL
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeSyncRulesIncreDdl(array $body = array())
    {
        $url = $this -> url . '/active/rule/incre_ddl';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 同步规则 - 增量失败DML
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listRuleIncreDml(array $body = array())
    {
        $url = $this -> url . '/active/rule/incre_dml';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 同步规则 - 已同步的对象具体信息(DML解析)
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeExtractSyncRulesObjInfo(array $body = array())
    {
        $url = $this -> url . '/active/rule/extract_sync_obj_info';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 同步规则 - 已同步的对象具体信息(DML装载)
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeLoadSyncRulesObjInfo(array $body = array())
    {
        $url = $this -> url . '/active/rule/load_sync_obj_info';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 同步规则 - 增量失败DML统计
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeSyncRulesDML(array $body = array())
    {
        $url = $this -> url . '/active/rule/incre_dml_summary';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 同步规则 - 增量失败统计删除（失败对象）
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteSyncRulesDML(array $body = array())
    {
        $url = $this -> url . '/active/rule/incre_dml_summary';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 同步规则 - 增量失败DML统计 - 表修复
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function increDmlFixAll(array $body = array())
    {
        $url = $this -> url . '/active/rule/table_fix_all';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 同步规则 - 选择表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeRuleZStructure(array $body = array())
    {
        $url = $this -> url . '/active/rule/z_structure';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 同步规则 - 数据库预检
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeRuleDbCheck(array $body = array())
    {
        $url = $this -> url . '/active/rule/db_check';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 同步规则 - 增量失败DDL清除所有信息
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteIncreDML(array $body = array())
    {
        $url = $this -> url . '/active/rule/incre_dml';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 同步规则-选择用户
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeRuleSelectUser(array $body = array())
    {
        $url = $this -> url . '/active/rule/select_user';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 同步规则 - 增量表DML抽取统计
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listIncreDmlExtract(array $body = array())
    {
        $url = $this -> url . '/active/rule/incre_dml_extract';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 同步规则 - 增量表DML装载统计
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listIncreDmlLoad(array $body = array())
    {
        $url = $this -> url . '/active/rule/incre_dml_load';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 同步规则 - 解析热点图
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listExtractHeatMap(array $body = array())
    {
        $url = $this -> url . '/active/rule/extract_heat_map';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 同步规则 - 装载热点图
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listLoadHeatMap(array $body = array())
    {
        $url = $this -> url . '/active/rule/load_heat_map';
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