<?php
namespace i2up\Test\v20260626\stream;

use i2up\stream\v20260626\TbCmp;
use i2up\common\Auth;
use PHPUnit\Framework\TestCase;
                
class TbCmpTest extends TestCase
 {
    private $tbCmp;
    
    public function setUp():void
    {
        parent::setup();
        $this -> tbCmp = new TbCmp(new Auth());
    }

    public function testCreateTbCmp()
    {
        $tbCmp = $this -> tbCmp;
        $arr = array(
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
            'config'=>array(
            'v_tabmap'=>array(
            '0'=>array(
            'src_user'=>'',
            'src_tb'=>'',
            'src_sql'=>'',
            'tgt_user'=>'',
            'tgt_tb'=>'',
            'tgt_sql'=>'',
            'key'=>'',),),
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
            'global_time_limit'=>false,),
            'db_map'=>array(
            'src'=>array(
            '0'=>array(
            'db_uuid'=>'',
            'auth_uuid'=>'',),),
            'tgt'=>array(
            '0'=>array(
            'db_uuid'=>'',
            'auth_uuid'=>'',),),),
            'interval'=>'10m',
            'tb_cmp_name'=>'规则名',
            'src_db_uuids'=>'4CA773F4-36E3-A091-122C-ACDFB2112C21',
            'tgt_db_uuids'=>'40405FD3-DB86-DC8A-81C9-C137B6FDECE5',
            'cmp_type'=>'table',
            'filter_table'=>'[user.table]',
            'db_tb_map'=>array(
            '0'=>array(
            'src'=>array(
            '0'=>array(
            'user'=>'hgyf',
            'tab'=>'qpfjw',
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
            'regex_switch'=>'1',
            'col'=>'{"col1":"col2", "col3":"col4"}',),
            '1'=>array(
            'src'=>array(
            '0'=>array(
            'user'=>'gvdhhu',
            'tab'=>'fhjdgvyn',
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
            'regex_switch'=>'1',
            'col'=>'{"col1":"col2", "col3":"col4"}',),
            '2'=>array(
            'src'=>array(
            '0'=>array(
            'user'=>'mss',
            'tab'=>'szkpes',
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
            'regex_switch'=>'1',
            'col'=>'{"col1":"col2", "col3":"col4"}',),
            '3'=>array(
            'src'=>array(
            '0'=>array(
            'user'=>'vxatjmmum',
            'tab'=>'qkgpcjcscq',
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
            'regex_switch'=>'1',
            'col'=>'{"col1":"col2", "col3":"col4"}',),
            '4'=>array(
            'src'=>array(
            '0'=>array(
            'user'=>'uxbbdbjyd',
            'tab'=>'nvhvfdzh',
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
            'regex_switch'=>'1',
            'col'=>'{"col1":"col2", "col3":"col4"}',),),
            'dump_thd'=>1,
            'polices'=>'"0|00:00',
            'policy_type'=>'one_time',
            'concurrent_table'=>array(
            '0'=>'hh.ww',),
            'try_split_part_table'=>0,
            'one_time'=>'2019-05-27 16:07:08',
            'tb_cmp_type'=>'',
            'complex_switch'=>'',
            'src_db_auth_uuid'=>'',
            'tgt_db_auth_uuid'=>'',
        );
        
        
        $res = $tbCmp -> createTbCmp($arr);
        $this->do_assert($res);
    }

    public function testListSyncTbCmpStatus()
    {
        $tbCmp = $this -> tbCmp;
        $arr = array(
            'uuids'=>array(
            '0'=>'bf0c71AE-6278-dfbe-E4CA-BC1d1Acf352D',),
        );
        
        
        $res = $tbCmp -> listSyncTbCmpStatus($arr);
        $this->do_assert($res);
    }

    public function testStopTbCmp()
    {
        $tbCmp = $this -> tbCmp;
        $arr = array(
            'operate'=>'',
            'tb_cmp_uuids'=>'b513Cb58-7A3f-ef21-8956-f5bACD16DCE7',
            'tab'=>'
[\\"asda.asdsa\\"]',
            'fix_relation'=>1,
            'start_time'=>'',
            'new_tgt_uuid'=>'',
        );
        
        
        $res = $tbCmp -> stopTbCmp($arr);
        $this->do_assert($res);
    }

    public function testRestartTbCmp()
    {
        $tbCmp = $this -> tbCmp;
        $arr = array(
            'operate'=>'',
            'tb_cmp_uuids'=>'dB84CD91-1Cc9-dCd1-fB1E-5151432EA9bb',
            'tab'=>'
[\\"asda.asdsa\\"]',
            'fix_relation'=>1,
            'start_time'=>'',
            'new_tgt_uuid'=>'',
        );
        
        
        $res = $tbCmp -> restartTbCmp($arr);
        $this->do_assert($res);
    }

    public function testCmpStopTime()
    {
        $tbCmp = $this -> tbCmp;
        $arr = array(
            'operate'=>'',
            'tb_cmp_uuids'=>'eaaaCef4-f9E5-c71A-52bE-EBDb71C31Cb1',
            'tab'=>'
[\\"asda.asdsa\\"]',
            'fix_relation'=>1,
            'start_time'=>'',
            'new_tgt_uuid'=>'',
        );
        
        
        $res = $tbCmp -> cmpStopTime($arr);
        $this->do_assert($res);
    }

    public function testCmpResumeTime()
    {
        $tbCmp = $this -> tbCmp;
        $arr = array(
            'operate'=>'',
            'tb_cmp_uuids'=>'88E43D52-B0f7-B6e0-A5bd-55d9f8DDEAFd',
            'tab'=>'
[\\"asda.asdsa\\"]',
            'fix_relation'=>1,
            'start_time'=>'',
            'new_tgt_uuid'=>'',
        );
        
        
        $res = $tbCmp -> cmpResumeTime($arr);
        $this->do_assert($res);
    }

    public function testCmpImmediate()
    {
        $tbCmp = $this -> tbCmp;
        $arr = array(
            'operate'=>'',
            'tb_cmp_uuids'=>'2EAECB46-6fAD-7D44-77c8-dFeD4d07D988',
            'tab'=>'
[\\"asda.asdsa\\"]',
            'fix_relation'=>1,
            'start_time'=>'',
            'new_tgt_uuid'=>'',
        );
        
        
        $res = $tbCmp -> cmpImmediate($arr);
        $this->do_assert($res);
    }

    public function testDescribeSyncTbCmpResult()
    {
        $tbCmp = $this -> tbCmp;
        $arr = array(
            'page'=>1,
            'limit'=>10,
            'uuid'=>'79c89cFc-Dfd9-0bBD-8d12-6cf9c40b1FcD',
            'start_time'=>'',
            'flag'=>1,
            'user'=>'',
            'table'=>'',
        );
        
        
        $res = $tbCmp -> describeSyncTbCmpResult($arr);
        $this->do_assert($res);
    }

    public function testDescribeSyncTbCmpResultUsers()
    {
        $tbCmp = $this -> tbCmp;
        $arr = array(
            'uuid'=>'df55B7fa-B04e-bBA6-9002-9dcb035255Ca',
            'start_time'=>'',
        );
        
        
        $res = $tbCmp -> describeSyncTbCmpResultUsers($arr);
        $this->do_assert($res);
    }

    public function testDescribeSyncTbCmpResultTables()
    {
        $tbCmp = $this -> tbCmp;
        $arr = array(
            'uuid'=>'0d92ff9C-83aA-D988-87EA-Aab85E2AbCEf',
            'start_time'=>'',
        );
        
        
        $res = $tbCmp -> describeSyncTbCmpResultTables($arr);
        $this->do_assert($res);
    }

    public function testDescribeTbCmpErrorMsg()
    {
        $tbCmp = $this -> tbCmp;
        $arr = array(
            'offset'=>1,
            'limit'=>10,
            'uuid'=>'70Badb7f-0d4E-ce2D-4cbE-8E25B64C181C',
            'start_time'=>'',
            'key_name'=>'',
            'column_name'=>'',
            'src_db'=>'',
            'tgt_db'=>'',
        );
        
        
        $res = $tbCmp -> describeTbCmpErrorMsg($arr);
        $this->do_assert($res);
    }

    public function testDescribeTbCmpDiffMap()
    {
        $tbCmp = $this -> tbCmp;
        $arr = array(
            'uuid'=>'88E48be3-3DC3-645D-46C8-2656dCCe1baA',
        );
        
        
        $res = $tbCmp -> describeTbCmpDiffMap($arr);
        $this->do_assert($res);
    }

    public function testListSyncTbCmpResultTimeList()
    {
        $tbCmp = $this -> tbCmp;
        $arr = array(
            'uuid'=>'',
            'limit'=>1,
            'offset'=>1,
            'result'=>0,
            'before'=>1,
            'after'=>160000,
        );
        
        
        $res = $tbCmp -> listSyncTbCmpResultTimeList($arr);
        $this->do_assert($res);
    }

    public function testListSyncTbCmpFixResultTimeList()
    {
        $tbCmp = $this -> tbCmp;
        $arr = array(
            'uuid'=>'',
            'limit'=>1,
            'offset'=>1,
        );
        
        
        $res = $tbCmp -> listSyncTbCmpFixResultTimeList($arr);
        $this->do_assert($res);
    }

    public function testDescribeSyncTbCmpFixResult()
    {
        $tbCmp = $this -> tbCmp;
        $arr = array(
            'page'=>1,
            'limit'=>10,
            'uuid'=>'4262fF92-545B-5D94-F7ff-888AF7cDa1DD',
            'start_time'=>'',
            'user'=>'',
            'table'=>'',
        );
        
        
        $res = $tbCmp -> describeSyncTbCmpFixResult($arr);
        $this->do_assert($res);
    }

    public function testExportSyncTbCmp()
    {
        $tbCmp = $this -> tbCmp;
        $arr = array(
            'include_active_db'=>1,
            'include_active_node'=>1,
            'rule_uuids'=>array(),
        );
        
        
        $res = $tbCmp -> exportSyncTbCmp($arr);
        $this->do_assert($res);
    }

    public function testImportSyncTbCmp()
    {
        $tbCmp = $this -> tbCmp;
        $arr = array(
            'file'=>'',
            'ext'=>'',
        );
        
        
        $res = $tbCmp -> importSyncTbCmp($arr);
        $this->do_assert($res);
    }

    public function testListSyncTbCmp()
    {
        $tbCmp = $this -> tbCmp;
        $arr = array(
            'where_args'=>'',
        );
        
        
        $res = $tbCmp -> listSyncTbCmp($arr);
        $this->do_assert($res);
    }

    public function testExportSyncTbCmpResult()
    {
        $tbCmp = $this -> tbCmp;
        $arr = array(
            'tb_cmp_uuid'=>'',
            'start_time'=>'',
        );
        
        
        $res = $tbCmp -> exportSyncTbCmpResult($arr);
        $this->do_assert($res);
    }

    public function testExportSyncTbCmpFixResult()
    {
        $tbCmp = $this -> tbCmp;
        $arr = array(
            'tb_cmp_uuid'=>'',
            'start_time'=>'',
        );
        
        
        $res = $tbCmp -> exportSyncTbCmpFixResult($arr);
        $this->do_assert($res);
    }

    public function testDescribeSyncTbCmpResultTimeList()
    {
        $tbCmp = $this -> tbCmp;
        $arr = array(
            'time_list'=>'5C9DB9b1-dfFe-dEfF-ADE3-441fAed8DB20',
            'uuid'=>'',
        );
        
        
        $res = $tbCmp -> describeSyncTbCmpResultTimeList($arr);
        $this->do_assert($res);
    }

    public function testDescribeSyncTbCmpFixResultTimeList()
    {
        $tbCmp = $this -> tbCmp;
        $arr = array(
            'time_list'=>'AD8919F1-13bB-E4eF-24cF-dAbF8180192F',
            'uuid'=>'',
        );
        
        
        $res = $tbCmp -> describeSyncTbCmpFixResultTimeList($arr);
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