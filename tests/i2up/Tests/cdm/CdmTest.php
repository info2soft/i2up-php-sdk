<?php
namespace i2up\Test\cdm;

use i2up\cdm\v20200721\Cdm;
use i2up\common\Auth;

class CdmTest extends \PHPUnit_Framework_TestCase
{
    private $cdm;

    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> cdm = new Cdm(new Auth());
    }

    public function testGetPointList()
    {
        $cdm = $this -> cdm;
        $arr = array(
            'bk_uuid'=>'',
            'path'=>'',
            'type'=>'',
            'suffix'=>'',
            'page'=>1,
            'limit'=>1,
        );
        $res = $cdm -> getPointList($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testGetResourceList()
    {
        $cdm = $this -> cdm;
        $arr = array(
            'limit'=>10,
            'page'=>1,
            'search_field'=>'',
            'search_value'=>'',
        );
        $res = $cdm -> getResourceList($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testGetHostStorageList()
    {
        $cdm = $this -> cdm;
        $arr = array(
            'vp_uuid'=>'',
        );
        $res = $cdm -> getHostStorageList($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testTakeOverDrillList()
    {
        $cdm = $this -> cdm;
        $arr = array(
            'limit'=>10,
            'page'=>1,
            'where_args'=>array(
                '0'=>array(
                    'wk_uuid'=>'',
                    'bk_uuid'=>'',),),
        );
        $res = $cdm -> takeOverDrillList($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testCreateTakeOverDrill()
    {
        $cdm = $this -> cdm;
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
                        'ip'=>'',
                        'mac'=>'',
                        'mask'=>'',
                        'gateway'=>'',
                        'dns'=>array(
                            'domain'=>'',
                            'servers'=>'',),),),
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
        );
        $res = $cdm -> createTakeOverDrill($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDeleteTakeOverDrill()
    {
        $cdm = $this -> cdm;
        $arr = array(
            'rule_uuids'=>array('11111111-1111-1111-1111-111111111111'),
        );
        $res = $cdm -> deleteTakeOverDrill($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeTakeOverDrill()
    {
        $cdm = $this -> cdm;
        $arr = array(
        );
        $res = $cdm -> describeTakeOverDrill($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testGetVmStatus()
    {
        $cdm = $this -> cdm;
        $arr = array(
            'rule_uuids'=>array('11111111-1111-1111-1111-111111111111'),
        );
        $res = $cdm -> getVmStatus($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testStartTakeOverDrill()
    {
        $cdm = $this -> cdm;
        $arr = array(
            'rule_uuids'=>array('11111111-1111-1111-1111-111111111111'),
            'operate'=>'start',
            'type'=>'',
        );
        $res = $cdm -> startTakeOverDrill($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testStopTakeOverDrill()
    {
        $cdm = $this -> cdm;
        $arr = array(
            'rule_uuids'=>array('11111111-1111-1111-1111-111111111111'),
            'operate'=>'stop',
            'type'=>'',
        );
        $res = $cdm -> stopTakeOverDrill($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testOpenConsoleTakeOverDrill()
    {
        $cdm = $this -> cdm;
        $arr = array(
            'rule_uuids'=>array('11111111-1111-1111-1111-111111111111'),
            'operate'=>'open_console',
            'type'=>'',
        );
        $res = $cdm -> openConsoleTakeOverDrill($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}