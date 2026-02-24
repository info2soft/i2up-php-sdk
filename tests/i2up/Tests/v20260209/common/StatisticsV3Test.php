<?php
namespace i2up\Test\v20260209\common;

use i2up\common\v20260209\StatisticsV3;
use i2up\common\Auth;
                
class StatisticsV3Test extends \PHPUnit_Framework_TestCase
 {
    private $statisticsV3;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> statisticsV3 = new StatisticsV3(new Auth());
    }

    public function testListStatistics()
    {
        $statisticsV3 = $this -> statisticsV3;
        $arr = array(
            'page'=>1,
            'sys_name'=>'',
            'end'=>1,
            'name'=>'',
            'limit'=>10,
            'start'=>1,
            'type'=>'',
            'status'=>'',
            'result'=>1,
            'group_uuid'=>'',
            'uuid'=>'',
            'time_used_rate'=>1,
            'sub_type'=>1,
            'obj_name'=>'',
            'time_consuming'=>1,
            'wk_uuid'=>'',
            'other_uuid'=>'',
            'bk_uuid'=>'',
            'chart_filter'=>1,
            'protect_name'=>'',
            'version_time'=>'',
        );
        
        
        $res = $statisticsV3 -> listStatistics($arr);
        $this->do_assert($res);
    }

    public function testDescribeStatistics()
    {
        $statisticsV3 = $this -> statisticsV3;
        $arr = array();
        
        $arr['id'] = "123456";
        $res = $statisticsV3 -> describeStatistics($arr);
        $this->do_assert($res);
    }

    public function testReadStatistics()
    {
        $statisticsV3 = $this -> statisticsV3;
        $arr = array(
            'type'=>'',
            'page'=>1,
            'other_uuid'=>'',
            'start'=>1,
            'wk_uuid'=>'',
            'status'=>'',
            'name'=>'',
            'limit'=>10,
            'end'=>1,
            'uuid'=>'',
            'bk_uuid'=>'',
            'obj_name'=>'',
            'group_uuid'=>'',
            'result'=>1,
            'time_used_rate'=>1,
            'statistics_end'=>1,
            'statistics_start'=>1,
            'time_consuming'=>1,
            'sub_type'=>'',
        );
        
        
        $res = $statisticsV3 -> readStatistics($arr);
        $this->do_assert($res);
    }

    public function testListStatisticsChart()
    {
        $statisticsV3 = $this -> statisticsV3;
        $arr = array(
            'start'=>1,
            'end'=>2,
            'type'=>'vp',
            'sub_type'=>'bak_bk',
            'limit'=>10,
            'page'=>1,
            'timing_only'=>0,
            'sys_name'=>'',
            'protect_name'=>'',
        );
        
        
        $res = $statisticsV3 -> listStatisticsChart($arr);
        $this->do_assert($res);
    }

    public function testUpdateStatisticsConfig()
    {
        $statisticsV3 = $this -> statisticsV3;
        $arr = array(
            'weekly_sw'=>false,
            'daily_report'=>array(
            'daily_sw'=>true,
            'daily_st'=>'11:43',
            'OVERVIEW'=>true,
            'bak_bk'=>true,
            'bak_rc'=>true,
            'cmp'=>true,
            'ffo'=>true,
            'rule'=>true,
            'vp'=>true,
            'ha'=>false,
            'sys_cdm'=>false,
            'bb'=>false,
            'sys_cloud'=>'',
            'cdm_remote_rep'=>'',
            'timing_work'=>'',
            'nas_cmp'=>false,),
            'weekly_report'=>array(
            'weekly_sw'=>false,
            'weekly_st'=>'1,00:00',
            'OVERVIEW'=>true,
            'bak_bk'=>true,
            'bak_rc'=>true,
            'cmp'=>true,
            'ffo'=>true,
            'rule'=>true,
            'vp'=>true,
            'ha'=>false,
            'sys_cdm'=>false,
            'bb'=>false,
            'sys_cloud'=>'',
            'cdm_remote_rep'=>'',
            'timing_work'=>false,
            'nas_cmp'=>false,),
            'monthly_report'=>array(
            'monthly_sw'=>false,
            'monthly_st'=>'1,00:00',
            'OVERVIEW'=>true,
            'bak_bk'=>true,
            'bak_rc'=>true,
            'cmp'=>true,
            'ffo'=>true,
            'rule'=>true,
            'vp'=>true,
            'ha'=>false,
            'sys_cdm'=>false,
            'bb'=>false,
            'sys_cloud'=>'',
            'cdm_remote_rep'=>'',
            'timing_work'=>false,
            'nas_cmp'=>false,),
            'email'=>'t.ehfghodmh@ephsim.bz',
            'realtime_report'=>array(
            'realtime_sw'=>true,
            'bak_bk'=>true,
            'bak_rc'=>true,
            'cmp'=>true,
            'ffo'=>true,
            'rule'=>true,
            'vp'=>true,
            'ha'=>true,
            'sys_cdm'=>true,
            'bb'=>false,
            'sys_cloud'=>'',
            'sms_content'=>'',
            'cdm_remote_rep'=>'',
            'timing_work'=>false,
            'nas_cmp'=>false,),
            'hourly_report'=>array(
            'hourly_sw'=>false,
            'hourly_st'=>'"00"',
            'OVERVIEW'=>false,
            'bak_bk'=>false,
            'bak_rc'=>false,
            'cmp'=>false,
            'ffo'=>false,
            'rule'=>false,
            'vp'=>false,
            'ha'=>false,
            'sys_cdm'=>false,
            'bb'=>false,
            'sys_cloud'=>'',
            'cdm_remote_rep'=>'',
            'timing_work'=>'',
            'nas_cmp'=>false,),
            'stat_type'=>'0',
            'sms_template'=>'',
            'sms_switch'=>false,
            'sms_report_template'=>'',
            'email_switch'=>false,
            'phone'=>'',
            'platform_switch'=>'',
        );
        
        
        $res = $statisticsV3 -> updateStatisticsConfig($arr);
        $this->do_assert($res);
    }

    public function testListStatisticsConfig()
    {
        $statisticsV3 = $this -> statisticsV3;
        $arr = array();
        
        
        $res = $statisticsV3 -> listStatisticsConfig($arr);
        $this->do_assert($res);
    }

    public function testDownloadStatistics()
    {
        $statisticsV3 = $this -> statisticsV3;
        $arr = array(
            'page'=>1,
            'end'=>1,
            'name'=>'',
            'limit'=>10,
            'start'=>1,
            'status'=>'',
            'type'=>'',
            'result'=>1,
            'group_uuid'=>'',
            'uuid'=>'',
            'statistics_start'=>1,
            'statistics_end'=>1,
            'src_type'=>1,
            'obj_name'=>'',
            'time_consuming'=>1,
            'wk_uuid'=>'',
            'bk_uuid'=>'',
            'other_uuid'=>'',
            'suffix'=>'.csv',
        );
        
        
        $res = $statisticsV3 -> downloadStatistics($arr);
        $this->do_assert($res);
    }

    public function testDownloadStatisticsChart()
    {
        $statisticsV3 = $this -> statisticsV3;
        $arr = array(
            'start'=>1,
            'page'=>1,
            'sub_type'=>'0',
            'end'=>2,
            'type'=>'vp',
            'limit'=>10,
            'timing_only'=>0,
            'sys_name'=>'',
            'protect_name'=>'',
            'suffix'=>'',
        );
        
        
        $res = $statisticsV3 -> downloadStatisticsChart($arr);
        $this->do_assert($res);
    }

    public function testListStatisticsRuleChart()
    {
        $statisticsV3 = $this -> statisticsV3;
        $arr = array(
            'start'=>'',
            'end'=>'',
            'type'=>'',
            'sub_type'=>'',
            'limit'=>'',
            'task_uuid'=>'',
            'page'=>'',
            'task_name'=>'',
            'wk_node_name'=>'',
            'bk_node_name'=>'',
            'config_addr'=>'',
            'success'=>1,
            'total'=>1,
            'failed'=>1,
            'skipped'=>1,
            'canceled'=>1,
            'filter_by_biz_grp'=>1,
            'download'=>1,
        );
        
        
        $res = $statisticsV3 -> listStatisticsRuleChart($arr);
        $this->do_assert($res);
    }

    public function testListStatisticsTrendChart()
    {
        $statisticsV3 = $this -> statisticsV3;
        $arr = array(
            'trend_type'=>1,
            'type'=>'',
            'subtype'=>'',
            'start'=>'',
            'end'=>'',
        );
        
        
        $res = $statisticsV3 -> listStatisticsTrendChart($arr);
        $this->do_assert($res);
    }

    public function testListStatisticsDisplayItems()
    {
        $statisticsV3 = $this -> statisticsV3;
        $arr = array();
        
        
        $res = $statisticsV3 -> listStatisticsDisplayItems($arr);
        $this->do_assert($res);
    }

    public function testSetStatisticsDisplayItems()
    {
        $statisticsV3 = $this -> statisticsV3;
        $arr = array(
            'rule'=>1,
            'nas_cmp'=>1,
            'ha'=>1,
            'cmp'=>1,
            'dto'=>1,
            'bak_bk9'=>1,
            'vp_bk9'=>1,
            'bak_rc9'=>1,
            'vp_rc9'=>1,
            'ffo_bk9'=>1,
            'ffo_rc9'=>1,
            'bb_bk9'=>1,
            'bb_rc9'=>1,
        );
        
        
        $res = $statisticsV3 -> setStatisticsDisplayItems($arr);
        $this->do_assert($res);
    }

    public function testListStatisticsBackupSet()
    {
        $statisticsV3 = $this -> statisticsV3;
        $arr = array(
            'start'=>'',
            'end'=>'',
            'where_args'=>array(
            'username'=>'',
            'biz_grp_uuid'=>'',
            'src_type'=>'',
            'bk_rule_name'=>'',
            'storage_unit_name'=>'',),
            'predict'=>1,
        );
        
        
        $res = $statisticsV3 -> listStatisticsBackupSet($arr);
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