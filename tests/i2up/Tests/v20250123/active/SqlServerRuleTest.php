<?php
namespace i2up\Test\v20250123\active;

use i2up\active\v20250123\SqlServerRule;
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
            'rule_uuid'=>'ffB4A56A-6DE1-e9B9-1EB2-e1bbA0B7C1bF',
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
            'uuids'=>'DBf2198D-BDc7-f6Fa-Bbbd-4A8B8bd7AA2F',
        );
        
        
        $res = $sqlServerRule -> deleteBkTakeover($arr);
        $this->do_assert($res);
    }

    public function testDescribeBkTakeoverResult()
    {
        $sqlServerRule = $this -> sqlServerRule;
        $arr = array(
            'bk_takeover_uuid'=>'dd2DF8Dd-AE19-4f14-0aFe-d86b9dC7eD58',
        );
        
        
        $res = $sqlServerRule -> describeBkTakeoverResult($arr);
        $this->do_assert($res);
    }

    public function testStopBkTakeover()
    {
        $sqlServerRule = $this -> sqlServerRule;
        $arr = array(
            'bk_takeover_uuids'=>'63fed764-ef55-7A6C-e6ff-12Dfca7bB5fd',
            'operate'=>'',
        );
        
        
        $res = $sqlServerRule -> stopBkTakeover($arr);
        $this->do_assert($res);
    }

    public function testRestartBkTakeover()
    {
        $sqlServerRule = $this -> sqlServerRule;
        $arr = array(
            'bk_takeover_uuids'=>'F7634dF0-d82c-3fCF-d83f-85F2EeFbF6B0',
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