<?php
namespace i2up\Test\v20260626\active;

use i2up\active\v20260626\Hetero;
use i2up\common\Auth;
use PHPUnit\Framework\TestCase;
                
class HeteroTest extends TestCase
 {
    private $hetero;
    
    public function setUp():void
    {
        parent::setup();
        $this -> hetero = new Hetero(new Auth());
    }

    public function testCreateConsumerRule()
    {
        $hetero = $this -> hetero;
        $arr = array(
            'name'=>'Ruth Clark',
            'src_db_uuid'=>'B5CED857-275C-77C4-0561-887F7C890FF2',
            'tgt_type'=>'oracle',
            'init_offset'=>array(
            '0'=>array(
            'topic'=>'test',
            'offset'=>'1',
            'partition'=>'1',),),
            'topic'=>'test1',
            'dst_topic'=>'topic1',
            'tgt_db_uuid'=>'1C5F3C4B-7333-9518-7349-9712BC9ED664',
            'init_offset_type'=>'earlist',
            'tabmap'=>array(
            '0'=>array(
            'src_table'=>'src_t',
            'dst_table'=>'dst_t',
            'kudu_partition_config'=>array(
            'hashSetting'=>false,
            'hash_definitions'=>array(),
            'rangSetting'=>false,
            'range_definition'=>array(
            'range_columns'=>'',
            'range_partitions'=>array(),),),
            'column'=>array(
            '0'=>array(
            'dst_column'=>'',
            'src_column'=>'',),),),),
            'consumer_thread_num'=>2,
            'actload_thread_num'=>4,
            'kudu_partition_config'=>array(),
            'impala_connected'=>false,
            'config'=>array(
            'goldendb_config'=>array(
            'machine_number'=>1,
            'distribute_type'=>'',),
            'insert_date_config'=>array(
            'enable'=>false,
            'column_name'=>'ETL_INSERT_DATE',),
            'primary_key_config'=>array(
            'primary_key_config'=>'primaryKey',
            'use_insert_date'=>false,
            'use_rowid'=>false,
            'use_source_table_key'=>false,),
            'target_user'=>'oracle',
            'target_db_name'=>'George Brown',
            'db_name'=>'Maria Rodriguez',
            'kerberos_certify'=>false,
            'dmltrack'=>array(
            'enable'=>false,
            'tmcol'=>'1',),
            'target_user_map'=>'{}',
            'part_config'=>array(
            '0'=>array(
            'part_index'=>0,
            'part_col_name'=>'null',
            'part_type'=>'ALL',
            'part_from_col_name'=>'null',
            'part_from_date_format'=>'null',),
            '1'=>array(
            'part_index'=>0,
            'part_col_name'=>'null',
            'part_type'=>'ALL',
            'part_from_col_name'=>'null',
            'part_from_date_format'=>'null',),),
            'machine_num'=>1,
            'existing_table'=>'',
            'error_deal'=>'',
            'binary_code'=>'',
            'error_handling'=>array(
            'load_err_set'=>'continue',),
            'load_err_set'=>'',
            'hdfs_config'=>array(
            'auth'=>'',
            'principal'=>'',
            'keytab'=>'',
            'kbsuser'=>'',),
            'table_engine'=>'',
            'hudi_config'=>array(
            'capacity'=>20000,
            'table_type'=>'',
            'merge_commits'=>1,
            'delay_time'=>1,
            'batch_size'=>1,
            'hive_schema'=>'default',),),
            'encrypt_column_switch'=>1,
            'encrypt_column_method'=>1,
            'encrypt_column_key'=>'',
            'encrypt_columns'=>array(
            '0'=>array(
            'user'=>'',
            'table'=>'',
            'column'=>'',),),
            'user_map'=>array(
            '0'=>array(
            'src_user'=>'',
            'dst_user'=>'',),),
            'map_type'=>'',
            'topic_map'=>array(
            '0'=>array(
            'src_topic'=>'',
            'dst_user'=>'',
            'dst_table'=>'',
            'column'=>array(
            '0'=>array(
            'src_column'=>'',
            'dst_column'=>'',),),),),
        );
        
        
        $res = $hetero -> createConsumerRule($arr);
        $this->do_assert($res);
    }

    public function testModifyConsumerRule()
    {
        $hetero = $this -> hetero;
        $arr = array(
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
            'target_db_name'=>'William Perez',
            'db_name'=>'Timothy Hernandez',
            'kerberos_certify'=>false,
            'dmltrack'=>array(
            'enable'=>false,
            'tmcol'=>'',),
            'target_user_map'=>'',
            'part_config'=>'none',
            'machine_num'=>1,
            'existing_table'=>'',
            'error_deal'=>'',
            'error_handling'=>array(
            'load_err_set'=>'',),
            'load_err_set'=>'',
            'binary_code'=>'',),
            'start_rule_now'=>1,
            'topic'=>'test4',
            'user_uuid'=>'1BCFCAA3-E3C8-3E28-BDC5-BE36FDC2B5DC',
        );
        
        
        $res = $hetero -> modifyConsumerRule($arr);
        $this->do_assert($res);
    }

    public function testDeleteConsumerRules()
    {
        $hetero = $this -> hetero;
        $arr = array(
            'uuids'=>array(
            '0'=>'53ab8Fff-FFb5-652c-3d42-0bAC4511e5CA',
            '1'=>'cc7fB6B4-EcCE-8cC3-AF1c-59f34e783c7E',),
            'force'=>true,
        );
        
        
        $res = $hetero -> deleteConsumerRules($arr);
        $this->do_assert($res);
    }

    public function testListConsumerStatus()
    {
        $hetero = $this -> hetero;
        $arr = array(
            'uuids'=>array(),
        );
        
        
        $res = $hetero -> listConsumerStatus($arr);
        $this->do_assert($res);
    }

    public function testStopConsumerRule()
    {
        $hetero = $this -> hetero;
        $arr = array(
            'uuid'=>'FDAfCdEB-4BeC-F4ba-D1ed-87f5D0cDF3Eb',
            'operate'=>'resume',
        );
        
        
        $res = $hetero -> stopConsumerRule($arr);
        $this->do_assert($res);
    }

    public function testResumeConsumerRule()
    {
        $hetero = $this -> hetero;
        $arr = array(
            'uuid'=>'051d22CC-B69A-1C3E-Ae09-EE2E7bE1081C',
            'operate'=>'resume',
        );
        
        
        $res = $hetero -> resumeConsumerRule($arr);
        $this->do_assert($res);
    }

    public function testListConsumerRules()
    {
        $hetero = $this -> hetero;
        $arr = array(
            'search_field'=>'tgt_type',
            'limit'=>1,
            'page'=>1,
            'search_value'=>'',
            'where_args'=>array(
            'uuid'=>'F7CDA2Ab-5eDe-435e-3151-eBC5cdC9dA4d',
            'status'=>'',
            'src_db_name'=>'test',
            'tgt_db_name'=>'',
            'db_ip'=>'',
            'node_ip'=>'',
            'username'=>'',
            'name'=>'',),
        );
        
        
        $res = $hetero -> listConsumerRules($arr);
        $this->do_assert($res);
    }

    public function testDescribeConsumerRules()
    {
        $hetero = $this -> hetero;
        $arr = array(
            'uuid'=>'75DF8EA3-6480-4137-451B-731F04F368AF',
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $hetero -> describeConsumerRules($arr);
        $this->do_assert($res);
    }

    public function testCreateHeteroGraph()
    {
        $hetero = $this -> hetero;
        $arr = array(
            'graph_name'=>'',
            'is_parent'=>'',
            'is_rule'=>'',
            'consume_rule'=>array(
            '0'=>array(
            'id'=>'',
            'rule_number'=>1,
            'rule_name'=>'',
            'src_type'=>'',
            'src_uuid'=>'',
            'dst_type'=>'',
            'dst_uuid'=>'',
            'rule_status'=>'',
            'is_parent'=>false,
            'is_rule'=>false,
            'src_name'=>'',
            'dst_name'=>'',
            'rule_traffic'=>'',),),
        );
        
        
        $res = $hetero -> createHeteroGraph($arr);
        $this->do_assert($res);
    }

    public function testAddHeteroGraph()
    {
        $hetero = $this -> hetero;
        $arr = array(
            'graph_uuid'=>'',
            'rule_number'=>'',
            'src_type'=>'',
            'rule_uuid'=>'',
        );
        
        
        $res = $hetero -> addHeteroGraph($arr);
        $this->do_assert($res);
    }

    public function testListHeteroGraph()
    {
        $hetero = $this -> hetero;
        $arr = array(
            'page'=>1,
            'limit'=>10,
        );
        
        
        $res = $hetero -> listHeteroGraph($arr);
        $this->do_assert($res);
    }

    public function testRunHeteroGraph()
    {
        $hetero = $this -> hetero;
        $arr = array(
            'graphs'=>array(),
            'graph_uuid'=>'',
            'rule_uuids'=>array(
            '0'=>array(
            'uuid'=>'',
            'src_type'=>'',),),
        );
        
        
        $res = $hetero -> runHeteroGraph($arr);
        $this->do_assert($res);
    }

    public function testStopHeteroGraph()
    {
        $hetero = $this -> hetero;
        $arr = array(
            'graphs'=>array(
            '0'=>array(
            'graph_uuid'=>'',
            'rule_uuids'=>array(
            '0'=>array(
            'uuid'=>'',
            'src_type'=>'',),),),),
        );
        
        
        $res = $hetero -> stopHeteroGraph($arr);
        $this->do_assert($res);
    }

    public function testListGraphStatus()
    {
        $hetero = $this -> hetero;
        $arr = array(
            'rule_uuids'=>array(
            '0'=>'e2a2e7dB-5A09-5D2A-139D-9Bc9946e9cFB',),
        );
        
        
        $res = $hetero -> listGraphStatus($arr);
        $this->do_assert($res);
    }

    public function testDeleteHeteroGraph()
    {
        $hetero = $this -> hetero;
        $arr = array(
            'graph_uuids'=>array(
            '0'=>array(
            'graph_uuid'=>'3c4B657a-fccD-12eD-5F2D-d9F7ac2d6dFb',
            'rule_uuids'=>array(
            '0'=>array(
            'uuid'=>'861ef88E-51F5-b3Bb-ce3F-28A0c2D0cC45',
            'is_rule'=>'1',
            'rule_number'=>'4',
            'src_type'=>'oracle',),),),),
            'is_whole'=>'1',
        );
        
        
        $res = $hetero -> deleteHeteroGraph($arr);
        $this->do_assert($res);
    }

    public function testDescriptGraphDetail()
    {
        $hetero = $this -> hetero;
        $arr = array(
            'page'=>1,
            'limit'=>10,
            'start_time'=>'',
            'end_time'=>'',
            'graph_uuid'=>'',
        );
        
        
        $res = $hetero -> descriptGraphDetail($arr);
        $this->do_assert($res);
    }

    public function testListGraph()
    {
        $hetero = $this -> hetero;
        $arr = array(
            'graph_uuid'=>'',
        );
        
        
        $res = $hetero -> listGraph($arr);
        $this->do_assert($res);
    }

    public function testImportHeteroConsumerTopicMapping()
    {
        $hetero = $this -> hetero;
        $arr = array(
            'file'=>'',
        );
        
        
        $res = $hetero -> importHeteroConsumerTopicMapping($arr);
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