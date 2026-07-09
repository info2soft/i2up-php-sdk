<?php
namespace i2up\Test\v20260626\vpDrill;

use i2up\vpDrill\v20260626\VpDrill;
use i2up\common\Auth;
use PHPUnit\Framework\TestCase;
                
class VpDrillTest extends TestCase
 {
    private $vpDrill;
    
    public function setUp():void
    {
        parent::setup();
        $this -> vpDrill = new VpDrill(new Auth());
    }

    public function testCreateVpDrillRule()
    {
        $vpDrill = $this -> vpDrill;
        $arr = array(
            'bkup_rule_uuid'=>'',
            'new_vp_uuid'=>'',
            'task_name'=>'',
            'recovery_way'=>1,
            'priority'=>90000,
            'backup_set_select_strategy'=>1,
            'drill_strategy'=>1,
            'backup_set_select_num'=>1,
            'backup_set_select_unit'=>1,
            'vm_list'=>array(
            '0'=>array(
            'vm_ref'=>'',
            'vm_uuid'=>1,
            'vm_name'=>'',
            'orch_vm_name'=>'',
            'verification_method'=>1,
            'verification_script'=>'',
            'verification_script_timeout'=>1,
            'verification_port'=>1,
            'npsvr_name'=>'',),),
            'bkup_schedule'=>array(
            '0'=>array(
            'sched_name'=>'',
            'bkup_periodic_time'=>1,
            'bkup_policy'=>1,
            'exclude_days'=>array(
            '0'=>'2023-06-02',),
            'cron_policies'=>'',),),
            'data_retrieval_strategy'=>1,
            'disable'=>1,
            'backup_way'=>1,
            'vp_type'=>1,
            'new_dc'=>'',
            'agent_uuid'=>'',
            'new_dc_mor'=>'',
            'new_hostname'=>'',
            'vp_uuid'=>'',
            'location'=>'',
            'location_name'=>'',
        );
        
        
        $res = $vpDrill -> createVpDrillRule($arr);
        $this->do_assert($res);
    }

    public function testModifyVpDrillRule()
    {
        $vpDrill = $this -> vpDrill;
        $arr = array(
            'bkup_rule_uuid'=>'',
            'new_vp_uuid'=>'',
            'task_name'=>'',
            'recovery_way'=>1,
            'priority'=>90000,
            'backup_set_select_strategy'=>1,
            'drill_strategy'=>1,
            'backup_set_select_num'=>1,
            'backup_set_select_unit'=>1,
            'vm_list'=>array(
            '0'=>array(
            'vm_ref'=>'',
            'vm_uuid'=>1,
            'vm_name'=>'',
            'orch_vm_name'=>'',),),
            'bkup_schedule'=>array(
            '0'=>array(
            'sched_name'=>'',
            'bkup_one_time'=>1,
            'bkup_policy'=>1,
            'exclude_days'=>array(
            '0'=>'2023-06-02',),
            'cron_policies'=>'',),),
            'verification_method'=>0,
            'verification_script'=>1,
            'verification_script_timeout'=>0,
            'data_retrieval_strategy'=>1,
            'disable'=>1,
            'backup_way'=>1,
            'vp_type'=>1,
            'new_dc'=>'',
            'agent_uuid'=>'',
            'new_dc_mor'=>'',
            'new_hostname'=>'',
            'random_str'=>'',
            'task_uuid'=>'',
            'vp_uuid'=>'',
            'location'=>'',
            'location_name'=>'',
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $vpDrill -> modifyVpDrillRule($arr);
        $this->do_assert($res);
    }

    public function testDescribeVpDrillRule()
    {
        $vpDrill = $this -> vpDrill;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $vpDrill -> describeVpDrillRule($arr);
        $this->do_assert($res);
    }

    public function testListVpDrillRule()
    {
        $vpDrill = $this -> vpDrill;
        $arr = array(
            'page'=>1,
            'limit'=>1,
            'filter_by_biz_grp'=>1,
            'like_args'=>array(
            'task_name'=>'',
            'new_vp_name'=>'',),
        );
        
        
        $res = $vpDrill -> listVpDrillRule($arr);
        $this->do_assert($res);
    }

    public function testOperateVpDrillRule()
    {
        $vpDrill = $this -> vpDrill;
        $arr = array(
            'operate'=>'',
            'task_uuids'=>array(),
        );
        
        
        $res = $vpDrill -> operateVpDrillRule($arr);
        $this->do_assert($res);
    }

    public function testDeleteVpDrillRule()
    {
        $vpDrill = $this -> vpDrill;
        $arr = array(
            'task_uuids'=>array(),
            'force'=>0,
        );
        
        
        $res = $vpDrill -> deleteVpDrillRule($arr);
        $this->do_assert($res);
    }

    public function testListVpDrillRuleStatus()
    {
        $vpDrill = $this -> vpDrill;
        $arr = array(
            'task_uuids'=>array(),
        );
        
        
        $res = $vpDrill -> listVpDrillRuleStatus($arr);
        $this->do_assert($res);
    }

    public function testPreCheckVpDrillRule()
    {
        $vpDrill = $this -> vpDrill;
        $arr = array();
        
        
        $res = $vpDrill -> preCheckVpDrillRule($arr);
        $this->do_assert($res);
    }

    public function testListVpDrillInfo()
    {
        $vpDrill = $this -> vpDrill;
        $arr = array(
            'limit'=>'',
            'page'=>'',
            'like_args'=>array(
            'vp_name'=>'',
            'vm_name'=>'',),
        );
        
        
        $res = $vpDrill -> listVpDrillInfo($arr);
        $this->do_assert($res);
    }

    public function testOperateVpDrillinfo()
    {
        $vpDrill = $this -> vpDrill;
        $arr = array(
            'operate'=>'',
            'uuids'=>array(),
        );
        
        
        $res = $vpDrill -> operateVpDrillinfo($arr);
        $this->do_assert($res);
    }

    public function testListVpDrillInfoStatus()
    {
        $vpDrill = $this -> vpDrill;
        $arr = array(
            'uuids'=>array(),
        );
        
        
        $res = $vpDrill -> listVpDrillInfoStatus($arr);
        $this->do_assert($res);
    }

    public function testDelVpDrillRule()
    {
        $vpDrill = $this -> vpDrill;
        $arr = array(
            'uuids'=>array(),
            'force'=>1,
        );
        
        
        $res = $vpDrill -> delVpDrillRule($arr);
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