<?php
namespace i2up\Test\common;

use i2up\common\Monitor;
use i2up\common\Auth;
                
class MonitorTest extends \PHPUnit_Framework_TestCase
 {
    private $monitor;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $auth = new Auth('admin', 'Info1234');
        $this -> monitor = new Monitor($auth);
    }

    public function testListDriversInfo()
    {
        $monitor = $this -> monitor;
        $arr = array(
            'uuid' => ''
        );
        $res = $monitor -> listDriversInfo($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListPhyInfo()
    {
        $monitor = $this -> monitor;
        $arr = array(
            'uuid' => ''
        );
        $res = $monitor -> listPhyInfo($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListChartConfig()
    {
        $monitor = $this -> monitor;
        $arr = array(
            'uuid' => ''
        );
        $res = $monitor -> listChartConfig($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testSetChartConfig()
    {
        $monitor = $this -> monitor;
        $arr = array(
            'uuid' => '',
            'storage_io'=>1,
            'nic_io'=>0,
            'per_core'=>1,
            'per_disk'=>0,
            'net_in'=>0,
            'net_out'=>0
        );
        $res = $monitor -> setChartConfig($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListChartData()
    {
        $monitor = $this -> monitor;
        $arr = array(
            'uuid' => '',
            'start_time'=>154172680,
            'last_time'=>154172980,
        );
        $res = $monitor -> listChartData($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}