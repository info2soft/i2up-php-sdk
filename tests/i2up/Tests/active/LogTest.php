<?php
namespace i2up\Test\active;

use i2up\active\v20200721\log;
use i2up\common\Auth;
use i2up\Config;

class logTest extends \PHPUnit_Framework_TestCase
{
    private $log;

    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $params = array(
            'username' => 'admin',
            'pwd' => 'Info1234',
            'cache_path' => __DIR__ . '/../',
            'ip' => Config::baseUrl
        );
        $auth = new Auth($params);
        $this -> log = new log($auth);
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