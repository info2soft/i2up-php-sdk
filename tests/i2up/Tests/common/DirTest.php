<?php
namespace i2up\Test\common;

use i2up\common\Dir;
use i2up\common\Auth;
                
class DirTest extends \PHPUnit_Framework_TestCase
 {
    private $dir;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $auth = new Auth('admin', 'Info1234');
        $this -> dir = new Dir($auth);
    }

    public function testListDir()
    {
        $dir = $this -> dir;
        $arr = array(
            'show_file'=>1,
            'node_uuid'=>'B8566905-411E-B2CD-A742-77B1346D8E84',
            'dev'=>0,
            'path'=>'',
            'rep_uuid'=>'',
            'bs_time'=>'2018-10-23_13-23-08',
        );
        $res = $dir -> listDir($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testCreateDir()
    {
        $dir = $this -> dir;
        $arr = array(
            'node_uuid'=>'B8566905-411E-B2CD-A742-77B1346D8E84',
            'path'=>'E:\test2\\',
        );
        $res = $dir -> createDir($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testCheckDir()
    {
        $dir = $this -> dir;
        $arr = array(
            'node_uuid'=>'B8566905-411E-B2CD-A742-77B1346D8E84',
            'path'=>'E:\test2\\',
        );
        $res = $dir -> checkDir($arr);
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