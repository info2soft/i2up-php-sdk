<?php
namespace i2up\Test\v20240228\resource;

use i2up\resource\v20240228\StorageUnit;
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
            'bk_uuid'=>'',
            'storage_path'=>'',
            'unit_type'=>1,
            'fs_uuid'=>'',
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
            'fragment_switch'=>1,
            'fragment_size'=>1,
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
        );
        $res = $storageUnit -> createStorageUnit($arr);
        $this->do_assert($res);
    }

    public function testModifyStorageUnit()
    {
        $storageUnit = $this -> storageUnit;
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111',
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
        );
        $res = $storageUnit -> modifyStorageUnit($arr);
        $this->do_assert($res);
    }

    public function testDescribeStorageUnit()
    {
        $storageUnit = $this -> storageUnit;
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111'
        );
        $res = $storageUnit -> describeStorageUnit($arr);
        $this->do_assert($res);
    }

    public function testListStorageUnit()
    {
        $storageUnit = $this -> storageUnit;
        $arr = array(
            'where_args[0]' => '[{"unit_type": 0, "unit_name":"unit_name"}]',
            'like_args[0]' => '["bk_node_name":""]',
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

    public function testCreateStorageUnitGroup()
    {
        $storageUnit = $this -> storageUnit;
        $arr = array(
            'group_name'=>'',
            'group_type'=>1,
            'unit_list'=>array(),
            'policy'=>1,
        );
        $res = $storageUnit -> createStorageUnitGroup($arr);
        $this->do_assert($res);
    }

    public function testModifyStorageUnitGroup()
    {
        $storageUnit = $this -> storageUnit;
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111',
            'group_name'=>'',
            'group_type'=>'',
            'unit_list'=>array(),
            'policy'=>1,
            'group_uuid'=>'',
            'random_str'=>'',
        );
        $res = $storageUnit -> modifyStorageUnitGroup($arr);
        $this->do_assert($res);
    }

    public function testDescribeStorageUnitGroup()
    {
        $storageUnit = $this -> storageUnit;
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111'
        );
        $res = $storageUnit -> describeStorageUnitGroup($arr);
        $this->do_assert($res);
    }

    public function testListStorageUnitGroup()
    {
        $storageUnit = $this -> storageUnit;
        $arr = array(
            'where_args[0]' => '["group_type":1]',
            'like_args[0]' => '["group_name":"","unit_name":""]',
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

    public function testChkStorageUnitRules()
    {
        $storageUnit = $this -> storageUnit;
        $arr = array(
            'storage_path'=>'',
        );
        $res = $storageUnit -> chkStorageUnitRules($arr);
        $this->do_assert($res);
    }

    private function do_assert($res)
    {
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}