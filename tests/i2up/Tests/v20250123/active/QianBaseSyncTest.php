<?php
namespace i2up\Test\v20250123\active;

use i2up\active\v20250123\QianBaseSync;
use i2up\common\Auth;
                
class QianBaseSyncTest extends \PHPUnit_Framework_TestCase
 {
    private $qianBaseSync;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> qianBaseSync = new QianBaseSync(new Auth());
    }

    public function testListQianbaseRule()
    {
        $qianBaseSync = $this -> qianBaseSync;
        $arr = array(
            'page'=>1,
            'limit'=>10,
            'search_field'=>'',
            'search_value'=>'',
            'group_uuid'=>'',
            'where_args'=>array(
            'rule_uuid'=>'',
            'status'=>'',
            'src_db_name'=>'',
            'tgt_db_name'=>'',
            'db_ip'=>'',
            'node_ip'=>'',
            'username'=>'',
            'rule_name'=>'',),
        );
        
        
        $res = $qianBaseSync -> listQianbaseRule($arr);
        $this->do_assert($res);
    }

    public function testCreateQianbaseRule()
    {
        $qianBaseSync = $this -> qianBaseSync;
        $arr = array(
            'rule_name'=>'test',
            'src_db_uuid'=>'7B1BE386-4CB1-86AA-D39D-B644C2EADD57',
            'map_type'=>'table',
            'config'=>array(
            'start_rule_now'=>1,
            'db_set'=>array(
            '0'=>array(
            'tgt_db_uuid'=>'CD52E44B-D25A-4CE3-126F-6F5A460731E4',
            'filter_type'=>'[1:filter_table,0:no_fileter]',
            'table_map'=>array(
            '0'=>array(
            'src_table'=>'',
            'dst_table'=>'',),),
            'custom_config'=>array(
            '0'=>array(
            'key'=>'',
            'value'=>'',),),
            'tgt_type'=>'',),),
            'all_custom_config'=>array(
            '0'=>array(
            'key'=>'',
            'value'=>'',),),
            'sync_content'=>array(
            '0'=>array(
            'sync_col'=>'',),),
            'jointing'=>array(
            'table'=>'',
            'op'=>'',
            'content'=>'',),
            'save_json_text'=>'',
            'kafka_db_uuid'=>'',
            'conn_num'=>1,
            'loader'=>1,
            'schema_name'=>'',),
        );
        
        
        $res = $qianBaseSync -> createQianbaseRule($arr);
        $this->do_assert($res);
    }

    public function testModifyQianbaseRule()
    {
        $qianBaseSync = $this -> qianBaseSync;
        $arr = array(
            'rule_name'=>'',
            'src_db_uuid'=>'',
            'tgt_db_uuid'=>'',
            'tgt_type'=>'sqlserver',
            'map_type'=>'db',
            'config'=>array(
            'start_rule_now'=>1,
            'table_map'=>array(),
            'full_sync'=>0,
            'incre_sync'=>1,
            'full_sync_mode'=>'1',
            'db_user_map'=>'',
            'dbmap_topic'=>'',
            'row_map_mode'=>'',
            'kafka_time_out'=>'',
            'part_load_balance'=>'',
            'kafka_message_encoding'=>'',
            'db_set'=>array(
            '0'=>array(
            'tgt_db_uuid'=>'',
            'filter_type'=>'',
            'tgt_type'=>'',
            'table_map'=>array(
            '0'=>array(
            'src_table'=>'',
            'dst_table'=>'',),),
            'custom_config'=>array(
            '0'=>array(
            'key'=>'',
            'value'=>'',),),),),
            'all_custom_config'=>array(
            '0'=>array(
            'key'=>'',
            'value'=>'',),),
            'sync_content'=>array(
            '0'=>array(
            'sync_col'=>'',),),),
            'rule_uuid'=>'',
        );
        
        
        $res = $qianBaseSync -> modifyQianbaseRule($arr);
        $this->do_assert($res);
    }

    public function testDeleteQianbaseRule()
    {
        $qianBaseSync = $this -> qianBaseSync;
        $arr = array(
            'uuids'=>array(),
            'force'=>'true',
        );
        
        
        $res = $qianBaseSync -> deleteQianbaseRule($arr);
        $this->do_assert($res);
    }

    public function testListQianbaseStatus()
    {
        $qianBaseSync = $this -> qianBaseSync;
        $arr = array(
            'uuids'=>array(),
        );
        
        
        $res = $qianBaseSync -> listQianbaseStatus($arr);
        $this->do_assert($res);
    }

    public function testResumeQianbaseRule()
    {
        $qianBaseSync = $this -> qianBaseSync;
        $arr = array(
            'operate'=>'',
            'uuids'=>array(),
            'scn'=>'',
        );
        
        
        $res = $qianBaseSync -> resumeQianbaseRule($arr);
        $this->do_assert($res);
    }

    public function testStopQianbaseRule()
    {
        $qianBaseSync = $this -> qianBaseSync;
        $arr = array(
            'operate'=>'',
            'uuids'=>array(),
            'scn'=>'',
        );
        
        
        $res = $qianBaseSync -> stopQianbaseRule($arr);
        $this->do_assert($res);
    }

    public function testRestartQianbaseRule()
    {
        $qianBaseSync = $this -> qianBaseSync;
        $arr = array(
            'operate'=>'',
            'uuids'=>array(),
            'scn'=>'',
        );
        
        
        $res = $qianBaseSync -> restartQianbaseRule($arr);
        $this->do_assert($res);
    }

    public function testListQianbaseRuleLog()
    {
        $qianBaseSync = $this -> qianBaseSync;
        $arr = array(
            'offset'=>1,
            'limit'=>10,
            'date_start'=>1,
            'date_end'=>1,
            'type'=>1,
            'module_type'=>1,
            'query_type'=>1,
            'rule_uuid'=>'5fe4C3E4-FdE9-A6Dd-F5D8-125873D45EC5',
        );
        
        
        $res = $qianBaseSync -> listQianbaseRuleLog($arr);
        $this->do_assert($res);
    }

    public function testDescribeQianbaseRules()
    {
        $qianBaseSync = $this -> qianBaseSync;
        $arr = array(
            'rule_uuid'=>'',
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $qianBaseSync -> describeQianbaseRules($arr);
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