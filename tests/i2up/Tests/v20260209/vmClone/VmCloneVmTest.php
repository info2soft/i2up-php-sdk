<?php
namespace i2up\Test\v20260209\vmClone;

use i2up\vmClone\v20260209\VmCloneVm;
use i2up\common\Auth;
                
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
            'search_field'=>'',
            'search_value'=>'',
            'where_args'=>array(
            'status'=>'',),
        );
        
        
        $res = $vmCloneVm -> listVmCloneVm($arr);
        $this->do_assert($res);
    }

    public function testModifyVmConfig()
    {
        $vmCloneVm = $this -> vmCloneVm;
        $arr = array(
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
            'vm_hostname'=>'',
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $vmCloneVm -> modifyVmConfig($arr);
        $this->do_assert($res);
    }

    public function testDeleteVmCloneVm()
    {
        $vmCloneVm = $this -> vmCloneVm;
        $arr = array(
            'uuids'=>array(),
            'force'=>1,
        );
        
        
        $res = $vmCloneVm -> deleteVmCloneVm($arr);
        $this->do_assert($res);
    }

    public function testStartVmVmCloneVm()
    {
        $vmCloneVm = $this -> vmCloneVm;
        $arr = array(
            'operate'=>'',
            'uuids'=>'',
        );
        
        
        $res = $vmCloneVm -> startVmVmCloneVm($arr);
        $this->do_assert($res);
    }

    public function testStopVmVmCloneVm()
    {
        $vmCloneVm = $this -> vmCloneVm;
        $arr = array(
            'operate'=>'',
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
            '1'=>'fFbfcBDC-fef1-38d8-0848-F5ECb2D34627',),
        );
        
        
        $res = $vmCloneVm -> listVmCloneVmStatus($arr);
        $this->do_assert($res);
    }

    public function testDescribeVmCloneVm()
    {
        $vmCloneVm = $this -> vmCloneVm;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $vmCloneVm -> describeVmCloneVm($arr);
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