<?php
namespace i2up\Test\v20240228\guardData;

use i2up\guardData\v20240228\GuardData;
use i2up\common\Auth;
                
class GuardDataTest extends \PHPUnit_Framework_TestCase
 {
    private $guardData;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> guardData = new GuardData(new Auth());
    }

    public function testNodeGuardDataEnabled()
    {
        $guardData = $this -> guardData;
        $arr = array(
            'config_addr'=>'',
            'config_port'=>1,
        );
        $res = $guardData -> nodeGuardDataEnabled($arr);
        $this->do_assert($res);
    }

    public function testListGuardData()
    {
        $guardData = $this -> guardData;
        $arr = array(
            'node_uuid'=>'',
        );
        $res = $guardData -> listGuardData($arr);
        $this->do_assert($res);
    }

    public function testCreateGuardData()
    {
        $guardData = $this -> guardData;
        $arr = array(
            'node_uuid'=>'',
            'policy_name'=>'',
            'subject'=>'',
            'object'=>'',
            'operate'=>1,
            'decision'=>1,
            'policy_type'=>0,
        );
        $res = $guardData -> createGuardData($arr);
        $this->do_assert($res);
    }

    public function testModifyGuardData()
    {
        $guardData = $this -> guardData;
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111',
            'node_uuid'=>'',
            'policy_name'=>'',
            'subject'=>'',
            'object'=>'',
            'operate'=>1,
            'decision'=>1,
            'policy_type'=>1,
        );
        $res = $guardData -> modifyGuardData($arr);
        $this->do_assert($res);
    }

    public function testDeleteGuardData()
    {
        $guardData = $this -> guardData;
        $arr = array(
            'policy_uuids'=>array('11111111-1111-1111-1111-111111111111'),
        );
        $res = $guardData -> deleteGuardData($arr);
        $this->do_assert($res);
    }

    public function testListNodeStatus()
    {
        $guardData = $this -> guardData;
        $arr = array(
            'node_uuids'=>array('11111111-1111-1111-1111-111111111111'),
        );
        $res = $guardData -> listNodeStatus($arr);
        $this->do_assert($res);
    }

    public function testListGuardDataLogs()
    {
        $guardData = $this -> guardData;
        $arr = array(
            'node_uuid'=>'',
            'page'=>1,
            'limit'=>1,
            'start'=>0,
            'end'=>0,
        );
        $res = $guardData -> listGuardDataLogs($arr);
        $this->do_assert($res);
    }

    public function testThreatPerception()
    {
        $guardData = $this -> guardData;
        $arr = array(
            'node_uuid'=>'',
            'start'=>1,
            'end'=>1,
        );
        $res = $guardData -> threatPerception($arr);
        $this->do_assert($res);
    }

    private function do_assert($res)
    {
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}