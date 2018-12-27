<?php
namespace i2up\Test\tools;

use i2up\tools\v20181217\Diagnose;
use i2up\common\Auth;
use i2up\Config;

class DiagnoseTest extends \PHPUnit_Framework_TestCase
{
    private $diagnose;

    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $auth = new Auth(Config::baseUrl, 'admin', 'Info1234', __DIR__ . '/../');
        $this -> diagnose = new Diagnose($auth);
    }

    public function testCreateDiagnose()
    {
        $diagnose = $this -> diagnose;
        $arr = array(
            'task_uuid'=>'',
            'check_type'=>1,
            'wk_uuid'=>'730B1B39-9906-F084-3C8F-DA7779141EA0',
            'bk_uuid'=>'B8566905-411E-B2CD-A742-77B1346D8E84',
            'rep_uuid'=>'',
        );
        $res = $diagnose -> createDiagnose($arr);
        var_dump($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDeleteDiagnose()
    {
        $diagnose = $this -> diagnose;
        $arr = array(
            'check_uuids'=>array(
                '0'=>'68AC211A-5158-F17C-E08C-98C95F02AC60'
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
                '0'=>'68AC211A-5158-F17C-E08C-98C95F02AC60'
            )
        );
        $res = $diagnose -> downloadDiagnoseResult($arr);
        var_dump($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}