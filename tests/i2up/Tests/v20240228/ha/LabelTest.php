<?php
namespace i2up\Test\v20240228\ha;

use i2up\ha\v20240228\Label;
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
            'uuid' => '11111111-1111-1111-1111-111111111111',
            'label_name'=>'SQL Server服务',
            'label_uuid'=>'',
        );
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
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}