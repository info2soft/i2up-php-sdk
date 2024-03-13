<?php
namespace i2up\Test\v20240228\active;

use i2up\active\v20240228\Tidb;
use i2up\common\Auth;
                
class TidbTest extends \PHPUnit_Framework_TestCase
 {
    private $tidb;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> tidb = new Tidb(new Auth());
    }

    public function testCreateTidbRule()
    {
        $tidb = $this -> tidb;
        $arr = array(
            'db_map'=>array(
            '0'=>array(
            'dst_table'=>'',
            'src_table'=>'',),),
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
            'dst_db'=>'222',),),
            'full_sync'=>0,
            'incre_sync'=>1,
            'model_type'=>'1:0',
            'config'=>array(
            'src_connect_user'=>'',
            'dst_connect_user'=>'',
            'binary_code'=>'hex',
            'table_change_info'=>1,
            'etl_settings'=>array(
            'etl_table'=>array(
            '0'=>array(
            'oprType'=>'IRP',
            'table'=>'',
            'user'=>'',
            'process'=>'SKIP',
            'addInfo'=>'',),),),
            'bw_settings'=>array(
            'bw_limit'=>'"12*00:00-13:00*40M,3*00:00-13:00*40M"',),
            'full_sync_settings'=>array(
            'clean_user_before_dum'=>0,
            'concurrent_table'=>array(),
            'dump_thd'=>1,
            'load_thd'=>1,
            'existing_table'=>'drop_to_recycle',
            'try_split_part_table'=>1,),
            'inc_sync_ddl_filter'=>array(
            'inc_sync_ddl_data'=>array(
            '0'=>'INDEX',
            '1'=>'VIEW',
            '2'=>'FUNCTION',),),
            'dml_track'=>array(
            'delcol'=>'',
            'drp'=>1,
            'enable'=>1,
            'tmcol'=>'',
            'urp'=>1,),
            'jointing'=>array(
            'op'=>'',
            'table'=>'',
            'content'=>'',),),
            'save_json_text'=>false,
        );
        $res = $tidb -> createTidbRule($arr);
        $this->do_assert($res);
    }

    public function testModifyTidbRule()
    {
        $tidb = $this -> tidb;
        $arr = array(
            'config'=>array(
            'kafka_time_out'=>'',
            'part_load_balance'=>'',),
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
        );
        $res = $tidb -> modifyTidbRule($arr);
        $this->do_assert($res);
    }

    public function testDeleteTidbRule()
    {
        $tidb = $this -> tidb;
        $arr = array(
            'force'=>true,
            'mysql_uuids'=>array(),
        );
        $res = $tidb -> deleteTidbRule($arr);
        $this->do_assert($res);
    }

    public function testDescribeTidbRule()
    {
        $tidb = $this -> tidb;
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111',
            'mysql_uuid'=>'',
        );
        $res = $tidb -> describeTidbRule($arr);
        $this->do_assert($res);
    }

    public function testResumeTidbRule()
    {
        $tidb = $this -> tidb;
        $arr = array(
            'operate'=>'restart',
            'mysql_uuid'=>'8EeB9EA4-C4Fb-b317-aAC5-C4Cdcc75DEdA',
            'scn'=>'',
        );
        $res = $tidb -> resumeTidbRule($arr);
        $this->do_assert($res);
    }

    public function testListTidbRules()
    {
        $tidb = $this -> tidb;
        $arr = array(
            'where_args'=>array(
            'mysql_uuid'=>'D6feeb62-eE4C-dCD3-6192-82d36DB833D8',),
            'page'=>1,
            'limit'=>10,
            'search_field'=>'',
            'search_value'=>'',
        );
        $res = $tidb -> listTidbRules($arr);
        $this->do_assert($res);
    }

    private function do_assert($res)
    {
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}