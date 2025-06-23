<?php
namespace i2up\Test\v20250630\fullMachineCopy;

use i2up\fullMachineCopy\v20250630\FullMachineCopy;
use i2up\common\Auth;
                
class FullMachineCopyTest extends \PHPUnit_Framework_TestCase
 {
    private $fullMachineCopy;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> fullMachineCopy = new FullMachineCopy(new Auth());
    }

    public function testCreateFullMachineCopy()
    {
        $fullMachineCopy = $this -> fullMachineCopy;
        $arr = array(
            'fsp_backup'=>array(
            'fsp_type'=>21,
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
            'dynamic_mem'=>'',
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
            'is_defroute'=>false,
            'selected'=>true,),),
            'new_vm_hostname'=>'',),),
            'create_vm_type'=>1,),
            'fsp_name'=>'',
            'bk_data_type'=>21,
            'wk_data_type'=>0,
            'auto_register'=>1,
            'node_name'=>'',
            'node_lic_list'=>array(),
            'node_cache_path'=>'',
            'node_log_path'=>'',),
        );
        
        
        $res = $fullMachineCopy -> createFullMachineCopy($arr);
        $this->do_assert($res);
    }

    public function testModifyFullMachineCopy()
    {
        $fullMachineCopy = $this -> fullMachineCopy;
        $arr = array(
            'fsp_backup'=>array(
            'fsp_type'=>21,
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
            'dynamic_mem'=>'',
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
            'auto_register'=>1,
            'node_name'=>'',
            'random_str'=>'',),
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $fullMachineCopy -> modifyFullMachineCopy($arr);
        $this->do_assert($res);
    }

    public function testDeleteFullMachineCopy()
    {
        $fullMachineCopy = $this -> fullMachineCopy;
        $arr = array(
            'fsp_uuids'=>array(),
            'force'=>1,
            'del_policy'=>'',
        );
        
        
        $res = $fullMachineCopy -> deleteFullMachineCopy($arr);
        $this->do_assert($res);
    }

    public function testDescribeFullMachineCopy()
    {
        $fullMachineCopy = $this -> fullMachineCopy;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $fullMachineCopy -> describeFullMachineCopy($arr);
        $this->do_assert($res);
    }

    public function testListFullMachineCopy()
    {
        $fullMachineCopy = $this -> fullMachineCopy;
        $arr = array(
            'search_field'=>'',
            'limit'=>10,
            'page'=>1,
            'search_value'=>'',
        );
        
        
        $res = $fullMachineCopy -> listFullMachineCopy($arr);
        $this->do_assert($res);
    }

    public function testListFullMachineCopyStatus()
    {
        $fullMachineCopy = $this -> fullMachineCopy;
        $arr = array(
            'fsp_uuids'=>array(),
            'force_refresh'=>0,
        );
        
        
        $res = $fullMachineCopy -> listFullMachineCopyStatus($arr);
        $this->do_assert($res);
    }

    public function testStartFullMachineCopy()
    {
        $fullMachineCopy = $this -> fullMachineCopy;
        $arr = array(
            'fsp_uuids'=>array(),
            'operate'=>'',
        );
        
        
        $res = $fullMachineCopy -> startFullMachineCopy($arr);
        $this->do_assert($res);
    }

    public function testStopFullMachineCopy()
    {
        $fullMachineCopy = $this -> fullMachineCopy;
        $arr = array(
            'fsp_uuids'=>array(),
            'operate'=>'',
        );
        
        
        $res = $fullMachineCopy -> stopFullMachineCopy($arr);
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