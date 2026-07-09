<?php
namespace i2up\Test\v20260626\active;

use i2up\active\v20260626\Postgres;
use i2up\common\Auth;
use PHPUnit\Framework\TestCase;
                
class PostgresTest extends TestCase
 {
    private $postgres;
    
    public function setUp():void
    {
        parent::setup();
        $this -> postgres = new Postgres(new Auth());
    }

    public function testCreatePgsqlRule()
    {
        $postgres = $this -> postgres;
        $arr = array(
            'user_uuid'=>'1BCFCAA3-E3C8-3E28-BDC5-BE36FDC2B5DC',
            'rule_name'=>'带宽cron测试',
            'src_db_uuid'=>'1309A716-239E-4724-8E7D-45D0666C9742',
            'tgt_db_uuid'=>'D64E1A3A-227C-4E21-8B73-AAB37BDA1020',
            'node_uuid'=>'',
            'map_type'=>'table',
            'rule_type'=>41,
            'config'=>array(
            'full_sync_obj_filter'=>array(
            'full_sync_obj_data'=>array(
            '0'=>'TAB',
            '1'=>'CHECK',
            '2'=>'FK',
            '3'=>'PK',
            '4'=>'UK',
            '5'=>'INDEX',
            '6'=>'SEQUENCE',),),
            'inc_sync_ddl_filter'=>array(
            'inc_sync_ddl_data'=>array(
            '0'=>'CREATE TABLE',
            '1'=>'DROP TABLE',
            '2'=>'TABLE RENAME',
            '3'=>'TRUNCATE TABLE',
            '4'=>'ALTER TABLE',
            '5'=>'TABLE ADD',
            '6'=>'TABLE DROP',
            '7'=>'TABLE MODIFY',
            '8'=>'CREATE COMMENT',
            '9'=>'ADD PARTITION',
            '10'=>'DROP PARTITION',
            '11'=>'RENAME PARTITION',
            '12'=>'EXCHANGE PARTITION',
            '13'=>'SPLIT PARTITION',
            '14'=>'MERGE PARTITION',
            '15'=>'MOVE PARTITION',
            '16'=>'CREATE INDEX',
            '17'=>'DROP INDEX',
            '18'=>'ALTER INDEX',
            '19'=>'RENAME INDEX',
            '20'=>'REINDEX INDEX',
            '21'=>'CREATE TYPE',
            '22'=>'DROP TYPE',
            '23'=>'ALTER TYPE',
            '24'=>'ADD CONSTRAINT',
            '25'=>'DROP CONSTRAINT',
            '26'=>'ALTER CONSTRAINT',
            '27'=>'CREATE SEQUENCE',
            '28'=>'DROP SEQUENCE',
            '29'=>'ALTER SEQUENCE',
            '30'=>'DROP VIEW',
            '31'=>'CREATE VIEW',
            '32'=>'ALTER VIEW',
            '33'=>'CREATE PROCEDURE',
            '34'=>'DROP PROCEDURE',
            '35'=>'ALTER PROCEDURE',
            '36'=>'CREATE TABLESPACE',
            '37'=>'DROP TABLESPACE',
            '38'=>'ALTER TABLESPACE',
            '39'=>'CREATE SCHEMA',
            '40'=>'DROP SCHEMA',
            '41'=>'ALTER SCHEMA',
            '42'=>'ADD HASH PARTITION',
            '43'=>'ADD CONSTRAINTS',),),
            'full_sync_settings'=>array(
            'clean_user_before_dump'=>0,
            'dump_thd'=>1,
            'load_thd'=>1,
            'full_sync_custom_cfg'=>array(
            '0'=>array(
            'key'=>'1',
            'value'=>'2',),),
            'full_sync_source_db'=>'1309A716-239E-4724-8E7D-45D0666C9742',
            'end_db_map'=>'',
            'end_tab_map'=>'',
            'end_target_db'=>'',
            'table_msg_uuid'=>'1309A716-239E-4724-8E7D-45D0666C9742',
            'full_sync_mode'=>'logic',
            'load_mode'=>'direct',
            'ld_dir_opt'=>0,
            'try_split_part_table'=>1,
            'existing_table'=>'truncate',
            'concurrent_table'=>array(),
            'sync_mode'=>0,
            'start_scn'=>'lsn123',
            'start_lsn'=>'lsn123',),
            'other_settings'=>array(
            'incre_full_sync_custom_cfg'=>array(
            '0'=>array(
            'key'=>'key1',
            'value'=>'value1',),),
            'dyn_thread'=>1,
            'incre_sync'=>1,
            'pg_thread_decode_multi_enable'=>'',),
            'error_handling'=>array(
            'irp'=>'irpafterdel',
            'urp'=>'ignore',
            'drp'=>'ignore',
            'load_err_set'=>'continue',),
            'dml_track'=>array(
            'enable'=>false,
            'keep_deleted_row'=>false,
            'change_table_structure'=>false,
            'identity_column'=>'',
            'time_column'=>'',
            'date_column'=>'',
            'date_time_column_unique'=>false,
            'load_date_time_column_unique'=>false,
            'date_time_column'=>'',
            'load_time_column'=>'',
            'load_date_column'=>'',
            'load_date_time_column'=>'',
            'audit'=>false,
            'audit_prefix'=>'',
            'audit_appendix'=>'',
            'op_column'=>'',
            'opv_update_key'=>'UPK',
            'opv_update'=>'U',
            'opv_delete'=>'D',
            'opv_insert'=>'I',),
            'start_rule_now'=>0,
            'db_user_map'=>'',
            'table_map'=>array(
            '0'=>array(
            'src_user'=>'1',
            'src_table'=>'1',
            'dst_user'=>'1',
            'dst_table'=>'1',
            'column'=>array(),),),
            'dbmap_topic'=>'',
            'full_sync'=>0,
            'incre_sync'=>1,
            'full_sync_mode'=>'logic',
            'row_map_mode'=>'rowid',
            'kafka_time_out'=>'120000',
            'part_load_balance'=>'by_table',
            'kafka_message_encoding'=>'UTF-8',
            'kafka'=>array(
            'binary_code'=>'hex',),
            'etl_settings'=>array(
            'etl_table'=>array(),),
            'run_time'=>'024*00:00:00-23:59:00*1,16*00:01:00-22:59:00*1',
            'save_json_text'=>false,
            'jointing'=>array(),
            'src_connect_user'=>'postgres',
            'dst_connect_user'=>'',
            'filter_table_settings'=>array(
            'exclude_table'=>array(),),),
            'create_time'=>1704349540,
            'encrypt'=>1,
            'encrypt_switch'=>1,
            'secret_key'=>'',
            'compress'=>0,
            'compress_switch'=>0,
            'src_db_auth_uuid'=>'82B30A78-A86D-41CC-9246-CF8FE3AF943E',
            'tgt_db_auth_uuid'=>'',
            'comment'=>'',
            'is_duplicate'=>0,
            'maintenance'=>1,
            'search_script_name'=>'',
            'biz_grp_list'=>array(),
            'encrypt_column_switch'=>1,
            'encrypt_column_method'=>1,
            'encrypt_column_key'=>'',
            'encrypt_columns'=>array(
            '0'=>array(
            'user'=>'',
            'table'=>'',
            'column'=>'',),),
        );
        
        
        $res = $postgres -> createPgsqlRule($arr);
        $this->do_assert($res);
    }

    public function testListPgsqlRule()
    {
        $postgres = $this -> postgres;
        $arr = array(
            'page'=>1,
            'limit'=>10,
            'search_field'=>'',
            'search_value'=>'',
            'group_uuid'=>'',
            'where_args'=>array(
            'rule_uuid'=>'',),
        );
        
        
        $res = $postgres -> listPgsqlRule($arr);
        $this->do_assert($res);
    }

    public function testModifyPgsqlRule()
    {
        $postgres = $this -> postgres;
        $arr = array(
            'rule_name'=>'',
            'src_db_uuid'=>'',
            'tgt_db_uuid'=>'',
            'tgt_type'=>'sqlserver',
            'map_type'=>'db',
            'config'=>array(
            'start_rule_now'=>1,
            'table_map'=>'',
            'full_sync'=>0,
            'incre_sync'=>1,
            'full_sync_mode'=>'1',),
            'rule_uuid'=>'',
        );
        
        
        $res = $postgres -> modifyPgsqlRule($arr);
        $this->do_assert($res);
    }

    public function testDeletePgsqlRule()
    {
        $postgres = $this -> postgres;
        $arr = array(
            'uuids'=>array(),
            'force'=>'true',
        );
        
        
        $res = $postgres -> deletePgsqlRule($arr);
        $this->do_assert($res);
    }

    public function testResumePgsqlRule()
    {
        $postgres = $this -> postgres;
        $arr = array(
            'operate'=>'',
            'uuids'=>array(
            '0'=>'65CEFE4E-DC17-D323-4E04-169EBF151448',
            '1'=>'8871F59D-B796-4313-AB28-9960EA97804C',),
            'scn'=>'',
            'all'=>1,
        );
        
        
        $res = $postgres -> resumePgsqlRule($arr);
        $this->do_assert($res);
    }

    public function testStopPgsqlRule()
    {
        $postgres = $this -> postgres;
        $arr = array(
            'operate'=>'',
            'uuids'=>array(
            '0'=>'65CEFE4E-DC17-D323-4E04-169EBF151448',
            '1'=>'8871F59D-B796-4313-AB28-9960EA97804C',),
            'scn'=>'',
            'all'=>1,
        );
        
        
        $res = $postgres -> stopPgsqlRule($arr);
        $this->do_assert($res);
    }

    public function testRestartPgsqlRule()
    {
        $postgres = $this -> postgres;
        $arr = array(
            'operate'=>'',
            'uuids'=>array(
            '0'=>'65CEFE4E-DC17-D323-4E04-169EBF151448',
            '1'=>'8871F59D-B796-4313-AB28-9960EA97804C',),
            'scn'=>'',
            'all'=>1,
        );
        
        
        $res = $postgres -> restartPgsqlRule($arr);
        $this->do_assert($res);
    }

    public function testDuplicatePgsqlRule()
    {
        $postgres = $this -> postgres;
        $arr = array(
            'operate'=>'',
            'uuids'=>array(
            '0'=>'65CEFE4E-DC17-D323-4E04-169EBF151448',
            '1'=>'8871F59D-B796-4313-AB28-9960EA97804C',),
            'scn'=>'',
            'all'=>1,
        );
        
        
        $res = $postgres -> duplicatePgsqlRule($arr);
        $this->do_assert($res);
    }

    public function testListRuleStatus()
    {
        $postgres = $this -> postgres;
        $arr = array(
            'uuids'=>array(),
        );
        
        
        $res = $postgres -> listRuleStatus($arr);
        $this->do_assert($res);
    }

    public function testDescribePgsqlRules()
    {
        $postgres = $this -> postgres;
        $arr = array(
            'rule_uuid'=>'',
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $postgres -> describePgsqlRules($arr);
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