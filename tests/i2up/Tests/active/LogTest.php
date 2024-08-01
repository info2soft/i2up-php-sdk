<?php
namespace i2up\Test\active;

use i2up\active\v20200721\log;
use i2up\common\Auth;

class logTest extends \PHPUnit_Framework_TestCase
{
    private $log;

    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> log = new log(new Auth());
    }

    public function testListLogWarning()
    {
        $log = $this -> log;
        $arr = array(
            'limit'=>1,
            'offset'=>'',
        );
        $res = $log -> listLogWarning($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}