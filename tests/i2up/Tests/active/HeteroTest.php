<?php
namespace i2up\Test\active;

use i2up\active\v20200721\Hetero;
use i2up\common\Auth;
use i2up\Config;

class HeteroTest extends \PHPUnit_Framework_TestCase
{
    private $hetero;

    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $params = array(
            'username' => 'admin',
            'pwd' => 'Info1234',
            'cache_path' => __DIR__ . '/../',
            'ip' => Config::baseUrl
        );
        $auth = new Auth($params);
        $this -> hetero = new Hetero($auth);
    }

    public function testCreateHeteroRule()
    {
        $hetero = $this -> hetero;
        $arr = array(
            'name'=>'',
            'kfk_ver'=>'',
            'dst_node'=>'',
            'conn_type'=>'',
            'host'=>'',
            'port'=>'',
            'broker'=>'',
            'tabmap'=>array(),
            'consumer_thread_num'=>2,
            'actload_thread_num'=>4,
        );
        $res = $hetero -> createHeteroRule($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDeleteHeteroRule()
    {
        $hetero = $this -> hetero;
        $arr = array(
            'uuids'=>array(),
        );
        $res = $hetero -> deleteHeteroRule($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListHeteroRule()
    {
        $hetero = $this -> hetero;
        $arr = array(
            'page'=>1,
            'limit'=>10,
            'search_field'=>'kafka_name',
            'search_value'=>'',
        );
        $res = $hetero -> listHeteroRule($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testCreateHeteroTopic()
    {
        $hetero = $this -> hetero;
        $arr = array(
            'uuid'=>'',
        );
        $res = $hetero -> createHeteroTopic($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testCreateConsumer()
    {
        $hetero = $this -> hetero;
        $arr = array(
            'uuid'=>'',
        );
        $res = $hetero -> createConsumer($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testConsumer()
    {
        $hetero = $this -> hetero;
        $arr = array(
            'topic'=>'',
            'offset'=>'',
            'lines'=>'',
            'show_foward'=>1,
        );
        $res = $hetero -> consumer($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testCreateConsumerRule()
    {
        $hetero = $this -> hetero;
        $arr = array(
            'name'=>'',
            'src_db_uuid'=>'',
            'tgt_type'=>'',
            'init_offset'=>array(
                '0'=>array(
                    'topic'=>'',
                    'offset'=>'',
                    'partition'=>'',),),
            'modify'=>'false',
            'topic'=>'',
            'dst_topic'=>'',
            'tgt_db_uuid'=>'',
            'init_offset_type'=>'earlist',
            'tabmap'=>'{111:222}',
            'consumer_thread_num'=>'2',
            'actload_thread_num'=>'4',
            'kudu_partition_config'=>array(),
            'impala_connected'=>'',
            'config'=>array(
                'goldendb_config'=>array(
                    'machine_number'=>1,
                    'distribute_type'=>'',),
                'insert_date_config'=>array(),
                'primary_key_config'=>array(),),
        );
        $res = $hetero -> createConsumerRule($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testModifyConsumerRule()
    {
        $hetero = $this -> hetero;
        $arr = array(
            'init_offset_type'=>'earlist',
            'modify'=>'false',
            'tabmap'=>'{111:222}',
            'consumer_thread_num'=>'2',
            'actload_thread_num'=>'4',
            'tgt_db_uuid'=>'',
            'name'=>'',
            'src_db_uuid'=>'',
            'tgt_type'=>'',
            'init_offset'=>array(
                '0'=>array(
                    'topic'=>'',
                    'offset'=>'',
                    'partition'=>'',),),
            'topic'=>'',
            'dst_topic'=>'',
            'uuid'=>'@guuid',
            'user_uuid'=>'@guuid',
        );
        $res = $hetero -> modifyConsumerRule($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDeleteConsumerRules()
    {
        $hetero = $this -> hetero;
        $arr = array(
            'uuid'=>array(),
        );
        $res = $hetero -> deleteConsumerRules($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListConsumerStatus()
    {
        $hetero = $this -> hetero;
        $arr = array(
            'uuids'=>array(),
        );
        $res = $hetero -> listConsumerStatus($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testTempFuncName()
    {
        $hetero = $this -> hetero;
        $arr = array(
            'uuid'=>'',
            'operate'=>'',
        );
        $res = $hetero -> tempFuncName($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
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
                'uuid'=>'',),
        );
        $res = $hetero -> listConsumerRules($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeConsumerRules()
    {
        $hetero = $this -> hetero;
        $arr = array(
            'uuid'=>'',
        );
        $res = $hetero -> describeConsumerRules($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
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
                    'is_parent'=>'',
            'is_rule'=>'',
            'src_name'=>'',
            'dst_name'=>'',
            'rule_traffic'=>'',),),
        );
        $res = $hetero -> createHeteroGraph($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
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
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListHeteroGraph()
    {
        $hetero = $this -> hetero;
        $arr = array(
            'page'=>1,
            'limit'=>10,
        );
        $res = $hetero -> listHeteroGraph($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
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
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
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
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListGraphStatus()
    {
        $hetero = $this -> hetero;
        $arr = array(
            'rule_uuids'=>array(
                '0'=>array(
                    'uuid'=>'',
                    'src_type'=>'',),),
        );
        $res = $hetero -> listGraphStatus($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDeleteHeteroGraph()
    {
        $hetero = $this -> hetero;
        $arr = array(
            'graph_uuids'=>array(
                '0'=>array(
                    'graph_uuid'=>'e2C14bf5-4dc4-fEab-29A6-8EC183629f1E',
                    'rule_uuids'=>array(
                        '0'=>array(
                            'uuid'=>'ece7fcBe-E61c-dc46-AA6A-A3ddCCdf3CB4',
                            'is_rule'=>'1',
                            'rule_number'=>'4',
                            'src_type'=>'oracle',),),),),
            'is_whole'=>'1',
        );
        $res = $hetero -> deleteHeteroGraph($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
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
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListGraph()
    {
        $hetero = $this -> hetero;
        $arr = array(
            'graph_uuid'=>'',
        );
        $res = $hetero -> listGraph($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}