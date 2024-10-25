<?php
namespace i2up\Test\v20240819\common;

use i2up\common\v20240819\Statistics;
use i2up\common\Auth;
                
class StatisticsTest extends \PHPUnit_Framework_TestCase
 {
    private $statistics;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> statistics = new Statistics(new Auth());
    }

    public function testListStatistics()
    {
        $statistics = $this -> statistics;
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
            'time_used_rate'=>1,
            'sub_type'=>1,
            'obj_name'=>'',
            'time_consuming'=>1,
            'wk_uuid'=>'',
            'bk_uuid'=>'',
            'other_uuid'=>'',
            'sys_name'=>'',
            'protect_name'=>'',
        );
        
        
        $res = $statistics -> listStatistics($arr);
        $this->do_assert($res);
    }

    public function testDescribeStatistics()
    {
        $statistics = $this -> statistics;
        $arr = array();
        
        $arr['id'] = "123456";
        $res = $statistics -> describeStatistics($arr);
        $this->do_assert($res);
    }

    public function testReadStatistics()
    {
        $statistics = $this -> statistics;
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
            'time_used_rate'=>1,
            'sub_type'=>'',
            'obj_name'=>'',
            'time_consuming'=>1,
            'wk_uuid'=>'',
            'bk_uuid'=>'',
            'other_uuid'=>'',
        );
        
        
        $res = $statistics -> readStatistics($arr);
        $this->do_assert($res);
    }

    public function testListStatisticsChart()
    {
        $statistics = $this -> statistics;
        $arr = array(
            'start'=>1,
            'sub_type'=>'bak_bk',
            'end'=>2,
            'type'=>'vp',
            'page'=>1,
            'limit'=>10,
            'timing_only'=>0,
            'sys_name'=>'',
            'protect_name'=>'',
        );
        
        
        $res = $statistics -> listStatisticsChart($arr);
        $this->do_assert($res);
    }

    public function testUpdateStatisticsConfig()
    {
        $statistics = $this -> statistics;
        $arr = array(
            'daily_report'=>array(
            'daily_sw'=>true,
            'daily_st'=>'11:43',
            'OVERVIEW'=>true,
            'bak_bk'=>true,
            'bak_rc'=>true,
            'cmp_all'=>true,
            'ffo'=>true,
            'rule'=>true,
            'vp'=>true,
            'ha'=>false,
            'sys_cdm'=>false,
            'bb'=>false,
            'sys_cloud'=>'',
            'cdm_remote_rep'=>'',
            'timing_work'=>'',),
            'weekly_report'=>array(
            'weekly_sw'=>false,
            'weekly_st'=>'1,00:00',
            'OVERVIEW'=>true,
            'bak_bk'=>true,
            'bak_rc'=>true,
            'cmp_all'=>true,
            'ffo'=>true,
            'rule'=>true,
            'vp'=>true,
            'ha'=>false,
            'sys_cdm'=>false,
            'bb'=>false,
            'sys_cloud'=>'',
            'cdm_remote_rep'=>'',
            'timing_work'=>false,),
            'monthly_report'=>array(
            'monthly_sw'=>false,
            'monthly_st'=>'1,00:00',
            'OVERVIEW'=>true,
            'bak_bk'=>true,
            'bak_rc'=>true,
            'cmp_all'=>true,
            'ffo'=>true,
            'rule'=>true,
            'vp'=>true,
            'ha'=>false,
            'sys_cdm'=>false,
            'bb'=>false,
            'sys_cloud'=>'',
            'cdm_remote_rep'=>'',
            'timing_work'=>false,),
            'email'=>'g.xnjhtp@vbfngiewn.gl',
            'realtime_report'=>array(
            'realtime_sw'=>true,
            'bak_bk'=>true,
            'bak_rc'=>true,
            'cmp_all'=>true,
            'ffo'=>true,
            'rule'=>true,
            'vp'=>true,
            'ha'=>true,
            'sys_cdm'=>true,
            'bb'=>false,
            'sys_cloud'=>'',
            'sms_content'=>'',
            'cdm_remote_rep'=>'',
            'timing_work'=>false,),
            'hourly_report'=>array(
            'hourly_sw'=>false,
            'hourly_st'=>'"00"',
            'OVERVIEW'=>false,
            'bak_bk'=>false,
            'bak_rc'=>false,
            'cmp_all'=>false,
            'ffo'=>false,
            'rule'=>false,
            'vp'=>false,
            'ha'=>false,
            'sys_cdm'=>false,
            'bb'=>false,
            'sys_cloud'=>'',
            'cdm_remote_rep'=>'',
            'timing_work'=>'',),
            'stat_type'=>'0',
            'phone'=>'',
            'sms_template'=>'',
            'sms_switch'=>false,
            'sms_report_template'=>'',
            'email_switch'=>false,
            'platform_switch'=>'',
        );
        
        
        $res = $statistics -> updateStatisticsConfig($arr);
        $this->do_assert($res);
    }

    public function testListStatisticsConfig()
    {
        $statistics = $this -> statistics;
        $arr = array();
        
        
        $res = $statistics -> listStatisticsConfig($arr);
        $this->do_assert($res);
    }

    public function testDownloadStatistics()
    {
        $statistics = $this -> statistics;
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
        
        
        $res = $statistics -> downloadStatistics($arr);
        $this->do_assert($res);
    }

    public function testDownloadStatisticsChart()
    {
        $statistics = $this -> statistics;
        $arr = array(
            'start'=>1,
            'sub_type'=>'0',
            'end'=>2,
            'type'=>'vp',
            'page'=>1,
            'limit'=>10,
            'timing_only'=>0,
            'sys_name'=>'',
            'protect_name'=>'',
            'suffix'=>'',
        );
        
        
        $res = $statistics -> downloadStatisticsChart($arr);
        $this->do_assert($res);
    }

    public function testListStatisticsRuleChart()
    {
        $statistics = $this -> statistics;
        $arr = array(
            'start'=>'',
            'end'=>'',
            'type'=>'',
            'sub_type'=>'',
            'page'=>'',
            'limit'=>'',
            'task_uuid'=>'',
            'task_name'=>'',
            'wk_node_name'=>'',
            'bk_node_name'=>'',
            'config_addr'=>'',
            'total'=>1,
            'success'=>1,
            'failed'=>1,
            'skipped'=>1,
            'canceled'=>1,
            'filter_by_biz_grp'=>1,
            'download'=>1,
        );
        
        
        $res = $statistics -> listStatisticsRuleChart($arr);
        $this->do_assert($res);
    }

    public function testListStatisticsTrendChart()
    {
        $statistics = $this -> statistics;
        $arr = array(
            'trend_type'=>1,
            'type'=>'',
            'subtype'=>'',
            'start'=>'',
            'end'=>'',
        );
        
        
        $res = $statistics -> listStatisticsTrendChart($arr);
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