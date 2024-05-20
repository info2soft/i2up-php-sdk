<?php
namespace i2up\Test\active;

use i2up\active\v20200721\ScriptMask;
use i2up\common\Auth;

class ScriptMaskTest extends \PHPUnit_Framework_TestCase
{
    private $scriptMask;

    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> scriptMask = new ScriptMask(new Auth());
    }


    public function testCreateScript()
    {
        $scriptMask = $this -> scriptMask;
        $arr = array(
            'rule_name'=>'',
            'src_db_uuid'=>'',
            'tgt_db_uuid'=>'',
            'node_uuid'=>'',
            'config'=>array(
                'script'=>array(),
                'src_type'=>'',
                'dyn_thd'=>1,
                'lderrset'=>'continue',
                'policy'=>array(
                    'policy_type'=>'immediate',
                    'one_time'=>'',
                    'time_policy'=>'',),),
        );
        $res = $scriptMask -> createScript($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDeleteScript()
    {
        $scriptMask = $this -> scriptMask;
        $arr = array(
            'uuids'=>'',
        );
        $res = $scriptMask -> deleteScript($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testTempFuncName()
    {
        $scriptMask = $this -> scriptMask;
        $arr = array(
            'uuid'=>'',
            'rule_uuid'=>'',
            'rule_name'=>'',
            'src_db_uuid'=>'',
            'tgt_db_uuid'=>'',
            'node_uuid'=>'',
            'config'=>array(
                'script'=>array(),
                'src_type'=>'',
                'dyn_thd'=>1,
                'lderrset'=>'continue',
                'policy'=>array(
                    'policy_type'=>'immediate',
                    'one_time'=>'',
                    'time_policy'=>'',),),
        );
        $res = $scriptMask -> tempFuncName($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListScript()
    {
        $scriptMask = $this -> scriptMask;
        $arr = array(
            'page'=>1,
            'limit'=>10,
            'search_field'=>'',
            'search_value'=>'',
        );
        $res = $scriptMask -> listScript($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescriptScript()
    {
        $scriptMask = $this -> scriptMask;
        $arr = array(
            'uuid'=>'',
        );
        $res = $scriptMask -> descriptScript($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testCreateRule()
    {
        $scriptMask = $this -> scriptMask;
        $arr = array(
            'rule_name'=>'',
            'src_db_uuid'=>'',
            'tgt_db_uuid'=>'',
            'node_uuid'=>'',
            'config'=>array(
                'script'=>array(),
                'src_type'=>'',
                'dyn_thd'=>1,
                'lderrset'=>'continue',
                'policy'=>array(
                    'policy_type'=>'immediate',
                    'one_time'=>'',
                    'time_policy'=>'',),),
        );
        $res = $scriptMask -> createRule($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDeleteRule()
    {
        $scriptMask = $this -> scriptMask;
        $arr = array(
            'uuids'=>'',
        );
        $res = $scriptMask -> deleteRule($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testModifyDb()
    {
        $scriptMask = $this -> scriptMask;
        $arr = array(
            'uuid'=>'',
            'rule_uuid'=>'',
            'rule_name'=>'',
            'src_db_uuid'=>'',
            'tgt_db_uuid'=>'',
            'node_uuid'=>'',
            'config'=>array(),
            'script'=>array(),
            'src_type'=>'',
            'dyn_thd'=>1,
            'lderrset'=>'continue',
            'policy'=>array(),
            'policy_type'=>'immediate',
            'one_time'=>'',
            'time_policy'=>'',
        );
        $res = $scriptMask -> modifyDb($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListRules()
    {
        $scriptMask = $this -> scriptMask;
        $arr = array(
            'limit'=>10,
            'page'=>1,
            'search_field'=>'rule_name',
            'search_value'=>'',
        );
        $res = $scriptMask -> listRules($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescriptRule()
    {
        $scriptMask = $this -> scriptMask;
        $arr = array(
            'uuid'=>'',
        );
        $res = $scriptMask -> descriptRule($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListRuleStatus()
    {
        $scriptMask = $this -> scriptMask;
        $arr = array(
            'uuids'=>array('11111111-1111-1111-1111-111111111111'),
        );
        $res = $scriptMask -> listRuleStatus($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testOperateRule()
    {
        $scriptMask = $this -> scriptMask;
        $arr = array(
            'operate'=>'stop',
            'uuids'=>array('11111111-1111-1111-1111-111111111111'),
        );
        $res = $scriptMask -> operateRule($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}