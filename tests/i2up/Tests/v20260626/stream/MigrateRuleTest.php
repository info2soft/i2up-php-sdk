<?php
namespace i2up\Test\v20260626\stream;

use i2up\stream\v20260626\MigrateRule;
use i2up\common\Auth;
use PHPUnit\Framework\TestCase;
                
class MigrateRuleTest extends TestCase
 {
    private $migrateRule;
    
    public function setUp():void
    {
        parent::setup();
        $this -> migrateRule = new MigrateRule(new Auth());
    }

    public function testCreateMigrateRule()
    {
        $migrateRule = $this -> migrateRule;
        $arr = array(
            'base_settings'=>array(
            'json_format'=>'',
            'dbmap_topic'=>'',
            'json_template'=>'',
            'binary_code'=>'',
            'kafka_message_encoding'=>'',
            'kafka_time_out'=>1,
            'part_load_balance'=>'',
            'row_map_mode'=>'',
            'save_json_text'=>false,
            'message_format'=>'',
            'ha_switch'=>'',
            'distribute_mode'=>'',
            'ob_sharding_inst'=>'',
            'shared_process'=>false,
            'start_rule_now'=>'',
            'full_sync_mode'=>'',
            'lib_name'=>'',
            'jnr_name'=>'',
            'exclude_dbs'=>array(),
            'exclude_dbs_switch'=>'',
            'subscribe_type'=>'',
            'subscribe_name'=>'',
            'subscribe_procedure'=>'',),
            'inc_sync_settings'=>array(
            'server_user'=>'',
            'server_service'=>'',
            'incre_sync'=>1,
            'dyn_thread'=>1,
            'incre_full_sync_custom_cfg'=>array(
            '0'=>array(
            'key'=>'',
            'value'=>'',),),
            'log_file_retention'=>1,
            'convert_urp_of_key'=>'',
            'sync_lob'=>1,
            'gen_txn'=>1,
            'merge_track'=>1,
            'keep_bad_act'=>1,
            'fill_lob_column'=>1,
            'ddl_cv'=>1,
            'keep_seq_sync'=>'',
            'storage_settings'=>array(
            'keep_incre_time'=>1,
            'src_max_mem'=>1,
            'src_max_disk'=>1,
            'txn_max_mem'=>1,
            'tf_max_size'=>1,
            'max_ld_mem'=>1,),
            'error_handling'=>array(
            'load_err_set'=>'',
            'drp'=>'',
            'irp'=>'',
            'urp'=>'',
            'info'=>'',
            'report_failed_dml'=>'',),
            'dml_track'=>array(
            'change_table_structure'=>false,
            'date_time_column_unique'=>'',
            'load_date_time_column_unique'=>false,
            'op_column'=>'',
            'opv_insert'=>'',
            'opv_update'=>'',
            'opv_update_key'=>'',
            'opv_delete'=>'',
            'audit'=>false,
            'audit_prefix'=>'',
            'audit_appendix'=>'',
            'identity_column'=>'',
            'load_date_column'=>'',
            'load_time_column'=>'',
            'load_date_time_column'=>false,
            'keep_deleted_row'=>false,
            'date_column'=>'',
            'time_column'=>'',
            'date_time_column'=>'',),
            'incre_max_conn'=>1,
            'redo_read_thread'=>1,
            'trackmode'=>'',),
            'compress_encrypt_settings'=>array(
            'compress_switch'=>1,
            'compress_algo'=>'',
            'encrypt'=>1,
            'compress'=>1,
            'compress_level'=>1,
            'encrypt_switch'=>1,),
            'column_map'=>array(
            '0'=>array(
            'user'=>'',
            'target'=>'',
            'column'=>'',),),
            'database_map'=>array(
            '0'=>array(
            'src_database'=>'',
            'src_schema'=>'',
            'tgt_database'=>'',
            'inst_topic'=>'',),),
            'policy_settings'=>array(
            'policy_type'=>'',
            'one_time'=>'',
            'policies'=>'',),
            'table_map'=>array(
            '0'=>array(
            'key'=>'SmithThomasYoung',
            'split_dst_table'=>array(
            '0'=>array(
            'condition'=>'',
            'dst_table'=>'',
            'dst_user'=>'',),),
            'dst_table'=>'a',
            'dst_user'=>'b',
            'src_table'=>'c',
            'src_user'=>'d',
            'column'=>array(
            '0'=>array(
            'dst_column'=>'e',
            'src_column'=>'f',
            'src_field_type'=>'INT',
            'dst_field_type'=>'VARCHAR(60)',
            'pk'=>false,
            'flag'=>1,),),
            'filter'=>1,),),
            'full_sync_settings'=>array(
            'dump_split'=>array(
            'enable'=>false,
            'least_rows'=>1,
            'least_bytes'=>1,
            'expire_seconds'=>1,),
            'isCreateTable'=>false,
            'end_target_db'=>'',
            'end_target_type'=>'',
            'end_db_map'=>array(
            '0'=>array(
            'src_db'=>'',
            'tar_db'=>'',),),
            'end_tab_map'=>array(
            '0'=>array(
            'src_db'=>'',
            'src_table'=>'',
            'dst_db'=>'',
            'dst_table'=>'',
            'column'=>array(
            '0'=>array(
            'src_column'=>'',
            'dst_column'=>'',),),),),
            'full_max_conn'=>1,
            'dump_thd'=>1,
            'clean_user_before_dump'=>0,
            'existing_table'=>'drop_to_recycle',
            'full_sync'=>0,
            'start_scn'=>'',
            'load_thd'=>1,
            'ld_dir_opt'=>0,
            'try_split_part_table'=>0,
            'concurrent_table'=>array(
            '0'=>array(
            'user'=>'',
            'table'=>'',),),
            'full_sync_custom_cfg'=>array(
            '0'=>array(
            'key'=>'',
            'value'=>'',),),),
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
            'inc_sync_ddl_filter'=>array(
            'inc_sync_ddl_data'=>array(
            '0'=>'INDEX',
            '1'=>'VIEW',
            '2'=>'FUNCTION',),),
            'other_settings'=>array(
            'dly_constraint_load'=>0,
            'ddl_cv'=>0,
            'keep_bad_act'=>0,
            'ignore_foreign_key'=>0,
            'jointing'=>array(
            'table'=>'',
            'op'=>'append',
            'content'=>array(),),
            'dyn_thread'=>1,
            'convert_urp_of_key'=>0,
            'all_custom_config'=>array(
            '0'=>array(
            'key'=>'',
            'value'=>'',),),
            'table_delay_load'=>array(
            '0'=>array(
            'user'=>'',
            'table'=>'',),),
            'is_target'=>1,
            'lsn_keep_time'=>1,
            'lsn_keep_interval'=>1,
            'master_allow'=>1,
            'memory_settings'=>array(
            'load_full_max_memory'=>1,
            'dump_max_memory'=>1,
            'track_max_memory'=>1,
            'load_max_memory'=>1,
            'dump_unit'=>1,
            'track_unit'=>1,
            'load_unit'=>1,),
            'virtual_key_settings'=>array(
            'auto_switch'=>'',
            'manual_switch'=>'',
            'auto_col_name'=>'',
            'auto_separate'=>'',
            'manual_columns'=>array(
            '0'=>array(
            'user'=>'',
            'tab'=>'',
            'col'=>'',
            'composite_col'=>'',
            'separator'=>'',),),),
            'tgt_extern_table'=>'',
            'bw_limit'=>'',
            'create_pk_col'=>'',
            'create_pk_col_name'=>'',
            'byte_extend'=>1,
            'char_extend'=>1,
            'table_attr_cap_switch'=>1,
            'table_attr_cap'=>'',
            'keep_usr_pwd'=>1,
            'timezone_convert_switch'=>1,
            'src_timezone_switch'=>1,
            'etl_table'=>array(
            '0'=>array(
            'oprType'=>'',
            'table'=>'',
            'user'=>'',
            'process'=>'',
            'addInfo'=>'',),),
            'src_timezone'=>'',
            'mask_sync_switch'=>'',
            'filter_table_settings'=>array(
            'exclude_table'=>array(
            '0'=>array(
            'schema'=>'',
            'user'=>'',
            'table'=>'',),),
            'exclude_tab_with_column'=>'',
            'exclude_tab_with_column_switch'=>1,),
            'db_map_uuid'=>'',
            'table_space_map'=>array(
            'tgt_table_space'=>'',
            'table_mapping_way'=>'',
            'table_path_map'=>array(),
            'table_space_name'=>array(),),
            'encrypt_column_switch'=>1,
            'encrypt_column_method'=>1,
            'encrypt_columns'=>array(
            '0'=>array(
            'user'=>'',
            'table'=>'',
            'column'=>'',),),
            'enable_truncate_frequence'=>1,
            'initrans'=>1,
            'keep_dyn_data'=>0,
            'table_change_info'=>1,),
            'map_type_list'=>array(),
            'src_db_auth_uuid'=>'',
            'tgt_db_auth_uuid'=>'',
            'src_db_uuid'=>' 6C4AEF37-6496-6DCD-E085-DD640001E4EC',
            'tgt_db_uuid'=>' 1C5F3C4B-7333-9518-7349-9712BC9ED664',
            'user_map'=>array(
            'src_user'=>'user1',
            'tgt_user'=>'user2',),
            'sync_type'=>array(),
            'full_map_switch'=>1,
        );
        
        
        $res = $migrateRule -> createMigrateRule($arr);
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