<?php
namespace i2up\Test\v20260626\recoveryRule;

use i2up\recoveryRule\v20260626\RecoveryRule;
use i2up\common\Auth;
use PHPUnit\Framework\TestCase;
                
class RecoveryRuleTest extends TestCase
 {
    private $recoveryRule;
    
    public function setUp():void
    {
        parent::setup();
        $this -> recoveryRule = new RecoveryRule(new Auth());
    }

    public function testDescribeCoveringLogBackupSet()
    {
        $recoveryRule = $this -> recoveryRule;
        $arr = array(
            'bk_set_uuid'=>'',
            'bk_set_point'=>1,
        );
        
        
        $res = $recoveryRule -> describeCoveringLogBackupSet($arr);
        $this->do_assert($res);
    }

    public function testGetRecoveryBkServerAddr()
    {
        $recoveryRule = $this -> recoveryRule;
        $arr = array(
            'node_uuid'=>'',
        );
        
        
        $res = $recoveryRule -> getRecoveryBkServerAddr($arr);
        $this->do_assert($res);
    }

    public function testListVerifyBackupMedia()
    {
        $recoveryRule = $this -> recoveryRule;
        $arr = array(
            'bk_set_uuid'=>'',
            'backup_chain_policy'=>1,
        );
        
        
        $res = $recoveryRule -> listVerifyBackupMedia($arr);
        $this->do_assert($res);
    }

    public function testDescribeSbtDbid()
    {
        $recoveryRule = $this -> recoveryRule;
        $arr = array(
            'file_name'=>'',
        );
        
        
        $res = $recoveryRule -> describeSbtDbid($arr);
        $this->do_assert($res);
    }

    public function testListSbtContrlFile()
    {
        $recoveryRule = $this -> recoveryRule;
        $arr = array(
            'bk_set_uuid'=>'',
            'ora_content_type'=>1,
        );
        
        
        $res = $recoveryRule -> listSbtContrlFile($arr);
        $this->do_assert($res);
    }

    public function testListTimingRecoveryOracleRcPointInfo()
    {
        $recoveryRule = $this -> recoveryRule;
        $arr = array(
            'page'=>1,
            'limit'=>1,
            'bk_set_uuid'=>'',
        );
        
        
        $res = $recoveryRule -> listTimingRecoveryOracleRcPointInfo($arr);
        $this->do_assert($res);
    }

    public function testListDirPost()
    {
        $recoveryRule = $this -> recoveryRule;
        $arr = array(
            'index'=>1,
            'top_dir'=>'',
            'page'=>1,
            'limit'=>1,
            'bk_set_uuid'=>'',
            'rc_mode'=>1,
            'search'=>'',
        );
        
        
        $res = $recoveryRule -> listDirPost($arr);
        $this->do_assert($res);
    }

    public function testListDir()
    {
        $recoveryRule = $this -> recoveryRule;
        $arr = array(
            'top_dir'=>'',
            'page'=>1,
            'limit'=>1,
            'bk_set_uuid'=>'',
            'search'=>'',
            'rc_mode'=>1,
            'index'=>1,
        );
        
        
        $res = $recoveryRule -> listDir($arr);
        $this->do_assert($res);
    }

    public function testListRecoveryRuleStatus()
    {
        $recoveryRule = $this -> recoveryRule;
        $arr = array(
            'task_uuids'=>array(),
        );
        
        
        $res = $recoveryRule -> listRecoveryRuleStatus($arr);
        $this->do_assert($res);
    }

    public function testDescribeRecoveryRule()
    {
        $recoveryRule = $this -> recoveryRule;
        $arr = array(
            'version'=>'',
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $recoveryRule -> describeRecoveryRule($arr);
        $this->do_assert($res);
    }

    public function testStartRecoveryRule()
    {
        $recoveryRule = $this -> recoveryRule;
        $arr = array(
            'operate'=>'',
            'task_uuids'=>array(),
        );
        
        
        $res = $recoveryRule -> startRecoveryRule($arr);
        $this->do_assert($res);
    }

    public function testStopRecoveryRule()
    {
        $recoveryRule = $this -> recoveryRule;
        $arr = array(
            'operate'=>'',
            'task_uuids'=>array(),
        );
        
        
        $res = $recoveryRule -> stopRecoveryRule($arr);
        $this->do_assert($res);
    }

    public function testDeleteRecoveryRule()
    {
        $recoveryRule = $this -> recoveryRule;
        $arr = array(
            'task_uuids'=>array(),
            'force'=>1,
        );
        
        
        $res = $recoveryRule -> deleteRecoveryRule($arr);
        $this->do_assert($res);
    }

    public function testListRecoveryRule()
    {
        $recoveryRule = $this -> recoveryRule;
        $arr = array(
            'page'=>1,
            'limit'=>1,
            'filter_by_biz_grp'=>1,
            'status'=>'',
            'where_args'=>array(
            'task_uuid'=>'',
            'wk_data_type'=>1,),
            'like_args'=>array(
            'wk_hostname'=>'',
            'task_name'=>'',
            'wk_node_name'=>'',),
        );
        
        
        $res = $recoveryRule -> listRecoveryRule($arr);
        $this->do_assert($res);
    }

    public function testModifyRecoveryRule()
    {
        $recoveryRule = $this -> recoveryRule;
        $arr = array(
            'wk_path'=>'',
            'task_name'=>'',
            'auto_start'=>1,
            'biz_grp_list'=>array(),
            'start_time'=>1,
            'priority'=>90000,
            'rc_mode'=>1,
            'bk_path'=>array(),
            'bk_set_uuid'=>'',
            'wk_uuid'=>'',
            'rc_tgt_position'=>1,
            'rc_tgt_dir_list'=>array(
            '0'=>array(
            'bk_path'=>'',
            'wk_path'=>'',),),
            'thread_num_max'=>1,
            'thread_num_min'=>1,
            'mirr_file_check'=>1,
            'mirr_sync_flag'=>1,
            'rc_tgt_dir'=>'',
            'compress_switch'=>0,
            'compress'=>1,
            'encrypt_switch'=>0,
            'encrypt'=>1,
            'bk_file_crypt'=>0,
            'bk_crypt_type'=>1,
            'bk_crypt_key'=>'',
            'ora_content_type'=>1,
            'rman_num_streams_df_max'=>1,
            'rman_num_streams_df_min'=>1,
            'ora_pdbs_name'=>array(),
            'ora_do_restore'=>0,
            'ora_do_recovery'=>0,
            'ora_rst_type'=>0,
            'ora_rc_type'=>0,
            'ora_open_mode'=>0,
            'ora_rst_limit_type'=>0,
            'ora_rst_limit_date'=>'',
            'ora_rst_limit_scn'=>0,
            'ora_rst_limit_log_seq'=>'',
            'ora_rst_record'=>array(),
            'ora_rc_record'=>array(),
            'ora_rc_point_scn'=>1,
            'ora_rc_point_log_seq'=>'',
            'ora_rc_point_date'=>'',
            'ora_rst_ctrl_name'=>'',
            'ora_rc_point_type'=>1,
            'ora_rst_arch_limit_type'=>2,
            'ora_rst_arch_limit_log_seq'=>1,
            'ora_rst_endarch_limit_log_seq'=>1,
            'ora_dbid'=>'',
            'ora_rst_spfile_path'=>'',
            'ora_rst_spfile_name'=>'',
            'ora_tab_mode'=>1,
            'ora_tab_names'=>array(
            '0'=>array(
            'user'=>'',
            'ori_table'=>'',
            'tgt_table'=>'',),),
            'ora_tab_aux_path'=>'',
            'ora_home_path'=>'',
            'wk_data_type'=>1,
            'ora_rc_point_thread'=>'',
            'ora_rst_limit_thread'=>'',
            'random_str'=>'',
            'dst_type'=>'',
            'trans_mode'=>1,
            'ora_sid_name'=>'',
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $recoveryRule -> modifyRecoveryRule($arr);
        $this->do_assert($res);
    }

    public function testCreateRecovery()
    {
        $recoveryRule = $this -> recoveryRule;
        $arr = array(
            'start_time'=>1,
            'ora_rst_limit_thread'=>'',
            'bk_set_uuid'=>'',
            'bk_path'=>array(),
            'thread_num_max'=>1,
            'wk_uuid'=>'',
            'mirr_file_check'=>1,
            'thread_num_min'=>1,
            'compress'=>1,
            'wk_path'=>'',
            'mirr_sync_flag'=>1,
            'bk_crypt_type'=>1,
            'rc_path_policy'=>1,
            'bk_crypt_key'=>'',
            'compress_switch'=>0,
            'ora_content_type'=>1,
            'encrypt'=>1,
            'bk_file_crypt'=>0,
            'rman_num_streams_df_min'=>1,
            'ora_pdbs_name'=>array(),
            'ora_rst_type'=>0,
            'ora_do_recovery'=>0,
            'ora_do_restore'=>0,
            'encrypt_switch'=>0,
            'ora_rc_type'=>0,
            'rman_num_streams_df_max'=>1,
            'ora_rc_point_scn'=>1,
            'ora_rst_limit_scn'=>0,
            'ora_rc_point_log_seq'=>'',
            'ora_rc_point_date'=>'',
            'ora_rst_arch_limit_log_seq'=>1,
            'ora_rst_limit_date'=>'',
            'ora_rc_point_type'=>1,
            'tgt_table'=>'',
            'ora_rst_limit_type'=>0,
            'ora_rst_record'=>array(),
            'ora_tab_mode'=>1,
            'ora_rst_endarch_limit_log_seq'=>1,
            'ora_rst_file_name'=>'',
            'ora_rst_spfile_path'=>'',
            'ora_rc_record'=>array(),
            'ora_rst_limit_log_seq'=>'',
            'ora_rst_arch_limit_type'=>2,
            'ori_table'=>'',
            'ora_tab_pdb_name'=>'',
            'pre_recover_script'=>'',
            'wk_path_list'=>array(),
            'ora_rc_point_thread'=>'',
            'ora_home_path'=>'',
            'wk_data_type'=>1,
            'ora_rc_recory_point'=>1,
            'ora_dbid'=>'',
            'ora_open_mode'=>0,
            'hcs_instance_id'=>'',
            'excl_path'=>array(),
            'hcs_name'=>'',
            'vpc_id'=>'',
            'recovery_to_new'=>1,
            'security_group_id'=>'',
            'time_zone'=>'',
            'src_client_uuid'=>'',
            'arbitration_az'=>'',
            'master_az'=>'',
            'src_db_name'=>'',
            'src_instance_name'=>'',
            'configuration_id'=>'',
            'backup_chain_policy'=>1,
            'bmaster'=>1,
            'db_password'=>'',
            'bk_set_select'=>0,
            'ora_sid_name'=>'',
            'volume_type'=>'',
            'post_recover_script'=>'',
            'node_uuid'=>'',
            'user'=>'',
            'ora_rst_recory_point'=>1,
            'tgt_instance_uuid'=>'',
            'script_timeout'=>1,
            'tgt_db_name'=>'',
            'client_list'=>array(),
            'logic_infos'=>array(),
            'bk_set_point'=>'',
            'trans_mode'=>1,
            'logic_path'=>'',
            'logic_name'=>'',
            'db_file_path'=>'',
            'backup_method'=>1,
            'db_tables'=>array(
            '0'=>'db_name.schema_name.table_name',),
            'is_instance_start'=>1,
            'content_type'=>1,
            'db_names'=>array(),
            'bk_server_uuid'=>'',
            'bucket_uuid'=>'',
            'sto_uuid'=>'',
            'arch_path'=>'',
            'bk_server_addr'=>'',
            'bk_encrypt_password'=>'',
            'rc_point_scn'=>1,
            'bk_thread_num'=>1,
            'bk_encrypt_algorithm'=>'',
            'rc_method'=>1,
            'bk_encrypt_switch'=>1,
            'db_table_spaces'=>array(),
            'data_source'=>array(),
            'bk_encrypt'=>1,
            'policy_name'=>'',
            'nbu'=>array(),
            'policy_type'=>1,
            'client_name'=>'',
            'end_datetime'=>'',
            'custom_cfg'=>array(),
            'value'=>'',
            'bk_set_uuids'=>array(),
            'db_group_name'=>'',
            'num_parallel_collections'=>1,
            'dst_type'=>1,
            'password_bkset'=>'',
            'restore_strategy'=>1,
            'log_archive_concurrency'=>'',
            'password_bkset_switch'=>'',
            'backup_thread_score'=>'',
            'dest_tenant_name'=>'',
            'nbu_wk_path_list'=>array(),
            'key'=>'',
            'start_datetime'=>'',
            'resource_pool'=>'',
            'concurrency'=>'',
            'dorado_storage_pool_id'=>'',
            'clone_task_uuid'=>'',
            'gtid'=>'',
            'tables'=>array(),
            'src_table'=>'',
            'dest_table'=>'',
            'tgt_db_tables'=>array(),
            'parallel_process'=>1,
        );
        
        
        $res = $recoveryRule -> createRecovery($arr);
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