<?php
namespace i2up\Test\v20260626\containerRecoveryRule;

use i2up\containerRecoveryRule\v20260626\ContainerRecoveryRule;
use i2up\common\Auth;
use PHPUnit\Framework\TestCase;
                
class ContainerRecoveryRuleTest extends TestCase
 {
    private $containerRecoveryRule;
    
    public function setUp():void
    {
        parent::setup();
        $this -> containerRecoveryRule = new ContainerRecoveryRule(new Auth());
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