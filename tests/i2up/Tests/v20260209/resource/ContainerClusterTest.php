<?php
namespace i2up\Test\v20260209\resource;

use i2up\resource\v20260209\ContainerCluster;
use i2up\common\Auth;
                
class ContainerClusterTest extends \PHPUnit_Framework_TestCase
 {
    private $containerCluster;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> containerCluster = new ContainerCluster(new Auth());
    }

    public function testCreateBackupDestination()
    {
        $containerCluster = $this -> containerCluster;
        $arr = array(
            'name'=>'',
            'sto_uuid'=>'',
            's3_real_address'=>1,
            'bucket'=>'',
            'region'=>'',
            'check_sto_address'=>1,
            'sto_address_cert'=>'',
            'cls_uuid'=>'',
            'copy_switch'=>1,
            'src_uuid'=>'',
            'src_cls_uuid'=>'',
        );
        
        
        $res = $containerCluster -> createBackupDestination($arr);
        $this->do_assert($res);
    }

    public function testListBackupDestination()
    {
        $containerCluster = $this -> containerCluster;
        $arr = array();
        
        
        $res = $containerCluster -> listBackupDestination($arr);
        $this->do_assert($res);
    }

    public function testDescibeBackupDestination()
    {
        $containerCluster = $this -> containerCluster;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $containerCluster -> descibeBackupDestination($arr);
        $this->do_assert($res);
    }

    public function testModifyBackupDestination()
    {
        $containerCluster = $this -> containerCluster;
        $arr = array(
            'uuid'=>'',
            'name'=>'',
            'sto_uuid'=>'',
            'random_str'=>'',
            's3_real_address'=>1,
            'bucket'=>'',
            'region'=>'',
            'check_sto_address'=>1,
            'sto_address_cert'=>'',
            'cls_uuid'=>'',
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $containerCluster -> modifyBackupDestination($arr);
        $this->do_assert($res);
    }

    public function testDeleteBackupDestination()
    {
        $containerCluster = $this -> containerCluster;
        $arr = array(
            'uuids'=>array(),
            'force'=>1,
        );
        
        
        $res = $containerCluster -> deleteBackupDestination($arr);
        $this->do_assert($res);
    }

    public function testListBackupDestinationStatus()
    {
        $containerCluster = $this -> containerCluster;
        $arr = array(
            'uuids'=>'',
            'force_refresh'=>'',
        );
        
        
        $res = $containerCluster -> listBackupDestinationStatus($arr);
        $this->do_assert($res);
    }

    public function testListContainerClusterInfo()
    {
        $containerCluster = $this -> containerCluster;
        $arr = array(
            'cls_config'=>array(),
            'os_user'=>'',
            'os_pwd'=>'',
            'component_namespace'=>'',
            'net_type'=>'',
            'cls_uuid'=>'',
        );
        
        
        $res = $containerCluster -> listContainerClusterInfo($arr);
        $this->do_assert($res);
    }

    public function testSyncContainerClusterInfo()
    {
        $containerCluster = $this -> containerCluster;
        $arr = array(
            'cls_uuid'=>'',
            'type'=>'',
        );
        
        
        $res = $containerCluster -> syncContainerClusterInfo($arr);
        $this->do_assert($res);
    }

    public function testListContainerClusterResource()
    {
        $containerCluster = $this -> containerCluster;
        $arr = array(
            'cls_uuid'=>'',
        );
        
        
        $res = $containerCluster -> listContainerClusterResource($arr);
        $this->do_assert($res);
    }

    public function testListContainerClsNamespace()
    {
        $containerCluster = $this -> containerCluster;
        $arr = array(
            'cls_uuid'=>'58ECEEB7-D4FC-4746-A507-AA3BBC98EFD1',
        );
        
        
        $res = $containerCluster -> listContainerClsNamespace($arr);
        $this->do_assert($res);
    }

    public function testContainerClusterMonitoringOverview()
    {
        $containerCluster = $this -> containerCluster;
        $arr = array(
            'cls_uuid'=>'',
        );
        
        
        $res = $containerCluster -> containerClusterMonitoringOverview($arr);
        $this->do_assert($res);
    }

    public function testContainerClusterMonitoringNode()
    {
        $containerCluster = $this -> containerCluster;
        $arr = array();
        
        
        $res = $containerCluster -> containerClusterMonitoringNode($arr);
        $this->do_assert($res);
    }

    public function testCreateContainerCluster()
    {
        $containerCluster = $this -> containerCluster;
        $arr = array(
            'cls_name'=>'',
            'cls_config'=>'',
            'component_settings'=>array(
            'cls_component_config'=>array(
            'cpu_limit'=>1,
            'cpu_request'=>1,
            'mem_limit'=>1,
            'mem_request'=>1,),
            'pv_component_config'=>array(
            'cpu_limit'=>1,
            'cpu_request'=>1,
            'mem_limit'=>1,
            'mem_request'=>1,),),
            'component_version'=>'',
            'cls_version'=>'',
            'cls_type'=>1,
            'component_namespace'=>'',
            'os_user'=>'',
            'os_pwd'=>'',
            'net_type'=>'',
            'node_addresses'=>array(),
            'reset_cert_sw'=>1,
            'cc_uuid'=>'',
            'schedule_svr_uuid'=>'',
            'log_save_time'=>1,
            'log_limit'=>1,
            'log_interval'=>1,
            'host'=>array(
            'ip'=>'',),
        );
        
        
        $res = $containerCluster -> createContainerCluster($arr);
        $this->do_assert($res);
    }

    public function testListContainerCluster()
    {
        $containerCluster = $this -> containerCluster;
        $arr = array();
        
        
        $res = $containerCluster -> listContainerCluster($arr);
        $this->do_assert($res);
    }

    public function testDescribeContainerCluster()
    {
        $containerCluster = $this -> containerCluster;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $containerCluster -> describeContainerCluster($arr);
        $this->do_assert($res);
    }

    public function testModifyContainerCluster()
    {
        $containerCluster = $this -> containerCluster;
        $arr = array(
            'cls_name'=>'',
            'cls_config'=>array(),
            'component_settings'=>array(
            'cls_component_config'=>array(
            'cpu_limit'=>1,
            'cpu_request'=>1,
            'mem_limit'=>1,
            'mem_request'=>1,),
            'pv_component_config'=>array(
            'cpu_limit'=>1,
            'cpu_request'=>1,
            'mem_limit'=>1,
            'mem_request'=>1,),),
            'component_version'=>'',
            'current_context'=>'',
            'cls_version'=>'',
            'authorization_info'=>'',
            'random_str'=>'',
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $containerCluster -> modifyContainerCluster($arr);
        $this->do_assert($res);
    }

    public function testDeleteContainerCluster()
    {
        $containerCluster = $this -> containerCluster;
        $arr = array(
            'cls_uuids'=>array(),
            'force'=>1,
        );
        
        
        $res = $containerCluster -> deleteContainerCluster($arr);
        $this->do_assert($res);
    }

    public function testCreateCallbackSettings()
    {
        $containerCluster = $this -> containerCluster;
        $arr = array(
            'name'=>'',
            'callback_scene'=>1,
            'callback_content'=>array(
            '0'=>array(
            'no'=>1,
            'container_name'=>'',
            'container_image'=>'',
            'cmd'=>'',
            'on_error'=>'',
            'timeout'=>1,
            'load_volume'=>'',
            'wait_timeout'=>1,),),
            'note'=>'',
        );
        
        
        $res = $containerCluster -> createCallbackSettings($arr);
        $this->do_assert($res);
    }

    public function testListCallbackSettings()
    {
        $containerCluster = $this -> containerCluster;
        $arr = array();
        
        
        $res = $containerCluster -> listCallbackSettings($arr);
        $this->do_assert($res);
    }

    public function testDescribeCallbackSettings()
    {
        $containerCluster = $this -> containerCluster;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $containerCluster -> describeCallbackSettings($arr);
        $this->do_assert($res);
    }

    public function testModifyCallbackSettings()
    {
        $containerCluster = $this -> containerCluster;
        $arr = array(
            'name'=>'',
            'type'=>1,
            'cls_uuid'=>'',
            'pod'=>'',
            'uuid'=>'8A7245fD-D68d-9753-5DEC-6A6405DA5bc9',
            'user_uuid'=>'E679EF73-5288-E3C4-9608-B33B47416B87',
            'username'=>'admin',
            'random_uuid'=>'E679EF73-5288-E3C4-9608-B33B47416B87',
            'before_backup'=>array(
            '0'=>array(
            'cmd'=>'',
            'container'=>'',
            'error_handling'=>'',
            'timeout'=>'',),),
            'after_backup'=>array(
            '0'=>array(
            'cmd'=>'',
            'container'=>'',
            'error_handling'=>'',
            'timeout'=>'',),),
            'init_container'=>array(
            '0'=>array(
            'name'=>'',
            'mirror'=>'',
            'cmd'=>'',
            'volume'=>'',),),
            'recovery_callback'=>array(
            '0'=>array(
            'container'=>'',
            'cmd'=>'',
            'error_handling'=>'',
            'exec_timeout'=>1,
            'wait_timeout'=>1,),),
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $containerCluster -> modifyCallbackSettings($arr);
        $this->do_assert($res);
    }

    public function testDeleteCallbackSettings()
    {
        $containerCluster = $this -> containerCluster;
        $arr = array(
            'uuids'=>array(),
        );
        
        
        $res = $containerCluster -> deleteCallbackSettings($arr);
        $this->do_assert($res);
    }

    public function testCloneCallbackSettings()
    {
        $containerCluster = $this -> containerCluster;
        $arr = array(
            'operate'=>'',
            'uuids'=>array(),
        );
        
        
        $res = $containerCluster -> cloneCallbackSettings($arr);
        $this->do_assert($res);
    }

    public function testVerifyCallbackSettingsPod()
    {
        $containerCluster = $this -> containerCluster;
        $arr = array(
            'cls_uuid'=>'',
            'pod'=>'',
        );
        
        
        $res = $containerCluster -> verifyCallbackSettingsPod($arr);
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