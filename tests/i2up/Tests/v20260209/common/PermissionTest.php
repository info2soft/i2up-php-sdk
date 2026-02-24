<?php
namespace i2up\Test\v20260209\common;

use i2up\common\v20260209\Permission;
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

    public function testListCatPerms9()
    {
        $permission = $this -> permission;
        $arr = array(
            'interface_type'=>0,
        );
        
        
        $res = $permission -> listCatPerms9($arr);
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