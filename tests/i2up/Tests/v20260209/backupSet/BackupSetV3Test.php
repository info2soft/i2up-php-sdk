<?php
namespace i2up\Test\v20260209\backupSet;

use i2up\backupSet\v20260209\BackupSetV3;
use i2up\common\Auth;
                
class BackupSetV3Test extends \PHPUnit_Framework_TestCase
 {
    private $backupSetV3;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> backupSetV3 = new BackupSetV3(new Auth());
    }

    public function testListBackupSet()
    {
        $backupSetV3 = $this -> backupSetV3;
        $arr = array(
            'rules'=>array(
            '0'=>array(
            'key'=>'',
            'operator'=>'',
            'value'=>'',),),
            'filter_log'=>0,
            'stage'=>array(
            '0'=>0,
            '1'=>1,),
            'show_all_copy'=>1,
            'or_where_by_group'=>'',
            'page'=>1,
            'limt'=>10,
            'where_args'=>array(
            '0'=>array(
            'vp_uuid'=>'',
            'vm_id'=>'',
            'wk_uuid'=>'',
            'backup_way'=>'',
            'tname'=>'',
            'region_id'=>'',
            'project_id'=>'',
            'instance_name'=>'',
            'db_name'=>'db-Margaret',
            'vp_type'=>1,
            'backup_method'=>1,
            'content_type'=>1,
            'copy_id'=>'',
            'bk_type'=>'',
            'replica_task_sched_name'=>'',
            'wk_name'=>'',
            'src_type'=>'',
            'bk_name'=>'',
            'bk_rule_name'=>'',
            'storage_unit_name'=>'',
            'bk_start_tm_left'=>1,
            'bk_start_tm_right'=>1,
            'bk_end_tm_left'=>1,
            'bk_end_tm_right'=>1,
            'delete'=>'',
            'db_names'=>array(),
            'bk_set_uuids'=>array(),
            'log_start_time_left'=>1,
            'log_start_time_right'=>1,
            'log_end_time_left'=>1,
            'log_end_time_right'=>1,
            'recovery_way'=>1,),),
            'like_args'=>array(
            '0'=>array(
            'barcode'=>'',),),
            'auto_select'=>1,
        );
        
        
        $res = $backupSetV3 -> listBackupSet($arr);
        $this->do_assert($res);
    }

    public function testListRuleBackupSet()
    {
        $backupSetV3 = $this -> backupSetV3;
        $arr = array(
            'uuid'=>'',
        );
        
        
        $res = $backupSetV3 -> listRuleBackupSet($arr);
        $this->do_assert($res);
    }

    public function testListBackupSetChain()
    {
        $backupSetV3 = $this -> backupSetV3;
        $arr = array(
            'bk_set_uuid'=>'',
        );
        
        
        $res = $backupSetV3 -> listBackupSetChain($arr);
        $this->do_assert($res);
    }

    public function testListQueryArgsBackupSet()
    {
        $backupSetV3 = $this -> backupSetV3;
        $arr = array(
            'search_field'=>'',
            'search_value'=>'',
            'delete'=>1,
        );
        
        
        $res = $backupSetV3 -> listQueryArgsBackupSet($arr);
        $this->do_assert($res);
    }

    public function testExtendBackupSet()
    {
        $backupSetV3 = $this -> backupSetV3;
        $arr = array(
            'bk_set_list'=>array(
            '0'=>array(
            'bk_set_uuid'=>'',
            'expire_tm'=>'',),),
            'operate'=>'extend',
            'backup_chain_policy'=>'',
            'client_uuid'=>'',
            'bk_server_uuid'=>'',
            'bk_server_addr'=>'',
            'force'=>1,
            'priority'=>'',
        );
        
        
        $res = $backupSetV3 -> extendBackupSet($arr);
        $this->do_assert($res);
    }

    public function testExpireBackupSet()
    {
        $backupSetV3 = $this -> backupSetV3;
        $arr = array(
            'bk_set_list'=>array(
            '0'=>array(
            'bk_set_uuid'=>'',
            'expire_tm'=>'',),),
            'operate'=>'extend',
            'backup_chain_policy'=>'',
            'client_uuid'=>'',
            'bk_server_uuid'=>'',
            'bk_server_addr'=>'',
            'force'=>1,
            'priority'=>'',
        );
        
        
        $res = $backupSetV3 -> expireBackupSet($arr);
        $this->do_assert($res);
    }

    public function testSetPrimaryBackupSet()
    {
        $backupSetV3 = $this -> backupSetV3;
        $arr = array(
            'bk_set_list'=>array(
            '0'=>array(
            'bk_set_uuid'=>'',
            'expire_tm'=>'',),),
            'operate'=>'extend',
            'backup_chain_policy'=>'',
            'client_uuid'=>'',
            'bk_server_uuid'=>'',
            'bk_server_addr'=>'',
            'force'=>1,
            'priority'=>'',
        );
        
        
        $res = $backupSetV3 -> setPrimaryBackupSet($arr);
        $this->do_assert($res);
    }

    public function testMountBackupSet()
    {
        $backupSetV3 = $this -> backupSetV3;
        $arr = array(
            'bk_set_list'=>array(
            '0'=>array(
            'bk_set_uuid'=>'',
            'expire_tm'=>'',),),
            'operate'=>'extend',
            'backup_chain_policy'=>'',
            'client_uuid'=>'',
            'bk_server_uuid'=>'',
            'bk_server_addr'=>'',
            'force'=>1,
            'priority'=>'',
        );
        
        
        $res = $backupSetV3 -> mountBackupSet($arr);
        $this->do_assert($res);
    }

    public function testUnmountBackupSet()
    {
        $backupSetV3 = $this -> backupSetV3;
        $arr = array(
            'bk_set_list'=>array(
            '0'=>array(
            'bk_set_uuid'=>'',
            'expire_tm'=>'',),),
            'operate'=>'extend',
            'backup_chain_policy'=>'',
            'client_uuid'=>'',
            'bk_server_uuid'=>'',
            'bk_server_addr'=>'',
            'force'=>1,
            'priority'=>'',
        );
        
        
        $res = $backupSetV3 -> unmountBackupSet($arr);
        $this->do_assert($res);
    }

    public function testVerifyBackupSet()
    {
        $backupSetV3 = $this -> backupSetV3;
        $arr = array(
            'bk_set_list'=>array(
            '0'=>array(
            'bk_set_uuid'=>'',
            'expire_tm'=>'',),),
            'operate'=>'extend',
            'backup_chain_policy'=>'',
            'client_uuid'=>'',
            'bk_server_uuid'=>'',
            'bk_server_addr'=>'',
            'force'=>1,
            'priority'=>'',
        );
        
        
        $res = $backupSetV3 -> verifyBackupSet($arr);
        $this->do_assert($res);
    }

    public function testDeleteDbBackupSet()
    {
        $backupSetV3 = $this -> backupSetV3;
        $arr = array(
            'force'=>'',
            'uuids'=>array(),
        );
        
        
        $res = $backupSetV3 -> deleteDbBackupSet($arr);
        $this->do_assert($res);
    }

    public function testManualForceDeleteDbBackupSet()
    {
        $backupSetV3 = $this -> backupSetV3;
        $arr = array(
            'uuids'=>array(),
        );
        
        
        $res = $backupSetV3 -> manualForceDeleteDbBackupSet($arr);
        $this->do_assert($res);
    }

    public function testManualForceCleanDbBackupSet()
    {
        $backupSetV3 = $this -> backupSetV3;
        $arr = array(
            'uuids'=>array(),
        );
        
        
        $res = $backupSetV3 -> manualForceCleanDbBackupSet($arr);
        $this->do_assert($res);
    }

    public function testCreateBackupSetRepRule()
    {
        $backupSetV3 = $this -> backupSetV3;
        $arr = array(
            'bk_set_uuids'=>array(),
            'start_time'=>1,
            'task_uuid'=>'',
        );
        
        
        $res = $backupSetV3 -> createBackupSetRepRule($arr);
        $this->do_assert($res);
    }

    public function testDescribeBackupSet()
    {
        $backupSetV3 = $this -> backupSetV3;
        $arr = array(
            'bk_set_id'=>'',
            'bk_set_uuid'=>'',
        );
        
        
        $res = $backupSetV3 -> describeBackupSet($arr);
        $this->do_assert($res);
    }

    public function testDescribeDeletedBackupSet()
    {
        $backupSetV3 = $this -> backupSetV3;
        $arr = array(
            'bk_set_uuid'=>'',
        );
        
        
        $res = $backupSetV3 -> describeDeletedBackupSet($arr);
        $this->do_assert($res);
    }

    public function testDescribeBackupSetCopy()
    {
        $backupSetV3 = $this -> backupSetV3;
        $arr = array(
            'page'=>1,
            'limt'=>10,
            'search_field'=>'',
            'search_value'=>'',
            'bk_set_uuid'=>'',
        );
        
        
        $res = $backupSetV3 -> describeBackupSetCopy($arr);
        $this->do_assert($res);
    }

    public function testListBackupSetRule()
    {
        $backupSetV3 = $this -> backupSetV3;
        $arr = array(
            'page'=>1,
            'limt'=>10,
            'search_field'=>'primary_copy',
            'search_value'=>'1',
        );
        
        
        $res = $backupSetV3 -> listBackupSetRule($arr);
        $this->do_assert($res);
    }

    public function testValidateBackupSet()
    {
        $backupSetV3 = $this -> backupSetV3;
        $arr = array(
            'bk_set_uuids'=>array(),
            'mode'=>'',
        );
        
        
        $res = $backupSetV3 -> validateBackupSet($arr);
        $this->do_assert($res);
    }

    public function testResetPrimaryBackupSet()
    {
        $backupSetV3 = $this -> backupSetV3;
        $arr = array(
            'bk_set_id'=>'',
            'bk_rule_uuid'=>'',
            'expire_tm'=>1,
        );
        
        
        $res = $backupSetV3 -> resetPrimaryBackupSet($arr);
        $this->do_assert($res);
    }

    public function testListBackupChain()
    {
        $backupSetV3 = $this -> backupSetV3;
        $arr = array(
            'bk_server_uuid'=>'',
            'bk_server_addr'=>'',
            'backup_chain_policy'=>1,
            'bk_set_uuid'=>'',
        );
        
        
        $res = $backupSetV3 -> listBackupChain($arr);
        $this->do_assert($res);
    }

    public function testDrillBackupSet()
    {
        $backupSetV3 = $this -> backupSetV3;
        $arr = array(
            'auto_drill'=>0,
            'vp_uuid'=>'',
            'drill_list'=>array(
            '0'=>array(
            'new_flavor_id'=>'',
            'new_network_id'=>'',
            'new_network_name'=>'',
            'cpu'=>1,
            'core_per_sock'=>1,
            'mem_mb'=>1,
            'bk_set_uuid'=>'',
            'orch_vm_name'=>'',
            'scripts'=>'',
            'scripts_type'=>1,),),
        );
        
        
        $res = $backupSetV3 -> drillBackupSet($arr);
        $this->do_assert($res);
    }

    public function testListSrcClient()
    {
        $backupSetV3 = $this -> backupSetV3;
        $arr = array(
            'where_args'=>array(
            'src_type'=>'',),
        );
        
        
        $res = $backupSetV3 -> listSrcClient($arr);
        $this->do_assert($res);
    }

    public function testValidationBackupSet()
    {
        $backupSetV3 = $this -> backupSetV3;
        $arr = array(
            'type'=>1,
            'bk_set_uuid'=>'',
            'backup_chain_policy'=>1,
            'bk_server_uuid'=>'',
            'bk_server_addr'=>'',
        );
        
        
        $res = $backupSetV3 -> validationBackupSet($arr);
        $this->do_assert($res);
    }

    public function testGetValidationResult()
    {
        $backupSetV3 = $this -> backupSetV3;
        $arr = array(
            'job_uuid'=>'',
        );
        
        
        $res = $backupSetV3 -> getValidationResult($arr);
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