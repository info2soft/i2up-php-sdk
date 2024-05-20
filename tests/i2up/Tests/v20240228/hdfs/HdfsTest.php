<?php
namespace i2up\Test\v20240228\hdfs;

use i2up\hdfs\v20240228\Hdfs;
use i2up\common\Auth;
                
class HdfsTest extends \PHPUnit_Framework_TestCase
 {
    private $hdfs;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> hdfs = new Hdfs(new Auth());
    }

    public function testCreateHdfs()
    {
        $hdfs = $this -> hdfs;
        $arr = array(
            'rule_name'=>'',
            'rule_type'=>1,
            'src_uuid'=>'',
            'tgt_uuid'=>'',
            'src_path'=>array(),
            'dest_path'=>array(),
            'filters'=>array(),
            'src_db'=>array(),
            'dest_db'=>array(),
            'filter_tables'=>array(),
            'sync_type'=>0,
            'overwrite'=>0,
            'band_width'=>'',
            'path_mapping_items'=>array(
            '0'=>array(
            'src_path'=>'',
            'dest_path'=>'',),),
            'retry_count'=>3,
            'time_interval'=>1,
            'batch_count'=>1,
            'alarm_threshold'=>1,
        );
        $res = $hdfs -> createHdfs($arr);
        $this->do_assert($res);
    }

    public function testModifyHdfs()
    {
        $hdfs = $this -> hdfs;
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111',
            'rule_name'=>'',
            'rule_type'=>1,
            'src_uuid'=>'',
            'tgt_uuid'=>'',
            'src_path'=>array(),
            'dest_path'=>array(),
            'filters'=>array(),
            'src_db'=>array(),
            'dest_db'=>array(),
            'filter_tables'=>array(),
            'sync_type'=>0,
            'overwrite'=>0,
            'band_width'=>'',
            'path_mapping_items'=>array(
            '0'=>array(
            'src_path'=>'',
            'dest_path'=>'',),),
            'random_str'=>'',
            'retry_count'=>1,
            'time_interval'=>1,
            'batch_count'=>1,
            'alarm_threshold'=>1,
        );
        $res = $hdfs -> modifyHdfs($arr);
        $this->do_assert($res);
    }

    public function testListHdfs()
    {
        $hdfs = $this -> hdfs;
        $arr = array(
            'search_value'=>'',
            'search_field'=>'',
            'limit'=>15,
            'page'=>1,
        );
        $res = $hdfs -> listHdfs($arr);
        $this->do_assert($res);
    }

    public function testDescribeHdfs()
    {
        $hdfs = $this -> hdfs;
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111',
        );
        $res = $hdfs -> describeHdfs($arr);
        $this->do_assert($res);
    }

    public function testDeleteHdfs()
    {
        $hdfs = $this -> hdfs;
        $arr = array(
            'uuids'=>array('11111111-1111-1111-1111-111111111111'),
            'force'=>0,
        );
        $res = $hdfs -> deleteHdfs($arr);
        $this->do_assert($res);
    }

    public function testStartHdfs()
    {
        $hdfs = $this -> hdfs;
        $arr = array(
            'rule_uuids'=>array('11111111-1111-1111-1111-111111111111'),
            'operate'=>'start',
        );
        $res = $hdfs -> StartHdfs($arr);
        $this->do_assert($res);
    }

    public function testStopHdfs()
    {
        $hdfs = $this -> hdfs;
        $arr = array(
            'rule_uuids'=>array('11111111-1111-1111-1111-111111111111'),
            'operate'=>'stop',
        );
        $res = $hdfs -> StopHdfs($arr);
        $this->do_assert($res);
    }

    public function testListHdfsStatus()
    {
        $hdfs = $this -> hdfs;
        $arr = array(
            'rule_uuids'=>array('11111111-1111-1111-1111-111111111111'),
            'force_refresh'=>1,
        );
        $res = $hdfs -> listHdfsStatus($arr);
        $this->do_assert($res);
    }

    private function do_assert($res)
    {
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}