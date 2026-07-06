<?php
namespace i2up\Test\v20260626\vmRecovery;

use i2up\vmRecovery\v20260626\VmRecovery;
use i2up\common\Auth;
use PHPUnit\Framework\TestCase;
                
class VmRecoveryTest extends TestCase
 {
    private $vmRecovery;
    
    public function setUp():void
    {
        parent::setup();
        $this -> vmRecovery = new VmRecovery(new Auth());
    }

    public function testCreateVmRecovery()
    {
        $vmRecovery = $this -> vmRecovery;
        $arr = array(
            'rule_name'=>'',
            'vp_uuid'=>'',
            'version_time'=>'',
            'bk_point_info'=>array(),
            'bk_uuid'=>'',
            'data_ip_uuid'=>'',
            'new_vp_uuid'=>'',
            'new_dc'=>'',
            'new_dc_mor'=>'',
            'new_ds'=>'',
            'vm_name'=>'',
            'new_vm_name'=>'',
            'vm_ref'=>'',
            'auto_startup'=>1,
            'mem_mb'=>1,
            'cpu'=>1,
            'core_per_sock'=>1,
            'networks'=>array(
            '0'=>array(
            'source_network_name'=>'',
            'source_network_id'=>'',
            'mac_address'=>'',
            'keep_mac'=>1,
            'network_id'=>'',
            'network_name'=>'',
            'custom_ip'=>1,
            'ip'=>'',
            'mask'=>'',
            'gateway'=>'',
            'subnet_name'=>'',
            'security_group_name'=>'',
            'is_defroute'=>false,
            'dns'=>'',),),
            'disk_list'=>array(
            '0'=>array(
            'id'=>'',
            'disk_dir'=>'',
            'disk_name'=>'',
            'size'=>'',
            'datastore'=>'',
            'new_ds'=>'',
            'is_ignored'=>1,
            'boot_index'=>1,),),
            'vp_type'=>1,
            'new_host'=>'',
            'create_vm_type'=>1,
            'agent_data_ip_uuid'=>'',
            'agent_uuid'=>'',
            'is_set'=>1,
        );
        
        
        $res = $vmRecovery -> createVmRecovery($arr);
        $this->do_assert($res);
    }

    public function testModifyVmRecovery()
    {
        $vmRecovery = $this -> vmRecovery;
        $arr = array(
            'rule_name'=>'',
            'vp_uuid'=>'',
            'version_time'=>'',
            'bk_point_info'=>array(),
            'bk_uuid'=>'',
            'data_ip_uuid'=>'',
            'new_vp_uuid'=>'',
            'new_dc'=>'',
            'new_dc_mor'=>'',
            'new_ds'=>'',
            'vm_name'=>'',
            'new_vm_name'=>'',
            'vm_ref'=>'',
            'auto_startup'=>1,
            'mem_mb'=>1,
            'cpu'=>1,
            'core_per_sock'=>1,
            'networks'=>array(
            '0'=>array(
            'source_network_name'=>'',
            'source_network_id'=>'',
            'mac_address'=>'',
            'keep_mac'=>1,
            'network_id'=>'',
            'network_name'=>'',
            'custom_ip'=>1,
            'ip'=>'',
            'mask'=>'',
            'gateway'=>'',
            'subnet_name'=>'',
            'security_group_name'=>'',
            'is_defroute'=>false,
            'dns'=>'',),),
            'disk_list'=>array(
            '0'=>array(
            'id'=>'',
            'disk_dir'=>'',
            'disk_name'=>'',
            'size'=>'',
            'datastore'=>'',
            'new_ds'=>'',
            'is_ignored'=>1,
            'boot_index'=>1,),),
            'vp_type'=>1,
            'new_host'=>'',
            'create_vm_type'=>1,
            'agent_data_ip_uuid'=>'',
            'agent_uuid'=>'',
            'random_str'=>'',
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $vmRecovery -> modifyVmRecovery($arr);
        $this->do_assert($res);
    }

    public function testListVmRecovery()
    {
        $vmRecovery = $this -> vmRecovery;
        $arr = array(
            'page'=>1,
            'limit'=>1,
        );
        
        
        $res = $vmRecovery -> listVmRecovery($arr);
        $this->do_assert($res);
    }

    public function testDescribeVmRecovery()
    {
        $vmRecovery = $this -> vmRecovery;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $vmRecovery -> describeVmRecovery($arr);
        $this->do_assert($res);
    }

    public function testDeleteVmRecovery()
    {
        $vmRecovery = $this -> vmRecovery;
        $arr = array(
            'rule_uuids'=>array(),
            'force'=>1,
            'delete_tgtvm'=>1,
        );
        
        
        $res = $vmRecovery -> deleteVmRecovery($arr);
        $this->do_assert($res);
    }

    public function testStartVmRecovery()
    {
        $vmRecovery = $this -> vmRecovery;
        $arr = array(
            'rule_uuids'=>array(),
            'operate'=>'',
        );
        
        
        $res = $vmRecovery -> startVmRecovery($arr);
        $this->do_assert($res);
    }

    public function testStopVmRecovery()
    {
        $vmRecovery = $this -> vmRecovery;
        $arr = array(
            'rule_uuids'=>array(),
            'operate'=>'',
        );
        
        
        $res = $vmRecovery -> stopVmRecovery($arr);
        $this->do_assert($res);
    }

    public function testListVmRecoveryStatus()
    {
        $vmRecovery = $this -> vmRecovery;
        $arr = array(
            'rule_uuids'=>array(),
            'force_refresh'=>'',
        );
        
        
        $res = $vmRecovery -> listVmRecoveryStatus($arr);
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