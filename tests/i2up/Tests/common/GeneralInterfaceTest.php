<?php
namespace i2up\Test\common;

use i2up\common\GeneralInterface;
use i2up\common\Auth;
use i2up\Config;
                
class GeneralInterfaceTest extends \PHPUnit_Framework_TestCase
 {
    private $generalInterface;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $auth = new Auth(Config::baseUrl, 'admin', 'Info1234', __DIR__ . '/../');
        $this -> generalInterface = new GeneralInterface($auth);
    }

    public function testDescribeVersion()
    {
        $generalInterface = $this -> generalInterface;
        $res = $generalInterface -> describeVersion();
        var_export($res);
        $this->assertNotNull($res[0]);
    }

    public function testUpdateDatabase()
    {
        $generalInterface = $this -> generalInterface;
        $res = $generalInterface -> updateDatabase();
        var_export($res);
        $this->assertNotNull($res[0]);
    }

    public function testListStatistics()
    {
        $generalInterface = $this -> generalInterface;
        $arr = array(
            'page'=>1,
            'limit'=>10,
            'name'=>''
        );
        $res = $generalInterface -> listStatistics($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeStatistics()
    {
        $generalInterface = $this -> generalInterface;
        $arr = array(
            'id' => '1'
        );
        $res = $generalInterface -> describeStatistics($arr);
        var_export($res);
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
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}