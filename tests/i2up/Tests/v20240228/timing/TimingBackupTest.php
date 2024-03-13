<?php
namespace i2up\Test\v20240228\timing;

use i2up\timing\v20240228\TimingBackup;
use i2up\common\Auth;
                
class TimingBackupTest extends \PHPUnit_Framework_TestCase
 {
    private $timingBackup;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> timingBackup = new TimingBackup(new Auth());
    }

    public function testDescribeTimingBackupMssqlSource()
    {
        $timingBackup = $this -> timingBackup;
        $arr = array(
            'wk_uuid'=>'22D03E06-94D0-5E2C-336E-4BEEC2D28EC4',
        );
        $res = $timingBackup -> describeTimingBackupMssqlSource($arr);
        $this->do_assert($res);
    }

    public function testVerifyTimingBackupOracleInfo()
    {
        $timingBackup = $this -> timingBackup;
        $arr = array(
            'oracle_settings'=>array(
            'ora_sid_name'=>'',
            'ora_port'=>1,
            'ora_home_path'=>'',
            'ora_passwd'=>'Info1234',),
            'wk_uuid'=>'67E33CDB-D75B-15B3-367D-50C764F5A26F',
        );
        $res = $timingBackup -> verifyTimingBackupOracleInfo($arr);
        $this->do_assert($res);
    }

    public function testDescribeTimingBackupOracleContent()
    {
        $timingBackup = $this -> timingBackup;
        $arr = array(
            'oracle_settings'=>array(
            'ora_passwd'=>'Info1234',
            'ora_port'=>1,
            'ora_sid_name'=>'',
            'ora_content_type'=>0,),
            'wk_uuid'=>'67E33CDB-D75B-15B3-367D-50C764F5A26F',
        );
        $res = $timingBackup -> describeTimingBackupOracleContent($arr);
        $this->do_assert($res);
    }

    public function testDescibeTimingBackupOracleSriptPath()
    {
        $timingBackup = $this -> timingBackup;
        $arr = array(
            'wk_uuid'=>'67E33CDB-D75B-15B3-367D-50C764F5A26F',
        );
        $res = $timingBackup -> descibeTimingBackupOracleSriptPath($arr);
        $this->do_assert($res);
    }

    public function testListTimingBackupMssqlDbList()
    {
        $timingBackup = $this -> timingBackup;
        $arr = array(
            'wk_uuid'=>'67E33CDB-D75B-15B3-367D-50C764F5A26F',
            'mssql_settings'=>array(
            'win_verify'=>0,
            'instance_name'=>'MSSQLSERVER',
            'pass_word'=>'123456',
            'data_source'=>'WIN-EGKN86NF3PM',
            'user_id'=>'sa',
            'port'=>'',
            'protocol'=>1,),
        );
        $res = $timingBackup -> listTimingBackupMssqlDbList($arr);
        $this->do_assert($res);
    }

    public function testVerifyTimingBackupOracleLogin()
    {
        $timingBackup = $this -> timingBackup;
        $arr = array(
            'wk_uuid'=>'',
            'oracle_settings'=>array(
            'ora_sid_name'=>'',
            'ora_login_name'=>'',
            'ora_login_pwd'=>'',
            'ora_server_name'=>'',
            'ora_server_port'=>'',),
        );
        $res = $timingBackup -> verifyTimingBackupOracleLogin($arr);
        $this->do_assert($res);
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
            'ora_home_path'=>'',
            'ora_pdbs_name'=>'',
            'ora_login_name'=>'',
            'ora_login_pwd'=>'',
            'ora_server_name'=>'',
            'ora_server_port'=>'',
            'pool_uuid'=>'',
            'volume_uuid'=>'',
            'volume_name'=>'',
            'attach_point'=>'',
            'pool_name'=>'',
            'ora_tab_mode'=>1,
            'ora_tab_pdb_name'=>'',
            'ora_tab_names'=>array(
            '0'=>array(
            'user'=>'',
            'ori_table'=>'',
            'tgt_table'=>'',),),
            'ora_tab_aux_path'=>'',
            'ora_tab_rctype'=>1,
            'ora_tab_time'=>'',
            'ora_tab_scn'=>'',
            'ora_tab_log'=>'',
            'log_ccopy'=>1,
            'log_volume_uuid'=>'',
            'log_mount_point'=>'',),
            'wk_data_type'=>1,
            'task_name'=>'testTiming',
            'backup_type'=>0,
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
            'rman_filespertset_df'=>20,
            'rman_db_readonly'=>0,
            'rman_compress_df'=>1,
            'rman_include_spfile_flag'=>1,
            'rman_arch_retain'=>3,),
            'compress'=>0,
            'encrypt_switch'=>0,
            'wk_path'=>array(
            '0'=>'E:\\test\\',),
            'excl_path'=>array(),
            'bk_data_type'=>1,
            'mirr_blk_size'=>0,
            'bk_path'=>array(
            '0'=>'E:\\t\\',),
            'blk_direct_copy'=>0,
            'mirr_open_type'=>0,
            'mssql_settings'=>array(
            'instance_name'=>'MSSQLSERVER',
            'time_out'=>'',
            'data_source'=>'',
            'win_verify'=>1,
            'user_id'=>'',
            'pass_word'=>'',
            'port'=>'',
            'protocol'=>1,
            'db_info'=>array(),
            'lanfree'=>1,
            'volume_uuid'=>'',
            'mount_point'=>'',),
            'wk_uuid'=>'67E33CDB-D75B-15B3-367D-50C764F5A26F',
            'bk_uuid'=>'B8566905-411E-B2CD-A742-77B1346D8E84',
            'bkup_policy'=>2,
            'bkup_window'=>array(
            'sched_time_start'=>'00:00',
            'sched_time_end'=>'00:00',),
            'bkup_one_time'=>1547538235,
            'bkup_schedule'=>array(
            '0'=>array(
            'limit'=>39,
            'sched_day'=>29,
            'sched_every'=>2,
            'sched_time'=>'08:02',
            'sched_gap_min'=>40,
            'backup_type'=>1,),),
            'task_type'=>0,
            'file_check_dir'=>0,
            'random_str'=>'11111111-1111-1111-1111-111111111111',
            'file_check_switch'=>0,
            'timing_type'=>1,
            'data_ip_uuid'=>'B8566905-411E-B2CD-A742-77B1346D8E84',
            'bk_file_crypt'=>0,
            'mirr_file_check'=>0,
            'mysql_settings'=>array(
            'pool_uuid'=>'',
            'pool_name'=>'',
            'volume_uuid'=>'',
            'volume_name'=>'',
            'attach_point'=>'',
            'mysql_port'=>'',
            'mysql_user'=>'',
            'mysql_passwd'=>'',
            'time_out'=>1,
            'mysql_path'=>'',
            'log_ccopy'=>1,
            'log_volume_uuid'=>'',
            'log_mount_point'=>'',
            'log_volume_name'=>'',
            'data_dir'=>'',
            'config_path'=>'/etc/my.cnf',
            'lanfree'=>1,
            'mysql_host'=>'127.0.0.1',
            'backup_mode'=>0,
            'tables'=>array(),),
            'tape_uuid'=>'E8566905-411E-B2CD-A742-77B1346D8E84',
            'archive_pen'=>0,
            'library_sn'=>'SYZZY_A',
            'content_type'=>1,
            'db_name'=>'',
            'tables'=>'',
            'bk_crypt_key'=>'',
            'bk_crypt_type'=>1,
            'informix_settings'=>array(
            'oper_user'=>'',
            'is_ori_machine'=>1,
            'config_recover'=>1,
            'informix_instance'=>array(
            'is_default'=>1,
            'install_dir'=>'',
            'instance_name'=>'',
            'onconfig_name'=>'',),
            'verify_only'=>1,),
            'encrypt'=>1,
            'thread_num'=>0,
            'dm_settings'=>array(
            'dm_home'=>'',
            'host'=>'',
            'port'=>'',
            'user'=>'',
            'password'=>'',
            'content_type'=>1,
            'is_bk_arch'=>1,
            'is_del_arch'=>1,
            'specify_time'=>'',
            'time_type'=>1,
            'since_time'=>'',
            'since_lsn'=>'',
            'compress'=>0,
            'compress_switch'=>0,
            'encrypt_switch'=>0,
            'encrypt_type'=>1,
            'encrypt_password'=>'',
            'encrypt_algorithm'=>'',
            'parallel_num'=>4,
            'thread_num'=>4,
            'block_size'=>1,
            'parallel_switch'=>0,
            'block_unit'=>'',
            'table_space'=>'',
            'table_name'=>'',
            'schema_name'=>'',
            'system_user'=>'',),
            'timeout'=>'',
            'db2_settings'=>array(
            'db2_user'=>'',
            'db2_group'=>'',
            'db_info'=>array(
            '0'=>array(
            'db_name'=>'',),),),
            'synthetic_bkup_settings'=>array(
            'pool_uuid'=>'',
            'pool_name'=>'',
            'volume_uuid'=>'',
            'volume_name'=>'',
            'lanfree'=>'',),
            'pre_backup_script'=>'',
            'post_backup_script'=>'',
            'script_timeout'=>1,
            'retry_time'=>5,
            'retry_num'=>5,
            'obs_settings'=>array(
            'sto_uuid'=>'',
            'bucket_name'=>'',
            'bucket_path'=>'',),
            'bk_storage'=>1,
            'inc_type'=>1,
            'tape_pool_uuid'=>'',
            'tape_name'=>'',
            'tape_reserve'=>1,
            'tape_pool_name'=>'',
            'gsdbt_settings'=>array(
            'gsdbt_home'=>'',
            'oper_user'=>'',
            'user'=>'',
            'password'=>'',
            'port'=>'',),
            'ukey_crypt_switch'=>1,
            'ukey_cred_uuid'=>'',
            'dedupe_uuid'=>'',
            'storage_pool_uuid'=>'',
            'goldendb_settings'=>array(
            'manager_user_name'=>'',
            'manager_user_home_dir'=>'',
            'tenant_name'=>'',
            'db_user_name'=>'',
            'db_user_passwd'=>'',),
            'custom_type'=>1,
            'kingbasees_settings'=>array(
            'kes_bin'=>'',
            'kes_data'=>'',
            'oper_user'=>'',
            'user'=>'',
            'password'=>'',
            'port'=>'54321',),
            'proxy_uuid'=>'',),
        );
        $res = $timingBackup -> createTimingBackup($arr);
        $this->do_assert($res);
    }

    public function testDescribeTimingBackup()
    {
        $timingBackup = $this -> timingBackup;
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111',
        );
        $res = $timingBackup -> describeTimingBackup($arr);
        $this->do_assert($res);
    }

    public function testModifyTimingBackup()
    {
        $timingBackup = $this -> timingBackup;
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111',
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
            'ora_home_path'=>'',),
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
            'rman_filespertset_df'=>20,),
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
            'db_info'=>array(
            '0'=>array(
            'db_name'=>'',),),
            'pass_word'=>'',),
            'wk_uuid'=>'0DD4E727-70AB-62C6-BEB5-D012DFAE46E3',
            'bk_uuid'=>'Jane',
            'bkup_policy'=>0,
            'bkup_window'=>array(
            'sched_time_start'=>'15:18',
            'sched_time_end'=>'14:37',),
            'bkup_one_time'=>1515568566,
            'bkup_schedule'=>array(
            '0'=>array(
            'limit'=>25,
            'sched_day'=>24,
            'sched_every'=>2,
            'sched_time'=>'04:07',
            'sched_gap_min'=>49,),),
            'task_type'=>0,
            'random_str'=>'11111111-1111-1111-1111-111111111111',
            'data_ip_uuid'=>'0DD4E727-70AB-62C6-BEB5-D012DFAE46E3',
            'db2_settings'=>array(
            'db2_user'=>'',
            'db2_group'=>'',
            'db_info'=>array(
            '0'=>array(
            'db_name'=>'',
            'task_uuid'=>'',
            'task_name'=>'',),),),
            'bk_storage'=>'',
            'dedupe_uuid'=>'',),
        );
        $res = $timingBackup -> modifyTimingBackup($arr);
        $this->do_assert($res);
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
            'where_args[timing_type]'=>1,
            'status'=>'',
        );
        $res = $timingBackup -> listTimingBackup($arr);
        $this->do_assert($res);
    }

    public function testListTimingBackupStatus()
    {
        $timingBackup = $this -> timingBackup;
        $arr = array(
            'task_uuids'=>array(
            '0'=>'11111111-1111-1111-1111-111111111111',),
            'force_refresh'=>1,
        );
        $res = $timingBackup -> listTimingBackupStatus($arr);
        $this->do_assert($res);
    }

    public function testDeleteTimingBackup()
    {
        $timingBackup = $this -> timingBackup;
        $arr = array(
            'task_uuids'=>array(
            '0'=>'11111111-1111-1111-1111-111111111111',),
            'del_policy'=>1,
            'force'=>1,
            'recycle'=>0,
        );
        $res = $timingBackup -> deleteTimingBackup($arr);
        $this->do_assert($res);
    }

    public function testStartTimingBackup()
    {
        $timingBackup = $this -> timingBackup;
        $arr = array(
            'operate'=>'start',
            'task_uuids'=>array(
            '0'=>'11111111-1111-1111-1111-111111111111',),
            'bk_type'=>1,
            'new_task_name'=>'',
        );
        $res = $timingBackup -> startTimingBackup($arr);
        $this->do_assert($res);
    }

    public function testStopTimingBackup()
    {
        $timingBackup = $this -> timingBackup;
        $arr = array(
            'operate'=>'stop',
            'task_uuids'=>array(
            '0'=>'11111111-1111-1111-1111-111111111111',),
            'bk_type'=>1,
            'new_task_name'=>'',
        );
        $res = $timingBackup -> stopTimingBackup($arr);
        $this->do_assert($res);
    }

    public function testStartImmediateTimingBackup()
    {
        $timingBackup = $this -> timingBackup;
        $arr = array(
            'operate'=>'start_immediately',
            'task_uuids'=>array(
            '0'=>'11111111-1111-1111-1111-111111111111',),
            'bk_type'=>1,
            'new_task_name'=>'',
        );
        $res = $timingBackup -> startImmediateTimingBackup($arr);
        $this->do_assert($res);
    }

    public function testPauseTimingBackup()
    {
        $timingBackup = $this -> timingBackup;
        $arr = array(
            'operate'=>'pause',
            'task_uuids'=>array(
            '0'=>'11111111-1111-1111-1111-111111111111',),
            'bk_type'=>1,
            'new_task_name'=>'',
        );
        $res = $timingBackup -> pauseTimingBackup($arr);
        $this->do_assert($res);
    }

    public function testProceedTimingBackup()
    {
        $timingBackup = $this -> timingBackup;
        $arr = array(
            'operate'=>'proceed',
            'task_uuids'=>array(
            '0'=>'11111111-1111-1111-1111-111111111111',),
            'bk_type'=>1,
            'new_task_name'=>'',
        );
        $res = $timingBackup -> proceedTimingBackup($arr);
        $this->do_assert($res);
    }

    public function testCloneTimingBackup()
    {
        $timingBackup = $this -> timingBackup;
        $arr = array(
            'operate'=>'clone',
            'task_uuids'=>array(
            '0'=>'11111111-1111-1111-1111-111111111111',),
            'bk_type'=>1,
            'new_task_name'=>'',
        );
        $res = $timingBackup -> cloneTimingBackup($arr);
        $this->do_assert($res);
    }

    public function testShowTimingBackupDetailInfo()
    {
        $timingBackup = $this -> timingBackup;
        $arr = array(
            'task_uuid'=>'',
            'timing_type'=>3,
        );
        $res = $timingBackup -> showTimingBackupDetailInfo($arr);
        $this->do_assert($res);
    }

    public function testDescibeDmDbInfo()
    {
        $timingBackup = $this -> timingBackup;
        $arr = array(
            'dm_home'=>'',
            'host'=>'',
            'port'=>'',
            'user'=>'',
            'password'=>'',
            'type'=>1,
            'schema_name'=>'',
            'node_uuid'=>'',
        );
        $res = $timingBackup -> descibeDmDbInfo($arr);
        $this->do_assert($res);
    }

    public function testListGauss()
    {
        $timingBackup = $this -> timingBackup;
        $arr = array(
            'node_uuid'=>'',
            'content_type'=>1,
            'page_no'=>'',
            'page_size'=>'',
            'top_dir'=>'',
        );
        $res = $timingBackup -> listGauss($arr);
        $this->do_assert($res);
    }

    public function testListTimingBackupPoint()
    {
        $timingBackup = $this -> timingBackup;
        $arr = array(
            'task_uuid'=>'',
        );
        $res = $timingBackup -> listTimingBackupPoint($arr);
        $this->do_assert($res);
    }

    public function testDeleteTimingBackupPoint()
    {
        $timingBackup = $this -> timingBackup;
        $arr = array(
            'task_uuid'=>'',
            'time_point'=>'',
        );
        $res = $timingBackup -> deleteTimingBackupPoint($arr);
        $this->do_assert($res);
    }

    public function testListBakVer()
    {
        $timingBackup = $this -> timingBackup;
        $arr = array(
            'task_uuid'=>'',
        );
        $res = $timingBackup -> listBakVer($arr);
        $this->do_assert($res);
    }

    public function testBakDataArchive()
    {
        $timingBackup = $this -> timingBackup;
        $arr = array(
            'task_uuid'=>'',
            'list'=>array(
            '0'=>array(
            'time'=>'',
            'size'=>'',
            'data_type'=>'',
            'list_map'=>array(),),),
        );
        $res = $timingBackup -> bakDataArchive($arr);
        $this->do_assert($res);
    }

    public function testDescribeGoldeb()
    {
        $timingBackup = $this -> timingBackup;
        $arr = array(
            'node_uuid'=>'',
            'is_backup'=>'',
            'backup_task_uuid'=>'',
            'tenant_name'=>'',
        );
        $res = $timingBackup -> describeGoldeb($arr);
        $this->do_assert($res);
    }

    public function testVerifyGoldeb()
    {
        $timingBackup = $this -> timingBackup;
        $arr = array(
            'node_uuid'=>'',
            'bak_dir'=>'',
            'golden_db_opt'=>array(
            'manager_user_name'=>'',
            'manager_user_home_dir'=>'',
            'tenant_name'=>'',
            'db_user_name'=>'',
            'db_user_passwd'=>'',),
            'is_backup'=>1,
        );
        $res = $timingBackup -> verifyGoldeb($arr);
        $this->do_assert($res);
    }

    public function testListCustomTypes()
    {
        $timingBackup = $this -> timingBackup;
        $arr = array();
        $res = $timingBackup -> listCustomTypes($arr);
        $this->do_assert($res);
    }

    private function do_assert($res)
    {
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}