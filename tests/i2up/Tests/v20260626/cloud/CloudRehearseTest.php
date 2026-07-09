<?php
namespace i2up\Test\v20260626\cloud;

use i2up\cloud\v20260626\CloudRehearse;
use i2up\common\Auth;
use PHPUnit\Framework\TestCase;
                
class CloudRehearseTest extends TestCase
 {
    private $cloudRehearse;
    
    public function setUp():void
    {
        parent::setup();
        $this -> cloudRehearse = new CloudRehearse(new Auth());
    }

    public function testListHost()
    {
        $cloudRehearse = $this -> cloudRehearse;
        $arr = array();
        
        
        $res = $cloudRehearse -> listHost($arr);
        $this->do_assert($res);
    }

    public function testListEcs()
    {
        $cloudRehearse = $this -> cloudRehearse;
        $arr = array(
            'cloud_uuid'=>'',
            'page'=>1,
            'limit'=>1,
            'group_uuid'=>'',
        );
        
        
        $res = $cloudRehearse -> listEcs($arr);
        $this->do_assert($res);
    }

    public function testListRecoveryPoint()
    {
        $cloudRehearse = $this -> cloudRehearse;
        $arr = array(
            'cloud_backup_uuid'=>'',
            'page'=>1,
            'size'=>1,
            'rc_point'=>'',
        );
        
        
        $res = $cloudRehearse -> listRecoveryPoint($arr);
        $this->do_assert($res);
    }

    public function testListAvailabilityZone()
    {
        $cloudRehearse = $this -> cloudRehearse;
        $arr = array(
            'ecs_id'=>'',
        );
        
        
        $res = $cloudRehearse -> listAvailabilityZone($arr);
        $this->do_assert($res);
    }

    public function testListFlavor()
    {
        $cloudRehearse = $this -> cloudRehearse;
        $arr = array(
            'ecs_id'=>'',
            'region_id'=>'',
            'project_id'=>'',
        );
        
        
        $res = $cloudRehearse -> listFlavor($arr);
        $this->do_assert($res);
    }

    public function testListVpc()
    {
        $cloudRehearse = $this -> cloudRehearse;
        $arr = array(
            'cloud_uuid'=>'',
            'region_id'=>'',
            'zone_id'=>'',
            'resource_group_id'=>'',
            'organization_id'=>'',
            'account_id'=>'',
        );
        
        
        $res = $cloudRehearse -> listVpc($arr);
        $this->do_assert($res);
    }

    public function testListSubnet()
    {
        $cloudRehearse = $this -> cloudRehearse;
        $arr = array(
            'vpc_id'=>'356c3295-afd0-4a09-8e6f-03620ef70854',
            'cloud_uuid'=>'',
            'region_id'=>'',
            'project_id'=>'',
            'cloud_backup_uuid'=>'',
            'zone_id'=>'',
        );
        
        
        $res = $cloudRehearse -> listSubnet($arr);
        $this->do_assert($res);
    }

    public function testListSecureGroup()
    {
        $cloudRehearse = $this -> cloudRehearse;
        $arr = array(
            'cloud_uuid'=>'',
            'ecs_id'=>'',
            'region_id'=>'',
            'vpc_id'=>'',
            'account_id'=>'',
        );
        
        
        $res = $cloudRehearse -> listSecureGroup($arr);
        $this->do_assert($res);
    }

    public function testCreateRehearse()
    {
        $cloudRehearse = $this -> cloudRehearse;
        $arr = array(
            'cloud_backup_uuid'=>'',
            'source'=>array(
            'node_name'=>'8.180',
            'host_name'=>'Windows Ftp Server',
            'host_ip'=>'192.168.8.180',
            'node_os'=>'Windows Server 2012 R2 64bits',
            'vcpus'=>'8',
            'memory'=>'40957',
            'disk_num'=>'2',
            'disk_size'=>'64420392960',
            'ecs_id'=>'',),
            'zone'=>array(
            'zone_name'=>'华北-北京一',
            'availability_zone'=>'cn-east-2c',),
            'rc_point'=>array(
            'time'=>'2019-08-13 17:13:28',
            'id'=>'7a268c3f-4d73-4e6c-b4fd-c3be235f33dd',
            'disk_num'=>2,
            'total_size'=>'8000',
            'list'=>array(
            '0'=>array(
            'id'=>'7a268c3f-4d73-4e6c-b4fd-c3be235f41dd',
            'size'=>'4000',
            'boot_index'=>0,),),),
            'ecs_name'=>'Rehearse lij-test',
            'flavor'=>array(
            'id'=>'ai1.2xlarge.4',
            'name'=>'ai1.2xlarge.4',
            'vcpus'=>'8',
            'ram'=>32768,
            'disk'=>'0',
            'disabled'=>false,
            'is_public'=>true,),
            'vpc'=>array(
            'id'=>'356c3295-afd0-4a09-8e6f-03620ef70854',
            'name'=>'vpc-49a5,192.168.0.0/16',),
            'subnet'=>array(
            'id'=>'3509d824-1a5b-41e5-9570-4cf51440078f',
            'name'=>'subnet-1df4,192.168.64.0/24',),
            'ip_address'=>'192.168.192.101',
            'security_group'=>array(
            '0'=>array(
            'group_id'=>'3509d824-1a5b-41e5-9570-4cf51440078f',
            'group_name'=>'i2',
            'ingress'=>'ICMP,TCP/22,80,443,26821-26868,55443',
            'egress'=>'ICMP',),),
            'network_switch'=>1,
            'cpu'=>1,
            'ram'=>1,
        );
        
        
        $res = $cloudRehearse -> createRehearse($arr);
        $this->do_assert($res);
    }

    public function testCreateBatchRehearse()
    {
        $cloudRehearse = $this -> cloudRehearse;
        $arr = array(
            'rehearse_list'=>array(
            '0'=>array(
            'cloud_backup_uuid'=>'',
            'source'=>array(
            'node_name'=>'8.180',
            'host_name'=>'Windows Ftp Server',
            'host_ip'=>'192.168.8.180',
            'node_os'=>'Windows Server 2012 R2 64bits',
            'vcpus'=>'8',
            'memory'=>'40957',
            'disk_num'=>'2',
            'disk_size'=>'64420392960',
            'ecs_id'=>'',),
            'zone'=>array(
            'zone_name'=>'华北-北京一',
            'availability_zone'=>'cn-east-2c',),
            'rc_point'=>array(
            'time'=>'2019-08-13 17:13:28',
            'id'=>'7a268c3f-4d73-4e6c-b4fd-c3be235f33dd',
            'disk_num'=>2,
            'total_size'=>'8000',
            'list'=>array(
            '0'=>array(
            'id'=>'7a268c3f-4d73-4e6c-b4fd-c3be235f41dd',
            'size'=>'4000',
            'boot_index'=>0,),),),
            'ecs_name'=>'Rehearse lij-test',
            'flavor'=>array(
            'id'=>'ai1.2xlarge.4',
            'name'=>'ai1.2xlarge.4',
            'vcpus'=>'8',
            'ram'=>32768,
            'disk'=>'0',
            'disabled'=>false,
            'is_public'=>true,),
            'vpc'=>array(
            'id'=>'356c3295-afd0-4a09-8e6f-03620ef70854',
            'name'=>'vpc-49a5,192.168.0.0/16',),
            'subnet'=>array(
            'id'=>'3509d824-1a5b-41e5-9570-4cf51440078f',
            'name'=>'subnet-1df4,192.168.64.0/24',),
            'ip_address'=>'192.168.192.101',
            'security_group'=>array(
            '0'=>array(
            'group_id'=>'3509d824-1a5b-41e5-9570-4cf51440078f',
            'group_name'=>'i2',
            'ingress'=>'ICMP,TCP/22,80,443,26821-26868,55443',
            'egress'=>'ICMP',),),
            'network_switch'=>1,),),
        );
        
        
        $res = $cloudRehearse -> createBatchRehearse($arr);
        $this->do_assert($res);
    }

    public function testListRehearse()
    {
        $cloudRehearse = $this -> cloudRehearse;
        $arr = array(
            'page'=>1,
            'limit'=>1,
        );
        
        
        $res = $cloudRehearse -> listRehearse($arr);
        $this->do_assert($res);
    }

    public function testListRehearseStatus()
    {
        $cloudRehearse = $this -> cloudRehearse;
        $arr = array(
            'job_ids'=>array(
            '0'=>'f1312ce5-7cb0-4e0c-a687-4ba4e5475e4c',),
        );
        
        
        $res = $cloudRehearse -> listRehearseStatus($arr);
        $this->do_assert($res);
    }

    public function testListVncConsole()
    {
        $cloudRehearse = $this -> cloudRehearse;
        $arr = array(
            'job_id'=>'',
            'ecs_id'=>'',
        );
        
        
        $res = $cloudRehearse -> listVncConsole($arr);
        $this->do_assert($res);
    }

    public function testEvacuateRehearse()
    {
        $cloudRehearse = $this -> cloudRehearse;
        $arr = array(
            'job_id'=>'',
            'is_group'=>1,
        );
        
        
        $res = $cloudRehearse -> evacuateRehearse($arr);
        $this->do_assert($res);
    }

    public function testEvacuateBatchRehearse()
    {
        $cloudRehearse = $this -> cloudRehearse;
        $arr = array(
            'job_ids'=>array(),
            'is_group'=>1,
        );
        
        
        $res = $cloudRehearse -> evacuateBatchRehearse($arr);
        $this->do_assert($res);
    }

    public function testListRehearseDetail()
    {
        $cloudRehearse = $this -> cloudRehearse;
        $arr = array(
            'job_id'=>'',
            'type'=>'',
        );
        
        
        $res = $cloudRehearse -> listRehearseDetail($arr);
        $this->do_assert($res);
    }

    public function testDescribeRehearse()
    {
        $cloudRehearse = $this -> cloudRehearse;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $cloudRehearse -> describeRehearse($arr);
        $this->do_assert($res);
    }

    public function testDeleteRehearse()
    {
        $cloudRehearse = $this -> cloudRehearse;
        $arr = array(
            'job_ids'=>array(),
        );
        
        
        $res = $cloudRehearse -> deleteRehearse($arr);
        $this->do_assert($res);
    }

    public function testListEvacuatedRehearse()
    {
        $cloudRehearse = $this -> cloudRehearse;
        $arr = array(
            'limit'=>1,
            'page'=>1,
        );
        
        
        $res = $cloudRehearse -> listEvacuatedRehearse($arr);
        $this->do_assert($res);
    }

    public function testListNpsvrRehearseStatus()
    {
        $cloudRehearse = $this -> cloudRehearse;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $cloudRehearse -> listNpsvrRehearseStatus($arr);
        $this->do_assert($res);
    }

    public function testListNpsvrRehearseProgress()
    {
        $cloudRehearse = $this -> cloudRehearse;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $cloudRehearse -> listNpsvrRehearseProgress($arr);
        $this->do_assert($res);
    }

    public function testListNetwork()
    {
        $cloudRehearse = $this -> cloudRehearse;
        $arr = array(
            'cloud_uuid'=>'8E6FB8D2-F830-D67B-DA35-8E16F175053B',
            'network_conf'=>array(
            '0'=>array(
            'vpc'=>array(
            'id'=>'356c3295-afd0-4a09-8e6f-03620ef70854',
            'name'=>'vpc-49a5,192.168.0.0/16',),
            'subnet'=>array(
            'id'=>'3509d824-1a5b-41e5-9570-4cf51440078f',
            'name'=>'subnet-1df4,192.168.64.0/24',),),),
        );
        
        
        $res = $cloudRehearse -> listNetwork($arr);
        $this->do_assert($res);
    }

    public function testCreateNetwork()
    {
        $cloudRehearse = $this -> cloudRehearse;
        $arr = array(
            'cloud_uuid'=>'',
        );
        
        
        $res = $cloudRehearse -> createNetwork($arr);
        $this->do_assert($res);
    }

    public function testListSubnetUsedIp()
    {
        $cloudRehearse = $this -> cloudRehearse;
        $arr = array(
            'cloud_uuid'=>'',
            'subnet_id'=>'',
            'region_id'=>'',
            'project_id'=>'',
        );
        
        
        $res = $cloudRehearse -> listSubnetUsedIp($arr);
        $this->do_assert($res);
    }

    public function testCreateGroup()
    {
        $cloudRehearse = $this -> cloudRehearse;
        $arr = array(
            'group_uuid'=>'',
            'group_config'=>array(),
            'rehearse_name'=>'',
            'cloud_uuid'=>'',
        );
        
        
        $res = $cloudRehearse -> createGroup($arr);
        $this->do_assert($res);
    }

    public function testListGroup()
    {
        $cloudRehearse = $this -> cloudRehearse;
        $arr = array();
        
        
        $res = $cloudRehearse -> listGroup($arr);
        $this->do_assert($res);
    }

    public function testDescribeGroup()
    {
        $cloudRehearse = $this -> cloudRehearse;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $cloudRehearse -> describeGroup($arr);
        $this->do_assert($res);
    }

    public function testDeleteGroup()
    {
        $cloudRehearse = $this -> cloudRehearse;
        $arr = array(
            'job_ids'=>array(),
        );
        
        
        $res = $cloudRehearse -> deleteGroup($arr);
        $this->do_assert($res);
    }

    public function testCreateEvacuateGroup()
    {
        $cloudRehearse = $this -> cloudRehearse;
        $arr = array(
            'job_id'=>'',
        );
        
        
        $res = $cloudRehearse -> createEvacuateGroup($arr);
        $this->do_assert($res);
    }

    public function testListGroupStatus()
    {
        $cloudRehearse = $this -> cloudRehearse;
        $arr = array(
            'job_ids'=>array(),
        );
        
        
        $res = $cloudRehearse -> listGroupStatus($arr);
        $this->do_assert($res);
    }

    public function testListEvacuatedGroup()
    {
        $cloudRehearse = $this -> cloudRehearse;
        $arr = array();
        
        
        $res = $cloudRehearse -> listEvacuatedGroup($arr);
        $this->do_assert($res);
    }

    public function testListBatchRehearse()
    {
        $cloudRehearse = $this -> cloudRehearse;
        $arr = array(
            'job_ids'=>array(),
        );
        
        
        $res = $cloudRehearse -> listBatchRehearse($arr);
        $this->do_assert($res);
    }

    public function testDescribeFlavor()
    {
        $cloudRehearse = $this -> cloudRehearse;
        $arr = array(
            'flavor_id'=>'',
            'server_zone'=>'',
            'cloud_uuid'=>'',
        );
        
        
        $res = $cloudRehearse -> describeFlavor($arr);
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