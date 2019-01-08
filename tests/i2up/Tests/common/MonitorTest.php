<?php
namespace i2up\Test\common;

use i2up\common\Monitor;
use i2up\common\Auth;
use i2up\Config;
                
class MonitorTest extends \PHPUnit_Framework_TestCase
 {
    private $monitor;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $auth = new Auth(Config::baseUrl, 'admin', 'Info1234', __DIR__ . '/../');
        $this -> monitor = new Monitor($auth);
    }

    public function testListDriversInfo()
    {
        $monitor = $this -> monitor;
        $arr = array(
            'uuid' => '67E33CDB-D75B-15B3-367D-50C764F5A26F'
        );
        $res = $monitor -> listDriversInfo($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListPhyInfo()
    {
        $monitor = $this -> monitor;
        $arr = array(
            'uuid' => '67E33CDB-D75B-15B3-367D-50C764F5A26F'
        );
        $res = $monitor -> listPhyInfo($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListChartConfig()
    {
        $monitor = $this -> monitor;
        $arr = array(
            'uuid' => '67E33CDB-D75B-15B3-367D-50C764F5A26F'
        );
        $res = $monitor -> listChartConfig($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testSetChartConfig()
    {
        $monitor = $this -> monitor;
        $arr = array(
            'uuid' => '67E33CDB-D75B-15B3-367D-50C764F5A26F',
            'storage_io'=>1,
            'nic_io'=>0,
            'per_core'=>1,
            'per_disk'=>0,
            'net_in'=>0,
            'net_out'=>0
        );
        $res = $monitor -> setChartConfig($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListChartData()
    {
        $monitor = $this -> monitor;
        $arr = array(
            'uuid' => '67E33CDB-D75B-15B3-367D-50C764F5A26F',
            'start_time'=>154172680,
            'last_time'=>154172980,
        );
        $res = $monitor -> listChartData($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}