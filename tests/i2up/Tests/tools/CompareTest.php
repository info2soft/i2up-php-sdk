<?php
namespace i2up\Test\tools;

use i2up\tools\v20181217\Compare;
use i2up\common\Auth;
use i2up\Config;

class CompareTest extends \PHPUnit_Framework_TestCase
{
    private $compare;

    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $auth = new Auth(Config::baseUrl, 'admin', 'Info1234', __DIR__ . '/../');
        $this -> compare = new Compare($auth);
    }

    public function testCreateCompare()
    {
        $compare = $this -> compare;
        $arr = array(
            'compare'=>array(
                'excl_path'=>array(),
                'bkup_one_time'=>0,
                'bkup_schedule'=>array(
                    'sched_gap_min'=>60,
                    'sched_time'=>array(
                        '0'=>'00:00:00'
                    ),
                    'sched_day'=>array(
                        '0'=>'1'
                    ),
                    'sched_time_end'=>'23:59',
                    'limit'=>"",
                    'sched_time_start'=>'00:00',
                    'sched_every'=>0
                ),
                'mirr_file_check'=>'1',
                'task_name'=>'testCompare1',
                'wk_path'=>array(
                    '0'=>'E:\t\\'
                ),
                'bk_uuid'=>'B8566905-411E-B2CD-A742-77B1346D8E84',
                'cmp_type'=>0,
                'bk_path'=>array(
                    '0'=>'E:\t2\\'
                ),
                'bkup_policy'=>2,
                'compress'=>0,
                'wk_uuid'=>'B8566905-411E-B2CD-A742-77B1346D8E84'
            )
        );
        $res = $compare -> createCompare($arr);
        var_dump($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeCompare()
    {
        $compare = $this -> compare;
        $arr = array(
            'uuid'=>'1E4BD69D-F98B-992A-47EF-DA9A06DF3744'
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
        var_dump($res);
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
            'task_uuids'=>array('1E4BD69D-F98B-992A-47EF-DA9A06DF3744'),
        );
        $res = $compare -> listCompareStatus($arr);
        var_dump($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDownloadCompare()
    {
        $compare = $this -> compare;
        $arr = array(
            'operate'=>'download',
            'task_uuids'=>array(
                '0'=>'1E4BD69D-F98B-992A-47EF-DA9A06DF3744'
            )
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
            'task_uuids'=>array(
                '0'=>'1E4BD69D-F98B-992A-47EF-DA9A06DF3744'
            ),
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
            'uuid'=>'4AED0B7A-5F4D-13DB-D742-94D40AEAF09A',
            'search_field'=>'',
            'limit'=>10,
            'search_value'=>'',
            'page'=>1,
        );
        $res = $compare -> listCircleCompareResult($arr);
        var_dump($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}