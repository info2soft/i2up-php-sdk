<?php
namespace i2up\Test\v20250630\taskCenter;

use i2up\taskCenter\v20250630\BatchTask;
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
            'limit'=>1,
            'page'=>1,
            'type'=>1,
            'like_args'=>array(
            'xxx'=>'',),
        );
        
        
        $res = $batchTask -> batchTaskList($arr);
        $this->do_assert($res);
    }

    public function testBatchTaskStatus()
    {
        $batchTask = $this -> batchTask;
        $arr = array(
            'batch_uuids'=>array(),
        );
        
        
        $res = $batchTask -> batchTaskStatus($arr);
        $this->do_assert($res);
    }

    public function testStartBatchTask()
    {
        $batchTask = $this -> batchTask;
        $arr = array(
            'operate'=>'',
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
            'operate'=>'',
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
            'operate'=>'',
            'batch_uuid'=>'',
            'delete_tgtvm'=>1,
            'del_policy'=>'',
        );
        
        
        $res = $batchTask -> deleteBatchTask($arr);
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