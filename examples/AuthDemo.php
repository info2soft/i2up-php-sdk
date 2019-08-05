<?php

require_once __DIR__ . '/../vendor/autoload.php';

use i2up\common\Auth;
use i2up\Config;

$params = array(
    'access_key' => 'pytDWihn3NscXewH8UYLIZq2gE7ufGoQ',
    'secret_key' => 'u9wQma8pvyXFlZ7CtzTgORsjiBNY4KVL5xDIqGW1',
    'ip' => Config::baseUrl
);
$auth = new Auth($params);
