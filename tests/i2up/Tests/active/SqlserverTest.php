<?php
namespace i2up\Test\active;

use i2up\active\v20200721\Sqlserver;
use i2up\common\Auth;

class SqlserverTest extends \PHPUnit_Framework_TestCase
{
    private $sqlserver;

    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> sqlserver = new Sqlserver(new Auth());
    }

    public function testCreateRule()
    {
        $sqlserver = $this -> sqlserver;
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
                'enable_cdc'=>0,
                'mirror_db_uuid'=>'',
                'sync_mode'=>1,
                'dump_thd'=>1,
                'drop_old_tab'=>1,),
            '_'=>'95f4e88ab554',
        );
        $res = $sqlserver -> createRule($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testBatchCreateRule()
    {
        $sqlserver = $this -> sqlserver;
        $arr = array(
            'tgt_type'=>'sqlserver',
            'map_type'=>'db',
            'config'=>array(
                'enable_cdc'=>0,
                'start_rule_now'=>1,
                'dump_thd'=>1,
                'sync_mode'=>1,
                'drop_old_tab'=>1,
                'table_map'=>'',),
            'rule_list'=>array(
                '0'=>array(
                    'rule_name'=>'',
                    'src_db_uuid'=>'',
                    'tgt_db_uuid'=>'',
                    'mirror_db_uuid'=>'',),),
        );
        $res = $sqlserver -> batchCreateRule($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testModifyRule()
    {
        $sqlserver = $this -> sqlserver;
        $arr = array(
            'table_map'=>array(
                '0'=>array(
                    'src_user'=>'1',
                    'src_table'=>'2',
                    'dst_user'=>'1',
                    'dst_table'=>'2',
                    'column'=>array(),),),
            'rule_name'=>'test',
            'src_db_uuid'=>'7B1BE386-4CB1-86AA-D39D-B644C2EADD57',
            'tgt_db_uuid'=>'CD52E44B-D25A-4CE3-126F-6F5A460731E4',
            'tgt_type'=>'sqlserver',
            'map_type'=>'table',
            'config'=>array(),
            'start_rule_now'=>1,
            'enable_cdc'=>0,
            'mirror_db_uuid'=>'',
            'sync_mode'=>1,
            'dump_thd'=>1,
            'drop_old_tab'=>1,
            '_'=>'95f4e88ab554',
            'uuid'=>'',
        );
        $res = $sqlserver -> modifyRule($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDeleteRule()
    {
        $sqlserver = $this -> sqlserver;
        $arr = array(
            'uuids'=>array(),
        );
        $res = $sqlserver -> deleteRule($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testOperateRule()
    {
        $sqlserver = $this -> sqlserver;
        $arr = array(
            'operate'=>'',
            'uuids'=>'',
        );
        $res = $sqlserver -> operateRule($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListRuleStatus()
    {
        $sqlserver = $this -> sqlserver;
        $arr = array(
            'uuids'=>'',
        );
        $res = $sqlserver -> listRuleStatus($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testCheckName()
    {
        $sqlserver = $this -> sqlserver;
        $res = $sqlserver -> checkName();
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListRule()
    {
        $sqlserver = $this -> sqlserver;
        $arr = array(
            'page'=>1,
            'limit'=>10,
            'search_field'=>'',
            'search_value'=>'',
            'group_uuid'=>'',
            'where_args'=>array(
                'rule_uuid'=>'',),
        );
        $res = $sqlserver -> listRule($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}