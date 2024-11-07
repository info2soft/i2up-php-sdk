<?php
namespace i2up\Test\v20240819\resource;

use i2up\resource\v20240819\ActiveDbType;
use i2up\common\Auth;
                
class ActiveDbTypeTest extends \PHPUnit_Framework_TestCase
 {
    private $activeDbType;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> activeDbType = new ActiveDbType(new Auth());
    }

    public function testListActiveDbType()
    {
        $activeDbType = $this -> activeDbType;
        $arr = array(
            'where_args'=>array(
            'type_uuid'=>array(),),
        );
        
        
        $res = $activeDbType -> listActiveDbType($arr);
        $this->do_assert($res);
    }

    public function testListActiveDbTypeAvailMappingType()
    {
        $activeDbType = $this -> activeDbType;
        $arr = array();
        
        
        $res = $activeDbType -> listActiveDbTypeAvailMappingType($arr);
        $this->do_assert($res);
    }

    public function testCreateActiveDbType()
    {
        $activeDbType = $this -> activeDbType;
        $arr = array(
            'type_name'=>'',
            'mapping_type'=>'',
            'is_source'=>1,
        );
        
        
        $res = $activeDbType -> createActiveDbType($arr);
        $this->do_assert($res);
    }

    public function testModifyActiveDbType()
    {
        $activeDbType = $this -> activeDbType;
        $arr = array(
            'type_name'=>'',
            'is_source'=>'',
            'mapping_type_name'=>'',
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $activeDbType -> modifyActiveDbType($arr);
        $this->do_assert($res);
    }

    public function testDeleteActiveDbType()
    {
        $activeDbType = $this -> activeDbType;
        $arr = array(
            'type_uuid'=>'',
        );
        
        
        $res = $activeDbType -> deleteActiveDbType($arr);
        $this->do_assert($res);
    }

    public function testListAvailActiveDbSourceType()
    {
        $activeDbType = $this -> activeDbType;
        $arr = array(
            'where_args'=>array(
            'src_type_name'=>'mysql',),
        );
        
        
        $res = $activeDbType -> listAvailActiveDbSourceType($arr);
        $this->do_assert($res);
    }

    public function testListAvailActiveDbType()
    {
        $activeDbType = $this -> activeDbType;
        $arr = array(
            'where_args'=>array(
            'type_uuid'=>'',),
        );
        
        
        $res = $activeDbType -> listAvailActiveDbType($arr);
        $this->do_assert($res);
    }

    public function testModifyAvailActiveDbType()
    {
        $activeDbType = $this -> activeDbType;
        $arr = array(
            'type_uuid'=>'',
            'dst_type_uuid_list'=>array(
            '0'=>'8F26595D-CBB9-4053-9B3A-43F9F23BFCD7',
            '1'=>'A4733F57-70B9-4DF8-83D8-43F8557A1C8F',),
        );
        
        
        $res = $activeDbType -> modifyAvailActiveDbType($arr);
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