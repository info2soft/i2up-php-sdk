<?php
namespace i2up\Test\v20250123\resource;

use i2up\resource\v20250123\NodeProxy;
use i2up\common\Auth;
                
class NodeProxyTest extends \PHPUnit_Framework_TestCase
 {
    private $nodeProxy;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> nodeProxy = new NodeProxy(new Auth());
    }

    public function testCreateNodeProxy()
    {
        $nodeProxy = $this -> nodeProxy;
        $arr = array(
            'proxy_addr'=>'',
            'proxy_port'=>'',
        );
        
        
        $res = $nodeProxy -> createNodeProxy($arr);
        $this->do_assert($res);
    }

    public function testListNodeProxy()
    {
        $nodeProxy = $this -> nodeProxy;
        $arr = array(
            'search_field'=>'',
            'search_value'=>'',
        );
        
        
        $res = $nodeProxy -> listNodeProxy($arr);
        $this->do_assert($res);
    }

    public function testDescribeNodeProxy()
    {
        $nodeProxy = $this -> nodeProxy;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $nodeProxy -> describeNodeProxy($arr);
        $this->do_assert($res);
    }

    public function testModifyNodeProxy()
    {
        $nodeProxy = $this -> nodeProxy;
        $arr = array(
            'proxy_addr'=>'',
            'proxy_port'=>'',
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $nodeProxy -> modifyNodeProxy($arr);
        $this->do_assert($res);
    }

    public function testDeleteNodeProxy()
    {
        $nodeProxy = $this -> nodeProxy;
        $arr = array(
            'uuids'=>array(),
        );
        
        
        $res = $nodeProxy -> deleteNodeProxy($arr);
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