<?php
namespace i2up\Test\common;

use i2up\common\Auth;
                
class AuthTest extends \PHPUnit_Framework_TestCase
 {
    private $auth;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $auth = new Auth('admin', 'Info1234');
        $this -> auth = $auth;
    }

    public function testDescribePhoneCode()
    {
        $auth = $this -> auth;
        $arr = array(
        );
        $res = $auth -> describePhoneCode($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testRegAccount()
    {
        $auth = $this -> auth;
        $arr = array(
        );
        $res = $auth -> regAccount($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testToken()
    {
        $auth = $this -> auth;
        $arr = array(
            'pwd'=>'Info1234',
            'username'=>'admin',
        );
        $res = $auth -> token($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testResetPwd()
    {
        $auth = $this -> auth;
        $arr = array(
        );
        $res = $auth -> resetPwd($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testCheckLoginStatus()
    {
        $auth = $this -> auth;
        $arr = array(
            'access_token'=>'a10b45cd8b94ad53UEsc8H-gxjMU-jX76eFd2z4eoDh0vlVkPPDWaJyBWssjwWdYAtk4SdFaL8dQH48QQv29c3TRNX3FQo4Ub_V1qwehbRQ28KBEtYqTG6wy8sbAEWPVcBoE2uWXnmP_J5R9hXl8yHbeyaMwMjLpWe0onA',
        );
        $res = $auth -> checkLoginStatus($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}