<?php
namespace i2up\Test\v20260209\resource;

use i2up\resource\v20260209\ReCyle;
use i2up\common\Auth;
                
class ReCyleTest extends \PHPUnit_Framework_TestCase
 {
    private $reCyle;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
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
            '0'=>'c556Cf0e-4fDd-D7Eb-Ee77-8f7B9d8C06f4',),
            'force_refresh'=>0,
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