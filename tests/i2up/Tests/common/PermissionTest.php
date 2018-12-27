<?php
namespace i2up\Test\common;

use i2up\common\Permission;
use i2up\common\Auth;
use i2up\Config;
                
class PermissionTest extends \PHPUnit_Framework_TestCase
 {
    private $permission;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $auth = new Auth(Config::baseUrl, 'admin', 'Info1234', __DIR__ . '/../');
        $this -> permission = new Permission($auth);
    }

    public function testListCategory()
    {
        $permission = $this -> permission;
        $res = $permission -> listCategory();
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}