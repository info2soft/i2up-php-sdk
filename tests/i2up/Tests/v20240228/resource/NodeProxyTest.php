<?php
namespace i2up\Test\v20240228\resource;

use i2up\resource\v20240228\NodeProxy;
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
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111'
        );
        $res = $nodeProxy -> describeNodeProxy($arr);
        $this->do_assert($res);
    }

    public function testModifyNodeProxy()
    {
        $nodeProxy = $this -> nodeProxy;
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111',
            'proxy_addr'=>'',
            'proxy_port'=>'',
        );
        $res = $nodeProxy -> modifyNodeProxy($arr);
        $this->do_assert($res);
    }

    public function testDeleteNodeProxy()
    {
        $nodeProxy = $this -> nodeProxy;
        $arr = array(
            'uuids'=>array('11111111-1111-1111-1111-111111111111'),
        );
        $res = $nodeProxy -> deleteNodeProxy($arr);
        $this->do_assert($res);
    }

    private function do_assert($res)
    {
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}