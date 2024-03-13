<?php
namespace i2up\Test\v20240228\fullMachineCopy;

use i2up\common\Auth;
use i2up\fullMachineCopy\v20240228\FullMachineCopy;

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
                                    'is_defroute'=>false,),),),),
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
            'uuid' => '11111111-1111-1111-1111-111111111111',
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
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111',
        );
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
            'operate'=>'start',
        );
        $res = $fullMachineCopy -> startFullMachineCopy($arr);
        $this->do_assert($res);
    }

    public function testStopFullMachineCopy()
    {
        $fullMachineCopy = $this -> fullMachineCopy;
        $arr = array(
            'fsp_uuids'=>array(),
            'operate'=>'stop',
        );
        $res = $fullMachineCopy -> stopFullMachineCopy($arr);
        $this->do_assert($res);
    }

    private function do_assert($res)
    {
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}