<?php
namespace i2up\Test\v20250123\active;

use i2up\active\v20250123\HeteroConsumer;
use i2up\common\Auth;
                
class HeteroConsumerTest extends \PHPUnit_Framework_TestCase
 {
    private $heteroConsumer;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> heteroConsumer = new HeteroConsumer(new Auth());
    }

    public function testCreateConsumerRule()
    {
        $heteroConsumer = $this -> heteroConsumer;
        $arr = array(
            'config'=>array(
            'machine_num'=>1,
            'target_user'=>'oracle',
            'target_db_name'=>'Cynthia Smith',
            'error_deal'=>'',
            'db_name'=>'Eric Thompson',
            'kerberos_certify'=>false,
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
            'table_engine'=>'',
            'existing_table'=>'',
            'target_user_map'=>'{}',
            'binary_code'=>'',
            'hudi_config'=>array(
            'capacity'=>20000,
            'table_type'=>'',
            'merge_commits'=>1,
            'delay_time'=>1,
            'batch_size'=>1,
            'hive_schema'=>'default',),
            'hdfs_config'=>array(
            'auth'=>'',
            'principal'=>'',
            'keytab'=>'',
            'kbsuser'=>'',),
            'error_handling'=>array(
            'load_err_set'=>'continue',),
            'load_err_set'=>'',
            'part_config'=>array(
            '0'=>array(
            'part_index'=>1,
            'part_col_name'=>'null',
            'part_type'=>'ALL',
            'part_from_col_name'=>'null',
            'part_from_date_format'=>'null',),
            '1'=>array(
            'part_index'=>1,
            'part_col_name'=>'null',
            'part_type'=>'ALL',
            'part_from_col_name'=>'null',
            'part_from_date_format'=>'null',),),
            'dmltrack'=>array(
            'enable'=>false,
            'tmcol'=>'1',),),
            'kudu_partition_config'=>array(),
            'impala_connected'=>false,
            'init_offset_type'=>'earlist',
            'encrypt_column_switch'=>1,
            'encrypt_column_method'=>1,
            'encrypt_column_key'=>'',
            'encrypt_columns'=>array(
            '0'=>array(
            'user'=>'',
            'table'=>'',
            'column'=>'',),),
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
            'tgt_db_uuid'=>'1C5F3C4B-7333-9518-7349-9712BC9ED664',
            'name'=>'Frank Hernandez',
            'src_db_uuid'=>'B5CED857-275C-77C4-0561-887F7C890FF2',
            'tgt_type'=>'oracle',
            'init_offset'=>array(
            '0'=>array(
            'topic'=>'test',
            'offset'=>'1',
            'partition'=>'1',),),
            'topic'=>'test1',
            'dst_topic'=>'topic1',
        );
        
        
        $res = $heteroConsumer -> createConsumerRule($arr);
        $this->do_assert($res);
    }

    public function testModifyConsumerRule()
    {
        $heteroConsumer = $this -> heteroConsumer;
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
            'target_db_name'=>'Jose Garcia',
            'db_name'=>'Jose Wilson',
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
        
        
        $res = $heteroConsumer -> modifyConsumerRule($arr);
        $this->do_assert($res);
    }

    public function testDeleteConsumerRules()
    {
        $heteroConsumer = $this -> heteroConsumer;
        $arr = array(
            'force'=>true,
            'uuids'=>array(
            '0'=>'9BBdb3DB-DC2f-9CdD-C0E5-21Ee59fC6bEf',
            '1'=>'B74e8FED-428E-8Ab5-b9dA-01ABb9DAd63A',),
        );
        
        
        $res = $heteroConsumer -> deleteConsumerRules($arr);
        $this->do_assert($res);
    }

    public function testListConsumerStatus()
    {
        $heteroConsumer = $this -> heteroConsumer;
        $arr = array(
            'uuids'=>array(),
        );
        
        
        $res = $heteroConsumer -> listConsumerStatus($arr);
        $this->do_assert($res);
    }

    public function testStopConsumerRule()
    {
        $heteroConsumer = $this -> heteroConsumer;
        $arr = array(
            'uuid'=>'Eef6AD93-f518-d0DC-26f3-dC9FdB9859e9',
            'operate'=>'resume',
        );
        
        
        $res = $heteroConsumer -> stopConsumerRule($arr);
        $this->do_assert($res);
    }

    public function testResumeConsumerRule()
    {
        $heteroConsumer = $this -> heteroConsumer;
        $arr = array(
            'uuid'=>'0e563e51-6B6C-F4AC-E543-5B1bd25c9aAc',
            'operate'=>'resume',
        );
        
        
        $res = $heteroConsumer -> resumeConsumerRule($arr);
        $this->do_assert($res);
    }

    public function testListConsumerRules()
    {
        $heteroConsumer = $this -> heteroConsumer;
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
            'uuid'=>'4851E67C-9DAC-2478-3f17-Ee2bf0c1B819',),
        );
        
        
        $res = $heteroConsumer -> listConsumerRules($arr);
        $this->do_assert($res);
    }

    public function testDescribeConsumerRules()
    {
        $heteroConsumer = $this -> heteroConsumer;
        $arr = array(
            'uuid'=>'75DF8EA3-6480-4137-451B-731F04F368AF',
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $heteroConsumer -> describeConsumerRules($arr);
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