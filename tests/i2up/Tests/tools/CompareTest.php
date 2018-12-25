<?php
namespace i2up\Test\tools;

use i2up\tools\v20181217\Compare;
use i2up\common\Auth;

class CompareTest extends \PHPUnit_Framework_TestCase
{
    private $compare;

    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $auth = new Auth('admin', 'Info1234');
        $this -> compare = new Compare($auth);
    }

    public function testCreateCompare()
    {
        $compare = $this -> compare;
        $arr = array(
            'compare'=>array(
                'excl_path'=>array(),
                'bkup_one_time'=>1515568566,
                'bkup_schedule'=>array(
                    'sched_gap_min'=>4,
                    'sched_time'=>'08:37',
                    'sched_day'=>30,
                    'sched_time_end'=>'08:32',
                    'limit'=>7,
                    'sched_time_start'=>'20:11',
                    'sched_every'=>2
                ),
                'mirr_file_check'=>'1',
                'task_name'=>'',
                'wk_path'=>array(),
                'bk_uuid'=>'',
                'cmp_type'=>0,
                'bk_path'=>array(),
                'bkup_policy'=>0,
                'compress'=>0,
                'wk_uuid'=>''
            )
        );
        $res = $compare -> createCompare($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeCompare()
    {
        $compare = $this -> compare;
        $arr = array(
            'uuid'=>''
        );
        $res = $compare -> describeCompare($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeCompareResults()
    {
        $compare = $this -> compare;
        $res = $compare -> describeCompareResults();
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListCompare()
    {
        $compare = $this -> compare;
        $arr = array(
            'search_value'=>'',
            'limit'=>10,
            'page'=>1,
            'search_field'=>''
        );
        $res = $compare -> listCompare($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListCompareStatus()
    {
        $compare = $this -> compare;
        $arr = array(
            'task_uuids'=>array(),
        );
        $res = $compare -> listCompareStatus($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDownloadCompare()
    {
        $compare = $this -> compare;
        $arr = array(
            'operate'=>'download',
            'task_uuids'=>array()
        );
        $res = $compare -> downloadCompare($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDeleteCompare()
    {
        $compare = $this -> compare;
        $arr = array(
            'task_uuids'=>array(),
        );
        $res = $compare -> deleteCompare($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListCircleCompareResult()
    {
        $compare = $this -> compare;
        $arr = array(
            'uuid'=>'',
            'search_field'=>'',
            'limit'=>1,
            'search_value'=>'',
            'page'=>1,
        );
        $res = $compare -> listCircleCompareResult($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}