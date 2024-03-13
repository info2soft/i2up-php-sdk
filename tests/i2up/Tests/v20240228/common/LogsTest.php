<?php
namespace i2up\Test\v20240228\common;

use i2up\common\v20240228\Logs;
use i2up\common\Auth;
                
class LogsTest extends \PHPUnit_Framework_TestCase
 {
    private $logs;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> logs = new Logs(new Auth());
    }

    public function testListTaskLog()
    {
        $logs = $this -> logs;
        $arr = array(
            'uuid'=>'F97B3FD5-4D5D-41EE-22A9-740A74E1E13C',
            'level'=>1,
            'start'=>1,
            'page'=>1,
            'end'=>1,
            'limit'=>10,
            'search_content'=>'',
        );
        $res = $logs -> listTaskLog($arr);
        $this->do_assert($res);
    }

    public function testListHaLog()
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
        $res = $logs -> listHaLog($arr);
        $this->do_assert($res);
    }

    public function testListNodeLog()
    {
        $logs = $this -> logs;
        $arr = array(
            'level'=>1,
            'page'=>1,
            'limit'=>10,
            'start'=>1,
            'uuid'=>'67E33CDB-D75B-15B3-367D-50C764F5A26F',
            'end'=>1,
            'log_type'=>1,
        );
        $res = $logs -> listNodeLog($arr);
        $this->do_assert($res);
    }

    public function testListNpsvrLog()
    {
        $logs = $this -> logs;
        $arr = array();
        $res = $logs -> listNpsvrLog($arr);
        $this->do_assert($res);
    }

    public function testListTrafficLog()
    {
        $logs = $this -> logs;
        $arr = array(
            'start_stamp'=>1545637314,
            'type'=>'month',
            'uuid'=>'F97B3FD5-4D5D-41EE-22A9-740A74E1E13C',
            'month_range'=>'1',
        );
        $res = $logs -> listTrafficLog($arr);
        $this->do_assert($res);
    }

    private function do_assert($res)
    {
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}