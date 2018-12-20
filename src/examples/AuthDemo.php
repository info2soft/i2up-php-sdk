<?php

require_once __DIR__ . '/../../autoload.php';

use i2up\common\Auth;

$username = 'admin';
$pwd = 'Info1234';
$auth = new Auth($username, $pwd);
$token = $auth -> token();
var_dump($token);