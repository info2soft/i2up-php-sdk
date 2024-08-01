<?php
namespace i2up\Test\v20240228\common;

use i2up\common\v20240228\Wechat;
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
        $arr = array('11111111-1111-1111-1111-111111111111');
        $res = $wechat -> unbindUser($arr);
        $this->do_assert($res);
    }

    public function testBindStatus()
    {
        $wechat = $this -> wechat;
        $arr = array('11111111-1111-1111-1111-111111111111');
        $res = $wechat -> bindStatus($arr);
        $this->do_assert($res);
    }

    private function do_assert($res)
    {
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}