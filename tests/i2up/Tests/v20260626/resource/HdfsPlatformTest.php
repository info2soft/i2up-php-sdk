<?php
namespace i2up\Test\v20260626\resource;

use i2up\resource\v20260626\HdfsPlatform;
use i2up\common\Auth;
use PHPUnit\Framework\TestCase;
                
class HdfsPlatformTest extends TestCase
 {
    private $hdfsPlatform;
    
    public function setUp():void
    {
        parent::setup();
        $this -> hdfsPlatform = new HdfsPlatform(new Auth());
    }

    public function testCreateHdfsPlatform()
    {
        $hdfsPlatform = $this -> hdfsPlatform;
        $arr = array(
            'hdfs_name'=>'',
            'hdfs_type'=>'0',
            'config_addr'=>'',
            'config_port'=>1,
            'end_point'=>'',
            'conf_path'=>'',
            'user'=>'',
            'kerberos_switch'=>0,
            'keytab'=>'',
            'principal'=>'',
            'comment'=>'',
            'bind_lic_list'=>array(),
            'cc_ip_uuid'=>'',
            'hdfs_role'=>1,
            'maintenance'=>0,
            'hive_end_point'=>'',
            'hive_conf_path'=>'',
            'jdbc_sw'=>1,
        );
        
        
        $res = $hdfsPlatform -> createHdfsPlatform($arr);
        $this->do_assert($res);
    }

    public function testModifyHdfsPlatform()
    {
        $hdfsPlatform = $this -> hdfsPlatform;
        $arr = array(
            'random_str'=>'',
            'hdfs_name'=>'',
            'hdfs_type'=>'0',
            'config_addr'=>'',
            'config_port'=>1,
            'end_point'=>'',
            'conf_path'=>'',
            'user'=>'',
            'kerberos_switch'=>0,
            'keytab'=>'',
            'principal'=>'',
            'comment'=>'',
            'bind_lic_list'=>array(),
            'cc_ip_uuid'=>'',
            'hdfs_role'=>1,
            'maintenance'=>0,
            'hive_end_point'=>'',
            'hive_conf_path'=>'',
            'jdbc_sw'=>1,
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $hdfsPlatform -> modifyHdfsPlatform($arr);
        $this->do_assert($res);
    }

    public function testListHdfsPlatform()
    {
        $hdfsPlatform = $this -> hdfsPlatform;
        $arr = array(
            'search_value'=>'',
            'search_field'=>'',
            'limit'=>15,
            'page'=>1,
        );
        
        
        $res = $hdfsPlatform -> listHdfsPlatform($arr);
        $this->do_assert($res);
    }

    public function testDescribeHdfsPlatform()
    {
        $hdfsPlatform = $this -> hdfsPlatform;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $hdfsPlatform -> describeHdfsPlatform($arr);
        $this->do_assert($res);
    }

    public function testDeleteHdfsPlatform()
    {
        $hdfsPlatform = $this -> hdfsPlatform;
        $arr = array(
            'uuids'=>array(),
            'force'=>0,
        );
        
        
        $res = $hdfsPlatform -> deleteHdfsPlatform($arr);
        $this->do_assert($res);
    }

    public function testListHdfsPath()
    {
        $hdfsPlatform = $this -> hdfsPlatform;
        $arr = array(
            'uuid'=>'',
            'path'=>'/',
        );
        
        
        $res = $hdfsPlatform -> listHdfsPath($arr);
        $this->do_assert($res);
    }

    public function testListHdfsHiveEntity()
    {
        $hdfsPlatform = $this -> hdfsPlatform;
        $arr = array(
            'uuid'=>'',
            'database'=>'',
            'page'=>1,
            'limit'=>1,
            'search_name'=>'',
        );
        
        
        $res = $hdfsPlatform -> listHdfsHiveEntity($arr);
        $this->do_assert($res);
    }

    public function testRefreshHdfsHiveEntity()
    {
        $hdfsPlatform = $this -> hdfsPlatform;
        $arr = array(
            'uuid'=>'',
            'database'=>'',
        );
        
        
        $res = $hdfsPlatform -> refreshHdfsHiveEntity($arr);
        $this->do_assert($res);
    }

    public function testMaintainHdfsPlatform()
    {
        $hdfsPlatform = $this -> hdfsPlatform;
        $arr = array(
            'hdfs_uuids'=>array(),
            'operate'=>'',
            'switch'=>0,
        );
        
        
        $res = $hdfsPlatform -> maintainHdfsPlatform($arr);
        $this->do_assert($res);
    }

    public function testListHdfsPlatformStatus()
    {
        $hdfsPlatform = $this -> hdfsPlatform;
        $arr = array(
            'hdfs_uuids'=>array(),
        );
        
        
        $res = $hdfsPlatform -> listHdfsPlatformStatus($arr);
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