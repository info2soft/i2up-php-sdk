<?php
namespace i2up\Test\v20260209\resource;

use i2up\resource\v20260209\TapeV3;
use i2up\common\Auth;
                
class TapeV3Test extends \PHPUnit_Framework_TestCase
 {
    private $tapeV3;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> tapeV3 = new TapeV3(new Auth());
    }

    public function testScanTapeLibraries()
    {
        $tapeV3 = $this -> tapeV3;
        $arr = array(
            'bk_uuids'=>array(),
        );
        
        
        $res = $tapeV3 -> scanTapeLibraries($arr);
        $this->do_assert($res);
    }

    public function testListTapeLibraryDrivers()
    {
        $tapeV3 = $this -> tapeV3;
        $arr = array(
            'library_uuid'=>'',
            'library_sn'=>'',
            'bk_uuid_list'=>array(),
        );
        
        
        $res = $tapeV3 -> listTapeLibraryDrivers($arr);
        $this->do_assert($res);
    }

    public function testCreateTapeLibrary()
    {
        $tapeV3 = $this -> tapeV3;
        $arr = array(
            'slave'=>1,
            'task_uuid_list'=>array(),
            'robotic_arm_info'=>array(),
            'library_name'=>'磁带库1',
            'comment'=>'说明',
            'bk_uuid_list'=>array(
            '0'=>'D42BF707-C971-EEA9-521F-BB0F3F7A92FC',),
            'library_list'=>array(
            '0'=>array(
            'checked'=>false,
            'bk_uuid'=>'D42BF707-C971-EEA9-521F-BB0F3F7A92FC',
            'library_sn'=>'SYZZ_A',
            'library_vendor'=>'STK',
            'library_product'=>'L80',
            'library_revision'=>'0106',
            'drive_num'=>1,
            'slot_num'=>1,
            'dev_path'=>'/dev',),),
            'bind_lic_list'=>array(),
            'delay_unstall_sw'=>1,
            'delay_unstall_time'=>1,
            'driver_info'=>array(
            '0'=>array(
            'bk_uuid'=>'',
            'library_sn'=>'',
            'driver_list'=>array(
            '0'=>array(
            'checked'=>'',
            'index'=>'',
            'barcode'=>'',
            'driver_sn'=>'',
            'dev_path'=>'',
            'status'=>'',
            'last_write'=>'',),),),),
            'ctrl_host_uuid'=>'',
            'library_sn'=>'',
            'library_vendor'=>'',
            'library_product'=>'',
            'library_revision'=>'',
            'drive_num'=>'',
            'dev_path'=>'',
            'slot_num'=>'',
        );
        
        
        $res = $tapeV3 -> createTapeLibrary($arr);
        $this->do_assert($res);
    }

    public function testListTapeLibrary()
    {
        $tapeV3 = $this -> tapeV3;
        $arr = array();
        
        
        $res = $tapeV3 -> listTapeLibrary($arr);
        $this->do_assert($res);
    }

    public function testModifyTapeLibrary()
    {
        $tapeV3 = $this -> tapeV3;
        $arr = array(
            'deplay_unstall_sw'=>1,
            'deplay_unstall_time'=>1,
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
            'library_name'=>'磁带库1',
            'library_uuid'=>'',
            'random_str'=>'',
            'comment'=>'说明',
            'bk_uuid_list'=>array(
            '0'=>'D42BF707-C971-EEA9-521F-BB0F3F7A92FC',),
            'library_list'=>array(
            '0'=>array(
            'checked'=>1,
            'bk_uuidtrue'=>'D42BF707-C971-EEA9-521F-BB0F3F7A92FC',
            'library_sn'=>'SYZZ_A',
            'library_vendor'=>'STK',
            'library_product'=>'L80',
            'library_revision'=>'0106',
            'drive_num'=>1,
            'slot_num'=>1,
            'dev_path'=>'/dev',),),
            'curl_host_uuid'=>'',
            'library_sn'=>'',
            'library_vendor'=>'',
            'library_product'=>'',
            'library_revision'=>'',
            'drive_num'=>'',
            'dev_path'=>'',
            'slot_num'=>'',
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $tapeV3 -> modifyTapeLibrary($arr);
        $this->do_assert($res);
    }

    public function testDescribeTapeLibrary()
    {
        $tapeV3 = $this -> tapeV3;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $tapeV3 -> describeTapeLibrary($arr);
        $this->do_assert($res);
    }

    public function testDeleteTapeLibrary()
    {
        $tapeV3 = $this -> tapeV3;
        $arr = array(
            'library_uuids'=>array(),
            'force'=>1,
        );
        
        
        $res = $tapeV3 -> deleteTapeLibrary($arr);
        $this->do_assert($res);
    }

    public function testRefreshTapeLibrarySlot()
    {
        $tapeV3 = $this -> tapeV3;
        $arr = array(
            'library_uuid'=>'',
            'refresh_type'=>1,
        );
        
        
        $res = $tapeV3 -> refreshTapeLibrarySlot($arr);
        $this->do_assert($res);
    }

    public function testListBusySlot()
    {
        $tapeV3 = $this -> tapeV3;
        $arr = array(
            'library_uuid'=>'',
        );
        
        
        $res = $tapeV3 -> listBusySlot($arr);
        $this->do_assert($res);
    }

    public function testListBusyIeSlot()
    {
        $tapeV3 = $this -> tapeV3;
        $arr = array(
            'library_uuid'=>'',
        );
        
        
        $res = $tapeV3 -> listBusyIeSlot($arr);
        $this->do_assert($res);
    }

    public function testImportTapeLibrary()
    {
        $tapeV3 = $this -> tapeV3;
        $arr = array(
            'library_uuids'=>array(),
            'operate'=>'',
            'list'=>array(
            '0'=>array(
            'ieslot_barcode'=>'',
            'ieslot_index'=>'',),),
        );
        
        
        $res = $tapeV3 -> importTapeLibrary($arr);
        $this->do_assert($res);
    }

    public function testEnableTapeLibraryDrivers()
    {
        $tapeV3 = $this -> tapeV3;
        $arr = array(
            'library_uuid'=>'',
            'driver_index'=>'',
            'status'=>'',
            'dev_path'=>'',
            'driver_sn'=>'',
            'force'=>1,
            'slot_flag'=>'',
            'barcode'=>'',
            'operate'=>'',
            'slot_index'=>'',
            'tape_uuid'=>'',
        );
        
        
        $res = $tapeV3 -> enableTapeLibraryDrivers($arr);
        $this->do_assert($res);
    }

    public function testMoveTapeLibraryDrivers()
    {
        $tapeV3 = $this -> tapeV3;
        $arr = array(
            'library_uuid'=>'',
            'driver_index'=>'',
            'status'=>'',
            'dev_path'=>'',
            'driver_sn'=>'',
            'force'=>1,
            'slot_flag'=>'',
            'barcode'=>'',
            'operate'=>'',
            'slot_index'=>'',
            'tape_uuid'=>'',
        );
        
        
        $res = $tapeV3 -> moveTapeLibraryDrivers($arr);
        $this->do_assert($res);
    }

    public function testListTapePools()
    {
        $tapeV3 = $this -> tapeV3;
        $arr = array();
        
        
        $res = $tapeV3 -> listTapePools($arr);
        $this->do_assert($res);
    }

    public function testListTapeLibraryStatus()
    {
        $tapeV3 = $this -> tapeV3;
        $arr = array(
            'library_uuids'=>array(),
        );
        
        
        $res = $tapeV3 -> listTapeLibraryStatus($arr);
        $this->do_assert($res);
    }

    public function testCreateTapePool()
    {
        $tapeV3 = $this -> tapeV3;
        $arr = array(
            'pool_name'=>'',
            'comment'=>'',
            'note'=>'',
            'inner_cycle'=>1,
        );
        
        
        $res = $tapeV3 -> createTapePool($arr);
        $this->do_assert($res);
    }

    public function testUpdateTapePool()
    {
        $tapeV3 = $this -> tapeV3;
        $arr = array(
            'comment'=>'',
            'note'=>'',
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $tapeV3 -> updateTapePool($arr);
        $this->do_assert($res);
    }

    public function testDeleteTapePool()
    {
        $tapeV3 = $this -> tapeV3;
        $arr = array(
            'pool_uuids'=>array(),
        );
        
        
        $res = $tapeV3 -> deleteTapePool($arr);
        $this->do_assert($res);
    }

    public function testFreezeTapeMedia()
    {
        $tapeV3 = $this -> tapeV3;
        $arr = array(
            'backupset_info'=>array(
            '0'=>array(
            'copy_id'=>1,
            'bk_set_id'=>'',
            'stage'=>1,),),
            'erase_type'=>1,
            'erase_mode'=>1,
            'erase_times'=>1,
            'drive_num'=>1,
            'list'=>array(
            '0'=>array(
            'slot_barcode'=>'',
            'slot_tapename'=>'',
            'slot_tapesequence'=>'',
            'pool_name'=>'',
            'library_uuid'=>'',
            'slot_index'=>'',),),
            'operate'=>'',
            'src_pool_name'=>'',
            'dst_pool_name'=>'',
            'freeze'=>'',
        );
        
        
        $res = $tapeV3 -> freezeTapeMedia($arr);
        $this->do_assert($res);
    }

    public function testBrowseTapeMedia()
    {
        $tapeV3 = $this -> tapeV3;
        $arr = array(
            'backupset_info'=>array(
            '0'=>array(
            'copy_id'=>1,
            'bk_set_id'=>'',
            'stage'=>1,),),
            'erase_type'=>1,
            'erase_mode'=>1,
            'erase_times'=>1,
            'drive_num'=>1,
            'list'=>array(
            '0'=>array(
            'slot_barcode'=>'',
            'slot_tapename'=>'',
            'slot_tapesequence'=>'',
            'pool_name'=>'',
            'library_uuid'=>'',
            'slot_index'=>'',),),
            'operate'=>'',
            'src_pool_name'=>'',
            'dst_pool_name'=>'',
            'freeze'=>'',
        );
        
        
        $res = $tapeV3 -> browseTapeMedia($arr);
        $this->do_assert($res);
    }

    public function testRebuildTapeMedia()
    {
        $tapeV3 = $this -> tapeV3;
        $arr = array(
            'backupset_info'=>array(
            '0'=>array(
            'copy_id'=>1,
            'bk_set_id'=>'',
            'stage'=>1,),),
            'erase_type'=>1,
            'erase_mode'=>1,
            'erase_times'=>1,
            'drive_num'=>1,
            'list'=>array(
            '0'=>array(
            'slot_barcode'=>'',
            'slot_tapename'=>'',
            'slot_tapesequence'=>'',
            'pool_name'=>'',
            'library_uuid'=>'',
            'slot_index'=>'',),),
            'operate'=>'',
            'src_pool_name'=>'',
            'dst_pool_name'=>'',
            'freeze'=>'',
        );
        
        
        $res = $tapeV3 -> rebuildTapeMedia($arr);
        $this->do_assert($res);
    }

    public function testExportTapeMedia()
    {
        $tapeV3 = $this -> tapeV3;
        $arr = array(
            'backupset_info'=>array(
            '0'=>array(
            'copy_id'=>1,
            'bk_set_id'=>'',
            'stage'=>1,),),
            'erase_type'=>1,
            'erase_mode'=>1,
            'erase_times'=>1,
            'drive_num'=>1,
            'list'=>array(
            '0'=>array(
            'slot_barcode'=>'',
            'slot_tapename'=>'',
            'slot_tapesequence'=>'',
            'pool_name'=>'',
            'library_uuid'=>'',
            'slot_index'=>'',),),
            'operate'=>'',
            'src_pool_name'=>'',
            'dst_pool_name'=>'',
            'freeze'=>'',
        );
        
        
        $res = $tapeV3 -> exportTapeMedia($arr);
        $this->do_assert($res);
    }

    public function testMoveTapeMedia()
    {
        $tapeV3 = $this -> tapeV3;
        $arr = array(
            'backupset_info'=>array(
            '0'=>array(
            'copy_id'=>1,
            'bk_set_id'=>'',
            'stage'=>1,),),
            'erase_type'=>1,
            'erase_mode'=>1,
            'erase_times'=>1,
            'drive_num'=>1,
            'list'=>array(
            '0'=>array(
            'slot_barcode'=>'',
            'slot_tapename'=>'',
            'slot_tapesequence'=>'',
            'pool_name'=>'',
            'library_uuid'=>'',
            'slot_index'=>'',),),
            'operate'=>'',
            'src_pool_name'=>'',
            'dst_pool_name'=>'',
            'freeze'=>'',
        );
        
        
        $res = $tapeV3 -> moveTapeMedia($arr);
        $this->do_assert($res);
    }

    public function testRefreshTapeMedia()
    {
        $tapeV3 = $this -> tapeV3;
        $arr = array(
            'backupset_info'=>array(
            '0'=>array(
            'copy_id'=>1,
            'bk_set_id'=>'',
            'stage'=>1,),),
            'erase_type'=>1,
            'erase_mode'=>1,
            'erase_times'=>1,
            'drive_num'=>1,
            'list'=>array(
            '0'=>array(
            'slot_barcode'=>'',
            'slot_tapename'=>'',
            'slot_tapesequence'=>'',
            'pool_name'=>'',
            'library_uuid'=>'',
            'slot_index'=>'',),),
            'operate'=>'',
            'src_pool_name'=>'',
            'dst_pool_name'=>'',
            'freeze'=>'',
        );
        
        
        $res = $tapeV3 -> refreshTapeMedia($arr);
        $this->do_assert($res);
    }

    public function testFormatTapeMedia()
    {
        $tapeV3 = $this -> tapeV3;
        $arr = array(
            'backupset_info'=>array(
            '0'=>array(
            'copy_id'=>1,
            'bk_set_id'=>'',
            'stage'=>1,),),
            'erase_type'=>1,
            'erase_mode'=>1,
            'erase_times'=>1,
            'drive_num'=>1,
            'list'=>array(
            '0'=>array(
            'slot_barcode'=>'',
            'slot_tapename'=>'',
            'slot_tapesequence'=>'',
            'pool_name'=>'',
            'library_uuid'=>'',
            'slot_index'=>'',),),
            'operate'=>'',
            'src_pool_name'=>'',
            'dst_pool_name'=>'',
            'freeze'=>'',
        );
        
        
        $res = $tapeV3 -> formatTapeMedia($arr);
        $this->do_assert($res);
    }

    public function testEraseTapeMedia()
    {
        $tapeV3 = $this -> tapeV3;
        $arr = array(
            'backupset_info'=>array(
            '0'=>array(
            'copy_id'=>1,
            'bk_set_id'=>'',
            'stage'=>1,),),
            'erase_type'=>1,
            'erase_mode'=>1,
            'erase_times'=>1,
            'drive_num'=>1,
            'list'=>array(
            '0'=>array(
            'slot_barcode'=>'',
            'slot_tapename'=>'',
            'slot_tapesequence'=>'',
            'pool_name'=>'',
            'library_uuid'=>'',
            'slot_index'=>'',),),
            'operate'=>'',
            'src_pool_name'=>'',
            'dst_pool_name'=>'',
            'freeze'=>'',
        );
        
        
        $res = $tapeV3 -> eraseTapeMedia($arr);
        $this->do_assert($res);
    }

    public function testDeleteTapeMedia()
    {
        $tapeV3 = $this -> tapeV3;
        $arr = array(
            'backupset_info'=>array(
            '0'=>array(
            'copy_id'=>1,
            'bk_set_id'=>'',
            'stage'=>1,),),
            'erase_type'=>1,
            'erase_mode'=>1,
            'erase_times'=>1,
            'drive_num'=>1,
            'list'=>array(
            '0'=>array(
            'slot_barcode'=>'',
            'slot_tapename'=>'',
            'slot_tapesequence'=>'',
            'pool_name'=>'',
            'library_uuid'=>'',
            'slot_index'=>'',),),
            'operate'=>'',
            'src_pool_name'=>'',
            'dst_pool_name'=>'',
            'freeze'=>'',
        );
        
        
        $res = $tapeV3 -> deleteTapeMedia($arr);
        $this->do_assert($res);
    }

    public function testListTapeMedia()
    {
        $tapeV3 = $this -> tapeV3;
        $arr = array(
            'where_args'=>array(
            'library_uuid'=>'',
            'pool_name'=>'',
            'outbound'=>1,
            'slot_tapename'=>'',
            'slot_flag'=>'',),
            'type'=>1,
            'flag'=>1,
            'like_args'=>array(
            'bk_rule_name'=>'',
            'slot_barcode'=>'',),
            'direction'=>'',
            'order_by'=>'',
            'content_init'=>'',
        );
        
        
        $res = $tapeV3 -> listTapeMedia($arr);
        $this->do_assert($res);
    }

    public function testListTapeMediaBkData()
    {
        $tapeV3 = $this -> tapeV3;
        $arr = array(
            'slot_barcode'=>'',
            'limit'=>'',
            'page'=>'',
            'begin_time'=>'',
            'end_time'=>'',
            'check_rule'=>1,
            'task_uuid'=>'',
        );
        
        
        $res = $tapeV3 -> listTapeMediaBkData($arr);
        $this->do_assert($res);
    }

    public function testListTapeMediaBkFiles()
    {
        $tapeV3 = $this -> tapeV3;
        $arr = array(
            'slot_barcode'=>'',
            'bk_index'=>'',
            'bk_path'=>'',
            'limit'=>'',
            'page'=>'',
        );
        
        
        $res = $tapeV3 -> listTapeMediaBkFiles($arr);
        $this->do_assert($res);
    }

    public function testListTapeMediaDetails()
    {
        $tapeV3 = $this -> tapeV3;
        $arr = array(
            'slot_barcode'=>'',
            'bk_index'=>'',
            'bk_path'=>'',
            'limit'=>1,
            'page'=>1,
        );
        
        
        $res = $tapeV3 -> listTapeMediaDetails($arr);
        $this->do_assert($res);
    }

    public function testRefreshTapeLibrary()
    {
        $tapeV3 = $this -> tapeV3;
        $arr = array(
            'bk_uuids'=>array(),
        );
        
        
        $res = $tapeV3 -> refreshTapeLibrary($arr);
        $this->do_assert($res);
    }

    public function testListTapeLibraryRoboticArm()
    {
        $tapeV3 = $this -> tapeV3;
        $arr = array(
            'library_sn'=>'',
            'ctrl_host_uuid'=>'',
        );
        
        
        $res = $tapeV3 -> listTapeLibraryRoboticArm($arr);
        $this->do_assert($res);
    }

    public function testSetTapeLibraryFreezeNumber()
    {
        $tapeV3 = $this -> tapeV3;
        $arr = array(
            'medium_type'=>1,
            'library_sn'=>'',
            'freeze_number'=>1,
        );
        
        
        $res = $tapeV3 -> setTapeLibraryFreezeNumber($arr);
        $this->do_assert($res);
    }

    public function testModifyTapeLibraryRoboticArm()
    {
        $tapeV3 = $this -> tapeV3;
        $arr = array(
            'ctrl_host_uuid'=>'',
            'library_sn'=>'',
            'robotic_arm_info'=>array(
            '0'=>array(
            'dev_path'=>'\\/dev\\/sg11',
            'drive_num'=>4,
            'library_product'=>'L80',
            'library_revision'=>'0105',
            'library_sn'=>'XYZZY_B',
            'library_vendor'=>'STK',
            'slot_num'=>40,
            'checked'=>true,
            'bk_uuid'=>'269C3D29-3131-4F21-9392-17F0A3CD9368',
            'bk_node_name'=>'192.168.31.31',
            'server_type'=>0,),),
            'comment'=>'',
            'library_name'=>'',
            'save'=>1,
        );
        
        
        $res = $tapeV3 -> modifyTapeLibraryRoboticArm($arr);
        $this->do_assert($res);
    }

    public function testRegisterTapeLibraryBackupSvrDrivers()
    {
        $tapeV3 = $this -> tapeV3;
        $arr = array(
            'bk_uuid_list'=>array(),
            'library_sn'=>'',
        );
        
        
        $res = $tapeV3 -> registerTapeLibraryBackupSvrDrivers($arr);
        $this->do_assert($res);
    }

    public function testListTapeLibraryBackupSvrDrivers()
    {
        $tapeV3 = $this -> tapeV3;
        $arr = array(
            'bk_uuid_list'=>array(),
            'library_sn'=>'',
        );
        
        
        $res = $tapeV3 -> listTapeLibraryBackupSvrDrivers($arr);
        $this->do_assert($res);
    }

    public function testModifyTapeLibraryBackupSvr()
    {
        $tapeV3 = $this -> tapeV3;
        $arr = array(
            'library_sn'=>'',
            'bk_uuid_list'=>array(),
            'driver_info'=>array(
            '0'=>array(
            'bk_uuid'=>'',
            'bk_node_name'=>'',
            'driver_list'=>'',
            'library_sn'=>'',),),
        );
        
        
        $res = $tapeV3 -> modifyTapeLibraryBackupSvr($arr);
        $this->do_assert($res);
    }

    public function testModifyTapeLibraryDrivers()
    {
        $tapeV3 = $this -> tapeV3;
        $arr = array(
            'library_sn'=>'',
            'driver_info'=>array(),
        );
        
        
        $res = $tapeV3 -> modifyTapeLibraryDrivers($arr);
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