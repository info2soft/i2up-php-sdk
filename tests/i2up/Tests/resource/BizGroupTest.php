<?php
namespace i2up\Test\resource;

use i2up\resource\v20181217\BizGroup;
use i2up\common\Auth;
use i2up\Config;

class BizGroupTest extends \PHPUnit_Framework_TestCase
{
    private $bizGroup;

    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $auth = new Auth(Config::baseUrl, 'admin', 'Info1234', __DIR__ . '/../');
        $this -> bizGroup = new BizGroup($auth);
    }

    public function testCreateBizGroup()
    {
        $bizGroup = $this -> bizGroup;
        $arr = array(
            'biz_grp'=>array(
                'subtype'=>10,
                'comment'=>'123',
                'grp_name'=>'grp_name',
                'type'=>3
            )
        );
        $res = $bizGroup -> createBizGroup($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testModifyBizGroup()
    {
        $bizGroup = $this -> bizGroup;
        $arr = array(
            'uuid'=>'',
            'biz_grp'=>array(
                'comment'=>'123',
                'grp_name'=>'grp_name',
                'type'=>3,
                'subtype'=>10
            )
        );
        $res = $bizGroup -> modifyBizGroup($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeBizGroup()
    {
        $bizGroup = $this -> bizGroup;
        $arr = array(
            'uuid'=>''
        );
        $res = $bizGroup -> describeBizGroup($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDeleteBizGroup()
    {
        $bizGroup = $this -> bizGroup;
        $arr = array(
            'grp_uuids'=>array()
        );
        $res = $bizGroup -> deleteBizGroup($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListBizGroup()
    {
        $bizGroup = $this -> bizGroup;
        $arr = array(
            'limit'=>10,
            'search_field'=>'',
            'search_value'=>'',
            'direction'=>'',
            'order_by'=>'',
            'page'=>1
        );
        $res = $bizGroup -> listBizGroup($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testUpdateBizGroupBind()
    {
        $bizGroup = $this -> bizGroup;
        $arr = array(
            'uuid'=>'',
            'uuids'=>array(
                '0'=>'928011BA-E134-E6A5-D84A-7933DD01894A',
                '1'=>'366C1A15-96B0-599A-3079-0A437F9BC7E8'
            )
        );
        $res = $bizGroup -> updateBizGroupBind($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListBizGroupBind()
    {
        $bizGroup = $this -> bizGroup;
        $arr = array(
            'uuid'=>''
        );
        $res = $bizGroup -> listBizGroupBind($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListBizGroupResource()
    {
        $bizGroup = $this -> bizGroup;
        $arr = array(
            'type'=>1,
            'subtype'=>0
        );
        $res = $bizGroup -> listBizGroupResource($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}