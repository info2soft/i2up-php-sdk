<?php
namespace i2up\Test\v20250630\backupRule;

use i2up\backupRule\v20250630\BackupRule;
use i2up\common\Auth;
                
class BackupRuleTest extends \PHPUnit_Framework_TestCase
 {
    private $backupRule;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> backupRule = new BackupRule(new Auth());
    }

    public function testCreateBackup()
    {
        $backupRule = $this -> backupRule;
        $arr = array(
            'task_name'=>'',
            'biz_grp_list'=>array(),
            'wk_data_type'=>1,
            'timeout'=>1,
            'priority'=>1,
            'trans_mode'=>1,
            'unit_uuid'=>'',
            'tape_pool_uuid'=>'',
            'client_list'=>array(
            '0'=>array(
            'node_uuid'=>'',
            'init_main_client'=>1,),),
            'wk_path'=>array(),
            'excl_path'=>array(),
            'mirr_file_check'=>1,
            'mirr_sync_flag'=>'1',
            'mirr_open_type'=>0,
            'mirr_sync_attr'=>1,
            'ora_sid_name'=>'',
            'ora_home_path'=>'',
            'ora_content_type'=>0,
            'rman_compress_df'=>0,
            'rman_num_streams_df_max'=>4,
            'rman_filespertset_df'=>20,
            'rman_arch_retain'=>3,
            'rman_include_arch_flag'=>1,
            'rman_db_readonly'=>0,
            'rman_del_arch'=>1,
            'rman_filespertset_arch'=>20,
            'rman_include_spfile_flag'=>1,
            'rman_num_streams_arch'=>4,
            'bkup_schedule'=>array(
            '0'=>array(
            'sched_name'=>'',
            'backup_type'=>1,
            'retention'=>1,
            'start_window'=>array(
            '0'=>array(
            'wday'=>1,
            'from'=>'',
            'to'=>'',),),
            'bkup_window'=>array(
            '0'=>array(
            'wday'=>1,
            'from'=>'',
            'to'=>'',),),
            'bkup_one_time'=>1,
            'bkup_policy'=>1,
            'exclude_days'=>array(
            '0'=>'2023-06-02',),
            'cron_policies'=>'',),),
            'replica_uuids'=>array(),
            'thread_num_max'=>1,
            'pre_backup_script'=>'',
            'post_backup_script'=>'',
            'script_timeout'=>1,
            'expire_policy'=>0,
            'thread_num_min'=>1,
            'compress'=>1,
            'compress_switch'=>0,
            'encrypt_switch'=>1,
            'encrypt'=>1,
            'bk_file_crypt'=>1,
            'bk_crypt_type'=>1,
            'bk_crypt_key'=>'',
            'band_width'=>'',
            'ora_pdbs_name'=>array(),
            'retry_time'=>5,
            'retry_num'=>5,
            'rman_num_streams_df_min'=>4,
            'disable'=>1,
            'effective_time_switch'=>1,
            'effective_time'=>1,
            'hcs_uuid'=>'',
            'hcs_instance_uuid'=>'',
            'src_instance_uuid'=>'',
            'auto_discover'=>0,
            'db_names'=>array(
            '0'=>'db_name1',
            '1'=>'db_name2',),
            'log_truncate'=>1,
            'backup_method'=>0,
            'content_type'=>1,
            'db_tables'=>array(
            '0'=>'db_name.schema_name.table_name',),
            'db_schemas'=>array(
            '0'=>'db_name.schema_name',),
            'fragment_switch'=>1,
            'fragment_size'=>1,
            'sto_uuid'=>'',
            'bucket_uuid'=>'',
            'bk_encrypt_password'=>'',
            'bk_encrypt_algorithm'=>'',
            'bk_thread_num'=>1,
            'bk_encrypt_switch'=>1,
            'bk_compress_switch'=>1,
            'bk_compress_level'=>1,
            'bk_encrypt'=>1,
            'data_source'=>array(
            'nbu'=>array(
            'policy_type'=>1,
            'client_name'=>'',
            'start_datetime'=>'',
            'end_datetime'=>'',
            'expiry_datetime'=>'',
            'policy_name'=>'',),),
            'close_compression'=>1,
            'standby_backup'=>1,
            'db_table_spaces'=>array(
            '0'=>'db_name.table_space',),
            'backup_strategy'=>1,
            'num_parallel_collections'=>1,
            'backup_thread_score'=>1,
            'log_archive_concurrency'=>1,
            'password_bkset_switch'=>1,
            'password_bkset'=>'',
            'data_encrypt_compress_switch'=>'',
            'data_encrypt_source'=>'',
            'data_compress_level'=>'',
            'data_encrypt_type'=>'',
            'data_encrypt_compress_thread_num'=>1,
            'bk_compress_type'=>1,
            'inst_select_plan'=>1,
            'dmdsc_instance'=>array(
            '0'=>array(
            'ip'=>'',
            'level'=>'',
            'inst_port'=>'',
            'status'=>'',
            'instance_uuid'=>'',),),
            'mount_point'=>'',
            'parallel_process'=>'',
            'retry_switch'=>1,
            'retry_times'=>1,
            'retry_interval'=>1,
            'clone_task_uuid'=>'',
            'partial_success'=>1,
            'consist_strategy'=>'',
            'db_partitions'=>array(),
            'archive_path'=>'',
            'backup_way'=>1,
            'link_protocol'=>1,
            'wwpn'=>array(
            'initiator'=>'',
            'target'=>'',),
            'data_storage'=>array(
            'init_cap'=>1,
            'init_cap_unit'=>'',
            'init_cap_type'=>1,
            'expand_type'=>1,
            'expand'=>1,
            'filesystem_type'=>1,
            'mount_point'=>'',
            'mount_point_type'=>1,
            'block_size'=>1,
            'sparse'=>1,
            'dedup'=>1,
            'compress'=>1,
            'expand_unit'=>1,),
            'log_storage'=>array(
            'mount_point'=>'',
            'mount_point_type'=>1,
            'dedup'=>1,
            'compress'=>1,),
            'parallel_num'=>1,
            'prune_log_mode'=>1,
            'prune_log_mode_unit'=>1,
            'prune_log_mode_num'=>1,
            'backup_plan'=>'',
            'exclude_db_names'=>array(),
            'read_stream_num'=>1,
            'read_stream_num_type'=>1,
            'client_type'=>1,
            'instance_list'=>array(
            '0'=>array(
            'instance_uuid'=>'',
            'instance_name'=>'',),),
            'data_manager_uuid'=>'',
        );
        
        
        $res = $backupRule -> createBackup($arr);
        $this->do_assert($res);
    }

    public function testModifyBackupRule()
    {
        $backupRule = $this -> backupRule;
        $arr = array(
            'task_name'=>'',
            'biz_grp_list'=>array(),
            'wk_data_type'=>1,
            'timeout'=>1,
            'priority'=>1,
            'trans_mode'=>1,
            'unit_uuid'=>'',
            'tape_pool_uuid'=>'',
            'client_list'=>array(
            '0'=>array(
            'node_uuid'=>'',),),
            'wk_path'=>array(),
            'excl_path'=>array(),
            'mirr_file_check'=>1,
            'mirr_sync_flag'=>'1',
            'mirr_open_type'=>0,
            'mirr_sync_attr'=>1,
            'ora_sid_name'=>'',
            'ora_home_path'=>'',
            'ora_content_type'=>0,
            'rman_compress_df'=>0,
            'rman_num_streams_df_max'=>4,
            'rman_filespertset_df'=>20,
            'rman_arch_retain'=>3,
            'rman_include_arch_flag'=>1,
            'rman_db_readonly'=>0,
            'rman_del_arch'=>1,
            'rman_filespertset_arch'=>20,
            'rman_include_spfile_flag'=>1,
            'rman_num_streams_arch'=>4,
            'bkup_schedule'=>array(
            '0'=>array(
            'sched_name'=>'',
            'backup_type'=>1,
            'retention'=>1,
            'start_window'=>array(
            '0'=>array(
            'wday'=>'',
            'from'=>'',
            'to'=>'',),),
            'bkup_window'=>array(
            '0'=>array(
            'wday'=>'',
            'from'=>'',
            'to'=>'',),),
            'bkup_one_time'=>1,
            'bkup_policy'=>1,
            'cron_type'=>1,
            'exclude_days'=>array(
            '0'=>'2023-06-02',),
            'cron_policies'=>'',),),
            'replica_uuid'=>'',
            'thread_num_max'=>1,
            'pre_backup_script'=>'',
            'post_backup_script'=>'',
            'script_timeout'=>1,
            'expire_policy'=>0,
            'thread_num_min'=>'',
            'compress'=>1,
            'compress_switch'=>0,
            'encrypt_switch'=>1,
            'encrypt'=>1,
            'secret_key'=>'',
            'bk_file_crypt'=>1,
            'bk_crypt_type'=>1,
            'bk_crypt_key'=>'',
            'ukey_crypt_switch'=>1,
            'ukey_cred_uuid'=>'',
            'band_width'=>'',
            'random_str'=>'',
            'rman_num_streams_df_min'=>1,
            'disable'=>1,
            'script_coverage'=>1,
            'script_path'=>'',
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $backupRule -> modifyBackupRule($arr);
        $this->do_assert($res);
    }

    public function testDescribeBackupRule()
    {
        $backupRule = $this -> backupRule;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $backupRule -> describeBackupRule($arr);
        $this->do_assert($res);
    }

    public function testListBackupRule()
    {
        $backupRule = $this -> backupRule;
        $arr = array(
            'page'=>1,
            'limit'=>1,
            'search_value'=>'test',
            'search_field'=>'task_name',
            'order_by'=>'task_name',
            'direction'=>'DESC',
            'filter_by_biz_grp'=>1,
            'status'=>'',
            'node_name'=>'',
            'hostname'=>'',
            'where_args'=>array(
            'wk_data_type'=>'',
            'task_uuid'=>'',
            'username'=>'',
            'backup_way'=>1,),
            'like_args'=>array(
            'task_name'=>'',
            'unit_name'=>'',),
        );
        
        
        $res = $backupRule -> listBackupRule($arr);
        $this->do_assert($res);
    }

    public function testDeleteBackupRule()
    {
        $backupRule = $this -> backupRule;
        $arr = array(
            'task_uuids'=>array(),
            'client_list'=>array(
            '0'=>array(
            'task_uuid'=>'',
            'node_uuid'=>array(),),),
            'force'=>0,
        );
        
        
        $res = $backupRule -> deleteBackupRule($arr);
        $this->do_assert($res);
    }

    public function testEnableBackupRule()
    {
        $backupRule = $this -> backupRule;
        $arr = array(
            'operate'=>'',
            'task_uuids'=>array(),
            'client_list'=>array(
            '0'=>array(
            'task_uuid'=>'',
            'node_uuid'=>'',),),
            'sched_name'=>'',
            'new_task_name'=>'',
        );
        
        
        $res = $backupRule -> enableBackupRule($arr);
        $this->do_assert($res);
    }

    public function testDisableBackupRule()
    {
        $backupRule = $this -> backupRule;
        $arr = array(
            'operate'=>'',
            'task_uuids'=>array(),
            'client_list'=>array(
            '0'=>array(
            'task_uuid'=>'',
            'node_uuid'=>'',),),
            'sched_name'=>'',
            'new_task_name'=>'',
        );
        
        
        $res = $backupRule -> disableBackupRule($arr);
        $this->do_assert($res);
    }

    public function testManualStartBackupRule()
    {
        $backupRule = $this -> backupRule;
        $arr = array(
            'operate'=>'',
            'task_uuids'=>array(),
            'client_list'=>array(
            '0'=>array(
            'task_uuid'=>'',
            'node_uuid'=>'',),),
            'sched_name'=>'',
            'new_task_name'=>'',
        );
        
        
        $res = $backupRule -> manualStartBackupRule($arr);
        $this->do_assert($res);
    }

    public function testCloneBackupRule()
    {
        $backupRule = $this -> backupRule;
        $arr = array(
            'operate'=>'',
            'task_uuids'=>array(),
            'client_list'=>array(
            '0'=>array(
            'task_uuid'=>'',
            'node_uuid'=>'',),),
            'sched_name'=>'',
            'new_task_name'=>'',
        );
        
        
        $res = $backupRule -> cloneBackupRule($arr);
        $this->do_assert($res);
    }

    public function testStopBackupRule()
    {
        $backupRule = $this -> backupRule;
        $arr = array(
            'operate'=>'',
            'task_uuids'=>array(),
            'client_list'=>array(
            '0'=>array(
            'task_uuid'=>'',
            'node_uuid'=>'',),),
            'sched_name'=>'',
            'new_task_name'=>'',
        );
        
        
        $res = $backupRule -> stopBackupRule($arr);
        $this->do_assert($res);
    }

    public function testRebootBackupRule()
    {
        $backupRule = $this -> backupRule;
        $arr = array(
            'operate'=>'',
            'task_uuids'=>array(),
            'client_list'=>array(
            '0'=>array(
            'task_uuid'=>'',
            'node_uuid'=>'',),),
            'sched_name'=>'',
            'new_task_name'=>'',
        );
        
        
        $res = $backupRule -> rebootBackupRule($arr);
        $this->do_assert($res);
    }

    public function testListBackupRuleStatus()
    {
        $backupRule = $this -> backupRule;
        $arr = array(
            'task_uuids'=>array(),
        );
        
        
        $res = $backupRule -> listBackupRuleStatus($arr);
        $this->do_assert($res);
    }

    public function testCleanNbuCache()
    {
        $backupRule = $this -> backupRule;
        $arr = array(
            'task_uuid'=>'',
        );
        
        
        $res = $backupRule -> cleanNbuCache($arr);
        $this->do_assert($res);
    }

    public function testDescribeScriptPath()
    {
        $backupRule = $this -> backupRule;
        $arr = array(
            'task_uuid'=>'',
        );
        
        
        $res = $backupRule -> describeScriptPath($arr);
        $this->do_assert($res);
    }

    public function testDescribeScript()
    {
        $backupRule = $this -> backupRule;
        $arr = array(
            'task_uuid'=>'',
        );
        
        
        $res = $backupRule -> describeScript($arr);
        $this->do_assert($res);
    }

    public function testModifyScript()
    {
        $backupRule = $this -> backupRule;
        $arr = array(
            'task_uuid'=>'',
            'script'=>'',
        );
        
        
        $res = $backupRule -> modifyScript($arr);
        $this->do_assert($res);
    }

    public function testListDorisDb()
    {
        $backupRule = $this -> backupRule;
        $arr = array(
            'node_uuid'=>'',
        );
        
        
        $res = $backupRule -> listDorisDb($arr);
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