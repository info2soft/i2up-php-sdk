<?php
namespace i2up\Test\rep;

use i2up\rep\v20181217\RepBackup;
use i2up\common\Auth;
use i2up\Config;

class RepBackupTest extends \PHPUnit_Framework_TestCase
{
    private $repBackup;

    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $auth = new Auth(Config::baseUrl, 'admin', 'Info1234', __DIR__ . '/../');
        $this -> repBackup = new RepBackup($auth);
    }

    public function testCreateRepBackup()
    {
        $repBackup = $this -> repBackup;
        $arr = array(
            'rep_backup'=>array(
                'mirr_sync_attr'=>'1',
                'cdp_path'=>'',
                'oph_path'=>'',
                'secret_key'=>'',
                'rep_name'=>'rrrrr',
                'schedule'=>'',
                'snapshot_policy'=>'0',
                'bk_path_policy'=>'0',
                'cdp_process_time'=>'',
                'mirr_open_type'=>'0',
                'compress'=>'0',
                'cdp_switch'=>'',
                'snapshot_start'=>1515568566,
                'group_uuid'=>'0DD4E727-70AB-62C6-BEB5-D012DFAE46E3',
                'cdp_baseline_format'=>'',
                'cdp_bl_bkup_switch'=>0,
                'encrypt_switch'=>'0',
                'auto_start'=>'1',
                'disk_limit'=>'0',
                'wk_path'=>'D:\DataTest\\',
                'band_width'=>'',
                'snapshot_limit'=>'24',
                'policy_start'=>1,
                'mirr_sync_flag'=>'0',
                'bk_path'=>'D:\DataTest2\\',
                'wk_uuid'=>'0DD4E727-70AB-62C6-BEB5-D012DFAE46E3',
                'mirr_file_check'=>'0',
                'cdp_bl_sched_switch'=>0,
                'del_policy'=>'1',
                'cmp_switch'=>1,
                'rep_type'=>0,
                'snapshot_interval'=>'0',
                'file_type_filter_switch'=>0,
                'policy_interval'=>1,
                'snapshot_switch'=>0,
                'file_type_filter'=>'',
                'policy_operation'=>1,
                'cdp_param'=>'',
                'oph_policy'=>'0',
                'mirr_skip'=>'0',
                'bk_uuid'=>'0DD4E727-70AB-62C6-BEB5-D012DFAE46E3',
                'policy_limit'=>1,
                'cdp_bl_sched'=>'',
                'excl_path'=>array(),
                'mirr_sched'=>'3*03:00-14:00,2*02:00-15:00',
                'bkup_one_time'=>1515568566,
                'mirr_sched_switch'=>0,
                'cdp_snap_on'=>1,
                'cdp_snap_interval'=>1,
                'cdp_snap_count'=>1,
                'ct_name_type'=>1,
                'ct_name_str1'=>'',
                'ct_name_str2'=>'',
                'ct_name_str3'=>'',
                'ct_name_str4'=>'',
                'cmp_file_check'=>1,
                'cmp_schedule'=>array(
                    '0'=>array(
                        'sched_every'=>1,
                        'sched_time'=>array(
                            '0'=>'18:10'
                        ),
                        'sched_day'=>array(
                            '0'=>20
                        )
                    )
                ),
                'thread_num'=>'0'
            ),
        );
        $res = $repBackup -> createRepBackup($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeRepBackup()
    {
        $repBackup = $this -> repBackup;
        $arr = array(
            'uuid'=>''
        );
        $res = $repBackup -> describeRepBackup($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testModifyRepBackup()
    {
        $repBackup = $this -> repBackup;
        $arr = array(
            'uuid'=>'',
            'rep_backup'=>array(
                'cdp_param'=>'',
                'rep_type'=>0,
                'bkup_one_time'=>1515568566,
                'snapshot_switch'=>0,
                'cdp_baseline_format'=>'',
                'mirr_sync_flag'=>'0',
                'mirr_open_type'=>'0',
                'auto_start'=>'1',
                'snapshot_policy'=>'0',
                'cdp_bl_sched_switch'=>0,
                'snapshot_interval'=>'0',
                'bk_path'=>'D:\DataTest2\\',
                'snapshot_start'=>1515568566,
                'random_str'=>'0DD4E727-70AB-62C6-BEB5-D012DFAE46E3',
                'cdp_path'=>'',
                'file_type_filter_switch'=>0,
                'cmp_schedule'=>array(
                    'sched_time'=>'23:08',
                    'sched_day'=>30,
                    'sched_every'=>2
                ),
                'snapshot_limit'=>'24',
                'cmp_switch'=>0,
                'oph_path'=>'',
                'secret_key'=>'',
                'excl_path'=>array(),
                'schedule'=>'',
                'policy_interval'=>1,
                'cdp_switch'=>'',
                'wk_uuid'=>'0DD4E727-70AB-62C6-BEB5-D012DFAE46E3',
                'policy_operation'=>1,
                'wk_path'=>'D:\DataTest\\',
                'mirr_skip'=>'0',
                'policy_limit'=>1,
                'cdp_bl_sched'=>'',
                'del_policy'=>'1',
                'mirr_sched'=>'3*03:00-14:00,2*02:00-15:00',
                'encrypt_switch'=>'0',
                'band_width'=>'3*03:00-14:00*2m,2*02:00-15:00*80m',
                'compress'=>'0',
                'mirr_sync_attr'=>'1',
                'policy_start'=>1,
                'cdp_process_time'=>'',
                'bk_path_policy'=>'0',
                'cdp_bl_bkup_switch'=>0,
                'file_type_filter'=>'',
                'disk_limit'=>'0',
                'oph_policy'=>'0',
                'mirr_file_check'=>'0',
                'cmp_file_check'=>0,
                'mirr_sched_switch'=>0,
                'thread_num'=>'0'
            ),
        );
        $res = $repBackup -> modifyRepBackup($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDeleteRepBackup()
    {
        $repBackup = $this -> repBackup;
        $arr = array(
            'rep_uuids'=>array(),
        );
        $res = $repBackup -> deleteRepBackup($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testStartRepBackup()
    {
        $repBackup = $this -> repBackup;
        $arr = array(
            'rep_uuids'=>array()
        );
        $res = $repBackup -> startRepBackup($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testStopRepBackup()
    {
        $repBackup = $this -> repBackup;
        $arr = array(
            'rep_uuids'=>array()
        );
        $res = $repBackup -> stopRepBackup($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListRepBackupStatus()
    {
        $repBackup = $this -> repBackup;
        $arr = array(
            'rep_uuids'=>array()
        );
        $res = $repBackup -> listRepBackupStatus($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListRepBackup()
    {
        $repBackup = $this -> repBackup;
        $arr = array(
            'search_value'=>'',
            'limit'=>1,
            'type'=>1,
            'page'=>1,
            'search_field'=>''
        );
        $res = $repBackup -> listRepBackup($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListRepBackupBaseLine()
    {
        $repBackup = $this -> repBackup;
        $arr = array(
            'uuid'=>'',
            'page'=>1,
            'limit'=>1
        );
        $res = $repBackup -> listRepBackupBaseLine($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDeleteRepBackupBaseline()
    {
        $repBackup = $this -> repBackup;
        $arr = array(
            'uuid'=>'',
            'cdp_time_list'=>'2017-11-17 17:24:14',
        );
        $res = $repBackup -> deleteRepBackupBaseline($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListRepBackupOrphan()
    {
        $repBackup = $this -> repBackup;
        $arr = array(
            'uuid'=>'',
            'path'=>'',
        );
        $res = $repBackup -> listRepBackupOrphan($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDeleteRepBackupOrphan()
    {
        $repBackup = $this -> repBackup;
        $arr = array(
            'uuid'=>'',
            'path'=>'dir/dir/',
            'orphan_list'=>'test.txt',
        );
        $res = $repBackup -> deleteRepBackupOrphan($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDownloadRepBackupOrphan()
    {
        $repBackup = $this -> repBackup;
        $arr = array(
            'uuid'=>'',
            'orphan'=>'test.txt',
            'path'=>'dir/dir/',
        );
        $res = $repBackup -> downloadRepBackupOrphan($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListRepBackupSnapshot()
    {
        $repBackup = $this -> repBackup;
        $arr = array(
            'uuid'=>'',
            'page'=>1,
            'limit'=>10,
        );
        $res = $repBackup -> listRepBackupSnapshot($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testCreateRepBackupSnapshot()
    {
        $repBackup = $this -> repBackup;
        $arr = array(
            'uuid'=>''
        );
        $res = $repBackup -> createRepBackupSnapshot($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDeleteRepBackupSnapshot()
    {
        $repBackup = $this -> repBackup;
        $arr = array(
            'uuid'=>'',
            'snapshot_names'=>array(
                '0'=>'name'
            ),
        );
        $res = $repBackup -> deleteRepBackupSnapshot($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}