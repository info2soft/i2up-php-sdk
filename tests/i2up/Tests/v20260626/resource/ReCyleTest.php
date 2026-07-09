<?php
namespace i2up\Test\v20260626\resource;

use i2up\resource\v20260626\ReCyle;
use i2up\common\Auth;
use PHPUnit\Framework\TestCase;
                
class ReCyleTest extends TestCase
 {
    private $reCyle;
    
    public function setUp():void
    {
        parent::setup();
        $this -> reCyle = new ReCyle(new Auth());
    }

    public function testListRecycle()
    {
        $reCyle = $this -> reCyle;
        $arr = array(
            'page'=>1,
            'limit'=>1,
            'type'=>'',
            'where_args'=>array(
            'xxx'=>'',),
        );
        
        
        $res = $reCyle -> listRecycle($arr);
        $this->do_assert($res);
    }

    public function testDeleteRecycle()
    {
        $reCyle = $this -> reCyle;
        $arr = array(
            'uuids'=>array(),
        );
        
        
        $res = $reCyle -> deleteRecycle($arr);
        $this->do_assert($res);
    }

    public function testListRecycleStatus()
    {
        $reCyle = $this -> reCyle;
        $arr = array(
            'uuids'=>array(
            '0'=>'D2BCC5c1-FdDC-5d68-47AC-29994A30C7Ef',),
            'force_refresh'=>1,
        );
        
        
        $res = $reCyle -> listRecycleStatus($arr);
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