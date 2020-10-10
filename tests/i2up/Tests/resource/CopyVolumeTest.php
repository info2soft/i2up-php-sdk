<?php
namespace i2up\Test\resource;

use i2up\resource\v20190805\CopyVolume;
use i2up\common\Auth;
use i2up\Config;

class CopyVolumeTest extends \PHPUnit_Framework_TestCase
{
    private $copyVolume;

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
        $this -> copyVolume = new CopyVolume($auth);
    }

    public function testCreateCopyVolume()
    {
        $copyVolume = $this -> copyVolume;
        $arr = array(
            'volume_name'=>'',
            'bk_uuid'=>'',
            'pool_uuid'=>'',
            'volume_size'=>'',
            'link_protocol'=>'',
            'create_fs'=>1,
            'fs_type'=>'',
            'attach_point'=>array(),
        );
        $res = $copyVolume -> createCopyVolume($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testModifyCopyVolume()
    {
        $copyVolume = $this -> copyVolume;
        $arr = array(
        );
        $res = $copyVolume -> modifyCopyVolume($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeCopyVolume()
    {
        $copyVolume = $this -> copyVolume;
        $arr = array(
        );
        $res = $copyVolume -> describeCopyVolume($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testCopyVolumeList()
    {
        $copyVolume = $this -> copyVolume;
        $arr = array(
            'where_args[bk_uuid]'=>'',
        );
        $res = $copyVolume -> copyVolumeList($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDeleteCopyVolume()
    {
        $copyVolume = $this -> copyVolume;
        $arr = array(
            'volume_uuids'=>array(),
        );
        $res = $copyVolume -> deleteCopyVolume($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testTempFuncName()
    {
        $copyVolume = $this -> copyVolume;
        $arr = array(
            'volume_uuids'=>array(),
        );
        $res = $copyVolume -> tempFuncName($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListSnapshotList()
    {
        $copyVolume = $this -> copyVolume;
        $arr = array(
        );
        $res = $copyVolume -> listSnapshotList($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}