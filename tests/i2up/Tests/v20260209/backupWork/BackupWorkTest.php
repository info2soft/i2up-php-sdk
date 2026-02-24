<?php
namespace i2up\Test\v20260209\backupWork;

use i2up\backupWork\v20260209\BackupWork;
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
            'search_name'=>'',
            'order_by'=>array(
            'start'=>'',
            'end'=>'',
            'runtime'=>'',
            'status'=>'',
            'sched_start'=>'',
            'state'=>'',),
        );
        
        
        $res = $backupWork -> listBackupWork($arr);
        $this->do_assert($res);
    }

    public function testDescribeBackupWork()
    {
        $backupWork = $this -> backupWork;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $backupWork -> describeBackupWork($arr);
        $this->do_assert($res);
    }

    public function testDeleteBackupWork()
    {
        $backupWork = $this -> backupWork;
        $arr = array(
            'work_uuids'=>array(),
            'force'=>1,
        );
        
        
        $res = $backupWork -> deleteBackupWork($arr);
        $this->do_assert($res);
    }

    public function testListBackupWorkLogs()
    {
        $backupWork = $this -> backupWork;
        $arr = array(
            'page'=>1,
            'limit'=>1,
            'start'=>1,
            'end'=>1,
            'level'=>1,
            'search_content'=>'',
            'type'=>1,
            'node_uuid'=>'',
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $backupWork -> listBackupWorkLogs($arr);
        $this->do_assert($res);
    }

    public function testListBackupWorkKeyEvents()
    {
        $backupWork = $this -> backupWork;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $backupWork -> listBackupWorkKeyEvents($arr);
        $this->do_assert($res);
    }

    public function testDescribeBackupWorkResult()
    {
        $backupWork = $this -> backupWork;
        $arr = array(
            'work_uuids'=>array(),
            'op_switch'=>1,
            'barcode_list'=>array(),
            'limit'=>'',
            'page'=>'',
        );
        
        
        $res = $backupWork -> describeBackupWorkResult($arr);
        $this->do_assert($res);
    }

    public function testDescribeBackupMigrateWorkResult()
    {
        $backupWork = $this -> backupWork;
        $arr = array(
            'limit'=>1,
            'page'=>'',
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $backupWork -> describeBackupMigrateWorkResult($arr);
        $this->do_assert($res);
    }

    public function testRebootBackupWork()
    {
        $backupWork = $this -> backupWork;
        $arr = array(
            'operate'=>'',
            'work_uuids'=>array(),
        );
        
        
        $res = $backupWork -> rebootBackupWork($arr);
        $this->do_assert($res);
    }

    public function testStopBackupWork()
    {
        $backupWork = $this -> backupWork;
        $arr = array(
            'operate'=>'',
            'work_uuids'=>array(),
        );
        
        
        $res = $backupWork -> stopBackupWork($arr);
        $this->do_assert($res);
    }

    public function testDownloadFailedFileList()
    {
        $backupWork = $this -> backupWork;
        $arr = array(
            'work_uuid'=>'',
            'backup_set_summary'=>'',
        );
        
        
        $res = $backupWork -> downloadFailedFileList($arr);
        $this->do_assert($res);
    }

    public function testSeVmpriority()
    {
        $backupWork = $this -> backupWork;
        $arr = array(
            'work_uuid'=>'',
            'job_priority'=>1,
        );
        
        
        $res = $backupWork -> seVmpriority($arr);
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

    public function testModifyBackupWorkFilter()
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
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $backupWork -> modifyBackupWorkFilter($arr);
        $this->do_assert($res);
    }

    public function testDescribeBackupWorkFilter()
    {
        $backupWork = $this -> backupWork;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $backupWork -> describeBackupWorkFilter($arr);
        $this->do_assert($res);
    }

    public function testDeleteBackupWorkFilter()
    {
        $backupWork = $this -> backupWork;
        $arr = array(
            'filter_uuids'=>array(),
            'force'=>0,
        );
        
        
        $res = $backupWork -> deleteBackupWorkFilter($arr);
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