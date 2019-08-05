<?php
namespace i2up\Test\system;

use i2up\system\v20190805\User;
use i2up\common\Auth;
use i2up\Config;

class UserTest extends \PHPUnit_Framework_TestCase
{
    private $user;

    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $auth = new Auth(Config::baseUrl, 'admin', 'Info1234', __DIR__ . '/../');
        $this -> user = new User($auth);
    }

    public function testCreateUser()
    {
        $user = $this -> user;
        $arr = array(
            'username'=>'test2',
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
        var_export($res);
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
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeUser()
    {
        $user = $this -> user;
        $arr = array(
            'id' => '1'
        );
        $res = $user -> describeUser($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDeleteUser()
    {
        $user = $this -> user;
        $arr = array(
            'ids'=>array(
                '0'=>'8'
            ),
            'uuids'=>array(
                '0'=>'CE79E4A6-1120-60ED-C810-5AFFACF88382'
            )
        );
        $res = $user -> deleteUser($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testModifyUser()
    {
        $user = $this -> user;
        $arr = array(
            'id' => '1',
            'username'=>'test',
            'password'=>'11111111',
            'roles'=>array(
                '0'=>'3'
            ),
            'active'=>'1',
            'email'=>'lis@info2soft.com',
            'mobile'=>'12332145248',
            'comment'=>'',
            'first_name'=>'',
            'last_name'=>'',
        );

        $res = $user -> modifyUser($arr);
        var_export($res);
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
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListProfile()
    {
        $user = $this -> user;
        $res = $user -> listProfile();
        var_export($res);
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
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testLogout()
    {
        $user = $this -> user;
        $res = $user -> logout();
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
        if ($res[0]['code'] === 0) {
            unlink(__DIR__ . '/../cacheToken.txt');
        }
    }

    public function testListAk()
    {
        $user = $this -> user;
        $arr = array(
        );
        $res = $user -> listAk($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testCreateAk()
    {
        $user = $this -> user;
        $arr = array(
        );
        $res = $user -> createAk($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testModifyAk()
    {
        $user = $this -> user;
        $arr = array(
            'access_key'=>'VqUyHS2YQkxnAEZBjFP38e9ht7IaJNlO',
            'status'=>0,
        );
        $res = $user -> modifyAk($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDeleteAk()
    {
        $user = $this -> user;
        $arr = array(
            'access_key'=>'VqUyHS2YQkxnAEZBjFP38e9ht7IaJNlO',
        );
        $res = $user -> deleteAk($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }


    public function testListRole()
    {
        $user = $this -> user;
        $arr = array(
            'filter_value'=>'operator',
            'filter_type'=>'name',
            'page'=>'1',
            'limit'=>'10',
        );
        $res = $user -> listRole($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}