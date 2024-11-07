<?php
namespace i2up\Test\v20240819\resource;

use i2up\resource\v20240819\Tape;
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
            'library_sn'=>'',
            'bk_uuid_list'=>array(),
        );
        
        
        $res = $tape -> listTapeLibraryDrivers($arr);
        $this->do_assert($res);
    }

    public function testCreateTapeLibrary()
    {
        $tape = $this -> tape;
        $arr = array(
            'library_name'=>'磁带库1',
            'comment'=>'说明',
            'bk_uuid_list'=>array(
            '0'=>'D42BF707-C971-EEA9-521F-BB0F3F7A92FC',),
            'library_list'=>array(
            '0'=>array(
            'bk_uuid'=>' D42BF707-C971-EEA9-521F-BB0F3F7A92FC',
            'library_sn'=>'SYZZ_A',
            'library_vendor'=>'STK',
            'library_product'=>'L80',
            'library_revision'=>'0106',
            'drive_num'=>1,
            'slot_num'=>1,
            'dev_path'=>'/dev',
            'checked'=>false,),),
            'ctrl_host_uuid'=>'',
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
            '0'=>array(
            'checked'=>'',
            'index'=>'',
            'barcode'=>'',
            'driver_sn'=>'',
            'dev_path'=>'',
            'status'=>'',
            'last_write'=>'',),),),),
            'robotic_arm_info'=>array(),
            'slave'=>1,
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
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $tape -> describeTapeLibrary($arr);
        $this->do_assert($res);
    }

    public function testModifyTapeLibrary()
    {
        $tape = $this -> tape;
        $arr = array(
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
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
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
            'refresh_type'=>1,
        );
        
        
        $res = $tape -> refreshTapeLibrarySlot($arr);
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
            'library_uuids'=>array(),
            'operate'=>'',
            'list'=>array(
            '0'=>array(
            'ieslot_barcode'=>'',
            'ieslot_index'=>'',),),
        );
        
        
        $res = $tape -> importTapeLibrary($arr);
        $this->do_assert($res);
    }

    public function testListTapeLibraryStatus()
    {
        $tape = $this -> tape;
        $arr = array(
            'library_uuids'=>array(),
        );
        
        
        $res = $tape -> listTapeLibraryStatus($arr);
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
            'operate'=>'',
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
            'operate'=>'',
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
            'comment'=>'',
            'note'=>'',
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
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
            'list'=>array(
            '0'=>array(
            'library_uuid'=>'',
            'slot_index'=>'',
            'slot_barcode'=>'',
            'slot_tapename'=>'',
            'slot_tapesequence'=>'',
            'pool_name'=>'',),),
            'operate'=>'',
            'src_pool_name'=>'',
            'dst_pool_name'=>'',
            'freeze'=>'',
            'backupset_info'=>array(
            '0'=>array(
            'copy_id'=>1,
            'bk_set_id'=>'',
            'stage'=>1,),),
            'erase_type'=>1,
            'erase_mode'=>1,
            'erase_times'=>1,
            'drive_num'=>1,
        );
        
        
        $res = $tape -> freezeTapeMedia($arr);
        $this->do_assert($res);
    }

    public function testBrowseTapeMedia()
    {
        $tape = $this -> tape;
        $arr = array(
            'list'=>array(
            '0'=>array(
            'library_uuid'=>'',
            'slot_index'=>'',
            'slot_barcode'=>'',
            'slot_tapename'=>'',
            'slot_tapesequence'=>'',
            'pool_name'=>'',),),
            'operate'=>'',
            'src_pool_name'=>'',
            'dst_pool_name'=>'',
            'freeze'=>'',
            'backupset_info'=>array(
            '0'=>array(
            'copy_id'=>1,
            'bk_set_id'=>'',
            'stage'=>1,),),
            'erase_type'=>1,
            'erase_mode'=>1,
            'erase_times'=>1,
            'drive_num'=>1,
        );
        
        
        $res = $tape -> browseTapeMedia($arr);
        $this->do_assert($res);
    }

    public function testRebuildTapeMedia()
    {
        $tape = $this -> tape;
        $arr = array(
            'list'=>array(
            '0'=>array(
            'library_uuid'=>'',
            'slot_index'=>'',
            'slot_barcode'=>'',
            'slot_tapename'=>'',
            'slot_tapesequence'=>'',
            'pool_name'=>'',),),
            'operate'=>'',
            'src_pool_name'=>'',
            'dst_pool_name'=>'',
            'freeze'=>'',
            'backupset_info'=>array(
            '0'=>array(
            'copy_id'=>1,
            'bk_set_id'=>'',
            'stage'=>1,),),
            'erase_type'=>1,
            'erase_mode'=>1,
            'erase_times'=>1,
            'drive_num'=>1,
        );
        
        
        $res = $tape -> rebuildTapeMedia($arr);
        $this->do_assert($res);
    }

    public function testExportTapeMedia()
    {
        $tape = $this -> tape;
        $arr = array(
            'list'=>array(
            '0'=>array(
            'library_uuid'=>'',
            'slot_index'=>'',
            'slot_barcode'=>'',
            'slot_tapename'=>'',
            'slot_tapesequence'=>'',
            'pool_name'=>'',),),
            'operate'=>'',
            'src_pool_name'=>'',
            'dst_pool_name'=>'',
            'freeze'=>'',
            'backupset_info'=>array(
            '0'=>array(
            'copy_id'=>1,
            'bk_set_id'=>'',
            'stage'=>1,),),
            'erase_type'=>1,
            'erase_mode'=>1,
            'erase_times'=>1,
            'drive_num'=>1,
        );
        
        
        $res = $tape -> exportTapeMedia($arr);
        $this->do_assert($res);
    }

    public function testMoveTapeMedia()
    {
        $tape = $this -> tape;
        $arr = array(
            'list'=>array(
            '0'=>array(
            'library_uuid'=>'',
            'slot_index'=>'',
            'slot_barcode'=>'',
            'slot_tapename'=>'',
            'slot_tapesequence'=>'',
            'pool_name'=>'',),),
            'operate'=>'',
            'src_pool_name'=>'',
            'dst_pool_name'=>'',
            'freeze'=>'',
            'backupset_info'=>array(
            '0'=>array(
            'copy_id'=>1,
            'bk_set_id'=>'',
            'stage'=>1,),),
            'erase_type'=>1,
            'erase_mode'=>1,
            'erase_times'=>1,
            'drive_num'=>1,
        );
        
        
        $res = $tape -> moveTapeMedia($arr);
        $this->do_assert($res);
    }

    public function testRefreshTapeMedia()
    {
        $tape = $this -> tape;
        $arr = array(
            'list'=>array(
            '0'=>array(
            'library_uuid'=>'',
            'slot_index'=>'',
            'slot_barcode'=>'',
            'slot_tapename'=>'',
            'slot_tapesequence'=>'',
            'pool_name'=>'',),),
            'operate'=>'',
            'src_pool_name'=>'',
            'dst_pool_name'=>'',
            'freeze'=>'',
            'backupset_info'=>array(
            '0'=>array(
            'copy_id'=>1,
            'bk_set_id'=>'',
            'stage'=>1,),),
            'erase_type'=>1,
            'erase_mode'=>1,
            'erase_times'=>1,
            'drive_num'=>1,
        );
        
        
        $res = $tape -> refreshTapeMedia($arr);
        $this->do_assert($res);
    }

    public function testFormatTapeMedia()
    {
        $tape = $this -> tape;
        $arr = array(
            'list'=>array(
            '0'=>array(
            'library_uuid'=>'',
            'slot_index'=>'',
            'slot_barcode'=>'',
            'slot_tapename'=>'',
            'slot_tapesequence'=>'',
            'pool_name'=>'',),),
            'operate'=>'',
            'src_pool_name'=>'',
            'dst_pool_name'=>'',
            'freeze'=>'',
            'backupset_info'=>array(
            '0'=>array(
            'copy_id'=>1,
            'bk_set_id'=>'',
            'stage'=>1,),),
            'erase_type'=>1,
            'erase_mode'=>1,
            'erase_times'=>1,
            'drive_num'=>1,
        );
        
        
        $res = $tape -> formatTapeMedia($arr);
        $this->do_assert($res);
    }

    public function testEraseTapeMedia()
    {
        $tape = $this -> tape;
        $arr = array(
            'list'=>array(
            '0'=>array(
            'library_uuid'=>'',
            'slot_index'=>'',
            'slot_barcode'=>'',
            'slot_tapename'=>'',
            'slot_tapesequence'=>'',
            'pool_name'=>'',),),
            'operate'=>'',
            'src_pool_name'=>'',
            'dst_pool_name'=>'',
            'freeze'=>'',
            'backupset_info'=>array(
            '0'=>array(
            'copy_id'=>1,
            'bk_set_id'=>'',
            'stage'=>1,),),
            'erase_type'=>1,
            'erase_mode'=>1,
            'erase_times'=>1,
            'drive_num'=>1,
        );
        
        
        $res = $tape -> eraseTapeMedia($arr);
        $this->do_assert($res);
    }

    public function testDeleteTapeMedia()
    {
        $tape = $this -> tape;
        $arr = array(
            'list'=>array(
            '0'=>array(
            'library_uuid'=>'',
            'slot_index'=>'',
            'slot_barcode'=>'',
            'slot_tapename'=>'',
            'slot_tapesequence'=>'',
            'pool_name'=>'',),),
            'operate'=>'',
            'src_pool_name'=>'',
            'dst_pool_name'=>'',
            'freeze'=>'',
            'backupset_info'=>array(
            '0'=>array(
            'copy_id'=>1,
            'bk_set_id'=>'',
            'stage'=>1,),),
            'erase_type'=>1,
            'erase_mode'=>1,
            'erase_times'=>1,
            'drive_num'=>1,
        );
        
        
        $res = $tape -> deleteTapeMedia($arr);
        $this->do_assert($res);
    }

    public function testListTapeMedia()
    {
        $tape = $this -> tape;
        $arr = array(
            'type'=>1,
            'flag'=>1,
            'content_init'=>'',
            'where_args'=>array(
            'library_uuid'=>'',
            'pool_name'=>'',
            'outbound'=>1,
            'slot_tapename'=>'',
            'slot_flag'=>'',),
            'like_args'=>array(
            'bk_rule_name'=>'',
            'slot_barcode'=>'',),
            'direction'=>'',
            'order_by'=>'',
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
            'ctrl_host_uuid'=>'',
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

    public function testModifyTapeLibraryRoboticArm()
    {
        $tape = $this -> tape;
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
        
        
        $res = $tape -> modifyTapeLibraryRoboticArm($arr);
        $this->do_assert($res);
    }

    public function testListTapeLibraryBackupSvrDrivers()
    {
        $tape = $this -> tape;
        $arr = array(
            'bk_uuid_list'=>array(),
            'library_sn'=>'',
        );
        
        
        $res = $tape -> listTapeLibraryBackupSvrDrivers($arr);
        $this->do_assert($res);
    }

    public function testModifyTapeLibraryBackupSvr()
    {
        $tape = $this -> tape;
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
        
        
        $res = $tape -> modifyTapeLibraryBackupSvr($arr);
        $this->do_assert($res);
    }

    public function testModifyTapeLibraryDrivers()
    {
        $tape = $this -> tape;
        $arr = array(
            'library_sn'=>'',
            'driver_info'=>array(),
        );
        
        
        $res = $tape -> modifyTapeLibraryDrivers($arr);
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