<?php
namespace i2up\Test\v20260209\common;

use i2up\common\v20260209\FindPassword;
use i2up\common\Auth;
                
class FindPasswordTest extends \PHPUnit_Framework_TestCase
 {
    private $findPassword;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> findPassword = new FindPassword(new Auth());
    }

    public function testIsAccountExists()
    {
        $findPassword = $this -> findPassword;
        $arr = array(
            'account'=>'',
            'type'=>'email ',
        );
        
        
        $res = $findPassword -> isAccountExists($arr);
        $this->do_assert($res);
    }

    public function testSendVerificationCode()
    {
        $findPassword = $this -> findPassword;
        $arr = array(
            'account'=>'',
            'type'=>'mobile',
        );
        
        
        $res = $findPassword -> sendVerificationCode($arr);
        $this->do_assert($res);
    }

    public function testVerifyVerficationCode()
    {
        $findPassword = $this -> findPassword;
        $arr = array(
            'account'=>'',
            'verification_code'=>'',
            'type'=>'mobile',
        );
        
        
        $res = $findPassword -> verifyVerficationCode($arr);
        $this->do_assert($res);
    }

    public function testResetPassword()
    {
        $findPassword = $this -> findPassword;
        $arr = array(
            'account'=>'',
            'password'=>'',
            'type'=>'',
            'verification_code'=>'',
        );
        
        
        $res = $findPassword -> resetPassword($arr);
        $this->do_assert($res);
    }

    private function do_assert($res)
    {
        if ($res == null) {
            print "Invalid parameter: body is null or empty, or uuid/id is empty.\n";
        }

        if (isset($res[1])){
            print("Response.statusCode = " . ($res[1])->getResponse()->statusCode);
            print("\nResponse.body = " . ($res[1])->getResponse()->body);
        }
        
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('ret',$res[0]);
        $this->assertEquals(200, $res[0]['ret']);
    }
}