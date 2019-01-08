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
            'node_uuid'=>'67E33CDB-D75B-15B3-367D-50C764F5A26F',
            'rep_uuid'=>'F97B3FD5-4D5D-41EE-22A9-740A74E1E13C',
            'byte_format'=>1,
        );
        $res = $storage -> listStorageInfo($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}