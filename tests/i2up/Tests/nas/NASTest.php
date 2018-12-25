<?php
namespace i2up\Test\nas;

use i2up\nas\v20181217\NAS;
use i2up\common\Auth;

class NASTest extends \PHPUnit_Framework_TestCase
{
    private $NAS;

    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $auth = new Auth('admin', 'Info1234');
        $this -> NAS = new NAS($auth);
    }

    public function testCreateNAS()
    {
        $nAS = $this -> NAS;
        $arr = array(
            'compress'=>'',
            'secret_key'=>'',
            'wk_path'=>array(
                '0'=>array(
                    'uuid'=>'',
                    'path'=>''
                )
            ),
            'nas_type'=>'',
            'sync_path'=>'',
            'encrypt_switch'=>'',
            'band_width'=>'',
            'bk_uuid'=>'',
            'bk_path'=>'',
            'sync_uuid'=>'',
            'nas_name'=>'',
            'cmp_schedule'=>array(
                '0'=>array(
                    'sched_every'=>1,
                    'sched_time'=>array(
                        '0'=>'09:15'
                    ),
                    'sched_day'=>array(
                        '0'=>26
                    )
                )
            ),
            'cmp_file_check'=>1,
            'cmp_switch'=>1,
        );
        $res = $nAS -> createNAS($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeNASGroup()
    {
        $nAS = $this -> NAS;
        $arr = array(
            'uuid' => ''
        );
        $res = $nAS -> describeNASGroup($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testModifyNAS()
    {
        $nAS = $this -> NAS;
        $arr = array(
            'uuid'=>'',
            'random_str'=>'',
        );
        $res = $nAS -> modifyNAS($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListNAS()
    {
        $nAS = $this -> NAS;
        $arr = array(
            'limit'=>'10',
            'page'=>'1'
        );
        $res = $nAS -> listNAS($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListNASStatus()
    {
        $nAS = $this -> NAS;
        $arr = array(
            'nas_uuids'=>array(
                '0'=>'4E73b66F-DbC3-94F5-e9CE-AB039F5F1D91'
            )
        );
        $res = $nAS -> listNASStatus($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDeleteNAS()
    {
        $nAS = $this -> NAS;
        $arr = array(
            'nas_uuids'=>array(
                '0'=>'Aae9D89A-69be-a8CD-Af69-542d4CDd71Bb'
            )
        );
        $res = $nAS -> deleteNAS($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testStartNAS()
    {
        $nAS = $this -> NAS;
        $arr = array(
            'nas_uuids'=>array(
                '0'=>'f7fE7D22-4279-C8f5-bEFe-2F12fBDAb33a'
            )
        );
        $res = $nAS -> startNAS($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testStopNAS()
    {
        $nAS = $this -> NAS;
        $arr = array(
            'nas_uuids'=>array(
                '0'=>'f7fE7D22-4279-C8f5-bEFe-2F12fBDAb33a'
            )
        );
        $res = $nAS -> stopNAS($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}