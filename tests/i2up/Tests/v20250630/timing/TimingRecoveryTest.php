<?php
namespace i2up\Test\v20250630\timing;

use i2up\timing\v20250630\TimingRecovery;
use i2up\common\Auth;
                
class TimingRecoveryTest extends \PHPUnit_Framework_TestCase
 {
    private $timingRecovery;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> timingRecovery = new TimingRecovery(new Auth());
    }

    public function testListTimingRecoveryMssqlTime()
    {
        $timingRecovery = $this -> timingRecovery;
        $arr = array(
            'bk_uuid'=>'B8566905-411E-B2CD-A742-77B1346D8E84',
            'rc_data_path'=>'E:\\\\mssqlBK\\\\ts-11111111-1111-1111-1111-111111111111\\\\',
            'bk_storage'=>1,
            'obs_settings'=>array(),
            'tape_pool_uuid'=>'',
            'tape_name'=>'',
            'library_sn'=>'',
        );
        
        
        $res = $timingRecovery -> listTimingRecoveryMssqlTime($arr);
        $this->do_assert($res);
    }

    public function testDescribeTimingRecoveryMssqlInitInfo()
    {
        $timingRecovery = $this -> timingRecovery;
        $arr = array(
            'rc_point_in_time'=>'2017-12-21_13-16-53',
            'bk_uuid'=>'B8566905-411E-B2CD-A742-77B1346D8E84',
            'rc_data_path'=>'',
        );
        
        
        $res = $timingRecovery -> describeTimingRecoveryMssqlInitInfo($arr);
        $this->do_assert($res);
    }

    public function testListTimingRecoveryPathList()
    {
        $timingRecovery = $this -> timingRecovery;
        $arr = array(
            'rc_data_path'=>'C:\\\\back\\\\',
            'bk_uuid'=>'B8566905-411E-B2CD-A742-77B1346D8E84',
            'backup_task_uuid'=>'11111111-1111-1111-1111-111111111111',
            'volume_uuid'=>'',
            'bk_storage'=>'',
            'tape_pool_uuid'=>'',
            'tape_name'=>'',
            'library_sn'=>'',
            'dedupe_uuid'=>'',
        );
        
        
        $res = $timingRecovery -> listTimingRecoveryPathList($arr);
        $this->do_assert($res);
    }

    public function testVerifyTimingRecoveryMssqlInfo()
    {
        $timingRecovery = $this -> timingRecovery;
        $arr = array(
            'mssql_settings'=>array(
            'win_verify'=>0,
            'pass_word'=>'123456',
            'instance_name'=>'MSSQLSERVER',
            'user_id'=>'sa',
            'data_source'=>'',
            'port'=>'',
            'protocol'=>1,),
            'wk_uuid'=>'67E33CDB-D75B-15B3-367D-50C764F5A26F',
        );
        
        
        $res = $timingRecovery -> verifyTimingRecoveryMssqlInfo($arr);
        $this->do_assert($res);
    }

    public function testListTimingRecoveryOracleRcPointInfo()
    {
        $timingRecovery = $this -> timingRecovery;
        $arr = array(
            'page'=>1,
            'limit'=>1,
            'bk_uuid'=>'',
            'bk_path'=>'',
        );
        
        
        $res = $timingRecovery -> listTimingRecoveryOracleRcPointInfo($arr);
        $this->do_assert($res);
    }

    public function testDescribeRcMysqlInfo()
    {
        $timingRecovery = $this -> timingRecovery;
        $arr = array(
            'bk_uuid'=>'B8566905-411E-B2CD-A742-77B1346D8E84',
            'rc_data_path'=>'E:\\\\mssqlBK\\\\ts-11111111-1111-1111-1111-111111111111\\\\',
        );
        
        
        $res = $timingRecovery -> describeRcMysqlInfo($arr);
        $this->do_assert($res);
    }

    public function testListSbtContrlFile()
    {
        $timingRecovery = $this -> timingRecovery;
        $arr = array(
            'rc_data_path'=>'',
            'ora_content_type'=>1,
            'bk_uuid'=>'',
            'bk_storage'=>'',
            'tape_pool_uuid'=>'',
            'tape_name'=>'',
            'library_sn'=>'',
        );
        
        
        $res = $timingRecovery -> listSbtContrlFile($arr);
        $this->do_assert($res);
    }

    public function testDescribeSbtDbid()
    {
        $timingRecovery = $this -> timingRecovery;
        $arr = array(
            'file_name'=>'',
            'bk_uuid'=>'',
        );
        
        
        $res = $timingRecovery -> describeSbtDbid($arr);
        $this->do_assert($res);
    }

    public function testCreateTimingRecovery()
    {
        $timingRecovery = $this -> timingRecovery;
        $arr = array(
            'timing_recovery'=>array(
            'bk_path'=>array(
            '0'=>'E:\\t\\2019-01-15_15-49-00\\E\\test\\',),
            'bk_data_type'=>1,
            'wk_uuid'=>'67E33CDB-D75B-15B3-367D-50C764F5A26F',
            'backup_type'=>0,
            'backup_task_uuid'=>'',
            'wk_data_type'=>1,
            'oracle_settings'=>array(
            'ora_rst_limit_scn'=>0,
            'ora_rc_point_scn'=>0,
            'ora_rst_limit_thread'=>1,
            'ora_rc_point_log_seq'=>'',
            'ora_rst_limit_date'=>'2017-12-21 13:26:00',
            'ora_rst_limit_type'=>0,
            'ora_home_path'=>'',
            'ora_rc_point_type'=>0,
            'ora_passwd'=>'Info1234',
            'ora_port'=>1,
            'ora_rc_point_date'=>'2017-12-21 13:26:00',
            'ora_do_restore'=>0,
            'ora_rst_limit_log_seq'=>'',
            'ora_content_type'=>0,
            'ora_rc_point_thread'=>1,
            'ora_sid_name'=>'',
            'ora_do_recovery'=>0,
            'ora_rc_type'=>0,
            'ora_rst_type'=>0,
            'ora_pdbs_name'=>'',
            'ora_rst_arch_limit_type'=>1,
            'ora_rst_arch_limit_log_seq'=>1,
            'ora_dbid'=>'',
            'ora_rst_ctrl_name'=>'',
            'ora_rst_spfile_path'=>'',
            'ora_rst_spfile_name'=>'',
            'ora_rst_record'=>array(),
            'ora_rc_record'=>array(),
            'ora_rst_recory_point'=>1,
            'ora_rc_recory_point'=>1,
            'ora_login_pwd'=>'',
            'ora_login_name'=>'',
            'snapshot_time'=>'',
            'snapshot_name'=>'',
            'rst_control'=>1,
            'ora_tab_mode'=>0,
            'ora_tab_pdb_name'=>'',
            'ora_tab_names'=>array(
            '0'=>array(
            'user'=>'',
            'ori_table'=>'',
            'tgt_table'=>'',),),
            'ora_tab_aux_path'=>'',
            'ora_open_mode'=>0,
            'ora_rst_endarch_limit_log_seq'=>1,
            'log_ccopy'=>1,
            'log_volume_uuid'=>'',
            'log_mount_point'=>'',),
            'task_name'=>'task',
            'rc_data_path'=>'E:\\\\t\\\\',
            'mssql_settings'=>array(
            'pass_word'=>'',
            'instance_name'=>'',
            'win_verify'=>0,
            'user_id'=>'',
            'time_out'=>'',
            'data_source'=>'',
            'port'=>'',
            'protocol'=>1,
            'db_info'=>array(
            '0'=>array(
            'src_db_name'=>'',
            'new_db_name'=>'',
            'lgc_infos'=>array(
            '0'=>array(
            'lgc_name'=>'test',
            'lgc_path'=>'C:\\Program Files\\Microsoft SQL Server\\MSSQL12.MSSQLSERVER\\MSSQL\\DATA\\test.mdf',),),
            'check_out'=>'0',
            'db_size'=>'',
            'tab_num'=>'',
            'tab_info'=>'',
            'ln_num'=>'',
            'db_file_save_path'=>'',
            'rc_point_in_time'=>'2019-01-15_15-49-00',
            'db_name'=>'',
            'ldf_name'=>'',
            'mdf_name'=>'',),),
            'lanfree'=>0,
            'volume_uuid'=>'',
            'mount_point'=>'',
            'data_fetch'=>0,
            'rep_dir'=>'',),
            'bk_uuid'=>'B8566905-411E-B2CD-A742-77B1346D8E84',
            'rc_style'=>1,
            'wk_path'=>array(
            '0'=>'E:\\test\\',),
            'rc_point_in_time'=>'2019-01-15_15-49-00',
            'db2_settings'=>array(
            'log_file_dir'=>'',
            'db_info'=>array(
            '0'=>array(
            'new_db_name'=>'',
            'db_path'=>'',
            'rc_point_in_time'=>'',
            'db_name'=>'',),),
            'db2_user'=>'',
            'db2_group'=>'',),
            'excl_path'=>array(),
            'blk_direct_copy'=>1,
            'compress'=>'',
            'encrypt_switch'=>'',
            'secret_key'=>'',
            'data_ip_uuid'=>'B8566905-411E-B2CD-A742-77B1346D8E84',
            'mysql_settings'=>array(
            'pool_uuid'=>'',
            'pool_name'=>'',
            'volume_uuid'=>'',
            'volume_name'=>'',
            'attach_point'=>'',
            'mysql_port'=>'',
            'mysql_user'=>'',
            'mysql_passwd'=>'',
            'snapshot_time'=>'',
            'mysql_rc_type'=>1,
            'mysql_rc_time'=>'',
            'time_out'=>1,
            'mysql_path'=>'',
            'snapshot_name'=>'',
            'log_ccopy'=>1,
            'log_volume_uuid'=>'',
            'log_mount_point'=>'',
            'data_dir'=>'',
            'lanfree'=>1,
            'mysql_host'=>'127.0.0.1',
            'mysql_startup_instance'=>1,
            'backup_mode'=>0,
            'tables'=>array(),),
            'oracle_rman_settings'=>array(
            'rman_num_streams_df'=>1,),
            'synthetic_bkup_settings'=>array(
            'mount_dir'=>'',
            'storage'=>array(),
            'volume_uuid'=>'BE54F165-107C-4435-18E0-0D6471A87FDE',
            'rc_dir'=>'',),
            'db_name'=>'',
            'content_type'=>0,
            'tables'=>'',
            'res_by_path'=>'',
            'informix_settings'=>array(
            'oper_user'=>'',
            'is_ori_machine'=>1,),
            'thread_num'=>1,
            'protocol'=>'',
            'fc_initiator_wwpn'=>'',
            'fc_target_wwpn'=>'',
            'data_return'=>0,
            'data_dir'=>'',
            'dm_settings'=>array(
            'dm_home'=>'',
            'host'=>'',
            'port'=>1,
            'user'=>'',
            'password'=>'',
            'is_create'=>'',
            'ini_path'=>'',
            'intance_name'=>'',
            'db_name'=>'',
            'data_dir'=>'',
            'content_type'=>'',
            'bk_type'=>1,
            'restore_switch'=>1,
            'recover_switch'=>1,
            'is_restore_resent'=>1,
            'rt_point'=>'',
            'is_restore_arch'=>'',
            'arch_type'=>1,
            'restore_time_type'=>1,
            'restore_until_time'=>'',
            'restore_until_lsn'=>'',
            'is_rt_arch_to_dir'=>1,
            'table_space'=>'',
            'arch_dir'=>'',
            'table_name'=>'',
            'schema_name'=>'',
            'arch_from'=>0,
            'is_force'=>0,
            'log_dirs'=>array(),
            'magic_num'=>'',
            'recover_time_type'=>0,
            'recover_until_time'=>'',
            'recover_until_lsn'=>'',
            'encrypt_switch'=>1,
            'encrypt_password'=>'',
            'encrypt_algorithm'=>'',
            'thread_num'=>4,
            'is_index'=>0,
            'is_constraint'=>1,
            'is_table_struct'=>0,
            'is_table_data'=>1,
            'system_user'=>'',),
            'rc_path_policy'=>0,
            'bk_storage'=>1,
            'obs_settings'=>array(),
            'storage_uuid'=>'',
            'storage_pool_uuid'=>'',
            'is_remote_rc'=>0,
            'gsdbt_settings'=>array(
            'gsdbt_home'=>'',
            'oper_user'=>'',
            'user'=>'',
            'password'=>'',
            'port'=>'',),
            'bk_crypt_type'=>'',
            'bk_file_crypt'=>'',
            'bk_crypt_key'=>'',
            'tape_uuid'=>'',
            'tape_pool_uuid'=>'',
            'tape_pool_name'=>'',
            'tape_name'=>'',
            'library_sn'=>'',
            'ukey_crypt_switch'=>1,
            'ukey_cred_uuid'=>'',
            'dedupe_uuid'=>'',
            'rc_method'=>1,
            'select_data_path'=>'',
            'pre_recover_script'=>'',
            'post_recover_script'=>'',
            'goldendb_settings'=>array(
            'manager_user_name'=>'',
            'manager_user_home_dir'=>'',
            'tenant_name'=>'',
            'db_user_name'=>'',
            'db_user_passwd'=>'',
            'custom_rc_point'=>false,
            'resultset_datetime'=>'',
            'backup_task_uuid'=>'',
            'backup_task_name'=>'',),
            'custom_type'=>1,
            'kingbasees_settings'=>array(
            'kes_bin'=>'',
            'kes_data'=>'',
            'oper_user'=>'',),),
            'force'=>false,
        );
        
        
        $res = $timingRecovery -> createTimingRecovery($arr);
        $this->do_assert($res);
    }

    public function testModifyTimingRecovery()
    {
        $timingRecovery = $this -> timingRecovery;
        $arr = array(
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
            'rc_data_path'=>'C:\\\\back\\\\',
            'rc_style'=>1,
            'wk_data_type'=>0,
            'rc_point_in_time'=>'2017-12-21_13-16-53',
            'db2_settings'=>array(
            'db2_user'=>'',
            'db2_group'=>'',
            'log_file_dir'=>'',
            'db_info'=>array(
            '0'=>array(
            'db_name'=>'',
            'new_db_name'=>'',
            'db_path'=>'',
            'rc_point_in_time'=>'',
            'task_uuid'=>'',
            'task_name'=>'',),),),
            'excl_path'=>array(),
            'data_ip_uuid'=>'7AD64D7A-7D1D-AC51-5DF1-29A58345A288',
            'res_by_path'=>'',
            'data_dir'=>'',
            'data_return'=>0,
            'rc_path_policy'=>0,
            'bk_storage'=>'',
            'dedupe_uuid'=>'',),
            'force'=>false,
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $timingRecovery -> modifyTimingRecovery($arr);
        $this->do_assert($res);
    }

    public function testDescribeTimingRecovery()
    {
        $timingRecovery = $this -> timingRecovery;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $timingRecovery -> describeTimingRecovery($arr);
        $this->do_assert($res);
    }

    public function testListTimingRecovery()
    {
        $timingRecovery = $this -> timingRecovery;
        $arr = array(
            'search_value'=>'',
            'page'=>1,
            'limit'=>1,
            'search_field'=>'',
        );
        
        
        $res = $timingRecovery -> listTimingRecovery($arr);
        $this->do_assert($res);
    }

    public function testDeleteTimingRecovery()
    {
        $timingRecovery = $this -> timingRecovery;
        $arr = array(
            'task_uuids'=>array(
            '0'=>'11111111-1111-1111-1111-111111111111',),
            'force'=>1,
            'del_clone'=>0,
        );
        
        
        $res = $timingRecovery -> deleteTimingRecovery($arr);
        $this->do_assert($res);
    }

    public function testListTimingRecoveryStatus()
    {
        $timingRecovery = $this -> timingRecovery;
        $arr = array(
            'task_uuids'=>array(
            '0'=>'11111111-1111-1111-1111-111111111111',),
            'force_refresh'=>1,
        );
        
        
        $res = $timingRecovery -> listTimingRecoveryStatus($arr);
        $this->do_assert($res);
    }

    public function testStartTimingRecovery()
    {
        $timingRecovery = $this -> timingRecovery;
        $arr = array(
            'task_uuids'=>array(),
            'operate'=>'start',
            'force'=>1,
        );
        
        
        $res = $timingRecovery -> startTimingRecovery($arr);
        $this->do_assert($res);
    }

    public function testStopTimingRecovery()
    {
        $timingRecovery = $this -> timingRecovery;
        $arr = array(
            'task_uuids'=>array(),
            'operate'=>'start',
            'force'=>1,
        );
        
        
        $res = $timingRecovery -> stopTimingRecovery($arr);
        $this->do_assert($res);
    }

    public function testDescribeGroupTimingRecovery()
    {
        $timingRecovery = $this -> timingRecovery;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $timingRecovery -> describeGroupTimingRecovery($arr);
        $this->do_assert($res);
    }

    public function testTimingRecoveryCheckDir()
    {
        $timingRecovery = $this -> timingRecovery;
        $arr = array(
            'check_type'=>1,
            'file_dir'=>array(),
            'node_uuid'=>'',
        );
        
        
        $res = $timingRecovery -> timingRecoveryCheckDir($arr);
        $this->do_assert($res);
    }

    public function testListTimingRecoveryDbInfo()
    {
        $timingRecovery = $this -> timingRecovery;
        $arr = array(
            'rc_data_path'=>'',
            'bk_uuid'=>'',
            'wk_data_type'=>'4',
            'bk_storage'=>1,
            'obs_settings'=>array(),
            'tape_uuid'=>'',
            'tape_pool_uuid'=>'',
            'tape_name'=>'',
            'library_sn'=>'',
        );
        
        
        $res = $timingRecovery -> listTimingRecoveryDbInfo($arr);
        $this->do_assert($res);
    }

    public function testListTimingRecoveryDb2Time()
    {
        $timingRecovery = $this -> timingRecovery;
        $arr = array(
            'bk_uuid'=>'B8566905-411E-B2CD-A742-77B1346D8E84',
            'rc_data_path'=>'E:\\\\mssqlBK\\\\ts-11111111-1111-1111-1111-111111111111\\\\
',
        );
        
        
        $res = $timingRecovery -> listTimingRecoveryDb2Time($arr);
        $this->do_assert($res);
    }

    public function testListTimingRecoveryGaussTime()
    {
        $timingRecovery = $this -> timingRecovery;
        $arr = array(
            'uuid'=>'',
            'bk_path'=>'',
        );
        
        
        $res = $timingRecovery -> listTimingRecoveryGaussTime($arr);
        $this->do_assert($res);
    }

    public function testDescribeTimingRecoveryDmBackupInfo()
    {
        $timingRecovery = $this -> timingRecovery;
        $arr = array(
            'node_uuid'=>'',
            'bk_path'=>'',
        );
        
        
        $res = $timingRecovery -> describeTimingRecoveryDmBackupInfo($arr);
        $this->do_assert($res);
    }

    public function testMountVolume()
    {
        $timingRecovery = $this -> timingRecovery;
        $arr = array(
            'volume_uuid'=>'',
            'node_uuid'=>'',
            'operate'=>'mount',
        );
        
        
        $res = $timingRecovery -> mountVolume($arr);
        $this->do_assert($res);
    }

    public function testStatusVolume()
    {
        $timingRecovery = $this -> timingRecovery;
        $arr = array(
            'volume_uuid'=>'',
            'node_uuid'=>'',
            'operate'=>'mount',
        );
        
        
        $res = $timingRecovery -> statusVolume($arr);
        $this->do_assert($res);
    }

    public function testTaskMountDir()
    {
        $timingRecovery = $this -> timingRecovery;
        $arr = array(
            'node_uuid'=>'',
            'bakdir'=>'',
            'rc_point'=>'',
            'bk_storage'=>'',
            'tape_pool_uuid'=>'',
            'tape_name'=>'',
            'library_sn'=>'',
        );
        
        
        $res = $timingRecovery -> taskMountDir($arr);
        $this->do_assert($res);
    }

    public function testListFileSnapshot()
    {
        $timingRecovery = $this -> timingRecovery;
        $arr = array(
            'volume_uuid'=>'',
        );
        
        
        $res = $timingRecovery -> listFileSnapshot($arr);
        $this->do_assert($res);
    }

    public function testListDbNames()
    {
        $timingRecovery = $this -> timingRecovery;
        $arr = array(
            'volume_uuid'=>'',
            'rc_point_in_time'=>'',
            'mount_point'=>'',
            'lanfree'=>1,
            'node_uuid'=>'',
        );
        
        
        $res = $timingRecovery -> listDbNames($arr);
        $this->do_assert($res);
    }

    public function testListMysqlDbTableInfo()
    {
        $timingRecovery = $this -> timingRecovery;
        $arr = array(
            'rc_time'=>'',
            'bk_path'=>'',
            'bk_uuid'=>'',
        );
        
        
        $res = $timingRecovery -> listMysqlDbTableInfo($arr);
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