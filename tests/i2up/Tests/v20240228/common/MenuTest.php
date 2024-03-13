<?php
namespace i2up\Test\v20240228\common;

use i2up\common\v20240228\Menu;
use i2up\common\Auth;
                
class MenuTest extends \PHPUnit_Framework_TestCase
 {
    private $menu;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> menu = new Menu(new Auth());
    }

    public function testListMenu()
    {
        $menu = $this -> menu;
        $arr = array();
        $res = $menu -> listMenu($arr);
        $this->do_assert($res);
    }

    private function do_assert($res)
    {
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}