<?php
namespace i2up\Test\v20240819\common;

use i2up\common\v20240819\Notifications;
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
            'stop_alerts'=>1,
            'audio_alert_notify'=>1,
            'single_alert_loop_broadcast_times'=>1,
            'custom_audio'=>'',
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
            'sms_id'=>'',
            'wechat_id'=>'',
            'notify_limit'=>'10',
            'normal_notify_switch'=>0,
            'alarm_shield'=>array(
            'type'=>array(
            'node'=>false,
            'db'=>false,
            'rule'=>false,
            'task'=>false,),
            'level'=>array(
            'info'=>false,
            'warn'=>false,
            'report'=>false,
            'err'=>false,
            'fatal'=>false,
            'recover'=>false,),
            'code'=>'',),
            'alarm_config'=>array(
            'alarm_interval'=>1,
            'max_analyze_halt_tm'=>1,
            'max_delay'=>1,
            'max_err_table_num'=>1,
            'max_err_dml_num'=>1,
            'max_err_ddl_num'=>1,
            'max_cpu'=>'',
            'max_mem'=>'',
            'max_net'=>'',
            'max_disk'=>'',
            'max_alarm_interval'=>'',
            'max_load_halt_tm'=>'',
            'max_analyze_delay'=>'',
            'max_cpu_delay_alarm_time'=>'',
            'max_mem_delay_alarm_time'=>'',
            'max_net_delay_alarm_time'=>'',
            'max_disk_delay_alarm_time'=>'',
            'max_analyze_halt_tm_alarm_time'=>'',
            'max_analyze_delay_alarm_time'=>'',
            'max_delay_alarm_time'=>'',
            'max_load_halt_tm_alarm_time'=>'',
            'max_cpu_delay_unit'=>'',
            'max_mem_delay_unit'=>'',
            'max_net_delay_unit'=>'',
            'max_disk_delay_unit'=>'',
            'max_analyze_halt_tm_unit'=>'',
            'max_analyze_delay_unit'=>'',
            'max_load_halt_tm_unit'=>'',
            'max_delay_unit'=>'',
            'max_cpu_delay_duration'=>'',
            'max_mem_delay_duration'=>'',
            'max_net_delay_duration'=>'',
            'max_disk_delay_duration'=>'',
            'max_analyze_halt_tm_duration'=>'',
            'max_analyze_delay_duration'=>'',
            'max_load_halt_tm_duration'=>'',
            'max_delay_duration'=>'',
            'max_cpu_delay_duration_unit'=>'',
            'max_mem_delay_duration_unit'=>'',
            'max_net_delay_duration_unit'=>'',
            'max_disk_delay_duration_unit'=>'',
            'max_analyze_halt_tm_duration_unit'=>'',
            'max_analyze_delay_duration_unit'=>'',
            'max_load_halt_tm_duration_unit'=>'',
            'max_delay_duration_unit'=>'',),
            'notify_limit_type'=>'',
            'alarm_level_map'=>array(
            'info'=>'',
            'warn'=>'',
            'report'=>'',
            'err'=>'',
            'fatal'=>'',
            'recover'=>'',),
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
            'resume_normal'=>1,
        );
        
        
        $res = $notifications -> addNotifications($arr);
        $this->do_assert($res);
    }

    public function testListNotifications()
    {
        $notifications = $this -> notifications;
        $arr = array(
            'type'=>1,
            'order_by'=>'status',
            'direction'=>'ASC',
            'lic_alert'=>0,
            'where_args'=>array(
            'status'=>1,
            'played'=>1,),
        );
        
        
        $res = $notifications -> listNotifications($arr);
        $this->do_assert($res);
    }

    public function testDescribeNotifications()
    {
        $notifications = $this -> notifications;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $notifications -> describeNotifications($arr);
        $this->do_assert($res);
    }

    public function testDescribeNotificationsCount()
    {
        $notifications = $this -> notifications;
        $arr = array();
        
        
        $res = $notifications -> describeNotificationsCount($arr);
        $this->do_assert($res);
    }

    public function testReadNotifications()
    {
        $notifications = $this -> notifications;
        $arr = array(
            'operate'=>'',
            'uuids'=>array(),
            'type'=>1,
        );
        
        
        $res = $notifications -> readNotifications($arr);
        $this->do_assert($res);
    }

    public function testPlayNotifications()
    {
        $notifications = $this -> notifications;
        $arr = array(
            'operate'=>'',
            'uuids'=>array(),
            'type'=>1,
        );
        
        
        $res = $notifications -> playNotifications($arr);
        $this->do_assert($res);
    }

    public function testDeleteNotifications()
    {
        $notifications = $this -> notifications;
        $arr = array(
            'uuids'=>array(),
        );
        
        
        $res = $notifications -> deleteNotifications($arr);
        $this->do_assert($res);
    }

    public function testDescribeNotificationsConfig()
    {
        $notifications = $this -> notifications;
        $arr = array();
        
        
        $res = $notifications -> describeNotificationsConfig($arr);
        $this->do_assert($res);
    }

    public function testUpdateNotificationsConfig()
    {
        $notifications = $this -> notifications;
        $arr = array(
            'config'=>array(
            '0'=>array(
            'type'=>1,
            'email_sw'=>0,
            'sms_sw'=>1,
            'p_sms_sw'=>1,
            'sms_temp'=>'',
            'wechat_sw'=>0,
            'maintenance_sw'=>0,
            'principal'=>'',
            'webhook_sw'=>0,
            'webhook_uuid'=>'',
            'content_temp_uuid'=>'',
            'kafka_sw'=>0,
            'snmp_sw'=>0,
            'notify_contact_user'=>array(
            'email'=>'',
            'phone'=>'',),
            'real_sms_template'=>'',
            'sms_report_template'=>'',),
            '1'=>array(
            'type'=>1,
            'email_sw'=>0,
            'sms_sw'=>1,
            'p_sms_sw'=>1,
            'sms_temp'=>'',
            'wechat_sw'=>0,
            'maintenance_sw'=>0,
            'principal'=>'',
            'webhook_sw'=>0,
            'webhook_uuid'=>'',
            'content_temp_uuid'=>'',
            'kafka_sw'=>0,
            'snmp_sw'=>0,
            'notify_contact_user'=>array(
            'email'=>'',
            'phone'=>'',),
            'real_sms_template'=>'',
            'sms_report_template'=>'',),
            '2'=>array(
            'type'=>1,
            'email_sw'=>0,
            'sms_sw'=>1,
            'p_sms_sw'=>1,
            'sms_temp'=>'',
            'wechat_sw'=>0,
            'maintenance_sw'=>0,
            'principal'=>'',
            'webhook_sw'=>0,
            'webhook_uuid'=>'',
            'content_temp_uuid'=>'',
            'kafka_sw'=>0,
            'snmp_sw'=>0,
            'notify_contact_user'=>array(
            'email'=>'',
            'phone'=>'',),
            'real_sms_template'=>'',
            'sms_report_template'=>'',),
            '3'=>array(
            'type'=>1,
            'email_sw'=>0,
            'sms_sw'=>1,
            'p_sms_sw'=>1,
            'sms_temp'=>'',
            'wechat_sw'=>0,
            'maintenance_sw'=>0,
            'principal'=>'',
            'webhook_sw'=>0,
            'webhook_uuid'=>'',
            'content_temp_uuid'=>'',
            'kafka_sw'=>0,
            'snmp_sw'=>0,
            'notify_contact_user'=>array(
            'email'=>'',
            'phone'=>'',),
            'real_sms_template'=>'',
            'sms_report_template'=>'',),
            '4'=>array(
            'type'=>1,
            'email_sw'=>0,
            'sms_sw'=>1,
            'p_sms_sw'=>1,
            'sms_temp'=>'',
            'wechat_sw'=>0,
            'maintenance_sw'=>0,
            'principal'=>'',
            'webhook_sw'=>0,
            'webhook_uuid'=>'',
            'content_temp_uuid'=>'',
            'kafka_sw'=>0,
            'snmp_sw'=>0,
            'notify_contact_user'=>array(
            'email'=>'',
            'phone'=>'',),
            'real_sms_template'=>'',
            'sms_report_template'=>'',),
            '5'=>array(
            'type'=>1,
            'email_sw'=>0,
            'sms_sw'=>1,
            'p_sms_sw'=>1,
            'sms_temp'=>'',
            'wechat_sw'=>0,
            'maintenance_sw'=>0,
            'principal'=>'',
            'webhook_sw'=>0,
            'webhook_uuid'=>'',
            'content_temp_uuid'=>'',
            'kafka_sw'=>0,
            'snmp_sw'=>0,
            'notify_contact_user'=>array(
            'email'=>'',
            'phone'=>'',),
            'real_sms_template'=>'',
            'sms_report_template'=>'',),
            '6'=>array(
            'type'=>1,
            'email_sw'=>0,
            'sms_sw'=>1,
            'p_sms_sw'=>1,
            'sms_temp'=>'',
            'wechat_sw'=>0,
            'maintenance_sw'=>0,
            'principal'=>'',
            'webhook_sw'=>0,
            'webhook_uuid'=>'',
            'content_temp_uuid'=>'',
            'kafka_sw'=>0,
            'snmp_sw'=>0,
            'notify_contact_user'=>array(
            'email'=>'',
            'phone'=>'',),
            'real_sms_template'=>'',
            'sms_report_template'=>'',),
            '7'=>array(
            'type'=>1,
            'email_sw'=>0,
            'sms_sw'=>1,
            'p_sms_sw'=>1,
            'sms_temp'=>'',
            'wechat_sw'=>0,
            'maintenance_sw'=>0,
            'principal'=>'',
            'webhook_sw'=>0,
            'webhook_uuid'=>'',
            'content_temp_uuid'=>'',
            'kafka_sw'=>0,
            'snmp_sw'=>0,
            'notify_contact_user'=>array(
            'email'=>'',
            'phone'=>'',),
            'real_sms_template'=>'',
            'sms_report_template'=>'',),
            '8'=>array(
            'type'=>1,
            'email_sw'=>0,
            'sms_sw'=>1,
            'p_sms_sw'=>1,
            'sms_temp'=>'',
            'wechat_sw'=>0,
            'maintenance_sw'=>0,
            'principal'=>'',
            'webhook_sw'=>0,
            'webhook_uuid'=>'',
            'content_temp_uuid'=>'',
            'kafka_sw'=>0,
            'snmp_sw'=>0,
            'notify_contact_user'=>array(
            'email'=>'',
            'phone'=>'',),
            'real_sms_template'=>'',
            'sms_report_template'=>'',),
            '9'=>array(
            'type'=>1,
            'email_sw'=>0,
            'sms_sw'=>1,
            'p_sms_sw'=>1,
            'sms_temp'=>'',
            'wechat_sw'=>0,
            'maintenance_sw'=>0,
            'principal'=>'',
            'webhook_sw'=>0,
            'webhook_uuid'=>'',
            'content_temp_uuid'=>'',
            'kafka_sw'=>0,
            'snmp_sw'=>0,
            'notify_contact_user'=>array(
            'email'=>'',
            'phone'=>'',),
            'real_sms_template'=>'',
            'sms_report_template'=>'',),),
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
        $arr = array();
        
        
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
            'content'=>'',
            'comment'=>'',
            'random_str'=>'',
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $notifications -> modifyEmailTemplate($arr);
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