<?php
namespace i2up\Test\v20250123\backupSet;

use i2up\backupSet\v20250123\BackupSet;
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
            'page'=>1,
            'limt'=>10,
            'where_args'=>array(
            '0'=>array(
            'wk_name'=>'',
            'src_type'=>'',
            'bk_name'=>'',
            'bk_rule_name'=>'',
            'storage_unit_name'=>'',
            'tname'=>'',
            'delete'=>'',
            'copy_id'=>'',
            'bk_type'=>'',
            'replica_task_sched_name'=>'',
            'vp_uuid'=>'',
            'vm_id'=>'',
            'instance_name'=>'',
            'db_name'=>'',
            'backup_method'=>1,
            'content_type'=>1,
            'wk_uuid'=>'',
            'vp_type'=>1,
            'bk_start_tm_left'=>1,
            'bk_start_tm_right'=>1,
            'bk_end_tm_left'=>1,
            'bk_end_tm_right'=>1,
            'region_id'=>'',
            'project_id'=>'',),),
            'stage'=>array(
            '0'=>0,
            '1'=>1,),
            'like_args'=>array(
            '0'=>array(
            'barcode'=>'',),),
            'show_all_copy'=>1,
            'or_where_by_group'=>'',
            'filter_log'=>0,
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
            'bk_set_list'=>array(
            '0'=>array(
            'expire_tm'=>'',
            'bk_set_uuid'=>'',),),
            'operate'=>'extend',
            'force'=>1,
            'backup_chain_policy'=>'',
            'client_uuid'=>'',
            'bk_server_uuid'=>'',
            'bk_server_addr'=>'',
        );
        
        
        $res = $backupSet -> extendBackupSet($arr);
        $this->do_assert($res);
    }

    public function testExpireBackupSet()
    {
        $backupSet = $this -> backupSet;
        $arr = array(
            'bk_set_list'=>array(
            '0'=>array(
            'expire_tm'=>'',
            'bk_set_uuid'=>'',),),
            'operate'=>'extend',
            'force'=>1,
            'backup_chain_policy'=>'',
            'client_uuid'=>'',
            'bk_server_uuid'=>'',
            'bk_server_addr'=>'',
        );
        
        
        $res = $backupSet -> expireBackupSet($arr);
        $this->do_assert($res);
    }

    public function testSetPrimaryBackupSet()
    {
        $backupSet = $this -> backupSet;
        $arr = array(
            'bk_set_list'=>array(
            '0'=>array(
            'expire_tm'=>'',
            'bk_set_uuid'=>'',),),
            'operate'=>'extend',
            'force'=>1,
            'backup_chain_policy'=>'',
            'client_uuid'=>'',
            'bk_server_uuid'=>'',
            'bk_server_addr'=>'',
        );
        
        
        $res = $backupSet -> setPrimaryBackupSet($arr);
        $this->do_assert($res);
    }

    public function testMountBackupSet()
    {
        $backupSet = $this -> backupSet;
        $arr = array(
            'bk_set_list'=>array(
            '0'=>array(
            'expire_tm'=>'',
            'bk_set_uuid'=>'',),),
            'operate'=>'extend',
            'force'=>1,
            'backup_chain_policy'=>'',
            'client_uuid'=>'',
            'bk_server_uuid'=>'',
            'bk_server_addr'=>'',
        );
        
        
        $res = $backupSet -> mountBackupSet($arr);
        $this->do_assert($res);
    }

    public function testUnmountBackupSet()
    {
        $backupSet = $this -> backupSet;
        $arr = array(
            'bk_set_list'=>array(
            '0'=>array(
            'expire_tm'=>'',
            'bk_set_uuid'=>'',),),
            'operate'=>'extend',
            'force'=>1,
            'backup_chain_policy'=>'',
            'client_uuid'=>'',
            'bk_server_uuid'=>'',
            'bk_server_addr'=>'',
        );
        
        
        $res = $backupSet -> unmountBackupSet($arr);
        $this->do_assert($res);
    }

    public function testDeleteDbBackupSet()
    {
        $backupSet = $this -> backupSet;
        $arr = array(
            'uuids'=>array(),
            'force'=>'',
        );
        
        
        $res = $backupSet -> deleteDbBackupSet($arr);
        $this->do_assert($res);
    }

    public function testManualForceDeleteDbBackupSet()
    {
        $backupSet = $this -> backupSet;
        $arr = array(
            'uuids'=>array(),
        );
        
        
        $res = $backupSet -> manualForceDeleteDbBackupSet($arr);
        $this->do_assert($res);
    }

    public function testDeleteBackupSet()
    {
        $backupSet = $this -> backupSet;
        $arr = array(
            'bk_set_list'=>array(
            '0'=>array(
            'bk_set_id'=>'',
            'bk_rule_uuid'=>'',
            'copy_id'=>'',),),
            'delete_from_db'=>1,
        );
        
        
        $res = $backupSet -> deleteBackupSet($arr);
        $this->do_assert($res);
    }

    public function testCreateBackupSetRepRule()
    {
        $backupSet = $this -> backupSet;
        $arr = array(
            'bk_set_uuids'=>array(),
            'start_time'=>1,
            'task_uuid'=>'',
        );
        
        
        $res = $backupSet -> createBackupSetRepRule($arr);
        $this->do_assert($res);
    }

    public function testDescribeBackupSet()
    {
        $backupSet = $this -> backupSet;
        $arr = array(
            'bk_set_uuid'=>'',
            'bk_set_id'=>'',
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

    public function testListBackupSetRule()
    {
        $backupSet = $this -> backupSet;
        $arr = array(
            'page'=>1,
            'limt'=>10,
            'search_field'=>'primary_copy',
            'search_value'=>'1',
        );
        
        
        $res = $backupSet -> listBackupSetRule($arr);
        $this->do_assert($res);
    }

    public function testValidateBackupSet()
    {
        $backupSet = $this -> backupSet;
        $arr = array(
            'bk_set_uuids'=>array(),
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
            'expire_tm'=>1,
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
            'bk_server_uuid'=>'',
            'bk_server_addr'=>'',
        );
        
        
        $res = $backupSet -> listBackupChain($arr);
        $this->do_assert($res);
    }

    public function testDrillBackupSet()
    {
        $backupSet = $this -> backupSet;
        $arr = array(
            'vp_uuid'=>'',
            'drill_list'=>array(
            '0'=>array(
            'bk_set_uuid'=>'',
            'orch_vm_name'=>'',
            'scripts'=>'',
            'scripts_type'=>1,
            'new_flavor_id'=>'',
            'new_network_id'=>'',
            'new_network_name'=>'',
            'cpu'=>1,
            'core_per_sock'=>1,
            'mem_mb'=>1,),),
            'auto_drill'=>0,
        );
        
        
        $res = $backupSet -> drillBackupSet($arr);
        $this->do_assert($res);
    }

    public function testListSrcClient()
    {
        $backupSet = $this -> backupSet;
        $arr = array(
            'where_args'=>array(
            'src_type'=>'',),
        );
        
        
        $res = $backupSet -> listSrcClient($arr);
        $this->do_assert($res);
    }

    public function testValidationBackupSet()
    {
        $backupSet = $this -> backupSet;
        $arr = array(
            'bk_set_uuid'=>'',
            'backup_chain_policy'=>1,
            'bk_server_uuid'=>'',
            'bk_server_addr'=>'',
            'type'=>1,
        );
        
        
        $res = $backupSet -> validationBackupSet($arr);
        $this->do_assert($res);
    }

    public function testGetValidationResult()
    {
        $backupSet = $this -> backupSet;
        $arr = array(
            'job_uuid'=>'',
        );
        
        
        $res = $backupSet -> getValidationResult($arr);
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