<?php
namespace i2up\Test\v20240819\active;

use i2up\active\v20240819\Rabbitmq;
use i2up\common\Auth;
                
class RabbitmqTest extends \PHPUnit_Framework_TestCase
 {
    private $rabbitmq;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> rabbitmq = new Rabbitmq(new Auth());
    }

    public function testListRabbitmqRule()
    {
        $rabbitmq = $this -> rabbitmq;
        $arr = array();
        
        
        $res = $rabbitmq -> listRabbitmqRule($arr);
        $this->do_assert($res);
    }

    public function testCreateRabbitMqRule()
    {
        $rabbitmq = $this -> rabbitmq;
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
            'gen_txn'=>0,),
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
            'inc_sync_ddl_data'=>array(),),
            'filter_table_settings'=>array(
            'exclude_table'=>'[]',),
            'etl_settings'=>array(
            'etl_table'=>array(),),
            '_'=>'489d781db90cb',
            'encrypt'=>'',
            'encrypt_switch'=>1,
            'compress'=>1,
            'compress_switch'=>1,
            'compress_algo'=>'',
            'compress_level'=>'',
            'secret_key'=>'',
        );
        
        
        $res = $rabbitmq -> createRabbitMqRule($arr);
        $this->do_assert($res);
    }

    public function testModifyRabbitmqRule()
    {
        $rabbitmq = $this -> rabbitmq;
        $arr = array();
        
        
        $res = $rabbitmq -> modifyRabbitmqRule($arr);
        $this->do_assert($res);
    }

    public function testDescribeRabbitmqRule()
    {
        $rabbitmq = $this -> rabbitmq;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $rabbitmq -> describeRabbitmqRule($arr);
        $this->do_assert($res);
    }

    public function testDeleteRabbitmqRule()
    {
        $rabbitmq = $this -> rabbitmq;
        $arr = array(
            'uuids'=>array(),
            'type'=>'',
            'force'=>0,
        );
        
        
        $res = $rabbitmq -> deleteRabbitmqRule($arr);
        $this->do_assert($res);
    }

    public function testResumeRabbitmqRule()
    {
        $rabbitmq = $this -> rabbitmq;
        $arr = array(
            'operate'=>'',
            'rule_uuids'=>array(),
            'scn'=>'',
        );
        
        
        $res = $rabbitmq -> resumeRabbitmqRule($arr);
        $this->do_assert($res);
    }

    public function testStopRabbitmqRule()
    {
        $rabbitmq = $this -> rabbitmq;
        $arr = array(
            'operate'=>'',
            'rule_uuids'=>array(),
            'scn'=>'',
        );
        
        
        $res = $rabbitmq -> stopRabbitmqRule($arr);
        $this->do_assert($res);
    }

    public function testListSyncRulesStatus()
    {
        $rabbitmq = $this -> rabbitmq;
        $arr = array(
            'uuids'=>array(),
        );
        
        
        $res = $rabbitmq -> listSyncRulesStatus($arr);
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