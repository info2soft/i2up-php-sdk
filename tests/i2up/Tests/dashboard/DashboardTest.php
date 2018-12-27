<?php

namespace i2up\Test\dashboard;

use i2up\dashboard\v20181217\Dashboard;
use i2up\common\Auth;
use i2up\Config;

class DashboardTest extends \PHPUnit_Framework_TestCase
{
    private $dashboard;
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $auth = new Auth(Config::baseUrl, 'admin','Info1234', __DIR__ . '/../');
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
    public function testDescribeVpRuleRate()
    {
        $dashboard = $this -> dashboard;
        $arr = array(
            'uuid'=>'',
            'wk_uuid'=>'4D130492-334A-42FC-46B6-E7F95FA3D6AC',
            'mode'=>'month',
            'type'=>'I2VP_BK',
            'group_uuid'=>'',
        );
        $res = $dashboard -> describeVpRuleRate($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeVmProtectRate()
    {
        $dashboard = $this -> dashboard;
        $arr = array(
            'vp_uuid'=>'4D130492-334A-42FC-46B6-E7F95FA3D6AC',
        );
        $res = $dashboard -> describeVmProtectRate($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testNode()
    {
        $dashboard = $this -> dashboard;
        $arr = array(
            'limit'=>30,
            'page'=>1,
            'type'=>0,
        );
        $res = $dashboard -> node($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testRepBackup()
    {
        $dashboard = $this -> dashboard;
        $arr = array(
            'limit'=>30,
            'type'=>0,
            'page'=>1,
        );
        $res = $dashboard -> repBackup($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}