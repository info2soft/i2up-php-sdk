<?php
namespace i2up\Test\v20260626\machineRecovery;

use i2up\machineRecovery\v20260626\MachineRecovery;
use i2up\common\Auth;
use PHPUnit\Framework\TestCase;
                
class MachineRecoveryTest extends TestCase
 {
    private $machineRecovery;
    
    public function setUp():void
    {
        parent::setup();
        $this -> machineRecovery = new MachineRecovery(new Auth());
    }

    public function testCreateMachineRecovery()
    {
        $machineRecovery = $this -> machineRecovery;
        $arr = array(
            'rule_name'=>'',
            'vp_uuid'=>'',
            'bk_uuid'=>'',
            'src_path'=>array(),
            'dst_path'=>array(),
            'bk_point_info'=>array(),
            'data_ip_uuid'=>'',
            'wk_uuid'=>'',
            'compress_switch'=>1,
            'compress_type'=>'',
            'encrypt_switch'=>1,
            'encrypt_type'=>'',
            'version_time'=>'',
        );
        
        
        $res = $machineRecovery -> createMachineRecovery($arr);
        $this->do_assert($res);
    }

    public function testListMachineRecovery()
    {
        $machineRecovery = $this -> machineRecovery;
        $arr = array(
            'page'=>1,
            'limit'=>1,
        );
        
        
        $res = $machineRecovery -> listMachineRecovery($arr);
        $this->do_assert($res);
    }

    public function testDescribeMachineRecovery()
    {
        $machineRecovery = $this -> machineRecovery;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $machineRecovery -> describeMachineRecovery($arr);
        $this->do_assert($res);
    }

    public function testModifyMachineRecovery()
    {
        $machineRecovery = $this -> machineRecovery;
        $arr = array(
            'random_str'=>'',
            'rule_name'=>'',
            'vp_uuid'=>'',
            'bk_uuid'=>'',
            'src_path'=>array(),
            'dst_path'=>array(),
            'bk_point_info'=>array(),
            'data_ip_uuid'=>'',
            'wk_uuid'=>'',
            'compress_switch'=>1,
            'compress_type'=>'',
            'encrypt_switch'=>1,
            'encrypt_type'=>'',
            'version_time'=>'',
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $machineRecovery -> modifyMachineRecovery($arr);
        $this->do_assert($res);
    }

    public function testDeleteMachineRecovery()
    {
        $machineRecovery = $this -> machineRecovery;
        $arr = array(
            'rule_uuids'=>1,
            'force'=>1,
        );
        
        
        $res = $machineRecovery -> deleteMachineRecovery($arr);
        $this->do_assert($res);
    }

    public function testStartMachineRecovery()
    {
        $machineRecovery = $this -> machineRecovery;
        $arr = array(
            'rule_uuids'=>array(),
            'operate'=>'',
        );
        
        
        $res = $machineRecovery -> startMachineRecovery($arr);
        $this->do_assert($res);
    }

    public function testStopMachineRecovery()
    {
        $machineRecovery = $this -> machineRecovery;
        $arr = array(
            'rule_uuids'=>array(),
            'operate'=>'',
        );
        
        
        $res = $machineRecovery -> stopMachineRecovery($arr);
        $this->do_assert($res);
    }

    public function testRebootMachineRecovery()
    {
        $machineRecovery = $this -> machineRecovery;
        $arr = array(
            'rule_uuids'=>array(),
            'operate'=>'',
        );
        
        
        $res = $machineRecovery -> rebootMachineRecovery($arr);
        $this->do_assert($res);
    }

    public function testListMachineRecoveryStatus()
    {
        $machineRecovery = $this -> machineRecovery;
        $arr = array(
            'rule_uuids'=>1,
            'force_refresh'=>'',
        );
        
        
        $res = $machineRecovery -> listMachineRecoveryStatus($arr);
        $this->do_assert($res);
    }

    public function testListBkPointListByPlatform()
    {
        $machineRecovery = $this -> machineRecovery;
        $arr = array(
            'vp_uuid'=>'',
        );
        
        
        $res = $machineRecovery -> listBkPointListByPlatform($arr);
        $this->do_assert($res);
    }

    public function testDescribeBkPointInfo()
    {
        $machineRecovery = $this -> machineRecovery;
        $arr = array(
            'version_time'=>'',
            'vp_uuid'=>'',
            'rule_uuid'=>'',
            'vm_id'=>'',
        );
        
        
        $res = $machineRecovery -> describeBkPointInfo($arr);
        $this->do_assert($res);
    }

    public function testVerifyEnvironment()
    {
        $machineRecovery = $this -> machineRecovery;
        $arr = array(
            'wk_uuid'=>'',
            'dst_path'=>array(),
        );
        
        
        $res = $machineRecovery -> verifyEnvironment($arr);
        $this->do_assert($res);
    }

    public function testVerifyVolumeSpace()
    {
        $machineRecovery = $this -> machineRecovery;
        $arr = array(
            'vp_uuid'=>'',
            'vm_id'=>'',
            'src_path'=>array(),
            'rule_uuid'=>'',
            'version_time'=>'',
            'wk_uuid'=>'',
            'dst_path'=>array(),
        );
        
        
        $res = $machineRecovery -> verifyVolumeSpace($arr);
        $this->do_assert($res);
    }

    public function testVerifyOldRule()
    {
        $machineRecovery = $this -> machineRecovery;
        $arr = array(
            'wk_uuid'=>'',
        );
        
        
        $res = $machineRecovery -> verifyOldRule($arr);
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