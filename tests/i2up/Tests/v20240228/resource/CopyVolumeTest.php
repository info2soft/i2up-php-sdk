<?php
namespace i2up\Test\v20240228\resource;

use i2up\resource\v20240228\CopyVolume;
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
            'uuid' => '11111111-1111-1111-1111-111111111111',
            'volume_name'=>'',
            'bk_uuid'=>'',
            'volume_size'=>'',
        );
        $res = $copyVolume -> modifyCopyVolume($arr);
        $this->do_assert($res);
    }

    public function testDescribeCopyVolume()
    {
        $copyVolume = $this -> copyVolume;
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111'
        );
        $res = $copyVolume -> describeCopyVolume($arr);
        $this->do_assert($res);
    }

    public function testCopyVolumeList()
    {
        $copyVolume = $this -> copyVolume;
        $arr = array(
            'where_args[bk_uuid]'=>'',
            'where_args[wk_uuid]'=>'',
            'where_args[create_fs]'=>0,
            'where_args[name]'=>'',
            'where_args[pool_name]'=>'',
            'where_args[bk_node_name]'=>'',
            'type'=>0,
            'where_args[raw_uuid]'=>'',
            'where_args[pool_type]'=>'',
        );
        $res = $copyVolume -> copyVolumeList($arr);
        $this->do_assert($res);
    }

    public function testDeleteCopyVolume()
    {
        $copyVolume = $this -> copyVolume;
        $arr = array(
            'volume_uuids'=>array('11111111-1111-1111-1111-111111111111'),
            'force'=>1,
        );
        $res = $copyVolume -> deleteCopyVolume($arr);
        $this->do_assert($res);
    }

    public function testMountCopyVolume()
    {
        $copyVolume = $this -> copyVolume;
        $arr = array(
            'operate'=>'mount',
            'volume_uuids'=>array('11111111-1111-1111-1111-111111111111'),
        );
        $res = $copyVolume -> mountCopyVolume($arr);
        $this->do_assert($res);
    }

    public function testUnMountCopyVolume()
    {
        $copyVolume = $this -> copyVolume;
        $arr = array(
            'operate'=>'unmount',
            'volume_uuids'=>array('11111111-1111-1111-1111-111111111111'),
        );
        $res = $copyVolume -> unMountCopyVolume($arr);
        $this->do_assert($res);
    }

    public function testListCopyVolumeStatus()
    {
        $copyVolume = $this -> copyVolume;
        $arr = array(
            'volume_uuids'=>array('11111111-1111-1111-1111-111111111111'),
            'force_refresh'=>1,
        );
        $res = $copyVolume -> listCopyVolumeStatus($arr);
        $this->do_assert($res);
    }

    public function testListSnapshotList()
    {
        $copyVolume = $this -> copyVolume;
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111',
            'page'=>1,
            'limit'=>10,
            'from'=>0,
            'to'=>0,
            'volume_type'=>0,
            'storage_uuid'=>'',
            'storage_pool_uuid'=>'',
            'is_synthetic_backup'=>0,
        );
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
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}