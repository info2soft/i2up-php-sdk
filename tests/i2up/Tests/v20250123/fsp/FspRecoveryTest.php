<?php
namespace i2up\Test\v20250123\fsp;

use i2up\fsp\v20250123\FspRecovery;
use i2up\common\Auth;
                
class FspRecoveryTest extends \PHPUnit_Framework_TestCase
 {
    private $fspRecovery;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> fspRecovery = new FspRecovery(new Auth());
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
        $this->do_assert($res);
    }

    public function testListFspRecoveryDir()
    {
        $fspRecovery = $this -> fspRecovery;
        $arr = array(
            'bk_uuid'=>'F85DFEC0-149E-373D-0B9E-3DA9A5C43940',
            'dst_path'=>'/fsp_bk/192.168.71.77_26821/20190111113656/',
            'fsp_uuid'=>'',
            'bk_storage'=>1,
            'obs_settings'=>array(
            'sto_uuid'=>'',
            'bucket_name'=>'',),
        );
        
        
        $res = $fspRecovery -> listFspRecoveryDir($arr);
        $this->do_assert($res);
    }

    public function testListFspRecoveryPoint()
    {
        $fspRecovery = $this -> fspRecovery;
        $arr = array(
            'bk_uuid'=>'F85DFEC0-149E-373D-0B9E-3DA9A5C43940',
            'rc_data_path'=>'/fsp_bk/192.168.71.77_26821/',
            'bk_storage'=>1,
            'obs_settings'=>array(
            'sto_uuid'=>'',
            'bucket_name'=>'',),
        );
        
        
        $res = $fspRecovery -> listFspRecoveryPoint($arr);
        $this->do_assert($res);
    }

    public function testVerifyFspRecoveryVolumeSpace()
    {
        $fspRecovery = $this -> fspRecovery;
        $arr = array(
            'sync_item'=>'/',
            'bk_uuid'=>'F85DFEC0-149E-373D-0B9E-3DA9A5C43940',
            'wk_uuid'=>'42614852-BB62-1EF7-FED0-D2354BF3149D',
            'dst_path'=>'/fsp_bk/192.168.71.77_26821/20190111113656/',
            'device_list'=>array(
            '0'=>array(
            'name'=>'',),),
            'vmdk_list'=>array(
            '0'=>array(
            'name'=>'',),),
            'fsp_type'=>'',
            'path'=>'',
            'type'=>'',
            'suffix'=>'',
            'restore_point'=>'',
            'vp_uuid'=>'',
            'vm_ref'=>'',
            'by_type'=>0,
        );
        
        
        $res = $fspRecovery -> verifyFspRecoveryVolumeSpace($arr);
        $this->do_assert($res);
    }

    public function testVerifyFspRecoveryOldRule()
    {
        $fspRecovery = $this -> fspRecovery;
        $arr = array(
            'bk_uuid'=>'F85DFEC0-149E-373D-0B9E-3DA9A5C43940',
            'wk_uuid'=>'42614852-BB62-1EF7-FED0-D2354BF3149D',
        );
        
        
        $res = $fspRecovery -> verifyFspRecoveryOldRule($arr);
        $this->do_assert($res);
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
        $this->do_assert($res);
    }

    public function testCreateFspRecovery()
    {
        $fspRecovery = $this -> fspRecovery;
        $arr = array(
            'fsp_recovery'=>array(
            'dst_path'=>'/fsp_bk/192.168.71.77_26821/20190111113656/',
            'encrypt_switch'=>'0',
            'net_mapping'=>array(
            '0'=>array(
            'bk_nic'=>array(
            'type'=>'0',
            'name'=>'Ethernet0',
            'ip'=>'192.168.72.74/255.255.240.0',),
            'wk_nic'=>array(
            'name'=>'Ethernet0',
            'type'=>'0',
            'ip'=>'192.168.72.73/255.255.240.0',),),),
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
            '14'=>'/fsp_bk/192.168.71.77_26821/20190111113656/var/lib/nfs/',),
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
            '14'=>'/I2FFO/var/lib/nfs/',),
            'mirr_sync_flag'=>'0',
            'fsp_wk_shut_flag'=>'2',
            'sync_item'=>'/',
            'failover'=>'0',
            'fsp_type'=>'5',
            'random_str'=>'11111111-1111-1111-1111-111111111111',
            'data_ip_uuid'=>'F85DFEC0-149E-373D-0B9E-3DA9A5C43940',
            'by_type'=>'',
            'bk_file_crypt'=>1,
            'encrypt'=>1,
            'thread_num'=>1,
            'excl_driver'=>array(
            '0'=>'inf1',
            '1'=>'inf2',),
            'monitor_type'=>1,
            'driver_url'=>'',
            'rc_method'=>'',
            'backup_task_uuid'=>'',
            'bios_convert'=>1,
            'bios_type'=>1,
            'proxy_uuid'=>'',
            'bk_storage'=>1,
            'obs_settings'=>array(
            'sto_uuid'=>'',
            'bucket_name'=>'',
            'bucket_path'=>'',),),
        );
        
        
        $res = $fspRecovery -> createFspRecovery($arr);
        $this->do_assert($res);
    }

    public function testModifyFspRecovery()
    {
        $fspRecovery = $this -> fspRecovery;
        $arr = array(
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
            'name'=>'Ethernet0',),
            'bk_nic'=>array(
            'type'=>'0',
            'ip'=>'192.168.72.74/255.255.240.0',
            'name'=>'Ethernet0',),),),
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
            'failover'=>'0',
            'fsp_type'=>'',
            'data_ip_uuid'=>'',
            'thread_num'=>1,),
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $fspRecovery -> modifyFspRecovery($arr);
        $this->do_assert($res);
    }

    public function testDesribeFspRecovery()
    {
        $fspRecovery = $this -> fspRecovery;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $fspRecovery -> desribeFspRecovery($arr);
        $this->do_assert($res);
    }

    public function testDeleteFspRecovery()
    {
        $fspRecovery = $this -> fspRecovery;
        $arr = array(
            'fsp_uuids'=>array(
            '0'=>'11111111-1111-1111-1111-111111111111',),
            'force'=>1,
        );
        
        
        $res = $fspRecovery -> deleteFspRecovery($arr);
        $this->do_assert($res);
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
        $this->do_assert($res);
    }

    public function testStartFspRecovery()
    {
        $fspRecovery = $this -> fspRecovery;
        $arr = array(
            'fsp_uuids'=>array(
            '0'=>'11111111-1111-1111-1111-111111111111',),
            'operate'=>'start',
        );
        
        
        $res = $fspRecovery -> startFspRecovery($arr);
        $this->do_assert($res);
    }

    public function testStopFspRecovery()
    {
        $fspRecovery = $this -> fspRecovery;
        $arr = array(
            'fsp_uuids'=>array(
            '0'=>'11111111-1111-1111-1111-111111111111',),
            'operate'=>'start',
        );
        
        
        $res = $fspRecovery -> stopFspRecovery($arr);
        $this->do_assert($res);
    }

    public function testMoveFspRecovery()
    {
        $fspRecovery = $this -> fspRecovery;
        $arr = array(
            'fsp_uuids'=>array(
            '0'=>'11111111-1111-1111-1111-111111111111',),
            'operate'=>'start',
        );
        
        
        $res = $fspRecovery -> moveFspRecovery($arr);
        $this->do_assert($res);
    }

    public function testRebootFspRecovery()
    {
        $fspRecovery = $this -> fspRecovery;
        $arr = array(
            'fsp_uuids'=>array(
            '0'=>'11111111-1111-1111-1111-111111111111',),
            'operate'=>'start',
        );
        
        
        $res = $fspRecovery -> rebootFspRecovery($arr);
        $this->do_assert($res);
    }

    public function testListFspRecoveryStatus()
    {
        $fspRecovery = $this -> fspRecovery;
        $arr = array(
            'fsp_uuids'=>array(
            '0'=>'11111111-1111-1111-1111-111111111111',),
            'force_refresh'=>1,
        );
        
        
        $res = $fspRecovery -> listFspRecoveryStatus($arr);
        $this->do_assert($res);
    }

    public function testListFspRecoveryDriverInfo()
    {
        $fspRecovery = $this -> fspRecovery;
        $arr = array(
            'backup_dir'=>'',
            'bk_uuid'=>'',
            'restore_point'=>'',
        );
        
        
        $res = $fspRecovery -> listFspRecoveryDriverInfo($arr);
        $this->do_assert($res);
    }

    public function testListFspRecoveryDriverListUrl()
    {
        $fspRecovery = $this -> fspRecovery;
        $arr = array();
        
        
        $res = $fspRecovery -> listFspRecoveryDriverListUrl($arr);
        $this->do_assert($res);
    }

    public function testGetFspMoveBiosType()
    {
        $fspRecovery = $this -> fspRecovery;
        $arr = array(
            'device_list'=>array(),
            'node_uuid'=>'',
        );
        
        
        $res = $fspRecovery -> getFspMoveBiosType($arr);
        $this->do_assert($res);
    }

    private function do_assert($res)
    {
        if ($res == null) {
            print "Invalid parameter: body is null or empty, or uuid/id is empty.\n";
        }

        if (isset($res[1])){
            print("Response.statusCode = " . ($res[1])->getResponse()->statusCode);
            print("\nResponse.body = " . ($res[1])->getResponse()->body);
        }
        
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('ret',$res[0]);
        $this->assertEquals(200, $res[0]['ret']);
    }
}