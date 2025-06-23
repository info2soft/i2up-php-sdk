<?php
namespace i2up\Test\v20250630\stream;

use i2up\stream\v20250630\SensCheck;
use i2up\common\Auth;
                
class SensCheckTest extends \PHPUnit_Framework_TestCase
 {
    private $sensCheck;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> sensCheck = new SensCheck(new Auth());
    }

    public function testCreateSensCheck()
    {
        $sensCheck = $this -> sensCheck;
        $arr = array(
            'mask_node_uuid'=>'A6ABF8BC-38AF-41FE-ACF7-DD9F28B0FA3F',
            'user'=>'',
            'tabs'=>'',
            'row'=>100,
            'min'=>90,
            'sens_types'=>'1,2,3,4,5,6,7,8,9,10,12,13,14,15,20',
            'map_type'=>'db',
            'mix'=>0,
            'white'=>1,
            'src_type'=>'',
            'src_path'=>'',
            'rule_uuid'=>'',
            'rule_name'=>'adsas',
            'src_db_uuid'=>'38F1AD45-5F72-2E51-DC01-0593A14A8D17',
            'type_arg'=>'',
        );
        
        
        $res = $sensCheck -> createSensCheck($arr);
        $this->do_assert($res);
    }

    public function testModifySensCheck()
    {
        $sensCheck = $this -> sensCheck;
        $arr = array(
            'username'=>'admin',
            'user_uuid'=>'1BCFCAA3-E3C8-3E28-BDC5-BE36FDC2B5DC',
            'rule_uuid'=>'F895D958-F435-47AC-664D-805BA7DFEE89',
            'rule_name'=>'asd',
            'map_type'=>'db',
            'src_db_uuid'=>'38F1AD45-5F72-2E51-DC01-0593A14A8D17',
            'user'=>'',
            'tabs'=>'',
            'row'=>100,
            'min'=>90,
            'sens_types'=>'1,2,3,4,5,6,7,8,9,10,12,13,14,15,20',
            'create_time'=>'1601344305',
            'mask_node_uuid'=>'A6ABF8BC-38AF-41FE-ACF7-DD9F28B0FA3F',
            'mix'=>0,
            'status'=>0,
            'start'=>'2020-09-29 09:51:45',
            'end'=>'',
            'white'=>1,
            'info'=>'',
            'type_arg'=>'',
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $sensCheck -> modifySensCheck($arr);
        $this->do_assert($res);
    }

    public function testDeleteSensCheck()
    {
        $sensCheck = $this -> sensCheck;
        $arr = array(
            'uuids'=>'',
        );
        
        
        $res = $sensCheck -> deleteSensCheck($arr);
        $this->do_assert($res);
    }

    public function testStartMaskRule()
    {
        $sensCheck = $this -> sensCheck;
        $arr = array(
            'operate'=>'',
            'uuids'=>'',
        );
        
        
        $res = $sensCheck -> startMaskRule($arr);
        $this->do_assert($res);
    }

    public function testStopMaskRule()
    {
        $sensCheck = $this -> sensCheck;
        $arr = array(
            'operate'=>'',
            'uuids'=>'',
        );
        
        
        $res = $sensCheck -> stopMaskRule($arr);
        $this->do_assert($res);
    }

    public function testListSensCheck()
    {
        $sensCheck = $this -> sensCheck;
        $arr = array(
            'page'=>0,
            'limit'=>10,
        );
        
        
        $res = $sensCheck -> listSensCheck($arr);
        $this->do_assert($res);
    }

    public function testDescriptSensCheck()
    {
        $sensCheck = $this -> sensCheck;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $sensCheck -> descriptSensCheck($arr);
        $this->do_assert($res);
    }

    public function testListSensCheckStatus()
    {
        $sensCheck = $this -> sensCheck;
        $arr = array(
            'uuids'=>'',
        );
        
        
        $res = $sensCheck -> listSensCheckStatus($arr);
        $this->do_assert($res);
    }

    public function testListSensCheckResult()
    {
        $sensCheck = $this -> sensCheck;
        $arr = array(
            'uuid'=>'',
            'type'=>'',
            'user'=>'',
            'table'=>'',
            'limit'=>1,
            'page'=>1,
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $sensCheck -> listSensCheckResult($arr);
        $this->do_assert($res);
    }

    public function testListSensCheckIgnoreCol()
    {
        $sensCheck = $this -> sensCheck;
        $arr = array(
            'rule_uuid'=>'',
            'col'=>'',
        );
        
        
        $res = $sensCheck -> listSensCheckIgnoreCol($arr);
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