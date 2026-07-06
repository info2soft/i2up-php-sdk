<?php
namespace i2up\Test\v20260626\guardData;

use i2up\guardData\v20260626\GuardData;
use i2up\common\Auth;
use PHPUnit\Framework\TestCase;
                
class GuardDataTest extends TestCase
 {
    private $guardData;
    
    public function setUp():void
    {
        parent::setup();
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

    public function testSyncGuardDataPolicies()
    {
        $guardData = $this -> guardData;
        $arr = array(
            'node_uuid'=>'',
        );
        
        
        $res = $guardData -> syncGuardDataPolicies($arr);
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
            'node_uuid'=>'',
            'policy_name'=>'',
            'subject'=>'',
            'object'=>'',
            'operate'=>1,
            'decision'=>1,
            'policy_type'=>1,
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $guardData -> modifyGuardData($arr);
        $this->do_assert($res);
    }

    public function testDeleteGuardData()
    {
        $guardData = $this -> guardData;
        $arr = array(
            'policy_uuids'=>array(),
        );
        
        
        $res = $guardData -> deleteGuardData($arr);
        $this->do_assert($res);
    }

    public function testListNodeStatus()
    {
        $guardData = $this -> guardData;
        $arr = array(
            'node_uuids'=>array(),
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