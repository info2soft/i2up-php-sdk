<?php
namespace i2up\Test\v20250630\stream;

use i2up\stream\v20250630\Script;
use i2up\common\Auth;
                
class ScriptTest extends \PHPUnit_Framework_TestCase
 {
    private $script;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> script = new Script(new Auth());
    }

    public function testCreateScript()
    {
        $script = $this -> script;
        $arr = array(
            'script_name'=>'',
            'config'=>array(
            'desc'=>'',
            'script'=>'',),
            'script_type'=>1,
            'src_type'=>'',
        );
        
        
        $res = $script -> createScript($arr);
        $this->do_assert($res);
    }

    public function testModifyScript()
    {
        $script = $this -> script;
        $arr = array(
            'script_name'=>'',
            'config'=>array(
            'desc'=>'',
            'script'=>'',),
            'script_type'=>1,
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $script -> modifyScript($arr);
        $this->do_assert($res);
    }

    public function testDeleteScript()
    {
        $script = $this -> script;
        $arr = array(
            'uuids'=>'',
        );
        
        
        $res = $script -> deleteScript($arr);
        $this->do_assert($res);
    }

    public function testListScript()
    {
        $script = $this -> script;
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
            'type'=>'',
        );
        
        
        $res = $script -> listScript($arr);
        $this->do_assert($res);
    }

    public function testDownloadScript()
    {
        $script = $this -> script;
        $arr = array(
            'version_id'=>'',
        );
        
        
        $res = $script -> downloadScript($arr);
        $this->do_assert($res);
    }

    public function testDescriptScript()
    {
        $script = $this -> script;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $script -> descriptScript($arr);
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