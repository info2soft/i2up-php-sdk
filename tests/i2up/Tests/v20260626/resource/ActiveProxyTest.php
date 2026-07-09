<?php
namespace i2up\Test\v20260626\resource;

use i2up\resource\v20260626\ActiveProxy;
use i2up\common\Auth;
use PHPUnit\Framework\TestCase;
                
class ActiveProxyTest extends TestCase
 {
    private $activeProxy;
    
    public function setUp():void
    {
        parent::setup();
        $this -> activeProxy = new ActiveProxy(new Auth());
    }

    public function testCreateActiveProxy()
    {
        $activeProxy = $this -> activeProxy;
        $arr = array(
            'cc_ip_uuid'=>'',
            'cls_conf'=>array(
            '0'=>array(
            'ip'=>'',
            'port'=>'',),),
            'proxy_list'=>array(
            '0'=>array(
            'ip'=>'',
            'port'=>'',
            'password'=>'',),),
            'user'=>'',
            'pwd'=>'',
        );
        
        
        $res = $activeProxy -> createActiveProxy($arr);
        $this->do_assert($res);
    }

    public function testDescribActiveProxy()
    {
        $activeProxy = $this -> activeProxy;
        $arr = array();
        
        
        $res = $activeProxy -> describActiveProxy($arr);
        $this->do_assert($res);
    }

    public function testListActiveProxy()
    {
        $activeProxy = $this -> activeProxy;
        $arr = array(
            'page'=>'',
            'limit'=>'',
            'search_field'=>'ip',
            'search_value'=>'',
        );
        
        
        $res = $activeProxy -> listActiveProxy($arr);
        $this->do_assert($res);
    }

    public function testListActiveProxyStatus()
    {
        $activeProxy = $this -> activeProxy;
        $arr = array(
            'uuids'=>'',
        );
        
        
        $res = $activeProxy -> listActiveProxyStatus($arr);
        $this->do_assert($res);
    }

    public function testConnectActiveProxy()
    {
        $activeProxy = $this -> activeProxy;
        $arr = array(
            'ip'=>'',
            'port'=>'',
            'password'=>'',
            'cls_conf'=>array(),
            'user'=>'',
            'pwd'=>'',
            'cc_ip_uuid'=>'',
        );
        
        
        $res = $activeProxy -> connectActiveProxy($arr);
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