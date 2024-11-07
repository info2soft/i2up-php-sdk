<?php
namespace i2up\Test\v20240819\active;

use i2up\active\v20240819\Mysql;
use i2up\common\Auth;
                
class MysqlTest extends \PHPUnit_Framework_TestCase
 {
    private $mysql;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> mysql = new Mysql(new Auth());
    }

    public function testCreateMysqlRule()
    {
        $mysql = $this -> mysql;
        $arr = array(
            'mysql_name'=>true,
            'src_db_uuid'=>' 1B1153F6-DAD9-BC39-888A-A743FCC208E5',
            'tgt_db_uuid'=>' D42BF707-C971-EEA9-521F-BB0F3F7A92FC',
            'tgt_type'=>'oracle',
            'start_rule_now'=>0,
            'dbmap_topic'=>'',
            'map_type'=>'table',
            'tab_map'=>array(
            '0'=>array(
            'src_table'=>'src_table',
            'dst_table'=>'dst_table',
            'src_db'=>'111',
            'dst_db'=>'222',
            'topic'=>'',),),
            'full_sync'=>0,
            'incre_sync'=>1,
            'model_type'=>'1:0',
            'full_sync_mode'=>'auto',
            'db_set'=>array(
            'binlog_format'=>'row',
            'binlog_row_image'=>'full',
            'default_storage_engine'=>'innoDB',
            'sync_binlog'=>'1',
            'innodb_flush_log'=>'2',
            'innodb_flush_method'=>'O_DIRECT',
            'max_allowed_packet'=>'52',
            'open_files_limit'=>'65535',
            'server_id'=>'123456',
            'expire_logs_days'=>'7',
            'nat_mode'=>0,
            'ip'=>'',),
            'full_sync_set'=>array(
            'support_ddl'=>1,
            'change_tf_path'=>'',
            'tf_file_save_time'=>7,
            'nat_mode'=>0,
            'foreign_ip'=>'',
            'extraction'=>0,
            'start_lsn'=>1,),
            'primary_db_one'=>'',
            'primary_map_type_one'=>'',
            'primary_map_one'=>'',
            'primary_db_two'=>'',
            'primary_map_type_two'=>'',
            'primary_map_two'=>'',
            'db_map'=>array(
            '0'=>array(
            'dst_table'=>'',
            'src_table'=>'',),),
            'modify'=>false,
            'start_src_db_set'=>0,
            'dst_db_set'=>array(
            'binlog_format'=>'',
            'binlog_row_image'=>'',
            'default_storage_engine'=>'',
            'sync_binlog'=>'',
            'innodb_flush_log'=>'',
            'innodb_flush_method'=>'',
            'max_allowed_packet'=>'',
            'open_files_limit'=>'',
            'server_id'=>'',
            'expire_logs_days'=>'',
            'nat_mode'=>1,
            'ip'=>'',),
            'dst_full_sync_set'=>array(
            'support_ddl'=>1,
            'change_tf_path'=>'',
            'tf_file_save_time'=>'',
            'nat_mode'=>'',
            'foreign_ip'=>'',
            'extraction'=>0,
            'start_lsn'=>1,),
            'start_dst_db_set'=>0,
            'config'=>array(
            'dml_track'=>array(
            'delcol'=>'',
            'drp'=>1,
            'enable'=>1,
            'tmcol'=>'',
            'urp'=>1,),
            'src_connect_user'=>'',
            'dst_connect_user'=>'',
            'bw_settings'=>array(
            'bw_limit'=>'"12*00:00-13:00*40M,3*00:00-13:00*40M"',),
            'full_sync_settings'=>array(
            'clean_user_before_dum'=>0,
            'concurrent_table'=>array(),
            'dump_thd'=>1,
            'load_thd'=>1,
            'existing_table'=>'drop_to_recycle',
            'try_split_part_table'=>1,
            'table_msg_uuid'=>'',
            'end_target_type'=>'',
            'end_target_db'=>'',
            'end_db_map'=>'',
            'end_tab_map'=>'',
            'full_sync_custom_cfg'=>array(
            '0'=>array(
            'key'=>'',
            'value'=>'',),),
            'start_lsn'=>'',
            'isCreateTable'=>'',),
            'etl_settings'=>array(
            'etl_table'=>array(
            '0'=>array(
            'deal_Type'=>'IRP',
            'table'=>'',
            'user'=>'',
            'obj_fix_type'=>'SKIP',
            'field_condition'=>'',),),
            'is_target'=>1,),
            'inc_sync_ddl_filter'=>array(
            'inc_sync_ddl_data'=>'[
CREATE TABLE
]',),
            'binary_code'=>'hex',
            'table_change_info'=>1,
            'message_format'=>'',
            'json_format'=>'',
            'run_time'=>'"12*00:00-13:00*40M,3*00:00-13:00*40M"',
            'jointing'=>array(
            'table'=>'',
            'op'=>'append',
            'content'=>array(),),),
            'part_load_balance'=>'',
            'kafka_time_out'=>'',
            'save_json_text'=>'',
            'exclude_dbs'=>array(),
            'exclude_dbs_switch'=>1,
            'other_settings'=>array(
            'dyn_thread'=>1,
            'merge_track'=>1,
            'keep_incre_time'=>1,
            'target_add_columns'=>array(
            '0'=>array(
            'schema'=>'',
            'table'=>'',
            'column'=>'',
            'function'=>'',
            'dataType'=>'',
            'opType'=>'',),),
            'incre_full_sync_custom_cfg'=>array(
            '0'=>array(
            'key'=>'',
            'value'=>'',),),
            'filter_table_settings'=>array(
            'exclude_tab_with_column'=>array(),
            'exclude_tab_with_column_switch'=>'',
            'filter_tables'=>array(
            '0'=>array(
            'db'=>'',
            'table'=>'',),),),
            'enable_truncate_frequence'=>1,
            'lsn_keep_time'=>0,
            'lsn_keep_interval'=>0,
            'master_allow'=>0,),
            'full_map_switch'=>1,
            'map_type_list'=>array(),
            'column_map'=>array(
            '0'=>array(
            'user'=>'',
            'target'=>'',
            'column'=>'',),),
            'encrypt_column_switch'=>1,
            'encrypt_column_method'=>1,
            'encrypt_column_key'=>'',
            'encrypt_columns'=>array(
            '0'=>array(
            'user'=>'',
            'table'=>'',
            'column'=>'',),),
        );
        
        
        $res = $mysql -> createMysqlRule($arr);
        $this->do_assert($res);
    }

    public function testListStreamRules()
    {
        $mysql = $this -> mysql;
        $arr = array(
            'page'=>1,
            'limit'=>10,
            'search_field'=>'',
            'search_value'=>'',
            'where_args'=>array(
            'mysql_uuid'=>'Ad5cBD51-752e-a4Ba-3CAD-7faAd5FaCb48',
            'mysql_name'=>'',
            'status'=>'',
            'src_db_name'=>'',
            'tgt_db_name'=>'',
            'db_ip'=>'',
            'node_ip'=>'',
            'username'=>'',),
        );
        
        
        $res = $mysql -> listStreamRules($arr);
        $this->do_assert($res);
    }

    public function testModifyMysqlRule()
    {
        $mysql = $this -> mysql;
        $arr = array(
            'mysql_name'=>'mysql',
            'src_db_uuid'=>' 1B1153F6-DAD9-BC39-888A-A743FCC208E5',
            'tgt_db_uuid'=>' D42BF707-C971-EEA9-521F-BB0F3F7A92FC',
            'tgt_type'=>'kafka',
            'start_rule_now'=>0,
            'node_uuid'=>' 6B1153F6-DAD9-BC39-888A-A743FCC208E6',
            'dbmap_topic'=>'',
            'map_type'=>'table',
            'tab_map'=>array(
            '0'=>array(
            'src_table'=>'src_table',
            'topic'=>'topic',
            'dst_table'=>'',
            'src_db'=>'',
            'dst_db'=>'',),),
            'full_sync'=>0,
            'incre_sync'=>1,
            'model_type'=>'1:0',
            'full_sync_mode'=>'auto',
            'db_set'=>array(
            'db_node'=>'1B1153F6-DAD9-BC39-888A-A743FCC208E5',
            'binlog_format'=>'row',
            'binlog_row_image'=>'full',
            'default_storage_engine'=>'innoDB',
            'sync_binlog'=>'1',
            'innodb_flush_log'=>'2',
            'innodb_flush_method'=>'O_DIRECT',
            'max_allowed_packet'=>'52',
            'open_files_limit'=>'65535',
            'server_id'=>'123456',
            'expire_logs_days'=>'7',
            'nat_mode'=>0,
            'ip'=>'',),
            'full_sync_set'=>array(
            'support_ddl'=>1,
            'node'=>' 6B1153F6-DAD9-BC39-888A-A743FCC208E6',
            'change_tf_path'=>'',
            'tf_file_save_time'=>7,
            'nat_mode'=>0,
            'foreign_ip'=>'',),
            'primary_node_one'=>'',
            'primary_node_two'=>'',
            'primary_db_one'=>'',
            'primary_map_type_one'=>'',
            'primary_map_one'=>array(),
            'primary_db_two'=>'',
            'primary_map_type_two'=>'',
            'primary_map_two'=>array(),
            'db_map'=>array(
            '0'=>array(
            'src_db'=>'src_db',
            'dst_db'=>'dst_db',),),
            'mysql_uuid'=>'5349E2CF-7DBO-OAF2-13CB-BB7DFD8A9D86',
            'config'=>array(
            'dml_track'=>array(
            'urp'=>'',
            'drp'=>'',
            'tmcol'=>'',
            'delcol'=>'',),
            'bw_settings'=>array(),
            'full_sync_settings'=>array(),
            'etl_settings'=>array(),
            'inc_sync_ddl_filter'=>array(),
            'table_change_info'=>'',
            'message_format'=>'',
            'json_format'=>'',
            'binary_code'=>'',
            'run_time'=>'12*00:00-13:00*40M,3*00:00-13:00*40M',),
            'part_load_balanceby_table'=>'',
            'kafka_time_out'=>'',
            'save_json_text'=>false,
        );
        
        
        $res = $mysql -> modifyMysqlRule($arr);
        $this->do_assert($res);
    }

    public function testCreateBatchMysqlRule()
    {
        $mysql = $this -> mysql;
        $arr = array(
            'db_map'=>array(
            '0'=>array(
            'dst_table'=>'',
            'src_table'=>'',),),
            'other_settings'=>array(
            'dyn_thread'=>1,
            'merge_track'=>1,
            'keep_incre_time'=>1,),
            'part_load_balance'=>'',
            'kafka_time_out'=>'',
            'full_sync_mode'=>'auto',
            'db_set'=>array(
            'binlog_format'=>'row',
            'binlog_row_image'=>'full',
            'default_storage_engine'=>'innoDB',
            'sync_binlog'=>'1',
            'innodb_flush_log'=>'2',
            'innodb_flush_method'=>'O_DIRECT',
            'max_allowed_packet'=>'52',
            'open_files_limit'=>'65535',
            'server_id'=>'123456',
            'expire_logs_days'=>'7',
            'nat_mode'=>0,
            'ip'=>'',),
            'full_sync_set'=>array(
            'start_lsn'=>1,
            'support_ddl'=>1,
            'change_tf_path'=>'',
            'tf_file_save_time'=>7,
            'nat_mode'=>0,
            'foreign_ip'=>'',
            'extraction'=>0,),
            'modify'=>false,
            'primary_db_one'=>'',
            'primary_map_type_one'=>'',
            'primary_map_one'=>'',
            'primary_db_two'=>'',
            'primary_map_type_two'=>'',
            'start_src_db_set'=>0,
            'primary_map_two'=>'',
            'dst_db_set'=>array(
            'binlog_format'=>'',
            'binlog_row_image'=>'',
            'default_storage_engine'=>'',
            'sync_binlog'=>'',
            'innodb_flush_log'=>'',
            'innodb_flush_method'=>'',
            'max_allowed_packet'=>'',
            'open_files_limit'=>'',
            'server_id'=>'',
            'expire_logs_days'=>'',
            'nat_mode'=>1,
            'ip'=>'',),
            'dst_full_sync_set'=>array(
            'start_lsn'=>1,
            'support_ddl'=>1,
            'change_tf_path'=>'',
            'tf_file_save_time'=>'',
            'nat_mode'=>'',
            'foreign_ip'=>'',
            'extraction'=>0,),
            'start_dst_db_set'=>0,
            'prefix'=>true,
            'src_db_uuid'=>' 1B1153F6-DAD9-BC39-888A-A743FCC208E5',
            'tgt_db_uuid'=>' D42BF707-C971-EEA9-521F-BB0F3F7A92FC',
            'tgt_type'=>'oracle',
            'save_json_text'=>'',
            'start_rule_now'=>0,
            'exclude_dbs'=>array(),
            'exclude_dbs_switch'=>1,
            'dbmap_topic'=>'',
            'map_type'=>'table',
            'tab_map'=>array(
            '0'=>array(
            'topic'=>'',
            'src_table'=>'src_table',
            'dst_table'=>'dst_table',
            'src_db'=>'111',
            'dst_db'=>'222',),),
            'full_sync'=>0,
            'incre_sync'=>1,
            'model_type'=>'1:0',
            'config'=>array(
            'src_connect_user'=>'',
            'dst_connect_user'=>'',
            'jointing'=>array(
            'table'=>'',
            'op'=>'append',
            'content'=>array(),),
            'run_time'=>'"12*00:00-13:00*40M,3*00:00-13:00*40M"',
            'binary_code'=>'hex',
            'table_change_info'=>1,
            'etl_settings'=>array(
            'etl_table'=>array(
            '0'=>array(
            'deal_Type'=>'IRP',
            'table'=>'',
            'user'=>'',
            'obj_fix_type'=>'SKIP',
            'field_condition'=>'',),),),
            'bw_settings'=>array(
            'bw_limit'=>'"12*00:00-13:00*40M,3*00:00-13:00*40M"',),
            'full_sync_settings'=>array(
            'table_msg_uuid'=>'',
            'end_target_type'=>'',
            'end_target_db'=>'',
            'end_db_map'=>'',
            'end_tab_map'=>'',
            'full_sync_custom_cfg'=>array(
            '0'=>array(
            'key'=>'',
            'value'=>'',),),
            'start_lsn'=>'',
            'clean_user_before_dum'=>0,
            'concurrent_table'=>array(),
            'dump_thd'=>1,
            'load_thd'=>1,
            'existing_table'=>'drop_to_recycle',
            'try_split_part_table'=>1,),
            'inc_sync_ddl_filter'=>array(
            'inc_sync_ddl_data'=>'[
CREATE TABLE
]',),
            'dml_track'=>array(
            'delcol'=>'',
            'drp'=>1,
            'enable'=>1,
            'tmcol'=>'',
            'urp'=>1,),
            'message_format'=>'',
            'json_format'=>'',),
            'db_list'=>array(
            '0'=>array(
            'src_db_uuid'=>'',
            'tgt_db_uuid'=>'',
            'src_db_auth_uuid'=>'',
            'tgt_db_auth_uuid'=>'',),),
        );
        
        
        $res = $mysql -> createBatchMysqlRule($arr);
        $this->do_assert($res);
    }

    public function testBatchModifyMysqlRule()
    {
        $mysql = $this -> mysql;
        $arr = array(
            'config'=>array(
            'run_time'=>'12*00:00-13:00*40M,3*00:00-13:00*40M',
            'dml_track'=>array(
            'urp'=>'',
            'drp'=>'',
            'tmcol'=>'',
            'delcol'=>'',),
            'bw_settings'=>array(),
            'full_sync_settings'=>array(),
            'etl_settings'=>array(),
            'inc_sync_ddl_filter'=>array(),
            'table_change_info'=>'',
            'message_format'=>'',
            'json_format'=>'',
            'binary_code'=>'',),
            'part_load_balanceby_table'=>'',
            'kafka_time_out'=>'',
            'save_json_text'=>false,
            'mysql_rule_uuids'=>'mysql',
            'start_rule_now'=>0,
            'node_uuid'=>' 6B1153F6-DAD9-BC39-888A-A743FCC208E6',
            'dbmap_topic'=>'',
            'map_type'=>'table',
            'tab_map'=>array(
            '0'=>array(
            'dst_table'=>'',
            'src_db'=>'',
            'dst_db'=>'',
            'src_table'=>'src_table',
            'topic'=>'topic',),),
            'full_sync'=>0,
            'incre_sync'=>1,
            'model_type'=>'1:0',
            'full_sync_mode'=>'auto',
            'db_set'=>array(
            'db_node'=>'1B1153F6-DAD9-BC39-888A-A743FCC208E5',
            'binlog_format'=>'row',
            'binlog_row_image'=>'full',
            'default_storage_engine'=>'innoDB',
            'sync_binlog'=>'1',
            'innodb_flush_log'=>'2',
            'innodb_flush_method'=>'O_DIRECT',
            'max_allowed_packet'=>'52',
            'open_files_limit'=>'65535',
            'server_id'=>'123456',
            'expire_logs_days'=>'7',
            'nat_mode'=>0,
            'ip'=>'',),
            'full_sync_set'=>array(
            'support_ddl'=>1,
            'node'=>' 6B1153F6-DAD9-BC39-888A-A743FCC208E6',
            'change_tf_path'=>'',
            'tf_file_save_time'=>7,
            'nat_mode'=>0,
            'foreign_ip'=>'',),
            'primary_node_one'=>'',
            'primary_node_two'=>'',
            'primary_db_one'=>'',
            'primary_map_type_one'=>'',
            'primary_map_one'=>array(),
            'primary_db_two'=>'',
            'primary_map_type_two'=>'',
            'primary_map_two'=>array(),
            'db_map'=>array(
            '0'=>array(
            'src_db'=>'src_db',
            'dst_db'=>'dst_db',),),
            'mysql_uuid'=>'5349E2CF-7DBO-OAF2-13CB-BB7DFD8A9D86',
            'batch_basic_settings'=>'',
            'batch_full_sync_settings'=>'',
            'batch_incre_sync_settings'=>'',
            'batch_advanced_settings'=>'',
            'batch_full_sync_obj_filter'=>'',
            'batch_encrypt_compress'=>'',
        );
        
        
        $res = $mysql -> batchModifyMysqlRule($arr);
        $this->do_assert($res);
    }

    public function testDeleteMysqlRule()
    {
        $mysql = $this -> mysql;
        $arr = array(
            'mysql_uuids'=>array(),
            'force'=>true,
        );
        
        
        $res = $mysql -> deleteMysqlRule($arr);
        $this->do_assert($res);
    }

    public function testDescribeMysqlRule()
    {
        $mysql = $this -> mysql;
        $arr = array(
            'mysql_uuid'=>'',
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $mysql -> describeMysqlRule($arr);
        $this->do_assert($res);
    }

    public function testResumeMysqlRule()
    {
        $mysql = $this -> mysql;
        $arr = array(
            'operate'=>'restart',
            'mysql_uuid'=>'',
            'scn'=>'',
            'all'=>1,
        );
        
        
        $res = $mysql -> resumeMysqlRule($arr);
        $this->do_assert($res);
    }

    public function testStopMysqlRule()
    {
        $mysql = $this -> mysql;
        $arr = array(
            'operate'=>'restart',
            'mysql_uuid'=>'',
            'scn'=>'',
            'all'=>1,
        );
        
        
        $res = $mysql -> stopMysqlRule($arr);
        $this->do_assert($res);
    }

    public function testRestartMysqlRule()
    {
        $mysql = $this -> mysql;
        $arr = array(
            'operate'=>'restart',
            'mysql_uuid'=>'',
            'scn'=>'',
            'all'=>1,
        );
        
        
        $res = $mysql -> restartMysqlRule($arr);
        $this->do_assert($res);
    }

    public function testStartParsingMysqlRule()
    {
        $mysql = $this -> mysql;
        $arr = array(
            'operate'=>'restart',
            'mysql_uuid'=>'',
            'scn'=>'',
            'all'=>1,
        );
        
        
        $res = $mysql -> startParsingMysqlRule($arr);
        $this->do_assert($res);
    }

    public function testStopParsingMysqlRule()
    {
        $mysql = $this -> mysql;
        $arr = array(
            'operate'=>'restart',
            'mysql_uuid'=>'',
            'scn'=>'',
            'all'=>1,
        );
        
        
        $res = $mysql -> stopParsingMysqlRule($arr);
        $this->do_assert($res);
    }

    public function testResetParsingMysqlRule()
    {
        $mysql = $this -> mysql;
        $arr = array(
            'operate'=>'restart',
            'mysql_uuid'=>'',
            'scn'=>'',
            'all'=>1,
        );
        
        
        $res = $mysql -> resetParsingMysqlRule($arr);
        $this->do_assert($res);
    }

    public function testStartLoadMysqlRule()
    {
        $mysql = $this -> mysql;
        $arr = array(
            'operate'=>'restart',
            'mysql_uuid'=>'',
            'scn'=>'',
            'all'=>1,
        );
        
        
        $res = $mysql -> startLoadMysqlRule($arr);
        $this->do_assert($res);
    }

    public function testStopLoadMysqlRule()
    {
        $mysql = $this -> mysql;
        $arr = array(
            'operate'=>'restart',
            'mysql_uuid'=>'',
            'scn'=>'',
            'all'=>1,
        );
        
        
        $res = $mysql -> stopLoadMysqlRule($arr);
        $this->do_assert($res);
    }

    public function testResetLoadMysqlRule()
    {
        $mysql = $this -> mysql;
        $arr = array(
            'operate'=>'restart',
            'mysql_uuid'=>'',
            'scn'=>'',
            'all'=>1,
        );
        
        
        $res = $mysql -> resetLoadMysqlRule($arr);
        $this->do_assert($res);
    }

    public function testDuplicateMysqlRule()
    {
        $mysql = $this -> mysql;
        $arr = array(
            'operate'=>'restart',
            'mysql_uuid'=>'',
            'scn'=>'',
            'all'=>1,
        );
        
        
        $res = $mysql -> duplicateMysqlRule($arr);
        $this->do_assert($res);
    }

    public function testListStreamStatus()
    {
        $mysql = $this -> mysql;
        $arr = array(
            'uuids'=>array(),
        );
        
        
        $res = $mysql -> listStreamStatus($arr);
        $this->do_assert($res);
    }

    public function testCreateStreamTableFix()
    {
        $mysql = $this -> mysql;
        $arr = array(
            'rule_uuid'=>'167a78bF-Cf8f-3C2c-17cd-24FAaE0746dD',
            'tab'=>array(
            '0'=>array(
            'user'=>'',
            'table'=>'',),),
            'fix_relation'=>0,
        );
        
        
        $res = $mysql -> createStreamTableFix($arr);
        $this->do_assert($res);
    }

    public function testGetStreamRuleLsn()
    {
        $mysql = $this -> mysql;
        $arr = array(
            'mysql_uuid'=>'',
            'date'=>'1990-10-01 12:30:17',
            'offset'=>1,
            'limit'=>1,
        );
        
        
        $res = $mysql -> getStreamRuleLsn($arr);
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