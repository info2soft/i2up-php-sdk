<?php
namespace i2up\Test\v20250630\active;

use i2up\active\v20250630\Sqlserver;
use i2up\common\Auth;
                
class SqlserverTest extends \PHPUnit_Framework_TestCase
 {
    private $sqlserver;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> sqlserver = new Sqlserver(new Auth());
    }

    public function testCreateRule()
    {
        $sqlserver = $this -> sqlserver;
        $arr = array(
            'rule_name'=>'',
            'src_db_uuid'=>'',
            'tgt_db_uuid'=>'',
            'tgt_type'=>'sqlserver',
            'map_type'=>'db',
            'config'=>array(
            'start_rule_now'=>1,
            'table_map'=>array(
            '0'=>array(
            'src_table'=>'',
            'dst_table'=>'',
            'src_user'=>'',
            'dst_user'=>'',
            'column'=>array(
            '0'=>array(
            'src_column'=>'',
            'dst_column'=>'',),),),),
            'enable_cdc'=>0,
            'mirror_db_uuid'=>'',
            'sync_mode'=>1,
            'dump_thd'=>1,
            'drop_old_tab'=>1,
            'lsn'=>'',
            'etl_settings'=>array(
            'etl_table'=>array(
            '0'=>array(
            'oprType'=>'',
            'table'=>'',
            'user'=>'',
            'process'=>'',
            'addInfo'=>'',),),),
            'loader'=>1,
            'ip'=>'',
            'datport'=>'',
            'src_connect_user'=>'',
            'dst_connect_user'=>'',
            'bw_settings'=>array(
            'bw_limit'=>'"12*00:00-13:00*40M,3*00:00-13:00*40M"',),
            'inc_sync_ddl_data'=>array(),
            'filter_table_settings'=>array(
            'exclude_table'=>array(),),
            'full_sync_obj_filter'=>array(
            'full_sync_obj_data'=>array(
            '0'=>'PROCEDURE',
            '1'=>'PACKAGE',
            '2'=>'PACKAGE BODY',
            '3'=>'DATABASE LINK',
            '4'=>'OLD JOB',
            '5'=>'JOB',
            '6'=>'PRIVS',
            '7'=>'CONSTRAINT',
            '8'=>'JAVA RESOURCE',
            '9'=>'JAVA SOURCE',),),
            'run_time'=>'"12*00:00-13:00*40M,3*00:00-13:00*40M"',
            'save_json_text'=>false,
            'enable_cdc_table'=>'',
            'publish_sub_switch'=>1,
            'incre_sync'=>1,
            'db_user_map'=>'{"user1":"user2","user3":"user4"}',
            'ddl_cv'=>1,
            'delete_table_keep_time'=>1,
            'delete_table_keep_time_unit'=>1,),
            'encrypt_column_switch'=>'',
            'encrypt_column_method'=>'',
            'encrypt_column_key'=>'',
            'encrypt_columns'=>array(
            '0'=>array(
            'user'=>'',
            'table'=>'',
            'column'=>'',),),
        );
        
        
        $res = $sqlserver -> createRule($arr);
        $this->do_assert($res);
    }

    public function testBatchCreateRule()
    {
        $sqlserver = $this -> sqlserver;
        $arr = array(
            'tgt_type'=>'sqlserver',
            'map_type'=>'db',
            'config'=>array(
            'enable_cdc'=>0,
            'start_rule_now'=>1,
            'dump_thd'=>1,
            'sync_mode'=>1,
            'drop_old_tab'=>1,
            'table_map'=>'',
            'etl_settings'=>array(
            'etl_table'=>array(
            '0'=>array(
            'oprType'=>'',
            'table'=>'',
            'user'=>'',
            'process'=>'',
            'addInfo'=>'',),),),),
            'rule_list'=>array(
            '0'=>array(
            'rule_name'=>'',
            'src_db_uuid'=>'',
            'tgt_db_uuid'=>'',
            'mirror_db_uuid'=>'',
            'src_db_auth_uuid'=>'',
            'tgt_db_auth_uuid'=>'',),),
        );
        
        
        $res = $sqlserver -> batchCreateRule($arr);
        $this->do_assert($res);
    }

    public function testModifyRule()
    {
        $sqlserver = $this -> sqlserver;
        $arr = array(
            'rule_name'=>'test',
            'src_db_uuid'=>'7B1BE386-4CB1-86AA-D39D-B644C2EADD57',
            'tgt_db_uuid'=>'CD52E44B-D25A-4CE3-126F-6F5A460731E4',
            'tgt_type'=>'sqlserver',
            'map_type'=>'table',
            'config'=>array(
            'etl_settings'=>array(
            'etl_table'=>array(
            '0'=>array(
            'oprType'=>'',
            'table'=>'',
            'user'=>'',
            'process'=>'',
            'addInfo'=>'',),),),
            'loader'=>1,
            'ip'=>'',
            'datport'=>'',
            'db_user_map'=>array(),
            'bw_settings'=>array(
            'bw_limit'=>'',),
            'run_time'=>'"12*00:00-13:00*40M,3*00:00-13:00*40M"',),
            'start_rule_now'=>1,
            'table_map'=>'[{"src_user":"1","src_table":"2","dst_user":"1","dst_table":"2","column":[]}]',
            'enable_cdc'=>0,
            'mirror_db_uuid'=>'',
            'sync_mode'=>1,
            'dump_thd'=>1,
            'drop_old_tab'=>1,
        );
        
        
        $res = $sqlserver -> modifyRule($arr);
        $this->do_assert($res);
    }

    public function testDeleteRule()
    {
        $sqlserver = $this -> sqlserver;
        $arr = array(
            'uuids'=>array(),
            'force'=>'true',
        );
        
        
        $res = $sqlserver -> deleteRule($arr);
        $this->do_assert($res);
    }

    public function testResumeSqlserverRule()
    {
        $sqlserver = $this -> sqlserver;
        $arr = array(
            'operate'=>'',
            'uuids'=>array(),
        );
        
        
        $res = $sqlserver -> resumeSqlserverRule($arr);
        $this->do_assert($res);
    }

    public function testStopSqlserverRule()
    {
        $sqlserver = $this -> sqlserver;
        $arr = array(
            'operate'=>'',
            'uuids'=>array(),
        );
        
        
        $res = $sqlserver -> stopSqlserverRule($arr);
        $this->do_assert($res);
    }

    public function testRestartSqlserverRule()
    {
        $sqlserver = $this -> sqlserver;
        $arr = array(
            'operate'=>'',
            'uuids'=>array(),
        );
        
        
        $res = $sqlserver -> restartSqlserverRule($arr);
        $this->do_assert($res);
    }

    public function testDuplicateSqlserverRule()
    {
        $sqlserver = $this -> sqlserver;
        $arr = array(
            'operate'=>'',
            'uuids'=>array(),
        );
        
        
        $res = $sqlserver -> duplicateSqlserverRule($arr);
        $this->do_assert($res);
    }

    public function testStopAndStopAnalysisSqlserverRule()
    {
        $sqlserver = $this -> sqlserver;
        $arr = array(
            'operate'=>'',
            'uuids'=>array(),
        );
        
        
        $res = $sqlserver -> stopAndStopAnalysisSqlserverRule($arr);
        $this->do_assert($res);
    }

    public function testStartAnalysisSqlserverRule()
    {
        $sqlserver = $this -> sqlserver;
        $arr = array(
            'operate'=>'',
            'uuids'=>array(),
        );
        
        
        $res = $sqlserver -> startAnalysisSqlserverRule($arr);
        $this->do_assert($res);
    }

    public function testStopAnalysisSqlserverRule()
    {
        $sqlserver = $this -> sqlserver;
        $arr = array(
            'operate'=>'',
            'uuids'=>array(),
        );
        
        
        $res = $sqlserver -> stopAnalysisSqlserverRule($arr);
        $this->do_assert($res);
    }

    public function testListRuleStatus()
    {
        $sqlserver = $this -> sqlserver;
        $arr = array(
            'uuids'=>array(),
        );
        
        
        $res = $sqlserver -> listRuleStatus($arr);
        $this->do_assert($res);
    }

    public function testCheckName()
    {
        $sqlserver = $this -> sqlserver;
        $arr = array();
        
        
        $res = $sqlserver -> checkName($arr);
        $this->do_assert($res);
    }

    public function testListTbCmpStatus()
    {
        $sqlserver = $this -> sqlserver;
        $arr = array(
            'uuids'=>'0aFBFb92-62d6-E40C-0ecA-BFA7290Dc1cB',
        );
        
        
        $res = $sqlserver -> listTbCmpStatus($arr);
        $this->do_assert($res);
    }

    public function testListRule()
    {
        $sqlserver = $this -> sqlserver;
        $arr = array(
            'page'=>1,
            'limit'=>10,
            'search_field'=>'',
            'search_value'=>'',
            'group_uuid'=>'',
            'where_args'=>array(
            'rule_uuid'=>'',),
        );
        
        
        $res = $sqlserver -> listRule($arr);
        $this->do_assert($res);
    }

    public function testListRuleLog()
    {
        $sqlserver = $this -> sqlserver;
        $arr = array(
            'offset'=>1,
            'limit'=>10,
            'date_start'=>1,
            'date_end'=>1,
            'type'=>-1,
            'module_type'=>-1,
            'query_type'=>1,
            'rule_uuid'=>'F530FB0E-0208-9071-66D3-E595AE7D5A4C',
        );
        
        
        $res = $sqlserver -> listRuleLog($arr);
        $this->do_assert($res);
    }

    public function testDescribeListRule()
    {
        $sqlserver = $this -> sqlserver;
        $arr = array(
            'rule_uuid'=>'6FBC9EB9-A10A-E226-9F2B-A77B3CF1D337',
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $sqlserver -> describeListRule($arr);
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