<?php
/**
 * Create by PhpStorm
 * User: Lis
 * Date: 2020/10/9
 * Time: 9:45
 */

namespace i2up\Test\resource;

use i2up\resource\v20190805\BoxVm;
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
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
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
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
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
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeBoxVm()
    {
        $boxVm = $this -> boxVm;
        $arr = array(
        );
        $res = $boxVm -> describeBoxVm($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDeleteBoxVm()
    {
        $boxVm = $this -> boxVm;
        $arr = array(
            'vm_uuids'=>array('11111111-1111-1111-1111-111111111111'),
        );
        $res = $boxVm -> deleteBoxVm($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListBoxVmStatus()
    {
        $boxVm = $this -> boxVm;
        $arr = array(
            'vm_uuids'=>array('11111111-1111-1111-1111-111111111111'),
        );
        $res = $boxVm -> listBoxVmStatus($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testRegisterBoxVm()
    {
        $boxVm = $this -> boxVm;
        $arr = array(
            'operate'=>'register',
            'vm_uuids'=>array('11111111-1111-1111-1111-111111111111'),
        );
        $res = $boxVm -> registerBoxVm($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}