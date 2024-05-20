<?php

namespace i2up\Test\bigdata;

use i2up\bigdata\v20200721\Backup;
use i2up\common\Auth;

class BackupTest extends \PHPUnit_Framework_TestCase
{
    private $backup;

    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> backup = new Backup(new Auth());
    }

    public function testCreateBigdataBackup()
    {
        $backup = $this -> backup;
        $arr = array(
            'bigdata_backup'=>array(
                'rule_name'=>'',
                'rule_uuid'=>'',
                'bk_uuid'=>'F85DFEC0-149E-373D-0B9E-3DA9A5C43940',
                'bk_path'=>array(),
                'baked_paths'=>array(),
                'data_type'=>'',
                'cred_switch'=>1,
                'cred_uuid'=>'',
                'auth_user'=>'',
                'auth_key'=>'',
                'mirr_file_check'=>0,
                'mirr_sync_flag'=>1,
                'bkup_one_time'=>0,
                'bkup_policy'=>2,
                'bkup_schedule'=>array(
                    '0'=>array(
                        'sched_day'=>25,
                        'sched_time'=>'18:24',
                        'sched_every'=>2,
                        'limit'=>5,
                        'backup_type'=>0,
                        'policys'=>'每天22:00自动执行',
                        'backup_type_show'=>'全备',
                        'running_time'=>'22:00',),),
                'random_str'=>'11111111-1111-1111-1111-111111111111',
                'cluster_config_path'=>'',),
        );
        $res = $backup -> createBigdataBackup($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListBigdataBackup()
    {
        $backup = $this -> backup;
        $arr = array(
            'search_field'=>'',
            'limit'=>10,
            'page'=>1,
            'search_value'=>'',
            'type'=>0,
        );
        $res = $backup -> listBigdataBackup($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListBigdataBackupStatus()
    {
        $backup = $this -> backup;
        $arr = array(
            'uuids'=>array('11111111-1111-1111-1111-111111111111'),
        );
        $res = $backup -> listBigdataBackupStatus($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeBigdataBackup()
    {
        $backup = $this -> backup;
        $arr = array(
        );
        $res = $backup -> describeBigdataBackup($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testStartBigdataBackup()
    {
        $backup = $this -> backup;
        $arr = array(
            'operate'=>'start',
            'uuids'=>'[C6335F62-2565-1957-4BB9-587F2FF46B00]',
        );
        $res = $backup -> startBigdataBackup($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testStopBigdataBackup()
    {
        $backup = $this -> backup;
        $arr = array(
            'operate'=>'stop',
            'uuids'=>'[C6335F62-2565-1957-4BB9-587F2FF46B00]',
        );
        $res = $backup -> stopBigdataBackup($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDeleteBigdataBackup()
    {
        $backup = $this -> backup;
        $arr = array(
            'uuids'=>array(
                '0'=>'11111111-1111-1111-1111-111111111111',),
            'del_policy'=>0,
        );
        $res = $backup -> deleteBigdataBackup($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}