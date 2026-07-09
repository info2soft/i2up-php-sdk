<?php
namespace i2up\Test\v20260626\hw;

use i2up\hw\v20260626\CBG;
use i2up\common\Auth;
use PHPUnit\Framework\TestCase;
                
class CBGTest extends TestCase
 {
    private $cBG;
    
    public function setUp():void
    {
        parent::setup();
        $this -> cBG = new CBG(new Auth());
    }

    public function testActivateAuthCode()
    {
        $cBG = $this -> cBG;
        $arr = array(
            'lic_uuid'=>'1693DD96-C9BE-B49E-6044-3AB3120F4B75',
            'auth_code'=>'123456',
        );
        
        
        $res = $cBG -> activateAuthCode($arr);
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