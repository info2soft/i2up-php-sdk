<?php
namespace i2up\Test\common;

use i2up\common\Dir;
use i2up\common\Auth;
use i2up\Config;
                
class DirTest extends \PHPUnit_Framework_TestCase
 {
    private $dir;
    
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
        $this -> dir = new Dir($auth);
    }

    public function testListDir()
    {
        $dir = $this -> dir;
        $arr = array(
            'show_file'=>1,
            'node_uuid'=>'67E33CDB-D75B-15B3-367D-50C764F5A26F',
            'dev'=>0,
            'path'=>'',
            'rep_uuid'=>'',
            'bs_time'=>'',
        );
        $res = $dir -> listDir($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testCreateDir()
    {
        $dir = $this -> dir;
        $arr = array(
            'node_uuid'=>'67E33CDB-D75B-15B3-367D-50C764F5A26F',
            'path'=>'E:\test7\\',
        );
        $res = $dir -> createDir($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testCheckDir()
    {
        $dir = $this -> dir;
        $arr = array(
            'node_uuid'=>'67E33CDB-D75B-15B3-367D-50C764F5A26F',
            'path'=>'E:\test7\\',
        );
        $res = $dir -> checkDir($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

//    public function testListDir()
//    {
//        $dir = $this -> dir;
//        $arr = array(
//            'port'=>'',
//            'account'=>'',
//            'path'=>'',
//            'ip'=>'',
//            'show_file'=>1,
//            'password'=>'',
//            'i2id'=>'',
//        );
//        $res = $dir -> listDir($arr);
//        $this->assertNotNull($res[0]);
//        $this->assertArrayHasKey('code',$res[0]);
//        $this->assertEquals(0, $res[0]['code']);
//    }
}