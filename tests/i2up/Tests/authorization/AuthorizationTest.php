<?php
/**
 * Create by PhpStorm
 * User: Lis
 * Date: 2020/10/9
 * Time: 9:40
 */

namespace i2up\Test\authorization;

use i2up\authorization\v20201009\Authorization;
use i2up\common\Auth;
use i2up\Config;

class AuthorizationTest extends \PHPUnit_Framework_TestCase
{
    private $authorization;

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
        $this -> authorization = new Authorization($auth);
    }

    public function testListAuthorizationUser()
    {
        $authorization = $this -> authorization;
        $arr = array(
            'page'=>1,
            'limit'=>1,
        );
        $res = $authorization -> ListAuthorizationUser($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testGetAuthorizationUserBind()
    {
        $authorization = $this -> authorization;
        $arr = array(
            'user_uuid'=>'',
            'page'=>1,
            'limit'=>1,
            'type'=>'',
            'subtype'=>'',
        );
        $res = $authorization -> getAuthorizationUserBind($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testUpdateAuthorizationUserBind()
    {
        $authorization = $this -> authorization;
        $arr = array(
            'res_list'=>array(
                '0'=>array(
                    'res_uuid'=>'11111111-1111-1111-1111-111111111111',
                    'can_up'=>1,
                    'can_op'=>1,
                    'is_bound'=>1,),),
            'user_uuid'=>'11111111-1111-1111-1111-111111111111',
        );
        $res = $authorization -> updateAuthorizationUserBind($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testGetAuthorizationResBind()
    {
        $authorization = $this -> authorization;
        $arr = array(
            'res_uuid'=>'',
            'page'=>1,
            'limit'=>1,
        );
        $res = $authorization -> getAuthorizationResBind($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testUpdateAuthorizationResBind()
    {
        $authorization = $this -> authorization;
        $arr = array(
            'res_uuid'=>'',
            'user_list'=>array(
                '0'=>array(
                    'user_uuid'=>'',
                    'can_up'=>1,
                    'can_op'=>1,),),
        );
        $res = $authorization -> updateAuthorizationResBind($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }


    public function testGetAuthorizationBind()
    {
        $authorization = $this -> authorization;
        $arr = array(
            'user_uuid'=>'EFB53F11-7BA2-2001-3418-85865EA58E47',
        );
        $res = $authorization -> getAuthorizationBind($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testUpdateAuthorizationBind()
    {
        $authorization = $this -> authorization;
        $arr = array(
            'user_uuid'=>'EFB53F11-7BA2-2001-3418-85865EA58E47',
            'res_uuids'=>array(
                '0'=>'7E36A0B7-7C9A-D310-645A-F9FF7972F13F',),
        );
        $res = $authorization -> updateAuthorizationBind($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}
