<?php
namespace i2up\Test\v20240228\timing;

use i2up\timing\v20240228\TimingWork;
use i2up\common\Auth;

class TimingWorkTest extends \PHPUnit_Framework_TestCase
{
    private $timingWork;

    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> timingWork = new TimingWork(new Auth());
    }

    public function testListTimingWork()
    {
        $timingWork = $this -> timingWork;
        $arr = array(
            'page'=>1,
            'limit'=>1,
            'where_args[task_uuid]'=>'',
            'search_field'=>'',
            'search_value'=>'',
        );
        $res = $timingWork -> listTimingWork($arr);
        $this->do_assert($res);
    }

    public function testDeleteTimingWork()
    {
        $timingWork = $this -> timingWork;
        $arr = array(
            'work_uuids'=>array(
                '11111111-1111-1111-1111-111111111111',
            ),
        );
        $res = $timingWork -> deleteTimingWork($arr);var_dump($res);
        $this->do_assert($res);
    }

    private function do_assert($res)
    {
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}