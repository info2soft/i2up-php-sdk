<?php
namespace i2up\Test\v20260626\recoveryDrill;

use i2up\recoveryDrill\v20260626\RecoveryDrill;
use i2up\common\Auth;
use PHPUnit\Framework\TestCase;
                
class RecoveryDrillTest extends TestCase
 {
    private $recoveryDrill;
    
    public function setUp():void
    {
        parent::setup();
        $this -> recoveryDrill = new RecoveryDrill(new Auth());
    }

    public function testListRecoveryDrill()
    {
        $recoveryDrill = $this -> recoveryDrill;
        $arr = array(
            'page'=>1,
            'limit'=>1,
            'filter_by_biz_grp'=>1,
            'where_args'=>array(
            'task_uuid'=>'',
            'wk_data_type'=>1,
            'recovery_way'=>1,),
            'like_args'=>array(
            'task_name'=>'',
            'wk_node_name'=>'',
            'wk_hostname'=>'',),
        );
        
        
        $res = $recoveryDrill -> listRecoveryDrill($arr);
        $this->do_assert($res);
    }

    public function testCreateRecoveryDrill()
    {
        $recoveryDrill = $this -> recoveryDrill;
        $arr = array(
            'disable'=>1,
            'task_name'=>'',
            'wk_data_type'=>1,
            'recovery_way'=>'',
            'priority'=>90000,
            'backup_set_select_strategy'=>1,
            'backup_set_select_num'=>1,
            'drill_strategy'=>1,
            'backup_set_select_unit'=>1,
            'client_list'=>array(
            '0'=>array(
            'node_uuid'=>'',
            'init_main_client'=>1,
            'node_list'=>array(
            '0'=>array(
            'node_uuid'=>'',
            'node_name'=>'',),),),),
            'is_instance_start'=>1,
            'pre_recover_script'=>'',
            'verification_script'=>1,
            'post_recover_script'=>'',
            'bkup_schedule'=>array(
            '0'=>array(
            'sched_name'=>'',
            'bkup_one_time'=>1,
            'exclude_days'=>array(
            '0'=>'2023-06-02',),
            'bkup_policy'=>1,
            'cron_policies'=>'',),),
            'data_retrieval_strategy'=>1,
            'os_user'=>1,
            'script_timeout'=>1,
            'new_instance_name'=>'',
            'restore_path'=>'',
            'verification_method'=>0,
            'overwrite'=>1,
            'verification_script_timeout'=>0,
            'config_path'=>'5',
            'exec_path'=>'',
            'config_port'=>5,
            'config_addr'=>'',
            'src_instance_uuid'=>'',
            'link_protocol'=>4,
            'content_type'=>1,
            'extra_startup_options'=>'',
            'use_backup_config'=>1,
            'data_path'=>1,
            'parallel_process'=>1,
            'backup_method'=>0,
            'wk_uuid'=>'',
            'src_client_uuid'=>'',
            'backup_way'=>1,
            'bkup_rule_uuid'=>'',
            'tgt_instance_uuid'=>'',
            'ora_pdbs_name'=>array(),
            'ora_rc_point_scn'=>1,
            'rman_num_streams_df_max'=>1,
            'ora_rc_point_type'=>1,
            'ora_rst_arch_limit_log_seq'=>1,
            'ora_tab_names'=>array(
            '0'=>array(
            'user'=>'',
            'ori_table'=>'',
            'tgt_table'=>'',),),
            'ora_content_type'=>1,
            'ora_rc_point_date'=>'',
            'rman_num_streams_df_min'=>1,
            'ora_rst_endarch_limit_log_seq'=>1,
            'ora_rc_record'=>array(),
            'ora_rc_point_log_seq'=>'',
            'ora_sid_name'=>'',
            'ora_dbid'=>'',
            'ora_tab_aux_path'=>'',
            'ora_home_path'=>'',
            'ora_rst_arch_limit_type'=>2,
            'ora_rst_spfile_path'=>'',
            'ora_tab_mode'=>1,
            'ora_rst_file_name'=>'',
            'ora_rst_limit_log_seq'=>'',
            'band_width'=>'',
            'new_ora_sid_name'=>'',
            'bk_path'=>array(),
            'excl_path'=>array(),
            'rc_path_policy'=>1,
            'wk_path'=>'',
            'wk_path_list'=>array(
            '0'=>array(
            'bk_path'=>'',
            'wk_path'=>'',),),
            'thread_num_max'=>1,
            'thread_num_min'=>1,
            'write_stream_num_type'=>1,
            'write_stream_num'=>1,
            'mirr_file_check'=>1,
            'mirr_sync_flag'=>1,
            'src_sto_uuid'=>'',
            'src_bucket_uuid'=>'',
            'dst_type'=>1,
            'tgt_sto_uuid'=>'',
            'tgt_bucket_uuid'=>'',
            'arch_path'=>'',
            'db_tables'=>array(),
            'password_bkset_switch'=>1,
            'password_bkset'=>'',
            'concurrency'=>1,
            'authentication'=>1,
            'resource_pool'=>'',
            'activate_standby'=>1,
            'biz_grp_list'=>array(),
            'main_availability_zone'=>array(
            '0'=>array(
            'zone_name'=>'',
            'is_check'=>1,
            'replica_type'=>'',
            'unit_spec_name'=>'',
            'unit_count'=>1,),),
            'tables'=>array(
            '0'=>array(
            'src_table'=>'',
            'dest_table'=>'',),),
            'bk_set_select'=>'',
            'dest_tenant_name'=>'',
            'db_table_spaces'=>array(),
            'create_instance_sw'=>1,
            'dm_user'=>'',
            'instance_name'=>'',
            'port'=>1,
            'db_name'=>'',
            'home_path'=>'',
            'password_sw'=>1,
            'sysdba_pwd'=>'',
            'sysauditor_pwd'=>'',
        );
        
        
        $res = $recoveryDrill -> createRecoveryDrill($arr);
        $this->do_assert($res);
    }

    public function testDescribeRecoveryDrill()
    {
        $recoveryDrill = $this -> recoveryDrill;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $recoveryDrill -> describeRecoveryDrill($arr);
        $this->do_assert($res);
    }

    public function testModifyRecoveryDrill()
    {
        $recoveryDrill = $this -> recoveryDrill;
        $arr = array(
            'wk_uuid'=>'',
            'recovery_way'=>'',
            'wk_data_type'=>1,
            'priority'=>90000,
            'backup_set_select_strategy'=>1,
            'backup_set_select_unit'=>1,
            'task_name'=>'',
            'client_list'=>array(
            '0'=>array(
            'node_uuid'=>'',
            'node_list'=>array(
            '0'=>array(
            'node_uuid'=>'',
            'node_name'=>'',),),
            'init_main_client'=>1,),),
            'bkup_schedule'=>array(
            '0'=>array(
            'exclude_days'=>array(
            '0'=>'2023-06-02',),
            'bkup_policy'=>1,
            'sched_name'=>'',
            'bkup_one_time'=>1,
            'cron_policies'=>'',),),
            'drill_strategy'=>1,
            'backup_set_select_num'=>1,
            'is_instance_start'=>1,
            'post_recover_script'=>'',
            'script_timeout'=>1,
            'verification_method'=>0,
            'pre_recover_script'=>'',
            'verification_script'=>1,
            'verification_script_timeout'=>0,
            'overwrite'=>1,
            'os_user'=>1,
            'restore_path'=>'',
            'exec_path'=>'',
            'config_addr'=>'',
            'new_instance_name'=>'',
            'data_retrieval_strategy'=>1,
            'config_port'=>5,
            'config_path'=>'5',
            'link_protocol'=>4,
            'data_path'=>1,
            'extra_startup_options'=>'',
            'parallel_process'=>1,
            'src_instance_uuid'=>'',
            'content_type'=>1,
            'use_backup_config'=>1,
            'bkup_rule_uuid'=>'',
            'backup_method'=>0,
            'backup_way'=>1,
            'disable'=>1,
            'src_client_uuid'=>'',
            'tgt_instance_uuid'=>'',
            'task_uuid'=>'',
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $recoveryDrill -> modifyRecoveryDrill($arr);
        $this->do_assert($res);
    }

    public function testListRecoveryDrillStatus()
    {
        $recoveryDrill = $this -> recoveryDrill;
        $arr = array(
            'task_uuids'=>array(),
        );
        
        
        $res = $recoveryDrill -> listRecoveryDrillStatus($arr);
        $this->do_assert($res);
    }

    public function testDeleteRecoveryDrill()
    {
        $recoveryDrill = $this -> recoveryDrill;
        $arr = array(
            'task_uuids'=>array(),
            'client_list'=>array(
            '0'=>array(
            'task_uuid'=>'',
            'node_uuid'=>array(),),),
            'force'=>0,
        );
        
        
        $res = $recoveryDrill -> deleteRecoveryDrill($arr);
        $this->do_assert($res);
    }

    public function testEnableRecoveryDrill()
    {
        $recoveryDrill = $this -> recoveryDrill;
        $arr = array(
            'operate'=>'',
            'task_uuids'=>array(),
            'drill_tm'=>1,
        );
        
        
        $res = $recoveryDrill -> enableRecoveryDrill($arr);
        $this->do_assert($res);
    }

    public function testDisableRecoveryDrill()
    {
        $recoveryDrill = $this -> recoveryDrill;
        $arr = array(
            'operate'=>'',
            'task_uuids'=>array(),
            'drill_tm'=>1,
        );
        
        
        $res = $recoveryDrill -> disableRecoveryDrill($arr);
        $this->do_assert($res);
    }

    public function testManualDrillRecoveryDrill()
    {
        $recoveryDrill = $this -> recoveryDrill;
        $arr = array(
            'operate'=>'',
            'task_uuids'=>array(),
            'drill_tm'=>1,
        );
        
        
        $res = $recoveryDrill -> manualDrillRecoveryDrill($arr);
        $this->do_assert($res);
    }

    public function testListDrillInfo()
    {
        $recoveryDrill = $this -> recoveryDrill;
        $arr = array(
            'limit'=>'',
            'page'=>'',
            'like_args'=>'',
            'where_args'=>array(
            'instance_type'=>'',),
        );
        
        
        $res = $recoveryDrill -> listDrillInfo($arr);
        $this->do_assert($res);
    }

    public function testOperateDrillInfo()
    {
        $recoveryDrill = $this -> recoveryDrill;
        $arr = array(
            'operate'=>'',
            'uuids'=>array(),
        );
        
        
        $res = $recoveryDrill -> operateDrillInfo($arr);
        $this->do_assert($res);
    }

    public function testListDrillInfoStatus()
    {
        $recoveryDrill = $this -> recoveryDrill;
        $arr = array(
            'uuids'=>array(),
        );
        
        
        $res = $recoveryDrill -> listDrillInfoStatus($arr);
        $this->do_assert($res);
    }

    public function testDeleteDrillInfo()
    {
        $recoveryDrill = $this -> recoveryDrill;
        $arr = array(
            'uuids'=>array(),
            'force'=>1,
        );
        
        
        $res = $recoveryDrill -> deleteDrillInfo($arr);
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