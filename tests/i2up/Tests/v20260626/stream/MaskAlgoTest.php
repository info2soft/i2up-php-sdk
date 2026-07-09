<?php
namespace i2up\Test\v20260626\stream;

use i2up\stream\v20260626\MaskAlgo;
use i2up\common\Auth;
use PHPUnit\Framework\TestCase;
                
class MaskAlgoTest extends TestCase
 {
    private $maskAlgo;
    
    public function setUp():void
    {
        parent::setup();
        $this -> maskAlgo = new MaskAlgo(new Auth());
    }

    public function testCreateAlgo()
    {
        $maskAlgo = $this -> maskAlgo;
        $arr = array(
            'ava_sens_type'=>1,
            'parent_id'=>1,
            'algo_name'=>'',
            'description'=>'',
            'params'=>'',
            'sort'=>'',
        );
        
        
        $res = $maskAlgo -> createAlgo($arr);
        $this->do_assert($res);
    }

    public function testListAlgos()
    {
        $maskAlgo = $this -> maskAlgo;
        $arr = array(
            'page'=>0,
            'limit'=>10,
        );
        
        
        $res = $maskAlgo -> listAlgos($arr);
        $this->do_assert($res);
    }

    public function testDescriptAlgo()
    {
        $maskAlgo = $this -> maskAlgo;
        $arr = array();
        
        $arr['id'] = "123456";
        $res = $maskAlgo -> descriptAlgo($arr);
        $this->do_assert($res);
    }

    public function testAlgoTest()
    {
        $maskAlgo = $this -> maskAlgo;
        $arr = array(
            'example'=>array(
            'orig'=>'1231',
            'mask'=>'-',),
            'parent_id'=>308,
            'ava_sens_type'=>8,
            'type_arg'=>'',
            'id'=>308,
            'params'=>array(),
        );
        
        
        $res = $maskAlgo -> algoTest($arr);
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