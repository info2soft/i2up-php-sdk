<?php
namespace i2up\Test\v20240228\common;

use i2up\common\v20240228\Auth;
                
class AuthTest extends \PHPUnit_Framework_TestCase
 {
    private $auth;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> auth = new Auth();
    }

    public function testDescribeVerificationCode()
    {
        $auth = $this -> auth;
        $arr = array(
            'uuid'=>'',
            'mobile'=>18501767968,
            'email'=>'',
            'type'=>'sms',
        );
        $res = $auth -> describeVerificationCode($arr);
        $this->do_assert($res);
    }

    public function testCheckCaptcha()
    {
        $auth = $this -> auth;
        $arr = array(
            'username'=>'admin',
        );
        $res = $auth -> checkCaptcha($arr);
        $this->do_assert($res);
    }

    public function testToken()
    {
        $auth = $this -> auth;
        $res = $auth -> token();
        $this->assertNotNull($res);
        $this->assertEquals(true, is_string($res));
    }

    public function testCheckLoginStatus()
    {
        $auth = $this -> auth;
        $arr = array(
            'access_token'=>'a10b45cd8b94ad53UEsc8H-gxjMU-jX76eFd2z4eoDh0vlVkPPDWaJyBWssjwWdYAtk4SdFaL8dQH48QQv29c3TRNX3FQo4Ub_V1qwehbRQ28KBEtYqTG6wy8sbAEWPVcBoE2uWXnmP_J5R9hXl8yHbeyaMwMjLpWe0onA',
        );
        $res = $auth -> checkLoginStatus($arr);
        $this->do_assert($res);
    }

    public function testHeartbeat()
    {
        $auth = $this -> auth;
        $arr = array(
            'refresh_token'=>'null',
        );
        $res = $auth -> heartbeat($arr);
        $this->do_assert($res);
    }

    private function do_assert($res)
    {
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}