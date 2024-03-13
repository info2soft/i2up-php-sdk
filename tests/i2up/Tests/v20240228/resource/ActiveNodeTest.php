<?php
namespace i2up\Test\v20240228\resource;

use i2up\resource\v20240228\ActiveNode;
use i2up\common\Auth;

class ActiveNodeTest extends \PHPUnit_Framework_TestCase
 {
    private $activeNode;

    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> activeNode = new ActiveNode(new Auth());
    }

    public function testListInactiveNodes()
    {
        $activeNode = $this -> activeNode;
        $arr = array();
        $res = $activeNode -> listInactiveNodes($arr);
        $this->do_assert($res);
    }

    public function testActiveNode()
    {
        $activeNode = $this -> activeNode;
        $arr = array(
            'node_name' => 'Gary Davis',
            'address' => '46.45.95.100',
            'data_port' => 26804,
            'cache_dir' => '/var/i2data/cache/',
            'password' => 'c5eFcc1e-8A24-B63d-873C-2FEC387cE2eA',
            'log_dir' => '/var/i2data/log/',
            'registered' => 1,
            'comment' => 'string',
            'web_uuid' => '7Db41FDD-C6b4-EF3A-87Ac-c6111Cf09e77',
            'port' => array(
                'iarelay' => '',
                'iamsk' => '',
                'iasync' => '',
            ),
            'maintenance' => 0,
            'node_type' => 'source',
            'phy_type' => 1,
            'biz_grp_list' => array(),
            'cluster_switch' => 1,
            'node_uuids' => '',
            'node_cluster_type' => '',
        );
        $res = $activeNode -> activeNode($arr);
        $this->do_assert($res);
    }

    public function testListNodeStatus()
    {
        $activeNode = $this -> activeNode;
        $arr = array(
            'uuids'=>array(
                '0'=>'70BAeF58-9CdE-CE24-DEAB-60258ED8FEB3',
                '1'=>'7E46bf5F-bccb-aeE2-8d9c-4BA2940AA0ba',
            ),
        );
        $res = $activeNode -> listNodeStatus($arr);
        $this->do_assert($res);
    }

    public function testListNodes()
    {
        $activeNode = $this -> activeNode;
        $arr = array(
            'page'=>1,
            'limit'=>10,
            'nodetype'=>'name',
            'search_field'=>'',
            'order_by'=>'',
            'sort'=>'name',
            'search_value'=>'',
            'where_args'=>'["node_cluster_type"=1]',
        );
        $res = $activeNode -> listNodes($arr);
        $this->do_assert($res);
    }

    public function testDescriptNode()
    {
        $activeNode = $this -> activeNode;
        $arr = array(
            'registered'=>0,
            'uuid'=>'31424826-A97D-4085-81AE-FD64EC58B6CE1',
        );
        $res = $activeNode -> descriptNode($arr);
        $this->do_assert($res);
    }

    public function testDescriptNodeDebugInfo()
    {
        $activeNode = $this -> activeNode;
        $arr = array(
            'uuid'=>'41D1C1E8-60AE-4853-9694-5599560EEB0F',
            'last_time'=>1,
        );
        $res = $activeNode -> descriptNodeDebugInfo($arr);
        $this->do_assert($res);
    }

    public function testModifyNode()
    {
        $activeNode = $this -> activeNode;
        $arr = array(
            'node_name'=>'Scott Gonzalez',
            'address'=>'192.168.12.199',
            'data_port'=>26804,
            'cache_dir'=>'/var/i2data/cache/',
            'iptoken'=>'780B4F1B-6FB9-46C4-98AC-02A8DF4A1C76',
            'log_dir'=>'/var/i2data/log/',
            'node_uuid'=>'31424826-A97D-4085-81AE-FD64EC58B6CE1',
            'registered'=>1,
            'comment'=>'string',
            'web_uuid'=>'1FF8A275-a8bb-Cdcd-ace2-A4c33bAFe23e',
            'port'=>array(
            'iarelay'=>'26806',
            'iamask'=>'26808',
            'iasync'=>'26803',),
            'maintenance'=>0,
            'node_type'=>'1111010000',
            'phy_type'=>2,
            'os_type'=>0,
            'biz_grp_list'=>array(),
        );
        $res = $activeNode -> modifyNode($arr);
        $this->do_assert($res);
    }

    public function testDeleteNode()
    {
        $activeNode = $this -> activeNode;
        $arr = array(
            'uuids'=>array(
                '0'=>'EAA8F8A5-E20A-9De3-3345-616Dad4De35D',
                '1'=>'FF8C3222-6EEf-Bc7A-cf3E-cDF224dA8cE0',
            ),
            'force'=>0,
        );
        $res = $activeNode -> deleteNode($arr);
        $this->do_assert($res);
    }

    public function testUpgradeNode()
    {
        $activeNode = $this -> activeNode;
        $arr = array(
            'uuids'=>array(
                '0'=>'F07ff70D-994f-c85b-cB28-4a9C624fF08C',
            ),
        );
        $res = $activeNode -> upgradeNode($arr);
        $this->do_assert($res);
    }

    public function testRenewActiveNode()
    {
        $activeNode = $this -> activeNode;
        $arr = array(
            'uuids'=>array(
                '0'=>'E31f676A-6ccC-B4fF-fFb1-d6FbeB7cfeb9',
            ),
        );
        $res = $activeNode -> renewActiveNode($arr);
        $this->do_assert($res);
    }

    public function testSwitchMaintenance()
    {
        $activeNode = $this -> activeNode;
        $arr = array(
            'maintenance_switch'=>0,
            'uuid'=>'bBae9dCA-f6cc-BA66-bF59-8DFc395eD094',
        );
        $res = $activeNode -> switchMaintenance($arr);
        $this->do_assert($res);
    }

    public function testGetCharset()
    {
        $activeNode = $this -> activeNode;
        $arr = array();
        $res = $activeNode -> getCharset($arr);
        $this->do_assert($res);
    }

    public function testSwitchDbMaintenance()
    {
        $activeNode = $this -> activeNode;
        $arr = array(
            'maintenance_switch'=>0,
            'uuid'=>'bBae9dCA-f6cc-BA66-bF59-8DFc395eD094',
        );
        $res = $activeNode -> switchDbMaintenance($arr);
        $this->do_assert($res);
    }

    public function testListDbs()
    {
        $activeNode = $this -> activeNode;
        $arr = array(
            'page'=>1,
            'limit'=>10,
            'search_field'=>'db_name',
            'search_value'=>'',
            'role'=>'',
            'direction'=>'',
            'db_type'=>'',
            'ip'=>'',
            'port'=>'',
            'service_name'=>'',
        );
        $res = $activeNode -> listDbs($arr);
        $this->do_assert($res);
    }

    public function testCheckDbLink()
    {
        $activeNode = $this -> activeNode;
        $arr = array(
            'uuid' => '6C4AEF37-6496-6DCD-E085-DD640001E4EC',
            'type' => 'oracle',
            'conf' =>
                array(
                    0 =>
                        array(
                            'id' => 1,
                            'name' => 'kfk',
                            'ip' => '172.20.5.116',
                            'port' => '1521',
                            'auth' => 'none',
                            'pass' =>
                                array(
                                    'user' => 'i2',
                                    'pass' => 'i2',
                                ),
                            'kerberos' =>
                                array(
                                    'principal' => '',
                                    'keytab' => '',
                                ),
                            'impala' =>
                                array(
                                    'ip' => '',
                                    'port' => '',
                                    'name' => '',
                                    'auth' => 'kerberos',
                                    'kerberos' =>
                                        array(
                                            'realm' => '',
                                            'name' => '',
                                            'host' => '',
                                            'principal' => '',
                                            'keytab' => '',
                                        ),
                                ),
                            'model' => 0,
                            'sniff' => 0,
                        ),
                    1 =>
                        array(
                            'id' => 2,
                            'name' => 'oracle',
                            'ip' => '172.20.5.116',
                            'port' => '1521',
                            'auth' => 'pass',
                            'pass' =>
                                array(
                                    'user' => 'i2',
                                    'pass' => 'i2',
                                ),
                            'kerberos' =>
                                array(
                                    'principal' => NULL,
                                    'keytab' => NULL,
                                ),
                            'impala' =>
                                array(
                                    'ip' => NULL,
                                    'port' => NULL,
                                    'name' => NULL,
                                    'auth' => NULL,
                                    'kerberos' =>
                                        array(
                                            'realm' => NULL,
                                            'name' => NULL,
                                            'host' => NULL,
                                            'principal' => NULL,
                                            'keytab' => NULL,
                                        ),
                                ),
                            'model' => 1,
                            'sniff' => 1,
                        ),
                    2 =>
                        array(
                            'id' => 3,
                            'name' => 'kfk',
                            'ip' => '172.20.5.116',
                            'port' => '1521',
                            'auth' => 'kerberos',
                            'pass' =>
                                array(
                                    'user' => NULL,
                                    'pass' => NULL,
                                ),
                            'kerberos' =>
                                array(
                                    'principal' => '',
                                    'keytab' => '',
                                ),
                            'impala' =>
                                array(
                                    'ip' => NULL,
                                    'port' => NULL,
                                    'name' => NULL,
                                    'auth' => NULL,
                                    'kerberos' =>
                                        array(
                                            'realm' => NULL,
                                            'name' => NULL,
                                            'host' => NULL,
                                            'principal' => NULL,
                                            'keytab' => NULL,
                                        ),
                                ),
                            'model' => 2,
                            'sniff' => 2,
                        ),
                    3 =>
                        array(
                            'id' => 4,
                            'name' => 'kudu',
                            'ip' => '172.20.5.116',
                            'port' => '1521',
                            'auth' => 'none',
                            'pass' =>
                                array(
                                    'user' => NULL,
                                    'pass' => NULL,
                                ),
                            'kerberos' =>
                                array(
                                    'principal' => '',
                                    'keytab' => '',
                                ),
                            'impala' =>
                                array(
                                    'ip' => '',
                                    'port' => '',
                                    'name' => '',
                                    'auth' => 'kerberos',
                                    'kerberos' =>
                                        array(
                                            'realm' => '',
                                            'name' => '',
                                            'host' => '',
                                            'principal' => '',
                                            'keytab' => '',
                                        ),
                                ),
                            'model' => 3,
                            'sniff' => 3,
                        ),
                ),
            'jsonver' =>
                array(),
        );
        $res = $activeNode -> checkDbLink($arr);
        $this->do_assert($res);
    }

    public function testListDbStatus()
    {
        $activeNode = $this -> activeNode;
        $arr = array(
            'uuids'=>'9Dcc84d3-E02A-Abf3-bE9A-9F13efefA4BA',
        );
        $res = $activeNode -> listDbStatus($arr);
        $this->do_assert($res);
    }

    public function testCreateDbUnified()
    {
        $activeNode = $this -> activeNode;
        $arr = array(
            'biz_grp_list' => array(),
            'db_name' => 'Melissa Martin',
            'node_uuid' => 'Ed4dD5F2-F763-dAf8-B55C-F9C973ecF17a',
            'db_type' => 'oracle',
            'file_open_type' => '0',
            'deploy_mode' => '0',
            'log_read_type' => 'file',
            'config' => array(
                'model' => 1,
                'sniff' => '',
                'user_management' => array(
                    '0' => array(
                        'user' => '',
                        'passwd' => '',
                        'default_db' => '',
                        'cred_uuid' => '',
                        'cred_login' => 1,
                        'url' => '',
                        'auth_uuid' => '',
                    ),
                ),
                'role' => array(
                    '0' => array(
                        'source' => 0,
                        'target' => 1,
                    ),
                ),
                'log_read' => array(
                    'os_auth' => 1,
                    'asm_instance' => '',
                    'asm_username' => '',
                    'asm_port' => 1,
                    'asm_password' => '12323131',
                ),
                'filter_session' => 1,
                'relay' => array(
                    'enable' => 1,
                    'relay_node_uuid' => '',
                ),
                'remote_file_agent' => array(
                    'enable' => 1,
                    'port' => 1,
                    'compress' => 'no',
                ),
                'db_list' => array(
                    '0' => array(
                        'disable' => 1,
                        'ip' => '',
                        'thread' => '',
                        'port' => '',
                        'http_port' => '',
                    ),
                ),
                'transport' => array(
                    'auth' => '',
                    'ssl_mode' => '',
                    'certificate' => '',
                ),
                'auth' => '',
                'replication_num' => '',
                'zookeeper' => array(
                    'set' => array(
                        '0' => array(
                            'ip' => '',
                            'port' => '',
                            'zk_node' => '',
                        ),
                    ),
                ),
                'pdserver' => array(
                    '0' => array(
                        'ip' => '',
                        'port' => '',
                        ),
                    ),
                ),
            'db_uuid' => 'f91ea093-C4AB-fAdc-cE4A-DdD4D2eeBE7e',
            'db_mode' => '',
            'cdb' => 'c8e0B0E7-64ec-A6b4-D7A7-35AafeBF0cdf',
            'maintenance' => '',
            'password' => '',
            'comment' => '',
        );
        $res = $activeNode -> createDbUnified($arr);
        $this->do_assert($res);
    }

    public function testModifyDb()
    {
        $activeNode = $this -> activeNode;
        $arr = array(
            'uuid' => 'A0A0526D-6503-5C2A-E3D8-7D85813967F1',
            'db_name' => 'Maria Perez',
            'db_uuid' => 'A0A0526D-6503-5C2A-E3D8-7D85813967F1',
            'node_uuid' => '0596a77C-64Fd-cAf2-DB9c-cAaeBD56eD88',
            'db_type' => 'oracle',
            'file_open_type' => '0',
            'deploy_mode' => '0',
            'log_read_type' => 'file',
            'config' => array(
                'username' => 'Jose Harris',
                'password' => '',
                'server_name' => '',
                'port' => 1,
                'log_read' => array(
                    'os_auth' => 1,
                    'asm_instance' => '',
                    'asm_username' => '',
                    'asm_port' => 1,
                    'asm_password' => '12323131',
                ),
                'filter_session' => 1,
                'relay' => array(
                    'enable' => 1,
                    'relay_node_uuid' => '',
                ),
                'remote_file_agent' => array(
                    'enable' => 1,
                    'port' => 1,
                    'compress' => 'no',
                ),
                'db_list' => array(
                    '0' => array(
                        'ip' => '',
                        'thread' => '',
                    ),
                ),
                'broker_server' => ' ',
                'conn_pool_max' => 1,
                'instance_name' => '',
                'database_name' => '',),
            'random_str' => '',
            'cdb' => '3FA758ce-AddD-4EcC-1C3D-01ACA0eeDa2C',
            'maintenance' => '',
        );
        $res = $activeNode -> modifyDb($arr);
        $this->do_assert($res);
    }

    public function testDescribeDbSpace()
    {
        $activeNode = $this -> activeNode;
        $arr = array(
            'uuid'=>'A0A0526D-6503-5C2A-E3D8-7D85813967F1',
        );
        $res = $activeNode -> describeDbSpace($arr);
        $this->do_assert($res);
    }

    public function testDeleteDb()
    {
        $activeNode = $this -> activeNode;
        $arr = array(
            'uuids'=>array(
                '0'=>'A0A0526D-6503-5C2A-E3D8-7D85813967F1',
            ),
            'force'=>0,
        );
        $res = $activeNode -> deleteDb($arr);
        $this->do_assert($res);
    }

    public function testBatchCreateDbs()
    {
        $activeNode = $this -> activeNode;
        $arr = array();
        $res = $activeNode -> batchCreateDbs($arr);
        $this->do_assert($res);
    }

    public function testDescribeDb()
    {
        $activeNode = $this -> activeNode;
        $arr = array('uuid' => '11111111-1111-1111-1111-111111111111');
        $res = $activeNode -> describeDb($arr);
        $this->do_assert($res);
    }

    public function testRebuildActiveNode()
    {
        $activeNode = $this -> activeNode;
        $arr = array(
            'uuid'=>'A0A0526D-6503-5C2A-E3D8-7D85813967F1',
        );
        $res = $activeNode -> rebuildActiveNode($arr);
        $this->do_assert($res);
    }

    public function testRefresgActiveNode()
    {
        $activeNode = $this -> activeNode;
        $arr = array(
            'uuid'=>'A0A0526D-6503-5C2A-E3D8-7D85813967F1',
        );
        $res = $activeNode -> refresgActiveNode($arr);
        $this->do_assert($res);
    }

    public function testRestartAllProcess()
    {
        $activeNode = $this -> activeNode;
        $arr = array(
            'uuid'=>'A0A0526D-6503-5C2A-E3D8-7D85813967F1',
        );
        $res = $activeNode -> restartAllProcess($arr);
        $this->do_assert($res);
    }

    public function testGetActiveDbAuthInfo()
    {
        $activeNode = $this -> activeNode;
        $arr = array(
            'db_uuid'=>'A0A0526D-6503-5C2A-E3D8-7D85813967F1',
        );
        $res = $activeNode -> getActiveDbAuthInfo($arr);
        $this->do_assert($res);
    }

    public function testBatchCreateSqlserverDbs()
    {
        $activeNode = $this -> activeNode;
        $arr = array(
            'bind_lic_list'=>array(),
            'db_list'=>'',
            'db_type'=>'',
            'node_uuid'=>'',
            'prefix'=>'',
            'role'=>'',
        );
        $res = $activeNode -> batchCreateSqlserverDbs($arr);
        $this->do_assert($res);
    }

    private function do_assert($res)
    {
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}