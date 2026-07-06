<?php
namespace i2up\Test\v20260626\stream;

use i2up\stream\v20260626\TrafficReport;
use i2up\common\Auth;
use PHPUnit\Framework\TestCase;
                
class TrafficReportTest extends TestCase
 {
    private $trafficReport;
    
    public function setUp():void
    {
        parent::setup();
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
            'rule_uuid'=>'4f15AA6f-34A0-a58f-53E3-efB8cB154465',
            'task_uuid'=>'d9f4dA95-DEdD-9BaA-bc96-761921f7FEB6',),
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
            'rule_uuid'=>'84BC23Cb-9Cbb-9CF9-cbC7-A7AAF5aebCCA',),
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