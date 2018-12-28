<?php

require_once __DIR__ . '/../autoload.php';

use i2up\common\Auth;
use i2up\rep\v20181217\RepRecovery;
use i2up\Config;


/**
 *  获取token
 */
$auth = new Auth(Config::baseUrl, 'admin','Info1234', __DIR__);
$RepRecovery = new RepRecovery($auth);
