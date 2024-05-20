<?php
namespace i2up\Test\v20240228\taskCenter;

use i2up\taskCenter\v20240228\BatchTask;
use i2up\common\Auth;
                
class BatchTaskTest extends \PHPUnit_Framework_TestCase
 {
    private $batchTask;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> batchTask = new BatchTask(new Auth());
    }

    public function testBatchTaskList()
    {
        $batchTask = $this -> batchTask;
        $arr = array(
            'like_args[xxx]'=>'',
            'limit'=>1,
            'page'=>1,
            'type'=>1,
        );
        $res = $batchTask -> batchTaskList($arr);
        $this->do_assert($res);
    }

    public function testBatchTaskStatus()
    {
        $batchTask = $this -> batchTask;
        $arr = array(
            'batch_uuids'=>array('11111111-1111-1111-1111-111111111111'),
        );
        $res = $batchTask -> batchTaskStatus($arr);
        $this->do_assert($res);
    }

    public function testStartBatchTask()
    {
        $batchTask = $this -> batchTask;
        $arr = array(
            'operate'=>'start',
            'batch_uuid'=>'',
            'delete_tgtvm'=>1,
            'del_policy'=>'',
        );
        $res = $batchTask -> startBatchTask($arr);
        $this->do_assert($res);
    }

    public function testStopBatchTask()
    {
        $batchTask = $this -> batchTask;
        $arr = array(
            'operate'=>'stop',
            'batch_uuid'=>'',
            'delete_tgtvm'=>1,
            'del_policy'=>'',
        );
        $res = $batchTask -> stopBatchTask($arr);
        $this->do_assert($res);
    }

    public function testDeleteBatchTask()
    {
        $batchTask = $this -> batchTask;
        $arr = array(
            'operate'=>'delete',
            'batch_uuid'=>'',
            'delete_tgtvm'=>1,
            'del_policy'=>'',
        );
        $res = $batchTask -> deleteBatchTask($arr);
        $this->do_assert($res);
    }

    private function do_assert($res)
    {
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}