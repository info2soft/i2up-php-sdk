<?php
namespace i2up\Test\v20240228\ruleVersion;

use i2up\ruleVersion\v20240228\RuleVersion;
use i2up\common\Auth;
                
class RuleVersionTest extends \PHPUnit_Framework_TestCase
 {
    private $ruleVersion;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> ruleVersion = new RuleVersion(new Auth());
    }

    public function testListRuleVersion()
    {
        $ruleVersion = $this -> ruleVersion;
        $arr = array(
            'page'=>1,
            'limit'=>1,
            'where_args[uuid]'=>'',
            'where_args[type]'=>'',
            'like_args[sys_name]'=>'',
            'like_args[protect_name]'=>'',
        );
        $res = $ruleVersion -> listRuleVersion($arr);
        $this->do_assert($res);
    }

    public function testDescribeRuleVersionInfo()
    {
        $ruleVersion = $this -> ruleVersion;
        $arr = array(
            'id'=>1,
        );
        $res = $ruleVersion -> describeRuleVersionInfo($arr);
        $this->do_assert($res);
    }

    public function testSetMainRRuleVersion()
    {
        $ruleVersion = $this -> ruleVersion;
        $arr = array(
            'operate'=>'',
            'ids'=>array(),
        );
        $res = $ruleVersion -> setMainRuleVersion($arr);
        $this->do_assert($res);
    }

    private function do_assert($res)
    {
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}