<?php
namespace i2up\Test\v20250123\vmClone;

use i2up\vmClone\v20250123\VmCloneRule;
use i2up\common\Auth;
                
class VmCloneRuleTest extends \PHPUnit_Framework_TestCase
 {
    private $vmCloneRule;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> vmCloneRule = new VmCloneRule(new Auth());
    }

    public function testCreateVmCloneRule()
    {
        $vmCloneRule = $this -> vmCloneRule;
        $arr = array(
            'rule_name'=>'',
            'wk_uuid'=>'',
            'bk_uuid'=>'',
            'wk_path'=>array(),
            'bk_path'=>array(),
            'auto_start'=>1,
            'vp_uuid'=>'',
            'new_dc'=>'',
            'new_dc_mor'=>'',
            'new_host'=>'',
            'new_ds'=>'',
            'create_vm_type'=>1,
            'vm_list'=>array(
            '0'=>array(
            'vm_name'=>'',
            'cpu'=>1,
            'core_per_sock'=>1,
            'mem_mb'=>1,
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
            'dns'=>'',
            'vm_hostname'=>'',),),
            'vm_cnt'=>1,
            'prefix'=>'',
            'bkup_one_time'=>1,
            'bkup_policy'=>1,
        );
        
        
        $res = $vmCloneRule -> createVmCloneRule($arr);
        $this->do_assert($res);
    }

    public function testListVmCloneRule()
    {
        $vmCloneRule = $this -> vmCloneRule;
        $arr = array(
            'page'=>1,
            'limit'=>1,
            'search_field'=>'',
            'search_value'=>'',
        );
        
        
        $res = $vmCloneRule -> listVmCloneRule($arr);
        $this->do_assert($res);
    }

    public function testDescribeVmCloneRule()
    {
        $vmCloneRule = $this -> vmCloneRule;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $vmCloneRule -> describeVmCloneRule($arr);
        $this->do_assert($res);
    }

    public function testDeleteVmCloneRule()
    {
        $vmCloneRule = $this -> vmCloneRule;
        $arr = array(
            'rule_uuids'=>1,
            'force'=>1,
        );
        
        
        $res = $vmCloneRule -> deleteVmCloneRule($arr);
        $this->do_assert($res);
    }

    public function testStartVmCloneRule()
    {
        $vmCloneRule = $this -> vmCloneRule;
        $arr = array(
            'rules_uuid'=>1,
            'operate'=>'',
        );
        
        
        $res = $vmCloneRule -> startVmCloneRule($arr);
        $this->do_assert($res);
    }

    public function testStopVmCloneRule()
    {
        $vmCloneRule = $this -> vmCloneRule;
        $arr = array(
            'rules_uuid'=>1,
            'operate'=>'',
        );
        
        
        $res = $vmCloneRule -> stopVmCloneRule($arr);
        $this->do_assert($res);
    }

    public function testListVmCloneRuleStatus()
    {
        $vmCloneRule = $this -> vmCloneRule;
        $arr = array(
            'rule_uuids'=>1,
            'force_refresh'=>'',
        );
        
        
        $res = $vmCloneRule -> listVmCloneRuleStatus($arr);
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