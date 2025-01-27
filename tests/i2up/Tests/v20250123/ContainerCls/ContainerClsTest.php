<?php
namespace i2up\Test\v20250123\ContainerCls;

use i2up\ContainerCls\v20250123\ContainerCls;
use i2up\common\Auth;
                
class ContainerClsTest extends \PHPUnit_Framework_TestCase
 {
    private $containerCls;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> containerCls = new ContainerCls(new Auth());
    }

    public function testCreateContinerClusterBackup()
    {
        $containerCls = $this -> containerCls;
        $arr = array(
            'task_name'=>'',
            'biz_grp_list'=>array(),
            'cls_type'=>1,
            'cls_uuid'=>'',
            'location_uuid'=>'',
            'resource_type'=>array(),
            'resource_label'=>'',
            'resource_namespace'=>array(),
            'callback_uuid_list'=>array(),
            'tag'=>'',
            'backup_one_time'=>1,
            'backup_schedule'=>array(),
            'backup_policy'=>1,
            'save_days'=>1,
            'task_type'=>1,
        );
        
        
        $res = $containerCls -> createContinerClusterBackup($arr);
        $this->do_assert($res);
    }

    public function testListContainerClusterBackup()
    {
        $containerCls = $this -> containerCls;
        $arr = array(
            'where_args'=>array(
            'task_type'=>'',),
        );
        
        
        $res = $containerCls -> listContainerClusterBackup($arr);
        $this->do_assert($res);
    }

    public function testDescribeContainerClusterBackup()
    {
        $containerCls = $this -> containerCls;
        $arr = array(
            'sub_time'=>'',
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $containerCls -> describeContainerClusterBackup($arr);
        $this->do_assert($res);
    }

    public function testModifyContainerClusterBackup()
    {
        $containerCls = $this -> containerCls;
        $arr = array(
            'task_name'=>'',
            'biz_grp_list'=>array(),
            'cls_type'=>1,
            'cls_uuid'=>'',
            'location_uuid'=>'',
            'resource_type'=>'',
            'resource_label'=>'',
            'resource_namespace'=>'',
            'callback_uuid'=>'',
            'tag'=>'',
            'backup_type'=>1,
            'bkup_one_time'=>'',
            'bkup_schedule'=>array(
            'limit'=>'',
            'sched_day'=>'',
            'sched_every'=>'',
            'sched_time'=>'',
            'sched_gap_min'=>'',
            'backup_type'=>'',),
            'bkup_policy'=>1,
            'save_days'=>1,
            'bkup_window'=>array(
            'sched_time_start'=>'',
            'sched_time_end'=>'',),
            'task_uuid'=>'',
            'random_str'=>'',
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $containerCls -> modifyContainerClusterBackup($arr);
        $this->do_assert($res);
    }

    public function testDeleteContainerClusterBackup()
    {
        $containerCls = $this -> containerCls;
        $arr = array(
            'task_uuids'=>array(),
            'sub_task_uuid'=>'',
            'force'=>1,
        );
        
        
        $res = $containerCls -> deleteContainerClusterBackup($arr);
        $this->do_assert($res);
    }

    public function testListContainerClusterBackupStatus()
    {
        $containerCls = $this -> containerCls;
        $arr = array(
            'task_uuids'=>array(),
        );
        
        
        $res = $containerCls -> listContainerClusterBackupStatus($arr);
        $this->do_assert($res);
    }

    public function testBackupImmediateContainerClusterBackup()
    {
        $containerCls = $this -> containerCls;
        $arr = array(
            'task_uuids'=>array(),
            'operate'=>'start',
        );
        
        
        $res = $containerCls -> backupImmediateContainerClusterBackup($arr);
        $this->do_assert($res);
    }

    public function testListContainerClusterBackupSubTask()
    {
        $containerCls = $this -> containerCls;
        $arr = array(
            'task_uuid'=>'681D716B-D3CE-4E35-A018-E2E3D3C5743E',
        );
        
        
        $res = $containerCls -> listContainerClusterBackupSubTask($arr);
        $this->do_assert($res);
    }

    public function testGetContainerClusterBackupInfo()
    {
        $containerCls = $this -> containerCls;
        $arr = array(
            'task_uuid'=>'',
        );
        
        
        $res = $containerCls -> getContainerClusterBackupInfo($arr);
        $this->do_assert($res);
    }

    public function testCreateContainerClusterRecovery()
    {
        $containerCls = $this -> containerCls;
        $arr = array(
            'task_name'=>'',
            'task_type'=>'',
            'biz_grp_list'=>array(),
            'cls_type'=>1,
            'cls_uuid'=>'',
            'location_uuid'=>'',
            'backup_task_uuid'=>'',
            'rc_point_in_time'=>'',
            'callback_uuid_list'=>array(),
            'save_nodeport'=>1,
            'tag'=>'',
            'namespace_mapping'=>'',
            'src_cls_uuid'=>'',
        );
        
        
        $res = $containerCls -> createContainerClusterRecovery($arr);
        $this->do_assert($res);
    }

    public function testListContainerClusterRecovery()
    {
        $containerCls = $this -> containerCls;
        $arr = array();
        
        
        $res = $containerCls -> listContainerClusterRecovery($arr);
        $this->do_assert($res);
    }

    public function testDescribeContainerClusterRecovery()
    {
        $containerCls = $this -> containerCls;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $containerCls -> describeContainerClusterRecovery($arr);
        $this->do_assert($res);
    }

    public function testModifyContainerClusterRecovery()
    {
        $containerCls = $this -> containerCls;
        $arr = array(
            'task_name'=>'',
            'task_type'=>'',
            'biz_grp_list'=>array(),
            'cls_type'=>1,
            'cls_uuid'=>'',
            'location_uuid'=>'',
            'backup_task_uuid'=>'',
            'rc_point_in_time'=>'',
            'callback_uuid'=>'',
            'save_nodeport'=>1,
            'tag'=>'',
            'user_uuid'=>'',
            'random_str'=>'',
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $containerCls -> modifyContainerClusterRecovery($arr);
        $this->do_assert($res);
    }

    public function testDeleteContainerClusterRecovery()
    {
        $containerCls = $this -> containerCls;
        $arr = array(
            'task_uuids'=>array(),
            'force'=>1,
        );
        
        
        $res = $containerCls -> deleteContainerClusterRecovery($arr);
        $this->do_assert($res);
    }

    public function testListContainerClusterRecoveryStatus()
    {
        $containerCls = $this -> containerCls;
        $arr = array(
            'task_uuids'=>array(),
        );
        
        
        $res = $containerCls -> listContainerClusterRecoveryStatus($arr);
        $this->do_assert($res);
    }

    public function testListContainerClusterRecoveryPoint()
    {
        $containerCls = $this -> containerCls;
        $arr = array(
            'backup_task_uuid'=>'',
            'cls_uuid'=>'',
        );
        
        
        $res = $containerCls -> listContainerClusterRecoveryPoint($arr);
        $this->do_assert($res);
    }

    public function testStartContainerClusterRecovery()
    {
        $containerCls = $this -> containerCls;
        $arr = array(
            'operate'=>'start',
            'task_uuids'=>array(
            '0'=>'11111111-1111-1111-1111-111111111111',),
        );
        
        
        $res = $containerCls -> startContainerClusterRecovery($arr);
        $this->do_assert($res);
    }

    public function testStopContainerClusterRecovery()
    {
        $containerCls = $this -> containerCls;
        $arr = array(
            'operate'=>'start',
            'task_uuids'=>array(
            '0'=>'11111111-1111-1111-1111-111111111111',),
        );
        
        
        $res = $containerCls -> stopContainerClusterRecovery($arr);
        $this->do_assert($res);
    }

    public function testGetContainerClusterRecoveryInfo()
    {
        $containerCls = $this -> containerCls;
        $arr = array(
            'task_uuid'=>'',
        );
        
        
        $res = $containerCls -> getContainerClusterRecoveryInfo($arr);
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