<?php
namespace i2up\Test\v20250630\resource;

use i2up\resource\v20250630\DtoLifeManagement;
use i2up\common\Auth;
                
class DtoLifeManagementTest extends \PHPUnit_Framework_TestCase
 {
    private $dtoLifeManagement;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> dtoLifeManagement = new DtoLifeManagement(new Auth());
    }

    public function testCreateDtoLm()
    {
        $dtoLifeManagement = $this -> dtoLifeManagement;
        $arr = array(
            'rule_name'=>'',
            'status'=>0,
            'type'=>1,
            'prefix'=>'',
            'lfa_stor'=>array(
            'config_sw'=>1,
            'days'=>1,),
            'arch_stor'=>array(
            'config_sw'=>1,
            'days'=>1,),
            'expr_del'=>array(
            'config_sw'=>1,
            'days'=>1,),
            'sto_uuid'=>'',
            'host_uuid'=>'',
            'path'=>'',
            'rule_id'=>'',
        );
        
        
        $res = $dtoLifeManagement -> createDtoLm($arr);
        $this->do_assert($res);
    }

    public function testListDtoLm()
    {
        $dtoLifeManagement = $this -> dtoLifeManagement;
        $arr = array(
            'sto_uuid'=>'',
            'host_uuid'=>'',
            'path'=>'',
            'rule_name'=>'',
        );
        
        
        $res = $dtoLifeManagement -> listDtoLm($arr);
        $this->do_assert($res);
    }

    public function testModifyDtoLm()
    {
        $dtoLifeManagement = $this -> dtoLifeManagement;
        $arr = array(
            'rule_name'=>'',
            'status'=>0,
            'type'=>1,
            'prefix'=>'',
            'lfa_stor'=>array(
            'config_sw'=>'',
            'days'=>'',),
            'arch_stor'=>array(
            'config_sw'=>'',
            'days'=>'',),
            'expr_del'=>array(
            'config_sw'=>'',
            'days'=>'',),
            'sto_uuid'=>'',
            'host_uuid'=>'',
            'path'=>'',
        );
        
        
        $res = $dtoLifeManagement -> modifyDtoLm($arr);
        $this->do_assert($res);
    }

    public function testOperateDtoLm()
    {
        $dtoLifeManagement = $this -> dtoLifeManagement;
        $arr = array(
            'type'=>'',
            'sto_uuid'=>'',
            'host_uuid'=>'',
            'path'=>'',
            'rule_names'=>array(),
        );
        
        
        $res = $dtoLifeManagement -> operateDtoLm($arr);
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