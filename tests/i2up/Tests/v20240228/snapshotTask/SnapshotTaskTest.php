<?php
namespace i2up\Test\v20240228\snapshotTask;

use i2up\snapshotTask\v20240228\SnapshotTask;
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
            'type'=>'interval',
            'unit'=>1,),
            'volume_type'=>1,
            'script'=>array(
            'before_snapshot'=>'',
            'after_snapshot'=>'',),
            'bkup_schedule'=>array(
            'sched_every'=>'',
            'sched_day'=>'',
            'sched_time'=>'',),
        );
        $res = $snapshotTask -> createSnapshotTask($arr);
        $this->do_assert($res);
    }

    public function testModifySnapshotTask()
    {
        $snapshotTask = $this -> snapshotTask;
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111',
        );
        $res = $snapshotTask -> modifySnapshotTask($arr);
        $this->do_assert($res);
    }

    public function testListSnapshotTask()
    {
        $snapshotTask = $this -> snapshotTask;
        $arr = array(
            'status'=>'',
        );
        $res = $snapshotTask -> listSnapshotTask($arr);
        $this->do_assert($res);
    }

    public function testDeleteSnapshotTask()
    {
        $snapshotTask = $this -> snapshotTask;
        $arr = array(
            'task_uuids'=>array(
            '0'=>'16CB63E1-13FA-FB32-EB49-D790682C9648',),
            'force'=>'',
            'del_snap'=>1,
        );
        $res = $snapshotTask -> deleteSnapshotTask($arr);
        $this->do_assert($res);
    }

    public function testListSnapshotTaskStatus()
    {
        $snapshotTask = $this -> snapshotTask;
        $arr = array(
            'uuids'=>array('11111111-1111-1111-1111-111111111111'),
            'force_refresh'=>1,
        );
        $res = $snapshotTask -> listSnapshotTaskStatus($arr);
        $this->do_assert($res);
    }

    public function testDescribeSnapshotTask()
    {
        $snapshotTask = $this -> snapshotTask;
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111',
        );
        $res = $snapshotTask -> describeSnapshotTask($arr);
        $this->do_assert($res);
    }

    public function testStartSnapshot()
    {
        $snapshotTask = $this -> snapshotTask;
        $arr = array(
            'operate'=>'start',
            'task_uuids'=>array(
            '0'=>'3D7AD825-9C50-ADBA-6AC8-536B9615C40F',),
        );
        $res = $snapshotTask -> startSnapshot($arr);
        $this->do_assert($res);
    }

    public function testStopSnapshot()
    {
        $snapshotTask = $this -> snapshotTask;
        $arr = array(
            'operate'=>'stop',
            'task_uuids'=>array(
            '0'=>'3D7AD825-9C50-ADBA-6AC8-536B9615C40F',),
        );
        $res = $snapshotTask -> stopSnapshot($arr);
        $this->do_assert($res);
    }

    public function testStartImmediatelySnapshot()
    {
        $snapshotTask = $this -> snapshotTask;
        $arr = array(
            'operate'=>'start_immediately',
            'task_uuids'=>array(
            '0'=>'3D7AD825-9C50-ADBA-6AC8-536B9615C40F',),
        );
        $res = $snapshotTask -> startImmediatelySnapshot($arr);
        $this->do_assert($res);
    }

    public function testListSnapshotList()
    {
        $snapshotTask = $this -> snapshotTask;
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111',
            'page'=>1,
            'limit'=>10,
            'from'=>0,
            'to'=>0,
        );
        $res = $snapshotTask -> listSnapshotList($arr);
        $this->do_assert($res);
    }

    public function testDeleteSnapshotList()
    {
        $snapshotTask = $this -> snapshotTask;
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111',
            'snapshot_list'=>array(
            '0'=>array(
            'volume_uuid'=>'',
            'snapshot_name'=>'',
            'snapshot_time'=>'',),),
        );
        $res = $snapshotTask -> deleteSnapshotList($arr);
        $this->do_assert($res);
    }

    private function do_assert($res)
    {
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}