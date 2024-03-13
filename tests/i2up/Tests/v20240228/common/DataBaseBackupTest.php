<?php
namespace i2up\Test\v20240228\common;

use i2up\common\v20240228\DataBaseBackup;
use i2up\common\Auth;
                
class DataBaseBackupTest extends \PHPUnit_Framework_TestCase
 {
    private $dataBaseBackup;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> dataBaseBackup = new DataBaseBackup(new Auth());
    }

    public function testImportConfig()
    {
        $dataBaseBackup = $this -> dataBaseBackup;
        $arr = array(
            'keep_cc_ip'=>1,
        );
        $res = $dataBaseBackup -> importConfig($arr);
        $this->do_assert($res);
    }

    public function testExportConfig()
    {
        $dataBaseBackup = $this -> dataBaseBackup;
        $arr = array();
        $res = $dataBaseBackup -> exportConfig($arr);
        $this->do_assert($res);
    }

    public function testListBackupHistory()
    {
        $dataBaseBackup = $this -> dataBaseBackup;
        $arr = array();
        $res = $dataBaseBackup -> listBackupHistory($arr);
        $this->do_assert($res);
    }

    public function testBackupConfig()
    {
        $dataBaseBackup = $this -> dataBaseBackup;
        $arr = array();
        $res = $dataBaseBackup -> backupConfig($arr);
        $this->do_assert($res);
    }

    public function testDescribeBackupConfig()
    {
        $dataBaseBackup = $this -> dataBaseBackup;
        $arr = array();
        $res = $dataBaseBackup -> describeBackupConfig($arr);
        $this->do_assert($res);
    }

    private function do_assert($res)
    {
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}