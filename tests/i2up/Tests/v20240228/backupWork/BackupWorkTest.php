<?php
namespace i2up\Test\v20240228\backupWork;

use i2up\backupWork\v20240228\BackupWork;
use i2up\common\Auth;
                
class BackupWorkTest extends \PHPUnit_Framework_TestCase
 {
    private $backupWork;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> backupWork = new BackupWork(new Auth());
    }

    public function testListBackupWork()
    {
        $backupWork = $this -> backupWork;
        $arr = array(
            'page'=>1,
            'limit'=>1,
            'filter_uuid'=>'',
        );
        $res = $backupWork -> listBackupWork($arr);
        $this->do_assert($res);
    }

    public function testRebootBackupWork()
    {
        $backupWork = $this -> backupWork;
        $arr = array(
            'operate'=>'reboot',
            'work_uuids'=>array('11111111-1111-1111-1111-111111111111'),
        );
        $res = $backupWork -> rebootBackupWork($arr);
        $this->do_assert($res);
    }

    public function testStopBackupWork()
    {
        $backupWork = $this -> backupWork;
        $arr = array(
            'operate'=>'stop',
            'work_uuids'=>array('11111111-1111-1111-1111-111111111111'),
        );
        $res = $backupWork -> stopBackupWork($arr);
        $this->do_assert($res);
    }

    public function testDeleteBackupWork()
    {
        $backupWork = $this -> backupWork;
        $arr = array(
            'work_uuids'=>array('11111111-1111-1111-1111-111111111111'),
        );
        $res = $backupWork -> deleteBackupWork($arr);
        $this->do_assert($res);
    }

    public function testDescribeBackupWorkResult()
    {
        $backupWork = $this -> backupWork;
        $arr = array(
            'work_uuids'=>array('11111111-1111-1111-1111-111111111111'),
            'op_switch'=>1,
        );
        $res = $backupWork -> describeBackupWorkResult($arr);
        $this->do_assert($res);
    }

    public function testListBackupWorkFilter()
    {
        $backupWork = $this -> backupWork;
        $arr = array();
        $res = $backupWork -> listBackupWorkFilter($arr);
        $this->do_assert($res);
    }

    public function testCreateBackupWorkFilter()
    {
        $backupWork = $this -> backupWork;
        $arr = array(
            'filter_name'=>'',
            'description'=>'',
            'and_or'=>1,
            'rules'=>array(
            '0'=>array(
            'key'=>'',
            'operator'=>'',
            'value'=>'',),),
        );
        $res = $backupWork -> createBackupWorkFilter($arr);
        $this->do_assert($res);
    }

    public function testDescribeBackupWorkFilter()
    {
        $backupWork = $this -> backupWork;
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111',
        );
        $res = $backupWork -> describeBackupWorkFilter($arr);
        $this->do_assert($res);
    }

    public function testModifyBackupWorkFilter()
    {
        $backupWork = $this -> backupWork;
        $arr = array(
            'uuid'=>'11111111-1111-1111-1111-111111111111',
            'random_str'=>'11111111-1111-1111-1111-111111111111',
            'filter_name'=>'',
            'description'=>'',
            'and_or'=>1,
            'rules'=>array(
            '0'=>array(
            'key'=>'',
            'operator'=>'',
            'value'=>'',),),
        );
        $res = $backupWork -> modifyBackupWorkFilter($arr);
        $this->do_assert($res);
    }

    public function testDeleteBackupWorkFilter()
    {
        $backupWork = $this -> backupWork;
        $arr = array(
            'filter_uuids'=>array('11111111-1111-1111-1111-111111111111'),
            'force'=>0,
        );
        $res = $backupWork -> deleteBackupWorkFilter($arr);
        $this->do_assert($res);
    }

    private function do_assert($res)
    {
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}