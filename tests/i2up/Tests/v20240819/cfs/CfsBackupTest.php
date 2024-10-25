<?php
namespace i2up\Test\v20240819\cfs;

use i2up\cfs\v20240819\CfsBackup;
use i2up\common\Auth;
                
class CfsBackupTest extends \PHPUnit_Framework_TestCase
 {
    private $cfsBackup;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> cfsBackup = new CfsBackup(new Auth());
    }

    public function testCreateCfsBackup()
    {
        $cfsBackup = $this -> cfsBackup;
        $arr = array(
            'cfs_backup'=>array(
            'mirr_sync_attr'=>1,
            'oph_path'=>'E:\\test4\\',
            'rep_name'=>'rep_backup',
            'bk_path_policy'=>1,
            'mirr_open_type'=>0,
            'compress'=>0,
            'encrypt_switch'=>0,
            'auto_start'=>1,
            'wk_path'=>array(
            '0'=>'E:\\test\\',),
            'band_width'=>'',
            'mirr_sync_flag'=>0,
            'bk_path'=>array(
            '0'=>'E:\\test2\\',),
            'wk_uuid'=>'B8566905-411E-B2CD-A742-77B1346D8E84',
            'mirr_file_check'=>0,
            'rep_type'=>0,
            'file_type_filter_switch'=>0,
            'file_type_filter'=>'',
            'oph_policy'=>2,
            'mirr_skip'=>0,
            'bk_uuid'=>'B8566905-411E-B2CD-A742-77B1346D8E84',
            'excl_path'=>array(),
            'mirr_sched'=>'',
            'bkup_one_time'=>1515568566,
            'mirr_sched_switch'=>0,
            'ct_name_type'=>0,
            'ct_name_str1'=>'',
            'ct_name_str2'=>'',
            'ct_name_str3'=>'',
            'ct_name_str4'=>'',
            'thread_num'=>0,
            'latency_threshold'=>1,
            'mir_detect_script'=>'',
            'data_ip_uuid'=>'B8166905-411E-B2CD-A742-77B1346D8E84',
            'bk_file_crypt'=>0,
            'mir_detect_src_script'=>'',
            'traversing_sync'=>1,
            'encrypt'=>1,
            'compress_switch'=>1,
            'rep_uuid'=>'B8166905-411E-B2CD-A742-77B1346D8E84',
            'buf_in_bk'=>1,
            'rep_oph_policy'=>0,
            'rep_oph_path'=>'',
            'rep_oph_switch'=>1,
            'src_cfs_uuid'=>'',
            'tgt_cfs_uuid'=>'',
            'src_filesystem_id'=>'',
            'tgt_filesystem_id'=>'',
            'proxy_uuid'=>'',
            'mirr_hash_type'=>1,
            'src_zone_id'=>'',
            'tgt_zone_id'=>'',),
        );
        
        
        $res = $cfsBackup -> createCfsBackup($arr);
        $this->do_assert($res);
    }

    public function testModifyCfsBackup()
    {
        $cfsBackup = $this -> cfsBackup;
        $arr = array(
            'cfs_backup'=>array(
            'mirr_sync_attr'=>1,
            'oph_path'=>'E:\\test4\\',
            'rep_name'=>'rep_backup',
            'bk_path_policy'=>1,
            'mirr_open_type'=>0,
            'compress'=>0,
            'encrypt_switch'=>0,
            'auto_start'=>1,
            'wk_path'=>array(
            '0'=>'E:\\test\\',),
            'band_width'=>'',
            'mirr_sync_flag'=>0,
            'bk_path'=>array(
            '0'=>'E:\\test2\\',),
            'wk_uuid'=>'B8566905-411E-B2CD-A742-77B1346D8E84',
            'mirr_file_check'=>0,
            'rep_type'=>0,
            'file_type_filter_switch'=>0,
            'file_type_filter'=>'',
            'oph_policy'=>2,
            'mirr_skip'=>'0',
            'bk_uuid'=>'B8566905-411E-B2CD-A742-77B1346D8E84',
            'excl_path'=>array(),
            'mirr_sched'=>'',
            'bkup_one_time'=>1515568566,
            'mirr_sched_switch'=>0,
            'ct_name_type'=>0,
            'ct_name_str1'=>'',
            'ct_name_str2'=>'',
            'ct_name_str3'=>'',
            'ct_name_str4'=>'',
            'thread_num'=>0,
            'latency_threshold'=>1,
            'mir_detect_script'=>'',
            'data_ip_uuid'=>'B8166905-411E-B2CD-A742-77B1346D8E84',
            'bk_file_crypt'=>0,
            'mir_detect_src_script'=>'',
            'traversing_sync'=>1,
            'encrypt'=>1,
            'compress_switch'=>1,
            'rep_uuid'=>'B8166905-411E-B2CD-A742-77B1346D8E84',
            'buf_in_bk'=>1,
            'rep_oph_policy'=>0,
            'rep_oph_path'=>'',
            'rep_oph_switch'=>1,
            'src_cfs_uuid'=>'',
            'tgt_cfs_uuid'=>'',
            'src_filesystem_id'=>'',
            'tgt_filesystem_id'=>'',
            'proxy_uuid'=>'',
            'mirr_hash_type'=>1,
            'random_str'=>'',
            'src_zone_id'=>'',
            'tgt_zone_id'=>'',),
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $cfsBackup -> modifyCfsBackup($arr);
        $this->do_assert($res);
    }

    public function testDescribeCfsBackup()
    {
        $cfsBackup = $this -> cfsBackup;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $cfsBackup -> describeCfsBackup($arr);
        $this->do_assert($res);
    }

    public function testListCfsBackup()
    {
        $cfsBackup = $this -> cfsBackup;
        $arr = array(
            'page'=>1,
            'limit'=>1,
            'search_field'=>'',
            'where_args'=>array(
            'status'=>'NO_MOVE',),
            'search_value'=>'',
        );
        
        
        $res = $cfsBackup -> listCfsBackup($arr);
        $this->do_assert($res);
    }

    public function testDeleteCfsBackup()
    {
        $cfsBackup = $this -> cfsBackup;
        $arr = array(
            'rep_uuids'=>array(),
            'force'=>1,
            'del_policy'=>1,
            'recycle'=>1,
        );
        
        
        $res = $cfsBackup -> deleteCfsBackup($arr);
        $this->do_assert($res);
    }

    public function testStartCfsBackup()
    {
        $cfsBackup = $this -> cfsBackup;
        $arr = array(
            'rep_uuids'=>array(),
            'operate'=>'',
        );
        
        
        $res = $cfsBackup -> startCfsBackup($arr);
        $this->do_assert($res);
    }

    public function testStopCfsBackup()
    {
        $cfsBackup = $this -> cfsBackup;
        $arr = array(
            'rep_uuids'=>array(),
            'operate'=>'',
        );
        
        
        $res = $cfsBackup -> stopCfsBackup($arr);
        $this->do_assert($res);
    }

    public function testStartSyncCfsBackup()
    {
        $cfsBackup = $this -> cfsBackup;
        $arr = array(
            'rep_uuids'=>array(),
            'operate'=>'',
        );
        
        
        $res = $cfsBackup -> startSyncCfsBackup($arr);
        $this->do_assert($res);
    }

    public function testStopSyncCfsBackup()
    {
        $cfsBackup = $this -> cfsBackup;
        $arr = array(
            'rep_uuids'=>array(),
            'operate'=>'',
        );
        
        
        $res = $cfsBackup -> stopSyncCfsBackup($arr);
        $this->do_assert($res);
    }

    public function testMoveCfsBackup()
    {
        $cfsBackup = $this -> cfsBackup;
        $arr = array(
            'rep_uuids'=>array(),
            'operate'=>'',
        );
        
        
        $res = $cfsBackup -> moveCfsBackup($arr);
        $this->do_assert($res);
    }

    public function testListCfsBackupStatus()
    {
        $cfsBackup = $this -> cfsBackup;
        $arr = array(
            'rep_uuids'=>array(),
            'force_refresh'=>'',
        );
        
        
        $res = $cfsBackup -> listCfsBackupStatus($arr);
        $this->do_assert($res);
    }

    public function testListCfsBackupSyncStatus()
    {
        $cfsBackup = $this -> cfsBackup;
        $arr = array(
            'rep_uuid'=>array(),
        );
        
        
        $res = $cfsBackup -> listCfsBackupSyncStatus($arr);
        $this->do_assert($res);
    }

    public function testGetWatingMoveNumber()
    {
        $cfsBackup = $this -> cfsBackup;
        $arr = array(
            'node_uuid'=>'',
        );
        
        
        $res = $cfsBackup -> getWatingMoveNumber($arr);
        $this->do_assert($res);
    }

    public function testListCfsBackupHistory()
    {
        $cfsBackup = $this -> cfsBackup;
        $arr = array(
            'rep_uuid'=>'',
        );
        
        
        $res = $cfsBackup -> listCfsBackupHistory($arr);
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