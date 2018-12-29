<?php

require_once __DIR__ . '/../autoload.php';

use i2up\common\Auth;
use i2up\tools\v20181217\Compare;
use i2up\Config;

/**
 *  获取token
 */
$auth = new Auth(Config::baseUrl, 'admin','Info1234', __DIR__);
$Compare = new Compare($auth);

/**
 *  新建比较与同步
 */
$create_compare_arr = array(
    'compare'=>array(
        'excl_path'=>array(),
        'bkup_one_time'=>0,
        'bkup_schedule'=>array(
            'sched_gap_min'=>60,
            'sched_time'=>array(
                '0'=>'00:00:00'
            ),
            'sched_day'=>array(
                '0'=>'1'
            ),
            'sched_time_end'=>'23:59',
            'limit'=>"",
            'sched_time_start'=>'00:00',
            'sched_every'=>0
        ),
        'mirr_file_check'=>'1',
        'task_name'=>'testCompare1',
        'wk_path'=>array(
            '0'=>'E:\t\\'
        ),
        'bk_uuid'=>'B8566905-411E-B2CD-A742-77B1346D8E84',
        'cmp_type'=>0,
        'bk_path'=>array(
            '0'=>'E:\t2\\'
        ),
        'bkup_policy'=>2,
        'compress'=>0,
        'wk_uuid'=>'B8566905-411E-B2CD-A742-77B1346D8E84'
    )
);
$create_compare_res = $Compare->createCompare($create_compare_arr);
if ($create_compare_res[0] == null || $create_compare_res[0]['code'] !== 0) return;

/**
 *  获取列表
 */
$list_compare_arr = array(
    'search_value'=>'',
    'search_field'=>'',
    'limit'=>10,
    'page'=>1
);
$list_compare_res = $Compare->listCompare($list_compare_arr);
if ($list_compare_res[0] == null || $list_compare_res[0]['code'] !== 0) return;

/**
 *  获取单个规则信息
 */
$compare_uuid = $list_compare_res[0]['info_list'][0]['task_uuid'];
$describe_compare_arr = array(
    'uuid'=>$compare_uuid
);
$describe_compare_res = $Compare->describeCompare($describe_compare_arr);
if ($describe_compare_res[0] == null || $describe_compare_res[0]['code'] !== 0) return;
/**
 *  获取状态
 */
$compare_status_arr = array(
    'task_uuids'=>array(
        '0'=>$compare_uuid
    )
);
$compare_status_res = $Compare->listCompareStatus($compare_status_arr);
if ($compare_status_res[0] == null || $compare_status_res[0]['code'] !== 0) return;
/**
 *  删除
 */
$compare_delete_arr = array(
    'task_uuids'=>array(
        '0'=>$compare_uuid
    )
);
$compare_delete_res = $Compare->deleteCompare($compare_delete_arr);
var_dump($compare_delete_res);
