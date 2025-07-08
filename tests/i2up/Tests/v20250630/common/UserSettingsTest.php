<?php
namespace i2up\Test\v20250630\common;

use i2up\common\v20250630\UserSettings;
use i2up\common\Auth;
                
class UserSettingsTest extends \PHPUnit_Framework_TestCase
 {
    private $userSettings;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> userSettings = new UserSettings(new Auth());
    }

    public function testListProfile()
    {
        $userSettings = $this -> userSettings;
        $arr = array();
        
        
        $res = $userSettings -> listProfile($arr);
        $this->do_assert($res);
    }

    public function testModifyUserPwd()
    {
        $userSettings = $this -> userSettings;
        $arr = array(
            'password'=>'Info1234',
        );
        
        
        $res = $userSettings -> modifyUserPwd($arr);
        $this->do_assert($res);
    }

    public function testModifyProfile()
    {
        $userSettings = $this -> userSettings;
        $arr = array(
            'mobile'=>'15354254585',
            'email'=>'test@info2soft.com',
            'nickname'=>'test',
            'company'=>'info2soft',
            'address'=>'test',
            'comment'=>'',
        );
        
        
        $res = $userSettings -> modifyProfile($arr);
        $this->do_assert($res);
    }

    public function testModifyUserNotifyAddr()
    {
        $userSettings = $this -> userSettings;
        $arr = array(
            'notify_addr'=>array(
            'email'=>'',
            'phone'=>'',
            'webhook'=>array(
            'res'=>'7134B40B-6A5F-4AFD-95ED-78A1909EAD4B',
            'rule'=>'',
            'compare'=>'',
            'cls'=>'',
            'nas'=>'',
            'hdfs'=>'',
            'fsp'=>'',
            'fsp_move'=>'',
            'vp'=>'',
            'timing'=>'',
            'ha'=>'',
            'active'=>'CDACCD8B-5E6F-4908-B74C-E9F47528E38E',
            'cdm'=>'',
            'cloud'=>'',
            'routing_inspection'=>'',
            'all_status'=>'',
            'alarm'=>'',
            'storage'=>'',
            'lic'=>'',
            'dto'=>'',
            'guard_data'=>'',
            'bigdata_backup'=>'',),),
        );
        
        
        $res = $userSettings -> modifyUserNotifyAddr($arr);
        $this->do_assert($res);
    }

    public function testLogout()
    {
        $userSettings = $this -> userSettings;
        $arr = array(
            'lock'=>1,
        );
        
        
        $res = $userSettings -> logout($arr);
        $this->do_assert($res);
    }

    public function testDescribeTwoFactor()
    {
        $userSettings = $this -> userSettings;
        $arr = array();
        
        
        $res = $userSettings -> describeTwoFactor($arr);
        $this->do_assert($res);
    }

    public function testDescribeOtp()
    {
        $userSettings = $this -> userSettings;
        $arr = array();
        
        
        $res = $userSettings -> describeOtp($arr);
        $this->do_assert($res);
    }

    public function testRenewRecoveryCode()
    {
        $userSettings = $this -> userSettings;
        $arr = array();
        
        
        $res = $userSettings -> renewRecoveryCode($arr);
        $this->do_assert($res);
    }

    public function testConfigTwoFactor()
    {
        $userSettings = $this -> userSettings;
        $arr = array(
            'enable'=>1,
            'auth_code'=>'',
            'name'=>'',
        );
        
        
        $res = $userSettings -> configTwoFactor($arr);
        $this->do_assert($res);
    }

    public function testListAk()
    {
        $userSettings = $this -> userSettings;
        $arr = array(
            'type'=>1,
        );
        
        
        $res = $userSettings -> listAk($arr);
        $this->do_assert($res);
    }

    public function testCreateAk()
    {
        $userSettings = $this -> userSettings;
        $arr = array(
            'type'=>1,
        );
        
        
        $res = $userSettings -> createAk($arr);
        $this->do_assert($res);
    }

    public function testModifyAk()
    {
        $userSettings = $this -> userSettings;
        $arr = array(
            'access_key'=>'pytDWihn3NscXewH8UYLIZq2gE7ufGoQ',
            'status'=>0,
        );
        
        
        $res = $userSettings -> modifyAk($arr);
        $this->do_assert($res);
    }

    public function testDeleteAk()
    {
        $userSettings = $this -> userSettings;
        $arr = array(
            'access_key'=>'pytDWihn3NscXewH8UYLIZq2gE7ufGoQ',
        );
        
        
        $res = $userSettings -> deleteAk($arr);
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