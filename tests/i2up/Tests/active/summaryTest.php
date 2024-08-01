<?php
namespace i2up\Test\active;

use i2up\active\v20200721\summary;
use i2up\common\Auth;

class summaryTest extends \PHPUnit_Framework_TestCase
{
    private $summary;

    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> summary = new summary(new Auth());
    }

    public function testListSummaryView()
    {
        $summary = $this -> summary;
        $arr = array(
            'src'=>'',
            'dst'=>'',
            'status'=>'',
            'type'=>'',
            'ip'=>'',
        );
        $res = $summary -> listSummaryView($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testStopView()
    {
        $summary = $this -> summary;
        $arr = array(
            'operate'=>'stop',
            'rule_uuids'=>'',
        );
        $res = $summary -> stopView($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testResumeView()
    {
        $summary = $this -> summary;
        $arr = array(
            'operate'=>'resume',
            'rule_uuids'=>'',
        );
        $res = $summary -> resumeView($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListSummary()
    {
        $summary = $this -> summary;
        $res = $summary -> listSummary();
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}