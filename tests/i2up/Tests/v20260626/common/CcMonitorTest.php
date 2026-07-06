<?php
namespace i2up\Test\v20260626\common;

use i2up\common\v20260626\CcMonitor;
use i2up\common\Auth;
use PHPUnit\Framework\TestCase;
                
class CcMonitorTest extends TestCase
 {
    private $ccMonitor;
    
    public function setUp():void
    {
        parent::setup();
        $this -> ccMonitor = new CcMonitor(new Auth());
    }

    public function testListCcMonitor()
    {
        $ccMonitor = $this -> ccMonitor;
        $arr = array();
        
        
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
            'operate'=>'',
            'service_name'=>'',
        );
        
        
        $res = $ccMonitor -> startCcService($arr);
        $this->do_assert($res);
    }

    public function testReloadCcService()
    {
        $ccMonitor = $this -> ccMonitor;
        $arr = array(
            'operate'=>'',
            'service_name'=>'',
        );
        
        
        $res = $ccMonitor -> reloadCcService($arr);
        $this->do_assert($res);
    }

    public function testStopCcService()
    {
        $ccMonitor = $this -> ccMonitor;
        $arr = array(
            'operate'=>'',
            'service_name'=>'',
        );
        
        
        $res = $ccMonitor -> stopCcService($arr);
        $this->do_assert($res);
    }

    public function testKillCcProcess()
    {
        $ccMonitor = $this -> ccMonitor;
        $arr = array(
            'operate'=>'',
            'pid'=>1,
        );
        
        
        $res = $ccMonitor -> killCcProcess($arr);
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