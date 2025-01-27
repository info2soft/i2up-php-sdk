<?php
namespace i2up\Test\v20250123\bigdata;

use i2up\bigdata\v20250123\Recovery;
use i2up\common\Auth;
                
class RecoveryTest extends \PHPUnit_Framework_TestCase
 {
    private $recovery;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> recovery = new Recovery(new Auth());
    }

    public function testListBackupHistory()
    {
        $recovery = $this -> recovery;
        $arr = array(
            'bk_path'=>array(),
            'bk_node_uuid'=>'',
            'bk_rule_uuid'=>'',
            'cluster_config_path'=>'',
            'obs_settings'=>array(
            'sto_uuid'=>'',
            'bucket'=>'',),
            'bk_type'=>'',
        );
        
        
        $res = $recovery -> listBackupHistory($arr);
        $this->do_assert($res);
    }

    public function testCreateBigdataRecovery()
    {
        $recovery = $this -> recovery;
        $arr = array(
            'bigdata_recovery'=>array(
            'rule_name'=>'',
            'rule_uuid'=>'',
            'bk_uuid'=>'F85DFEC0-149E-373D-0B9E-3DA9A5C43940',
            'bk_path'=>'备份数据目录',
            'baked_paths'=>'要恢复的目录',
            'rc_data_path'=>'目标平台目录',
            'rc_point'=>'还原时间点',
            'data_type'=>'',
            'cred_switch'=>'',
            'cred_uuid'=>'',
            'auth_user'=>'',
            'auth_key'=>'',
            'mirr_file_check'=>'0',
            'mirr_sync_flag'=>'',
            'sel_db'=>array(),
            'sel_tbl'=>array(),
            'hive_bktype'=>1,
            'rc_path_policy'=>'',
            'platform_uuid'=>'',
            'sel_part'=>array(),
            'approver_uuid'=>'',
            'band_width'=>'',),
            'obs_settings'=>array(
            'sto_uuid'=>'',
            'bucket'=>'',
            'bucket_path'=>'',),
        );
        
        
        $res = $recovery -> createBigdataRecovery($arr);
        $this->do_assert($res);
    }

    public function testDescribeBigdataRecovery()
    {
        $recovery = $this -> recovery;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $recovery -> describeBigdataRecovery($arr);
        $this->do_assert($res);
    }

    public function testDeleteBigdataRecovery()
    {
        $recovery = $this -> recovery;
        $arr = array(
            'uuids'=>'',
            'force'=>1,
        );
        
        
        $res = $recovery -> deleteBigdataRecovery($arr);
        $this->do_assert($res);
    }

    public function testListBigdataRecovery()
    {
        $recovery = $this -> recovery;
        $arr = array(
            'search_field'=>'',
            'limit'=>10,
            'page'=>1,
            'search_value'=>'',
            'type'=>0,
        );
        
        
        $res = $recovery -> listBigdataRecovery($arr);
        $this->do_assert($res);
    }

    public function testListBigdataRecoveryStatus()
    {
        $recovery = $this -> recovery;
        $arr = array(
            'uuids'=>array(),
            'force_refresh'=>1,
        );
        
        
        $res = $recovery -> listBigdataRecoveryStatus($arr);
        $this->do_assert($res);
    }

    public function testStartBigdataRecovery()
    {
        $recovery = $this -> recovery;
        $arr = array(
            'operate'=>'',
            'uuids'=>'[C6335F62-2565-1957-4BB9-587F2FF46B00]',
        );
        
        
        $res = $recovery -> startBigdataRecovery($arr);
        $this->do_assert($res);
    }

    public function testStopBigdataRecovery()
    {
        $recovery = $this -> recovery;
        $arr = array(
            'operate'=>'',
            'uuids'=>'[C6335F62-2565-1957-4BB9-587F2FF46B00]',
        );
        
        
        $res = $recovery -> stopBigdataRecovery($arr);
        $this->do_assert($res);
    }

    public function testPauseBigdataRecovery()
    {
        $recovery = $this -> recovery;
        $arr = array(
            'operate'=>'',
            'uuids'=>'[C6335F62-2565-1957-4BB9-587F2FF46B00]',
        );
        
        
        $res = $recovery -> pauseBigdataRecovery($arr);
        $this->do_assert($res);
    }

    public function testResumeBigdataRecovery()
    {
        $recovery = $this -> recovery;
        $arr = array(
            'operate'=>'',
            'uuids'=>'[C6335F62-2565-1957-4BB9-587F2FF46B00]',
        );
        
        
        $res = $recovery -> resumeBigdataRecovery($arr);
        $this->do_assert($res);
    }

    public function testGetBigdataRecoveryPartitionInfoDetail()
    {
        $recovery = $this -> recovery;
        $arr = array(
            'cluster_config_path'=>'',
            'back_path'=>'',
            'rec_time'=>'',
            'table_name'=>'',
            'obs_settings'=>array(
            'sto_uuid'=>'',
            'bucket_name'=>'',
            'bucket_path'=>'',),
            'bk_type'=>'',
            'bk_uuid'=>'',
            'partition_name'=>'',
        );
        
        
        $res = $recovery -> getBigdataRecoveryPartitionInfoDetail($arr);
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