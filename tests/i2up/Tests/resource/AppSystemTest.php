<?php
namespace i2up\Test\resource;

use i2up\resource\v20190805\AppSystem;
use i2up\common\Auth;

class AppSystemTest extends \PHPUnit_Framework_TestCase
{
    private $appSystem;

    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> appSystem = new AppSystem(new Auth());
    }

    public function testSecDirList()
    {
        $appSystem = $this -> appSystem;
        $arr = array(
        );
        $res = $appSystem -> secDirList($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testCreateSecDir()
    {
        $appSystem = $this -> appSystem;
        $arr = array(
            'dir_name'=>'',
            'pid'=>1,
        );
        $res = $appSystem -> createSecDir($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testModifySecDir()
    {
        $appSystem = $this -> appSystem;
        $arr = array(
            'dir_name'=>'',
        );
        $res = $appSystem -> modifySecDir($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDeleteSecDir()
    {
        $appSystem = $this -> appSystem;
        $arr = array(
            'dir_uuids'=>array(),
        );
        $res = $appSystem -> deleteSecDir($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testTempFuncName()
    {
        $appSystem = $this -> appSystem;
        $arr = array(
        );
        $res = $appSystem -> tempFuncName($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testAppSystemList()
    {
        $appSystem = $this -> appSystem;
        $arr = array(
            'search_value'=>'',
            'limit'=>1,
            'page'=>1,
            'search_field'=>'',
        );
        $res = $appSystem -> appSystemList($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testAppSystemMembersList()
    {
        $appSystem = $this -> appSystem;
        $arr = array(
            'rule_type'=>1,
            'name'=>'',
            'os_type'=>1,
        );
        $res = $appSystem -> appSystemMembersList($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeAppSystem()
    {
        $appSystem = $this -> appSystem;
        $arr = array(
        );
        $res = $appSystem -> describeAppSystem($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testCreateAppSystem()
    {
        $appSystem = $this -> appSystem;
        $arr = array(
            'dir_uuid'=>'73412DAD-A7A6-4605-A9FF-081495C8800B',
            'sys_name'=>'应用系统name',
            'level_cfg'=>array(
                '0'=>array(
                    'day'=>array(
                        '0'=>0,
                        '1'=>1,
                        '2'=>2,
                        '3'=>3,
                        '4'=>4,
                        '5'=>5,
                        '6'=>6,),
                    'periods'=>array(
                        '0'=>array(
                            'level'=>0,
                            'start_time'=>'10:10',
                            'end_time'=>'12:20',),),),),
            'node_uuids'=>array(
                '0'=>'EA52A961-9883-66FE-188B-D7266AD9594B',
                '1'=>'09EEA553-C3B8-0D7A-4797-F7A7E2D4FAE1',),
            'vm_uuids'=>array(),
        );
        $res = $appSystem -> createAppSystem($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testModifyAppSystem()
    {
        $appSystem = $this -> appSystem;
        $arr = array(
            'dir_uuid'=>'',
            'sys_name'=>'',
            'level_cfg'=>array(
                '0'=>array(
                    'day'=>array(
                        '0'=>0,
                        '1'=>1,
                        '2'=>2,
                        '3'=>3,
                        '4'=>4,
                        '5'=>5,
                        '6'=>6,),
                    'periods'=>array(
                        '0'=>array(
                            'level'=>1,
                            'start_time'=>'10:10',
                            'end_time'=>'12:20',),),),),
            'random_str'=>'',
            'node_uuids'=>array(
                '0'=>'EF4825D6-7FB3-7961-6271-5E5B2603414D',),
            'vm_uuids'=>array(
                '0'=>'EF4825D6-7FB3-7961-6271-5E5B2603414D',),
        );
        $res = $appSystem -> modifyAppSystem($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDeleteAppSystem()
    {
        $appSystem = $this -> appSystem;
        $arr = array(
            'sys_uuids'=>array(),
        );
        $res = $appSystem -> deleteAppSystem($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testGetVmList()
    {
        $appSystem = $this -> appSystem;
        $arr = array(
            'where_args[vp_uuid]'=>'',
            'search_field'=>'vm_name',
            'search_value'=>'vm_name',
        );
        $res = $appSystem -> getVmList($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}