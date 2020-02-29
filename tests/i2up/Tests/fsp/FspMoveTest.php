<?php
namespace i2up\Test\fsp;

use i2up\fsp\v20190805\FspMove;
use i2up\common\Auth;
use i2up\Config;

class FspMoveTest extends \PHPUnit_Framework_TestCase
{
    private $fspMove;

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
        $this -> fspMove = new FspMove($auth);
    }

    public function testListFspMoveNic()
    {
        $fspMove = $this -> fspMove;
        $arr = array(
            'bk_uuid'=>'F85DFEC0-149E-373D-0B9E-3DA9A5C43940',
            'wk_uuid'=>'42614852-BB62-1EF7-FED0-D2354BF3149D',
        );
        $res = $fspMove -> listFspMoveNic($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListFspMoveDir()
    {
        $fspMove = $this -> fspMove;
        $arr = array(
            'fsp_uuid'=>'',
            'wk_uuid'=>'42614852-BB62-1EF7-FED0-D2354BF3149D',
        );
        $res = $fspMove -> listFspMoveDir($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testVerifyFspMoveLicense()
    {
        $fspMove = $this -> fspMove;
        $arr = array(
            'wk_uuid'=>'42614852-BB62-1EF7-FED0-D2354BF3149D',
            'bk_uuid'=>'F85DFEC0-149E-373D-0B9E-3DA9A5C43940',
        );
        $res = $fspMove -> verifyFspMoveLicense($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testVerifyFspMoveOldRule()
    {
        $fspMove = $this -> fspMove;
        $arr = array(
            'wk_uuid'=>'42614852-BB62-1EF7-FED0-D2354BF3149D',
            'bk_uuid'=>'F85DFEC0-149E-373D-0B9E-3DA9A5C43940',
        );
        $res = $fspMove -> verifyFspMoveOldRule($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testVerifyFspMoveVolumeSpace()
    {
        $fspMove = $this -> fspMove;
        $arr = array(
            'wk_uuid'=>'42614852-BB62-1EF7-FED0-D2354BF3149D',
            'bk_uuid'=>'F85DFEC0-149E-373D-0B9E-3DA9A5C43940',
            'sync_item'=>'/',
        );
        $res = $fspMove -> verifyFspMoveVolumeSpace($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testVerifyFspMoveOsVersion()
    {
        $fspMove = $this -> fspMove;
        $arr = array(
            'wk_uuid'=>'42614852-BB62-1EF7-FED0-D2354BF3149D',
            'bk_uuid'=>'F85DFEC0-149E-373D-0B9E-3DA9A5C43940',
        );
        $res = $fspMove -> verifyFspMoveOsVersion($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testCreateFspMove()
    {
        $fspMove = $this -> fspMove;
        $arr = array(
            'fsp_move'=>array(
                'fsp_name'=>'testMove',
                'service_uuid'=>'',
                'monitor_type'=>0,
                'bk_path'=>array(
                    "/I2FFO/bin/", "/I2FFO/boot/", "/I2FFO/etc/", "/I2FFO/lib/", "/I2FFO/lib64/", "/I2FFO/root/", "/I2FFO/sbin/", "/I2FFO/usr/bin/", "/I2FFO/usr/lib/", "/I2FFO/usr/lib64/", "/I2FFO/usr/libexec/", "/I2FFO/usr/local/", "/I2FFO/usr/sbin/", "/I2FFO/var/lib/nfs/"
                ),
                'compress'=>'0',
                'net_mapping'=>array(),
                'bk_uuid'=>'F85DFEC0-149E-373D-0B9E-3DA9A5C43940',
                'encrypt_switch'=>'0',
                'mirr_open_type'=>'0',
                'sync_item'=>'/',
                'mirr_sync_flag'=>'0',
                'net_mapping_type'=>'2',
                'mirr_sync_attr'=>'1',
                'band_width'=>'',
                'excl_path'=>array(
                    "/etc/X11/xorg.conf/", "/etc/init.d/i2node/", "/etc/rc.d/init.d/i2node/", "/etc/sdata/"
                ),
                'fsp_wk_shut_flag'=>'2',
                'secret_key'=>'',
                'wk_path'=>array(
                    "/bin/", "/boot/", "/etc/", "/lib/", "/lib64/", "/root/", "/sbin/", "/usr/bin/", "/usr/lib/", "/usr/lib64/", "/usr/libexec/", "/usr/local/", "/usr/sbin/", "/var/lib/nfs/"
                ),
                'mirr_file_check'=>'0',
                'wk_uuid'=>'42614852-BB62-1EF7-FED0-D2354BF3149D',
                'failover'=>'2'
            )
        );
        $res = $fspMove -> createFspMove($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testModifyFspMove()
    {
        $fspMove = $this -> fspMove;
        $arr = array(
            'uuid'=>'11111111-1111-1111-1111-111111111111',
            'fsp_move'=>array(
                'fsp_name'=>'testMove',
                'service_uuid'=>'',
                'monitor_type'=>0,
                'bk_path'=>array(
                    "/I2FFO/bin/", "/I2FFO/boot/", "/I2FFO/etc/", "/I2FFO/lib/", "/I2FFO/lib64/", "/I2FFO/root/", "/I2FFO/sbin/", "/I2FFO/usr/bin/", "/I2FFO/usr/lib/", "/I2FFO/usr/lib64/", "/I2FFO/usr/libexec/", "/I2FFO/usr/local/", "/I2FFO/usr/sbin/", "/I2FFO/var/lib/nfs/"
                ),
                'compress'=>'0',
                'net_mapping'=>array(),
                'bk_uuid'=>'F85DFEC0-149E-373D-0B9E-3DA9A5C43940',
                'encrypt_switch'=>'0',
                'mirr_open_type'=>'0',
                'sync_item'=>'/',
                'mirr_sync_flag'=>'0',
                'net_mapping_type'=>'2',
                'mirr_sync_attr'=>'1',
                'band_width'=>'',
                'excl_path'=>array(
                    "/etc/X11/xorg.conf/", "/etc/init.d/i2node/", "/etc/rc.d/init.d/i2node/", "/etc/sdata/"
                ),
                'fsp_wk_shut_flag'=>'2',
                'secret_key'=>'',
                'wk_path'=>array(
                    "/bin/", "/boot/", "/etc/", "/lib/", "/lib64/", "/root/", "/sbin/", "/usr/bin/", "/usr/lib/", "/usr/lib64/", "/usr/libexec/", "/usr/local/", "/usr/sbin/", "/var/lib/nfs/"
                ),
                'mirr_file_check'=>'0',
                'wk_uuid'=>'42614852-BB62-1EF7-FED0-D2354BF3149D',
                'failover'=>'2',
                'random_str'=>'11111111-1111-1111-1111-111111111111'
            ),
        );
        $res = $fspMove -> modifyFspMove($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeFspMove()
    {
        $fspMove = $this -> fspMove;
        $arr = array(
            'uuid'=>'11111111-1111-1111-1111-111111111111'
        );
        $res = $fspMove -> describeFspMove($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDeleteFspMove()
    {
        $fspMove = $this -> fspMove;
        $arr = array(
            'fsp_uuids'=>array(
               '0'=>'11111111-1111-1111-1111-111111111111'
            ),
        );
        $res = $fspMove -> deleteFspMove($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListFspMove()
    {
        $fspMove = $this -> fspMove;
        $arr = array(
            'search_field'=>'',
            'limit'=>10,
            'page'=>1,
            'search_value'=>'',
        );
        $res = $fspMove -> listFspMove($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testStartFspMove()
    {
        $fspMove = $this -> fspMove;
        $arr = array(
            'fsp_uuids'=>array(
                '0'=>'11111111-1111-1111-1111-111111111111'
            )
        );
        $res = $fspMove -> startFspMove($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testStopFspMove()
    {
        $fspMove = $this -> fspMove;
        $arr = array(
            'fsp_uuids'=>array(
                '0'=>'11111111-1111-1111-1111-111111111111'
            )
        );
        $res = $fspMove -> stopFspMove($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testMoveFspMove()
    {
        $fspMove = $this -> fspMove;
        $arr = array(
            'fsp_uuids'=>array(
                '0'=>'11111111-1111-1111-1111-111111111111'
            )
        );
        $res = $fspMove -> moveFspMove($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testRebootFspMove()
    {
        $fspMove = $this -> fspMove;
        $arr = array(
            'fsp_uuids'=>array(
                '0'=>'11111111-1111-1111-1111-111111111111'
            )
        );
        $res = $fspMove -> rebootFspMove($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListFspMoveStatus()
    {
        $fspMove = $this -> fspMove;
        $arr = array(
            'fsp_uuids'=>array(
                '0'=>'11111111-1111-1111-1111-111111111111'
            ),
        );
        $res = $fspMove -> listFspMoveStatus($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}