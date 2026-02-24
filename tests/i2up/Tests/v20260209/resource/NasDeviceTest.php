<?php
namespace i2up\Test\v20260209\resource;

use i2up\resource\v20260209\NasDevice;
use i2up\common\Auth;
                
class NasDeviceTest extends \PHPUnit_Framework_TestCase
 {
    private $nasDevice;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> nasDevice = new NasDevice(new Auth());
    }

    public function testCreateNasDevice()
    {
        $nasDevice = $this -> nasDevice;
        $arr = array(
            'device_name'=>'',
            'protocol'=>1,
            'ip'=>'',
            'port'=>1,
            'user'=>'',
            'password'=>'',
        );
        
        
        $res = $nasDevice -> createNasDevice($arr);
        $this->do_assert($res);
    }

    public function testModifyNasDevice()
    {
        $nasDevice = $this -> nasDevice;
        $arr = array(
            'name'=>'',
            'protocol'=>1,
            'ip'=>'',
            'port'=>1,
            'user'=>'',
            'password'=>'',
            'random_str'=>'',
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $nasDevice -> modifyNasDevice($arr);
        $this->do_assert($res);
    }

    public function testListNasDevice()
    {
        $nasDevice = $this -> nasDevice;
        $arr = array(
            'limit'=>1,
            'page'=>1,
            'like_args'=>array(
            'device_name'=>'',),
        );
        
        
        $res = $nasDevice -> listNasDevice($arr);
        $this->do_assert($res);
    }

    public function testDescribeNasDevice()
    {
        $nasDevice = $this -> nasDevice;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $nasDevice -> describeNasDevice($arr);
        $this->do_assert($res);
    }

    public function testDeleteNasDevice()
    {
        $nasDevice = $this -> nasDevice;
        $arr = array(
            'device_uuids'=>array(),
            'force'=>'',
        );
        
        
        $res = $nasDevice -> deleteNasDevice($arr);
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