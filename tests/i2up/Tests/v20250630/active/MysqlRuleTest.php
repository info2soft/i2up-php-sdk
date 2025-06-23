<?php
namespace i2up\Test\v20250630\active;

use i2up\active\v20250630\MysqlRule;
use i2up\common\Auth;
                
class MysqlRuleTest extends \PHPUnit_Framework_TestCase
 {
    private $mysqlRule;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
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
            'rule_uuid'=>'C97Ff7e8-ED97-a1b9-538e-3Bc4eda4BEb5',
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
            'uuids'=>'beEcFEDE-ECFc-CBC3-c02C-3AB6d5bA6d2B',
        );
        
        
        $res = $mysqlRule -> deleteBkTakeover($arr);
        $this->do_assert($res);
    }

    public function testDescribeBkTakeoverResult()
    {
        $mysqlRule = $this -> mysqlRule;
        $arr = array(
            'bk_takeover_uuid'=>'f5643eC6-D9b1-eC27-A907-93fEE9624ff5',
        );
        
        
        $res = $mysqlRule -> describeBkTakeoverResult($arr);
        $this->do_assert($res);
    }

    public function testStopBkTakeover()
    {
        $mysqlRule = $this -> mysqlRule;
        $arr = array(
            'bk_takeover_uuids'=>'8c08da86-d3A5-Fb9C-7cEa-1dF7ebF46fEd',
            'operate'=>'',
        );
        
        
        $res = $mysqlRule -> stopBkTakeover($arr);
        $this->do_assert($res);
    }

    public function testRestartBkTakeover()
    {
        $mysqlRule = $this -> mysqlRule;
        $arr = array(
            'bk_takeover_uuids'=>'cff6dc52-6fbe-B0db-17d3-6Df5A5b56706',
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