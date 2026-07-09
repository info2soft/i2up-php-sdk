<?php
namespace i2up\Test\v20260626\backupRule;

use i2up\backupRule\v20260626\BackupRuleV3;
use i2up\common\Auth;
use PHPUnit\Framework\TestCase;
                
class BackupRuleV3Test extends TestCase
 {
    private $backupRuleV3;
    
    public function setUp():void
    {
        parent::setup();
        $this -> backupRuleV3 = new BackupRuleV3(new Auth());
    }

    public function testCreateBackup()
    {
        $backupRuleV3 = $this -> backupRuleV3;
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
            'init_main_client'=>1,
            'node_list'=>array(
            '0'=>array(
            'node_uuid'=>'',
            'node_name'=>'',
            'backup_scripts'=>array(
            '0'=>array(
            'script_name'=>'',
            'script_path'=>'',
            'config_path'=>'',
            'script_file_name'=>'',
            'config_file_name'=>'',
            'config'=>array(
            '0'=>array(
            'params'=>array(
            '0'=>array(
            'param_name'=>'',
            'param_value'=>'',
            'encrypt_switch'=>1,),),),),),),
            'clean_scripts'=>array(),),),),),
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
            'cron_policies'=>'',
            'unit_uuid'=>'',
            'reload_storage_unit'=>1,
            'dedup_end'=>1,
            'tape_pool_uuid'=>'',),),
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
            'policy_name'=>'',),
            'data_dump'=>array(
            'policy_type'=>'',
            'client_name'=>'',
            'policy_name'=>'',
            'start_datetime'=>'',
            'end_datetime'=>'',
            'expiry_datetime'=>'',),),
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
            'expand_unit'=>1,
            'raw_dev'=>1,
            'diskgroup_name'=>'',),
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
            'plus_archivelog'=>1,
            'part_table_restore'=>1,
            'device_uuid'=>'',
            'access_user'=>'',
            'ora_content'=>array(),
            'ora_user'=>'',
            'ora_passwd'=>'',
            'ora_dump'=>1,
            'ora_compress'=>1,
            'orac_cache_dir'=>'',
            'ignore_special_err'=>0,
            'backup_source'=>1,
            'limit_log_speed'=>1,
            'limit_full_speed'=>1,
            'backup_detail'=>array(
            '0'=>array(
            'name'=>'',
            'type'=>'',
            'id'=>'',
            'mailbox'=>'',),),
            'file_filter_policy'=>1,
            'file_filter_regex'=>array(),
            'dir_filter_policy'=>1,
            'dir_filter_regex'=>array(),
            'exclude_db_indices'=>array(),
            'db_indices'=>array(),
            'backup_path'=>'',
            'all_indices'=>1,
            'max_lag'=>1,
            'log_cache_dir'=>'',
            'allow_log_bk_to_full'=>1,
            'dump_format'=>1,
            'verify_switch'=>1,
            'verify_option'=>1,
            'all_db'=>1,
            'allow_resume'=>1,
            'failed_bkset_retain_time'=>1,
            'folder_filter'=>1,
            'folder_filter_option'=>1,
            'mailbox_parallel'=>1,
            'folder'=>'',
            'disk_name'=>'',
            'log_backup_instance'=>array(
            'inst_name'=>'',
            'inst_port'=>1,
            'inst_ip'=>'',
            'inst_client'=>'',
            'status'=>'',
            'type'=>'',
            'level'=>'',),
            'list_stream_num_type'=>1,
            'list_stream_num'=>1,
            'channel_distribute_mode'=>1,
            'backup_bandwidth'=>0,
            'backup_compress_type'=>1,
            'backup_compress_level'=>1,
            'backup_set_ttl'=>1,
        );
        
        
        $res = $backupRuleV3 -> createBackup($arr);
        $this->do_assert($res);
    }

    public function testModifyBackupRule()
    {
        $backupRuleV3 = $this -> backupRuleV3;
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
        
        $res = $backupRuleV3 -> modifyBackupRule($arr);
        $this->do_assert($res);
    }

    public function testBatchModifyBackupRule()
    {
        $backupRuleV3 = $this -> backupRuleV3;
        $arr = array(
            'band_width'=>'',
            'task_uuids'=>array(),
        );
        
        
        $res = $backupRuleV3 -> batchModifyBackupRule($arr);
        $this->do_assert($res);
    }

    public function testDescribeBackupRule()
    {
        $backupRuleV3 = $this -> backupRuleV3;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $backupRuleV3 -> describeBackupRule($arr);
        $this->do_assert($res);
    }

    public function testListBackupRule()
    {
        $backupRuleV3 = $this -> backupRuleV3;
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
            'backup_way'=>1,
            'backup_method'=>1,),
            'like_args'=>array(
            'task_name'=>'',
            'unit_name'=>'',),
            'with_biz_grp'=>1,
        );
        
        
        $res = $backupRuleV3 -> listBackupRule($arr);
        $this->do_assert($res);
    }

    public function testDeleteBackupRule()
    {
        $backupRuleV3 = $this -> backupRuleV3;
        $arr = array(
            'task_uuids'=>array(),
            'client_list'=>array(
            '0'=>array(
            'task_uuid'=>'',
            'node_uuid'=>array(),),),
            'force'=>0,
        );
        
        
        $res = $backupRuleV3 -> deleteBackupRule($arr);
        $this->do_assert($res);
    }

    public function testEnableBackupRule()
    {
        $backupRuleV3 = $this -> backupRuleV3;
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
        
        
        $res = $backupRuleV3 -> enableBackupRule($arr);
        $this->do_assert($res);
    }

    public function testDisableBackupRule()
    {
        $backupRuleV3 = $this -> backupRuleV3;
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
        
        
        $res = $backupRuleV3 -> disableBackupRule($arr);
        $this->do_assert($res);
    }

    public function testManualStartBackupRule()
    {
        $backupRuleV3 = $this -> backupRuleV3;
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
        
        
        $res = $backupRuleV3 -> manualStartBackupRule($arr);
        $this->do_assert($res);
    }

    public function testCloneBackupRule()
    {
        $backupRuleV3 = $this -> backupRuleV3;
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
        
        
        $res = $backupRuleV3 -> cloneBackupRule($arr);
        $this->do_assert($res);
    }

    public function testStopBackupRule()
    {
        $backupRuleV3 = $this -> backupRuleV3;
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
        
        
        $res = $backupRuleV3 -> stopBackupRule($arr);
        $this->do_assert($res);
    }

    public function testRebootBackupRule()
    {
        $backupRuleV3 = $this -> backupRuleV3;
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
        
        
        $res = $backupRuleV3 -> rebootBackupRule($arr);
        $this->do_assert($res);
    }

    public function testListBackupRuleStatus()
    {
        $backupRuleV3 = $this -> backupRuleV3;
        $arr = array(
            'task_uuids'=>array(),
        );
        
        
        $res = $backupRuleV3 -> listBackupRuleStatus($arr);
        $this->do_assert($res);
    }

    public function testCleanNbuCache()
    {
        $backupRuleV3 = $this -> backupRuleV3;
        $arr = array(
            'task_uuid'=>'',
        );
        
        
        $res = $backupRuleV3 -> cleanNbuCache($arr);
        $this->do_assert($res);
    }

    public function testDescribeScriptPath()
    {
        $backupRuleV3 = $this -> backupRuleV3;
        $arr = array(
            'task_uuid'=>'',
        );
        
        
        $res = $backupRuleV3 -> describeScriptPath($arr);
        $this->do_assert($res);
    }

    public function testDescribeBackupScript()
    {
        $backupRuleV3 = $this -> backupRuleV3;
        $arr = array(
            'task_uuid'=>'',
        );
        
        
        $res = $backupRuleV3 -> describeBackupScript($arr);
        $this->do_assert($res);
    }

    public function testModifyBackupScript()
    {
        $backupRuleV3 = $this -> backupRuleV3;
        $arr = array(
            'task_uuid'=>'',
            'script'=>'',
        );
        
        
        $res = $backupRuleV3 -> modifyBackupScript($arr);
        $this->do_assert($res);
    }

    public function testListOracleDatabases()
    {
        $backupRuleV3 = $this -> backupRuleV3;
        $arr = array(
            'instance_uuid'=>'',
        );
        
        
        $res = $backupRuleV3 -> listOracleDatabases($arr);
        $this->do_assert($res);
    }

    public function testListOracleObjects()
    {
        $backupRuleV3 = $this -> backupRuleV3;
        $arr = array(
            'instance_uuid'=>'',
            'type'=>'',
            'db_name'=>'',
            'tablespace_name'=>'',
        );
        
        
        $res = $backupRuleV3 -> listOracleObjects($arr);
        $this->do_assert($res);
    }

    public function testListDorisDb()
    {
        $backupRuleV3 = $this -> backupRuleV3;
        $arr = array(
            'node_uuid'=>'',
        );
        
        
        $res = $backupRuleV3 -> listDorisDb($arr);
        $this->do_assert($res);
    }

    public function testCheckPolardbXEncrypt()
    {
        $backupRuleV3 = $this -> backupRuleV3;
        $arr = array(
            'node_uuid'=>'',
            'instance_uuid'=>'',
        );
        
        
        $res = $backupRuleV3 -> checkPolardbXEncrypt($arr);
        $this->do_assert($res);
    }

    public function testDescribeExchangeInfo()
    {
        $backupRuleV3 = $this -> backupRuleV3;
        $arr = array(
            'node_uuid'=>'',
            'name'=>'',
            'type'=>1,
            'id'=>'',
        );
        
        
        $res = $backupRuleV3 -> describeExchangeInfo($arr);
        $this->do_assert($res);
    }

    public function testListElasticsearchIndics()
    {
        $backupRuleV3 = $this -> backupRuleV3;
        $arr = array(
            'client_type'=>1,
            'uuid'=>'',
        );
        
        
        $res = $backupRuleV3 -> listElasticsearchIndics($arr);
        $this->do_assert($res);
    }

    public function testListMongoDBDatabases()
    {
        $backupRuleV3 = $this -> backupRuleV3;
        $arr = array(
            'node_uuid'=>'',
        );
        
        
        $res = $backupRuleV3 -> listMongoDBDatabases($arr);
        $this->do_assert($res);
    }

    public function testListMongoDBTables()
    {
        $backupRuleV3 = $this -> backupRuleV3;
        $arr = array(
            'node_uuid'=>'',
            'db_name'=>'',
        );
        
        
        $res = $backupRuleV3 -> listMongoDBTables($arr);
        $this->do_assert($res);
    }

    public function testListYaShanTableSpaces()
    {
        $backupRuleV3 = $this -> backupRuleV3;
        $arr = array(
            'uuid'=>'',
        );
        
        
        $res = $backupRuleV3 -> listYaShanTableSpaces($arr);
        $this->do_assert($res);
    }

    public function testListSqlserverAliyunDatabase()
    {
        $backupRuleV3 = $this -> backupRuleV3;
        $arr = array(
            'node_uuid'=>'',
            'instance_uuid'=>'',
        );
        
        
        $res = $backupRuleV3 -> listSqlserverAliyunDatabase($arr);
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