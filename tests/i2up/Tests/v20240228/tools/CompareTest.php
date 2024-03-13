<?php
namespace i2up\Test\v20240228\tools;

use i2up\tools\v20240228\Compare;
use i2up\common\Auth;
                
class CompareTest extends \PHPUnit_Framework_TestCase
 {
    private $compare;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> compare = new Compare(new Auth());
    }

    public function testCreateCompare()
    {
        $compare = $this -> compare;
        $arr = array(
            'compare' => array(
                'excl_path' => array(),
                'bkup_one_time' => 0,
                'bkup_schedule' => array(
                    'sched_gap_min' => 60,
                    'sched_time' => array(
                        '0' => '00:00:00',),
                    'sched_day' => array(
                        '0' => '1',),
                    'sched_time_end' => '23:59',
                    'limit' => 5,
                    'sched_time_start' => '00:00',
                    'sched_every' => 0,),
                'mirr_file_check' => '1',
                'task_name' => 'testCompare1',
                'wk_path' => array(
                    '0' => 'E:\\test\\',),
                'bk_uuid' => '67E33CDB-D75B-15B3-367D-50C764F5A26F',
                'cmp_type' => 0,
                'bk_path' => array(
                    '0' => 'E:\\test\\',),
                'bkup_policy' => 2,
                'compress' => 0,
                'wk_uuid' => '67E33CDB-D75B-15B3-367D-50C764F5A26F',
                'mirr_sync_attr' => 1,
                'encrypt_switch' => 1,
                'secret_key' => '',
                'biz_grp_list' => array(),
                'oph_policy' => '',
                'ct_name_str1' => '',
                'ct_name_str2' => '',
                'ct_name_str3' => '',
                'ct_name_str4' => '',
                'data_ip_uuid' => '67E33CDB-D75B-15B3-367D-50C764F5A26F',
                'oph_path' => '',
                'traversing_sync' => 1,
                'band_width' => '',
                'task_type' => 1,
                'file_type_filter_switch' => 1,
                'file_type_filter' => '',
                'compress_switch' => 0,
                'pre_work_script' => '',
                'pre_back_script' => '',
                'post_work_script' => '',
                'post_back_script' => '',
                'encrypt' => 1,
                'script_timeout' => 1,
                'script_timeout_every' => '',
                'subpath_filter_switch' => 1,
                'subpath_filter' => '',),
        );
        $res = $compare -> createCompare($arr);
        $this->do_assert($res);
    }

    public function testModifyCompare()
    {
        $compare = $this -> compare;
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111',
            'compare' => array(
                'excl_path' => array(),
                'bkup_one_time' => 0,
                'bkup_schedule' => array(
                    'sched_gap_min' => 60,
                    'sched_time' => array(
                        '0' => '00:00:00',),
                    'sched_day' => array(
                        '0' => '1',),
                    'sched_time_end' => '23:59',
                    'limit' => 5,
                    'sched_time_start' => '00:00',
                    'sched_every' => 0,),
                'mirr_file_check' => '1',
                'task_name' => 'testCompare1',
                'wk_path' => array(
                    '0' => 'E:\\test\\',),
                'bk_uuid' => '67E33CDB-D75B-15B3-367D-50C764F5A26F',
                'cmp_type' => 0,
                'bk_path' => array(
                    '0' => 'E:\\test\\',),
                'bkup_policy' => 2,
                'compress' => 0,
                'wk_uuid' => '67E33CDB-D75B-15B3-367D-50C764F5A26F',
                'mirr_sync_attr' => 1,
                'encrypt_switch' => '',
                'secret_key' => '',
                'biz_grp_list' => array(),
                'oph_policy' => '',
                'ct_name_str1' => '',
                'ct_name_str2' => '',
                'ct_name_str3' => '',
                'ct_name_str4' => '',
                'task_uuid' => '',
                'random_str' => '',
                'data_ip_uuid' => '67E33CDB-D75B-15B3-367D-50C764F5A26F',
                'band_width' => '',
                'task_type' => 1,
                'file_type_filter_switch' => '',
                'file_type_filter' => '',
                'compress_switch' => 0,
                'pre_work_script' => '',
                'pre_back_script' => '',
                'post_work_script' => '',
                'post_back_script' => '',
                'subpath_filter_switch' => 1,
                'subpath_filter' => '',),
        );
        $res = $compare -> modifyCompare($arr);
        $this->do_assert($res);
    }

    public function testDescribeCompare()
    {
        $compare = $this -> compare;
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111',
        );
        $res = $compare -> describeCompare($arr);
        $this->do_assert($res);
    }

    public function testListCompareLogs()
    {
        $compare = $this -> compare;
        $arr = array();
        $res = $compare -> listCompareLogs($arr);
        $this->do_assert($res);
    }

    public function testListCompare()
    {
        $compare = $this -> compare;
        $arr = array(
            'search_value'=>'',
            'limit'=>10,
            'page'=>1,
            'search_field'=>'',
            'type'=>'',
        );
        $res = $compare -> listCompare($arr);
        $this->do_assert($res);
    }

    public function testListCircleCompareResult()
    {
        $compare = $this -> compare;
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111',
            'search_field'=>'',
            'limit'=>10,
            'search_value'=>'',
            'page'=>1,
        );
        $res = $compare -> listCircleCompareResult($arr);
        $this->do_assert($res);
    }

    public function testListCompareStatus()
    {
        $compare = $this -> compare;
        $arr = array(
            'task_uuids'=>array(
                '0'=>'11111111-1111-1111-1111-111111111111',
            ),
            'force_refresh'=>1,
        );
        $res = $compare -> listCompareStatus($arr);
        $this->do_assert($res);
    }

    public function testStartCompare()
    {
        $compare = $this -> compare;
        $arr = array(
            'operate'=>'start',
            'task_uuids'=>array(
                '0'=>'11111111-1111-1111-1111-111111111111',
            ),
        );
        $res = $compare -> startCompare($arr);
        $this->do_assert($res);
    }
    public function testStopCompare()
    {
        $compare = $this -> compare;
        $arr = array(
            'operate'=>'stop',
            'task_uuids'=>array(
                '0'=>'11111111-1111-1111-1111-111111111111',
            ),
        );
        $res = $compare -> stopCompare($arr);
        $this->do_assert($res);
    }
    public function testStartImmediatelyCompare()
    {
        $compare = $this -> compare;
        $arr = array(
            'operate'=>'start_immediately',
            'task_uuids'=>array(
                '0'=>'11111111-1111-1111-1111-111111111111',
            ),
        );
        $res = $compare -> startImmediatelyCompare($arr);
        $this->do_assert($res);
    }
    public function testDownloadCompare()
    {
        $compare = $this -> compare;
        $arr = array(
            'operate'=>'download',
            'task_uuids'=>array(
                '0'=>'11111111-1111-1111-1111-111111111111',
            ),
        );
        $res = $compare -> downloadCompare($arr);
        $this->do_assert($res);
    }
    public function testDeleteCompareByOperate()
    {
        $compare = $this -> compare;
        $arr = array(
            'operate'=>'delete',
            'task_uuids'=>array(
                '0'=>'11111111-1111-1111-1111-111111111111',
            ),
        );
        $res = $compare -> deleteCompareByOperate($arr);
        $this->do_assert($res);
    }

    public function testDeleteCompare()
    {
        $compare = $this -> compare;
        $arr = array(
            'task_uuids'=>array(
                '0'=>'11111111-1111-1111-1111-111111111111',
            ),
            'force'=>1,
        );
        $res = $compare -> deleteCompare($arr);
        $this->do_assert($res);
    }

    public function testCollectCompareResult()
    {
        $compare = $this -> compare;
        $arr = array(
            'code'=>'0',
            'time'=>'1632453814-1632453816',
            'files'=>'100',
            'bytes'=>'1024',
            'missing'=>'1',
            'diff'=>'2',
            'erro'=>'2',
            'equal'=>'97',
            'task_uuid'=>'F897E9a5-CdAB-51B3-7d46-AFaD8c7B5CdD',
            'transfer_bytes'=>'10',
        );
        $res = $compare -> collectCompareResult($arr);
        $this->do_assert($res);
    }

    private function do_assert($res)
    {
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}