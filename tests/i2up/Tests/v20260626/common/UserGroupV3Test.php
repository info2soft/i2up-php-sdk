<?php
namespace i2up\Test\v20260626\common;

use i2up\common\v20260626\UserGroupV3;
use i2up\common\Auth;
use PHPUnit\Framework\TestCase;
                
class UserGroupV3Test extends TestCase
 {
    private $userGroupV3;
    
    public function setUp():void
    {
        parent::setup();
        $this -> userGroupV3 = new UserGroupV3(new Auth());
    }

    public function testModifyUserGroupResBind()
    {
        $userGroupV3 = $this -> userGroupV3;
        $arr = array(
            'res_uuid'=>'',
            'group_list'=>array(
            '0'=>array(
            'group_uuid'=>'',
            'can_up'=>0,
            'can_op'=>0,
            'is_bound'=>1,),),
        );
        
        
        $res = $userGroupV3 -> modifyUserGroupResBind($arr);
        $this->do_assert($res);
    }

    public function testListUserGroupResBind()
    {
        $userGroupV3 = $this -> userGroupV3;
        $arr = array(
            'res_uuid'=>'',
            'page'=>1,
            'limit'=>1,
        );
        
        
        $res = $userGroupV3 -> listUserGroupResBind($arr);
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