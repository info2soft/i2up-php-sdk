<?php
namespace i2up\Test\bigdata;

use i2up\bigdata\v20200721\Recovery;
use i2up\common\Auth;

class RecoveryTest extends \PHPUnit_Framework_TestCase
{
    private $backup;

    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> backup = new Recovery(new Auth());
    }

    public function testListBackupHistory()
    {
        $backup = $this -> backup;
        $arr = array(
            'bk_path'=>array(),
            'bk_node_uuid'=>'',
            'bk_rule_uuid'=>'',
        );
        $res = $backup -> listBackupHistory($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testCreateBigdataRecovery()
    {
        $backup = $this -> backup;
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
                'cluster_config_path'=>'',),
        );
        $res = $backup -> createBigdataRecovery($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeBigdataRecovery()
    {
        $backup = $this -> backup;
        $arr = array(
        );
        $res = $backup -> describeBigdataRecovery($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDeleteBigdataRecovery()
    {
        $backup = $this -> backup;
        $arr = array(
            'uuids'=>'',
        );
        $res = $backup -> deleteBigdataRecovery($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListBigdataRecovery()
    {
        $backup = $this -> backup;
        $arr = array(
            'search_field'=>'',
            'limit'=>10,
            'page'=>1,
            'search_value'=>'',
            'type'=>0,
        );
        $res = $backup -> listBigdataRecovery($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListBigdataRecoveryStatus()
    {
        $backup = $this -> backup;
        $arr = array(
            'uuids'=>array(),
        );
        $res = $backup -> listBigdataRecoveryStatus($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }


    public function testAuthBigdataPlatform()
    {
        $backup = $this -> backup;
        $arr = array(
            'auth_key'=>'',
            'auth_name'=>'',
            'cred_uuid'=>'',
            'bk_uuid'=>'',
        );
        $res = $backup -> authBigdataPlatform($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}