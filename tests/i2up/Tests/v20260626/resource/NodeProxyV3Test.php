<?php
namespace i2up\Test\v20260626\resource;

use i2up\resource\v20260626\NodeProxyV3;
use i2up\common\Auth;
use PHPUnit\Framework\TestCase;
                
class NodeProxyV3Test extends TestCase
 {
    private $nodeProxyV3;
    
    public function setUp():void
    {
        parent::setup();
        $this -> nodeProxyV3 = new NodeProxyV3(new Auth());
    }

    public function testCreateNodeProxy()
    {
        $nodeProxyV3 = $this -> nodeProxyV3;
        $arr = array(
            'proxy_addr'=>'',
            'proxy_port'=>'',
        );
        
        
        $res = $nodeProxyV3 -> createNodeProxy($arr);
        $this->do_assert($res);
    }

    public function testListNodeProxy()
    {
        $nodeProxyV3 = $this -> nodeProxyV3;
        $arr = array(
            'search_field'=>'',
            'search_value'=>'',
        );
        
        
        $res = $nodeProxyV3 -> listNodeProxy($arr);
        $this->do_assert($res);
    }

    public function testDescribeNodeProxy()
    {
        $nodeProxyV3 = $this -> nodeProxyV3;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $nodeProxyV3 -> describeNodeProxy($arr);
        $this->do_assert($res);
    }

    public function testModifyNodeProxy()
    {
        $nodeProxyV3 = $this -> nodeProxyV3;
        $arr = array(
            'proxy_addr'=>'',
            'proxy_port'=>'',
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $nodeProxyV3 -> modifyNodeProxy($arr);
        $this->do_assert($res);
    }

    public function testDeleteNodeProxy()
    {
        $nodeProxyV3 = $this -> nodeProxyV3;
        $arr = array(
            'uuids'=>array(),
        );
        
        
        $res = $nodeProxyV3 -> deleteNodeProxy($arr);
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