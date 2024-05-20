<?php
namespace i2up\Test\v20240228\common;

use i2up\common\v20240228\OpLogs;
use i2up\common\Auth;
                
class OpLogsTest extends \PHPUnit_Framework_TestCase
 {
    private $opLogs;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> opLogs = new OpLogs(new Auth());
    }

    public function testListOpLog()
    {
        $opLogs = $this -> opLogs;
        $arr = array(
            'page'=>1,
            'end'=>1548950400,
            'limit'=>10,
            'start'=>1546272000,
            'op_type'=>'delete_nodes',
            'level'=>0,
            'description'=>'delete_nodes',
            'suffix'=>'.txt',
            'address'=>'',
            'username'=>'',
        );
        $res = $opLogs -> listOpLog($arr);
        $this->do_assert($res);
    }

    public function testDeleteOpLog()
    {
        $opLogs = $this -> opLogs;
        $arr = array(
            'ids'=>array('1'),
        );
        $res = $opLogs -> deleteOpLog($arr);
        $this->do_assert($res);
    }

    private function do_assert($res)
    {
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}