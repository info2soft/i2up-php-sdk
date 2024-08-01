<?php
namespace i2up\Test\v20240228\active;

use i2up\active\v20240228\Postgres;
use i2up\common\Auth;
                
class PostgresTest extends \PHPUnit_Framework_TestCase
 {
    private $postgres;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> postgres = new Postgres(new Auth());
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

    public function testCreatePgsqlRule()
    {
        $postgres = $this -> postgres;
        $arr = array(
            'rule_name'=>'test',
            'src_db_uuid'=>'7B1BE386-4CB1-86AA-D39D-B644C2EADD57',
            'tgt_db_uuid'=>'CD52E44B-D25A-4CE3-126F-6F5A460731E4',
            'tgt_type'=>'sqlserver',
            'map_type'=>'table',
            'config'=>array(
            'table_map'=>array(
            '0'=>array(
            'src_user'=>'1',
            'src_table'=>'2',
            'dst_user'=>'1',
            'dst_table'=>'2',
            'column'=>array(),),),
            'start_rule_now'=>1,
            'db_user_map'=>'',
            'dbmap_topic'=>'',
            'full_sync'=>1,
            'incre_sync'=>1,
            'full_sync_mode'=>'logic',
            'row_map_mode'=>'rowid',
            'kafka_time_out'=>'120000',
            'part_load_balance'=>'by_table',
            'kafka_message_encoding'=>'UTF-8',
            'dst_connect_user'=>'',
            'src_connect_user'=>'',
            'jointing'=>array(
            'table'=>'',
            'op'=>'',
            'content'=>'',),
            'save_json_text'=>false,
            'full_sync_custom_cfg'=>array(
            '0'=>array(
            'key'=>'',
            'value'=>'',),),
            'full_sync_settings'=>array(
            'full_sync_custom_cfg'=>array(
            '0'=>array(
            'key'=>'',
            'value'=>'',),),
            'dump_thd'=>'',
            'load_thd'=>'',
            'start_lsn'=>'',
            'existing_table'=>'',
            'end_db_map'=>array(
            '0'=>array(
            'src_db'=>'',
            'tar_db'=>'',),),
            'end_tab_map'=>array(
            '0'=>array(
            'dst_db'=>'',
            'dst_table'=>'',
            'src_db'=>'',
            'src_table'=>'',
            'column'=>array(
            '0'=>array(
            'src_column'=>'',
            'dst_column'=>'',),),),),
            'end_target_type'=>'',
            'end_target_db'=>'',
            'table_msg_uuid'=>'',
            'inc_sync_ddl_filter'=>array(
            'inc_sync_ddl_data'=>array(),),),
            'database_map'=>array(
            '0'=>array(
            'src_database'=>'',
            'tgt_database'=>'',
            'src_schema'=>'',
            'tgt_schema'=>'',),),),
        );
        $res = $postgres -> createPgsqlRule($arr);
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
            'uuids'=>array('11111111-1111-1111-1111-111111111111'),
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

    public function testDescribePgsqlRules()
    {
        $postgres = $this -> postgres;
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111',
            'rule_uuid'=>'',
        );
        $res = $postgres -> describePgsqlRules($arr);
        $this->do_assert($res);
    }

    private function do_assert($res)
    {
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}