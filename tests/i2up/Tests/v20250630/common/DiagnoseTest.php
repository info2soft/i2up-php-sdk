<?php
namespace i2up\Test\v20250630\common;

use i2up\common\v20250630\Diagnose;
use i2up\common\Auth;
                
class DiagnoseTest extends \PHPUnit_Framework_TestCase
 {
    private $diagnose;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> diagnose = new Diagnose(new Auth());
    }

    public function testCreateDiagnose()
    {
        $diagnose = $this -> diagnose;
        $arr = array(
            'item_uuid'=>'',
            'check_type'=>1,
            'wk_uuid'=>'67E33CDB-D75B-15B3-367D-50C764F5A26F',
            'bk_uuid'=>'67E33CDB-D75B-15B3-367D-50C764F5A26F',
            'config_addr'=>'',
            'config_port'=>'',
            'start_date'=>'2022-10-24',
            'end_date'=>'2022-10-27',
            'time_switch'=>0,
        );
        
        
        $res = $diagnose -> createDiagnose($arr);
        $this->do_assert($res);
    }

    public function testListDiagnose()
    {
        $diagnose = $this -> diagnose;
        $arr = array(
            'page'=>1,
            'limit'=>10,
        );
        
        
        $res = $diagnose -> listDiagnose($arr);
        $this->do_assert($res);
    }

    public function testDeleteDiagnose()
    {
        $diagnose = $this -> diagnose;
        $arr = array(
            'check_uuids'=>array(
            '0'=>'11111111-1111-1111-1111-111111111111',),
        );
        
        
        $res = $diagnose -> deleteDiagnose($arr);
        $this->do_assert($res);
    }

    public function testListVpRules()
    {
        $diagnose = $this -> diagnose;
        $arr = array();
        
        
        $res = $diagnose -> listVpRules($arr);
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