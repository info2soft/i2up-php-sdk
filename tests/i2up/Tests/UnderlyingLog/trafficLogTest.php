<?php

namespace i2up\Tests\Underlying;

use i2up\UnderlyingLog\trafficLog;
use i2up\common\Auth;

class TrafficLogTest extends \PHPUnit_Framework_TestCase{
    private $trafficLog;
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $auth = new Auth('admin','Info1234');
        $this -> trafficLog = new TrafficLog($auth);
    }
    public function testTrafficLog()
    {
        $log = $this -> trafficLog;
        $arr = array('uuid'=>'EDDB50A6-3F95-D529-30DE-05ACE89A6FE2','type'=>'real');
        $this->assertNotNull($log -> trafficLog($arr));
        var_dump($log -> trafficLog($arr));
    }
}