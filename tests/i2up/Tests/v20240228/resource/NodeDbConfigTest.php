<?php
namespace i2up\Test\v20240228\resource;

use i2up\resource\v20240228\NodeDbConfig;
use i2up\common\Auth;
                
class NodeDbConfigTest extends \PHPUnit_Framework_TestCase
 {
    private $nodeDbConfig;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> nodeDbConfig = new NodeDbConfig(new Auth());
    }

    public function testNodeGetDatabaseInstances()
    {
        $nodeDbConfig = $this -> nodeDbConfig;
        $arr = array(
            'node_uuid'=>'',
            'os_user'=>'',
            'os_passwd'=>'',
            'db_type'=>1,
        );
        $res = $nodeDbConfig -> nodeGetDatabaseInstances($arr);
        $this->do_assert($res);
    }

    public function testCreateNodeDbConfig()
    {
        $nodeDbConfig = $this -> nodeDbConfig;
        $arr = array(
            'node_uuid'=>'',
            'db_type'=>'',
            'config_sw'=>'',
            'os_user'=>'',
            'os_passwd'=>'',
            'instance_info'=>array(),
        );
        $res = $nodeDbConfig -> createNodeDbConfig($arr);
        $this->do_assert($res);
    }

    public function testListNodeDbConfig()
    {
        $nodeDbConfig = $this -> nodeDbConfig;
        $arr = array(
            'node_uuid'=>'',
            'db_type'=>'oracle',
        );
        $res = $nodeDbConfig -> listNodeDbConfig($arr);
        $this->do_assert($res);
    }

    private function do_assert($res)
    {
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}