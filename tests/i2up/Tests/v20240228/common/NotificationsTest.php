<?php
namespace i2up\Test\v20240228\common;

use i2up\common\v20240228\Notifications;
use i2up\common\Auth;
                
class NotificationsTest extends \PHPUnit_Framework_TestCase
 {
    private $notifications;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> notifications = new Notifications(new Auth());
    }

    public function testUpdateNotifyConf()
    {
        $notifications = $this -> notifications;
        $arr = array(
            'stop_alerts' => 1,
            'audio_alert_notify' => 1,
            'single_alert_loop_broadcast_times' => 1,
            'custom_audio' => '',
            'notify_contact_biz' => array(
                'phone' => '11111111111',
                'email' => 'test@info2sost.com',),
            'notify_contact_chk' => array(
                'phone' => '11111111111',
                'email' => 'test@info2sost.com',
                'policy' => array(
                    'every' => 'month',
                    'days' => '5,6',),),
            'notify_contact_status' => array(
                'phone' => '11111111111',
                'email' => 'test@info2sost.com',
                'policy' => array(
                    'every' => 'hour',
                    'gap' => '4',),),
            'sms_id' => '',
            'wechat_id' => '',
            'notify_limit' => '10',
            'normal_notify_switch' => 0,
            'alarm_shield' => array(
                'type' => array(
                    'node' => true,
                    'db' => true,
                    'rule' => true,
                    'task' => true,),
                'level' => array(
                    'info' => true,
                    'warn' => true,
                    'report' => true,
                    'err' => true,
                    'fatal' => true,
                    'recover' => true,),
                'code' => '',),
            'alarm_config' => array(
                'alarm_interval' => 1,
                'max_analyze_halt_tm' => 1,
                'max_delay' => 1,
                'max_err_table_num' => 1,
                'max_err_dml_num' => 1,
                'max_err_ddl_num' => 1,
                'db_healthy' => array(
                    'max_db_ts_usage' => 1,
                    'max_db_asm_usage' => 1,
                    'db_headroom' => 1,),
                'max_cpu' => '',
                'max_mem' => '',
                'max_net' => '',
                'max_disk' => '',),
            'notify_limit_type' => '',
        );
        $res = $notifications -> updateNotifyConf($arr);
        $this->do_assert($res);
    }

    public function testListNotifyConf()
    {
        $notifications = $this -> notifications;
        $arr = array(
            'keys'=>array(
            '0'=>'notify_limit',
            '1'=>'normal_notify_switch',
            '2'=>'notify_contact_biz',
            '3'=>'notify_contact_chk',
            '4'=>'notify_contact_status',
            '5'=>'sms_id',
            '6'=>'wechat_id',
            '7'=>'stop_alerts',
            '8'=>'alarm_shield',
            '9'=>'alarm_config',
            '10'=>'custom_audio',
            '11'=>'single_alert_loop_broadcast_times',
            '12'=>'audio_alert_notify',),
        );
        $res = $notifications -> listNotifyConf($arr);
        $this->do_assert($res);
    }

    public function testAddNotifications()
    {
        $notifications = $this -> notifications;
        $arr = array(
            'type'=>'timing',
            'uuid'=>'82275AFD-97D0-15B4-D477-011E397113D6',
            'msg'=>'规则/任务执行失败/成功/超时/策略取消',
            'name'=>'timing_test',
            'cc_uuid'=>'',
        );
        $res = $notifications -> addNotifications($arr);
        $this->do_assert($res);
    }

    public function testListNotifications()
    {
        $notifications = $this -> notifications;
        $arr = array(
            'type'=>1,
            'where_args[status]'=>1,
            'order_by'=>'status',
            'direction'=>'ASC',
            'where_args[played]'=>1,
            'lic_alert'=>0,
        );
        $res = $notifications -> listNotifications($arr);
        $this->do_assert($res);
    }

    public function testDescribeNotifications()
    {
        $notifications = $this -> notifications;
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111'
        );
        $res = $notifications -> describeNotifications($arr);
        $this->do_assert($res);
    }

    public function testDescribeNotificationsCount()
    {
        $notifications = $this -> notifications;
        $arr = array('11111111-1111-1111-1111-111111111111');
        $res = $notifications -> describeNotificationsCount($arr);
        $this->do_assert($res);
    }

    public function testReadNotifications()
    {
        $notifications = $this -> notifications;
        $arr = array(
            'operate'=>'read',
            'uuids'=>array('11111111-1111-1111-1111-111111111111'),
            'type'=>1,
        );
        $res = $notifications -> readNotifications($arr);
        $this->do_assert($res);
    }

    public function testPlayNotifications()
    {
        $notifications = $this -> notifications;
        $arr = array(
            'operate'=>'play',
            'uuids'=>array('11111111-1111-1111-1111-111111111111'),
            'type'=>1,
        );
        $res = $notifications -> playNotifications($arr);
        $this->do_assert($res);
    }

    public function testDeleteNotifications()
    {
        $notifications = $this -> notifications;
        $arr = array(
            'uuids'=>array('11111111-1111-1111-1111-111111111111'),
        );
        $res = $notifications -> deleteNotifications($arr);
        $this->do_assert($res);
    }

    public function testDescribeNotificationsConfig()
    {
        $notifications = $this -> notifications;
        $arr = array('11111111-1111-1111-1111-111111111111');
        $res = $notifications -> describeNotificationsConfig($arr);
        $this->do_assert($res);
    }

    public function testUpdateNotificationsConfig()
    {
        $notifications = $this -> notifications;
        $arr = array(
            'config' => array(
                '0' => array(
                    'type' => 1,
                    'email_sw' => 0,
                    'sms_sw' => 1,
                    'p_sms_sw' => 1,
                    'sms_temp' => '',
                    'wechat_sw' => 0,
                    'maintenance_sw' => 0,
                    'principal' => '',
                    'webhook_sw' => 0,
                    'webhook_uuid' => '',
                    'content_temp_uuid' => '',
                    'kafka_sw' => 0,
                    'snmp_sw' => 0,),
                '1' => array(
                    'type' => 1,
                    'email_sw' => 0,
                    'sms_sw' => 1,
                    'p_sms_sw' => 1,
                    'sms_temp' => '',
                    'wechat_sw' => 0,
                    'maintenance_sw' => 0,
                    'principal' => '',
                    'webhook_sw' => 0,
                    'webhook_uuid' => '',
                    'content_temp_uuid' => '',
                    'kafka_sw' => 0,
                    'snmp_sw' => 0,),
                '2' => array(
                    'type' => 1,
                    'email_sw' => 0,
                    'sms_sw' => 1,
                    'p_sms_sw' => 1,
                    'sms_temp' => '',
                    'wechat_sw' => 0,
                    'maintenance_sw' => 0,
                    'principal' => '',
                    'webhook_sw' => 0,
                    'webhook_uuid' => '',
                    'content_temp_uuid' => '',
                    'kafka_sw' => 0,
                    'snmp_sw' => 0,),
                '3' => array(
                    'type' => 1,
                    'email_sw' => 0,
                    'sms_sw' => 1,
                    'p_sms_sw' => 1,
                    'sms_temp' => '',
                    'wechat_sw' => 0,
                    'maintenance_sw' => 0,
                    'principal' => '',
                    'webhook_sw' => 0,
                    'webhook_uuid' => '',
                    'content_temp_uuid' => '',
                    'kafka_sw' => 0,
                    'snmp_sw' => 0,),
                '4' => array(
                    'type' => 1,
                    'email_sw' => 0,
                    'sms_sw' => 1,
                    'p_sms_sw' => 1,
                    'sms_temp' => '',
                    'wechat_sw' => 0,
                    'maintenance_sw' => 0,
                    'principal' => '',
                    'webhook_sw' => 0,
                    'webhook_uuid' => '',
                    'content_temp_uuid' => '',
                    'kafka_sw' => 0,
                    'snmp_sw' => 0,),
                '5' => array(
                    'type' => 1,
                    'email_sw' => 0,
                    'sms_sw' => 1,
                    'p_sms_sw' => 1,
                    'sms_temp' => '',
                    'wechat_sw' => 0,
                    'maintenance_sw' => 0,
                    'principal' => '',
                    'webhook_sw' => 0,
                    'webhook_uuid' => '',
                    'content_temp_uuid' => '',
                    'kafka_sw' => 0,
                    'snmp_sw' => 0,),
                '6' => array(
                    'type' => 1,
                    'email_sw' => 0,
                    'sms_sw' => 1,
                    'p_sms_sw' => 1,
                    'sms_temp' => '',
                    'wechat_sw' => 0,
                    'maintenance_sw' => 0,
                    'principal' => '',
                    'webhook_sw' => 0,
                    'webhook_uuid' => '',
                    'content_temp_uuid' => '',
                    'kafka_sw' => 0,
                    'snmp_sw' => 0,),
                '7' => array(
                    'type' => 1,
                    'email_sw' => 0,
                    'sms_sw' => 1,
                    'p_sms_sw' => 1,
                    'sms_temp' => '',
                    'wechat_sw' => 0,
                    'maintenance_sw' => 0,
                    'principal' => '',
                    'webhook_sw' => 0,
                    'webhook_uuid' => '',
                    'content_temp_uuid' => '',
                    'kafka_sw' => 0,
                    'snmp_sw' => 0,),
                '8' => array(
                    'type' => 1,
                    'email_sw' => 0,
                    'sms_sw' => 1,
                    'p_sms_sw' => 1,
                    'sms_temp' => '',
                    'wechat_sw' => 0,
                    'maintenance_sw' => 0,
                    'principal' => '',
                    'webhook_sw' => 0,
                    'webhook_uuid' => '',
                    'content_temp_uuid' => '',
                    'kafka_sw' => 0,
                    'snmp_sw' => 0,),
                '9' => array(
                    'type' => 1,
                    'email_sw' => 0,
                    'sms_sw' => 1,
                    'p_sms_sw' => 1,
                    'sms_temp' => '',
                    'wechat_sw' => 0,
                    'maintenance_sw' => 0,
                    'principal' => '',
                    'webhook_sw' => 0,
                    'webhook_uuid' => '',
                    'content_temp_uuid' => '',
                    'kafka_sw' => 0,
                    'snmp_sw' => 0,),),
        );
        $res = $notifications -> updateNotificationsConfig($arr);
        $this->do_assert($res);
    }

    public function testTestNotificationsSms()
    {
        $notifications = $this -> notifications;
        $arr = array(
            'temp_id'=>'',
            'mobile'=>'13123456789',
        );
        $res = $notifications -> testNotificationsSms($arr);
        $this->do_assert($res);
    }

    public function testTestNotificationsEmail()
    {
        $notifications = $this -> notifications;
        $arr = array(
            'email'=>'lis@info2soft.com',
        );
        $res = $notifications -> testNotificationsEmail($arr);
        $this->do_assert($res);
    }

    public function testResetNotificationsTimes()
    {
        $notifications = $this -> notifications;
        $arr = array('11111111-1111-1111-1111-111111111111');
        $res = $notifications -> resetNotificationsTimes($arr);
        $this->do_assert($res);
    }

    public function testListEmailTemplate()
    {
        $notifications = $this -> notifications;
        $arr = array(
            'direction'=>'ASC',
            'type'=>'',
        );
        $res = $notifications -> listEmailTemplate($arr);
        $this->do_assert($res);
    }

    public function testModifyEmailTemplate()
    {
        $notifications = $this -> notifications;
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111',
            'content'=>'',
            'comment'=>'',
            'random_str'=>'',
        );
        $res = $notifications -> modifyEmailTemplate($arr);
        $this->do_assert($res);
    }

    private function do_assert($res)
    {
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}