<?php
namespace i2up\Test\fsp;

use i2up\fsp\v20181217\FspBackup;
use i2up\common\Auth;
use i2up\Config;

class FspBackupTest extends \PHPUnit_Framework_TestCase
{
    private $fspBackup;

    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $auth = new Auth(Config::baseUrl, 'admin', 'Info1234', __DIR__ . '/../');
        $this -> fspBackup = new FspBackup($auth);
    }

    public function testListFspBackupNic()
    {
        $fspBackup = $this -> fspBackup;
        $arr = array(
            'wk_uuid'=>'F85DFEC0-149E-373D-0B9E-3DA9A5C43940',
            'bk_uuid'=>'42614852-BB62-1EF7-FED0-D2354BF3149D',
        );
        $res = $fspBackup -> listFspBackupNic($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListFspBackupDir()
    {
        $fspBackup = $this -> fspBackup;
        $arr = array(
            'wk_uuid'=>'F85DFEC0-149E-373D-0B9E-3DA9A5C43940'
        );
        $res = $fspBackup -> listFspBackupDir($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testVerifyFspBackupCoopySpace()
    {
        $fspBackup = $this -> fspBackup;
        $arr = array(
            'bk_path'=>array(
                '0'=>'/fsp_bk/'
            ),
            'bk_uuid'=>'F85DFEC0-149E-373D-0B9E-3DA9A5C43940',
            'wk_uuid'=>'42614852-BB62-1EF7-FED0-D2354BF3149D',
            'excl_path'=>["/cgroup/","/dev/","/etc/X11/xorg.conf/","/etc/init.d/i2node/","/etc/rc.d/init.d/i2node/","/etc/sdata/","/lost+found/","/media/","/mnt/","/proc/","/run/","/selinux/","/sys/","/tmp/","/usr/local/sdata/","/var/i2/","/var/i2data/","/var/lock/","/var/run/vmblock-fuse/"],
            'wk_path'=>array(
                '0'=>'/'
            ),
        );
        $res = $fspBackup -> verifyFspBackupCoopySpace($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testVerifyFspBackupLicense()
    {
        $fspBackup = $this -> fspBackup;
        $arr = array(
            'wk_uuid'=>'42614852-BB62-1EF7-FED0-D2354BF3149D',
        );
        $res = $fspBackup -> verifyFspBackupLicense($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testVerifyFspBackupOldRule()
    {
        $fspBackup = $this -> fspBackup;
        $arr = array(
            'bk_uuid'=>'F85DFEC0-149E-373D-0B9E-3DA9A5C43940',
            'bk_path'=>array(
                '0'=>'/fsp_bk/'
            ),
            'wk_uuid'=>'42614852-BB62-1EF7-FED0-D2354BF3149D',
        );
        $res = $fspBackup -> verifyFspBackupOldRule($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testVerifyFspBackupOsVersion()
    {
        $fspBackup = $this -> fspBackup;
        $arr = array(
            'bk_uuid'=>'F85DFEC0-149E-373D-0B9E-3DA9A5C43940',
            'wk_uuid'=>'42614852-BB62-1EF7-FED0-D2354BF3149D',
        );
        $res = $fspBackup -> verifyFspBackupOsVersion($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testCreateFspBackup()
    {
        $fspBackup = $this -> fspBackup;
        $arr = array(
            'fsp_backup'=>array(
                'secret_key'=>'',
                'band_width'=>'',
                'mirr_open_type'=>'0',
                'service_uuid'=>'',
                'mirr_sync_flag'=>'0',
                'excl_path'=>["/cgroup/","/dev/","/etc/X11/xorg.conf/","/etc/init.d/i2node/","/etc/rc.d/init.d/i2node/","/etc/sdata/","/lost+found/","/media/","/mnt/","/proc/","/run/","/selinux/","/sys/","/tmp/","/usr/local/sdata/","/var/i2/","/var/i2data/","/var/lock/","/var/run/vmblock-fuse/"],
                'bkup_one_time'=>0,
                'encrypt_switch'=>'0',
                'mirr_sync_attr'=>'1',
                'bk_uuid'=>'F85DFEC0-149E-373D-0B9E-3DA9A5C43940',
                'wk_data_type'=>1,
                'bk_path'=>array(
                    '0'=>'/fsp_bk/'
                ),
                'sync_item'=>'/',
                'bkup_policy'=>2,
                'mirr_file_check'=>'0',
                'compress'=>'0',
                'monitor_type'=>0,
                'failover'=>'1',
                'wk_path'=>array(
                    '0'=>'/'
                ),
                'backup_type'=>'0',
                'fsp_name'=>'test',
                'wk_uuid'=>'42614852-BB62-1EF7-FED0-D2354BF3149D',
                'fsp_wk_shut_flag'=>'2',
                'bk_data_type'=>1,
                'bkup_schedule'=>array(),
                'fsp_type'=>3
            ),
        );
        $res = $fspBackup -> createFspBackup($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testModifyFspBackup()
    {
        $fspBackup = $this -> fspBackup;
        $arr = array(
            'uuid'=>'11111111-1111-1111-1111-111111111111',
            'fsp_backup'=>array(
                'secret_key'=>'',
                'band_width'=>'',
                'mirr_open_type'=>'0',
                'service_uuid'=>'',
                'mirr_sync_flag'=>'0',
                'excl_path'=>["/cgroup/","/dev/","/etc/X11/xorg.conf/","/etc/init.d/i2node/","/etc/rc.d/init.d/i2node/","/etc/sdata/","/lost+found/","/media/","/mnt/","/proc/","/run/","/selinux/","/sys/","/tmp/","/usr/local/sdata/","/var/i2/","/var/i2data/","/var/lock/","/var/run/vmblock-fuse/"],
                'bkup_one_time'=>0,
                'encrypt_switch'=>'0',
                'mirr_sync_attr'=>'1',
                'bk_uuid'=>'F85DFEC0-149E-373D-0B9E-3DA9A5C43940',
                'wk_data_type'=>1,
                'bk_path'=>array(
                    '0'=>'/fsp_bk/'
                ),
                'sync_item'=>'/',
                'bkup_policy'=>2,
                'mirr_file_check'=>'0',
                'compress'=>'0',
                'monitor_type'=>0,
                'failover'=>'0',
                'wk_path'=>array(
                    '0'=>'/'
                ),
                'fsp_name'=>'test1',
                'wk_uuid'=>'42614852-BB62-1EF7-FED0-D2354BF3149D',
                'fsp_wk_shut_flag'=>'2',
                'bk_data_type'=>1,
                'bkup_schedule'=>array(),
                'fsp_type'=>3,
                'random_str'=>'11111111-1111-1111-1111-111111111111'
            )
        );
        $res = $fspBackup -> modifyFspBackup($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeFspBackup()
    {
        $fspBackup = $this -> fspBackup;
        $arr = array(
            'uuid'=>'11111111-1111-1111-1111-111111111111'
        );
        $res = $fspBackup -> describeFspBackup($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDeleteFspBackup()
    {
        $fspBackup = $this -> fspBackup;
        $arr = array(
            'fsp_uuids'=>array(
                '0'=>'11111111-1111-1111-1111-111111111111'
            )
        );
        $res = $fspBackup -> deleteFspBackup($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListFspBackup()
    {
        $fspBackup = $this -> fspBackup;
        $arr = array(
            'type'=>3,
            'limit'=>10,
            'page'=>1
        );
        $res = $fspBackup -> listFspBackup($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testStartFspBackup()
    {
        $fspBackup = $this -> fspBackup;
        $arr = array(
            'fsp_uuids'=>array(
                '0'=>'11111111-1111-1111-1111-111111111111'
            )
        );
        $res = $fspBackup -> startFspBackup($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testStopFspBackup()
    {
        $fspBackup = $this -> fspBackup;
        $arr = array(
            'fsp_uuids'=>array(
                '0'=>'11111111-1111-1111-1111-111111111111'
            )
        );
        $res = $fspBackup -> stopFspBackup($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testFinishFspBackup()
    {
        $fspBackup = $this -> fspBackup;
        $arr = array(
            'fsp_uuids'=>array()
        );
        $res = $fspBackup -> finishFspBackup($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListFspBackupStatus()
    {
        $fspBackup = $this -> fspBackup;
        $arr = array(
            'fsp_uuids'=>array(
                '0'=>'11111111-1111-1111-1111-111111111111'
            ),
        );
        $res = $fspBackup -> listFspBackupStatus($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}