<?php
namespace i2up\Test\common;

use i2up\common\Auth;
use i2up\Config;
                
class AuthTest extends \PHPUnit_Framework_TestCase
 {
    private $auth;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $auth = new Auth(Config::baseUrl, 'admin', 'Info1234',__DIR__ . '/../');
        $this -> auth = $auth;
    }

    public function testDescribePhoneCode()
    {
        $auth = $this -> auth;
        $res = $auth -> describePhoneCode();
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testRegAccount()
    {
        $auth = $this -> auth;
        $res = $auth -> regAccount();
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testToken()
    {
        $auth = $this -> auth;
        $res = $auth -> token();
        var_export($res);
        $this->assertNotNull($res);
        $this->assertEquals(true, is_string($res));
    }

    public function testResetPwd()
    {
        $auth = $this -> auth;
        $res = $auth -> resetPwd();
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testCheckLoginStatus()
    {
        $auth = $this -> auth;
        $arr = array(
            'access_token'=>'f265ebeaa61e77e3g5CuJjQcr8G7KHJ3XjEhEc0DM6tl9UuE-KtlJDUa6CO6dOyBdk0MAnAb_KRJK63IwoF_DjgZTkP_cdMjhDl-pAa_RjlSdYkfLxbp7HTmyjXPC7ulTHQW2R0tmkfE9A9-r5L4ipq4BsfQC5XFNoL2uw',
        );
        $res = $auth -> checkLoginStatus($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}