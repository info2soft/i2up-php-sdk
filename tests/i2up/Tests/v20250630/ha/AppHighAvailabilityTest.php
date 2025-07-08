<?php
namespace i2up\Test\v20250630\ha;

use i2up\ha\v20250630\AppHighAvailability;
use i2up\common\Auth;
                
class AppHighAvailabilityTest extends \PHPUnit_Framework_TestCase
 {
    private $appHighAvailability;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> appHighAvailability = new AppHighAvailability(new Auth());
    }

    public function testListNicInfo()
    {
        $appHighAvailability = $this -> appHighAvailability;
        $arr = array(
            'node_uuid'=>array(
            '0'=>'B8566905-411E-B2CD-A742-77B1346D8E84',
            '1'=>'67E33CDB-D75B-15B3-367D-50C764F5A26F',),
            'master_uuid'=>'67E33CDB-D75B-15B3-367D-50C764F5A26F',
        );
        
        
        $res = $appHighAvailability -> listNicInfo($arr);
        $this->do_assert($res);
    }

    public function testDescribeHAScriptPath()
    {
        $appHighAvailability = $this -> appHighAvailability;
        $arr = array(
            'master_uuid'=>'67E33CDB-D75B-15B3-367D-50C764F5A26F',
        );
        
        
        $res = $appHighAvailability -> describeHAScriptPath($arr);
        $this->do_assert($res);
    }

    public function testDescribeVolumeInfo()
    {
        $appHighAvailability = $this -> appHighAvailability;
        $arr = array(
            'master_uuid'=>'',
            'slave_uuid'=>'',
        );
        
        
        $res = $appHighAvailability -> describeVolumeInfo($arr);
        $this->do_assert($res);
    }

    public function testCreateHA()
    {
        $appHighAvailability = $this -> appHighAvailability;
        $arr = array(
            'heartbeat'=>array(
            '0'=>array(
            'interval'=>2,
            'maxfail'=>5,
            'protocol'=>'tcp',
            'ifconfig'=>array(
            '0'=>array(
            'uuid'=>'67E33CDB-D75B-15B3-367D-50C764F5A26F',
            'netif'=>'{AB1E4EFF-14FE-441E-8A1F-EE59BDA12D6F}',
            'ip'=>'192.168.72.75',
            'label'=>'',),
            '1'=>array(
            'uuid'=>'B8566905-411E-B2CD-A742-77B1346D8E84',
            'netif'=>'{5C3A44A0-EF11-4705-A9A3-2F3ACEED4798}',
            'ip'=>'192.168.72.82',
            'label'=>'',),),
            'port'=>26850,),),
            'sync_data'=>array(
            '0'=>array(
            'back_rule'=>0,
            'need_rep_status'=>1,
            'create_start'=>0,
            'wait_cache'=>1,
            'rule_relation'=>array(
            '0'=>array(
            'rep_name'=>'sdk_ha-N3_72.75-N4_72.76',
            'autostart_rep'=>0,
            'path'=>array(
            '0'=>'E:\\test\\',),
            'uuid'=>'67E33CDB-D75B-15B3-367D-50C764F5A26F',
            'append_name'=>0,),
            '1'=>array(
            'rep_name'=>'sdk_ha-N3_72.75-N4_72.76',
            'autostart_rep'=>0,
            'path'=>array(
            '0'=>'E:\\test\\',),
            'uuid'=>'B8566905-411E-B2CD-A742-77B1346D8E84',
            'append_name'=>0,),),
            'excludes'=>array(),),),
            'arbitration'=>array(
            'radio'=>1,
            'node'=>array(
            '0'=>array(
            'arbit_protocol'=>'TCP',
            'arbit_addr'=>'192.168.72.82',
            'arbit_port'=>26868,),),
            'disk'=>array(
            'path'=>'',),),
            'master_uuid'=>'67E33CDB-D75B-15B3-367D-50C764F5A26F',
            'ha_name'=>'sdk_ha',
            'res_switch'=>array(
            '0'=>array(
            'script'=>array(
            'after_failover_arr'=>array(
            '0'=>array(
            'node_uuid'=>'',
            'script_uuid'=>'',),),
            'before_failover'=>'',
            'before_switch_arr'=>array(
            '0'=>array(
            'node_uuid'=>'',
            'script_uuid'=>'',),),
            'after_switch'=>'',
            'switch_timeout'=>'',
            'after_failover'=>'',
            'before_switch'=>'',),
            'vip'=>array(
            'top'=>0,
            'ip'=>'192.168.72.82',
            'ifconfig'=>array(
            '0'=>array(
            'uuid'=>'67E33CDB-D75B-15B3-367D-50C764F5A26F',
            'netif'=>'{AB1E4EFF-14FE-441E-8A1F-EE59BDA12D6F}',
            'label'=>'Ethernet0',),
            '1'=>array(
            'uuid'=>'B8566905-411E-B2CD-A742-77B1346D8E84',
            'netif'=>'{5C3A44A0-EF11-4705-A9A3-2F3ACEED4798}',
            'label'=>'Ethernet0',),),
            'mask'=>'255.255.255.0',
            'del'=>0,
            'seq_execute'=>1,
            'try_number'=>1,),
            'type'=>'ip',
            'disk'=>array(
            'mnt_name'=>'',
            'try_time'=>'',
            'disk_info'=>array(
            'master_node'=>array(
            'mnt_name'=>'',
            'disk_name'=>'',
            'label'=>'',
            'flags'=>'',),
            'sub_node'=>array(
            'mnt_name'=>'',
            'disk_name'=>'',
            'label'=>'',
            'flags'=>'',),
            'size'=>'',
            'uuid'=>'',
            'fs_type'=>'',
            'offset'=>'',
            'os_type'=>'',
            'disk_id'=>'',),),
            'virtualdisk'=>array(
            'vp_type'=>'',
            'sub_node_uuid'=>'',
            'master_node_uuid'=>'',
            'disk_info'=>array(
            '0'=>array(
            'is_switch'=>'',
            'vir_uuid'=>'',
            'mount_point'=>'',
            'part_list'=>array(
            'uuid'=>'',
            'is_mount'=>'',),),),
            'vp_uuid'=>'',),),),
            'switch_type'=>1,
            'monitor'=>array(
            '0'=>array(
            'threshold'=>90,
            'interval'=>2,
            'name'=>'',
            'script'=>'',
            'access_method'=>'',
            'type'=>'cpu',
            'great'=>'',
            'useid'=>'',
            'maxfail'=>5,
            'action'=>'warn',
            'residual'=>1,
            'role'=>'master',
            'path'=>'',
            'monitor_file'=>'',),),
            'node_priority'=>array(
            '0'=>array(
            'uuid'=>'67E33CDB-D75B-15B3-367D-50C764F5A26F',
            'priority'=>'high',),
            '1'=>array(
            'uuid'=>'B8566905-411E-B2CD-A742-77B1346D8E84',
            'priority'=>'high',),),
            'ctrl_switch'=>0,
            'dynamic_node'=>'',
            'cluster_id'=>'',
            'service_label'=>1,
            'key_file_path'=>array(),
            'switch_sync_data'=>1,
            'cron_expression'=>'',
            'local_takeover'=>'',
            'force_switch_center'=>'',
            'reboot_takeover'=>0,
            'ha_type'=>1,
            'band_width'=>'',
            'sys_uuid'=>'',
        );
        
        
        $res = $appHighAvailability -> createHA($arr);
        $this->do_assert($res);
    }

    public function testModifyHA()
    {
        $appHighAvailability = $this -> appHighAvailability;
        $arr = array(
            'sync_data'=>array(
            'create_start'=>1,
            'rule_relation'=>array(
            '0'=>array(
            'rep_name'=>'',
            'path'=>array(),
            'append_name'=>1,
            'autostart_rep'=>1,
            'uuid'=>'',),
            '1'=>array(
            'rep_name'=>'',
            'path'=>array(),
            'append_name'=>1,
            'autostart_rep'=>1,
            'uuid'=>'',),),
            'wait_cache'=>1,
            'need_rep_status'=>1,
            'back_rule'=>1,
            'excludes'=>array(),),
            'monitor'=>array(
            '0'=>array(
            'great'=>'',
            'interval'=>1,
            'type'=>'',
            'useid'=>'',
            'script'=>'',
            'residual'=>1,
            'threshold'=>1,
            'action'=>'',
            'role'=>'',
            'monitor_file'=>'',
            'path'=>'',
            'name'=>'',
            'access_method'=>'',
            'maxfail'=>1,),),
            'ha_name'=>'',
            'heartbeat'=>array(
            '0'=>array(
            'interval'=>1,
            'maxfail'=>1,
            'port'=>1,
            'ifconfig'=>array(
            '0'=>array(
            'uuid'=>'',
            'netif'=>1,
            'ip'=>'',
            'label'=>'',),
            '1'=>array(
            'uuid'=>'',
            'netif'=>1,
            'ip'=>'',
            'label'=>'',),),
            'protocol'=>'',),),
            'node_priority'=>array(
            '0'=>array(
            'uuid'=>'',
            'priority'=>'',),),
            'master_uuid'=>'',
            'arbitration'=>array(
            'node'=>array(
            'arbit_port'=>1,
            'arbit_addr'=>'',
            'arbit_protocol'=>'',),
            'disk'=>array(),
            'radio'=>1,),
            'res_switch'=>array(
            '0'=>array(
            'type'=>'',
            'script'=>array(
            'before_failover'=>'',
            'after_failover'=>'',
            'before_switch'=>'',
            'after_switch'=>'',
            'switch_timeout'=>'20',),
            'vip'=>array(
            'mask'=>'',
            'ip'=>'',
            'ifconfig'=>array(
            '0'=>array(
            'uuid'=>'',
            'label'=>'',
            'netif'=>'',),
            '1'=>array(
            'uuid'=>'',
            'label'=>'',
            'netif'=>'',),),
            'top'=>1,
            'del'=>1,),),),
            'auto_switch'=>1,
            'ha_uuid'=>'',
            'reboot_takeover'=>0,
            'sys_uuid'=>'',
        );
        
        
        $res = $appHighAvailability -> modifyHA($arr);
        $this->do_assert($res);
    }

    public function testHaVerifyName()
    {
        $appHighAvailability = $this -> appHighAvailability;
        $arr = array(
            'ha_name'=>'testfdsa',
            'ha_type'=>'0',
        );
        
        
        $res = $appHighAvailability -> haVerifyName($arr);
        $this->do_assert($res);
    }

    public function testDescribeHA()
    {
        $appHighAvailability = $this -> appHighAvailability;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $appHighAvailability -> describeHA($arr);
        $this->do_assert($res);
    }

    public function testListHA()
    {
        $appHighAvailability = $this -> appHighAvailability;
        $arr = array(
            'search_field'=>'',
            'search_value'=>'',
            'page'=>1,
            'limit'=>10,
            'type'=>false,
            'status'=>'',
            'where_args'=>array(
            'take_over_status'=>1,),
        );
        
        
        $res = $appHighAvailability -> listHA($arr);
        $this->do_assert($res);
    }

    public function testListHAStatus()
    {
        $appHighAvailability = $this -> appHighAvailability;
        $arr = array(
            'ha_uuid'=>array(
            '0'=>'11111111-1111-1111-1111-111111111111',),
            'force_refresh'=>1,
        );
        
        
        $res = $appHighAvailability -> listHAStatus($arr);
        $this->do_assert($res);
    }

    public function testStartHA()
    {
        $appHighAvailability = $this -> appHighAvailability;
        $arr = array(
            'ha_uuid'=>array(),
            'node_uuid'=>'',
            'type'=>'',
            'ha_name'=>'',
            'force'=>0,
        );
        
        
        $res = $appHighAvailability -> startHA($arr);
        $this->do_assert($res);
    }

    public function testStopHA()
    {
        $appHighAvailability = $this -> appHighAvailability;
        $arr = array(
            'ha_uuid'=>array(),
            'node_uuid'=>'',
            'type'=>'',
            'ha_name'=>'',
            'force'=>0,
        );
        
        
        $res = $appHighAvailability -> stopHA($arr);
        $this->do_assert($res);
    }

    public function testForceSwitchHA()
    {
        $appHighAvailability = $this -> appHighAvailability;
        $arr = array(
            'ha_uuid'=>array(),
            'node_uuid'=>'',
            'type'=>'',
            'ha_name'=>'',
            'force'=>0,
        );
        
        
        $res = $appHighAvailability -> forceSwitchHA($arr);
        $this->do_assert($res);
    }

    public function testDeleteHA()
    {
        $appHighAvailability = $this -> appHighAvailability;
        $arr = array(
            'uuid'=>array(
            '0'=>'11111111-1111-1111-1111-111111111111',),
            'force'=>1,
        );
        
        
        $res = $appHighAvailability -> deleteHA($arr);
        $this->do_assert($res);
    }

    public function testListStageOptions()
    {
        $appHighAvailability = $this -> appHighAvailability;
        $arr = array();
        
        
        $res = $appHighAvailability -> listStageOptions($arr);
        $this->do_assert($res);
    }

    public function testCreateHAGroup()
    {
        $appHighAvailability = $this -> appHighAvailability;
        $arr = array(
            'group_name'=>'111',
            'error_confirm'=>1,
            'switch_confirm'=>1,
            'ha_rules'=>array(
            '0'=>'B95DB026-AEDF-737A-0442-B5134660D204',
            '1'=>'128C2F7D-0795-41F3-1274-3FBAA2449BAD',
            '2'=>'214E0B0C-6BFA-B1D7-1AFC-C11E3B5874C0',
            '3'=>'2FD74EEE-CFDB-FB01-8E11-B6560B6D20F8',),
            'stage'=>array(
            'step_1'=>array(
            'ha_rule'=>array(
            '0'=>'B95DB026-AEDF-737A-0442-B5134660D204',
            '1'=>'128C2F7D-0795-41F3-1274-3FBAA2449BAD',),
            'failover_serial'=>1,
            'failback_serial'=>-1,
            'haList'=>array(
            '0'=>array(
            'ha_name'=>'tst',
            'ha_uuid'=>'B95DB026-AEDF-737A-0442-B5134660D204',),
            '1'=>array(
            'ha_name'=>'test4',
            'ha_uuid'=>'128C2F7D-0795-41F3-1274-3FBAA2449BAD',),),),
            'step_2'=>array(
            'ha_rule'=>array(
            '0'=>'214E0B0C-6BFA-B1D7-1AFC-C11E3B5874C0',
            '1'=>'2FD74EEE-CFDB-FB01-8E11-B6560B6D20F8',),
            'failover_serial'=>2,
            'failback_serial'=>-2,
            'haList'=>array(
            '0'=>array(
            'ha_name'=>'test3',
            'ha_uuid'=>'214E0B0C-6BFA-B1D7-1AFC-C11E3B5874C0',
            'disabled'=>true,),
            '1'=>array(
            'ha_name'=>'test2',
            'ha_uuid'=>'2FD74EEE-CFDB-FB01-8E11-B6560B6D20F8',
            'disabled'=>true,),),),),
        );
        
        
        $res = $appHighAvailability -> createHAGroup($arr);
        $this->do_assert($res);
    }

    public function testListHAGroup()
    {
        $appHighAvailability = $this -> appHighAvailability;
        $arr = array(
            'page'=>1,
            'limit'=>1,
            'search_field'=>'group_name',
            'search_value'=>'',
        );
        
        
        $res = $appHighAvailability -> listHAGroup($arr);
        $this->do_assert($res);
    }

    public function testDeleteHAGroup()
    {
        $appHighAvailability = $this -> appHighAvailability;
        $arr = array(
            'uuids'=>array(
            '0'=>'CFCEDC75-F48E-22B0-8A67-DE1FCA51C4C7',),
        );
        
        
        $res = $appHighAvailability -> deleteHAGroup($arr);
        $this->do_assert($res);
    }

    public function testModifyHAGroup()
    {
        $appHighAvailability = $this -> appHighAvailability;
        $arr = array(
            'group_uuid'=>'CFCEDC75-F48E-22B0-8A67-DE1FCA51C4C7',
            'group_name'=>'111',
            'error_confirm'=>1,
            'switch_confirm'=>1,
            'ha_rules'=>array(
            '0'=>'B95DB026-AEDF-737A-0442-B5134660D204',
            '1'=>'128C2F7D-0795-41F3-1274-3FBAA2449BAD',),
            'stage'=>array(
            'step_1'=>array(
            'ha_rule'=>array(
            '0'=>'B95DB026-AEDF-737A-0442-B5134660D204',
            '1'=>'128C2F7D-0795-41F3-1274-3FBAA2449BAD',),
            'failover_serial'=>1,
            'failback_serial'=>-1,
            'haList'=>array(
            '0'=>array(
            'ha_name'=>'tst',
            'ha_uuid'=>'B95DB026-AEDF-737A-0442-B5134660D204',),
            '1'=>array(
            'ha_name'=>'test4',
            'ha_uuid'=>'128C2F7D-0795-41F3-1274-3FBAA2449BAD',),),),),
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $appHighAvailability -> modifyHAGroup($arr);
        $this->do_assert($res);
    }

    public function testDescribeHAGroup()
    {
        $appHighAvailability = $this -> appHighAvailability;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $appHighAvailability -> describeHAGroup($arr);
        $this->do_assert($res);
    }

    public function testForceSwitchHAGroup()
    {
        $appHighAvailability = $this -> appHighAvailability;
        $arr = array(
            'ha_uuids'=>array(
            '0'=>'B95DB026-AEDF-737A-0442-B5134660D204',
            '1'=>'128C2F7D-0795-41F3-1274-3FBAA2449BAD',),
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $appHighAvailability -> forceSwitchHAGroup($arr);
        $this->do_assert($res);
    }

    public function testListHASwitchTaskStatus()
    {
        $appHighAvailability = $this -> appHighAvailability;
        $arr = array(
            'task_uuid'=>'F696DC12-6727-B799-93D4-8B2213086F5A',
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $appHighAvailability -> listHASwitchTaskStatus($arr);
        $this->do_assert($res);
    }

    public function testResumeHAGroupSwitch()
    {
        $appHighAvailability = $this -> appHighAvailability;
        $arr = array(
            'operate'=>'resume',
            'task_uuid'=>'F696DC12-6727-B799-93D4-8B2213086F5A',
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $appHighAvailability -> resumeHAGroupSwitch($arr);
        $this->do_assert($res);
    }

    public function testPauseHAGroupSwitch()
    {
        $appHighAvailability = $this -> appHighAvailability;
        $arr = array(
            'operate'=>'resume',
            'task_uuid'=>'F696DC12-6727-B799-93D4-8B2213086F5A',
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $appHighAvailability -> pauseHAGroupSwitch($arr);
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