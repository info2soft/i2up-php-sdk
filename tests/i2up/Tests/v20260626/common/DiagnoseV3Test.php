<?php
namespace i2up\Test\v20260626\common;

use i2up\common\v20260626\DiagnoseV3;
use i2up\common\Auth;
use PHPUnit\Framework\TestCase;
                
class DiagnoseV3Test extends TestCase
 {
    private $diagnoseV3;
    
    public function setUp():void
    {
        parent::setup();
        $this -> diagnoseV3 = new DiagnoseV3(new Auth());
    }

    public function testCreateDiagnose()
    {
        $diagnoseV3 = $this -> diagnoseV3;
        $arr = array(
            'item_uuid'=>'',
            'config_addr'=>'',
            'check_type'=>1,
            'wk_uuid'=>'67E33CDB-D75B-15B3-367D-50C764F5A26F',
            'bk_uuid'=>'67E33CDB-D75B-15B3-367D-50C764F5A26F',
            'config_port'=>'',
            'start_date'=>'2022-10-24',
            'end_date'=>'2022-10-27',
            'time_switch'=>0,
        );
        
        
        $res = $diagnoseV3 -> createDiagnose($arr);
        $this->do_assert($res);
    }

    public function testListDiagnose()
    {
        $diagnoseV3 = $this -> diagnoseV3;
        $arr = array(
            'page'=>1,
            'limit'=>10,
        );
        
        
        $res = $diagnoseV3 -> listDiagnose($arr);
        $this->do_assert($res);
    }

    public function testDeleteDiagnose()
    {
        $diagnoseV3 = $this -> diagnoseV3;
        $arr = array(
            'check_uuids'=>array(
            '0'=>'11111111-1111-1111-1111-111111111111',),
        );
        
        
        $res = $diagnoseV3 -> deleteDiagnose($arr);
        $this->do_assert($res);
    }

    public function testListVpRules()
    {
        $diagnoseV3 = $this -> diagnoseV3;
        $arr = array();
        
        
        $res = $diagnoseV3 -> listVpRules($arr);
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