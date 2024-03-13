<?php
namespace i2up\Test\v20240228\upmonitor;

use i2up\upmonitor\v20240228\UpMonitor;
use i2up\common\Auth;
                
class UpMonitorTest extends \PHPUnit_Framework_TestCase
 {
    private $upMonitor;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> upMonitor = new UpMonitor(new Auth());
    }

    public function testAuthUpMonitor()
    {
        $upMonitor = $this -> upMonitor;
        $arr = array(
            'access_key'=>'oishvmn5YPHJcEDaIjtwd0R9Ug7BN1fk',
            'secret_key'=>'fkLiyqsG3P1AzB5jWtYbZa7TU8RN9wSVhe6EldOo',
            'ip'=>'172.20.2.70',
            'port'=>'58086',
        );
        $res = $upMonitor -> authUpMonitor($arr);
        $this->do_assert($res);
    }

    public function testDescribeUpMonitorToken()
    {
        $upMonitor = $this -> upMonitor;
        $arr = array(
            'up_uuid'=>'CE753C48-96F9-6C38-C3DE-A25E7405D03F',
        );
        $res = $upMonitor -> describeUpMonitorToken($arr);
        $this->do_assert($res);
    }

    public function testCreateUpMonitor()
    {
        $upMonitor = $this -> upMonitor;
        $arr = array(
            'access_key'=>'oishvmn5YPHJcEDaIjtwd0R9Ug7BN1fk',
            'biz_grp_list'=>array(),
            'comment'=>'备注xxx',
            'secret_key'=>'fkLiyqsG3P1AzB5jWtYbZa7TU8RN9wSVhe6EldOo',
            'ip'=>'172.20.2.70',
            'port'=>'58086',
            'up_uuid'=>'CE753C48-96F9-6C38-C3DE-A25E7405D03F',
            'up_name'=>'就这个控制机',
        );
        $res = $upMonitor -> createUpMonitor($arr);
        $this->do_assert($res);
    }

    public function testModifyUpMonitor()
    {
        $upMonitor = $this -> upMonitor;
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111',
            'up_name'=>'就这个控制机',
            'access_key'=>'oishvmn5YPHJcEDaIjtwd0R9Ug7BN1fk',
            'secret_key'=>'fkLiyqsG3P1AzB5jWtYbZa7TU8RN9wSVhe6EldOo',
            'ip'=>'172.20.2.70',
            'port'=>'58086',
            'comment'=>'备注xxx',
            'biz_grp_list'=>array(),
            'random_str'=>'11111111-1111-1111-1111-111111111111',
        );
        $res = $upMonitor -> modifyUpMonitor($arr);
        $this->do_assert($res);
    }

    public function testDescribeUpMonitor()
    {
        $upMonitor = $this -> upMonitor;
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111',
        );
        $res = $upMonitor -> describeUpMonitor($arr);
        $this->do_assert($res);
    }

    public function testListUpMonitor()
    {
        $upMonitor = $this -> upMonitor;
        $arr = array(
            'limit'=>10,
            'page'=>1,
            'filter_by_biz_grp'=>1,
            'where_args[up_uuid]'=>'',
            'search_field'=>'',
            'search_value'=>'',
        );
        $res = $upMonitor -> listUpMonitor($arr);
        $this->do_assert($res);
    }

    public function testRefreshUpMonitor()
    {
        $upMonitor = $this -> upMonitor;
        $arr = array(
            'up_uuids'=>array(
            '0'=>'CE753C48-96F9-6C38-C3DE-A25E7405D03F',),
            'operate'=>'refresh',
        );
        $res = $upMonitor -> refreshUpMonitor($arr);
        $this->do_assert($res);
    }

    public function testListUpMonitorStatus()
    {
        $upMonitor = $this -> upMonitor;
        $arr = array(
            'up_uuids'=>array(
            '0'=>'CE753C48-96F9-6C38-C3DE-A25E7405D03F',),
        );
        $res = $upMonitor -> listUpMonitorStatus($arr);
        $this->do_assert($res);
    }

    public function testDeleteUpMonitor()
    {
        $upMonitor = $this -> upMonitor;
        $arr = array(
            'up_uuids'=>array(
            '0'=>'CE753C48-96F9-6C38-C3DE-A25E7405D03F',),
        );
        $res = $upMonitor -> deleteUpMonitor($arr);
        $this->do_assert($res);
    }

    public function testListUpMonitorRules()
    {
        $upMonitor = $this -> upMonitor;
        $arr = array(
            'type'=>1,
            'search_field'=>'',
            'search_value'=>'',
            'up_uuid'=>'',
        );
        $res = $upMonitor -> listUpMonitorRules($arr);
        $this->do_assert($res);
    }

    public function testListUpMonitorPlat()
    {
        $upMonitor = $this -> upMonitor;
        $arr = array(
            'filter_by_biz_grp'=>1,
            'where_args[up_uuid]'=>'',
            'search_field'=>'',
            'search_value'=>'',
        );
        $res = $upMonitor -> listUpMonitorPlat($arr);
        $this->do_assert($res);
    }

    private function do_assert($res)
    {
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}