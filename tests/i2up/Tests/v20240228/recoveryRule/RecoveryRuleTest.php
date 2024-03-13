<?php
namespace i2up\Test\v20240228\recoveryRule;

use i2up\recoveryRule\v20240228\RecoveryRule;
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
            'task_name' => '',
            'auto_start' => 1,
            'start_time' => 1,
            'biz_grp_list' => array(),
            'priority' => 90000,
            'rc_mode' => 1,
            'bk_set_uuid' => '',
            'bk_path' => array(),
            'wk_uuid' => '',
            'rc_path_policy' => 1,
            'thread_num_max' => 1,
            'thread_num_min' => 1,
            'mirr_file_check' => 1,
            'mirr_sync_flag' => 1,
            'wk_path' => '',
            'compress_switch' => 0,
            'compress' => 1,
            'encrypt_switch' => 0,
            'encrypt' => 1,
            'bk_file_crypt' => 0,
            'bk_crypt_type' => 1,
            'bk_crypt_key' => '',
            'ora_content_type' => 1,
            'rman_num_streams_df_max' => 1,
            'rman_num_streams_df_min' => 1,
            'ora_pdbs_name' => array(),
            'ora_do_restore' => 0,
            'ora_do_recovery' => 0,
            'ora_rst_type' => 0,
            'ora_rc_type' => 0,
            'ora_open_mode' => 0,
            'ora_rst_limit_type' => 0,
            'ora_rst_limit_date' => '',
            'ora_rst_limit_scn' => 0,
            'ora_rst_limit_log_seq' => '',
            'ora_rst_record' => array(),
            'ora_rc_point_type' => 1,
            'ora_rc_record' => array(),
            'ora_rc_point_scn' => 1,
            'ora_rc_point_log_seq' => '',
            'ora_rc_point_date' => '',
            'ora_rst_file_name' => '',
            'ora_rst_arch_limit_type' => 2,
            'ora_rst_arch_limit_log_seq' => 1,
            'ora_rst_endarch_limit_log_seq' => 1,
            'ora_dbid' => '',
            'ora_rst_spfile_path' => '',
            'ora_tab_mode' => 1,
            'ora_tab_names' => array(
                '0' => array(
                    'user' => '',
                    'ori_table' => '',
                    'tgt_table' => '',),),
            'ora_tab_aux_path' => '',
            'ora_sid_name' => '',
            'ora_home_path' => '',
            'wk_data_type' => 1,
            'ora_rc_point_thread' => '',
            'ora_rst_limit_thread' => '',
            'ora_tab_pdb_name' => '',
            'wk_path_list' => array(
                '0' => array(
                    'bk_path' => '',
                    'wk_path' => '',),),
            'pre_recover_script' => '',
            'post_recover_script' => '',
            'script_timeout' => 1,
            'ora_rst_recory_point' => 1,
            'ora_rc_recory_point' => 1,
            'excl_path' => array(),
            'trans_mode' => 1,
            'hcs_name' => '',
            'hcs_instance_id' => '',
            'recovery_to_new' => 1,
            'new_hcs_uuid' => '',
            'new_instance_name' => '',
            'availability_zone' => '',
            'flavor_ref' => '',
            'volume_type' => '',
            'volume_size' => '',
            'vpc_id' => '',
            'subnet_id' => '',
            'security_group_id' => '',
            'db_password' => '',
            'configuration_id' => '',
            'time_zone' => '',
            'master_az' => '',
            'arbitration_az' => '',
            'backup_chain_policy' => 1,
            'client_list' => array(
                '0' => array(
                    'node_uuid' => '',
                    'bmaster' => 1,),),
        );
        $res = $recoveryRule -> createRecovery($arr);
        $this->do_assert($res);
    }

    public function testModifyRecoveryRule()
    {
        $recoveryRule = $this -> recoveryRule;
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111',
            'random_str' => '11111111-1111-1111-1111-111111111111',
            'task_name' => '',
            'auto_start' => 1,
            'start_time' => 1,
            'biz_grp_list' => array(),
            'priority' => 90000,
            'rc_mode' => 1,
            'bk_set_uuid' => '',
            'bk_path' => array(),
            'wk_uuid' => '',
            'rc_tgt_position' => 1,
            'rc_tgt_dir_list' => array(
                '0' => array(
                    'bk_path' => '',
                    'wk_path' => '',),),
            'thread_num_max' => 1,
            'thread_num_min' => 1,
            'mirr_file_check' => 1,
            'mirr_sync_flag' => 1,
            'rc_tgt_dir' => '',
            'compress_switch' => 0,
            'compress' => 1,
            'encrypt_switch' => 0,
            'encrypt' => 1,
            'bk_file_crypt' => 0,
            'bk_crypt_type' => 1,
            'bk_crypt_key' => '',
            'ora_content_type' => 1,
            'rman_num_streams_df_max' => 1,
            'rman_num_streams_df_min' => 1,
            'ora_pdbs_name' => array(),
            'ora_do_restore' => 0,
            'ora_do_recovery' => 0,
            'ora_rst_type' => 0,
            'ora_rc_type' => 0,
            'ora_open_mode' => 0,
            'ora_rst_limit_type' => 0,
            'ora_rst_limit_date' => '',
            'ora_rst_limit_scn' => 0,
            'ora_rst_limit_log_seq' => '',
            'ora_rst_record' => array(),
            'ora_rc_point_type' => 1,
            'ora_rc_record' => array(),
            'ora_rc_point_scn' => 1,
            'ora_rc_point_log_seq' => '',
            'ora_rc_point_date' => '',
            'ora_rst_ctrl_name' => '',
            'ora_rst_arch_limit_type' => 2,
            'ora_rst_arch_limit_log_seq' => 1,
            'ora_rst_endarch_limit_log_seq' => 1,
            'ora_dbid' => '',
            'ora_rst_spfile_path' => '',
            'ora_rst_spfile_name' => '',
            'ora_tab_mode' => 1,
            'ora_tab_names' => array(
                '0' => array(
                    'user' => '',
                    'ori_table' => '',
                    'tgt_table' => '',),),
            'ora_tab_aux_path' => '',
            'ora_sid_name' => '',
            'ora_home_path' => '',
            'wk_data_type' => 1,
            'ora_rc_point_thread' => '',
            'ora_rst_limit_thread' => '',
            'random_str' => '',
            'trans_mode' => 1,
        );
        $res = $recoveryRule -> modifyRecoveryRule($arr);
        $this->do_assert($res);
    }

    public function testDeleteRecoveryRule()
    {
        $recoveryRule = $this -> recoveryRule;
        $arr = array(
            'task_uuids'=>array('11111111-1111-1111-1111-111111111111'),
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
            'like_args[task_name]'=>'',
            'filter_by_biz_grp'=>1,
            'where_args[task_uuid]'=>'',
            'status'=>'',
            'like_args[wk_node_name]'=>'',
            'where_args[wk_data_type]'=>1,
            'like_args[wk_hostname]'=>'',
        );
        $res = $recoveryRule -> listRecoveryRule($arr);
        $this->do_assert($res);
    }

    public function testDescribeRecoveryRule()
    {
        $recoveryRule = $this -> recoveryRule;
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111',
            'version'=>'',
        );
        $res = $recoveryRule -> describeRecoveryRule($arr);
        $this->do_assert($res);
    }

    public function testStartRecoveryRule()
    {
        $recoveryRule = $this -> recoveryRule;
        $arr = array(
            'operate'=>'start',
            'task_uuids'=>array('11111111-1111-1111-1111-111111111111'),
        );
        $res = $recoveryRule -> startRecoveryRule($arr);
        $this->do_assert($res);
    }

    public function testStopRecoveryRule()
    {
        $recoveryRule = $this -> recoveryRule;
        $arr = array(
            'operate'=>'stop',
            'task_uuids'=>array('11111111-1111-1111-1111-111111111111'),
        );
        $res = $recoveryRule -> stopRecoveryRule($arr);
        $this->do_assert($res);
    }

    public function testListRecoveryRuleStatus()
    {
        $recoveryRule = $this -> recoveryRule;
        $arr = array(
            'task_uuids'=>array('11111111-1111-1111-1111-111111111111'),
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
            'bk_set_uuid'=>'11111111-1111-1111-1111-111111111111',
            'search'=>'',
        );
        $res = $recoveryRule -> listDir($arr);
        $this->do_assert($res);
    }

    public function testListTimingRecoveryOracleRcPointInfo()
    {
        $recoveryRule = $this -> recoveryRule;
        $arr = array(
            'page'=>1,
            'limit'=>1,
            'bk_set_uuid'=>'11111111-1111-1111-1111-111111111111',
        );
        $res = $recoveryRule -> listTimingRecoveryOracleRcPointInfo($arr);
        $this->do_assert($res);
    }

    public function testListSbtContrlFile()
    {
        $recoveryRule = $this -> recoveryRule;
        $arr = array(
            'bk_set_uuid'=>'11111111-1111-1111-1111-111111111111',
            'ora_content_type'=>6,
        );
        $res = $recoveryRule -> listSbtContrlFile($arr);
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
            'bk_set_uuid'=>'11111111-1111-1111-1111-111111111111',
            'backup_chain_policy'=>1,
        );
        $res = $recoveryRule -> listVerifyBackupMedia($arr);
        $this->do_assert($res);
    }

    private function do_assert($res)
    {
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}