<?php
/**
 * Create by PhpStorm
 * User: Lis
 * Date: 2020/8/5
 * Time: 14:27
 */

namespace i2up\active\v20200721;

use i2up\Config;
use i2up\Http\Client;
use i2up\Http\Error;

class SyncRules {
    private $url;
    private $token;
    private $accessKey;
    private $secretKey;
    public function __constructor($auth)
    {
        $this -> url = $auth -> ip . 'active';
        if ($auth -> tokenAuthType) {
            $this -> token = $auth -> token();
        } else {
            $this -> accessKey = $auth -> accessKey();
            $this -> secretKey = $auth -> secretKey();
        }
    }
    /**
     * 已同步的对象具体信息
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeSyncRulesObjInfo(array $body = array())
    {
        $url = $this -> url . '/rule/sync_obj_info';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 增量失败DML统计
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeSyncRulesDML(array $body = array())
    {
        $url = $this -> url . '/rule/incre_dml_summary';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     *  新建-准备-获取代理状态
     *
     * @return array
     */
    public function describeSyncRulesProxyStatus()
    {
        $url = $this -> url . '/rule/proxy_status';
        $res = $this -> httpRequest('post', $url);
        return $res;
    }

    /**
     *  新建
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createSyncRules(array $body = array())
    {
        $url = $this -> url . '/rule';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     *  修改
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifySyncRules(array $body = array())
    {
        $url = $this -> url . '/rule';
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * 已同步的对象
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeSyncRulesHasSync(array $body = array())
    {
        $url = $this -> url . '/rule/sync_obj';
        $res = $this -> httpRequest('post', $url, $body);
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
        $url = $this -> url . '/rule/fail_obj';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 装载信息流量图
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeSyncRulesLoadInfo(array $body = array())
    {
        $url = $this -> url . '/rule/load_info';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 删除
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteSyncRules(array $body = array())
    {
        $url = $this -> url . '/rule';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 列表
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listSyncRules(array $body = array())
    {
        $url = $this -> url . '/rule';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     *  操作 - resume
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function resumeSyncRules(array $body = array())
    {
        $url = $this -> url . '/rule/operate';
        $body['operate'] = 'resume';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     *  操作 - stop
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function stopSyncRules(array $body = array())
    {
        $url = $this -> url . '/rule/operate';
        $body['operate'] = 'stop';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     *  操作 - restart
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function restartSyncRules(array $body = array())
    {
        $url = $this -> url . '/rule/operate';
        $body['operate'] = 'restart';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     *  操作 - start_analysis
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function start_analysisSyncRules(array $body = array())
    {
        $url = $this -> url . '/rule/operate';
        $body['operate'] = 'start_analysis';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     *  操作 - stop_analysis
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function stop_analysisSyncRules(array $body = array())
    {
        $url = $this -> url . '/rule/operate';
        $body['operate'] = 'stop_analysis';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     *  操作 - reset_analysis
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function reset_analysisSyncRules(array $body = array())
    {
        $url = $this -> url . '/rule/operate';
        $body['operate'] = 'reset_analysis';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     *  操作 - stop_and_stopanalysis
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function stop_and_stopanalysisSyncRules(array $body = array())
    {
        $url = $this -> url . '/rule/operate';
        $body['operate'] = 'stop_and_stopanalysis';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 状态
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listSyncRulesStatus(array $body = array())
    {
        $url = $this -> url . '/rule/status';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 获取数据库表字段
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeRuleZStructure(array $body = array())
    {
        $url = $this -> url . '/rule/z_structure';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 流量图
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeSyncRulesMrtg(array $body = array())
    {
        $url = $this -> url . '/rule/mrtg';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 增量失败ddl
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeSyncRulesIncreDdl(array $body = array())
    {
        $url = $this -> url . '/rule/incre_ddl';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 获取单个
     *
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeSyncRules(array $body = array())
    {
        $url = $this -> url . '/rule/' . $body['uuid'];
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     *  列表
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listObjCmp(array $body = array())
    {
        $url = $this -> url . '/obj_cmp';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     *  新建
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createObjCmp(array $body = array())
    {
        $url = $this -> url . '/obj_cmp';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     *  删除
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteObjCmp(array $body = array())
    {

        $url = $this -> url . '/obj_cmp';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     *  获取单个
     *
     * @param array $body  参数详见 API 手册
     * @boy['uuid'] String  必填 节点uuid
     * @return array
     */
    public function describeObjCmp(array $body = array())
    {
        $url = $this -> url . '/obj_cmp/' . $body['uuid'];
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 比较结果时间列表
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listObjCmpResultTimeList(array $body = array())
    {
        $url = $this -> url . '/obj_cmp/result_time_list';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 比较任务结果
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeObjCmpResult(array $body = array())
    {
        $url = $this -> url . '/obj_cmp/result';
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
        $url = $this -> url . '/obj_cmp/status';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 比较结果的删除
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeObjCmpResultTimeList(array $body = array())
    {
        $url = $this -> url . '/obj_cmp/result_time_list';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 比较结果详细信息
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listObjCmpCmpInfo(array $body = array())
    {
        $url = $this -> url . '/obj_cmp/cmp_info';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     *  新建
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createObjFix(array $body = array())
    {
        $url = $this -> url . '/obj_fix';
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
    public function describeObjFix(array $body = array())
    {
        $url = $this -> url . '/obj_fix/' . $body['uuid'];
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     *  删除
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteObjFix(array $body = array())
    {
        $url = $this -> url . '/obj_fix';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     *  列表
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listObjFix(array $body = array())
    {
        $url = $this -> url . '/obj_fix';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 操作 - 启动
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function restartObjFix(array $body = array())
    {
        $url = $this -> url . '/obj_fix/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 操作 - 停止
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function stopObjFix(array $body = array())
    {
        $url = $this -> url . '/obj_fix/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     *  修复结果
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeObjFixResult(array $body = array())
    {
        $url = $this -> url . '/obj_fix/result';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * -获取状态
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listObjFixStatus(array $body = array())
    {
        $url = $this -> url . '/obj_fix/status';
        $res = $this -> httpRequest('post', $url, $body);
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
        $url = $this -> url . '/tb_cmp';
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
    public function describeTbCmp(array $body = array())
    {
        $url = $this -> url . '/tb_cmp/' . $body['uuid'];
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

        $url = $this -> url . '/tb_cmp';
        $res = $this -> httpRequest('delete', $url, $body);
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
        $url = $this -> url . '/tb_cmp';
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
        $url = $this -> url . '/tb_cmp/status';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     *  历史结果（查看表比较时间结果集）
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listTbCmpResultTimeList(array $body = array())
    {
        $url = $this -> url . '/tb_cmp/result_time_list';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 操作 - 停止
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function cmp_stopTbCmp(array $body = array())
    {
        $url = $this -> url . '/tb_cmp/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 操作 - 重启
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function cmp_restartTbCmp(array $body = array())
    {
        $url = $this -> url . '/tb_cmp/operate';
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
        $url = $this -> url . '/tb_cmp/result_time_list';
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
        $url = $this -> url . '/tb_cmp/result';
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
        $url = $this -> url . '/tb_cmp/error_msg';
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
        $url = $this -> url . '/tb_cmp/cmp_result';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 备端接管 - 新建
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createBkTakeover(array $body = array())
    {
        $url = $this -> url . '/bk_takeover';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 查看
     *
     * @param array $body  参数详见 API 手册
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function describeBkTakeover(array $body = array())
    {
        $url = $this -> url . '/bk_takeover/' . $body['uuid'];
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 删除
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteBkTakeover(array $body = array())
    {
        $url = $this -> url . '/bk_takeover';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 接管结果
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeBkTakeoverResult(array $body = array())
    {
        $url = $this -> url . '/bk_takeover/result';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 备机接管- 操作 - 停止
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function stopBkTakeover(array $body = array())
    {
        $url = $this -> url . '/bk_takeover/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 备机接管- 操作 - 重启
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function restartBkTakeover(array $body = array())
    {
        $url = $this -> url . '/bk_takeover/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 获取状态
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listBkTakeoverStatus(array $body = array())
    {
        $url = $this -> url . '/bk_takeover/status';
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
        $url = $this -> url . '/bk_takeover';
        $res = $this -> httpRequest('get', $url);
        return $res;
    }


    /**
     * 反向规则 - 新建
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createReverse(array $body = array())
    {
        $url = $this -> url . '/reverse';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 删除
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteReverse(array $body = array())
    {
        $url = $this -> url . '/reverse';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 获取单个规则信息
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeReverse(array $body = array())
    {
        $url = $this -> url . '/reverse/rule_single';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 获取列表
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listReverse(array $body = array())
    {
        $url = $this -> url . '/reverse';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 状态
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listReverseStatus(array $body = array())
    {
        $url = $this -> url . '/reverse/status';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 停止
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function stopReverse(array $body = array())
    {
        $url = $this -> url . '/reverse/stop';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 重启反向任务
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function restartReverse(array $body = array())
    {
        $url = $this -> url . '/reverse/restart';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 查看
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeSingleReverse(array $body = array())
    {
        $url = $this -> url . '/reverse';
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * 选择用户
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeRuleSelectUser(array $body = array())
    {
        $url = $this -> url . '/rule/select_user';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 获取数据库表字段
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeRule(array $body = array())
    {
        $url = $this -> url . '/rule/z_structure';
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
        $url = $this -> url . '/rule/log';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 表修复
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeRuleTableFix(array $body = array())
    {
        $url = $this -> url . '/rule/table_fix';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 已同步表
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listRuleSyncTable(array $body = array())
    {
        $url = $this -> url . '/rule/sync_table';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 增量失败dml
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listRuleIncreDml(array $body = array())
    {
        $url = $this -> url . '/rule/incre_dml';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 获取残留规则
     *
     * @return array
     */
    public function describeRuleGetFalseRule()
    {
        $url = $this -> url . '/rule/get_false_rule';
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 获取scn号
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeRuleGetScn(array $body = array())
    {
        $url = $this -> url . '/rule/get_scn';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 装载统计报表
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listRuleLoadReport(array $body = array())
    {
        $url = $this -> url . '/rule/load_report';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 装载延迟统计报表
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listRuleLoadDelayReport(array $body = array())
    {
        $url = $this -> url . '/rule/load_delay_report';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 数据库预检
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeRuleDbCheck(array $body = array())
    {
        $url = $this -> url . '/rule/db_check';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 日志下载
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function downloadLog(array $body = array())
    {
        $url = $this -> url . '/rule/log_download';
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