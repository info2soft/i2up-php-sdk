<?php
namespace i2up\Test\v20260209\vp;

use i2up\vp\v20260209\VirtualizationSupport;
use i2up\common\Auth;
                
class VirtualizationSupportTest extends \PHPUnit_Framework_TestCase
 {
    private $virtualizationSupport;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> virtualizationSupport = new VirtualizationSupport(new Auth());
    }

    public function testDescribeVpRuleRate()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'uuid'=>'',
            'wk_uuid'=>'F28BA5A6-4FF9-E596-4371-1ED203D45143',
            'mode'=>'month',
            'type'=>'I2VP_BK',
            'group_uuid'=>'',
        );
        
        
        $res = $virtualizationSupport -> describeVpRuleRate($arr);
        $this->do_assert($res);
    }

    public function testDescribeVmProtectRate()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'vp_uuid'=>'F28BA5A6-4FF9-E596-4371-1ED203D45143',
        );
        
        
        $res = $virtualizationSupport -> describeVmProtectRate($arr);
        $this->do_assert($res);
    }

    public function testCreateVpBackup()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'del_bkup_data'=>0,
            'quiet_snap'=>0,
            'quick_back'=>1,
            'vp_uuid'=>'C6335F62-2565-1957-4BB9-587F2FF46B00',
            'bk_path'=>'E:\\vp_bk5\\',
            'vm_list'=>array(
            '0'=>array(
            'vm_name'=>'测试5',
            'vm_ref'=>'vm-10811',
            'scripts_type'=>1,
            'scripts'=>'',
            'new_vm_name'=>'虚机名称_2020-04-29',
            'cpu'=>'',
            'core_per_sock'=>'',
            'mem_mb'=>'',
            'os_type'=>1,
            'disk_list'=>array(
            '0'=>array(
            'id'=>'',
            'disk_dir'=>'',
            'disk_name'=>'',
            'is_ignored'=>1,
            'datastore'=>'',
            'size'=>'',
            'datastore_type'=>'',),),
            'vm_uuid'=>'null',
            'is_set'=>0,
            'priority'=>3,),),
            'bk_uuid'=>'67E33CDB-D75B-15B3-367D-50C764F5A26F',
            'lan_free'=>23,
            'rule_name'=>'vp_bk cky',
            'bkup_policy'=>1,
            'bkup_one_time'=>1546831899,
            'bkup_schedule'=>array(
            '0'=>array(
            'limit'=>3,
            'sched_day'=>array(
            '0'=>1,
            '1'=>2,
            '2'=>3,),
            'sched_time'=>array(
            '0'=>'00:00',),
            'sched_every'=>0,
            'bkup_type'=>0,),),
            'biz_grp_list'=>array(),
            'rule_type'=>0,
            'band_width'=>'-1',
            'compress'=>0,
            'mem_snap'=>0,
            'random_str'=>'11111111-1111-1111-1111-111111111111',
            'instant_recovery'=>1,
            'auto'=>0,
            'add_drill'=>1,
            'drill_plat_uuid'=>'',
            'data_ip_uuid'=>'67E33CDB-D75B-15B3-367D-50C764F5A26F',
            'cred_uuid'=>'',
            'trans_type'=>'',
            'data_verify'=>0,
            'ftp_path'=>'',
            'agent_uuid'=>'',
            'auto_discovery'=>0,
            'encrypt_type'=>1,
            'encrypt_key'=>'',
            'encrypt_switch'=>1,
            'src_trans_mode'=>31,
            'transfer_compression'=>0,
            'backup_times'=>array(
            '0'=>array(
            'day_of_week'=>array(),
            'begin_time'=>'00:00',
            'end_time'=>'00:00',),),
            'is_limit_backuptime'=>0,
            'consolidate_disks_time'=>'',
            'consolidate_switch'=>0,
            'fail_retry'=>1,
            'retry_times'=>1,
            'retry_interval'=>1,
            'concurrent_disk_threads'=>1,
            'backup_method'=>0,
            'transfer_encrypt'=>0,
            'bk_type'=>0,
            'bucket'=>'',
            'sto_uuid'=>'',
            'bucket_path'=>'',
            'source_project_id'=>'',
            'source_region_id'=>'',
            'match_policy'=>array(
            'vm_name'=>array(
            '0'=>array(
            'type'=>'',
            'value'=>'',
            'label'=>'',
            'and'=>true,),),
            'location'=>array(
            '0'=>array(
            'type'=>'',
            'value'=>'',
            'label'=>'',
            'and'=>true,),),
            'folder'=>array(
            '0'=>array(
            'type'=>'',
            'value'=>'',
            'label'=>'',
            'and'=>true,),),),
            'is_fusion_storage'=>0,
            'winstack_pool_id'=>'',
            'winstack_host_id'=>'',
            'pool_uuid'=>'',
            'transfer_compression_type'=>1,
            'compress_type'=>1,
        );
        
        
        $res = $virtualizationSupport -> createVpBackup($arr);
        $this->do_assert($res);
    }

    public function testModifyVpBackup()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $virtualizationSupport -> modifyVpBackup($arr);
        $this->do_assert($res);
    }

    public function testDescribeVpBackup()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $virtualizationSupport -> describeVpBackup($arr);
        $this->do_assert($res);
    }

    public function testDescribeVpBackupGroup()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $virtualizationSupport -> describeVpBackupGroup($arr);
        $this->do_assert($res);
    }

    public function testListVpBackup()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'page'=>1,
            'limit'=>10,
            'type'=>0,
            'status'=>'',
        );
        
        
        $res = $virtualizationSupport -> listVpBackup($arr);
        $this->do_assert($res);
    }

    public function testListVpBackupGroup()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'page'=>1,
            'limit'=>10,
            'type'=>0,
            'where_args'=>array(
            'bk_path'=>'H:\\vp_bk5\\',),
        );
        
        
        $res = $virtualizationSupport -> listVpBackupGroup($arr);
        $this->do_assert($res);
    }

    public function testListVpBackupStatus()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'rule_uuids'=>array(
            '0'=>'11111111-1111-1111-1111-111111111111',),
            'force_refresh'=>1,
        );
        
        
        $res = $virtualizationSupport -> listVpBackupStatus($arr);
        $this->do_assert($res);
    }

    public function testStartVpBackup()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'operate'=>'',
            'rule_uuids'=>'[C6335F62-2565-1957-4BB9-587F2FF46B00]',
            'group_uuids'=>array(),
            'bkup_type'=>'',
            'force'=>0,
        );
        
        
        $res = $virtualizationSupport -> startVpBackup($arr);
        $this->do_assert($res);
    }

    public function testStopVpBackup()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'operate'=>'',
            'rule_uuids'=>'[C6335F62-2565-1957-4BB9-587F2FF46B00]',
            'group_uuids'=>array(),
            'bkup_type'=>'',
            'force'=>0,
        );
        
        
        $res = $virtualizationSupport -> stopVpBackup($arr);
        $this->do_assert($res);
    }

    public function testDeleteVpBackup()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'rule_uuids'=>array(
            '0'=>'11111111-1111-1111-1111-111111111111',),
            'group_uuids'=>array(),
            'force'=>1,
            'delete_bk_data'=>0,
            'recycle'=>0,
        );
        
        
        $res = $virtualizationSupport -> deleteVpBackup($arr);
        $this->do_assert($res);
    }

    public function testDeleteVpBackupPoint()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'rule_uuid'=>'',
            'version_list'=>array(),
        );
        
        
        $res = $virtualizationSupport -> deleteVpBackupPoint($arr);
        $this->do_assert($res);
    }

    public function testCreateVpRecovery()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'bk_path_view'=>'H:\\vp_bk5\\testRC1_BAK_99_192.168.85.139',
            'bk_uuid'=>'67E33CDB-D75B-15B3-367D-50C764F5A26F',
            'new_ds'=>'datastore1',
            'vm_list'=>array(
            '0'=>array(
            'ver_sig'=>'A59DB76E-E33D-4E22-BB08-59723B1FC539',
            'vm_ref'=>'99',
            'vm_name'=>'测试5',
            'disk_list'=>array(
            '0'=>array(
            'disk_name'=>'proxy gateway1.vmdk',
            'disk_path'=>'/',
            'is_same'=>1,
            'new_ds'=>'datastore1',
            'id'=>'',
            'boot_index'=>1,
            'disk_type'=>'',
            'datastore_type'=>'',
            'src_disk_name'=>'',
            'is_ignored'=>'',
            'cache'=>1,),),
            'new_vm_name'=>'测试5',
            'networks'=>array(
            '0'=>array(
            'keep_mac'=>1,
            'network_name'=>'',
            'network_id'=>'',
            'source_network_name'=>'',
            'source_network_id'=>'',
            'mac_address'=>'',
            'ip_address'=>'',
            'source_physical_interface_id'=>'',
            'source_physical_interface_name'=>'',
            'physical_interface_id'=>'',
            'physical_interface_name'=>'',),),
            'bk_path'=>'',
            'ver_time'=>'',
            'cpu'=>1,
            'core_per_sock'=>1,
            'mem_mb'=>1,
            'dynamic_mem'=>1,
            'flavor_id'=>'',
            'common_custom'=>0,
            'disk_custom'=>0,
            'encrypt_type'=>0,
            'encrypt_key'=>'',
            'start_order'=>0,
            'archtype'=>'',
            'machine'=>'',
            'new_vm_sec_grp_id'=>'',
            'new_vm_vpc_id'=>'',),),
            'new_hostname'=>'localhost.localdomain',
            'new_dc'=>'ha-datacenter',
            'is_create'=>0,
            'vp_uuid'=>'928B88A6-CDBA-6F55-ADCB-15A8A935C9C2',
            'new_ds_path'=>'/',
            'new_vp_uuid'=>'928B88A6-CDBA-6F55-ADCB-15A8A935C9C2',
            'rule_name'=>'testRC cky',
            'lan_free'=>23,
            'rule_type'=>0,
            'auto_startup'=>0,
            'new_dc_mor'=>'ha-datacenter',
            'api_type'=>'HostAgent',
            'biz_grp_list'=>array(),
            'group_recovery'=>0,
            'backup_rule_name'=>'testRC1',
            'band_width'=>'-1',
            'for_vp_file_rc'=>1,
            'del_vm'=>1,
            'network_id'=>'',
            'network_name'=>'',
            'data_ip_uuid'=>'928B88A6-CDBA-6F55-ADCB-15A8A935C9C1',
            'cred_uuid'=>'',
            'trans_type'=>'',
            'agent_uuid'=>'',
            'agent_data_ip_uuid'=>'',
            'parent_flavor_id'=>'',
            'ip_address'=>'',
            'dest_trans_mode'=>31,
            'concurrent_disk_threads'=>1,
            'backup_method'=>0,
            'is_start_order'=>0,
            'transfer_compression'=>0,
            'transfer_encrypt'=>0,
            'location'=>'',
            'bk_type'=>0,
            'sto_uuid'=>'',
            'bucket'=>'',
            'bucket_path'=>'',
            'target_region_id'=>'',
            'target_project_id'=>'',
            'is_fusion_storage'=>1,
            'winstack_pool_id'=>'',
            'winstack_host_id'=>'',
            'new_archtype'=>'',
            'new_machine'=>'',
            'new_host_id'=>'',
            'rc_method'=>'',
            'backup_task_uuid'=>'',
            'pool_uuid'=>'',
            'new_resource_pool_id'=>'',
            'new_resource_pool_name'=>'',
            'driver_injection'=>1,
            'driver_injection_policy'=>0,
            'transfer_compression_type'=>1,
            'new_sec_grp_id'=>'',
            'target_availability_zone'=>'',
            'new_vpc_id'=>'',
            'physical_interface_id'=>'',
            'physical_interface_name'=>'',
            'location_name'=>'',
        );
        
        
        $res = $virtualizationSupport -> createVpRecovery($arr);
        $this->do_assert($res);
    }

    public function testDescribeVpRecoveryGroup()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $virtualizationSupport -> describeVpRecoveryGroup($arr);
        $this->do_assert($res);
    }

    public function testListVpRecovery()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'type'=>0,
            'limit'=>10,
            'page'=>1,
            'where_args'=>array(
            'rule_type'=>0,),
        );
        
        
        $res = $virtualizationSupport -> listVpRecovery($arr);
        $this->do_assert($res);
    }

    public function testListVpRecoveryStatus()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'rule_uuids'=>array(
            '0'=>'11111111-1111-1111-1111-111111111111',),
            'force_refresh'=>1,
        );
        
        
        $res = $virtualizationSupport -> listVpRecoveryStatus($arr);
        $this->do_assert($res);
    }

    public function testStartVpRecovery()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'operate'=>'start',
            'rule_uuids'=>'641A27BB-B4D1-F482-1FB8-E856898626DA',
            'rule_type'=>0,
            'group_uuids'=>array(),
        );
        
        
        $res = $virtualizationSupport -> startVpRecovery($arr);
        $this->do_assert($res);
    }

    public function testStopVpRecovery()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'operate'=>'start',
            'rule_uuids'=>'641A27BB-B4D1-F482-1FB8-E856898626DA',
            'rule_type'=>0,
            'group_uuids'=>array(),
        );
        
        
        $res = $virtualizationSupport -> stopVpRecovery($arr);
        $this->do_assert($res);
    }

    public function testClearFinishVpRecovery()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'operate'=>'start',
            'rule_uuids'=>'641A27BB-B4D1-F482-1FB8-E856898626DA',
            'rule_type'=>0,
            'group_uuids'=>array(),
        );
        
        
        $res = $virtualizationSupport -> clearFinishVpRecovery($arr);
        $this->do_assert($res);
    }

    public function testDeleteVpRecovery()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'rule_uuids'=>array(
            '0'=>'11111111-1111-1111-1111-111111111111',),
            'group_uuids'=>array(),
            'delete_tgtvm'=>1,
        );
        
        
        $res = $virtualizationSupport -> deleteVpRecovery($arr);
        $this->do_assert($res);
    }

    public function testCreateVpMove()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'new_ds'=>'103-数据盘',
            'tgt_uuid'=>'7F16E670-1A61-D565-6905-9C68B9520907',
            'src_uuid'=>'7F16E670-1A61-D565-6905-9C68B9520907',
            'bk_uuid'=>'67E33CDB-D75B-15B3-367D-50C764F5A26F',
            'automate'=>0,
            'rule_name'=>'testMove1 cky',
            'new_dc'=>'i2test',
            'bk_path'=>'H:\\vp_rep\\',
            'backup_type'=>'i',
            'new_host'=>'192.168.88.103',
            'quiet_snap'=>1,
            'bkup_schedule'=>array(
            'sched_time_start'=>'0',
            'limit'=>0,
            'sched_day'=>7,
            'sched_every'=>0,
            'sched_time'=>array(),
            'sched_gap_min'=>0,),
            'quick_back'=>1,
            'lan_free'=>23,
            'vm_list'=>array(
            '0'=>array(
            'vm_name'=>'新建虚拟机1',
            'vm_ref'=>'vm-11877',
            'shd_name'=>'新建虚拟机1_move',
            'disk_list'=>array(
            '0'=>array(
            'disk_dir'=>'',
            'disk_name'=>'',
            'new_ds'=>'datastore2',
            'id'=>'',
            'is_ignored'=>1,
            'boot_index'=>1,
            'datastore'=>'',
            'size'=>'',
            'disk_provision_type'=>0,
            'disk_type'=>'',
            'cache'=>1,),),
            'scripts_type'=>'',
            'scripts'=>'',
            'cpu'=>'',
            'core_per_sock'=>'',
            'mem_mb'=>'',
            'os_type'=>1,
            'new_vm_name'=>'',
            'dynamic_mem'=>1,
            'networks'=>array(
            '0'=>array(
            'network_id'=>'',
            'network_name'=>'',
            'keep_mac'=>1,
            'source_network_name'=>'',
            'source_network_id'=>'',
            'mac_address'=>'',
            'ip_address'=>'',
            'subnet_name'=>'',
            'ip'=>'',
            'security_group_name'=>'',
            'auto_ip'=>true,
            'gateway'=>'',
            'is_defroute'=>false,
            'select'=>1,),),
            'flavor_id'=>'',
            'vm_uuid'=>'',
            'sync_down'=>false,
            'is_set'=>0,
            'orch_disks'=>array(
            '0'=>array(
            'id'=>'',
            'disk_dir'=>'',
            'ignored'=>'',
            'boot_index'=>'',
            'disk_provision_type'=>'',
            'disk_name'=>'',
            'datastore'=>'',
            'size'=>'',
            'new_ds'=>'',
            'disk_type'=>'',),),
            'orch_networks'=>array(
            '0'=>array(
            'source_network_name'=>'',
            'source_network_id'=>'',
            'mac_address'=>'',
            'keep_mac'=>'',
            'network_id'=>'',
            'network_name'=>'',
            'ip_address'=>'',
            'subnet_name'=>'',
            'auto_ip'=>false,
            'ip'=>'',
            'security_group_name'=>'',
            'gateway'=>'',
            'is_defroute'=>false,
            'select'=>1,),),
            'orch_cpu_num'=>'',
            'orch_cores_per_cpu_num'=>'',
            'orch_memory_mb'=>'',
            'priority'=>3,
            'new_vm_sec_grp_id'=>array(),
            'shd_ref'=>'',
            'shd_hostname'=>'',),),
            'new_dc_mor'=>'datacenter-2',
            'bkup_policy'=>0,
            'band_width'=>'-1',
            'rule_type'=>1,
            'auto_shutdown'=>0,
            'auto_startup'=>0,
            'biz_grp_list'=>array(),
            'auto'=>'',
            'add_drill'=>1,
            'drill_plat_uuid'=>'',
            'mem_snap'=>1,
            'overwrite'=>1,
            'network_id'=>'',
            'network_name'=>'',
            'agent_uuid'=>'',
            'data_ip_uuid'=>'7F16E670-1A61-D565-6905-9C68B9520901',
            'ip_address'=>'',
            'src_trans_mode'=>31,
            'dest_trans_mode'=>31,
            'transfer_compression'=>0,
            'consolidate_switch'=>0,
            'consolidate_disks_time'=>'',
            'concurrent_disk_threads'=>1,
            'transfer_encrypt'=>0,
            'target_project_id'=>'',
            'source_region_id'=>'',
            'target_region_id'=>'',
            'source_project_id'=>'',
            'auto_start'=>1,
            'bkup_one_time'=>'',
            'auto_shutdown_before_incremental'=>0,
            'location'=>'',
            'location_name'=>'',
            'new_resource_pool_id'=>'',
            'new_resource_pool_name'=>'',
            'driver_injection'=>1,
            'driver_injection_policy'=>0,
            'transfer_compression_type'=>1,
            'new_sec_grp_id'=>'',
            'is_fusion_storage'=>0,
            'move_type'=>0,
            'winstack_pool_id'=>'',
            'winstack_host_id'=>'',
            'new_winstack_pool_id'=>'',
            'new_winstack_host_id'=>'',
            'create_vm_type'=>1,
            'drill_create_vm_type'=>1,
            'drill_hostname'=>'',
            'sync_vm_nic'=>0,
        );
        
        
        $res = $virtualizationSupport -> createVpMove($arr);
        $this->do_assert($res);
    }

    public function testCreateVpRep()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'new_ds'=>'103-数据盘',
            'tgt_uuid'=>'7F16E670-1A61-D565-6905-9C68B9520907',
            'src_uuid'=>'7F16E670-1A61-D565-6905-9C68B9520907',
            'bk_uuid'=>'67E33CDB-D75B-15B3-367D-50C764F5A26F',
            'automate'=>0,
            'rule_name'=>'testMove1 cky',
            'new_dc'=>'i2test',
            'bk_path'=>'H:\\vp_rep\\',
            'backup_type'=>'i',
            'new_host'=>'192.168.88.103',
            'quiet_snap'=>1,
            'bkup_schedule'=>array(
            'sched_time_start'=>'0',
            'limit'=>0,
            'sched_day'=>31,
            'sched_every'=>0,
            'sched_time'=>array(),
            'sched_gap_min'=>0,),
            'quick_back'=>1,
            'lan_free'=>23,
            'vm_list'=>array(
            '0'=>array(
            'vm_name'=>'新建虚拟机1',
            'vm_ref'=>'vm-11877',
            'shd_name'=>'新建虚拟机1_move',
            'disk_list'=>array(
            '0'=>array(
            'disk_dir'=>'',
            'disk_name'=>'',
            'new_ds'=>'datastore2',
            'id'=>'',
            'is_ignored'=>1,
            'boot_index'=>1,
            'datastore'=>'',
            'size'=>'',
            'disk_provision_type'=>0,
            'disk_type'=>'',
            'cache'=>1,),),
            'scripts_type'=>'',
            'scripts'=>'',
            'cpu'=>'',
            'core_per_sock'=>'',
            'mem_mb'=>'',
            'os_type'=>1,
            'new_vm_name'=>'',
            'dynamic_mem'=>1,
            'networks'=>array(
            '0'=>array(
            'network_id'=>'',
            'network_name'=>'',
            'keep_mac'=>1,
            'source_network_name'=>'',
            'source_network_id'=>'',
            'mac_address'=>'',
            'ip_address'=>'',
            'subnet_name'=>'',
            'ip'=>'',
            'security_group_name'=>'',
            'auto_ip'=>true,
            'gateway'=>'',
            'is_defroute'=>false,
            'select'=>1,),),
            'flavor_id'=>'',
            'vm_uuid'=>'',
            'sync_down'=>false,
            'is_set'=>0,
            'orch_disks'=>array(
            '0'=>array(
            'id'=>'',
            'disk_dir'=>'',
            'ignored'=>'',
            'boot_index'=>'',
            'disk_provision_type'=>'',
            'disk_name'=>'',
            'datastore'=>'',
            'size'=>'',
            'new_ds'=>'',
            'disk_type'=>'',),),
            'orch_networks'=>array(
            '0'=>array(
            'source_network_name'=>'',
            'source_network_id'=>'',
            'mac_address'=>'',
            'keep_mac'=>'',
            'network_id'=>'',
            'network_name'=>'',
            'ip_address'=>'',
            'subnet_name'=>'',
            'auto_ip'=>false,
            'ip'=>'',
            'security_group_name'=>'',
            'gateway'=>'',
            'is_defroute'=>false,
            'select'=>1,),),
            'orch_cpu_num'=>'',
            'orch_cores_per_cpu_num'=>'',
            'orch_memory_mb'=>'',
            'priority'=>3,
            'new_vm_sec_grp_id'=>array(),
            'shd_ref'=>'',
            'shd_hostname'=>'',),),
            'new_dc_mor'=>'datacenter-2',
            'bkup_policy'=>0,
            'band_width'=>'-1',
            'rule_type'=>1,
            'auto_shutdown'=>0,
            'auto_startup'=>0,
            'biz_grp_list'=>array(),
            'auto'=>'',
            'add_drill'=>1,
            'drill_plat_uuid'=>'',
            'mem_snap'=>1,
            'overwrite'=>1,
            'network_id'=>'',
            'network_name'=>'',
            'agent_uuid'=>'',
            'data_ip_uuid'=>'7F16E670-1A61-D565-6905-9C68B9520901',
            'ip_address'=>'',
            'src_trans_mode'=>31,
            'dest_trans_mode'=>31,
            'transfer_compression'=>0,
            'consolidate_switch'=>0,
            'consolidate_disks_time'=>'',
            'concurrent_disk_threads'=>1,
            'transfer_encrypt'=>0,
            'target_project_id'=>'',
            'source_region_id'=>'',
            'target_region_id'=>'',
            'source_project_id'=>'',
            'auto_start'=>1,
            'bkup_one_time'=>'',
            'auto_shutdown_before_incremental'=>0,
            'location'=>'',
            'location_name'=>'',
            'new_resource_pool_id'=>'',
            'new_resource_pool_name'=>'',
            'driver_injection'=>1,
            'driver_injection_policy'=>0,
            'transfer_compression_type'=>1,
            'new_sec_grp_id'=>'',
            'is_fusion_storage'=>0,
            'move_type'=>0,
            'winstack_pool_id'=>'',
            'winstack_host_id'=>'',
            'new_winstack_pool_id'=>'',
            'new_winstack_host_id'=>'',
            'create_vm_type'=>1,
            'drill_create_vm_type'=>1,
            'drill_hostname'=>'',
            'sync_vm_nic'=>0,
        );
        
        
        $res = $virtualizationSupport -> createVpRep($arr);
        $this->do_assert($res);
    }

    public function testBatchCreateVpRep()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'vm_list'=>array(
            '0'=>array(
            'vm_name'=>'新建虚拟机1',
            'vm_ref'=>'vm-11877',
            'shd_name'=>'新建虚拟机1_move',
            'disk_list'=>array(
            '0'=>array(
            'disk_path'=>'',
            'disk_name'=>'[datastore1 (1)] 测试11_临时测试11/测试11_临时测试11_5-000002.vmdk',
            'new_ds'=>'datastore2',
            'id'=>'',
            'is_ignored'=>1,),),
            'scripts_type'=>'',
            'scripts'=>'',
            'cpu'=>'',
            'core_per_sock'=>'',
            'mem_mb'=>'',
            'os_type'=>1,
            'new_vm_name'=>'',
            'dynamic_mem'=>1,
            'networks'=>array(
            '0'=>array(
            'network_id'=>'',
            'network_name'=>'',
            'keep_mac'=>1,
            'source_network_name'=>'',
            'source_network_id'=>'',
            'mac_address'=>'',),),
            'bk_uuid'=>'',
            'bk_path'=>'',
            'add_drill'=>1,
            'auto'=>1,
            'vm_uuid'=>'',
            'shd_hostname'=>'',),),
            'base_info_list'=>array(
            'rule_type'=>0,
            'biz_grp_list'=>'',
            'quick_back'=>1,
            'quiet_snap'=>1,
            'lan_free'=>23,
            'mem_snap'=>1,
            'band_width'=>'-1',
            'auto_shutdown'=>1,
            'auto_startup'=>0,
            'overwrite'=>1,
            'bkup_schedule'=>array(
            'sched_time_start'=>'',
            'limit'=>1,
            'sched_day'=>'',
            'sched_every'=>1,
            'sched_time'=>array(),
            'sched_gap_min'=>0,),
            'bkup_policy'=>1,
            'backup_type'=>'i',
            'automate'=>0,
            'tgt_uuid'=>'',
            'new_dc'=>'',
            'new_dc_mor'=>'',
            'new_host'=>'',
            'new_ds'=>'',
            'network_id'=>'',
            'network_name'=>'',
            'create_vm_type'=>1,),
            'common_params'=>array(
            'batch_name'=>'',
            'rep_prefix'=>'',
            'rep_sufix'=>'',
            'variable_type'=>1,),
        );
        
        
        $res = $virtualizationSupport -> batchCreateVpRep($arr);
        $this->do_assert($res);
    }

    public function testModifyVpRepGroup()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'new_ds'=>'103-数据盘',
            'support_cbt'=>1,
            'tgt_uuid'=>'7F16E670-1A61-D565-6905-9C68B9520907',
            'del_bkup_swap'=>0,
            'src_uuid'=>'7F16E670-1A61-D565-6905-9C68B9520907',
            'bk_uuid'=>'67E33CDB-D75B-15B3-367D-50C764F5A26F',
            'automate'=>0,
            'rule_name'=>'testMove1 cky',
            'new_dc'=>'i2test',
            'bk_path'=>'H:\\vp_rep\\',
            'backup_type'=>'i',
            'new_host'=>'192.168.88.103',
            'quiet_snap'=>1,
            'bkup_schedule'=>array(
            'sched_time_start'=>'0',
            'limit'=>0,
            'sched_day'=>21,
            'sched_every'=>0,
            'sched_time'=>array(),
            'sched_gap_min'=>0,),
            'quick_back'=>1,
            'del_bkup_data'=>0,
            'lan_free'=>23,
            'vm_list'=>array(
            '0'=>array(
            'vm_name'=>'新建虚拟机1',
            'vm_ref'=>'vm-11877',
            'shd_name'=>'新建虚拟机1_move',
            'overwrite'=>0,
            'disk_list'=>array(
            '0'=>array(
            'disk_path'=>'',
            'disk_name'=>'[datastore1 (1)] 测试11_临时测试11/测试11_临时测试11_5-000002.vmdk',
            'new_ds'=>'datastore2',
            'id'=>'',),),),),
            'time_window'=>'',
            'new_dc_mor'=>'datacenter-2',
            'bkup_policy'=>0,
            'band_width'=>'-1',
            'rule_type'=>1,
            'auto_shutdown'=>1,
            'data_ip_uuid'=>'',
            'new_resource_pool_id'=>'',
            'new_resource_pool_name'=>'',
            'driver_injection'=>1,
            'driver_injection_policy'=>0,
            'is_fusion_storage'=>0,
            'move_type'=>1,
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $virtualizationSupport -> modifyVpRepGroup($arr);
        $this->do_assert($res);
    }

    public function testDescribeVpMove()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $virtualizationSupport -> describeVpMove($arr);
        $this->do_assert($res);
    }

    public function testDescribeVpRep()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $virtualizationSupport -> describeVpRep($arr);
        $this->do_assert($res);
    }

    public function testModifyVpMove()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'new_ds'=>'',
            'support_cbt'=>1,
            'tgt_uuid'=>'',
            'del_bkup_swap'=>1,
            'src_uuid'=>'6B7bb16f-DaF5-D8aF-cDD5-dd4ab383217D',
            'bk_uuid'=>'',
            'automate'=>1,
            'rule_name'=>'',
            'new_dc'=>'',
            'bk_path'=>'',
            'backup_type'=>'',
            'new_host'=>'',
            'quiet_snap'=>1,
            'bkup_schedule'=>array(),
            'quick_back'=>1,
            'del_bkup_data'=>1,
            'lan_free'=>1,
            'vm_list'=>array(),
            'time_window'=>'',
            'new_dc_mor'=>'',
            'bkup_policy'=>1,
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $virtualizationSupport -> modifyVpMove($arr);
        $this->do_assert($res);
    }

    public function testModifyVpRep()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'new_ds'=>'',
            'support_cbt'=>1,
            'tgt_uuid'=>'',
            'del_bkup_swap'=>1,
            'src_uuid'=>'1f98799F-dF43-9DEA-58cD-aBFff7eEbb82',
            'bk_uuid'=>'',
            'automate'=>1,
            'rule_name'=>'',
            'new_dc'=>'',
            'bk_path'=>'',
            'backup_type'=>'',
            'new_host'=>'',
            'quiet_snap'=>1,
            'bkup_schedule'=>array(),
            'quick_back'=>1,
            'del_bkup_data'=>1,
            'lan_free'=>1,
            'vm_list'=>array(),
            'time_window'=>'',
            'new_dc_mor'=>'',
            'bkup_policy'=>1,
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $virtualizationSupport -> modifyVpRep($arr);
        $this->do_assert($res);
    }

    public function testListVpMove()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'page'=>1,
            'limit'=>10,
            'type'=>'',
            'status'=>'',
        );
        
        
        $res = $virtualizationSupport -> listVpMove($arr);
        $this->do_assert($res);
    }

    public function testListVpRep()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'page'=>1,
            'limit'=>10,
            'type'=>'',
            'status'=>'',
        );
        
        
        $res = $virtualizationSupport -> listVpRep($arr);
        $this->do_assert($res);
    }

    public function testListVpMoveStatus()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'rule_uuids'=>array(
            '0'=>'11111111-1111-1111-1111-111111111111',),
            'force_refresh'=>1,
        );
        
        
        $res = $virtualizationSupport -> listVpMoveStatus($arr);
        $this->do_assert($res);
    }

    public function testListVpRepStatus()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'rule_uuids'=>array(
            '0'=>'11111111-1111-1111-1111-111111111111',),
            'force_refresh'=>1,
        );
        
        
        $res = $virtualizationSupport -> listVpRepStatus($arr);
        $this->do_assert($res);
    }

    public function testStopVpMove()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'operate'=>'start',
            'rule_uuids'=>'1C89A121-6B03-24B2-9273-D4B93C0687AD',
            'group_uuids'=>array(),
        );
        
        
        $res = $virtualizationSupport -> stopVpMove($arr);
        $this->do_assert($res);
    }

    public function testStartVpMove()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'operate'=>'start',
            'rule_uuids'=>'1C89A121-6B03-24B2-9273-D4B93C0687AD',
            'group_uuids'=>array(),
        );
        
        
        $res = $virtualizationSupport -> startVpMove($arr);
        $this->do_assert($res);
    }

    public function testMoveVpMove()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'operate'=>'start',
            'rule_uuids'=>'1C89A121-6B03-24B2-9273-D4B93C0687AD',
            'group_uuids'=>array(),
        );
        
        
        $res = $virtualizationSupport -> moveVpMove($arr);
        $this->do_assert($res);
    }

    public function testFinishVpMove()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'operate'=>'start',
            'rule_uuids'=>'1C89A121-6B03-24B2-9273-D4B93C0687AD',
            'group_uuids'=>array(),
        );
        
        
        $res = $virtualizationSupport -> finishVpMove($arr);
        $this->do_assert($res);
    }

    public function testCreateTargeVm()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'operate'=>'start',
            'rule_uuids'=>'1C89A121-6B03-24B2-9273-D4B93C0687AD',
            'group_uuids'=>array(),
        );
        
        
        $res = $virtualizationSupport -> createTargeVm($arr);
        $this->do_assert($res);
    }

    public function testStopVpRep()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'snap_point'=>'',
            'op_code'=>'',
            'bkup_type'=>'',
            'power_on'=>1,
            'operate'=>'start',
            'rule_uuids'=>'1C89A121-6B03-24B2-9273-D4B93C0687AD',
            'group_uuids'=>array(),
            'power_off'=>1,
        );
        
        
        $res = $virtualizationSupport -> stopVpRep($arr);
        $this->do_assert($res);
    }

    public function testStartVpRep()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'snap_point'=>'',
            'op_code'=>'',
            'bkup_type'=>'',
            'power_on'=>1,
            'operate'=>'start',
            'rule_uuids'=>'1C89A121-6B03-24B2-9273-D4B93C0687AD',
            'group_uuids'=>array(),
            'power_off'=>1,
        );
        
        
        $res = $virtualizationSupport -> startVpRep($arr);
        $this->do_assert($res);
    }

    public function testFailoverVpRep()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'snap_point'=>'',
            'op_code'=>'',
            'bkup_type'=>'',
            'power_on'=>1,
            'operate'=>'start',
            'rule_uuids'=>'1C89A121-6B03-24B2-9273-D4B93C0687AD',
            'group_uuids'=>array(),
            'power_off'=>1,
        );
        
        
        $res = $virtualizationSupport -> failoverVpRep($arr);
        $this->do_assert($res);
    }

    public function testFailbackVpRep()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'snap_point'=>'',
            'op_code'=>'',
            'bkup_type'=>'',
            'power_on'=>1,
            'operate'=>'start',
            'rule_uuids'=>'1C89A121-6B03-24B2-9273-D4B93C0687AD',
            'group_uuids'=>array(),
            'power_off'=>1,
        );
        
        
        $res = $virtualizationSupport -> failbackVpRep($arr);
        $this->do_assert($res);
    }

    public function testStartImmediatelyVpRep()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'snap_point'=>'',
            'op_code'=>'',
            'bkup_type'=>'',
            'power_on'=>1,
            'operate'=>'start',
            'rule_uuids'=>'1C89A121-6B03-24B2-9273-D4B93C0687AD',
            'group_uuids'=>array(),
            'power_off'=>1,
        );
        
        
        $res = $virtualizationSupport -> startImmediatelyVpRep($arr);
        $this->do_assert($res);
    }

    public function testDeleteVpMove()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'rule_uuids'=>array(
            '0'=>'11111111-1111-1111-1111-111111111111',),
            'group_uuids'=>array(),
            'delete_tgtvm'=>1,
        );
        
        
        $res = $virtualizationSupport -> deleteVpMove($arr);
        $this->do_assert($res);
    }

    public function testDeleteVpRep()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'rule_uuids'=>array(
            '0'=>'11111111-1111-1111-1111-111111111111',),
            'group_uuids'=>array(),
            'delete_tgtvm'=>1,
        );
        
        
        $res = $virtualizationSupport -> deleteVpRep($arr);
        $this->do_assert($res);
    }

    public function testListVpRepPointList()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'type'=>'',
            'all'=>1,
            'include_snapshot_info'=>1,
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $virtualizationSupport -> listVpRepPointList($arr);
        $this->do_assert($res);
    }

    public function testListMovePointList()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'type'=>'',
            'all'=>1,
            'include_snapshot_info'=>1,
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $virtualizationSupport -> listMovePointList($arr);
        $this->do_assert($res);
    }

    public function testDelPoint()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'snap_name'=>'',
            'type'=>'',
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $virtualizationSupport -> delPoint($arr);
        $this->do_assert($res);
    }

    public function testDescribeSnapshotInfo()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'snap_name'=>'',
            'type'=>'',
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $virtualizationSupport -> describeSnapshotInfo($arr);
        $this->do_assert($res);
    }

    public function testListVpDrill()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'page'=>1,
            'limit'=>10,
        );
        
        
        $res = $virtualizationSupport -> listVpDrill($arr);
        $this->do_assert($res);
    }

    public function testCreateVpDrill()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'rule_name'=>'',
            'rule_type'=>0,
            'vp_uuid'=>'',
            'auto'=>0,
            'vm_list'=>array(
            '0'=>array(
            'vm_name'=>'',
            'new_vm_name'=>'',
            'vm_ref'=>'99',
            'cpu'=>1,
            'ver_sig'=>'',
            'core_per_sock'=>1,
            'mem_mb'=>1024,
            'scripts'=>'',
            'bk_uuid'=>'',
            'bk_path'=>'',
            'time'=>'',
            'original_rule_uuid'=>'',
            'scripts_type'=>1,
            'os_type'=>1,
            'wk_uuid'=>'',
            'src_uuid'=>'',
            'data_ip_uuid'=>'',
            'bk_type'=>0,
            'bucket_'=>'',
            'sto_uuid'=>'',
            'bucket_path'=>'',
            'disk_list'=>array(
            '0'=>array(
            'datastore'=>'',
            'new_ds'=>'',
            'is_ignored'=>1,
            'size'=>'',
            'boot_index'=>1,
            'disk_dir'=>'',
            'disk_name'=>'',
            'id'=>'',),),
            'networks'=>array(
            '0'=>array(
            'source_network_name'=>'',
            'source_network_id'=>'',
            'mac_address'=>'',
            'keep_mac'=>'',
            'network_id'=>'',
            'network_name'=>'',
            'ip_address'=>'',
            'subnet_name'=>'',
            'auto_ip'=>true,
            'ip'=>'',
            'security_group_name'=>'',
            'select'=>1,),),
            'new_flavor_id'=>'',
            'new_network_id'=>'',
            'new_network_name'=>'',),),
            'quick_back'=>1,
            'backup_type'=>'i',
            'lan_free'=>23,
            'del_bkup_data'=>0,
            'automate'=>0,
            'auto_shutdown'=>1,
            'bkup_policy'=>0,
            'bkup_schedule'=>array(
            'sched_time_start'=>'0',
            'limit'=>0,
            'sched_day'=>6,
            'sched_every'=>0,
            'sched_time'=>array(),
            'sched_gap_min'=>0,),
            'create_vm_type'=>1,
            'hostname'=>'',
        );
        
        
        $res = $virtualizationSupport -> createVpDrill($arr);
        $this->do_assert($res);
    }

    public function testDescribeVpDrill()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $virtualizationSupport -> describeVpDrill($arr);
        $this->do_assert($res);
    }

    public function testDeleteVpDrill()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'rule_uuids'=>array(
            '0'=>'11111111-1111-1111-1111-111111111111',),
            'group_uuids'=>array(),
            'delete_tgtvm'=>0,
        );
        
        
        $res = $virtualizationSupport -> deleteVpDrill($arr);
        $this->do_assert($res);
    }

    public function testListVpDrillStatus()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'rule_uuids'=>array(
            '0'=>'11111111-1111-1111-1111-111111111111',),
            'force_refresh'=>1,
        );
        
        
        $res = $virtualizationSupport -> listVpDrillStatus($arr);
        $this->do_assert($res);
    }

    public function testGetConsoleUrl()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'rule_uuid'=>'',
        );
        
        
        $res = $virtualizationSupport -> getConsoleUrl($arr);
        $this->do_assert($res);
    }

    public function testStopVpDrill()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'operate'=>'',
            'rule_uuids'=>'[C6335F62-2565-1957-4BB9-587F2FF46B00]',
            'group_uuids'=>array(),
            'status'=>'',
            'msg'=>'',
        );
        
        
        $res = $virtualizationSupport -> stopVpDrill($arr);
        $this->do_assert($res);
    }

    public function testStartVpDrill()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'operate'=>'',
            'rule_uuids'=>'[C6335F62-2565-1957-4BB9-587F2FF46B00]',
            'group_uuids'=>array(),
            'status'=>'',
            'msg'=>'',
        );
        
        
        $res = $virtualizationSupport -> startVpDrill($arr);
        $this->do_assert($res);
    }

    public function testSetStatusVpDrill()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'operate'=>'',
            'rule_uuids'=>'[C6335F62-2565-1957-4BB9-587F2FF46B00]',
            'group_uuids'=>array(),
            'status'=>'',
            'msg'=>'',
        );
        
        
        $res = $virtualizationSupport -> setStatusVpDrill($arr);
        $this->do_assert($res);
    }

    public function testCreateVpFileRecovery()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'rule_name'=>'',
            'attach_dir'=>'',
            'config_addr'=>'',
            'config_port'=>'',
            'bk_uuid'=>'',
            'bk_path'=>'',
            'vm_name'=>'',
            'version_id'=>'',
            'tgt_uuid'=>'',
            'tgt_path'=>'',
            'files'=>array(),
            'version_time'=>'',
            'bk_type'=>0,
            'sto_uuid'=>'',
            'bucket'=>'',
            'bucket_path'=>'',
            'npsvr_uuid'=>'',
        );
        
        
        $res = $virtualizationSupport -> createVpFileRecovery($arr);
        $this->do_assert($res);
    }

    public function testModifyVpFileRecovery()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'rule_uuid'=>'',
            'rule_name'=>'',
            'config_addr'=>'',
            'config_port'=>'',
            'attach_dir'=>'',
            'bk_uuid'=>'',
            'bk_path'=>'',
            'vm_name'=>'',
            'version_id'=>'',
            'tgt_uuid'=>'',
            'random_str'=>'',
            'attach_path'=>'',
            'tgt_path'=>'',
            'files'=>array(),
            'version_time'=>'',
            'npsvr_uuid'=>'',
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $virtualizationSupport -> modifyVpFileRecovery($arr);
        $this->do_assert($res);
    }

    public function testListVpFileRecovery()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'page'=>1,
            'limit'=>10,
        );
        
        
        $res = $virtualizationSupport -> listVpFileRecovery($arr);
        $this->do_assert($res);
    }

    public function testDescribeVpFileRecovery()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $virtualizationSupport -> describeVpFileRecovery($arr);
        $this->do_assert($res);
    }

    public function testAttachVpFileRecovery()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'operate'=>'',
            'rule_uuids'=>array(),
        );
        
        
        $res = $virtualizationSupport -> attachVpFileRecovery($arr);
        $this->do_assert($res);
    }

    public function testDetachVpFileRecovery()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'operate'=>'',
            'rule_uuids'=>array(),
        );
        
        
        $res = $virtualizationSupport -> detachVpFileRecovery($arr);
        $this->do_assert($res);
    }

    public function testListVpFileRecoveryStatus()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'rule_uuids'=>array(),
            'force_refresh'=>1,
        );
        
        
        $res = $virtualizationSupport -> listVpFileRecoveryStatus($arr);
        $this->do_assert($res);
    }

    public function testDeleteVpFileRecovery()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'rule_uuids'=>array(),
        );
        
        
        $res = $virtualizationSupport -> deleteVpFileRecovery($arr);
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