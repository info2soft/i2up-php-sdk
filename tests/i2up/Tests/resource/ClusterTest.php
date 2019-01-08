<?php
namespace i2up\Test\resource;

use i2up\resource\v20181217\Cluster;
use i2up\common\Auth;
use i2up\Config;

class ClusterTest extends \PHPUnit_Framework_TestCase
{
    private $cluster;

    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $auth = new Auth(Config::baseUrl, 'admin', 'Info1234', __DIR__ . '/../');
        $this -> cluster = new Cluster($auth);
    }

    public function testAuthCls()
    {
        $cluster = $this -> cluster;
        $arr = array(
            'cls_is_local'=>1,
            'os_pwd'=>'',
            'os_user'=>'',
            'config_addr'=>'',
            'config_port'=>1,
        );
        $res = $cluster -> authCls($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testVerifyClsNode()
    {
        $cluster = $this -> cluster;
        $arr = array(
            'node_uuid'=>'',
            'cls_name'=>'cluster_2018',
            'cls_node_name'=>'cluster-node1',
        );
        $res = $cluster -> verifyClsNode($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testCreateCls()
    {
        $cluster = $this -> cluster;
        $arr = array(
            'cls'=>array(
                'comment'=>'',
                'cls_disk'=>array(),
                'config_port'=>'26821',
                'cls_node'=>array(),
                'node_type'=>1,
                'cls_is_local'=>1,
                'os_user'=>'',
                'config_addr'=>'192.168.74.25',
                'node_name'=>'aaaa'
            ),
        );
        $res = $cluster -> createCls($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeCls()
    {
        $cluster = $this -> cluster;
        $arr = array(
            'uuid'=>''
        );
        $res = $cluster -> describeCls($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testModifyCls()
    {
        $cluster = $this -> cluster;
        $arr = array(
            'uuid'=>'',
            'cls'=>array(
                'cls_node'=>array(),
                'os_user'=>'',
                'cls_disk'=>array(),
                'cls_is_local'=>1,
                'comment'=>'',
                'config_addr'=>'192.168.74.25',
                'config_port'=>'26821',
                'node_type'=>1,
                'node_name'=>'aaaa'
            ),
        );
        $res = $cluster -> modifyCls($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListCls()
    {
        $cluster = $this -> cluster;
        $arr = array(
            'limit'=>1,
            'search_value'=>'',
            'search_field'=>'',
            'page'=>1,
        );
        $res = $cluster -> listCls($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListClsStatus()
    {
        $cluster = $this -> cluster;
        $arr = array(
            'node_uuids'=>array(),
        );
        $res = $cluster -> listClsStatus($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDeleteCls()
    {
        $cluster = $this -> cluster;
        $arr = array(
            'node_uuids'=>array(),
        );
        $res = $cluster -> deleteCls($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testClsDetail()
    {
        $cluster = $this -> cluster;
        $arr = array(
            'operate'=>'detail',
            'node_uuid'=>'',
        );
        $res = $cluster -> clsDetail($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}