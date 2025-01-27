<?php
namespace i2up\Test\v20250123\ruleVersion;

use i2up\ruleVersion\v20250123\RuleVersion;
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
            'where_args'=>array(
            'uuid'=>'',
            'type'=>'',),
            'like_args'=>array(
            'sys_name'=>'',
            'protect_name'=>'',),
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

    public function testSetMainRuleVersion()
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