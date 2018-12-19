<?php

namespace i2up\Tests\Underlying;

use i2up\UnderlyingLog\i2nodeLog;
use i2up\common\Auth;

class I2nodeLogTest extends \PHPUnit_Framework_TestCase{
    private $i2nodeLog;
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $auth = new Auth('admin','Info1234');
        $this -> i2nodeLog = new I2nodeLog($auth);
    }
    public function testTaskLog()
    {
        $log = $this -> i2nodeLog;
        $arr = array('uuid'=>'3C343AD7-AEB5-606A-801D-563BBA1E949E','page'=>'1','limit'=>'10');
        $this->assertNotNull($log -> taskLog($arr));
        var_dump($log -> taskLog($arr));
    }
    public function testHALog()
    {
        $log = $this -> i2nodeLog;
        $arr = array('uuid'=>'3C343AD7-AEB5-606A-801D-563BBA1E949E','page'=>'1','limit'=>'10');
        $this->assertNotNull($log -> HALog($arr));
        var_dump($log -> HALog($arr));
    }
    public function testNodeLog()
    {
        $log = $this -> i2nodeLog;
        $arr = array('uuid'=>'4A9A3EF9-BE3E-9F68-BC04-AE3219C7913E','page'=>'1','limit'=>'10');
        $this->assertNotNull($log -> nodeLog($arr));
        var_dump($log -> nodeLog($arr));
    }
}