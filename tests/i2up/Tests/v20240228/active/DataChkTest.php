<?php
namespace i2up\Test\v20240228\active;

use i2up\active\v20240228\DataChk;
use i2up\common\Auth;
                
class DataChkTest extends \PHPUnit_Framework_TestCase
 {
    private $dataChk;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> dataChk = new DataChk(new Auth());
    }

    public function testListDatacheckObjCmp()
    {
        $dataChk = $this -> dataChk;
        $arr = array(
            'page'=>1,
            'limit'=>10,
            'search_field'=>'obj_cmp_name',
            'search_value'=>'test',
        );
        $res = $dataChk -> listDatacheckObjCmp($arr);
        $this->do_assert($res);
    }

    public function testCreateDatacheckObjCmp()
    {
        $dataChk = $this -> dataChk;
        $arr = array(
            'db_user_map'=>"{'src_user':'dst_user'}",
            'config'=>array(
            'one_task'=>'immediate',),
            'policies'=>'',
            'policy_type'=>'periodic',
            'one_time'=>'2019-05-27 16:07:08',
            'repair'=>1,
            'obj_cmp_name'=>'test',
            'src_db_uuid'=>'4CA773F4-36E3-A091-122C-ACDFB2112C21',
            'tgt_db_uuid'=>'40405FD3-DB86-DC8A-81C9-C137B6FDECE5',
            'cal_table_recoders'=>1,
            'cmp_type'=>'user',
            'rule_uuid'=>'751A03F5-C97D-645B-82B2-316A5D198528',
            'src_db_auth_uuid'=>'',
            'tgt_db_auth_uuid'=>'',
        );
        $res = $dataChk -> createDatacheckObjCmp($arr);
        $this->do_assert($res);
    }

    public function testDeleteDatacheckObjCmp()
    {
        $dataChk = $this -> dataChk;
        $arr = array(
            'force'=>false,
            'uuids'=>'[@guid]',
        );
        $res = $dataChk -> deleteDatacheckObjCmp($arr);
        $this->do_assert($res);
    }

    public function testDescribeDatacheckObjCmp()
    {
        $dataChk = $this -> dataChk;
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111',
        );
        $res = $dataChk -> describeDatacheckObjCmp($arr);
        $this->do_assert($res);
    }

    public function testStopObjCmp()
    {
        $dataChk = $this -> dataChk;
        $arr = array(
            'operate'=>'',
            'obj_cmp_uuids'=>array(),
        );
        $res = $dataChk -> stopObjCmp($arr);
        $this->do_assert($res);
    }

    public function testListDatacheckObjCmpResultTimeList()
    {
        $dataChk = $this -> dataChk;
        $arr = array(
            'uuid'=>'97F69EE4-cCFc-CC24-480E-Bc25Ee6145bB',
        );
        $res = $dataChk -> listDatacheckObjCmpResultTimeList($arr);
        $this->do_assert($res);
    }

    public function testDescribeDatacheckObjCmpResult()
    {
        $dataChk = $this -> dataChk;
        $arr = array(
            'BackLackOnly'=>0,
            'uuid'=>'1bF76cD5-fE30-B9FC-f2e9-48807d449661',
            'start_time'=>'',
            'limit'=>1,
            'offset'=>'',
            'search_value'=>'',
        );
        $res = $dataChk -> describeDatacheckObjCmpResult($arr);
        $this->do_assert($res);
    }

    public function testListDatacheckObjCmpStatus()
    {
        $dataChk = $this -> dataChk;
        $arr = array(
            'uuids'=>array(),
        );
        $res = $dataChk -> listDatacheckObjCmpStatus($arr);
        $this->do_assert($res);
    }

    public function testDescribeDatacheckObjCmpResultTimeList()
    {
        $dataChk = $this -> dataChk;
        $arr = array(
            'uuid'=>'EDCBd6f5-67DA-dA33-6eEE-6cfA6c2DeFB0',
            'time_list'=>array(),
        );
        $res = $dataChk -> describeDatacheckObjCmpResultTimeList($arr);
        $this->do_assert($res);
    }

    public function testListDatacheckObjCmpCmpInfo()
    {
        $dataChk = $this -> dataChk;
        $arr = array(
            'filed'=>'',
            'uuid'=>'',
            'start_time'=>'',
            'offset'=>1,
            'limit'=>10,
            'search_value'=>'',
            'usr'=>'I2',
        );
        $res = $dataChk -> listDatacheckObjCmpCmpInfo($arr);
        $this->do_assert($res);
    }

    public function testCreateTbCmp()
    {
        $dataChk = $this -> dataChk;
        $arr = array(
            'tb_cmp_name'=>'规则名',
            'src_db_uuids'=>'4CA773F4-36E3-A091-122C-ACDFB2112C21',
            'tgt_db_uuids'=>'40405FD3-DB86-DC8A-81C9-C137B6FDECE5',
            'cmp_type'=>'table',
            'filter_table'=>'[user.table]',
            'db_tb_map'=>array(
            '0'=>array(
            'regex_switch'=>'1',
            'src'=>array(
            '0'=>array(
            'user'=>'gebwwhv',
            'tab'=>'kldnnoyfx',
            'dbs'=>array(
            '0'=>array(
            'db_uuid'=>'',
            'auth_uuid'=>'',),
            '1'=>array(
            'db_uuid'=>'',
            'auth_uuid'=>'',),
            '2'=>array(
            'db_uuid'=>'',
            'auth_uuid'=>'',),),),),
            'tgt'=>array(
            '0'=>array(
            'user'=>'',
            'tab'=>'',
            'dbs'=>array(
            '0'=>array(
            'db_uuid'=>'',
            'auth_uuid'=>'',),
            '1'=>array(
            'db_uuid'=>'',
            'auth_uuid'=>'',),
            '2'=>array(
            'db_uuid'=>'',
            'auth_uuid'=>'',),),),),
            'col'=>array(
            'col1'=>'col2',
            'col3'=>'col4',),),
            '1'=>array(
            'regex_switch'=>'1',
            'src'=>array(
            '0'=>array(
            'user'=>'dmdn',
            'tab'=>'momxk',
            'dbs'=>array(
            '0'=>array(
            'db_uuid'=>'',
            'auth_uuid'=>'',),
            '1'=>array(
            'db_uuid'=>'',
            'auth_uuid'=>'',),
            '2'=>array(
            'db_uuid'=>'',
            'auth_uuid'=>'',),),),),
            'tgt'=>array(
            '0'=>array(
            'user'=>'',
            'tab'=>'',
            'dbs'=>array(
            '0'=>array(
            'db_uuid'=>'',
            'auth_uuid'=>'',),
            '1'=>array(
            'db_uuid'=>'',
            'auth_uuid'=>'',),
            '2'=>array(
            'db_uuid'=>'',
            'auth_uuid'=>'',),),),),
            'col'=>array(
            'col1'=>'col2',
            'col3'=>'col4',),),
            '2'=>array(
            'regex_switch'=>'1',
            'src'=>array(
            '0'=>array(
            'user'=>'lyvntndb',
            'tab'=>'fsjscpeg',
            'dbs'=>array(
            '0'=>array(
            'db_uuid'=>'',
            'auth_uuid'=>'',),
            '1'=>array(
            'db_uuid'=>'',
            'auth_uuid'=>'',),
            '2'=>array(
            'db_uuid'=>'',
            'auth_uuid'=>'',),),),),
            'tgt'=>array(
            '0'=>array(
            'user'=>'',
            'tab'=>'',
            'dbs'=>array(
            '0'=>array(
            'db_uuid'=>'',
            'auth_uuid'=>'',),
            '1'=>array(
            'db_uuid'=>'',
            'auth_uuid'=>'',),
            '2'=>array(
            'db_uuid'=>'',
            'auth_uuid'=>'',),),),),
            'col'=>array(
            'col1'=>'col2',
            'col3'=>'col4',),),
            '3'=>array(
            'regex_switch'=>'1',
            'src'=>array(
            '0'=>array(
            'user'=>'jvief',
            'tab'=>'nrskjwg',
            'dbs'=>array(
            '0'=>array(
            'db_uuid'=>'',
            'auth_uuid'=>'',),
            '1'=>array(
            'db_uuid'=>'',
            'auth_uuid'=>'',),
            '2'=>array(
            'db_uuid'=>'',
            'auth_uuid'=>'',),),),),
            'tgt'=>array(
            '0'=>array(
            'user'=>'',
            'tab'=>'',
            'dbs'=>array(
            '0'=>array(
            'db_uuid'=>'',
            'auth_uuid'=>'',),
            '1'=>array(
            'db_uuid'=>'',
            'auth_uuid'=>'',),
            '2'=>array(
            'db_uuid'=>'',
            'auth_uuid'=>'',),),),),
            'col'=>array(
            'col1'=>'col2',
            'col3'=>'col4',),),
            '4'=>array(
            'regex_switch'=>'1',
            'src'=>array(
            '0'=>array(
            'user'=>'cin',
            'tab'=>'pvbvronrbd',
            'dbs'=>array(
            '0'=>array(
            'db_uuid'=>'',
            'auth_uuid'=>'',),
            '1'=>array(
            'db_uuid'=>'',
            'auth_uuid'=>'',),
            '2'=>array(
            'db_uuid'=>'',
            'auth_uuid'=>'',),),),),
            'tgt'=>array(
            '0'=>array(
            'user'=>'',
            'tab'=>'',
            'dbs'=>array(
            '0'=>array(
            'db_uuid'=>'',
            'auth_uuid'=>'',),
            '1'=>array(
            'db_uuid'=>'',
            'auth_uuid'=>'',),
            '2'=>array(
            'db_uuid'=>'',
            'auth_uuid'=>'',),),),),
            'col'=>array(
            'col1'=>'col2',
            'col3'=>'col4',),),),
            'dump_thd'=>1,
            'polices'=>'0|00:00',
            'policy_type'=>'one_time',
            'concurrent_table'=>array(
            '0'=>'hh.ww',),
            'try_split_part_table'=>0,
            'one_time'=>'2019-05-27 16:07:08',
            'config'=>array(
            'data_select'=>array(
            '0'=>array(
            'src_user'=>'',
            'src_tb'=>'',
            'src_query'=>'',
            'dst_user'=>'',
            'dst_tb'=>'',
            'dst_query'=>'',),),
            'compare_key'=>array(
            '0'=>array(
            'src_user'=>'',
            'src_tb'=>'',
            'dst_user'=>'',
            'dst_tb'=>'',
            'src_dst_key'=>'',),),
            'globalConfig'=>array(
            'dkdiff_enable_step_count_table'=>'""',
            'dkdbsource_diff_only_key_columns'=>false,
            'dkmagic_plan_max_diffs'=>10000,
            'dkfilesink_enable_sqlpatch_file'=>false,
            'dkmagic_plan_number_tolerance_type'=>'absolute',
            'dkmagic_plan_number_tolerance'=>1,
            'dkmagic_plan_datetime_tolerance'=>1,
            'split_table_schedule_cron'=>'""',
            'split_table_single_segment_max_rows'=>5000000,
            'split_table_result_expire_in_seconds'=>0,
            'dkdiffengine_recursion_max_steps'=>1,
            'dkdiffengine_recursion_interval_step_delay'=>0,
            'dkdbsource_left_ignore_type_names'=>'""',
            'dkdbsource_right_ignore_type_names'=>'""',
            'dkdbsource_left_ignore_column_names'=>'""',
            'dkdbsource_right_ignore_column_names'=>'',
            'globalconfig'=>array(
            '0'=>array(
            'key'=>'',
            'value'=>'',),),
            'tolerance'=>false,
            'execute_patch_after_complete'=>'',),
            'globals'=>array(
            '0'=>array(
            'src_user'=>'',
            'dst_user'=>'',
            'src_query'=>'',
            'dst_query'=>'',),),
            'exclude_tables'=>array(
            '0'=>array(
            'src_user'=>'',
            'src_tb'=>'',
            'dst_user'=>'',
            'dst_tb'=>'',),),
            'timestamps'=>array(
            'column_name'=>'',
            'back_delay_in_seconds'=>1,
            'end_time'=>'',),
            'global_time_limit'=>false,
            'v_tabmap'=>array(
            '0'=>array(
            'src_user'=>'',
            'src_tb'=>'',
            'src_sql'=>'',
            'tgt_user'=>'',
            'tgt_tb'=>'',
            'tgt_sql'=>'',
            'key'=>'',),),),
            'interval'=>'10m',
            'db_user_map'=>array(
            '0'=>array(
            'src'=>array(
            '0'=>array(
            'user'=>'',
            'dbs'=>array(
            '0'=>array(
            'db_uuid'=>'',
            'auth_uuid'=>'',),
            '1'=>array(
            'db_uuid'=>'',
            'auth_uuid'=>'',),
            '2'=>array(
            'db_uuid'=>'',
            'auth_uuid'=>'',),),),),
            'tgt'=>array(
            '0'=>array(
            'user'=>'',
            'dbs'=>array(
            '0'=>array(
            'db_uuid'=>'',
            'auth_uuid'=>'',),),),),),),
            'db_map'=>array(
            'src'=>array(
            '0'=>array(
            'db_uuid'=>'',
            'auth_uuid'=>'',),),
            'tgt'=>array(
            '0'=>array(
            'db_uuid'=>'',
            'auth_uuid'=>'',),),),
        );
        $res = $dataChk -> createTbCmp($arr);
        $this->do_assert($res);
    }

    public function testDescribeTbCmp()
    {
        $dataChk = $this -> dataChk;
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111',
        );
        $res = $dataChk -> describeTbCmp($arr);
        $this->do_assert($res);
    }

    public function testDeleteTbCmp()
    {
        $dataChk = $this -> dataChk;
        $arr = array(
            'force'=>false,
            'uuids'=>'FeF89BB8-a8ad-24de-36D4-feacEaf40Eda',
        );
        $res = $dataChk -> deleteTbCmp($arr);
        $this->do_assert($res);
    }

    public function testListTbCmp()
    {
        $dataChk = $this -> dataChk;
        $arr = array(
            'page'=>1,
            'limit'=>10,
            'search_field'=>'tb_cmp_name',
            'search_value'=>'测试',
        );
        $res = $dataChk -> listTbCmp($arr);
        $this->do_assert($res);
    }

    public function testListTbCmpResultTimeList()
    {
        $dataChk = $this -> dataChk;
        $arr = array(
            'uuid'=>'',
        );
        $res = $dataChk -> listTbCmpResultTimeList($arr);
        $this->do_assert($res);
    }

    public function testStopTbCmp()
    {
        $dataChk = $this -> dataChk;
        $arr = array(
            'operate'=>'',
            'tb_cmp_uuids'=>'EB2D75cc-68dB-DF71-4EFF-8C9438e75f52',
        );
        $res = $dataChk -> stopTbCmp($arr);
        $this->do_assert($res);
    }

    public function testDescribeTbCmpResuluTimeList()
    {
        $dataChk = $this -> dataChk;
        $arr = array(
            'time_list'=>'3204512c-2C1e-411C-763A-3bfda2e3E556',
            'uuid'=>'',
        );
        $res = $dataChk -> describeTbCmpResuluTimeList($arr);
        $this->do_assert($res);
    }

    public function testDescribeTbCmpResult()
    {
        $dataChk = $this -> dataChk;
        $arr = array(
            'page'=>1,
            'limit'=>10,
            'search_field'=>'',
            'search_value'=>'',
            'uuid'=>'15B36854-5BfB-f5a1-9bfD-8886764DF9AF',
            'start_time'=>'',
            'flag'=>1,
        );
        $res = $dataChk -> describeTbCmpResult($arr);
        $this->do_assert($res);
    }

    public function testDescribeTbCmpErrorMsg()
    {
        $dataChk = $this -> dataChk;
        $arr = array(
            'offset'=>1,
            'limit'=>10,
            'search_field'=>'',
            'search_value'=>'',
            'uuid'=>'CD7c406C-3878-Af7E-Ed81-3aD9f4a6fd6d',
            'start_time'=>'',
            'name'=>'',
            'owner'=>'admin',
        );
        $res = $dataChk -> describeTbCmpErrorMsg($arr);
        $this->do_assert($res);
    }

    public function testDescribeTbCmpCmpResult()
    {
        $dataChk = $this -> dataChk;
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111',
        );
        $res = $dataChk -> describeTbCmpCmpResult($arr);
        $this->do_assert($res);
    }

    public function testDescribeTbCmpCmpDesc()
    {
        $dataChk = $this -> dataChk;
        $arr = array(
            'offset'=>1,
            'limit'=>10,
            'search_field'=>'',
            'search_value'=>'',
            'uuid' => '11111111-1111-1111-1111-111111111111',
            'start_time'=>'',
            'name'=>'',
            'owner'=>'admin',
        );
        $res = $dataChk -> describeTbCmpCmpDesc($arr);
        $this->do_assert($res);
    }

    public function testDescribeTbCmpStart()
    {
        $dataChk = $this -> dataChk;
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111',
        );
        $res = $dataChk -> describeTbCmpStart($arr);
        $this->do_assert($res);
    }

    private function do_assert($res)
    {
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}