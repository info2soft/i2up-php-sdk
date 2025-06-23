<?php
namespace i2up\stream\v20250630;

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
     * 同步规则 - 装载信息流量图
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeSyncRulesLoadInfo(array $body = array())
    {
        $url = $this -> url . '/vers/v3/sync_rule/load_info';
        $res = $this -> httpRequest('post', $url, $body);
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
     * 同步规则 - 流量图
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeSyncRulesMrtg(array $body = array())
    {
        $url = $this -> url . '/vers/v3/sync_rule/mrtg';
        $res = $this -> httpRequest('post', $url, $body);
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
     * 同步规则 - 已同步表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listRuleSyncTable(array $body = array())
    {
        $url = $this -> url . '/vers/v3/sync_rule/sync_table';
        $res = $this -> httpRequest('post', $url, $body);
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
     * 同步规则 - 已同步的对象
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeSyncRulesHasSync(array $body = array())
    {
        $url = $this -> url . '/vers/v3/sync_rule/sync_obj';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 同步规则 - 日志
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listSyncRuleLog(array $body = array())
    {
        $url = $this -> url . '/vers/v3/sync_rule/log';
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
        $url = $this -> url . '/vers/v3/sync_rule/sync_obj_info';
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
     * 同步规则 - 同步失败的对象
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeSyncRulesFailObj(array $body = array())
    {
        $url = $this -> url . '/vers/v3/sync_rule/fail_obj';
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
        $url = $this -> url . '/vers/v3/sync_rule/z_structure';
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
        $url = $this -> url . '/vers/v3/sync_rule/incre_ddl';
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
        $url = $this -> url . '/vers/v3/sync_rule/table_fix';
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
        $url = $this -> url . '/vers/v3/sync_rule/incre_dml';
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
        $url = $this -> url . '/vers/v3/sync_rule//get_scn';
        $res = $this -> httpRequest('get', $url, $body);
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
        $url = $this -> url . '/vers/v3/sync_rule/extract_sync_obj_info';
        $res = $this -> httpRequest('post', $url, $body);
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
        $url = $this -> url . '/vers/v3/sync_rule/get_rpc_scn';
        $res = $this -> httpRequest('get', $url, $body);
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
        $url = $this -> url . '/vers/v3/sync_rule/load_sync_obj_info';
        $res = $this -> httpRequest('post', $url, $body);
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
        $url = $this -> url . '/vers/v3/sync_rule/get_revert_rpc_scn';
        $res = $this -> httpRequest('get', $url, $body);
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
        $url = $this -> url . '/vers/v3/sync_rule/incre_dml_summary';
        $res = $this -> httpRequest('post', $url, $body);
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
        $url = $this -> url . '/vers/v3/sync_rule/kafka_offset';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 同步规则 - 增量失败统计删除（失败对象）副本
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteSyncRulesDML(array $body = array())
    {
        $url = $this -> url . '/vers/v3/sync_rule/incre_dml_summary';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 同步规则 - 全量状态统计
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function getRuleFullSyncStat(array $body = array())
    {
        $url = $this -> url . '/vers/v3/sync_rule/full_sync_stat';
        $res = $this -> httpRequest('post', $url, $body);
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
        $url = $this -> url . '/vers/v3/sync_rule/table_fix_all';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 同步规则 - 环境检查
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function syncRulePrecheck(array $body = array())
    {
        $url = $this -> url . '/vers/v3/sync_rule/pre_check';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 同步规则 - DB2获取源端时区
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function getDbTimezone(array $body = array())
    {
        $url = $this -> url . '/vers/v3/sync_rule/timezone';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 同步规则 - 数据库预检副本
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeRuleDbCheck(array $body = array())
    {
        $url = $this -> url . '/vers/v3/sync_rule/db_check';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 同步规则 - 导入
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function importSyncRule(array $body = array())
    {
        $url = $this -> url . '/vers/v3/sync_rule/import';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 同步规则 - 导出
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function exportSyncRule(array $body = array())
    {
        $url = $this -> url . '/vers/v3/sync_rule/export';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 同步规则 - 获取LSN
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function getStreamRuleLsn(array $body = array())
    {
        $url = $this -> url . '/vers/v3/sync_rule/lsn';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 数据集成 - 总览
     * 
     * @return array
     */
    public function statusStreamOverall()
    {
        $url = $this -> url . '/vers/v3/sync_rule/stream_overall';
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 同步规则 - 增量失败DDL清除所有信息副本
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteIncreDML(array $body = array())
    {
        $url = $this -> url . '/vers/v3/sync_rule/incre_dml';
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
        $url = $this -> url . '/vers/v3/sync_rule/select_user';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 总览 - 数据库同步任务
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listSummaryView(array $body = array())
    {
        $url = $this -> url . '/vers/v3/sync_rule/list_view';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 同步规则 - 增量表DML抽取统计副本
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listIncreDmlExtract(array $body = array())
    {
        $url = $this -> url . '/vers/v3/sync_rule/incre_dml_extract';
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
        $url = $this -> url . '/vers/v3/sync_rule/incre_dml_load';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 数据安全总览 - 数据库同步任务
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listSummaryMaskView(array $body = array())
    {
        $url = $this -> url . '/vers/v3/mask/rule/list_view';
        $res = $this -> httpRequest('get', $url, $body);
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
        $url = $this -> url . '/vers/v3/sync_rule/extract_heat_map';
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
        $url = $this -> url . '/vers/v3/sync_rule/load_heat_map';
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