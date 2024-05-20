<?php
/**
 * Create by PhpStorm
 * User: Lis
 * Date: 2020/10/9
 * Time: 15:37
 */

namespace i2up\Test\cloud;

use i2up\common\Auth;
use i2up\cloud\v20200721\CloudVolume;

class CloudVolumeTest extends \PHPUnit_Framework_TestCase
{
    private $cloudBackup;
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> cloudBackup = new CloudVolume(new Auth());
    }

    public function testListZone()
    {
        $cloudBackup = $this -> cloudBackup;
        $arr = array(
            'cloud_uuid'=>'',
        );
        $res = $cloudBackup -> listZone($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testCreateVolume()
    {
        $cloudBackup = $this -> cloudBackup;
        $arr = array(
            'volume_name'=>'',
            'cloud_uuid'=>'',
            'volume_size'=>'',
            'volume_type'=>'',
            'server_zone'=>'',
            'image_ref'=>'',
        );
        $res = $cloudBackup -> createVolume($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDeleteVolume()
    {
        $cloudBackup = $this -> cloudBackup;
        $arr = array(
            'volume_uuids'=>array(
                '0'=>'11111111-1111-1111-1111-111111111111',),
        );
        $res = $cloudBackup -> deleteVolume($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testModifyVolume()
    {
        $cloudBackup = $this -> cloudBackup;
        $arr = array(
            'volume_uuids'=>array('11111111-1111-1111-1111-111111111111'),
            'ecs_id'=>'',
            'attach_point'=>'',
        );
        $res = $cloudBackup -> modifyVolume($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDetachVolume()
    {
        $cloudBackup = $this -> cloudBackup;
        $arr = array(
            'volume_uuids'=>array('11111111-1111-1111-1111-111111111111'),
        );
        $res = $cloudBackup -> detachVolume($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListVolume()
    {
        $cloudBackup = $this -> cloudBackup;
        $arr = array(
            'cloud_uuid'=>'',
            'page'=>1,
            'limit'=>1,
        );
        $res = $cloudBackup -> listVolume($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListVolumeStatus()
    {
        $cloudBackup = $this -> cloudBackup;
        $arr = array(
        );
        $res = $cloudBackup -> listVolumeStatus($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListImage()
    {
        $cloudBackup = $this -> cloudBackup;
        $arr = array(
            'cloud_uuid'=>'',
        );
        $res = $cloudBackup -> listImage($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListVolumeEcs()
    {
        $cloudBackup = $this -> cloudBackup;
        $arr = array(
            'volume_uuid'=>'501C1AD2-9BE0-D9EF-E860-0F2A10448076',
        );
        $res = $cloudBackup -> listVolumeEcs($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}