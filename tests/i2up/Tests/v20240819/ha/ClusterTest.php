<?php
namespace i2up\Test\v20240819\ha;

use i2up\ha\v20240819\Cluster;
use i2up\common\Auth;
                
class ClusterTest extends \PHPUnit_Framework_TestCase
 {
    private $cluster;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> cluster = new Cluster(new Auth());
    }

    public function testCreateHaCluster()
    {
        $cluster = $this -> cluster;
        $arr = array(
            'cluster_name'=>'cluster',
            'center_vir_ip'=>'2.2.2.1',
            'node_list'=>array(
            '0'=>array(
            'node_uuid'=>'AEC19FB5-8DC6-27E7-7E6A-7A60ADFA7187',
            'node_ip'=>'2.2.2.1',
            'label_list'=>array(
            '0'=>'AEC19FB5-8DC6-27E7-7E6A-7A60ADFA7187',
            '1'=>'AEC19FB5-8DC6-27E7-7E6A-7A60ADFA7187',),
            'ha_conf'=>array(
            'ha_vir_ip_adapter'=>'eth0',
            'ha_heartbeat_adapter'=>'eth0',
            'ha_heartbeat_ip'=>'2.2.21',
            'ha_heartbeat_netif'=>'{DEFF6069-58A0-4723-BD1E-E63CF9E5499D}',),
            'total_service_limit'=>'1',
            'total_monitor_limit'=>'10',
            'center_vir_ip_adapter'=>'eth0',),),
            'cluster_uuid'=>'AEC19FB5-8DC6-27E7-7E6A-7A60ADFA7187',
            'center_vir_mask'=>'255.255.255.0',
        );
        
        
        $res = $cluster -> createHaCluster($arr);
        $this->do_assert($res);
    }

    public function testModifyHaCluster()
    {
        $cluster = $this -> cluster;
        $arr = array(
            'cluster_name'=>'cluster',
            'center_vir_ip'=>'2.2.2.1',
            'node_list'=>array(
            '0'=>array(
            'node_uuid'=>'AEC19FB5-8DC6-27E7-7E6A-7A60ADFA7187',
            'node_ip'=>'2.2.2.1',
            'label_list'=>array(
            '0'=>'AEC19FB5-8DC6-27E7-7E6A-7A60ADFA7187',
            '1'=>'AEC19FB5-8DC6-27E7-7E6A-7A60ADFA7187',),
            'ha_conf'=>array(
            'ha_vir_ip_adapter'=>'eth0',
            'ha_heartbeat_adapter'=>'eth0',
            'ha_heartbeat_ip'=>'2.2.21',),
            'total_service_limit'=>'1',
            'total_monitor_limit'=>'10',
            'center_vir_ip_adapter'=>'eth0',),),
            'cluster_uuid'=>'AEC19FB5-8DC6-27E7-7E6A-7A60ADFA7187',
            'random_str'=>'AEC19FB5-8DC6-27E7-7E6A-7A60ADFA7187',
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $cluster -> modifyHaCluster($arr);
        $this->do_assert($res);
    }

    public function testDeleteHaClusterHost()
    {
        $cluster = $this -> cluster;
        $arr = array(
            'cluster_uuid'=>'',
            'node_uuid'=>'',
        );
        
        
        $res = $cluster -> deleteHaClusterHost($arr);
        $this->do_assert($res);
    }

    public function testDeleteHaCluster()
    {
        $cluster = $this -> cluster;
        $arr = array(
            'cluster_uuids'=>array(),
            'force'=>1,
        );
        
        
        $res = $cluster -> deleteHaCluster($arr);
        $this->do_assert($res);
    }

    public function testListHaCluster()
    {
        $cluster = $this -> cluster;
        $arr = array(
            'page'=>1,
            'limit'=>10,
        );
        
        
        $res = $cluster -> listHaCluster($arr);
        $this->do_assert($res);
    }

    public function testRegisterHaCluster()
    {
        $cluster = $this -> cluster;
        $arr = array(
            'cluster_name'=>'cluster',
            'center_vir_ip'=>'2.2.2.1',
            'node_list'=>array(
            '0'=>array(
            'node_uuid'=>'AEC19FB5-8DC6-27E7-7E6A-7A60ADFA7187',
            'node_ip'=>'2.2.2.1',
            'label_list'=>array(
            '0'=>'AEC19FB5-8DC6-27E7-7E6A-7A60ADFA7187',
            '1'=>'AEC19FB5-8DC6-27E7-7E6A-7A60ADFA7187',),
            'ha_conf'=>array(
            'ha_vir_ip_adapter'=>'eth0',
            'ha_heartbeat_adapter'=>'eth0',
            'ha_heartbeat_ip'=>'2.2.21',),
            'total_service_limit'=>'1',
            'total_monitor_limit'=>'10',
            'center_vir_ip_adapter'=>'eth0',),),
            'node_uuid'=>'AEC19FB5-8DC6-27E7-7E6A-7A60ADFA7187',
            'cluster_uuid'=>'AEC19FB5-8DC6-27E7-7E6A-7A60ADFA7187',
            'center_vir_mask'=>'255.255.255.0',
        );
        
        
        $res = $cluster -> registerHaCluster($arr);
        $this->do_assert($res);
    }

    public function testStartHaCluster()
    {
        $cluster = $this -> cluster;
        $arr = array(
            'operate'=>'start',
            'cluster_uuids'=>array(
            '0'=>'11111111-1111-1111-1111-111111111111',),
        );
        
        
        $res = $cluster -> startHaCluster($arr);
        $this->do_assert($res);
    }

    public function testStopHaCluster()
    {
        $cluster = $this -> cluster;
        $arr = array(
            'operate'=>'start',
            'cluster_uuids'=>array(
            '0'=>'11111111-1111-1111-1111-111111111111',),
        );
        
        
        $res = $cluster -> stopHaCluster($arr);
        $this->do_assert($res);
    }

    public function testDescribeHaCluster()
    {
        $cluster = $this -> cluster;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $cluster -> describeHaCluster($arr);
        $this->do_assert($res);
    }

    public function testCheckDupName()
    {
        $cluster = $this -> cluster;
        $arr = array(
            'cluster_name'=>'A',
            'cluster_uuid'=>'7432C18E-4FF6-D06B-8081-ACA41F673ADD',
        );
        
        
        $res = $cluster -> checkDupName($arr);
        $this->do_assert($res);
    }

    public function testListHaClusterIpDuplicate()
    {
        $cluster = $this -> cluster;
        $arr = array(
            'cluster_uuid'=>'',
            'center_vir_ip'=>'',
        );
        
        
        $res = $cluster -> listHaClusterIpDuplicate($arr);
        $this->do_assert($res);
    }

    public function testListHaClusterID()
    {
        $cluster = $this -> cluster;
        $arr = array();
        
        
        $res = $cluster -> listHaClusterID($arr);
        $this->do_assert($res);
    }

    public function testListHaClusterMonitor()
    {
        $cluster = $this -> cluster;
        $arr = array(
            'cluster_uuid'=>'',
            'label_uuids'=>array(),
        );
        
        
        $res = $cluster -> listHaClusterMonitor($arr);
        $this->do_assert($res);
    }

    public function testListNicInfo()
    {
        $cluster = $this -> cluster;
        $arr = array();
        
        
        $res = $cluster -> listNicInfo($arr);
        $this->do_assert($res);
    }

    public function testListHaClusterStatus()
    {
        $cluster = $this -> cluster;
        $arr = array(
            'cluster_uuids'=>array(),
        );
        
        
        $res = $cluster -> listHaClusterStatus($arr);
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