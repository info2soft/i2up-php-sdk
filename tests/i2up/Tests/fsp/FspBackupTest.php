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
        $auth = new Auth('http://192.168.25.101:58080/api/', 'admin', 'Info1234', __DIR__ . '/../');
        $this -> fspBackup = new FspBackup($auth);
    }

    public function testListFspBackupNic()
    {
        $fspBackup = $this -> fspBackup;
        $arr = array(
            'wk_uuid'=>'C11FE572-5207-3359-DB85-001E95F5F185',
            'bk_uuid'=>'CE77F3D6-A6E3-A385-CE66-712313B7DDE8',
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
            'wk_uuid'=>'CE77F3D6-A6E3-A385-CE66-712313B7DDE8'
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
                '0'=>'/FSPback0107/'
            ),
            'bk_uuid'=>'C11FE572-5207-3359-DB85-001E95F5F185',
            'wk_uuid'=>'CE77F3D6-A6E3-A385-CE66-712313B7DDE8',
            'excl_path'=>["/cgroup/","/dev/","/etc/X11/xorg.conf/","/etc/init.d/i2node/","/etc/rc.d/init.d/i2node/","/etc/sdata/","/lost+found/","/media/","/mnt/","/proc/","/run/","/selinux/","/sys/","/tmp/","/usr/local/sdata/","/var/i2/","/var/i2data/","/var/lock/","/var/run/vmblock-fuse/"],
            'wk_path'=>array(
                '0'=>'/',
                '1'=>'/boot/'
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
            'wk_uuid'=>'CE77F3D6-A6E3-A385-CE66-712313B7DDE8',
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
            'bk_uuid'=>'C11FE572-5207-3359-DB85-001E95F5F185',
            'bk_path'=>array(
                '0'=>'/FSPback0107/'
            ),
            'wk_uuid'=>'CE77F3D6-A6E3-A385-CE66-712313B7DDE8',
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
            'bk_uuid'=>'C11FE572-5207-3359-DB85-001E95F5F185',
            'wk_uuid'=>'CE77F3D6-A6E3-A385-CE66-712313B7DDE8',
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
                'band_width'=>'3*03:00-14:00*2m',
                'mirr_open_type'=>'0',
                'service_uuid'=>'',
                'mirr_sync_flag'=>'0',
                'excl_path'=>["/cgroup/","/dev/","/etc/X11/xorg.conf/","/etc/init.d/i2node/","/etc/rc.d/init.d/i2node/","/etc/sdata/","/lost+found/","/media/","/mnt/","/proc/","/run/","/selinux/","/sys/","/tmp/","/usr/local/sdata/","/var/i2/","/var/i2data/","/var/lock/","/var/run/vmblock-fuse/"],
                'bkup_one_time'=>1515568566,
                'encrypt_switch'=>'0',
                'bk_type'=>0,
                'mirr_sync_attr'=>'1',
                'bk_uuid'=>'0DD4E727-70AB-62C6-BEB5-D012DFAE46E3',
                'wk_data_type'=>1,
                'bk_path'=>array(
                    '0'=>'/FSPback0107/'
                ),
                'sync_item'=>'/',
                'bkup_policy'=>0,
                'net_mapping_type'=>'2',
                'snapshot_policy'=>'0',
                'mirr_file_check'=>'0',
                'snapshot_interval'=>'0',
                'compress'=>'0',
                'monitor_type'=>0,
                'failover'=>'2',
                'wk_path'=>array(
                    '0'=>'/',
                    '1'=>'/boot/'
                ),
                'snapshot_limit'=>'24',
                'snapshot_switch'=>0,
                'fsp_name'=>'LinuxBackup',
                'wk_uuid'=>'CE77F3D6-A6E3-A385-CE66-712313B7DDE8',
                'backup_type'=>2,
                'fsp_wk_shut_flag'=>'2',
                'bk_data_type'=>0,
                'bkup_schedule'=>array(
                    '0'=>array(
                        'sched_time_end'=>'01:14',
                        'sched_day'=>31,
                        'sched_gap_min'=>21,
                        'sched_time'=>'00:20',
                        'sched_time_start'=>'01:38',
                        'sched_every'=>2,
                        'limit'=>40)
                ),
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
            'uuid'=>'',
            'fsp_backup'=>array(
                'secret_key'=>'',
                'band_width'=>'3*03:00-14:00*2m',
                'mirr_open_type'=>'0',
                'service_uuid'=>'',
                'mirr_sync_flag'=>'0',
                'excl_path'=>array(),
                'bkup_one_time'=>1515568566,
                'encrypt_switch'=>'0',
                'bk_type'=>0,
                'mirr_sync_attr'=>'1',
                'bk_uuid'=>'0DD4E727-70AB-62C6-BEB5-D012DFAE46E3',
                'wk_data_type'=>1,
                'bk_path'=>array(),
                'sync_item'=>'C:',
                'bkup_policy'=>0,
                'net_mapping_type'=>'2',
                'snapshot_policy'=>'0',
                'mirr_file_check'=>'0',
                'snapshot_interval'=>'0',
                'compress'=>'0',
                'monitor_type'=>0,
                'failover'=>'2',
                'wk_path'=>array(),
                'snapshot_limit'=>'24',
                'snapshot_switch'=>0,
                'fsp_name'=>'rrrrr',
                'wk_uuid'=>'0DD4E727-70AB-62C6-BEB5-D012DFAE46E3',
                'backup_type'=>1,
                'fsp_wk_shut_flag'=>'2',
                'bk_data_type'=>0,
                'bkup_schedule'=>array(
                    '0'=>array(
                        'sched_time_end'=>'18:50',
                        'sched_day'=>22,
                        'sched_gap_min'=>31,
                        'sched_time'=>'01:06',
                        'sched_time_start'=>'13:35',
                        'sched_every'=>2,
                        'limit'=>29,),),
                'fsp_type'=>1,),
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
            'fsp_uuids'=>array()
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
            'fsp_uuids'=>array()
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
            'fsp_uuids'=>array()
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
            'fsp_uuids'=>array(),
        );
        $res = $fspBackup -> listFspBackupStatus($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}