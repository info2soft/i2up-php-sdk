<?php
namespace i2up\Test\v20260626\stream;

use i2up\stream\v20260626\MaskSensType;
use i2up\common\Auth;
use PHPUnit\Framework\TestCase;
                
class MaskSensTypeTest extends TestCase
 {
    private $maskSensType;
    
    public function setUp():void
    {
        parent::setup();
        $this -> maskSensType = new MaskSensType(new Auth());
    }

    public function testModifySensType()
    {
        $maskSensType = $this -> maskSensType;
        $arr = array(
            'algo_name'=>'屏蔽姓名',
            'algo_desc'=>'屏蔽姓名中的名字',
            'algo_params'=>'[{"name":"偏移量","key":"off","value":"1","setted":1,"type":"int"},{"name":"长度","key":"len","value":"0","setted":1,"type":"int"},{"name":"屏蔽字符","key":"val","value":"*","setted":0,"type":"string"}]',
            'username'=>'test',
            'user_uuid'=>'00000000-0000-0000-0000-000000000000',
            'id'=>1,
            'type_name'=>'姓名',
            'description'=>'由姓氏与名字组成，用于识别某一个人。',
            'sort'=>0,
            'create_time'=>'0',
            'params'=>'',
            'parent_id'=>1,
            'default_algo'=>1301,
            'default_algo_params'=>array(
            '0'=>array(
            'name'=>'偏移量',
            'key'=>'off',
            'value'=>'1',
            'setted'=>1,
            'type'=>'int',),
            '1'=>array(
            'name'=>'长度',
            'key'=>'len',
            'value'=>'0',
            'setted'=>2,
            'type'=>'int',),
            '2'=>array(
            'name'=>'屏蔽字符',
            'key'=>'val',
            'value'=>'*',
            'setted'=>3,
            'type'=>'string',),),
        );
        
        $arr['id'] = "123456";
        $res = $maskSensType -> modifySensType($arr);
        $this->do_assert($res);
    }

    public function testListTypes()
    {
        $maskSensType = $this -> maskSensType;
        $arr = array(
            'page'=>0,
            'limit'=>10,
        );
        
        
        $res = $maskSensType -> listTypes($arr);
        $this->do_assert($res);
    }

    public function testDescriptSensType()
    {
        $maskSensType = $this -> maskSensType;
        $arr = array();
        
        $arr['id'] = "123456";
        $res = $maskSensType -> descriptSensType($arr);
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