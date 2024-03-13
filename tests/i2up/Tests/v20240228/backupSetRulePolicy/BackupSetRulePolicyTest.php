<?php
namespace i2up\Test\v20240228\backupSetRulePolicy;

use i2up\backupSetRulePolicy\v20240228\BackupSetRulePolicy;
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
            'task_name' => '',
            'task_type' => '',
            'src_unit_uuid' => '',
            'dst_unit_uuid' => '',
            'pool_uuid' => '',
            'retention' => 1,
            'priority' => 1,
            'bkup_window' => array(
                '0' => array(
                    'wday' => 1,
                    'from' => '',
                    'to' => '',),),
            'bandwidth' => '',
            'disable' => 1,
            'next_replica_uuid' => '',
            'encrypt_setting' => array(
                'encrypt' => 1,
                'encrypt_switch' => 1,),
            'compress_setting' => array(
                'compress' => 1,
                'compress_switch' => 1,),
            'network_type' => 1,
        );
        $res = $backupSetRulePolicy -> createReplicaTask($arr);
        $this->do_assert($res);
    }

    public function testModifyReplicaTask()
    {
        $backupSetRulePolicy = $this -> backupSetRulePolicy;
        $arr = array(
            'uuid'=>'11111111-1111-1111-1111-111111111111',
            'random_str'=>'11111111-1111-1111-1111-111111111111',
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
        );
        $res = $backupSetRulePolicy -> modifyReplicaTask($arr);
        $this->do_assert($res);
    }

    public function testListReplicaTask()
    {
        $backupSetRulePolicy = $this -> backupSetRulePolicy;
        $arr = array(
            'like_args[task_name]'=>'',
            'type'=>1,
            'like_args[src_unit_name]'=>'',
            'like_args[dst_unit_name]'=>'',
        );
        $res = $backupSetRulePolicy -> listReplicaTask($arr);
        $this->do_assert($res);
    }

    public function testDescribeReplicaTask()
    {
        $backupSetRulePolicy = $this -> backupSetRulePolicy;
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111'
        );
        $res = $backupSetRulePolicy -> describeReplicaTask($arr);
        $this->do_assert($res);
    }

    public function testDeleteReplicaTask()
    {
        $backupSetRulePolicy = $this -> backupSetRulePolicy;
        $arr = array(
            'task_uuids'=>array('11111111-1111-1111-1111-111111111111'),
            'force'=>1,
        );
        $res = $backupSetRulePolicy -> deleteReplicaTask($arr);
        $this->do_assert($res);
    }

    private function do_assert($res)
    {
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}