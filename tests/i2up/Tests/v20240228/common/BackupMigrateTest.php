<?php
namespace i2up\Test\v20240228\common;

use i2up\common\v20240228\BackupMigrate;
use i2up\common\Auth;
                
class BackupMigrateTest extends \PHPUnit_Framework_TestCase
 {
    private $backupMigrate;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
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
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}