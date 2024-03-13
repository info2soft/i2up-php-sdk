<?php
namespace i2up\Test\dtrack;

use i2up\dtrack\v20201009\Dtrack;
use i2up\common\Auth;

class DtrackTest extends \PHPUnit_Framework_TestCase
{
    private $dtrack;

    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> dtrack = new Dtrack(new Auth());
    }

    public function testListDtrackBackupDev()
    {
        $dtrack = $this -> dtrack;
        $arr = array(
            'node_uuid'=>'',
        );
        $res = $dtrack -> listDtrackBackupDev($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListDtrackBackupSystemInfo()
    {
        $dtrack = $this -> dtrack;
        $arr = array(
            'node_uuid'=>'',
        );
        $res = $dtrack -> listDtrackBackupSystemInfo($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testTempFuncName()
    {
        $dtrack = $this -> dtrack;
        $arr = array(
            'policy_uuid'=>'',
            'policy_name'=>'',
        );
        $res = $dtrack -> tempFuncName($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testCreateDtrackBackup()
    {
        $dtrack = $this -> dtrack;
        $arr = array(
            'policy_name'=>'',
            'wk_uuid'=>'',
            'bk_uuid'=>'',
            'config'=>array(
                'source_disk_id'=>'',
                'mirror_file'=>'',
                'mirror_disk_path'=>'',
                'resolution'=>1,
                'fs_analyze'=>0,
                'scan_first'=>0,
                'run_now'=>'0',
                'sync_type'=>1,
                'schedule_config'=>'',
                'quiesce'=>0,
                'snapshot'=>0,
                'read_thread_count'=>1,
                'send_thread_count'=>1,
                'write_thread_count'=>1,
                'mirror_fs_mountpoint'=>'',
                'source_disk_path'=>'',
                'track_length'=>1,
                'job_history_start_time'=>'',
                'job_history_save_max_num'=>1,
                'job_history_save_period'=>1,
                'retry_times'=>1,
                'retry_interval'=>1,
                'compress'=>1,
                'compress_method'=>'',
                'encryption'=>1,
                'encryption_method'=>'',
                'mysql_db_array'=>array(),
                'oracle_tablespace_array'=>array(),
                'sqlserver_enable'=>1,
                'max_snap_cnt'=>1,
                'target_type'=>'',),
        );
        $res = $dtrack -> createDtrackBackup($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testModifyDtrackBackup()
    {
        $dtrack = $this -> dtrack;
        $arr = array(
            'policy_name'=>'',
            'config'=>array(
                'sync_type'=>1,
                'schedule_config'=>'',
                'snapshot'=>1,
                'quiesce'=>1,
                'read_thread_count'=>1,
                'send_thread_count'=>1,
                'write_thread_count'=>1,
                'job_history_start_time'=>'',
                'job_history_save_max_num'=>1,
                'job_history_save_period'=>1,
                'track_length'=>1,
                'retry_times'=>1,
                'retry_interval'=>1,
                'compress'=>1,
                'compress_method'=>'',
                'encryption'=>1,
                'encryption_method'=>'',
                'mysql_db_array'=>array(),
                'oracle_tablespace_array'=>array(),
                'sqlserver_enable'=>1,
                'max_snap_cnt'=>1,),
            'wk_uuid'=>'',
            'bk_uuid'=>'',
            'random_str'=>'',
        );
        $res = $dtrack -> modifyDtrackBackup($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeDtrackBackup()
    {
        $dtrack = $this -> dtrack;
        $arr = array(
        );
        $res = $dtrack -> describeDtrackBackup($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListDtrackBackup()
    {
        $dtrack = $this -> dtrack;
        $arr = array(
            'where_args'=>array(
                '0'=>array(
                    'wk_uuid'=>'',
                    'group_uuid'=>'',),),
            'bind_group_uuid'=>'',
        );
        $res = $dtrack -> listDtrackBackup($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListDtrackBackupStatus()
    {
        $dtrack = $this -> dtrack;
        $arr = array(
            'policy_uuids'=>array(),
        );
        $res = $dtrack -> listDtrackBackupStatus($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDeleteDtrackBackup()
    {
        $dtrack = $this -> dtrack;
        $arr = array(
            'delete_mirror'=>1,
            'policy_uuids'=>array(),
            'force'=>1,
        );
        $res = $dtrack -> deleteDtrackBackup($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testTake_snapshotDtrackBackup()
    {
        $dtrack = $this -> dtrack;
        $arr = array(
            'policy_uuid'=>'',
            'snapshot_name'=>'',
            'quiesce'=>1,
            'fs_analyze'=>0,
            'base_on_driver'=>0,
            'sync_after_scan'=>0,
            'reason'=>128,
            'snapshot'=>0,
            'operate'=>'',
            'force'=>1,
            'snapshot_clone_name'=>'',
        );
        $res = $dtrack -> take_snapshotDtrackBackup($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDelete_snapshotDtrackBackup()
    {
        $dtrack = $this -> dtrack;
        $arr = array(
            'policy_uuid'=>'',
            'snapshot_name'=>'',
            'quiesce'=>1,
            'fs_analyze'=>0,
            'base_on_driver'=>0,
            'sync_after_scan'=>0,
            'reason'=>128,
            'snapshot'=>0,
            'operate'=>'',
            'force'=>1,
            'snapshot_clone_name'=>'',
        );
        $res = $dtrack -> delete_snapshotDtrackBackup($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testTake_snapshot_cloneDtrackBackup()
    {
        $dtrack = $this -> dtrack;
        $arr = array(
            'policy_uuid'=>'',
            'snapshot_name'=>'',
            'quiesce'=>1,
            'fs_analyze'=>0,
            'base_on_driver'=>0,
            'sync_after_scan'=>0,
            'reason'=>128,
            'snapshot'=>0,
            'operate'=>'',
            'force'=>1,
            'snapshot_clone_name'=>'',
        );
        $res = $dtrack -> take_snapshot_cloneDtrackBackup($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDelete_snapshot_cloneDtrackBackup()
    {
        $dtrack = $this -> dtrack;
        $arr = array(
            'policy_uuid'=>'',
            'snapshot_name'=>'',
            'quiesce'=>1,
            'fs_analyze'=>0,
            'base_on_driver'=>0,
            'sync_after_scan'=>0,
            'reason'=>128,
            'snapshot'=>0,
            'operate'=>'',
            'force'=>1,
            'snapshot_clone_name'=>'',
        );
        $res = $dtrack -> delete_snapshot_cloneDtrackBackup($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testScanDtrackBackup()
    {
        $dtrack = $this -> dtrack;
        $arr = array(
            'policy_uuid'=>'',
            'snapshot_name'=>'',
            'quiesce'=>1,
            'fs_analyze'=>0,
            'base_on_driver'=>0,
            'sync_after_scan'=>0,
            'reason'=>128,
            'snapshot'=>0,
            'operate'=>'',
            'force'=>1,
            'snapshot_clone_name'=>'',
        );
        $res = $dtrack -> scanDtrackBackup($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testCancel_scanDtrackBackup()
    {
        $dtrack = $this -> dtrack;
        $arr = array(
            'policy_uuid'=>'',
            'snapshot_name'=>'',
            'quiesce'=>1,
            'fs_analyze'=>0,
            'base_on_driver'=>0,
            'sync_after_scan'=>0,
            'reason'=>128,
            'snapshot'=>0,
            'operate'=>'',
            'force'=>1,
            'snapshot_clone_name'=>'',
        );
        $res = $dtrack -> cancel_scanDtrackBackup($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testSyncDtrackBackup()
    {
        $dtrack = $this -> dtrack;
        $arr = array(
            'policy_uuid'=>'',
            'snapshot_name'=>'',
            'quiesce'=>1,
            'fs_analyze'=>0,
            'base_on_driver'=>0,
            'sync_after_scan'=>0,
            'reason'=>128,
            'snapshot'=>0,
            'operate'=>'',
            'force'=>1,
            'snapshot_clone_name'=>'',
        );
        $res = $dtrack -> syncDtrackBackup($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testCancel_syncDtrackBackup()
    {
        $dtrack = $this -> dtrack;
        $arr = array(
            'policy_uuid'=>'',
            'snapshot_name'=>'',
            'quiesce'=>1,
            'fs_analyze'=>0,
            'base_on_driver'=>0,
            'sync_after_scan'=>0,
            'reason'=>128,
            'snapshot'=>0,
            'operate'=>'',
            'force'=>1,
            'snapshot_clone_name'=>'',
        );
        $res = $dtrack -> cancel_syncDtrackBackup($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testSuspendDtrackBackup()
    {
        $dtrack = $this -> dtrack;
        $arr = array(
            'policy_uuid'=>'',
            'snapshot_name'=>'',
            'quiesce'=>1,
            'fs_analyze'=>0,
            'base_on_driver'=>0,
            'sync_after_scan'=>0,
            'reason'=>128,
            'snapshot'=>0,
            'operate'=>'',
            'force'=>1,
            'snapshot_clone_name'=>'',
        );
        $res = $dtrack -> suspendDtrackBackup($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testResumeDtrackBackup()
    {
        $dtrack = $this -> dtrack;
        $arr = array(
            'policy_uuid'=>'',
            'snapshot_name'=>'',
            'quiesce'=>1,
            'fs_analyze'=>0,
            'base_on_driver'=>0,
            'sync_after_scan'=>0,
            'reason'=>128,
            'snapshot'=>0,
            'operate'=>'',
            'force'=>1,
            'snapshot_clone_name'=>'',
        );
        $res = $dtrack -> resumeDtrackBackup($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testAddDtrackBackupHistory()
    {
        $dtrack = $this -> dtrack;
        $arr = array(
            'type'=>1,
            'status'=>1,
            'create_time'=>1563257893,
            'end_time'=>1563257893,
            'job_id'=>'',
            'reason'=>1,
            'sync_option'=>array(
                'analyze_fs'=>0,
                'take_snapshot'=>0,
                'quiesce'=>0,),
            'scan_option'=>array(
                'analyze_fs'=>0,
                'base_on_driver'=>1,
                'sync_after_scan'=>1,),
            'sync_statistic'=>array(
                'read_sector'=>1,
                'send_sector'=>1,
                'write_sector'=>1,),
            'scan_statistic'=>array(
                'local_scan_bit'=>1,
                'remote_scan_bit'=>1,
                'total_delta_bit'=>1,
                'clean_bit'=>1,),
            'Content-Type'=>'application/json',
        );
        $res = $dtrack -> addDtrackBackupHistory($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListDtrackBackupHistory()
    {
        $dtrack = $this -> dtrack;
        $arr = array(
            'start'=>1,
            'end'=>1,
            'page'=>1,
            'limit'=>1,
        );
        $res = $dtrack -> listDtrackBackupHistory($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListDtrackBackupSnap()
    {
        $dtrack = $this -> dtrack;
        $arr = array(
        );
        $res = $dtrack -> listDtrackBackupSnap($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDtrackBackupCtlDrv()
    {
        $dtrack = $this -> dtrack;
        $arr = array(
            'node_uuid'=>'',
            'ctl_flag'=>'INSTALL_DRIVER',
        );
        $res = $dtrack -> dtrackBackupCtlDrv($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDtrackBackupRebootSystem()
    {
        $dtrack = $this -> dtrack;
        $arr = array(
            'node_uuid'=>'',
        );
        $res = $dtrack -> dtrackBackupRebootSystem($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDtrackBackupFeatureMatrix()
    {
        $dtrack = $this -> dtrack;
        $arr = array(
            'node_uuid'=>'',
        );
        $res = $dtrack -> dtrackBackupFeatureMatrix($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }


    public function testDescribeDtrackNodeInitiatorName()
    {
        $dtrack = $this -> dtrack;
        $arr = array(
            'config_addr'=>'',
            'node_uuid'=>'',
        );
        $res = $dtrack -> describeDtrackNodeInitiatorName($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeDtrackNodeInitiatorStatus()
    {
        $dtrack = $this -> dtrack;
        $arr = array(
            'config_addr'=>'',
            'node_uuid'=>'',
        );
        $res = $dtrack -> describeDtrackNodeInitiatorStatus($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeDtrackNodeInitiatorVersion()
    {
        $dtrack = $this -> dtrack;
        $arr = array(
            'node_uuid'=>'',
            'config_addr'=>'',
        );
        $res = $dtrack -> describeDtrackNodeInitiatorVersion($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }


    public function testListDtrackRecoveryTarget()
    {
        $dtrack = $this -> dtrack;
        $arr = array(
            'node_uuid'=>'',
            'address'=>'',
        );
        $res = $dtrack -> listDtrackRecoveryTarget($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeDtrackRecoveryTargetDiscovered()
    {
        $dtrack = $this -> dtrack;
        $arr = array(
            'node_uuid'=>'',
            'address'=>'',
        );
        $res = $dtrack -> describeDtrackRecoveryTargetDiscovered($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListDtrackGroupSnap()
    {
        $dtrack = $this -> dtrack;
        $arr = array(
        );
        $res = $dtrack -> listDtrackGroupSnap($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}