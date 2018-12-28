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
                'rep_name'=>'test5',
                'snapshot_policy'=>'0',
                'bk_path_policy'=>'1',
                'cdp_process_time'=>'03:39:20',
                'mirr_open_type'=>'0',
                'compress'=>'0',
                'cdp_switch'=>'',
                'snapshot_start'=>'',
                'cdp_baseline_format'=>'0',
                'cdp_bl_bkup_switch'=>0,
                'encrypt_switch'=>'0',
                'auto_start'=>'1',
                'wk_path'=>array(
                    '0'=>'E:\\t\\'
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
                'oph_policy'=>'0',
                'mirr_skip'=>'0',
                'bk_uuid'=>'B8566905-411E-B2CD-A742-77B1346D8E84',
                'cdp_bl_sched'=>'',
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
        var_dump($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeRepBackup()
    {
        $repBackup = $this -> repBackup;
        $arr = array(
            'uuid'=>'7561723E-1A62-B07D-0EE4-807EFF2706D4'
        );
        $res = $repBackup -> describeRepBackup($arr);
        var_dump($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testModifyRepBackup()
    {
        $repBackup = $this -> repBackup;
        $arr = array(
            'uuid'=>'7561723E-1A62-B07D-0EE4-807EFF2706D4',
            'rep_backup'=>array(
                'mirr_sync_attr'=>'1',
                'cdp_path'=>'',
                'oph_path'=>'',
                'secret_key'=>'',
                'rep_name'=>'test4',
                'snapshot_policy'=>'0',
                'bk_path_policy'=>'1',
                'cdp_process_time'=>'03:39:20',
                'mirr_open_type'=>'0',
                'compress'=>'0',
                'cdp_switch'=>'',
                'snapshot_start'=>'',
                'cdp_baseline_format'=>'0',
                'cdp_bl_bkup_switch'=>0,
                'encrypt_switch'=>'0',
                'auto_start'=>'1',
                'wk_path'=>array(
                    '0'=>'E:\\t\\'
                ),
                'band_width'=>'',
                'snapshot_limit'=>'24',
                'mirr_sync_flag'=>'0',
                'bk_path'=>array(
                    '0'=>'E:\t2\\'
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
                'oph_policy'=>'0',
                'mirr_skip'=>'0',
                'bk_uuid'=>'B8566905-411E-B2CD-A742-77B1346D8E84',
                'cdp_bl_sched'=>'',
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
                'random_str'=>'1DFFCDF4-FBDB-496F-95D0-20CD153DA7A6'
            ),
        );
        $res = $repBackup -> modifyRepBackup($arr);
        var_dump($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);

    }

    public function testDeleteRepBackup()
    {
        $repBackup = $this -> repBackup;
        $arr = array(
            'rep_uuids'=>array(
                '0'=>'D46D743E-A12E-2177-868F-275931A395DF'
            ),
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
            'rep_uuids'=>array(
                '0'=>'7561723E-1A62-B07D-0EE4-807EFF2706D4'
            )
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
            'rep_uuids'=>array(
                '0'=>'7561723E-1A62-B07D-0EE4-807EFF2706D4'
            )
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
            'rep_uuids'=>array(
                '0'=>'7561723E-1A62-B07D-0EE4-807EFF2706D4'
            )
        );
        $res = $repBackup -> listRepBackupStatus($arr);
        var_dump($res);
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
        var_dump($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListRepBackupBaseLine()
    {
        $repBackup = $this -> repBackup;
        $arr = array(
            'uuid'=>'3558E306-361D-5A0E-174F-D66ECF3EB4C4',
            'page'=>1,
            'limit'=>10
        );
        $res = $repBackup -> listRepBackupBaseLine($arr);
        var_dump($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDeleteRepBackupBaseline()
    {
        $repBackup = $this -> repBackup;
        $arr = array(
            'uuid'=>'3558E306-361D-5A0E-174F-D66ECF3EB4C4',
            'cdp_time_list'=>'2018-12-28_10-14-11',
        );
        $res = $repBackup -> deleteRepBackupBaseline($arr);
        var_dump($res);
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
            'uuid'=>'3558E306-361D-5A0E-174F-D66ECF3EB4C4',
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