<?php
namespace i2up\Test\v20250123\fsp;

use i2up\fsp\v20250123\FspBackup;
use i2up\common\Auth;
                
class FspBackupTest extends \PHPUnit_Framework_TestCase
 {
    private $fspBackup;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> fspBackup = new FspBackup(new Auth());
    }

    public function testListFspBackupNic()
    {
        $fspBackup = $this -> fspBackup;
        $arr = array(
            'wk_uuid'=>'F85DFEC0-149E-373D-0B9E-3DA9A5C43940',
            'bk_uuid'=>'42614852-BB62-1EF7-FED0-D2354BF3149D',
        );
        
        
        $res = $fspBackup -> listFspBackupNic($arr);
        $this->do_assert($res);
    }

    public function testListFspBackupDir()
    {
        $fspBackup = $this -> fspBackup;
        $arr = array(
            'wk_uuid'=>'F85DFEC0-149E-373D-0B9E-3DA9A5C43940',
            'fsp_uuid'=>'',
        );
        
        
        $res = $fspBackup -> listFspBackupDir($arr);
        $this->do_assert($res);
    }

    public function testVerifyFspBackupCoopySpace()
    {
        $fspBackup = $this -> fspBackup;
        $arr = array(
            'bk_path'=>array(
            '0'=>'fsp_bk',),
            'bk_uuid'=>'F85DFEC0-149E-373D-0B9E-3DA9A5C43940',
            'wk_uuid'=>'42614852-BB62-1EF7-FED0-D2354BF3149D',
            'excl_path'=>array(
            '0'=>'/cgroup/',
            '1'=>'/dev/',
            '2'=>'/etc/X11/xorg.conf/',
            '3'=>'/etc/init.d/i2node/',
            '4'=>'/etc/rc.d/init.d/i2node/',
            '5'=>'/etc/sdata/',
            '6'=>'/lost+found/',
            '7'=>'/media/',
            '8'=>'/mnt/',
            '9'=>'/proc/',
            '10'=>'/run/',
            '11'=>'/selinux/',
            '12'=>'/sys/',
            '13'=>'/tmp/',
            '14'=>'/usr/local/sdata/',
            '15'=>'/var/i2/',
            '16'=>'/var/i2data/',
            '17'=>'/var/lock/',
            '18'=>'/var/run/vmblock-fuse/',),
            'wk_path'=>array(
            '0'=>'/',),
            'storage_left_size'=>'',
        );
        
        
        $res = $fspBackup -> verifyFspBackupCoopySpace($arr);
        $this->do_assert($res);
    }

    public function testVerifyFspBackupLicense()
    {
        $fspBackup = $this -> fspBackup;
        $arr = array(
            'wk_uuid'=>'42614852-BB62-1EF7-FED0-D2354BF3149D',
        );
        
        
        $res = $fspBackup -> verifyFspBackupLicense($arr);
        $this->do_assert($res);
    }

    public function testVerifyFspBackupOldRule()
    {
        $fspBackup = $this -> fspBackup;
        $arr = array(
            'bk_uuid'=>'F85DFEC0-149E-373D-0B9E-3DA9A5C43940',
            'bk_path'=>array(
            '0'=>'/fsp_bk/',),
            'wk_uuid'=>'42614852-BB62-1EF7-FED0-D2354BF3149D',
        );
        
        
        $res = $fspBackup -> verifyFspBackupOldRule($arr);
        $this->do_assert($res);
    }

    public function testVerifyFspBackupOsVersion()
    {
        $fspBackup = $this -> fspBackup;
        $arr = array(
            'bk_uuid'=>'F85DFEC0-149E-373D-0B9E-3DA9A5C43940',
            'wk_uuid'=>'42614852-BB62-1EF7-FED0-D2354BF3149D',
        );
        
        
        $res = $fspBackup -> verifyFspBackupOsVersion($arr);
        $this->do_assert($res);
    }

    public function testListFspBackupDriverInfo()
    {
        $fspBackup = $this -> fspBackup;
        $arr = array(
            'node_uuid'=>'',
        );
        
        
        $res = $fspBackup -> listFspBackupDriverInfo($arr);
        $this->do_assert($res);
    }

    public function testCreateFspBackup()
    {
        $fspBackup = $this -> fspBackup;
        $arr = array(
            'fsp_backup'=>array(
            'secret_key'=>'',
            'band_width'=>'',
            'mirr_open_type'=>'0',
            'service_uuid'=>'',
            'mirr_sync_flag'=>'0',
            'excl_path'=>array(
            '0'=>'/cgroup/',
            '1'=>'/dev/',
            '2'=>'/etc/X11/xorg.conf/',
            '3'=>'/etc/init.d/i2node/',
            '4'=>'/etc/rc.d/init.d/i2node/',
            '5'=>'/etc/sdata/',
            '6'=>'/lost+found/',
            '7'=>'/media/',
            '8'=>'/mnt/',
            '9'=>'/proc/',
            '10'=>'/run/',
            '11'=>'/selinux/',
            '12'=>'/sys/',
            '13'=>'/tmp/',
            '14'=>'/usr/local/sdata/',
            '15'=>'/var/i2/',
            '16'=>'/var/i2data/',
            '17'=>'/var/lock/',
            '18'=>'/var/run/vmblock-fuse/',),
            'bkup_one_time'=>0,
            'encrypt_switch'=>'0',
            'mirr_sync_attr'=>'1',
            'bk_uuid'=>'F85DFEC0-149E-373D-0B9E-3DA9A5C43940',
            'wk_data_type'=>1,
            'bk_path'=>array(
            '0'=>'/fsp_bk/',),
            'sync_item'=>'/',
            'bkup_policy'=>2,
            'mirr_file_check'=>'0',
            'compress'=>'0',
            'monitor_type'=>0,
            'failover'=>0,
            'wk_path'=>array(
            '0'=>'/',),
            'fsp_name'=>'test',
            'wk_uuid'=>'42614852-BB62-1EF7-FED0-D2354BF3149D',
            'fsp_wk_shut_flag'=>'2',
            'bk_data_type'=>1,
            'bkup_schedule'=>array(
            '0'=>array(
            'sched_day'=>6,
            'sched_time'=>'08:36',
            'sched_every'=>2,
            'limit'=>32,
            'backup_type'=>0,
            'policys'=>'"每天22:00自动执行"',
            'backup_type_show'=>'"全备"',
            'running_time'=>'"22:00"',),),
            'fsp_type'=>3,
            'random_str'=>'11111111-1111-1111-1111-111111111111',
            'del_policy'=>1,
            'timeout'=>1,
            'cbt_switch'=>1,
            'threshold_vaild_byte'=>'',
            'advanced_policy'=>array(
            'bk_cdp'=>1,
            'execute_interval'=>1,
            'cdp_detail'=>1,
            'cdp_daily'=>1,
            'cdp_param'=>'',
            'cdp_switch'=>1,
            'cdp_snapshot_days'=>1,
            'cdp_snapshot_execute_interval'=>1,
            'cdp_keep_data'=>1,),
            'vp_uuid'=>'',
            'storage_uuid'=>'',
            'verify_settings'=>array(
            'vm_list'=>array(
            '0'=>array(
            'vm_name'=>'新建虚拟机1',
            'orch_vm_name'=>'新建虚拟机1_20200612100700',
            'scripts_type'=>'',
            'scripts'=>'',
            'orch_disks'=>array(
            '0'=>array(
            'is_ignored'=>'',
            'disk_name'=>'',
            'disk_path'=>'',
            'new_ds'=>'',
            'id'=>'',
            'boot_index'=>'',
            'file_name'=>'',
            'size'=>'',),),
            'orch_networks'=>array(
            '0'=>array(
            'source_network_name'=>'',
            'mac_address'=>'',
            'keep_mac'=>'',
            'network_id'=>'',
            'network_name'=>'',
            'subnet_name'=>'',
            'ip'=>'',
            'security_group_name'=>'',),),
            'orch_cpu_num'=>'',
            'orch_cores_per_cpu_num'=>'',
            'orch_memory_mb'=>'',
            'custom_config'=>1,),),
            'drill_plat_uuid'=>'',
            'auto'=>'',
            'add_drill'=>'',
            'hostname'=>'',
            'create_vm_type'=>'1',),
            'resource_settings'=>array(
            'new_host'=>'',
            'new_ds'=>'',
            'new_dc_mor'=>'',
            'new_dc'=>'',
            'tgt_uuid'=>'',
            'network_name'=>'',
            'vm_list'=>array(
            '0'=>array(
            'vm_name'=>'',
            'new_vm_name'=>'',
            'custom_config'=>'',
            'cpu'=>'',
            'core_per_sock'=>'',
            'mem_mb'=>'',
            'networks'=>array(
            '0'=>array(
            'source_network_name'=>'',
            'mac_address'=>'',
            'keep_mac'=>'',
            'network_id'=>'',
            'network_name'=>'',
            'subnet_name'=>'',
            'ip'=>'',
            'security_group_name'=>'',
            'auto_ip'=>false,
            'gateway'=>'',
            'is_defroute'=>false,),),
            'disk_list'=>array(
            '0'=>array(
            'is_ignored'=>'',
            'disk_name'=>'',
            'disk_path'=>'',
            'new_ds'=>'',
            'id'=>'',
            'boot_index'=>'',
            'file_name'=>'',
            'size'=>'',
            'disk_provision_type'=>1,),),
            'dynamic_mem'=>'',
            'new_vm_hostname'=>'',),),
            'network_id'=>'',
            'bk_uuid'=>'',
            'bk_path'=>array(),
            'create_vm_type'=>1,),
            'data_ip_uuid'=>'',
            'bk_file_crypt'=>0,
            'bk_crypt_type'=>1,
            'bk_crypt_key'=>'',
            'encrypt'=>0,
            'thread_num'=>1,
            'start_type'=>0,
            'src_dedupe_switch'=>1,
            'oph_policy'=>0,
            'dedupe_uuid'=>'',
            'dedupe_secret_key'=>'',
            'database_switch'=>0,
            'database_type'=>0,
            'oracle_dbagent_param'=>array(
            'oracle_sid'=>'',
            'sql_plus_path'=>'',
            'username'=>'',
            'password'=>'',
            'port'=>'',
            'table_space'=>'',
            'timeout'=>'',),
            'mysql_dbagent_param'=>array(
            'mysql_path'=>'',
            'username'=>'',
            'password'=>'',
            'port'=>'',
            'database_name'=>'',
            'timeout'=>'',),
            'sqlserver_dbagent_param'=>array(
            'timeout'=>'',
            'enable'=>'',),
            'custom_dbagent_param'=>array(
            'pre_snapshot_script'=>'',
            'post_snapshot_script'=>'',),
            'bk_storage'=>1,
            'pool_uuid'=>'',
            'in_failover_switch'=>0,
            'in_failover_settings'=>array(
            'virtual_cidr'=>'',
            'virtuai_gateway'=>'',
            'virtual_ip'=>'',
            'virtual_port'=>1,
            'virtual_data_ip'=>'',
            'oph_policy'=>0,
            'rc_dir'=>array(),
            'data_path'=>array(),
            'excl_dir'=>array(),),
            'proxy_uuid'=>'',
            'obs_settings'=>array(
            'sto_uuid'=>'',
            'bucket_name'=>'',
            'bucket_path'=>'',),
            'del_shared_dir_switch'=>1,),
        );
        
        
        $res = $fspBackup -> createFspBackup($arr);
        $this->do_assert($res);
    }

    public function testModifyFspBackup()
    {
        $fspBackup = $this -> fspBackup;
        $arr = array(
            'fsp_backup'=>array(
            'secret_key'=>'',
            'band_width'=>'3*03:00-14:00*2m',
            'mirr_open_type'=>'0',
            'service_uuid'=>'',
            'mirr_sync_flag'=>'0',
            'excl_path'=>'["/cgroup/","/dev/","/etc/X11/xorg.conf/","/etc/init.d/i2node/","/etc/rc.d/init.d/i2node/","/etc/sdata/","/lost+found/","/media/","/mnt/","/proc/","/run/","/selinux/","/sys/","/tmp/","/usr/local/sdata/","/var/i2/","/var/i2data/","/var/lock/","/var/run/vmblock-fuse/"],',
            'bkup_one_time'=>1515568566,
            'encrypt_switch'=>'0',
            'bk_type'=>0,
            'mirr_sync_attr'=>'1',
            'bk_uuid'=>'C11FE572-5207-3359-DB85-001E95F5F185',
            'wk_data_type'=>1,
            'bk_path'=>'["/FSPback0107/"],',
            'sync_item'=>'/',
            'bkup_policy'=>0,
            'net_mapping_type'=>'2',
            'snapshot_policy'=>'0',
            'mirr_file_check'=>'0',
            'snapshot_interval'=>'0',
            'compress'=>'0',
            'monitor_type'=>0,
            'failover'=>'0',
            'wk_path'=>'["/","/boot/"],',
            'snapshot_limit'=>'24',
            'snapshot_switch'=>0,
            'fsp_name'=>'rrrrr',
            'wk_uuid'=>'CE77F3D6-A6E3-A385-CE66-712313B7DDE8',
            'fsp_wk_shut_flag'=>'2',
            'bk_data_type'=>0,
            'bkup_schedule'=>array(
            '0'=>array(
            'sched_day'=>22,
            'sched_time'=>'01:06',
            'sched_every'=>2,
            'limit'=>29,
            'backup_type'=>1,
            'backup_type_show'=>'"全备"',
            'running_time'=>'"22:00"',
            'policys'=>'"每天22:00自动执行"',),),
            'fsp_type'=>1,
            'random_str'=>'11111111-1111-1111-1111-111111111111',
            'timeout'=>1,
            'cbt_switch'=>1,
            'threshold_vaild_byte'=>1,
            'advanced_policy'=>array(
            'bk_cdp'=>1,
            'execute_interval'=>1,
            'cdp_detail'=>1,
            'cdp_daily'=>1,
            'cdp_switch'=>1,
            'cdp_param'=>'',
            'cdp_keep_data'=>1,),
            'data_ip_uuid'=>'CE77F3D6-A6E3-A385-CE66-712313B7DDE8',
            'thread_num'=>1,
            'in_failover_switch'=>1,
            'in_failover_settings'=>array(
            'virtual_cidr'=>'',
            'virtuai_gateway'=>'',
            'virtual_ip'=>'',
            'virtual_port'=>1,
            'virtual_data_ip'=>'',
            'oph_policy'=>1,
            'data_path'=>array(),
            'rc_dir'=>array(),
            'excl_dir'=>array(),),),
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $fspBackup -> modifyFspBackup($arr);
        $this->do_assert($res);
    }

    public function testDescribeFspBackup()
    {
        $fspBackup = $this -> fspBackup;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $fspBackup -> describeFspBackup($arr);
        $this->do_assert($res);
    }

    public function testDeleteFspBackup()
    {
        $fspBackup = $this -> fspBackup;
        $arr = array(
            'fsp_uuids'=>array(
            '0'=>'11111111-1111-1111-1111-111111111111',),
            'del_policy'=>1,
            'force'=>1,
            'recycle'=>0,
        );
        
        
        $res = $fspBackup -> deleteFspBackup($arr);
        $this->do_assert($res);
    }

    public function testListFspBackup()
    {
        $fspBackup = $this -> fspBackup;
        $arr = array(
            'type'=>3,
            'limit'=>10,
            'page'=>1,
        );
        
        
        $res = $fspBackup -> listFspBackup($arr);
        $this->do_assert($res);
    }

    public function testStartFspBackup()
    {
        $fspBackup = $this -> fspBackup;
        $arr = array(
            'operate'=>'start',
            'fsp_uuids'=>array(
            '0'=>'11111111-1111-1111-1111-111111111111',),
            'bk_type'=>'',
            'continue_last_backup'=>0,
            'stop_later'=>'',
            'op_code'=>'',
            'snap_point'=>'',
            'power_on'=>1,
            'in_failover_settings'=>array(
            'virtual_cidr'=>'',
            'virtuai_gateway'=>'',
            'virtual_ip'=>'',
            'virtual_port'=>1,
            'virtual_data_ip'=>'',
            'oph_policy'=>1,
            'data_path'=>array(),
            'rc_dir'=>array(),
            'excl_dir'=>array(),),
        );
        
        
        $res = $fspBackup -> startFspBackup($arr);
        $this->do_assert($res);
    }

    public function testStopFspBackup()
    {
        $fspBackup = $this -> fspBackup;
        $arr = array(
            'operate'=>'start',
            'fsp_uuids'=>array(
            '0'=>'11111111-1111-1111-1111-111111111111',),
            'bk_type'=>'',
            'continue_last_backup'=>0,
            'stop_later'=>'',
            'op_code'=>'',
            'snap_point'=>'',
            'power_on'=>1,
            'in_failover_settings'=>array(
            'virtual_cidr'=>'',
            'virtuai_gateway'=>'',
            'virtual_ip'=>'',
            'virtual_port'=>1,
            'virtual_data_ip'=>'',
            'oph_policy'=>1,
            'data_path'=>array(),
            'rc_dir'=>array(),
            'excl_dir'=>array(),),
        );
        
        
        $res = $fspBackup -> stopFspBackup($arr);
        $this->do_assert($res);
    }

    public function testFinishFspBackup()
    {
        $fspBackup = $this -> fspBackup;
        $arr = array(
            'operate'=>'start',
            'fsp_uuids'=>array(
            '0'=>'11111111-1111-1111-1111-111111111111',),
            'bk_type'=>'',
            'continue_last_backup'=>0,
            'stop_later'=>'',
            'op_code'=>'',
            'snap_point'=>'',
            'power_on'=>1,
            'in_failover_settings'=>array(
            'virtual_cidr'=>'',
            'virtuai_gateway'=>'',
            'virtual_ip'=>'',
            'virtual_port'=>1,
            'virtual_data_ip'=>'',
            'oph_policy'=>1,
            'data_path'=>array(),
            'rc_dir'=>array(),
            'excl_dir'=>array(),),
        );
        
        
        $res = $fspBackup -> finishFspBackup($arr);
        $this->do_assert($res);
    }

    public function testFailoverFspBackup()
    {
        $fspBackup = $this -> fspBackup;
        $arr = array(
            'operate'=>'start',
            'fsp_uuids'=>array(
            '0'=>'11111111-1111-1111-1111-111111111111',),
            'bk_type'=>'',
            'continue_last_backup'=>0,
            'stop_later'=>'',
            'op_code'=>'',
            'snap_point'=>'',
            'power_on'=>1,
            'in_failover_settings'=>array(
            'virtual_cidr'=>'',
            'virtuai_gateway'=>'',
            'virtual_ip'=>'',
            'virtual_port'=>1,
            'virtual_data_ip'=>'',
            'oph_policy'=>1,
            'data_path'=>array(),
            'rc_dir'=>array(),
            'excl_dir'=>array(),),
        );
        
        
        $res = $fspBackup -> failoverFspBackup($arr);
        $this->do_assert($res);
    }

    public function testFailbackFspBackup()
    {
        $fspBackup = $this -> fspBackup;
        $arr = array(
            'operate'=>'start',
            'fsp_uuids'=>array(
            '0'=>'11111111-1111-1111-1111-111111111111',),
            'bk_type'=>'',
            'continue_last_backup'=>0,
            'stop_later'=>'',
            'op_code'=>'',
            'snap_point'=>'',
            'power_on'=>1,
            'in_failover_settings'=>array(
            'virtual_cidr'=>'',
            'virtuai_gateway'=>'',
            'virtual_ip'=>'',
            'virtual_port'=>1,
            'virtual_data_ip'=>'',
            'oph_policy'=>1,
            'data_path'=>array(),
            'rc_dir'=>array(),
            'excl_dir'=>array(),),
        );
        
        
        $res = $fspBackup -> failbackFspBackup($arr);
        $this->do_assert($res);
    }

    public function testListFspBackupStatus()
    {
        $fspBackup = $this -> fspBackup;
        $arr = array(
            'fsp_uuids'=>array(
            '0'=>'11111111-1111-1111-1111-111111111111',),
            'force_refresh'=>1,
        );
        
        
        $res = $fspBackup -> listFspBackupStatus($arr);
        $this->do_assert($res);
    }

    public function testBatchCreateFspBackup()
    {
        $fspBackup = $this -> fspBackup;
        $arr = array(
            'base_info_list'=>array(
            'secret_key'=>'',
            'band_width'=>'',
            'mirr_open_type'=>'0',
            'service_uuid'=>'',
            'mirr_sync_flag'=>'0',
            'bkup_one_time'=>0,
            'encrypt_switch'=>'0',
            'mirr_sync_attr'=>'1',
            'wk_data_type'=>1,
            'sync_item'=>'/',
            'bkup_policy'=>2,
            'mirr_file_check'=>'0',
            'compress'=>'0',
            'monitor_type'=>0,
            'failover'=>'0',
            'fsp_wk_shut_flag'=>'2',
            'bk_data_type'=>1,
            'bkup_schedule'=>array(
            '0'=>array(
            'sched_day'=>3,
            'sched_time'=>'16:56',
            'sched_every'=>2,
            'limit'=>32,
            'backup_type'=>0,
            'policys'=>'"每天22:00自动执行"',
            'backup_type_show'=>'"全备"',
            'running_time'=>'"22:00"',),),
            'fsp_type'=>3,
            'del_policy'=>1,
            'timeout'=>1,
            'cbt_switch'=>1,
            'threshold_vaild_byte'=>'',
            'advanced_policy'=>array(
            'bk_cdp'=>1,
            'execute_interval'=>1,
            'cdp_detail'=>1,
            'cdp_daily'=>1,
            'cdp_param'=>'',
            'cdp_switch'=>1,),
            'tgt_uuid'=>'',
            'new_dc'=>'',
            'new_dc_mor'=>'',
            'new_host'=>'',
            'new_ds'=>'',
            'network_name'=>'',
            'network_id'=>'',
            'create_vm_type'=>1,),
            'common_params'=>array(
            'batch_name'=>'',
            'rep_prefix'=>'',
            'rep_sufix'=>'',
            'variable_type'=>1,),
            'node_list'=>array(
            '0'=>array(
            'bk_uuid'=>'',
            'excl_path'=>array(),
            'bk_path'=>array(),
            'wk_uuid'=>'',
            'wk_path'=>array(),
            'vm_name'=>'',
            'new_vm_name'=>'',
            'custom_config'=>1,
            'cpu'=>'',
            'core_per_sock'=>'',
            'mem_mb'=>'',
            'dynamic_mem'=>'',
            'add_drill'=>1,
            'auto'=>1,
            'orch_vm_name'=>'',
            'scripts_type'=>'',
            'scripts'=>'',
            'os_type'=>1,
            'new_vm_hostname'=>'',),),
        );
        
        
        $res = $fspBackup -> batchCreateFspBackup($arr);
        $this->do_assert($res);
    }

    public function testVerifyEnvironment()
    {
        $fspBackup = $this -> fspBackup;
        $arr = array(
            'wk_uuid'=>'',
            'bk_uuid'=>'',
            'wk_path'=>'',
            'cbt_switch'=>0,
            'task_type'=>1,
        );
        
        
        $res = $fspBackup -> verifyEnvironment($arr);
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