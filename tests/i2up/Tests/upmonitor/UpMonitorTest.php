<?php
namespace i2up\Test\upmonitor;

use i2up\upmonitor\v20190805\UpMonitor;
use i2up\common\Auth;

class UpMonitorTest extends \PHPUnit_Framework_TestCase
{
    private $upMonitor;

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
        $this -> upMonitor = new UpMonitor($auth);
    }

    public function testAuthUpMonitor()
    {
        $upMonitor = $this -> upMonitor;
        $arr = array(
            'access_key'=>'3f0bfb5a3ab84b2c589869ef95295bb21e6042c0',
            'secret_key'=>'3f0bfb5a3ab84b2c589869ef95295bb21e6042c0',
            'ip'=>'127.0.0.1',
            'port'=>'58086',
        );
        $res = $upMonitor -> authUpMonitor($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeUpMonitorToken()
    {
        $upMonitor = $this -> upMonitor;
        $arr = array(
            'up_uuid'=>'',
        );
        $res = $upMonitor -> describeUpMonitorToken($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testCreateUpMonitor()
    {
        $upMonitor = $this -> upMonitor;
        $arr = array(
            'access_key'=>'3f0bfb5a3ab84b2c589869ef95295bb21e6042c0',
            'biz_grp_list'=>array(),
            'comment'=>'备注xxx',
            'secret_key'=>'3f0bfb5a3ab84b2c589869ef95295bb21e6042c0',
            'ip'=>'127.0.0.1',
            'port'=>'58086',
            'up_uuid'=>'CE753C48-96F9-6C38-C3DE-A25E7405D03F',
            'up_name'=>'就这个控制机',
        );
        $res = $upMonitor -> createUpMonitor($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testModifyUpMonitor()
    {
        $upMonitor = $this -> upMonitor;
        $arr = array(
            'access_key'=>'',
            'biz_grp_list'=>array(),
            'comment'=>'',
            'random_str'=>'',
            'secret_key'=>'',
            'ip'=>'',
            'port'=>'',
            'up_name'=>'',
        );
        $res = $upMonitor -> modifyUpMonitor($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeUpMonitor()
    {
        $upMonitor = $this -> upMonitor;
        $arr = array(
        );
        $res = $upMonitor -> describeUpMonitor($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListUpMonitor()
    {
        $upMonitor = $this -> upMonitor;
        $arr = array(
            'limit'=>1,
            'page'=>1,
        );
        $res = $upMonitor -> listUpMonitor($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testRefreshUpMonitor()
    {
        $upMonitor = $this -> upMonitor;
        $arr = array(
            'up_uuids'=>array(),
            'operate'=>'',
        );
        $res = $upMonitor -> refreshUpMonitor($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListUpMonitorStatus()
    {
        $upMonitor = $this -> upMonitor;
        $arr = array(
            'up_uuids'=>array(),
        );
        $res = $upMonitor -> listUpMonitorStatus($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDeleteUpMonitor()
    {
        $upMonitor = $this -> upMonitor;
        $arr = array(
            'up_uuids'=>array(),
        );
        $res = $upMonitor -> deleteUpMonitor($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}