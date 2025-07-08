<?php
namespace i2up\Test\v20250630\mountTask;

use i2up\mountTask\v20250630\MountTask;
use i2up\common\Auth;
                
class MountTaskTest extends \PHPUnit_Framework_TestCase
 {
    private $mountTask;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> mountTask = new MountTask(new Auth());
    }

    public function testCreateMountTask()
    {
        $mountTask = $this -> mountTask;
        $arr = array(
            'task_name'=>'task_name',
            'wk_uuid'=>'1CCDB5EB848C180F02814E96C2909202',
            'if_mount'=>0,
            'mount_point'=>'/dev/sda',
            'protocol'=>'iscsi',
            'bk_uuid'=>'5CC2B5EB848C180F02814E96C2F09202',
            'volume_uuid'=>'4CC2B52B845C180F02112E96C2F09H02',
            'iscsi_initiator'=>'iscsi_initiator',
            'snapshot_name'=>'',
            'snapshot_time'=>'',
            'fc_initiator_wwpn'=>'',
            'fc_target_wwpn'=>'',
            'volume_type'=>1,
            'volume_name'=>'',
            'remote_volume_uuid'=>'',
        );
        
        
        $res = $mountTask -> createMountTask($arr);
        $this->do_assert($res);
    }

    public function testListMountTask()
    {
        $mountTask = $this -> mountTask;
        $arr = array();
        
        
        $res = $mountTask -> listMountTask($arr);
        $this->do_assert($res);
    }

    public function testDescribeMountTask()
    {
        $mountTask = $this -> mountTask;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $mountTask -> describeMountTask($arr);
        $this->do_assert($res);
    }

    public function testDeleteMountTask()
    {
        $mountTask = $this -> mountTask;
        $arr = array(
            'task_uuids'=>array(),
            'force'=>'',
        );
        
        
        $res = $mountTask -> deleteMountTask($arr);
        $this->do_assert($res);
    }

    public function testListMountTaskStatus()
    {
        $mountTask = $this -> mountTask;
        $arr = array(
            'task_uuids'=>array(),
            'force_refresh'=>1,
        );
        
        
        $res = $mountTask -> listMountTaskStatus($arr);
        $this->do_assert($res);
    }

    public function testMountMountTask()
    {
        $mountTask = $this -> mountTask;
        $arr = array(
            'operate'=>'',
            'task_uuids'=>array(),
        );
        
        
        $res = $mountTask -> mountMountTask($arr);
        $this->do_assert($res);
    }

    public function testUnmountMountTask()
    {
        $mountTask = $this -> mountTask;
        $arr = array(
            'operate'=>'',
            'task_uuids'=>array(),
        );
        
        
        $res = $mountTask -> unmountMountTask($arr);
        $this->do_assert($res);
    }

    public function testGetIscsiInitiatorInfo()
    {
        $mountTask = $this -> mountTask;
        $arr = array(
            'node_uuid'=>'1407E778CBFE9C4E9ACB766B94F1E102',
        );
        
        
        $res = $mountTask -> getIscsiInitiatorInfo($arr);
        $this->do_assert($res);
    }

    public function testGetVolumeSnapshotTarget()
    {
        $mountTask = $this -> mountTask;
        $arr = array(
            'bk_uuid'=>'13CB1D17-D0E7-169A-D6DC-9CFB32341989',
            'volume_uuid'=>'13CB1D17-D0E7-169A-D6DC-9CFB32341989',
            'protocol'=>'iscsi',
            'iscsi_acl'=>'iscsi initiator name',
            'snapshot_name'=>'13CB1D17-D0E7-169A-D6DC-9CFB32341989_20200801_180000_00',
        );
        
        
        $res = $mountTask -> getVolumeSnapshotTarget($arr);
        $this->do_assert($res);
    }

    public function testDeleteVolumeSnapshotTarget()
    {
        $mountTask = $this -> mountTask;
        $arr = array(
            'protocol'=>'',
            'target'=>'',
            'volume_uuid'=>'',
            'storage'=>array(
            '0'=>array(
            'storage_name'=>'',
            'storage_type'=>'',
            'storage_host'=>'',
            'storage_pool'=>'',),),
            'partition'=>array(
            '0'=>array(
            'size'=>'',
            'fs_type'=>'',
            'fs_path'=>'',
            'offset'=>'',),),
            'dev_id'=>'',
            'bk_uuid'=>'',
        );
        
        
        $res = $mountTask -> deleteVolumeSnapshotTarget($arr);
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