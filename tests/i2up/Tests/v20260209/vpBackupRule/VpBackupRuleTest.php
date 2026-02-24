<?php
namespace i2up\Test\v20260209\vpBackupRule;

use i2up\vpBackupRule\v20260209\VpBackupRule;
use i2up\common\Auth;
                
class VpBackupRuleTest extends \PHPUnit_Framework_TestCase
 {
    private $vpBackupRule;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> vpBackupRule = new VpBackupRule(new Auth());
    }

    public function testCreateVpBackupRule()
    {
        $vpBackupRule = $this -> vpBackupRule;
        $arr = array(
            'task_name'=>'',
            'biz_grp_list'=>array(),
            'unit_uuid'=>'',
            'replica_uuids'=>array(),
            'vp_uuid'=>'',
            'auto_discovery'=>0,
            'match_policy'=>array(
            'vm_name'=>array(
            '0'=>array(
            'type'=>'',
            'value'=>'',
            'label'=>'',
            'and'=>false,
            'from_template'=>1,),),
            'location'=>array(
            '0'=>array(
            'type'=>'',
            'value'=>'',
            'label'=>'',
            'and'=>false,
            'from_template'=>1,),),
            'folder'=>array(
            '0'=>array(
            'type'=>'',
            'value'=>'',
            'label'=>'',
            'and'=>false,
            'from_template'=>1,),),),
            'vm_list'=>array(
            '0'=>array(
            'vm_name'=>'',
            'vm_ref'=>'',
            'disk_list'=>array(
            '0'=>array(
            'id'=>'',
            'disk_dir'=>'',
            'disk_name'=>'',
            'size'=>'',
            'datastore'=>'',
            'is_ignored'=>1,
            'datastore_type'=>'',),),
            'new_vm_name'=>'',
            'scripts_type'=>1,
            'scripts'=>'',
            'cpu'=>'',
            'core_per_sock'=>'',
            'mem_mb'=>'',
            'os_type'=>1,
            'is_set'=>false,
            'vm_uuid'=>'',
            'priority'=>1,),),
            'quiet_snap'=>1,
            'instant_recovery'=>1,
            'consolidate_switch'=>1,
            'consolidate_disks_time'=>'01:02',
            'src_trans_mode'=>31,
            'concurrent_disk_threads'=>2,
            'fail_retry'=>0,
            'retry_times'=>0,
            'retry_interval'=>0,
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
            'bkup_policy'=>1,
            'bkup_one_time'=>1,
            'cron_policies'=>'',
            'exclude_days'=>array(),),),
            'effective_time_switch'=>1,
            'effective_time'=>1,
            'compress_switch'=>1,
            'compress'=>1,
            'bk_file_crypt'=>1,
            'bk_crypt_type'=>1,
            'bk_crypt_key'=>'',
            'bk_file_compress_switch'=>1,
            'bk_file_compress'=>1,
            'band_width'=>'',
            'add_drill'=>1,
            'drill_plat_uuid'=>'',
            'timeout'=>1,
            'disable'=>1,
            'priority'=>1,
            'tape_pool_uuid'=>'',
            'is_fusion_storage'=>'',
            'quick_back'=>1,
            'data_verify'=>1,
            'source_region_id'=>'',
            'source_project_id'=>'',
            'winstack_pool_id'=>'',
            'winstack_host_id'=>'',
            'trans_type'=>'',
            'cred_uuid'=>'',
            'ftp_path'=>'',
            'agent_uuid'=>'',
            'trans_port'=>1,
            'encrypt_switch'=>0,
            'trans_mode'=>1,
            'encrypt'=>1,
            'source_region_name'=>'',
            'source_project_name'=>'',
            'block_stor_format'=>1,
            'data_encrypt_compress_switch'=>'',
            'data_encrypt_compress_thread_num'=>'',
            'data_encrypt_source'=>'',
            'data_compress_level'=>'',
            'data_encrypt_type'=>'',
            'thread_num_max'=>1,
            'thread_num_min'=>1,
            'type_flag'=>'',
            'retry_switch'=>'',
            'backup_way'=>0,
            'data_storage'=>array(
            'dedup'=>'',
            'compress'=>'',),
            'agent_list'=>array(
            '0'=>array(
            'agent_uuid'=>'',
            'index'=>1,),),
            'agent_policy'=>1,
            'snapshot_del_speed'=>1,
            'snapshot_del_speed_type'=>1,
            'storage_err_switch_bktype'=>1,
        );
        
        
        $res = $vpBackupRule -> createVpBackupRule($arr);
        $this->do_assert($res);
    }

    public function testModifyVpBackupRule()
    {
        $vpBackupRule = $this -> vpBackupRule;
        $arr = array(
            'task_name'=>'',
            'biz_grp_list'=>array(),
            'unit_uuid'=>'',
            'replica_uuids'=>array(),
            'vp_uuid'=>'',
            'auto_discovery'=>0,
            'match_policy'=>array(
            'vm_name'=>array(
            '0'=>array(
            'type'=>'',
            'value'=>'',
            'label'=>'',
            'and'=>false,),),
            'location'=>array(
            '0'=>array(
            'type'=>'',
            'value'=>'',
            'label'=>'',
            'and'=>false,),),
            'folder'=>array(
            '0'=>array(
            'type'=>'',
            'value'=>'',
            'label'=>'',
            'and'=>false,),),),
            'vm_list'=>array(
            '0'=>array(
            'vm_name'=>'',
            'vm_ref'=>'',
            'disk_list'=>array(
            '0'=>array(
            'id'=>'',
            'disk_dir'=>'',
            'disk_name'=>'',
            'size'=>'',
            'datastore'=>'',
            'is_ignored'=>1,
            'datastore_type'=>'',),),
            'new_vm_name'=>'',
            'scripts_type'=>1,
            'scripts'=>'',
            'cpu'=>'',
            'core_per_sock'=>'',
            'mem_mb'=>'',
            'os_type'=>1,
            'is_set'=>1,
            'vm_uuid'=>'',
            'priority'=>1,),),
            'quiet_snap'=>1,
            'instant_recovery'=>1,
            'consolidate_switch'=>1,
            'consolidate_disks_time'=>'01:02',
            'src_trans_mode'=>31,
            'concurrent_disk_threads'=>2,
            'fail_retry'=>0,
            'retry_times'=>0,
            'retry_interval'=>0,
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
            'bkup_policy'=>1,
            'bkup_one_time'=>1,
            'cron_policies'=>'',
            'exclude_days'=>array(),),),
            'effective_time_switch'=>1,
            'effective_time'=>1,
            'compress_switch'=>1,
            'compress'=>1,
            'bk_file_crypt'=>1,
            'bk_crypt_type'=>1,
            'bk_crypt_key'=>'',
            'bk_file_compress_switch'=>1,
            'bk_file_compress'=>1,
            'band_width'=>'',
            'add_drill'=>'',
            'drill_plat_uuid'=>'',
            'random_str'=>'',
            'timeout'=>1,
            'priority'=>1,
            'disable'=>1,
            'tape_pool_uuid'=>'',
            'backup_way'=>1,
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $vpBackupRule -> modifyVpBackupRule($arr);
        $this->do_assert($res);
    }

    public function testBatchModifyVpBackupRule()
    {
        $vpBackupRule = $this -> vpBackupRule;
        $arr = array(
            'task_uuids'=>array(),
            'band_width'=>'',
        );
        
        
        $res = $vpBackupRule -> batchModifyVpBackupRule($arr);
        $this->do_assert($res);
    }

    public function testListVpBackupRule()
    {
        $vpBackupRule = $this -> vpBackupRule;
        $arr = array(
            'page'=>1,
            'limit'=>1,
            'vm_name'=>'',
            'status'=>'',
            'filter_by_biz_grp'=>0,
            'where_args'=>array(
            'task_uuid'=>'',
            'vp_type'=>1,
            'backup_way'=>1,),
            'like_args'=>array(
            'task_name'=>'',
            'unit_name'=>'',
            'vp_name'=>'',),
        );
        
        
        $res = $vpBackupRule -> listVpBackupRule($arr);
        $this->do_assert($res);
    }

    public function testDescribeVpBackupRule()
    {
        $vpBackupRule = $this -> vpBackupRule;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $vpBackupRule -> describeVpBackupRule($arr);
        $this->do_assert($res);
    }

    public function testDeleteVpBackupRule()
    {
        $vpBackupRule = $this -> vpBackupRule;
        $arr = array(
            'task_uuids'=>array(),
            'force'=>0,
            'vm_list'=>array(
            '0'=>array(
            'task_uuid'=>'',
            'vm_ref'=>'',),),
        );
        
        
        $res = $vpBackupRule -> deleteVpBackupRule($arr);
        $this->do_assert($res);
    }

    public function testOperateVpBackupRule()
    {
        $vpBackupRule = $this -> vpBackupRule;
        $arr = array(
            'operate'=>'',
            'task_uuids'=>array(),
            'vm_list'=>array(),
            'sched_name'=>'',
            'new_task_name'=>'',
        );
        
        
        $res = $vpBackupRule -> operateVpBackupRule($arr);
        $this->do_assert($res);
    }

    public function testListVpBackupRuleStatus()
    {
        $vpBackupRule = $this -> vpBackupRule;
        $arr = array(
            'task_uuids'=>array(),
        );
        
        
        $res = $vpBackupRule -> listVpBackupRuleStatus($arr);
        $this->do_assert($res);
    }

    public function testTaskAddVms()
    {
        $vpBackupRule = $this -> vpBackupRule;
        $arr = array(
            'task_uuid'=>'',
            'vm_refs'=>array(),
        );
        
        
        $res = $vpBackupRule -> taskAddVms($arr);
        $this->do_assert($res);
    }

    public function testPreCheckVpBackupRule()
    {
        $vpBackupRule = $this -> vpBackupRule;
        $arr = array();
        
        
        $res = $vpBackupRule -> preCheckVpBackupRule($arr);
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