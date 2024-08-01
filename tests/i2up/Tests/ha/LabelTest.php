<?php
/**
 * Create by PhpStorm
 * User: Lis
 * Date: 2020/10/10
 * Time: 10:36
 */

namespace i2up\Test\ha;

use i2up\ha\v20190805\Label;
use i2up\common\Auth;

class LabelTest extends \PHPUnit_Framework_TestCase
{
    private $cluster;

    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this->cluster = new Label(new Auth());
    }

    public function testCreateLabel()
    {
        $cluster = $this -> cluster;
        $arr = array(
            'label_name'=>'MSSQLSERVER',
            'content'=>'SQL Server服务',
        );
        $res = $cluster -> createLabel($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testModifyLabel()
    {
        $cluster = $this -> cluster;
        $arr = array(
            'label_name'=>'SQL Server服务',
            'label_uuid'=>'',
        );
        $res = $cluster -> modifyLabel($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDeleteLabel()
    {
        $cluster = $this -> cluster;
        $arr = array(
            'label_uuids'=>array('11111111-1111-1111-1111-111111111111'),
        );
        $res = $cluster -> deleteLabel($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListLabel()
    {
        $cluster = $this -> cluster;
        $arr = array(
            'page'=>1,
            'limit'=>10,
            'search_field'=>'label_name',
            'search_value'=>'',
        );
        $res = $cluster -> listLabel($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}