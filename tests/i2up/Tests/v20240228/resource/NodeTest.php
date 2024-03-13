<?php
namespace i2up\Test\v20240228\resource;

use i2up\resource\v20240228\Node;
use i2up\common\Auth;
                
class NodeTest extends \PHPUnit_Framework_TestCase
 {
    private $node;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> node = new Node(new Auth());
    }

    public function testAuthNode()
    {
        $node = $this -> node;
        $arr = array(
            'proxy_switch'=>0,
            'config_addr'=>'192.168.72.76',
            'config_port'=>26821,
            'node_uuid'=>'',
            'os_user'=>'chenky',
            'os_pwd'=>'123qwe',
            'i2id'=>'',
            'use_credential'=>0,
            'cred_uuid'=>'',
            'is_ssl'=>1,
        );
        $res = $node -> authNode($arr);
        $this->do_assert($res);
    }

    public function testListNodePackageList()
    {
        $node = $this -> node;
        $arr = array(
            'for_download'=>1,
        );
        $res = $node -> listNodePackageList($arr);
        $this->do_assert($res);
    }

    public function testCheckCapacity()
    {
        $node = $this -> node;
        $arr = array(
            'cache_path'=>'C:\Program Files (x86)\info2soft\node\cache\\',
            'proxy_switch'=>0,
            'i2id'=>'',
            'config_addr'=>'172.20.2.205',
            'config_port'=>'26821',
            'is_ssl'=>1,
        );
        $res = $node -> checkCapacity($arr);
        $this->do_assert($res);
    }

    public function testListVg()
    {
        $node = $this -> node;
        $arr = array(
            'proxy_switch'=>0,
            'i2id'=>'',
            'config_addr'=>'192.168.72.76',
            'config_port'=>'26821',
        );
        $res = $node -> listVg($arr);
        $this->do_assert($res);
    }

    public function testListHostInfo()
    {
        $node = $this -> node;
        $arr = array(
            'node_type'=>1,
            'config_addr'=>'',
        );
        $res = $node -> listHostInfo($arr);
        $this->do_assert($res);
    }

    public function testCheckNodeOnline()
    {
        $node = $this -> node;
        $arr = array(
            'proxy_switch'=>0,
            'config_port'=>'26821',
            'i2id'=>'66F636FE29656416690A62296580EBD9',
            'config_addr'=>'192.168.72.76',
            'is_ssl'=>1,
        );
        $res = $node -> checkNodeOnline($arr);
        $this->do_assert($res);
    }

    public function testBatchSearchByPort()
    {
        $node = $this -> node;
        $arr = array(
            'ip'=>'',
            'port_start'=>1,
            'port_end'=>1,
        );
        $res = $node -> batchSearchByPort($arr);
        $this->do_assert($res);
    }

    public function testListNodeBindEcs()
    {
        $node = $this -> node;
        $arr = array(
            'config_addr'=>'192.168.72.76',
            'config_port'=>'26821',
            'platform_uuid'=>'',
        );
        $res = $node -> listNodeBindEcs($arr);
        $this->do_assert($res);
    }

    public function testCreateNode()
    {
        $node = $this -> node;
        $arr = array(
            'node'=>array(
            'bak_client_max'=>'100',
            'cloud_type'=>'0',
            'bak_root'=>'',
            'monitor_switch'=>0,
            'node_role'=>'3',
            'mem_limit'=>819,
            'config_port'=>26821,
            'mon_save_day'=>'5',
            'vg'=>'',
            'os_type'=>1,
            'os_pwd'=>'',
            'log_path'=>'C:\\Program Files (x86)\\info2soft\\node\\log\\',
            'mon_data_path'=>'C:\\Program Files (x86)\\info2soft\\node\\log\\',
            'comment'=>'',
            'rep_path'=>array(),
            'bak_user_max'=>'100',
            'cache_path'=>'C:\\Program Files (x86)\\info2soft\\node\\log\\',
            'db_save_day'=>'3',
            'proxy_switch'=>0,
            'data_addr'=>'192.168.72.76',
            'node_name'=>'N4_72.76',
            'config_addr'=>'192.168.72.76',
            'mon_send_interval'=>'10',
            'disk_limit'=>'10240',
            'reboot_sys'=>'0',
            'bind_lic_list'=>array(),
            'security_check'=>0,
            'os_user'=>'Kyran',
            'bak_service_type'=>'',
            'en_snap_switch'=>0,
            'rep_excl_path'=>array(),
            'biz_grp_list'=>array(),
            'i2id'=>'',
            'dtrack_switch'=>3,
            'iscsi_as_initiator'=>1,
            'iscsi_switch'=>1,
            'iscsi_as_target'=>1,
            'iscsi_initiator_name'=>'',
            'use_credential'=>0,
            'cred_uuid'=>'',
            'disk_free_space_limit'=>1,
            'node_info'=>array(),
            'cc_ip_uuid'=>'',
            'maintenance'=>0,
            'node_type'=>1,
            'cls_node'=>'',
            'fc_as_initiator'=>1,
            'wwpn_info'=>array(),
            'platform_uuid'=>'',
            'ecs_id'=>'',
            'ecs_bind'=>1,
            'keep_log_days'=>180,
            'etcd_url_uuid'=>'',
            'sys_uuid'=>'',
            'region_id'=>'',
            'project_id'=>'',
            'project_name'=>'',
            'is_ssl'=>1,
            'winstack_pool_id'=>'',
            'winstack_host_id'=>'',
            'vm_ref'=>'',
            'vm_name'=>'',
            'alarm_switch'=>0,
            'cpu_threshold'=>80,
            'memory_threshold'=>80,
            'monitor_process'=>0,
            'snmp_switch'=>0,
            'snmp_version'=>'2c',
            'snmp_ip'=>'',
            'snmp_port'=>1,
            'snmp_community'=>'',
            'aio_cluster_id'=>'',
            'aio_host_id'=>'',
            'rc_protection'=>0,
            'guard_data_switch'=>0,
            'guard_data_pwd'=>'',
            'guard_data_threshold'=>1,
            'renew_public_key'=>1,
            'roles'=>array(
            '0'=>1,
            '1'=>2,
            '2'=>4,
            '3'=>8,),
            'log_limit'=>1024,
            'bak_meta_data_path'=>'',
            'bak_meta_data_policy'=>1,
            'temp_path'=>'',
            'roles_info'=>array(
            'role'=>1,
            'processes'=>array(),
            'modules'=>array(),),
            'schedule_svr_uuid'=>'',
            'bak_cache_data_dir'=>'',
            'bak_cache_disk_lower_limit'=>1,
            'bak_cache_data_upper_limit'=>1,
            'local_config_switch'=>1,
            'auto_move'=>1,
            'node_uuid'=>'',),
        );
        $res = $node -> createNode($arr);
        $this->do_assert($res);
    }

    public function testModifyNode()
    {
        $node = $this -> node;
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111',
            'node'=>array(
            'moni_log_keep_node'=>'5',
            '_path'=>array(),
            'log_path'=>'C:\\Program Files (x86)\\info2soft\\node\\log\\',
            'disk_limit'=>'40960',
            'bak_service_type'=>'',
            'config_addr'=>'192.168.74.25',
            'mem_limit'=>'13041',
            'os_type'=>2,
            'os_user'=>'Kyran',
            'proxy_switch'=>0,
            'bind_lic_list'=>'93AF0C9F-14C8-41A2-31CB-AAA0F65193FA',
            'moni_log_keep_server'=>'3',
            'node_name'=>'aaaa',
            'keep_log_days'=>180,
            'monitor_interval'=>'10',
            'security_check'=>1,
            'reboot_sys'=>'0',
            'bak_client_max'=>'100',
            'bak_root'=>'',
            'node_role'=>'3',
            'monitor_switch'=>0,
            'cache_path'=>'C:\\Program Files (x86)\\info2soft\\node\\log\\',
            'config_port'=>26821,
            'bak_user_max'=>'100',
            'group_uuid'=>'F5844651-DB5B-937D-73B1-A2378810F00A',
            'comment'=>'',
            'biz_grp_list'=>array(),
            'cloud_type'=>'0',
            'i2id'=>'',
            'use_credential'=>0,
            'cred_uuid'=>'',
            'en_snap_switch'=>0,
            'disk_free_space_limit'=>1,
            'platform_uuid'=>'',
            'maintenance'=>0,
            'os_pwd'=>'EnEyGDJF==',
            'ecs_bind'=>0,
            'ecs_id'=>'',
            'fc_as_initiator'=>0,
            'vg'=>'',
            'wwpn_info'=>array(),
            'monitor_log_path'=>'C:\\Program Files (x86)\\info2soft\\node\\log\\',
            'data_addr'=>'192.168.74.25',
            'rep_excl_path'=>array(),
            'batch_cc_ip_uuid'=>1,
            'batch_biz_grp_list'=>1,
            'batch_log_path'=>1,
            'batch_cache_path'=>1,
            'batch_mem_limit'=>1,
            'batch_disk_limit'=>1,
            'batch_disk_free_space_limit'=>1,
            'batch_security_check'=>1,
            'batch_maintenance'=>1,
            'batch_switch'=>1,
            'batch_monitor'=>1,
            'batch_rep_path'=>1,
            'sys_uuid'=>'',
            'batch_keep_log_days'=>1,
            'project_id'=>'',
            'region_id'=>'',
            'project_name'=>'',
            'is_ssl'=>1,
            'snmp_switch'=>0,
            'snmp_version'=>'',
            'snmp_community'=>'',
            'snmp_ip'=>'',
            'snmp_port'=>1,
            'batch_snmp'=>1,
            'aio_cluster_id'=>'',
            'aio_host_id'=>'',
            'rc_protection'=>0,
            'batch_rc_protection'=>0,
            'guard_data_switch'=>1,
            'guard_data_user'=>'',
            'guard_data_pwd'=>'',
            'guard_data_threshold'=>1,
            'roles'=>array(
            '0'=>1,
            '1'=>2,
            '2'=>4,
            '3'=>8,),
            'log_limit'=>1,
            'roles_info'=>array(
            '0'=>array(
            'role'=>1,
            'processes'=>array(),
            'modules'=>array(),),),
            'temp_path'=>1,
            'bak_meta_data_path'=>'',
            'bak_meta_data_policy'=>1,
            'monitor_process'=>1,
            'batch_log_limit'=>0,
            'batch_bak_meta_data_path'=>1,
            'batch_temp_path'=>1,
            'batch_guard'=>1,
            'batch_bak_meta_data_policy'=>1,
            'bak_cache_data_dir'=>'',
            'bak_cache_data_upper_limit'=>'',
            'bak_cache_disk_lower_limit'=>'',
            'etcd_url_uuid'=>'',
            'batch_bak_cache_data_dir'=>1,
            'batch_bak_cache_data_upper_limit'=>1,
            'batch_bak_cache_disk_lower_limit'=>1,
            'batch_etcd_url_uuid'=>1,
            'batch_schedule_svr_uuid'=>1,
            'schedule_svr_uuid'=>'',
            'local_config_switch'=>1,
            'batch_local_config_switch'=>1,),
        );
        $res = $node -> modifyNode($arr);
        $this->do_assert($res);
    }

    public function testDescribeNode()
    {
        $node = $this -> node;
        $arr = array('uuid' => '11111111-1111-1111-1111-111111111111');
        $res = $node -> describeNode($arr);
        $this->do_assert($res);
    }

    public function testCreateBatchNode()
    {
        $node = $this -> node;
        $arr = array(
            'base_info_list'=>array(
            '0'=>array(
            'os_pwd'=>'123qwe',
            'os_user'=>'chenky',
            'config_port'=>26821,
            'config_addr'=>'192.168.72.76',
            'node_name'=>'N4_72.76',
            'need_install'=>0,
            'install_type'=>1,
            'install_port_linux'=>22,
            'install_path'=>'',
            'os_type'=>1,
            'rep_path'=>array(),
            'installation_mode'=>0,
            'bak_meta_data_path'=>'',),),
            'node'=>array(
            'mem_limit'=>'819',
            'bind_lic_list'=>array(),
            'disk_limit'=>'10240',
            'monitor_interval'=>'10',
            'node_role'=>'3',
            'monitor_switch'=>0,
            'moni_log_keep_node'=>'5',
            'moni_log_keep_server'=>'3',
            'security_check'=>0,
            'biz_grp_list'=>array(),
            'node_version'=>'',
            'proxy_ip'=>'',
            'disk_free_space_limit'=>1,
            'proxy_uuid'=>'',
            'is_ssl'=>1,
            'alarm_switch'=>1,
            'cpu_threshold'=>1,
            'memory_threshold'=>1,
            'monitor_process'=>1,
            'snmp_switch'=>1,
            'snmp_version'=>'',
            'snmp_community'=>'',
            'snmp_ip'=>'',
            'snmp_port'=>1,
            'maintenance'=>0,
            'rc_protection'=>0,
            'roles'=>array(
            '0'=>1,
            '1'=>2,
            '2'=>4,
            '3'=>8,),
            'log_limit'=>1,
            'roles_info'=>array(
            '0'=>array(
            'role'=>1,
            'processes'=>array(),
            'modules'=>array(),),),
            'temp_path'=>1,
            'etcd_url_uuid'=>'',
            'schedule_svr_uuid'=>'',
            'local_config_switch'=>1,),
        );
        $res = $node -> createBatchNode($arr);
        $this->do_assert($res);
    }

    public function testDescribeDeviceInfo()
    {
        $node = $this -> node;
        $arr = array('uuid' => '11111111-1111-1111-1111-111111111111');
        $res = $node -> describeDeviceInfo($arr);
        $this->do_assert($res);
    }

    public function testDescribeDriverLetter()
    {
        $node = $this -> node;
        $arr = array('uuid' => '11111111-1111-1111-1111-111111111111');
        $res = $node -> describeDriverLetter($arr);
        $this->do_assert($res);
    }

    public function testAddSlaveNode()
    {
        $node = $this -> node;
        $arr = array(
            'proxy_switch'=>'0',
            'config_addr'=>'',
            'config_port'=>1,
            'i2id'=>'',
            'os_pwd'=>'yAZe2Hx6/dCL8GnjiRaro/mayqD24i3bMwZLtRXrHlRDIijGDcNKTqSK4IL91YIaqAGaOpUbnTr+y6VPgJ4UXJQset0se7bQgVrRjVncNeiVNCNyAzLktWYMMGKOWekw5uD2MOVEHhbknG0ZSuFXyywFEG9JTntNerCae7RSI6u2c3kRBCyqbdPc9osMK8YL9ZRqiIE/4K1+BomG9q1RwNEJhDcm/OaMxJCPHANNTImBWWv+Ir3qt20jjv1Fx7of2Fgb14Sj4TwGb7ESrbMiL/fblrfGl+rc6koNucEIRdT+aje+F47pKu4mknubWZ1wo+W2p/yaKyqfzTfeDFJtFQ==',
            'os_user'=>'administrator',
            'use_credential'=>1,
            'cred_uuid'=>'',
            'bind_lic_list'=>array(),
            'biz_grp_list'=>array(),
            'comment'=>'',
            'is_ssl'=>1,
            'roles'=>array(
            '0'=>1,
            '1'=>4,
            '2'=>8,),
        );
        $res = $node -> addSlaveNode($arr);
        $this->do_assert($res);
    }

    public function testBatchModifyNode()
    {
        $node = $this -> node;
        $arr = array(
            'node'=>array(
            'rep_excl_path'=>array(),
            'log_path'=>'C:\\Program Files (x86)\\info2soft\\node\\log\\',
            'config_addr'=>'192.168.74.25',
            'proxy_switch'=>0,
            'security_check'=>1,
            'node_role'=>'3',
            'bak_user_max'=>'100',
            'cloud_type'=>'0',
            'en_snap_switch'=>0,
            'os_pwd'=>'EnEyGDJF==',
            'vg'=>'',
            'monitor_log_path'=>'C:\\Program Files (x86)\\info2soft\\node\\log\\',
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
            'cred_uuid'=>'',
            'cache_path'=>'C:\\Program Files (x86)\\info2soft\\node\\log\\',
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
            'i2id'=>'',
            'rc_protection'=>0,),
            'node_uuids'=>'',
        );
        $res = $node -> batchModifyNode($arr);
        $this->do_assert($res);
    }

    public function testDescribeNodeInfo()
    {
        $node = $this -> node;
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111',
            'ip'=>'',
        );
        $res = $node -> describeNodeInfo($arr);
        $this->do_assert($res);
    }

    public function testListNode()
    {
        $node = $this -> node;
        $arr = array(
            'search_value'=>'',
            'search_field'=>'',
            'limit'=>15,
            'page'=>1,
            'type'=>1,
            'like_args[xxx]'=>'',
            'where_args[xxx]'=>'',
            'filter_by_biz_grp'=>1,
            'order_by'=>'',
            'direction'=>'',
            'user_filter'=>1,
            'cloud_uuid'=>'',
            'status'=>'',
            'status_from'=>'',
            'is_rc_wk'=>0,
            'role'=>1,
        );
        $res = $node -> listNode($arr);
        $this->do_assert($res);
    }

    public function testUpgradeNode()
    {
        $node = $this -> node;
        $arr = array(
            'node_uuids'=>array('11111111-1111-1111-1111-111111111111'),
            'operate'=>'upgrade',
        );
        $res = $node -> upgradeNode($arr);
        $this->do_assert($res);
    }

    public function testMaintainNode()
    {
        $node = $this -> node;
        $arr = array(
            'node_uuids'=>array('11111111-1111-1111-1111-111111111111'),
            'operate'=>'maintain',
            'switch'=>1,
        );
        $res = $node -> maintainNode($arr);
        $this->do_assert($res);
    }

    public function testUpdateNode()
    {
        $node = $this -> node;
        $arr = array(
            'node_uuids'=>array('11111111-1111-1111-1111-111111111111'),
            'operate'=>'update',
        );
        $res = $node -> updateNode($arr);
        $this->do_assert($res);
    }

    public function testRenewKeyNode()
    {
        $node = $this -> node;
        $arr = array(
            'node_uuids'=>array('11111111-1111-1111-1111-111111111111'),
            'operate'=>'renew_key',
        );
        $res = $node -> renewKeyNode($arr);
        $this->do_assert($res);
    }

    public function testListNodeStatus()
    {
        $node = $this -> node;
        $arr = array(
            'node_uuids'=>array(
                '0'=>'D66246D7-89C4-DC3A-E9A2-D2FCE4A56307',
                '1'=>'064B23C1-DF92-8846-4BEA-8517789C35A4',
            ),
            'force_refresh'=>1,
        );
        $res = $node -> listNodeStatus($arr);
        $this->do_assert($res);
    }

    public function testDeleteNode()
    {
        $node = $this -> node;
        $arr = array(
            'node_uuids'=>array(
                '0'=>'bA28CEe0-84e1-DBE6-dd8B-EF4F8FFE4ccE',
            ),
            'delete_quota'=>1,
            'force'=>1,
        );
        $res = $node -> deleteNode($arr);
        $this->do_assert($res);
    }

    public function testNode()
    {
        $node = $this -> node;
        $arr = array(
            'limit'=>1,
            'page'=>1,
            'type'=>1,
        );
        $res = $node -> node($arr);
        $this->do_assert($res);
    }

    public function testNodeGetOracleInfo()
    {
        $node = $this -> node;
        $arr = array(
            'username'=>'',
            'password'=>'',
            'sqlplus_path'=>'',
            'sid'=>'',
            'timeout'=>'',
            'port'=>'',
            'bk_uuid'=>'',
        );
        $res = $node -> nodeGetOracleInfo($arr);
        $this->do_assert($res);
    }

    public function testNodeGetMysqlInfo()
    {
        $node = $this -> node;
        $arr = array(
            'timeout'=>'',
            'username'=>'',
            'password'=>'',
            'mysql_path'=>'',
            'port'=>'',
            'bk_uuid'=>'',
            'mysql_host'=>'',
        );
        $res = $node -> nodeGetMysqlInfo($arr);
        $this->do_assert($res);
    }

    public function testDataIpList()
    {
        $node = $this -> node;
        $arr = array(
            'node_uuids'=>array('11111111-1111-1111-1111-111111111111'),
        );
        $res = $node -> dataIpList($arr);
        $this->do_assert($res);
    }

    public function testModifyDataIp()
    {
        $node = $this -> node;
        $arr = array(
            'data_ip_list'=>array(
                '0'=>array(
                    'uuid'=>'A7EC7CF9-FCA2-D467-ECD6-E028AA9C8319',
                    'data_ip'=>'172.20.15.121',
                ),
            ),
            'node_uuid'=>'D6EC7CF9-FCA2-D467-ECD6-E028AA9C8319',
        );
        $res = $node -> modifyDataIp($arr);
        $this->do_assert($res);
    }

    public function testListHbaInfo()
    {
        $node = $this -> node;
        $arr = array(
            'config_addr'=>'',
            'config_port'=>'',
            'proxy_switch'=>1,
            'i2id'=>'',
        );
        $res = $node -> listHbaInfo($arr);
        $this->do_assert($res);
    }

    public function testCheckUnbindEcs()
    {
        $node = $this -> node;
        $arr = array(
            'node_uuid'=>'',
        );
        $res = $node -> checkUnbindEcs($arr);
        $this->do_assert($res);
    }

    public function testGetNodeVersion()
    {
        $node = $this -> node;
        $arr = array(
            'ip'=>'',
            'port'=>1,
            'add'=>1,
            'cls_uuid'=>'',
        );
        $res = $node -> getNodeVersion($arr);
        $this->do_assert($res);
    }

    public function testActiveNode()
    {
        $node = $this -> node;
        $arr = array(
            'list'=>array(
            '0'=>array(
                'node_uuid'=>'',
                'bind_lic_list'=>array(),
                ),
            ),
        );
        $res = $node -> activeNode($arr);
        $this->do_assert($res);
    }

    public function testListWaitingActiveNode()
    {
        $node = $this -> node;
        $arr = array();
        $res = $node -> listWaitingActiveNode($arr);
        $this->do_assert($res);
    }

    public function testDownloadNodeInstallScript()
    {
        $node = $this -> node;
        $arr = array(
            'os_type'=>0,
        );
        $res = $node -> downloadNodeInstallScript($arr);
        $this->do_assert($res);
    }

    public function testGetNodePackageUrl()
    {
        $node = $this -> node;
        $arr = array(
            'os_type'=>1,
        );
        $res = $node -> getNodePackageUrl($arr);
        $this->do_assert($res);
    }

    public function testListRules()
    {
        $node = $this -> node;
        $arr = array(
            'node_uuid'=>'',
            'page'=>1,
            'limit'=>10,
        );
        $res = $node -> listRules($arr);
        $this->do_assert($res);
    }

    public function testDeleteInactiveNode()
    {
        $node = $this -> node;
        $arr = array(
            'node_uuids'=>array(),
        );
        $res = $node -> deleteInactiveNode($arr);
        $this->do_assert($res);
    }

    public function testListNodeUkey()
    {
        $node = $this -> node;
        $arr = array(
            'node_uuid'=>'',
        );
        $res = $node -> listNodeUkey($arr);
        $this->do_assert($res);
    }

    public function testListPlatform()
    {
        $node = $this -> node;
        $arr = array();
        $res = $node -> listPlatform($arr);
        $this->do_assert($res);
    }

    public function testListMysqlDatabases()
    {
        $node = $this -> node;
        $arr = array(
            'mysql_host'=>'',
            'port'=>'',
            'username'=>'',
            'password'=>'',
            'timeout'=>'',
            'mysql_path'=>'',
            'node_uuid'=>'',
        );
        $res = $node -> listMysqlDatabases($arr);
        $this->do_assert($res);
    }

    public function testListMysqlTables()
    {
        $node = $this -> node;
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
        $res = $node -> listMysqlTables($arr);
        $this->do_assert($res);
    }

    public function testListNodeProcess()
    {
        $node = $this -> node;
        $arr = array(
            'node_uuid'=>'',
        );
        $res = $node -> listNodeProcess($arr);
        $this->do_assert($res);
    }

    public function testOperateNodeProcess()
    {
        $node = $this -> node;
        $arr = array(
            'node_uuid'=>'',
            'operate'=>'',
            'data'=>array(
                '0'=>array(
                    'pid'=>'',
                    'pname'=>'',
                ),
            ),
        );
        $res = $node -> operateNodeProcess($arr);
        $this->do_assert($res);
    }

    public function testListKernels()
    {
        $node = $this -> node;
        $arr = array(
            'node_uuid'=>'',
        );
        $res = $node -> listKernels($arr);
        $this->do_assert($res);
    }

    public function testBatchAuthNode()
    {
        $node = $this -> node;
        $arr = array(
            'node_uuids'=>array(),
            'os_user'=>'',
            'os_pwd'=>'',
        );
        $res = $node -> batchAuthNode($arr);
        $this->do_assert($res);
    }

    private function do_assert($res)
    {
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}