<?php
namespace i2up\Test\v20250630\resource;

use i2up\resource\v20250630\StoragePool;
use i2up\common\Auth;
                
class StoragePoolTest extends \PHPUnit_Framework_TestCase
 {
    private $storagePool;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> storagePool = new StoragePool(new Auth());
    }

    public function testAvailablePoolMemberList()
    {
        $storagePool = $this -> storagePool;
        $arr = array(
            'config_addr'=>'',
            'pool_type'=>'BlockStorage',
            'storage_conf_ip'=>'',
            'os_user'=>'',
            'os_pwd'=>'',
            'pool_uuid'=>'',
            'storage_conf_user'=>'',
            'storage_conf_password'=>'',
        );
        
        
        $res = $storagePool -> availablePoolMemberList($arr);
        $this->do_assert($res);
    }

    public function testCreateStoragePool()
    {
        $storagePool = $this -> storagePool;
        $arr = array(
            'pool_name'=>'',
            'pool_type'=>'',
            'ip'=>'',
            'disk_list'=>array(
            '0'=>array(
            'name'=>'',
            'size'=>'',
            'type'=>'',),),
            'description'=>'',
            'data_addr'=>'',
            'storage_conf_ip'=>'',
            'compress'=>0,
            'dedup'=>0,
            'fc_as_target'=>0,
            'wwpn_info'=>array(),
            'tape_uuid'=>'',
            'physical_name'=>'',
            'node_uuid'=>'',
            'bind_lic_list'=>array(),
            'os_user'=>'',
            'os_pwd'=>'',
            'monitor_settings'=>array(
            'warn_sw'=>0,
            'usage_threshold'=>80,),
            'storage_conf_user'=>'',
            'storage_conf_password'=>'',
            'dev_id'=>'',
        );
        
        
        $res = $storagePool -> createStoragePool($arr);
        $this->do_assert($res);
    }

    public function testModifyStoragePool()
    {
        $storagePool = $this -> storagePool;
        $arr = array(
            'pool_name'=>'',
            'pool_type'=>'',
            'ip'=>'',
            'disk_list'=>array(
            '0'=>array(
            'name'=>'',
            'size'=>'',
            'type'=>'',),),
            'random_str'=>'',
            'description'=>'',
            'data_addr'=>'',
            'compress'=>0,
            'dedup'=>0,
            'fc_as_target'=>0,
            'wwpn_info'=>array(),
            'tape_uuid'=>'',
            'physical_name'=>'',
            'node_uuid'=>'',
            'os_user'=>'',
            'os_pwd'=>'',
            'monitor_settings'=>array(
            'warn_sw'=>'',
            'usage_threshold'=>'',),
            'storage_conf_user'=>'',
            'storage_conf_password'=>'',
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $storagePool -> modifyStoragePool($arr);
        $this->do_assert($res);
    }

    public function testStoragePoolList()
    {
        $storagePool = $this -> storagePool;
        $arr = array(
            'page'=>'',
            'limit'=>'',
        );
        
        
        $res = $storagePool -> storagePoolList($arr);
        $this->do_assert($res);
    }

    public function testDescribeStoragePool()
    {
        $storagePool = $this -> storagePool;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $storagePool -> describeStoragePool($arr);
        $this->do_assert($res);
    }

    public function testDeleteStoragePool()
    {
        $storagePool = $this -> storagePool;
        $arr = array(
            'pool_uuids'=>array(),
            'force'=>1,
        );
        
        
        $res = $storagePool -> deleteStoragePool($arr);
        $this->do_assert($res);
    }

    public function testListStoragePoolStatus()
    {
        $storagePool = $this -> storagePool;
        $arr = array(
            'pool_uuids'=>array(),
            'force_refresh'=>'',
        );
        
        
        $res = $storagePool -> listStoragePoolStatus($arr);
        $this->do_assert($res);
    }

    public function testListHbaInfo()
    {
        $storagePool = $this -> storagePool;
        $arr = array(
            'ip'=>'',
            'os_user'=>'',
            'os_pwd'=>'',
        );
        
        
        $res = $storagePool -> listHbaInfo($arr);
        $this->do_assert($res);
    }

    public function testDeleteFcTarget()
    {
        $storagePool = $this -> storagePool;
        $arr = array(
            'pool_uuid'=>'',
            'wwpn'=>'',
            'force'=>1,
        );
        
        
        $res = $storagePool -> deleteFcTarget($arr);
        $this->do_assert($res);
    }

    public function testResetStoragePool()
    {
        $storagePool = $this -> storagePool;
        $arr = array(
            'pool_uuids'=>array(),
            'operate'=>'',
            'add_disk_list'=>array(
            '0'=>array(
            'name'=>'/dev/sdb',
            'size'=>2000398934016,
            'type'=>'disk',),),
        );
        
        
        $res = $storagePool -> resetStoragePool($arr);
        $this->do_assert($res);
    }

    public function testExtendStoragePool()
    {
        $storagePool = $this -> storagePool;
        $arr = array(
            'pool_uuids'=>array(),
            'operate'=>'',
            'add_disk_list'=>array(
            '0'=>array(
            'name'=>'/dev/sdb',
            'size'=>2000398934016,
            'type'=>'disk',),),
        );
        
        
        $res = $storagePool -> extendStoragePool($arr);
        $this->do_assert($res);
    }

    public function testRenewKeyStoragePool()
    {
        $storagePool = $this -> storagePool;
        $arr = array(
            'pool_uuids'=>array(),
            'operate'=>'',
            'add_disk_list'=>array(
            '0'=>array(
            'name'=>'/dev/sdb',
            'size'=>2000398934016,
            'type'=>'disk',),),
        );
        
        
        $res = $storagePool -> renewKeyStoragePool($arr);
        $this->do_assert($res);
    }

    public function testStoragePoolLoadPools()
    {
        $storagePool = $this -> storagePool;
        $arr = array(
            'node_uuid'=>'',
        );
        
        
        $res = $storagePool -> storagePoolLoadPools($arr);
        $this->do_assert($res);
    }

    public function testStoragePoolBatchImport()
    {
        $storagePool = $this -> storagePool;
        $arr = array(
            'pool_list'=>array(
            '0'=>array(
            'pool_name'=>'',
            'pool_type'=>'',
            'ip'=>'',
            'disk_list'=>array(
            '0'=>array(
            'name'=>'',
            'size'=>'',
            'type'=>'',),),
            'description'=>'',
            'data_addr'=>'',
            'storage_conf_ip'=>'',
            'compress'=>0,
            'dedup'=>0,
            'fc_as_target'=>0,
            'wwpn_info'=>array(),
            'tape_uuid'=>'',
            'physical_name'=>'',
            'node_uuid'=>'',
            'os_user'=>'',
            'os_pwd'=>'',),),
        );
        
        
        $res = $storagePool -> storagePoolBatchImport($arr);
        $this->do_assert($res);
    }

    public function testStoragePoolUpdateConfig()
    {
        $storagePool = $this -> storagePool;
        $arr = array(
            'pool_uuid'=>'',
        );
        
        
        $res = $storagePool -> storagePoolUpdateConfig($arr);
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