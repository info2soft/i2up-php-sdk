<?php
namespace i2up\Test\v20240228\common;

use i2up\common\v20240228\Permission;
use i2up\common\Auth;
                
class PermissionTest extends \PHPUnit_Framework_TestCase
 {
    private $permission;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> permission = new Permission(new Auth());
    }

    public function testListPermission()
    {
        $permission = $this -> permission;
        $arr = array();
        $res = $permission -> listPermission($arr);
        $this->do_assert($res);
    }

    public function testListCategory()
    {
        $permission = $this -> permission;
        $arr = array();
        $res = $permission -> listCategory($arr);
        $this->do_assert($res);
    }

    public function testListCatPerms()
    {
        $permission = $this -> permission;
        $arr = array(
            'interface_type'=>0,
        );
        $res = $permission -> listCatPerms($arr);
        $this->do_assert($res);
    }

    private function do_assert($res)
    {
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}