<?php
namespace i2up\Test\v20250630\stream;

use i2up\stream\v20250630\TrafficReport;
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
            'rule_uuid'=>'Df9AC59B-ACAE-cc55-9d9B-7Dfce101bE7e',
            'task_uuid'=>'aABfCdDC-3ccF-Bd34-8775-CE0D32ef772d',),
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
            'rule_uuid'=>'50CEBe8d-C2EE-018e-e05C-63E198C2542B',),
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