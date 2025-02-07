<?php
namespace i2up\Test\v20250123\bigdata;

use i2up\bigdata\v20250123\Backup;
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
            'sched_day'=>29,
            'sched_time'=>'16:53',
            'sched_every'=>2,
            'limit'=>22,
            'backup_type'=>0,
            'policys'=>'每天22:00自动执行',
            'backup_type_show'=>'全备',
            'running_time'=>'22:00',),),
            'random_str'=>'11111111-1111-1111-1111-111111111111',
            'tape_uuid'=>'E8566905-411E-B2CD-A742-77B1346D8E84',
            'archive_pen'=>0,
            'library_sn'=>'SYZZY_A',
            'sel_tbl'=>array(),
            'sel_db'=>array(),
            'hive_bktype'=>1,
            'filter_type'=>1,
            'filter_files'=>'',
            'exclude_paths'=>'',
            'band_width'=>'',
            'pre_backup_script'=>'',
            'post_backup_script'=>'',
            'script_timeout'=>1,
            'tape_pool_uuid'=>'',
            'tape_pool_name'=>'',
            'tape_name'=>'',
            'tape_reserve'=>1,
            'platform_uuid'=>'',
            'sel_part'=>array(),
            'rule_type'=>'',
            'schedule_uuid'=>'',
            'scan_path'=>'',
            'schedule'=>array(
            'type'=>'',
            'interval'=>'',
            'unit'=>'',
            'run_time'=>'12:00',),
            'scan_schedule'=>array(
            'sched_every'=>'',
            'sched_day'=>'',
            'sched_time'=>'',),
            'approver_uuid'=>'',),
            'obs_settings'=>array(
            'sto_uuid'=>'',
            'bucket_name'=>'',
            'bucket_path'=>'',),
        );
        
        
        $res = $backup -> createBigdataBackup($arr);
        $this->do_assert($res);
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
        $this->do_assert($res);
    }

    public function testListBigdataBackupStatus()
    {
        $backup = $this -> backup;
        $arr = array(
            'uuids'=>array(),
            'force_refresh'=>1,
        );
        
        
        $res = $backup -> listBigdataBackupStatus($arr);
        $this->do_assert($res);
    }

    public function testDescribeBigdataBackup()
    {
        $backup = $this -> backup;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $backup -> describeBigdataBackup($arr);
        $this->do_assert($res);
    }

    public function testStartBigdataBackup()
    {
        $backup = $this -> backup;
        $arr = array(
            'operate'=>'',
            'uuids'=>'[C6335F62-2565-1957-4BB9-587F2FF46B00]',
            'bk_type'=>1,
        );
        
        
        $res = $backup -> startBigdataBackup($arr);
        $this->do_assert($res);
    }

    public function testStopBigdataBackup()
    {
        $backup = $this -> backup;
        $arr = array(
            'operate'=>'',
            'uuids'=>'[C6335F62-2565-1957-4BB9-587F2FF46B00]',
            'bk_type'=>1,
        );
        
        
        $res = $backup -> stopBigdataBackup($arr);
        $this->do_assert($res);
    }

    public function testStartImmediatelyBigdataBackup()
    {
        $backup = $this -> backup;
        $arr = array(
            'operate'=>'',
            'uuids'=>'[C6335F62-2565-1957-4BB9-587F2FF46B00]',
            'bk_type'=>1,
        );
        
        
        $res = $backup -> startImmediatelyBigdataBackup($arr);
        $this->do_assert($res);
    }

    public function testEnableBigdataBackup()
    {
        $backup = $this -> backup;
        $arr = array(
            'operate'=>'',
            'uuids'=>'[C6335F62-2565-1957-4BB9-587F2FF46B00]',
            'bk_type'=>1,
        );
        
        
        $res = $backup -> enableBigdataBackup($arr);
        $this->do_assert($res);
    }

    public function testDisableBigdataBackup()
    {
        $backup = $this -> backup;
        $arr = array(
            'operate'=>'',
            'uuids'=>'[C6335F62-2565-1957-4BB9-587F2FF46B00]',
            'bk_type'=>1,
        );
        
        
        $res = $backup -> disableBigdataBackup($arr);
        $this->do_assert($res);
    }

    public function testPauseBigdataBackup()
    {
        $backup = $this -> backup;
        $arr = array(
            'operate'=>'',
            'uuids'=>'[C6335F62-2565-1957-4BB9-587F2FF46B00]',
            'bk_type'=>1,
        );
        
        
        $res = $backup -> pauseBigdataBackup($arr);
        $this->do_assert($res);
    }

    public function testResumeBigdataBackup()
    {
        $backup = $this -> backup;
        $arr = array(
            'operate'=>'',
            'uuids'=>'[C6335F62-2565-1957-4BB9-587F2FF46B00]',
            'bk_type'=>1,
        );
        
        
        $res = $backup -> resumeBigdataBackup($arr);
        $this->do_assert($res);
    }

    public function testDeleteBigdataBackup()
    {
        $backup = $this -> backup;
        $arr = array(
            'uuids'=>array(
            '0'=>'11111111-1111-1111-1111-111111111111',),
            'del_policy'=>0,
            'force'=>1,
        );
        
        
        $res = $backup -> deleteBigdataBackup($arr);
        $this->do_assert($res);
    }

    public function testListBigdataBackupTableDdl()
    {
        $backup = $this -> backup;
        $arr = array(
            'bk_path'=>array(),
            'bk_node_uuid'=>'',
            'bk_rule_uuid'=>'',
            'cluster_config_path'=>'',
            'obs_settings'=>array(
            'sto_uuid'=>'',
            'bucket'=>'',),
            'bk_type'=>'',
            'rec_time'=>'',
            'table_name'=>'',
        );
        
        
        $res = $backup -> listBigdataBackupTableDdl($arr);
        $this->do_assert($res);
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
        $this->do_assert($res);
    }

    public function testListBigdataHiveTable()
    {
        $backup = $this -> backup;
        $arr = array(
            'bk_uuid'=>'4e854C9A-1Da7-6dE5-cBef-bb45F4a9f5eB',
            'table_name'=>'',
            'limit'=>'',
            'page'=>'',
            'db_name'=>'',
            'cluster_config_path'=>'',
            'platform_uuid'=>'',
        );
        
        
        $res = $backup -> listBigdataHiveTable($arr);
        $this->do_assert($res);
    }

    public function testListAllBigdataHiveDatabase()
    {
        $backup = $this -> backup;
        $arr = array(
            'bk_uuid'=>'1612c4BC-d7b6-fA1f-dF30-2b6034193f5c',
            'cluster_config_path'=>'',
            'platform_uuid'=>'',
        );
        
        
        $res = $backup -> listAllBigdataHiveDatabase($arr);
        $this->do_assert($res);
    }

    public function testGetBigdataBackupPartitions()
    {
        $backup = $this -> backup;
        $arr = array(
            'bk_uuid'=>'',
            'db_name'=>'',
            'table_name'=>'',
            'limit'=>'',
            'page'=>'',
            'platform_uuid'=>'',
        );
        
        
        $res = $backup -> getBigdataBackupPartitions($arr);
        $this->do_assert($res);
    }

    public function testImportBigdataBackup()
    {
        $backup = $this -> backup;
        $arr = array(
            'rule_uuid'=>'',
            'file'=>'',
        );
        
        
        $res = $backup -> importBigdataBackup($arr);
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