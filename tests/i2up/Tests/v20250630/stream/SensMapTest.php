<?php
namespace i2up\Test\v20250630\stream;

use i2up\stream\v20250630\SensMap;
use i2up\common\Auth;
                
class SensMapTest extends \PHPUnit_Framework_TestCase
 {
    private $sensMap;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> sensMap = new SensMap(new Auth());
    }

    public function testDescriptMap()
    {
        $sensMap = $this -> sensMap;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $sensMap -> descriptMap($arr);
        $this->do_assert($res);
    }

    public function testListMap()
    {
        $sensMap = $this -> sensMap;
        $arr = array(
            'page'=>1,
            'limit'=>1,
        );
        
        
        $res = $sensMap -> listMap($arr);
        $this->do_assert($res);
    }

    public function testCreateMap()
    {
        $sensMap = $this -> sensMap;
        $arr = array(
            'map_name'=>'',
            'sens_type_id'=>'',
            'sens_column'=>array(
            '0'=>array(
            'user'=>'I2MASK',
            'table'=>'MP',
            'column'=>'MP',),),
            'src_type'=>'',
            'src_path'=>'',
        );
        
        
        $res = $sensMap -> createMap($arr);
        $this->do_assert($res);
    }

    public function testModifyMap()
    {
        $sensMap = $this -> sensMap;
        $arr = array(
            'map_name'=>'',
            'sens_type_id'=>'',
            'sens_column'=>array(
            '0'=>array(
            'user'=>'I2MASK',
            'table'=>'MP',
            'column'=>'MP',),),
            'src_type'=>'',
            'src_path'=>'',
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $sensMap -> modifyMap($arr);
        $this->do_assert($res);
    }

    public function testDeleteMap()
    {
        $sensMap = $this -> sensMap;
        $arr = array(
            'uuids'=>array(),
        );
        
        
        $res = $sensMap -> deleteMap($arr);
        $this->do_assert($res);
    }

    public function testCreateDbMap()
    {
        $sensMap = $this -> sensMap;
        $arr = array(
            'db_uuid'=>'',
            'map_name'=>'',
        );
        
        
        $res = $sensMap -> createDbMap($arr);
        $this->do_assert($res);
    }

    public function testListDbMap()
    {
        $sensMap = $this -> sensMap;
        $arr = array(
            'page'=>0,
            'limit'=>10,
        );
        
        
        $res = $sensMap -> listDbMap($arr);
        $this->do_assert($res);
    }

    public function testDeleteDbMap()
    {
        $sensMap = $this -> sensMap;
        $arr = array(
            'uuid'=>'',
        );
        
        
        $res = $sensMap -> deleteDbMap($arr);
        $this->do_assert($res);
    }

    public function testModifyDbMap()
    {
        $sensMap = $this -> sensMap;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $sensMap -> modifyDbMap($arr);
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