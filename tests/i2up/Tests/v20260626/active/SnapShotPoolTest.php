<?php
namespace i2up\Test\v20260626\active;

use i2up\active\v20260626\SnapShotPool;
use i2up\common\Auth;
use PHPUnit\Framework\TestCase;
                
class SnapShotPoolTest extends TestCase
 {
    private $snapShotPool;
    
    public function setUp():void
    {
        parent::setup();
        $this -> snapShotPool = new SnapShotPool(new Auth());
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