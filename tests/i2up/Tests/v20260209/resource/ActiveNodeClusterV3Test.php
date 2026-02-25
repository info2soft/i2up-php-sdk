<?php
namespace i2up\Test\v20260209\resource;

use i2up\resource\v20260209\ActiveNodeClusterV3;
use i2up\common\Auth;
                
class ActiveNodeClusterV3Test extends \PHPUnit_Framework_TestCase
 {
    private $activeNodeClusterV3;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> activeNodeClusterV3 = new ActiveNodeClusterV3(new Auth());
    }

    public function testListActiveNodeCluster()
    {
        $activeNodeClusterV3 = $this -> activeNodeClusterV3;
        $arr = array(
            'search_value'=>'',
            'search_field'=>'',
            'limit'=>'',
            'page'=>'',
            'filter_by_biz_grp'=>'',
        );
        
        
        $res = $activeNodeClusterV3 -> listActiveNodeCluster($arr);
        $this->do_assert($res);
    }

    public function testCreateActiveNodeCluster()
    {
        $activeNodeClusterV3 = $this -> activeNodeClusterV3;
        $arr = array(
            'cluster_name'=>'',
            'node_uuids'=>array(),
            'maintenance'=>1,
            'comment'=>'',
            'biz_grp_list'=>array(),
        );
        
        
        $res = $activeNodeClusterV3 -> createActiveNodeCluster($arr);
        $this->do_assert($res);
    }

    public function testGetActiveNodeClusterInfo()
    {
        $activeNodeClusterV3 = $this -> activeNodeClusterV3;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $activeNodeClusterV3 -> getActiveNodeClusterInfo($arr);
        $this->do_assert($res);
    }

    public function testModifyActiveNodeCluster()
    {
        $activeNodeClusterV3 = $this -> activeNodeClusterV3;
        $arr = array(
            'cluster_name'=>'',
            'node_uuids'=>array(),
            'maintenance'=>1,
            'comment'=>'',
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $activeNodeClusterV3 -> modifyActiveNodeCluster($arr);
        $this->do_assert($res);
    }

    public function testDeleteActiveNodeCluster()
    {
        $activeNodeClusterV3 = $this -> activeNodeClusterV3;
        $arr = array(
            'uuids'=>array(),
            'force'=>1,
        );
        
        
        $res = $activeNodeClusterV3 -> deleteActiveNodeCluster($arr);
        $this->do_assert($res);
    }

    public function testListClusterActiveNode()
    {
        $activeNodeClusterV3 = $this -> activeNodeClusterV3;
        $arr = array(
            'search_field'=>'',
            'order_by'=>'',
            'page'=>1,
            'limit'=>10,
            'search_value'=>'',
            'cluster_uuid'=>'',
        );
        
        
        $res = $activeNodeClusterV3 -> listClusterActiveNode($arr);
        $this->do_assert($res);
    }

    public function testAddNodeActiveNodeCluster()
    {
        $activeNodeClusterV3 = $this -> activeNodeClusterV3;
        $arr = array(
            'cluster_uuid'=>'',
            'node_uuids'=>array(),
        );
        
        
        $res = $activeNodeClusterV3 -> addNodeActiveNodeCluster($arr);
        $this->do_assert($res);
    }

    public function testRemoveNodeActiveNodeCluster()
    {
        $activeNodeClusterV3 = $this -> activeNodeClusterV3;
        $arr = array(
            'cluster_uuid'=>'',
            'node_uuids'=>array(),
        );
        
        
        $res = $activeNodeClusterV3 -> removeNodeActiveNodeCluster($arr);
        $this->do_assert($res);
    }

    public function testListActiveNodeClusterStatus()
    {
        $activeNodeClusterV3 = $this -> activeNodeClusterV3;
        $arr = array(
            'cluster_uuids'=>'FBD5Edfa-f4ff-4cB4-AAdE-C4553E3Da6F5',
        );
        
        
        $res = $activeNodeClusterV3 -> listActiveNodeClusterStatus($arr);
        $this->do_assert($res);
    }

    public function testSwitchAdtiveNodeClusterMaintenance()
    {
        $activeNodeClusterV3 = $this -> activeNodeClusterV3;
        $arr = array(
            'maintenance_switch'=>0,
            'uuid'=>'bBae9dCA-f6cc-BA66-bF59-8DFc395eD094',
        );
        
        
        $res = $activeNodeClusterV3 -> switchAdtiveNodeClusterMaintenance($arr);
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