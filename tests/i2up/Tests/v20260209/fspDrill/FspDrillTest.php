<?php
namespace i2up\Test\v20260209\fspDrill;

use i2up\fspDrill\v20260209\FspDrill;
use i2up\common\Auth;
                
class FspDrillTest extends \PHPUnit_Framework_TestCase
 {
    private $fspDrill;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> fspDrill = new FspDrill(new Auth());
    }

    public function testCreateFspDrillRule()
    {
        $fspDrill = $this -> fspDrill;
        $arr = array(
            'backup_way'=>1,
            'task_name'=>'',
            'recovery_way'=>1,
            'priority'=>90000,
            'vp_uuid'=>'',
            'backup_set_select_strategy'=>1,
            'drill_strategy'=>1,
            'backup_set_select_num'=>1,
            'backup_set_select_unit'=>1,
            'vm_list'=>array(
            '0'=>array(
            'vm_name'=>'',
            'orch_vm_name'=>'',
            'cpu'=>1,
            'memory'=>1,),),
            'bkup_schedule'=>array(
            '0'=>array(
            'sched_name'=>'',
            'bkup_periodic_time'=>1,
            'bkup_policy'=>1,
            'exclude_days'=>array(
            '0'=>'2023-06-02',),
            'cron_policies'=>'',),),
            'verification_port'=>1,
            'verification_method'=>0,
            'verification_script'=>'',
            'verification_script_timeout'=>0,
            'data_retrieval_strategy'=>1,
            'disable'=>1,
            'new_dc'=>'',
            'agent_uuid'=>'',
            'bkup_rule_uuid'=>'',
            'new_dc_mor'=>'',
            'new_hostname'=>'',
            'new_vp_uuid'=>'',
            'new_network_id'=>'',
            'new_network_name'=>'',
        );
        
        
        $res = $fspDrill -> createFspDrillRule($arr);
        $this->do_assert($res);
    }

    public function testModifyFspDrillRule()
    {
        $fspDrill = $this -> fspDrill;
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
            'task_uuid'=>'',
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
            'vp_uuid'=>'',
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $fspDrill -> modifyFspDrillRule($arr);
        $this->do_assert($res);
    }

    public function testDescribeFspDrillRule()
    {
        $fspDrill = $this -> fspDrill;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $fspDrill -> describeFspDrillRule($arr);
        $this->do_assert($res);
    }

    public function testListFspDrillRule()
    {
        $fspDrill = $this -> fspDrill;
        $arr = array(
            'filter_by_biz_grp'=>1,
            'like_args'=>array(
            'task_name'=>'',
            'new_vp_name'=>'',),
            'page'=>1,
            'limit'=>1,
        );
        
        
        $res = $fspDrill -> listFspDrillRule($arr);
        $this->do_assert($res);
    }

    public function testOperateFspDrillRule()
    {
        $fspDrill = $this -> fspDrill;
        $arr = array(
            'operate'=>'',
            'task_uuids'=>array(),
        );
        
        
        $res = $fspDrill -> operateFspDrillRule($arr);
        $this->do_assert($res);
    }

    public function testDeleteFspDrillRule()
    {
        $fspDrill = $this -> fspDrill;
        $arr = array(
            'force'=>0,
            'task_uuids'=>array(),
        );
        
        
        $res = $fspDrill -> deleteFspDrillRule($arr);
        $this->do_assert($res);
    }

    public function testListFspDrillRuleStatus()
    {
        $fspDrill = $this -> fspDrill;
        $arr = array(
            'task_uuids'=>array(),
        );
        
        
        $res = $fspDrill -> listFspDrillRuleStatus($arr);
        $this->do_assert($res);
    }

    public function testListFspDrillInfo()
    {
        $fspDrill = $this -> fspDrill;
        $arr = array(
            'like_args'=>array(
            'vp_name'=>'',
            'vm_name'=>'',),
            'limit'=>'',
            'page'=>'',
        );
        
        
        $res = $fspDrill -> listFspDrillInfo($arr);
        $this->do_assert($res);
    }

    public function testOperateFspDrillinfo()
    {
        $fspDrill = $this -> fspDrill;
        $arr = array(
            'operate'=>'',
            'uuids'=>array(),
        );
        
        
        $res = $fspDrill -> operateFspDrillinfo($arr);
        $this->do_assert($res);
    }

    public function testListFspDrillInfoStatus()
    {
        $fspDrill = $this -> fspDrill;
        $arr = array(
            'uuids'=>array(),
        );
        
        
        $res = $fspDrill -> listFspDrillInfoStatus($arr);
        $this->do_assert($res);
    }

    public function testDelFspDrillRule()
    {
        $fspDrill = $this -> fspDrill;
        $arr = array(
            'force'=>1,
            'uuids'=>array(),
        );
        
        
        $res = $fspDrill -> delFspDrillRule($arr);
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