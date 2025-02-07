<?php
namespace i2up\Test\v20250123\stream;

use i2up\stream\v20250123\TrafficReport;
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
            'rule_uuid'=>'8d87cf89-58c1-159B-307d-9D748b2De630',
            'task_uuid'=>'4E8e5ab2-8554-8Bd7-041f-c3106BfE358A',),
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
            'rule_uuid'=>'856197Bd-43DB-7E69-bb5d-DB9F483c9F20',),
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