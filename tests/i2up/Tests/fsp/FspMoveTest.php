<?php
namespace i2up\Test\fsp;

use i2up\fsp\v20181217\FspMove;
use i2up\common\Auth;

class FspMoveTest extends \PHPUnit_Framework_TestCase
{
    private $fspMove;

    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $auth = new Auth('admin', 'Info1234');
        $this -> fspMove = new FspMove($auth);
    }

    public function testListFspMoveNic()
    {
        $fspMove = $this -> fspMove;
        $arr = array(
            'bk_uuid'=>'0DD4E727-70AB-62C6-BEB5-D012DFAE46E3',
            'wk_uuid'=>'0DD4E727-70AB-62C6-BEB5-D012DFAE46E3',
        );
        $res = $fspMove -> listFspMoveNic($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListFspMoveDir()
    {
        $fspMove = $this -> fspMove;
        $arr = array(
            'fsp_uuid'=>'',
            'wk_uuid'=>'0DD4E727-70AB-62C6-BEB5-D012DFAE46E3',
        );
        $res = $fspMove -> listFspMoveDir($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testVerifyFspMoveLicense()
    {
        $fspMove = $this -> fspMove;
        $arr = array(
            'wk_uuid'=>'0DD4E727-70AB-62C6-BEB5-D012DFAE46E3',
            'bk_uuid'=>'0DD4E727-70AB-62C6-BEB5-D012DFAE46E3',
        );
        $res = $fspMove -> verifyFspMoveLicense($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testVerifyFspMoveOldRule()
    {
        $fspMove = $this -> fspMove;
        $arr = array(
            'wk_uuid'=>'0DD4E727-70AB-62C6-BEB5-D012DFAE46E3',
            'bk_uuid'=>'0DD4E727-70AB-62C6-BEB5-D012DFAE46E3',
        );
        $res = $fspMove -> verifyFspMoveOldRule($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testVerifyFspMoveVolumeSpace()
    {
        $fspMove = $this -> fspMove;
        $arr = array(
            'wk_uuid'=>'0DD4E727-70AB-62C6-BEB5-D012DFAE46E3',
            'bk_uuid'=>'0DD4E727-70AB-62C6-BEB5-D012DFAE46E3',
            'sync_item'=>'C:\\',
        );
        $res = $fspMove -> verifyFspMoveVolumeSpace($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testVerifyFspMoveOsVersion()
    {
        $fspMove = $this -> fspMove;
        $arr = array(
            'bk_uuid'=>'0DD4E727-70AB-62C6-BEB5-D012DFAE46E3',
            'wk_uuid'=>'0DD4E727-70AB-62C6-BEB5-D012DFAE46E3',
        );
        $res = $fspMove -> verifyFspMoveOsVersion($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testCreateFspMove()
    {
        $fspMove = $this -> fspMove;
        $arr = array(
            'fsp_move'=>array(
                'fsp_name'=>'rrrrr',
                'service_uuid'=>'',
                'monitor_type'=>0,
                'bk_path'=>array(),
                'compress'=>'0',
                'net_mapping'=>array(
                    '0'=>array(
                        'bk_nic'=>array(
                            'name'=>'Ethernet0',
                            'type'=>'0',
                            'ip'=>'192.168.72.74/255.255.240.0'
                        ),
                        'wk_nic'=>array(
                            'name'=>'Ethernet0',
                            'type'=>'0',
                            'ip'=>'192.168.72.73/255.255.240.0'
                        )
                    )
                ),
                'bk_uuid'=>'0DD4E727-70AB-62C6-BEB5-D012DFAE46E3',
                'encrypt_switch'=>'0',
                'mirr_open_type'=>'0',
                'sync_item'=>'C:',
                'mirr_sync_flag'=>'0',
                'net_mapping_type'=>'2',
                'mirr_sync_attr'=>'1',
                'band_width'=>'3*03:00-14:00*2m',
                'excl_path'=>array(),
                'fsp_wk_shut_flag'=>'2',
                'secret_key'=>'',
                'wk_path'=>array(),
                'mirr_file_check'=>'0',
                'wk_uuid'=>'0DD4E727-70AB-62C6-BEB5-D012DFAE46E3',
                'failover'=>'2'
            )
        );
        $res = $fspMove -> createFspMove($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testModifyFspMove()
    {
        $fspMove = $this -> fspMove;
        $arr = array(
            'uuid'=>'',
            'fsp_move'=>array(
                'excl_path'=>array(),
                'random_str'=>'0DD4E727-70AB-62C6-BEB5-D012DFAE46E3',
                'fsp_wk_shut_flag'=>'2',
                'monitor_type'=>0,
                'mirr_sync_attr'=>'1',
                'net_mapping_type'=>'2',
                'mirr_sync_flag'=>'0',
                'mirr_file_check'=>'0',
                'sync_item'=>'C:',
                'secret_key'=>'',
                'failover'=>'2',
                'fsp_name'=>'rrrrr',
                'mirr_open_type'=>'0',
                'bk_uuid'=>'0DD4E727-70AB-62C6-BEB5-D012DFAE46E3',
                'bk_path'=>array(),
                'net_mapping'=>array(
                    '0'=>array(
                        'wk_nic'=>array(
                            'ip'=>'192.168.72.73/255.255.240.0',
                            'type'=>'0',
                            'name'=>'Ethernet0',),
                        'bk_nic'=>array(
                            'type'=>'0',
                            'name'=>'Ethernet0',
                            'ip'=>'192.168.72.74/255.255.240.0',),),),
                'service_uuid'=>'',
                'wk_uuid'=>'0DD4E727-70AB-62C6-BEB5-D012DFAE46E3',
                'compress'=>'0',
                'encrypt_switch'=>'0',
                'move_type'=>'0',
                'wk_path'=>array(),
                'band_width'=>'3*03:00-14:00*2m',),
        );
        $res = $fspMove -> modifyFspMove($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeFspMove()
    {
        $fspMove = $this -> fspMove;
        $arr = array(
            'uuid'=>''
        );
        $res = $fspMove -> describeFspMove($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDeleteFspMove()
    {
        $fspMove = $this -> fspMove;
        $arr = array(
            'fsp_uuids'=>array(),
        );
        $res = $fspMove -> deleteFspMove($arr);
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
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testStartFspMove()
    {
        $fspMove = $this -> fspMove;
        $arr = array(
            'fsp_uuids'=>array()
        );
        $res = $fspMove -> startFspMove($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testStopFspMove()
    {
        $fspMove = $this -> fspMove;
        $arr = array(
            'fsp_uuids'=>array()
        );
        $res = $fspMove -> stopFspMove($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testMoveFspMove()
    {
        $fspMove = $this -> fspMove;
        $arr = array(
            'fsp_uuids'=>array()
        );
        $res = $fspMove -> moveFspMove($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testRebootFspMove()
    {
        $fspMove = $this -> fspMove;
        $arr = array(
            'fsp_uuids'=>array()
        );
        $res = $fspMove -> rebootFspMove($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListFspMoveStatus()
    {
        $fspMove = $this -> fspMove;
        $arr = array(
            'fsp_uuids'=>array(),
        );
        $res = $fspMove -> listFspMoveStatus($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}