<?php
namespace i2up\Test\v20260209\active;

use i2up\active\v20260209\MysqlRule;
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
            'rule_uuid'=>'10b8521c-7384-dDA2-4Ce5-2dcef32660a9',
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
            'uuids'=>'9ADCd696-6dD3-6a90-e3DF-C9e239E3C9f6',
        );
        
        
        $res = $mysqlRule -> deleteBkTakeover($arr);
        $this->do_assert($res);
    }

    public function testDescribeBkTakeoverResult()
    {
        $mysqlRule = $this -> mysqlRule;
        $arr = array(
            'bk_takeover_uuid'=>'D6bd60E2-fC14-2803-Be14-5EE7dde57C4C',
        );
        
        
        $res = $mysqlRule -> describeBkTakeoverResult($arr);
        $this->do_assert($res);
    }

    public function testStopBkTakeover()
    {
        $mysqlRule = $this -> mysqlRule;
        $arr = array(
            'bk_takeover_uuids'=>'2Bb8DA8F-bB54-d7fD-e7cB-6f3044E4F9f1',
            'operate'=>'',
        );
        
        
        $res = $mysqlRule -> stopBkTakeover($arr);
        $this->do_assert($res);
    }

    public function testRestartBkTakeover()
    {
        $mysqlRule = $this -> mysqlRule;
        $arr = array(
            'bk_takeover_uuids'=>'feA793bf-0668-eeeB-A7Ee-bb88cEEddE53',
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