<?php

namespace i2up\Tests\system;

use i2up\system\v20181217\Settings;
use i2up\common\Auth;

class SettingsTest extends \PHPUnit_Framework_TestCase
{
    private $user;
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $auth = new Auth('admin','Info1234');
        $this -> user = new Settings($auth);
    }

    public function testUpdateSetting()
    {
        $user = $this -> user;
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
                    'every'=>'1',
                    'days'=>'5',),),
            'notify_contact_status'=>array(
                'phone'=>'11111111111',
                'email'=>'test@info2sost.com',
                'policy'=>array(
                    'every'=>'3',
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
        );
        $res = $user -> updateSetting($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListSysSetting()
    {
        $user = $this -> user;
        $arr = array(
            ''=>'',
        );
        $res = $user -> listSysSetting($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeCCip()
    {
        $user = $this -> user;
        $arr = array(
        );
        $res = $user -> describeCCip($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}