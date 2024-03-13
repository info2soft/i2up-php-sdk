<?php
namespace i2up\Test\v20240228\active;

use i2up\active\v20240228\Summary;
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

    public function testActiveDashboard()
    {
        $summary = $this -> summary;
        $arr = array();
        $res = $summary -> activeDashboard($arr);
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

    public function testListSummaryChart()
    {
        $summary = $this -> summary;
        $arr = array();
        $res = $summary -> listSummaryChart($arr);
        $this->do_assert($res);
    }

    private function do_assert($res)
    {
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}