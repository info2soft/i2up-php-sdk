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
                    'wk_uuid'=>'730B1B39-9906-F084-3C8F-DA7779141EA0',
                    'wk_path'=>'E:\nas\\'
                )
            ),
            'nas_type'=>0,
            'sync_path'=>'',
            'encrypt_switch'=>'0',
            'band_width'=>'',
            'bk_uuid'=>'B8566905-411E-B2CD-A742-77B1346D8E84',
            'bk_path'=>'E:\nas\\',
            'sync_uuid'=>'',
            'nas_name'=>'test',
            'cmp_schedule'=>array(),
            'cmp_file_check'=>0,
            'cmp_switch'=>0,
        );
        $res = $NAS -> createNAS($arr);
        var_dump($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeNASGroup()
    {
        $NAS = $this -> NAS;
        $arr = array(
            'uuid' => 'CA9CD377-5680-C080-69E5-F13A16CB20DB'
        );
        $res = $NAS -> describeNASGroup($arr);
        var_dump($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testModifyNAS()
    {
        $NAS = $this -> NAS;
        $arr = array(
            'uuid'=>'CA9CD377-5680-C080-69E5-F13A16CB20DB',
            'random_str'=>'5747E468-A86C-CE3F-5EA3-B2132055624D',
            'compress'=>'',
            'secret_key'=>'',
            'wk_list'=>array(
                '0'=>array(
                    'wk_uuid'=>'730B1B39-9906-F084-3C8F-DA7779141EA0',
                    'wk_path'=>'E:\nas\\'
                )
            ),
            'nas_type'=>0,
            'sync_path'=>'',
            'encrypt_switch'=>'0',
            'band_width'=>'',
            'bk_uuid'=>'B8566905-411E-B2CD-A742-77B1346D8E84',
            'bk_path'=>'E:\nas\\',
            'sync_uuid'=>'',
            'nas_name'=>'test',
            'cmp_schedule'=>array(),
            'cmp_file_check'=>0,
            'cmp_switch'=>0
        );
        $res = $NAS -> modifyNAS($arr);
        var_dump($res);
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
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListNASStatus()
    {
        $NAS = $this -> NAS;
        $arr = array(
            'nas_uuids'=>array(
                '0'=>'B7361BB1-E4BD-3E88-ADE7-53024DCFA710'
            )
        );
        $res = $NAS -> listNASStatus($arr);
        var_dump($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDeleteNAS()
    {
        $NAS = $this -> NAS;
        $arr = array(
            'nas_uuids'=>array(
                '0'=>'B7361BB1-E4BD-3E88-ADE7-53024DCFA710'
            )
        );
        $res = $NAS -> deleteNAS($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testStartNAS()
    {
        $NAS = $this -> NAS;
        $arr = array(
            'nas_uuids'=>array(
                '0'=>'B7361BB1-E4BD-3E88-ADE7-53024DCFA710'
            )
        );
        $res = $NAS -> startNAS($arr);
        var_dump($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testStopNAS()
    {
        $NAS = $this -> NAS;
        $arr = array(
            'nas_uuids'=>array(
                '0'=>'B7361BB1-E4BD-3E88-ADE7-53024DCFA710'
            )
        );
        $res = $NAS -> stopNAS($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}