<?php

require_once __DIR__ . '/../../autoload.php';

use i2up\common\Auth;

$username = 'admin';
$pwd = 'Info1234';
$auth = new Auth(Config::baseUrl, $username, $pwd, __DIR__);
$token = $auth -> token();
var_dump($token);