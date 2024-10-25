<?php
namespace i2up\Test\v20240819\stream;

use i2up\stream\v20240819\TrafficReport;
use i2up\common\Auth;
                
class TrafficReportTest extends \PHPUnit_Framework_TestCase
 {
    private $trafficReport;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> trafficReport = new TrafficReport(new Auth());
    }

    public function testListReportRule()
    {
        $trafficReport = $this -> trafficReport;
        $arr = array(
            'limit'=>1,
            'page'=>1,
        );
        
        
        $res = $trafficReport -> listReportRule($arr);
        $this->do_assert($res);
    }

    public function testListReportRuleStatistics()
    {
        $trafficReport = $this -> trafficReport;
        $arr = array(
            'limit'=>'',
            'page'=>'',
            'search_field'=>'rule_name',
            'search_value'=>'test',
            'where_args'=>array(
            'rule_uuid'=>'deE51b44-3Cb6-85EB-4b79-c386AfBEfd5E',
            'task_uuid'=>'4B0e4e4e-2D35-3346-2a4E-3d9E80FF7Ab4',),
        );
        
        
        $res = $trafficReport -> listReportRuleStatistics($arr);
        $this->do_assert($res);
    }

    public function testListReportRuleHistory()
    {
        $trafficReport = $this -> trafficReport;
        $arr = array(
            'limit'=>'',
            'page'=>'',
            'where_args'=>array(
            'rule_uuid'=>'eD61Aee3-A52e-66b7-6F42-cdc4C701bFCe',),
        );
        
        
        $res = $trafficReport -> listReportRuleHistory($arr);
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