<?php
namespace i2up\Test\v20240228\active;

use i2up\active\v20240228\Log;
use i2up\common\Auth;
                
class LogTest extends \PHPUnit_Framework_TestCase
 {
    private $log;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> log = new Log(new Auth());
    }

    public function testListLogWarning()
    {
        $log = $this -> log;
        $arr = array(
            'limit'=>1,
            'offset'=>'',
        );
        $res = $log -> listLogWarning($arr);
        $this->do_assert($res);
    }

    public function testListRuleLog()
    {
        $log = $this -> log;
        $arr = array(
            'offset'=>0,
            'limit'=>10,
            'date_start'=>'',
            'date_end'=>'',
            'type'=>1,
            'module_type'=>1,
            'query_type'=>1,
        );
        $res = $log -> listRuleLog($arr);
        $this->do_assert($res);
    }

    public function testGetActiveLogAlarm()
    {
        $log = $this -> log;
        $arr = array(
            'limit'=>5,
            'page'=>1,
            'start_time'=>'2022-07-15 10:15:13',
            'end_time'=>'2022-07-19 10:15:13',
            'success'=>true,
        );
        $res = $log -> getActiveLogAlarm($arr);
        $this->do_assert($res);
    }

    private function do_assert($res)
    {
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}