<?php

require_once __DIR__ . '/../vendor/autoload.php';

use i2up\common\Auth;
use i2up\Config;

$username = 'admin';
$pwd = 'Info1234';
$auth = new Auth(Config::baseUrl, $username, $pwd, __DIR__);
$token = $auth -> token();
var_export($token);