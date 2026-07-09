<?php
namespace i2up\Test\v20260626\common;

use i2up\common\v20260626\CompareResult;
use i2up\common\Auth;
use PHPUnit\Framework\TestCase;
                
class CompareResultTest extends TestCase
 {
    private $compareResult;
    
    public function setUp():void
    {
        parent::setup();
        $this -> compareResult = new CompareResult(new Auth());
    }

    public function testListCompareResult()
    {
        $compareResult = $this -> compareResult;
        $arr = array(
            'page'=>'',
            'limit'=>'',
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $compareResult -> listCompareResult($arr);
        $this->do_assert($res);
    }

    public function testDownloadCompareResult()
    {
        $compareResult = $this -> compareResult;
        $arr = array(
            'result_uuids'=>array(),
            'operate'=>'',
        );
        
        
        $res = $compareResult -> downloadCompareResult($arr);
        $this->do_assert($res);
    }

    public function testDeleteCompareResult()
    {
        $compareResult = $this -> compareResult;
        $arr = array(
            'result_uuids'=>array(),
        );
        
        
        $res = $compareResult -> deleteCompareResult($arr);
        $this->do_assert($res);
    }

    public function testViewConfig()
    {
        $compareResult = $this -> compareResult;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $compareResult -> viewConfig($arr);
        $this->do_assert($res);
    }

    public function testListDiffDetail()
    {
        $compareResult = $this -> compareResult;
        $arr = array(
            'uuid'=>'',
            'type'=>'',
            'page'=>1,
            'limit'=>10,
        );
        
        
        $res = $compareResult -> listDiffDetail($arr);
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