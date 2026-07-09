<?php
namespace i2up\Test\v20260626\active;

use i2up\active\v20260626\SqlServerRule;
use i2up\common\Auth;
use PHPUnit\Framework\TestCase;
                
class SqlServerRuleTest extends TestCase
 {
    private $sqlServerRule;
    
    public function setUp():void
    {
        parent::setup();
        $this -> sqlServerRule = new SqlServerRule(new Auth());
    }

    public function testListBkTakeoveNetworkCard()
    {
        $sqlServerRule = $this -> sqlServerRule;
        $arr = array(
            'rule_uuid'=>'',
        );
        
        
        $res = $sqlServerRule -> listBkTakeoveNetworkCard($arr);
        $this->do_assert($res);
    }

    public function testCreateBkTakeover()
    {
        $sqlServerRule = $this -> sqlServerRule;
        $arr = array(
            'script_content'=>'',
            'rule_uuid'=>'CFbB214d-0AD5-ee3f-AEEf-Ba444a4B33Bd',
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
        );
        
        
        $res = $sqlServerRule -> createBkTakeover($arr);
        $this->do_assert($res);
    }

    public function testDescribeBkTakeover()
    {
        $sqlServerRule = $this -> sqlServerRule;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $sqlServerRule -> describeBkTakeover($arr);
        $this->do_assert($res);
    }

    public function testDeleteBkTakeover()
    {
        $sqlServerRule = $this -> sqlServerRule;
        $arr = array(
            'force'=>false,
            'uuids'=>'BCfeB504-D5F2-11F6-1C5c-AFFd1EecD3cc',
        );
        
        
        $res = $sqlServerRule -> deleteBkTakeover($arr);
        $this->do_assert($res);
    }

    public function testDescribeBkTakeoverResult()
    {
        $sqlServerRule = $this -> sqlServerRule;
        $arr = array(
            'bk_takeover_uuid'=>'6FFfe2CC-181e-b3C4-3Cf3-dB68A8DcA1e8',
        );
        
        
        $res = $sqlServerRule -> describeBkTakeoverResult($arr);
        $this->do_assert($res);
    }

    public function testStopBkTakeover()
    {
        $sqlServerRule = $this -> sqlServerRule;
        $arr = array(
            'bk_takeover_uuids'=>'5C983DFb-32dd-c004-0E3d-3DeCCD61Cd01',
            'operate'=>'',
        );
        
        
        $res = $sqlServerRule -> stopBkTakeover($arr);
        $this->do_assert($res);
    }

    public function testRestartBkTakeover()
    {
        $sqlServerRule = $this -> sqlServerRule;
        $arr = array(
            'bk_takeover_uuids'=>'F73bAbDA-21EB-fcd8-56E3-dfcEdB4b1b7c',
            'operate'=>'',
        );
        
        
        $res = $sqlServerRule -> restartBkTakeover($arr);
        $this->do_assert($res);
    }

    public function testListBkTakeoverStatus()
    {
        $sqlServerRule = $this -> sqlServerRule;
        $arr = array(
            'uuids'=>array(),
        );
        
        
        $res = $sqlServerRule -> listBkTakeoverStatus($arr);
        $this->do_assert($res);
    }

    public function testListBkTakeover()
    {
        $sqlServerRule = $this -> sqlServerRule;
        $arr = array();
        
        
        $res = $sqlServerRule -> listBkTakeover($arr);
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