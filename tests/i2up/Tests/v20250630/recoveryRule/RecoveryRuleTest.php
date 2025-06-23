<?php
namespace i2up\Test\v20250630\recoveryRule;

use i2up\recoveryRule\v20250630\RecoveryRule;
use i2up\common\Auth;
                
class RecoveryRuleTest extends \PHPUnit_Framework_TestCase
 {
    private $recoveryRule;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> recoveryRule = new RecoveryRule(new Auth());
    }

    public function testCreateRecovery()
    {
        $recoveryRule = $this -> recoveryRule;
        $arr = array(
            'ora_tab_names'=>array(
            '0'=>array(
            'tgt_table'=>'',
            'ori_table'=>'',
            'user'=>'',),),
            'task_name'=>'',
            'auto_start'=>1,
            'start_time'=>1,
            'priority'=>90000,
            'rc_mode'=>1,
            'biz_grp_list'=>array(),
            'bk_set_uuid'=>'',
            'bk_path'=>array(),
            'thread_num_max'=>1,
            'thread_num_min'=>1,
            'wk_uuid'=>'',
            'mirr_file_check'=>1,
            'mirr_sync_flag'=>1,
            'wk_path'=>'',
            'compress_switch'=>0,
            'compress'=>1,
            'encrypt_switch'=>0,
            'rc_path_policy'=>1,
            'bk_file_crypt'=>0,
            'bk_crypt_type'=>1,
            'bk_crypt_key'=>'',
            'ora_content_type'=>1,
            'encrypt'=>1,
            'rman_num_streams_df_min'=>1,
            'ora_pdbs_name'=>array(),
            'ora_do_recovery'=>0,
            'ora_do_restore'=>0,
            'ora_rst_type'=>0,
            'ora_rc_type'=>0,
            'rman_num_streams_df_max'=>1,
            'ora_rst_limit_scn'=>0,
            'ora_rc_point_scn'=>1,
            'ora_rc_point_log_seq'=>'',
            'ora_rc_point_date'=>'',
            'ora_rst_arch_limit_log_seq'=>1,
            'ora_rc_point_type'=>1,
            'ora_rst_limit_type'=>0,
            'ora_rst_endarch_limit_log_seq'=>1,
            'ora_rst_limit_date'=>'',
            'ora_tab_mode'=>1,
            'ora_rst_record'=>array(),
            'ora_rst_file_name'=>'',
            'ora_rst_spfile_path'=>'',
            'ora_rc_record'=>array(),
            'ora_rst_limit_log_seq'=>'',
            'ora_rst_arch_limit_type'=>2,
            'ora_tab_pdb_name'=>'',
            'ora_rc_point_thread'=>'',
            'pre_recover_script'=>'',
            'ora_home_path'=>'',
            'wk_path_list'=>array(
            '0'=>array(
            'wk_path'=>'',
            'bk_path'=>'',),),
            'wk_data_type'=>1,
            'ora_dbid'=>'',
            'ora_rc_recory_point'=>1,
            'ora_open_mode'=>0,
            'hcs_instance_id'=>'',
            'hcs_name'=>'',
            'excl_path'=>array(),
            'recovery_to_new'=>1,
            'vpc_id'=>'',
            'security_group_id'=>'',
            'db_password'=>'',
            'configuration_id'=>'',
            'master_az'=>'',
            'time_zone'=>'',
            'backup_chain_policy'=>1,
            'arbitration_az'=>'',
            'src_instance_name'=>'',
            'src_client_uuid'=>'',
            'src_db_name'=>'',
            'bk_set_select'=>0,
            'ora_rst_limit_thread'=>'',
            'availability_zone'=>'',
            'new_hcs_uuid'=>'',
            'flavor_ref'=>'',
            'new_instance_name'=>'',
            'ora_sid_name'=>'',
            'ora_tab_aux_path'=>'',
            'subnet_id'=>'',
            'volume_size'=>'',
            'volume_type'=>'',
            'post_recover_script'=>'',
            'ora_rst_recory_point'=>1,
            'tgt_instance_uuid'=>'',
            'script_timeout'=>1,
            'tgt_db_name'=>'',
            'client_list'=>array(
            '0'=>array(
            'bmaster'=>1,
            'node_uuid'=>'',),),
            'logic_infos'=>array(
            '0'=>array(
            'logic_path'=>'',
            'logic_name'=>'',
            'db_file_path'=>'',),),
            'bk_set_point'=>'',
            'trans_mode'=>1,
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
            'data_source'=>array(
            'nbu'=>array(
            'policy_name'=>'',
            'policy_type'=>1,
            'client_name'=>'',
            'end_datetime'=>'',
            'start_datetime'=>'',),),
            'bk_encrypt'=>1,
            'custom_cfg'=>array(
            '0'=>array(
            'value'=>'',
            'key'=>'',),),
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
            'resource_pool'=>'',
            'concurrency'=>'',
            'dorado_storage_pool_id'=>'',
            'clone_task_uuid'=>'',
            'gtid'=>'',
            'tables'=>array(
            '0'=>array(
            'src_table'=>'',
            'dest_table'=>'',),),
            'tgt_db_info'=>array(
            '0'=>array(
            'src_table_name'=>'',
            'tgt_table_name'=>'',),),
            'manage_ip'=>array(),
            'os_type'=>'',
            'arch'=>'',
            'cpu_spec'=>'',
            'host_type'=>'',
            'solution'=>'',
            'recovery_way'=>'',
            'restore_path'=>'',
            'exec_path'=>'',
            'config_path'=>'',
            'config_addr'=>'',
            'config_port'=>'',
            'link_protocol'=>'',
            'wwpn'=>array(
            'initiator'=>'',
            'target'=>'',),
            'backup_way'=>1,
            'parallel_num'=>1,
            'parallel_process'=>1,
            'active_log_path'=>'',
            'overwrite'=>1,
            'slave_dbs'=>array(
            '0'=>array(
            'id'=>'',
            'ip'=>'',
            'port'=>'',),),
            'data_path'=>'',
            'os_user'=>'',
            'approach'=>'',
            'series'=>1,
            'specs'=>'',
            'region_id'=>'',
            'resource_group'=>'',
            'machine_group'=>'',
            'compatibility'=>'',
            'compute_node_specification'=>'',
            'store_node_specification'=>'',
            'compute_node_num'=>1,
            'store_node_num'=>1,
            'single_node_memory_size'=>1,
            'single_node_memory_unit'=>1,
            'standby_availability_zone'=>'',
            'secondary_standby_availability_zone'=>'',
            'main_machine_room'=>'',
            'standby_machine_room'=>'',
            'secondary_standby_machine_room'=>'',
            'store_specification'=>'',
            'main_availability_zone'=>'',
            'secondary_standby_region_id'=>'',
            'eth'=>'',
            'client_spec'=>'',
            'machine_spec'=>'',
            'cpu'=>'',
            'memory'=>'',
            'data_volume_size'=>'',
            'log_volume_size'=>'',
            'idc_resource'=>'',
            'master_idc'=>'',
            'coldback_idc'=>'',
            'recover_db'=>1,
            'set_list'=>array(
            '0'=>array(
            'id'=>'',
            'hosts'=>array(),),),
        );
        
        
        $res = $recoveryRule -> createRecovery($arr);
        $this->do_assert($res);
    }

    public function testModifyRecoveryRule()
    {
        $recoveryRule = $this -> recoveryRule;
        $arr = array(
            'task_name'=>'',
            'auto_start'=>1,
            'start_time'=>1,
            'biz_grp_list'=>array(),
            'priority'=>90000,
            'rc_mode'=>1,
            'bk_set_uuid'=>'',
            'bk_path'=>array(),
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
            'ora_rc_point_type'=>1,
            'ora_rc_record'=>array(),
            'ora_rc_point_scn'=>1,
            'ora_rc_point_log_seq'=>'',
            'ora_rc_point_date'=>'',
            'ora_rst_ctrl_name'=>'',
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
            'ora_sid_name'=>'',
            'ora_home_path'=>'',
            'wk_data_type'=>1,
            'ora_rc_point_thread'=>'',
            'ora_rst_limit_thread'=>'',
            'random_str'=>'',
            'trans_mode'=>1,
            'dst_type'=>'',
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $recoveryRule -> modifyRecoveryRule($arr);
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
            'wk_data_type'=>1,
            'recovery_way'=>1,),
            'like_args'=>array(
            'task_name'=>'',
            'wk_node_name'=>'',
            'wk_hostname'=>'',),
        );
        
        
        $res = $recoveryRule -> listRecoveryRule($arr);
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

    public function testListRecoveryRuleStatus()
    {
        $recoveryRule = $this -> recoveryRule;
        $arr = array(
            'task_uuids'=>array(),
        );
        
        
        $res = $recoveryRule -> listRecoveryRuleStatus($arr);
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
            'marker'=>1,
        );
        
        
        $res = $recoveryRule -> listDir($arr);
        $this->do_assert($res);
    }

    public function testListDirPost()
    {
        $recoveryRule = $this -> recoveryRule;
        $arr = array(
            'marker'=>1,
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

    public function testDescribeSbtDbid()
    {
        $recoveryRule = $this -> recoveryRule;
        $arr = array(
            'file_name'=>'',
        );
        
        
        $res = $recoveryRule -> describeSbtDbid($arr);
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

    public function testGetRecoveryBkServerAddr()
    {
        $recoveryRule = $this -> recoveryRule;
        $arr = array(
            'node_uuid'=>'',
        );
        
        
        $res = $recoveryRule -> getRecoveryBkServerAddr($arr);
        $this->do_assert($res);
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