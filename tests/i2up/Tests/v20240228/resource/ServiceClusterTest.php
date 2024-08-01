<?php
namespace i2up\Test\v20240228\resource;

use i2up\resource\v20240228\ServiceCluster;
use i2up\common\Auth;
                
class ServiceClusterTest extends \PHPUnit_Framework_TestCase
 {
    private $serviceCluster;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> serviceCluster = new ServiceCluster(new Auth());
    }

    public function testCreateServiceCls()
    {
        $serviceCluster = $this -> serviceCluster;
        $arr = array(
            'service_cls'=>array(
                'cls_name'=>'',
                'label_list'=>array(),
                'cls_node'=>array(
                    '0'=>array(
                        'hostname'=>'',
                        'ip'=>'',
                        'port'=>'',
                        'version'=>'',
                        'data_addr'=>'',
                        'os_user'=>'',
                    ),
                ),
                'service_type'=>array(),
                'bind_lic_list'=>array(),
                'cc_ip_uuid'=>'',
                'cc_ip'=>'',
                'os_type'=>1,
                'etcd_url_uuid'=>'',
                'etcd_url'=>array(
                    '0'=>array(
                        'ip'=>'',
                        'port'=>'',
                    ),
                ),
            ),
        );
        $res = $serviceCluster -> createServiceCls($arr);
        $this->do_assert($res);
    }

    public function testModifyServiceCls()
    {
        $serviceCluster = $this -> serviceCluster;
        $arr = array(
            'service_cls'=>array(
            'cls_name'=>'svc1',
            'cls_uuid'=>'AB790C28-62D6-7236-612F-65D73C80036F',
            'label_list'=>array(),
            'random_str'=>'AB790B28-62D6-7236-612F-65D73C80036F',
            'cls_node'=>array(
            '0'=>array(
            'hostname'=>'',
            'ip'=>'',
            'port'=>'',),),
            'service_type'=>array(),
            'bind_lic_list'=>array(),),
        );
        $res = $serviceCluster -> modifyServiceCls($arr);
        $this->do_assert($res);
    }

    public function testDeleteServiceCls()
    {
        $serviceCluster = $this -> serviceCluster;
        $arr = array(
            'cls_uuids'=>array('11111111-1111-1111-1111-111111111111'),
            'force'=>1,
        );
        $res = $serviceCluster -> deleteServiceCls($arr);
        $this->do_assert($res);
    }

    public function testDescribeServiceCls()
    {
        $serviceCluster = $this -> serviceCluster;
        $arr = array('uuid' => '11111111-1111-1111-1111-111111111111');
        $res = $serviceCluster -> describeServiceCls($arr);
        $this->do_assert($res);
    }

    public function testListServiceCls()
    {
        $serviceCluster = $this -> serviceCluster;
        $arr = array(
            'limit'=>1,
            'search_value'=>'',
            'search_field'=>'',
            'page'=>1,
        );
        $res = $serviceCluster -> listServiceCls($arr);
        $this->do_assert($res);
    }

    public function testListServiceClsStatus()
    {
        $serviceCluster = $this -> serviceCluster;
        $arr = array(
            'cls_uuids'=>array('11111111-1111-1111-1111-111111111111'),
            'force_refresh'=>1,
        );
        $res = $serviceCluster -> listServiceClsStatus($arr);
        $this->do_assert($res);
    }

    public function testChkServiceClsNode()
    {
        $serviceCluster = $this -> serviceCluster;
        $arr = array(
            'cls_uuid'=>'',
            'node_uuid'=>'',
        );
        $res = $serviceCluster -> chkServiceClsNode($arr);
        $this->do_assert($res);
    }

    public function testConfigServiceCls()
    {
        $serviceCluster = $this -> serviceCluster;
        $arr = array(
            'config'=>array(
            'cc_ip_uuid'=>'',
            'log_path'=>'',
            'keep_log_days'=>1,
            'mem_limit'=>1,
            'disk_limit'=>1,
            'disk_free_space_limit'=>1,
            'security_check'=>1,
            'comment'=>'',
            'monitor_switch'=>1,
            'mon_send_interval'=>1,
            'mon_data_path'=>'',
            'db_save_day'=>1,
            'mon_save_day'=>1,
            'renew_public_key'=>1,),
            'cls_uuid'=>'',
        );
        $res = $serviceCluster -> configServiceCls($arr);
        $this->do_assert($res);
    }

    public function testDescribeServiceClsConfig()
    {
        $serviceCluster = $this -> serviceCluster;
        $arr = array(
            'cls_uuid'=>'',
        );
        $res = $serviceCluster -> describeServiceClsConfig($arr);
        $this->do_assert($res);
    }

    public function testListServiceClsValidNode()
    {
        $serviceCluster = $this -> serviceCluster;
        $arr = array(
            'cls_uuid'=>'',
        );
        $res = $serviceCluster -> listServiceClsValidNode($arr);
        $this->do_assert($res);
    }

    private function do_assert($res)
    {
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}