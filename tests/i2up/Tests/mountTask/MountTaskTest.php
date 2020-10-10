<?php
namespace i2up\Test\mountTask;

use i2up\mountTask\v20201009\MountTask;
use i2up\common\Auth;
use i2up\Config;

class MountTaskTest extends \PHPUnit_Framework_TestCase
{
    private $mountTask;

    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $params = array(
            'username' => 'admin',
            'pwd' => 'Info1234',
            'cache_path' => __DIR__ . '/../',
            'ip' => Config::baseUrl
        );
        $auth = new Auth($params);
        $this -> mountTask = new MountTask($auth);
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
            'snapshot'=>array(
                'snapshot_name'=>'testpool/13CB1D17-D0E7-169A-D6DC-9CFB32341989@2020-06-17-11:30:51',
                'snapshot_time'=>'2020-06-17-11:30:51',
                'protocol'=>'iscsi',
                'target'=>'iqn.2000-01.com.tandbergdata:nas.027s.li',
                'volume_uuid'=>'13CB1D17-D0E7-169A-D6DC-9CFB32341989',
                'storage'=>array(
                    'storage_name'=>'Base64StorageName',
                    'storage_type'=>'BlockStorage',
                    'storage_host'=>'127.0.0.1',
                    'storage_pool'=>'ZFSPool001',),
                'partition'=>array(
                    '0'=>array(
                        'size'=>'1024000',
                        'fs_type'=>'xfs',
                        'fs_path'=>'/home/',
                        'offset'=>9600,),),
                'dev_id'=>'A613CF45-524C-EC6B-CD47-83B8A8A527BB',
                'size'=>'1024000',
                'init_partition'=>1,),
            'iscsi_initiator'=>'iscsi_initiator',
        );
        $res = $mountTask -> createMountTask($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListMountTask()
    {
        $mountTask = $this -> mountTask;
        $arr = array(
        );
        $res = $mountTask -> listMountTask($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeMountTask()
    {
        $mountTask = $this -> mountTask;
        $arr = array(
            ''=>'',
        );
        $res = $mountTask -> describeMountTask($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDeleteMountTask()
    {
        $mountTask = $this -> mountTask;
        $arr = array(
            'task_uuids'=>array(),
        );
        $res = $mountTask -> deleteMountTask($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListMountTaskStatus()
    {
        $mountTask = $this -> mountTask;
        $arr = array(
            'task_uuids'=>array(),
        );
        $res = $mountTask -> listMountTaskStatus($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testTempFuncName()
    {
        $mountTask = $this -> mountTask;
        $arr = array(
            'operate'=>'',
            'task_uuids'=>array(),
        );
        $res = $mountTask -> tempFuncName($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testGetIscsiInitiatorInfo()
    {
        $mountTask = $this -> mountTask;
        $arr = array(
            'node_uuid'=>'1407E778CBFE9C4E9ACB766B94F1E102',
        );
        $res = $mountTask -> getIscsiInitiatorInfo($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
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
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
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
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}