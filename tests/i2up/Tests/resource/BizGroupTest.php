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
                'subtype'=>0,
                'comment'=>'123',
                'grp_name'=>'grp_name1',
                'type'=>1
            )
        );
        $res = $bizGroup -> createBizGroup($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testModifyBizGroup()
    {
        $bizGroup = $this -> bizGroup;
        $arr = array(
            'uuid'=>'11111111-1111-1111-1111-111111111111',
            'biz_grp'=>array(
                'comment'=>'123',
                'grp_name'=>'grp_name2',
                'type'=>3,
                'subtype'=>10
            )
        );
        $res = $bizGroup -> modifyBizGroup($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeBizGroup()
    {
        $bizGroup = $this -> bizGroup;
        $arr = array(
            'uuid'=>'11111111-1111-1111-1111-111111111111'
        );
        $res = $bizGroup -> describeBizGroup($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDeleteBizGroup()
    {
        $bizGroup = $this -> bizGroup;
        $arr = array(
            'grp_uuids'=>array(
                '0'=>'11111111-1111-1111-1111-111111111111'
            )
        );
        $res = $bizGroup -> deleteBizGroup($arr);
        var_export($res);
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
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testUpdateBizGroupBind()
    {
        $bizGroup = $this -> bizGroup;
        $arr = array(
            'uuid'=>'FA26B3DA-CB4E-AFC1-0AFD-34112B35E711',
            'uuids'=>array(
                '0'=>'67E33CDB-D75B-15B3-367D-50C764F5A26F'
            )
        );
        $res = $bizGroup -> updateBizGroupBind($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListBizGroupBind()
    {
        $bizGroup = $this -> bizGroup;
        $arr = array(
            'uuid'=>'11111111-1111-1111-1111-111111111111'
        );
        $res = $bizGroup -> listBizGroupBind($arr);
        var_export($res);
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
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}