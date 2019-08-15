<?php

/**
 *  流程：获取token->新建恢复规则->获取列表->获取单个恢复规则信息->获取规则状态->删除规则
 */

require_once __DIR__ . '/../autoload.php';

use i2up\common\Auth;
use i2up\rep\v20190805\RepRecovery;
use i2up\Config;


/**
 *  获取token
 */
$params = array(
    'username' => 'admin',
    'pwd' => 'Info1234',
    'cache_path' => __DIR__ . '/../',
    'ip' => Config::baseUrl
);
$auth = new Auth($params);
$RepRecovery = new RepRecovery($auth);

/**
 *  新建恢复规则
 */
$create_rc_arr = array(
    'rep_recovery'=>array(
        'cdp_position'=>'',
        'rc_name'=>'test2',
        'cdp_time'=>'',
        'wk_uuid'=>'B8566905-411E-B2CD-A742-77B1346D8E84',
        'snapshot_size'=>'',
        'cdp_rc_method'=>0,
        'snapshot_time'=>'',
        'rc_type'=>0,
        'snapshot_name'=>'',
        'bk_path'=>array(
            '0'=>'E:\test2\E\t\\'
        ),
        'oph_policy'=>0,
        'cdp_file'=>'Baseline',
        'cdp_op'=>'backup',
        'wk_path'=>array(
            '0'=>'E:\rc\\'
        ),
        'rep_uuid'=>'488EB72D-0F1B-A18A-4BAA-079BD4E3203E',
        'bk_uuid'=>'B8566905-411E-B2CD-A742-77B1346D8E84'
    )
);
$create_rc_res = $RepRecovery->createRepRecovery($create_rc_arr);
if ($create_rc_res[0] == null || $create_rc_res[0]['code'] !== 0) return;

/**
 *  获取列表
 */
$rc_list_arr = array(
    'limit'=>10,
    'page'=>1,
    'search_field'=>'',
    'search_value'=>'',
    'type'=>0
);
$rc_list_res = $RepRecovery->listRepRecovery($rc_list_arr);
if ($create_rc_res[0] == null || $create_rc_res[0]['code'] !== 0) return;

/**
 *  获取单个恢复规则信息
 */
$rc_uuid = $rc_list_res[0]['info_list'][0]['rc_uuid'];
$describe_rc_arr = array(
    'uuid'=>$rc_uuid
);
$describe_rc_res = $RepRecovery->describeRepRecovery($describe_rc_arr);
if ($describe_rc_res[0] == null || $describe_rc_res[0]['code'] !== 0) return;

/**
 *  获取规则状态
 */
$rc_status_arr = array(
    'rc_uuids'=>array(
        '0'=>$rc_uuid
    )
);
$rc_status_res = $RepRecovery->listRepRecoveryStatus($rc_status_arr);
if ($rc_status_res[0] == null || $rc_status_res[0]['code'] !== 0) return;
var_export($rc_status_res);
/**
 *  删除规则
 */
$delete_rc_arr = array(
    'rc_uuids'=>array(
        '0'=>$rc_uuid
    )
);
$delete_rc_res = $RepRecovery->deleteRepRecovery($delete_rc_arr);
var_export($delete_rc_res);
