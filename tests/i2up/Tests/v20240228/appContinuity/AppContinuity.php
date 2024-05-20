<?php
namespace i2up\Test\v20240228\appContinuity;

use i2up\appContinuity\v20240228\AppContinuity;
use i2up\common\Auth;

class AppContinuityTest extends \PHPUnit_Framework_TestCase
 {
    private $appContinuity;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> appContinuity = new AppContinuity(new Auth());
    }

    public function testCreateAppContinuity()
    {
        $appContinuity = $this -> appContinuity;
        $arr = array(
            'rep_name'=>'',
            'wk_uuid'=>'',
            'vp_uuid'=>'',
            'biz_grp_list'=>array(),
            'vm_name'=>'',
            'vm_ref'=>'',
            'bk_uuid'=>'',
            'data_ip_uuid'=>'',
            'wk_path'=>array(),
            'bk_path'=>array(),
            'excl_path'=>array(),
            'mirr_file_check'=>1,
            'mirr_sync_flag'=>1,
            'mirr_open_type'=>1,
            'mirr_sync_attr'=>1,
            'encrypt_switch'=>1,
            'secret_key'=>'',
            'compress'=>1,
            'bkup_schedule'=>array(
                '0'=>array(
                    'sched_day'=>array(),
                    'sched_time'=>array(),
                    'sched_every'=>1,
                    'limit'=>'',
                    'sched_gap_hour'=>1,
                    'sched_time_start'=>'',),),
            'band_width'=>'',
            'verify_settings'=>array(
                'add_drill'=>1,
                'auto'=>'',
                'drill_plat_uuid'=>'',
                'vm_list'=>array(
                    '0'=>array(
                        'vm_name'=>'',
                        'orch_vm_name'=>'',
                        'scripts_type'=>1,
                        'scripts'=>'',
                        'custom_config'=>1,
                        'orch_disks'=>array(
                            '0'=>array(
                                'file_name'=>'',
                                'size'=>'',
                                'new_ds'=>'',
                                'boot_index'=>'',
                                'disk_name'=>'',
                                'disk_path'=>'',
                                'id'=>'',),),
                        'orch_networks'=>array(
                            '0'=>array(
                                'source_network_name'=>'',
                                'network_name'=>'',
                                'network_id'=>'',
                                'subnet_name'=>'',
                                'ip'=>'',
                                'security_group_name'=>'',
                                'mac_address'=>'',
                                'keep_mac'=>'',
                                'gateway'=>'',
                                'is_defroute'=>false,),),
                        'orch_cpu_num'=>'',
                        'orch_cores_per_cpu_num'=>'',
                        'orch_memory_mb'=>'',),),
                'create_vm_type'=>1,
                'hostname'=>'',),
            'take_over_settings'=>array(
                'disk_list'=>array(
                    '0'=>array(
                        'file_name'=>'',
                        'size'=>'',
                        'new_ds'=>'',
                        'boot_index'=>1,),),
                'networks'=>array(
                    '0'=>array(
                        'network_name'=>'',
                        'network_id'=>'',
                        'subnet_name'=>'',
                        'auto_ip'=>false,
                        'ip'=>'',
                        'security_group_name'=>'',
                        'gateway'=>'',
                        'is_defroute'=>false,),),
                'cpu'=>'',
                'core_per_sock'=>'',
                'mem_mb'=>'',),
            'oph_path'=>'',
            'oph_policy'=>1,
            'thread_num'=>1,
            'is_continue_policy'=>1,
        );
        $res = $appContinuity -> createAppContinuity($arr);
        $this->do_assert($res);
    }

    public function testModifyAppContinuity()
    {
        $appContinuity = $this -> appContinuity;
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111',
            'rep_name'=>'',
            'wk_uuid'=>'',
            'vp_uuid'=>'',
            'biz_grp_list'=>array(),
            'vm_name'=>'',
            'vm_ref'=>'',
            'bk_uuid'=>'',
            'data_ip_uuid'=>'',
            'wk_path'=>array(),
            'bk_path'=>array(),
            'excl_path'=>array(),
            'mirr_file_check'=>1,
            'mirr_sync_flag'=>1,
            'mirr_open_type'=>1,
            'mirr_sync_attr'=>1,
            'encrypt_switch'=>1,
            'secret_key'=>'',
            'compress'=>1,
            'bkup_schedule'=>array(
                '0'=>array(
                    'sched_day'=>array(),
                    'sched_time'=>array(),
                    'sched_every'=>1,
                    'limit'=>'',),),
            'band_width'=>'',
            'verify_settings'=>array(
                'add_drill'=>1,
                'auto'=>'',
                'drill_plat_uuid'=>'',
                'vm_list'=>array(
                    '0'=>array(
                        'vm_name'=>'',
                        'orch_vm_name'=>'',
                        'scripts_type'=>1,
                        'scripts'=>'',
                        'custom_config'=>1,
                        'orch_disks'=>array(
                            '0'=>array(
                                'file_name'=>'',
                                'size'=>'',
                                'new_ds'=>'',
                                'boot_index'=>'',
                                'disk_name'=>'',
                                'disk_path'=>'',
                                'id'=>'',),),
                        'orch_networks'=>array(
                            '0'=>array(
                                'source_network_name'=>'',
                                'network_name'=>'',
                                'network_id'=>'',
                                'subnet_name'=>'',
                                'ip'=>'',
                                'security_group_name'=>'',
                                'mac_address'=>'',
                                'keep_mac'=>'',
                                'gateway'=>'',
                                'is_defroute'=>false,),),
                        'orch_cpu_num'=>'',
                        'orch_cores_per_cpu_num'=>'',
                        'orch_memory_mb'=>'',),),),
            'take_over_settings'=>array(
                'disk_list'=>array(
                    '0'=>array(
                        'file_name'=>'',
                        'size'=>'',
                        'new_ds'=>'',
                        'boot_index'=>1,),),
                'networks'=>array(
                    '0'=>array(
                        'network_name'=>'',
                        'network_id'=>'',
                        'subnet_name'=>'',
                        'auto_ip'=>false,
                        'ip'=>'',
                        'security_group_name'=>'',
                        'gateway'=>'',
                        'is_defroute'=>false,),),
                'cpu'=>'',
                'core_per_sock'=>'',
                'mem_mb'=>'',),
            'random_str'=>'',
        );
        $res = $appContinuity -> modifyAppContinuity($arr);
        $this->do_assert($res);
    }

    public function testDeleteAppContinuity()
    {
        $appContinuity = $this -> appContinuity;
        $arr = array(
            'rep_uuids'=>array('11111111-1111-1111-1111-111111111111'),
            'force'=>1,
        );
        $res = $appContinuity -> deleteAppContinuity($arr);
        $this->do_assert($res);
    }

    public function testDescribeAppContinuity()
    {
        $appContinuity = $this -> appContinuity;
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111',
        );
        $res = $appContinuity -> describeAppContinuity($arr);
        $this->do_assert($res);
    }

    public function testListAppContinuity()
    {
        $appContinuity = $this -> appContinuity;
        $arr = array(
            'limit'=>1,
            'page'=>1,
        );
        $res = $appContinuity -> listAppContinuity($arr);
        $this->do_assert($res);
    }

    public function testStartAppContinuity()
    {
        $appContinuity = $this -> appContinuity;
        $arr = array(
            'rep_uuids'=>array('11111111-1111-1111-1111-111111111111'),
            'operate'=>'start',
            'snap_name'=>'',
            'snap_point'=>'',
            'failover_script_uuid'=>'',
            'failback_script_uuid'=>'',
        );
        $res = $appContinuity -> startAppContinuity($arr);
        $this->do_assert($res);
    }

    public function testStopAppContinuity()
    {
        $appContinuity = $this -> appContinuity;
        $arr = array(
            'rep_uuids'=>array('11111111-1111-1111-1111-111111111111'),
            'operate'=>'stop',
            'snap_name'=>'',
            'snap_point'=>'',
            'failover_script_uuid'=>'',
            'failback_script_uuid'=>'',
        );
        $res = $appContinuity -> stopAppContinuity($arr);
        $this->do_assert($res);
    }

    public function testSnapshotImmediatelyAppContinuity()
    {
        $appContinuity = $this -> appContinuity;
        $arr = array(
            'rep_uuids'=>array('11111111-1111-1111-1111-111111111111'),
            'operate'=>'snapshot_immediately',
            'snap_name'=>'',
            'snap_point'=>'',
            'failover_script_uuid'=>'',
            'failback_script_uuid'=>'',
        );
        $res = $appContinuity -> snapshotImmediatelyAppContinuity($arr);
        $this->do_assert($res);
    }

    public function testSnapshotDeleteAppContinuity()
    {
        $appContinuity = $this -> appContinuity;
        $arr = array(
            'rep_uuids'=>array('11111111-1111-1111-1111-111111111111'),
            'operate'=>'snapshot_delete',
            'snap_name'=>'',
            'snap_point'=>'',
            'failover_script_uuid'=>'',
            'failback_script_uuid'=>'',
        );
        $res = $appContinuity -> snapshotDeleteAppContinuity($arr);
        $this->do_assert($res);
    }

    public function testModifyScriptAppContinuity()
    {
        $appContinuity = $this -> appContinuity;
        $arr = array(
            'rep_uuids'=>array('11111111-1111-1111-1111-111111111111'),
            'operate'=>'modify_script',
            'snap_name'=>'',
            'snap_point'=>'',
            'failover_script_uuid'=>'',
            'failback_script_uuid'=>'',
        );
        $res = $appContinuity -> modifyScriptAppContinuity($arr);
        $this->do_assert($res);
    }

    public function testFailoverAppContinuity()
    {
        $appContinuity = $this -> appContinuity;
        $arr = array(
            'rep_uuids'=>array('11111111-1111-1111-1111-111111111111'),
            'operate'=>'failover',
            'snap_name'=>'',
            'snap_point'=>'',
            'failover_script_uuid'=>'',
            'failback_script_uuid'=>'',
        );
        $res = $appContinuity -> failoverAppContinuity($arr);
        $this->do_assert($res);
    }

    public function testFailbackAppContinuity()
    {
        $appContinuity = $this -> appContinuity;
        $arr = array(
            'rep_uuids'=>array('11111111-1111-1111-1111-111111111111'),
            'operate'=>'failback',
            'snap_name'=>'',
            'snap_point'=>'',
            'failover_script_uuid'=>'',
            'failback_script_uuid'=>'',
        );
        $res = $appContinuity -> failbackAppContinuity($arr);
        $this->do_assert($res);
    }

    public function testListAppContinuityStatus()
    {
        $appContinuity = $this -> appContinuity;
        $arr = array(
            'rep_uuids'=>array('11111111-1111-1111-1111-111111111111'),
            'force_refresh'=>0,
        );
        $res = $appContinuity -> listAppContinuityStatus($arr);
        $this->do_assert($res);
    }

    private function do_assert($res)
    {
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}