<?php
namespace i2up\Test\v20240819\active;

use i2up\active\v20240819\ScriptMask;
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
            'script_name'=>'',
            'config'=>array(
            'desc'=>'',
            'script'=>'',),
            'script_type'=>1,
        );
        
        
        $res = $scriptMask -> createScript($arr);
        $this->do_assert($res);
    }

    public function testModifyScript()
    {
        $scriptMask = $this -> scriptMask;
        $arr = array(
            'script_name'=>'',
            'config'=>array(
            'desc'=>'',
            'script'=>'',),
            'script_type'=>1,
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $scriptMask -> modifyScript($arr);
        $this->do_assert($res);
    }

    public function testDeleteScript()
    {
        $scriptMask = $this -> scriptMask;
        $arr = array(
            'uuids'=>'',
        );
        
        
        $res = $scriptMask -> deleteScript($arr);
        $this->do_assert($res);
    }

    public function testListScript()
    {
        $scriptMask = $this -> scriptMask;
        $arr = array(
            'page'=>1,
            'limit'=>10,
            'search_field'=>'',
            'search_value'=>'',
            'like_args'=>array(
            '0'=>array(
            'mask_node_name'=>'',
            'rule_name'=>'',
            'search_script_name'=>'',),),
        );
        
        
        $res = $scriptMask -> listScript($arr);
        $this->do_assert($res);
    }

    public function testDownloadScript()
    {
        $scriptMask = $this -> scriptMask;
        $arr = array(
            'version_id'=>'',
        );
        
        
        $res = $scriptMask -> downloadScript($arr);
        $this->do_assert($res);
    }

    public function testDescriptScript()
    {
        $scriptMask = $this -> scriptMask;
        $arr = array(
            'uuid'=>'',
        );
        
        $arr['id'] = "123456";
        $res = $scriptMask -> descriptScript($arr);
        $this->do_assert($res);
    }

    public function testCreateRule()
    {
        $scriptMask = $this -> scriptMask;
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
        
        
        $res = $scriptMask -> createRule($arr);
        $this->do_assert($res);
    }

    public function testModifyScriptRule()
    {
        $scriptMask = $this -> scriptMask;
        $arr = array(
            'rule_name'=>'',
            'node_uuid'=>'',
            'config'=>array(
            'script'=>array(),
            'src_type'=>'',
            'dyn_thd'=>1,
            'lderrset'=>'continue',
            'script_type'=>1,),
            'src_db_uuid'=>'',
        );
        
        
        $res = $scriptMask -> modifyScriptRule($arr);
        $this->do_assert($res);
    }

    public function testDeleteRule()
    {
        $scriptMask = $this -> scriptMask;
        $arr = array(
            'uuids'=>'',
            'force'=>true,
        );
        
        
        $res = $scriptMask -> deleteRule($arr);
        $this->do_assert($res);
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
        $this->do_assert($res);
    }

    public function testDescriptRule()
    {
        $scriptMask = $this -> scriptMask;
        $arr = array(
            'uuid'=>'',
        );
        
        $arr['id'] = "123456";
        $res = $scriptMask -> descriptRule($arr);
        $this->do_assert($res);
    }

    public function testGetScriptRuleResultDetail()
    {
        $scriptMask = $this -> scriptMask;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $scriptMask -> getScriptRuleResultDetail($arr);
        $this->do_assert($res);
    }

    public function testListRuleStatus()
    {
        $scriptMask = $this -> scriptMask;
        $arr = array(
            'uuids'=>array(),
        );
        
        
        $res = $scriptMask -> listRuleStatus($arr);
        $this->do_assert($res);
    }

    public function testStartRule()
    {
        $scriptMask = $this -> scriptMask;
        $arr = array(
            'operate'=>'stop',
            'uuids'=>array(),
        );
        
        
        $res = $scriptMask -> startRule($arr);
        $this->do_assert($res);
    }

    public function testStopRule()
    {
        $scriptMask = $this -> scriptMask;
        $arr = array(
            'operate'=>'stop',
            'uuids'=>array(),
        );
        
        
        $res = $scriptMask -> stopRule($arr);
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