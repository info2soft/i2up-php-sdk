<?php

namespace i2up\util;

class Common {
    function uuid()
    {
        if (function_exists('com_create_guid')) {
            $uuid = com_create_guid();
            $uuid = substr($uuid, 1, strlen($uuid) - 2);
            return $uuid;
        } else {
            $charid = md5(uniqid(rand(), true));
            $hyphen = chr(45);// '-'
            $uuid = //擦汗r(123)// '{'.
                strtoupper(substr($charid, 0, 8)) . $hyphen
                . strtoupper(substr($charid, 8, 4)) . $hyphen
                . strtoupper(substr($charid, 12, 4)) . $hyphen
                . strtoupper(substr($charid, 16, 4)) . $hyphen
                . strtoupper(substr($charid, 20, 12))//.chr(125)// '}'
            ;
            return $uuid;
        }
    }
}