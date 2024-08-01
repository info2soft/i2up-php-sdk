<?php
namespace i2up\Test\v20240228\backupSet;

use i2up\backupSet\v20240228\BackupSet;
use i2up\common\Auth;
                
class BackupSetTest extends \PHPUnit_Framework_TestCase
 {
    private $backupSet;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> backupSet = new BackupSet(new Auth());
    }

    public function testListBackupSet()
    {
        $backupSet = $this -> backupSet;
        $arr = array(
            'page' => 1,
            'limt' => 10,
            'where_args' => array(),
            'stage' => array(),
            'like_args' => array(),
            'show_all_copy' => 1,
        );
        $res = $backupSet -> listBackupSet($arr);
        $this->do_assert($res);
    }

    public function testListQueryArgsBackupSet()
    {
        $backupSet = $this -> backupSet;
        $arr = array(
            'search_field'=>'',
            'search_value'=>'',
            'delete'=>1,
        );
        $res = $backupSet -> listQueryArgsBackupSet($arr);
        $this->do_assert($res);
    }

    public function testExtendBackupSet()
    {
        $backupSet = $this -> backupSet;
        $arr = array(
            'bk_set_list' => array(
                '0' => array(
                    'expire_tm' => '',
                    'bk_set_uuid' => '11111111-1111-1111-1111-111111111111',),),
            'operate' => 'extend',
            'force' => 1,
        );
        $res = $backupSet -> extendBackupSet($arr);var_dump($res);
        $this->do_assert($res);
    }
    public function testExpireBackupSet()
    {
        $backupSet = $this -> backupSet;
        $arr = array(
            'bk_set_list' => array(
                '0' => array(
                    'expire_tm' => '',
                    'bk_set_uuid' => '11111111-1111-1111-1111-111111111111',),),
            'operate' => 'expire',
            'force' => 1,
        );
        $res = $backupSet -> expireBackupSet($arr);
        $this->do_assert($res);
    }
    public function testSetPrimaryBackupSet()
    {
        $backupSet = $this -> backupSet;
        $arr = array(
            'bk_set_list' => array(
                '0' => array(
                    'expire_tm' => '',
                    'bk_set_uuid' => '11111111-1111-1111-1111-111111111111',),),
            'operate' => 'set_primary',
            'force' => 1,
        );
        $res = $backupSet -> setPrimaryBackupSet($arr);
        $this->do_assert($res);
    }

    public function testDeleteDbBackupSet()
    {
        $backupSet = $this -> backupSet;
        $arr = array(
            'uuids'=>array('11111111-1111-1111-1111-111111111111'),
            'force'=>'',
        );
        $res = $backupSet -> deleteDbBackupSet($arr);
        $this->do_assert($res);
    }

    public function testDeleteBackupSet()
    {
        $backupSet = $this -> backupSet;
        $arr = array(
            'bk_set_list' => array(
                '0' => array(
                    'bk_set_id' => '',
                    'bk_rule_uuid' => '',
                    'copy_id' => '',),),
            'delete_from_db' => 1,
        );
        $res = $backupSet -> deleteBackupSet($arr);
        $this->do_assert($res);
    }

    public function testCreateBackupSetRepRule()
    {
        $backupSet = $this -> backupSet;
        $arr = array(
            'bk_set_uuids'=>array('11111111-1111-1111-1111-111111111111'),
            'unit_uuid'=>'',
            'tape_pool_uuid'=>'',
            'retention_level'=>'',
            'start_time'=>1,
        );
        $res = $backupSet -> createBackupSetRepRule($arr);
        $this->do_assert($res);
    }

    public function testDescribeBackupSet()
    {
        $backupSet = $this -> backupSet;
        $arr = array(
            'bk_set_uuid'=>'11111111-1111-1111-1111-111111111111',
        );
        $res = $backupSet -> describeBackupSet($arr);
        $this->do_assert($res);
    }

    public function testDescribeDeletedBackupSet()
    {
        $backupSet = $this -> backupSet;
        $arr = array(
            'bk_set_uuid'=>'',
        );
        $res = $backupSet -> describeDeletedBackupSet($arr);
        $this->do_assert($res);
    }

    public function testDescribeBackupSetCopy()
    {
        $backupSet = $this -> backupSet;
        $arr = array(
            'page'=>1,
            'limt'=>10,
            'search_field'=>'',
            'search_value'=>'',
            'bk_set_uuid'=>'',
        );
        $res = $backupSet -> describeBackupSetCopy($arr);
        $this->do_assert($res);
    }

    public function testValidateBackupSet()
    {
        $backupSet = $this -> backupSet;
        $arr = array(
            'bk_set_uuids'=>array('11111111-1111-1111-1111-111111111111'),
            'mode'=>'',
        );
        $res = $backupSet -> validateBackupSet($arr);
        $this->do_assert($res);
    }

    public function testResetPrimaryBackupSet()
    {
        $backupSet = $this -> backupSet;
        $arr = array(
            'bk_set_id'=>'',
            'bk_rule_uuid'=>'',
        );
        $res = $backupSet -> resetPrimaryBackupSet($arr);
        $this->do_assert($res);
    }

    public function testListBackupChain()
    {
        $backupSet = $this -> backupSet;
        $arr = array(
            'bk_set_uuid'=>'',
            'backup_chain_policy'=>1,
        );
        $res = $backupSet -> listBackupChain($arr);
        $this->do_assert($res);
    }

    private function do_assert($res)
    {
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}