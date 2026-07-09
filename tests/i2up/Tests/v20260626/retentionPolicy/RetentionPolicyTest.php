<?php
namespace i2up\Test\v20260626\retentionPolicy;

use i2up\retentionPolicy\v20260626\RetentionPolicy;
use i2up\common\Auth;
use PHPUnit\Framework\TestCase;
                
class RetentionPolicyTest extends TestCase
 {
    private $retentionPolicy;
    
    public function setUp():void
    {
        parent::setup();
        $this -> retentionPolicy = new RetentionPolicy(new Auth());
    }

    public function testListRetentionPolicy()
    {
        $retentionPolicy = $this -> retentionPolicy;
        $arr = array();
        
        
        $res = $retentionPolicy -> listRetentionPolicy($arr);
        $this->do_assert($res);
    }

    public function testModifyRetentionPoliciy()
    {
        $retentionPolicy = $this -> retentionPolicy;
        $arr = array(
            'type'=>'',
            'value'=>1,
            'id'=>'',
        );
        
        
        $res = $retentionPolicy -> modifyRetentionPoliciy($arr);
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