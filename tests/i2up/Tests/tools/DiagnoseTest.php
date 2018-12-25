<?php
namespace i2up\Test\tools;

use i2up\tools\v20181217\Diagnose;
use i2up\common\Auth;

class DiagnoseTest extends \PHPUnit_Framework_TestCase
{
    private $diagnose;

    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $auth = new Auth('admin', 'Info1234');
        $this -> diagnose = new Diagnose($auth);
    }

    public function testCreateDiagnose()
    {
        $diagnose = $this -> diagnose;
        $arr = array(
            'task_uuid'=>'',
            'check_type'=>1,
            'wk_uuid'=>'',
            'bk_uuid'=>'',
            'rep_uuid'=>'',
        );
        $res = $diagnose -> createDiagnose($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDeleteDiagnose()
    {
        $diagnose = $this -> diagnose;
        $arr = array(
            'check_uuids'=>array(
                '0'=>'fCC05A14-5DD4-BFED-79B4-aA8CFAdAE372'
            )
        );
        $res = $diagnose -> deleteDiagnose($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListDiagnose()
    {
        $diagnose = $this -> diagnose;
        $arr = array(
            'limit'=>10,
            'page'=>1
        );
        $res = $diagnose -> listDiagnose($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDownloadDiagnoseResult()
    {
        $diagnose = $this -> diagnose;
        $arr = array(
            'check_uuids'=>array(
                '0'=>'9bfCa36e-3A9E-8A3A-CBC7-ebc14AafB4C3'
            )
        );
        $res = $diagnose -> downloadDiagnoseResult($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}