<?php
namespace i2up\Test\v20260209\resource;

use i2up\resource\v20260209\Monitor;
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
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $monitor -> listDriversInfo($arr);
        $this->do_assert($res);
    }

    public function testListPhyInfo()
    {
        $monitor = $this -> monitor;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $monitor -> listPhyInfo($arr);
        $this->do_assert($res);
    }

    public function testListChartData()
    {
        $monitor = $this -> monitor;
        $arr = array(
            'start_time'=>1546272000,
            'last_time'=>1548950400,
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $monitor -> listChartData($arr);
        $this->do_assert($res);
    }

    public function testListChartConfig()
    {
        $monitor = $this -> monitor;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $monitor -> listChartConfig($arr);
        $this->do_assert($res);
    }

    public function testSetChartConfig()
    {
        $monitor = $this -> monitor;
        $arr = array(
            'storage_io'=>1,
            'nic_io'=>0,
            'per_core'=>1,
            'per_disk'=>0,
            'net_in'=>0,
            'net_out'=>0,
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
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