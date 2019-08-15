<?php

/**
 *  流程：获取token->节点认证->创建节点->获取节点列表中新建节点的uuid->获取单个节点信息->获取节点状态->删除节点->批量创建节点->获取节点列表中新建节点uuid->删除批量创建的节点;
 */

require_once __DIR__ . '/../autoload.php';

use i2up\common\Auth;
use i2up\resource\v20190805\Node;
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
$Node = new Node($auth);

/**
 * 节点认证
 */
$auth_node_arr = array(
    'auth_type'=>0,
    'config_addr'=>'192.168.88.75',
    'config_port'=>26821,
    'node_uuid'=>'',
    'os_user'=>'admin',
    'os_pwd'=>'i2soft',
    'i2id'=>''
);
$res = $Node->authNode($auth_node_arr);
if ($res[0] == null || $res[0]['code'] !== 0) return;

/**
 *  创建节点
 */
$os_type = $res[0]['os_type'];
$root = $res[0]['root'];
$log_path = $res[0]['log_path'];
$cache_path = $res[0]['cache_path'];
$create_node_arr =  $arr = array(
    'node'=>array(
        'bak_client_max'=>'100',
        'cloud_type'=>'0',
        'bak_root'=>'',
        'monitor_switch'=>0,
        'node_role'=>'3',
        'mem_limit'=>'1272',
        'config_port'=>'26821',
        'mon_save_day'=>'5',
        'vg'=>'',
        'os_type'=>$os_type,
        'os_pwd'=>'i2soft',
        'log_path'=>$log_path,
        'mon_data_path'=>'C:\Program Files (x86)\info2soft-i2node\log\\',
        'comment'=>'',
        'wk_path'=>array(),
        'bak_user_max'=>'100',
        'cache_path'=>$cache_path,
        'db_save_day'=>'3',
        'proxy_switch'=>0,
        'data_addr'=>'192.168.88.75',
        'node_name'=>'88.75',
        'config_addr'=>'192.168.88.75',
        'mon_send_interval'=>'10',
        'disk_limit'=>'10240',
        'reboot_sys'=>'0',
        'bind_lic_list'=>array(),
        'security_check'=>0,
        'os_user'=>'admin',
        'bak_service_type'=>'',
        'en_snap_switch'=>0,
        'rep_excl_path'=>array(),
        'biz_grp_list'=>array(),
        'i2id'=>''
    )
);
$create_res = $Node->createNode($create_node_arr);
if ($create_res[0] == null || $create_res[0]['code'] !== 0) return;

/**
 *  获取节点列表
 */
$list_node_arr = array(
    'limit'=>10,
    'page'=>1,
    'search_value'=>'',
    'search_field'=>''
);
$list_res = $Node->listNode($list_node_arr);
if ($list_res[0] == null || $list_res[0]['code'] !== 0) return;

/**
 *  获取单个节点信息
 */
$node_uuid = $list_res[0]['info_list'][0]['node_uuid'];
$node_uuid_arr = array(
    'uuid'=> $node_uuid
);
$describe_node = $Node->describeNode($node_uuid_arr);
if ($describe_node[0] == null || $describe_node[0]['code'] !== 0) return;
$random_str = $describe_node[0]['node']['random_str'];
$modify_arr = $create_node_arr;
$modify_arr['node']['random_str'] = $random_str;
$modify_arr['node']['node_name'] = 'test88.75';
$modify_arr['uuid'] = $node_uuid;
$modify_node = $Node->modifyNode($modify_arr);
if ($modify_node[0] == null || $modify_node[0]['code'] !== 0) return;

/**
 *  获取节点状态
 */

$node_status_arr = array(
    'node_uuids'=>array(
        '0'=>$node_uuid
    ),
);
$node_status_res = $Node->listNodeStatus($node_status_arr);
if ($node_status_res[0] == null || $node_status_res[0]['code'] !== 0) return;

/**
 *  删除节点
 */
$node_delete_arr = array(
    'node_uuids'=>array(
        '0'=>$node_uuid
    )
);
$node_delete_res = $Node->deleteNode($node_delete_arr);
if ($node_delete_res[0] == null || $node_delete_res[0]['code'] !== 0) return;

/**
 *  批量创建节点
 */

$batch_node_create_arr = array(
    'base_info_list'=>array(
        '0'=>array(
            'os_pwd'=>'i2soft',
            'os_user'=>'admin',
            'config_port'=>'26821',
            'config_addr'=>'192.168.88.75',
            'node_name'=>'88.75'
        )
    ),
    'node'=>array(
        'mem_limit'=>'1272',
        'bind_lic_list'=>array(),
        'disk_limit'=>'10240',
        'monitor_interval'=>'10',
        'node_role'=>'3',
        'monitor_switch'=>0,
        'moni_log_keep_node'=>'5',
        'moni_log_keep_server'=>'3',
        'security_check'=>0,
        'biz_grp_list'=>array()
    )
);
$batch_create_res = $Node->createBatchNode($batch_node_create_arr);
/**
 *  获取节点列表
 */
$node_list_res = $Node->listNode($list_node_arr);
if ($node_list_res[0] == null || $node_list_res[0]['code'] !== 0) return;

/**
 *  删除批量新建的节点
 */
$batch_node_uuid = $node_list_res[0]['info_list'][0]['node_uuid'];
$delete_batch_node_arr = array(
    'node_uuids'=>array(
        '0'=>$batch_node_uuid
    )
);
$delete_batch_node_res = $Node->deleteNode($delete_batch_node_arr);
var_export($delete_batch_node_res);


