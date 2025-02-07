<?php
namespace i2up\Test\v20250123\replica;

use i2up\replica\v20250123\Second;
use i2up\common\Auth;
                
class SecondTest extends \PHPUnit_Framework_TestCase
 {
    private $second;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> second = new Second(new Auth());
    }

    public function testCreateSecondReplica()
    {
        $second = $this -> second;
        $arr = array(
            'fsp_backup'=>array(
            'fsp_type'=>22,
            'wk_uuid'=>'',
            'bk_uuid'=>'',
            'data_ip_uuid'=>'',
            'timeout'=>0,
            'wk_path'=>array(),
            'bk_path'=>array(),
            'resource_settings'=>array(
            'tgt_uuid'=>'',
            'new_dc'=>'',
            'new_host'=>'',
            'new_ds'=>'',
            'new_dc_mor'=>'',
            'vm_list'=>array(
            '0'=>array(
            'disk_list'=>array(
            '0'=>array(
            'boot_index'=>'',
            'file_name'=>'',
            'new_ds'=>'',
            'size'=>'',
            'is_ignored'=>'',
            'disk_name'=>'',
            'disk_path'=>'',
            'id'=>'',
            'disk_provision_type'=>1,),),
            'vm_name'=>'',
            'new_vm_name'=>'',
            'custom_config'=>1,
            'cpu'=>'',
            'core_per_sock'=>'',
            'mem_mb'=>'',
            'dynamic_mem'=>'0',
            'networks'=>array(
            '0'=>array(
            'source_network_name'=>'',
            'mac_address'=>'',
            'keep_mac'=>'',
            'network_id'=>'',
            'network_name'=>'',
            'subnet_name'=>'',
            'auto_ip'=>false,
            'ip'=>'',
            'security_group_name'=>'',
            'gateway'=>'',
            'is_defroute'=>false,),),
            'new_vm_hostname'=>'',),),
            'create_vm_type'=>1,),
            'fsp_name'=>'',
            'bk_data_type'=>21,
            'wk_data_type'=>0,
            'auto_register'=>0,
            'node_name'=>'',
            'node_lic_list'=>array(),),
        );
        
        
        $res = $second -> createSecondReplica($arr);
        $this->do_assert($res);
    }

    public function testListSecondReplica()
    {
        $second = $this -> second;
        $arr = array(
            'page'=>1,
            'limit'=>1,
        );
        
        
        $res = $second -> listSecondReplica($arr);
        $this->do_assert($res);
    }

    public function testDescribeSecondReplica()
    {
        $second = $this -> second;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $second -> describeSecondReplica($arr);
        $this->do_assert($res);
    }

    public function testModifySecondReplica()
    {
        $second = $this -> second;
        $arr = array(
            'fsp_backup'=>array(
            'fsp_type'=>22,
            'wk_uuid'=>'',
            'bk_uuid'=>'',
            'data_ip_uuid'=>'',
            'timeout'=>0,
            'wk_path'=>array(),
            'bk_path'=>array(),
            'resource_settings'=>array(
            'tgt_uuid'=>'',
            'new_dc'=>'',
            'new_host'=>'',
            'new_ds'=>'',
            'new_dc_mor'=>'',
            'vm_list'=>array(
            '0'=>array(
            'disk_list'=>array(
            '0'=>array(
            'boot_index'=>'',
            'file_name'=>'',
            'new_ds'=>'',
            'size'=>'',
            'is_ignored'=>'',
            'disk_name'=>'',
            'disk_path'=>'',
            'id'=>'',
            'disk_provision_type'=>1,),),
            'vm_name'=>'',
            'new_vm_name'=>'',
            'custom_config'=>1,
            'cpu'=>'',
            'core_per_sock'=>'',
            'mem_mb'=>'',
            'dynamic_mem'=>'0',
            'networks'=>array(
            '0'=>array(
            'source_network_name'=>'',
            'mac_address'=>'',
            'keep_mac'=>'',
            'network_id'=>'',
            'network_name'=>'',
            'subnet_name'=>'',
            'auto_ip'=>false,
            'ip'=>'',
            'security_group_name'=>'',
            'gateway'=>'',
            'is_defroute'=>false,),),),),),
            'fsp_name'=>'',
            'bk_data_type'=>21,
            'wk_data_type'=>0,
            'auto_register'=>0,
            'node_name'=>'',
            'node_lic_list'=>array(),),
        );
        
        
        $res = $second -> modifySecondReplica($arr);
        $this->do_assert($res);
    }

    public function testStartSecondReplica()
    {
        $second = $this -> second;
        $arr = array(
            'operate'=>'',
            'fsp_uuids'=>array(),
        );
        
        
        $res = $second -> startSecondReplica($arr);
        $this->do_assert($res);
    }

    public function testStopSecondReplica()
    {
        $second = $this -> second;
        $arr = array(
            'operate'=>'',
            'fsp_uuids'=>array(),
        );
        
        
        $res = $second -> stopSecondReplica($arr);
        $this->do_assert($res);
    }

    public function testStartVmSecondReplica()
    {
        $second = $this -> second;
        $arr = array(
            'operate'=>'',
            'fsp_uuids'=>array(),
        );
        
        
        $res = $second -> startVmSecondReplica($arr);
        $this->do_assert($res);
    }

    public function testStopVmSecondReplica()
    {
        $second = $this -> second;
        $arr = array(
            'operate'=>'',
            'fsp_uuids'=>array(),
        );
        
        
        $res = $second -> stopVmSecondReplica($arr);
        $this->do_assert($res);
    }

    public function testDeleteSecondReplica()
    {
        $second = $this -> second;
        $arr = array(
            'fsp_uuids'=>array(),
            'del_policy'=>1,
            'force'=>1,
        );
        
        
        $res = $second -> deleteSecondReplica($arr);
        $this->do_assert($res);
    }

    public function testListSecondReplicaStatus()
    {
        $second = $this -> second;
        $arr = array(
            'fsp_uuids'=>array(),
            'force_refresh'=>1,
        );
        
        
        $res = $second -> listSecondReplicaStatus($arr);
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