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
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testRegAccount()
    {
        $auth = $this -> auth;
        $res = $auth -> regAccount();
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testToken()
    {
        $auth = $this -> auth;
        $res = $auth -> token();
        $this->assertNotNull($res);
        $this->assertEquals(true, is_string($res));
    }

    public function testResetPwd()
    {
        $auth = $this -> auth;
        $res = $auth -> resetPwd();
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testCheckLoginStatus()
    {
        $auth = $this -> auth;
        $arr = array(
            'access_token'=>'e94c0d9e51f1a785SN_BQFnp-TqdAuVvLvIvsiUa4r2yluaS4IL9P3EJTCHOg1ou5KaEY1V-Q0KjhMCtLGhP1TL6nNDf52HOCWJGfGqamoFZRfcvtygZonHp0WTnTcl588WBMmsfxHt0rmez_sIx73EAXhzpVmHE3TVuwQ',
        );
        $res = $auth -> checkLoginStatus($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}