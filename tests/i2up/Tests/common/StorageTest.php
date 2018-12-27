<?php
namespace i2up\Test\common;

use i2up\common\Storage;
use i2up\common\Auth;
use i2up\Config;
                
class StorageTest extends \PHPUnit_Framework_TestCase
 {
    private $storage;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $auth = new Auth(Config::baseUrl, 'admin', 'Info1234', __DIR__ . '/../');
        $this -> storage = new Storage($auth);
    }

    public function testListStorageInfo()
    {
        $storage = $this -> storage;
        $arr = array(
            'node_uuid'=>'28A5AA3B-CF61-3793-2D81-70F9BDCFA2B7',
            'rep_uuid'=>'',
            'byte_format'=>1,
        );
        $res = $storage -> listStorageInfo($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}