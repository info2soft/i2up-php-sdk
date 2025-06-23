<?php
namespace i2up\Test\v20250630\resource;

use i2up\resource\v20250630\CopyVolume;
use i2up\common\Auth;
                
class CopyVolumeTest extends \PHPUnit_Framework_TestCase
 {
    private $copyVolume;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> copyVolume = new CopyVolume(new Auth());
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
            'fc_initiator_wwpn'=>'',
            'fc_target_wwpn'=>'',
            'exclusive'=>1,
            'bk_type'=>'',
            'auto_switch'=>1,
            'sparse_switch'=>1,
            'raw_uuid'=>'',
            'volume_type'=>0,
            'compress'=>1,
            'dedup'=>1,
            'block_size'=>1,
        );
        
        
        $res = $copyVolume -> createCopyVolume($arr);
        $this->do_assert($res);
    }

    public function testModifyCopyVolume()
    {
        $copyVolume = $this -> copyVolume;
        $arr = array(
            'volume_name'=>'',
            'bk_uuid'=>'',
            'volume_size'=>'',
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $copyVolume -> modifyCopyVolume($arr);
        $this->do_assert($res);
    }

    public function testDescribeCopyVolume()
    {
        $copyVolume = $this -> copyVolume;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $copyVolume -> describeCopyVolume($arr);
        $this->do_assert($res);
    }

    public function testCopyVolumeList()
    {
        $copyVolume = $this -> copyVolume;
        $arr = array(
            'type'=>0,
            'where_args'=>array(
            'raw_uuid'=>'',
            'bk_uuid'=>'',
            'wk_uuid'=>'',
            'create_fs'=>0,
            'name'=>'',
            'pool_name'=>'',
            'pool_type'=>'',
            'bk_node_name'=>'',),
        );
        
        
        $res = $copyVolume -> copyVolumeList($arr);
        $this->do_assert($res);
    }

    public function testDeleteCopyVolume()
    {
        $copyVolume = $this -> copyVolume;
        $arr = array(
            'volume_uuids'=>array(),
            'force'=>1,
        );
        
        
        $res = $copyVolume -> deleteCopyVolume($arr);
        $this->do_assert($res);
    }

    public function testMountCopyVolume()
    {
        $copyVolume = $this -> copyVolume;
        $arr = array(
            'operate'=>'',
            'volume_uuids'=>array(),
        );
        
        
        $res = $copyVolume -> mountCopyVolume($arr);
        $this->do_assert($res);
    }

    public function testUnmountCopyVolume()
    {
        $copyVolume = $this -> copyVolume;
        $arr = array(
            'operate'=>'',
            'volume_uuids'=>array(),
        );
        
        
        $res = $copyVolume -> unmountCopyVolume($arr);
        $this->do_assert($res);
    }

    public function testListCopyVolumeStatus()
    {
        $copyVolume = $this -> copyVolume;
        $arr = array(
            'volume_uuids'=>array(),
            'force_refresh'=>1,
        );
        
        
        $res = $copyVolume -> listCopyVolumeStatus($arr);
        $this->do_assert($res);
    }

    public function testListSnapshotList()
    {
        $copyVolume = $this -> copyVolume;
        $arr = array(
            'page'=>1,
            'limit'=>10,
            'from'=>0,
            'to'=>0,
            'volume_type'=>0,
            'storage_uuid'=>'',
            'storage_pool_uuid'=>'',
            'is_synthetic_backup'=>0,
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $copyVolume -> listSnapshotList($arr);
        $this->do_assert($res);
    }

    public function testListCopyCdmVolume()
    {
        $copyVolume = $this -> copyVolume;
        $arr = array(
            'volume_uuid'=>'',
            'volume_type'=>1,
            'bk_uuid'=>'',
        );
        
        
        $res = $copyVolume -> listCopyCdmVolume($arr);
        $this->do_assert($res);
    }

    public function testListCopyVolumeClient()
    {
        $copyVolume = $this -> copyVolume;
        $arr = array(
            'limit'=>300,
            'page'=>1,
            'type'=>1,
        );
        
        
        $res = $copyVolume -> listCopyVolumeClient($arr);
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