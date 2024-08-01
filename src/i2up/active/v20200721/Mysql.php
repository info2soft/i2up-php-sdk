<?php
/**
 * Create by PhpStorm
 * User: Lis
 * Date: 2020/8/10
 * Time: 9:18
 */

namespace i2up\active\v20200721;

use i2up\Config;
use i2up\Http\Client;
use i2up\Http\Error;

class Mysql {
    private $url;
    private $token;
    private $accessKey;
    private $secretKey;
    public function __constructor($auth)
    {
        $this -> url = $auth -> ip . 'stream';
        if ($auth -> tokenAuthType) {
            $this -> token = $auth -> token();
        } else {
            $this -> accessKey = $auth -> accessKey();
            $this -> secretKey = $auth -> secretKey();
        }
    }

    /**
     * mysql规则管理 - 新建
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createStreamRule(array $body = array())
    {
        $url = $this -> url . '/rule/operate';
        $body['operate'] = 'create';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * mysql规则管理 - 操作 - resume
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function resumeStreamRule(array $body = array())
    {

        $url = $this -> url;

        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * mysql规则管理 - 操作 停止
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function stopStreamRule(array $body = array())
    {
        $url = $this -> url . '/rule/operate';
        $body['operate'] = 'stop';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * mysql规则管理 - 操作 重启
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function restartStreamRule(array $body = array())
    {
        $url = $this -> url . '/rule/operate';
        $body['operate'] = 'restart';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * mysql规则管理 - 操作 start_parsing
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function start_parsingStreamRule(array $body = array())
    {
        $url = $this -> url . '/rule/operate';
        $body['operate'] = 'start_parsing';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * mysql规则管理 - 操作 stop_parsing
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function stop_parsingStreamRule(array $body = array())
    {
        $url = $this -> url . '/rule/operate';
        $body['operate'] = 'stop_parsing';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * mysql规则管理 - 操作 reset_parsing
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function reset_parsingStreamRule(array $body = array())
    {
        $url = $this -> url . '/rule/operate';
        $body['operate'] = 'reset_parsing';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * mysql规则管理 - 操作 stop_load
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function stop_loadStreamRule(array $body = array())
    {
        $url = $this -> url . '/rule/operate';
        $body['operate'] = 'stop_load';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }


    /**
     * mysql规则管理 - 操作 reset_load
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function reset_loadStreamRule(array $body = array())
    {
        $url = $this -> url . '/rule/operate';
        $body['operate'] = 'reset_load';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * mysql规则管理 - 操作 reset_load
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function removeStreamRule(array $body = array())
    {
        $url = $this -> url . '/rule/operate';
        $body['operate'] = 'remove';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }


    /**
     * 删除
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteStreamRule(array $body = array())
    {
        $url = $this -> url . '/rule';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }


    /**
     * 规则列表
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listStreamRules(array $body = array())
    {
        $url = $this -> url . '/rule';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 状态
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listStreamStatus(array $body = array())
    {
        $url = $this -> url . '/rule/status';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 日志
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listStreamLog(array $body = array())
    {
        $url = $this -> url . '/rule/log';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 同步状态
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listStreamSyncStatus(array $body = array())
    {
        $url = $this -> url . '/rule/sync_status';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 历史信息
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeHistory(array $body = array())
    {
        $url = $this -> url . '/rule/history';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 资源占用
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeResource(array $body = array())
    {
        $url = $this -> url . '/rule/resouce';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 修改
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyStreamRule(array $body = array())
    {
        $url = $this -> url . '/rule';
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * 获取单个信息
     *
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeStreamRules(array $body = array())
    {
        $url = $this -> url . '/rule/' . $body['uuid'];
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }


    /**
     * 表比较-新建
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createStreamCmp(array $body = array())
    {
        $url = $this -> url . '/tb_cmp';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 表比较-获取单个
     *
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeStreamCmp(array $body = array())
    {
        $url = $this -> url . '/tb_cmp/' . $body['uuid'];
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 表比较-删除
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteStreamRules(array $body = array())
    {
        $url = $this -> url . '/tb_cmp';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 表比较-获取规则列表
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listStreamCmps(array $body = array())
    {
        $url = $this -> url . '/tb_cmp';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 表比较-状态接口
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listStreamCmpStatus(array $body = array())
    {
        $url = $this -> url . '/tb_cmp/status';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 表比较-操作 cmp_stop
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function cmp_stopStreamCmp(array $body = array())
    {
        $url = $this -> url . '/tb_cmp/operate';
        $body['operate'] = 'cmp_stop';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 表比较-操作 cmp_restart
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function cmp_restartStreamCmp(array $body = array())
    {
        $url = $this -> url . '/tb_cmp/operate';
        $body['operate'] = 'cmp_restart';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 表比较-比较结果的删除
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteCmpResult(array $body = array())
    {
        $url = $this -> url . '/tb_cmp/result_time_list';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 表比较-比较结果的查看
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listCmpResult(array $body = array())
    {
        $url = $this -> url . '/tb_cmp/result_time_list';
        $res = $this -> httpRequest('get', $url, $body);
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
     * 表比较-单条错误信息
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeCmpErrorMsg(array $body = array())
    {
        $url = $this -> url . '/tb_cmp/error_msg';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }


    /**
     * 比较结果列表的修复
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listFixResult(array $body = array())
    {
        $url = $this -> url . '/result_fix_list';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 比较结果列表的导出
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function exportCmpResult(array $body = array())
    {
        $url = $this -> url . '/export';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 历史结果中的修复
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listCmpDiffMap(array $body = array())
    {
        $url = $this -> url . '/tb_cmp/diff_map';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }


    /**
     * 备机接管 - 新建
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createBkTakeover(array $body = array())
    {
        $url = $this -> url . '/bk_takevoer';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 备机接管 - 查看
     *
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
     * 备机接管 - 删除
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
     * 备机接管- 接管结果
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listTakeoverResult(array $body = array())
    {
        $url = $this -> url . '/bk_takeover/result';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 备机接管 - 获取状态
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listTakeoverStatus(array $body = array())
    {
        $url = $this -> url . '/bk_takeover/status';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 备机接管列表
     *
     * @return array
     */
    public function listTakeoverList()
    {
        $url = $this -> url . '/bk_takeover';
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 对象修复-新建
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
        $url = $this -> url . '/obj_fix/' . $body['uuid'] . '';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 对象修复 -删除
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
     * 对象修复 - 列表
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
     * 操作
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function tempFuncName(array $body = array())
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
     *  获取单个
     *
     * @param array $body  参数详见 API 手册
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function describeObjCmp(array $body = array())
    {
        $url = $this -> url . '/obj_cmp/' . $body['uuid'] . '';
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
     * mysql获取对象比较状态
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