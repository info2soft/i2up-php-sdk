<?php
namespace i2up\Test\ffoMount;

use i2up\ffoMount\v20201009\FfoMount;
use i2up\common\Auth;

class FfoMountTest extends \PHPUnit_Framework_TestCase
{
    private $ffoMount;

    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> ffoMount = new FfoMount(new Auth());
    }

    public function testCreateFfoMount()
    {
        $ffoMount = $this -> ffoMount;
        $arr = array(
            'vp_uuid'=>'',
            'bk_version'=>'',
            'os_version'=>'',
            'storage_uuid'=>'',
            'mount_name'=>'',
            'wk_uuid'=>'',
            'bk_uuid'=>'',
            'vm_disks'=>array(
                '0'=>array(
                    'path'=>'',
                    'size'=>'',
                    'interface'=>'',
                    'isBoot'=>'',),),
            'protocol'=>'',
            ''=>'',
            'acl'=>'',
        );
        $res = $ffoMount -> createFfoMount($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testModifyFfoMount()
    {
        $ffoMount = $this -> ffoMount;
        $arr = array(
            'vp_uuid'=>'',
            'bk_version'=>'',
            'os_version'=>'',
            'storage_uuid'=>'',
            'mount_name'=>'',
            'wk_uuid'=>'',
            'bk_uuid'=>'',
            'vm_disks'=>array(
                '0'=>array(
                    'path'=>'',
                    'size'=>'',
                    'interface'=>'',
                    'isBoot'=>'',),),
            'protocol'=>'',
            'acl'=>'',
            'random_str'=>'',
        );
        $res = $ffoMount -> modifyFfoMount($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeFfomount()
    {
        $ffoMount = $this -> ffoMount;
        $arr = array(
        );
        $res = $ffoMount -> describeFfomount($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testFfoMountList()
    {
        $ffoMount = $this -> ffoMount;
        $arr = array(
            'limit'=>10,
            'page'=>1,
        );
        $res = $ffoMount -> ffoMountList($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDeleteFfoMount()
    {
        $ffoMount = $this -> ffoMount;
        $arr = array(
            'mount_uuids'=>array('11111111-1111-1111-1111-111111111111'),
        );
        $res = $ffoMount -> deleteFfoMount($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testTempFuncName()
    {
        $ffoMount = $this -> ffoMount;
        $arr = array(
            'mount_uuids'=>array('11111111-1111-1111-1111-111111111111'),
        );
        $res = $ffoMount -> tempFuncName($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}