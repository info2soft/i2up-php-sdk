<?php
namespace i2up\Test\v20240819\active;

use i2up\active\v20240819\HBase;
use i2up\common\Auth;
                
class HBaseTest extends \PHPUnit_Framework_TestCase
 {
    private $hBase;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> hBase = new HBase(new Auth());
    }

    public function testCreateHbaseRule()
    {
        $hBase = $this -> hBase;
        $arr = array(
            'save_json_text'=>false,
            'db_map'=>array(
            '0'=>array(
            'dst_table'=>'',
            'src_table'=>'',),),
            'part_load_balance'=>'',
            'kafka_time_out'=>'',
            'full_sync_mode'=>'auto',
            'modify'=>false,
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
            'jointing'=>array(
            'op'=>'',
            'table'=>'',
            'content'=>'',),
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
            'rpc_server'=>array(
            'zookeeper'=>array(
            'set'=>array(
            '0'=>array(
            'ip'=>'',
            'port'=>'',
            'zk_node'=>'',),),),
            'peer'=>'',),),
        );
        
        
        $res = $hBase -> createHbaseRule($arr);
        $this->do_assert($res);
    }

    public function testDeleteHbaseRule()
    {
        $hBase = $this -> hBase;
        $arr = array(
            'force'=>true,
            'rule_uuids'=>array(),
        );
        
        
        $res = $hBase -> deleteHbaseRule($arr);
        $this->do_assert($res);
    }

    public function testDescribeHbaseRule()
    {
        $hBase = $this -> hBase;
        $arr = array(
            'mysql_uuid'=>'',
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $hBase -> describeHbaseRule($arr);
        $this->do_assert($res);
    }

    public function testOperateHbaseRule()
    {
        $hBase = $this -> hBase;
        $arr = array(
            'tf'=>'',
            'operate'=>'restart',
            'mysql_uuid'=>'2c10Cec8-cD51-E2f9-1Db3-9fC5AaB152Ef',
            'scn'=>'',
        );
        
        
        $res = $hBase -> operateHbaseRule($arr);
        $this->do_assert($res);
    }

    public function testListHbaseRules()
    {
        $hBase = $this -> hBase;
        $arr = array(
            'where_args'=>array(
            'mysql_uuid'=>'e2d7A11B-bA9e-Ef4c-B0f7-431efD322EC2',),
            'page'=>1,
            'limit'=>10,
            'search_field'=>'',
            'search_value'=>'',
        );
        
        
        $res = $hBase -> listHbaseRules($arr);
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