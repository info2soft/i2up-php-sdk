<?php
namespace i2up\Test\v20240819\vpRecoveryRule;

use i2up\vpRecoveryRule\v20240819\VpRecoveryRule;
use i2up\common\Auth;
                
class VpRecoveryRuleTest extends \PHPUnit_Framework_TestCase
 {
    private $vpRecoveryRule;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> vpRecoveryRule = new VpRecoveryRule(new Auth());
    }

    public function testCreateVpRecovery()
    {
        $vpRecoveryRule = $this -> vpRecoveryRule;
        $arr = array(
            'task_name'=>'',
            'task_type'=>1,
            'auto_start'=>1,
            'start_time'=>1,
            'priority'=>1,
            'biz_grp_list'=>array(),
            'bk_set_uuids'=>array(),
            'vp_uuid'=>'',
            'new_dc'=>'',
            'new_dc_mor'=>'',
            'new_hostname'=>'',
            'new_resource_pool_id'=>'',
            'new_resource_pool_name'=>'',
            'location'=>'',
            'location_name'=>'',
            'new_ds'=>'',
            'network_id'=>'',
            'network_name'=>'',
            'vm_list'=>array(
            '0'=>array(
            'vm_name'=>'',
            'vm_ref'=>'',
            'new_vm_name'=>'',
            'bk_set_uuid'=>'',
            'common_custom'=>1,
            'disk_custom'=>1,
            'disk_list'=>array(
            '0'=>array(
            'id'=>'',
            'disk_path'=>'',
            'disk_name'=>'',
            'is_same'=>1,
            'new_ds'=>'',
            'boot_index'=>1,
            'disk_type'=>'',
            'datastore_type'=>'',
            'src_disk_name'=>'',
            'is_ignored'=>'',
            'disk_provision_type'=>1,
            'replica_num'=>'',
            'cache'=>1,),),
            'networks'=>array(
            '0'=>array(
            'source_network_name'=>'',
            'source_network_id'=>'',
            'mac_address'=>'',
            'keep_mac'=>1,
            'network_name'=>'',
            'network_id'=>'',
            'ip_address'=>'',
            'source_physical_interface_id'=>'',
            'source_physical_interface_name'=>'',
            'physical_interface_id'=>'',
            'physical_interface_name'=>'',
            'network_type'=>'',
            'vpc_id'=>'',),),
            'cpu'=>1,
            'core_per_sock'=>1,
            'mem_mb'=>1,
            'dynamic_mem'=>1,
            'flavor_id'=>'',
            'start_order'=>0,
            'archtype'=>'',
            'machine'=>'',
            'new_vm_sec_grp_id'=>'',
            'new_vm_vpc_id'=>'',
            'bk_crypt_type'=>1,
            'bk_crypt_key'=>'',
            'flavor_name'=>'',),),
            'auto_startup'=>1,
            'dest_trans_mode'=>31,
            'concurrent_disk_threads'=>2,
            'compress_switch'=>1,
            'compress'=>1,
            'band_width'=>'',
            'new_vp_uuid'=>'',
            'npsvr_uuid'=>'',
            'new_ds_path'=>'',
            'api_type'=>'',
            'is_create'=>0,
            'is_start_order'=>1,
            'is_fusion_storage'=>1,
            'driver_injection'=>1,
            'driver_injection_policy'=>0,
            'parent_flavor_id'=>'',
            'ip_address'=>'',
            'target_region_id'=>'',
            'target_project_id'=>'',
            'winstack_pool_id'=>'',
            'winstack_host_id'=>'',
            'new_machine'=>'',
            'new_archtype'=>'',
            'new_host_id'=>'',
            'physical_interface_id'=>'',
            'physical_interface_name'=>'',
            'new_sec_grp_id'=>'',
            'trans_type'=>'',
            'cred_uuid'=>'',
            'target_availability_zone'=>'',
            'new_vpc_id'=>'',
            'agent_uuid'=>'',
            'trans_port'=>1,
            'encrypt_switch'=>0,
            'tgt_uuid'=>'',
            'tgt_path'=>'',
            'files'=>'',
            'encrypt'=>1,
            'source_project_id'=>'',
            'source_region_id'=>'',
            'vm_name'=>'',
            'vm_ref'=>'',
            'target_project_name'=>'',
            'target_region_name'=>'',
            'source_project_name'=>'',
            'source_region_name'=>'',
            'parent_flavor_name'=>'',
            'backup_chain_policy'=>1,
            'bk_server_addr'=>'',
            'bk_server_uuid'=>'',
            'new_cluster_id'=>'',
            'network_type'=>'',
            'vpc_id'=>'',
        );
        
        
        $res = $vpRecoveryRule -> createVpRecovery($arr);
        $this->do_assert($res);
    }

    public function testModifyVpRecoveryRule()
    {
        $vpRecoveryRule = $this -> vpRecoveryRule;
        $arr = array(
            'task_name'=>'',
            'task_type'=>1,
            'auto_start'=>1,
            'start_time'=>1,
            'priority'=>'',
            'biz_grp_list'=>array(),
            'bk_set_uuids'=>array(),
            'vp_uuid'=>'',
            'new_dc'=>'',
            'new_dc_mor'=>'',
            'new_hostname'=>'',
            'new_resource_pool_id'=>'',
            'new_resource_pool_name'=>'',
            'location'=>'',
            'location_name'=>'',
            'new_ds'=>'',
            'network_id'=>'',
            'network_name'=>'',
            'vm_list'=>array(
            '0'=>array(
            'vm_name'=>'',
            'vm_ref'=>'',
            'new_vm_name'=>'',
            'bk_set_uuid'=>'',
            'bk_start_tm'=>'',
            'bk_type'=>1,
            'encrypt_type'=>1,
            'encrypt_key'=>'',
            'common_custom'=>1,
            'disk_custom'=>1,
            'disk_list'=>array(
            '0'=>array(
            'id'=>'',
            'disk_path'=>'',
            'disk_name'=>'',
            'is_same'=>1,
            'new_ds'=>'',
            'boot_index'=>1,
            'disk_type'=>'',
            'datastore_type'=>'',
            'src_disk_name'=>'',
            'is_ignored'=>'',),),
            'networks'=>array(
            '0'=>array(
            'source_network_name'=>'',
            'source_network_id'=>'',
            'mac_address'=>'',
            'keep_mac'=>1,
            'network_name'=>'',
            'network_id'=>'',
            'ip_address'=>'',
            'source_physical_interface_id'=>'',
            'source_physical_interface_name'=>'',
            'physical_interface_id'=>'',
            'physical_interface_name'=>'',),),
            'cpu'=>1,
            'core_per_sock'=>1,
            'mem_mb'=>1,
            'dynamic_mem'=>1,
            'flavor_id'=>'',
            'start_order'=>0,
            'archtype'=>'',
            'machine'=>'',
            'new_vm_sec_grp_id'=>'',
            'new_vm_vpc_id'=>'',),),
            'auto_startup'=>'',
            'dest_trans_mode'=>31,
            'concurrent_disk_threads'=>2,
            'compress_switch'=>1,
            'compress'=>1,
            'band_width'=>'',
            'new_vp_uuid'=>'',
            'npsvr_uuid'=>'',
            'tgt_uuid'=>'',
            'files'=>array(),
            'tgt_path'=>'',
            'random_str'=>'',
            'attach_path'=>'',
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $vpRecoveryRule -> modifyVpRecoveryRule($arr);
        $this->do_assert($res);
    }

    public function testListVpRecoveryRule()
    {
        $vpRecoveryRule = $this -> vpRecoveryRule;
        $arr = array(
            'page'=>1,
            'limit'=>1,
            'vm_name'=>'',
            'filter_by_biz_grp'=>1,
            'where_args'=>array(
            'task_uuid'=>'',
            'task_type'=>1,
            'new_vp_type'=>1,
            'status'=>'',),
            'like_args'=>array(
            'new_vp_name'=>'',
            'task_name'=>'',),
        );
        
        
        $res = $vpRecoveryRule -> listVpRecoveryRule($arr);
        $this->do_assert($res);
    }

    public function testDescribeVpRecoveryRule()
    {
        $vpRecoveryRule = $this -> vpRecoveryRule;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $vpRecoveryRule -> describeVpRecoveryRule($arr);
        $this->do_assert($res);
    }

    public function testDeleteVpRecoveryRule()
    {
        $vpRecoveryRule = $this -> vpRecoveryRule;
        $arr = array(
            'task_uuids'=>array(),
            'force'=>1,
        );
        
        
        $res = $vpRecoveryRule -> deleteVpRecoveryRule($arr);
        $this->do_assert($res);
    }

    public function testOperateVpRecoveryRule()
    {
        $vpRecoveryRule = $this -> vpRecoveryRule;
        $arr = array(
            'operate'=>'',
            'task_uuids'=>array(),
        );
        
        
        $res = $vpRecoveryRule -> operateVpRecoveryRule($arr);
        $this->do_assert($res);
    }

    public function testListVpRecoveryRuleStatus()
    {
        $vpRecoveryRule = $this -> vpRecoveryRule;
        $arr = array(
            'task_uuids'=>array(),
        );
        
        
        $res = $vpRecoveryRule -> listVpRecoveryRuleStatus($arr);
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