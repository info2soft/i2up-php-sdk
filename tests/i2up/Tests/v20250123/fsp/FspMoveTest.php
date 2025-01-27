<?php
namespace i2up\Test\v20250123\fsp;

use i2up\fsp\v20250123\FspMove;
use i2up\common\Auth;
                
class FspMoveTest extends \PHPUnit_Framework_TestCase
 {
    private $fspMove;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> fspMove = new FspMove(new Auth());
    }

    public function testListFspMoveNic()
    {
        $fspMove = $this -> fspMove;
        $arr = array(
            'bk_uuid'=>'F85DFEC0-149E-373D-0B9E-3DA9A5C43940',
            'wk_uuid'=>'42614852-BB62-1EF7-FED0-D2354BF3149D',
        );
        
        
        $res = $fspMove -> listFspMoveNic($arr);
        $this->do_assert($res);
    }

    public function testListFspMoveDir()
    {
        $fspMove = $this -> fspMove;
        $arr = array(
            'fsp_uuid'=>'',
            'wk_uuid'=>'42614852-BB62-1EF7-FED0-D2354BF3149D',
        );
        
        
        $res = $fspMove -> listFspMoveDir($arr);
        $this->do_assert($res);
    }

    public function testVerifyFspMoveVolumeSpace()
    {
        $fspMove = $this -> fspMove;
        $arr = array(
            'wk_uuid'=>'42614852-BB62-1EF7-FED0-D2354BF3149D',
            'bk_uuid'=>'F85DFEC0-149E-373D-0B9E-3DA9A5C43940',
            'sync_item'=>'/',
            'wk_device_list'=>array(
            '0'=>array(
            'name'=>'',),),
            'bk_device_list'=>array(
            '0'=>array(
            'name'=>'',),),
            'is_block_move'=>0,
            'pool_uuid'=>'',
        );
        
        
        $res = $fspMove -> verifyFspMoveVolumeSpace($arr);
        $this->do_assert($res);
    }

    public function testVerifyFspMoveLicense()
    {
        $fspMove = $this -> fspMove;
        $arr = array(
            'wk_uuid'=>'42614852-BB62-1EF7-FED0-D2354BF3149D',
            'bk_uuid'=>'F85DFEC0-149E-373D-0B9E-3DA9A5C43940',
        );
        
        
        $res = $fspMove -> verifyFspMoveLicense($arr);
        $this->do_assert($res);
    }

    public function testVerifyFspMoveOldRule()
    {
        $fspMove = $this -> fspMove;
        $arr = array(
            'wk_uuid'=>'42614852-BB62-1EF7-FED0-D2354BF3149D',
            'bk_uuid'=>'F85DFEC0-149E-373D-0B9E-3DA9A5C43940',
        );
        
        
        $res = $fspMove -> verifyFspMoveOldRule($arr);
        $this->do_assert($res);
    }

    public function testVerifyFspMoveOsVersion()
    {
        $fspMove = $this -> fspMove;
        $arr = array(
            'bk_uuid'=>'F85DFEC0-149E-373D-0B9E-3DA9A5C43940',
            'wk_uuid'=>'42614852-BB62-1EF7-FED0-D2354BF3149D',
            'mode'=>1,
        );
        
        
        $res = $fspMove -> verifyFspMoveOsVersion($arr);
        $this->do_assert($res);
    }

    public function testVerifyFspMoveEnvironment()
    {
        $fspMove = $this -> fspMove;
        $arr = array(
            'wk_uuid'=>'',
            'bk_uuid'=>'',
            'wk_path'=>array(
            '0'=>array(
            ''=>'',),),
            'bk_path'=>array(
            '0'=>array(
            ''=>'',),),
        );
        
        
        $res = $fspMove -> verifyFspMoveEnvironment($arr);
        $this->do_assert($res);
    }

    public function testListNodeNetworks()
    {
        $fspMove = $this -> fspMove;
        $arr = array(
            'node_uuid'=>'',
        );
        
        
        $res = $fspMove -> listNodeNetworks($arr);
        $this->do_assert($res);
    }

    public function testListFspMoveDriverInfo()
    {
        $fspMove = $this -> fspMove;
        $arr = array(
            'wk_uuid'=>'',
        );
        
        
        $res = $fspMove -> listFspMoveDriverInfo($arr);
        $this->do_assert($res);
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
            '0'=>'/I2FFO/bin/',
            '1'=>'/I2FFO/boot/',
            '2'=>'/I2FFO/etc/',
            '3'=>'/I2FFO/lib/',
            '4'=>'/I2FFO/lib64/',
            '5'=>'/I2FFO/root/',
            '6'=>'/I2FFO/sbin/',
            '7'=>'/I2FFO/usr/bin/',
            '8'=>'/I2FFO/usr/lib/',
            '9'=>'/I2FFO/usr/lib64/',
            '10'=>'/I2FFO/usr/libexec/',
            '11'=>'/I2FFO/usr/local/',
            '12'=>'/I2FFO/usr/sbin/',
            '13'=>'/I2FFO/var/lib/nfs/',),
            'compress'=>'0',
            'net_mapping'=>array(
            '0'=>array(
            'bk_nic'=>array(
            'name'=>'Ethernet0',
            'type'=>'0',
            'ip'=>'192.168.72.74/255.255.240.0',),
            'wk_nic'=>array(
            'name'=>'Ethernet0',
            'type'=>'0',
            'ip'=>'192.168.72.73/255.255.240.0',),),),
            'bk_uuid'=>'F85DFEC0-149E-373D-0B9E-3DA9A5C43940',
            'encrypt_switch'=>'0',
            'mirr_open_type'=>'0',
            'sync_item'=>'/',
            'mirr_sync_flag'=>'0',
            'net_mapping_type'=>'2',
            'mirr_sync_attr'=>'1',
            'band_width'=>'',
            'excl_path'=>array(
            '0'=>'/etc/X11/xorg.conf/',
            '1'=>'/etc/init.d/i2node/',
            '2'=>'/etc/rc.d/init.d/i2node/',
            '3'=>'/etc/sdata/',),
            'fsp_wk_shut_flag'=>'2',
            'secret_key'=>'',
            'wk_path'=>array(
            '0'=>'/bin/',
            '1'=>'/boot/',
            '2'=>'/etc/',
            '3'=>'/lib/',
            '4'=>'/lib64/',
            '5'=>'/root/',
            '6'=>'/sbin/',
            '7'=>'/usr/bin/',
            '8'=>'/usr/lib/',
            '9'=>'/usr/lib64/',
            '10'=>'/usr/libexec/',
            '11'=>'/usr/local/',
            '12'=>'/usr/sbin/',
            '13'=>'/var/lib/nfs/',),
            'mirr_file_check'=>'0',
            'wk_uuid'=>'42614852-BB62-1EF7-FED0-D2354BF3149D',
            'failover'=>'0',
            'random_str'=>'11111111-1111-1111-1111-111111111111',
            'excl_driver'=>array(
            '0'=>'inf1',
            '1'=>'inf2',),
            'data_ip_uuid'=>'42614852-BB62-1EF7-FED0-D2354BF3149D',
            'wk_data_type'=>1,
            'bk_file_crypt'=>0,
            'encrypt'=>0,
            'thread_num'=>1,
            'fsp_type'=>1,
            'auto_start'=>1,
            'bkup_one_time'=>1,
            'backup_type'=>'',
            'keep_hostname'=>1,
            'bios_convert'=>1,
            'bios_type'=>1,
            'networks'=>array(
            '0'=>array(
            'name'=>'',
            'mac'=>'',
            'enable_dhcp'=>'',
            'ip'=>'',
            'mask'=>'',
            'gateway'=>'',
            'dns1'=>'',
            'dns2'=>'',),),
            'del_shared_dir_switch'=>1,),
        );
        
        
        $res = $fspMove -> createFspMove($arr);
        $this->do_assert($res);
    }

    public function testDescribeFspMove()
    {
        $fspMove = $this -> fspMove;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $fspMove -> describeFspMove($arr);
        $this->do_assert($res);
    }

    public function testModifyFspMove()
    {
        $fspMove = $this -> fspMove;
        $arr = array(
            'fsp_move'=>array(
            'excl_path'=>array(
            '0'=>'/cgroup/',
            '1'=>'/dev/',
            '2'=>'/etc/X11/xorg.conf/',
            '3'=>'/etc/init.d/i2node/',
            '4'=>'/etc/rc.d/init.d/i2node/',
            '5'=>'/etc/sdata/',
            '6'=>'/lost+found/',
            '7'=>'/media/',
            '8'=>'/mnt/',
            '9'=>'/proc/',
            '10'=>'/run/',
            '11'=>'/selinux/',
            '12'=>'/sys/',
            '13'=>'/tmp/',
            '14'=>'/usr/local/sdata/',
            '15'=>'/var/i2/',
            '16'=>'/var/i2data/',
            '17'=>'/var/lock/',
            '18'=>'/var/run/vmblock-fuse/',),
            'random_str'=>'0DD4E727-70AB-62C6-BEB5-D012DFAE46E3',
            'fsp_wk_shut_flag'=>'2',
            'monitor_type'=>0,
            'mirr_sync_attr'=>'1',
            'net_mapping_type'=>'2',
            'mirr_sync_flag'=>'0',
            'mirr_file_check'=>'0',
            'sync_item'=>'/',
            'secret_key'=>'',
            'failover'=>'0',
            'fsp_name'=>'changeName',
            'mirr_open_type'=>'0',
            'bk_uuid'=>'C11FE572-5207-3359-DB85-001E95F5F185',
            'bk_path'=>array(
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
            'wk_uuid'=>'CE77F3D6-A6E3-A385-CE66-712313B7DDE8',
            'compress'=>'0',
            'encrypt_switch'=>'0',
            'move_type'=>'0',
            'wk_path'=>array(
            '0'=>'/',
            '1'=>'/bin/',
            '2'=>'/boot/',
            '3'=>'/etc/',
            '4'=>'/lib/',
            '5'=>'/lib64/',
            '6'=>'/root/',
            '7'=>'/sbin/',
            '8'=>'/usr/bin/',
            '9'=>'/usr/lib/',
            '10'=>'/usr/lib64/',
            '11'=>'/usr/libexec/',
            '12'=>'/usr/local/',
            '13'=>'/usr/sbin/',
            '14'=>'/var/lib/nfs/',),
            'band_width'=>'3*03:00-14:00*2m',
            'excl_driver'=>array(
            '0'=>'inf1',
            '1'=>'inf2',),
            'data_ip_uuid'=>'CE77F3D6-A6E3-A385-CE66-712313B7DDE8',
            'thread_num'=>1,),
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $fspMove -> modifyFspMove($arr);
        $this->do_assert($res);
    }

    public function testDeleteFspMove()
    {
        $fspMove = $this -> fspMove;
        $arr = array(
            'fsp_uuids'=>array(
            '0'=>'11111111-1111-1111-1111-111111111111',),
            'force'=>1,
        );
        
        
        $res = $fspMove -> deleteFspMove($arr);
        $this->do_assert($res);
    }

    public function testListFspMove()
    {
        $fspMove = $this -> fspMove;
        $arr = array(
            'search_field'=>'',
            'limit'=>10,
            'page'=>1,
            'search_value'=>'',
            'status'=>'',
        );
        
        
        $res = $fspMove -> listFspMove($arr);
        $this->do_assert($res);
    }

    public function testStartFspMove()
    {
        $fspMove = $this -> fspMove;
        $arr = array(
            'operate'=>'start',
            'fsp_uuids'=>array(
            '0'=>'11111111-1111-1111-1111-111111111111',),
            'bk_type'=>'',
            'force'=>1,
        );
        
        
        $res = $fspMove -> startFspMove($arr);
        $this->do_assert($res);
    }

    public function testListFspMoveStatus()
    {
        $fspMove = $this -> fspMove;
        $arr = array(
            'fsp_uuids'=>array(
            '0'=>'11111111-1111-1111-1111-111111111111',),
            'force_refresh'=>1,
        );
        
        
        $res = $fspMove -> listFspMoveStatus($arr);
        $this->do_assert($res);
    }

    public function testBatchCreateFspMove()
    {
        $fspMove = $this -> fspMove;
        $arr = array(
            'base_info_list'=>array(
            'service_uuid'=>'',
            'monitor_type'=>0,
            'compress'=>0,
            'net_mapping'=>array(
            '0'=>array(
            'bk_nic'=>array(
            'name'=>'Ethernet0',
            'type'=>'0',
            'ip'=>'192.168.72.74/255.255.240.0',),
            'wk_nic'=>array(
            'name'=>'Ethernet0',
            'type'=>'0',
            'ip'=>'192.168.72.73/255.255.240.0',),),),
            'encrypt_switch'=>0,
            'mirr_open_type'=>'0',
            'mirr_sync_flag'=>'0',
            'net_mapping_type'=>'2',
            'mirr_sync_attr'=>'1',
            'band_width'=>'',
            'fsp_wk_shut_flag'=>2,
            'secret_key'=>'',
            'mirr_file_check'=>'0',
            'failover'=>0,
            'excl_driver'=>array(
            '0'=>'inf1',
            '1'=>'inf2',),
            'compress_switch'=>1,
            'encrypt'=>1,
            'wk_data_type'=>1,
            'auto_start'=>1,
            'bkup_one_time'=>1,
            'backup_type'=>'',
            'biz_grp_list'=>array(),),
            'common_params'=>array(
            'batch_name'=>'',
            'rep_prefix'=>'',
            'rep_sufix'=>'',
            'variable_type'=>0,),
            'node_list'=>array(
            '0'=>array(
            'bk_uuid'=>'',
            'excl_path'=>array(),
            'bk_path'=>array(),
            'wk_uuid'=>'',
            'wk_path'=>array(),
            'proxy_uuid'=>'',
            'data_ip_uuid'=>'',
            'sync_item'=>'/',),),
        );
        
        
        $res = $fspMove -> batchCreateFspMove($arr);
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