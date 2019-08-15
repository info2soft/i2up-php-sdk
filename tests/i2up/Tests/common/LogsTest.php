<?php
namespace i2up\Test\common;

use i2up\common\Logs;
use i2up\common\Auth;
use i2up\Config;
                
class LogsTest extends \PHPUnit_Framework_TestCase
 {
    private $logs;
    
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
        $this -> logs = new Logs($auth);
    }

    public function testListTaskLog()
    {
        $logs = $this -> logs;
        $arr = array(
            'uuid'=>'F97B3FD5-4D5D-41EE-22A9-740A74E1E13C',
            'level'=>0,
            'page'=>1,
            'limit'=>10,
        );
        $res = $logs -> listTaskLog($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListHALog()
    {
        $logs = $this -> logs;
        $arr = array(
            'uuid'=>'F1E9FEAE-F249-FF9E-4A90-866DCBD5DB1E',
            'end'=>1,
            'level'=>1,
            'start'=>1,
            'node_uuid'=>'',
            'page'=>1,
            'limit'=>1,
        );
        $res = $logs -> listHALog($arr);
        $this->assertNotNull($res[0]);
        var_export($res);
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
            'uuid'=>'67E33CDB-D75B-15B3-367D-50C764F5A26F',
        );
        $res = $logs -> listNodeLog($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListNpsvrLog()
    {
        $logs = $this -> logs;
        $res = $logs -> listNpsvrLog();
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListTrafficLog()
    {
        $logs = $this -> logs;
        $arr = array(
            'type'=>'real',
            'uuid'=>'F97B3FD5-4D5D-41EE-22A9-740A74E1E13C',
        );
        $res = $logs -> listTrafficLog($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListOpLog()
    {
        $logs = $this -> logs;
        $arr = array(
            'page'=>1,
            'end_time'=>1508833953,
            'limit'=>10,
            'start_time'=>1508833766,
        );
        $res = $logs -> listOpLog($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDeleteOpLog()
    {
        $logs = $this -> logs;
        $arr = array(
            'start_time'=>1508833766,
            'end_time'=>1508833953,
        );
        $res = $logs -> deleteOpLog($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDownloadOpLog()
    {
        $logs = $this -> logs;
        $arr = array(
            'end_time'=>1508833766,
            'start_time'=>1508833953,
        );
        $res = $logs -> downloadOpLog($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}