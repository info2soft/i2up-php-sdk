<?php
namespace i2up\Test\v20250630\stream;

use i2up\stream\v20250630\OracleBkTakeover;
use i2up\common\Auth;
                
class OracleBkTakeoverTest extends \PHPUnit_Framework_TestCase
 {
    private $oracleBkTakeover;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> oracleBkTakeover = new OracleBkTakeover(new Auth());
    }

    public function testCreateBkTakeover()
    {
        $oracleBkTakeover = $this -> oracleBkTakeover;
        $arr = array(
            'rule_uuid'=>'7EEC132F-1543-E46B-EfA6-CFE9279d1D5b',
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
        $arr = array();
        
        
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
            'bk_takeover_uuid'=>'58C42AEf-91B4-C4B3-B2EE-A742AeF18e9f',
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