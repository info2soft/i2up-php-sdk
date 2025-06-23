<?php
namespace i2up\Test\v20250630\active;

use i2up\active\v20250630\MongoDB;
use i2up\common\Auth;
                
class MongoDBTest extends \PHPUnit_Framework_TestCase
 {
    private $mongoDB;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> mongoDB = new MongoDB(new Auth());
    }

    public function testCreateMongoRule()
    {
        $mongoDB = $this -> mongoDB;
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
            'kafka'=>array(
            'binary_code'=>'',),
            'kafka_time_out'=>'',
            'part_load_balance'=>'',
            'kafka_message_encoding'=>'',
            'dbmap_topic'=>'',
            'db_user_map'=>'',),
        );
        
        
        $res = $mongoDB -> createMongoRule($arr);
        $this->do_assert($res);
    }

    public function testModifyMongoRule()
    {
        $mongoDB = $this -> mongoDB;
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
            'kafka'=>array(
            'binary_code'=>'',),
            'kafka_time_out'=>'',
            'part_load_balance'=>'',
            'kafka_message_encoding'=>'',),
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $mongoDB -> modifyMongoRule($arr);
        $this->do_assert($res);
    }

    public function testDeleteMongoRule()
    {
        $mongoDB = $this -> mongoDB;
        $arr = array(
            'uuids'=>array(),
            'force'=>'true',
        );
        
        
        $res = $mongoDB -> deleteMongoRule($arr);
        $this->do_assert($res);
    }

    public function testResumeMongoRule()
    {
        $mongoDB = $this -> mongoDB;
        $arr = array(
            'operate'=>'',
            'uuids'=>'',
        );
        
        
        $res = $mongoDB -> resumeMongoRule($arr);
        $this->do_assert($res);
    }

    public function testStopMongoRule()
    {
        $mongoDB = $this -> mongoDB;
        $arr = array(
            'operate'=>'',
            'uuids'=>'',
        );
        
        
        $res = $mongoDB -> stopMongoRule($arr);
        $this->do_assert($res);
    }

    public function testRestartMongoRule()
    {
        $mongoDB = $this -> mongoDB;
        $arr = array(
            'operate'=>'',
            'uuids'=>'',
        );
        
        
        $res = $mongoDB -> restartMongoRule($arr);
        $this->do_assert($res);
    }

    public function testListRule()
    {
        $mongoDB = $this -> mongoDB;
        $arr = array(
            'page'=>1,
            'limit'=>10,
            'search_field'=>'',
            'search_value'=>'',
            'group_uuid'=>'',
            'where_args'=>array(
            'rule_uuid'=>'',),
        );
        
        
        $res = $mongoDB -> listRule($arr);
        $this->do_assert($res);
    }

    public function testDescribeListRule()
    {
        $mongoDB = $this -> mongoDB;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $mongoDB -> describeListRule($arr);
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