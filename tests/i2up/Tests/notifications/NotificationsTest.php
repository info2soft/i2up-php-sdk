<?php
namespace i2up\Test\notifications;

use i2up\notifications\v20181217\Notifications;
use i2up\common\Auth;
use i2up\Config;

class NotificationsTest extends \PHPUnit_Framework_TestCase
{
    private $notifications;

    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $auth = new Auth(Config::baseUrl, 'admin', 'Info1234', __DIR__ . '/../');
        $this -> notifications = new Notifications($auth);
    }

    public function testListNotifications()
    {
        $notifications = $this -> notifications;
        $arr = array(
            'type'=>101,
            'where_args[status]'=>1,
        );
        $res = $notifications -> listNotifications($arr);
        var_dump($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeNotifications()
    {
        $notifications = $this -> notifications;
        $arr = array(
            'uuid'=>'87620164-62D9-A118-2063-733ADEBB9C39'
        );
        $res = $notifications -> describeNotifications($arr);
        var_dump($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeNotificationsCount()
    {
        $notifications = $this -> notifications;
        $res = $notifications -> describeNotificationsCount();
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDeleteNotifications()
    {
        $notifications = $this -> notifications;
        $arr = array(
            'uuids'=>array(
                '0'=>'EA6E2384-792D-8F46-1B35-085A376C790B'
            )
        );
        $res = $notifications -> deleteNotifications($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testReadNotifications()
    {
        $notifications = $this -> notifications;
        $arr = array(
            'uuids'=>array(
                '0'=>'FFC4711E-F003-89D9-1475-F641A3CDA58B'
            ),
            'type'=>101
        );
        $res = $notifications -> readNotifications($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }


    public function testDescribeNotificationsConfig()
    {
        $notifications = $this -> notifications;
        $res = $notifications -> describeNotificationsConfig();
        var_dump($res);
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
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testResetNotificationsTimes()
    {
        $notifications = $this -> notifications;
        $res = $notifications -> resetNotificationsTimes();
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}