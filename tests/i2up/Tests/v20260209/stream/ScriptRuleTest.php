<?php
namespace i2up\Test\v20260209\stream;

use i2up\stream\v20260209\ScriptRule;
use i2up\common\Auth;
                
class ScriptRuleTest extends \PHPUnit_Framework_TestCase
 {
    private $scriptRule;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> scriptRule = new ScriptRule(new Auth());
    }

    public function testCreateRule()
    {
        $scriptRule = $this -> scriptRule;
        $arr = array(
            'rule_name'=>'',
            'node_uuid'=>'',
            'config'=>array(
            'script'=>array(),
            'src_type'=>'',
            'dyn_thd'=>1,
            'lderrset'=>'continue',
            'script_type'=>0,),
            'src_db_uuid'=>'',
        );
        
        
        $res = $scriptRule -> createRule($arr);
        $this->do_assert($res);
    }

    public function testDeleteRule()
    {
        $scriptRule = $this -> scriptRule;
        $arr = array(
            'uuids'=>'',
            'force'=>true,
        );
        
        
        $res = $scriptRule -> deleteRule($arr);
        $this->do_assert($res);
    }

    public function testListRules()
    {
        $scriptRule = $this -> scriptRule;
        $arr = array(
            'limit'=>10,
            'page'=>1,
            'search_field'=>'rule_name',
            'search_value'=>'',
        );
        
        
        $res = $scriptRule -> listRules($arr);
        $this->do_assert($res);
    }

    public function testDescriptRule()
    {
        $scriptRule = $this -> scriptRule;
        $arr = array(
            'uuid'=>'',
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $scriptRule -> descriptRule($arr);
        $this->do_assert($res);
    }

    public function testGetScriptRuleResultDetail()
    {
        $scriptRule = $this -> scriptRule;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $scriptRule -> getScriptRuleResultDetail($arr);
        $this->do_assert($res);
    }

    public function testListRuleStatus()
    {
        $scriptRule = $this -> scriptRule;
        $arr = array(
            'uuids'=>array(),
        );
        
        
        $res = $scriptRule -> listRuleStatus($arr);
        $this->do_assert($res);
    }

    public function testStartRule()
    {
        $scriptRule = $this -> scriptRule;
        $arr = array(
            'operate'=>'stop',
            'uuids'=>array(),
        );
        
        
        $res = $scriptRule -> startRule($arr);
        $this->do_assert($res);
    }

    public function testStopRule()
    {
        $scriptRule = $this -> scriptRule;
        $arr = array(
            'operate'=>'stop',
            'uuids'=>array(),
        );
        
        
        $res = $scriptRule -> stopRule($arr);
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