<?php
namespace i2up\Test\v20250630\cdm;

use i2up\cdm\v20250630\CdmRecovery;
use i2up\common\Auth;
                
class CdmRecoveryTest extends \PHPUnit_Framework_TestCase
 {
    private $cdmRecovery;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> cdmRecovery = new CdmRecovery(new Auth());
    }

    public function testCreateCdmRecovery()
    {
        $cdmRecovery = $this -> cdmRecovery;
        $arr = array(
            'fsp_recovery'=>array(
            'dst_path'=>'',
            'monitor_type'=>0,
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
            'bak_wk_uuid'=>'',
            'bak_wk_address'=>'',
            'vp_uuid'=>'',
            'storage_uuid'=>'',
            'bak_wk_name'=>'',
            'vm_name'=>'',
            'vm_ref'=>'',
            'compress_switch'=>1,
            'compress'=>1,
            'encrypt_switch'=>1,
            'encrypt'=>'',
            'secret_key'=>'',),
        );
        
        
        $res = $cdmRecovery -> createCdmRecovery($arr);
        $this->do_assert($res);
    }

    public function testStartCdmRecovery()
    {
        $cdmRecovery = $this -> cdmRecovery;
        $arr = array(
            'fsp_uuids'=>array(),
            'operate'=>'',
        );
        
        
        $res = $cdmRecovery -> startCdmRecovery($arr);
        $this->do_assert($res);
    }

    public function testStopCdmRecovery()
    {
        $cdmRecovery = $this -> cdmRecovery;
        $arr = array(
            'fsp_uuids'=>array(),
            'operate'=>'',
        );
        
        
        $res = $cdmRecovery -> stopCdmRecovery($arr);
        $this->do_assert($res);
    }

    public function testRecoveryCdmRecovery()
    {
        $cdmRecovery = $this -> cdmRecovery;
        $arr = array(
            'fsp_uuids'=>array(),
            'operate'=>'',
        );
        
        
        $res = $cdmRecovery -> recoveryCdmRecovery($arr);
        $this->do_assert($res);
    }

    public function testRebootCdmRecovery()
    {
        $cdmRecovery = $this -> cdmRecovery;
        $arr = array(
            'fsp_uuids'=>array(),
            'operate'=>'',
        );
        
        
        $res = $cdmRecovery -> rebootCdmRecovery($arr);
        $this->do_assert($res);
    }

    public function testListCdmRecovery()
    {
        $cdmRecovery = $this -> cdmRecovery;
        $arr = array(
            'search_value'=>'',
            'search_field'=>'',
            'page'=>1,
            'limit'=>10,
        );
        
        
        $res = $cdmRecovery -> listCdmRecovery($arr);
        $this->do_assert($res);
    }

    public function testListCdmRecoveryStatus()
    {
        $cdmRecovery = $this -> cdmRecovery;
        $arr = array(
            'fsp_uuids'=>array(
            '0'=>'11111111-1111-1111-1111-111111111111',),
            'force_refresh'=>1,
        );
        
        
        $res = $cdmRecovery -> listCdmRecoveryStatus($arr);
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