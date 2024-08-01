<?php
namespace i2up\Test\snapshotTask;

use i2up\snapshotTask\v20201009\SnapshotTask;
use i2up\common\Auth;

class SnapshotTaskTest extends \PHPUnit_Framework_TestCase
{
    private $snapshotTask;

    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> snapshotTask = new SnapshotTask(new Auth());
    }

    public function testCreateSnapshotTask()
    {
        $snapshotTask = $this -> snapshotTask;
        $arr = array(
            'task_name'=>'',
            'bk_uuid'=>'',
            'copy_volume_list'=>array(),
            'quiet_switch'=>1,
            'quiet_obj_type'=>1,
            'quiet_obj_config'=>array(),
            'schedule'=>array(
                'interval'=>1,
                'retetion_days'=>1,
                'limit'=>1,
                'type'=>'',
                'unit'=>1,),
        );
        $res = $snapshotTask -> createSnapshotTask($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListSnapshotTask()
    {
        $snapshotTask = $this -> snapshotTask;
        $arr = array(
        );
        $res = $snapshotTask -> listSnapshotTask($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }


    public function testListSnapshotList()
    {
        $snapshotTask = $this -> snapshotTask;
        $arr = array(
        );
        $res = $snapshotTask -> listSnapshotList($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDeleteSnapshotList()
    {
        $snapshotTask = $this -> snapshotTask;
        $arr = array(
            'snapshot_list'=>array(
                '0'=>array(
                    'volume_uuid'=>'',
                    'snapshot_name'=>'',
                    'snapshot_time'=>'',),),
        );
        $res = $snapshotTask -> deleteSnapshotList($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}