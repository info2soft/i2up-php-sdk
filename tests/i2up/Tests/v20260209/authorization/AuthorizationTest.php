<?php
namespace i2up\Test\v20260209\authorization;

use i2up\authorization\v20260209\Authorization;
use i2up\common\Auth;
                
class AuthorizationTest extends \PHPUnit_Framework_TestCase
 {
    private $authorization;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> authorization = new Authorization(new Auth());
    }

    public function testListAuthorizationUser()
    {
        $authorization = $this -> authorization;
        $arr = array(
            'page'=>1,
            'limit'=>1,
        );
        
        
        $res = $authorization -> listAuthorizationUser($arr);
        $this->do_assert($res);
    }

    public function testGetAuthorizationUserBind()
    {
        $authorization = $this -> authorization;
        $arr = array(
            'user_uuid'=>'',
            'page'=>1,
            'limit'=>1,
            'type'=>1,
            'subtype'=>1,
            'is_cloud_platform'=>0,
            'is_vp_drill'=>'',
        );
        
        
        $res = $authorization -> getAuthorizationUserBind($arr);
        $this->do_assert($res);
    }

    public function testUpdateAuthorizationUserBind()
    {
        $authorization = $this -> authorization;
        $arr = array(
            'res_list'=>array(
            '0'=>array(
            'res_uuid'=>'11111111-1111-1111-1111-111111111111',
            'can_up'=>0,
            'can_op'=>0,
            'is_bound'=>1,
            'can_start'=>0,
            'can_stop'=>0,
            'can_recovery'=>0,
            'can_failover'=>0,
            'can_failback'=>0,
            'can_del'=>0,),),
            'user_uuid'=>'11111111-1111-1111-1111-111111111111',
        );
        
        
        $res = $authorization -> updateAuthorizationUserBind($arr);
        $this->do_assert($res);
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
        $this->do_assert($res);
    }

    public function testUpdateAuthorizationResBind()
    {
        $authorization = $this -> authorization;
        $arr = array(
            'res_uuid'=>'',
            'user_list'=>array(
            '0'=>array(
            'user_uuid'=>'',
            'can_up'=>0,
            'can_op'=>0,
            'can_start'=>0,
            'can_stop'=>0,
            'can_recovery'=>0,
            'can_failover'=>0,
            'can_failback'=>0,
            'can_del'=>0,),),
        );
        
        
        $res = $authorization -> updateAuthorizationResBind($arr);
        $this->do_assert($res);
    }

    public function testGetAuthorizationBind()
    {
        $authorization = $this -> authorization;
        $arr = array(
            'user_uuid'=>'EFB53F11-7BA2-2001-3418-85865EA58E47',
        );
        
        
        $res = $authorization -> getAuthorizationBind($arr);
        $this->do_assert($res);
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