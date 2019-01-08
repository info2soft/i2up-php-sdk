<?php
namespace i2up\Test\common;

use i2up\common\DataBaseBackup;
use i2up\common\Auth;
use i2up\Config;
                
class DataBaseBackupTest extends \PHPUnit_Framework_TestCase
 {
    private $dataBaseBackup;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $auth = new Auth(Config::baseUrl, 'admin', 'Info1234', __DIR__ . '/../');
        $this -> dataBaseBackup = new DataBaseBackup($auth);
    }

    public function testImportConfig()
    {
        $dataBaseBackup = $this -> dataBaseBackup;
        $arr = array(
        );
        $res = $dataBaseBackup -> importConfig($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testExportConfig()
    {
        $dataBaseBackup = $this -> dataBaseBackup;
        $arr = array(
        );
        $res = $dataBaseBackup -> exportConfig($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListBackupHistory()
    {
        $dataBaseBackup = $this -> dataBaseBackup;
        $res = $dataBaseBackup -> listBackupHistory();
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testBackupConfig()
    {
        $dataBaseBackup = $this -> dataBaseBackup;
        $arr = array(
        );
        $res = $dataBaseBackup -> backupConfig($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeBackupConfig()
    {
        $dataBaseBackup = $this -> dataBaseBackup;
        $res = $dataBaseBackup -> describeBackupConfig();
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}