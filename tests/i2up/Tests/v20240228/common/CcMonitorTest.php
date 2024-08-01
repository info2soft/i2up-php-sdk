<?php
namespace i2up\Test\v20240228\common;

use i2up\common\v20240228\CcMonitor;
use i2up\common\Auth;
                
class CcMonitorTest extends \PHPUnit_Framework_TestCase
 {
    private $ccMonitor;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> ccMonitor = new CcMonitor(new Auth());
    }

    public function testListCcMonitor()
    {
        $ccMonitor = $this -> ccMonitor;
        $arr = array('11111111-1111-1111-1111-111111111111');
        $res = $ccMonitor -> listCcMonitor($arr);
        $this->do_assert($res);
    }

    public function testListNodeStatus()
    {
        $ccMonitor = $this -> ccMonitor;
        $arr = array(
            'node_ip'=>'',
            'start_time'=>1,
            'last_time'=>1,
        );
        $res = $ccMonitor -> listNodeStatus($arr);
        $this->do_assert($res);
    }

    public function testListCronTask()
    {
        $ccMonitor = $this -> ccMonitor;
        $arr = array(
            'page'=>1,
            'limit'=>15,
        );
        $res = $ccMonitor -> listCronTask($arr);
        $this->do_assert($res);
    }

    public function testResetCronTask()
    {
        $ccMonitor = $this -> ccMonitor;
        $arr = array(
            'id'=>4,
        );
        $res = $ccMonitor -> resetCronTask($arr);
        $this->do_assert($res);
    }

    public function testModifyCronTask()
    {
        $ccMonitor = $this -> ccMonitor;
        $arr = array(
            'id'=>'',
            'interval'=>1,
        );
        $res = $ccMonitor -> modifyCronTask($arr);
        $this->do_assert($res);
    }

    public function testDescribeCcGeneralInfo()
    {
        $ccMonitor = $this -> ccMonitor;
        $arr = array(
            'type'=>'all',
            'process_sort_by'=>'cpu',
            'process_filter_name'=>'',
            'process_limit'=>1,
        );
        $res = $ccMonitor -> describeCcGeneralInfo($arr);
        $this->do_assert($res);
    }

    public function testStartCcService()
    {
        $ccMonitor = $this -> ccMonitor;
        $arr = array(
            'operate'=>'start',
            'service_name'=>'',
        );
        $res = $ccMonitor -> startCcService($arr);
        $this->do_assert($res);
    }

    public function testStopCcService()
    {
        $ccMonitor = $this -> ccMonitor;
        $arr = array(
            'operate'=>'stop',
            'service_name'=>'',
        );
        $res = $ccMonitor -> stopCcService($arr);
        $this->do_assert($res);
    }

    public function testReloadCcService()
    {
        $ccMonitor = $this -> ccMonitor;
        $arr = array(
            'operate'=>'reload',
            'service_name'=>'',
        );
        $res = $ccMonitor -> reloadCcService($arr);
        $this->do_assert($res);
    }

    public function testKillCcProcess()
    {
        $ccMonitor = $this -> ccMonitor;
        $arr = array(
            'operate'=>'kill',
            'pid'=>1,
        );
        $res = $ccMonitor -> killCcProcess($arr);
        $this->do_assert($res);
    }

    private function do_assert($res)
    {
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}