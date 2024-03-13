<?php
namespace i2up\Test\active;

use i2up\active\v20200721\Postgres;
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
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
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
                'kafka_message_encoding'=>'UTF-8',),
        );
        $res = $postgres -> createPgsqlRule($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testModifyPgsqlRule()
    {
        $postgres = $this -> postgres;
        $arr = array(
            'rule_name'=>'test',
            'src_db_uuid'=>'7B1BE386-4CB1-86AA-D39D-B644C2EADD57',
            'tgt_db_uuid'=>'CD52E44B-D25A-4CE3-126F-6F5A460731E4',
            'tgt_type'=>'sqlserver',
            'map_type'=>'table',
            'config'=>array(
                'start_rule_now'=>1,
                'table_map'=>array(
                    '0'=>array(
                        'src_user'=>'1',
                        'src_table'=>'2',
                        'dst_user'=>'1',
                        'dst_table'=>'2',
                        'column'=>array(),),),
                'full_sync'=>1,
                'incre_sync'=>1,
                'full_sync_mode'=>'',
                'db_user_map'=>array(),
                'dbmap_topic'=>'',
                'row_map_mode'=>'',
                'kafka_time_out'=>'',
                'part_load_balance'=>'',
                'kafka_message_encoding'=>'',),
            'rule_uuid'=>'',
        );
        $res = $postgres -> modifyPgsqlRule($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDeletePgsqlRule()
    {
        $postgres = $this -> postgres;
        $arr = array(
            'uuids'=>array(),
        );
        $res = $postgres -> deletePgsqlRule($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }


    public function testListPgsqlStatus()
    {
        $postgres = $this -> postgres;
        $arr = array(
            'uuids'=>array(),
        );
        $res = $postgres -> listPgsqlStatus($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListPgsqlRuleLog()
    {
        $postgres = $this -> postgres;
        $arr = array(
            'offset'=>0,
            'limit'=>10,
            'date_start'=>'',
            'date_end'=>'',
            'type'=>1,
            'module_type'=>1,
            'query_type'=>1,
            'rule_uuid'=>'DD2831aC-42b5-B73D-d8Ff-8Dc2e2A95313',
        );
        $res = $postgres -> listPgsqlRuleLog($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribePgsqlRules()
    {
        $postgres = $this -> postgres;
        $arr = array(
            'rule_uuid'=>'',
        );
        $res = $postgres -> describePgsqlRules($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}