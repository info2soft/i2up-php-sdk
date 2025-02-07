<?php
namespace i2up\Test\v20250123\resource;

use i2up\resource\v20250123\BoxVm;
use i2up\common\Auth;
                
class BoxVmTest extends \PHPUnit_Framework_TestCase
 {
    private $boxVm;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> boxVm = new BoxVm(new Auth());
    }

    public function testTemplateList()
    {
        $boxVm = $this -> boxVm;
        $arr = array(
            'bk_uuid'=>'',
        );
        
        
        $res = $boxVm -> templateList($arr);
        $this->do_assert($res);
    }

    public function testCreateBoxVm()
    {
        $boxVm = $this -> boxVm;
        $arr = array(
            'vm_name'=>'win2008',
            'bk_uuid'=>'xxxxx',
            'template'=>'win2008r2',
            'disk'=>array(
            '0'=>array(
            'name'=>'D',
            'size'=>'1',),
            '1'=>array(
            'name'=>'D',
            'size'=>'1',),),
            'hardware'=>array(
            'cpu'=>'2',
            'mem'=>'4',),
            'network'=>array(
            'ip'=>'192.168.20.8',
            'gateway'=>'192.168.1.10',
            'netmask'=>'255.255.192.0',),
        );
        
        
        $res = $boxVm -> createBoxVm($arr);
        $this->do_assert($res);
    }

    public function testBoxVmList()
    {
        $boxVm = $this -> boxVm;
        $arr = array(
            'limit'=>1,
            'page'=>1,
            'search_value'=>'',
            'search_field'=>'',
        );
        
        
        $res = $boxVm -> boxVmList($arr);
        $this->do_assert($res);
    }

    public function testDescribeBoxVm()
    {
        $boxVm = $this -> boxVm;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $boxVm -> describeBoxVm($arr);
        $this->do_assert($res);
    }

    public function testDeleteBoxVm()
    {
        $boxVm = $this -> boxVm;
        $arr = array(
            'vm_uuids'=>array(),
            'force'=>1,
        );
        
        
        $res = $boxVm -> deleteBoxVm($arr);
        $this->do_assert($res);
    }

    public function testListBoxVmStatus()
    {
        $boxVm = $this -> boxVm;
        $arr = array(
            'vm_uuids'=>array(),
        );
        
        
        $res = $boxVm -> listBoxVmStatus($arr);
        $this->do_assert($res);
    }

    public function testRegisterBoxVm()
    {
        $boxVm = $this -> boxVm;
        $arr = array(
            'operate'=>'register',
            'vm_uuids'=>array(),
        );
        
        
        $res = $boxVm -> registerBoxVm($arr);
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