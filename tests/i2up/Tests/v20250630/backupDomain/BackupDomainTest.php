<?php
namespace i2up\Test\v20250630\backupDomain;

use i2up\backupDomain\v20250630\BackupDomain;
use i2up\common\Auth;
                
class BackupDomainTest extends \PHPUnit_Framework_TestCase
 {
    private $backupDomain;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> backupDomain = new BackupDomain(new Auth());
    }

    public function testListTargetDomainStorageUnit()
    {
        $backupDomain = $this -> backupDomain;
        $arr = array(
            'domain_addr'=>'',
            'access_key'=>'',
            'secret_key'=>'',
            'domain_uuid'=>'',
        );
        
        
        $res = $backupDomain -> listTargetDomainStorageUnit($arr);
        $this->do_assert($res);
    }

    public function testListTargetDomainStorageUnitStatus()
    {
        $backupDomain = $this -> backupDomain;
        $arr = array(
            'unit_uuids'=>array(),
            'domain_addr'=>'',
            'access_key'=>'',
            'secret_key'=>'',
        );
        
        
        $res = $backupDomain -> listTargetDomainStorageUnitStatus($arr);
        $this->do_assert($res);
    }

    public function testCreateBackupDomain()
    {
        $backupDomain = $this -> backupDomain;
        $arr = array(
            'domain_name'=>'',
            'domain_addr'=>'',
            'access_key'=>'',
            'secret_key'=>'',
            'comment'=>'',
            'unit_uuids'=>array(),
            'schedule_svr_ip'=>'',
            'unit_addr_list'=>array(
            '0'=>array(
            'unit_uuid'=>'',
            'unit_addr'=>'',),),
        );
        
        
        $res = $backupDomain -> createBackupDomain($arr);
        $this->do_assert($res);
    }

    public function testModifyBackupDomain()
    {
        $backupDomain = $this -> backupDomain;
        $arr = array(
            'domain_name'=>'',
            'domain_addr'=>'',
            'access_key'=>'',
            'secret_key'=>'',
            'comment'=>'',
            'unit_uuids'=>array(),
            'unit_addr_list'=>array(),
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $backupDomain -> modifyBackupDomain($arr);
        $this->do_assert($res);
    }

    public function testAuthBackupDomain()
    {
        $backupDomain = $this -> backupDomain;
        $arr = array(
            'domain_addr'=>'',
            'access_key'=>'',
            'secret_key'=>'',
        );
        
        
        $res = $backupDomain -> authBackupDomain($arr);
        $this->do_assert($res);
    }

    public function testListBackupDomain()
    {
        $backupDomain = $this -> backupDomain;
        $arr = array();
        
        
        $res = $backupDomain -> listBackupDomain($arr);
        $this->do_assert($res);
    }

    public function testDescribeBackupDomain()
    {
        $backupDomain = $this -> backupDomain;
        $arr = array(
            'domain_name'=>'',
            'domain_addr'=>'',
            'access_key'=>'',
            'secret_key'=>'',
            'comment'=>'',
            'unit_uuids'=>array(),
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $backupDomain -> describeBackupDomain($arr);
        $this->do_assert($res);
    }

    public function testDeleteBackupDomain()
    {
        $backupDomain = $this -> backupDomain;
        $arr = array(
            'uuids'=>array(),
        );
        
        
        $res = $backupDomain -> deleteBackupDomain($arr);
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