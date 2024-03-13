<?php
namespace i2up\Test\v20240228\resource;

use i2up\resource\v20240228\HdfsPlatform;
use i2up\common\Auth;
                
class HdfsPlatformTest extends \PHPUnit_Framework_TestCase
 {
    private $hdfsPlatform;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> hdfsPlatform = new HdfsPlatform(new Auth());
    }

    public function testCreateHdfsPlatform()
    {
        $hdfsPlatform = $this -> hdfsPlatform;
        $arr = array(
            'hdfs_name' => '',
            'hdfs_type' => '0',
            'config_addr' => '',
            'config_port' => 1,
            'end_point' => '',
            'conf_path' => '',
            'user' => '',
            'kerberos_switch' => 0,
            'keytab' => '',
            'principal' => '',
            'comment' => '',
            'hive_switch' => 1,
            'hive' => array(
                'end_point' => '',
                'conf_path' => '',
                'user' => '',
                'kerberos_switch' => '',
                'keytab' => '',
                'principal' => '',
            ),
            'bind_lic_list' => array(),
            'cc_ip_uuid' => '',
        );
        $res = $hdfsPlatform -> createHdfsPlatform($arr);
        $this->do_assert($res);
    }

    public function testModifyHdfsPlatform()
    {
        $hdfsPlatform = $this -> hdfsPlatform;
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111',
            'hdfs_name' => '',
            'hdfs_type' => '0',
            'config_addr' => '',
            'config_port' => 1,
            'end_point' => '',
            'conf_path' => '',
            'user' => '',
            'kerberos_switch' => 0,
            'keytab' => '',
            'principal' => '',
            'comment' => '',
            'hive_switch' => 1,
            'hive' => array(
                'end_point' => '',
                'conf_path' => '',
                'user' => '',
                'kerberos_switch' => '',
                'keytab' => '',
                'principal' => '',
            ),
            'random_str' => '',
            'bind_lic_list' => array(),
            'cc_ip_uuid' => '',
        );
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
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111'
        );
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
        );
        $res = $hdfsPlatform -> listHdfsHiveEntity($arr);
        $this->do_assert($res);
    }

    private function do_assert($res)
    {
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}