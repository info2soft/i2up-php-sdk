<?php
namespace i2up\Test\v20260626\resource;

use i2up\resource\v20260626\BizGroup;
use i2up\common\Auth;
use PHPUnit\Framework\TestCase;
                
class BizGroupTest extends TestCase
 {
    private $bizGroup;
    
    public function setUp():void
    {
        parent::setup();
        $this -> bizGroup = new BizGroup(new Auth());
    }

    public function testCreateBizGroup()
    {
        $bizGroup = $this -> bizGroup;
        $arr = array(
            'biz_grp'=>array(
            'grp_name'=>'',
            'type'=>1,
            'subtype'=>1,
            'comment'=>'',),
        );
        
        
        $res = $bizGroup -> createBizGroup($arr);
        $this->do_assert($res);
    }

    public function testModifyBizGroup()
    {
        $bizGroup = $this -> bizGroup;
        $arr = array(
            'biz_grp'=>array(
            'comment'=>'123',
            'grp_name'=>'grp_name',
            'type'=>3,
            'subtype'=>10,),
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $bizGroup -> modifyBizGroup($arr);
        $this->do_assert($res);
    }

    public function testDescribeBizGroup()
    {
        $bizGroup = $this -> bizGroup;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $bizGroup -> describeBizGroup($arr);
        $this->do_assert($res);
    }

    public function testDeleteBizGroup()
    {
        $bizGroup = $this -> bizGroup;
        $arr = array(
            'grp_uuids'=>array(
            '0'=>'11111111-1111-1111-1111-111111111111',),
        );
        
        
        $res = $bizGroup -> deleteBizGroup($arr);
        $this->do_assert($res);
    }

    public function testListBizGroup()
    {
        $bizGroup = $this -> bizGroup;
        $arr = array(
            'limit'=>1,
            'search_field'=>'',
            'search_value'=>'',
            'direction'=>'',
            'order_by'=>'',
            'page'=>1,
            'filter'=>array(
            '0'=>array(
            'key'=>'',
            'operator'=>'',
            'value'=>'',),),
            'filter_and_or'=>1,
            'where_args'=>array(
            'type'=>'',),
        );
        
        
        $res = $bizGroup -> listBizGroup($arr);
        $this->do_assert($res);
    }

    public function testUpdateBizGroupBind()
    {
        $bizGroup = $this -> bizGroup;
        $arr = array(
            'uuids'=>array(
            '0'=>'67E33CDB-D75B-15B3-367D-50C764F5A26F',),
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $bizGroup -> updateBizGroupBind($arr);
        $this->do_assert($res);
    }

    public function testListBizGroupBind()
    {
        $bizGroup = $this -> bizGroup;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $bizGroup -> listBizGroupBind($arr);
        $this->do_assert($res);
    }

    public function testListBizGroupResource()
    {
        $bizGroup = $this -> bizGroup;
        $arr = array(
            'type'=>1,
            'subtype'=>0,
            'uuid'=>'',
            'group_uuid'=>'',
            'name'=>'',
            'wk_uuid'=>'',
            'bk_uuid'=>'',
        );
        
        
        $res = $bizGroup -> listBizGroupResource($arr);
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