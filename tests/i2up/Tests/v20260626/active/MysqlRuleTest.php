<?php
namespace i2up\Test\v20260626\active;

use i2up\active\v20260626\MysqlRule;
use i2up\common\Auth;
use PHPUnit\Framework\TestCase;
                
class MysqlRuleTest extends TestCase
 {
    private $mysqlRule;
    
    public function setUp():void
    {
        parent::setup();
        $this -> mysqlRule = new MysqlRule(new Auth());
    }

    public function testListBkTakeoveNetworkCard()
    {
        $mysqlRule = $this -> mysqlRule;
        $arr = array(
            'rule_uuid'=>'',
        );
        
        
        $res = $mysqlRule -> listBkTakeoveNetworkCard($arr);
        $this->do_assert($res);
    }

    public function testCreateBkTakeover()
    {
        $mysqlRule = $this -> mysqlRule;
        $arr = array(
            'rule_uuid'=>'5d52F7E7-bF52-E3eb-3bDB-c0be286Bf01f',
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
        
        
        $res = $mysqlRule -> createBkTakeover($arr);
        $this->do_assert($res);
    }

    public function testDescribeBkTakeover()
    {
        $mysqlRule = $this -> mysqlRule;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $mysqlRule -> describeBkTakeover($arr);
        $this->do_assert($res);
    }

    public function testDeleteBkTakeover()
    {
        $mysqlRule = $this -> mysqlRule;
        $arr = array(
            'force'=>false,
            'uuids'=>'2cb154Ad-eeFA-c9A8-16D5-bD1beCBcBF2D',
        );
        
        
        $res = $mysqlRule -> deleteBkTakeover($arr);
        $this->do_assert($res);
    }

    public function testDescribeBkTakeoverResult()
    {
        $mysqlRule = $this -> mysqlRule;
        $arr = array(
            'bk_takeover_uuid'=>'2f75fDF6-79Cc-eCed-b544-72Ae4f35e18A',
        );
        
        
        $res = $mysqlRule -> describeBkTakeoverResult($arr);
        $this->do_assert($res);
    }

    public function testStopBkTakeover()
    {
        $mysqlRule = $this -> mysqlRule;
        $arr = array(
            'bk_takeover_uuids'=>'EBcb15be-31ea-cdBd-E5D3-E4A882c5cDdd',
            'operate'=>'',
        );
        
        
        $res = $mysqlRule -> stopBkTakeover($arr);
        $this->do_assert($res);
    }

    public function testRestartBkTakeover()
    {
        $mysqlRule = $this -> mysqlRule;
        $arr = array(
            'bk_takeover_uuids'=>'7b305Ac3-FA73-3Ef3-AC5E-CB684eF64AC2',
            'operate'=>'',
        );
        
        
        $res = $mysqlRule -> restartBkTakeover($arr);
        $this->do_assert($res);
    }

    public function testListBkTakeoverStatus()
    {
        $mysqlRule = $this -> mysqlRule;
        $arr = array(
            'uuids'=>array(),
        );
        
        
        $res = $mysqlRule -> listBkTakeoverStatus($arr);
        $this->do_assert($res);
    }

    public function testListBkTakeover()
    {
        $mysqlRule = $this -> mysqlRule;
        $arr = array();
        
        
        $res = $mysqlRule -> listBkTakeover($arr);
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