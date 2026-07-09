<?php
namespace i2up\Test\v20260626\stream;

use i2up\stream\v20260626\OracleBkTakeover;
use i2up\common\Auth;
use PHPUnit\Framework\TestCase;
                
class OracleBkTakeoverTest extends TestCase
 {
    private $oracleBkTakeover;
    
    public function setUp():void
    {
        parent::setup();
        $this -> oracleBkTakeover = new OracleBkTakeover(new Auth());
    }

    public function testCreateBkTakeover()
    {
        $oracleBkTakeover = $this -> oracleBkTakeover;
        $arr = array(
            'rule_uuid'=>'9d8EACb8-dFBE-646e-ecfC-fae9DdAEe59F',
            'type'=>1,
            'enable_trgjob'=>1,
            'enable_alter_seq'=>1,
            'start_val'=>10,
            'execute_script'=>1,
            'enable_attachip'=>0,
            'net_adapter'=>'',
            'ip'=>'',
            'disable_trgjob'=>1,
            'dettach_ip'=>1,
            'script_content'=>'',
        );
        
        
        $res = $oracleBkTakeover -> createBkTakeover($arr);
        $this->do_assert($res);
    }

    public function testListBkTakeover()
    {
        $oracleBkTakeover = $this -> oracleBkTakeover;
        $arr = array(
            'limit'=>1,
            'page'=>1,
        );
        
        
        $res = $oracleBkTakeover -> listBkTakeover($arr);
        $this->do_assert($res);
    }

    public function testListBkTakeoverNetworkCard()
    {
        $oracleBkTakeover = $this -> oracleBkTakeover;
        $arr = array(
            'rule_uuid'=>'',
        );
        
        
        $res = $oracleBkTakeover -> listBkTakeoverNetworkCard($arr);
        $this->do_assert($res);
    }

    public function testDescribeBkTakeoverResult()
    {
        $oracleBkTakeover = $this -> oracleBkTakeover;
        $arr = array(
            'bk_takeover_uuid'=>'2BbAAc5b-Af51-b7A8-F5cd-Ac1a713cCB3D',
        );
        
        
        $res = $oracleBkTakeover -> describeBkTakeoverResult($arr);
        $this->do_assert($res);
    }

    public function testListSyncBkTakeoverStatus()
    {
        $oracleBkTakeover = $this -> oracleBkTakeover;
        $arr = array(
            'uuids'=>array(
            '0'=>'bf0c71AE-6278-dfbe-E4CA-BC1d1Acf352D',),
        );
        
        
        $res = $oracleBkTakeover -> listSyncBkTakeoverStatus($arr);
        $this->do_assert($res);
    }

    public function testDeleteBkTakeover()
    {
        $oracleBkTakeover = $this -> oracleBkTakeover;
        $arr = array(
            'uuids'=>'',
            'force'=>'',
        );
        
        
        $res = $oracleBkTakeover -> deleteBkTakeover($arr);
        $this->do_assert($res);
    }

    public function testOperateBkTakeover()
    {
        $oracleBkTakeover = $this -> oracleBkTakeover;
        $arr = array(
            'uuids'=>'',
            'operate'=>'',
        );
        
        
        $res = $oracleBkTakeover -> operateBkTakeover($arr);
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