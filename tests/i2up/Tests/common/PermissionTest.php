<?php
namespace i2up\Test\common;

use i2up\common\Permission;
use i2up\common\Auth;
                
class PermissionTest extends \PHPUnit_Framework_TestCase
 {
    private $permission;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> permission = new Permission(new Auth());
    }

    public function testListCategory()
    {
        $permission = $this -> permission;
        $res = $permission -> listCategory();
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListCatPerms()
    {
        $permission = $this -> permission;
        $arr = array();
        $res = $permission -> listCatPerms($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}