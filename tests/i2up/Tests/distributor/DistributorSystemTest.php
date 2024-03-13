<?php
namespace i2up\Test\distributor;

use i2up\distributor\v20200721\DistributorSystem;
use i2up\common\Auth;

class DistributorSystemTest extends \PHPUnit_Framework_TestCase
{
    private $distributorSystem;

    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> distributorSystem = new DistributorSystem(new Auth());
    }

    public function testListSysSetting()
    {
        $distributorSystem = $this -> distributorSystem;
        $arr = array(
        );
        $res = $distributorSystem -> listSysSetting($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testUpdateSetting()
    {
        $distributorSystem = $this -> distributorSystem;
        $arr = array(
            'cc_ip'=>'192.168.72.70',
            'log_save_time'=>'30',
            'page_size'=>'10',
            'refresh_interval'=>'10',
            'email_smtp_svr'=>'test',
            'email_smtp_port'=>'25',
            'email_smtp_ssl'=>'0',
            'email_smtp_auth'=>'1',
            'email_account'=>'test@info2soft.com',
            'email_pwd'=>'123456',
            'email_switch'=>'1',
            'sms_switch'=>'1',
            'sms_platform'=>'ali',
            'sms_app_key'=>'AppKey',
            'sms_secret_key'=>'SecretKey',
            'sms_sign_name'=>'SignName',
            'sms_template_code'=>'template',
            'sms_server'=>'',
            'sms_username'=>'',
            'sms_password'=>'',
            'sms_domain_name'=>'',
            'sms_region_name'=>'',
            'sms_topic_urn'=>'',
            'notify_contact_biz'=>array(
                'phone'=>'11111111111',
                'email'=>'test@info2sost.com',),
            'notify_contact_chk'=>array(
                'phone'=>'11111111111',
                'email'=>'test@info2sost.com',
                'policy'=>array(
                    'every'=>'month',
                    'days'=>'5,6',),),
            'notify_contact_status'=>array(
                'phone'=>'11111111111',
                'email'=>'test@info2sost.com',
                'policy'=>array(
                    'every'=>'hour',
                    'gap'=>'4',),),
            'node_latest_ver'=>'',
            'node_upgrade_server'=>'',
            'node_upgrade_path'=>'',
            'node_online_upgrade'=>'0',
            'mirr_skip'=>'0',
            'passwd_expire'=>'30',
            'passwd_length'=>'8',
            'passwd_strong'=>'1',
            'login_attempt'=>'13',
            'login_lock'=>'10',
            'notify_limit'=>'10',
            'client_lang'=>'zh_cn',
            'offline_mode'=>0,
            'dtu_serial_device'=>'',
            'dtu_baud_rate'=>'',
            'email_title'=>'',
            'email_content'=>'',
            'email_from'=>'',
            'product_title'=>array(
                'title'=>'',
                'copyright'=>'',
                'favicon'=>'',
                'copyright_logo'=>'',
                'login_background'=>'',
                'login_logo'=>'',
                'home_logo'=>'',
                'home_background'=>'',
                'title_logo'=>'',),
            'dist_cycle_alarm'=>'',
            'cmd_params'=>array(
                'thread_num'=>'',
                'begin_time'=>'',
                'end_time'=>'',
                'timeout'=>'',),
        );
        $res = $distributorSystem -> updateSetting($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testQueueList()
    {
        $distributorSystem = $this -> distributorSystem;
        $arr = array(
            'limit'=>1,
            'page'=>1,
            'user_uuids'=>array(),
        );
        $res = $distributorSystem -> queueList($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testQueueDelete()
    {
        $distributorSystem = $this -> distributorSystem;
        $arr = array(
            'uuids'=>array(),
        );
        $res = $distributorSystem -> queueDelete($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testUpgradeVersion()
    {
        $distributorSystem = $this -> distributorSystem;
        $arr = array(
        );
        $res = $distributorSystem -> upgradeVersion($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testUpdate()
    {
        $distributorSystem = $this -> distributorSystem;
        $arr = array(
            'uuids'=>array(),
        );
        $res = $distributorSystem -> update($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testAlarmStat()
    {
        $distributorSystem = $this -> distributorSystem;
        $arr = array(
            'user_uuids'=>array(),
        );
        $res = $distributorSystem -> alarmStat($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testAlarmLog()
    {
        $distributorSystem = $this -> distributorSystem;
        $arr = array(
            'page'=>1,
            'limit'=>1,
            'log_level'=>1,
            'user_uuids'=>array(),
            'where_args'=>array(),
        );
        $res = $distributorSystem -> alarmLog($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDeleteAlarmLog()
    {
        $distributorSystem = $this -> distributorSystem;
        $arr = array(
            'operate'=>'delete',
            'uuids'=>array(),
        );
        $res = $distributorSystem -> deleteAlarmLog($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testReadAlarmLog()
    {
        $distributorSystem = $this -> distributorSystem;
        $arr = array(
            'operate'=>'delete',
            'uuids'=>array(),
        );
        $res = $distributorSystem -> readAlarmLog($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testCreateUser()
    {
        $distributorSystem = $this -> distributorSystem;
        $arr = array(
            'username'=>'test2',
            'password'=>'11111111',
            'roles'=>array(
                '0'=>'3',),
            'active'=>1,
            'email'=>'11@info2soft.com',
            'mobile'=>'12366666666',
            'comment'=>'',
            'full_name'=>'',
            'property'=>1,
            'type'=>1,
            'begin_date'=>'',
            'end_date'=>'',
            'product_name'=>'',
            'sys_name'=>'',
            'lab_name'=>'',
            'contact'=>'',
            'address'=>'',
        );
        $res = $distributorSystem -> createUser($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testModifyUser()
    {
        $distributorSystem = $this -> distributorSystem;
        $arr = array(
            'username'=>'test2',
            'password'=>'11111111',
            'roles'=>array(
                '0'=>'3',),
            'active'=>'1',
            'email'=>'11@info2soft.com',
            'mobile'=>'12366666666',
            'comment'=>'',
            'full_name'=>'',
            'property'=>1,
            'type'=>1,
            'begin_date'=>'1',
            'end_date'=>'1',
            'product_name'=>'',
            'sys_name'=>'',
            'lab_name'=>'',
            'contact'=>'',
            'address'=>'',
        );
        $res = $distributorSystem -> modifyUser($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListUser()
    {
        $distributorSystem = $this -> distributorSystem;
        $arr = array(
            'limit'=>10,
            'page'=>1,
            'search_field'=>'',
            'search_value'=>'',
            'begin_date'=>'',
            'end_date'=>'',
        );
        $res = $distributorSystem -> listUser($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testStatUser()
    {
        $distributorSystem = $this -> distributorSystem;
        $arr = array(
            'start'=>'',
            'end'=>'',
            'type'=>'',
            'limit'=>1,
            'page'=>1,
        );
        $res = $distributorSystem -> statUser($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testTempFuncName()
    {
        $distributorSystem = $this -> distributorSystem;
        $arr = array(
        );
        $res = $distributorSystem -> tempFuncName($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testSyncGateway()
    {
        $distributorSystem = $this -> distributorSystem;
        $arr = array(
            'user_name'=>'',
            'passwd'=>'',
            'node_uuid'=>'',
            'gw_type'=>'',
            'data'=>array(
                '0'=>array(
                    'ip'=>'',
                    'port'=>'',
                    'desc'=>'',
                    'node'=>'',),),
        );
        $res = $distributorSystem -> syncGateway($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testSyncAccount()
    {
        $distributorSystem = $this -> distributorSystem;
        $arr = array(
            'user_name'=>'',
            'passwd'=>'',
            'node_uuid'=>'',
            'data'=>array(
                '0'=>array(
                    'code'=>'',
                    'name'=>'',
                    'pwd'=>'',
                    'limit'=>'',
                    'privilege'=>'',
                    'type_name'=>'',
                    'enable_file'=>'',
                    'enable_stream'=>'',),),
            'enable_file'=>'',
            'enable_stream'=>'',
        );
        $res = $distributorSystem -> syncAccount($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testSendFiles()
    {
        $distributorSystem = $this -> distributorSystem;
        $arr = array(
            'user_name'=>'',
            'passwd'=>'',
            'group_uuid'=>'',
            'parent_addrs'=>array(
                '0'=>array(
                    'ip'=>'',
                    'port'=>'',),),
            'version'=>'',
        );
        $res = $distributorSystem -> sendFiles($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}