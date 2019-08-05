<?php
namespace i2up\Test\resource;

use i2up\resource\v20190805\Cluster;
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
            'os_pwd'=>'info2soft_125',
            'os_user'=>'i2test2018.com\administrator',
            'config_addr'=>'192.168.87.14',
            'config_port'=>26821,
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
            'node_uuid'=>'BD7D3EF7-2F75-E2BB-A2CB-CFE936CF1F6C',
            'cls_name'=>'cluster-2018',
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
                'cls_disk'=>array(
                    '0'=>'E:\\'
                ),
                'config_port'=>'26821',
                'cls_node'=>array(
                    '0'=>'BD7D3EF7-2F75-E2BB-A2CB-CFE936CF1F6C'
                ),
                'node_type'=>1,
                'cls_is_local'=>1,
                'os_user'=>'i2test2018.com\administrator',
                'config_addr'=>'192.168.74.25',
                'node_name'=>'cls'
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
            'uuid'=>'11111111-1111-1111-1111-111111111111'
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
            'uuid'=>'11111111-1111-1111-1111-111111111111',
            'cls'=>array(
                'comment'=>'',
                'cls_disk'=>array(
                    '0'=>'E:\\'
                ),
                'config_port'=>'26821',
                'cls_node'=>array(
                    '0'=>'BD7D3EF7-2F75-E2BB-A2CB-CFE936CF1F6C'
                ),
                'node_type'=>1,
                'cls_is_local'=>1,
                'os_user'=>'i2test2018.com\administrator',
                'config_addr'=>'192.168.74.25',
                'node_name'=>'cls',
                'random_str'=>'11111111-1111-1111-1111-111111111111'
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
            'limit'=>10,
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
            'node_uuids'=>array(
                '0'=>'11111111-1111-1111-1111-111111111111'
            ),
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
            'node_uuids'=>array(
                '0'=>'11111111-1111-1111-1111-111111111111'
            ),
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
            'node_uuid'=>'11111111-1111-1111-1111-111111111111',
        );
        $res = $cluster -> clsDetail($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
    }
}