<?php

/**
 *  流程： 获取token->新建复制规则->获取复制规则列表中新建规则的uuid->获取单个规则->停止规则->修改规则->启动规则->删除规则
 */

require_once __DIR__ . '/../autoload.php';

use i2up\common\Auth;
use i2up\rep\v20190805\RepBackup;
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
$RepBackup = new RepBackup($auth);

/**
 *  新建复制规则
 */
$create_rep_arr = array(
    'rep_backup'=>array(
        'mirr_sync_attr'=>'1',
        'cdp_path'=>'',
        'oph_path'=>'',
        'secret_key'=>'',
        'rep_name'=>'test6',
        'snapshot_policy'=>'0',
        'bk_path_policy'=>'1',
        'cdp_process_time'=>'03:39:20',
        'mirr_open_type'=>'0',
        'compress'=>'0',
        'cdp_switch'=>'',
        'snapshot_start'=>'',
        'cdp_baseline_format'=>'0',
        'cdp_bl_bkup_switch'=>0,
        'encrypt_switch'=>'0',
        'auto_start'=>'1',
        'wk_path'=>array(
            '0'=>'E:\\t\\'
        ),
        'band_width'=>'',
        'snapshot_limit'=>'24',
        'mirr_sync_flag'=>'0',
        'bk_path'=>array(
            '0'=>'E:\test2\\'
        ),
        'wk_uuid'=>'B8566905-411E-B2CD-A742-77B1346D8E84',
        'mirr_file_check'=>'0',
        'cdp_bl_sched_switch'=>0,
        'del_policy'=>'0',
        'cmp_switch'=>0,
        'rep_type'=>0,
        'snapshot_interval'=>'1',
        'file_type_filter_switch'=>0,
        'policy_interval'=>'',
        'snapshot_switch'=>0,
        'file_type_filter'=>'',
        'cdp_param'=>'3,30,0',
        'oph_policy'=>'0',
        'mirr_skip'=>'0',
        'bk_uuid'=>'B8566905-411E-B2CD-A742-77B1346D8E84',
        'cdp_bl_sched'=>'',
        'excl_path'=>array(),
        'mirr_sched'=>'',
        'bkup_one_time'=>null,
        'mirr_sched_switch'=>0,
        'cdp_snap_on'=>0,
        'cdp_snap_interval'=>30,
        'cdp_snap_count'=>240,
        'ct_name_type'=>0,
        'ct_name_str1'=>'',
        'ct_name_str2'=>'',
        'cmp_file_check'=>0,
        'cmp_schedule'=>array(),
        'thread_num'=>'0',
        'biz_grp_list'=>array()
    )
);
$create_rep_res = $RepBackup->createRepBackup($create_rep_arr);
if ($create_rep_res[0] == null || $create_rep_res[0]['code'] !== 0) return;

/**
 *  获取复制规则列表
 */
$list_rep_arr = array(
    'search_value'=>'',
    'limit'=>10,
    'type'=>0,
    'page'=>1,
    'search_field'=>''
);
$list_rep_res = $RepBackup->listRepBackup($list_rep_arr);
if ($list_rep_res[0] == null || $list_rep_res[0]['code'] !== 0) return;

/**
 *  获取单个规则
 */
$describe_rep_uuid = $list_rep_res[0]['info_list'][0]['rep_uuid'];
$describe_rep_arr = array(
    'uuid'=>$describe_rep_uuid
);
$describe_rep_res = $RepBackup->describeRepBackup($describe_rep_arr);
if ($describe_rep_res[0] == null || $describe_rep_res[0]['code'] !== 0) return;

/**
 *  停止规则
 */
$rep_stop_arr = array(
    'rep_uuids'=>array(
        '0'=> $describe_rep_uuid
    )
);
$rep_stop_res = $RepBackup->stopRepBackup($rep_stop_arr);
if ($rep_stop_res[0] == null || $rep_stop_res[0]['code'] !== 0) return;

/**
 *  修改规则
 */
$rep_random_str = $describe_rep_res[0]['rep_backup']['random_str'];
$modify_rep_arr = $create_rep_arr;
$modify_rep_arr['uuid'] = $describe_rep_uuid;
$modify_rep_arr['rep_backup']['random_str'] = $rep_random_str;
$modify_rep_arr['rep_backup']['bk_path'] = array(
    '0'=>'E:\t2\\'
);
$modify_rep_res = $RepBackup->modifyRepBackup($modify_rep_arr);

/**
 *  开始规则
 */
$rep_start_arr = array(
    'rep_uuids'=>array(
        '0'=> $describe_rep_uuid
    )
);
$rep_start_res = $RepBackup->startRepBackup($rep_stop_arr);
if ($rep_start_res[0] == null || $rep_start_res[0]['code'] !== 0) return;

/**
 *  删除规则
 */
$rep_delete_arr = array(
    'rep_uuids'=>array(
        '0'=>$describe_rep_uuid
    )
);
$rep_delete_res = $RepBackup->deleteRepBackup($rep_delete_arr);
var_export($rep_delete_res);
