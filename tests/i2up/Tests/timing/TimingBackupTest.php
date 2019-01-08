<?php
namespace i2up\Test\timing;

use i2up\timing\v20181217\TimingBackup;
use i2up\common\Auth;
use i2up\Config;

class TimingBackupTest extends \PHPUnit_Framework_TestCase
{
    private $timingBackup;

    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $auth = new Auth(Config::baseUrl, 'admin', 'Info1234', __DIR__ . '/../');
        $this -> timingBackup = new TimingBackup($auth);
    }

    public function testDescribeTimingBackupMssqlSource()
    {
        $timingBackup = $this -> timingBackup;
        $arr = array(
            'wk_uuid'=>'0DD4E727-70AB-62C6-BEB5-D012DFAE46E3',
        );
        $res = $timingBackup -> describeTimingBackupMssqlSource($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testVerifyTimingBackupOracleInfo()
    {
        $timingBackup = $this -> timingBackup;
        $arr = array(
            'oracle_settings'=>array(
                'ora_sid_name'=>'',
                'ora_port'=>1,
                'ora_home_path'=>'',
                'ora_passwd'=>'Info1234'
            ),
            'src_node_uuid'=>'',
        );
        $res = $timingBackup -> verifyTimingBackupOracleInfo($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeTimingBackupOracleContent()
    {
        $timingBackup = $this -> timingBackup;
        $arr = array(
            'oracle_settings'=>array(
                'ora_passwd'=>'Info1234',
                'ora_port'=>1,
                'ora_sid_name'=>'',
                'ora_content_type'=>0
            ),
            'src_node_uuid'=>'',
        );
        $res = $timingBackup -> describeTimingBackupOracleContent($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescibeTimingBackupOracleSriptPath()
    {
        $timingBackup = $this -> timingBackup;
        $arr = array(
            'wk_uuid'=>'0DD4E727-70AB-62C6-BEB5-D012DFAE46E3',
        );
        $res = $timingBackup -> descibeTimingBackupOracleSriptPath($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListTimingBackupMssqlDbList()
    {
        $timingBackup = $this -> timingBackup;
        $arr = array(
            'wk_uuid'=>'0DD4E727-70AB-62C6-BEB5-D012DFAE46E3',
            'mssql_settings'=>array(
                'win_verify'=>0,
                'instance_name'=>'',
                'pass_word'=>'',
                'data_source'=>'',
                'user_id'=>'',),
        );
        $res = $timingBackup -> listTimingBackupMssqlDbList($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testCreateTimingBackup()
    {
        $timingBackup = $this -> timingBackup;
        $arr = array(
            'timing_backup'=>array(
                'mirr_sync_attr'=>1,
                'secret_key'=>'',
                'oracle_settings'=>array(
                    'ora_sid_name'=>'',
                    'ora_content_type'=>0,
                    'ora_use_script'=>0,
                    'ora_port'=>1,
                    'ora_script_path'=>'',
                    'ora_passwd'=>'Info1234',
                    'ora_home_path'=>''
                ),
                'policy_uuid'=>'38FFA6E2-2A40-31D6-7A94-E8168EBA9FF1',
                'wk_data_type'=>0,
                'task_name'=>'',
                'backup_type'=>1,
                'del_policy'=>0,
                'mirr_sync_flag'=>0,
                'snap_type'=>0,
                'oracle_rman_settings'=>array(
                    'rman_skip_offline'=>0,
                    'rman_num_streams_arch'=>1,
                    'rman_del_arch'=>1,
                    'rman_include_arch_flag'=>1,
                    'rman_num_streams_df'=>1,
                    'rman_filespertset_arch'=>20,
                    'rman_maxsetsize_df'=>0,
                    'rman_set_limit_arch_flag'=>0,
                    'rman_skip_readonly'=>0,
                    'rman_maxsetsize_arch'=>0,
                    'rman_cold_bkup'=>0,
                    'rman_filespertset_df'=>20
                ),
                'compress'=>0,
                'encrypt_switch'=>0,
                'wk_path'=>array(),
                'excl_path'=>array(),
                'bk_data_type'=>1,
                'mirr_blk_size'=>0,
                'bk_path'=>array(),
                'blk_direct_copy'=>0,
                'mirr_open_type'=>0,
                'mssql_settings'=>array(
                    'instance_name'=>'',
                    'time_out'=>'2',
                    'data_source'=>'',
                    'win_verify'=>0,
                    'user_id'=>'',
                    'db_name'=>'',
                    'pass_word'=>'',
                    'check_out'=>1
                ),
                'wk_uuid'=>'0DD4E727-70AB-62C6-BEB5-D012DFAE46E3',
                'bk_uuid'=>'Jane',
                'bkup_policy'=>0,
                'bkup_window'=>array(
                    'sched_time_start'=>'08:04',
                    'sched_time_end'=>'23:11'
                ),
                'bkup_one_time'=>1515568566,
                'bkup_schedule'=>array(
                    '0'=>array(
                        'limit'=>60,
                        'sched_day'=>23,
                        'sched_every'=>2,
                        'sched_time'=>'03:45',
                        'sched_gap_min'=>49
                    )
                ),
                'task_type'=>0,
                'file_check_dir'=>''
            ),
        );
        $res = $timingBackup -> createTimingBackup($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeTimingBackup()
    {
        $timingBackup = $this -> timingBackup;
        $arr = array(
            'uuid'=>''
        );
        $res = $timingBackup -> describeTimingBackup($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testModifyTimingBackup()
    {
        $timingBackup = $this -> timingBackup;
        $arr = array(
            'uuid'=>'',
            'timing_backup'=>array(
                'mirr_sync_attr'=>1,
                'secret_key'=>'',
                'oracle_settings'=>array(
                    'ora_sid_name'=>'',
                    'ora_content_type'=>0,
                    'ora_use_script'=>0,
                    'ora_port'=>1,
                    'ora_script_path'=>'',
                    'ora_passwd'=>'Info1234',
                    'ora_home_path'=>''
                ),
                'policy_uuid'=>'38FFA6E2-2A40-31D6-7A94-E8168EBA9FF1',
                'wk_data_type'=>0,
                'task_name'=>'',
                'backup_type'=>1,
                'del_policy'=>0,
                'mirr_sync_flag'=>0,
                'snap_type'=>0,
                'oracle_rman_settings'=>array(
                    'rman_skip_offline'=>0,
                    'rman_num_streams_arch'=>1,
                    'rman_del_arch'=>1,
                    'rman_include_arch_flag'=>1,
                    'rman_num_streams_df'=>1,
                    'rman_filespertset_arch'=>20,
                    'rman_maxsetsize_df'=>0,
                    'rman_set_limit_arch_flag'=>0,
                    'rman_skip_readonly'=>0,
                    'rman_maxsetsize_arch'=>0,
                    'rman_cold_bkup'=>0,
                    'rman_filespertset_df'=>20
                ),
                'compress'=>0,
                'encrypt_switch'=>0,
                'wk_path'=>array(),
                'excl_path'=>array(),
                'bk_data_type'=>1,
                'mirr_blk_size'=>0,
                'bk_path'=>array(),
                'blk_direct_copy'=>0,
                'mirr_open_type'=>0,
                'mssql_settings'=>array(
                    'instance_name'=>'',
                    'time_out'=>'2',
                    'data_source'=>'',
                    'dbsize'=>'',
                    'win_verify'=>0,
                    'user_id'=>'',
                    'db_name'=>'',
                    'pass_word'=>''
                ),
                'wk_uuid'=>'0DD4E727-70AB-62C6-BEB5-D012DFAE46E3',
                'bk_uuid'=>'Jane',
                'bkup_policy'=>0,
                'bkup_window'=>array(
                    'sched_time_start'=>'15:18',
                    'sched_time_end'=>'14:37'
                ),
                'bkup_one_time'=>1515568566,
                'bkup_schedule'=>array(
                    '0'=>array(
                        'limit'=>25,
                        'sched_day'=>24,
                        'sched_every'=>2,
                        'sched_time'=>'04:07',
                        'sched_gap_min'=>49
                    )
                ),
                'task_type'=>0
            )
        );
        $res = $timingBackup -> modifyTimingBackup($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListTimingBackup()
    {
        $timingBackup = $this -> timingBackup;
        $arr = array(
            'search_field'=>'',
            'limit'=>1,
            'page'=>1,
            'search_value'=>'',
            'type'=>0,
        );
        $res = $timingBackup -> listTimingBackup($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListTimingBackupStatus()
    {
        $timingBackup = $this -> timingBackup;
        $arr = array(
            'task_uuids'=>array(),
        );
        $res = $timingBackup -> listTimingBackupStatus($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDeleteTimingBackup()
    {
        $timingBackup = $this -> timingBackup;
        $arr = array(
            'task_uuids'=>array(),
        );
        $res = $timingBackup -> deleteTimingBackup($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testStartTimingBackup()
    {
        $timingBackup = $this -> timingBackup;
        $arr = array(
            'task_uuids'=>array(),
        );
        $res = $timingBackup -> startTimingBackup($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
    public function testStopTimingBackup()
    {
        $timingBackup = $this -> timingBackup;
        $arr = array(
            'task_uuids'=>array(),
        );
        $res = $timingBackup -> stopTimingBackup($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}