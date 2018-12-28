<?php
namespace i2up\Test\resource;

use i2up\resource\v20181217\Node;
use i2up\common\Auth;
use i2up\Config;

class NodeTest extends \PHPUnit_Framework_TestCase
{
    private $node;

    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $auth = new Auth(Config::baseUrl, 'admin', 'Info1234', __DIR__ . '/../');
        $this -> node = new Node($auth);
    }

    public function testCheckCapacity()
    {
        $node = $this -> node;
        $arr = array(
            'config_port'=>'26821',
            'cache_path'=>'C:\Program Files (x86)\info2soft\node\cache\\',
            'config_addr'=>'192.168.72.75',
        );
        $res = $node -> checkCapacity($arr);
        var_dump($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListVg()
    {
        $node = $this -> node;
        $arr = array(
            'config_port'=>'26821',
            'config_addr'=>'192.168.72.76',
        );
        $res = $node -> listVg($arr);
        var_dump($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testAuthNode()
    {
        $node = $this -> node;
        $arr = array(
            'auth_type'=>0,
            'config_addr'=>'192.168.72.75',
            'config_port'=>26821,
            'node_uuid'=>'',
            'os_user'=>'Chenky',
            'os_pwd'=>'123qwe',
            'i2id'=>'',
        );
        $res = $node -> authNode($arr);
        var_dump($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testCheckNodeOnline()
    {
        $node = $this -> node;
        $arr = array(
            'port'=>'26821',
            'ip'=>'192.168.72.75',
        );
        $res = $node -> checkNodeOnline($arr);
        var_dump($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testCreateNode()
    {
        $node = $this -> node;
        $arr = array(
            'node'=>array(
                'bak_client_max'=>'100',
                'cloud_type'=>'0',
                'bak_root'=>'',
                'monitor_switch'=>0,
                'node_role'=>'3',
                'mem_limit'=>'819',
                'config_port'=>'26821',
                'mon_save_day'=>'5',
                'vg'=>'',
                'os_type'=>2,
                'os_pwd'=>'',
                'log_path'=>'C:\Program Files (x86)\info2soft-i2node\log\\',
                'mon_data_path'=>'C:\Program Files (x86)\info2soft-i2node\log\\',
                'comment'=>'',
                'wk_path'=>array(),
                'bak_user_max'=>'100',
                'cache_path'=>'C:\Program Files (x86)\info2soft-i2node\cache\\',
                'db_save_day'=>'3',
                'proxy_switch'=>0,
                'data_addr'=>'192.168.72.76',
                'node_name'=>'N4_72.76',
                'config_addr'=>'192.168.72.76',
                'mon_send_interval'=>'10',
                'disk_limit'=>'10240',
                'reboot_sys'=>'0',
                'bind_lic_list'=>array(),
                'security_check'=>0,
                'os_user'=>'Kyran',
                'bak_service_type'=>'',
                'en_snap_switch'=>0,
                'rep_excl_path'=>array(),
                'biz_grp_list'=>array(),
                'i2id'=>''
            )
        );
        $res = $node -> createNode($arr);
        var_dump($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testModifyNode()
    {
        $node = $this -> node;
        $arr = array(
            'uuid'=>'',
            'node'=>array(
                'config_addr'=>'192.168.74.25',
                'proxy_switch'=>0,
                'security_check'=>1,
                'rep_excl_path'=>array(),
                'log_path'=>'C:\Program Files (x86)\info2soft-i2node\log\\',
                'node_role'=>'3',
                'bak_user_max'=>'100',
                'cloud_type'=>'0',
                'en_snap_switch'=>0,
                'os_pwd'=>'EnEyGDJF==',
                'vg'=>'',
                'monitor_log_path'=>'C:\Program Files (x86)\info2soft-i2node\log\\',
                'data_addr'=>'192.168.74.25',
                'moni_log_keep_node'=>'5',
                'wk_path'=>array(),
                'disk_limit'=>'40960',
                'bak_service_type'=>'',
                'mem_limit'=>'13041',
                'os_type'=>2,
                'os_user'=>'Kyran',
                'bind_lic_list'=>'93AF0C9F-14C8-41A2-31CB-AAA0F65193FA',
                'moni_log_keep_server'=>'3',
                'node_name'=>'aaaa',
                'monitor_interval'=>'10',
                'reboot_sys'=>'0',
                'bak_client_max'=>'100',
                'bak_root'=>'',
                'monitor_switch'=>0,
                'cache_path'=>'C:\Program Files (x86)\info2soft-i2node\cache\\',
                'config_port'=>'26821',
                'group_uuid'=>'F5844651-DB5B-937D-73B1-A2378810F00A',
                'comment'=>'',
                'biz_grp_list'=>array(),
                'i2id'=>'',),
        );
        $res = $node -> modifyNode($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeNode()
    {
        $node = $this -> node;
        $arr = array(
            'uuid'=>'95561172-BD9F-81F2-232D-060F080B9500'
        );
        $res = $node -> describeNode($arr);
        var_dump($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testCreateBatchNode()
    {
        $node = $this -> node;
        $arr = array(
            'base_info_list'=>array(
                '0'=>array(
                    'os_pwd'=>'123qwe',
                    'os_user'=>'chenky',
                    'config_port'=>'26821',
                    'config_addr'=>'192.168.72.76',
                    'node_name'=>'N4_72.76'
                )
            ),
            'node'=>array(
                'mem_limit'=>'819',
                'bind_lic_list'=>array(),
                'disk_limit'=>'10240',
                'monitor_interval'=>'10',
                'node_role'=>'3',
                'monitor_switch'=>0,
                'moni_log_keep_node'=>'5',
                'moni_log_keep_server'=>'3',
                'security_check'=>0,
                'biz_grp_list'=>array()
            )
        );
        $res = $node -> createBatchNode($arr);
        var_dump($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeDeviceInfo()
    {
        $node = $this -> node;
        $arr = array(
            'uuid'=>'3ADCB6B6-4F66-ECC3-93AB-D3EC4792CF19'
        );
        $res = $node -> describeDeviceInfo($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListNode()
    {
        $node = $this -> node;
        $arr = array(
            'search_value'=>'',
            'search_field'=>'',
            'limit'=>10,
            'page'=>1
        );
        $res = $node -> listNode($arr);
        var_dump($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testUpgradeNode()
    {
        $node = $this -> node;
        $arr = array(
            'node_uuids'=>array(
                '0'=>'3ADCB6B6-4F66-ECC3-93AB-D3EC4792CF19'
            ),
            'operate'=>'upgrade',
        );
        $res = $node -> upgradeNode($arr);
        var_dump($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListNodeStatus()
    {
        $node = $this -> node;
        $arr = array(
            'node_uuids'=>array(
                '0'=>'3ADCB6B6-4F66-ECC3-93AB-D3EC4792CF19'
            ),
        );
        $res = $node -> listNodeStatus($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDeleteNode()
    {
        $node = $this -> node;
        $arr = array(
            'node_uuids'=>array(
                '0'=>'3ADCB6B6-4F66-ECC3-93AB-D3EC4792CF19'
            ),
        );
        $res = $node -> deleteNode($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}