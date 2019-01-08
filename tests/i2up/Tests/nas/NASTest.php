<?php
namespace i2up\Test\nas;

use i2up\nas\v20181217\NAS;
use i2up\common\Auth;
use i2up\Config;

class NASTest extends \PHPUnit_Framework_TestCase
{
    private $NAS;

    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $auth = new Auth(Config::baseUrl, 'admin', 'Info1234', __DIR__ . '/../');
        $this -> NAS = new NAS($auth);
    }

    public function testCreateNAS()
    {
        $NAS = $this -> NAS;
        $arr = array(
            'compress'=>'',
            'secret_key'=>'',
            'wk_list'=>array(
                '0'=>array(
                    'wk_uuid'=>'67E33CDB-D75B-15B3-367D-50C764F5A26F',
                    'wk_path'=>'E:\nas\\'
                )
            ),
            'nas_type'=>0,
            'sync_path'=>'',
            'encrypt_switch'=>'0',
            'band_width'=>'',
            'bk_uuid'=>'67E33CDB-D75B-15B3-367D-50C764F5A26F',
            'bk_path'=>'E:\t\\',
            'sync_uuid'=>'',
            'nas_name'=>'test',
            'cmp_schedule'=>array(),
            'cmp_file_check'=>0,
            'cmp_switch'=>0,
        );
        $res = $NAS -> createNAS($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListNAS()
    {
        $NAS = $this -> NAS;
        $arr = array(
            'limit'=>'10',
            'page'=>'1'
        );
        $res = $NAS -> listNAS($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeNASGroup()
    {
        $NAS = $this -> NAS;
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111'
        );
        $res = $NAS -> describeNASGroup($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testModifyNAS()
    {
        $NAS = $this -> NAS;
        $arr = array(
            'uuid'=>'11111111-1111-1111-1111-111111111111',
            'random_str'=>'11111111-1111-1111-1111-111111111111',
            'compress'=>'',
            'secret_key'=>'',
            'wk_list'=>array(
                '0'=>array(
                    'wk_uuid'=>'67E33CDB-D75B-15B3-367D-50C764F5A26F',
                    'wk_path'=>'E:\nas\\'
                )
            ),
            'nas_type'=>0,
            'sync_path'=>'',
            'encrypt_switch'=>'0',
            'band_width'=>'',
            'bk_uuid'=>'67E33CDB-D75B-15B3-367D-50C764F5A26F',
            'bk_path'=>'E:\test\\',
            'sync_uuid'=>'',
            'nas_name'=>'test2',
            'cmp_schedule'=>array(),
            'cmp_file_check'=>0,
            'cmp_switch'=>0
        );
        $res = $NAS -> modifyNAS($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListNASStatus()
    {
        $NAS = $this -> NAS;
        $arr = array(
            'nas_uuids'=>array(
                '0'=>'11111111-1111-1111-1111-111111111111'
            )
        );
        $res = $NAS -> listNASStatus($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDeleteNAS()
    {
        $NAS = $this -> NAS;
        $arr = array(
            'nas_uuids'=>array(
                '0'=>'11111111-1111-1111-1111-111111111111'
            )
        );
        $res = $NAS -> deleteNAS($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testStartNAS()
    {
        $NAS = $this -> NAS;
        $arr = array(
            'nas_uuids'=>array(
                '0'=>'11111111-1111-1111-1111-111111111111'
            )
        );
        $res = $NAS -> startNAS($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testStopNAS()
    {
        $NAS = $this -> NAS;
        $arr = array(
            'nas_uuids'=>array(
                '0'=>'11111111-1111-1111-1111-111111111111'
            )
        );
        $res = $NAS -> stopNAS($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}