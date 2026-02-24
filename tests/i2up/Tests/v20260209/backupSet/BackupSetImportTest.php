<?php
namespace i2up\Test\v20260209\backupSet;

use i2up\backupSet\v20260209\BackupSetImport;
use i2up\common\Auth;
                
class BackupSetImportTest extends \PHPUnit_Framework_TestCase
 {
    private $backupSetImport;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> backupSetImport = new BackupSetImport(new Auth());
    }

    public function testCreateBackupSetScan()
    {
        $backupSetImport = $this -> backupSetImport;
        $arr = array(
            'task_name'=>'',
            'disable'=>1,
            'storage_unit_type'=>1,
            'unit_uuid'=>'',
            'barcode'=>'',
            'task_search_type'=>'',
            'biz_grp_list'=>array(),
            'bkup_policy'=>1,
            'import_rule_uuid'=>'',
        );
        
        
        $res = $backupSetImport -> createBackupSetScan($arr);
        $this->do_assert($res);
    }

    public function testModifyBackupSetScan()
    {
        $backupSetImport = $this -> backupSetImport;
        $arr = array(
            'task_name'=>'',
            'disable'=>1,
            'storage_unit_type'=>'',
            'unit_uuid'=>'',
            'barcode'=>'',
            'task_search_type'=>'',
            'biz_grp_list'=>array(),
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $backupSetImport -> modifyBackupSetScan($arr);
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