<?php
namespace i2up\Test\v20260209\ha;

use i2up\ha\v20260209\Label;
use i2up\common\Auth;
                
class LabelTest extends \PHPUnit_Framework_TestCase
 {
    private $label;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> label = new Label(new Auth());
    }

    public function testCreateLabel()
    {
        $label = $this -> label;
        $arr = array(
            'label_name'=>'MSSQLSERVER',
            'content'=>'SQL Server服务',
        );
        
        
        $res = $label -> createLabel($arr);
        $this->do_assert($res);
    }

    public function testModifyLabel()
    {
        $label = $this -> label;
        $arr = array(
            'label_name'=>'SQL Server服务',
            'label_uuid'=>'',
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $label -> modifyLabel($arr);
        $this->do_assert($res);
    }

    public function testDeleteLabel()
    {
        $label = $this -> label;
        $arr = array(
            'label_uuids'=>array(),
        );
        
        
        $res = $label -> deleteLabel($arr);
        $this->do_assert($res);
    }

    public function testListLabel()
    {
        $label = $this -> label;
        $arr = array(
            'page'=>1,
            'limit'=>10,
            'search_field'=>'label_name',
            'search_value'=>'',
        );
        
        
        $res = $label -> listLabel($arr);
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