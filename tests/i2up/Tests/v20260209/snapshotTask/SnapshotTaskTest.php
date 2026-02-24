<?php
namespace i2up\Test\v20260209\snapshotTask;

use i2up\snapshotTask\v20260209\SnapshotTask;
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
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
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
            'uuids'=>array(),
            'force_refresh'=>1,
        );
        
        
        $res = $snapshotTask -> listSnapshotTaskStatus($arr);
        $this->do_assert($res);
    }

    public function testDescribeSnapshotTask()
    {
        $snapshotTask = $this -> snapshotTask;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $snapshotTask -> describeSnapshotTask($arr);
        $this->do_assert($res);
    }

    public function testStartImmediatelySnapshotTask()
    {
        $snapshotTask = $this -> snapshotTask;
        $arr = array(
            'operate'=>'start_immediately',
            'task_uuids'=>array(
            '0'=>'3D7AD825-9C50-ADBA-6AC8-536B9615C40F',),
        );
        
        
        $res = $snapshotTask -> startImmediatelySnapshotTask($arr);
        $this->do_assert($res);
    }

    public function testStartSnapshotTask()
    {
        $snapshotTask = $this -> snapshotTask;
        $arr = array(
            'operate'=>'start_immediately',
            'task_uuids'=>array(
            '0'=>'3D7AD825-9C50-ADBA-6AC8-536B9615C40F',),
        );
        
        
        $res = $snapshotTask -> startSnapshotTask($arr);
        $this->do_assert($res);
    }

    public function testStopSnapshotTask()
    {
        $snapshotTask = $this -> snapshotTask;
        $arr = array(
            'operate'=>'start_immediately',
            'task_uuids'=>array(
            '0'=>'3D7AD825-9C50-ADBA-6AC8-536B9615C40F',),
        );
        
        
        $res = $snapshotTask -> stopSnapshotTask($arr);
        $this->do_assert($res);
    }

    public function testListSnapshotList()
    {
        $snapshotTask = $this -> snapshotTask;
        $arr = array(
            'page'=>1,
            'limit'=>10,
            'from'=>0,
            'to'=>0,
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $snapshotTask -> listSnapshotList($arr);
        $this->do_assert($res);
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
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $snapshotTask -> deleteSnapshotList($arr);
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