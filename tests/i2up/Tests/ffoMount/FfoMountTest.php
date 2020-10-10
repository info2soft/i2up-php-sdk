<?php
namespace i2up\Test\ffoMount;

use i2up\ffoMount\v20201009\FfoMount;
use i2up\common\Auth;
use i2up\Config;

class FfoMountTest extends \PHPUnit_Framework_TestCase
{
    private $ffoMount;

    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $params = array(
            'username' => 'admin',
            'pwd' => 'Info1234',
            'cache_path' => __DIR__ . '/../',
            'ip' => Config::baseUrl
        );
        $auth = new Auth($params);
        $this -> ffoMount = new FfoMount($auth);
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
            'mount_uuids'=>array(),
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
            'mount_uuids'=>array(),
        );
        $res = $ffoMount -> tempFuncName($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}