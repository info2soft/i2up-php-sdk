<?php
namespace i2up\Test\cloud;

use i2up\cloud\v20200721\CloudBackup;
use i2up\common\Auth;

class CloudBackupTest extends \PHPUnit_Framework_TestCase
{
    private $cloudBackup;

    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> cloudBackup = new CloudBackup(new Auth());
    }

    public function testListDevice()
    {
        $cloudBackup = $this -> cloudBackup;
        $arr = array(
            'node_uuid'=>'',
        );
        $res = $cloudBackup -> listDevice($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testCreateBackup()
    {
        $cloudBackup = $this -> cloudBackup;
        $arr = array(
            'cloud_backup'=>array(
                'secret_key'=>'',
                'mirr_open_type'=>'0',
                'bkup_one_time'=>0,
                'encrypt_switch'=>'0',
                'bk_uuid'=>'F85DFEC0-149E-373D-0B9E-3DA9A5C43940',
                'wk_data_type'=>1,
                'bk_path'=>array(),
                'bkup_policy'=>2,
                'mirr_file_check'=>'0',
                'compress'=>'0',
                'wk_path'=>array(
                    '0'=>array(
                        'node_name'=>'8.180',
                        'path_name'=>'PhysicalDrive0',
                        'path_size'=>'42944186880',
                        'path_attr'=>'1',
                        'node_uuid'=>'42614852-BB62-1EF7-FED0-D2354BF3149D',),),
                'group_name'=>'test',
                'wk_uuid'=>array(
                    '0'=>'42614852-BB62-1EF7-FED0-D2354BF3149D',),
                'bk_data_type'=>1,
                'bkup_schedule'=>array(
                    '0'=>array(
                        'sched_day'=>22,
                        'sched_time'=>'15:50',
                        'sched_every'=>2,
                        'limit'=>51,
                        'backup_type'=>0,
                        'policys'=>'每天22:00自动执行',
                        'backup_type_show'=>'全备',
                        'running_time'=>'22:00',),),
                'random_str'=>'11111111-1111-1111-1111-111111111111',),
        );
        $res = $cloudBackup -> createBackup($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testModifyBackup()
    {
        $cloudBackup = $this -> cloudBackup;
        $arr = array(
        );
        $res = $cloudBackup -> modifyBackup($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDeleteBackup()
    {
        $cloudBackup = $this -> cloudBackup;
        $arr = array(
        );
        $res = $cloudBackup -> deleteBackup($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testHttps()
    {
        $cloudBackup = $this -> cloudBackup;
        $arr = array(
            'page'=>1,
            'limit'=>10,
        );
        $res = $cloudBackup -> https($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testStartBackup()
    {
        $cloudBackup = $this -> cloudBackup;
        $arr = array(
            'operate'=>'start',
            'rule_uuids'=>'[C6335F62-2565-1957-4BB9-587F2FF46B00]',
            'bkup_type'=>'',
            'stop_later'=>'',
        );
        $res = $cloudBackup -> startBackup($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testStopBackup()
    {
        $cloudBackup = $this -> cloudBackup;
        $arr = array(
            'operate'=>'stop',
            'rule_uuids'=>'[C6335F62-2565-1957-4BB9-587F2FF46B00]',
            'bkup_type'=>'',
            'stop_later'=>'',
        );
        $res = $cloudBackup -> stopBackup($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testStartImmediatelyBackup()
    {
        $cloudBackup = $this -> cloudBackup;
        $arr = array(
            'operate'=>'start_immediately',
            'rule_uuids'=>'[C6335F62-2565-1957-4BB9-587F2FF46B00]',
            'bkup_type'=>'',
            'stop_later'=>'',
        );
        $res = $cloudBackup -> startImmediatelyBackup($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeBackup()
    {
        $cloudBackup = $this -> cloudBackup;
        $arr = array(
        );
        $res = $cloudBackup -> describeBackup($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeEcs()
    {
        $cloudBackup = $this -> cloudBackup;
        $arr = array(
            'cloud_backup_uuid'=>'',
        );
        $res = $cloudBackup -> describeEcs($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

}