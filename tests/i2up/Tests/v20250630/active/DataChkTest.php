<?php
namespace i2up\Test\v20250630\active;

use i2up\active\v20250630\DataChk;
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
            'db_user_map' => "{'src_user': 'dst_user'}",
            'config' => array(
                'one_task' => 'immediate',
            ),
            'policies' => '',
            'policy_type' => 'periodic',
            'one_time' => '2019-05-27 16:07:08',
            'repair' => 1,
            'obj_cmp_name' => 'test',
            'src_db_uuid' => '4CA773F4-36E3-A091-122C-ACDFB2112C21',
            'tgt_db_uuid' => '40405FD3-DB86-DC8A-81C9-C137B6FDECE5',
            'cal_table_recoders' => 1,
            'cmp_type' => 'user',
            'rule_uuid' => '751A03F5-C97D-645B-82B2-316A5D198528',
            'src_db_auth_uuid' => '',
            'tgt_db_auth_uuid' => '',
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
            'uuid'=>'6fAb8bF9-33D8-5fCB-93Cb-Ca0Ffbc6BdFC',
        );
        
        
        $res = $dataChk -> listDatacheckObjCmpResultTimeList($arr);
        $this->do_assert($res);
    }

    public function testDescribeDatacheckObjCmpResult()
    {
        $dataChk = $this -> dataChk;
        $arr = array(
            'BackLackOnly'=>0,
            'uuid'=>'adE2AfBa-84Be-ffeD-eCe7-BD848E4EA1f9',
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
            'uuid'=>'A4bB8f4f-b312-FCaa-1DB9-cbe7f3FFe3f5',
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
            'user'=>'vfcen',
            'tab'=>'dmnf',
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
            'user'=>'gnae',
            'tab'=>'ctpnvo',
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
            'user'=>'qikhuqcd',
            'tab'=>'srywwjzo',
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
            'user'=>'bydbchvjnx',
            'tab'=>'upmcq',
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
            'user'=>'ovjxjfddio',
            'tab'=>'ukfzhur',
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
            'uuid'=>'df994349-E6FD-54EA-5EeB-31Ed6F613Fa1',
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
            'uuids'=>'E564D32b-Aae3-aA5C-d52E-EeAefdBa7FCc',
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
            'tb_cmp_uuids'=>'F679BA4D-d13d-7e34-b4c3-E8D8c7D91cC5',
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
            'tb_cmp_uuids'=>'4ce04eF8-6E8e-30bD-68D9-bB56FfccdBDC',
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
            'tb_cmp_uuids'=>'Ef1bF433-Ebd2-eE6E-43Bb-D2F118Dc87Bb',
            'tb_cmp_name'=>'',
        );
        
        
        $res = $dataChk -> resumeTbCmp($arr);
        $this->do_assert($res);
    }

    public function testDescribeTbCmpResuluTimeList()
    {
        $dataChk = $this -> dataChk;
        $arr = array(
            'time_list'=>'b6a15D9D-Df7d-99ce-66dC-B3798C9C4edC',
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
            'uuid'=>'cFD46FdC-E6C5-EbDB-FEAc-5Ed0eedF7B2f',
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
            'uuid'=>'4BDF5d9B-CAbF-C37B-E08B-fBE354957403',
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
            'uuid'=>'fFCA4Bb9-ecF4-DC1E-e792-d4eBb9D77bCC',
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