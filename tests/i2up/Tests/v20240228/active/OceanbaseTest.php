<?php
namespace i2up\Test\v20240228\active;

use i2up\active\v20240228\Oceanbase;
use i2up\common\Auth;
                
class OceanbaseTest extends \PHPUnit_Framework_TestCase
 {
    private $oceanbase;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> oceanbase = new Oceanbase(new Auth());
    }

    public function testListOceanRule()
    {
        $oceanbase = $this -> oceanbase;
        $arr = array('11111111-1111-1111-1111-111111111111');
        $res = $oceanbase -> listOceanRule($arr);
        $this->do_assert($res);
    }

    public function testCreateOceanRule()
    {
        $oceanbase = $this -> oceanbase;
        $arr = array(
            'start_rule_now'=>1,
            'rule_name'=>'12321',
            'src_db_uuid'=>'2C4C2E77-774D-C604-9A32-5038D8E590C4',
            'tgt_type'=>'db2',
            'tgt_db_uuid'=>'953C47CB-3F6C-E72F-DF1C-31522468A566',
            'map_type'=>'db',
            'db_user_map'=>'',
            'table_map'=>'',
            'dbmap_topic'=>'',
            'row_map_mode'=>'rowid',
            'sync_mode'=>1,
            'start_scn'=>'',
            'kafka_time_out'=>'120000',
            'part_load_balance'=>'by_table',
            'kafka_message_encoding'=>'UTF-8',
            'kafka'=>array(
            'binary_code'=>'hex',),
            'dml_track'=>array(
            'enable'=>0,
            'urp'=>0,
            'drp'=>0,
            'tmcol'=>'',
            'delcol'=>'',),
            'storage_settings'=>array(
            'src_max_mem'=>'512',
            'src_max_disk'=>'5000',
            'txn_max_mem'=>'10000',
            'tf_max_size'=>'100',
            'max_ld_mem'=>'512',
            'tgt_extern_table'=>'',),
            'other_settings'=>array(
            'keep_dyn_data'=>0,
            'dyn_thread'=>1,
            'dly_constraint_load'=>0,
            'zip_level'=>0,
            'ddl_cv'=>0,
            'keep_bad_act'=>0,
            'fill_lob_column'=>0,
            'keep_seq_sync'=>0,
            'keep_usr_pwd'=>0,
            'convert_urp_of_key'=>0,
            'ignore_foreign_key'=>0,
            'gen_txn'=>0,
            'run_time'=>'"12*00:00-13:00*40M,3*00:00-13:00*40M"',
            'enable_truncate_frequence'=>'',),
            'error_handling'=>array(
            'irp'=>'irpafterdel',
            'urp'=>'toirp',
            'drp'=>'ignore',
            'load_err_set'=>'continue',
            'report_failed_dml'=>0,),
            'bw_settings'=>array(
            'bw_limit'=>'',),
            'table_space_map'=>array(
            'tgt_table_space'=>'',
            'table_mapping_way'=>'ptop',
            'table_path_map'=>array(),
            'table_space_name'=>array(),),
            'full_sync_settings'=>array(
            'load_mode'=>'direct',
            'ld_dir_opt'=>0,
            'dump_thd'=>1,
            'load_thd'=>1,
            'try_split_part_table'=>1,
            'clean_user_before_dump'=>0,
            'existing_table'=>'drop_to_recycle',
            'concurrent_table'=>'[]',
            'sync_mode'=>0,
            'start_scn'=>'',
            'full_sync_custom_cfg'=>array(
            '0'=>array(
            'key'=>'',
            'value'=>'',),),),
            'full_sync_obj_filter'=>array(
            'full_sync_obj_data'=>array(),),
            'inc_sync_ddl_filter'=>array(
            'inc_sync_ddl_data'=>array(),),
            'filter_table_settings'=>array(
            'exclude_table'=>'[]',),
            'etl_settings'=>array(
            'etl_table'=>array(),),
        );
        $res = $oceanbase -> createOceanRule($arr);
        $this->do_assert($res);
    }

    public function testCreateBatchOceanRule()
    {
        $oceanbase = $this -> oceanbase;
        $arr = array(
            'start_rule_now'=>1,
            'rule_name'=>'12321',
            'db_list'=>array(
            '0'=>array(
            'src_db_uuid'=>'2C4C2E77-774D-C604-9A32-5038D8E590C4',
            'tgt_db_uuid'=>'',
            'src_db_auth_uuid'=>'',
            'tgt_db_auth_uuid'=>'',),),
            'map_type'=>'db',
            'db_user_map'=>'',
            'table_map'=>'',
            'dbmap_topic'=>'',
            'row_map_mode'=>'rowid',
            'sync_mode'=>1,
            'start_scn'=>'',
            'kafka_time_out'=>'120000',
            'part_load_balance'=>'by_table',
            'kafka_message_encoding'=>'UTF-8',
            'kafka'=>array(
            'binary_code'=>'hex',),
            'dml_track'=>array(
            'enable'=>0,
            'urp'=>0,
            'drp'=>0,
            'tmcol'=>'',
            'delcol'=>'',),
            'storage_settings'=>array(
            'src_max_mem'=>'512',
            'src_max_disk'=>'5000',
            'txn_max_mem'=>'10000',
            'tf_max_size'=>'100',
            'max_ld_mem'=>'512',
            'tgt_extern_table'=>'',),
            'other_settings'=>array(
            'keep_dyn_data'=>0,
            'dyn_thread'=>1,
            'dly_constraint_load'=>0,
            'zip_level'=>0,
            'ddl_cv'=>0,
            'keep_bad_act'=>0,
            'fill_lob_column'=>0,
            'keep_seq_sync'=>0,
            'keep_usr_pwd'=>0,
            'convert_urp_of_key'=>0,
            'ignore_foreign_key'=>0,
            'gen_txn'=>0,
            'run_time'=>'"12*00:00-13:00*40M,3*00:00-13:00*40M"',
            'enable_truncate_frequence'=>0,),
            'error_handling'=>array(
            'irp'=>'irpafterdel',
            'urp'=>'toirp',
            'drp'=>'ignore',
            'load_err_set'=>'continue',
            'report_failed_dml'=>0,),
            'bw_settings'=>array(
            'bw_limit'=>'',),
            'table_space_map'=>array(
            'tgt_table_space'=>'',
            'table_mapping_way'=>'ptop',
            'table_path_map'=>array(),
            'table_space_name'=>array(),),
            'full_sync_settings'=>array(
            'load_mode'=>'direct',
            'ld_dir_opt'=>0,
            'dump_thd'=>1,
            'load_thd'=>1,
            'try_split_part_table'=>1,
            'clean_user_before_dump'=>0,
            'existing_table'=>'drop_to_recycle',
            'concurrent_table'=>'[]',
            'sync_mode'=>0,
            'start_scn'=>'',),
            'full_sync_obj_filter'=>array(
            'full_sync_obj_data'=>array(),),
            'inc_sync_ddl_filter'=>array(
            'inc_sync_ddl_data'=>array(),),
            'filter_table_settings'=>array(
            'exclude_table'=>'[]',),
            'etl_settings'=>array(
            'etl_table'=>array(),),
            'tgt_type'=>'',
        );
        $res = $oceanbase -> createBatchOceanRule($arr);
        $this->do_assert($res);
    }

    public function testModifyOceanRule()
    {
        $oceanbase = $this -> oceanbase;
        $arr = array('11111111-1111-1111-1111-111111111111');
        $res = $oceanbase -> modifyOceanRule($arr);
        $this->do_assert($res);
    }

    public function testDescribeOceanRule()
    {
        $oceanbase = $this -> oceanbase;
        $arr = array(
            'id' => 1,
            'uuid' => '11111111-1111-1111-1111-111111111111',
        );
        $res = $oceanbase -> describeOceanRule($arr);
        $this->do_assert($res);
    }

    public function testDeleteOceanRule()
    {
        $oceanbase = $this -> oceanbase;
        $arr = array(
            'rule_uuids'=>array('11111111-1111-1111-1111-111111111111'),
            'type'=>'',
            'force'=>0,
        );
        $res = $oceanbase -> deleteOceanRule($arr);
        $this->do_assert($res);
    }

    public function testResumeOceanRule()
    {
        $oceanbase = $this -> oceanbase;
        $arr = array(
            'operate'=>'',
            'rule_uuids'=>array('11111111-1111-1111-1111-111111111111'),
            'scn'=>'',
        );
        $res = $oceanbase -> resumeOceanRule($arr);
        $this->do_assert($res);
    }

    public function testListSyncRulesStatus()
    {
        $oceanbase = $this -> oceanbase;
        $arr = array(
            'uuids'=>array('11111111-1111-1111-1111-111111111111'),
        );
        $res = $oceanbase -> listSyncRulesStatus($arr);
        $this->do_assert($res);
    }

    public function testCreateOceanTableFix()
    {
        $oceanbase = $this -> oceanbase;
        $arr = array(
            'rule_uuid'=>'',
            'tab'=>'[
  "I2.table"
]',
        );
        $res = $oceanbase -> createOceanTableFix($arr);
        $this->do_assert($res);
    }

    private function do_assert($res)
    {
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}