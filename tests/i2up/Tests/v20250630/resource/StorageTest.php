<?php
namespace i2up\Test\v20250630\resource;

use i2up\resource\v20250630\Storage;
use i2up\common\Auth;
                
class StorageTest extends \PHPUnit_Framework_TestCase
 {
    private $storage;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> storage = new Storage(new Auth());
    }

    public function testCreateStorageConfig()
    {
        $storage = $this -> storage;
        $arr = array(
            'name'=>'2.85',
            'type'=>0,
            'bk_uuid'=>'7E36A0B7-7C9A-D310-645A-F9FF7972F13F',
            'config'=>array(
            'device_info'=>array(
            '0'=>array(
            'dev_mount'=>'C:\\',
            'alarms'=>array(
            '0'=>'80',
            '1'=>'90',),),),
            'biz_grp_list'=>'',
            'backstore'=>array(
            '0'=>array(
            'name'=>'',
            'path'=>'',
            'capacity'=>'',
            'target_name'=>'',),),
            'db_save_day'=>2,
            'mon_storage'=>1,),
        );
        
        
        $res = $storage -> createStorageConfig($arr);
        $this->do_assert($res);
    }

    public function testModifyStorageConfig()
    {
        $storage = $this -> storage;
        $arr = array(
            'name'=>'test',
            'type'=>0,
            'bk_uuid'=>'7E36A0B7-7C9A-D310-645A-F9FF7972F13F',
            'config'=>array(
            'mon_storage'=>1,
            'db_save_day'=>30,
            'device_info'=>array(
            '0'=>array(
            'dev_used_percent'=>28,
            'dev_name'=>'/dev/mapper/centos-root',
            'dev_mount'=>'/',
            'dev_total'=>'36.97 GB',
            'dev_free'=>'26.72 GB',
            'dev_type'=>'block',
            'dev_enb_compress'=>'N',
            'dev_enb_wight'=>'N',
            'dev_save_rate'=>'0%',
            'node_name'=>'MTQx',
            'node_role'=>'3',
            'dev_used_size'=>'11006136320',
            'alarms'=>array(
            '0'=>90,
            '1'=>100,
            '2'=>70,),
            'disabled'=>true,
            'name'=>'/',),
            '1'=>array(
            'dev_used_percent'=>29,
            'dev_name'=>'/dev/sda1',
            'dev_mount'=>'/boot',
            'dev_total'=>'0.99 GB',
            'dev_free'=>'871.58 MB',
            'dev_type'=>'block',
            'dev_enb_compress'=>'N',
            'dev_enb_wight'=>'N',
            'dev_save_rate'=>'0%',
            'node_name'=>'MTQx',
            'node_role'=>'3',
            'dev_used_size'=>'149336064',
            'alarms'=>array(
            '0'=>90,
            '1'=>100,
            '2'=>70,),
            'disabled'=>true,
            'name'=>'/boot',),),
            'biz_grp_list'=>'',),
            'random_str'=>'0289FA79-85C3-5D0B-2835-A454EF4A4237',
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $storage -> modifyStorageConfig($arr);
        $this->do_assert($res);
    }

    public function testDescribeStorageConfig()
    {
        $storage = $this -> storage;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $storage -> describeStorageConfig($arr);
        $this->do_assert($res);
    }

    public function testListStorageConfig()
    {
        $storage = $this -> storage;
        $arr = array(
            'search_value'=>'118',
            'search_field'=>'bk_node_name',
            'limit'=>1,
            'page'=>1,
            'direction'=>'',
        );
        
        
        $res = $storage -> listStorageConfig($arr);
        $this->do_assert($res);
    }

    public function testDeleteStorageConfig()
    {
        $storage = $this -> storage;
        $arr = array(
            'uuids'=>array(),
            'delete_quota'=>1,
            'force'=>1,
        );
        
        
        $res = $storage -> deleteStorageConfig($arr);
        $this->do_assert($res);
    }

    public function testListStorageStatus()
    {
        $storage = $this -> storage;
        $arr = array(
            'uuids'=>array(
            '0'=>'FBDDEBDE-41CC-175B-9D84-4D9693EEB6C6',
            '1'=>'643cec3e-f21E-8874-A817-eE52DEF143Fd',),
            'force_refresh'=>1,
        );
        
        
        $res = $storage -> listStorageStatus($arr);
        $this->do_assert($res);
    }

    public function testUploadDeviceInfo()
    {
        $storage = $this -> storage;
        $arr = array(
            'node_uuid'=>'67E33CDB-D75B-15B3-367D-50C764F5A26F',
            'device_info'=>array(
            '0'=>array(
            'dev_mount'=>'C:\\',
            'dev_total'=>'42580570112',
            'dev_free'=>'9151045632',
            'dev_used_percent'=>20,),),
            'Content-Type'=>'application/json',
        );
        
        
        $res = $storage -> uploadDeviceInfo($arr);
        $this->do_assert($res);
    }

    public function testDescribeStorageDeviceInfo()
    {
        $storage = $this -> storage;
        $arr = array(
            'node_uuid'=>'7E36A0B7-7C9A-D310-645A-F9FF7972F13F',
        );
        
        
        $res = $storage -> describeStorageDeviceInfo($arr);
        $this->do_assert($res);
    }

    public function testDescribeStorageHistoryData()
    {
        $storage = $this -> storage;
        $arr = array(
            'start'=>1565076908,
            'type'=>0,
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $storage -> describeStorageHistoryData($arr);
        $this->do_assert($res);
    }

    public function testListStorageInfo()
    {
        $storage = $this -> storage;
        $arr = array(
            'node_uuid'=>'67E33CDB-D75B-15B3-367D-50C764F5A26F',
            'rep_uuid'=>'F97B3FD5-4D5D-41EE-22A9-740A74E1E13C',
            'byte_format'=>1,
        );
        
        
        $res = $storage -> listStorageInfo($arr);
        $this->do_assert($res);
    }

    public function testListAvailableNode()
    {
        $storage = $this -> storage;
        $arr = array();
        
        
        $res = $storage -> listAvailableNode($arr);
        $this->do_assert($res);
    }

    public function testSwitchStorageQuota()
    {
        $storage = $this -> storage;
        $arr = array(
            'quota_switch'=>1,
            'random_str'=>'A5AE270D-B6E5-A3C4-14B4-CAC997B87AB2',
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $storage -> switchStorageQuota($arr);
        $this->do_assert($res);
    }

    public function testCreateStorageQuota()
    {
        $storage = $this -> storage;
        $arr = array(
            'zpool_name'=>'2.85',
            'zfs_name'=>'xxx',
            'zfs_mount_path'=>'',
            'zfs_quota'=>1,
            'user_uuid'=>'',
            'compress'=>1,
            'dedup'=>1,
            'create_fs'=>1,
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $storage -> createStorageQuota($arr);
        $this->do_assert($res);
    }

    public function testModifyStorageQuota()
    {
        $storage = $this -> storage;
        $arr = array(
            'zpool_name'=>'2.85',
            'zfs_name'=>'xxx',
            'zfs_mount_path'=>'',
            'zfs_quota'=>1,
            'random_str'=>'',
        );
        $arr['uuid1'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        $arr['uuid2'] = "33D03E06-94D0-5E2C-336E-4BEEC2D28EC4";

        $res = $storage -> modifyStorageQuota($arr);
        $this->do_assert($res);
    }

    public function testListStorageQuota()
    {
        $storage = $this -> storage;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $storage -> listStorageQuota($arr);
        $this->do_assert($res);
    }

    public function testDeleteStorageQuota()
    {
        $storage = $this -> storage;
        $arr = array(
            'quota_uuids'=>array(),
            'force'=>0,
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $storage -> deleteStorageQuota($arr);
        $this->do_assert($res);
    }

    public function testListDevice()
    {
        $storage = $this -> storage;
        $arr = array(
            'node_uuid'=>'',
        );
        
        
        $res = $storage -> listDevice($arr);
        $this->do_assert($res);
    }

    public function testListAvailableDevice()
    {
        $storage = $this -> storage;
        $arr = array(
            'node_uuid'=>'',
            'config_addr'=>'',
        );
        
        
        $res = $storage -> listAvailableDevice($arr);
        $this->do_assert($res);
    }

    public function testCreatePool()
    {
        $storage = $this -> storage;
        $arr = array(
            'node_uuid'=>'',
            'count'=>1,
            'dev_list'=>array(),
            'pool_name'=>'',
        );
        
        
        $res = $storage -> createPool($arr);
        $this->do_assert($res);
    }

    public function testExpandPool()
    {
        $storage = $this -> storage;
        $arr = array(
            'node_uuid'=>'',
            'count'=>1,
            'dev_list'=>array(),
            'pool_name'=>'',
        );
        
        
        $res = $storage -> expandPool($arr);
        $this->do_assert($res);
    }

    public function testDeletePool()
    {
        $storage = $this -> storage;
        $arr = array(
            'node_uuid'=>'',
            'pool_name'=>'',
        );
        
        
        $res = $storage -> deletePool($arr);
        $this->do_assert($res);
    }

    public function testListPool()
    {
        $storage = $this -> storage;
        $arr = array(
            'pool_name'=>'',
            'node_uuid'=>'',
        );
        
        
        $res = $storage -> listPool($arr);
        $this->do_assert($res);
    }

    public function testListPoolInfo()
    {
        $storage = $this -> storage;
        $arr = array(
            'node_uuid'=>'',
            'pool_name'=>'testpool',
        );
        
        
        $res = $storage -> listPoolInfo($arr);
        $this->do_assert($res);
    }

    public function testListPoolFromNode()
    {
        $storage = $this -> storage;
        $arr = array(
            'node_uuid'=>'',
        );
        
        
        $res = $storage -> listPoolFromNode($arr);
        $this->do_assert($res);
    }

    public function testCreateFs()
    {
        $storage = $this -> storage;
        $arr = array(
            'node_uuid'=>'',
            'pool_name'=>'',
            'fs_name'=>'',
            'mountpoint_path'=>'',
            'source_disk_size'=>'',
        );
        
        
        $res = $storage -> createFs($arr);
        $this->do_assert($res);
    }

    public function testDeleteFs()
    {
        $storage = $this -> storage;
        $arr = array(
            'node_uuid'=>'',
            'pool_name'=>'',
            'fs_name'=>'',
            'force'=>1,
        );
        
        
        $res = $storage -> deleteFs($arr);
        $this->do_assert($res);
    }

    public function testListFs()
    {
        $storage = $this -> storage;
        $arr = array(
            'pool_name'=>'',
            'fs_name'=>'',
            'node_uuid'=>'',
            'eligible_file_system_size'=>1,
        );
        
        
        $res = $storage -> listFs($arr);
        $this->do_assert($res);
    }

    public function testCreateFsSnapshot()
    {
        $storage = $this -> storage;
        $arr = array(
            'node_uuid'=>'',
            'pool_name'=>'',
            'fs_name'=>'',
            'snap_name'=>'',
        );
        
        
        $res = $storage -> createFsSnapshot($arr);
        $this->do_assert($res);
    }

    public function testDeleteFsSnapshot()
    {
        $storage = $this -> storage;
        $arr = array(
            'node_uuid'=>'',
            'pool_name'=>'',
            'fs_name'=>'',
            'snap_name'=>'',
            'force'=>1,
        );
        
        
        $res = $storage -> deleteFsSnapshot($arr);
        $this->do_assert($res);
    }

    public function testListFsSnapshot()
    {
        $storage = $this -> storage;
        $arr = array(
            'pool_name'=>'',
            'fs_name'=>'',
            'snap_name'=>'',
            'node_uuid'=>'',
        );
        
        
        $res = $storage -> listFsSnapshot($arr);
        $this->do_assert($res);
    }

    public function testCreateFsCloneSnapshot()
    {
        $storage = $this -> storage;
        $arr = array(
            'node_uuid'=>'',
            'pool_name'=>'',
            'fs_name'=>'',
            'snap_name'=>'',
            'clone_name'=>'',
        );
        
        
        $res = $storage -> createFsCloneSnapshot($arr);
        $this->do_assert($res);
    }

    public function testDeleteFsCloneSnapshot()
    {
        $storage = $this -> storage;
        $arr = array(
            'node_uuid'=>'',
            'pool_name'=>'',
            'clone_name'=>'',
        );
        
        
        $res = $storage -> deleteFsCloneSnapshot($arr);
        $this->do_assert($res);
    }

    public function testListFsCloneSnapshot()
    {
        $storage = $this -> storage;
        $arr = array(
            'node_uuid'=>'',
            'pool_name'=>'',
            'fs_name'=>'',
            'snap_name'=>'',
        );
        
        
        $res = $storage -> listFsCloneSnapshot($arr);
        $this->do_assert($res);
    }

    public function testCreateVolume()
    {
        $storage = $this -> storage;
        $arr = array(
            'node_uuid'=>'',
            'pool_name'=>'',
            'volume_name'=>'',
            'volume_size'=>'',
            'volume_attr'=>1,
        );
        
        
        $res = $storage -> createVolume($arr);
        $this->do_assert($res);
    }

    public function testDeleteVolume()
    {
        $storage = $this -> storage;
        $arr = array(
            'node_uuid'=>'',
            'pool_name'=>'',
            'volume_name'=>'',
            'force'=>1,
        );
        
        
        $res = $storage -> deleteVolume($arr);
        $this->do_assert($res);
    }

    public function testListVolume()
    {
        $storage = $this -> storage;
        $arr = array(
            'pool_name'=>'',
            'volume_name'=>'',
            'node_uuid'=>'',
            'eligible_volume_size'=>1,
        );
        
        
        $res = $storage -> listVolume($arr);
        $this->do_assert($res);
    }

    public function testCreateVolumeSnapshot()
    {
        $storage = $this -> storage;
        $arr = array(
            'node_uuid'=>'',
            'pool_name'=>'',
            'volume_name'=>'',
            'snap_name'=>'',
        );
        
        
        $res = $storage -> createVolumeSnapshot($arr);
        $this->do_assert($res);
    }

    public function testDeleteVolumeSnapshot()
    {
        $storage = $this -> storage;
        $arr = array(
            'node_uuid'=>'',
            'pool_name'=>'',
            'volume_name'=>'',
            'snap_name'=>'',
            'force'=>1,
        );
        
        
        $res = $storage -> deleteVolumeSnapshot($arr);
        $this->do_assert($res);
    }

    public function testListVolumeSnapshot()
    {
        $storage = $this -> storage;
        $arr = array(
            'pool_name'=>'',
            'volume_name'=>'',
            'snap_name'=>'',
            'node_uuid'=>'',
        );
        
        
        $res = $storage -> listVolumeSnapshot($arr);
        $this->do_assert($res);
    }

    public function testCreateVolumeCloneSnapshot()
    {
        $storage = $this -> storage;
        $arr = array(
            'node_uuid'=>'',
            'pool_name'=>'',
            'volume_name'=>'',
            'snap_name'=>'',
            'clone_name'=>'',
        );
        
        
        $res = $storage -> createVolumeCloneSnapshot($arr);
        $this->do_assert($res);
    }

    public function testDeleteVolumeCloneSnapshot()
    {
        $storage = $this -> storage;
        $arr = array(
            'node_uuid'=>'',
            'pool_name'=>'',
            'clone_name'=>'',
        );
        
        
        $res = $storage -> deleteVolumeCloneSnapshot($arr);
        $this->do_assert($res);
    }

    public function testListVolumeCloneSnapshot()
    {
        $storage = $this -> storage;
        $arr = array(
            'node_uuid'=>'',
            'pool_name'=>'',
            'volume_name'=>'',
            'snap_name'=>'',
        );
        
        
        $res = $storage -> listVolumeCloneSnapshot($arr);
        $this->do_assert($res);
    }

    public function testCreateVMDK()
    {
        $storage = $this -> storage;
        $arr = array();
        
        
        $res = $storage -> createVMDK($arr);
        $this->do_assert($res);
    }

    public function testDeleteVMDK()
    {
        $storage = $this -> storage;
        $arr = array();
        
        
        $res = $storage -> deleteVMDK($arr);
        $this->do_assert($res);
    }

    public function testCreateBackStore()
    {
        $storage = $this -> storage;
        $arr = array(
            'name'=>'name',
            'path'=>'/path/',
            'node_uuid'=>'AFAFDFDF-AFAF-AFAF-AFAF-AFAFAFAFAFAF',
            'capacity'=>'100',
        );
        
        
        $res = $storage -> createBackStore($arr);
        $this->do_assert($res);
    }

    public function testDeleteBackStore()
    {
        $storage = $this -> storage;
        $arr = array(
            'name'=>'bs',
            'node_uuid'=>'AFAFDFDF-AFAF-AFAF-AFAF-AFAFAFAFAFAF',
            'force'=>1,
        );
        
        
        $res = $storage -> deleteBackStore($arr);
        $this->do_assert($res);
    }

    public function testListBackStore()
    {
        $storage = $this -> storage;
        $arr = array(
            'node_uuid'=>'',
        );
        
        
        $res = $storage -> listBackStore($arr);
        $this->do_assert($res);
    }

    public function testCreateAssignBackStore()
    {
        $storage = $this -> storage;
        $arr = array(
            'name'=>'',
            'target'=>'',
            'tpg_number'=>'',
            'initiator'=>'',
            'node_uuid'=>'',
        );
        
        
        $res = $storage -> createAssignBackStore($arr);
        $this->do_assert($res);
    }

    public function testListAssignBackStore()
    {
        $storage = $this -> storage;
        $arr = array(
            'path'=>'',
            'node_uuid'=>'',
        );
        
        
        $res = $storage -> listAssignBackStore($arr);
        $this->do_assert($res);
    }

    public function testListBackStoreAvailablePath()
    {
        $storage = $this -> storage;
        $arr = array(
            'node_uuid'=>'',
        );
        
        
        $res = $storage -> listBackStoreAvailablePath($arr);
        $this->do_assert($res);
    }

    public function testDescribeIscsiVersion()
    {
        $storage = $this -> storage;
        $arr = array(
            'node_uuid'=>'',
        );
        
        
        $res = $storage -> describeIscsiVersion($arr);
        $this->do_assert($res);
    }

    public function testDescribeIscsiAuth()
    {
        $storage = $this -> storage;
        $arr = array(
            'node_uuid'=>'',
        );
        
        
        $res = $storage -> describeIscsiAuth($arr);
        $this->do_assert($res);
    }

    public function testCreateIscsiDiscoverAuth()
    {
        $storage = $this -> storage;
        $arr = array(
            'userid'=>'',
            'password'=>'',
            'mutual_userid'=>'',
            'mutual_password'=>'',
            'node_uuid'=>'',
        );
        
        
        $res = $storage -> createIscsiDiscoverAuth($arr);
        $this->do_assert($res);
    }

    public function testDeleteIscsiDiscoverAuth()
    {
        $storage = $this -> storage;
        $arr = array(
            'node_uuid'=>'',
        );
        
        
        $res = $storage -> deleteIscsiDiscoverAuth($arr);
        $this->do_assert($res);
    }

    public function testCreateAutoAddPortal()
    {
        $storage = $this -> storage;
        $arr = array(
            'node_uuid'=>'',
            'auto_add_default_portal'=>0,
        );
        
        
        $res = $storage -> createAutoAddPortal($arr);
        $this->do_assert($res);
    }

    public function testCreateAutoAddLun()
    {
        $storage = $this -> storage;
        $arr = array(
            'node_uuid'=>'',
            'auto_add_mapped_luns'=>0,
        );
        
        
        $res = $storage -> createAutoAddLun($arr);
        $this->do_assert($res);
    }

    public function testDescribeAutoAddPortal()
    {
        $storage = $this -> storage;
        $arr = array(
            'node_uuid'=>'',
        );
        
        
        $res = $storage -> describeAutoAddPortal($arr);
        $this->do_assert($res);
    }

    public function testDescribeAutoAddLun()
    {
        $storage = $this -> storage;
        $arr = array(
            'node_uuid'=>'',
        );
        
        
        $res = $storage -> describeAutoAddLun($arr);
        $this->do_assert($res);
    }

    public function testDescribeIscsiTargetStatus()
    {
        $storage = $this -> storage;
        $arr = array(
            'node_uuid'=>'',
        );
        
        
        $res = $storage -> describeIscsiTargetStatus($arr);
        $this->do_assert($res);
    }

    public function testListIscsiTarget()
    {
        $storage = $this -> storage;
        $arr = array(
            'node_uuid'=>'',
        );
        
        
        $res = $storage -> listIscsiTarget($arr);
        $this->do_assert($res);
    }

    public function testCreateIscsiTarget()
    {
        $storage = $this -> storage;
        $arr = array(
            'name'=>'',
            'node_uuid'=>'',
        );
        
        
        $res = $storage -> createIscsiTarget($arr);
        $this->do_assert($res);
    }

    public function testDeleteIscsiTarget()
    {
        $storage = $this -> storage;
        $arr = array(
            'name'=>'',
            'node_uuid'=>'',
            'force'=>1,
        );
        
        
        $res = $storage -> deleteIscsiTarget($arr);
        $this->do_assert($res);
    }

    public function testListIscsiTargetList()
    {
        $storage = $this -> storage;
        $arr = array(
            'bk_uuid'=>'',
        );
        
        
        $res = $storage -> listIscsiTargetList($arr);
        $this->do_assert($res);
    }

    public function testCreateIscsiInitiator()
    {
        $storage = $this -> storage;
        $arr = array(
            'target_name'=>'',
            'tpg_number'=>1,
            'initiator_name'=>'',
            'node_uuid'=>'',
        );
        
        
        $res = $storage -> createIscsiInitiator($arr);
        $this->do_assert($res);
    }

    public function testDeleteIscsiInitiator()
    {
        $storage = $this -> storage;
        $arr = array(
            'target_name'=>'',
            'tpg_number'=>1,
            'initiator_name'=>'',
            'node_uuid'=>'',
            'force'=>1,
        );
        
        
        $res = $storage -> deleteIscsiInitiator($arr);
        $this->do_assert($res);
    }

    public function testCreateIscsiInitiatorConnectAuth()
    {
        $storage = $this -> storage;
        $arr = array(
            'target_name'=>'',
            'tpg_number'=>1,
            'initiator_name'=>'',
            'user_id'=>'',
            'password'=>'',
            'mutual_userid'=>'',
            'mutual_password'=>'',
            'node_uuid'=>'',
        );
        
        
        $res = $storage -> createIscsiInitiatorConnectAuth($arr);
        $this->do_assert($res);
    }

    public function testCreateIscsiInitiatorLun()
    {
        $storage = $this -> storage;
        $arr = array(
            'target_name'=>'',
            'tpg_number'=>1,
            'initiator_name'=>'',
            'backstore_name'=>'',
            'node_uuid'=>'',
        );
        
        
        $res = $storage -> createIscsiInitiatorLun($arr);
        $this->do_assert($res);
    }

    public function testDeleteIscsiInitiatorLun()
    {
        $storage = $this -> storage;
        $arr = array(
            'target_name'=>'',
            'tpg_number'=>1,
            'initiator_name'=>'',
            'initiator_lun_no'=>1,
            'node_uuid'=>'',
        );
        
        
        $res = $storage -> deleteIscsiInitiatorLun($arr);
        $this->do_assert($res);
    }

    public function testCreateIscsiInitiatorDiscoverTarget()
    {
        $storage = $this -> storage;
        $arr = array(
            'node_uuid'=>'',
            'portal_address'=>'',
            'portal_port'=>1,
            'auth_type'=>1,
            'user_name'=>'',
            'password'=>'',
            'hba_name'=>'',
        );
        
        
        $res = $storage -> createIscsiInitiatorDiscoverTarget($arr);
        $this->do_assert($res);
    }

    public function testCreateIscsiInitiatorConnectTarget()
    {
        $storage = $this -> storage;
        $arr = array(
            'node_uuid'=>'',
            'portal_address'=>'',
            'portal_port'=>1,
            'auth_type'=>1,
            'user_name'=>'',
            'password'=>'',
            'target'=>'',
        );
        
        
        $res = $storage -> createIscsiInitiatorConnectTarget($arr);
        $this->do_assert($res);
    }

    public function testDeleteIscsiInitiatorConnectTarget()
    {
        $storage = $this -> storage;
        $arr = array(
            'node_uuid'=>'',
            'target_name'=>'',
            'address'=>'',
        );
        
        
        $res = $storage -> deleteIscsiInitiatorConnectTarget($arr);
        $this->do_assert($res);
    }

    public function testListIscsiInitiatorPortal()
    {
        $storage = $this -> storage;
        $arr = array(
            'node_uuid'=>'',
        );
        
        
        $res = $storage -> listIscsiInitiatorPortal($arr);
        $this->do_assert($res);
    }

    public function testDeleteIscsiInitiatorPortal()
    {
        $storage = $this -> storage;
        $arr = array(
            'node_uuid'=>'',
            'address'=>'',
            'port_no'=>1,
        );
        
        
        $res = $storage -> deleteIscsiInitiatorPortal($arr);
        $this->do_assert($res);
    }

    public function testIscsiInitiatorRefreshSession()
    {
        $storage = $this -> storage;
        $arr = array(
            'node_uuid'=>'',
        );
        
        
        $res = $storage -> iscsiInitiatorRefreshSession($arr);
        $this->do_assert($res);
    }

    public function testListTpg()
    {
        $storage = $this -> storage;
        $arr = array(
            'node_uuid'=>'',
            'target_name'=>'',
            'tpg_number'=>1,
        );
        
        
        $res = $storage -> listTpg($arr);
        $this->do_assert($res);
    }

    public function testCreateTpg()
    {
        $storage = $this -> storage;
        $arr = array(
            'target_name'=>'',
            'node_uuid'=>'',
        );
        
        
        $res = $storage -> createTpg($arr);
        $this->do_assert($res);
    }

    public function testDeleteTpg()
    {
        $storage = $this -> storage;
        $arr = array(
            'target_name'=>'',
            'tpg_number'=>1,
            'node_uuid'=>'',
            'force'=>1,
        );
        
        
        $res = $storage -> deleteTpg($arr);
        $this->do_assert($res);
    }

    public function testCreateTpgConnectAuth()
    {
        $storage = $this -> storage;
        $arr = array(
            'target_name'=>'',
            'tpg_number'=>1,
            'userid'=>'',
            'password'=>'',
            'mutual_userid'=>'',
            'mutual_password'=>'',
            'node_uuid'=>'',
        );
        
        
        $res = $storage -> createTpgConnectAuth($arr);
        $this->do_assert($res);
    }

    public function testDeleteTpgConnectAuth()
    {
        $storage = $this -> storage;
        $arr = array(
            'target_name'=>'',
            'tpg_number'=>1,
            'node_uuid'=>'',
        );
        
        
        $res = $storage -> deleteTpgConnectAuth($arr);
        $this->do_assert($res);
    }

    public function testCreateTpgLun()
    {
        $storage = $this -> storage;
        $arr = array(
            'node_uuid'=>'',
            'target_name'=>'',
            'tpg_number'=>1,
            'backstore_name'=>'',
            'name'=>'name',
            'path'=>'/path/',
            'capacity'=>'100',
        );
        
        
        $res = $storage -> createTpgLun($arr);
        $this->do_assert($res);
    }

    public function testDescribeTpgConnectAuth()
    {
        $storage = $this -> storage;
        $arr = array(
            'node_uuid'=>'',
            'target_name'=>'',
            'tpg_number'=>1,
        );
        
        
        $res = $storage -> describeTpgConnectAuth($arr);
        $this->do_assert($res);
    }

    public function testDeleteTpgLun()
    {
        $storage = $this -> storage;
        $arr = array(
            'target_name'=>'',
            'tpg_number'=>1,
            'tpg_lun_no'=>1,
            'node_uuid'=>'',
            'force'=>1,
        );
        
        
        $res = $storage -> deleteTpgLun($arr);
        $this->do_assert($res);
    }

    public function testCreateTpgPortal()
    {
        $storage = $this -> storage;
        $arr = array(
            'target_name'=>'',
            'tpg_number'=>'',
            'ip'=>'',
            'node_uuid'=>'',
        );
        
        
        $res = $storage -> createTpgPortal($arr);
        $this->do_assert($res);
    }

    public function testDeleteTpgPortal()
    {
        $storage = $this -> storage;
        $arr = array(
            'target_name'=>'',
            'tpg_number'=>1,
            'ip'=>'',
            'node_uuid'=>'',
        );
        
        
        $res = $storage -> deleteTpgPortal($arr);
        $this->do_assert($res);
    }

    public function testRegisterServer()
    {
        $storage = $this -> storage;
        $arr = array(
            'node_uuid'=>'',
            'config_addr'=>'',
        );
        
        
        $res = $storage -> registerServer($arr);
        $this->do_assert($res);
    }

    public function testListTape()
    {
        $storage = $this -> storage;
        $arr = array(
            'page'=>1,
            'limit'=>10,
            'search_value'=>'',
            'search_field'=>'',
            'where_args'=>array(
            'node_uuid'=>'',
            'pool_uuid'=>'',),
        );
        
        
        $res = $storage -> listTape($arr);
        $this->do_assert($res);
    }

    public function testScanTapes()
    {
        $storage = $this -> storage;
        $arr = array(
            'node_uuid'=>'D42BF707-C971-EEA9-521F-BB0F3F7A92FC',
        );
        
        
        $res = $storage -> scanTapes($arr);
        $this->do_assert($res);
    }

    public function testCreateTape()
    {
        $storage = $this -> storage;
        $arr = array(
            'tape_name'=>'磁带库1',
            'node_uuid'=>'D42BF707-C971-EEA9-521F-BB0F3F7A92FC',
            'library_info'=>array(
            '0'=>array(
            'library_sn'=>'SYZZ_A',
            'library_vendor'=>'STK',
            'library_product'=>'L80',
            'library_revision'=>'0106',
            'drive_num'=>1,
            'slot_num'=>1,),),
        );
        
        
        $res = $storage -> createTape($arr);
        $this->do_assert($res);
    }

    public function testDescribeTape()
    {
        $storage = $this -> storage;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $storage -> describeTape($arr);
        $this->do_assert($res);
    }

    public function testModifyTape()
    {
        $storage = $this -> storage;
        $arr = array(
            'tape_name'=>'磁带库1',
            'node_uuid'=>'D42BF707-C971-EEA9-521F-BB0F3F7A92FC',
            'library_info'=>array(
            '0'=>array(
            'library_sn'=>'SYZZ_A',
            'library_vendor'=>'STK',
            'library_product'=>'L80',
            'library_revision'=>'0106',),),
            'random_str'=>'D42BF707-C971-EEA9-521F-BB0F3F7A92FC',
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $storage -> modifyTape($arr);
        $this->do_assert($res);
    }

    public function testDeleteTape()
    {
        $storage = $this -> storage;
        $arr = array(
            'tape_uuids'=>array(),
        );
        
        
        $res = $storage -> deleteTape($arr);
        $this->do_assert($res);
    }

    public function testEraseTape()
    {
        $storage = $this -> storage;
        $arr = array(
            'tape_uuids'=>array(),
            'operate'=>'',
            'slot'=>array(
            '0'=>array(
            'slot _index'=>'',
            'slot_barcode'=>'',
            'slot_tapename'=>'',
            'slot_tapesequence'=>'',
            'new_slot_tapename'=>'',),),
            'drive_index'=>'',
            'slot_index'=>'',
            'ieslot_index'=>'',
            'library_sn'=>'',
            'pool_uuid'=>'',
        );
        
        
        $res = $storage -> eraseTape($arr);
        $this->do_assert($res);
    }

    public function testFormatTape()
    {
        $storage = $this -> storage;
        $arr = array(
            'tape_uuids'=>array(),
            'operate'=>'',
            'slot'=>array(
            '0'=>array(
            'slot _index'=>'',
            'slot_barcode'=>'',
            'slot_tapename'=>'',
            'slot_tapesequence'=>'',
            'new_slot_tapename'=>'',),),
            'drive_index'=>'',
            'slot_index'=>'',
            'ieslot_index'=>'',
            'library_sn'=>'',
            'pool_uuid'=>'',
        );
        
        
        $res = $storage -> formatTape($arr);
        $this->do_assert($res);
    }

    public function testBrowseTape()
    {
        $storage = $this -> storage;
        $arr = array(
            'tape_uuids'=>array(),
            'operate'=>'',
            'slot'=>array(
            '0'=>array(
            'slot _index'=>'',
            'slot_barcode'=>'',
            'slot_tapename'=>'',
            'slot_tapesequence'=>'',
            'new_slot_tapename'=>'',),),
            'drive_index'=>'',
            'slot_index'=>'',
            'ieslot_index'=>'',
            'library_sn'=>'',
            'pool_uuid'=>'',
        );
        
        
        $res = $storage -> browseTape($arr);
        $this->do_assert($res);
    }

    public function testRebuildCatalogTape()
    {
        $storage = $this -> storage;
        $arr = array(
            'tape_uuids'=>array(),
            'operate'=>'',
            'slot'=>array(
            '0'=>array(
            'slot _index'=>'',
            'slot_barcode'=>'',
            'slot_tapename'=>'',
            'slot_tapesequence'=>'',
            'new_slot_tapename'=>'',),),
            'drive_index'=>'',
            'slot_index'=>'',
            'ieslot_index'=>'',
            'library_sn'=>'',
            'pool_uuid'=>'',
        );
        
        
        $res = $storage -> rebuildCatalogTape($arr);
        $this->do_assert($res);
    }

    public function testCatalogTape()
    {
        $storage = $this -> storage;
        $arr = array(
            'tape_uuids'=>array(),
            'operate'=>'',
            'slot'=>array(
            '0'=>array(
            'slot _index'=>'',
            'slot_barcode'=>'',
            'slot_tapename'=>'',
            'slot_tapesequence'=>'',
            'new_slot_tapename'=>'',),),
            'drive_index'=>'',
            'slot_index'=>'',
            'ieslot_index'=>'',
            'library_sn'=>'',
            'pool_uuid'=>'',
        );
        
        
        $res = $storage -> catalogTape($arr);
        $this->do_assert($res);
    }

    public function testUnloadTape()
    {
        $storage = $this -> storage;
        $arr = array(
            'tape_uuids'=>array(),
            'operate'=>'',
            'slot'=>array(
            '0'=>array(
            'slot _index'=>'',
            'slot_barcode'=>'',
            'slot_tapename'=>'',
            'slot_tapesequence'=>'',
            'new_slot_tapename'=>'',),),
            'drive_index'=>'',
            'slot_index'=>'',
            'ieslot_index'=>'',
            'library_sn'=>'',
            'pool_uuid'=>'',
        );
        
        
        $res = $storage -> unloadTape($arr);
        $this->do_assert($res);
    }

    public function testImportTape()
    {
        $storage = $this -> storage;
        $arr = array(
            'tape_uuids'=>array(),
            'operate'=>'',
            'slot'=>array(
            '0'=>array(
            'slot _index'=>'',
            'slot_barcode'=>'',
            'slot_tapename'=>'',
            'slot_tapesequence'=>'',
            'new_slot_tapename'=>'',),),
            'drive_index'=>'',
            'slot_index'=>'',
            'ieslot_index'=>'',
            'library_sn'=>'',
            'pool_uuid'=>'',
        );
        
        
        $res = $storage -> importTape($arr);
        $this->do_assert($res);
    }

    public function testExportTape()
    {
        $storage = $this -> storage;
        $arr = array(
            'tape_uuids'=>array(),
            'operate'=>'',
            'slot'=>array(
            '0'=>array(
            'slot _index'=>'',
            'slot_barcode'=>'',
            'slot_tapename'=>'',
            'slot_tapesequence'=>'',
            'new_slot_tapename'=>'',),),
            'drive_index'=>'',
            'slot_index'=>'',
            'ieslot_index'=>'',
            'library_sn'=>'',
            'pool_uuid'=>'',
        );
        
        
        $res = $storage -> exportTape($arr);
        $this->do_assert($res);
    }

    public function testUpdatePoolsTape()
    {
        $storage = $this -> storage;
        $arr = array(
            'tape_uuids'=>array(),
            'operate'=>'',
            'slot'=>array(
            '0'=>array(
            'slot _index'=>'',
            'slot_barcode'=>'',
            'slot_tapename'=>'',
            'slot_tapesequence'=>'',
            'new_slot_tapename'=>'',),),
            'drive_index'=>'',
            'slot_index'=>'',
            'ieslot_index'=>'',
            'library_sn'=>'',
            'pool_uuid'=>'',
        );
        
        
        $res = $storage -> updatePoolsTape($arr);
        $this->do_assert($res);
    }

    public function testListBkData()
    {
        $storage = $this -> storage;
        $arr = array(
            'tape_uuid'=>'',
            'library_sn'=>'',
            'slot _index'=>'',
            'slot_barcode'=>'',
            'slot_tapename'=>'',
            'slot_tapesequence'=>'',
            'page_num'=>'0',
            'page_size'=>'15',
            'begin_time'=>'2021-04-27_00:00:12',
            'end_time'=>'2021-04-27_00:00:12',
            'check_rule'=>0,
            'pool_uuid'=>'',
            'task_uuid'=>'',
        );
        
        
        $res = $storage -> listBkData($arr);
        $this->do_assert($res);
    }

    public function testListBkFile()
    {
        $storage = $this -> storage;
        $arr = array(
            'tape_uuid'=>'aAfC5CB3-CeF1-ce9C-F013-9fA27e872eE4',
            'library_sn'=>'A7eebFee-de58-Fad0-8fB5-F5f758aE46D2',
            'slot_index'=>'1',
            'slot_barcode'=>'6996775739877144	',
            'slot_tapename'=>'美海物统商	',
            'slot_tapesequence'=>'1571481916717124	',
            'bk_index'=>'index',
            'bk_path'=>'path',
            'page'=>1,
            'limit'=>10,
            'pool_uuid'=>'',
        );
        
        
        $res = $storage -> listBkFile($arr);
        $this->do_assert($res);
    }

    public function testListBusyDrive()
    {
        $storage = $this -> storage;
        $arr = array(
            'tape_uuid'=>'',
            'library_sn'=>'',
        );
        
        
        $res = $storage -> listBusyDrive($arr);
        $this->do_assert($res);
    }

    public function testListFreeSlot()
    {
        $storage = $this -> storage;
        $arr = array(
            'tape_uuid'=>'',
            'library_sn'=>'',
        );
        
        
        $res = $storage -> listFreeSlot($arr);
        $this->do_assert($res);
    }

    public function testListBusyIEslot()
    {
        $storage = $this -> storage;
        $arr = array(
            'tape_uuid'=>'',
            'library_sn'=>'',
        );
        
        
        $res = $storage -> listBusyIEslot($arr);
        $this->do_assert($res);
    }

    public function testListFreeIEslot()
    {
        $storage = $this -> storage;
        $arr = array(
            'tape_uuid'=>'',
            'library_sn'=>'',
        );
        
        
        $res = $storage -> listFreeIEslot($arr);
        $this->do_assert($res);
    }

    public function testListBusySlot()
    {
        $storage = $this -> storage;
        $arr = array(
            'tape_uuid'=>'',
            'library_sn'=>'',
        );
        
        
        $res = $storage -> listBusySlot($arr);
        $this->do_assert($res);
    }

    public function testDiscribeTapeDetail()
    {
        $storage = $this -> storage;
        $arr = array(
            'library_sn'=>'',
            'slot_index'=>'',
            'slot_barcode'=>'',
            'slot_tapename'=>'',
            'slot_tapesequence'=>'',
            'pool_uuid'=>'',
            'bk_index'=>'',
            'bk_path'=>'',
        );
        
        
        $res = $storage -> discribeTapeDetail($arr);
        $this->do_assert($res);
    }

    public function testListTapePools()
    {
        $storage = $this -> storage;
        $arr = array(
            'limit'=>1,
            'page'=>1,
            'where_args'=>array(
            'tape_uuid'=>'',
            'library_sn'=>'',),
        );
        
        
        $res = $storage -> listTapePools($arr);
        $this->do_assert($res);
    }

    public function testListTapePoolSlots()
    {
        $storage = $this -> storage;
        $arr = array(
            'type'=>1,
            'pool_uuid'=>'',
            'is_public'=>'',
        );
        
        
        $res = $storage -> listTapePoolSlots($arr);
        $this->do_assert($res);
    }

    public function testCreateTapePool()
    {
        $storage = $this -> storage;
        $arr = array(
            'library_sn'=>'',
            'pool_name'=>'',
            'pool_flag'=>'',
            'tape_uuid'=>'',
        );
        
        
        $res = $storage -> createTapePool($arr);
        $this->do_assert($res);
    }

    public function testAddSlotTapePool()
    {
        $storage = $this -> storage;
        $arr = array(
            'pool_uuids'=>array(),
            'operate'=>'',
            'tape_info'=>array(
            '0'=>array(
            'slot_index'=>'',
            'slot_barcode'=>'',),),
        );
        
        
        $res = $storage -> addSlotTapePool($arr);
        $this->do_assert($res);
    }

    public function testRemoveSlotTapePool()
    {
        $storage = $this -> storage;
        $arr = array(
            'pool_uuids'=>array(),
            'operate'=>'',
            'tape_info'=>array(
            '0'=>array(
            'slot_index'=>'',
            'slot_barcode'=>'',),),
        );
        
        
        $res = $storage -> removeSlotTapePool($arr);
        $this->do_assert($res);
    }

    public function testDeleteTapePool()
    {
        $storage = $this -> storage;
        $arr = array(
            'pool_uuids'=>array(),
            'operate'=>'',
            'tape_info'=>array(
            '0'=>array(
            'slot_index'=>'',
            'slot_barcode'=>'',),),
        );
        
        
        $res = $storage -> deleteTapePool($arr);
        $this->do_assert($res);
    }

    public function testUpdateTapePool()
    {
        $storage = $this -> storage;
        $arr = array(
            'pool_uuids'=>array(),
            'operate'=>'',
            'tape_info'=>array(
            '0'=>array(
            'slot_index'=>'',
            'slot_barcode'=>'',),),
        );
        
        
        $res = $storage -> updateTapePool($arr);
        $this->do_assert($res);
    }

    public function testListTapeNames()
    {
        $storage = $this -> storage;
        $arr = array(
            'pool_uuid'=>'',
        );
        
        
        $res = $storage -> listTapeNames($arr);
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