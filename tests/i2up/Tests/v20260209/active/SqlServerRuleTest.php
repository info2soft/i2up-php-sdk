<?php
namespace i2up\Test\v20260209\active;

use i2up\active\v20260209\SqlServerRule;
use i2up\common\Auth;
                
class SqlServerRuleTest extends \PHPUnit_Framework_TestCase
 {
    private $sqlServerRule;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
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
            'rule_uuid'=>'97B56fB1-ccbb-4EA9-eE2A-6460EBE81b14',
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
            'uuids'=>'ae81d9be-2eEF-3842-22Bc-DCe952e7BD5d',
        );
        
        
        $res = $sqlServerRule -> deleteBkTakeover($arr);
        $this->do_assert($res);
    }

    public function testDescribeBkTakeoverResult()
    {
        $sqlServerRule = $this -> sqlServerRule;
        $arr = array(
            'bk_takeover_uuid'=>'feed8f52-eF2E-4825-EF0f-E56bc2b407ed',
        );
        
        
        $res = $sqlServerRule -> describeBkTakeoverResult($arr);
        $this->do_assert($res);
    }

    public function testStopBkTakeover()
    {
        $sqlServerRule = $this -> sqlServerRule;
        $arr = array(
            'bk_takeover_uuids'=>'Fab55B1C-E036-D367-c17b-5bd95edB97dE',
            'operate'=>'',
        );
        
        
        $res = $sqlServerRule -> stopBkTakeover($arr);
        $this->do_assert($res);
    }

    public function testRestartBkTakeover()
    {
        $sqlServerRule = $this -> sqlServerRule;
        $arr = array(
            'bk_takeover_uuids'=>'148d7ED8-C77D-cEeB-B42C-03b06B5e992e',
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