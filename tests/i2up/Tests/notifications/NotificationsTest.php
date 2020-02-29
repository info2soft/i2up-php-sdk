<?php
namespace i2up\Test\notifications;

use i2up\notifications\v20190805\Notifications;
use i2up\common\Auth;
use i2up\Config;

class NotificationsTest extends \PHPUnit_Framework_TestCase
{
    private $notifications;

    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $params = array(
            'username' => 'admin',
            'pwd' => 'Info1234',
            'cache_path' => __DIR__ . '/../',
            'ip' => Config::baseUrl
        );
        $auth = new Auth($params);
        $this -> notifications = new Notifications($auth);
    }

    public function testAddNotifications()
    {
        $notifications = $this -> notifications;
        $arr = array(
            'type'=>'timing',
            'uuid'=>'82275AFD-97D0-15B4-D477-011E397113D6',
            'msg'=>'规则/任务执行失败/成功/超时/策略取消',
            'name'=>'timing_test',
            'table'=>'',
            'module'=>'',
        );
        $res = $notifications -> addNotifications($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListNotifications()
    {
        $notifications = $this -> notifications;
        $arr = array(
            'type'=>101,
            'where_args[status]'=>1,
        );
        $res = $notifications -> listNotifications($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeNotifications()
    {
        $notifications = $this -> notifications;
        $arr = array(
            'uuid'=>'11111111-1111-1111-1111-111111111111'
        );
        $res = $notifications -> describeNotifications($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeNotificationsCount()
    {
        $notifications = $this -> notifications;
        $res = $notifications -> describeNotificationsCount();
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDeleteNotifications()
    {
        $notifications = $this -> notifications;
        $arr = array(
            'uuids'=>array(
                '0'=>'11111111-1111-1111-1111-111111111111'
            )
        );
        $res = $notifications -> deleteNotifications($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testReadNotifications()
    {
        $notifications = $this -> notifications;
        $arr = array(
            'uuids'=>array(
                '0'=>'11111111-1111-1111-1111-111111111111'
            ),
            'type'=>101
        );
        $res = $notifications -> readNotifications($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }


    public function testDescribeNotificationsConfig()
    {
        $notifications = $this -> notifications;
        $res = $notifications -> describeNotificationsConfig();
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
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
                    'p_sms_sw'=>1
                ),
                '1'=>array(
                    'type'=>2,
                    'email_sw'=>0,
                    'sms_sw'=>1,
                    'p_sms_sw'=>1
                ),
                '2'=>array(
                    'type'=>3,
                    'email_sw'=>0,
                    'sms_sw'=>1,
                    'p_sms_sw'=>1
                ),
                '3'=>array(
                    'type'=>4,
                    'email_sw'=>0,
                    'sms_sw'=>1,
                    'p_sms_sw'=>1
                ),
                '4'=>array(
                    'type'=>5,
                    'email_sw'=>0,
                    'sms_sw'=>1,
                    'p_sms_sw'=>1
                ),
                '5'=>array(
                    'type'=>6,
                    'email_sw'=>0,
                    'sms_sw'=>1,
                    'p_sms_sw'=>1
                ),
                '6'=>array(
                    'type'=>7,
                    'email_sw'=>0,
                    'sms_sw'=>1,
                    'p_sms_sw'=>1
                ),
                '7'=>array(
                    'type'=>8,
                    'email_sw'=>0,
                    'sms_sw'=>1,
                    'p_sms_sw'=>1
                ),
                '8'=>array(
                    'type'=>100,
                    'email_sw'=>0,
                    'sms_sw'=>1,
                    'p_sms_sw'=>1
                ),
                '9'=>array(
                    'type'=>101,
                    'email_sw'=>0,
                    'sms_sw'=>1,
                    'p_sms_sw'=>1
                )
            )
        );
        $res = $notifications -> updateNotificationsConfig($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testTestNotificationsEmail()
    {
        $notifications = $this -> notifications;
        $arr = array(
            'email'=>''
        );
        $res = $notifications -> testNotificationsEmail($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testTestNotificationsSms()
    {
        $notifications = $this -> notifications;
        $arr = array(
            'temp_id'=>'',
            'mobile'=>'',
        );
        $res = $notifications -> testNotificationsSms($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testResetNotificationsTimes()
    {
        $notifications = $this -> notifications;
        $res = $notifications -> resetNotificationsTimes();
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}