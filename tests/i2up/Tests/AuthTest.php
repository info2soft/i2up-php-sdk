<?php
namespace i2up\Tests;

use i2up\common\Auth;

class AuthTest extends \PHPUnit_Framework_TestCase
{
    public function testGetToken()
    {
        $auth = new Auth('admin','Info1234');
        $token = $auth -> tokenStr();
        var_dump($token);
        $this->assertNotNull($token);
    }
}


