<?php

namespace i2up\Tests\fsp;

use i2up\fsp\v20181217\FspRecovery;
use i2up\common\Auth;
use i2up\Config;

class FspRecoveryTest extends \PHPUnit_Framework_TestCase
{
    private $fspRecovery;
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $auth = new Auth(Config::baseUrl, 'admin', 'Info1234', __DIR__ . '/../');
        $this -> fspRecovery = new FspRecovery($auth);
    }

    public function testListFspRecoveryDir()
    {
        $fspRecovery = $this -> fspRecovery;
        $arr = array(
            'bk_uuid'=>'0DD4E727-70AB-62C6-BEB5-D012DFAE46E3',
            'dst_path'=>'C:\\fspbk\\20171117132436\\',
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
            'bk_uuid'=>'0DD4E727-70AB-62C6-BEB5-D012DFAE46E3',
            'dst_path'=>'???',
            'wk_uuid'=>'0DD4E727-70AB-62C6-BEB5-D012DFAE46E3',
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
            'bk_uuid'=>'',
            'rc_data_path'=>'C:\\back\\',
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
            'sync_item'=>'C:\\',
            'bk_uuid'=>'0DD4E727-70AB-62C6-BEB5-D012DFAE46E3',
            'wk_uuid'=>'0DD4E727-70AB-62C6-BEB5-D012DFAE46E3',
            'dst_path'=>'???',
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
            'bk_uuid'=>'0DD4E727-70AB-62C6-BEB5-D012DFAE46E3',
            'wk_uuid'=>'0DD4E727-70AB-62C6-BEB5-D012DFAE46E3',
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
            'wk_uuid'=>'0DD4E727-70AB-62C6-BEB5-D012DFAE46E3',
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
            'dst_path'=>'???',
            'wk_uuid'=>'0DD4E727-70AB-62C6-BEB5-D012DFAE46E3',
            'bk_uuid'=>'0DD4E727-70AB-62C6-BEB5-D012DFAE46E3',
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
                'dst_path'=>'???',
                'monitor_type'=>0,
                'encrypt_switch'=>'0',
                'net_mapping'=>array(
                    '0'=>array(
                        'bk_nic'=>array(
                            'type'=>'0',
                            'name'=>'Ethernet0',
                            'ip'=>'192.168.72.74/255.255.240.0'
                        ),
                        'wk_nic'=>array(
                            'name'=>'Ethernet0',
                            'type'=>'0',
                            'ip'=>'192.168.72.73/255.255.240.0'
                        )
                    )
                ),
                'wk_uuid'=>'0DD4E727-70AB-62C6-BEB5-D012DFAE46E3',
                'mirr_sync_attr'=>'1',
                'secret_key'=>'',
                'bk_path'=>array(),
                'band_width'=>'3*03:00-14:00*2m',
                'fsp_name'=>'rrrrr',
                'bk_uuid'=>'0DD4E727-70AB-62C6-BEB5-D012DFAE46E3',
                'net_mapping_type'=>'2',
                'mirr_open_type'=>'0',
                'restore_point'=>'20180724164452',
                'mirr_file_check'=>'0',
                'compress'=>'0',
                'service_uuid'=>'',
                'excl_path'=>array(),
                'wk_path'=>array(),
                'mirr_sync_flag'=>'0',
                'fsp_wk_shut_flag'=>'2',
                'sync_item'=>'C:',
                'failover'=>'2',
                'fsp_type'=>''
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
            'uuid'=>'',
            'fsp_recovery'=>array(
                'restore_point'=>'20180724164452',
                'fsp_wk_shut_flag'=>'2',
                'excl_path'=>array(),
                'secret_key'=>'',
                'band_width'=>'3*03:00-14:00*2m',
                'compress'=>'0',
                'wk_path'=>array(),
                'net_mapping'=>array(
                    '0'=>array(
                        'wk_nic'=>array(
                            'ip'=>'192.168.72.73/255.255.240.0',
                            'type'=>'0',
                            'name'=>'Ethernet0'
                        ),
                        'bk_nic'=>array(
                            'type'=>'0',
                            'ip'=>'192.168.72.74/255.255.240.0',
                            'name'=>'Ethernet0'
                        )
                    )
                ),
                'service_uuid'=>'',
                'wk_uuid'=>'0DD4E727-70AB-62C6-BEB5-D012DFAE46E3',
                'net_mapping_type'=>'2',
                'bk_path'=>array(),
                'fsp_name'=>'rrrrr',
                'mirr_sync_flag'=>'0',
                'mirr_file_check'=>'0',
                'monitor_type'=>0,
                'sync_item'=>'C:',
                'mirr_sync_attr'=>'1',
                'random_str'=>'0DD4E727-70AB-62C6-BEB5-D012DFAE46E3',
                'dst_path'=>'???',
                'encrypt_switch'=>'0',
                'bk_uuid'=>'0DD4E727-70AB-62C6-BEB5-D012DFAE46E3',
                'mirr_open_type'=>'0',
                'failover'=>'2',
                'fsp_type'=>''
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
            'uuid'=>''
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
            'fsp_uuids'=>array()
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
            'fsp_uuids'=>array()
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
            'fsp_uuids'=>array()
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
            'fsp_uuids'=>array()
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
            'fsp_uuids'=>array()
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
            'fsp_uuids'=>array(),
        );
        $res = $fspRecovery -> listFspRecoveryStatus($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

}