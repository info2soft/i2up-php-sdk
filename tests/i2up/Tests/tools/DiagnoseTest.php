<?php
namespace i2up\Test\tools;

use i2up\tools\v20190805\Diagnose;
use i2up\common\Auth;
use i2up\Config;

class DiagnoseTest extends \PHPUnit_Framework_TestCase
{
    private $diagnose;

    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $params = array(
            'username' => 'admin',
            'pwd' => 'Info1234',
            'cache_path' => __DIR__ . '/../',
            'ip' => Config::baseUrl
        );
        $auth = new Auth($params);
        $this -> diagnose = new Diagnose($auth);
    }

    public function testCreateDiagnose()
    {
        $diagnose = $this -> diagnose;
        $arr = array(
            'task_uuid'=>'',
            'check_type'=>1,
            'wk_uuid'=>'67E33CDB-D75B-15B3-367D-50C764F5A26F',
            'bk_uuid'=>'67E33CDB-D75B-15B3-367D-50C764F5A26F',
            'rep_uuid'=>'',
        );
        $res = $diagnose -> createDiagnose($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDeleteDiagnose()
    {
        $diagnose = $this -> diagnose;
        $arr = array(
            'check_uuids'=>array(
                '0'=>'11111111-1111-1111-1111-111111111111'
            )
        );
        $res = $diagnose -> deleteDiagnose($arr);
        var_export($res);
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
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDownloadDiagnoseResult()
    {
        $diagnose = $this -> diagnose;
        $arr = array(
            'check_uuids'=>array(
                '0'=>'11111111-1111-1111-1111-111111111111'
            )
        );
        $res = $diagnose -> downloadDiagnoseResult($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}