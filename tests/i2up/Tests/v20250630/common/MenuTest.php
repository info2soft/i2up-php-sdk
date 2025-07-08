<?php
namespace i2up\Test\v20250630\common;

use i2up\common\v20250630\Menu;
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