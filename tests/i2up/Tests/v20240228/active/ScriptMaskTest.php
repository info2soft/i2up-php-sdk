<?php
namespace i2up\Test\v20240228\active;

use i2up\active\v20240228\ScriptMask;
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
            'uuid' => '11111111-1111-1111-1111-111111111111',
            'script_name'=>'',
            'config'=>array(
            'desc'=>'',
            'script'=>'',),
            'script_type'=>1,
        );
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
            'like_args'=>array(),
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
            'id' => 1,
            'uuid'=>'',
        );
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
            'uuid' => '11111111-1111-1111-1111-111111111111',
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
            'id' => 1,
            'uuid' => '11111111-1111-1111-1111-111111111111',
        );
        $res = $scriptMask -> descriptRule($arr);
        $this->do_assert($res);
    }

    public function testGetScriptRuleResultDetail()
    {
        $scriptMask = $this -> scriptMask;
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111',
        );
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

    public function testOperateRule()
    {
        $scriptMask = $this -> scriptMask;
        $arr = array(
            'operate'=>'stop',
            'uuids'=>array(),
        );
        $res = $scriptMask -> operateRule($arr);
        $this->do_assert($res);
    }

    private function do_assert($res)
    {
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}