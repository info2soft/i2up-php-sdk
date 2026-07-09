<?php
namespace i2up\Test\v20260626\resource;

use i2up\resource\v20260626\NodeV3;
use i2up\common\Auth;
use PHPUnit\Framework\TestCase;
                
class NodeV3Test extends TestCase
 {
    private $nodeV3;
    
    public function setUp():void
    {
        parent::setup();
        $this -> nodeV3 = new NodeV3(new Auth());
    }

    public function testAuthNode()
    {
        $nodeV3 = $this -> nodeV3;
        $arr = array(
            'os_pwd'=>'123qwe',
            'proxy_id'=>'',
            'use_credential'=>0,
            'proxy_switch'=>0,
            'is_ssl'=>1,
            'cred_uuid'=>'',
            'config_addr'=>'192.168.72.76',
            'config_port'=>26821,
            'node_uuid'=>'',
            'os_user'=>'chenky',
        );
        
        
        $res = $nodeV3 -> authNode($arr);
        $this->do_assert($res);
    }

    public function testListNodePackageList()
    {
        $nodeV3 = $this -> nodeV3;
        $arr = array(
            'for_download'=>1,
        );
        
        
        $res = $nodeV3 -> listNodePackageList($arr);
        $this->do_assert($res);
    }

    public function testCheckCapacity()
    {
        $nodeV3 = $this -> nodeV3;
        $arr = array(
            'proxy_id'=>'',
            'is_ssl'=>1,
            'config_addr'=>'192.168.72.76',
            'config_port'=>'26821',
            'cache_path'=>'C:\\Program Files (x86)\\info2soft\\node\\cache\\',
            'proxy_switch'=>0,
        );
        
        
        $res = $nodeV3 -> checkCapacity($arr);
        $this->do_assert($res);
    }

    public function testListVg()
    {
        $nodeV3 = $this -> nodeV3;
        $arr = array(
            'proxy_switch'=>0,
            'proxy_id'=>'',
            'config_addr'=>'192.168.72.76',
            'config_port'=>'26821',
        );
        
        
        $res = $nodeV3 -> listVg($arr);
        $this->do_assert($res);
    }

    public function testListHostInfo()
    {
        $nodeV3 = $this -> nodeV3;
        $arr = array(
            'node_type'=>1,
            'config_addr'=>'',
        );
        
        
        $res = $nodeV3 -> listHostInfo($arr);
        $this->do_assert($res);
    }

    public function testCheckNodeOnline()
    {
        $nodeV3 = $this -> nodeV3;
        $arr = array(
            'config_addr'=>'192.168.72.76',
            'proxy_switch'=>0,
            'is_ssl'=>1,
            'config_port'=>'26821',
            'proxy_id'=>'66F636FE29656416690A62296580EBD9',
        );
        
        
        $res = $nodeV3 -> checkNodeOnline($arr);
        $this->do_assert($res);
    }

    public function testBatchSearchByPort()
    {
        $nodeV3 = $this -> nodeV3;
        $arr = array(
            'ip'=>'',
            'port_start'=>1,
            'port_end'=>1,
        );
        
        
        $res = $nodeV3 -> batchSearchByPort($arr);
        $this->do_assert($res);
    }

    public function testListNodeBindEcs()
    {
        $nodeV3 = $this -> nodeV3;
        $arr = array(
            'config_addr'=>'192.168.72.76',
            'config_port'=>'26821',
            'platform_uuid'=>'',
        );
        
        
        $res = $nodeV3 -> listNodeBindEcs($arr);
        $this->do_assert($res);
    }

    public function testCreateNode()
    {
        $nodeV3 = $this -> nodeV3;
        $arr = array(
            'node'=>array(
            'comment'=>'',
            'alarm_switch'=>0,
            'cpu_threshold'=>80,
            'memory_threshold'=>80,
            'monitor_process'=>0,
            'rep_path'=>array(),
            'cloud_type'=>'0',
            'guard_data_switch'=>0,
            'bak_user_max'=>'100',
            'guard_data_pwd'=>'',
            'fc_as_target'=>1,
            'wwpn_info_target'=>array(),
            'cache_path'=>'C:\\Program Files (x86)\\info2soft\\node\\cache\\',
            'rw_server_port'=>26820,
            'bak_root'=>'',
            'db_save_day'=>'3',
            'snmp_switch'=>0,
            'snmp_version'=>'2c',
            'snmp_ip'=>'',
            'snmp_port'=>1,
            'snmp_community'=>'',
            'aio_cluster_id'=>'',
            'aio_host_id'=>'',
            'proxy_switch'=>0,
            'data_addr'=>'192.168.72.76',
            'project_name'=>'',
            'etcd_url_uuid'=>'',
            'monitor_switch'=>0,
            'node_name'=>'N4_72.76',
            'config_addr'=>'192.168.72.76',
            'mon_send_interval'=>'10',
            'keep_log_days'=>180,
            'node_role'=>'3',
            'disk_limit'=>'10240',
            'reboot_sys'=>'0',
            'rc_protection'=>0,
            'bind_lic_list'=>array(),
            'security_check'=>0,
            'mem_limit'=>819,
            'os_user'=>'Kyran',
            'guard_data_threshold'=>1,
            'ecs_id'=>'',
            'ecs_bind'=>1,
            'bak_service_type'=>'',
            'is_ssl'=>1,
            'en_snap_switch'=>0,
            'config_port'=>26821,
            'rep_excl_path'=>array(),
            'biz_grp_list'=>array(),
            'proxy_id'=>'',
            'mon_save_day'=>'5',
            'dtrack_switch'=>3,
            'bak_cache_data_dir'=>'',
            'bak_cache_disk_lower_limit'=>1,
            'bak_cache_data_upper_limit'=>1,
            'winstack_pool_id'=>'',
            'winstack_host_id'=>'',
            'roles'=>array(
            '0'=>1,
            '1'=>2,
            '2'=>4,
            '3'=>8,),
            'vm_ref'=>'',
            'auto_move'=>1,
            'log_limit'=>1024,
            'iscsi_as_initiator'=>1,
            'bak_meta_data_path'=>'',
            'bak_meta_data_policy'=>1,
            'iscsi_switch'=>1,
            'renew_public_key'=>1,
            'vm_name'=>'',
            'schedule_svr_uuid'=>'',
            'vg'=>'',
            'iscsi_as_target'=>1,
            'log_interval'=>60,
            'iscsi_initiator_name'=>'',
            'use_credential'=>0,
            'os_type'=>1,
            'cred_uuid'=>'',
            'local_config_switch'=>1,
            'disk_free_space_limit'=>1,
            'node_info'=>array(),
            'os_pwd'=>'',
            'cc_ip_uuid'=>'',
            'maintenance'=>0,
            'node_type'=>1,
            'cls_node'=>'',
            'node_uuid'=>'',
            'sys_uuid'=>'',
            'fc_as_initiator'=>1,
            'wwpn_info'=>array(),
            'platform_uuid'=>'',
            'log_path'=>'C:\\Program Files (x86)\\info2soft\\node\\log\\',
            'region_id'=>'',
            'temp_path'=>'',
            'project_id'=>'',
            'roles_info'=>array(
            'modules'=>array(),
            'role'=>1,
            'processes'=>array(),),
            'bak_client_max'=>'100',
            'mon_data_path'=>'C:\\Program Files (x86)\\info2soft\\node\\log\\',),
        );
        
        
        $res = $nodeV3 -> createNode($arr);
        $this->do_assert($res);
    }

    public function testPrecreateNode()
    {
        $nodeV3 = $this -> nodeV3;
        $arr = array(
            'node'=>array(
            'comment'=>'',
            'alarm_switch'=>0,
            'cpu_threshold'=>80,
            'memory_threshold'=>80,
            'monitor_process'=>0,
            'rep_path'=>array(),
            'cloud_type'=>'0',
            'guard_data_switch'=>0,
            'bak_user_max'=>'100',
            'guard_data_pwd'=>'',
            'cache_path'=>'C:\\Program Files (x86)\\info2soft\\node\\cache\\',
            'rw_server_port'=>26820,
            'bak_root'=>'',
            'db_save_day'=>'3',
            'snmp_switch'=>0,
            'snmp_version'=>'2c',
            'snmp_ip'=>'',
            'snmp_port'=>1,
            'snmp_community'=>'',
            'aio_cluster_id'=>'',
            'aio_host_id'=>'',
            'proxy_switch'=>0,
            'data_addr'=>'192.168.72.76',
            'project_name'=>'',
            'etcd_url_uuid'=>'',
            'monitor_switch'=>0,
            'node_name'=>'N4_72.76',
            'config_addr'=>'192.168.72.76',
            'mon_send_interval'=>'10',
            'keep_log_days'=>180,
            'node_role'=>'3',
            'disk_limit'=>'10240',
            'reboot_sys'=>'0',
            'rc_protection'=>0,
            'bind_lic_list'=>array(),
            'security_check'=>0,
            'mem_limit'=>819,
            'os_user'=>'Kyran',
            'guard_data_threshold'=>1,
            'ecs_id'=>'',
            'ecs_bind'=>1,
            'bak_service_type'=>'',
            'is_ssl'=>1,
            'en_snap_switch'=>0,
            'config_port'=>26821,
            'rep_excl_path'=>array(),
            'biz_grp_list'=>array(),
            'proxy_id'=>'',
            'mon_save_day'=>'5',
            'dtrack_switch'=>3,
            'bak_cache_data_dir'=>'',
            'bak_cache_disk_lower_limit'=>1,
            'bak_cache_data_upper_limit'=>1,
            'winstack_pool_id'=>'',
            'winstack_host_id'=>'',
            'roles'=>array(
            '0'=>1,
            '1'=>2,
            '2'=>4,
            '3'=>8,),
            'vm_ref'=>'',
            'auto_move'=>1,
            'log_limit'=>1024,
            'iscsi_as_initiator'=>1,
            'bak_meta_data_path'=>'',
            'bak_meta_data_policy'=>1,
            'iscsi_switch'=>1,
            'renew_public_key'=>1,
            'vm_name'=>'',
            'schedule_svr_uuid'=>'',
            'vg'=>'',
            'iscsi_as_target'=>1,
            'log_interval'=>60,
            'iscsi_initiator_name'=>'',
            'use_credential'=>0,
            'os_type'=>1,
            'cred_uuid'=>'',
            'local_config_switch'=>1,
            'disk_free_space_limit'=>1,
            'node_info'=>array(),
            'os_pwd'=>'',
            'cc_ip_uuid'=>'',
            'maintenance'=>0,
            'node_type'=>1,
            'cls_node'=>'',
            'node_uuid'=>'',
            'sys_uuid'=>'',
            'fc_as_initiator'=>1,
            'wwpn_info'=>array(),
            'platform_uuid'=>'',
            'log_path'=>'C:\\Program Files (x86)\\info2soft\\node\\log\\',
            'region_id'=>'',
            'temp_path'=>'',
            'project_id'=>'',
            'roles_info'=>array(
            'modules'=>array(),
            'role'=>1,
            'processes'=>array(),),
            'bak_client_max'=>'100',
            'mon_data_path'=>'C:\\Program Files (x86)\\info2soft\\node\\log\\',),
            'register'=>1,
        );
        
        
        $res = $nodeV3 -> precreateNode($arr);
        $this->do_assert($res);
    }

    public function testModifyNode()
    {
        $nodeV3 = $this -> nodeV3;
        $arr = array(
            'node'=>array(
            'moni_log_keep_node'=>'5',
            '_path'=>array(),
            'log_path'=>'C:\\Program Files (x86)\\info2soft-i2node\\log\\',
            'disk_limit'=>'40960',
            'bak_service_type'=>'',
            'config_addr'=>'192.168.74.25',
            'mem_limit'=>'13041',
            'batch_cc_ip_uuid'=>1,
            'os_type'=>2,
            'batch_biz_grp_list'=>1,
            'os_user'=>'Kyran',
            'batch_log_path'=>1,
            'proxy_switch'=>0,
            'batch_cache_path'=>1,
            'bind_lic_list'=>'93AF0C9F-14C8-41A2-31CB-AAA0F65193FA',
            'batch_mem_limit'=>1,
            'moni_log_keep_server'=>'3',
            'batch_disk_limit'=>1,
            'node_name'=>'aaaa',
            'batch_disk_free_space_limit'=>1,
            'keep_log_days'=>180,
            'batch_security_check'=>1,
            'monitor_interval'=>'10',
            'batch_maintenance'=>1,
            'security_check'=>1,
            'batch_switch'=>1,
            'reboot_sys'=>'0',
            'bak_client_max'=>'100',
            'bak_root'=>'',
            'node_role'=>'3',
            'monitor_switch'=>0,
            'guard_data_switch'=>1,
            'cache_path'=>'C:\\Program Files (x86)\\info2soft-i2node\\cache\\',
            'guard_data_user'=>'',
            'config_port'=>26821,
            'guard_data_pwd'=>'',
            'bak_user_max'=>'100',
            'group_uuid'=>'F5844651-DB5B-937D-73B1-A2378810F00A',
            'comment'=>'',
            'biz_grp_list'=>array(),
            'fc_as_target'=>1,
            'cloud_type'=>'0',
            'wwpn_info_target'=>array(),
            'i2id'=>'',
            'use_credential'=>0,
            'cred_uuid'=>'',
            'en_snap_switch'=>0,
            'batch_monitor'=>1,
            'disk_free_space_limit'=>1,
            'batch_rep_path'=>1,
            'rw_server_port'=>1,
            'platform_uuid'=>'',
            'maintenance'=>0,
            'os_pwd'=>'EnEyGDJF==',
            'ecs_bind'=>0,
            'ecs_id'=>'',
            'fc_as_initiator'=>0,
            'vg'=>'',
            'wwpn_info'=>array(),
            'monitor_log_path'=>'C:\\Program Files (x86)\\info2soft-i2node\\log\\',
            'data_addr'=>'192.168.74.25',
            'snmp_switch'=>0,
            'rep_excl_path'=>array(),
            'snmp_version'=>'',
            'aio_cluster_id'=>'',
            'snmp_community'=>'',
            'aio_host_id'=>'',
            'snmp_ip'=>'',
            'snmp_port'=>1,
            'batch_snmp'=>1,
            'project_name'=>'',
            'rc_protection'=>0,
            'batch_rc_protection'=>0,
            'guard_data_threshold'=>1,
            'is_ssl'=>1,
            'batch_bak_meta_data_policy'=>1,
            'bak_cache_data_dir'=>'',
            'roles'=>array(
            '0'=>1,
            '1'=>2,
            '2'=>4,
            '3'=>8,),
            'bak_cache_data_upper_limit'=>'',
            'log_limit'=>1,
            'bak_cache_disk_lower_limit'=>'',
            'roles_info'=>array(
            '0'=>array(
            'modules'=>array(),
            'role'=>1,
            'processes'=>array(),),),
            'etcd_url_uuid'=>'',
            'temp_path'=>1,
            'batch_bak_cache_data_dir'=>1,
            'bak_meta_data_path'=>'',
            'batch_guard'=>1,
            'batch_keep_log_days'=>1,
            'batch_bak_cache_data_upper_limit'=>1,
            'bak_meta_data_policy'=>1,
            'batch_bak_cache_disk_lower_limit'=>1,
            'monitor_process'=>1,
            'batch_etcd_url_uuid'=>1,
            'batch_schedule_svr_uuid'=>1,
            'schedule_svr_uuid'=>'',
            'batch_log_limit'=>0,
            'local_config_switch'=>1,
            'batch_bak_meta_data_path'=>1,
            'batch_local_config_switch'=>1,
            'sys_uuid'=>'',
            'project_id'=>'',
            'region_id'=>'',
            'batch_temp_path'=>1,),
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $nodeV3 -> modifyNode($arr);
        $this->do_assert($res);
    }

    public function testDescribeNode()
    {
        $nodeV3 = $this -> nodeV3;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $nodeV3 -> describeNode($arr);
        $this->do_assert($res);
    }

    public function testCreateBatchNode()
    {
        $nodeV3 = $this -> nodeV3;
        $arr = array(
            'base_info_list'=>array(
            '0'=>array(
            'os_pwd'=>'123qwe',
            'os_user'=>'chenky',
            'config_port'=>26821,
            'config_addr'=>'192.168.72.76',
            'cache_path'=>'',
            'bak_meta_data_path'=>'',
            'node_name'=>'N4_72.76',
            'need_install'=>0,
            'temp_path'=>'',
            'install_type'=>1,
            'install_port_linux'=>22,
            'install_path'=>'',
            'os_type'=>1,
            'rep_path'=>array(),
            'installation_mode'=>0,),),
            'node'=>array(
            'bind_lic_list'=>array(),
            'disk_limit'=>'10240',
            'alarm_switch'=>1,
            'cpu_threshold'=>1,
            'memory_threshold'=>1,
            'monitor_process'=>1,
            'monitor_interval'=>'10',
            'log_interval'=>1,
            'node_role'=>'3',
            'etcd_url_uuid'=>'',
            'monitor_switch'=>0,
            'schedule_svr_uuid'=>'',
            'moni_log_keep_node'=>'5',
            'snmp_switch'=>1,
            'snmp_version'=>'',
            'snmp_community'=>'',
            'snmp_ip'=>'',
            'snmp_port'=>1,
            'moni_log_keep_server'=>'3',
            'security_check'=>0,
            'biz_grp_list'=>array(),
            'node_version'=>'',
            'proxy_ip'=>'',
            'disk_free_space_limit'=>1,
            'proxy_uuid'=>'',
            'maintenance'=>0,
            'rc_protection'=>0,
            'log_path'=>'',
            'is_ssl'=>1,
            'proxy_port'=>'',
            'roles'=>array(
            '0'=>1,
            '1'=>2,
            '2'=>4,
            '3'=>8,),
            'log_limit'=>1,
            'roles_info'=>array(
            '0'=>array(
            'modules'=>array(),
            'role'=>1,
            'processes'=>array(),),),
            'local_config_switch'=>1,
            'mem_limit'=>'819',),
        );
        
        
        $res = $nodeV3 -> createBatchNode($arr);
        $this->do_assert($res);
    }

    public function testDescribeDeviceInfo()
    {
        $nodeV3 = $this -> nodeV3;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $nodeV3 -> describeDeviceInfo($arr);
        $this->do_assert($res);
    }

    public function testDescribeDriverLetter()
    {
        $nodeV3 = $this -> nodeV3;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $nodeV3 -> describeDriverLetter($arr);
        $this->do_assert($res);
    }

    public function testAddSlaveNode()
    {
        $nodeV3 = $this -> nodeV3;
        $arr = array(
            'os_user'=>'administrator',
            'use_credential'=>1,
            'cred_uuid'=>'',
            'is_ssl'=>1,
            'proxy_switch'=>'0',
            'bind_lic_list'=>array(),
            'config_addr'=>'',
            'biz_grp_list'=>array(),
            'config_port'=>1,
            'comment'=>'',
            'roles'=>array(
            '0'=>1,
            '1'=>4,
            '2'=>8,),
            'proxy_id'=>'',
            'os_pwd'=>'yAZe2Hx6/dCL8GnjiRaro/mayqD24i3bMwZLtRXrHlRDIijGDcNKTqSK4IL91YIaqAGaOpUbnTr+y6VPgJ4UXJQset0se7bQgVrRjVncNeiVNCNyAzLktWYMMGKOWekw5uD2MOVEHhbknG0ZSuFXyywFEG9JTntNerCae7RSI6u2c3kRBCyqbdPc9osMK8YL9ZRqiIE/4K1+BomG9q1RwNEJhDcm/OaMxJCPHANNTImBWWv+Ir3qt20jjv1Fx7of2Fgb14Sj4TwGb7ESrbMiL/fblrfGl+rc6koNucEIRdT+aje+F47pKu4mknubWZ1wo+W2p/yaKyqfzTfeDFJtFQ==',
        );
        
        
        $res = $nodeV3 -> addSlaveNode($arr);
        $this->do_assert($res);
    }

    public function testBatchModifyNode()
    {
        $nodeV3 = $this -> nodeV3;
        $arr = array(
            'node'=>array(
            'rep_excl_path'=>array(),
            'log_path'=>'C:\\Program Files (x86)\\info2soft-i2node\\log\\',
            'config_addr'=>'192.168.74.25',
            'proxy_switch'=>0,
            'security_check'=>1,
            'node_role'=>'3',
            'bak_user_max'=>'100',
            'cloud_type'=>'0',
            'en_snap_switch'=>0,
            'os_pwd'=>'EnEyGDJF==',
            'vg'=>'',
            'monitor_log_path'=>'C:\\Program Files (x86)\\info2soft-i2node\\log\\',
            'data_addr'=>'192.168.74.25',
            'moni_log_keep_node'=>'5',
            'wk_path'=>array(),
            'disk_limit'=>'40960',
            'bak_service_type'=>'',
            'mem_limit'=>'13041',
            'os_type'=>2,
            'os_user'=>'Kyran',
            'bind_lic_list'=>'93AF0C9F-14C8-41A2-31CB-AAA0F65193FA',
            'moni_log_keep_server'=>'3',
            'node_name'=>'aaaa',
            'monitor_interval'=>'10',
            'maintenance'=>0,
            'bak_client_max'=>'100',
            'bak_root'=>'',
            'monitor_switch'=>0,
            'reboot_sys'=>'0',
            'config_port'=>26821,
            'rc_protection'=>0,
            'cred_uuid'=>'',
            'cache_path'=>'C:\\Program Files (x86)\\info2soft-i2node\\cache\\',
            'fc_as_initiator'=>0,
            'wwpn_info'=>array(),
            'keep_log_days'=>180,
            'group_uuid'=>'F5844651-DB5B-937D-73B1-A2378810F00A',
            'biz_grp_list'=>array(),
            'ecs_bind'=>0,
            'platform_uuid'=>'',
            'ecs_id'=>'',
            'comment'=>'',
            'use_credential'=>0,
            'disk_free_space_limit'=>1,
            'i2id'=>'',),
            'node_uuids'=>'',
        );
        
        
        $res = $nodeV3 -> batchModifyNode($arr);
        $this->do_assert($res);
    }

    public function testDescribeNodeInfo()
    {
        $nodeV3 = $this -> nodeV3;
        $arr = array(
            'ip'=>'',
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $nodeV3 -> describeNodeInfo($arr);
        $this->do_assert($res);
    }

    public function testListNode()
    {
        $nodeV3 = $this -> nodeV3;
        $arr = array(
            'like_args'=>array(
            'xxx'=>'',),
            'where_args'=>array(
            'xxx'=>'',),
            'type'=>1,
            'status'=>'',
            'status_from'=>'',
            'is_rc_wk'=>0,
            'filter_by_biz_grp'=>1,
            'order_by'=>'',
            'search_value'=>'',
            'direction'=>'',
            'search_field'=>'',
            'role'=>1,
            'user_filter'=>1,
            'limit'=>15,
            'cloud_uuid'=>'',
            'page'=>1,
        );
        
        
        $res = $nodeV3 -> listNode($arr);
        $this->do_assert($res);
    }

    public function testUpgradeNode()
    {
        $nodeV3 = $this -> nodeV3;
        $arr = array(
            'switch'=>0,
            'node_uuids'=>array(),
            'operate'=>'upgrade',
        );
        
        
        $res = $nodeV3 -> upgradeNode($arr);
        $this->do_assert($res);
    }

    public function testMaintainNode()
    {
        $nodeV3 = $this -> nodeV3;
        $arr = array(
            'switch'=>0,
            'node_uuids'=>array(),
            'operate'=>'upgrade',
        );
        
        
        $res = $nodeV3 -> maintainNode($arr);
        $this->do_assert($res);
    }

    public function testRenewKeyNode()
    {
        $nodeV3 = $this -> nodeV3;
        $arr = array(
            'switch'=>0,
            'node_uuids'=>array(),
            'operate'=>'upgrade',
        );
        
        
        $res = $nodeV3 -> renewKeyNode($arr);
        $this->do_assert($res);
    }

    public function testListNodeStatus()
    {
        $nodeV3 = $this -> nodeV3;
        $arr = array(
            'force_refresh'=>1,
            'node_uuids'=>array(
            '0'=>'D66246D7-89C4-DC3A-E9A2-D2FCE4A56307',
            '1'=>'064B23C1-DF92-8846-4BEA-8517789C35A4',),
        );
        
        
        $res = $nodeV3 -> listNodeStatus($arr);
        $this->do_assert($res);
    }

    public function testDeleteNode()
    {
        $nodeV3 = $this -> nodeV3;
        $arr = array(
            'force'=>1,
            'node_uuids'=>array(
            '0'=>'7eD6E9ce-D6FB-4Ac4-ccef-A6b88B7dC48C',),
            'delete_quota'=>1,
        );
        
        
        $res = $nodeV3 -> deleteNode($arr);
        $this->do_assert($res);
    }

    public function testNodeGetOracleInfo()
    {
        $nodeV3 = $this -> nodeV3;
        $arr = array(
            'sqlplus_path'=>'',
            'sid'=>'',
            'timeout'=>'',
            'port'=>'',
            'bk_uuid'=>'',
            'username'=>'',
            'password'=>'',
            'task_uuid'=>'',
        );
        
        
        $res = $nodeV3 -> nodeGetOracleInfo($arr);
        $this->do_assert($res);
    }

    public function testNodeGetMysqlInfo()
    {
        $nodeV3 = $this -> nodeV3;
        $arr = array(
            'username'=>'',
            'password'=>'',
            'mysql_path'=>'',
            'port'=>'',
            'bk_uuid'=>'',
            'mysql_host'=>'',
            'timeout'=>'',
        );
        
        
        $res = $nodeV3 -> nodeGetMysqlInfo($arr);
        $this->do_assert($res);
    }

    public function testDataIpList()
    {
        $nodeV3 = $this -> nodeV3;
        $arr = array(
            'node_uuids'=>array(),
        );
        
        
        $res = $nodeV3 -> dataIpList($arr);
        $this->do_assert($res);
    }

    public function testModifyDataIp()
    {
        $nodeV3 = $this -> nodeV3;
        $arr = array(
            'data_ip_list'=>array(
            '0'=>array(
            'uuid'=>'A7EC7CF9-FCA2-D467-ECD6-E028AA9C8319',
            'data_ip'=>'172.20.15.121',),),
            'node_uuid'=>'D6EC7CF9-FCA2-D467-ECD6-E028AA9C8319',
        );
        
        
        $res = $nodeV3 -> modifyDataIp($arr);
        $this->do_assert($res);
    }

    public function testListHbaInfo()
    {
        $nodeV3 = $this -> nodeV3;
        $arr = array(
            'config_addr'=>'',
            'config_port'=>'',
            'proxy_switch'=>1,
            'proxy_id'=>'',
        );
        
        
        $res = $nodeV3 -> listHbaInfo($arr);
        $this->do_assert($res);
    }

    public function testCheckUnbindEcs()
    {
        $nodeV3 = $this -> nodeV3;
        $arr = array(
            'node_uuid'=>'',
        );
        
        
        $res = $nodeV3 -> checkUnbindEcs($arr);
        $this->do_assert($res);
    }

    public function testGetNodeVersion()
    {
        $nodeV3 = $this -> nodeV3;
        $arr = array(
            'add'=>1,
            'cls_uuid'=>'',
            'ip'=>'',
            'port'=>1,
        );
        
        
        $res = $nodeV3 -> getNodeVersion($arr);
        $this->do_assert($res);
    }

    public function testActiveNode()
    {
        $nodeV3 = $this -> nodeV3;
        $arr = array(
            'list'=>array(
            '0'=>array(
            'node_uuid'=>'',
            'bind_lic_list'=>array(),),),
        );
        
        
        $res = $nodeV3 -> activeNode($arr);
        $this->do_assert($res);
    }

    public function testListWaitingActiveNode()
    {
        $nodeV3 = $this -> nodeV3;
        $arr = array();
        
        
        $res = $nodeV3 -> listWaitingActiveNode($arr);
        $this->do_assert($res);
    }

    public function testDownloadNodeInstallScript()
    {
        $nodeV3 = $this -> nodeV3;
        $arr = array(
            'os_type'=>0,
        );
        
        
        $res = $nodeV3 -> downloadNodeInstallScript($arr);
        $this->do_assert($res);
    }

    public function testGetNodePackageUrl()
    {
        $nodeV3 = $this -> nodeV3;
        $arr = array(
            'os_type'=>1,
        );
        
        
        $res = $nodeV3 -> getNodePackageUrl($arr);
        $this->do_assert($res);
    }

    public function testListRules()
    {
        $nodeV3 = $this -> nodeV3;
        $arr = array(
            'node_uuid'=>'',
            'page'=>1,
            'limit'=>10,
        );
        
        
        $res = $nodeV3 -> listRules($arr);
        $this->do_assert($res);
    }

    public function testDeleteInactiveNode()
    {
        $nodeV3 = $this -> nodeV3;
        $arr = array(
            'node_uuids'=>array(),
        );
        
        
        $res = $nodeV3 -> deleteInactiveNode($arr);
        $this->do_assert($res);
    }

    public function testListNodeUkey()
    {
        $nodeV3 = $this -> nodeV3;
        $arr = array(
            'node_uuid'=>'',
        );
        
        
        $res = $nodeV3 -> listNodeUkey($arr);
        $this->do_assert($res);
    }

    public function testListPlatform()
    {
        $nodeV3 = $this -> nodeV3;
        $arr = array();
        
        
        $res = $nodeV3 -> listPlatform($arr);
        $this->do_assert($res);
    }

    public function testListMysqlDatabases()
    {
        $nodeV3 = $this -> nodeV3;
        $arr = array(
            'mysql_host'=>'',
            'port'=>'',
            'username'=>'',
            'password'=>'',
            'timeout'=>'',
            'mysql_path'=>'',
            'node_uuid'=>'',
        );
        
        
        $res = $nodeV3 -> listMysqlDatabases($arr);
        $this->do_assert($res);
    }

    public function testListMysqlTables()
    {
        $nodeV3 = $this -> nodeV3;
        $arr = array(
            'username'=>'',
            'password'=>'',
            'mysql_host'=>'',
            'port'=>'',
            'timeout'=>'',
            'mysql_path'=>'',
            'node_uuid'=>'',
            'db_name'=>'',
        );
        
        
        $res = $nodeV3 -> listMysqlTables($arr);
        $this->do_assert($res);
    }

    public function testListNodeProcess()
    {
        $nodeV3 = $this -> nodeV3;
        $arr = array(
            'node_uuid'=>'',
        );
        
        
        $res = $nodeV3 -> listNodeProcess($arr);
        $this->do_assert($res);
    }

    public function testStartNodeProcess()
    {
        $nodeV3 = $this -> nodeV3;
        $arr = array(
            'node_uuids'=>array(),
            'operate'=>'',
            'data'=>array(
            '0'=>array(
            'pid'=>'',
            'pname'=>'',
            'module_name'=>'',),),
            'task_uuid'=>'',
        );
        
        
        $res = $nodeV3 -> startNodeProcess($arr);
        $this->do_assert($res);
    }

    public function testStopNodeProcess()
    {
        $nodeV3 = $this -> nodeV3;
        $arr = array(
            'node_uuids'=>array(),
            'operate'=>'',
            'data'=>array(
            '0'=>array(
            'pid'=>'',
            'pname'=>'',
            'module_name'=>'',),),
            'task_uuid'=>'',
        );
        
        
        $res = $nodeV3 -> stopNodeProcess($arr);
        $this->do_assert($res);
    }

    public function testRestartNodeProcess()
    {
        $nodeV3 = $this -> nodeV3;
        $arr = array(
            'node_uuids'=>array(),
            'operate'=>'',
            'data'=>array(
            '0'=>array(
            'pid'=>'',
            'pname'=>'',
            'module_name'=>'',),),
            'task_uuid'=>'',
        );
        
        
        $res = $nodeV3 -> restartNodeProcess($arr);
        $this->do_assert($res);
    }

    public function testInsmodNodeProcess()
    {
        $nodeV3 = $this -> nodeV3;
        $arr = array(
            'node_uuids'=>array(),
            'operate'=>'',
            'data'=>array(
            '0'=>array(
            'pid'=>'',
            'pname'=>'',
            'module_name'=>'',),),
            'task_uuid'=>'',
        );
        
        
        $res = $nodeV3 -> insmodNodeProcess($arr);
        $this->do_assert($res);
    }

    public function testRmmodNodeProcess()
    {
        $nodeV3 = $this -> nodeV3;
        $arr = array(
            'node_uuids'=>array(),
            'operate'=>'',
            'data'=>array(
            '0'=>array(
            'pid'=>'',
            'pname'=>'',
            'module_name'=>'',),),
            'task_uuid'=>'',
        );
        
        
        $res = $nodeV3 -> rmmodNodeProcess($arr);
        $this->do_assert($res);
    }

    public function testInstallNodeProcess()
    {
        $nodeV3 = $this -> nodeV3;
        $arr = array(
            'node_uuids'=>array(),
            'operate'=>'',
            'data'=>array(
            '0'=>array(
            'pid'=>'',
            'pname'=>'',
            'module_name'=>'',),),
            'task_uuid'=>'',
        );
        
        
        $res = $nodeV3 -> installNodeProcess($arr);
        $this->do_assert($res);
    }

    public function testUpgradeNodeProcess()
    {
        $nodeV3 = $this -> nodeV3;
        $arr = array(
            'node_uuids'=>array(),
            'operate'=>'',
            'data'=>array(
            '0'=>array(
            'pid'=>'',
            'pname'=>'',
            'module_name'=>'',),),
            'task_uuid'=>'',
        );
        
        
        $res = $nodeV3 -> upgradeNodeProcess($arr);
        $this->do_assert($res);
    }

    public function testReinstallNodeProcess()
    {
        $nodeV3 = $this -> nodeV3;
        $arr = array(
            'node_uuids'=>array(),
            'operate'=>'',
            'data'=>array(
            '0'=>array(
            'pid'=>'',
            'pname'=>'',
            'module_name'=>'',),),
            'task_uuid'=>'',
        );
        
        
        $res = $nodeV3 -> reinstallNodeProcess($arr);
        $this->do_assert($res);
    }

    public function testReinsmodNodeProcess()
    {
        $nodeV3 = $this -> nodeV3;
        $arr = array(
            'node_uuids'=>array(),
            'operate'=>'',
            'data'=>array(
            '0'=>array(
            'pid'=>'',
            'pname'=>'',
            'module_name'=>'',),),
            'task_uuid'=>'',
        );
        
        
        $res = $nodeV3 -> reinsmodNodeProcess($arr);
        $this->do_assert($res);
    }

    public function testUpgradeAndReinsmodNodeProcess()
    {
        $nodeV3 = $this -> nodeV3;
        $arr = array(
            'node_uuids'=>array(),
            'operate'=>'',
            'data'=>array(
            '0'=>array(
            'pid'=>'',
            'pname'=>'',
            'module_name'=>'',),),
            'task_uuid'=>'',
        );
        
        
        $res = $nodeV3 -> upgradeAndReinsmodNodeProcess($arr);
        $this->do_assert($res);
    }

    public function testBatchAuthNode()
    {
        $nodeV3 = $this -> nodeV3;
        $arr = array(
            'node_uuids'=>array(),
            'os_user'=>'',
            'os_pwd'=>'',
        );
        
        
        $res = $nodeV3 -> batchAuthNode($arr);
        $this->do_assert($res);
    }

    public function testListKernels()
    {
        $nodeV3 = $this -> nodeV3;
        $arr = array(
            'node_uuid'=>'',
        );
        
        
        $res = $nodeV3 -> listKernels($arr);
        $this->do_assert($res);
    }

    public function testDescribeFpServer()
    {
        $nodeV3 = $this -> nodeV3;
        $arr = array(
            'node_uuid'=>'',
        );
        
        
        $res = $nodeV3 -> describeFpServer($arr);
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