<?php
namespace i2up\Test\v20260626\common;

use i2up\common\v20260626\BackupMigrate;
use i2up\common\Auth;
use PHPUnit\Framework\TestCase;
                
class BackupMigrateTest extends TestCase
 {
    private $backupMigrate;
    
    public function setUp():void
    {
        parent::setup();
        $this -> backupMigrate = new BackupMigrate(new Auth());
    }

    public function testDecribeCcMoveRemoteStatus()
    {
        $backupMigrate = $this -> backupMigrate;
        $arr = array(
            'access_key'=>'',
            'secret_key'=>'',
            'cc_ip'=>'172.0.0.1:58086',
            'cc_port'=>'',
        );
        
        
        $res = $backupMigrate -> decribeCcMoveRemoteStatus($arr);
        $this->do_assert($res);
    }

    public function testDecribeCcMoveModules()
    {
        $backupMigrate = $this -> backupMigrate;
        $arr = array();
        
        
        $res = $backupMigrate -> decribeCcMoveModules($arr);
        $this->do_assert($res);
    }

    public function testCreateCcMove()
    {
        $backupMigrate = $this -> backupMigrate;
        $arr = array(
            'cc_ip'=>'172.0.0.1',
            'access_key'=>'',
            'secret_key'=>'',
            'module_list'=>array(
            '0'=>'cmp',
            '1'=>'rep',
            '2'=>'fsp',
            '3'=>'dto',),
            'prefix'=>'',
            'suffix'=>'',
            'cc_port'=>'',
        );
        
        
        $res = $backupMigrate -> createCcMove($arr);
        $this->do_assert($res);
    }

    public function testDecribeCcMoveStatus()
    {
        $backupMigrate = $this -> backupMigrate;
        $arr = array(
            'rule_uuids'=>array(),
        );
        
        
        $res = $backupMigrate -> decribeCcMoveStatus($arr);
        $this->do_assert($res);
    }

    public function testListCcMove()
    {
        $backupMigrate = $this -> backupMigrate;
        $arr = array(
            'search_field'=>'cc_ip',
            'search_value'=>'',
        );
        
        
        $res = $backupMigrate -> listCcMove($arr);
        $this->do_assert($res);
    }

    public function testDeleteCcMove()
    {
        $backupMigrate = $this -> backupMigrate;
        $arr = array(
            'rule_uuids'=>array(),
        );
        
        
        $res = $backupMigrate -> deleteCcMove($arr);
        $this->do_assert($res);
    }

    public function testDecribeCcMoveTable()
    {
        $backupMigrate = $this -> backupMigrate;
        $arr = array(
            'table'=>'',
        );
        
        
        $res = $backupMigrate -> decribeCcMoveTable($arr);
        $this->do_assert($res);
    }

    public function testMakeCcMoveRemigrate()
    {
        $backupMigrate = $this -> backupMigrate;
        $arr = array(
            'rule_uuid'=>'',
            'conflict_uuid'=>'',
            'module'=>'',
            'model_name'=>'',
            'new_name'=>'',
        );
        
        
        $res = $backupMigrate -> makeCcMoveRemigrate($arr);
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