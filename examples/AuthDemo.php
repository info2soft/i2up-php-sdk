<?php

require_once __DIR__ . '/../vendor/autoload.php';

use i2up\common\Auth;
use i2up\Config;

$params = array(
    'access_key' => 'oishvmn5YPHJcEDaIjtwd0R9Ug7BN1fk',
    'secret_key' => 'fkLiyqsG3P1AzB5jWtYbZa7TU8RN9wSVhe6EldOo',
    'ip' => Config::baseUrl
);
$auth = new Auth($params);
