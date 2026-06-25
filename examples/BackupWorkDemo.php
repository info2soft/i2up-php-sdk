<?php

require_once __DIR__ . '/../autoload.php';

use \i2up\backupWork\v20260209\BackupWork;
use i2up\common\Auth;

/**
 *  获取token
 */
$params = array(
    'username' => 'admin',
    'pwd' => 'Info@2027',
    'cache_path' => __DIR__ . '/../',
    'ip' => 'https://10.1.77.45:58086/api/'
);
$auth = new Auth($params);
$backupWork = new BackupWork($auth);

$arr = array(
    'page'=>1,
    'limit'=>1,
    'where_args[task_uuid]' => '85FDC70B-A1FE-4DC5-ABF2-57BC63E9AE3D',
);


$res = $backupWork -> listBackupWork($arr);


var_dump($res);


