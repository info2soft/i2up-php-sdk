<?php
namespace i2up\Test\v20260626\recoveryCopy;

use i2up\recoveryCopy\v20260626\RecoveryCopy;
use i2up\common\Auth;
use PHPUnit\Framework\TestCase;
                
class RecoveryCopyTest extends TestCase
 {
    private $recoveryCopy;
    
    public function setUp():void
    {
        parent::setup();
        $this -> recoveryCopy = new RecoveryCopy(new Auth());
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