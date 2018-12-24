<?php
namespace i2up\Test\common;

use i2up\common\GeneralInterface;
use i2up\common\Auth;
                
class GeneralInterfaceTest extends \PHPUnit_Framework_TestCase
 {
    private $generalInterface;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $auth = new Auth('admin', 'Info1234');
        $this -> generalInterface = new GeneralInterface($auth);
    }

    public function testDescribeVersion()
    {
        $generalInterface = $this -> generalInterface;
        $res = $generalInterface -> describeVersion();
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testUpdateDatabase()
    {
        $generalInterface = $this -> generalInterface;
        $res = $generalInterface -> updateDatabase();
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListStatistics()
    {
        $generalInterface = $this -> generalInterface;
        $arr = array(
            'page'=>1,
            'end'=>1,
            'name'=>'',
            'limit'=>10,
            'start'=>1,
            'status'=>'',
            'type'=>'',
            'result'=>1,
            'group_uuid'=>'',
            'uuid'=>'',
        );
        $res = $generalInterface -> listStatistics($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeStatistics()
    {
        $generalInterface = $this -> generalInterface;
        $arr = array(
        );
        $res = $generalInterface -> describeStatistics($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testReadStatistics()
    {
        $generalInterface = $this -> generalInterface;
        $arr = array(
            'type'=>'I2VP_BK',
        );
        $res = $generalInterface -> readStatistics($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}