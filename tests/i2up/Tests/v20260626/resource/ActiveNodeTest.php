<?php
namespace i2up\Test\v20260626\resource;

use i2up\resource\v20260626\ActiveNode;
use i2up\common\Auth;
use PHPUnit\Framework\TestCase;
                
class ActiveNodeTest extends TestCase
 {
    private $activeNode;
    
    public function setUp():void
    {
        parent::setup();
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
            'node_name'=>'David Martin',
            'address'=>'126.217.35.249',
            'data_port'=>26804,
            'cache_dir'=>'/var/i2data/cache/',
            'password'=>'Bb2BbcC9-6EE4-7E9C-9879-ec7F9BB55Dbb',
            'log_dir'=>'/var/i2data/log/',
            'registered'=>1,
            'comment'=>'string',
            'web_uuid'=>'E91DdfA7-6Bbb-ddBe-e40C-Bd7B4B7ccE5e',
            'port'=>array(
            'iarelay'=>'',
            'iamsk'=>'',
            'iasync'=>'',),
            'maintenance'=>0,
            'node_type'=>'',
            'phy_type'=>1,
            'biz_grp_list'=>array(),
            'cluster_switch'=>1,
            'node_uuids'=>'',
            'node_cluster_type'=>'',
        );
        
        
        $res = $activeNode -> activeNode($arr);
        $this->do_assert($res);
    }

    public function testListNodeStatus()
    {
        $activeNode = $this -> activeNode;
        $arr = array(
            'uuids'=>array(
            '0'=>'D160DdBf-b4ff-EDcd-F2c1-AEfFD7cCdEF1',
            '1'=>'7FDDC363-2b0A-3eb1-bF04-267e1574C7b5',),
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
            'nodetype'=>'@pick{"name","source","backup"]}',
            'search_field'=>'',
            'order_by'=>'',
            'sort'=>"@pick{'name',address}",
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
            'registered'=>1,
            'uuid'=>'31424826-A97D-4085-81AE-FD64EC58B6CE1',
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
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
            'node_name'=>'William Walker',
            'address'=>'192.168.12.199',
            'data_port'=>26804,
            'cache_dir'=>'/var/i2data/cache/',
            'iptoken'=>'780B4F1B-6FB9-46C4-98AC-02A8DF4A1C76',
            'log_dir'=>'/var/i2data/log/',
            'node_uuid'=>'31424826-A97D-4085-81AE-FD64EC58B6CE1',
            'registered'=>1,
            'comment'=>'string',
            'web_uuid'=>'43E4B8bF-F8cd-3BBC-dfe2-b65c35Bf79fC',
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
            '0'=>'b7541fb0-9C04-e762-d16A-FaDc49Bd5b8F',
            '1'=>'34dDFbE8-e02b-885c-AfdD-7528Fb08a371',),
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
            '0'=>'61F3d95f-BFb5-d2F9-fA76-b37Ec31c40cc',),
        );
        
        
        $res = $activeNode -> upgradeNode($arr);
        $this->do_assert($res);
    }

    public function testRenewActiveNode()
    {
        $activeNode = $this -> activeNode;
        $arr = array(
            'uuids'=>array(
            '0'=>'FfBEefB1-543e-d1EF-5c6d-737d162119dd',),
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
            'uuid'=>'6C4AEF37-6496-6DCD-E085-DD640001E4EC',
            'type'=>'oracle',
            'conf'=>array(
            '0'=>array(
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
            'keytab'=>'',),
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
            'sniff'=>'0',),
            '1'=>array(
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
            'keytab'=>'',),
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
            'sniff'=>'1',),
            '2'=>array(
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
            'keytab'=>'',),
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
            'sniff'=>'0',),
            '3'=>array(
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
            'keytab'=>'',),
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
            'sniff'=>'1',),),
            'jsonver'=>array(),
        );
        
        
        $res = $activeNode -> checkDbLink($arr);
        $this->do_assert($res);
    }

    public function testListDbStatus()
    {
        $activeNode = $this -> activeNode;
        $arr = array(
            'uuids'=>'7dDD39D1-78Ba-B8FD-e2fF-dF8e2ab274c7',
        );
        
        
        $res = $activeNode -> listDbStatus($arr);
        $this->do_assert($res);
    }

    public function testCreateDbUnified()
    {
        $activeNode = $this -> activeNode;
        $arr = array(
            'biz_grp_list'=>array(),
            'db_name'=>'Lisa Moore',
            'node_uuid'=>'fBc1DeD9-A37b-76Dc-D77d-9139C396dCB8',
            'db_type'=>'oracle',
            'file_open_type'=>'0',
            'deploy_mode'=>'0',
            'log_read_type'=>'file',
            'config'=>array(
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
            'disable'=>1,
            'ip'=>'',
            'thread'=>'',
            'port'=>'',
            'http_port'=>'',
            'instance_id'=>'',
            'client_id'=>'',
            'group_name'=>'',),),
            'transport'=>array(
            'auth'=>'',
            'ssl_mode'=>'',
            'certificate'=>'',),
            'auth'=>'',
            'replication_num'=>'',
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
            'ocp_server'=>array(
            '0'=>array(
            'ip'=>'',
            'rpcport'=>'',
            'sqlport'=>'',),),
            'manual_ocp_conf'=>1,
            'ob_sharding_nodes'=>array(
            '0'=>array(
            'cluster_name'=>'',
            'tenant_name'=>'',
            'ip'=>'',
            'port'=>'',
            'tenant_user'=>'',
            'tenant_pass'=>'',
            'tenant_cred_switch'=>'',
            'tenant_cred_uuid'=>'',
            'manage_user'=>'',
            'manage_pass'=>'',
            'manage_cred_switch'=>'',
            'manage_cred_uuid'=>'',),),
            'manage_port'=>'',
            'ob_sharding_inst'=>array(),
            'table_type'=>'',
            'architecture'=>'',
            'stream_server'=>array(
            '0'=>array(
            'user'=>'',
            'pass'=>'',
            'server'=>'',),),),
            'db_uuid'=>'D852FcbC-f265-BfEB-29d5-2c1558AF7F4e',
            'db_mode'=>'',
            'cdb'=>'Ba2064eF-E01C-9e52-ee32-c65b22BB82c2',
            'maintenance'=>'',
            'password'=>'',
            'comment'=>'',
            'node_type'=>1,
            'cluster_uuid'=>'',
        );
        
        
        $res = $activeNode -> createDbUnified($arr);
        $this->do_assert($res);
    }

    public function testModifyDb()
    {
        $activeNode = $this -> activeNode;
        $arr = array(
            'db_name'=>'Elizabeth Lopez',
            'db_uuid'=>'A0A0526D-6503-5C2A-E3D8-7D85813967F1',
            'node_uuid'=>'0596a77C-64Fd-cAf2-DB9c-cAaeBD56eD88',
            'db_type'=>'oracle',
            'file_open_type'=>'0',
            'deploy_mode'=>'0',
            'log_read_type'=>'file',
            'config'=>array(
            'username'=>'Charles Jones',
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
            'thread'=>'',),),
            'broker_server'=>' ',
            'conn_pool_max'=>1,
            'instance_name'=>'',
            'database_name'=>'',),
            'random_str'=>'',
            'cdb'=>'565e3bD2-2bE7-c2aA-6DcD-FEc6Fcd142DF',
            'maintenance'=>'',
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
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
            '0'=>'A0A0526D-6503-5C2A-E3D8-7D85813967F1',),
            'force'=>0,
        );
        
        
        $res = $activeNode -> deleteDb($arr);
        $this->do_assert($res);
    }

    public function testBatchCreateDbs()
    {
        $activeNode = $this -> activeNode;
        $arr = array(
            'csv_file'=>'',
            'type'=>'',
        );
        
        
        $res = $activeNode -> batchCreateDbs($arr);
        $this->do_assert($res);
    }

    public function testBatchCreateActiveNodes()
    {
        $activeNode = $this -> activeNode;
        $arr = array(
            'csv_file'=>'',
        );
        
        
        $res = $activeNode -> batchCreateActiveNodes($arr);
        $this->do_assert($res);
    }

    public function testDescribeDb()
    {
        $activeNode = $this -> activeNode;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $activeNode -> describeDb($arr);
        $this->do_assert($res);
    }

    public function testRebuildActiveNode()
    {
        $activeNode = $this -> activeNode;
        $arr = array(
            'uuid'=>'',
        );
        
        
        $res = $activeNode -> rebuildActiveNode($arr);
        $this->do_assert($res);
    }

    public function testRefresgActiveNode()
    {
        $activeNode = $this -> activeNode;
        $arr = array(
            'uuid'=>'xxxxxxxxx',
        );
        
        
        $res = $activeNode -> refresgActiveNode($arr);
        $this->do_assert($res);
    }

    public function testRestartAllProcess()
    {
        $activeNode = $this -> activeNode;
        $arr = array(
            'uuid'=>'',
            'process'=>array(
            '0'=>'iawork',
            '1'=>'iaback',),
        );
        
        
        $res = $activeNode -> restartAllProcess($arr);
        $this->do_assert($res);
    }

    public function testGetActiveDbAuthInfo()
    {
        $activeNode = $this -> activeNode;
        $arr = array(
            'db_uuid'=>'',
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