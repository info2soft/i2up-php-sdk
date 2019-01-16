<?php
namespace i2up\Test\timing;

use i2up\timing\v20181217\TimingRecovery;
use i2up\common\Auth;
use i2up\Config;

class TimingRecoveryTest extends \PHPUnit_Framework_TestCase
{
    private $timingRecovery;

    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $auth = new Auth(Config::baseUrl, 'admin', 'Info1234', __DIR__ . '/../');
        $this -> timingRecovery = new TimingRecovery($auth);
    }

    public function testListTimingRecoveryMssqlTime()
    {
        $timingRecovery = $this -> timingRecovery;
        $arr = array(
            'bk_uuid'=>'67E33CDB-D75B-15B3-367D-50C764F5A26F',
            'rc_data_path'=>'E:\t\\',
        );
        $res = $timingRecovery -> listTimingRecoveryMssqlTime($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeTimingRecoveryMssqlInitInfo()
    {
        $timingRecovery = $this -> timingRecovery;
        $arr = array(
            'rc_point_in_time'=>'2017-12-21_13-16-53',
            'bk_uuid'=>'',
            'rc_data_path'=>''
        );
        $res = $timingRecovery -> describeTimingRecoveryMssqlInitInfo($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListTimingRecoveryPathList()
    {
        $timingRecovery = $this -> timingRecovery;
        $arr = array(
            'rc_data_path'=>'E:\t\\',
            'bk_uuid'=>'67E33CDB-D75B-15B3-367D-50C764F5A26F',
            'backup_task_uuid'=>'11111111-1111-1111-1111-111111111111',
        );
        $res = $timingRecovery -> listTimingRecoveryPathList($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testVerifyTimingRecoveryMssqlInfo()
    {
        $timingRecovery = $this -> timingRecovery;
        $arr = array(
            'mssql_settings'=>array(
                'win_verify'=>0,
                'pass_word'=>'',
                'instance_name'=>'',
                'user_id'=>'',),
            'wk_uuid'=>'0DD4E727-70AB-62C6-BEB5-D012DFAE46E3',
        );
        $res = $timingRecovery -> verifyTimingRecoveryMssqlInfo($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testCreateTimingRecovery()
    {
        $timingRecovery = $this -> timingRecovery;
        $arr = array(
            'timing_recovery'=>array(
                'bk_path'=>array(
                    '0'=>'E:\\t\\2019-01-15_16-30-56\\E\\test\\'
                ),
                'bk_data_type'=>1,
                'wk_uuid'=>'67E33CDB-D75B-15B3-367D-50C764F5A26',
                'backup_type'=>0,
                'backup_task_uuid'=>'11111111-1111-1111-1111-111111111111',
                'wk_data_type'=>1,
                'oracle_settings'=>array(
                    'ora_home_path'=>'',
                    'ora_passwd'=>'Info1234',
                    'ora_port'=>1,
                    'ora_content_type'=>0,
                    'ora_sid_name'=>'',
                    'ora_use_script'=>0,
                    'ora_script_path'=>''
                ),
                'task_name'=>'testTimingRC',
                'rc_data_path'=>'E:\\t\\',
                'mssql_settings'=>array(
                    'pass_word'=>'',
                    'instance_name'=>'MSSQLSERVER',
                    'db_name'=>'',
                    'db_size'=>'',
                    'win_verify'=>1,
                    'user_id'=>'',
                    'time_out'=>'',
                    'check_out'=>1,
                    'data_source'=>''
                ),
                'bk_uuid'=>'67E33CDB-D75B-15B3-367D-50C764F5A26F',
                'rc_style'=>0,
                'wk_path'=>array(
                    '0'=>'E:\\test2\\'
                ),
                'rc_point_in_time'=>'2019-01-15_16-30-56',),
        );
        $res = $timingRecovery -> createTimingRecovery($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testModifyTimingRecovery()
    {
        $timingRecovery = $this -> timingRecovery;
        $arr = array(
            'uuid'=> '',
            'timing_recovery'=>array(
                'wk_uuid'=>'7AD64D7A-7D1D-AC51-5DF1-29A58345A288',
                'task_name'=>'task',
                'random_str'=>'0DD4E727-70AB-62C6-BEB5-D012DFAE46E3',
                'wk_path'=>array(),
                'bk_data_type'=>1,
                'bk_path'=>array(),
                'backup_type'=>0,
                'oracle_settings'=>array(
                    'ora_rc_point_thread'=>1,
                    'ora_rc_point_date'=>'2017-12-21 13:26:00',
                    'ora_passwd'=>'Info1234',
                    'ora_port'=>1,
                    'ora_rc_point_type'=>0,
                    'ora_do_recovery'=>0,
                    'ora_do_restore'=>0,
                    'ora_home_path'=>'',
                    'ora_rst_type'=>0,
                    'ora_rst_limit_type'=>0,
                    'ora_sid_name'=>'',
                    'ora_rst_limit_thread'=>1,
                    'ora_rst_limit_date'=>'2017-12-21 13:26:00',
                    'ora_content_type'=>0,
                    'ora_rst_limit_log_seq'=>'',
                    'ora_rst_limit_scn'=>0,
                    'ora_rc_type'=>0,
                    'ora_rc_point_log_seq'=>'',
                    'ora_rc_point_scn'=>0,),
                'bk_uuid'=>'0DD4E727-70AB-62C6-BEB5-D012DFAE46E3',
                'task_uuid'=>'7AD64D7A-7D1D-AC51-5DF1-29A58345A288',
                'backup_task_uuid'=>'',
                'mssql_settings'=>array(
                    'win_verify'=>0,
                    'mdf_name'=>'',
                    'src_db_name'=>'',
                    'user_id'=>'',
                    'ldf_name'=>'',
                    'ldf_path'=>'',
                    'instance_name'=>'',
                    'pass_word'=>'',
                    'db_file_save_path'=>'',
                    'mdf_path'=>'',
                    'new_db_name'=>'',),
                'rc_data_path'=>'C:\\back\\',
                'rc_style'=>1,
                'wk_data_type'=>0,
                'rc_point_in_time'=>'2017-12-21_13-16-53',),
        );
        $res = $timingRecovery -> modifyTimingRecovery($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeTimingRecovery()
    {
        $timingRecovery = $this -> timingRecovery;
        $arr = array(
            'uuid'=>''
        );
        $res = $timingRecovery -> describeTimingRecovery($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListTimingRecovery()
    {
        $timingRecovery = $this -> timingRecovery;
        $arr = array(
            'search_value'=>'',
            'page'=>1,
            'limit'=>10,
            'search_field'=>'',
        );
        $res = $timingRecovery -> listTimingRecovery($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListTimingRecoveryStatus()
    {
        $timingRecovery = $this -> timingRecovery;
        $arr = array(
            'task_uuids'=>array(),
        );
        $res = $timingRecovery -> listTimingRecoveryStatus($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDeleteTimingRecovery()
    {
        $timingRecovery = $this -> timingRecovery;
        $arr = array(
            'task_uuids'=>array(),
        );
        $res = $timingRecovery -> deleteTimingRecovery($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testStartTimingRecovery()
    {
        $timingRecovery = $this -> timingRecovery;
        $arr = array(
            'task_uuids'=>array()
        );
        $res = $timingRecovery -> startTimingRecovery($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testStopTimingRecovery()
    {
        $timingRecovery = $this -> timingRecovery;
        $arr = array(
            'task_uuids'=>array()
        );
        $res = $timingRecovery -> stopTimingRecovery($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

}