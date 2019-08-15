<?php
namespace i2up\Test\common;

use i2up\common\Storage;
use i2up\common\Auth;
use i2up\Config;

class StorageTest extends \PHPUnit_Framework_TestCase
 {
    private $storage;

    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $params = array(
            'access_key' => 'oishvmn5YPHJcEDaIjtwd0R9Ug7BN1fk',
            'secret_key' => 'fkLiyqsG3P1AzB5jWtYbZa7TU8RN9wSVhe6EldOo',
            'ip' => Config::baseUrl
        );
        $auth = new Auth($params);
        $this -> storage = new Storage($auth);
    }

    public function testCreateStorageConfig()
    {
        $storage = $this -> storage;
        $arr = array(
            'name'=>'name',
            'type'=>0,
            'bk_uuid'=>'AFAFDFDF-AFAF-AFAF-AFAF-AFAFAFAFAFAF',
            'config'=>array(
                'device_info'=>array(
                    '0'=>array(
                        'alarm'=>array(),),),
                'biz_grp_list'=>'',
                'backstore'=>array(
                    '0'=>array(
                        'name'=>'',
                        'path'=>'',
                        'capacity'=>'',
                        'target_name'=>'',),),),
            'db_save_day'=>1,
        );
        $res = $storage -> createStorageConfig($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testModifyStorageConfig()
    {
        $storage = $this -> storage;
        $arr = array(
            'name'=>'name',
            'config'=>array(),
            'db_save_day'=>1,
        );
        $res = $storage -> modifyStorageConfig($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeStorageConfig()
    {
        $storage = $this -> storage;
        $arr = array(
        );
        $res = $storage -> describeStorageConfig($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListStorageConfig()
    {
        $storage = $this -> storage;
        $arr = array(
        );
        $res = $storage -> listStorageConfig($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDeleteStorageConfig()
    {
        $storage = $this -> storage;
        $arr = array(
            'uuids'=>array(),
        );
        $res = $storage -> deleteStorageConfig($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
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
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListAvailableNode()
    {
        $storage = $this -> storage;
        $res = $storage -> listAvailableNode();
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListDevice()
    {
        $storage = $this -> storage;
        $arr = array(
            'node_uuid'=>'',
        );
        $res = $storage -> listDevice($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListAvailableDevice()
    {
        $storage = $this -> storage;
        $arr = array(
            'node_uuid'=>'',
        );
        $res = $storage -> listAvailableDevice($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
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
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
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
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDeletePool()
    {
        $storage = $this -> storage;
        $arr = array(
            'node_uuid'=>'',
            'pool_name'=>'',
        );
        $res = $storage -> deletePool($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListPool()
    {
        $storage = $this -> storage;
        $arr = array(
            'pool_name'=>'',
            'node_uuid'=>'',
        );
        $res = $storage -> listPool($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListPoolInfo()
    {
        $storage = $this -> storage;
        $arr = array(
            'node_uuid'=>'',
            'pool_name'=>'testpool',
        );
        $res = $storage -> listPoolInfo($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
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
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
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
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
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
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
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
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
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
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
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
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
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
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
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
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
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
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testCreateVolume()
    {
        $storage = $this -> storage;
        $arr = array(
            'node_uuid'=>'',
            'pool_name'=>'',
            'volume_name'=>'',
            'volume_size'=>'',
        );
        $res = $storage -> createVolume($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
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
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
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
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
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
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
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
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
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
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
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
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
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
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
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
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
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
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
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
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListBackStore()
    {
        $storage = $this -> storage;
        $arr = array(
            'node_uuid'=>'',
        );
        $res = $storage -> listBackStore($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
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
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListAssignBackStore()
    {
        $storage = $this -> storage;
        $arr = array(
            'path'=>'',
            'node_uuid'=>'',
        );
        $res = $storage -> listAssignBackStore($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListBackStoreAvailablePath()
    {
        $storage = $this -> storage;
        $arr = array(
            'node_uuid'=>'',
        );
        $res = $storage -> listBackStoreAvailablePath($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeIscsiVersion()
    {
        $storage = $this -> storage;
        $arr = array(
            'node_uuid'=>'',
        );
        $res = $storage -> describeIscsiVersion($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeIscsiAuth()
    {
        $storage = $this -> storage;
        $arr = array(
            'node_uuid'=>'',
        );
        $res = $storage -> describeIscsiAuth($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
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
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDeleteIscsiDiscoverAuth()
    {
        $storage = $this -> storage;
        $arr = array(
            'node_uuid'=>'',
        );
        $res = $storage -> deleteIscsiDiscoverAuth($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testCreateAutoAddPortal()
    {
        $storage = $this -> storage;
        $arr = array(
            'node_uuid'=>'',
            'auto_add_default_portal'=>0,
        );
        $res = $storage -> createAutoAddPortal($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testCreateAutoAddLun()
    {
        $storage = $this -> storage;
        $arr = array(
            'node_uuid'=>'',
            'auto_add_mapped_luns'=>0,
        );
        $res = $storage -> createAutoAddLun($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeAutoAddPortal()
    {
        $storage = $this -> storage;
        $arr = array(
            'node_uuid'=>'',
        );
        $res = $storage -> describeAutoAddPortal($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeAutoAddLun()
    {
        $storage = $this -> storage;
        $arr = array(
            'node_uuid'=>'',
        );
        $res = $storage -> describeAutoAddLun($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeIscsiTargetStatus()
    {
        $storage = $this -> storage;
        $arr = array(
            'node_uuid'=>'',
        );
        $res = $storage -> describeIscsiTargetStatus($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListIscsiTarget()
    {
        $storage = $this -> storage;
        $arr = array(
            'node_uuid'=>'',
        );
        $res = $storage -> listIscsiTarget($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testCreateIscsiTarget()
    {
        $storage = $this -> storage;
        $arr = array(
            'name'=>'',
            'node_uuid'=>'',
        );
        $res = $storage -> createIscsiTarget($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
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
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
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
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
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
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
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
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
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
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
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
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
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
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
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
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDeleteIscsiInitiatorConnectTarget()
    {
        $storage = $this -> storage;
        $arr = array(
            'node_uuid'=>'',
            'target_name'=>'',
        );
        $res = $storage -> deleteIscsiInitiatorConnectTarget($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListIscsiInitiatorPortal()
    {
        $storage = $this -> storage;
        $arr = array(
            'node_uuid'=>'',
        );
        $res = $storage -> listIscsiInitiatorPortal($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
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
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
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
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testCreateTpg()
    {
        $storage = $this -> storage;
        $arr = array(
            'target_name'=>'',
            'node_uuid'=>'',
        );
        $res = $storage -> createTpg($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
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
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
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
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
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
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
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
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
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
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
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
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
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
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
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
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}