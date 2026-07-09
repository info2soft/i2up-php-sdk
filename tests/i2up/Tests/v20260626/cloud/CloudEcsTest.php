<?php
namespace i2up\Test\v20260626\cloud;

use i2up\cloud\v20260626\CloudEcs;
use i2up\common\Auth;
use PHPUnit\Framework\TestCase;
                
class CloudEcsTest extends TestCase
 {
    private $cloudEcs;
    
    public function setUp():void
    {
        parent::setup();
        $this -> cloudEcs = new CloudEcs(new Auth());
    }

    public function testCreateEcs()
    {
        $cloudEcs = $this -> cloudEcs;
        $arr = array(
            'cloud_uuid'=>'',
            'ecs_name'=>'',
            'flavorid'=>'',
            'volume_sys_id'=>'',
            'server_zone'=>'',
            'volume_data_ids'=>array(),
            'wk_uuid'=>'',
            'rc_point'=>array(
            'time'=>'',
            'disk_num'=>1,
            'total_size'=>'',
            'list'=>array(
            '0'=>array(
            'id'=>'',
            'size'=>'',
            'boot_index'=>1,),),),
            'from_backup'=>0,
            'bind_public_ip'=>1,
            'cloud_backup_uuid'=>'',
            'ecs_type'=>1,
            'config'=>array(
            'vpc'=>array(
            'id'=>'',
            'name'=>'',),
            'subnet'=>array(
            '0'=>array(
            'id'=>'',
            'name'=>'',
            'network_id'=>'b1e0f8fc-3be7-4539-b68e-ab7b7b69852c',
            'ip'=>'',),),
            'security_group'=>array(
            'group_id'=>'',
            'group_name'=>'',
            'ingress'=>'',
            'egress'=>'',),
            'subnet_type'=>1,
            'band_width'=>1,
            'cpu'=>'',
            'ram'=>'',),
            'disk_billing_type'=>1,
            'order_cycle_unit'=>1,
            'order_cycle'=>1,
            'bk_uuid'=>'',
            'priority'=>1,
            'host_name'=>'',
            'vpc_settings'=>array(
            '0'=>array(
            'vpc_id'=>'',
            'network_id'=>'',
            'security_group_id'=>'',
            'ipaddress'=>'',
            'port_id'=>'',
            'primary'=>false,),),
        );
        
        
        $res = $cloudEcs -> createEcs($arr);
        $this->do_assert($res);
    }

    public function testListVncConsole()
    {
        $cloudEcs = $this -> cloudEcs;
        $arr = array(
            'ecs_id'=>'',
        );
        
        
        $res = $cloudEcs -> listVncConsole($arr);
        $this->do_assert($res);
    }

    public function testListEcsStatus()
    {
        $cloudEcs = $this -> cloudEcs;
        $arr = array(
            'ecs_ids'=>array(),
            'force_refresh'=>1,
        );
        
        
        $res = $cloudEcs -> listEcsStatus($arr);
        $this->do_assert($res);
    }

    public function testListEcs()
    {
        $cloudEcs = $this -> cloudEcs;
        $arr = array(
            'cloud_uuid'=>'',
            'page'=>1,
            'limit'=>1,
            'type'=>1,
        );
        
        
        $res = $cloudEcs -> listEcs($arr);
        $this->do_assert($res);
    }

    public function testDeleteEcs()
    {
        $cloudEcs = $this -> cloudEcs;
        $arr = array(
            'ecs_ids'=>array(),
            'complete_delete'=>1,
        );
        
        
        $res = $cloudEcs -> deleteEcs($arr);
        $this->do_assert($res);
    }

    public function testStartECS()
    {
        $cloudEcs = $this -> cloudEcs;
        $arr = array(
            'ecs_ids'=>array(),
            'operate'=>'',
        );
        
        
        $res = $cloudEcs -> startECS($arr);
        $this->do_assert($res);
    }

    public function testStopECS()
    {
        $cloudEcs = $this -> cloudEcs;
        $arr = array(
            'ecs_ids'=>array(),
            'operate'=>'',
        );
        
        
        $res = $cloudEcs -> stopECS($arr);
        $this->do_assert($res);
    }

    public function testGetTakeoverECSInfo()
    {
        $cloudEcs = $this -> cloudEcs;
        $arr = array(
            'cloud_uuid'=>'',
        );
        
        
        $res = $cloudEcs -> getTakeoverECSInfo($arr);
        $this->do_assert($res);
    }

    public function testGetTakeoverVPCInfo()
    {
        $cloudEcs = $this -> cloudEcs;
        $arr = array(
            'cloud_uuid'=>'',
            'ecs_id'=>'',
        );
        
        
        $res = $cloudEcs -> getTakeoverVPCInfo($arr);
        $this->do_assert($res);
    }

    public function testAttachPoint()
    {
        $cloudEcs = $this -> cloudEcs;
        $arr = array(
            'ecs_id'=>'',
        );
        
        
        $res = $cloudEcs -> attachPoint($arr);
        $this->do_assert($res);
    }

    public function testBindNode()
    {
        $cloudEcs = $this -> cloudEcs;
        $arr = array(
            'ecs_id'=>'',
            'node_uuid'=>'',
            'operate'=>'',
            'node_name'=>'',
        );
        
        
        $res = $cloudEcs -> bindNode($arr);
        $this->do_assert($res);
    }

    public function testUntieNode()
    {
        $cloudEcs = $this -> cloudEcs;
        $arr = array(
            'ecs_id'=>'',
            'node_uuid'=>'',
            'operate'=>'',
            'node_name'=>'',
        );
        
        
        $res = $cloudEcs -> untieNode($arr);
        $this->do_assert($res);
    }

    public function testConfigRehearse()
    {
        $cloudEcs = $this -> cloudEcs;
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
        );
        
        
        $res = $cloudEcs -> configRehearse($arr);
        $this->do_assert($res);
    }

    public function testListRehearseGroup()
    {
        $cloudEcs = $this -> cloudEcs;
        $arr = array(
            'limit'=>1,
            'page'=>1,
            'cloud_uuid'=>'',
        );
        
        
        $res = $cloudEcs -> listRehearseGroup($arr);
        $this->do_assert($res);
    }

    public function testCreateRehearseGroup()
    {
        $cloudEcs = $this -> cloudEcs;
        $arr = array(
            'group_uuid'=>'',
            'group_name'=>'',
            'ecs_ids'=>array(
            '0'=>'396c8bde-2d3a-4cad-87ea-8d1f81e2451c',
            '1'=>'f3ca421d-9b6e-42b9-b911-36ebbeabb485',),
            'group_content'=>'',
        );
        
        
        $res = $cloudEcs -> createRehearseGroup($arr);
        $this->do_assert($res);
    }

    public function testDeleteRehearseGroup()
    {
        $cloudEcs = $this -> cloudEcs;
        $arr = array(
            'group_uuids'=>array(
            '0'=>'A14875A3-738E-3E5B-65D3-483CADE35E5D',
            '1'=>'A14875A3-738E-3E5B-65D3-483CADE35E5D',),
        );
        
        
        $res = $cloudEcs -> deleteRehearseGroup($arr);
        $this->do_assert($res);
    }

    public function testDescribeRehearseGroup()
    {
        $cloudEcs = $this -> cloudEcs;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $cloudEcs -> describeRehearseGroup($arr);
        $this->do_assert($res);
    }

    public function testDescribeEcs()
    {
        $cloudEcs = $this -> cloudEcs;
        $arr = array(
            'cloud_backup_uuid'=>'',
        );
        
        
        $res = $cloudEcs -> describeEcs($arr);
        $this->do_assert($res);
    }

    public function testBatchCreateEcs()
    {
        $cloudEcs = $this -> cloudEcs;
        $arr = array(
            'list'=>array(
            '0'=>array(
            'ecs_name'=>'',
            'flavorid'=>'',
            'volume_sys_id'=>'',
            'server_zone'=>'',
            'volume_data_ids'=>array(),
            'wk_uuid'=>'',
            'rc_point'=>array(
            'time'=>'',
            'disk_num'=>1,
            'total_size'=>'',
            'list'=>array(
            '0'=>array(
            'id'=>'',
            'size'=>'',
            'boot_index'=>1,),),),
            'bind_public_ip'=>1,
            'cloud_backup_uuid'=>'',
            'config'=>array(
            'vpc'=>array(
            'id'=>'',
            'name'=>'',),
            'subnet'=>array(
            '0'=>array(
            'id'=>'',
            'name'=>'',
            'network_id'=>'b1e0f8fc-3be7-4539-b68e-ab7b7b69852c',
            'ip'=>'',),),
            'security_group'=>array(
            'group_id'=>'',
            'group_name'=>'',
            'ingress'=>'',
            'egress'=>'',),
            'subnet_type'=>1,
            'band_width'=>1,
            'cpu'=>'',
            'ram'=>'',),
            'disk_billing_type'=>1,
            'order_cycle_unit'=>1,
            'order_cycle'=>1,
            'bk_uuid'=>'',
            'priority'=>1,
            'cloud_uuid'=>'',
            'host_name'=>'',),),
            'prefix'=>'',
            'ecs_type'=>'',
        );
        
        
        $res = $cloudEcs -> batchCreateEcs($arr);
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