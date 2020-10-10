<?php
namespace i2up\Test\resource;

use i2up\resource\v20190805\StoragePool;
use i2up\common\Auth;
use i2up\Config;

class StoragePoolTest extends \PHPUnit_Framework_TestCase
{
    private $storagePool;

    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $params = array(
            'username' => 'admin',
            'pwd' => 'Info1234',
            'cache_path' => __DIR__ . '/../',
            'ip' => Config::baseUrl
        );
        $auth = new Auth($params);
        $this -> storagePool = new StoragePool($auth);
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
            'capacity'=>'',
        );
        $res = $storagePool -> createStoragePool($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
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
            'capacity'=>'',
            'random_str'=>'',
        );
        $res = $storagePool -> modifyStoragePool($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testStoragePoolList()
    {
        $storagePool = $this -> storagePool;
        $arr = array(
            'page'=>'',
            'limit'=>'',
        );
        $res = $storagePool -> storagePoolList($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeStoragePool()
    {
        $storagePool = $this -> storagePool;
        $arr = array(
        );
        $res = $storagePool -> describeStoragePool($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDeleteStoragePool()
    {
        $storagePool = $this -> storagePool;
        $arr = array(
            'pool_uuids'=>array(),
        );
        $res = $storagePool -> deleteStoragePool($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListStoragePoolStatus()
    {
        $storagePool = $this -> storagePool;
        $arr = array(
            'pool_uuids'=>array(),
        );
        $res = $storagePool -> listStoragePoolStatus($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}