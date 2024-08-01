<?php
namespace i2up\Test\v20240228\recovery;

use i2up\recovery\v20240228\Recovery;
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
            'rule_uuids'=>array('11111111-1111-1111-1111-111111111111'),
        );
        $res = $recovery -> recoveryStatus($arr);
        $this->do_assert($res);
    }

    private function do_assert($res)
    {
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}