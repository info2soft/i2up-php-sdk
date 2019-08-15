<?php
namespace i2up\Test\ha;

use i2up\ha\v20190805\AppHighAvailability;
use i2up\common\Auth;
use i2up\Config;

class AppHighAvailabilityTest extends \PHPUnit_Framework_TestCase
{
    private $appHighAvailability;

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
        $this -> appHighAvailability = new AppHighAvailability($auth);
    }

    public function testListHA()
    {
        $appHighAvailability = $this -> appHighAvailability;
        $arr = array(
            'filter_value'=>'',
            'filter_type'=>'',
            'page'=>'1',
            'limit'=>'10',
        );
        $res = $appHighAvailability -> listHA($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testStartHA()
    {
        $appHighAvailability = $this -> appHighAvailability;
        $arr = array(
            'ha_uuid'=>array(
                '0'=>'11111111-1111-1111-1111-111111111111'
            ),
            'node_uuid'=>'67E33CDB-D75B-15B3-367D-50C764F5A26F'
        );
        $res = $appHighAvailability -> startHA($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testStopHA()
    {
        $appHighAvailability = $this -> appHighAvailability;
        $arr = array(
            'ha_uuid'=>array(
                '0'=>'11111111-1111-1111-1111-111111111111'
            ),
            'node_uuid'=>'67E33CDB-D75B-15B3-367D-50C764F5A26F'
        );
        $res = $appHighAvailability -> stopHA($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testForceSwitchHA()
    {
        $appHighAvailability = $this -> appHighAvailability;
        $arr = array(
            'ha_uuid'=>array(
                '0'=>'11111111-1111-1111-1111-111111111111'
            ),
            'node_uuid'=>'67E33CDB-D75B-15B3-367D-50C764F5A26F'
        );
        $res = $appHighAvailability -> forceSwitchHA($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDeleteHA()
    {
        $appHighAvailability = $this -> appHighAvailability;
        $arr = array(
            'ha_uuid'=>array(
                '0'=>'11111111-1111-1111-1111-111111111111'
            )
        );
        $res = $appHighAvailability -> deleteHA($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListHAStatus()
    {
        $appHighAvailability = $this -> appHighAvailability;
        $arr = array(
            'ha_uuid'=>array(
                '0'=>'11111111-1111-1111-1111-111111111111'
            )
        );
        $res = $appHighAvailability -> listHAStatus($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeHAScriptPath()
    {
        $appHighAvailability = $this -> appHighAvailability;
        $arr = array(
            'master_uuid'=>'67E33CDB-D75B-15B3-367D-50C764F5A26F',
        );
        $res = $appHighAvailability -> describeHAScriptPath($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testHaVerifyName()
    {
        $appHighAvailability = $this -> appHighAvailability;
        $arr = array(
            'ha_name'=>'',
        );
        $res = $appHighAvailability -> haVerifyName($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testModifyHA()
    {
        $appHighAvailability = $this -> appHighAvailability;
        $arr = array (
            'heartbeat' =>
                array (
                    0 =>
                        array (
                            'interval' => 2,
                            'maxfail' => 5,
                            'protocol' => 'tcp',
                            'ifconfig' =>
                                array (
                                    0 =>
                                        array (
                                            'uuid' => '67E33CDB-D75B-15B3-367D-50C764F5A26F',
                                            'netif' => '{AB1E4EFF-14FE-441E-8A1F-EE59BDA12D6F}',
                                            'ip' => '192.168.72.75',
                                        ),
                                    1 =>
                                        array (
                                            'uuid' => 'B8566905-411E-B2CD-A742-77B1346D8E84',
                                            'netif' => '{5C3A44A0-EF11-4705-A9A3-2F3ACEED4798}',
                                            'ip' => '192.168.72.82',
                                        ),
                                ),
                            'port' => 26850,
                        ),
                ),
            'sync_data' =>
                array (
                    0 =>
                        array (
                            'back_rule' => 0,
                            'need_rep_status' => 1,
                            'create_start' => 0,
                            'wait_cache' => 1,
                            'rule_relation' =>
                                array (
                                    0 =>
                                        array (
                                            'rep_name' => 'sdk_ha-N3_72.75-N4_72.76',
                                            'autostart_rep' => 0,
                                            'path' =>
                                                array (
                                                    0 => 'E:\\test\\',
                                                ),
                                            'uuid' => '67E33CDB-D75B-15B3-367D-50C764F5A26F',
                                            'append_name' => 0,
                                        ),
                                    1 =>
                                        array (
                                            'rep_name' => 'sdk_ha-N3_72.75-N4_72.76',
                                            'autostart_rep' => 0,
                                            'path' =>
                                                array (
                                                    0 => 'E:\\test\\',
                                                ),
                                            'uuid' => 'B8566905-411E-B2CD-A742-77B1346D8E84',
                                            'append_name' => 0,
                                        ),
                                ),
                            'excludes' =>
                                array (
                                ),
                        ),
                ),
            'arbitration' =>
                array (
                    'radio' => 1,
                    'node' =>
                        array (
                            'arbit_protocol' => 'TCP',
                            'arbit_addr' => '192.168.72.82',
                            'arbit_port' => 26868,
                        ),
                    'disk' =>
                        array (
                            'path' => '',
                        ),
                ),
            'master_uuid' => '67E33CDB-D75B-15B3-367D-50C764F5A26F',
            'ha_name' => 'sdk_ha',
            'ha_uuid'=>'11111111-1111-1111-1111-111111111111',
            'res_switch' =>
                array (
                    0 =>
                        array (
                            'script' =>
                                array (
                                    'after_failover' => '',
                                    'before_failover' => '',
                                    'before_switch' => '',
                                    'after_switch' => '',
                                ),
                            'vip' =>
                                array (
                                    'top' => 0,
                                    'ip' => '192.168.72.82',
                                    'ifconfig' =>
                                        array (
                                            0 =>
                                                array (
                                                    'uuid' => '67E33CDB-D75B-15B3-367D-50C764F5A26F',
                                                    'netif' => '{AB1E4EFF-14FE-441E-8A1F-EE59BDA12D6F}',
                                                    'label' => 'Ethernet0',
                                                ),
                                            1 =>
                                                array (
                                                    'uuid' => 'B8566905-411E-B2CD-A742-77B1346D8E84',
                                                    'netif' => '{5C3A44A0-EF11-4705-A9A3-2F3ACEED4798}',
                                                    'label' => 'Ethernet0',
                                                ),
                                        ),
                                    'mask' => '255.255.255.0',
                                    'del' => 0,
                                ),
                            'type' => 'ip',
                        ),
                ),
            'auto_switch' => 1,
            'monitor' =>
                array (
                    0 =>
                        array (
                            'threshold' => 90,
                            'interval' => 2,
                            'name' => '',
                            'script' => '',
                            'access_method' => '',
                            'type' => 'cpu',
                            'great' => '',
                            'useid' => '',
                            'maxfail' => 5,
                            'action' => 'warn',
                            'residual' => 1,
                            'role' => 'master',
                            'path' => '',
                            'monitor_file' => '',
                        ),
                ),
            'node_priority' =>
                array (
                    0 =>
                        array (
                            'uuid' => '67E33CDB-D75B-15B3-367D-50C764F5A26F',
                            'priority' => 'high',
                        ),
                    1 =>
                        array (
                            'uuid' => 'B8566905-411E-B2CD-A742-77B1346D8E84',
                            'priority' => 'high',
                        ),
                ),
            'ctrl_switch' => 0,
            'random_str'=>'11111111-1111-1111-1111-111111111111'
        );
        $res = $appHighAvailability -> modifyHA($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testCreateHA()
    {
        $appHighAvailability = $this -> appHighAvailability;
        $arr = array (
            'heartbeat' =>
                array (
                    0 =>
                        array (
                            'interval' => 2,
                            'maxfail' => 5,
                            'protocol' => 'tcp',
                            'ifconfig' =>
                                array (
                                    0 =>
                                        array (
                                            'uuid' => '67E33CDB-D75B-15B3-367D-50C764F5A26F',
                                            'netif' => '{AB1E4EFF-14FE-441E-8A1F-EE59BDA12D6F}',
                                            'ip' => '192.168.72.75',
                                        ),
                                    1 =>
                                        array (
                                            'uuid' => 'B8566905-411E-B2CD-A742-77B1346D8E84',
                                            'netif' => '{5C3A44A0-EF11-4705-A9A3-2F3ACEED4798}',
                                            'ip' => '192.168.72.82',
                                        ),
                                ),
                            'port' => 26850,
                        ),
                ),
            'sync_data' =>
                array (
                    0 =>
                        array (
                            'back_rule' => 0,
                            'need_rep_status' => 1,
                            'create_start' => 0,
                            'wait_cache' => 1,
                            'rule_relation' =>
                                array (
                                    0 =>
                                        array (
                                            'rep_name' => 'sdk_ha-N3_72.75-N4_72.76',
                                            'autostart_rep' => 0,
                                            'path' =>
                                                array (
                                                    0 => 'E:\\test\\',
                                                ),
                                            'uuid' => '67E33CDB-D75B-15B3-367D-50C764F5A26F',
                                            'append_name' => 0,
                                        ),
                                    1 =>
                                        array (
                                            'rep_name' => 'sdk_ha-N3_72.75-N4_72.76',
                                            'autostart_rep' => 0,
                                            'path' =>
                                                array (
                                                    0 => 'E:\\test\\',
                                                ),
                                            'uuid' => 'B8566905-411E-B2CD-A742-77B1346D8E84',
                                            'append_name' => 0,
                                        ),
                                ),
                            'excludes' =>
                                array (
                                ),
                        ),
                ),
            'arbitration' =>
                array (
                    'radio' => 1,
                    'node' =>
                        array (
                            'arbit_protocol' => 'TCP',
                            'arbit_addr' => '192.168.72.82',
                            'arbit_port' => 26868,
                        ),
                    'disk' =>
                        array (
                            'path' => '',
                        ),
                ),
            'master_uuid' => '67E33CDB-D75B-15B3-367D-50C764F5A26F',
            'ha_name' => 'sdk_ha1',
            'res_switch' =>
                array (
                    0 =>
                        array (
                            'script' =>
                                array (
                                    'after_failover' => '',
                                    'before_failover' => '',
                                    'before_switch' => '',
                                    'after_switch' => '',
                                ),
                            'vip' =>
                                array (
                                    'top' => 0,
                                    'ip' => '192.168.72.82',
                                    'ifconfig' =>
                                        array (
                                            0 =>
                                                array (
                                                    'uuid' => '67E33CDB-D75B-15B3-367D-50C764F5A26F',
                                                    'netif' => '{AB1E4EFF-14FE-441E-8A1F-EE59BDA12D6F}',
                                                    'label' => 'Ethernet0',
                                                ),
                                            1 =>
                                                array (
                                                    'uuid' => 'B8566905-411E-B2CD-A742-77B1346D8E84',
                                                    'netif' => '{5C3A44A0-EF11-4705-A9A3-2F3ACEED4798}',
                                                    'label' => 'Ethernet0',
                                                ),
                                        ),
                                    'mask' => '255.255.255.0',
                                    'del' => 0,
                                ),
                            'type' => 'ip',
                        ),
                ),
            'auto_switch' => 1,
            'monitor' =>
                array (
                    0 =>
                        array (
                            'threshold' => 90,
                            'interval' => 2,
                            'name' => '',
                            'script' => '',
                            'access_method' => '',
                            'type' => 'cpu',
                            'great' => '',
                            'useid' => '',
                            'maxfail' => 5,
                            'action' => 'warn',
                            'residual' => 1,
                            'role' => 'master',
                            'path' => '',
                            'monitor_file' => '',
                        ),
                ),
            'node_priority' =>
                array (
                    0 =>
                        array (
                            'uuid' => '67E33CDB-D75B-15B3-367D-50C764F5A26F',
                            'priority' => 'high',
                        ),
                    1 =>
                        array (
                            'uuid' => 'B8566905-411E-B2CD-A742-77B1346D8E84',
                            'priority' => 'high',
                        ),
                ),
            'ctrl_switch' => 0,
        );
        $res = $appHighAvailability -> createHA($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListNicInfo()
    {
        $appHighAvailability = $this -> appHighAvailability;
        $arr = array(
            'node_uuid'=>array(
                '0'=>'B8566905-411E-B2CD-A742-77B1346D8E84',
                '1'=>'67E33CDB-D75B-15B3-367D-50C764F5A26F'
            ),
            'master_uuid'=>'67E33CDB-D75B-15B3-367D-50C764F5A26F',
        );
        $res = $appHighAvailability -> listNicInfo($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeHA()
    {
        $appHighAvailability = $this -> appHighAvailability;
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111'
        );
        $res = $appHighAvailability -> describeHA($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}