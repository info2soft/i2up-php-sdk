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
            'wk_uuid'=>'67E33CDB-D75B-15B3-367D-50C764F5A26F',
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
            'wk_uuid'=>'67E33CDB-D75B-15B3-367D-50C764F5A26F',
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
            'wk_uuid'=>'67E33CDB-D75B-15B3-367D-50C764F5A26F',
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
                'wk_data_type'=>1,
                'task_name'=>'test',
                'del_policy'=>0,
                'mirr_sync_flag'=>0,
                'snap_type'=>0,
                'oracle_rman_settings'=>array(
                    'rman_skip_offline'=>0,
                    'rman_num_streams_arch'=>20,
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
                'wk_path'=>array(
                    '0'=>'E:\\test\\'
                ),
                'excl_path'=>array(),
                'bk_data_type'=>1,
                'mirr_blk_size'=>0,
                'bk_path'=>array(
                    '0'=>'E:\\t\\'
                ),
                'blk_direct_copy'=>0,
                'mirr_open_type'=>0,
                'mssql_settings'=>array(
                    'instance_name'=>'MSSQLSERVER',
                    'time_out'=>'',
                    'data_source'=>'',
                    'win_verify'=>1,
                    'user_id'=>'',
                    'db_name'=>'',
                    'pass_word'=>'',
                    'check_out'=>1
                ),
                'wk_uuid'=>'67E33CDB-D75B-15B3-367D-50C764F5A26F',
                'bk_uuid'=>'B8566905-411E-B2CD-A742-77B1346D8E84',
                'bkup_policy'=>2,
                'bkup_window'=>array(
                    'sched_time_start'=>'00:00',
                    'sched_time_end'=>'00:00'
                ),
                'bkup_one_time'=>1547538235,
                'bkup_schedule'=>array(),
                'task_type'=>0,
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
            'uuid'=>'11111111-1111-1111-1111-111111111111'
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
            'uuid'=>'11111111-1111-1111-1111-111111111111',
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
                'wk_data_type'=>1,
                'task_name'=>'test1',
                'del_policy'=>0,
                'mirr_sync_flag'=>0,
                'snap_type'=>0,
                'oracle_rman_settings'=>array(
                    'rman_skip_offline'=>0,
                    'rman_num_streams_arch'=>20,
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
                'wk_path'=>array(
                    '0'=>'E:\\test\\'
                ),
                'excl_path'=>array(),
                'bk_data_type'=>1,
                'mirr_blk_size'=>0,
                'bk_path'=>array(
                    '0'=>'E:\\t\\'
                ),
                'blk_direct_copy'=>0,
                'mirr_open_type'=>0,
                'mssql_settings'=>array(
                    'instance_name'=>'MSSQLSERVER',
                    'time_out'=>'',
                    'data_source'=>'',
                    'win_verify'=>1,
                    'user_id'=>'',
                    'db_name'=>'',
                    'pass_word'=>'',
                    'check_out'=>1
                ),
                'wk_uuid'=>'67E33CDB-D75B-15B3-367D-50C764F5A26F',
                'bk_uuid'=>'B8566905-411E-B2CD-A742-77B1346D8E84',
                'bkup_policy'=>2,
                'bkup_window'=>array(
                    'sched_time_start'=>'00:00',
                    'sched_time_end'=>'00:00'
                ),
                'bkup_one_time'=>1547538235,
                'bkup_schedule'=>array(),
                'task_type'=>0,
                'random_str'=>'11111111-1111-1111-1111-111111111111'
            ),
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
            'limit'=>10,
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
            'task_uuids'=>array(
                '0'=>'11111111-1111-1111-1111-111111111111'
            ),
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
            'task_uuids'=>array(
                '0'=>'11111111-1111-1111-1111-111111111111'
            ),
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
            'task_uuids'=>array(
                '0'=>'11111111-1111-1111-1111-111111111111'
            ),
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
            'task_uuids'=>array(
                '0'=>'11111111-1111-1111-1111-111111111111'
            ),
        );
        $res = $timingBackup -> stopTimingBackup($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}