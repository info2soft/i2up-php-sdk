<?php
namespace i2up\Test\v20240228\backupRule;

use i2up\backupRule\v20240228\BackupRule;
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
            'task_name' => '',
            'biz_grp_list' => array(),
            'wk_data_type' => 1,
            'timeout' => 1,
            'priority' => 1,
            'trans_mode' => 1,
            'unit_uuid' => '',
            'tape_pool_uuid' => '',
            'client_list' => array(
                '0' => array(
                    'node_uuid' => '',
                    'init_main_client' => 1,),),
            'wk_path' => array(),
            'excl_path' => array(),
            'mirr_file_check' => 1,
            'mirr_sync_flag' => '1',
            'mirr_open_type' => 0,
            'mirr_sync_attr' => 1,
            'ora_sid_name' => '',
            'ora_home_path' => '',
            'ora_content_type' => 0,
            'rman_compress_df' => 0,
            'rman_num_streams_df_max' => 4,
            'rman_filespertset_df' => 20,
            'rman_arch_retain' => 3,
            'rman_include_arch_flag' => 1,
            'rman_db_readonly' => 0,
            'rman_del_arch' => 1,
            'rman_filespertset_arch' => 20,
            'rman_include_spfile_flag' => 1,
            'rman_num_streams_arch' => 4,
            'bkup_schedule' => array(
                '0' => array(
                    'sched_name' => '',
                    'backup_type' => 1,
                    'retention' => 1,
                    'start_window' => array(
                        '0' => array(
                            'wday' => 1,
                            'from' => '',
                            'to' => '',),),
                    'bkup_window' => array(
                        '0' => array(
                            'wday' => 1,
                            'from' => '',
                            'to' => '',),),
                    'bkup_one_time' => 1,
                    'bkup_policy' => 1,
                    'exclude_days' => array(
                        '0' => '2023-06-02',),
                    'cron_policies' => '',),),
            'replica_uuids' => array(),
            'thread_num_max' => 1,
            'pre_backup_script' => '',
            'post_backup_script' => '',
            'script_timeout' => 1,
            'expire_policy' => 0,
            'thread_num_min' => 1,
            'compress' => 1,
            'compress_switch' => 0,
            'encrypt_switch' => 1,
            'encrypt' => 1,
            'bk_file_crypt' => 1,
            'bk_crypt_type' => 1,
            'bk_crypt_key' => '',
            'band_width' => '',
            'ora_pdbs_name' => array(),
            'retry_time' => 5,
            'retry_num' => 5,
            'rman_num_streams_df_min' => 4,
            'disable' => 1,
            'effective_time_switch' => 1,
            'effective_time' => 1,
            'hcs_uuid' => '',
            'hcs_instance_uuid' => '',
        );
        $res = $backupRule -> createBackup($arr);
        $this->do_assert($res);
    }

    public function testModifyBackupRule()
    {
        $backupRule = $this -> backupRule;
        $arr = array(
            'uuid'=>'11111111-1111-1111-1111-111111111111',
            'random_str'=>'11111111-1111-1111-1111-111111111111',
            'task_name' => '',
            'biz_grp_list' => array(),
            'wk_data_type' => 1,
            'timeout' => 1,
            'priority' => 1,
            'trans_mode' => 1,
            'unit_uuid' => '',
            'tape_pool_uuid' => '',
            'client_list' => array(
                '0' => array(
                    'node_uuid' => '',),),
            'wk_path' => array(),
            'excl_path' => array(),
            'mirr_file_check' => 1,
            'mirr_sync_flag' => '1',
            'mirr_open_type' => 0,
            'mirr_sync_attr' => 1,
            'ora_sid_name' => '',
            'ora_home_path' => '',
            'ora_content_type' => 0,
            'rman_compress_df' => 0,
            'rman_num_streams_df_max' => 4,
            'rman_filespertset_df' => 20,
            'rman_arch_retain' => 3,
            'rman_include_arch_flag' => 1,
            'rman_db_readonly' => 0,
            'rman_del_arch' => 1,
            'rman_filespertset_arch' => 20,
            'rman_include_spfile_flag' => 1,
            'rman_num_streams_arch' => 4,
            'bkup_schedule' => array(
                '0' => array(
                    'sched_name' => '',
                    'backup_type' => 1,
                    'retention' => 1,
                    'start_window' => array(
                        '0' => array(
                            'wday' => '',
                            'from' => '',
                            'to' => '',),),
                    'bkup_window' => array(
                        '0' => array(
                            'wday' => '',
                            'from' => '',
                            'to' => '',),),
                    'bkup_one_time' => 1,
                    'bkup_policy' => 1,
                    'cron_type' => 1,
                    'exclude_days' => array(
                        '0' => '2023-06-02',),
                    'cron_policies' => '',),),
            'replica_uuid' => '',
            'thread_num_max' => 1,
            'pre_backup_script' => '',
            'post_backup_script' => '',
            'script_timeout' => 1,
            'expire_policy' => 0,
            'thread_num_min' => '',
            'compress' => 1,
            'compress_switch' => 0,
            'encrypt_switch' => 1,
            'encrypt' => 1,
            'secret_key' => '',
            'bk_file_crypt' => 1,
            'bk_crypt_type' => 1,
            'bk_crypt_key' => '',
            'ukey_crypt_switch' => 1,
            'ukey_cred_uuid' => '',
            'band_width' => '',
            'rman_num_streams_df_min' => 1,
            'disable' => 1,
        );
        $res = $backupRule -> modifyBackupRule($arr);
        $this->do_assert($res);
    }

    public function testDescribeBackupRule()
    {
        $backupRule = $this -> backupRule;
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111',
        );
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
            'where_args[wk_data_type]'=>'1',
            'filter_by_biz_grp'=>1,
            'where_args[task_uuid]'=>'',
            'like_args[unit_name]'=>'',
            'status'=>'',
            'node_name'=>'',
            'hostname'=>'',
            'like_args[task_name]'=>'',
        );
        $res = $backupRule -> listBackupRule($arr);var_dump($res);
        $this->do_assert($res);
    }

    public function testDeleteBackupRule()
    {
        $backupRule = $this -> backupRule;
        $arr = array(
            'task_uuids' => array('11111111-1111-1111-1111-111111111111'),
            'client_list' => array(
                '0' => array(
                    'task_uuid' => '',
                    'node_uuid' => array(),),),
            'force' => 0,
        );
        $res = $backupRule -> deleteBackupRule($arr);
        $this->do_assert($res);
    }

    public function testEnableBackupRule()
    {
        $backupRule = $this -> backupRule;
        $arr = array(
            'operate'=>'enable',
            'task_uuids'=>array('11111111-1111-1111-1111-111111111111'),
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
            'operate'=>'disable',
            'task_uuids'=>array('11111111-1111-1111-1111-111111111111'),
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
            'operate'=>'manual_start',
            'task_uuids'=>array('11111111-1111-1111-1111-111111111111'),
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
            'operate'=>'clone',
            'task_uuids'=>array('11111111-1111-1111-1111-111111111111'),
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

    public function testListBackupRuleStatus()
    {
        $backupRule = $this -> backupRule;
        $arr = array(
            'task_uuids'=>array('11111111-1111-1111-1111-111111111111'),
        );
        $res = $backupRule -> listBackupRuleStatus($arr);
        $this->do_assert($res);
    }

    private function do_assert($res)
    {
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}