<?php
namespace i2up\Test\v20240228\bigdata;

use i2up\bigdata\v20240228\Recovery;
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
            'sel_part'=>array(),),
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
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111',
        );
        $res = $recovery -> describeBigdataRecovery($arr);
        $this->do_assert($res);
    }

    public function testDeleteBigdataRecovery()
    {
        $recovery = $this -> recovery;
        $arr = array(
            'uuids'=>'',
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

    public function testOperateBigdataRecovery()
    {
        $recovery = $this -> recovery;
        $arr = array(
            'operate'=>'',
            'uuids'=>'[C6335F62-2565-1957-4BB9-587F2FF46B00]',
        );
        $res = $recovery -> operateBigdataRecovery($arr);
        $this->do_assert($res);
    }

    public function testAuthBigdataPlatform()
    {
        $recovery = $this -> recovery;
        $arr = array(
            'auth_key'=>'',
            'auth_name'=>'',
            'cred_uuid'=>'',
            'bk_uuid'=>'',
        );
        $res = $recovery -> authBigdataPlatform($arr);
        $this->do_assert($res);
    }

    public function testListBigdataHiveTable()
    {
        $recovery = $this -> recovery;
        $arr = array(
            'bk_uuid'=>'f8FEfcbd-FAfB-1362-CD29-Eb07ec1CfAFD',
            'table_name'=>'',
            'limit'=>'',
            'page'=>'',
            'db_name'=>'',
            'cluster_config_path'=>'',
        );
        $res = $recovery -> listBigdataHiveTable($arr);
        $this->do_assert($res);
    }

    public function testListAllBigdataHiveDatabase()
    {
        $recovery = $this -> recovery;
        $arr = array(
            'bk_uuid'=>'E3CAc6D2-DDde-b2AE-eFa7-9bC2FcC94aCc',
            'cluster_config_path'=>'',
        );
        $res = $recovery -> listAllBigdataHiveDatabase($arr);
        $this->do_assert($res);
    }

    public function testGetTableInfoDetail()
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
        );
        $res = $recovery -> getTableInfoDetail($arr);
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
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}