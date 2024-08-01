<?php
namespace i2up\Test\active;

use i2up\active\v20200721\Gauss;
use i2up\common\Auth;

class GaussTest extends \PHPUnit_Framework_TestCase
{
    private $gauss;

    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> gauss = new Gauss(new Auth());
    }

    public function testCreateGaussRule()
    {
        $gauss = $this -> gauss;
        $arr = array(
            'rule_name'=>'ctt->ctt',
            'src_db_uuid'=>' 1B1153F6-DAD9-BC39-888A-A743FCC208E5',
            'tgt_db_uuid'=>' D42BF707-C971-EEA9-521F-BB0F3F7A92FC',
            'tgt_type'=>'oracle',
            'db_user_map'=>array(
                'CTT'=>'CTT',),
            'map_type'=>'user',
            'table_map'=>array(),
            'dbmap_topic'=>'',
            'sync_mode'=>1,
            'start_scn'=>1,
            'full_sync_settings'=>array(
                'keep_exist_table'=>0,
                'keep_table'=>0,
                'load_mode'=>'direct',
                'ld_dir_opt'=>0,
                'his_thread'=>1,
                'try_split_part_table'=>0,
                'concurrent_table'=>array(
                    '0'=>'hello.world',),),
            'inc_sync_ddl_filter'=>array(),
            'filter_table_settings'=>array(
                'exclude_table'=>array(
                    '0'=>'hh.ww',),),
            'etl_settings'=>array(
                'etl_table'=>array(
                    '0'=>array(
                        'oprType'=>'IRP',
                        'table'=>'',
                        'user'=>'',
                        'process'=>'SKIP',
                        'addInfo'=>'',),),),
            'start_rule_now'=>0,
            'storage_settings'=>array(
                'src_max_mem'=>512,
                'src_max_disk'=>5000,
                'txn_max_mem'=>10000,
                'tf_max_size'=>100,
                'tgt_extern_table'=>'',),
            'error_handling'=>array(
                'load_err_set'=>'continue',
                'drp'=>'ignore',
                'irp'=>'irpafterdel',
                'urp'=>'toirp',),
            'table_space_map'=>array(
                'tgt_table_space'=>'',
                'table_mapping_way'=>'ptop',
                'table_path_map'=>array(
                    'ddd'=>'sss',
                    'ddd1'=>'sss1',),
                'table_space_name'=>array(
                    'qq'=>'ss',),),
            'other_settings'=>array(
                'keep_dyn_data'=>0,
                'dyn_thread'=>1,
                'dly_constraint_load'=>0,
                'zip_level'=>0,
                'ddl_cv'=>0,
                'keep_bad_act'=>0,
                'keep_usr_pwd'=>1,
                'convert_urp_of_key'=>0,
                'ignore_foreign_key'=>0,),
            'bw_settings'=>array(
                'bw_limit'=>'"12*00:00-13:00*40M,3*00:00-13:00*40M"',),
            'biz_grp_list'=>array(),
            'kafka_time_out'=>'',
            'part_load_balance'=>'',
        );
        $res = $gauss -> createGaussRule($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testModifyGaussRule()
    {
        $gauss = $this -> gauss;
        $arr = array(
            'rule_name'=>'ctt->ctt',
            'src_db_uuid'=>' 1B1153F6-DAD9-BC39-888A-A743FCC208E5',
            'tgt_db_uuid'=>' D42BF707-C971-EEA9-521F-BB0F3F7A92FC',
            'tgt_type'=>'oracle',
            'db_user_map'=>array(
                'CTT'=>'CTT',),
            'map_type'=>'user',
            'table_map'=>array(),
            'dbmap_topic'=>'',
            'sync_mode'=>1,
            'start_scn'=>1,
            'full_sync_settings'=>array(
                'keep_exist_table'=>0,
                'keep_table'=>0,
                'load_mode'=>'direct',
                'ld_dir_opt'=>0,
                'his_thread'=>1,
                'try_split_part_table'=>0,
                'concurrent_table'=>array(
                    '0'=>'hello.world',),),
            'inc_sync_ddl_filter'=>array(),
            'filter_table_settings'=>array(
                'exclude_table'=>array(
                    '0'=>'hh.ww',),),
            'etl_settings'=>array(
                'etl_table'=>array(
                    '0'=>array(
                        'oprType'=>'IRP',
                        'table'=>'',
                        'user'=>'',
                        'process'=>'SKIP',
                        'addInfo'=>'',),),),
            'start_rule_now'=>0,
            'storage_settings'=>array(
                'src_max_mem'=>512,
                'src_max_disk'=>5000,
                'txn_max_mem'=>10000,
                'tf_max_size'=>100,
                'tgt_extern_table'=>'',),
            'error_handling'=>array(
                'load_err_set'=>'continue',
                'drp'=>'ignore',
                'irp'=>'irpafterdel',
                'urp'=>'toirp',),
            'table_space_map'=>array(
                'tgt_table_space'=>'',
                'table_mapping_way'=>'ptop',
                'table_path_map'=>array(
                    'ddd'=>'sss',
                    'ddd1'=>'sss1',),
                'table_space_name'=>array(
                    'qq'=>'ss',),),
            'other_settings'=>array(
                'keep_dyn_data'=>0,
                'dyn_thread'=>1,
                'dly_constraint_load'=>0,
                'zip_level'=>0,
                'ddl_cv'=>0,
                'keep_bad_act'=>0,
                'keep_usr_pwd'=>1,
                'convert_urp_of_key'=>0,
                'ignore_foreign_key'=>0,),
            'bw_settings'=>array(
                'bw_limit'=>'"12*00:00-13:00*40M,3*00:00-13:00*40M"',),
            'biz_grp_list'=>array(),
            'kafka_time_out'=>'',
            'part_load_balance'=>'',
            'rule_uuid'=>'',
        );
        $res = $gauss -> modifyGaussRule($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDeleteGaussRule()
    {
        $gauss = $this -> gauss;
        $arr = array(
            'uuids'=>array(
                '0'=>'DBED8CDE-435D-7865-76FE-149AA54AC7F7',),
            'type'=>'',
        );
        $res = $gauss -> deleteGaussRule($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListGaussRules()
    {
        $gauss = $this -> gauss;
        $arr = array(
            'page'=>1,
            'limit'=>10,
            'search_field'=>'',
            'search_value'=>'',
            'group_uuid'=>'',
            'where_args'=>array(
                'rule_uuid'=>'',),
        );
        $res = $gauss -> listGaussRules($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListGaussStatus()
    {
        $gauss = $this -> gauss;
        $arr = array(
            'uuids'=>array('11111111-1111-1111-1111-111111111111'),
        );
        $res = $gauss -> listGaussStatus($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeGaussTraffic()
    {
        $gauss = $this -> gauss;
        $arr = array(
            'set_time'=>1,
            'type'=>'',
            'interval'=>'时间间隔',
            'set_time_init'=>'',
            'rule_uuid'=>'',
        );
        $res = $gauss -> describeGaussTraffic($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}