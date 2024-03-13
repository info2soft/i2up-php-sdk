<?php
namespace i2up\Test\v20240228\common;

use i2up\common\v20240228\Tenant;
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
            'like_args[xxx]'=>'',
            'where_args[xxx]'=>'',
            'order_by'=>'',
            'direction'=>'',
        );
        $res = $tenant -> listTenant($arr);
        $this->do_assert($res);
    }

    public function testCreateTenant()
    {
        $tenant = $this -> tenant;
        $arr = array(
            'tenant_name'=>'Michelle',
            'display_name'=>'Susan',
            'description'=>'Ronald',
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
            'id' => 1,
            'display_name'=>'Scott',
            'description'=>'Jennifer',
            'enabled'=>0,
            'random_str'=>'C858d697-e2Be-c5A4-b79e-766dE42A8255',
            'tenant_name'=>'Gary',
            'password'=>'',
        );
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
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}