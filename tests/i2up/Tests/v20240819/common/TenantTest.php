<?php
namespace i2up\Test\v20240819\common;

use i2up\common\v20240819\Tenant;
use i2up\common\Auth;
                
class TenantTest extends \PHPUnit_Framework_TestCase
 {
    private $tenant;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> tenant = new Tenant(new Auth());
    }

    public function testListTenant()
    {
        $tenant = $this -> tenant;
        $arr = array(
            'search_value'=>'',
            'search_field'=>'',
            'limit'=>1,
            'page'=>1,
            'order_by'=>'',
            'direction'=>'',
            'like_args'=>array(
            'xxx'=>'',),
            'where_args'=>array(
            'xxx'=>'',),
        );
        
        
        $res = $tenant -> listTenant($arr);
        $this->do_assert($res);
    }

    public function testCreateTenant()
    {
        $tenant = $this -> tenant;
        $arr = array(
            'tenant_name'=>'Michael',
            'display_name'=>'Daniel',
            'description'=>'Donald',
            'enabled'=>1,
            'password'=>'',
        );
        
        
        $res = $tenant -> createTenant($arr);
        $this->do_assert($res);
    }

    public function testModifyTenant()
    {
        $tenant = $this -> tenant;
        $arr = array(
            'display_name'=>'Robert',
            'description'=>'Barbara',
            'enabled'=>0,
            'random_str'=>'6AE25Abc-113E-7EB8-A6Ef-7d8c32AF1F29',
            'tenant_name'=>'Gary',
            'password'=>'',
        );
        
        $arr['id'] = "123456";
        $res = $tenant -> modifyTenant($arr);
        $this->do_assert($res);
    }

    public function testDeleteTenant()
    {
        $tenant = $this -> tenant;
        $arr = array(
            'ids'=>array(),
        );
        
        
        $res = $tenant -> deleteTenant($arr);
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