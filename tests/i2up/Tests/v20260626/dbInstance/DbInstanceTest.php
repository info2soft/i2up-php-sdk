<?php
namespace i2up\Test\v20260626\dbInstance;

use i2up\dbInstance\v20260626\DbInstance;
use i2up\common\Auth;
use PHPUnit\Framework\TestCase;
                
class DbInstanceTest extends TestCase
 {
    private $dbInstance;
    
    public function setUp():void
    {
        parent::setup();
        $this -> dbInstance = new DbInstance(new Auth());
    }

    public function testDiscoveryDbInstances()
    {
        $dbInstance = $this -> dbInstance;
        $arr = array(
            'node_uuid'=>'',
            'instance_type'=>'',
        );
        
        
        $res = $dbInstance -> discoveryDbInstances($arr);
        $this->do_assert($res);
    }

    public function testVerifyDbInstances()
    {
        $dbInstance = $this -> dbInstance;
        $arr = array(
            'instance_type'=>1,
            'protocol'=>1,
            'win_verify'=>1,
            'user'=>'',
            'password'=>'',
            'timeout'=>1,
            'driver'=>'',
            'port'=>1,
            'data_source'=>'',
            'node_uuid'=>'',
            'instance_name'=>'',
            'host'=>'',
            'bin_path'=>'',
            'config_path'=>'',
            'data_path'=>'',
            'sys_user'=>'',
            'hostname'=>'',
            'sys_password'=>'',
            'install_dir'=>'',
            'is_default'=>'',
            'onconfig_name'=>'',
            'auth_type'=>1,
            'login_path'=>'',
            'login_type'=>1,
            'dmdcr_ini_path'=>'',
            'dmmal_ini_path'=>'',
        );
        
        
        $res = $dbInstance -> verifyDbInstances($arr);
        $this->do_assert($res);
    }

    public function testCreateDbInstance()
    {
        $dbInstance = $this -> dbInstance;
        $arr = array(
            'instance_type'=>1,
            'node_uuid'=>'',
            'data_source'=>'',
            'instance_list'=>array(
            '0'=>array(
            'instance_name'=>'',
            'version_info'=>array(
            'version'=>'',),
            'is_verified'=>1,
            'protocol'=>1,
            'port'=>1,
            'win_verify'=>1,
            'user'=>'',
            'password'=>'',
            'timeout'=>1,
            'driver'=>'',
            'host'=>'',
            'bin_path'=>'',
            'config_path'=>'',
            'data_path'=>'',
            'sys_user'=>'',
            'hostname'=>'',
            'sys_password'=>'',
            'shards'=>array(
            '0'=>array(
            'id'=>'',),),
            'replica_sets'=>array(
            '0'=>array(
            'id'=>'',
            'ip'=>'',
            'port'=>1,
            'master'=>false,
            'node_uuid'=>'',
            'shard_id'=>'',),),
            'is_default'=>1,
            'install_dir'=>'',
            'onconfig_name'=>'',
            'auth_type'=>1,
            'db_name'=>'',
            'managers'=>array(
            '0'=>array(
            'ip'=>'',
            'master'=>false,
            'node_uuid'=>'',),),
            'gtms'=>array(
            '0'=>array(
            'ip'=>'',
            'master'=>false,
            'node_uuid'=>'',),),
            'type'=>'',
            'sub_instance'=>array(),
            'dmdcr_ini_path'=>'',
            'dmdsc_uuid'=>'',
            'instance_id'=>'',
            'archive_path'=>'',
            'login_type'=>1,
            'login_path'=>'',
            'dmmal_ini_path'=>'',),),
            'scan_ip'=>'',
        );
        
        
        $res = $dbInstance -> createDbInstance($arr);
        $this->do_assert($res);
    }

    public function testListDbInstances()
    {
        $dbInstance = $this -> dbInstance;
        $arr = array(
            'search_field'=>'',
            'search_value'=>'',
            'page'=>1,
            'limit'=>1,
            'type'=>1,
            'where_args'=>array(
            '0'=>array(
            'node_uuid'=>'',),),
        );
        
        
        $res = $dbInstance -> listDbInstances($arr);
        $this->do_assert($res);
    }

    public function testDescribeDbInstance()
    {
        $dbInstance = $this -> dbInstance;
        $arr = array(
            'instance_uuid'=>'',
            'instance_type'=>1,
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $dbInstance -> describeDbInstance($arr);
        $this->do_assert($res);
    }

    public function testModifyDbInstance()
    {
        $dbInstance = $this -> dbInstance;
        $arr = array(
            'instance_type'=>1,
            'node_uuid'=>'',
            'data_source'=>'',
            'instance_list'=>array(
            '0'=>array(
            'instance_name'=>'',
            'version_info'=>array(
            'version'=>'',),
            'is_verified'=>1,
            'protocol'=>1,
            'port'=>1,
            'win_verify'=>1,
            'user'=>'',
            'password'=>'',
            'timeout'=>1,
            'driver'=>'',
            'instance_uuid'=>'',
            'random_str'=>'',
            'sys_user'=>'',
            'hostname'=>'',),),
        );
        
        
        $res = $dbInstance -> modifyDbInstance($arr);
        $this->do_assert($res);
    }

    public function testDeleteDbInstances()
    {
        $dbInstance = $this -> dbInstance;
        $arr = array(
            'instance_uuids'=>array(),
            'force'=>1,
        );
        
        
        $res = $dbInstance -> deleteDbInstances($arr);
        $this->do_assert($res);
    }

    public function testListDbs()
    {
        $dbInstance = $this -> dbInstance;
        $arr = array(
            'instance_uuid'=>'',
        );
        
        
        $res = $dbInstance -> listDbs($arr);
        $this->do_assert($res);
    }

    public function testListTables()
    {
        $dbInstance = $this -> dbInstance;
        $arr = array(
            'instance_uuid'=>'',
            'db_name'=>'',
            'schema_name'=>'',
        );
        
        
        $res = $dbInstance -> listTables($arr);
        $this->do_assert($res);
    }

    public function testListTableSpaces()
    {
        $dbInstance = $this -> dbInstance;
        $arr = array(
            'instance_uuid'=>'',
            'db_name'=>'',
        );
        
        
        $res = $dbInstance -> listTableSpaces($arr);
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