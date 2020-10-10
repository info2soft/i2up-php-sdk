<?php
namespace i2up\Test\distributor;

use i2up\distributor\v20200721\Group;
use i2up\common\Auth;
use i2up\Config;

class GroupTest extends \PHPUnit_Framework_TestCase
{
    private $group;

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
        $this -> group = new Group($auth);
    }

    public function testCreateNodeGroup()
    {
        $group = $this -> group;
        $arr = array(
            'group_name'=>'2',
            'group_type'=>2,
            'group_parent'=>'AB7813ED-F9D2-BC45-B3A6-E13E409E8A13',
            'group_desc'=>'xxx',
            'send_files'=>array(
                '0'=>array(
                    'name'=>'港交所行情',
                    'group'=>0,
                    'enable'=>0,
                    'dir'=>0,
                    'recursive'=>0,
                    'path'=>'C:\HGInfo\HGHQ.DBF',
                    'filter_by_fn'=>'',
                    'event_trigger'=>0,
                    'time_check'=>0,
                    'checksum_func'=>'block',
                    'scan'=>200,
                    'compress'=>4,
                    'filter_by_ft'=>'0|0',
                    'work_time'=>'00-00-00|23-59-59',
                    'play'=>0,),),
            'recv_files'=>array(
                '0'=>array(
                    'name'=>'港交所行情',
                    'path'=>'',
                    'timeout'=>0,
                    'chk_tm_am'=>'09-00-00|11-30-00',
                    'chk_tm_pm'=>'13-00-00|15-30-00',
                    'record'=>0,
                    'group'=>1,
                    'enable'=>0,
                    'guard'=>0,
                    'watch'=>0,),),
        );
        $res = $group -> createNodeGroup($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListNodeGroup()
    {
        $group = $this -> group;
        $arr = array(
            'type'=>'',
            'limit'=>1,
            'page'=>1,
        );
        $res = $group -> listNodeGroup($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeNodeGroup()
    {
        $group = $this -> group;
        $arr = array(
        );
        $res = $group -> describeNodeGroup($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testModifyNodeGroup()
    {
        $group = $this -> group;
        $arr = array(
            'group_name'=>'2',
            'group_type'=>'2',
            'group_parent'=>'AB7813ED-F9D2-BC45-B3A6-E13E409E8A13',
            'group_desc'=>'xxx',
            'send_files'=>array(
                '0'=>array(
                    'name'=>'港交所行情',
                    'group'=>0,
                    'enable'=>0,
                    'dir'=>0,
                    'recursive'=>0,
                    'path'=>'C:\HGInfo\HGHQ.DBF',
                    'filter_by_fn'=>'',
                    'event_trigger'=>0,
                    'time_check'=>0,
                    'checksum_func'=>'block',
                    'scan'=>200,
                    'compress'=>4,
                    'filter_by_ft'=>'0|0',
                    'work_time'=>'00-00-00|23-59-59',
                    'play'=>0,),),
            'recv_files'=>array(
                '0'=>array(
                    'name'=>'港交所行情',
                    'path'=>'',
                    'timeout'=>0,
                    'chk_tm_am'=>'09-00-00|11-30-00',
                    'chk_tm_pm'=>'13-00-00|15-30-00',
                    'record'=>0,
                    'group'=>1,
                    'enable'=>0,
                    'guard'=>0,
                    'watch'=>0,),),
            'random_str'=>'',
        );
        $res = $group -> modifyNodeGroup($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDeleteNodeGroup()
    {
        $group = $this -> group;
        $arr = array(
        );
        $res = $group -> deleteNodeGroup($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}