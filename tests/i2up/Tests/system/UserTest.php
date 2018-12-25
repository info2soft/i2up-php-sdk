<?php
namespace i2up\Test\system;

use i2up\system\v20181217\User;
use i2up\common\Auth;

class UserTest extends \PHPUnit_Framework_TestCase
{
    private $user;

    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $auth = new Auth('admin', 'Info1234');
        $this -> user = new User($auth);
    }

    public function testCreateUser()
    {
        $user = $this -> user;
        $arr = array(
            'username'=>'test',
            'password'=>'11111111',
            'roles'=>array(
                '0'=>'3'
            ),
            'active'=>'1',
            'email'=>'11@info2soft.com',
            'mobile'=>'12366666666',
            'comment'=>'',
        );
        $res = $user -> createUser($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListUser()
    {
        $user = $this -> user;
        $arr = array(
            'limit'=>10,
            'page'=>1,
        );
        $res = $user -> listUser($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeUser()
    {
        $user = $this -> user;
        $arr = array(
            'id' => ''
        );
        $res = $user -> describeUser($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDeleteUser()
    {
        $user = $this -> user;
        $arr = array(
            'ids'=>array(
                '0'=>'20'
            ),
            'uuids'=>array(
                '0'=>'6348CDE6-382D-EB3A-AB03-0B5FFE7CF8E3'
            )
        );
        $res = $user -> deleteUser($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testModifyUser()
    {
        $user = $this -> user;
        $arr = array(
            'id' => '7',
            'username'=>'test',
            'password'=>'11111111',
            'roles'=>array(
                '0'=>'3'
            ),
            'active'=>'1',
            'email'=>'123@info2soft.com',
            'mobile'=>'12332145248',
            'comment'=>'',
            'first_name'=>'',
            'last_name'=>'',
        );

        $res = $user -> modifyUser($arr);
        var_dump($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testModifyUserPwd()
    {
        $user = $this -> user;
        $arr = array(
            'old_password'=>'Info1234',
            'password'=>'Info1234',
        );
        $res = $user -> modifyUserPwd($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListProfile()
    {
        $user = $this -> user;
        $res = $user -> listProfile();
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testModifyProfile()
    {
        $user = $this -> user;
        $arr = array(
            'mobile'=>'15354254585',
            'email'=>'test@info2soft.com',
            'nickname'=>'test',
            'company'=>'info2soft',
            'address'=>'test',
            'comment'=>'',
        );
        $res = $user -> modifyProfile($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testLogout()
    {
        $user = $this -> user;
        $res = $user -> logout();
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}