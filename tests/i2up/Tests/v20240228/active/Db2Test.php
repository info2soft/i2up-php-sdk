<?php
namespace i2up\Test\v20240228\active;

use i2up\active\v20240228\Db2;
use i2up\common\Auth;
                
class Db2Test extends \PHPUnit_Framework_TestCase
 {
    private $db2;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> db2 = new Db2(new Auth());
    }

    public function testListDb2Rule()
    {
        $db2 = $this -> db2;
        $arr = array('11111111-1111-1111-1111-111111111111');
        $res = $db2 -> listDb2Rule($arr);
        $this->do_assert($res);
    }

    public function testCreateDb2Rule()
    {
        $db2 = $this -> db2;
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
            'jointing'=>array(
            'table'=>'',
            'op'=>'append',
            'content'=>'',),
            'lib_name'=>'',
            'jnr_name'=>'',),
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
            'concurrent_table'=>'[]',),
            'full_sync_obj_filter'=>array(
            'full_sync_obj_data'=>array(),),
            'inc_sync_ddl_filter'=>array(
            'inc_sync_ddl_data'=>array(
            '0'=>'ALTER TABLE CHECKED',
            '1'=>'ALTER TABLE REORG',
            '2'=>'ALTER TABLE ATTACH PARTITION',
            '3'=>'CREATE INDEX NOT PART',
            '4'=>'DROP INDEX NOT PART',),),
            'filter_table_settings'=>array(
            'exclude_table'=>'[]',),
            'etl_settings'=>array(
            'etl_table'=>array(),),
            'save_json_text'=>false,
        );
        $res = $db2 -> createDb2Rule($arr);
        $this->do_assert($res);
    }

    public function testModifyDb2Rule()
    {
        $db2 = $this -> db2;
        $res = $db2 -> modifyDb2Rule();
        $this->do_assert($res);
    }

    public function testListSyncRulesStatus()
    {
        $db2 = $this -> db2;
        $arr = array(
            'uuids'=>array('11111111-1111-1111-1111-111111111111'),
        );
        $res = $db2 -> listSyncRulesStatus($arr);
        $this->do_assert($res);
    }

    public function testDescribeDb2Rule()
    {
        $db2 = $this -> db2;
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111',
        );
        $res = $db2 -> describeDb2Rule($arr);
        $this->do_assert($res);
    }

    public function testDeleteDb2Rule()
    {
        $db2 = $this -> db2;
        $arr = array(
            'rule_uuids'=>array('11111111-1111-1111-1111-111111111111'),
            'type'=>'',
            'force'=>0,
        );
        $res = $db2 -> deleteDb2Rule($arr);
        $this->do_assert($res);
    }

    public function testResumeDb2Rule()
    {
        $db2 = $this -> db2;
        $arr = array(
            'operate'=>'resume',
            'rule_uuid'=>'',
            'scn'=>'',
        );
        $res = $db2 -> resumeDb2Rule($arr);
        $this->do_assert($res);
    }

    public function testStopDb2Rule()
    {
        $db2 = $this -> db2;
        $arr = array(
            'operate'=>'stop',
            'rule_uuid'=>'',
            'scn'=>'',
        );
        $res = $db2 -> stopDb2Rule($arr);
        $this->do_assert($res);
    }

    public function testRestartDb2Rule()
    {
        $db2 = $this -> db2;
        $arr = array(
            'operate'=>'restart',
            'rule_uuid'=>'',
            'scn'=>'',
        );
        $res = $db2 -> restartDb2Rule($arr);
        $this->do_assert($res);
    }

    public function testDuplicateDb2Rule()
    {
        $db2 = $this -> db2;
        $arr = array(
            'operate'=>'duplicate',
            'rule_uuid'=>'',
            'scn'=>'',
        );
        $res = $db2 -> duplicateDb2Rule($arr);
        $this->do_assert($res);
    }

    private function do_assert($res)
    {
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}