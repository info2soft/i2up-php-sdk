<?php
namespace i2up\Test\v20240228\resource;

use i2up\resource\v20240228\Monitor;
use i2up\common\Auth;
                
class MonitorTest extends \PHPUnit_Framework_TestCase
 {
    private $monitor;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> monitor = new Monitor(new Auth());
    }

    public function testListDriversInfo()
    {
        $monitor = $this -> monitor;
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111'
        );
        $res = $monitor -> listDriversInfo($arr);var_dump($res);
        $this->do_assert($res);
    }

    public function testListPhyInfo()
    {
        $monitor = $this -> monitor;
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111'
        );
        $res = $monitor -> listPhyInfo($arr);
        $this->do_assert($res);
    }

    public function testListChartData()
    {
        $monitor = $this -> monitor;
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111',
            'start_time'=>1546272000,
            'last_time'=>1548950400,
        );
        $res = $monitor -> listChartData($arr);
        $this->do_assert($res);
    }

    public function testListChartConfig()
    {
        $monitor = $this -> monitor;
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111'
        );
        $res = $monitor -> listChartConfig($arr);
        $this->do_assert($res);
    }

    public function testSetChartConfig()
    {
        $monitor = $this -> monitor;
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111',
            'storage_io'=>1,
            'nic_io'=>0,
            'per_core'=>1,
            'per_disk'=>0,
            'net_in'=>0,
            'net_out'=>0,
        );
        $res = $monitor -> setChartConfig($arr);
        $this->do_assert($res);
    }

    public function testListBkNodeOverall()
    {
        $monitor = $this -> monitor;
        $arr = array();
        $res = $monitor -> listBkNodeOverall($arr);
        $this->do_assert($res);
    }

    private function do_assert($res)
    {
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}