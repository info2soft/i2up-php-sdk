<?php
/**
 * Create by PhpStorm
 * User: Lis
 * Date: 2020/10/9
 * Time: 15:32
 */

namespace i2up\Test\cloud;

use i2up\cloud\v20200721\CloudPlatform;
use i2up\common\Auth;

class CloudPlatformTest extends \PHPUnit_Framework_TestCase
{
    private $cloudBackup;
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> cloudBackup = new CloudPlatform(new Auth());
    }

    public function testListCloudPlatformRegion()
    {
        $cloudBackup = $this -> cloudBackup;
        $arr = array(
        );
        $res = $cloudBackup -> listCloudPlatformRegion($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testRegisterCloudPlatform()
    {
        $cloudBackup = $this -> cloudBackup;
        $arr = array(
            'authurl'=>'',
            'os_user'=>'',
            'os_pwd'=>'',
            'project_id'=>'',
            'user_domain_id'=>'',
            'cloud_name'=>'',
            'config_addr'=>'192.168.66.66',
            'register_type'=>'',
            'iam_user'=>'',
            'cloud_type'=>1,
            'user_domain_name'=>'',
            'region'=>'',
            'vp_addr'=>'',
            'bind_lic_list'=>array(),
        );
        $res = $cloudBackup -> registerCloudPlatform($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testModifyCloudPlatform()
    {
        $cloudBackup = $this -> cloudBackup;
        $arr = array(
            'os_user'=>'',
            'os_pwd'=>'',
            'user_domain_id'=>'',
            'register_type'=>'',
            'iam_user'=>'',
            'cloud_uuid'=>'',
            'bind_lic_list'=>'',
        );
        $res = $cloudBackup -> modifyCloudPlatform($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDeleteCloudPlatform()
    {
        $cloudBackup = $this -> cloudBackup;
        $arr = array(
            'cloud_uuids'=>array(
                '0'=>'11111111-1111-1111-1111-111111111111',),
        );
        $res = $cloudBackup -> deleteCloudPlatform($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListCloudPlatform()
    {
        $cloudBackup = $this -> cloudBackup;
        $arr = array(
            'page'=>1,
            'limit'=>10,
        );
        $res = $cloudBackup -> listCloudPlatform($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testTempFuncName()
    {
        $cloudBackup = $this -> cloudBackup;
        $arr = array(
            'vp_uuids'=>array('11111111-1111-1111-1111-111111111111'),
        );
        $res = $cloudBackup -> tempFuncName($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeCloudPlatform()
    {
        $cloudBackup = $this -> cloudBackup;
        $arr = array(
        );
        $res = $cloudBackup -> describeCloudPlatform($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testSyncEcs()
    {
        $cloudBackup = $this -> cloudBackup;
        $arr = array(
            'cloud_uuid'=>'',
        );
        $res = $cloudBackup -> syncEcs($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testSyncVolume()
    {
        $cloudBackup = $this -> cloudBackup;
        $arr = array(
            'cloud_uuid'=>'',
        );
        $res = $cloudBackup -> syncVolume($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListFlavor()
    {
        $cloudBackup = $this -> cloudBackup;
        $arr = array(
            'cloud_uuid'=>'',
            'server_zone'=>'cn-east-2a',
        );
        $res = $cloudBackup -> listFlavor($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListRelativeNode()
    {
        $cloudBackup = $this -> cloudBackup;
        $arr = array(
            'page'=>1,
            'limit'=>10,
            'cloud_uuid'=>'',
        );
        $res = $cloudBackup -> listRelativeNode($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

}