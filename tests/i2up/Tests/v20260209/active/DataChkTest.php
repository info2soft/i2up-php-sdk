<?php
namespace i2up\Test\v20260209\active;

use i2up\active\v20260209\DataChk;
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
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
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

    public function testRestartObjCmp()
    {
        $dataChk = $this -> dataChk;
        $arr = array(
            'operate'=>'',
            'obj_cmp_uuids'=>array(),
        );
        
        
        $res = $dataChk -> restartObjCmp($arr);
        $this->do_assert($res);
    }

    public function testCmpStopTimeObjCmp()
    {
        $dataChk = $this -> dataChk;
        $arr = array(
            'operate'=>'',
            'obj_cmp_uuids'=>array(),
        );
        
        
        $res = $dataChk -> cmpStopTimeObjCmp($arr);
        $this->do_assert($res);
    }

    public function testCmpResumeTimeObjCmp()
    {
        $dataChk = $this -> dataChk;
        $arr = array(
            'operate'=>'',
            'obj_cmp_uuids'=>array(),
        );
        
        
        $res = $dataChk -> cmpResumeTimeObjCmp($arr);
        $this->do_assert($res);
    }

    public function testCmpImmediateObjCmp()
    {
        $dataChk = $this -> dataChk;
        $arr = array(
            'operate'=>'',
            'obj_cmp_uuids'=>array(),
        );
        
        
        $res = $dataChk -> cmpImmediateObjCmp($arr);
        $this->do_assert($res);
    }

    public function testListDatacheckObjCmpResultTimeList()
    {
        $dataChk = $this -> dataChk;
        $arr = array(
            'uuid'=>'492D50dc-7eAf-C677-7EBf-BAf1113FFAeF',
        );
        
        
        $res = $dataChk -> listDatacheckObjCmpResultTimeList($arr);
        $this->do_assert($res);
    }

    public function testDescribeDatacheckObjCmpResult()
    {
        $dataChk = $this -> dataChk;
        $arr = array(
            'BackLackOnly'=>0,
            'uuid'=>'EE075CDf-edeB-b578-0dFF-750a3D57E829',
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
            'uuid'=>'1DBf9C1D-61d0-1569-FC8D-dc5e3cFCD06e',
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
            'user'=>'hvvz',
            'tab'=>'qvwu',
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
            'user'=>'xefwoupql',
            'tab'=>'ojjpguy',
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
            'user'=>'nlfogyh',
            'tab'=>'mncmbgs',
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
            'user'=>'yckbnysz',
            'tab'=>'uwboktijsq',
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
            'user'=>'uaqblzddp',
            'tab'=>'splp',
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
            'incre_cmp_switch'=>'',
            'incre_cmp_db_uuid'=>'',
            'incre_cmp_db_type'=>'',
        );
        
        
        $res = $dataChk -> createTbCmp($arr);
        $this->do_assert($res);
    }

    public function testDescribeTbCmp()
    {
        $dataChk = $this -> dataChk;
        $arr = array(
            'uuid'=>'9e4dDe5d-Dd49-7705-3AE4-6EFBAfAaCAdb',
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $dataChk -> describeTbCmp($arr);
        $this->do_assert($res);
    }

    public function testDeleteTbCmp()
    {
        $dataChk = $this -> dataChk;
        $arr = array(
            'force'=>false,
            'uuids'=>'CEA67CB7-eA8d-be7c-53dc-A36Cc8d33B1b',
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
            'tb_cmp_uuids'=>'b3f35e11-CEA1-2fBb-eDB1-D493Cc2B6E73',
            'tb_cmp_name'=>'',
        );
        
        
        $res = $dataChk -> stopTbCmp($arr);
        $this->do_assert($res);
    }

    public function testRestartTbCmp()
    {
        $dataChk = $this -> dataChk;
        $arr = array(
            'operate'=>'',
            'tb_cmp_uuids'=>'B2eCfCD6-e26E-a18C-6b0b-fc21F434DD4B',
            'tb_cmp_name'=>'',
        );
        
        
        $res = $dataChk -> restartTbCmp($arr);
        $this->do_assert($res);
    }

    public function testResumeTbCmp()
    {
        $dataChk = $this -> dataChk;
        $arr = array(
            'operate'=>'',
            'tb_cmp_uuids'=>'f2C5Ff72-3cf7-bC83-62Fc-2b23441A261f',
            'tb_cmp_name'=>'',
        );
        
        
        $res = $dataChk -> resumeTbCmp($arr);
        $this->do_assert($res);
    }

    public function testDescribeTbCmpResuluTimeList()
    {
        $dataChk = $this -> dataChk;
        $arr = array(
            'time_list'=>'3d9fAAA5-4Dc9-6740-ef40-d4eeA1d13cEE',
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
            'uuid'=>'93e966DF-e7b7-CCCB-2be3-B37deDEDDEEb',
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
            'uuid'=>'FDd46d8b-cA0B-DeeC-E169-6E7432eD9339',
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
            'uuid'=>'',
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
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
            'uuid'=>'78f71132-A342-Efd2-670E-a7Ea1d563D8D',
            'start_time'=>'',
            'name'=>'',
            'owner'=>'admin',
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $dataChk -> describeTbCmpCmpDesc($arr);
        $this->do_assert($res);
    }

    public function testDescribeTbCmpStart()
    {
        $dataChk = $this -> dataChk;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $dataChk -> describeTbCmpStart($arr);
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