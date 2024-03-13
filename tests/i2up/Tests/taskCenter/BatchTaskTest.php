<?php
/**
 * Create by PhpStorm
 * User: Lis
 * Date: 2020/10/9
 * Time: 16:14
 */

namespace i2up\Test\resource;

use i2up\taskCenter\v20200721\BatchTask;
use i2up\common\Auth;

class BatchTaskTest extends \PHPUnit_Framework_TestCase
{
    private $appSystem;

    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> appSystem = new BatchTask(new Auth());
    }

    public function testBatchTaskList()
    {
        $appSystem = $this -> appSystem;
        $arr = array(
            'like_args[xxx]'=>'',
            'limit'=>1,
            'page'=>1,
            'type'=>1,
        );
        $res = $appSystem -> batchTaskList($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testBatchTaskStatus()
    {
        $appSystem = $this -> appSystem;
        $arr = array(
            'batch_uuids'=>array(),
        );
        $res = $appSystem -> batchTaskStatus($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testStartBatchTask()
    {
        $appSystem = $this -> appSystem;
        $arr = array(
            'operate'=>'start',
            'batch_uuid'=>'',
            'delete_tgtvm'=>1,
            'del_policy'=>'',
        );
        $res = $appSystem -> startBatchTask($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testStopBatchTask()
    {
        $appSystem = $this -> appSystem;
        $arr = array(
            'operate'=>'stop',
            'batch_uuid'=>'',
            'delete_tgtvm'=>1,
            'del_policy'=>'',
        );
        $res = $appSystem -> stopBatchTask($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDeleteBatchTask()
    {
        $appSystem = $this -> appSystem;
        $arr = array(
            'operate'=>'delete',
            'batch_uuid'=>'',
            'delete_tgtvm'=>1,
            'del_policy'=>'',
        );
        $res = $appSystem -> deleteBatchTask($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}
