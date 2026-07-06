<?php
namespace i2up\Test\v20260626\cdm;

use i2up\cdm\v20260626\CdmRule;
use i2up\common\Auth;
use PHPUnit\Framework\TestCase;
                
class CdmRuleTest extends TestCase
 {
    private $cdmRule;
    
    public function setUp():void
    {
        parent::setup();
        $this -> cdmRule = new CdmRule(new Auth());
    }

    public function testTakeOverDrillList()
    {
        $cdmRule = $this -> cdmRule;
        $arr = array(
            'limit'=>10,
            'page'=>1,
            'where_args'=>array(
            '0'=>array(
            'wk_uuid'=>'BC92C981-D637-AC10-7CB0-450504DF8A3C',
            'bk_uuid'=>'BC92C981-D637-AC10-7CB0-450504DF8A3C',),),
        );
        
        
        $res = $cdmRule -> takeOverDrillList($arr);
        $this->do_assert($res);
    }

    public function testCreateTakeOverDrill()
    {
        $cdmRule = $this -> cdmRule;
        $arr = array(
            'vm_name'=>'',
            'rule_type'=>1,
            'wk_uuid'=>'',
            'bk_version'=>'',
            'vm_cpu_core'=>'',
            'vm_mem'=>'',
            'vm_network'=>array(
            'cards'=>array(
            '0'=>array(
            'mac'=>'',
            'gateway'=>array(),
            'dns'=>array(
            'domain'=>'',
            'servers'=>array(),),
            'cidr'=>array(),
            'network_id'=>'',
            'network_name'=>'',),),
            'dns'=>array(
            'domain'=>'',
            'servers'=>'',),),
            'bk_uuid'=>'',
            'vm_disks'=>array(
            '0'=>array(
            'path'=>'',
            'size'=>'',
            'interface'=>'',
            'isBoot'=>'',),),
            'bios_type'=>'',
            'vp_uuid'=>'',
            'timezone'=>'',
            'storage_uuid'=>'',
            'bk_path'=>'',
            'os_version'=>'',
            'fsp_uuid'=>'',
            'by_type'=>1,
            'wk_address'=>'',
            'wk_name'=>'',
            'has_virtio'=>'false',
            'has_virtio_scsi'=>'false',
            'has_net_kvm'=>'false',
            'network_switch'=>0,
            'restore_info'=>array(),
            'start_switch'=>0,
            'vpc_settings'=>array(
            '0'=>array(
            'work_vpc_id'=>'',
            'work_network_id'=>'',
            'work_security_group_id'=>'',
            'work_ipaddr'=>'',
            'vpc_id'=>'',),),
        );
        
        
        $res = $cdmRule -> createTakeOverDrill($arr);
        $this->do_assert($res);
    }

    public function testDeleteTakeOverDrill()
    {
        $cdmRule = $this -> cdmRule;
        $arr = array(
            'rule_uuids'=>array(),
            'force'=>1,
            'del_policy'=>0,
        );
        
        
        $res = $cdmRule -> deleteTakeOverDrill($arr);
        $this->do_assert($res);
    }

    public function testDescribeTakeOverDrill()
    {
        $cdmRule = $this -> cdmRule;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $cdmRule -> describeTakeOverDrill($arr);
        $this->do_assert($res);
    }

    public function testGetVmStatus()
    {
        $cdmRule = $this -> cdmRule;
        $arr = array(
            'rule_uuids'=>array(
            '0'=>'0E807AD3-DD1E-9224-2B9B-E713CF258467',
            '1'=>'1A807AD3-DD1E-9224-2B9B-E713CF258467',),
            'force_refresh'=>1,
        );
        
        
        $res = $cdmRule -> getVmStatus($arr);
        $this->do_assert($res);
    }

    public function testStartTakeOverDrill()
    {
        $cdmRule = $this -> cdmRule;
        $arr = array(
            'rule_uuids'=>array(),
            'operate'=>'',
            'type'=>'',
        );
        
        
        $res = $cdmRule -> startTakeOverDrill($arr);
        $this->do_assert($res);
    }

    public function testStopTakeOverDrill()
    {
        $cdmRule = $this -> cdmRule;
        $arr = array(
            'rule_uuids'=>array(),
            'operate'=>'',
            'type'=>'',
        );
        
        
        $res = $cdmRule -> stopTakeOverDrill($arr);
        $this->do_assert($res);
    }

    public function testOpenConsoleTakeOverDrill()
    {
        $cdmRule = $this -> cdmRule;
        $arr = array(
            'rule_uuids'=>array(),
            'operate'=>'',
            'type'=>'',
        );
        
        
        $res = $cdmRule -> openConsoleTakeOverDrill($arr);
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