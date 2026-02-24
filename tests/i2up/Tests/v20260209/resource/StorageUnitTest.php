<?php
namespace i2up\Test\v20260209\resource;

use i2up\resource\v20260209\StorageUnit;
use i2up\common\Auth;
                
class StorageUnitTest extends \PHPUnit_Framework_TestCase
 {
    private $storageUnit;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> storageUnit = new StorageUnit(new Auth());
    }

    public function testGetStorageUnitBkCapacity()
    {
        $storageUnit = $this -> storageUnit;
        $arr = array(
            'disk_pool_uuid'=>'',
            'export_path'=>'',
        );
        
        
        $res = $storageUnit -> getStorageUnitBkCapacity($arr);
        $this->do_assert($res);
    }

    public function testGetStorageUnitDrivers()
    {
        $storageUnit = $this -> storageUnit;
        $arr = array(
            'library_uuid'=>'',
        );
        
        
        $res = $storageUnit -> getStorageUnitDrivers($arr);
        $this->do_assert($res);
    }

    public function testCreateStorageUnit()
    {
        $storageUnit = $this -> storageUnit;
        $arr = array(
            'unit_name'=>'',
            'unit_type'=>1,
            'bk_uuid'=>'',
            'data_ip_uuid'=>'',
            'storage_path'=>'',
            'max_concurrent'=>1,
            'high_water_mark'=>1,
            'low_water_mark'=>1,
            'auto_expand'=>1,
            'library_uuid'=>'',
            'drivers_num'=>1,
            'rootfs'=>1,
            'pool_uuid'=>'',
            'fs_uuid'=>'',
            'biz_grp_list'=>'',
            'access_limit'=>1,
            'bucket_uuid'=>'',
            'sto_uuid'=>'',
            'disk_pool_uuid'=>'',
            'default_tape_pool_uuid'=>'',
            'retention'=>'',
            'snapshot_pool_uuid'=>'',
            'gateway_list'=>array(
            '0'=>array(
            'node_uuid'=>'',
            'node_name'=>'',
            'config_addr'=>'',
            'selected'=>1,),),
            'storage_type'=>1,
            'keep_data_switch'=>1,
            'keep_data_day'=>1,
            'local_clock'=>'',
        );
        
        
        $res = $storageUnit -> createStorageUnit($arr);
        $this->do_assert($res);
    }

    public function testModifyStorageUnit()
    {
        $storageUnit = $this -> storageUnit;
        $arr = array(
            'unit_name'=>'',
            'unit_type'=>'',
            'bk_uuid'=>'',
            'data_addr'=>'',
            'storage_path'=>'',
            'max_concurrent'=>1,
            'fragment_switch'=>1,
            'fragment_size'=>1,
            'high_water_mark'=>1,
            'low_water_mark'=>1,
            'auto_expand'=>1,
            'library_uuid'=>'',
            'drivers_num'=>1,
            'rootfs'=>1,
            'storage_type'=>1,
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $storageUnit -> modifyStorageUnit($arr);
        $this->do_assert($res);
    }

    public function testDescribeStorageUnit()
    {
        $storageUnit = $this -> storageUnit;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $storageUnit -> describeStorageUnit($arr);
        $this->do_assert($res);
    }

    public function testListStorageUnit()
    {
        $storageUnit = $this -> storageUnit;
        $arr = array(
            'where_args'=>array(
            '0'=>array(
            'unit_type'=>'',
            'unit_name'=>'',
            'unit_uuid'=>'',),),
            'like_args'=>array(
            '0'=>array(
            'bk_node_name'=>'',),),
            'filter_by_biz_grp'=>'',
            'domain_uuid'=>'',
        );
        
        
        $res = $storageUnit -> listStorageUnit($arr);
        $this->do_assert($res);
    }

    public function testDeleteStorageUnit()
    {
        $storageUnit = $this -> storageUnit;
        $arr = array(
            'unit_uuids'=>array(),
            'force'=>1,
        );
        
        
        $res = $storageUnit -> deleteStorageUnit($arr);
        $this->do_assert($res);
    }

    public function testListStorageUnitStatus()
    {
        $storageUnit = $this -> storageUnit;
        $arr = array(
            'unit_uuids'=>array(),
            'force_refresh'=>1,
        );
        
        
        $res = $storageUnit -> listStorageUnitStatus($arr);
        $this->do_assert($res);
    }

    public function testChkStorageUnitRules()
    {
        $storageUnit = $this -> storageUnit;
        $arr = array(
            'disk_pool_uuid'=>'',
        );
        
        
        $res = $storageUnit -> chkStorageUnitRules($arr);
        $this->do_assert($res);
    }

    public function testNasVerify()
    {
        $storageUnit = $this -> storageUnit;
        $arr = array(
            'node_uuid'=>'',
            'pool_uuid'=>'',
        );
        
        
        $res = $storageUnit -> nasVerify($arr);
        $this->do_assert($res);
    }

    public function testCreateStorageUnitGroup()
    {
        $storageUnit = $this -> storageUnit;
        $arr = array(
            'group_name'=>'',
            'group_type'=>1,
            'unit_list'=>array(),
            'policy'=>1,
            'num_type'=>1,
            'specified_num'=>1,
            'same_disk_pool'=>1,
            'scenario'=>1,
            'default_tape_pool_uuid'=>'',
            'retention'=>'',
            'affinity_policy'=>1,
        );
        
        
        $res = $storageUnit -> createStorageUnitGroup($arr);
        $this->do_assert($res);
    }

    public function testModifyStorageUnitGroup()
    {
        $storageUnit = $this -> storageUnit;
        $arr = array(
            'group_name'=>'',
            'group_type'=>'',
            'unit_list'=>array(),
            'policy'=>1,
            'group_uuid'=>'',
            'random_str'=>'',
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $storageUnit -> modifyStorageUnitGroup($arr);
        $this->do_assert($res);
    }

    public function testDescribeStorageUnitGroup()
    {
        $storageUnit = $this -> storageUnit;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $storageUnit -> describeStorageUnitGroup($arr);
        $this->do_assert($res);
    }

    public function testListStorageUnitGroup()
    {
        $storageUnit = $this -> storageUnit;
        $arr = array(
            'where_args'=>array(
            '0'=>array(
            'group_type'=>1,),),
            'like_args'=>array(
            '0'=>array(
            'group_name'=>'',
            'unit_name'=>'',),),
        );
        
        
        $res = $storageUnit -> listStorageUnitGroup($arr);
        $this->do_assert($res);
    }

    public function testDeleteStorageUnitGroup()
    {
        $storageUnit = $this -> storageUnit;
        $arr = array(
            'group_uuids'=>array(),
            'force'=>1,
        );
        
        
        $res = $storageUnit -> deleteStorageUnitGroup($arr);
        $this->do_assert($res);
    }

    public function testGetStorageUnitAvailableConcurrent()
    {
        $storageUnit = $this -> storageUnit;
        $arr = array(
            'disk_pool_uuid'=>'',
        );
        
        
        $res = $storageUnit -> getStorageUnitAvailableConcurrent($arr);
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