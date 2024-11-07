<?php
namespace i2up\Test\v20240819\active;

use i2up\active\v20240819\Summary;
use i2up\common\Auth;
                
class SummaryTest extends \PHPUnit_Framework_TestCase
 {
    private $summary;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> summary = new Summary(new Auth());
    }

    public function testListSummaryView()
    {
        $summary = $this -> summary;
        $arr = array(
            'src_db'=>'',
            'tgt_db'=>'',
            'status'=>'',
            'type'=>'',
            'rule_name'=>'',
        );
        
        
        $res = $summary -> listSummaryView($arr);
        $this->do_assert($res);
    }

    public function testListSummary()
    {
        $summary = $this -> summary;
        $arr = array(
            'status'=>array(),
        );
        
        
        $res = $summary -> listSummary($arr);
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