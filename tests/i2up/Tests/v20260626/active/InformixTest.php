<?php
namespace i2up\Test\v20260626\active;

use i2up\active\v20260626\Informix;
use i2up\common\Auth;
use PHPUnit\Framework\TestCase;
                
class InformixTest extends TestCase
 {
    private $informix;
    
    public function setUp():void
    {
        parent::setup();
        $this -> informix = new Informix(new Auth());
    }

    public function testCreateInformixRule()
    {
        $informix = $this -> informix;
        $arr = array(
            'src_db_uuid'=>'C2EE5656-E2BE-45A8-BF2E-5C0E0FB40625',
            'tgt_db_uuid'=>'D64E1A3A-227C-4E21-8B73-AAB37BDA1020',
            'rule_type'=>8,
            'rule_name'=>'test',
            'node_uuid'=>'',
            'db_user_map'=>'',
            'row_map_mode'=>'rowid',
            'map_type'=>'table',
            'table_map'=>array(
            '0'=>array(
            'src_user'=>'user1',
            'src_table'=>'table1',
            'dst_user'=>'user2',
            'dst_table'=>'table2',
            'column'=>array(),),),
            'dbmap_topic'=>'',
            'sync_mode'=>1,
            'start_scn'=>'',
            'storage_settings'=>array(
            'tgt_extern_table'=>'',
            'src_max_mem'=>'512',
            'src_max_disk'=>'5000',
            'txn_max_mem'=>'10000',
            'tf_max_size'=>'100',
            'max_ld_mem'=>'512',),
            'table_space_map'=>array(
            'tgt_table_space'=>'',
            'table_mapping_way'=>'ptop',
            'table_path_map'=>array(),
            'table_space_name'=>array(),),
            'other_settings'=>array(
            'initrans'=>10,
            'enable_truncate_frequence'=>0,
            'dly_constraint_load'=>0,
            'keep_usr_pwd'=>0,
            'ignore_foreign_key'=>0,
            'table_delay_load'=>array(),
            'table_change_info'=>0,
            'keep_dyn_data'=>0,
            'dyn_thread'=>1,
            'redo_read_thread'=>1,
            'ddl_cv'=>0,
            'incre_sync'=>0,
            'keep_bad_act'=>0,
            'fill_lob_column'=>0,
            'keep_seq_sync'=>0,
            'convert_urp_of_key'=>0,
            'gen_txn'=>0,
            'merge_track'=>1,
            'sync_lob'=>1,
            'message_format'=>'json',
            'json_format'=>'json',
            'lib_name'=>'',
            'jnr_name'=>'',
            'run_time'=>'',
            'jointing'=>array(
            '0'=>array(
            'op'=>'append',
            'table'=>'t1',
            'content'=>array(
            '0'=>'c1',
            '1'=>'v1',
            '2'=>'',),),),),
            'error_handling'=>array(
            'irp'=>'irpafterdel',
            'urp'=>'toirp',
            'drp'=>'ignore',
            'load_err_set'=>'continue',
            'report_failed_dml'=>0,),
            'bw_settings'=>array(
            'bw_limit'=>'',),
            'strate'=>array(),
            'full_sync_settings'=>array(
            'clean_user_before_dump'=>0,
            'dump_thd'=>1,
            'load_thd'=>1,
            'full_sync_custom_cfg'=>array(),
            'full_sync_source_db'=>'',
            'end_db_map'=>'',
            'end_tab_map'=>'',
            'end_target_db'=>'',
            'table_msg_uuid'=>'C2EE5656-E2BE-45A8-BF2E-5C0E0FB40625',
            'full_sync_mode'=>'logic',
            'load_mode'=>'normal',
            'ld_dir_opt'=>0,
            'try_split_part_table'=>1,
            'existing_table'=>'drop_purge',
            'concurrent_table'=>array(),
            'sync_mode'=>1,
            'start_scn'=>'',),
            'full_sync_obj_filter'=>array(
            'full_sync_obj_data'=>array(),),
            'inc_sync_ddl_filter'=>array(
            'inc_sync_ddl_data'=>array(
            '0'=>'CREATE TABLE',
            '1'=>'DROP TABLE',
            '2'=>'ALTER TABLE',
            '3'=>'TABLE ADD',
            '4'=>'TABLE DROP',
            '5'=>'TABLE MODIFY',
            '6'=>'TABLE RENAME',
            '7'=>'TRUNCATE TABLE',
            '8'=>'CREATE COMMENT',
            '9'=>'ADD PARTITION',
            '10'=>'DROP PARTITION',
            '11'=>'ATTACH PARTITION',
            '12'=>'CREATE INDEX',
            '13'=>'DROP INDEX',
            '14'=>'ALTER INDEX',
            '15'=>'RENAME INDEX',
            '16'=>'CREATE TYPE',
            '17'=>'DROP TYPE',
            '18'=>'CREATE VIEW',
            '19'=>'DROP VIEW',
            '20'=>'CREATE SYN',
            '21'=>'DROP SYN',
            '22'=>'ADD CONSTRAINT',
            '23'=>'DROP CONSTRAINT',
            '24'=>'ALTER CONSTRAINT',
            '25'=>'CREATE SEQUENCE',
            '26'=>'DROP SEQUENCE',
            '27'=>'ALTER SEQUENCE',
            '28'=>'CREATE ROLE',
            '29'=>'DROP ROLE',
            '30'=>'ALTER ROLE',
            '31'=>'GRANT SYS',
            '32'=>'GRANT OBJ',
            '33'=>'REVOKE SYS',
            '34'=>'REVOKE OBJ',
            '35'=>'CREATE PROC',
            '36'=>'DROP PROC',
            '37'=>'ALTER PROC',
            '38'=>'CREATE QUEUE',
            '39'=>'DROP QUEUE',
            '40'=>'ALTER QUEUE',
            '41'=>'CREATE TABLESPACE',
            '42'=>'DROP TABLESPACE',
            '43'=>'ALTER TABLESPACE',
            '44'=>'RENAME TABLESPACE',
            '45'=>'ADD HASH PARTITION',
            '46'=>'ADD CONSTRAINTS',),),
            'filter_table_settings'=>array(
            'exclude_table'=>'',
            'exclude_tab_with_column_switch'=>0,
            'exclude_tab_with_column'=>array(),),
            'etl_settings'=>array(
            'etl_table'=>array(
            '0'=>array(
            'obj_fix_type'=>'IRP',
            'user'=>'u',
            'table'=>'t',
            'deal_type'=>'SKIP',
            'field_condition'=>'c',
            'db'=>'',),
            '1'=>array(
            'obj_fix_type'=>'DRP',
            'user'=>'a',
            'table'=>'b',
            'deal_type'=>'EXEC_BEFORE_LOAD',
            'field_condition'=>'c',
            'db'=>'',),),),
            'create_time'=>1710402071,
            'start_rule_now'=>0,
            'db_map_uuid'=>'',
            'dml_track'=>array(
            'enable'=>0,
            'urp'=>0,
            'drp'=>0,
            'tmcol'=>'',
            'delcol'=>'',),
            'kafka'=>array(
            'binary_code'=>'hex',),
            'kafka_time_out'=>'120000',
            'part_load_balance'=>'by_table',
            'kafka_message_encoding'=>'UTF-8',
            'json_template'=>'',
            'save_json_text'=>false,
            'encrypt'=>1,
            'encrypt_switch'=>1,
            'secret_key'=>'',
            'compress'=>9,
            'compress_switch'=>1,
            'status'=>'',
            'include_tab_with_column'=>array(),
            'include_tab_with_column_switch'=>0,
            'full_map_switch'=>0,
            'map_type_list'=>array(),
            'src_db_auth_uuid'=>'7721AA6E-E471-42FC-919C-1F03A674BC46',
            'tgt_db_auth_uuid'=>'',
            'comment'=>'',
            'is_duplicate'=>0,
            'compress_algo'=>'',
            'compress_level'=>0,
            'state'=>array(
            'work_state'=>array(
            'status'=>'ACTIVE_RULE_ABNORMAL',
            'error_code'=>-4016,),
            'back_state'=>array(
            'status'=>'ACTIVE_RULE_ABNORMAL',
            'error_code'=>-4016,),
            'track_state'=>array(
            'status'=>'ACTIVE_RULE_STOP',
            'error_code'=>-4016,),
            'scheduleState'=>'',
            'start_time'=>1710402071,
            'time'=>1716803431,
            'stage'=>'ACTIVE_RULE_ERROR',),
            'maintenance'=>0,
            'biz_grp_list'=>array(),
            'biz_grp_name'=>array(),
            'rule_uuids'=>array(),
            'registered'=>1,
            'active_flag'=>'modify',
        );
        
        
        $res = $informix -> createInformixRule($arr);
        $this->do_assert($res);
    }

    public function testDeleteInformixRule()
    {
        $informix = $this -> informix;
        $arr = array(
            'rule_uuids'=>array(),
            'type'=>'',
            'force'=>0,
        );
        
        
        $res = $informix -> deleteInformixRule($arr);
        $this->do_assert($res);
    }

    public function testResumeInformixRule()
    {
        $informix = $this -> informix;
        $arr = array(
            'rule_uuid'=>'',
            'scn'=>'',
            'operate'=>'',
        );
        
        
        $res = $informix -> resumeInformixRule($arr);
        $this->do_assert($res);
    }

    public function testStopInformixRule()
    {
        $informix = $this -> informix;
        $arr = array(
            'rule_uuid'=>'',
            'scn'=>'',
            'operate'=>'',
        );
        
        
        $res = $informix -> stopInformixRule($arr);
        $this->do_assert($res);
    }

    public function testRestartInformixRule()
    {
        $informix = $this -> informix;
        $arr = array(
            'rule_uuid'=>'',
            'scn'=>'',
            'operate'=>'',
        );
        
        
        $res = $informix -> restartInformixRule($arr);
        $this->do_assert($res);
    }

    public function testStopAnalysisInformixRule()
    {
        $informix = $this -> informix;
        $arr = array(
            'rule_uuid'=>'',
            'scn'=>'',
            'operate'=>'',
        );
        
        
        $res = $informix -> stopAnalysisInformixRule($arr);
        $this->do_assert($res);
    }

    public function testDescribeInformixRule()
    {
        $informix = $this -> informix;
        $arr = array();
        
        $arr['id'] = "123456";
        $res = $informix -> describeInformixRule($arr);
        $this->do_assert($res);
    }

    public function testListinformixRule()
    {
        $informix = $this -> informix;
        $arr = array();
        
        
        $res = $informix -> listinformixRule($arr);
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