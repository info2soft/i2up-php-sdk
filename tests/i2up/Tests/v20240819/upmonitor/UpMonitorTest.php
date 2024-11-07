<?php
namespace i2up\Test\v20240819\upmonitor;

use i2up\upmonitor\v20240819\UpMonitor;
use i2up\common\Auth;
                
class UpMonitorTest extends \PHPUnit_Framework_TestCase
 {
    private $upMonitor;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> upMonitor = new UpMonitor(new Auth());
    }

    public function testUpMonitorVpRuleStat()
    {
        $upMonitor = $this -> upMonitor;
        $arr = array(
            'up_uuids'=>'',
        );
        
        
        $res = $upMonitor -> upMonitorVpRuleStat($arr);
        $this->do_assert($res);
    }

    public function testUpMonitorOverall()
    {
        $upMonitor = $this -> upMonitor;
        $arr = array(
            'up_uuids'=>array(),
        );
        
        
        $res = $upMonitor -> upMonitorOverall($arr);
        $this->do_assert($res);
    }

    public function testListUpMonitorPlatSummary()
    {
        $upMonitor = $this -> upMonitor;
        $arr = array(
            'filter_by_biz_grp'=>1,
            'search_field'=>'',
            'search_value'=>'',
            'where_args'=>array(
            'up_uuid'=>'',),
        );
        
        
        $res = $upMonitor -> listUpMonitorPlatSummary($arr);
        $this->do_assert($res);
    }

    public function testListStatistics()
    {
        $upMonitor = $this -> upMonitor;
        $arr = array(
            'obj_name'=>'',
            'time_used_rate'=>1,
            'sub_type'=>1,
            'sys_name'=>'',
            'protect_name'=>'',
            'status'=>'',
            'type'=>'',
            'result'=>1,
            'wk_uuid'=>'',
            'bk_uuid'=>'',
            'other_uuid'=>'',
            'group_uuid'=>'',
            'uuid'=>'',
            'page'=>1,
            'end'=>1,
            'name'=>'',
            'limit'=>10,
            'start'=>1,
            'time_consuming'=>1,
            'up_uuids'=>array(),
            'duration_operator'=>'',
            'duration'=>1,
        );
        
        
        $res = $upMonitor -> listStatistics($arr);
        $this->do_assert($res);
    }

    public function testDownloadStatistics()
    {
        $upMonitor = $this -> upMonitor;
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
            'suffix'=>'.csv',
            'wk_uuid'=>'',
            'bk_uuid'=>'',
            'other_uuid'=>'',
        );
        
        
        $res = $upMonitor -> downloadStatistics($arr);
        $this->do_assert($res);
    }

    public function testListUpMonitorRules()
    {
        $upMonitor = $this -> upMonitor;
        $arr = array(
            'type'=>1,
            'search_field'=>'',
            'search_value'=>'',
            'up_uuid'=>'',
        );
        
        
        $res = $upMonitor -> listUpMonitorRules($arr);
        $this->do_assert($res);
    }

    public function testListOpLog()
    {
        $upMonitor = $this -> upMonitor;
        $arr = array(
            'op_type'=>'delete_nodes',
            'level'=>0,
            'description'=>'delete_nodes',
            'suffix'=>'.txt',
            'address'=>'',
            'username'=>'',
            'page'=>1,
            'end'=>1548950400,
            'limit'=>10,
            'start'=>1546272000,
            'download'=>false,
            'up_uuds'=>array(),
        );
        
        
        $res = $upMonitor -> listOpLog($arr);
        $this->do_assert($res);
    }

    public function testListUser()
    {
        $upMonitor = $this -> upMonitor;
        $arr = array(
            'page'=>1,
            'limit'=>10,
            'up_uuids'=>array(),
            'like_args'=>array(
            'username'=>'',
            'email'=>'',
            'mobile'=>'',),
        );
        
        
        $res = $upMonitor -> listUser($arr);
        $this->do_assert($res);
    }

    public function testExportUsers()
    {
        $upMonitor = $this -> upMonitor;
        $arr = array(
            'for_import'=>0,
            'suffix'=>'csv',
            'sub_type'=>'0',
            'uuids'=>array(),
            'where_args'=>array(
            'timing_type'=>'',
            'raw_uuid'=>'',),
        );
        
        
        $res = $upMonitor -> exportUsers($arr);
        $this->do_assert($res);
    }

    public function testAuthUpMonitor()
    {
        $upMonitor = $this -> upMonitor;
        $arr = array(
            'access_key'=>'oishvmn5YPHJcEDaIjtwd0R9Ug7BN1fk',
            'secret_key'=>'fkLiyqsG3P1AzB5jWtYbZa7TU8RN9wSVhe6EldOo',
            'ip'=>'172.20.2.70',
            'port'=>'58086',
        );
        
        
        $res = $upMonitor -> authUpMonitor($arr);
        $this->do_assert($res);
    }

    public function testDescribeUpMonitorToken()
    {
        $upMonitor = $this -> upMonitor;
        $arr = array(
            'up_uuid'=>'CE753C48-96F9-6C38-C3DE-A25E7405D03F',
        );
        
        
        $res = $upMonitor -> describeUpMonitorToken($arr);
        $this->do_assert($res);
    }

    public function testCreateUpMonitor()
    {
        $upMonitor = $this -> upMonitor;
        $arr = array(
            'access_key'=>'oishvmn5YPHJcEDaIjtwd0R9Ug7BN1fk',
            'biz_grp_list'=>array(),
            'comment'=>'备注xxx',
            'secret_key'=>'fkLiyqsG3P1AzB5jWtYbZa7TU8RN9wSVhe6EldOo',
            'ip'=>'172.20.2.70',
            'port'=>'58086',
            'up_uuid'=>'CE753C48-96F9-6C38-C3DE-A25E7405D03F',
            'up_name'=>'就这个控制机',
        );
        
        
        $res = $upMonitor -> createUpMonitor($arr);
        $this->do_assert($res);
    }

    public function testModifyUpMonitor()
    {
        $upMonitor = $this -> upMonitor;
        $arr = array(
            'up_name'=>'就这个控制机',
            'access_key'=>'oishvmn5YPHJcEDaIjtwd0R9Ug7BN1fk',
            'secret_key'=>'fkLiyqsG3P1AzB5jWtYbZa7TU8RN9wSVhe6EldOo',
            'ip'=>'172.20.2.70',
            'port'=>'58086',
            'comment'=>'备注xxx',
            'biz_grp_list'=>array(),
            'random_str'=>'11111111-1111-1111-1111-111111111111',
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $upMonitor -> modifyUpMonitor($arr);
        $this->do_assert($res);
    }

    public function testListUpMonitor()
    {
        $upMonitor = $this -> upMonitor;
        $arr = array(
            'limit'=>10,
            'page'=>1,
            'filter_by_biz_grp'=>1,
            'search_field'=>'',
            'search_value'=>'',
            'where_args'=>array(
            'up_uuid'=>'',),
        );
        
        
        $res = $upMonitor -> listUpMonitor($arr);
        $this->do_assert($res);
    }

    public function testDescribeUpMonitor()
    {
        $upMonitor = $this -> upMonitor;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $upMonitor -> describeUpMonitor($arr);
        $this->do_assert($res);
    }

    public function testRefreshUpMonitor()
    {
        $upMonitor = $this -> upMonitor;
        $arr = array(
            'up_uuids'=>array(
            '0'=>'CE753C48-96F9-6C38-C3DE-A25E7405D03F',),
            'operate'=>'refresh',
        );
        
        
        $res = $upMonitor -> refreshUpMonitor($arr);
        $this->do_assert($res);
    }

    public function testListUpMonitorStatus()
    {
        $upMonitor = $this -> upMonitor;
        $arr = array(
            'up_uuids'=>array(
            '0'=>'CE753C48-96F9-6C38-C3DE-A25E7405D03F',),
        );
        
        
        $res = $upMonitor -> listUpMonitorStatus($arr);
        $this->do_assert($res);
    }

    public function testDeleteUpMonitor()
    {
        $upMonitor = $this -> upMonitor;
        $arr = array(
            'up_uuids'=>array(
            '0'=>'CE753C48-96F9-6C38-C3DE-A25E7405D03F',),
        );
        
        
        $res = $upMonitor -> deleteUpMonitor($arr);
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