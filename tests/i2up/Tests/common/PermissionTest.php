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
        $params = array(
            'username' => 'admin',
            'pwd' => 'Info1234',
            'cache_path' => __DIR__ . '/../',
            'ip' => Config::baseUrl
        );
        $auth = new Auth($params);
        $this -> permission = new Permission($auth);
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