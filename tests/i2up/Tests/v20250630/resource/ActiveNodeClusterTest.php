<?php
namespace i2up\Test\v20250630\resource;

use i2up\resource\v20250630\ActiveNodeCluster;
use i2up\common\Auth;
                
class ActiveNodeClusterTest extends \PHPUnit_Framework_TestCase
 {
    private $activeNodeCluster;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> activeNodeCluster = new ActiveNodeCluster(new Auth());
    }

    public function testListActiveNodeCluster()
    {
        $activeNodeCluster = $this -> activeNodeCluster;
        $arr = array(
            'search_value'=>'',
            'search_field'=>'',
            'limit'=>'',
            'page'=>'',
            'filter_by_biz_grp'=>'',
        );
        
        
        $res = $activeNodeCluster -> listActiveNodeCluster($arr);
        $this->do_assert($res);
    }

    public function testCreateActiveNodeCluster()
    {
        $activeNodeCluster = $this -> activeNodeCluster;
        $arr = array(
            'cluster_name'=>'',
            'node_uuids'=>array(),
            'maintenance'=>1,
            'comment'=>'',
            'biz_grp_list'=>array(),
        );
        
        
        $res = $activeNodeCluster -> createActiveNodeCluster($arr);
        $this->do_assert($res);
    }

    public function testGetActiveNodeClusterInfo()
    {
        $activeNodeCluster = $this -> activeNodeCluster;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $activeNodeCluster -> getActiveNodeClusterInfo($arr);
        $this->do_assert($res);
    }

    public function testModifyActiveNodeCluster()
    {
        $activeNodeCluster = $this -> activeNodeCluster;
        $arr = array(
            'cluster_name'=>'',
            'node_uuids'=>array(),
            'maintenance'=>1,
            'comment'=>'',
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $activeNodeCluster -> modifyActiveNodeCluster($arr);
        $this->do_assert($res);
    }

    public function testDeleteActiveNodeCluster()
    {
        $activeNodeCluster = $this -> activeNodeCluster;
        $arr = array(
            'uuids'=>array(),
            'force'=>1,
        );
        
        
        $res = $activeNodeCluster -> deleteActiveNodeCluster($arr);
        $this->do_assert($res);
    }

    public function testListClusterActiveNode()
    {
        $activeNodeCluster = $this -> activeNodeCluster;
        $arr = array(
            'search_field'=>'',
            'order_by'=>'',
            'page'=>1,
            'limit'=>10,
            'search_value'=>'',
            'cluster_uuid'=>'',
        );
        
        
        $res = $activeNodeCluster -> listClusterActiveNode($arr);
        $this->do_assert($res);
    }

    public function testAddNodeActiveNodeCluster()
    {
        $activeNodeCluster = $this -> activeNodeCluster;
        $arr = array(
            'cluster_uuid'=>'',
            'node_uuids'=>array(),
        );
        
        
        $res = $activeNodeCluster -> addNodeActiveNodeCluster($arr);
        $this->do_assert($res);
    }

    public function testRemoveNodeActiveNodeCluster()
    {
        $activeNodeCluster = $this -> activeNodeCluster;
        $arr = array(
            'cluster_uuid'=>'',
            'node_uuids'=>array(),
        );
        
        
        $res = $activeNodeCluster -> removeNodeActiveNodeCluster($arr);
        $this->do_assert($res);
    }

    public function testListActiveNodeClusterStatus()
    {
        $activeNodeCluster = $this -> activeNodeCluster;
        $arr = array(
            'cluster_uuids'=>'32c78F0c-5a8e-6B7c-3F2B-16fd2a93edd7',
        );
        
        
        $res = $activeNodeCluster -> listActiveNodeClusterStatus($arr);
        $this->do_assert($res);
    }

    public function testSwitchAdtiveNodeClusterMaintenance()
    {
        $activeNodeCluster = $this -> activeNodeCluster;
        $arr = array(
            'maintenance_switch'=>0,
            'uuid'=>'bBae9dCA-f6cc-BA66-bF59-8DFc395eD094',
        );
        
        
        $res = $activeNodeCluster -> switchAdtiveNodeClusterMaintenance($arr);
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