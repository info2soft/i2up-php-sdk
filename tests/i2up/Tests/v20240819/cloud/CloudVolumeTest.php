<?php
namespace i2up\Test\v20240819\cloud;

use i2up\cloud\v20240819\CloudVolume;
use i2up\common\Auth;
                
class CloudVolumeTest extends \PHPUnit_Framework_TestCase
 {
    private $cloudVolume;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> cloudVolume = new CloudVolume(new Auth());
    }

    public function testListZone()
    {
        $cloudVolume = $this -> cloudVolume;
        $arr = array(
            'cloud_uuid'=>'',
            'region_id'=>'',
        );
        
        
        $res = $cloudVolume -> listZone($arr);
        $this->do_assert($res);
    }

    public function testCreateVolume()
    {
        $cloudVolume = $this -> cloudVolume;
        $arr = array(
            'volume_name'=>'',
            'cloud_uuid'=>'',
            'volume_size'=>'',
            'volume_type'=>'',
            'server_zone'=>'',
            'image_ref'=>'',
        );
        
        
        $res = $cloudVolume -> createVolume($arr);
        $this->do_assert($res);
    }

    public function testDeleteVolume()
    {
        $cloudVolume = $this -> cloudVolume;
        $arr = array(
            'volume_uuids'=>array(
            '0'=>'11111111-1111-1111-1111-111111111111',),
        );
        
        
        $res = $cloudVolume -> deleteVolume($arr);
        $this->do_assert($res);
    }

    public function testModifyVolume()
    {
        $cloudVolume = $this -> cloudVolume;
        $arr = array(
            'volume_uuids'=>array(),
            'ecs_id'=>'',
            'attach_point'=>'',
        );
        
        
        $res = $cloudVolume -> modifyVolume($arr);
        $this->do_assert($res);
    }

    public function testDetachVolume()
    {
        $cloudVolume = $this -> cloudVolume;
        $arr = array(
            'volume_uuids'=>array(),
        );
        
        
        $res = $cloudVolume -> detachVolume($arr);
        $this->do_assert($res);
    }

    public function testListVolume()
    {
        $cloudVolume = $this -> cloudVolume;
        $arr = array(
            'cloud_uuid'=>'',
            'page'=>1,
            'limit'=>1,
        );
        
        
        $res = $cloudVolume -> listVolume($arr);
        $this->do_assert($res);
    }

    public function testListVolumeStatus()
    {
        $cloudVolume = $this -> cloudVolume;
        $arr = array();
        
        
        $res = $cloudVolume -> listVolumeStatus($arr);
        $this->do_assert($res);
    }

    public function testListImage()
    {
        $cloudVolume = $this -> cloudVolume;
        $arr = array(
            'cloud_uuid'=>'',
        );
        
        
        $res = $cloudVolume -> listImage($arr);
        $this->do_assert($res);
    }

    public function testListVolumeEcs()
    {
        $cloudVolume = $this -> cloudVolume;
        $arr = array(
            'volume_uuid'=>'501C1AD2-9BE0-D9EF-E860-0F2A10448076',
        );
        
        
        $res = $cloudVolume -> listVolumeEcs($arr);
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