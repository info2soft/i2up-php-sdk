<?php
namespace i2up\Test\ha;

use i2up\ha\v20190805\Cluster;
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
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
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
        $res = $cluster -> modifyHaCluster($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDeleteHaClusterHost()
    {
        $cluster = $this -> cluster;
        $arr = array(
            'cluster_uuid'=>'',
            'node_uuid'=>'',
        );
        $res = $cluster -> deleteHaClusterHost($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDeleteHaCluster()
    {
        $cluster = $this -> cluster;
        $arr = array(
            'cluster_uuids'=>array('11111111-1111-1111-1111-111111111111'),
            'force'=>1,
        );
        $res = $cluster -> deleteHaCluster($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListHaCluster()
    {
        $cluster = $this -> cluster;
        $arr = array(
            'page'=>1,
            'limit'=>10,
        );
        $res = $cluster -> listHaCluster($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
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
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeHaCluster()
    {
        $cluster = $this -> cluster;
        $arr = array(
        );
        $res = $cluster -> describeHaCluster($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testCheckDupName()
    {
        $cluster = $this -> cluster;
        $arr = array(
            'cluster_name'=>'A',
            'cluster_uuid'=>'7432C18E-4FF6-D06B-8081-ACA41F673ADD',
        );
        $res = $cluster -> checkDupName($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListHaClusterIpDuplicate()
    {
        $cluster = $this -> cluster;
        $arr = array(
            'cluster_uuid'=>'',
            'center_vir_ip'=>'',
        );
        $res = $cluster -> listHaClusterIpDuplicate($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListHaClusterID()
    {
        $cluster = $this -> cluster;
        $res = $cluster -> listHaClusterID();
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListHaClusterMonitor()
    {
        $cluster = $this -> cluster;
        $arr = array(
            'cluster_uuid'=>'',
            'label_uuids'=>array('11111111-1111-1111-1111-111111111111'),
        );
        $res = $cluster -> listHaClusterMonitor($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListNicInfo()
    {
        $cluster = $this -> cluster;
        $res = $cluster -> listNicInfo();
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListHaClusterStatus()
    {
        $cluster = $this -> cluster;
        $arr = array(
            'cluster_uuids'=>array('11111111-1111-1111-1111-111111111111'),
        );
        $res = $cluster -> listHaClusterStatus($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}