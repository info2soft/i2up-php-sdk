<?php
/**
 * Create by PhpStorm
 * User: Lis
 * Date: 2020/10/9
 * Time: 15:34
 */

namespace i2up\Test\cloud;

use i2up\cloud\v20200721\CloudEcs;
use i2up\common\Auth;
use i2up\Config;

class CloudEcsTest extends \PHPUnit_Framework_TestCase
{
    private $cloudBackup;

    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $params = array(
            'username' => 'admin',
            'pwd' => 'Info1234',
            'cache_path' => __DIR__ . '/../',
            'ip' => Config::baseUrl
        );
        $auth = new Auth($params);
        $this->cloudBackup = new CloudEcs($auth);
    }

    public function testCreateEcs()
    {
        $cloudBackup = $this -> cloudBackup;
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
        );
        $res = $cloudBackup -> createEcs($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListEcs()
    {
        $cloudBackup = $this -> cloudBackup;
        $arr = array(
            'cloud_uuid'=>'',
            'page'=>1,
            'limit'=>1,
        );
        $res = $cloudBackup -> listEcs($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListVncConsole()
    {
        $cloudBackup = $this -> cloudBackup;
        $arr = array(
            'ecs_id'=>'',
        );
        $res = $cloudBackup -> listVncConsole($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListEcsStatus()
    {
        $cloudBackup = $this -> cloudBackup;
        $arr = array(
        );
        $res = $cloudBackup -> listEcsStatus($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testAttachPoint()
    {
        $cloudBackup = $this -> cloudBackup;
        $arr = array(
            'ecs_id'=>'',
        );
        $res = $cloudBackup -> attachPoint($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testBindNode()
    {
        $cloudBackup = $this -> cloudBackup;
        $arr = array(
            'ecs_id'=>'',
            'node_uuid'=>'',
            'operate'=>'',
            'node_name'=>'',
        );
        $res = $cloudBackup -> bindNode($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testUntieNode()
    {
        $cloudBackup = $this -> cloudBackup;
        $arr = array(
            'ecs_id'=>'',
            'node_uuid'=>'',
            'operate'=>'',
            'node_name'=>'',
        );
        $res = $cloudBackup -> untieNode($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testConfigRehearse()
    {
        $cloudBackup = $this -> cloudBackup;
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
                'disabled'=> '',
            'is_public'=>1,),
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
                    'egress '=>'ICMP',),),
            'network_switch'=>1,
        );
        $res = $cloudBackup -> configRehearse($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListRehearseGroup()
    {
        $cloudBackup = $this -> cloudBackup;
        $arr = array(
            'limit'=>1,
            'page'=>1,
            'cloud_uuid'=>'',
        );
        $res = $cloudBackup -> listRehearseGroup($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testCreateRehearseGroup()
    {
        $cloudBackup = $this -> cloudBackup;
        $arr = array(
            'group_uuid'=>'',
            'group_name'=>'',
            'ecs_ids'=>array(
                '0'=>'396c8bde-2d3a-4cad-87ea-8d1f81e2451c',
                '1'=>'f3ca421d-9b6e-42b9-b911-36ebbeabb485',),
            'group_content'=>'',
        );
        $res = $cloudBackup -> createRehearseGroup($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDeleteRehearseGroup()
    {
        $cloudBackup = $this -> cloudBackup;
        $arr = array(
            'group_uuids'=>array(
                '0'=>'A14875A3-738E-3E5B-65D3-483CADE35E5D',
                '1'=>'A14875A3-738E-3E5B-65D3-483CADE35E5D',),
        );
        $res = $cloudBackup -> deleteRehearseGroup($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeRehearseGroup()
    {
        $cloudBackup = $this -> cloudBackup;
        $arr = array(
        );
        $res = $cloudBackup -> describeRehearseGroup($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}