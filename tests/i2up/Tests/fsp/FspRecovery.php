<?php

namespace i2up\Tests\fsp;

use i2up\fsp\v20190805\FspRecovery;
use i2up\common\Auth;
use i2up\Config;

class FspRecoveryTest extends \PHPUnit_Framework_TestCase
{
    private $fspRecovery;
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
        $this -> fspRecovery = new FspRecovery($auth);
    }

    public function testListFspRecoveryDir()
    {
        $fspRecovery = $this -> fspRecovery;
        $arr = array(
            'bk_uuid'=>'F85DFEC0-149E-373D-0B9E-3DA9A5C43940',
            'dst_path'=>'/fsp_bk/192.168.71.77_26821/20190111113656/',
            'fsp_uuid'=>'',
        );
        $res = $fspRecovery -> listFspRecoveryDir($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListFspRecoveryNic()
    {
        $fspRecovery = $this -> fspRecovery;
        $arr = array(
            'bk_uuid'=>'F85DFEC0-149E-373D-0B9E-3DA9A5C43940',
            'dst_path'=>'/fsp_bk/192.168.71.77_26821/20190111113656/',
            'wk_uuid'=>'42614852-BB62-1EF7-FED0-D2354BF3149D',
        );
        $res = $fspRecovery -> listFspRecoveryNic($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListFspRecoveryPoint()
    {
        $fspRecovery = $this -> fspRecovery;
        $arr = array(
            'bk_uuid'=>'F85DFEC0-149E-373D-0B9E-3DA9A5C43940',
            'rc_data_path'=>'/fsp_bk/192.168.71.77_26821/',
        );
        $res = $fspRecovery -> listFspRecoveryPoint($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testVerifyFspRecoveryVolumeSpace()
    {
        $fspRecovery = $this -> fspRecovery;
        $arr = array(
            'sync_item'=>'/',
            'bk_uuid'=>'F85DFEC0-149E-373D-0B9E-3DA9A5C43940',
            'wk_uuid'=>'42614852-BB62-1EF7-FED0-D2354BF3149D',
            'dst_path'=>'/fsp_bk/192.168.71.77_26821/20190111113656/',
        );
        $res = $fspRecovery -> verifyFspRecoveryVolumeSpace($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testVerifyFspRecoveryOldRule()
    {
        $fspRecovery = $this -> fspRecovery;
        $arr = array(
            'bk_uuid'=>'F85DFEC0-149E-373D-0B9E-3DA9A5C43940',
            'wk_uuid'=>'42614852-BB62-1EF7-FED0-D2354BF3149D',
        );
        $res = $fspRecovery -> verifyFspRecoveryOldRule($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testVerifyFspRecoveryLicense()
    {
        $fspRecovery = $this -> fspRecovery;
        $arr = array(
            'wk_uuid'=>'42614852-BB62-1EF7-FED0-D2354BF3149D',
        );
        $res = $fspRecovery -> verifyFspRecoveryLicense($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testVerifyFspRecoveryOsVersion()
    {
        $fspRecovery = $this -> fspRecovery;
        $arr = array(
            'dst_path'=>'/fsp_bk/192.168.71.77_26821/20190111113656/',
            'wk_uuid'=>'F85DFEC0-149E-373D-0B9E-3DA9A5C43940',
            'bk_uuid'=>'42614852-BB62-1EF7-FED0-D2354BF3149D',
        );
        $res = $fspRecovery -> verifyFspRecoveryOsVersion($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testCreateFspRecovery()
    {
        $fspRecovery = $this -> fspRecovery;
        $arr = array(
            'fsp_recovery'=>array(
                'dst_path'=>'/fsp_bk/192.168.71.77_26821/20190111113656/',
                'monitor_type'=>0,
                'encrypt_switch'=>'0',
                'net_mapping'=>array(),
                'wk_uuid'=>'42614852-BB62-1EF7-FED0-D2354BF3149D',
                'mirr_sync_attr'=>'1',
                'secret_key'=>'',
                'bk_path'=>array(
                    '0'=>'/fsp_bk/192.168.71.77_26821/20190111113656/',
                    '1'=>'/fsp_bk/192.168.71.77_26821/20190111113656/bin/',
                    '2'=>'/fsp_bk/192.168.71.77_26821/20190111113656/boot/',
                    '3'=>'/fsp_bk/192.168.71.77_26821/20190111113656/etc/',
                    '4'=>'/fsp_bk/192.168.71.77_26821/20190111113656/lib/',
                    '5'=>'/fsp_bk/192.168.71.77_26821/20190111113656/lib64/',
                    '6'=>'/fsp_bk/192.168.71.77_26821/20190111113656/root/',
                    '7'=>'/fsp_bk/192.168.71.77_26821/20190111113656/sbin/',
                    '8'=>'/fsp_bk/192.168.71.77_26821/20190111113656/usr/bin/',
                    '9'=>'/fsp_bk/192.168.71.77_26821/20190111113656/usr/lib/',
                    '10'=>'/fsp_bk/192.168.71.77_26821/20190111113656/usr/lib64/',
                    '11'=>'/fsp_bk/192.168.71.77_26821/20190111113656/usr/libexec/',
                    '12'=>'/fsp_bk/192.168.71.77_26821/20190111113656/usr/local/',
                    '13'=>'/fsp_bk/192.168.71.77_26821/20190111113656/usr/sbin/',
                    '14'=>'/fsp_bk/192.168.71.77_26821/20190111113656/var/lib/nfs/'
                ),
                'band_width'=>'',
                'fsp_name'=>'testRC',
                'bk_uuid'=>'F85DFEC0-149E-373D-0B9E-3DA9A5C43940',
                'net_mapping_type'=>'2',
                'mirr_open_type'=>'0',
                'restore_point'=>'20190111113656',
                'mirr_file_check'=>'0',
                'compress'=>'0',
                'service_uuid'=>'',
                'excl_path'=>array(),
                'wk_path'=>array(
                    '0'=>'/',
                    '1'=>'/I2FFO/bin/',
                    '2'=>'/I2FFO/boot/',
                    '3'=>'/I2FFO/etc/',
                    '4'=>'/I2FFO/lib/',
                    '5'=>'/I2FFO/lib64/',
                    '6'=>'/I2FFO/root/',
                    '7'=>'/I2FFO/sbin/',
                    '8'=>'/I2FFO/usr/bin/',
                    '9'=>'/I2FFO/usr/lib/',
                    '10'=>'/I2FFO/usr/lib64/',
                    '11'=>'/I2FFO/usr/libexec/',
                    '12'=>'/I2FFO/usr/local/',
                    '13'=>'/I2FFO/usr/sbin/',
                    '14'=>'/I2FFO/var/lib/nfs/'
                ),
                'mirr_sync_flag'=>'0',
                'fsp_wk_shut_flag'=>'2',
                'sync_item'=>'/',
                'failover'=>'2',
                'fsp_type'=>'5'
            )
        );
        $res = $fspRecovery -> createFspRecovery($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testModifyFspRecovery()
    {
        $fspRecovery = $this -> fspRecovery;
        $arr = array(
            'uuid'=>'11111111-1111-1111-1111-111111111111',
            'fsp_recovery'=>array(
                'dst_path'=>'/fsp_bk/192.168.71.77_26821/20190111113656/',
                'monitor_type'=>0,
                'encrypt_switch'=>'0',
                'net_mapping'=>array(),
                'wk_uuid'=>'42614852-BB62-1EF7-FED0-D2354BF3149D',
                'mirr_sync_attr'=>'1',
                'secret_key'=>'',
                'bk_path'=>array(
                    '0'=>'/fsp_bk/192.168.71.77_26821/20190111113656/',
                    '1'=>'/fsp_bk/192.168.71.77_26821/20190111113656/bin/',
                    '2'=>'/fsp_bk/192.168.71.77_26821/20190111113656/boot/',
                    '3'=>'/fsp_bk/192.168.71.77_26821/20190111113656/etc/',
                    '4'=>'/fsp_bk/192.168.71.77_26821/20190111113656/lib/',
                    '5'=>'/fsp_bk/192.168.71.77_26821/20190111113656/lib64/',
                    '6'=>'/fsp_bk/192.168.71.77_26821/20190111113656/root/',
                    '7'=>'/fsp_bk/192.168.71.77_26821/20190111113656/sbin/',
                    '8'=>'/fsp_bk/192.168.71.77_26821/20190111113656/usr/bin/',
                    '9'=>'/fsp_bk/192.168.71.77_26821/20190111113656/usr/lib/',
                    '10'=>'/fsp_bk/192.168.71.77_26821/20190111113656/usr/lib64/',
                    '11'=>'/fsp_bk/192.168.71.77_26821/20190111113656/usr/libexec/',
                    '12'=>'/fsp_bk/192.168.71.77_26821/20190111113656/usr/local/',
                    '13'=>'/fsp_bk/192.168.71.77_26821/20190111113656/usr/sbin/',
                    '14'=>'/fsp_bk/192.168.71.77_26821/20190111113656/var/lib/nfs/'
                ),
                'band_width'=>'',
                'fsp_name'=>'testRC1',
                'bk_uuid'=>'F85DFEC0-149E-373D-0B9E-3DA9A5C43940',
                'net_mapping_type'=>'2',
                'mirr_open_type'=>'0',
                'restore_point'=>'20190111113656',
                'mirr_file_check'=>'0',
                'compress'=>'0',
                'service_uuid'=>'',
                'excl_path'=>array(),
                'wk_path'=>array(
                    '0'=>'/',
                    '1'=>'/I2FFO/bin/',
                    '2'=>'/I2FFO/boot/',
                    '3'=>'/I2FFO/etc/',
                    '4'=>'/I2FFO/lib/',
                    '5'=>'/I2FFO/lib64/',
                    '6'=>'/I2FFO/root/',
                    '7'=>'/I2FFO/sbin/',
                    '8'=>'/I2FFO/usr/bin/',
                    '9'=>'/I2FFO/usr/lib/',
                    '10'=>'/I2FFO/usr/lib64/',
                    '11'=>'/I2FFO/usr/libexec/',
                    '12'=>'/I2FFO/usr/local/',
                    '13'=>'/I2FFO/usr/sbin/',
                    '14'=>'/I2FFO/var/lib/nfs/'
                ),
                'mirr_sync_flag'=>'0',
                'fsp_wk_shut_flag'=>'2',
                'sync_item'=>'/',
                'failover'=>'2',
                'fsp_type'=>'5',
                'random_str'=>'11111111-1111-1111-1111-111111111111'
            ),
        );
        $res = $fspRecovery -> modifyFspRecovery($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDesribeFspRecovery()
    {
        $fspRecovery = $this -> fspRecovery;
        $arr = array(
            'uuid'=>'11111111-1111-1111-1111-111111111111'
        );
        $res = $fspRecovery -> desribeFspRecovery($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDeleteFspRecovery()
    {
        $fspRecovery = $this -> fspRecovery;
        $arr = array(
            'fsp_uuids'=>array(
                '0'=>'11111111-1111-1111-1111-111111111111'
            )
        );
        $res = $fspRecovery -> deleteFspRecovery($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListFspRecovery()
    {
        $fspRecovery = $this -> fspRecovery;
        $arr = array(
            'search_value'=>'',
            'search_field'=>'',
            'page'=>1,
            'limit'=>10,
        );
        $res = $fspRecovery -> listFspRecovery($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testStartFspRecovery()
    {
        $fspRecovery = $this -> fspRecovery;
        $arr = array(
            'fsp_uuids'=>array(
                '0'=>'11111111-1111-1111-1111-111111111111'
            )
        );
        $res = $fspRecovery -> startFspRecovery($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testStopFspRecovery()
    {
        $fspRecovery = $this -> fspRecovery;
        $arr = array(
            'fsp_uuids'=>array(
                '0'=>'11111111-1111-1111-1111-111111111111'
            )
        );
        $res = $fspRecovery -> stopFspRecovery($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testMoveFspRecovery()
    {
        $fspRecovery = $this -> fspRecovery;
        $arr = array(
            'fsp_uuids'=>array(
                '0'=>'11111111-1111-1111-1111-111111111111'
            )
        );
        $res = $fspRecovery -> moveFspRecovery($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testRebootFspRecovery()
    {
        $fspRecovery = $this -> fspRecovery;
        $arr = array(
            'fsp_uuids'=>array(
                '0'=>'11111111-1111-1111-1111-111111111111'
            )
        );
        $res = $fspRecovery -> rebootFspRecovery($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }


    public function testListFspRecoveryStatus()
    {
        $fspRecovery = $this -> fspRecovery;
        $arr = array(
            'fsp_uuids'=>array(
                '0'=>'11111111-1111-1111-1111-111111111111'
            ),
        );
        $res = $fspRecovery -> listFspRecoveryStatus($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

}