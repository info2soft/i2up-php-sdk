<?php
namespace i2up\Test\v20240228\rep;

use i2up\rep\v20240228\RepBackup;
use i2up\common\Auth;
                
class RepBackupTest extends \PHPUnit_Framework_TestCase
 {
    private $repBackup;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> repBackup = new RepBackup(new Auth());
    }

    public function testListRepBackupCdpZfs()
    {
        $repBackup = $this -> repBackup;
        $arr = array(
            'bk_uuid'=>'',
        );
        $res = $repBackup -> listRepBackupCdpZfs($arr);
        $this->do_assert($res);
    }

    public function testRepBackupVerifyDevice()
    {
        $repBackup = $this -> repBackup;
        $arr = array(
            'node_uuid'=>'',
            'dir_name'=>'',
        );
        $res = $repBackup -> repBackupVerifyDevice($arr);
        $this->do_assert($res);
    }

    public function testGetRepBackupCdpSnapNum()
    {
        $repBackup = $this -> repBackup;
        $arr = array(
            'bk_uuid'=>'',
            'cdp_zfs_pool'=>'',
        );
        $res = $repBackup -> getRepBackupCdpSnapNum($arr);
        $this->do_assert($res);
    }

    public function testCreateRepBackup()
    {
        $repBackup = $this -> repBackup;
        $arr = array(
            'rep_backup' => array(
                'mirr_sync_attr' => 1,
                'cdp_path' => 'E:\\test3\\',
                'oph_path' => 'E:\\test4\\',
                'secret_key' => '',
                'rep_name' => 'rep_backup',
                'snapshot_policy' => 0,
                'bk_path_policy' => 1,
                'cdp_process_time' => '05:07:28',
                'mirr_open_type' => 0,
                'compress' => 0,
                'cdp_switch' => 1,
                'snapshot_start' => 1546913351,
                'cdp_baseline_format' => 0,
                'cdp_bl_bkup_switch' => 0,
                'encrypt_switch' => 0,
                'auto_start' => 1,
                'disk_limit' => '0',
                'wk_path' => array(
                    '0' => 'E:\\test\\',),
                'band_width' => '',
                'snapshot_limit' => 24,
                'mirr_sync_flag' => 0,
                'bk_path' => array(
                    '0' => 'E:\\test2\\',),
                'wk_uuid' => 'B8566905-411E-B2CD-A742-77B1346D8E84',
                'mirr_file_check' => 0,
                'cdp_bl_sched_switch' => 1,
                'del_policy' => 1,
                'cmp_switch' => 0,
                'rep_type' => 0,
                'snapshot_interval' => 1,
                'file_type_filter_switch' => 0,
                'snapshot_switch' => 1,
                'file_type_filter' => '',
                'cdp_param' => '3,30,0',
                'oph_policy' => 2,
                'mirr_skip' => '0',
                'bk_uuid' => 'B8566905-411E-B2CD-A742-77B1346D8E84',
                'cdp_bl_sched' => '2|1|0|5',
                'excl_path' => array(),
                'mirr_sched' => '',
                'bkup_one_time' => 1515568566,
                'mirr_sched_switch' => 0,
                'cdp_snap_on' => 0,
                'cdp_snap_interval' => 30,
                'cdp_snap_count' => 240,
                'ct_name_type' => 0,
                'ct_name_str1' => '',
                'ct_name_str2' => '',
                'ct_name_str3' => '',
                'ct_name_str4' => '',
                'cmp_file_check' => 0,
                'cmp_schedule' => array(
                    '0' => array(
                        'sched_every' => 1,
                        'sched_time' => array(
                            '0' => '15:47',),
                        'sched_day' => array(
                            '0' => 17,),),),
                'thread_num' => '0',
                'cdp_zfs_pool' => '',
                'cdp_data_inc_switch' => 0,
                'cdp_data_inc' => 0,
                'cdp_data_inc_flag' => '',
                'latency_threshold' => 1,
                'mscs_autostart' => 1,
                'mir_detect_script' => '',
                'mscs_group' => array(),
                'filter_delete' => 0,
                'cmp_limit' => 1,
                'data_ip_uuid' => 'B8166905-411E-B2CD-A742-77B1346D8E84',
                'bk_file_crypt' => 0,
                'mir_detect_src_script' => '',
                'bk_crypt_type' => 1,
                'bk_crypt_key' => '',
                'traversing_sync' => 1,
                'encrypt' => 1,
                'compress_switch' => 1,
                'rep_uuid' => 'B8166905-411E-B2CD-A742-77B1346D8E84',
                'cdp_path_switch' => 1,
                'pool_uuid' => '',
                'buf_in_bk' => 1,
                'rep_oph_policy' => 0,
                'rep_oph_path' => '',
                'rep_oph_switch' => 1,
                'network_type' => 1,
                'channel_uuid' => '',
                'cmp_type' => 1,),
        );
        $res = $repBackup -> createRepBackup($arr);
        $this->do_assert($res);
    }

    public function testDescribeRepBackup()
    {
        $repBackup = $this -> repBackup;
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111'
        );
        $res = $repBackup -> describeRepBackup($arr);
        $this->do_assert($res);
    }

    public function testModifyRepBackup()
    {
        $repBackup = $this -> repBackup;
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111',
            'rep_backup' => array(
                'cdp_param' => '',
                'rep_type' => 0,
                'bkup_one_time' => 1515568566,
                'snapshot_switch' => 0,
                'cdp_baseline_format' => '',
                'mirr_sync_flag' => '0',
                'mirr_open_type' => '0',
                'auto_start' => '1',
                'snapshot_policy' => '0',
                'cdp_bl_sched_switch' => 0,
                'snapshot_interval' => '0',
                'bk_path' => 'D:\\DataTest2\\',
                'snapshot_start' => 1515568566,
                'random_str' => '0DD4E727-70AB-62C6-BEB5-D012DFAE46E3',
                'cdp_path' => '',
                'file_type_filter_switch' => 0,
                'cmp_schedule' => array(
                    'sched_time' => '02:58',
                    'sched_day' => 23,
                    'sched_every' => 2,
                ),
                'snapshot_limit' => '24',
                'cmp_switch' => 0,
                'oph_path' => '',
                'secret_key' => '',
                'excl_path' => array(),
                'schedule' => '',
                'policy_interval' => 1,
                'cdp_switch' => '',
                'wk_uuid' => '0DD4E727-70AB-62C6-BEB5-D012DFAE46E3',
                'policy_operation' => 1,
                'wk_path' => 'D:\\DataTest\\',
                'mirr_skip' => '0',
                'policy_limit' => 1,
                'cdp_bl_sched' => '',
                'del_policy' => '1',
                'mirr_sched' => '3*03:00-14:00,2*02:00-15:00',
                'encrypt_switch' => '0',
                'band_width' => '3*03:00-14:00*2m,2*02:00-15:00*80m',
                'compress' => '0',
                'mirr_sync_attr' => '1',
                'policy_start' => 1,
                'cdp_process_time' => '',
                'bk_path_policy' => '0',
                'cdp_bl_bkup_switch' => 0,
                'file_type_filter' => '',
                'disk_limit' => '0',
                'oph_policy' => '0',
                'mirr_file_check' => '0',
                'cmp_file_check' => 0,
                'mirr_sched_switch' => 0,
                'thread_num' => '0',
                'cdp_data_inc' => 1,
                'cdp_data_inc_switch' => 1,
                'cdp_data_inc_flag' => '',
                'mscs_autostart' => 1,
                'mir_detect_script' => '',
                'filter_delete' => 0,
                'batch_adv_switch' => 1,
                'batch_encrypt_switch' => 1,
                'batch_mirr_switch' => '',
                'batch_switch' => 1,
                'batch_cdp_switch' => '',
                'batch_cmp_switch' => '',
                'cmp_limit' => 1,
                'data_ip_uuid' => 'B8166905-411E-B2CD-A742-77B1346D8E84',
                'compress_switch' => 1,
                'cmp_type' => 1,
                'rep_cmp_uuid' => '',
            ),
        );
        $res = $repBackup -> modifyRepBackup($arr);
        $this->do_assert($res);
    }

    public function testDeleteRepBackup()
    {
        $repBackup = $this -> repBackup;
        $arr = array(
            'rep_uuids'=>array(
            '0'=>'11111111-1111-1111-1111-111111111111',),
            'force'=>1,
            'del_policy'=>0,
            'recycle'=>0,
        );
        $res = $repBackup -> deleteRepBackup($arr);
        $this->do_assert($res);
    }

    public function testStartRepBackup()
    {
        $repBackup = $this -> repBackup;
        $arr = array(
            'operate'=>'start',
            'rep_uuids'=>array(),
        );
        $res = $repBackup -> startRepBackup($arr);
        $this->do_assert($res);
    }

    public function testStopRepBackup()
    {
        $repBackup = $this -> repBackup;
        $arr = array(
            'operate'=>'stop',
            'rep_uuids'=>array(),
        );
        $res = $repBackup -> stopRepBackup($arr);
        $this->do_assert($res);
    }

    public function testStartSyncRepBackup()
    {
        $repBackup = $this -> repBackup;
        $arr = array(
            'operate'=>'start_sync',
            'rep_uuids'=>array(),
        );
        $res = $repBackup -> startSyncRepBackup($arr);
        $this->do_assert($res);
    }

    public function testStopSyncRepBackup()
    {
        $repBackup = $this -> repBackup;
        $arr = array(
            'operate'=>'stop_sync',
            'rep_uuids'=>array(),
        );
        $res = $repBackup -> stopSyncRepBackup($arr);
        $this->do_assert($res);
    }

    public function testListRepBackupStatus()
    {
        $repBackup = $this -> repBackup;
        $arr = array(
            'rep_uuids'=>array(
                '0'=>'11111111-1111-1111-1111-111111111111',
                '1'=>'11111111-1111-1111-1111-111111111112',
            ),
            'force_refresh'=>1,
        );
        $res = $repBackup -> listRepBackupStatus($arr);
        $this->do_assert($res);
    }

    public function testListRepBackupSyncStatus()
    {
        $repBackup = $this -> repBackup;
        $arr = array(
            'rep_uuid'=>'',
        );
        $res = $repBackup -> listRepBackupSyncStatus($arr);
        $this->do_assert($res);
    }

    public function testListRepBackup()
    {
        $repBackup = $this -> repBackup;
        $arr = array(
            'search_value'=>'',
            'limit'=>15,
            'type'=>1,
            'page'=>1,
            'search_field'=>'',
            'status'=>'',
        );
        $res = $repBackup -> listRepBackup($arr);
        $this->do_assert($res);
    }

    public function testListRepBackupBaseLine()
    {
        $repBackup = $this -> repBackup;
        $arr = array(
            'page'=>1,
            'limit'=>10,
            'rep_uuid'=>'',
            'rc_method'=>0,
            'data_path'=>'',
            'bk_uuid'=>'',
            'cdp_time_zone'=>'',
        );
        $res = $repBackup -> listRepBackupBaseLine($arr);
        $this->do_assert($res);
    }

    public function testDeleteRepBackupBaseline()
    {
        $repBackup = $this -> repBackup;
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111',
            'cdp_time_list'=>'2017-11-17 17:24:14',
        );
        $res = $repBackup -> deleteRepBackupBaseline($arr);
        $this->do_assert($res);
    }

    public function testListRepBackupOrphan()
    {
        $repBackup = $this -> repBackup;
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111',
            'path'=>'',
        );
        $res = $repBackup -> listRepBackupOrphan($arr);
        $this->do_assert($res);
    }

    public function testDeleteRepBackupOrphan()
    {
        $repBackup = $this -> repBackup;
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111',
            'path'=>'/',
            'orphan_list'=>array(
                '0'=>'',
            ),
        );
        $res = $repBackup -> deleteRepBackupOrphan($arr);
        $this->do_assert($res);
    }

    public function testDownloadRepBackupOrphan()
    {
        $repBackup = $this -> repBackup;
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111',
            'orphan'=>'',
            'path'=>'/',
        );
        $res = $repBackup -> downloadRepBackupOrphan($arr);
        $this->do_assert($res);
    }

    public function testListRepBackupSnapshot()
    {
        $repBackup = $this -> repBackup;
        $arr = array(
            'page'=>1,
            'limit'=>10,
            'rc_method'=>'',
            'rep_uuid'=>'',
            'bk_uuid'=>'',
            'data_path'=>'',
        );
        $res = $repBackup -> listRepBackupSnapshot($arr);
        $this->do_assert($res);
    }

    public function testDeleteRepBackupSnapshot()
    {
        $repBackup = $this -> repBackup;
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111',
            'snapshot_names'=>array(),
        );
        $res = $repBackup -> deleteRepBackupSnapshot($arr);
        $this->do_assert($res);
    }

    public function testCreateRepBackupSnapshot()
    {
        $repBackup = $this -> repBackup;
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111'
        );
        $res = $repBackup -> createRepBackupSnapshot($arr);
        $this->do_assert($res);
    }

    public function testListRepBackupMscsGroup()
    {
        $repBackup = $this -> repBackup;
        $arr = array(
            'node_uuid'=>'',
        );
        $res = $repBackup -> listRepBackupMscsGroup($arr);
        $this->do_assert($res);
    }

    public function testRepBackup()
    {
        $repBackup = $this -> repBackup;
        $arr = array(
            'limit'=>10,
            'type'=>0,
            'page'=>1,
        );
        $res = $repBackup -> repBackup($arr);
        $this->do_assert($res);
    }

    public function testBatchCreateRepBackup()
    {
        $repBackup = $this -> repBackup;
        $arr = array(
            'base_info_list'=>array(
            'mirr_sync_attr'=>'1',
            'cdp_path'=>'E: est3/',
            'oph_path'=>'E: est4/',
            'secret_key'=>'',
            'rep_prefix'=>'bk_',
            'snapshot_policy'=>'0',
            'bk_path_policy'=>'1',
            'cdp_process_time'=>'05:07:28',
            'mirr_open_type'=>'0',
            'compress'=>'0',
            'cdp_switch'=>'1',
            'snapshot_start'=>1546913351,
            'cdp_baseline_format'=>'0',
            'cdp_bl_bkup_switch'=>0,
            'encrypt_switch'=>'0',
            'auto_start'=>'1',
            'disk_limit'=>'0',
            'band_width'=>'',
            'snapshot_limit'=>'24',
            'mirr_sync_flag'=>'0',
            'mirr_file_check'=>'0',
            'cdp_bl_sched_switch'=>1,
            'del_policy'=>'1',
            'cmp_switch'=>0,
            'rep_type'=>0,
            'snapshot_interval'=>'1',
            'file_type_filter_switch'=>0,
            'snapshot_switch'=>1,
            'file_type_filter'=>'',
            'cdp_param'=>'3,30,0',
            'oph_policy'=>'2',
            'mirr_skip'=>'0',
            'cdp_bl_sched'=>'2|1|0|5',
            'mirr_sched'=>'',
            'bkup_one_time'=>1515568566,
            'mirr_sched_switch'=>0,
            'cdp_snap_on'=>0,
            'cdp_snap_interval'=>30,
            'cdp_snap_count'=>240,
            'ct_name_type'=>0,
            'ct_name_str1'=>'',
            'ct_name_str2'=>'',
            'ct_name_str3'=>'',
            'ct_name_str4'=>'',
            'cmp_file_check'=>0,
            'cmp_schedule'=>array(
            '0'=>array(
            'sched_every'=>1,
            'sched_time'=>array(
            '0'=>'08:23',),
            'sched_day'=>array(
            '0'=>4,),),),
            'thread_num'=>'0',
            'cdp_zfs_pool'=>'',
            'cdp_data_inc_switch'=>0,
            'cdp_data_inc'=>0,
            'cdp_data_inc_flag'=>'',
            'latency_threshold'=>1,
            'mscs_autostart'=>1,
            'mir_detect_script'=>'',
            'mscs_group'=>array(),
            'rep_sufix'=>'',
            'variable_type'=>'node',
            'batch_name'=>'',
            'compress_switch'=>0,
            'cmp_type'=>1,
            'cmp_limit'=>1,),
            'rep_backup'=>array(
            '0'=>array(
            'wk_uuid'=>'',
            'bk_uuid'=>'',
            'wk_path'=>array(),
            'bk_path'=>array(),
            'excl_path'=>array(),),),
        );
        $res = $repBackup -> batchCreateRepBackup($arr);
        $this->do_assert($res);
    }

    public function testCheckBkPath()
    {
        $repBackup = $this -> repBackup;
        $arr = array(
            'bk_uuid'=>'',
            'bk_path'=>array(),
        );
        $res = $repBackup -> checkBkPath($arr);
        $this->do_assert($res);
    }

    public function testChkRules()
    {
        $repBackup = $this -> repBackup;
        $arr = array(
            'wk_uuid'=>'',
            'bk_uuid'=>'',
            'bk_path'=>array(),
            'chk_list'=>array(
            '0'=>'bk_path',
            '1'=>'rules',
            '2'=>'wk_path',),
            'has_reverse'=>1,
            'rep_type'=>1,
            'wk_path'=>array(),
        );
        $res = $repBackup -> chkRules($arr);
        $this->do_assert($res);
    }

    private function do_assert($res)
    {
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}