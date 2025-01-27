<?php
namespace i2up\Test\v20250123\cloud;

use i2up\cloud\v20250123\CloudBackendStorage;
use i2up\common\Auth;
                
class CloudBackendStorageTest extends \PHPUnit_Framework_TestCase
 {
    private $cloudBackendStorage;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> cloudBackendStorage = new CloudBackendStorage(new Auth());
    }

    public function testListBackendStorages()
    {
        $cloudBackendStorage = $this -> cloudBackendStorage;
        $arr = array(
            'page'=>1,
            'limit'=>1,
            'where_args'=>array(
            'vp_uuid'=>'',),
        );
        
        
        $res = $cloudBackendStorage -> listBackendStorages($arr);
        $this->do_assert($res);
    }

    public function testDescribeBackendStorage()
    {
        $cloudBackendStorage = $this -> cloudBackendStorage;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $cloudBackendStorage -> describeBackendStorage($arr);
        $this->do_assert($res);
    }

    public function testCreateBackendStorage()
    {
        $cloudBackendStorage = $this -> cloudBackendStorage;
        $arr = array(
            'ip'=>'',
            'port'=>1,
            'vp_uuid'=>'',
            'type'=>1,
            'link_type'=>1,
            'user_name'=>'',
            'password'=>'',
        );
        
        
        $res = $cloudBackendStorage -> createBackendStorage($arr);
        $this->do_assert($res);
    }

    public function testModifyBackendStorage()
    {
        $cloudBackendStorage = $this -> cloudBackendStorage;
        $arr = array(
            'ip'=>'',
            'port'=>1,
            'vp_uuid'=>'',
            'type'=>1,
            'link_type'=>1,
            'user_name'=>'',
            'password'=>'',
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $cloudBackendStorage -> modifyBackendStorage($arr);
        $this->do_assert($res);
    }

    public function testDeleteBackendStorage()
    {
        $cloudBackendStorage = $this -> cloudBackendStorage;
        $arr = array(
            'uuids'=>array(),
            'force'=>1,
        );
        
        
        $res = $cloudBackendStorage -> deleteBackendStorage($arr);
        $this->do_assert($res);
    }

    private function do_assert($res)
    {
        if ($res == null) {
            print "Invalid parameter: body is null or empty, or uuid/id is empty.\n";
        }

        if (isset($res[1])){
            print("Response.statusCode = " . ($res[1])->getResponse()->statusCode);
            print("\nResponse.body = " . ($res[1])->getResponse()->body);
        }
        
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('ret',$res[0]);
        $this->assertEquals(200, $res[0]['ret']);
    }
}