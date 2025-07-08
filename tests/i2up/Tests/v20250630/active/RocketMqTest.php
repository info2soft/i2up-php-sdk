<?php
namespace i2up\Test\v20250630\active;

use i2up\active\v20250630\RocketMq;
use i2up\common\Auth;
                
class RocketMqTest extends \PHPUnit_Framework_TestCase
 {
    private $rocketMq;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> rocketMq = new RocketMq(new Auth());
    }

    public function testCreateRocketMqRule()
    {
        $rocketMq = $this -> rocketMq;
        $arr = array(
            'map_type'=>'',
            'user_map'=>array(),
            'tgt_db_uuid'=>'1C5F3C4B-7333-9518-7349-9712BC9ED664',
            'name'=>'Susan Moore',
            'src_db_uuid'=>'B5CED857-275C-77C4-0561-887F7C890FF2',
            'tgt_type'=>'oracle',
        );
        
        
        $res = $rocketMq -> createRocketMqRule($arr);
        $this->do_assert($res);
    }

    public function testModifyRocketMqRule()
    {
        $rocketMq = $this -> rocketMq;
        $arr = array(
            'kudu_partition_config'=>array(
            '0'=>array(
            'hashSetting'=>false,
            'hash_definitions'=>array(),
            'rangSetting'=>false,
            'rang_definition'=>array(
            '0'=>array(
            'range_colums'=>'',
            'range_partitions'=>1,),),),),
            'impala_connected'=>false,
            'config'=>array(
            'error_deal'=>'',
            'goldendb_config'=>array(
            'machine_number'=>1,
            'distribute_type'=>'',),
            'insert_date_config'=>array(
            'enable'=>false,
            'column_name'=>'',),
            'primary_key_config'=>array(
            'primary_key_config'=>'',
            'use_insert_date'=>false,
            'use_rowid'=>false,
            'use_source_table_key'=>false,),
            'target_user'=>'oracle',
            'target_db_name'=>'Maria White',
            'db_name'=>'Shirley Moore',
            'kerberos_certify'=>false,
            'dmltrack'=>array(
            'enable'=>false,
            'tmcol'=>'',),
            'target_user_map'=>'',
            'part_config'=>'none',
            'machine_num'=>1,
            'existing_table'=>'',
            'error_handling'=>array(
            'load_err_set'=>'',),
            'load_err_set'=>'',
            'binary_code'=>'',),
            'init_offset_type'=>'seek',
            'modify'=>true,
            'tabmap'=>array(
            '0'=>array(
            'src_table'=>'src-t6',
            'dst_table'=>'dst-t6',),),
            'consumer_thread_num'=>41,
            'actload_thread_num'=>41,
            'tgt_db_uuid'=>'773AE76A-7DB6-E465-2508-3919C875916E',
            'name'=>'m-k-hive',
            'src_db_uuid'=>'86A56D69-72DE-AA2F-1C7E-C0A843F1D9EA',
            'tgt_type'=>'hive',
            'init_offset'=>array(
            '0'=>array(
            'topic'=>'test4',
            'offset'=>'18684815',
            'partition'=>'0',),),
            'dst_topic'=>'dst_topic',
            'uuid'=>'356FF271-0D32-C35A-75A2-C68AD3A70FB3',
            'start_rule_now'=>1,
            'topic'=>'test4',
            'user_uuid'=>'1BCFCAA3-E3C8-3E28-BDC5-BE36FDC2B5DC',
        );
        
        
        $res = $rocketMq -> modifyRocketMqRule($arr);
        $this->do_assert($res);
    }

    public function testDeleteRocketMqRules()
    {
        $rocketMq = $this -> rocketMq;
        $arr = array(
            'force'=>true,
            'uuids'=>array(
            '0'=>'3fb4f4c2-bD1f-26dE-e6bc-b3dAdffcDcc9',
            '1'=>'Cf5cB94B-dEeA-D13F-273A-8f7e6deCFC1e',),
        );
        
        
        $res = $rocketMq -> deleteRocketMqRules($arr);
        $this->do_assert($res);
    }

    public function testListRocketMqStatus()
    {
        $rocketMq = $this -> rocketMq;
        $arr = array(
            'uuids'=>array(),
        );
        
        
        $res = $rocketMq -> listRocketMqStatus($arr);
        $this->do_assert($res);
    }

    public function testStopRocketMqRule()
    {
        $rocketMq = $this -> rocketMq;
        $arr = array(
            'uuid'=>'63FEf941-5DB9-93C2-E63B-Efd71f83D7C3',
            'operate'=>'resume',
        );
        
        
        $res = $rocketMq -> stopRocketMqRule($arr);
        $this->do_assert($res);
    }

    public function testResumeRocketMqRule()
    {
        $rocketMq = $this -> rocketMq;
        $arr = array(
            'uuid'=>'8b261ccE-7BeF-A3B8-E3eA-D5DCE3EdC7d4',
            'operate'=>'resume',
        );
        
        
        $res = $rocketMq -> resumeRocketMqRule($arr);
        $this->do_assert($res);
    }

    public function testListRocketMqRules()
    {
        $rocketMq = $this -> rocketMq;
        $arr = array(
            'search_value'=>'',
            'limit'=>1,
            'page'=>1,
            'search_field'=>'tgt_type',
            'where_args'=>array(
            'status'=>'',
            'src_db_name'=>'test',
            'tgt_db_name'=>'',
            'db_ip'=>'',
            'node_ip'=>'',
            'username'=>'',
            'name'=>'',
            'uuid'=>'aaEFCCD8-A8cd-Ad3a-F323-d83c28150C7b',),
        );
        
        
        $res = $rocketMq -> listRocketMqRules($arr);
        $this->do_assert($res);
    }

    public function testDescribeRocketMqRules()
    {
        $rocketMq = $this -> rocketMq;
        $arr = array(
            'uuid'=>'75DF8EA3-6480-4137-451B-731F04F368AF',
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $rocketMq -> describeRocketMqRules($arr);
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