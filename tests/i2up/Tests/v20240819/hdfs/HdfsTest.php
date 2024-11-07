<?php
namespace i2up\Test\v20240819\hdfs;

use i2up\hdfs\v20240819\Hdfs;
use i2up\common\Auth;
                
class HdfsTest extends \PHPUnit_Framework_TestCase
 {
    private $hdfs;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> hdfs = new Hdfs(new Auth());
    }

    public function testHdfsSummary()
    {
        $hdfs = $this -> hdfs;
        $arr = array();
        
        
        $res = $hdfs -> hdfsSummary($arr);
        $this->do_assert($res);
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
            'data_agent_switch'=>1,
            'data_agent_compress_type'=>1,
        );
        
        
        $res = $hdfs -> createHdfs($arr);
        $this->do_assert($res);
    }

    public function testModifyHdfs()
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
            'random_str'=>'',
            'retry_count'=>1,
            'time_interval'=>1,
            'batch_count'=>1,
            'alarm_threshold'=>1,
            'data_agent_switch'=>1,
            'data_agent_compress_type'=>1,
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
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
            'filter'=>array(
            'and_or'=>'',
            'rules'=>array(
            '0'=>array(
            'key'=>'',
            'value'=>'',
            'operator'=>'',),),),
        );
        
        
        $res = $hdfs -> listHdfs($arr);
        $this->do_assert($res);
    }

    public function testDescribeHdfs()
    {
        $hdfs = $this -> hdfs;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $hdfs -> describeHdfs($arr);
        $this->do_assert($res);
    }

    public function testDeleteHdfs()
    {
        $hdfs = $this -> hdfs;
        $arr = array(
            'uuids'=>array(),
            'force'=>0,
        );
        
        
        $res = $hdfs -> deleteHdfs($arr);
        $this->do_assert($res);
    }

    public function testStartHdfs()
    {
        $hdfs = $this -> hdfs;
        $arr = array(
            'rule_uuids'=>array(),
            'operate'=>'',
        );
        
        
        $res = $hdfs -> startHdfs($arr);
        $this->do_assert($res);
    }

    public function testStopHdfs()
    {
        $hdfs = $this -> hdfs;
        $arr = array(
            'rule_uuids'=>array(),
            'operate'=>'',
        );
        
        
        $res = $hdfs -> stopHdfs($arr);
        $this->do_assert($res);
    }

    public function testListHdfsStatus()
    {
        $hdfs = $this -> hdfs;
        $arr = array(
            'rule_uuids'=>array(),
            'force_refresh'=>1,
        );
        
        
        $res = $hdfs -> listHdfsStatus($arr);
        $this->do_assert($res);
    }

    public function testCreateHdfsCompare()
    {
        $hdfs = $this -> hdfs;
        $arr = array(
            'rule_name'=>'',
            'rule_type'=>2,
            'src_uuid'=>'',
            'tgt_uuid'=>'',
            'src_path'=>array(),
            'dest_path'=>array(),
            'filters'=>array(),
            'src_db'=>array(),
            'dest_db'=>array(),
            'filter_tables'=>array(),
            'path_mapping_items'=>array(
            '0'=>array(
            'src_path'=>'',
            'dest_path'=>'',),),
            'cmp_type'=>1,
            'include_tables'=>array(),
        );
        
        
        $res = $hdfs -> createHdfsCompare($arr);
        $this->do_assert($res);
    }

    public function testModifyHdfsCompare()
    {
        $hdfs = $this -> hdfs;
        $arr = array(
            'rule_name'=>'',
            'rule_type'=>2,
            'src_uuid'=>'',
            'tgt_uuid'=>'',
            'src_path'=>array(),
            'dest_path'=>array(),
            'filters'=>array(),
            'src_db'=>array(),
            'dest_db'=>array(),
            'filter_tables'=>array(),
            'path_mapping_items'=>array(
            '0'=>array(
            'src_path'=>'',
            'dest_path'=>'',),),
            'cmp_type'=>1,
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $hdfs -> modifyHdfsCompare($arr);
        $this->do_assert($res);
    }

    public function testListHdfsCompare()
    {
        $hdfs = $this -> hdfs;
        $arr = array(
            'search_value'=>'',
            'search_field'=>'',
            'limit'=>15,
            'page'=>1,
        );
        
        
        $res = $hdfs -> listHdfsCompare($arr);
        $this->do_assert($res);
    }

    public function testDescribeHdfsCompare()
    {
        $hdfs = $this -> hdfs;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $hdfs -> describeHdfsCompare($arr);
        $this->do_assert($res);
    }

    public function testDeleteHdfsCompare()
    {
        $hdfs = $this -> hdfs;
        $arr = array(
            'uuids'=>array(),
            'force'=>0,
        );
        
        
        $res = $hdfs -> deleteHdfsCompare($arr);
        $this->do_assert($res);
    }

    public function testStartHdfsCompare()
    {
        $hdfs = $this -> hdfs;
        $arr = array(
            'rule_uuids'=>array(),
            'operate'=>'',
        );
        
        
        $res = $hdfs -> startHdfsCompare($arr);
        $this->do_assert($res);
    }

    public function testStopHdfsCompare()
    {
        $hdfs = $this -> hdfs;
        $arr = array(
            'rule_uuids'=>array(),
            'operate'=>'',
        );
        
        
        $res = $hdfs -> stopHdfsCompare($arr);
        $this->do_assert($res);
    }

    public function testListHdfsCompareStatus()
    {
        $hdfs = $this -> hdfs;
        $arr = array(
            'rule_uuids'=>array(),
            'force_refresh'=>1,
        );
        
        
        $res = $hdfs -> listHdfsCompareStatus($arr);
        $this->do_assert($res);
    }

    public function testListHdfsCompareHistory()
    {
        $hdfs = $this -> hdfs;
        $arr = array(
            'page'=>1,
            'limit'=>1,
            'rule_uuid'=>'',
            'search_field'=>'',
            'search_value'=>'',
        );
        
        
        $res = $hdfs -> listHdfsCompareHistory($arr);
        $this->do_assert($res);
    }

    public function testDescribeHdfsCompareHistory()
    {
        $hdfs = $this -> hdfs;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $hdfs -> describeHdfsCompareHistory($arr);
        $this->do_assert($res);
    }

    public function testDeleteHdfsCompareHistory()
    {
        $hdfs = $this -> hdfs;
        $arr = array(
            'uuids[]'=>array(),
        );
        
        
        $res = $hdfs -> deleteHdfsCompareHistory($arr);
        $this->do_assert($res);
    }

    public function testListHdfsCompareResult()
    {
        $hdfs = $this -> hdfs;
        $arr = array(
            'page'=>1,
            'limit'=>1,
            'uuid'=>'',
            'search_field'=>'',
            'search_value'=>'',
            'order_by'=>'diff_name',
            'direction'=>'asc',
        );
        
        
        $res = $hdfs -> listHdfsCompareResult($arr);
        $this->do_assert($res);
    }

    public function testListHdfsCompareResultDetail()
    {
        $hdfs = $this -> hdfs;
        $arr = array(
            'page'=>1,
            'limit'=>1,
            'uuid'=>'',
            'diff_name'=>'',
        );
        
        
        $res = $hdfs -> listHdfsCompareResultDetail($arr);
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