<?php
namespace i2up\Test\v20250630\active;

use i2up\active\v20250630\SqlServerRule;
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
            'rule_uuid'=>'ef82A565-beB9-db81-D392-7b4c3c3b4F0C',
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
            'uuids'=>'Cb79ed9B-AA49-5fB1-Ec29-c5Ed194Cf0dD',
        );
        
        
        $res = $sqlServerRule -> deleteBkTakeover($arr);
        $this->do_assert($res);
    }

    public function testDescribeBkTakeoverResult()
    {
        $sqlServerRule = $this -> sqlServerRule;
        $arr = array(
            'bk_takeover_uuid'=>'fcA13e24-C4Cf-A1E5-A5FB-856EB6d74f69',
        );
        
        
        $res = $sqlServerRule -> describeBkTakeoverResult($arr);
        $this->do_assert($res);
    }

    public function testStopBkTakeover()
    {
        $sqlServerRule = $this -> sqlServerRule;
        $arr = array(
            'bk_takeover_uuids'=>'bb5CCE65-68cF-a5Ad-9B96-e7E2D9AC3E70',
            'operate'=>'',
        );
        
        
        $res = $sqlServerRule -> stopBkTakeover($arr);
        $this->do_assert($res);
    }

    public function testRestartBkTakeover()
    {
        $sqlServerRule = $this -> sqlServerRule;
        $arr = array(
            'bk_takeover_uuids'=>'3F97Edd9-f275-bf0F-D9C6-3f8b3D76511F',
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