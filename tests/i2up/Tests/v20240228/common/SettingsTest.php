<?php
namespace i2up\Test\v20240228\common;

use i2up\common\v20240228\Settings;
use i2up\common\Auth;
                
class SettingsTest extends \PHPUnit_Framework_TestCase
 {
    private $settings;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> settings = new Settings(new Auth());
    }

    public function testListSysSetting()
    {
        $settings = $this -> settings;
        $arr = array(
            'keys'=>array(),
        );
        $res = $settings -> listSysSetting($arr);
        $this->do_assert($res);
    }

    public function testUpdateSetting()
    {
        $settings = $this -> settings;
        $arr = array(
            'cc_ips' => array(),
            'log_save_time' => '30',
            'page_size' => '10',
            'refresh_interval' => '10',
            'email_smtp_svr' => 'test',
            'email_smtp_port' => '25',
            'email_smtp_ssl' => '0',
            'email_smtp_auth' => '1',
            'email_account' => 'test@info2soft.com',
            'email_pwd' => '123456',
            'email_switch' => '1',
            'sms_switch' => '1',
            'sms_platform' => 'ali',
            'sms_app_key' => 'AppKey',
            'sms_secret_key' => 'SecretKey',
            'sms_sign_name' => 'SignName',
            'sms_template_code' => 'template',
            'sms_server' => '',
            'sms_username' => '',
            'sms_password' => '',
            'sms_domain_name' => '',
            'sms_region_name' => '',
            'sms_topic_urn' => '',
            'node_latest_ver' => '',
            'node_upgrade_server' => '',
            'node_upgrade_path' => '',
            'node_online_upgrade' => '0',
            'mirr_skip' => '0',
            'passwd_expire' => '30',
            'passwd_length' => '8',
            'passwd_strong' => '1',
            'login_attempt' => '13',
            'login_lock' => '10',
            'client_lang' => 'zh_cn',
            'offline_mode' => 0,
            'dtu_serial_device' => '',
            'dtu_baud_rate' => '',
            'email_title' => '',
            'email_content' => '',
            'email_from' => '',
            'product_title' => array(
                'title' => '',
                'copyright' => '',
                'favicon' => '',
                'copyright_logo' => '',
                'login_background' => '',
                'login_logo' => '',
                'home_logo' => '',
                'home_background' => '',
                'title_logo' => '',),
            'ylj_channel_no' => '0001',
            'ylj_system_no' => '0001',
            'log_path' => '',
            'max_log_path_size' => 1,
            'log_archive_path' => '',
            'max_disk_occupancy' => 0,
            'app_id' => '',
            'app_secret' => '',
            'wechat_switch' => 0,
            'wechat_token' => '',
            'aes_key' => '',
            'maintenance_switch' => 0,
            'maintenance_source_id' => '',
            'maintenance_default_ip' => '',
            'maintenance_user_id' => '',
            'maintenance_ip' => '',
            'white_list' => '[0.0.0.0]',
            'etcd_urls' => array(
                '0' => array(
                    'urls' => array(
                        '0' => array(
                            'ip' => '',
                            'etcd_port' => '',
                            'rpc_port' => '',
                            'data_port' => '',),),
                    'uuid' => '',
                    'has_node' => 1,
                    'name' => '',),),
            'maintenance_platform' => '',
            'maintenance_username' => '',
            'maintenance_password' => '',
            'maintenance_source_system_code' => '',
            'maintenance_source_system_name' => '',
            'maintenance_event_system_code' => '',
            'maintenance_event_system_name' => '',
            'snmp_switch' => 0,
            'snmp_version' => '',
            'snmp_community' => '',
            'snmp_ip' => '',
            'snmp_port' => 1,
            'maintenance_apikey' => '',
            'maintenance_app_key' => '',
            'maintenance_alarm_name' => '',
            'rc_protection' => 0,
            'public_key_expire' => 1,
            'weak_pwd_dic' => array(),
            'backup_work_limit' => 7,
            'file_certification' => 1,
            'cfs_mount_path' => '',
            'rule_version_limit' => 1,
        );
        $res = $settings -> updateSetting($arr);
        $this->do_assert($res);
    }

    public function testListPublicSettings()
    {
        $settings = $this -> settings;
        $arr = array('11111111-1111-1111-1111-111111111111');
        $res = $settings -> listPublicSettings($arr);
        $this->do_assert($res);
    }

    public function testDescribe()
    {
        $settings = $this -> settings;
        $arr = array('11111111-1111-1111-1111-111111111111');
        $res = $settings -> describe($arr);
        $this->do_assert($res);
    }

    public function testListNodeConf()
    {
        $settings = $this -> settings;
        $arr = array('11111111-1111-1111-1111-111111111111');
        $res = $settings -> listNodeConf($arr);
        $this->do_assert($res);
    }

    public function testUpdateNodeConf()
    {
        $settings = $this -> settings;
        $arr = array(
            'node_conf' => array(
                'windows' => array(
                    'log_path' => '/var/i2data/log/',
                    'keep_log_days' => 180,
                    'log_limit' => 1024,
                    'cache_path' => '/var/i2data/cache/',
                    'mem_limit_percent' => 100,
                    'disk_limit' => 10240,
                    'mon_send_interval' => 10,
                    'mon_data_path' => '/var/i2data/log/',
                    'db_save_day' => 3,
                    'mon_save_day' => 5,
                    'bak_meta_data_path' => '/var/i2data/meta_data/',
                    'temp_path' => '',
                    'disk_free_space_limit' => 1,
                    'bak_cache_data_dir' => '',
                    'bak_cache_data_upper_limit' => 1,
                    'bak_cache_disk_lower_limit' => 1,),
                'linux' => array(
                    'keep_log_days' => 1,
                    'log_path' => '',
                    'log_limit' => 1,
                    'cache_path' => '',
                    'mem_limit_percent' => 1,
                    'disk_limit' => 1,
                    'mon_send_interval' => 1,
                    'mon_data_path' => '',
                    'db_save_day' => 1,
                    'mon_save_day' => 1,
                    'bak_meta_data_path' => '',
                    'temp_path' => '',
                    'disk_free_space_limit' => 1,
                    'bak_cache_data_dir' => '',
                    'bak_cache_data_upper_limit' => 1,
                    'bak_cache_disk_lower_limit' => 1,),
                'roles_info' => array(
                    'role' => 1,
                    'modules' => array(),
                    'processes' => array(),),
                'roles' => array(
                    '0' => 1,
                    '1' => 2,
                    '2' => 4,
                    '3' => 8,),),
        );
        $res = $settings -> updateNodeConf($arr);
        $this->do_assert($res);
    }

    public function testCreateUser()
    {
        $settings = $this -> settings;
        $arr = array(
            'username' => 'test2',
            'password' => '11111111',
            'roles' => array(
                '0' => '3',),
            'active' => '1',
            'email' => '11@info2soft.com',
            'mobile' => '12366666666',
            'comment' => '',
        );
        $res = $settings -> createUser($arr);
        $this->do_assert($res);
    }

    public function testListUser()
    {
        $settings = $this -> settings;
        $arr = array(
            'limit'=>10,
            'page'=>1,
        );
        $res = $settings -> listUser($arr);
        $this->do_assert($res);
    }

    public function testDescribeUser()
    {
        $settings = $this -> settings;
        $arr = array(
            'id' => '1'
        );
        $res = $settings -> describeUser($arr);
        $this->do_assert($res);
    }

    public function testDeleteUser()
    {
        $settings = $this -> settings;
        $arr = array(
            'ids' => array(
                '0' => '20',
            ),
        );
        $res = $settings -> deleteUser($arr);
        $this->do_assert($res);
    }

    public function testModifyUser()
    {
        $settings = $this -> settings;
        $arr = array(
            'id' => '1',
            'username' => 'test',
            'password' => '11111111',
            'roles' => array(
                '0' => '3',),
            'active' => '1',
            'email' => '123@info2soft.com',
            'mobile' => '12332145248',
            'comment' => '',
            'first_name' => '',
            'last_name' => '',
        );
        $res = $settings -> modifyUser($arr);
        $this->do_assert($res);
    }

    public function testClearLoginAttempt()
    {
        $settings = $this -> settings;
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111'
        );
        $res = $settings -> clearLoginAttempt($arr);
        $this->do_assert($res);
    }

    public function testModifyUserEmailOrMobile()
    {
        $settings = $this -> settings;
        $arr = array(
            'user_uuid'=>'',
            'mobile'=>'',
            'email'=>'',
        );
        $res = $settings -> modifyUserEmailOrMobile($arr);
        $this->do_assert($res);
    }

    public function testModifyUserPwd()
    {
        $settings = $this -> settings;
        $arr = array(
            'old_password'=>'Info1234',
            'password'=>'Info1234',
        );
        $res = $settings -> modifyUserPwd($arr);
        $this->do_assert($res);
    }

    public function testListProfile()
    {
        $settings = $this -> settings;
        $arr = array('11111111-1111-1111-1111-111111111111');
        $res = $settings -> listProfile($arr);
        $this->do_assert($res);
    }

    public function testModifyProfile()
    {
        $settings = $this -> settings;
        $arr = array(
            'mobile'=>'15354254585',
            'email'=>'test@info2soft.com',
            'nickname'=>'test',
            'company'=>'info2soft',
            'address'=>'test',
            'comment'=>'',
        );
        $res = $settings -> modifyProfile($arr);
        $this->do_assert($res);
    }

    public function testLogout()
    {
        $settings = $this -> settings;
        $arr = array(
            'lock'=>1,
        );
        $res = $settings -> logout($arr);
        $this->do_assert($res);
    }

    public function testListAk()
    {
        $settings = $this -> settings;
        $arr = array(
            'type'=>1,
        );
        $res = $settings -> listAk($arr);
        $this->do_assert($res);
    }

    public function testCreateAk()
    {
        $settings = $this -> settings;
        $arr = array(
            'type'=>1,
        );
        $res = $settings -> createAk($arr);
        $this->do_assert($res);
    }

    public function testModifyAk()
    {
        $settings = $this -> settings;
        $arr = array(
            'access_key'=>'pytDWihn3NscXewH8UYLIZq2gE7ufGoQ',
            'status'=>0,
        );
        $res = $settings -> modifyAk($arr);
        $this->do_assert($res);
    }

    public function testDeleteAk()
    {
        $settings = $this -> settings;
        $arr = array(
            'access_key'=>'pytDWihn3NscXewH8UYLIZq2gE7ufGoQ',
        );
        $res = $settings -> deleteAk($arr);
        $this->do_assert($res);
    }

    public function testListRole()
    {
        $settings = $this -> settings;
        $arr = array(
            'filter_value'=>'operator',
            'filter_type'=>'name',
            'page'=>'1',
            'limit'=>'10',
        );
        $res = $settings -> listRole($arr);
        $this->do_assert($res);
    }

    public function testListNpsvr()
    {
        $settings = $this -> settings;
        $arr = array(
            'page'=>1,
            'limit'=>10,
        );
        $res = $settings -> listNpsvr($arr);
        $this->do_assert($res);
    }

    public function testDescribeNpsvr()
    {
        $settings = $this -> settings;
        $arr = array(
            'npsvr_uuid'=>'9C865EB7-6999-65D6-C029-0615735C137E',
        );
        $res = $settings -> describeNpsvr($arr);
        $this->do_assert($res);
    }

    public function testModifyNpsvr()
    {
        $settings = $this -> settings;
        $arr = array(
            'npsvr_uuid' => '9C865EB7-6999-65D6-C029-0615735C137E',
            'bkup_switch' => '0',
            'policy' => array(
                'limit' => '30',
                'bkup_type' => '0',
                'time' => '24',),
            'random_str' => '9C865EB7-6999-65D6-C029-0615735C137E',
        );
        $res = $settings -> modifyNpsvr($arr);
        $this->do_assert($res);
    }

    public function testDeleteNpsvr()
    {
        $settings = $this -> settings;
        $arr = array(
            'npsvr_uuid'=>'',
        );
        $res = $settings -> deleteNpsvr($arr);
        $this->do_assert($res);
    }

    public function testListNpsvrStatus()
    {
        $settings = $this -> settings;
        $arr = array(
            'npsvr_uuids'=>'',
        );
        $res = $settings -> listNpsvrStatus($arr);
        $this->do_assert($res);
    }

    public function testListNpsvrBakList()
    {
        $settings = $this -> settings;
        $arr = array(
            'npsvr_uuid'=>'',
        );
        $res = $settings -> listNpsvrBakList($arr);
        $this->do_assert($res);
    }

    public function testDeleteNpsvrBak()
    {
        $settings = $this -> settings;
        $arr = array(
            'id'=>'',
            'operate'=>'delete',
        );
        $res = $settings -> deleteNpsvrBak($arr);
        $this->do_assert($res);
    }

    public function testRecoveryNpsvrBak()
    {
        $settings = $this -> settings;
        $arr = array(
            'id'=>'',
            'operate'=>'recovery',
        );
        $res = $settings -> recoveryNpsvrBak($arr);
        $this->do_assert($res);
    }

    public function testListBakConfig()
    {
        $settings = $this -> settings;
        $arr = array(
            'page'=>1,
            'limit'=>10,
            'obj_type'=>'dto',
        );
        $res = $settings -> listBakConfig($arr);
        $this->do_assert($res);
    }

    public function testDescribeBakConfig()
    {
        $settings = $this -> settings;
        $arr = array(
            'obj_uuid'=>'',
        );
        $res = $settings -> describeBakConfig($arr);
        $this->do_assert($res);
    }

    public function testModifyBakConfig()
    {
        $settings = $this -> settings;
        $arr = array(
            'obj_uuid' => '9C865EB7-6999-65D6-C029-0615735C137E',
            'bkup_switch' => '0',
            'policy' => array(
                'limit' => 30,
                'bkup_type' => 0,
                'time' => 24,),
            'random_str' => '9C865EB7-6999-65D6-C029-0615735C137E',
        );
        $res = $settings -> modifyBakConfig($arr);
        $this->do_assert($res);
    }

    public function testDeleteBakConfig()
    {
        $settings = $this -> settings;
        $arr = array(
            'obj_uuid'=>'',
        );
        $res = $settings -> deleteBakConfig($arr);
        $this->do_assert($res);
    }

    public function testListBakConfigStatus()
    {
        $settings = $this -> settings;
        $arr = array(
            'obj_uuids'=>array('11111111-1111-1111-1111-111111111111'),
        );
        $res = $settings -> listBakConfigStatus($arr);
        $this->do_assert($res);
    }

    public function testListBakHistory()
    {
        $settings = $this -> settings;
        $arr = array(
            'obj_uuid'=>'',
        );
        $res = $settings -> listBakHistory($arr);
        $this->do_assert($res);
    }

    public function testDeleteBakConfigInfo()
    {
        $settings = $this -> settings;
        $arr = array(
            'id'=>1,
            'operate'=>'delete',
        );
        $res = $settings -> deleteBakConfigInfo($arr);
        $this->do_assert($res);
    }

    public function testRecoveryBakConfigInfo()
    {
        $settings = $this -> settings;
        $arr = array(
            'id'=>1,
            'operate'=>'recovery',
        );
        $res = $settings -> recoveryBakConfigInfo($arr);
        $this->do_assert($res);
    }

    public function testDescribeCtrlBakSetting()
    {
        $settings = $this -> settings;
        $arr = array('11111111-1111-1111-1111-111111111111');
        $res = $settings -> describeCtrlBakSetting($arr);
        $this->do_assert($res);
    }

    public function testModifyCtrlBakSetting()
    {
        $settings = $this -> settings;
        $arr = array(
            'bak_type' => 0,
            'bak_path' => '',
            'auto_switch' => 1,
            'bak_policy' => array(
                'policy' => '',
                'hour' => '',),
            'bak_limit' => 1,
            'storage_type' => '',
            'remote_settings' => array(
                'host' => '',
                'username' => '',
                'password' => '',
                'port' => 21,
                'ssl' => 1,
                'passive' => 1,
                'timeout' => 60,
                'root' => '',
                'private_key' => '',),
        );
        $res = $settings -> modifyCtrlBakSetting($arr);
        $this->do_assert($res);
    }

    public function testListDownloadCustomAudio()
    {
        $settings = $this -> settings;
        $arr = array('11111111-1111-1111-1111-111111111111');
        $res = $settings -> listDownloadCustomAudio($arr);
        $this->do_assert($res);
    }

    public function testUploadDownloadCustomAudio()
    {
        $settings = $this -> settings;
        $arr = array(
            'custom_audio'=>array(),
        );
        $res = $settings -> uploadDownloadCustomAudio($arr);
        $this->do_assert($res);
    }

    public function testDeleteDownloadCustomAudio()
    {
        $settings = $this -> settings;
        $arr = array(
            'custom_audio'=>'',
        );
        $res = $settings -> deleteDownloadCustomAudio($arr);
        $this->do_assert($res);
    }

    public function testDownloadCustomAudio()
    {
        $settings = $this -> settings;
        $arr = array('11111111-1111-1111-1111-111111111111');
        $res = $settings -> downloadCustomAudio($arr);
        $this->do_assert($res);
    }

    public function testChkEtcdUrl()
    {
        $settings = $this -> settings;
        $arr = array(
            'etcd_url_uuid'=>'',
        );
        $res = $settings -> chkEtcdUrl($arr);
        $this->do_assert($res);
    }

    public function testCreateUpdateScheduleSvr()
    {
        $settings = $this -> settings;
        $arr = array(
            'node_access_list' => array(
                '0' => array(
                    'ip' => '',
                    'uuid' => '',),),
            'os_pwd' => '',
            'os_user' => '',
            'rpc_port' => '',
            'data_port' => '',
            'rpc_addr' => '',
            'etcd_url_uuid' => '',
            'bkset_meta_data_path' => '',
            'log_dir' => '',
            'log_save_time' => 1,
            'log_save_size' => 1,
        );
        $res = $settings -> createUpdateScheduleSvr($arr);
        $this->do_assert($res);
    }

    public function testListScheduleSvr()
    {
        $settings = $this -> settings;
        $arr = array('11111111-1111-1111-1111-111111111111');
        $res = $settings -> listScheduleSvr($arr);
        $this->do_assert($res);
    }

    public function testDeleteScheduleSvr()
    {
        $settings = $this -> settings;
        $arr = array(
            'uuids'=>array('11111111-1111-1111-1111-111111111111'),
        );
        $res = $settings -> deleteScheduleSvr($arr);
        $this->do_assert($res);
    }

    public function testScanEtcdConf()
    {
        $settings = $this -> settings;
        $arr = array(
            'ip'=>'',
            'port'=>'',
            'user'=>'',
            'pwd'=>'',
        );
        $res = $settings -> scanEtcdConf($arr);
        $this->do_assert($res);
    }

    public function testCreateUpdateEtcd()
    {
        $settings = $this -> settings;
        $arr = array(
            'user' => '',
            'pwd' => '',
            'cls_conf' => array(
                '0' => array(
                    'ip' => '',
                    'port' => '',),),
            'node_access_list' => array(
                '0' => array(
                    'name' => '',
                    'ip_list' => array(
                        '0' => array(
                            'ip' => '',
                            'port' => '',),),
                    'uuid' => '',),),
        );
        $res = $settings -> createUpdateEtcd($arr);
        $this->do_assert($res);
    }

    public function testListEtcd()
    {
        $settings = $this -> settings;
        $arr = array('11111111-1111-1111-1111-111111111111');
        $res = $settings -> listEtcd($arr);
        $this->do_assert($res);
    }

    private function do_assert($res)
    {
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}