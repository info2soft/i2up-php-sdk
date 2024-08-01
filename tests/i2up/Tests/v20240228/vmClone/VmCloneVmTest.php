<?php
namespace i2up\Test\v20240228\vmClone;

use i2up\common\Auth;
use i2up\vmClone\v20240228\VmCloneVm;

class VmCloneVmTest extends \PHPUnit_Framework_TestCase
 {
    private $vmCloneVm;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> vmCloneVm = new VmCloneVm(new Auth());
    }

    public function testListVmCloneVm()
    {
        $vmCloneVm = $this -> vmCloneVm;
        $arr = array(
            'page'=>1,
            'limit'=>1,
            'where_args[status]'=>'',
            'search_field'=>'',
            'search_value'=>'',
        );
        $res = $vmCloneVm -> listVmCloneVm($arr);
        $this->do_assert($res);
    }

    public function testModifyVmConfig()
    {
        $vmCloneVm = $this -> vmCloneVm;
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111',
            'vm_name'=>'',
            'cpu'=>1,
            'core_per_sock'=>1,
            'mem_mb'=>1,
            'dns'=>'',
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
                    'gateway'=>'',),),
        );
        $res = $vmCloneVm -> modifyVmConfig($arr);
        $this->do_assert($res);
    }

    public function testDeleteVmCloneVm()
    {
        $vmCloneVm = $this -> vmCloneVm;
        $arr = array(
            'uuids'=>array('11111111-1111-1111-1111-111111111111'),
            'force'=>1,
        );
        $res = $vmCloneVm -> deleteVmCloneVm($arr);
        $this->do_assert($res);
    }

    public function testStartVmVmCloneVm()
    {
        $vmCloneVm = $this -> vmCloneVm;
        $arr = array(
            'operate'=>'start_vm',
            'uuids'=>'',
        );
        $res = $vmCloneVm -> startVmVmCloneVm($arr);
        $this->do_assert($res);
    }

    public function testStopVmVmCloneVm()
    {
        $vmCloneVm = $this -> vmCloneVm;
        $arr = array(
            'operate'=>'stop_vm',
            'uuids'=>'',
        );
        $res = $vmCloneVm -> stopVmVmCloneVm($arr);
        $this->do_assert($res);
    }

    public function testListVmCloneVmStatus()
    {
        $vmCloneVm = $this -> vmCloneVm;
        $arr = array(
            'force_refresh'=>1,
            'uuids'=>array(
                '0'=>'F0Bd1A0B-503F-D174-d298-eeF39aBAcfAe',
                '1'=>'fFbfcBDC-fef1-38d8-0848-F5ECb2D34627',
            ),
        );
        $res = $vmCloneVm -> listVmCloneVmStatus($arr);
        $this->do_assert($res);
    }

    public function testDescribeVmCloneVm()
    {
        $vmCloneVm = $this -> vmCloneVm;
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111',
        );
        $res = $vmCloneVm -> describeVmCloneVm($arr);
        $this->do_assert($res);
    }

    private function do_assert($res)
    {
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}