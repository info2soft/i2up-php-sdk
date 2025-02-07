<?php
namespace i2up\Test\v20250123\retentionPolicy;

use i2up\retentionPolicy\v20250123\RetentionPolicy;
use i2up\common\Auth;
                
class RetentionPolicyTest extends \PHPUnit_Framework_TestCase
 {
    private $retentionPolicy;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
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