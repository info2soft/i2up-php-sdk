<?php
namespace i2up\Test\v20260626\common;

use i2up\common\v20260626\CommonTemplate;
use i2up\common\Auth;
use PHPUnit\Framework\TestCase;
                
class CommonTemplateTest extends TestCase
 {
    private $commonTemplate;
    
    public function setUp():void
    {
        parent::setup();
        $this -> commonTemplate = new CommonTemplate(new Auth());
    }

    public function testCreateCommonTemplate()
    {
        $commonTemplate = $this -> commonTemplate;
        $arr = array(
            'common_template'=>array(
            'template_name'=>'',
            'template_type'=>1,
            'template_text'=>'',),
        );
        
        
        $res = $commonTemplate -> createCommonTemplate($arr);
        $this->do_assert($res);
    }

    public function testDescribeCommonTemplate()
    {
        $commonTemplate = $this -> commonTemplate;
        $arr = array(
            'template_uuid'=>'',
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $commonTemplate -> describeCommonTemplate($arr);
        $this->do_assert($res);
    }

    public function testModifyCommonTemplate()
    {
        $commonTemplate = $this -> commonTemplate;
        $arr = array(
            'common_template'=>array(
            'template_name'=>'',
            'template_type'=>1,
            'template_text'=>'',),
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $commonTemplate -> modifyCommonTemplate($arr);
        $this->do_assert($res);
    }

    public function testDeleteCommonTemplate()
    {
        $commonTemplate = $this -> commonTemplate;
        $arr = array(
            'template_uuid'=>array(),
        );
        
        
        $res = $commonTemplate -> deleteCommonTemplate($arr);
        $this->do_assert($res);
    }

    public function testListCommonTemplate()
    {
        $commonTemplate = $this -> commonTemplate;
        $arr = array(
            'limit'=>10,
            'page'=>1,
            'search_field'=>'',
            'search_value'=>'',
        );
        
        
        $res = $commonTemplate -> listCommonTemplate($arr);
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