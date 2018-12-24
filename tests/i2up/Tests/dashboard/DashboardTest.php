<?php

namespace i2up\Test\dashboard;

use i2up\dashboard\v20181217\Dashboard;
use i2up\common\Auth;

class DashboardTest extends \PHPUnit_Framework_TestCase
{
    private $dashboard;
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $auth = new Auth('admin','Info1234');
        $this -> dashboard = new Dashboard($auth);
    }
    public function testOverall()
    {
        $dashboard = $this -> dashboard;
        $res = $dashboard -> overall();
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
    public function testHa()
    {
        $dashboard = $this -> dashboard;
        $arr = array(
            'page'=>'',
            'limit'=>'',
        );
        $res = $dashboard -> ha($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}