<?php
namespace i2up\Test\v20250630\common;

use i2up\common\v20250630\Wechat;
use i2up\common\Auth;
                
class WechatTest extends \PHPUnit_Framework_TestCase
 {
    private $wechat;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> wechat = new Wechat(new Auth());
    }

    public function testBindUser()
    {
        $wechat = $this -> wechat;
        $arr = array(
            'token'=>'',
            'from'=>'',
        );
        
        
        $res = $wechat -> bindUser($arr);
        $this->do_assert($res);
    }

    public function testUnbindUser()
    {
        $wechat = $this -> wechat;
        $arr = array();
        
        
        $res = $wechat -> unbindUser($arr);
        $this->do_assert($res);
    }

    public function testBindStatus()
    {
        $wechat = $this -> wechat;
        $arr = array();
        
        
        $res = $wechat -> bindStatus($arr);
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