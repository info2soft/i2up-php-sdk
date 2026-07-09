<?php
namespace i2up\Test\v20260626\resource;

use i2up\resource\v20260626\Cluster;
use i2up\common\Auth;
use PHPUnit\Framework\TestCase;
                
class ClusterTest extends TestCase
 {
    private $cluster;
    
    public function setUp():void
    {
        parent::setup();
        $this -> cluster = new Cluster(new Auth());
    }

    public function testAuthCls()
    {
        $cluster = $this -> cluster;
        $arr = array(
            'cls_is_local'=>1,
            'os_pwd'=>'info2soft_125',
            'os_user'=>'i2test2018.com\\administrator',
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

    public function testCreateCls()
    {
        $cluster = $this -> cluster;
        $arr = array(
            'cls'=>array(
            'comment'=>'',
            'cls_disk'=>array(
            '0'=>'E:\\',),
            'config_port'=>'26821',
            'cls_node'=>array(
            '0'=>array(
            'host_name'=>'',
            'host_ip'=>'',
            'node_uuid'=>'',
            'node_name'=>'',
            'no_confidential'=>1,
            'id'=>'',
            'address'=>'',
            'state_str'=>'',
            'health'=>false,
            'backup_script_uuid'=>'',
            'recovery_script_uuid'=>'',
            'role'=>'',
            'vc_name'=>'',
            'gcluster'=>false,
            'gcware'=>false,
            'host_port'=>'',
            'service_type'=>'',
            'clean_script_uuid'=>'',
            'state'=>'',
            'es_ip'=>'',
            'port'=>1,
            'node_ip'=>'',),),
            'node_type'=>1,
            'cls_is_local'=>1,
            'os_user'=>'i2test2018.com\\administrator',
            'config_addr'=>'192.168.74.25',
            'node_name'=>'cls',
            'other_params'=>array(
            'ora_home'=>'',
            'grid_home'=>'',
            'user'=>'',
            'roach_agent_port'=>1,
            'roach_client_port'=>1,
            'invasion'=>1,
            'cn_ip'=>'',
            'cn_node_uuid'=>'',
            'ip'=>'',
            'port'=>1,
            'password'=>'',
            'ob_username'=>'',
            'ob_password'=>'',
            'ob_ip'=>'',
            'ob_port'=>1,
            'slave_uuid'=>'',
            'oss_ip'=>'',
            'oss_port'=>'',
            'tdsql_manage_user'=>'',
            'tdsql_db_user'=>'',
            'oss_user'=>'',
            'module_dir'=>'',
            'data_disk_dir'=>'',
            'log_disk_dir'=>'',
            'endpoint'=>'',
            'access_key'=>'',
            'secret_key'=>'',
            'project_id'=>'',
            'db_user'=>'',
            'db_password'=>'',
            'dba_user'=>'',
            'dba_password'=>'',
            'assist_node_uuids'=>array(),
            'bin_path'=>'',
            'tiup_path'=>'',
            'tidb_name'=>'',
            'ob_role'=>1,
            'deploy_user'=>'',
            'port_prefix'=>'',
            'dag_name'=>'',
            'instance_id_list'=>'',
            'schedule_node_list'=>'',
            'auth_type'=>'',
            'iam_user'=>'',
            'domain_name'=>'',
            'iam_password'=>'',
            'token_endpoint'=>'',
            'scope_name'=>'',
            'db_node_uuid'=>'',
            'mongodb_type'=>1,
            'ha_ip'=>'',
            'cluster_name'=>'',
            'tenant_id'=>'',
            'client_id'=>'',
            'client_secret'=>'',
            'yashan_type'=>1,
            'region'=>'',),
            'maintenance'=>0,
            'iam_username'=>'',
            'iam_password'=>'',
            'iam_owning_account'=>'',
            'resource_set_name'=>'',
            'resource_set_id'=>'',
            'xbsa_ssl'=>1,
            'root_cert'=>'',
            'user_cert'=>'',
            'user_private_key'=>'',
            'user_private_key_pwd'=>'',
            'business_addr'=>'',
            'management_addr'=>'',
            'biz_grp_list'=>array(),
            'omm_ip'=>array(),
            'omm_rdb_os_user'=>'',
            'omm_rdb_username'=>'',
            'omm_rdb_password'=>'',
            'dbagent_password'=>'',
            'data_manager_uuid'=>'',
            'tdsql_db_pwd'=>'',
            'oss_pwd'=>'',
            'dmcssm_uuid'=>'',
            'dm_user'=>'',
            'dm_home_path'=>'',
            'dmcssm_ini_path'=>'',
            'instance_info'=>'',
            'dmdsc_uuid'=>'',
            'application_type'=>'',
            'resource_type'=>'',
            'omm_rdb_login_path'=>'',
            'dbagent_username'=>'',
            'dbagent_login_path'=>'',
            'login_type'=>1,
            'os_pwd'=>'',
            'is_single'=>1,
            'db_instance_list'=>array(
            '0'=>array(
            'instance_uuid'=>'',
            'instance_name'=>'',
            'node_uuid'=>'',
            'node_name'=>'',
            'hostname'=>'',
            'config_addr'=>'',
            'client_ip'=>'',
            'host'=>'',
            'port'=>'',
            'master'=>'',
            'role'=>'',
            'node_status'=>'',
            'mount_node_uuid'=>'',
            'mount_node_name'=>'',),),
            'master_uuid'=>'',
            'cls_install_all'=>1,
            'authentication'=>1,
            'invasion'=>1,
            'db_instance_uuid'=>'',
            'cls_node_uuid'=>'',
            'dmdcr_cfg_ini_path'=>'',
            'dmmonitor_uuid'=>'',
            'dmmonitor_ini_path'=>'',),
        );
        
        
        $res = $cluster -> createCls($arr);
        $this->do_assert($res);
    }

    public function testDescribeCls()
    {
        $cluster = $this -> cluster;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $cluster -> describeCls($arr);
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

    public function testModifyCls()
    {
        $cluster = $this -> cluster;
        $arr = array(
            'cls'=>array(
            'comment'=>'',
            'cls_disk'=>array(
            '0'=>'E:\\',),
            'config_port'=>'26821',
            'cls_node'=>array(
            '0'=>'BD7D3EF7-2F75-E2BB-A2CB-CFE936CF1F6C',),
            'node_type'=>1,
            'cls_is_local'=>1,
            'os_user'=>'i2test2018.com\\administrator',
            'config_addr'=>'192.168.74.25',
            'node_name'=>'cls',
            'random_str'=>'11111111-1111-1111-1111-111111111111',
            'maintenance'=>0,
            'other_params'=>array(
            'ora_home'=>'',
            'grid_home'=>'',
            'user'=>'',),),
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
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
            'where_args'=>array(
            'node_type'=>1,
            'status'=>'',
            'is_single'=>1,
            'cluster_status'=>'',),
        );
        
        
        $res = $cluster -> listCls($arr);
        $this->do_assert($res);
    }

    public function testListClsStatus()
    {
        $cluster = $this -> cluster;
        $arr = array(
            'node_uuids'=>array(
            '0'=>'11111111-1111-1111-1111-111111111111',),
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
            '0'=>'11111111-1111-1111-1111-111111111111',),
            'force'=>1,
        );
        
        
        $res = $cluster -> deleteCls($arr);
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

    public function testListRacStatus()
    {
        $cluster = $this -> cluster;
        $arr = array(
            'node_uuids'=>array(),
            'force_refresh'=>1,
        );
        
        
        $res = $cluster -> listRacStatus($arr);
        $this->do_assert($res);
    }

    public function testGetGaussInfo()
    {
        $cluster = $this -> cluster;
        $arr = array(
            'config_addr'=>'',
            'user'=>'',
            'config_port'=>'',
            'node_uuid'=>'',
            'invasion'=>'',
            'cn_ip'=>'',
            'cls_node'=>array(
            '0'=>array(
            'host_name'=>'',
            'host_ip'=>'',
            'node_uuid'=>'',
            'node_name'=>'',
            'no_confidential'=>1,),),
        );
        
        
        $res = $cluster -> getGaussInfo($arr);
        $this->do_assert($res);
    }

    public function testSwitchMaintenance()
    {
        $cluster = $this -> cluster;
        $arr = array(
            'uuid'=>'',
            'switch'=>0,
        );
        
        
        $res = $cluster -> switchMaintenance($arr);
        $this->do_assert($res);
    }

    public function testListGaussHcsInstances()
    {
        $cluster = $this -> cluster;
        $arr = array(
            'limit'=>'',
            'page'=>'',
            'where_args'=>array(
            '0'=>array(
            'node_uuid'=>'',),),
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
            'bk_set_uuid'=>'',
        );
        
        
        $res = $cluster -> listGaussHcsDefaultInstance($arr);
        $this->do_assert($res);
    }

    public function testListGaussTpopSolution()
    {
        $cluster = $this -> cluster;
        $arr = array();
        
        
        $res = $cluster -> listGaussTpopSolution($arr);
        $this->do_assert($res);
    }

    public function testListGaussTpopDefaultInstance()
    {
        $cluster = $this -> cluster;
        $arr = array(
            'node_uuid'=>'',
            'os_type'=>'',
            'arch'=>'',
            'cpu'=>'',
        );
        
        
        $res = $cluster -> listGaussTpopDefaultInstance($arr);
        $this->do_assert($res);
    }

    public function testClsGoldenDBInfo()
    {
        $cluster = $this -> cluster;
        $arr = array(
            'omm_ip'=>array(),
            'omm_rdb_os_user'=>'',
            'omm_rdb_username'=>'',
            'omm_rdb_password'=>'',
            'dbagent_password'=>'',
            'data_manager_uuid'=>'',
            'login_type'=>1,
            'dbagent_username'=>'',
            'omm_rdb_login_path'=>'',
            'dbagent_login_path'=>'',
        );
        
        
        $res = $cluster -> clsGoldenDBInfo($arr);
        $this->do_assert($res);
    }

    public function testClsMongoDBInfo()
    {
        $cluster = $this -> cluster;
        $arr = array(
            'ip'=>'',
            'port'=>1,
            'user'=>'',
            'password'=>'',
            'node_uuid'=>'',
            'mongodb_type'=>1,
        );
        
        
        $res = $cluster -> clsMongoDBInfo($arr);
        $this->do_assert($res);
    }

    public function testClsTdsqlDBInfo()
    {
        $cluster = $this -> cluster;
        $arr = array(
            'node_uuid'=>'',
            'oss_ip'=>'',
            'oss_port'=>'',
            'oss_user'=>'',
            'oss_pwd'=>'',
            'cls_install_all'=>1,
            'instance_id_list'=>array(),
            'schedule_node_list'=>array(),
            'invasion'=>1,
        );
        
        
        $res = $cluster -> clsTdsqlDBInfo($arr);
        $this->do_assert($res);
    }

    public function testClsTdsqlPgDBInfo()
    {
        $cluster = $this -> cluster;
        $arr = array(
            'invasion'=>1,
            'oss_user'=>'',
            'oss_pwd'=>'',
            'cls_install_all'=>1,
            'instance_id_list'=>array(),
            'schedule_node_list'=>array(),
            'node_uuid'=>'',
            'oss_ip'=>'',
            'oss_port'=>'',
            'tdsql_db_pwd'=>'',
        );
        
        
        $res = $cluster -> clsTdsqlPgDBInfo($arr);
        $this->do_assert($res);
    }

    public function testClsDmdscInfo()
    {
        $cluster = $this -> cluster;
        $arr = array(
            'data_manager_uuid'=>'',
            'dmcssm_uuid'=>'',
            'dm_user'=>'',
            'dmcssm_ini_path'=>'',
            'dm_home_path'=>'',
            'dmdcr_cfg_ini_path'=>'',
            'cls_node_uuid'=>'',
        );
        
        
        $res = $cluster -> clsDmdscInfo($arr);
        $this->do_assert($res);
    }

    public function testClsDmdscInstanceInfo()
    {
        $cluster = $this -> cluster;
        $arr = array(
            'node_uuid'=>'',
        );
        
        
        $res = $cluster -> clsDmdscInstanceInfo($arr);
        $this->do_assert($res);
    }

    public function testClsDmmppInfo()
    {
        $cluster = $this -> cluster;
        $arr = array(
            'db_instance_uuid'=>'',
            'instance_info'=>array(
            '0'=>array(
            'inst_name'=>'',
            'inst_port'=>1,),),
        );
        
        
        $res = $cluster -> clsDmmppInfo($arr);
        $this->do_assert($res);
    }

    public function testClsDmmppMatch()
    {
        $cluster = $this -> cluster;
        $arr = array(
            'db_instance_uuid'=>'',
        );
        
        
        $res = $cluster -> clsDmmppMatch($arr);
        $this->do_assert($res);
    }

    public function testClsDmrwcInfo()
    {
        $cluster = $this -> cluster;
        $arr = array(
            'dm_user'=>'',
            'dmmonitor_ini_path'=>'',
            'dm_home_path'=>'',
            'dmmonitor_uuid'=>'',
        );
        
        
        $res = $cluster -> clsDmrwcInfo($arr);
        $this->do_assert($res);
    }

    public function testClsDorisInfo()
    {
        $cluster = $this -> cluster;
        $arr = array(
            'user'=>'',
            'password'=>'',
            'ip'=>'',
            'port'=>1,
            'bin_path'=>'',
            'data_manager_uuid'=>'',
        );
        
        
        $res = $cluster -> clsDorisInfo($arr);
        $this->do_assert($res);
    }

    public function testTidbVerify()
    {
        $cluster = $this -> cluster;
        $arr = array(
            'tidb_name'=>'',
            'tiup_path'=>'',
            'bin_path'=>'',
            'user'=>'',
            'password'=>'',
            'data_manager_uuid'=>'',
            'deploy_user'=>'',
        );
        
        
        $res = $cluster -> tidbVerify($arr);
        $this->do_assert($res);
    }

    public function testListRacInstances()
    {
        $cluster = $this -> cluster;
        $arr = array(
            'node_uuid'=>'',
        );
        
        
        $res = $cluster -> listRacInstances($arr);
        $this->do_assert($res);
    }

    public function testGetTdsqlInstanceDefaultInfo()
    {
        $cluster = $this -> cluster;
        $arr = array(
            'node_uuid'=>'',
        );
        
        
        $res = $cluster -> getTdsqlInstanceDefaultInfo($arr);
        $this->do_assert($res);
    }

    public function testGetTdsqlInstanceDefaultMachineInfo()
    {
        $cluster = $this -> cluster;
        $arr = array(
            'node_uuid'=>'',
            'machine'=>'',
        );
        
        
        $res = $cluster -> getTdsqlInstanceDefaultMachineInfo($arr);
        $this->do_assert($res);
    }

    public function testElasticsearchMatch()
    {
        $cluster = $this -> cluster;
        $arr = array(
            'ip'=>'',
            'port'=>1,
            'user'=>'',
            'password'=>'',
            'node_uuid'=>'',
            'db_node_uuid'=>'',
        );
        
        
        $res = $cluster -> elasticsearchMatch($arr);
        $this->do_assert($res);
    }

    public function testElasticsearchVerify()
    {
        $cluster = $this -> cluster;
        $arr = array(
            'user'=>'',
            'password'=>'',
            'node_info'=>array(
            '0'=>array(
            'es_ip'=>'',
            'port'=>1,
            'node_ip'=>'',),),
            'node_uuid'=>'',
        );
        
        
        $res = $cluster -> elasticsearchVerify($arr);
        $this->do_assert($res);
    }

    public function testMysqlVerify()
    {
        $cluster = $this -> cluster;
        $arr = array(
            'data_manager_uuid'=>'',
            'db_instance_list'=>array(
            '0'=>array(
            'instance_uuid'=>'',),),
        );
        
        
        $res = $cluster -> mysqlVerify($arr);
        $this->do_assert($res);
    }

    public function testDb2HadrVerify()
    {
        $cluster = $this -> cluster;
        $arr = array(
            'data_manager_uuid'=>'',
            'db_instance_list'=>array(
            '0'=>array(
            'instance_uuid'=>'',),),
        );
        
        
        $res = $cluster -> db2HadrVerify($arr);
        $this->do_assert($res);
    }

    public function testStVerify()
    {
        $cluster = $this -> cluster;
        $arr = array(
            'db_instance_list'=>array(
            '0'=>array(
            'instance_uuid'=>'',),),
            'data_manager_uuid'=>'',
            'ha_ip'=>'',
        );
        
        
        $res = $cluster -> stVerify($arr);
        $this->do_assert($res);
    }

    public function testClickHouseVerify()
    {
        $cluster = $this -> cluster;
        $arr = array(
            'data_manager_uuid'=>'',
            'db_instance_list'=>array(
            '0'=>array(
            'instance_uuid'=>'',),),
            'cluster_name'=>'',
        );
        
        
        $res = $cluster -> clickHouseVerify($arr);
        $this->do_assert($res);
    }

    public function testRdsSqlserverVerify()
    {
        $cluster = $this -> cluster;
        $arr = array(
            'node_uuid'=>'',
            'region'=>'',
            'access_key'=>'',
            'secret_key'=>'',
        );
        
        
        $res = $cluster -> rdsSqlserverVerify($arr);
        $this->do_assert($res);
    }

    public function testRdsPostgreSqlVerify()
    {
        $cluster = $this -> cluster;
        $arr = array();
        
        
        $res = $cluster -> rdsPostgreSqlVerify($arr);
        $this->do_assert($res);
    }

    public function testGbase8()
    {
        $cluster = $this -> cluster;
        $arr = array(
            'db_instance_list'=>array(
            '0'=>array(
            'instance_uuid'=>'',),),
            'data_manager_uuid'=>'',
        );
        
        
        $res = $cluster -> gbase8($arr);
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