<?php
namespace i2up\Test\v20240228\resource;

use i2up\resource\v20240228\BizGroup;
use i2up\common\Auth;
                
class BizGroupTest extends \PHPUnit_Framework_TestCase
 {
    private $bizGroup;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> bizGroup = new BizGroup(new Auth());
    }

    public function testCreateBizGroup()
    {
        $bizGroup = $this -> bizGroup;
        $arr = array(
            'biz_grp' => array(
                'grp_name' => '123',
                'type' => 1,
                'subtype' => 1,
                'comment' => '',
            ),
        );
        $res = $bizGroup -> createBizGroup($arr);
        $this->do_assert($res);
    }

    public function testModifyBizGroup()
    {
        $bizGroup = $this -> bizGroup;
        $arr = array(
            'uuid' => 'F2CCE34F-3703-455A-8F20-254BBEF9E401',
            'biz_grp' => array(
                'comment' => '1234',
                'grp_name' => 'grp_name1',
                'type' => 3,
                'subtype' => 10,
            ),
        );
        $res = $bizGroup -> modifyBizGroup($arr);
        $this->do_assert($res);
    }

    public function testDescribeBizGroup()
    {
        $bizGroup = $this -> bizGroup;
        $arr = array(
            'uuid' => 'F2CCE34F-3703-455A-8F20-254BBEF9E401',
        );
        $res = $bizGroup -> describeBizGroup($arr);
        $this->do_assert($res);
    }

    public function testDeleteBizGroup()
    {
        $bizGroup = $this -> bizGroup;
        $arr = array(
            'grp_uuids' => array(
                '0' => 'F2CCE34F-3703-455A-8F20-254BBEF9E401',
            ),
        );
        $res = $bizGroup -> deleteBizGroup($arr);
        $this->do_assert($res);
    }

    public function testListBizGroup()
    {
        $bizGroup = $this -> bizGroup;
        $arr = array(
            'limit' => 1,
            'search_field' => '',
            'search_value' => '',
            'direction' => '',
            'order_by' => '',
            'page' => 1,
            'where_args[type]' => 1,
            'filter[0]' => '[{"key":"", "operator":"", "value":""}]',
            'filter_and_or' => 1,
        );
        $res = $bizGroup -> listBizGroup($arr);
        $this->do_assert($res);
    }

    public function testUpdateBizGroupBind()
    {
        $bizGroup = $this -> bizGroup;
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111',
            'uuids' => array(
                '0' => '67E33CDB-D75B-15B3-367D-50C764F5A26F',
            ),
        );
        $res = $bizGroup -> updateBizGroupBind($arr);
        $this->do_assert($res);
    }

    public function testListBizGroupBind()
    {
        $bizGroup = $this -> bizGroup;
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111',
        );
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
            'group_uuid'=>'11111111-1111-1111-1111-111111111111',
            'name'=>'',
            'wk_uuid'=>'',
            'bk_uuid'=>'',
        );
        $res = $bizGroup -> listBizGroupResource($arr);
        $this->do_assert($res);
    }

    private function do_assert($res)
    {
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}