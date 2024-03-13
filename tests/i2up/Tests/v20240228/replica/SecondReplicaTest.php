<?php
namespace i2up\Test\v20240228\replica;

use i2up\common\Auth;
use i2up\replica\v20240228\SecondReplica;

class SecondReplicaTest extends \PHPUnit_Framework_TestCase
 {
    private $secondReplica;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> secondReplica = new SecondReplica(new Auth());
    }

    public function testCreateSecondReplica()
    {
        $secondReplica = $this -> secondReplica;
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
                                    'is_defroute'=>false,),),),),
                    'create_vm_type'=>1,),
                'fsp_name'=>'',
                'bk_data_type'=>21,
                'wk_data_type'=>0,
                'auto_register'=>0,
                'node_name'=>'',
                'node_lic_list'=>array(),),
        );
        $res = $secondReplica -> createSecondReplica($arr);
        $this->do_assert($res);
    }

    public function testListSecondReplica()
    {
        $secondReplica = $this -> secondReplica;
        $arr = array(
            'page'=>1,
            'limit'=>1,
        );
        $res = $secondReplica -> listSecondReplica($arr);
        $this->do_assert($res);
    }

    public function testDescribeSecondReplica()
    {
        $secondReplica = $this -> secondReplica;
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111',
        );
        $res = $secondReplica -> describeSecondReplica($arr);
        $this->do_assert($res);
    }

    public function testModifySecondReplica()
    {
        $secondReplica = $this -> secondReplica;
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
        $res = $secondReplica -> modifySecondReplica($arr);
        $this->do_assert($res);
    }

    public function testStartSecondReplica()
    {
        $secondReplica = $this -> secondReplica;
        $arr = array(
            'operate'=>'start',
            'fsp_uuids'=>array(),
        );
        $res = $secondReplica -> startSecondReplica($arr);
        $this->do_assert($res);
    }

    public function testStopSecondReplica()
    {
        $secondReplica = $this -> secondReplica;
        $arr = array(
            'operate'=>'stop',
            'fsp_uuids'=>array(),
        );
        $res = $secondReplica -> stopSecondReplica($arr);
        $this->do_assert($res);
    }

    public function testStartVmSecondReplica()
    {
        $secondReplica = $this -> secondReplica;
        $arr = array(
            'operate'=>'start_vm',
            'fsp_uuids'=>array(),
        );
        $res = $secondReplica -> startVmSecondReplica($arr);
        $this->do_assert($res);
    }

    public function testStopVmSecondReplica()
    {
        $secondReplica = $this -> secondReplica;
        $arr = array(
            'operate'=>'stop_vm',
            'fsp_uuids'=>array(),
        );
        $res = $secondReplica -> stopVmSecondReplica($arr);
        $this->do_assert($res);
    }

    public function testDeleteSecondReplica()
    {
        $secondReplica = $this -> secondReplica;
        $arr = array(
            'fsp_uuids'=>array(),
            'del_policy'=>1,
            'force'=>1,
        );
        $res = $secondReplica -> deleteSecondReplica($arr);
        $this->do_assert($res);
    }

    public function testListSecondReplicaStatus()
    {
        $secondReplica = $this -> secondReplica;
        $arr = array(
            'fsp_uuids'=>array(),
            'force_refresh'=>1,
        );
        $res = $secondReplica -> listSecondReplicaStatus($arr);
        $this->do_assert($res);
    }

    private function do_assert($res)
    {
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}