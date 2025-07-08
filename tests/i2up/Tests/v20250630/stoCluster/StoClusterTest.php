<?php
namespace i2up\Test\v20250630\stoCluster;

use i2up\stoCluster\v20250630\StoCluster;
use i2up\common\Auth;
                
class StoClusterTest extends \PHPUnit_Framework_TestCase
 {
    private $stoCluster;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> stoCluster = new StoCluster(new Auth());
    }

    public function testCreateDedupeStorageCluster()
    {
        $stoCluster = $this -> stoCluster;
        $arr = array(
            'cluster_name'=>'',
            'type'=>1,
            'data_warn'=>1,
            'data_full'=>1,
            'data_port'=>1,
            'node_list'=>array(
            '0'=>array(
            'node_name'=>'',
            'node_uuid'=>'',
            'dir'=>'',
            'addr'=>'',),),
        );
        
        
        $res = $stoCluster -> createDedupeStorageCluster($arr);
        $this->do_assert($res);
    }

    public function testModifyDedupeStorageCluster()
    {
        $stoCluster = $this -> stoCluster;
        $arr = array(
            'cluster_name'=>'',
            'type'=>1,
            'data_warn'=>1,
            'data_full'=>1,
            'data_port'=>1,
            'node_list'=>array(
            '0'=>array(
            'node_name'=>'',
            'node_uuid'=>'',
            'dir'=>'',
            'addr'=>'',),),
            'random_str'=>'',
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $stoCluster -> modifyDedupeStorageCluster($arr);
        $this->do_assert($res);
    }

    public function testDescribeDedupeStorageCluster()
    {
        $stoCluster = $this -> stoCluster;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $stoCluster -> describeDedupeStorageCluster($arr);
        $this->do_assert($res);
    }

    public function testListDedupeStorageCluster()
    {
        $stoCluster = $this -> stoCluster;
        $arr = array(
            'page'=>1,
            'limit'=>1,
        );
        
        
        $res = $stoCluster -> listDedupeStorageCluster($arr);
        $this->do_assert($res);
    }

    public function testDeleteDedupeStorageCluster()
    {
        $stoCluster = $this -> stoCluster;
        $arr = array(
            'cluster_uuids'=>array(),
            'force'=>'',
        );
        
        
        $res = $stoCluster -> deleteDedupeStorageCluster($arr);
        $this->do_assert($res);
    }

    public function testListDedupeStorageClusterStatus()
    {
        $stoCluster = $this -> stoCluster;
        $arr = array(
            'cluster_uuids'=>array(),
            'force_refresh'=>1,
        );
        
        
        $res = $stoCluster -> listDedupeStorageClusterStatus($arr);
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