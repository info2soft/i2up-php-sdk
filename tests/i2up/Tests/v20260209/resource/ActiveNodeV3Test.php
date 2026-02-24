<?php
namespace i2up\Test\v20260209\resource;

use i2up\resource\v20260209\ActiveNodeV3;
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
            'uuids'=>'FbFE3617-68Bc-e6E8-F1FF-7bd47ff7Dde4',
        );
        
        
        $res = $activeNodeV3 -> listDbStatus($arr);
        $this->do_assert($res);
    }

    public function testCreateDbUnified()
    {
        $activeNodeV3 = $this -> activeNodeV3;
        $arr = array(
            'biz_grp_list'=>array(),
            'db_name'=>'Carol Moore',
            'node_uuid'=>'F33DDFd3-Beb4-69A5-20cF-dbeb2CC9A84B',
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
            'auth_uuid'=>'',
            'model'=>'',),),
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
            'disable'=>0,
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
            'replication_num'=>'',
            'stream_server'=>array(
            '0'=>array(
            'server_user'=>'',
            'server_service'=>'',
            'server_password'=>'',),),),
            'db_uuid'=>'67Bb3eE4-B24C-DcFC-38B1-D6df253256AA',
            'db_mode'=>'',
            'cdb'=>'9A6A1829-Fcf9-bE69-6a1E-D6fCf8CcB4dD',
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
            'db_name'=>'Mark Thomas',
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
            'username'=>'Jason Johnson',
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
            'cdb'=>'a69cec1F-F122-2cfe-0e3e-0c93BDEaBcF4',
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
            'address'=>'185.101.212.108',
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
            'password'=>'ee92aE44-aa39-8C5e-BCf4-F45F02A7c210',
            'node_type'=>'',
            'phy_type'=>1,
            'log_dir'=>'/var/i2data/log/',
            'registered'=>0,
            'maintenance'=>0,
            'node_name'=>'Joseph Taylor',
            'comment'=>'string',
            'web_uuid'=>'CFb8E62b-6df1-bf6F-7661-AB8cbfF76E7e',
            'min_port'=>1,
            'max_port'=>1,
        );
        
        
        $res = $activeNodeV3 -> activeNode($arr);
        $this->do_assert($res);
    }

    public function testListNodeStatus()
    {
        $activeNodeV3 = $this -> activeNodeV3;
        $arr = array(
            'uuids'=>array(
            '0'=>'7DE7925e-Ffbb-10C5-EEd5-1E11b60da4c0',
            '1'=>'e742e6EE-c75d-D121-5cFe-75260DBbe8aF',),
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
            'web_uuid'=>'1AC2e48F-CFf6-CeD2-f1E4-fD6F7537b452',
            'node_name'=>'Michelle Clark',
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
            '0'=>'EE2E58e2-5Aa5-C6bc-adE3-461Cdc24dAc7',
            '1'=>'aD51Ce1f-ebBf-f9FB-EDeE-11fc7077AD03',),
        );
        
        
        $res = $activeNodeV3 -> deleteNode($arr);
        $this->do_assert($res);
    }

    public function testUpgradeNode()
    {
        $activeNodeV3 = $this -> activeNodeV3;
        $arr = array(
            'uuids'=>array(
            '0'=>'727c6cBA-ffCc-Db2f-c92F-8d3296A77AaB',),
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
            'process'=>'[id1, id2]',
            'uuid'=>'',
        );
        
        
        $res = $activeNodeV3 -> restartAllProcess($arr);
        $this->do_assert($res);
    }

    public function testDownloadFile()
    {
        $activeNodeV3 = $this -> activeNodeV3;
        $arr = array(
            'type'=>'download',
            'file'=>'',
        );
        
        
        $res = $activeNodeV3 -> downloadFile($arr);
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