<?php
namespace i2up\Test\v20240228\resource;

use i2up\resource\v20240228\Cluster;
use i2up\common\Auth;
                
class ClusterTest extends \PHPUnit_Framework_TestCase
 {
    private $cluster;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> cluster = new Cluster(new Auth());
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
            'node_type'=>3,
        );
        $res = $cluster -> authCls($arr);
        $this->do_assert($res);
    }

    public function testVerifyClsNode()
    {
        $cluster = $this -> cluster;
        $arr = array(
            'node_uuid'=>'BD7D3EF7-2F75-E2BB-A2CB-CFE936CF1F6C',
            'cls_name'=>'cluster-2018',
            'cls_node_name'=>'cluster-node1',
            'node_type'=>1,
        );
        $res = $cluster -> verifyClsNode($arr);
        $this->do_assert($res);
    }

    public function testClsNodeInfo()
    {
        $cluster = $this -> cluster;
        $arr = array(
            'cls_ip'=>'',
        );
        $res = $cluster -> clsNodeInfo($arr);
        $this->do_assert($res);
    }

    public function testCreateCls()
    {
        $cluster = $this -> cluster;
        $arr = array (
            'cls' =>
                array (
                    'comment' => '',
                    'cls_disk' =>
                        array (
                            0 => 'E:\\',
                        ),
                    'config_port' => '26821',
                    'cls_node' =>
                        array (
                            0 =>
                                array (
                                    'host_name' => '',
                                    'host_ip' => '',
                                    'node_uuid' => '',
                                    'node_name' => '',
                                ),
                        ),
                    'node_type' => 1,
                    'cls_is_local' => 1,
                    'os_user' => 'i2test2018.com\\administrator',
                    'config_addr' => '192.168.74.25',
                    'node_name' => 'cls',
                    'other_params' =>
                        array (
                            'ora_home' => '',
                            'grid_home' => '',
                            'user' => '',
                        ),
                    'maintenance' => 0,
                    'iam_username' => '',
                    'iam_password' => '',
                    'iam_owning_account' => '',
                    'resource_set_name' => '',
                    'resource_set_id' => '',
                    'xbsa_ssl' => 1,
                    'root_cert' => '',
                    'user_cert' => '',
                    'user_private_key' => '',
                    'user_private_key_pwd' => '',
                    'business_addr' => '',
                    'management_addr' => '',
                ),
        );
        $res = $cluster -> createCls($arr);
        $this->do_assert($res);
    }

    public function testDescribeCls()
    {
        $cluster = $this -> cluster;
        $arr = array('uuid' => '11111111-1111-1111-1111-111111111111');
        $res = $cluster -> describeCls($arr);
        $this->do_assert($res);
    }

    public function testModifyCls()
    {
        $cluster = $this -> cluster;
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111',
            'cls'=>array(
            'comment'=>'',
            'cls_disk'=>array(
                '0'=>'E:\\',
            ),
            'config_port'=>'26821',
            'cls_node'=>array(
                '0'=>'BD7D3EF7-2F75-E2BB-A2CB-CFE936CF1F6C',
            ),
            'node_type'=>1,
            'cls_is_local'=>1,
            'os_user'=>'i2test2018.com\administrator',
            'config_addr'=>'192.168.74.25',
            'node_name'=>'cls',
            'random_str'=>'11111111-1111-1111-1111-111111111111',
            'maintenance'=>0,
                'other_params'=>array(
                    'ora_home'=>'',
                    'grid_home'=>'',
                    'user'=>'',
                ),
            ),
        );
        $res = $cluster -> modifyCls($arr);
        $this->do_assert($res);
    }

    public function testListCls()
    {
        $cluster = $this -> cluster;
        $arr = array(
            'limit'=>1,
            'search_value'=>'',
            'search_field'=>'',
            'page'=>1,
            'where_args[node_type]'=>1,
            'where_args[status]'=>'',
        );
        $res = $cluster -> listCls($arr);
        $this->do_assert($res);
    }

    public function testClsDetail()
    {
        $cluster = $this -> cluster;
        $arr = array(
            'operate'=>'detail',
            'node_uuid'=>'11111111-1111-1111-1111-111111111111',
        );
        $res = $cluster -> clsDetail($arr);
        $this->do_assert($res);
    }

    public function testListClsStatus()
    {
        $cluster = $this -> cluster;
        $arr = array(
            'node_uuids'=>array(
                '0'=>'11111111-1111-1111-1111-111111111111',
            ),
            'force_refresh'=>1,
        );
        $res = $cluster -> listClsStatus($arr);
        $this->do_assert($res);
    }

    public function testDeleteCls()
    {
        $cluster = $this -> cluster;
        $arr = array(
            'node_uuids'=>array(
                '0'=>'11111111-1111-1111-1111-111111111111',
            ),
            'force'=>1,
        );
        $res = $cluster -> deleteCls($arr);
        $this->do_assert($res);
    }

    public function testListRacStatus()
    {
        $cluster = $this -> cluster;
        $arr = array(
            'node_uuids'=>array('11111111-1111-1111-1111-111111111111'),
            'force_refresh'=>1,
        );
        $res = $cluster -> listRacStatus($arr);
        $this->do_assert($res);
    }

    public function testSwitchMaintenance()
    {
        $cluster = $this -> cluster;
        $arr = array(
            'uuid'=>'11111111-1111-1111-1111-111111111111',
            'switch'=>0,
        );
        $res = $cluster -> switchMaintenance($arr);
        $this->do_assert($res);
    }

    public function testGetGaussInfo()
    {
        $cluster = $this -> cluster;
        $arr = array(
            'config_addr'=>'',
            'user'=>'',
            'config_port'=>'',
        );
        $res = $cluster -> getGaussInfo($arr);
        $this->do_assert($res);
    }

    public function testListGaussHcsInstances()
    {
        $cluster = $this -> cluster;
        $arr = array(
            'limit'=>'',
            'page'=>'',
            'where_args[]'=>'[{"node_uuid":""}]',
            'search_field'=>'node_name',
            'search_value'=>'',
        );
        $res = $cluster -> listGaussHcsInstances($arr);
        $this->do_assert($res);
    }

    public function testListGaussHcsDefaultInstance()
    {
        $cluster = $this -> cluster;
        $arr = array(
            'node_uuid'=>'',
        );
        $res = $cluster -> listGaussHcsDefaultInstance($arr);
        $this->do_assert($res);
    }

    private function do_assert($res)
    {
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}