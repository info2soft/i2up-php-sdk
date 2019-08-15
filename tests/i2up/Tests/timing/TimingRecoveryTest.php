<?php
namespace i2up\Test\timing;

use i2up\timing\v20190805\TimingRecovery;
use i2up\common\Auth;
use i2up\Config;

class TimingRecoveryTest extends \PHPUnit_Framework_TestCase
{
    private $timingRecovery;

    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $params = array(
            'username' => 'admin',
            'pwd' => 'Info1234',
            'cache_path' => __DIR__ . '/../',
            'ip' => Config::baseUrl
        );
        $auth = new Auth($params);
        $this -> timingRecovery = new TimingRecovery($auth);
    }

    public function testListTimingRecoveryMssqlTime()
    {
        $timingRecovery = $this -> timingRecovery;
        $arr = array(
            'bk_uuid'=>'B8566905-411E-B2CD-A742-77B1346D8E84',
            'rc_data_path'=>'E:\\mssqlBK\\ts-11111111-1111-1111-1111-111111111111\\',
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
            'bk_uuid'=>'B8566905-411E-B2CD-A742-77B1346D8E84',
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
            'rc_data_path'=>'C:\\back\\',
            'bk_uuid'=>'B8566905-411E-B2CD-A742-77B1346D8E84',
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
                'pass_word'=>'123456',
                'instance_name'=>'MSSQLSERVER',
                'user_id'=>'sa'
            ),
            'wk_uuid'=>'67E33CDB-D75B-15B3-367D-50C764F5A26F',
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
        $arr = array (
            'timing_recovery' =>
                array (
                    'bk_path' =>
                        array (
                            0 => 'E:\\t\\2019-01-15_15-49-00\\E\\test\\',
                        ),
                    'bk_data_type' => 1,
                    'wk_uuid' => '67E33CDB-D75B-15B3-367D-50C764F5A26F',
                    'backup_type' => 0,
                    'backup_task_uuid' => '',
                    'wk_data_type' => 1,
                    'oracle_settings' =>
                        array (
                            'ora_rst_limit_scn' => 0,
                            'ora_rc_point_scn' => 0,
                            'ora_rst_limit_thread' => 1,
                            'ora_rc_point_log_seq' => '',
                            'ora_rst_limit_date' => '2017-12-21 13:26:00',
                            'ora_rst_limit_type' => 0,
                            'ora_home_path' => '',
                            'ora_rc_point_type' => 0,
                            'ora_passwd' => 'Info1234',
                            'ora_port' => 1,
                            'ora_rc_point_date' => '2017-12-21 13:26:00',
                            'ora_do_restore' => 0,
                            'ora_rst_limit_log_seq' => '',
                            'ora_content_type' => 0,
                            'ora_rc_point_thread' => 1,
                            'ora_sid_name' => '',
                            'ora_do_recovery' => 0,
                            'ora_rc_type' => 0,
                            'ora_rst_type' => 0,
                        ),
                    'task_name' => 'task1',
                    'rc_data_path' => 'E:\\t\\',
                    'mssql_settings' =>
                        array (
                            'db_file_save_path' => '',
                            'ldf_name' => '',
                            'ldf_path' => '',
                            'pass_word' => '',
                            'mdf_path' => '',
                            'mdf_name' => '',
                            'instance_name' => '',
                            'src_db_name' => '',
                            'db_size' => '',
                            'win_verify' => 0,
                            'new_db_name' => '',
                            'user_id' => '',
                            'time_out' => '',
                            'check_out' => '',
                            'rt_time' => '',
                            'tab_num' => '',
                            'tab_info' => '',
                            'ln_num' => '',
                        ),
                    'bk_uuid' => 'B8566905-411E-B2CD-A742-77B1346D8E84',
                    'rc_style' => 1,
                    'wk_path' =>
                        array (
                            0 => 'E:\\test\\',
                        ),
                    'rc_point_in_time' => '2019-01-15_15-49-00'
                ),
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
        $arr = array (
            'uuid'=> '63CFB676-7F39-2F1D-2B72-9538997CE326',
            'timing_recovery' =>
                array (
                    'bk_path' =>
                        array (
                            0 => 'E:\\t\\2019-01-15_15-49-00\\E\\test\\',
                        ),
                    'bk_data_type' => 1,
                    'wk_uuid' => '67E33CDB-D75B-15B3-367D-50C764F5A26F',
                    'backup_type' => 0,
                    'backup_task_uuid' => '',
                    'wk_data_type' => 1,
                    'oracle_settings' =>
                        array (
                            'ora_rst_limit_scn' => 0,
                            'ora_rc_point_scn' => 0,
                            'ora_rst_limit_thread' => 1,
                            'ora_rc_point_log_seq' => '',
                            'ora_rst_limit_date' => '2017-12-21 13:26:00',
                            'ora_rst_limit_type' => 0,
                            'ora_home_path' => '',
                            'ora_rc_point_type' => 0,
                            'ora_passwd' => 'Info1234',
                            'ora_port' => 1,
                            'ora_rc_point_date' => '2017-12-21 13:26:00',
                            'ora_do_restore' => 0,
                            'ora_rst_limit_log_seq' => '',
                            'ora_content_type' => 0,
                            'ora_rc_point_thread' => 1,
                            'ora_sid_name' => '',
                            'ora_do_recovery' => 0,
                            'ora_rc_type' => 0,
                            'ora_rst_type' => 0,
                        ),
                    'task_name' => 'task2',
                    'rc_data_path' => 'E:\\\\t\\\\',
                    'mssql_settings' =>
                        array (
                            'db_file_save_path' => '',
                            'ldf_name' => '',
                            'ldf_path' => '',
                            'pass_word' => '',
                            'mdf_path' => '',
                            'mdf_name' => '',
                            'instance_name' => '',
                            'src_db_name' => '',
                            'db_size' => '',
                            'win_verify' => 0,
                            'new_db_name' => '',
                            'user_id' => '',
                            'time_out' => '',
                            'check_out' => '',
                            'rt_time' => '',
                            'tab_num' => '',
                            'tab_info' => '',
                            'ln_num' => '',
                        ),
                    'bk_uuid' => 'B8566905-411E-B2CD-A742-77B1346D8E84',
                    'rc_style' => 1,
                    'wk_path' =>
                        array (
                            0 => 'E:\\test\\',
                        ),
                    'rc_point_in_time' => '2019-01-15_15-49-00',
                    'random_str' => '6CB72402-F13A-4929-2B24-3656BB37FD57',
                ),
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
            'uuid'=>'63CFB676-7F39-2F1D-2B72-9538997CE326'
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


    public function testListTimingRecoveryDb2Time()
    {
        $timingRecovery = $this -> timingRecovery;
        $arr = array();
        $res = $timingRecovery -> listTimingRecoveryDb2Time($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }


    public function testListTimingRecoveryStatus()
    {
        $timingRecovery = $this -> timingRecovery;
        $arr = array(
            'task_uuids'=>array(
                'uuid'=>'63CFB676-7F39-2F1D-2B72-9538997CE326'
            ),
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
            'task_uuids'=>array(
                'uuid'=>'63CFB676-7F39-2F1D-2B72-9538997CE326'
            ),
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
            'task_uuids'=>array(
                'uuid'=>'63CFB676-7F39-2F1D-2B72-9538997CE326'
            )
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
            'task_uuids'=>array(
                'uuid'=>'63CFB676-7F39-2F1D-2B72-9538997CE326'
            )
        );
        $res = $timingRecovery -> stopTimingRecovery($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

}