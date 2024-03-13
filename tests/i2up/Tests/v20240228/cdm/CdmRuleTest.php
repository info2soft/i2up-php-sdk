<?php
namespace i2up\Test\v20240228\cdm;

use i2up\cdm\v20240228\CdmRule;
use i2up\common\Auth;
                
class CdmRuleTest extends \PHPUnit_Framework_TestCase
 {
    private $cdmRule;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> cdmRule = new CdmRule(new Auth());
    }

    public function testTakeOverDrillList()
    {
        $cdmRule = $this -> cdmRule;
        $arr = array(
            'limit'=>10,
            'page'=>1,
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
            'has_virtio'=>false,
            'has_virtio_scsi'=>false,
            'has_net_kvm'=>false,
            'network_switch'=>0,
            'restore_info'=>array(),
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
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111',
        );
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
            'operate'=>'start',
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
            'operate'=>'stop',
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
            'operate'=>'open_console',
            'type'=>'',
        );
        $res = $cdmRule -> openConsoleTakeOverDrill($arr);
        $this->do_assert($res);
    }

    private function do_assert($res)
    {
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}