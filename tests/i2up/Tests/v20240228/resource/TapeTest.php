<?php
namespace i2up\Test\v20240228\resource;

use i2up\resource\v20240228\Tape;
use i2up\common\Auth;
                
class TapeTest extends \PHPUnit_Framework_TestCase
 {
    private $tape;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> tape = new Tape(new Auth());
    }

    public function testSanTapeLibraries()
    {
        $tape = $this -> tape;
        $arr = array(
            'bk_uuids'=>array(),
        );
        $res = $tape -> sanTapeLibraries($arr);
        $this->do_assert($res);
    }

    public function testListTapeLibraryDrivers()
    {
        $tape = $this -> tape;
        $arr = array(
            'library_uuid'=>'',
            'list'=>array(
            '0'=>array(
            'bk_uuid'=>'',
            'library_sn'=>'',),),
        );
        $res = $tape -> listTapeLibraryDrivers($arr);
        $this->do_assert($res);
    }

    public function testCreateTapeLibrary()
    {
        $tape = $this -> tape;
        $arr = array(
            'library_name' => '磁带库1',
            'comment' => '说明',
            'bk_uuid_list' => array(
                '0' => 'D42BF707-C971-EEA9-521F-BB0F3F7A92FC',),
            'library_list' => array(
                '0' => array(
                    'bk_uuid' => 'D42BF707-C971-EEA9-521F-BB0F3F7A92FC',
                    'library_sn' => 'SYZZ_A',
                    'library_vendor' => 'STK',
                    'library_product' => 'L80',
                    'library_revision' => '0106',
                    'drive_num' => 1,
                    'slot_num' => 1,
                    'dev_path' => '/dev',
                    'checked' => 1,),),
            'ctrl_host_uuid' => '',
            'library_sn' => '',
            'library_vendor' => '',
            'library_product' => '',
            'library_revision' => '',
            'drive_num' => '',
            'dev_path' => '',
            'slot_num' => '',
            'driver_info' => array(
                '0' => array(
                    'bk_uuid' => '',
                    'library_sn' => '',
                    'driver_list' => array(
                        '0' => array(
                            'checked' => '',
                            'index' => '',
                            'barcode' => '',
                            'driver_sn' => '',
                            'dev_path' => '',
                            'status' => '',
                            'last_write' => '',),),),),
            'robotic_arm_info' => array(),
            'slave' => 1,
        );
        $res = $tape -> createTapeLibrary($arr);
        $this->do_assert($res);
    }

    public function testListTapeLibrary()
    {
        $tape = $this -> tape;
        $arr = array();
        $res = $tape -> listTapeLibrary($arr);
        $this->do_assert($res);
    }

    public function testDescribeTapeLibrary()
    {
        $tape = $this -> tape;
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111'
        );
        $res = $tape -> describeTapeLibrary($arr);
        $this->do_assert($res);
    }

    public function testModifyTapeLibrary()
    {
        $tape = $this -> tape;
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111',
            'library_name'=>'磁带库1',
            'library_uuid'=>'',
            'random_str'=>'',
            'comment'=>'说明',
            'bk_uuid_list'=>array(
            '0'=>'D42BF707-C971-EEA9-521F-BB0F3F7A92FC',),
            'library_list'=>array(
            '0'=>array(
            'bk_uuidtrue'=>'D42BF707-C971-EEA9-521F-BB0F3F7A92FC',
            'library_sn'=>'SYZZ_A',
            'library_vendor'=>'STK',
            'library_product'=>'L80',
            'library_revision'=>'0106',
            'drive_num'=>1,
            'slot_num'=>1,
            'dev_path'=>'/dev',
            'checked'=>1,),),
            'curl_host_uuid'=>'',
            'library_sn'=>'',
            'library_vendor'=>'',
            'library_product'=>'',
            'library_revision'=>'',
            'drive_num'=>'',
            'dev_path'=>'',
            'slot_num'=>'',
            'driver_info'=>array(
            '0'=>array(
            'bk_uuid'=>'',
            'library_sn'=>'',
            'driver_list'=>array(
            'checked'=>'',
            'index'=>'',
            'barcode'=>'',
            'driver_sn'=>'',
            'dev_path'=>'',
            'status'=>'',
            'last_write'=>'',),),),
        );
        $res = $tape -> modifyTapeLibrary($arr);
        $this->do_assert($res);
    }

    public function testDeleteTapeLibrary()
    {
        $tape = $this -> tape;
        $arr = array(
            'library_uuids'=>array(),
            'force'=>1,
        );
        $res = $tape -> deleteTapeLibrary($arr);
        $this->do_assert($res);
    }

    public function testRefreshTapeLibrarySlot()
    {
        $tape = $this -> tape;
        $arr = array(
            'library_uuid'=>'',
        );
        $res = $tape -> refreshTapeLibrarySlot($arr);
        $this->do_assert($res);
    }

    public function testScanSlot()
    {
        $tape = $this -> tape;
        $arr = array(
            'library_uuid'=>'',
        );
        $res = $tape -> scanSlot($arr);
        $this->do_assert($res);
    }

    public function testListBusySlot()
    {
        $tape = $this -> tape;
        $arr = array(
            'library_uuid'=>'',
        );
        $res = $tape -> listBusySlot($arr);
        $this->do_assert($res);
    }

    public function testListBusyIeSlot()
    {
        $tape = $this -> tape;
        $arr = array(
            'library_uuid'=>'',
        );
        $res = $tape -> listBusyIeSlot($arr);
        $this->do_assert($res);
    }

    public function testImportTapeLibrary()
    {
        $tape = $this -> tape;
        $arr = array(
            'library_uuids' => array(),
            'operate' => 'import',
            'list' => array(
                '0' => array(
                    'ieslot_barcode' => '',
                    'ieslot_index' => '',
                ),
            ),
        );
        $res = $tape -> importTapeLibrary($arr);
        $this->do_assert($res);
    }

    public function testEnableTapeLibraryDrivers()
    {
        $tape = $this -> tape;
        $arr = array(
            'library_uuid'=>'',
            'driver_index'=>'',
            'status'=>'',
            'dev_path'=>'',
            'driver_sn'=>'',
            'operate'=>'enable',
            'slot_index'=>'',
            'slot_flag'=>'',
            'barcode'=>'',
            'tape_uuid'=>'',
        );
        $res = $tape -> enableTapeLibraryDrivers($arr);
        $this->do_assert($res);
    }
    public function testMoveTapeLibraryDrivers()
    {
        $tape = $this -> tape;
        $arr = array(
            'library_uuid'=>'',
            'driver_index'=>'',
            'status'=>'',
            'dev_path'=>'',
            'driver_sn'=>'',
            'operate'=>'move',
            'slot_index'=>'',
            'slot_flag'=>'',
            'barcode'=>'',
            'tape_uuid'=>'',
        );
        $res = $tape -> moveTapeLibraryDrivers($arr);
        $this->do_assert($res);
    }

    public function testListTapePools()
    {
        $tape = $this -> tape;
        $arr = array();
        $res = $tape -> listTapePools($arr);
        $this->do_assert($res);
    }

    public function testCreateTapePool()
    {
        $tape = $this -> tape;
        $arr = array(
            'pool_name'=>'',
            'comment'=>'',
            'note'=>'',
        );
        $res = $tape -> createTapePool($arr);
        $this->do_assert($res);
    }

    public function testUpdateTapePool()
    {
        $tape = $this -> tape;
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111',
            'comment'=>'',
            'note'=>'',
        );
        $res = $tape -> updateTapePool($arr);
        $this->do_assert($res);
    }

    public function testDeleteTapePool()
    {
        $tape = $this -> tape;
        $arr = array(
            'pool_uuids'=>array(),
        );
        $res = $tape -> deleteTapePool($arr);
        $this->do_assert($res);
    }

    public function testFreezeTapeMedia()
    {
        $tape = $this -> tape;
        $arr = array(
            'list' => array(
                '0' => array(
                    'library_uuid' => '',
                    'slot_index' => '',
                    'slot_barcode' => '',
                    'slot_tapename' => '',
                    'slot_tapesequence' => '',
                    'pool_name' => '',),),
            'operate' => 'freeze',
            'src_pool_name' => '',
            'dst_pool_name' => '',
            'freeze' => '',
            'backupset_info' => array(
                '0' => array(
                    'copy_id' => 1,
                    'bk_set_id' => '',
                    'stage' => 1,),),
        );
        $res = $tape -> freezeTapeMedia($arr);
        $this->do_assert($res);
    }
    public function testBrowseTapeMedia()
    {
        $tape = $this -> tape;
        $arr = array(
            'list' => array(
                '0' => array(
                    'library_uuid' => '',
                    'slot_index' => '',
                    'slot_barcode' => '',
                    'slot_tapename' => '',
                    'slot_tapesequence' => '',
                    'pool_name' => '',),),
            'operate' => 'browse',
            'src_pool_name' => '',
            'dst_pool_name' => '',
            'freeze' => '',
            'backupset_info' => array(
                '0' => array(
                    'copy_id' => 1,
                    'bk_set_id' => '',
                    'stage' => 1,),),
        );
        $res = $tape -> browseTapeMedia($arr);
        $this->do_assert($res);
    }
    public function testRebuildTapeMedia()
    {
        $tape = $this -> tape;
        $arr = array(
            'list' => array(
                '0' => array(
                    'library_uuid' => '',
                    'slot_index' => '',
                    'slot_barcode' => '',
                    'slot_tapename' => '',
                    'slot_tapesequence' => '',
                    'pool_name' => '',),),
            'operate' => 'rebuild',
            'src_pool_name' => '',
            'dst_pool_name' => '',
            'freeze' => '',
            'backupset_info' => array(
                '0' => array(
                    'copy_id' => 1,
                    'bk_set_id' => '',
                    'stage' => 1,),),
        );
        $res = $tape -> rebuildTapeMedia($arr);
        $this->do_assert($res);
    }
    public function testExportTapeMedia()
    {
        $tape = $this -> tape;
        $arr = array(
            'list' => array(
                '0' => array(
                    'library_uuid' => '',
                    'slot_index' => '',
                    'slot_barcode' => '',
                    'slot_tapename' => '',
                    'slot_tapesequence' => '',
                    'pool_name' => '',),),
            'operate' => 'export',
            'src_pool_name' => '',
            'dst_pool_name' => '',
            'freeze' => '',
            'backupset_info' => array(
                '0' => array(
                    'copy_id' => 1,
                    'bk_set_id' => '',
                    'stage' => 1,),),
        );
        $res = $tape -> exportTapeMedia($arr);
        $this->do_assert($res);
    }
    public function testMoveTapeMedia()
    {
        $tape = $this -> tape;
        $arr = array(
            'list' => array(
                '0' => array(
                    'library_uuid' => '',
                    'slot_index' => '',
                    'slot_barcode' => '',
                    'slot_tapename' => '',
                    'slot_tapesequence' => '',
                    'pool_name' => '',),),
            'operate' => 'move',
            'src_pool_name' => '',
            'dst_pool_name' => '',
            'freeze' => '',
            'backupset_info' => array(
                '0' => array(
                    'copy_id' => 1,
                    'bk_set_id' => '',
                    'stage' => 1,),),
        );
        $res = $tape -> moveTapeMedia($arr);
        $this->do_assert($res);
    }
    public function testRefreshTapeMedia()
    {
        $tape = $this -> tape;
        $arr = array(
            'list' => array(
                '0' => array(
                    'library_uuid' => '',
                    'slot_index' => '',
                    'slot_barcode' => '',
                    'slot_tapename' => '',
                    'slot_tapesequence' => '',
                    'pool_name' => '',),),
            'operate' => 'refresh',
            'src_pool_name' => '',
            'dst_pool_name' => '',
            'freeze' => '',
            'backupset_info' => array(
                '0' => array(
                    'copy_id' => 1,
                    'bk_set_id' => '',
                    'stage' => 1,),),
        );
        $res = $tape -> refreshTapeMedia($arr);
        $this->do_assert($res);
    }
    public function testEraseTapeMedia()
    {
        $tape = $this -> tape;
        $arr = array(
            'list' => array(
                '0' => array(
                    'library_uuid' => '',
                    'slot_index' => '',
                    'slot_barcode' => '',
                    'slot_tapename' => '',
                    'slot_tapesequence' => '',
                    'pool_name' => '',),),
            'operate' => 'erase',
            'src_pool_name' => '',
            'dst_pool_name' => '',
            'freeze' => '',
            'backupset_info' => array(
                '0' => array(
                    'copy_id' => 1,
                    'bk_set_id' => '',
                    'stage' => 1,),),
        );
        $res = $tape -> eraseTapeMedia($arr);
        $this->do_assert($res);
    }

    public function testListTapeMedia()
    {
        $tape = $this -> tape;
        $arr = array(
            'where_args[library_uuid]'=>'',
            'where_args[pool_name]'=>'',
            'where_args[outbound]'=>1,
            'where_args[slot_flag]'=>'',
            'where_args[slot_tapename]'=>'',
            'like_args[slot_barcode]'=>'',
            'like_args[bk_rule_name]'=>'',
            'type'=>1,
            'flag'=>1,
            'content_init'=>'',
        );
        $res = $tape -> listTapeMedia($arr);
        $this->do_assert($res);
    }

    public function testListTapeMediaBkData()
    {
        $tape = $this -> tape;
        $arr = array(
            'slot_barcode'=>'',
            'limit'=>'',
            'page'=>'',
            'begin_time'=>'',
            'end_time'=>'',
            'check_rule'=>1,
            'task_uuid'=>'',
        );
        $res = $tape -> listTapeMediaBkData($arr);
        $this->do_assert($res);
    }

    public function testListTapeMediaBkFiles()
    {
        $tape = $this -> tape;
        $arr = array(
            'slot_barcode'=>'',
            'bk_index'=>'',
            'bk_path'=>'',
            'limit'=>'',
            'page'=>'',
        );
        $res = $tape -> listTapeMediaBkFiles($arr);
        $this->do_assert($res);
    }

    public function testListTapeMediaDetails()
    {
        $tape = $this -> tape;
        $arr = array(
            'slot_barcode'=>'',
            'bk_index'=>'',
            'bk_path'=>'',
            'limit'=>1,
            'page'=>1,
        );
        $res = $tape -> listTapeMediaDetails($arr);
        $this->do_assert($res);
    }

    public function testRefreshTapeLibrary()
    {
        $tape = $this -> tape;
        $arr = array(
            'bk_uuids'=>array(),
        );
        $res = $tape -> refreshTapeLibrary($arr);
        $this->do_assert($res);
    }

    public function testListTapeLibraryRoboticArm()
    {
        $tape = $this -> tape;
        $arr = array(
            'library_sn'=>'',
            'bk_uuid_list'=>'',
        );
        $res = $tape -> listTapeLibraryRoboticArm($arr);
        $this->do_assert($res);
    }

    public function testSetTapeLibraryFreezeNumber()
    {
        $tape = $this -> tape;
        $arr = array(
            'medium_type'=>1,
            'library_sn'=>'',
            'freeze_number'=>1,
        );
        $res = $tape -> setTapeLibraryFreezeNumber($arr);
        $this->do_assert($res);
    }

    private function do_assert($res)
    {
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}