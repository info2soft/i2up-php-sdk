<?php
namespace i2up\Test\v20240228\resource;

use i2up\resource\v20240228\VirtualizationSupport;
use i2up\common\Auth;
                
class VirtualizationSupportTest extends \PHPUnit_Framework_TestCase
 {
    private $virtualizationSupport;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> virtualizationSupport = new VirtualizationSupport(new Auth());
    }

    public function testCreateVp()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'comment' => '',
            'config_addr' => '192.168.72.75',
            'config_port' => 58083,
            'os_pwd' => '12345678',
            'os_usr' => 'root',
            'vp_addr' => '192.168.88.107',
            'vp_name' => 'test',
            'vp_type' => 0,
            'bind_lic_list' => array(),
            'biz_grp_list' => array(),
            'use_credential' => 0,
            'cred_uuid' => '',
            'is_drill' => 1,
            'drill_config' => array(
                'proxy_name' => '',
                'proxy_ip' => '',
                'proxy_mask' => '',
                'proxy_gw' => '',
                'new_hostname' => '',
                'new_ds' => '',
                'new_dc' => '',
                'new_dcmor' => '',
                'network_name' => '',
                'network_id' => '',
                'rpc_port' => '',
                'orch_vm_network_name' => '',
                'orch_vm_network_id' => '',
                'system_uuid' => '',
                'subnet_name' => '',
                'security_group_name' => '',
                'orch_vm_subnet_name' => '',
                'orch_security_group_name' => '',
                'subnet_cidr' => '',
                'location' => '',
                'location_name' => '',
            ),
            'is_backup_center' => 1,
            'cc_ip_uuid' => '',
            'maintenance' => 0,
            'connect_port' => 443,
            'data_transmission_port' => 902,
            'is_ssl' => 1,
            'monitor_storage_switch' => 1,
            'monitor_storages' => array(
                '0' => array(
                    'name' => '',
                    'storage_id' => '',
                ),
            ),
            'monitor_storage_threshold' => 1,
        );
        $res = $virtualizationSupport -> createVp($arr);
        $this->do_assert($res);
    }

    public function testDescribeVp()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111'
        );
        $res = $virtualizationSupport -> describeVp($arr);
        $this->do_assert($res);
    }

    public function testModifyVp()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111',
            'comment' => '',
            'config_addr' => '192.168.72.75',
            'config_port' => 58083,
            'os_pwd' => '12345678',
            'os_usr' => 'root',
            'vp_addr' => '192.168.88.107',
            'vp_name' => 'test1',
            'vp_type' => 0,
            'bind_lic_list' => array(),
            'biz_grp_list' => array(),
            'random_str' => '11111111-1111-1111-1111-111111111111',
            'use_credential' => 0,
            'cred_uuid' => '',
            'is_drill' => 1,
            'drill_config' => array(
                'proxy_name' => '',
                'proxy_ip' => '',
                'proxy_mask' => '',
                'proxy_gw' => '',
                'new_hostname' => '',
                'new_ds' => '',
                'new_dc' => '',
                'new_dcmor' => '',
                'network_name' => '',
                'network_id' => '',
                'system_uuid' => '',
                'orch_vm_network_name' => '',
                'orch_vm_network_id' => '',
                'rpc_port' => '',
                'subnet_name' => '',
                'security_group_name' => '',
                'orch_vm_subnet_name' => '',
                'orch_security_group_name' => '',
                'location' => '',
                'location_name' => '',
            ),
            'maintenance' => 0,
            'is_backup_center' => 0,
            'monitor_storage_switch' => 1,
            'monitor_storages' => array(
                '0' => array(
                    'name' => '',
                    'storage_id' => '',
                ),
            ),
            'monitor_storage_threshold' => 1,
        );
        $res = $virtualizationSupport -> modifyVp($arr);
        $this->do_assert($res);
    }

    public function testListVp()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'page'=>1,
            'limit'=>10,
            'search_field'=>'',
            'search_value'=>'',
            'where_args[vp_type]'=>'',
        );
        $res = $virtualizationSupport -> listVp($arr);
        $this->do_assert($res);
    }

    public function testListVpStatus()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'vp_uuids'=>array(
                '0'=>'11111111-1111-1111-1111-111111111111',
            ),
            'force_refresh'=>1,
        );
        $res = $virtualizationSupport -> listVpStatus($arr);
        $this->do_assert($res);
    }

    public function testUpdateDataAgentVp()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'operate'=>'update_data_agent',
            'vp_uuids'=>array(
                '0'=>'11111111-1111-1111-1111-111111111111',
            ),
            'switch'=>0,
        );
        $res = $virtualizationSupport -> updateDataAgentVp($arr);
        $this->do_assert($res);
    }

    public function testMaintainVp()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'operate'=>'maintain',
            'vp_uuids'=>array(
                '0'=>'11111111-1111-1111-1111-111111111111',
            ),
            'switch'=>0,
        );
        $res = $virtualizationSupport -> maintainVp($arr);
        $this->do_assert($res);
    }

    public function testRenewKeyVp()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'operate'=>'renew_key',
            'vp_uuids'=>array(
                '0'=>'11111111-1111-1111-1111-111111111111',
            ),
            'switch'=>0,
        );
        $res = $virtualizationSupport -> renewKeyVp($arr);
        $this->do_assert($res);
    }

    public function testDeleteVp()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'vp_uuids'=>array(
                '0'=>'11111111-1111-1111-1111-111111111111',
            ),
        );
        $res = $virtualizationSupport -> deleteVp($arr);
        $this->do_assert($res);
    }

    public function testList()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111',
            'type'=>'',
            'id'=>'',
            'view_type'=>'',
            'search_name'=>'',
            'force_rpc'=>'',
            'show_vm'=>'',
            'project_id'=>'',
            'region_id'=>'',
            'vm_uuid'=>'',
            'vm_ref'=>'',
        );
        $res = $virtualizationSupport -> list($arr);
        $this->do_assert($res);
    }

    public function testListVmNoHierarchy()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111',
            'search_name'=>'',
            'force_rpc'=>'',
            'vm_uuid'=>'',
            'vm_ref'=>'',
        );
        $res = $virtualizationSupport -> listVmNoHierarchy($arr);
        $this->do_assert($res);
    }

    public function testGetVmInfo()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'vp_uuid'=>'',
            'vm_id'=>'',
            'region_id'=>'',
            'project_id'=>'',
            'vm_name'=>'',
        );
        $res = $virtualizationSupport -> getVmInfo($arr);
        $this->do_assert($res);
    }

    public function testDescribeVpAttribute()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111'
        );
        $res = $virtualizationSupport -> describeVpAttribute($arr);
        $this->do_assert($res);
    }

    public function testListBakVer()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111',
            'bk_path'=>'H:\\vp_bk5\test2_BAK_vm-11880_192.168.88.22\\',
            'bk_uuid'=>'67E33CDB-D75B-15B3-367D-50C764F5A26F',
            'rule_uuid'=>'',
            'sto_uuid'=>'',
            'bucket'=>'',
            'bucket_path'=>'',
        );
        $res = $virtualizationSupport -> listBakVer($arr);
        $this->do_assert($res);
    }

    public function testListBakVerInfo()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111',
            'bk_uuid'=>'67E33CDB-D75B-15B3-367D-50C764F5A26F',
            'bk_path'=>'H:\vp_bk5\testRC1_BAK_99_192.168.85.139',
            'ver_sig'=>'A59DB76E-E33D-4E22-BB08-59723B1FC539',
            'group_uuid'=>'',
            'time'=>'2019-01-07_13-10-45',
            'bucket'=>'',
            'sto_uuid'=>'',
            'bucket_path'=>'',
        );
        $res = $virtualizationSupport -> listBakVerInfo($arr);
        $this->do_assert($res);
    }

    public function testListDatastoreFile()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111',
            'dir_file'=>'/',
            'ds_name'=>'datastore107（1）',
            'dc_name'=>'ha-datacenter',
        );
        $res = $virtualizationSupport -> listDatastoreFile($arr);
        $this->do_assert($res);
    }

    public function testListDatacenter()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111'
        );
        $res = $virtualizationSupport -> listDatacenter($arr);
        $this->do_assert($res);
    }

    public function testListDatacenterHost()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111',
            'dc_name'=>'ha-datacenter',
            'dc_mor'=>'ha-datacenter',
        );
        $res = $virtualizationSupport -> listDatacenterHost($arr);
        $this->do_assert($res);
    }

    public function testListResourcePool()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111',
            'id'=>'',
            'type'=>'',
        );
        $res = $virtualizationSupport -> listResourcePool($arr);
        $this->do_assert($res);
    }

    public function testListDatastore()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111',
            'host_name'=>'dev-esxi.6.6.6',
            'path'=>'/',
            'scope'=>'',
            'dc_name'=>'',
        );
        $res = $virtualizationSupport -> listDatastore($arr);
        $this->do_assert($res);
    }

    public function testListDatastoreInfo()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111',
            'ds_name'=>'datastore107（1）',
        );
        $res = $virtualizationSupport -> listDatastoreInfo($arr);
        $this->do_assert($res);
    }

    public function testCreateDatastore()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111',
            'host_name'=>'dev-esxi.6.6.6',
            'path'=>'C:\\abc\\',
        );
        $res = $virtualizationSupport -> createDatastore($arr);
        $this->do_assert($res);
    }

    public function testListDatastoreDir()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111',
            'host_name'=>'',
            'scope'=>'',
            'is_fusion_storage'=>0,
        );
        $res = $virtualizationSupport -> listDatastoreDir($arr);
        $this->do_assert($res);
    }

    public function testListVmDisk()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111',
            'vm_ref'=>'vm-1376',
            'region_id'=>'',
            'project_id'=>'',
        );
        $res = $virtualizationSupport -> listVmDisk($arr);
        $this->do_assert($res);
    }

    public function testListNetwork()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111',
            'host_name'=>'',
            'dc_name'=>'',
        );
        $res = $virtualizationSupport -> listNetwork($arr);
        $this->do_assert($res);
    }

    public function testDrilConfigInfo()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'vp_addr'=>'',
            'vp_type'=>'',
            'use_credential'=>'',
            'cred_uuid'=>'',
            'os_usr'=>'',
            'os_pwd'=>'',
            'npsvr_uuid'=>'',
            'vp_uuid'=>'',
        );
        $res = $virtualizationSupport -> drilConfigInfo($arr);
        $this->do_assert($res);
    }

    public function testDl()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'type'=>'vm_ip_csv',
            'vp_uuid'=>'',
        );
        $res = $virtualizationSupport -> dl($arr);
        $this->do_assert($res);
    }

    public function testImportVmIpMapping()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'vp_uuid'=>'',
        );
        $res = $virtualizationSupport -> importVmIpMapping($arr);
        $this->do_assert($res);
    }

    public function testListNetworkInfo()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'vp_uuid'=>'',
            'vm_ids'=>array('1'),
            'region_id'=>'',
            'project_id'=>'',
        );
        $res = $virtualizationSupport -> listNetworkInfo($arr);
        $this->do_assert($res);
    }

    public function testDescribeOsVersion()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'vp_uuid'=>'',
            'os_versions'=>array(),
        );
        $res = $virtualizationSupport -> describeOsVersion($arr);
        $this->do_assert($res);
    }

    public function testListSecurityGroup()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'vp_uuid'=>'',
            'dc_name'=>'',
        );
        $res = $virtualizationSupport -> listSecurityGroup($arr);
        $this->do_assert($res);
    }

    public function testListPhysicalInterface()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'vp_uuid'=>'',
            'resource_pool_id'=>'',
            'host_name'=>'',
        );
        $res = $virtualizationSupport -> listPhysicalInterface($arr);
        $this->do_assert($res);
    }

    public function testTgtVmStatusInfo()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'rule_uuids'=>array('11111111-1111-1111-1111-111111111111'),
        );
        $res = $virtualizationSupport -> tgtVmStatusInfo($arr);
        $this->do_assert($res);
    }

    public function testListVmStatus()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'vp_uuid'=>'',
            'vm_uuids'=>array('11111111-1111-1111-1111-111111111111'),
        );
        $res = $virtualizationSupport -> listVmStatus($arr);
        $this->do_assert($res);
    }

    public function testListPlatformStorage()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'vp_uuid'=>'FC151595-EB90-86F5-B659-CA787753CA5D',
        );
        $res = $virtualizationSupport -> listPlatformStorage($arr);
        $this->do_assert($res);
    }

    public function testPlatformAuthorize()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'vp_storage' => array(
                '0' => array(
                    'uuid' => 'FC151595-EB90-86F5-B659-CA787753CA5D',
                    'enabled' => 0,
                    'capacity' => '10',
                ),
            ),
            'vp_uuid' => 'DC151595-EB90-86F5-B659-CA787751CA5D',
        );
        $res = $virtualizationSupport -> platformAuthorize($arr);
        $this->do_assert($res);
    }

    public function testListVpStorage()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'where_args[enabled]'=>'1',
        );
        $res = $virtualizationSupport -> listVpStorage($arr);
        $this->do_assert($res);
    }

    public function testListBakVerByIp()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'bk_uuid'=>'',
            'bk_path'=>'',
            'npsvr_uuid'=>'',
        );
        $res = $virtualizationSupport -> listBakVerByIp($arr);
        $this->do_assert($res);
    }

    public function testListBakVerInfoByIp()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'time'=>'',
            'ver_sig'=>'',
            'bk_uuid'=>'',
            'bk_path'=>'',
            'npsvr_uuid'=>'',
        );
        $res = $virtualizationSupport -> listBakVerInfoByIp($arr);
        $this->do_assert($res);
    }

    public function testTestNode()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'node_uuid'=>'5765E77A-C658-9AF1-83D0-1897B8A5850E',
            'cred_uuid'=>'4165E77A-C658-9AF1-83D0-1897B8A5850E',
            'trans_type'=>'FTP',
            'vp_uuid'=>'6765E77A-C658-9AF1-83D0-1897B8A5850E',
        );
        $res = $virtualizationSupport -> testNode($arr);
        $this->do_assert($res);
    }

    public function testGetTargetVmInfo()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'rule_uuids'=>array('11111111-1111-1111-1111-111111111111'),
            'group_uuid'=>'',
            'rule_type'=>'',
        );
        $res = $virtualizationSupport -> getTargetVmInfo($arr);
        $this->do_assert($res);
    }

    public function testListDiskType()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'vp_uuid'=>'',
            'region_id'=>'',
            'project_id'=>'',
        );
        $res = $virtualizationSupport -> listDiskType($arr);
        $this->do_assert($res);
    }

    public function testDiscoveryVm()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'vp_uuid' => '',
            'match_policy' => array(
                'vm_name' => array(
                    '0' => array(
                        'type' => '',
                        'value' => '',
                    ),
                ),
                'location' => array(
                    '0' => array(
                        'type' => '',
                        'value' => '',
                    ),
                ),
                'folder' => array(
                    '0' => array(
                        'type' => '',
                        'value' => '',
                    ),
                ),
            ),
            'project_id' => '',
            'region_id' => '',
        );
        $res = $virtualizationSupport -> discoveryVm($arr);
        $this->do_assert($res);
    }

    public function testListPools()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111'
        );
        $res = $virtualizationSupport -> listPools($arr);
        $this->do_assert($res);
    }

    public function testListPoolHosts()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111',
            'pool_id'=>'',
        );
        $res = $virtualizationSupport -> listPoolHosts($arr);
        $this->do_assert($res);
    }

    public function testListAioClusters()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111',
            'region_id'=>'',
        );
        $res = $virtualizationSupport -> listAioClusters($arr);
        $this->do_assert($res);
    }

    public function testListAioHosts()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111',
            'cluster_id'=>'',
        );
        $res = $virtualizationSupport -> listAioHosts($arr);
        $this->do_assert($res);
    }

    public function testListAioPools()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111',
            'host_id'=>'',
        );
        $res = $virtualizationSupport -> listAioPools($arr);
        $this->do_assert($res);
    }

    public function testDescribeAioHostCapability()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111',
            'host_id'=>'',
        );
        $res = $virtualizationSupport -> describeAioHostCapability($arr);
        $this->do_assert($res);
    }

    public function testListScpHosts()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111',
            'resource_pool_id'=>'',
            'datastore_name'=>'',
        );
        $res = $virtualizationSupport -> listScpHosts($arr);
        $this->do_assert($res);
    }

    public function testTempFuncName()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'rule_uuid'=>'',
        );
        $res = $virtualizationSupport -> archerVmConsole($arr);
        $this->do_assert($res);
    }

    private function do_assert($res)
    {
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}