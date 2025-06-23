<?php
namespace i2up\Test\v20250630\recovery;

use i2up\recovery\v20250630\Recovery;
use i2up\common\Auth;
                
class RecoveryTest extends \PHPUnit_Framework_TestCase
 {
    private $recovery;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> recovery = new Recovery(new Auth());
    }

    public function testRecoveryList()
    {
        $recovery = $this -> recovery;
        $arr = array(
            'limit'=>1,
            'page'=>1,
            'type'=>1,
            'search_field'=>'',
            'search_value'=>'',
            'wk_status_filter'=>'',
            'tgt_status_filter'=>'',
            'failback_status_filter'=>1,
        );
        
        
        $res = $recovery -> recoveryList($arr);
        $this->do_assert($res);
    }

    public function testRecoveryStatus()
    {
        $recovery = $this -> recovery;
        $arr = array(
            'rule_uuids'=>array(),
        );
        
        
        $res = $recovery -> recoveryStatus($arr);
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