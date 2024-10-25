<?php
namespace i2up\Test\v20240819\cloud;

use i2up\cloud\v20240819\CloudBackup;
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
        $this->do_assert($res);
    }

    public function testListIdleDevice()
    {
        $cloudBackup = $this -> cloudBackup;
        $arr = array(
            'node_uuid'=>'',
        );
        
        
        $res = $cloudBackup -> listIdleDevice($arr);
        $this->do_assert($res);
    }

    public function testCreateBackup()
    {
        $cloudBackup = $this -> cloudBackup;
        $arr = array(
            'fsp_backup'=>array(
            'secret_key'=>'',
            'band_width'=>'',
            'mirr_open_type'=>'0',
            'service_uuid'=>'',
            'mirr_sync_flag'=>'0',
            'excl_path'=>array(
            '0'=>'/cgroup/',
            '1'=>'/dev/',
            '2'=>'/etc/X11/xorg.conf/',
            '3'=>'/etc/init.d/i2node/',
            '4'=>'/etc/rc.d/init.d/i2node/',
            '5'=>'/etc/sdata/',
            '6'=>'/lost+found/',
            '7'=>'/media/',
            '8'=>'/mnt/',
            '9'=>'/proc/',
            '10'=>'/run/',
            '11'=>'/selinux/',
            '12'=>'/sys/',
            '13'=>'/tmp/',
            '14'=>'/usr/local/sdata/',
            '15'=>'/var/i2/',
            '16'=>'/var/i2data/',
            '17'=>'/var/lock/',
            '18'=>'/var/run/vmblock-fuse/',),
            'bkup_one_time'=>0,
            'encrypt_switch'=>'0',
            'mirr_sync_attr'=>'1',
            'bk_uuid'=>'F85DFEC0-149E-373D-0B9E-3DA9A5C43940',
            'wk_data_type'=>1,
            'bk_path'=>array(
            '0'=>'/fsp_bk/',),
            'sync_item'=>'/',
            'bkup_policy'=>2,
            'mirr_file_check'=>'0',
            'compress'=>'0',
            'monitor_type'=>0,
            'failover'=>'0',
            'wk_path'=>array(
            '0'=>'/',),
            'fsp_name'=>'test',
            'wk_uuid'=>'42614852-BB62-1EF7-FED0-D2354BF3149D',
            'fsp_wk_shut_flag'=>'2',
            'bk_data_type'=>1,
            'bkup_schedule'=>array(
            '0'=>array(
            'sched_day'=>3,
            'sched_time'=>'22:28',
            'sched_every'=>2,
            'limit'=>48,
            'backup_type'=>0,
            'policys'=>'"每天22:00自动执行"',
            'backup_type_show'=>'"全备"',
            'running_time'=>'"22:00"',),),
            'fsp_type'=>6,
            'random_str'=>'11111111-1111-1111-1111-111111111111',
            'del_policy'=>1,
            'timeout'=>1,
            'cbt_switch'=>1,
            'threshold_vaild_byte'=>'',
            'advanced_policy'=>array(
            'bk_cdp'=>1,
            'execute_interval'=>1,
            'cdp_detail'=>1,
            'cdp_daily'=>1,
            'cdp_param'=>'',
            'cdp_switch'=>1,
            'cdp_snapshot_days'=>1,
            'cdp_snapshot_execute_interval'=>1,
            'cdp_keep_data'=>1,),
            'vp_uuid'=>'',
            'storage_uuid'=>'',
            'data_ip_uuid'=>'',
            'database_switch'=>1,
            'database_type'=>1,
            'oracle_dbagent_param'=>array(
            'oracle_sid'=>'',
            'sql_plus_path'=>'',
            'username'=>'',
            'password'=>'',
            'port'=>'',
            'table_space'=>'',
            'timeout'=>'',),
            'sqlserver_dbagent_param'=>array(
            'timeout'=>'',
            'enable'=>'0',),
            'custom_dbagent_param'=>array(
            'pre_snapshot_script'=>'',
            'post_snapshot_script'=>'',),
            'bk_volume'=>array(),
            'disk_billing_type'=>1,
            'order_cycle_unit'=>1,
            'order_cycle'=>1,
            'disk_type'=>'',),
        );
        
        
        $res = $cloudBackup -> createBackup($arr);
        $this->do_assert($res);
    }

    public function testModifyBackup()
    {
        $cloudBackup = $this -> cloudBackup;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $cloudBackup -> modifyBackup($arr);
        $this->do_assert($res);
    }

    public function testDeleteCloudBackup()
    {
        $cloudBackup = $this -> cloudBackup;
        $arr = array(
            'force'=>1,
            'rule_uuids'=>array(),
        );
        
        
        $res = $cloudBackup -> deleteCloudBackup($arr);
        $this->do_assert($res);
    }

    public function testListBackup()
    {
        $cloudBackup = $this -> cloudBackup;
        $arr = array(
            'status'=>'',
        );
        
        
        $res = $cloudBackup -> listBackup($arr);
        $this->do_assert($res);
    }

    public function testStartBackup()
    {
        $cloudBackup = $this -> cloudBackup;
        $arr = array(
            'operate'=>'',
            'rule_uuids'=>'[C6335F62-2565-1957-4BB9-587F2FF46B00]',
            'bkup_type'=>'',
            'stop_later'=>'',
        );
        
        
        $res = $cloudBackup -> startBackup($arr);
        $this->do_assert($res);
    }

    public function testStopBackup()
    {
        $cloudBackup = $this -> cloudBackup;
        $arr = array(
            'operate'=>'',
            'rule_uuids'=>'[C6335F62-2565-1957-4BB9-587F2FF46B00]',
            'bkup_type'=>'',
            'stop_later'=>'',
        );
        
        
        $res = $cloudBackup -> stopBackup($arr);
        $this->do_assert($res);
    }

    public function testStartImmediatelyBackup()
    {
        $cloudBackup = $this -> cloudBackup;
        $arr = array(
            'operate'=>'',
            'rule_uuids'=>'[C6335F62-2565-1957-4BB9-587F2FF46B00]',
            'bkup_type'=>'',
            'stop_later'=>'',
        );
        
        
        $res = $cloudBackup -> startImmediatelyBackup($arr);
        $this->do_assert($res);
    }

    public function testDescribeBackup()
    {
        $cloudBackup = $this -> cloudBackup;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $cloudBackup -> describeBackup($arr);
        $this->do_assert($res);
    }

    public function testVerifySourceVirtioDriver()
    {
        $cloudBackup = $this -> cloudBackup;
        $arr = array(
            'wk_uuid'=>'',
        );
        
        
        $res = $cloudBackup -> verifySourceVirtioDriver($arr);
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