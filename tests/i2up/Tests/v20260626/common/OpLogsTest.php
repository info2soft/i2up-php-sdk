<?php
namespace i2up\Test\v20260626\common;

use i2up\common\v20260626\OpLogs;
use i2up\common\Auth;
use PHPUnit\Framework\TestCase;
                
class OpLogsTest extends TestCase
 {
    private $opLogs;
    
    public function setUp():void
    {
        parent::setup();
        $this -> opLogs = new OpLogs(new Auth());
    }

    public function testListOpLog()
    {
        $opLogs = $this -> opLogs;
        $arr = array(
            'page'=>1,
            'end'=>1548950400,
            'limit'=>10,
            'start'=>1546272000,
            'op_type'=>'delete_nodes',
            'level'=>0,
            'description'=>'delete_nodes',
            'suffix'=>'.txt',
            'address'=>'',
            'username'=>'',
            'download'=>false,
        );
        
        
        $res = $opLogs -> listOpLog($arr);
        $this->do_assert($res);
    }

    public function testImportOpLog()
    {
        $opLogs = $this -> opLogs;
        $arr = array();
        
        
        $res = $opLogs -> importOpLog($arr);
        $this->do_assert($res);
    }

    public function testDownloadOpLog()
    {
        $opLogs = $this -> opLogs;
        $arr = array(
            'end_time'=>1,
            'start_time'=>1,
            'download'=>'true',
        );
        
        
        $res = $opLogs -> downloadOpLog($arr);
        $this->do_assert($res);
    }

    public function testListUserLog()
    {
        $opLogs = $this -> opLogs;
        $arr = array(
            'page'=>1,
            'limit'=>10,
            'start'=>1546272000,
            'end'=>1548950400,
            'op_type'=>'delete_nodes',
            'level'=>0,
            'description'=>'delete_nodes',
            'suffix'=>'.txt',
        );
        
        
        $res = $opLogs -> listUserLog($arr);
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