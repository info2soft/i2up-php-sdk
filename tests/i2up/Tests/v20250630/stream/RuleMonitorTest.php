<?php
namespace i2up\Test\v20250630\stream;

use i2up\stream\v20250630\RuleMonitor;
use i2up\common\Auth;
                
class RuleMonitorTest extends \PHPUnit_Framework_TestCase
 {
    private $ruleMonitor;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> ruleMonitor = new RuleMonitor(new Auth());
    }

    public function testListActiveNodeChart()
    {
        $ruleMonitor = $this -> ruleMonitor;
        $arr = array(
            'node_uuid'=>'',
            'strict'=>1,
            'timestamp'=>1,
            'start_offset'=>1,
            'end_offset'=>1,
        );
        
        
        $res = $ruleMonitor -> listActiveNodeChart($arr);
        $this->do_assert($res);
    }

    public function testListActiveNodeResources()
    {
        $ruleMonitor = $this -> ruleMonitor;
        $arr = array(
            'where_args'=>array(
            '0'=>array(
            'status'=>'UNKNOWN',
            'timestamp'=>1,),),
        );
        
        
        $res = $ruleMonitor -> listActiveNodeResources($arr);
        $this->do_assert($res);
    }

    public function testUpdateNodeDefaultMonitorPath()
    {
        $ruleMonitor = $this -> ruleMonitor;
        $arr = array(
            'node_uuid'=>'',
            'path'=>'',
        );
        
        
        $res = $ruleMonitor -> updateNodeDefaultMonitorPath($arr);
        $this->do_assert($res);
    }

    public function testGetSyncRuleMonitorConf()
    {
        $ruleMonitor = $this -> ruleMonitor;
        $arr = array();
        
        
        $res = $ruleMonitor -> getSyncRuleMonitorConf($arr);
        $this->do_assert($res);
    }

    public function testModifySyncRuleMonitorConf()
    {
        $ruleMonitor = $this -> ruleMonitor;
        $arr = array(
            'stream_monitor_settings'=>array(
            'stream_monitor_switch'=>'',
            'stream_monitor_addr'=>'',
            'stream_monitor_port'=>'',
            'stream_monitor_default_db'=>'',
            'stream_monitor_user'=>'',
            'stream_monitor_pass'=>'',
            'stream_monitor_interval'=>1,
            'stream_monitor_log_save_time'=>1,
            'stream_monitor_type'=>'',),
        );
        
        
        $res = $ruleMonitor -> modifySyncRuleMonitorConf($arr);
        $this->do_assert($res);
    }

    public function testExportSyncRuleMonitorStat()
    {
        $ruleMonitor = $this -> ruleMonitor;
        $arr = array(
            'stat_type'=>1,
            'start'=>1,
            'end'=>1,
            'user'=>'',
            'table'=>'',
            'rule_uuid'=>'',
        );
        
        
        $res = $ruleMonitor -> exportSyncRuleMonitorStat($arr);
        $this->do_assert($res);
    }

    public function testSyncRuleExtractStatistics()
    {
        $ruleMonitor = $this -> ruleMonitor;
        $arr = array(
            'start'=>'',
            'end'=>'',
            'rule_uuid'=>'',
            'interval'=>1,
        );
        
        
        $res = $ruleMonitor -> syncRuleExtractStatistics($arr);
        $this->do_assert($res);
    }

    public function testSyncRuleLoadStatistics()
    {
        $ruleMonitor = $this -> ruleMonitor;
        $arr = array(
            'start'=>'',
            'end'=>'',
            'rule_uuid'=>'',
        );
        
        
        $res = $ruleMonitor -> syncRuleLoadStatistics($arr);
        $this->do_assert($res);
    }

    public function testSyncRuleTableExtractStatistics()
    {
        $ruleMonitor = $this -> ruleMonitor;
        $arr = array(
            'limit'=>'',
            'page'=>'',
            'start'=>'',
            'end'=>'',
            'rule_uuid'=>'',
            'table'=>'',
            'user'=>'',
        );
        
        
        $res = $ruleMonitor -> syncRuleTableExtractStatistics($arr);
        $this->do_assert($res);
    }

    public function testSyncRuleTableLoadStatistics()
    {
        $ruleMonitor = $this -> ruleMonitor;
        $arr = array(
            'limit'=>'',
            'page'=>'',
            'start'=>'',
            'end'=>'',
            'rule_uuid'=>'',
            'table'=>'',
            'user'=>'',
        );
        
        
        $res = $ruleMonitor -> syncRuleTableLoadStatistics($arr);
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