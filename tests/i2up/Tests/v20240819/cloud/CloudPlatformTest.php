<?php
namespace i2up\Test\v20240819\cloud;

use i2up\cloud\v20240819\CloudPlatform;
use i2up\common\Auth;
                
class CloudPlatformTest extends \PHPUnit_Framework_TestCase
 {
    private $cloudPlatform;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> cloudPlatform = new CloudPlatform(new Auth());
    }

    public function testListCloudPlatformRegion()
    {
        $cloudPlatform = $this -> cloudPlatform;
        $arr = array(
            'cloud_type'=>1,
        );
        
        
        $res = $cloudPlatform -> listCloudPlatformRegion($arr);
        $this->do_assert($res);
    }

    public function testRegisterCloudPlatform()
    {
        $cloudPlatform = $this -> cloudPlatform;
        $arr = array(
            'authurl'=>'',
            'os_user'=>'',
            'os_pwd'=>'',
            'user_domain_id'=>'',
            'cloud_name'=>'',
            'config_addr'=>'192.168.66.66',
            'register_type'=>'',
            'iam_user'=>'',
            'cloud_type'=>1,
            'user_domain_name'=>'',
            'region'=>'',
            'bind_lic_list'=>array(),
            'maintenance'=>0,
            'cc_ip_uuid'=>'',
            'access_key'=>'',
            'secret_access_key'=>'',
            'mfa_switch'=>1,
            'connect_port'=>5000,
            'project_id'=>'',
            'npsvr_uuid'=>'',
        );
        
        
        $res = $cloudPlatform -> registerCloudPlatform($arr);
        $this->do_assert($res);
    }

    public function testModifyCloudPlatform()
    {
        $cloudPlatform = $this -> cloudPlatform;
        $arr = array(
            'os_user'=>'',
            'os_pwd'=>'',
            'user_domain_id'=>'',
            'register_type'=>'',
            'iam_user'=>'',
            'cloud_uuid'=>'',
            'bind_lic_list'=>'',
            'https://apiref.info2soft.com/repository/editor?id=28&itf=824'=>0,
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $cloudPlatform -> modifyCloudPlatform($arr);
        $this->do_assert($res);
    }

    public function testDescribeCloudPlatform()
    {
        $cloudPlatform = $this -> cloudPlatform;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $cloudPlatform -> describeCloudPlatform($arr);
        $this->do_assert($res);
    }

    public function testListCloudPlatform()
    {
        $cloudPlatform = $this -> cloudPlatform;
        $arr = array(
            'page'=>1,
            'limit'=>10,
            'where_args'=>array(
            'vp_type'=>1,),
        );
        
        
        $res = $cloudPlatform -> listCloudPlatform($arr);
        $this->do_assert($res);
    }

    public function testDeleteCloudPlatform()
    {
        $cloudPlatform = $this -> cloudPlatform;
        $arr = array(
            'cloud_uuids'=>array(
            '0'=>'11111111-1111-1111-1111-111111111111',),
            'force'=>1,
        );
        
        
        $res = $cloudPlatform -> deleteCloudPlatform($arr);
        $this->do_assert($res);
    }

    public function testListCloudPlatformStatus()
    {
        $cloudPlatform = $this -> cloudPlatform;
        $arr = array(
            'vp_uuids'=>array(),
            'force_refresh'=>1,
        );
        
        
        $res = $cloudPlatform -> listCloudPlatformStatus($arr);
        $this->do_assert($res);
    }

    public function testSyncEcs()
    {
        $cloudPlatform = $this -> cloudPlatform;
        $arr = array(
            'cloud_uuid'=>'',
            'region_id'=>'',
            'project_id'=>'',
        );
        
        
        $res = $cloudPlatform -> syncEcs($arr);
        $this->do_assert($res);
    }

    public function testSyncVolume()
    {
        $cloudPlatform = $this -> cloudPlatform;
        $arr = array(
            'cloud_uuid'=>'',
        );
        
        
        $res = $cloudPlatform -> syncVolume($arr);
        $this->do_assert($res);
    }

    public function testListFlavor()
    {
        $cloudPlatform = $this -> cloudPlatform;
        $arr = array(
            'cloud_uuid'=>'',
            'server_zone'=>'cn-east-2a',
            'region_id'=>'',
            'project_id'=>'',
            'nic_count'=>'',
            'cpu'=>'',
            'mem_mb'=>'',
        );
        
        
        $res = $cloudPlatform -> listFlavor($arr);
        $this->do_assert($res);
    }

    public function testListRelativeNode()
    {
        $cloudPlatform = $this -> cloudPlatform;
        $arr = array(
            'page'=>1,
            'limit'=>10,
            'cloud_uuid'=>'',
        );
        
        
        $res = $cloudPlatform -> listRelativeNode($arr);
        $this->do_assert($res);
    }

    public function testSwitchMaintenance()
    {
        $cloudPlatform = $this -> cloudPlatform;
        $arr = array(
            'uuid'=>'',
            'switch'=>0,
        );
        
        
        $res = $cloudPlatform -> switchMaintenance($arr);
        $this->do_assert($res);
    }

    public function testListRegions()
    {
        $cloudPlatform = $this -> cloudPlatform;
        $arr = array(
            'vp_uuid'=>'',
        );
        
        
        $res = $cloudPlatform -> listRegions($arr);
        $this->do_assert($res);
    }

    public function testListProjects()
    {
        $cloudPlatform = $this -> cloudPlatform;
        $arr = array(
            'vp_uuid'=>'',
        );
        
        
        $res = $cloudPlatform -> listProjects($arr);
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