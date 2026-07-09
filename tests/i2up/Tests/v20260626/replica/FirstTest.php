<?php
namespace i2up\Test\v20260626\replica;

use i2up\replica\v20260626\First;
use i2up\common\Auth;
use PHPUnit\Framework\TestCase;
                
class FirstTest extends TestCase
 {
    private $first;
    
    public function setUp():void
    {
        parent::setup();
        $this -> first = new First(new Auth());
    }

    public function testCreateFirstReplica()
    {
        $first = $this -> first;
        $arr = array(
            'rule_name'=>'',
            'rule_type'=>0,
            'vp_uuid'=>'',
            'auto'=>0,
            'vm_list'=>array(
            '0'=>array(
            'new_vm_name'=>'',
            'vm_ref'=>'',
            'cpu'=>1,
            'ver_sig'=>'',
            'core_per_sock'=>1,
            'mem_mb'=>1024,
            'scripts'=>'',
            'bk_uuid'=>'',
            'bk_path'=>'',
            'time'=>'',
            'original_rule_uuid'=>'',
            'scripts_type'=>0,
            'os_type'=>1,
            'wk_uuid'=>'',
            'src_uuid'=>'',
            'data_ip_uuid'=>'',
            'bk_type'=>0,
            'bucket_'=>'',
            'sto_uuid'=>'',
            'bucket_path'=>'',
            'disk_list'=>array(
            '0'=>array(
            'datastore'=>'',
            'new_ds'=>'',
            'is_ignored'=>1,
            'size'=>'',
            'boot_index'=>1,
            'disk_dir'=>'',
            'disk_name'=>'',
            'id'=>'',),),
            'networks'=>array(
            '0'=>array(
            'source_network_name'=>'',
            'source_network_id'=>'',
            'mac_address'=>'',
            'keep_mac'=>'',
            'network_id'=>'',
            'network_name'=>'',
            'ip_address'=>'',
            'subnet_name'=>'',
            'auto_ip'=>true,
            'ip'=>'',
            'security_group_name'=>'',
            'gateway'=>'',
            'is_defroute'=>false,),),
            'new_flavor_id'=>'',
            'vm_name'=>'',
            'new_vm_hostname'=>'',),),
            'quick_back'=>1,
            'backup_type'=>'i',
            'lan_free'=>23,
            'del_bkup_data'=>0,
            'automate'=>0,
            'auto_shutdown'=>1,
            'bkup_policy'=>1,
            'bkup_schedule'=>array(
            'sched_time_start'=>'0',
            'limit'=>0,
            'sched_day'=>6,
            'sched_every'=>0,
            'sched_time'=>array(),
            'sched_gap_min'=>0,),
            'new_network_id'=>'',
            'new_network_name'=>'',
            'datastore'=>'',
            'hostname'=>'',
            'datacenter'=>'',
            'create_vm_type'=>1,
        );
        
        
        $res = $first -> createFirstReplica($arr);
        $this->do_assert($res);
    }

    public function testListFirstReplica()
    {
        $first = $this -> first;
        $arr = array(
            'page'=>1,
            'limit'=>1,
        );
        
        
        $res = $first -> listFirstReplica($arr);
        $this->do_assert($res);
    }

    public function testDescribeFirstReplica()
    {
        $first = $this -> first;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $first -> describeFirstReplica($arr);
        $this->do_assert($res);
    }

    public function testModifyFirstReplica()
    {
        $first = $this -> first;
        $arr = array(
            'rule_name'=>'',
            'rule_type'=>0,
            'vp_uuid'=>'',
            'auto'=>0,
            'vm_list'=>array(
            '0'=>array(
            'new_vm_name'=>'',
            'vm_ref'=>'',
            'cpu'=>1,
            'ver_sig'=>'',
            'core_per_sock'=>1,
            'mem_mb'=>1024,
            'scripts'=>'',
            'bk_uuid'=>'',
            'bk_path'=>'',
            'time'=>'',
            'original_rule_uuid'=>'',
            'scripts_type'=>0,
            'os_type'=>1,
            'wk_uuid'=>'',
            'src_uuid'=>'',
            'data_ip_uuid'=>'',
            'bk_type'=>0,
            'bucket_'=>'',
            'sto_uuid'=>'',
            'bucket_path'=>'',
            'disk_list'=>array(
            '0'=>array(
            'datastore'=>'',
            'new_ds'=>'',
            'is_ignored'=>1,
            'size'=>'',
            'boot_index'=>1,
            'disk_dir'=>'',
            'disk_name'=>'',
            'id'=>'',),),
            'networks'=>array(
            '0'=>array(
            'source_network_name'=>'',
            'source_network_id'=>'',
            'mac_address'=>'',
            'keep_mac'=>'',
            'network_id'=>'',
            'network_name'=>'',
            'ip_address'=>'',
            'subnet_name'=>'',
            'auto_ip'=>true,
            'ip'=>'',
            'security_group_name'=>'',
            'gateway'=>'',
            'is_defroute'=>false,),),
            'new_flavor_id'=>'',
            'vm_name'=>'',),),
            'quick_back'=>1,
            'backup_type'=>'i',
            'lan_free'=>23,
            'del_bkup_data'=>0,
            'automate'=>0,
            'auto_shutdown'=>1,
            'bkup_policy'=>1,
            'bkup_schedule'=>array(
            'sched_time_start'=>'0',
            'limit'=>0,
            'sched_day'=>6,
            'sched_every'=>0,
            'sched_time'=>array(),
            'sched_gap_min'=>0,),
            'new_network_id'=>'',
            'new_network_name'=>'',
            'datastore'=>'',
            'hostname'=>'',
            'datacenter'=>'',
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $first -> modifyFirstReplica($arr);
        $this->do_assert($res);
    }

    public function testListFirstReplicaStatus()
    {
        $first = $this -> first;
        $arr = array(
            'rule_uuids'=>1,
            'force_refresh'=>1,
        );
        
        
        $res = $first -> listFirstReplicaStatus($arr);
        $this->do_assert($res);
    }

    public function testStartVmFirstReplica()
    {
        $first = $this -> first;
        $arr = array(
            'operate'=>'',
            'rule_uuids'=>array(),
        );
        
        
        $res = $first -> startVmFirstReplica($arr);
        $this->do_assert($res);
    }

    public function testStopVmFirstReplica()
    {
        $first = $this -> first;
        $arr = array(
            'operate'=>'',
            'rule_uuids'=>array(),
        );
        
        
        $res = $first -> stopVmFirstReplica($arr);
        $this->do_assert($res);
    }

    public function testDeleteFirstReplica()
    {
        $first = $this -> first;
        $arr = array(
            'rule_uuids'=>'',
            'group_uuids'=>'',
            'delete_tgtvm'=>1,
        );
        
        
        $res = $first -> deleteFirstReplica($arr);
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