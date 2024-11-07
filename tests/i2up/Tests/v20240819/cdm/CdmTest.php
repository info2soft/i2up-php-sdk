<?php
namespace i2up\Test\v20240819\cdm;

use i2up\cdm\v20240819\Cdm;
use i2up\common\Auth;
                
class CdmTest extends \PHPUnit_Framework_TestCase
 {
    private $cdm;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> cdm = new Cdm(new Auth());
    }

    public function testCreateCdm()
    {
        $cdm = $this -> cdm;
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
            'sched_day'=>30,
            'sched_time'=>'11:15',
            'sched_every'=>2,
            'limit'=>34,
            'backup_type'=>0,
            'policys'=>'"每天22:00自动执行"',
            'backup_type_show'=>'"全备"',
            'running_time'=>'"22:00"',),),
            'fsp_type'=>3,
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
            'oracle_dbagent_param'=>array(
            'oracle_sid'=>'',
            'sql_plus_path'=>'',
            'username'=>'',
            'password'=>'',
            'port'=>1,
            'table_space'=>array(),
            'timeout'=>1,),
            'mysql_dbagent_param'=>array(
            'mysql_path'=>'',
            'username'=>'',
            'password'=>'',
            'port'=>1,
            'database_name'=>array(),
            'timeout'=>1,),
            'sqlserver_dbagent_param'=>array(
            'timeout'=>1,
            'enable'=>0,),
            'database_type'=>'0',
            'database_switch'=>0,
            'auto'=>'',
            'orch_vm_name'=>'',
            'scripts_type'=>'',
            'scripts'=>'',
            'start_type'=>0,
            'custom_dbagent_param'=>array(
            'pre_snapshot_script'=>'',
            'post_snapshot_script'=>'',),),
        );
        
        
        $res = $cdm -> createCdm($arr);
        $this->do_assert($res);
    }

    public function testDescribeCdm()
    {
        $cdm = $this -> cdm;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $cdm -> describeCdm($arr);
        $this->do_assert($res);
    }

    public function testModifyCdm()
    {
        $cdm = $this -> cdm;
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
            'sched_day'=>29,
            'sched_time'=>'08:21',
            'sched_every'=>2,
            'limit'=>64,
            'backup_type'=>0,
            'policys'=>'"每天22:00自动执行"',
            'backup_type_show'=>'"全备"',
            'running_time'=>'"22:00"',),),
            'fsp_type'=>3,
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
            'cdp_snapshot_execute_interval'=>1,),
            'vp_uuid'=>'',
            'storage_uuid'=>'',
            'data_ip_uuid'=>'',
            'oracle_dbagent_param'=>array(
            'oracle_sid'=>'',
            'sql_plus_path'=>'',
            'username'=>'',
            'password'=>'',
            'port'=>1,
            'table_space'=>array(),
            'timeout'=>1,),
            'mysql_dbagent_param'=>array(
            'mysql_path'=>'',
            'username'=>'',
            'password'=>'',
            'port'=>1,
            'database_name'=>array(),
            'timeout'=>1,),
            'sqlserver_dbagent_param'=>array(
            'timeout'=>1,
            'enable'=>0,),
            'database_type'=>'0',
            'database_switch'=>0,
            'auto'=>'',
            'orch_vm_name'=>'',
            'scripts_type'=>'',
            'scripts'=>'',
            'start_type'=>0,),
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $cdm -> modifyCdm($arr);
        $this->do_assert($res);
    }

    public function testDeleteCdm()
    {
        $cdm = $this -> cdm;
        $arr = array(
            'fsp_uuids'=>array(
            '0'=>'11111111-1111-1111-1111-111111111111',),
            'del_policy'=>1,
            'force'=>1,
            'recycle'=>0,
        );
        
        
        $res = $cdm -> deleteCdm($arr);
        $this->do_assert($res);
    }

    public function testListCdm()
    {
        $cdm = $this -> cdm;
        $arr = array(
            'type'=>3,
            'limit'=>10,
            'page'=>1,
            'where_args'=>array(),
            'status'=>'',
        );
        
        
        $res = $cdm -> listCdm($arr);
        $this->do_assert($res);
    }

    public function testListCdmStatus()
    {
        $cdm = $this -> cdm;
        $arr = array(
            'fsp_uuids'=>array(
            '0'=>'11111111-1111-1111-1111-111111111111',),
            'force_refresh'=>1,
        );
        
        
        $res = $cdm -> listCdmStatus($arr);
        $this->do_assert($res);
    }

    public function testGetByWk()
    {
        $cdm = $this -> cdm;
        $arr = array(
            'wk_uuid'=>'',
            'vp_uuid'=>'',
        );
        
        
        $res = $cdm -> getByWk($arr);
        $this->do_assert($res);
    }

    public function testGetPointList()
    {
        $cdm = $this -> cdm;
        $arr = array(
            'bk_uuid'=>'',
            'path'=>'',
            'type'=>'',
            'suffix'=>'',
            'page'=>1,
            'limit'=>1,
            'rule_uuid'=>'',
            'search_key'=>'',
            'search_value'=>'2',
            'start'=>1,
            'end'=>1,
            'order'=>'',
            'restore_point'=>'',
        );
        
        
        $res = $cdm -> getPointList($arr);
        $this->do_assert($res);
    }

    public function testGetNetworkList()
    {
        $cdm = $this -> cdm;
        $arr = array(
            'uuid'=>'',
            'type'=>'',
            'storage_id'=>'',
        );
        
        
        $res = $cdm -> getNetworkList($arr);
        $this->do_assert($res);
    }

    public function testGetNodeList()
    {
        $cdm = $this -> cdm;
        $arr = array(
            'path'=>'',
            'type'=>'',
            'bk_uuid'=>'',
        );
        
        
        $res = $cdm -> getNodeList($arr);
        $this->do_assert($res);
    }

    public function testGetResourceList()
    {
        $cdm = $this -> cdm;
        $arr = array(
            'limit'=>10,
            'page'=>1,
            'search_field'=>'',
            'search_value'=>'',
        );
        
        
        $res = $cdm -> getResourceList($arr);
        $this->do_assert($res);
    }

    public function testGetHostStorageList()
    {
        $cdm = $this -> cdm;
        $arr = array(
            'vp_uuid'=>'',
        );
        
        
        $res = $cdm -> getHostStorageList($arr);
        $this->do_assert($res);
    }

    public function testGetVmInfo()
    {
        $cdm = $this -> cdm;
        $arr = array(
            'vp_uuid'=>'',
            'bk_uuid'=>'',
            'vm_ref'=>'',
        );
        
        
        $res = $cdm -> getVmInfo($arr);
        $this->do_assert($res);
    }

    public function testListDrillRestorePoint()
    {
        $cdm = $this -> cdm;
        $arr = array(
            'rule_uuid'=>'',
        );
        
        
        $res = $cdm -> listDrillRestorePoint($arr);
        $this->do_assert($res);
    }

    public function testVerifyOracleArchiveMode()
    {
        $cdm = $this -> cdm;
        $arr = array(
            'username'=>'',
            'password'=>'',
            'sqlplus_path'=>'',
            'sid'=>'',
            'timeout'=>'',
            'port'=>'',
            'wk_uuid'=>'',
            'bk_uuid'=>'',
        );
        
        
        $res = $cdm -> verifyOracleArchiveMode($arr);
        $this->do_assert($res);
    }

    public function testCdmScriptPathCheck()
    {
        $cdm = $this -> cdm;
        $arr = array(
            'wk_uuid'=>'',
            'file_dir'=>'',
        );
        
        
        $res = $cdm -> cdmScriptPathCheck($arr);
        $this->do_assert($res);
    }

    public function testListCdmDriverInfo()
    {
        $cdm = $this -> cdm;
        $arr = array(
            'node_uuid'=>'',
        );
        
        
        $res = $cdm -> listCdmDriverInfo($arr);
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