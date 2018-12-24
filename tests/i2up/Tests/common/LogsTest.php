<?php
namespace i2up\Test\common;

use i2up\common\Logs;
use i2up\common\Auth;
                
class LogsTest extends \PHPUnit_Framework_TestCase
 {
    private $logs;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $auth = new Auth('admin', 'Info1234');
        $this -> logs = new Logs($auth);
    }

    public function testListTaskLog()
    {
        $logs = $this -> logs;
        $arr = array(
            'uuid'=>'F1E9FEAE-F249-FF9E-4A90-866DCBD5DB1E',
            'level'=>1,
            'start'=>1,
            'page'=>1,
            'end'=>1,
            'limit'=>10,
        );
        $res = $logs -> listTaskLog($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListHALog()
    {
        $logs = $this -> logs;
        $arr = array(
            'uuid'=>'',
            'end'=>1,
            'level'=>1,
            'start'=>1,
            'node_uuid'=>'',
            'page'=>1,
            'limit'=>1,
        );
        $res = $logs -> listHALog($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListNodeLog()
    {
        $logs = $this -> logs;
        $arr = array(
            'level'=>1,
            'page'=>1,
            'limit'=>10,
            'start'=>1,
            'uuid'=>'B8566905-411E-B2CD-A742-77B1346D8E84',
            'end'=>1,
        );
        $res = $logs -> listNodeLog($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListNpsvrLog()
    {
        $logs = $this -> logs;
        $res = $logs -> listNpsvrLog();
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListTrafficLog()
    {
        $logs = $this -> logs;
        $arr = array(
            'start_stamp'=>1545637314,
            'type'=>'real',
            'uuid'=>'F1E9FEAE-F249-FF9E-4A90-866DCBD5DB1E',
        );
        $res = $logs -> listTrafficLog($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}