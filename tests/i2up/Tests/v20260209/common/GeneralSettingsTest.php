<?php
namespace i2up\Test\v20260209\common;

use i2up\common\v20260209\GeneralSettings;
use i2up\common\Auth;
                
class GeneralSettingsTest extends \PHPUnit_Framework_TestCase
 {
    private $generalSettings;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> generalSettings = new GeneralSettings(new Auth());
    }

    public function testChkEtcdUrl()
    {
        $generalSettings = $this -> generalSettings;
        $arr = array(
            'etcd_url_uuid'=>'',
        );
        
        
        $res = $generalSettings -> chkEtcdUrl($arr);
        $this->do_assert($res);
    }

    public function testCreateUpdateEtcd()
    {
        $generalSettings = $this -> generalSettings;
        $arr = array(
            'user'=>'',
            'pwd'=>'',
            'cls_conf'=>array(
            '0'=>array(
            'ip'=>'',
            'port'=>'',),),
            'node_access_list'=>array(
            '0'=>array(
            'name'=>'',
            'ip_list'=>array(
            '0'=>array(
            'ip'=>'',
            'port'=>'',),),
            'uuid'=>'',),),
        );
        
        
        $res = $generalSettings -> createUpdateEtcd($arr);
        $this->do_assert($res);
    }

    public function testListEtcd()
    {
        $generalSettings = $this -> generalSettings;
        $arr = array();
        
        
        $res = $generalSettings -> listEtcd($arr);
        $this->do_assert($res);
    }

    public function testScanEtcdConf()
    {
        $generalSettings = $this -> generalSettings;
        $arr = array(
            'ip'=>'',
            'port'=>'',
            'user'=>'',
            'pwd'=>'',
        );
        
        
        $res = $generalSettings -> scanEtcdConf($arr);
        $this->do_assert($res);
    }

    public function testCreateUpdateScheduleSvr()
    {
        $generalSettings = $this -> generalSettings;
        $arr = array(
            'node_access_list'=>array(
            '0'=>array(
            'ip'=>'',
            'uuid'=>'',),),
            'os_pwd'=>'',
            'os_user'=>'',
            'rpc_port'=>'',
            'data_port'=>'',
            'rpc_addr'=>'',
            'etcd_url_uuid'=>'',
            'bkset_meta_data_path'=>'',
            'log_dir'=>'',
            'log_save_time'=>1,
            'log_save_size'=>1,
            'task_schedule_interval_time'=>1,
            'bkupset_expire_delay_time'=>1,
            'bkupset_expire_check_time'=>1,
            'delete_failed_interval_time'=>1,
            'max_delete_times'=>1,
            'task_timeout_stop_time'=>1,
            'bkupset_expire_run_time_from'=>'00:00:00',
            'bkupset_expire_run_time_to'=>'23:59:59',
            'kafka_nodes'=>array(
            '0'=>array(
            'ip'=>'',
            'port'=>1,),),
            'kafka_ssl'=>1,
            'kafka_sasl'=>1,
            'sasl_user'=>'',
            'sasl_pwd'=>'',
            'delete_failed_interval_time_unit'=>1,
        );
        
        
        $res = $generalSettings -> createUpdateScheduleSvr($arr);
        $this->do_assert($res);
    }

    public function testListScheduleSvr()
    {
        $generalSettings = $this -> generalSettings;
        $arr = array();
        
        
        $res = $generalSettings -> listScheduleSvr($arr);
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