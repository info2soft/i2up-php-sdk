<?php
namespace i2up\Test\v20240819\backupSetRulePolicy;

use i2up\backupSetRulePolicy\v20240819\BackupSetRulePolicy;
use i2up\common\Auth;
                
class BackupSetRulePolicyTest extends \PHPUnit_Framework_TestCase
 {
    private $backupSetRulePolicy;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> backupSetRulePolicy = new BackupSetRulePolicy(new Auth());
    }

    public function testCreateReplicaTask()
    {
        $backupSetRulePolicy = $this -> backupSetRulePolicy;
        $arr = array(
            'task_name'=>'',
            'task_type'=>'',
            'src_unit_uuid'=>'',
            'dst_unit_uuid'=>'',
            'pool_uuid'=>'',
            'retention'=>1,
            'priority'=>1,
            'bkup_window'=>array(
            '0'=>array(
            'wday'=>1,
            'from'=>'',
            'to'=>'',),),
            'bandwidth'=>'',
            'disable'=>1,
            'next_replica_uuid'=>'',
            'encrypt_setting'=>array(
            'encrypt'=>1,
            'encrypt_switch'=>1,),
            'compress_setting'=>array(
            'compress'=>1,
            'compress_switch'=>1,),
            'network_type'=>1,
            'thread_num'=>1,
            'concurrent_mode'=>1,
        );
        
        
        $res = $backupSetRulePolicy -> createReplicaTask($arr);
        $this->do_assert($res);
    }

    public function testModifyReplicaTask()
    {
        $backupSetRulePolicy = $this -> backupSetRulePolicy;
        $arr = array(
            'task_name'=>'',
            'task_type'=>'',
            'src_unit_uuid'=>'',
            'dst_unit_uuid'=>'',
            'tape_uuid'=>'',
            'retention'=>1,
            'priority'=>1,
            'trans_mode'=>1,
            'bkup_window'=>'',
            'bandwidth'=>'',
            'task_uuid'=>'',
            'random_str'=>'',
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $backupSetRulePolicy -> modifyReplicaTask($arr);
        $this->do_assert($res);
    }

    public function testListReplicaTask()
    {
        $backupSetRulePolicy = $this -> backupSetRulePolicy;
        $arr = array(
            'type'=>1,
            'like_args'=>array(
            'task_name'=>'',
            'src_unit_name'=>'',
            'dst_unit_name'=>'',),
        );
        
        
        $res = $backupSetRulePolicy -> listReplicaTask($arr);
        $this->do_assert($res);
    }

    public function testDescribeReplicaTask()
    {
        $backupSetRulePolicy = $this -> backupSetRulePolicy;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $backupSetRulePolicy -> describeReplicaTask($arr);
        $this->do_assert($res);
    }

    public function testDeleteReplicaTask()
    {
        $backupSetRulePolicy = $this -> backupSetRulePolicy;
        $arr = array(
            'task_uuids'=>array(),
            'force'=>1,
        );
        
        
        $res = $backupSetRulePolicy -> deleteReplicaTask($arr);
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