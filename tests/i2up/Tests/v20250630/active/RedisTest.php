<?php
namespace i2up\Test\v20250630\active;

use i2up\active\v20250630\Redis;
use i2up\common\Auth;
                
class RedisTest extends \PHPUnit_Framework_TestCase
 {
    private $redis;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> redis = new Redis(new Auth());
    }

    public function testCreateRedisRule()
    {
        $redis = $this -> redis;
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
            'kafka'=>array(),
            'sync_mode'=>'是否全量同步',
        );
        
        
        $res = $redis -> createRedisRule($arr);
        $this->do_assert($res);
    }

    public function testModifyRedisRule()
    {
        $redis = $this -> redis;
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
        
        $res = $redis -> modifyRedisRule($arr);
        $this->do_assert($res);
    }

    public function testDeleteRedisRule()
    {
        $redis = $this -> redis;
        $arr = array(
            'uuids'=>array(),
            'force'=>'true',
        );
        
        
        $res = $redis -> deleteRedisRule($arr);
        $this->do_assert($res);
    }

    public function testResumeRedisRule()
    {
        $redis = $this -> redis;
        $arr = array(
            'operate'=>'',
            'uuids'=>'',
        );
        
        
        $res = $redis -> resumeRedisRule($arr);
        $this->do_assert($res);
    }

    public function testStopRedisRule()
    {
        $redis = $this -> redis;
        $arr = array(
            'operate'=>'',
            'uuids'=>'',
        );
        
        
        $res = $redis -> stopRedisRule($arr);
        $this->do_assert($res);
    }

    public function testRestartRedisRule()
    {
        $redis = $this -> redis;
        $arr = array(
            'operate'=>'',
            'uuids'=>'',
        );
        
        
        $res = $redis -> restartRedisRule($arr);
        $this->do_assert($res);
    }

    public function testListRedisRule()
    {
        $redis = $this -> redis;
        $arr = array(
            'page'=>1,
            'limit'=>10,
            'search_field'=>'',
            'search_value'=>'',
            'group_uuid'=>'',
            'where_args'=>array(
            'rule_uuid'=>'',),
        );
        
        
        $res = $redis -> listRedisRule($arr);
        $this->do_assert($res);
    }

    public function testDescribeRedisRule()
    {
        $redis = $this -> redis;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $redis -> describeRedisRule($arr);
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