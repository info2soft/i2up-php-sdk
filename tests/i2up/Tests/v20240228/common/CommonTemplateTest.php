<?php
namespace i2up\Test\v20240228\common;

use i2up\common\v20240228\CommonTemplate;
use i2up\common\Auth;
                
class CommonTemplateTest extends \PHPUnit_Framework_TestCase
 {
    private $commonTemplate;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
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
            'uuid' => '11111111-1111-1111-1111-111111111111',
            'template_uuid'=>'',
        );
        $res = $commonTemplate -> describeCommonTemplate($arr);
        $this->do_assert($res);
    }

    public function testModifyCommonTemplate()
    {
        $commonTemplate = $this -> commonTemplate;
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111',
            'common_template'=>array(
            'template_name'=>'',
            'template_type'=>1,
            'template_text'=>'',),
        );
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
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}