<?php
namespace i2up\Test\v20240819\resource;

use i2up\resource\v20240819\AppType;
use i2up\common\Auth;
                
class AppTypeTest extends \PHPUnit_Framework_TestCase
 {
    private $appType;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> appType = new AppType(new Auth());
    }

    public function testCreateAppType()
    {
        $appType = $this -> appType;
        $arr = array(
            'type_name'=>'db',
            'comment'=>'',
        );
        
        
        $res = $appType -> createAppType($arr);
        $this->do_assert($res);
    }

    public function testListAppType()
    {
        $appType = $this -> appType;
        $arr = array();
        
        
        $res = $appType -> listAppType($arr);
        $this->do_assert($res);
    }

    public function testDescribeAppType()
    {
        $appType = $this -> appType;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $appType -> describeAppType($arr);
        $this->do_assert($res);
    }

    public function testModifyAppType()
    {
        $appType = $this -> appType;
        $arr = array(
            'type_name'=>'db1',
            'comment'=>'',
            'random_str'=>'AD23C737-9395-4032-F5C3-F93E84C67D47',
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $appType -> modifyAppType($arr);
        $this->do_assert($res);
    }

    public function testDeleteAppType()
    {
        $appType = $this -> appType;
        $arr = array(
            'type_uuids'=>array(
            '0'=>'2E27351F-720E-EA77-C0A6-7D769D7CADB1',),
        );
        
        
        $res = $appType -> deleteAppType($arr);
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