<?php
namespace i2up\Test\rep;

use i2up\rep\v20190805\RepBackup;
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

    public function testListRepBackupCdpZfs()
    {
        $repBackup = $this -> repBackup;
        $arr = array(
            'bk_uuid'=>'',
        );
        $res = $repBackup -> listRepBackupCdpZfs($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testCreateRepBackup()
    {
        $repBackup = $this -> repBackup;
        $arr = array(
            'rep_backup'=>array(
                'mirr_sync_attr'=>'1',
                'cdp_path'=>'E:\test3\\',
                'oph_path'=>'E:\test4\\',
                'secret_key'=>'',
                'rep_name'=>'rep_backup',
                'snapshot_policy'=>'0',
                'bk_path_policy'=>'1',
                'cdp_process_time'=>'05:07:28',
                'mirr_open_type'=>'0',
                'compress'=>'0',
                'cdp_switch'=>'1',
                'snapshot_start'=>1546913351,
                'cdp_baseline_format'=>'0',
                'cdp_bl_bkup_switch'=>0,
                'encrypt_switch'=>'0',
                'auto_start'=>'1',
                'wk_path'=>array(
                    '0'=>'E:\\test\\'
                ),
                'band_width'=>'',
                'snapshot_limit'=>'24',
                'mirr_sync_flag'=>'0',
                'bk_path'=>array(
                    '0'=>'E:\test2\\'
                ),
                'wk_uuid'=>'B8566905-411E-B2CD-A742-77B1346D8E84',
                'mirr_file_check'=>'0',
                'cdp_bl_sched_switch'=>0,
                'del_policy'=>'0',
                'cmp_switch'=>0,
                'rep_type'=>0,
                'snapshot_interval'=>'1',
                'file_type_filter_switch'=>0,
                'policy_interval'=>'',
                'snapshot_switch'=>0,
                'file_type_filter'=>'',
                'cdp_param'=>'3,30,0',
                'oph_policy'=>'2',
                'mirr_skip'=>'0',
                'bk_uuid'=>'B8566905-411E-B2CD-A742-77B1346D8E84',
                'cdp_bl_sched'=>'2|1|0|5',
                'excl_path'=>array(),
                'mirr_sched'=>'',
                'bkup_one_time'=>null,
                'mirr_sched_switch'=>0,
                'cdp_snap_on'=>0,
                'cdp_snap_interval'=>30,
                'cdp_snap_count'=>240,
                'ct_name_type'=>0,
                'ct_name_str1'=>'',
                'ct_name_str2'=>'',
                'cmp_file_check'=>0,
                'cmp_schedule'=>array(),
                'thread_num'=>'0',
                'biz_grp_list'=>array()
            ),
        );
        $res = $repBackup -> createRepBackup($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeRepBackup()
    {
        $repBackup = $this -> repBackup;
        $arr = array(
            'uuid'=>'11111111-1111-1111-1111-111111111111'
        );
        $res = $repBackup -> describeRepBackup($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testModifyRepBackup()
    {
        $repBackup = $this -> repBackup;
        $arr = array(
            'uuid'=>'11111111-1111-1111-1111-111111111111',
            'rep_backup'=>array(
                'mirr_sync_attr'=>'1',
                'cdp_path'=>'E:\test3\\',
                'oph_path'=>'E:\test4\\',
                'secret_key'=>'',
                'rep_name'=>'rep_backup1',
                'snapshot_policy'=>'0',
                'bk_path_policy'=>'1',
                'cdp_process_time'=>'05:07:28',
                'mirr_open_type'=>'0',
                'compress'=>'0',
                'cdp_switch'=>'1',
                'snapshot_start'=>1546913351,
                'cdp_baseline_format'=>'0',
                'cdp_bl_bkup_switch'=>0,
                'encrypt_switch'=>'0',
                'auto_start'=>'1',
                'wk_path'=>array(
                    '0'=>'E:\\test\\'
                ),
                'band_width'=>'',
                'snapshot_limit'=>'24',
                'mirr_sync_flag'=>'0',
                'bk_path'=>array(
                    '0'=>'E:\test2\\'
                ),
                'wk_uuid'=>'B8566905-411E-B2CD-A742-77B1346D8E84',
                'mirr_file_check'=>'0',
                'cdp_bl_sched_switch'=>0,
                'del_policy'=>'0',
                'cmp_switch'=>0,
                'rep_type'=>0,
                'snapshot_interval'=>'1',
                'file_type_filter_switch'=>0,
                'policy_interval'=>'',
                'snapshot_switch'=>0,
                'file_type_filter'=>'',
                'cdp_param'=>'3,30,0',
                'oph_policy'=>'2',
                'mirr_skip'=>'0',
                'bk_uuid'=>'B8566905-411E-B2CD-A742-77B1346D8E84',
                'cdp_bl_sched'=>'2|1|0|5',
                'excl_path'=>array(),
                'mirr_sched'=>'',
                'bkup_one_time'=>null,
                'mirr_sched_switch'=>0,
                'cdp_snap_on'=>0,
                'cdp_snap_interval'=>30,
                'cdp_snap_count'=>240,
                'ct_name_type'=>0,
                'ct_name_str1'=>'',
                'ct_name_str2'=>'',
                'cmp_file_check'=>0,
                'cmp_schedule'=>array(),
                'thread_num'=>'0',
                'biz_grp_list'=>array(),
                'random_str'=>'11111111-1111-1111-1111-111111111111'
            ),
        );
        $res = $repBackup -> modifyRepBackup($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);

    }

    public function testDeleteRepBackup()
    {
        $repBackup = $this -> repBackup;
        $arr = array(
            'rep_uuids'=>array(
                '0'=>'11111111-1111-1111-1111-111111111111'
            ),
        );
        $res = $repBackup -> deleteRepBackup($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testStartRepBackup()
    {
        $repBackup = $this -> repBackup;
        $arr = array(
            'rep_uuids'=>array(
                '0'=>'11111111-1111-1111-1111-111111111111'
            )
        );
        $res = $repBackup -> startRepBackup($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testStopRepBackup()
    {
        $repBackup = $this -> repBackup;
        $arr = array(
            'rep_uuids'=>array(
                '0'=>'11111111-1111-1111-1111-111111111111'
            )
        );
        $res = $repBackup -> stopRepBackup($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListRepBackupStatus()
    {
        $repBackup = $this -> repBackup;
        $arr = array(
            'rep_uuids'=>array(
                '0'=>'11111111-1111-1111-1111-111111111111'
            )
        );
        $res = $repBackup -> listRepBackupStatus($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListRepBackup()
    {
        $repBackup = $this -> repBackup;
        $arr = array(
            'search_value'=>'',
            'limit'=>10,
            'type'=>1,
            'page'=>1,
            'search_field'=>''
        );
        $res = $repBackup -> listRepBackup($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListRepBackupBaseLine()
    {
        $repBackup = $this -> repBackup;
        $arr = array(
            'uuid'=>'11111111-1111-1111-1111-111111111111',
            'page'=>1,
            'limit'=>10
        );
        $res = $repBackup -> listRepBackupBaseLine($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDeleteRepBackupBaseline()
    {
        $repBackup = $this -> repBackup;
        $arr = array(
            'uuid'=>'11111111-1111-1111-1111-111111111111',
            'cdp_time_list'=>'2018-12-28_10-14-11',
        );
        $res = $repBackup -> deleteRepBackupBaseline($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListRepBackupOrphan()
    {
        $repBackup = $this -> repBackup;
        $arr = array(
            'uuid'=>'11111111-1111-1111-1111-111111111111',
            'path'=>'',
        );
        $res = $repBackup -> listRepBackupOrphan($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDeleteRepBackupOrphan()
    {
        $repBackup = $this -> repBackup;
        $arr = array(
            'uuid'=>'11111111-1111-1111-1111-111111111111',
            'path'=>'/',
            'orphan_list'=>array(),
        );
        $res = $repBackup -> deleteRepBackupOrphan($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDownloadRepBackupOrphan()
    {
        $repBackup = $this -> repBackup;
        $arr = array(
            'uuid'=>'11111111-1111-1111-1111-111111111111',
            'orphan'=>'test.txt',
            'path'=>'/',
        );
        $res = $repBackup -> downloadRepBackupOrphan($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListRepBackupSnapshot()
    {
        $repBackup = $this -> repBackup;
        $arr = array(
            'uuid'=>'11111111-1111-1111-1111-111111111111',
            'page'=>1,
            'limit'=>10,
        );
        $res = $repBackup -> listRepBackupSnapshot($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testCreateRepBackupSnapshot()
    {
        $repBackup = $this -> repBackup;
        $arr = array(
            'uuid'=>'11111111-1111-1111-1111-111111111111'
        );
        $res = $repBackup -> createRepBackupSnapshot($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDeleteRepBackupSnapshot()
    {
        $repBackup = $this -> repBackup;
        $arr = array(
            'uuid'=>'11111111-1111-1111-1111-111111111111',
            'snapshot_names'=>array()
        );
        $res = $repBackup -> deleteRepBackupSnapshot($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}