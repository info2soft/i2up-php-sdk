<?php
namespace i2up\Test\v20260209\resource;

use i2up\resource\v20260209\BizGroupV3;
use i2up\common\Auth;
                
class BizGroupV3Test extends \PHPUnit_Framework_TestCase
 {
    private $bizGroupV3;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> bizGroupV3 = new BizGroupV3(new Auth());
    }

    public function testCreateBizGroup()
    {
        $bizGroupV3 = $this -> bizGroupV3;
        $arr = array(
            'biz_grp'=>array(
            'grp_name'=>'',
            'type'=>1,
            'subtype'=>1,
            'comment'=>'',),
        );
        
        
        $res = $bizGroupV3 -> createBizGroup($arr);
        $this->do_assert($res);
    }

    public function testListBizGroupResource()
    {
        $bizGroupV3 = $this -> bizGroupV3;
        $arr = array(
            'type'=>1,
            'bk_uuid'=>'',
            'subtype'=>0,
            'uuid'=>'',
            'group_uuid'=>'',
            'name'=>'',
            'wk_uuid'=>'',
        );
        
        
        $res = $bizGroupV3 -> listBizGroupResource($arr);
        $this->do_assert($res);
    }

    public function testListBizGroupBind()
    {
        $bizGroupV3 = $this -> bizGroupV3;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $bizGroupV3 -> listBizGroupBind($arr);
        $this->do_assert($res);
    }

    public function testUpdateBizGroupBind()
    {
        $bizGroupV3 = $this -> bizGroupV3;
        $arr = array(
            'uuids'=>array(
            '0'=>'67E33CDB-D75B-15B3-367D-50C764F5A26F',),
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $bizGroupV3 -> updateBizGroupBind($arr);
        $this->do_assert($res);
    }

    public function testListBizGroup()
    {
        $bizGroupV3 = $this -> bizGroupV3;
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
        
        
        $res = $bizGroupV3 -> listBizGroup($arr);
        $this->do_assert($res);
    }

    public function testDeleteBizGroup()
    {
        $bizGroupV3 = $this -> bizGroupV3;
        $arr = array(
            'grp_uuids'=>array(
            '0'=>'11111111-1111-1111-1111-111111111111',),
        );
        
        
        $res = $bizGroupV3 -> deleteBizGroup($arr);
        $this->do_assert($res);
    }

    public function testDescribeBizGroup()
    {
        $bizGroupV3 = $this -> bizGroupV3;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $bizGroupV3 -> describeBizGroup($arr);
        $this->do_assert($res);
    }

    public function testModifyBizGroup()
    {
        $bizGroupV3 = $this -> bizGroupV3;
        $arr = array(
            'biz_grp'=>array(
            'comment'=>'123',
            'grp_name'=>'grp_name',
            'type'=>3,
            'subtype'=>10,),
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $bizGroupV3 -> modifyBizGroup($arr);
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