<?php
namespace i2up\Test\v20250123\stream;

use i2up\stream\v20250123\OracleBkTakeover;
use i2up\common\Auth;
                
class OracleBkTakeoverTest extends \PHPUnit_Framework_TestCase
 {
    private $oracleBkTakeover;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> oracleBkTakeover = new OracleBkTakeover(new Auth());
    }

    public function testListBkTakeoveNetworkCard()
    {
        $oracleBkTakeover = $this -> oracleBkTakeover;
        $arr = array(
            'rule_uuid'=>'',
        );
        
        
        $res = $oracleBkTakeover -> listBkTakeoveNetworkCard($arr);
        $this->do_assert($res);
    }

    public function testCreateBkTakeover()
    {
        $oracleBkTakeover = $this -> oracleBkTakeover;
        $arr = array(
            'rule_uuid'=>'8C2FA6c1-524F-74DC-6cCD-78656dFbDAef',
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

    public function testDescribeBkTakeoverResult()
    {
        $oracleBkTakeover = $this -> oracleBkTakeover;
        $arr = array(
            'bk_takeover_uuid'=>'A3E93d2c-2828-aE7b-F9f7-bCAFc73E0EDC',
        );
        
        
        $res = $oracleBkTakeover -> describeBkTakeoverResult($arr);
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