<?php
namespace i2up\Test\v20250123\active;

use i2up\active\v20250123\MysqlRule;
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
            'rule_uuid'=>'cb7Ebbc6-cfFB-DefB-2744-0cE1a809eCF5',
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
            'uuids'=>'1DfB8A7b-e234-31F1-ef18-fF65F4D32cDe',
        );
        
        
        $res = $mysqlRule -> deleteBkTakeover($arr);
        $this->do_assert($res);
    }

    public function testDescribeBkTakeoverResult()
    {
        $mysqlRule = $this -> mysqlRule;
        $arr = array(
            'bk_takeover_uuid'=>'eDC43c5b-9398-27fb-bf47-C54dd2eAA8D6',
        );
        
        
        $res = $mysqlRule -> describeBkTakeoverResult($arr);
        $this->do_assert($res);
    }

    public function testStopBkTakeover()
    {
        $mysqlRule = $this -> mysqlRule;
        $arr = array(
            'bk_takeover_uuids'=>'1CAc9f08-5f2E-Ec6F-B263-F6AF3cD5E724',
            'operate'=>'',
        );
        
        
        $res = $mysqlRule -> stopBkTakeover($arr);
        $this->do_assert($res);
    }

    public function testRestartBkTakeover()
    {
        $mysqlRule = $this -> mysqlRule;
        $arr = array(
            'bk_takeover_uuids'=>'C862C6b2-590B-9b11-6771-b819Edf2Bd0c',
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