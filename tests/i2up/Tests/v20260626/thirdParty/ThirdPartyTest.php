<?php
namespace i2up\Test\v20260626\thirdParty;

use i2up\thirdParty\v20260626\ThirdParty;
use i2up\common\Auth;
use PHPUnit\Framework\TestCase;
                
class ThirdPartyTest extends TestCase
 {
    private $thirdParty;
    
    public function setUp():void
    {
        parent::setup();
        $this -> thirdParty = new ThirdParty(new Auth());
    }

    public function testGetThirdPartiesUrl()
    {
        $thirdParty = $this -> thirdParty;
        $arr = array(
            'key'=>'所在口支引效',
        );
        
        
        $res = $thirdParty -> getThirdPartiesUrl($arr);
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