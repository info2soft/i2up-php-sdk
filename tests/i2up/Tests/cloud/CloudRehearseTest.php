<?php
/**
 * Create by PhpStorm
 * User: Lis
 * Date: 2020/10/9
 * Time: 15:48
 */

namespace i2up\Test\cloud;

use i2up\cloud\v20200721\CloudRehearse;
use i2up\common\Auth;
use i2up\Config;

class CloudRehearseTest extends \PHPUnit_Framework_TestCase
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
        $this->cloudBackup = new CloudRehearse($auth);
    }


    public function testListHost()
    {
        $cloudBackup = $this -> cloudBackup;
        $arr = array(
        );
        $res = $cloudBackup -> listHost($arr);
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
            'group_uuid'=>'',
        );
        $res = $cloudBackup -> listEcs($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListRecoveryPoint()
    {
        $cloudBackup = $this -> cloudBackup;
        $arr = array(
            'cloud_backup_uuid'=>'',
        );
        $res = $cloudBackup -> listRecoveryPoint($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListAvailabilityZone()
    {
        $cloudBackup = $this -> cloudBackup;
        $arr = array(
            'ecs_id'=>'',
        );
        $res = $cloudBackup -> listAvailabilityZone($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListFlavor()
    {
        $cloudBackup = $this -> cloudBackup;
        $arr = array(
            'ecs_id'=>'',
        );
        $res = $cloudBackup -> listFlavor($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListVpc()
    {
        $cloudBackup = $this -> cloudBackup;
        $arr = array(
            'cloud_uuid'=>'',
        );
        $res = $cloudBackup -> listVpc($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListSubnet()
    {
        $cloudBackup = $this -> cloudBackup;
        $arr = array(
            'vpc_id'=>'356c3295-afd0-4a09-8e6f-03620ef70854',
            'cloud_uuid'=>'',
        );
        $res = $cloudBackup -> listSubnet($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListSecureGroup()
    {
        $cloudBackup = $this -> cloudBackup;
        $arr = array(
            'cloud_uuid'=>'',
            'ecs_id'=>'',
        );
        $res = $cloudBackup -> listSecureGroup($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testCreateRehearse()
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
        $res = $cloudBackup -> createRehearse($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testCreateBatchRehearse()
    {
        $cloudBackup = $this -> cloudBackup;
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
                    'network_switch'=>1,),),
        );
        $res = $cloudBackup -> createBatchRehearse($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListRehearse()
    {
        $cloudBackup = $this -> cloudBackup;
        $arr = array(
            'page'=>1,
            'limit'=>1,
        );
        $res = $cloudBackup -> listRehearse($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListRehearseStatus()
    {
        $cloudBackup = $this -> cloudBackup;
        $arr = array(
            'job_ids'=>array(
                '0'=>'f1312ce5-7cb0-4e0c-a687-4ba4e5475e4c',),
        );
        $res = $cloudBackup -> listRehearseStatus($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListVncConsole()
    {
        $cloudBackup = $this -> cloudBackup;
        $arr = array(
            'job_id'=>'',
            'ecs_id'=>'',
        );
        $res = $cloudBackup -> listVncConsole($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testEvacuateRehearse()
    {
        $cloudBackup = $this -> cloudBackup;
        $arr = array(
            'job_id'=>'',
            'is_group'=>1,
        );
        $res = $cloudBackup -> evacuateRehearse($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testEvacuateBatchRehearse()
    {
        $cloudBackup = $this -> cloudBackup;
        $arr = array(
            'job_ids'=>array(),
            'is_group'=>1,
        );
        $res = $cloudBackup -> evacuateBatchRehearse($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListRehearseDetail()
    {
        $cloudBackup = $this -> cloudBackup;
        $arr = array(
            'job_id'=>'',
            'type'=>'',
        );
        $res = $cloudBackup -> listRehearseDetail($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeRehearse()
    {
        $cloudBackup = $this -> cloudBackup;
        $arr = array(
        );
        $res = $cloudBackup -> describeRehearse($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDeleteRehearse()
    {
        $cloudBackup = $this -> cloudBackup;
        $arr = array(
            'job_ids'=>array(),
        );
        $res = $cloudBackup -> deleteRehearse($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListEvacuatedRehearse()
    {
        $cloudBackup = $this -> cloudBackup;
        $arr = array(
            'limit'=>1,
            'page'=>1,
        );
        $res = $cloudBackup -> listEvacuatedRehearse($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListNpsvrRehearseStatus()
    {
        $cloudBackup = $this -> cloudBackup;
        $arr = array(
        );
        $res = $cloudBackup -> listNpsvrRehearseStatus($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListNpsvrRehearseProgress()
    {
        $cloudBackup = $this -> cloudBackup;
        $arr = array(
        );
        $res = $cloudBackup -> listNpsvrRehearseProgress($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListNetwork()
    {
        $cloudBackup = $this -> cloudBackup;
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
        $res = $cloudBackup -> listNetwork($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testCreateNetwork()
    {
        $cloudBackup = $this -> cloudBackup;
        $arr = array(
            'cloud_uuid'=>'',
        );
        $res = $cloudBackup -> createNetwork($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListSubnetUsedIp()
    {
        $cloudBackup = $this -> cloudBackup;
        $arr = array(
            'cloud_uuid'=>'',
            'subnet_id'=>'',
        );
        $res = $cloudBackup -> listSubnetUsedIp($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testCreateGroup()
    {
        $cloudBackup = $this -> cloudBackup;
        $arr = array(
            'group_uuid'=>'',
            'group_config'=>array(),
            'rehearse_name'=>'',
            'cloud_uuid'=>'',
        );
        $res = $cloudBackup -> createGroup($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListGroup()
    {
        $cloudBackup = $this -> cloudBackup;
        $arr = array(
        );
        $res = $cloudBackup -> listGroup($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeGroup()
    {
        $cloudBackup = $this -> cloudBackup;
        $arr = array(
        );
        $res = $cloudBackup -> describeGroup($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDeleteGroup()
    {
        $cloudBackup = $this -> cloudBackup;
        $arr = array(
            'job_ids'=>array(),
        );
        $res = $cloudBackup -> deleteGroup($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testCreateEvacuateGroup()
    {
        $cloudBackup = $this -> cloudBackup;
        $arr = array(
            'job_id'=>'',
        );
        $res = $cloudBackup -> createEvacuateGroup($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListGroupStatus()
    {
        $cloudBackup = $this -> cloudBackup;
        $arr = array(
            'job_ids'=>array(),
        );
        $res = $cloudBackup -> listGroupStatus($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListEvacuatedGroup()
    {
        $cloudBackup = $this -> cloudBackup;
        $arr = array(
        );
        $res = $cloudBackup -> listEvacuatedGroup($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListBatchRehearse()
    {
        $cloudBackup = $this -> cloudBackup;
        $arr = array(
            'job_ids'=>array(),
        );
        $res = $cloudBackup -> listBatchRehearse($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}