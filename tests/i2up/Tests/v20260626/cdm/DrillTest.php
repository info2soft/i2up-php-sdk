<?php
namespace i2up\Test\v20260626\cdm;

use i2up\cdm\v20260626\Drill;
use i2up\common\Auth;
use PHPUnit\Framework\TestCase;
                
class DrillTest extends TestCase
 {
    private $drill;
    
    public function setUp():void
    {
        parent::setup();
        $this -> drill = new Drill(new Auth());
    }

    public function testCreateCdmDrill()
    {
        $drill = $this -> drill;
        $arr = array(
            'vm_name'=>'测试5',
            'vm_ref'=>'vm-10811',
            'limit'=>3,
            'sched_day'=>array(
            '0'=>1,
            '1'=>2,
            '2'=>3,),
            'sched_time'=>array(
            '0'=>'00:00',),
            'sched_every'=>0,
            'bkup_type'=>0,
            'rule_name'=>'',
            'rule_type'=>0,
            'vp_uuid'=>'',
            'auto'=>0,
            'vm_list'=>array(
            '0'=>array(
            'vm_name'=>'',
            'new_vm_name'=>'',
            'bk_uuid'=>'',
            'time'=>'',
            'original_rule_uuid'=>'',
            'scripts'=>'',
            'bk_path'=>'',
            'scripts_type'=>1,
            'os_type'=>1,
            'wk_uuid'=>'',
            'src_uuid'=>'',
            'data_ip_uuid'=>'',
            'ver_sig'=>'',
            'os_ip'=>'',),),
            'backup_type'=>'i',
            'del_bkup_data'=>0,
            'automate'=>0,
            'auto_shutdown'=>1,
        );
        
        
        $res = $drill -> createCdmDrill($arr);
        $this->do_assert($res);
    }

    public function testDescribeCdmDrill()
    {
        $drill = $this -> drill;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $drill -> describeCdmDrill($arr);
        $this->do_assert($res);
    }

    public function testDescribeCdmDrillGroup()
    {
        $drill = $this -> drill;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $drill -> describeCdmDrillGroup($arr);
        $this->do_assert($res);
    }

    public function testDeleteCdmDrill()
    {
        $drill = $this -> drill;
        $arr = array(
            'rule_uuids'=>array(
            '0'=>'11111111-1111-1111-1111-111111111111',),
            'group_uuids'=>array(),
            'delete_tgtvm'=>0,
        );
        
        
        $res = $drill -> deleteCdmDrill($arr);
        $this->do_assert($res);
    }

    public function testStopCdmDrill()
    {
        $drill = $this -> drill;
        $arr = array(
            'msg'=>'',
            'operate'=>'',
            'rule_uuids'=>'[C6335F62-2565-1957-4BB9-587F2FF46B00]',
            'group_uuids'=>array(),
            'status'=>'',
        );
        
        
        $res = $drill -> stopCdmDrill($arr);
        $this->do_assert($res);
    }

    public function testStartCdmDrill()
    {
        $drill = $this -> drill;
        $arr = array(
            'msg'=>'',
            'operate'=>'',
            'rule_uuids'=>'[C6335F62-2565-1957-4BB9-587F2FF46B00]',
            'group_uuids'=>array(),
            'status'=>'',
        );
        
        
        $res = $drill -> startCdmDrill($arr);
        $this->do_assert($res);
    }

    public function testSetStatusCdmDrill()
    {
        $drill = $this -> drill;
        $arr = array(
            'msg'=>'',
            'operate'=>'',
            'rule_uuids'=>'[C6335F62-2565-1957-4BB9-587F2FF46B00]',
            'group_uuids'=>array(),
            'status'=>'',
        );
        
        
        $res = $drill -> setStatusCdmDrill($arr);
        $this->do_assert($res);
    }

    public function testListCdmDrillStatus()
    {
        $drill = $this -> drill;
        $arr = array(
            'rule_uuids'=>array(
            '0'=>'11111111-1111-1111-1111-111111111111',),
            'force_refresh'=>1,
        );
        
        
        $res = $drill -> listCdmDrillStatus($arr);
        $this->do_assert($res);
    }

    public function testQueryGroupVmStatus()
    {
        $drill = $this -> drill;
        $arr = array(
            'rule_uuid'=>'',
            'group_uuid'=>'',
        );
        
        
        $res = $drill -> queryGroupVmStatus($arr);
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