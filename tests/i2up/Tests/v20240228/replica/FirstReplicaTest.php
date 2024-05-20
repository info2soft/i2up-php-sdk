<?php
namespace i2up\Test\v20240228\replica;

use i2up\common\Auth;
use i2up\replica\v20240228\FirstReplica;

class FirstReplicaTest extends \PHPUnit_Framework_TestCase
 {
    private $firstReplica;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> firstReplica = new FirstReplica(new Auth());
    }

    public function testCreateFirstReplica()
    {
        $firstReplica = $this -> firstReplica;
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
            'create_vm_type'=>1,
        );
        $res = $firstReplica -> createFirstReplica($arr);
        $this->do_assert($res);
    }

    public function testListFirstReplica()
    {
        $firstReplica = $this -> firstReplica;
        $arr = array(
            'page'=>1,
            'limit'=>1,
        );
        $res = $firstReplica -> listFirstReplica($arr);
        $this->do_assert($res);
    }

    public function testDescribeFirstReplica()
    {
        $firstReplica = $this -> firstReplica;
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111',
        );
        $res = $firstReplica -> describeFirstReplica($arr);
        $this->do_assert($res);
    }

    public function testModifyFirstReplica()
    {
        $firstReplica = $this -> firstReplica;
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111',
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
        $res = $firstReplica -> modifyFirstReplica($arr);
        $this->do_assert($res);
    }

    public function testListFirstReplicaStatus()
    {
        $firstReplica = $this -> firstReplica;
        $arr = array(
            'rule_uuids'=>1,
            'force_refresh'=>1,
        );
        $res = $firstReplica -> listFirstReplicaStatus($arr);
        $this->do_assert($res);
    }

    public function testStartVmFirstReplica()
    {
        $firstReplica = $this -> firstReplica;
        $arr = array(
            'operate'=>'start_vm',
            'rule_uuids'=>array('11111111-1111-1111-1111-111111111111'),
        );
        $res = $firstReplica -> startVmFirstReplica($arr);
        $this->do_assert($res);
    }

    public function testStopVmFirstReplica()
    {
        $firstReplica = $this -> firstReplica;
        $arr = array(
            'operate'=>'stop_vm',
            'rule_uuids'=>array('11111111-1111-1111-1111-111111111111'),
        );
        $res = $firstReplica -> stopVmFirstReplica($arr);
        $this->do_assert($res);
    }

    public function testDeleteFirstReplica()
    {
        $firstReplica = $this -> firstReplica;
        $arr = array(
            'rule_uuids'=>'',
            'group_uuids'=>'',
            'delete_tgtvm'=>1,
        );
        $res = $firstReplica -> deleteFirstReplica($arr);
        $this->do_assert($res);
    }

    private function do_assert($res)
    {
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}