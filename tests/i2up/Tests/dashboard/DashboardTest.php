<?php

namespace i2up\Test\dashboard;

use i2up\dashboard\v20190805\Dashboard;
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
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
    public function testHa()
    {
        $dashboard = $this -> dashboard;
        $arr = array(
            'page'=>'1',
            'limit'=>'10',
        );
        $res = $dashboard -> ha($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
    public function testDescribeVpRuleRate()
    {
        $dashboard = $this -> dashboard;
        $arr = array(
            'wk_uuid'=>'F28BA5A6-4FF9-E596-4371-1ED203D45143',
            'mode'=>'month',
            'type'=>'I2VP_BK'
        );
        $res = $dashboard -> describeVpRuleRate($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeVmProtectRate()
    {
        $dashboard = $this -> dashboard;
        $arr = array(
            'vp_uuid'=>'F28BA5A6-4FF9-E596-4371-1ED203D45143',
        );
        $res = $dashboard -> describeVmProtectRate($arr);
        var_export($res);
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
        var_export($res);
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
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}