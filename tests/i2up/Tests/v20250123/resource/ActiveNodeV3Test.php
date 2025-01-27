<?php
namespace i2up\Test\v20250123\resource;

use i2up\resource\v20250123\ActiveNodeV3;
use i2up\common\Auth;
                
class ActiveNodeV3Test extends \PHPUnit_Framework_TestCase
 {
    private $activeNodeV3;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> activeNodeV3 = new ActiveNodeV3(new Auth());
    }

    public function testListDbs()
    {
        $activeNodeV3 = $this -> activeNodeV3;
        $arr = array(
            'search_field'=>'db_name',
            'search_value'=>'',
            'page'=>1,
            'limit'=>10,
            'direction'=>'',
            'db_type'=>'',
            'ip'=>'',
            'port'=>'',
            'service_name'=>'',
            'role'=>'',
        );
        
        
        $res = $activeNodeV3 -> listDbs($arr);
        $this->do_assert($res);
    }

    public function testCheckDbLink()
    {
        $activeNodeV3 = $this -> activeNodeV3;
        $arr = array(
            'jsonver'=>array(),
            'uuid'=>'6C4AEF37-6496-6DCD-E085-DD640001E4EC',
            'type'=>'oracle',
            'conf'=>array(
            '0'=>array(
            'impala'=>array(
            'ip'=>'',
            'port'=>'',
            'name'=>'',
            'auth'=>'kerberos',
            'kerberos'=>array(
            'realm'=>'',
            'name'=>'',
            'host'=>'',
            'principal'=>'',
            'keytab'=>'',),),
            'model'=>'0',
            'sniff'=>'0',
            'id'=>1,
            'name'=>'kfk',
            'ip'=>'172.20.5.116',
            'port'=>'1521',
            'auth'=>'none',
            'pass'=>array(
            'user'=>'i2',
            'pass'=>'i2',),
            'kerberos'=>array(
            'principal'=>'',
            'keytab'=>'',),),
            '1'=>array(
            'impala'=>array(
            'ip'=>'',
            'port'=>'',
            'name'=>'',
            'auth'=>'',
            'kerberos'=>array(
            'realm'=>'',
            'name'=>'',
            'host'=>'',
            'principal'=>'',
            'keytab'=>'',),),
            'model'=>'1',
            'sniff'=>'1',
            'id'=>2,
            'name'=>'oracle',
            'ip'=>'172.20.5.116',
            'port'=>'1521',
            'auth'=>'pass',
            'pass'=>array(
            'user'=>'i2',
            'pass'=>'i2',),
            'kerberos'=>array(
            'principal'=>'',
            'keytab'=>'',),),
            '2'=>array(
            'impala'=>array(
            'ip'=>'',
            'port'=>'',
            'name'=>'',
            'auth'=>'',
            'kerberos'=>array(
            'realm'=>'',
            'name'=>'',
            'host'=>'',
            'principal'=>'',
            'keytab'=>'',),),
            'model'=>'0',
            'sniff'=>'0',
            'id'=>3,
            'name'=>'kfk',
            'ip'=>'172.20.5.116',
            'port'=>'1521',
            'auth'=>'kerberos',
            'pass'=>array(
            'user'=>'',
            'pass'=>'',),
            'kerberos'=>array(
            'principal'=>'',
            'keytab'=>'',),),
            '3'=>array(
            'impala'=>array(
            'ip'=>'',
            'port'=>'',
            'name'=>'',
            'auth'=>'kerberos',
            'kerberos'=>array(
            'realm'=>'',
            'name'=>'',
            'host'=>'',
            'principal'=>'',
            'keytab'=>'',),),
            'model'=>'1',
            'sniff'=>'1',
            'id'=>4,
            'name'=>'kudu',
            'ip'=>'172.20.5.116',
            'port'=>'1521',
            'auth'=>'none',
            'pass'=>array(
            'user'=>'',
            'pass'=>'',),
            'kerberos'=>array(
            'principal'=>'',
            'keytab'=>'',),),),
        );
        
        
        $res = $activeNodeV3 -> checkDbLink($arr);
        $this->do_assert($res);
    }

    public function testListDbStatus()
    {
        $activeNodeV3 = $this -> activeNodeV3;
        $arr = array(
            'uuids'=>'1fa842DD-c92F-5F9D-4AAc-b76261cCc978',
        );
        
        
        $res = $activeNodeV3 -> listDbStatus($arr);
        $this->do_assert($res);
    }

    public function testCreateDbUnified()
    {
        $activeNodeV3 = $this -> activeNodeV3;
        $arr = array(
            'biz_grp_list'=>array(),
            'db_name'=>'Linda Clark',
            'node_uuid'=>'56785d5F-7659-948C-A13d-726BE6D9fDc2',
            'db_type'=>'oracle',
            'file_open_type'=>'0',
            'deploy_mode'=>'0',
            'log_read_type'=>'file',
            'config'=>array(
            'zookeeper'=>array(
            'set'=>array(
            '0'=>array(
            'ip'=>'',
            'port'=>'',
            'zk_node'=>'',),),),
            'pdserver'=>array(
            '0'=>array(
            'ip'=>'',
            'port'=>'',),),
            'model'=>1,
            'sniff'=>'',
            'user_management'=>array(
            '0'=>array(
            'user'=>'',
            'passwd'=>'',
            'default_db'=>'',
            'cred_uuid'=>'',
            'cred_login'=>1,
            'url'=>'',
            'auth_uuid'=>'',),),
            'role'=>array(
            '0'=>array(
            'source'=>0,
            'target'=>1,),),
            'log_read'=>array(
            'os_auth'=>1,
            'asm_instance'=>'',
            'asm_username'=>'',
            'asm_port'=>1,
            'asm_password'=>'12323131',),
            'filter_session'=>1,
            'relay'=>array(
            'enable'=>1,
            'relay_node_uuid'=>'',),
            'remote_file_agent'=>array(
            'enable'=>1,
            'port'=>1,
            'compress'=>'no',),
            'db_list'=>array(
            '0'=>array(
            'disable'=>1,
            'ip'=>'',
            'thread'=>'',
            'port'=>'',
            'http_port'=>'',),),
            'transport'=>array(
            'auth'=>'',
            'ssl_mode'=>'',
            'certificate'=>'',),
            'ocp_server'=>array(
            '0'=>array(
            'ip'=>'',
            'rpcport'=>'',
            'sqlport'=>'',),),
            'manual_ocp_conf'=>1,
            'auth'=>'',
            'replication_num'=>'',),
            'db_uuid'=>'68668d21-C6cF-2EcC-cFfB-d37759eF13a6',
            'db_mode'=>'',
            'cdb'=>'81B3ad56-E9B7-EE0e-Af5f-84Bb3AdA5dc9',
            'maintenance'=>'',
            'password'=>'',
            'comment'=>'',
        );
        
        
        $res = $activeNodeV3 -> createDbUnified($arr);
        $this->do_assert($res);
    }

    public function testModifyDb()
    {
        $activeNodeV3 = $this -> activeNodeV3;
        $arr = array(
            'random_str'=>'',
            'db_name'=>'Linda Brown',
            'db_uuid'=>'A0A0526D-6503-5C2A-E3D8-7D85813967F1',
            'node_uuid'=>'0596a77C-64Fd-cAf2-DB9c-cAaeBD56eD88',
            'db_type'=>'oracle',
            'file_open_type'=>'0',
            'deploy_mode'=>'0',
            'log_read_type'=>'file',
            'config'=>array(
            'broker_server'=>' ',
            'instance_name'=>'',
            'database_name'=>'',
            'conn_pool_max'=>1,
            'username'=>'Dorothy Lopez',
            'password'=>'',
            'server_name'=>'',
            'port'=>1,
            'log_read'=>array(
            'os_auth'=>1,
            'asm_instance'=>'',
            'asm_username'=>'',
            'asm_port'=>1,
            'asm_password'=>'12323131',),
            'filter_session'=>1,
            'relay'=>array(
            'enable'=>1,
            'relay_node_uuid'=>'',),
            'remote_file_agent'=>array(
            'enable'=>1,
            'port'=>1,
            'compress'=>'no',),
            'db_list'=>array(
            '0'=>array(
            'ip'=>'',
            'thread'=>'',),),),
            'cdb'=>'29Fc5A67-C59D-8b49-1b33-E25bECb5a2fe',
            'maintenance'=>'',
            'password'=>'',
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $activeNodeV3 -> modifyDb($arr);
        $this->do_assert($res);
    }

    public function testDescribeDbSpace()
    {
        $activeNodeV3 = $this -> activeNodeV3;
        $arr = array(
            'uuid'=>'A0A0526D-6503-5C2A-E3D8-7D85813967F1',
        );
        
        
        $res = $activeNodeV3 -> describeDbSpace($arr);
        $this->do_assert($res);
    }

    public function testDeleteDb()
    {
        $activeNodeV3 = $this -> activeNodeV3;
        $arr = array(
            'force'=>0,
            'uuids'=>array(
            '0'=>'A0A0526D-6503-5C2A-E3D8-7D85813967F1',),
        );
        
        
        $res = $activeNodeV3 -> deleteDb($arr);
        $this->do_assert($res);
    }

    public function testBatchCreateDbs()
    {
        $activeNodeV3 = $this -> activeNodeV3;
        $arr = array();
        
        
        $res = $activeNodeV3 -> batchCreateDbs($arr);
        $this->do_assert($res);
    }

    public function testSwitchDbMaintenance()
    {
        $activeNodeV3 = $this -> activeNodeV3;
        $arr = array(
            'maintenance_switch'=>0,
            'uuid'=>'bBae9dCA-f6cc-BA66-bF59-8DFc395eD094',
        );
        
        
        $res = $activeNodeV3 -> switchDbMaintenance($arr);
        $this->do_assert($res);
    }

    public function testDescribeDb()
    {
        $activeNodeV3 = $this -> activeNodeV3;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $activeNodeV3 -> describeDb($arr);
        $this->do_assert($res);
    }

    public function testGetActiveDbAuthInfo()
    {
        $activeNodeV3 = $this -> activeNodeV3;
        $arr = array(
            'db_uuid'=>'',
        );
        
        
        $res = $activeNodeV3 -> getActiveDbAuthInfo($arr);
        $this->do_assert($res);
    }

    public function testBatchCreateSqlserverDbs()
    {
        $activeNodeV3 = $this -> activeNodeV3;
        $arr = array(
            'bind_lic_list'=>array(),
            'db_list'=>'',
            'db_type'=>'',
            'node_uuid'=>'',
            'prefix'=>'',
            'role'=>'',
        );
        
        
        $res = $activeNodeV3 -> batchCreateSqlserverDbs($arr);
        $this->do_assert($res);
    }

    public function testGetCharset()
    {
        $activeNodeV3 = $this -> activeNodeV3;
        $arr = array();
        
        
        $res = $activeNodeV3 -> getCharset($arr);
        $this->do_assert($res);
    }

    public function testListInactiveNodes()
    {
        $activeNodeV3 = $this -> activeNodeV3;
        $arr = array();
        
        
        $res = $activeNodeV3 -> listInactiveNodes($arr);
        $this->do_assert($res);
    }

    public function testActiveNode()
    {
        $activeNodeV3 = $this -> activeNodeV3;
        $arr = array(
            'address'=>'101.133.147.75',
            'node_cluster_type'=>'',
            'biz_grp_list'=>array(),
            'data_port'=>26804,
            'port'=>array(
            'iasync'=>'',
            'iarelay'=>'',
            'iamsk'=>'',),
            'cache_dir'=>'/var/i2data/cache/',
            'cluster_switch'=>1,
            'node_uuids'=>'',
            'password'=>'dE8b9f6e-de68-Feca-35Bb-A15A42A73cF2',
            'node_type'=>'',
            'phy_type'=>1,
            'log_dir'=>'/var/i2data/log/',
            'registered'=>1,
            'maintenance'=>0,
            'node_name'=>'Kenneth Moore',
            'comment'=>'string',
            'web_uuid'=>'31F6f6C5-bD29-dfea-Fe8D-cbd6413fd79C',
        );
        
        
        $res = $activeNodeV3 -> activeNode($arr);
        $this->do_assert($res);
    }

    public function testListNodeStatus()
    {
        $activeNodeV3 = $this -> activeNodeV3;
        $arr = array(
            'uuids'=>array(
            '0'=>'6C2F4aCd-DeFB-da27-dd69-C77c4EAF9E58',
            '1'=>'66AB3c3e-6485-ED4C-d9De-AEECCb33BDCE',),
        );
        
        
        $res = $activeNodeV3 -> listNodeStatus($arr);
        $this->do_assert($res);
    }

    public function testListNodes()
    {
        $activeNodeV3 = $this -> activeNodeV3;
        $arr = array(
            'search_field'=>'',
            'order_by'=>'',
            'sort'=>"@pick{'name',address}",
            'page'=>1,
            'limit'=>10,
            'search_value'=>'',
            'where_args'=>'["node_cluster_type"=1]',
            'nodetype'=>'@pick{"name","source","backup"]}',
        );
        
        
        $res = $activeNodeV3 -> listNodes($arr);
        $this->do_assert($res);
    }

    public function testDescriptNode()
    {
        $activeNodeV3 = $this -> activeNodeV3;
        $arr = array(
            'registered'=>1,
            'uuid'=>'31424826-A97D-4085-81AE-FD64EC58B6CE1',
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $activeNodeV3 -> descriptNode($arr);
        $this->do_assert($res);
    }

    public function testDescriptNodeDebugInfo()
    {
        $activeNodeV3 = $this -> activeNodeV3;
        $arr = array(
            'last_time'=>1,
            'uuid'=>'41D1C1E8-60AE-4853-9694-5599560EEB0F',
        );
        
        
        $res = $activeNodeV3 -> descriptNodeDebugInfo($arr);
        $this->do_assert($res);
    }

    public function testModifyNode()
    {
        $activeNodeV3 = $this -> activeNodeV3;
        $arr = array(
            'address'=>'192.168.12.199',
            'biz_grp_list'=>array(),
            'data_port'=>26804,
            'cache_dir'=>'/var/i2data/cache/',
            'node_type'=>'1111010000',
            'phy_type'=>2,
            'iptoken'=>'780B4F1B-6FB9-46C4-98AC-02A8DF4A1C76',
            'os_type'=>0,
            'log_dir'=>'/var/i2data/log/',
            'node_uuid'=>'31424826-A97D-4085-81AE-FD64EC58B6CE1',
            'registered'=>1,
            'port'=>array(
            'iasync'=>'26803',
            'iarelay'=>'26806',
            'iamask'=>'26808',),
            'maintenance'=>0,
            'comment'=>'string',
            'web_uuid'=>'6E5aeAA3-BcE8-f212-E3AA-5Dd0482cFC31',
            'node_name'=>'Sandra Moore',
        );
        
        
        $res = $activeNodeV3 -> modifyNode($arr);
        $this->do_assert($res);
    }

    public function testDeleteNode()
    {
        $activeNodeV3 = $this -> activeNodeV3;
        $arr = array(
            'force'=>0,
            'uuids'=>array(
            '0'=>'e2CEc5EC-e4B7-E68D-8f44-d95d23b22658',
            '1'=>'2dCFCA2e-B83c-aAd7-fe53-8c860FEb142b',),
        );
        
        
        $res = $activeNodeV3 -> deleteNode($arr);
        $this->do_assert($res);
    }

    public function testUpgradeNode()
    {
        $activeNodeV3 = $this -> activeNodeV3;
        $arr = array(
            'uuids'=>array(
            '0'=>'E3E12c18-8Db9-E7f9-76DB-A8D05121Ca4D',),
        );
        
        
        $res = $activeNodeV3 -> upgradeNode($arr);
        $this->do_assert($res);
    }

    public function testSwitchMaintenance()
    {
        $activeNodeV3 = $this -> activeNodeV3;
        $arr = array(
            'maintenance_switch'=>0,
            'uuid'=>'bBae9dCA-f6cc-BA66-bF59-8DFc395eD094',
        );
        
        
        $res = $activeNodeV3 -> switchMaintenance($arr);
        $this->do_assert($res);
    }

    public function testRebuildActiveNode()
    {
        $activeNodeV3 = $this -> activeNodeV3;
        $arr = array(
            'uuid'=>'',
        );
        
        
        $res = $activeNodeV3 -> rebuildActiveNode($arr);
        $this->do_assert($res);
    }

    public function testRefresgActiveNode()
    {
        $activeNodeV3 = $this -> activeNodeV3;
        $arr = array(
            'uuid'=>'xxxxxxxxx',
        );
        
        
        $res = $activeNodeV3 -> refresgActiveNode($arr);
        $this->do_assert($res);
    }

    public function testRestartAllProcess()
    {
        $activeNodeV3 = $this -> activeNodeV3;
        $arr = array(
            'process'=>array(
            '0'=>'iawork',
            '1'=>'iaback',),
            'uuid'=>'',
        );
        
        
        $res = $activeNodeV3 -> restartAllProcess($arr);
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