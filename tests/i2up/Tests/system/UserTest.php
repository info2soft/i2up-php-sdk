<?php

namespace i2up\Tests\system;

use i2up\system\v20181217\User;
use i2up\common\Auth;

class UserTest extends \PHPUnit_Framework_TestCase {
    private $user;
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $auth = new Auth('admin','Info1234');
        $this -> user = new User($auth);
    }
    public function testListUser()
    {
        $user = $this -> user;
        $body = array('role'=>'admin');
        $this->assertNotNull($user -> listUser($body));
        var_dump($user -> listUser($body));
    }
    public function testListProfile()
    {
        $user = $this -> user;
        $this->assertNotNull($user -> listProfile());
    }
    public function testModifyProfile()
    {
        $user = $this -> user;
        $body = array('mobile'=>'88888888888','email'=>'xxx@info2soft.com','nickName'=>'i2','company'=>'info2soft','address'=>'Shanghai');
        $this->assertNotNull($user -> modifyProfile($body));
    }
    public function testLogout()
    {
        $user = $this -> user;
        var_dump($user);
        $this->assertNotNull($user -> logout());
        var_dump($user -> logout());
    }
    public function testDeleteUser()
    {
        $user = $this -> user;
        $ids = array('3');
        $this->assertNotNull($user->deleteUser($ids));
    }
}