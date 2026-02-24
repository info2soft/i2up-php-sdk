<?php
namespace i2up\Test\v20260209\stream;

use i2up\stream\v20260209\TbCmp;
use i2up\common\Auth;
                
class TbCmpTest extends \PHPUnit_Framework_TestCase
 {
    private $tbCmp;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
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
            'user'=>'fzrgd',
            'tab'=>'hglcvk',
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
            'user'=>'vowsiv',
            'tab'=>'okptvbny',
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
            'user'=>'jtfmlqwu',
            'tab'=>'wkhl',
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
            'user'=>'hxzgqmfri',
            'tab'=>'xdrsx',
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
            'user'=>'qvylsir',
            'tab'=>'ltiekkfth',
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
            'tb_cmp_uuids'=>'9aD5cd9D-edAf-d3CE-FEbF-dDFa80AdbC4E',
            'tab'=>'
[\\"asda.asdsa\\"]',
            'fix_relation'=>1,
            'start_time'=>'',
        );
        
        
        $res = $tbCmp -> stopTbCmp($arr);
        $this->do_assert($res);
    }

    public function testRestartTbCmp()
    {
        $tbCmp = $this -> tbCmp;
        $arr = array(
            'operate'=>'',
            'tb_cmp_uuids'=>'bFF6A8c5-21C8-BdEB-45E8-dB66c387ef9e',
            'tab'=>'
[\\"asda.asdsa\\"]',
            'fix_relation'=>1,
            'start_time'=>'',
        );
        
        
        $res = $tbCmp -> restartTbCmp($arr);
        $this->do_assert($res);
    }

    public function testCmpStopTime()
    {
        $tbCmp = $this -> tbCmp;
        $arr = array(
            'operate'=>'',
            'tb_cmp_uuids'=>'0cCCcFA1-c742-dD7D-8eDB-bB8ea9C496bB',
            'tab'=>'
[\\"asda.asdsa\\"]',
            'fix_relation'=>1,
            'start_time'=>'',
        );
        
        
        $res = $tbCmp -> cmpStopTime($arr);
        $this->do_assert($res);
    }

    public function testCmpResumeTime()
    {
        $tbCmp = $this -> tbCmp;
        $arr = array(
            'operate'=>'',
            'tb_cmp_uuids'=>'3FA8BffC-A3E7-E8Ad-5B49-dcB76cE6F58D',
            'tab'=>'
[\\"asda.asdsa\\"]',
            'fix_relation'=>1,
            'start_time'=>'',
        );
        
        
        $res = $tbCmp -> cmpResumeTime($arr);
        $this->do_assert($res);
    }

    public function testCmpImmediate()
    {
        $tbCmp = $this -> tbCmp;
        $arr = array(
            'operate'=>'',
            'tb_cmp_uuids'=>'77275E41-d7cc-6B8b-a8C9-8df474cCd5Ce',
            'tab'=>'
[\\"asda.asdsa\\"]',
            'fix_relation'=>1,
            'start_time'=>'',
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
            'uuid'=>'213B4dfd-B60f-9061-58cC-0EeCCd73D08e',
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
            'uuid'=>'65b6E4Df-1764-8678-1c7e-AfAAAA188A0c',
            'start_time'=>'',
        );
        
        
        $res = $tbCmp -> describeSyncTbCmpResultUsers($arr);
        $this->do_assert($res);
    }

    public function testDescribeSyncTbCmpResultTables()
    {
        $tbCmp = $this -> tbCmp;
        $arr = array(
            'uuid'=>'51e3B4b7-5BFE-7bAD-baa6-4E6d8fD0B84e',
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
            'uuid'=>'49c3DFf3-b0f9-A9D9-5e2e-6B3C864FFbeb',
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
            'uuid'=>'B00a379f-EAde-eb5e-DbeE-ccF4E3c47EB9',
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
            'uuid'=>'3284D166-32E4-CAE0-ad5C-8188AbB4625D',
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
            'time_list'=>'6ac8CeB0-4CDd-aFB0-A3b9-D4EAd22AA696',
            'uuid'=>'',
        );
        
        
        $res = $tbCmp -> describeSyncTbCmpResultTimeList($arr);
        $this->do_assert($res);
    }

    public function testDescribeSyncTbCmpFixResultTimeList()
    {
        $tbCmp = $this -> tbCmp;
        $arr = array(
            'time_list'=>'D2617dBC-f2F7-2CFf-F799-5D2eA369d44e',
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