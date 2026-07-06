<?php
namespace i2up\Test\v20260626\resource;

use i2up\resource\v20260626\BigdataPlatform;
use i2up\common\Auth;
use PHPUnit\Framework\TestCase;
                
class BigdataPlatformTest extends TestCase
 {
    private $bigdataPlatform;
    
    public function setUp():void
    {
        parent::setup();
        $this -> bigdataPlatform = new BigdataPlatform(new Auth());
    }

    public function testAuthBigdataBackupHost()
    {
        $bigdataPlatform = $this -> bigdataPlatform;
        $arr = array(
            'os_user'=>'',
            'os_pwd'=>'',
            'address'=>'',
            'config_port'=>1,
        );
        
        
        $res = $bigdataPlatform -> authBigdataBackupHost($arr);
        $this->do_assert($res);
    }

    public function testBigdataBackupHostDbAuth()
    {
        $bigdataPlatform = $this -> bigdataPlatform;
        $arr = array(
            'db_user'=>'',
            'db_pwd'=>'',
            'db_type'=>1,
            'db_address'=>'',
            'db_port'=>1,
            'db_name'=>'',
            'os_user'=>'',
            'os_pwd'=>'',
            'address'=>'',
        );
        
        
        $res = $bigdataPlatform -> bigdataBackupHostDbAuth($arr);
        $this->do_assert($res);
    }

    public function testCreateBigdataBackupHost()
    {
        $bigdataPlatform = $this -> bigdataPlatform;
        $arr = array(
            'host_name'=>'',
            'address'=>'',
            'cc_ip_uuid'=>'',
            'os_user'=>'',
            'os_pwd'=>'',
            'db_type'=>1,
            'db_address'=>'',
            'db_user'=>'',
            'db_pwd'=>'',
            'dto_switch'=>1,
            'dto_address'=>'',
            'cls_switch'=>1,
            'follower_address'=>'',
            'bind_lic_list'=>'',
            'db_name'=>'',
            'db_port'=>1,
            'role_proxy'=>1,
            'etcd_switch'=>1,
            'etcd_uuid'=>'',
            'role_backup'=>1,
        );
        
        
        $res = $bigdataPlatform -> createBigdataBackupHost($arr);
        $this->do_assert($res);
    }

    public function testListBigdataBackupHost()
    {
        $bigdataPlatform = $this -> bigdataPlatform;
        $arr = array();
        
        
        $res = $bigdataPlatform -> listBigdataBackupHost($arr);
        $this->do_assert($res);
    }

    public function testDescribeBigdataBackupHost()
    {
        $bigdataPlatform = $this -> bigdataPlatform;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $bigdataPlatform -> describeBigdataBackupHost($arr);
        $this->do_assert($res);
    }

    public function testModifyBigdataBackupHost()
    {
        $bigdataPlatform = $this -> bigdataPlatform;
        $arr = array(
            'host_name'=>'',
            'host_uuid'=>'',
            'random_str'=>'',
            'address'=>'',
            'cc_ip_uuid'=>'',
            'os_user'=>'',
            'os_pwd'=>'',
            'db_type'=>1,
            'db_address'=>'',
            'db_user'=>'',
            'db_pwd'=>'',
            'dto_switch'=>1,
            'dto_address'=>'',
            'cls_switch'=>1,
            'follower_address'=>'',
            'bind_lic_list'=>'',
            'username'=>'user',
            'biz_grp_list'=>'',
            'can_del'=>1,
            'can_up'=>1,
            'can_op'=>1,
            'is_biz_admin'=>'0',
            'status'=>'',
            'state'=>array(
            'host_uuid'=>'62D0DAD4-8B60-9627-824D-A217F8489B89',
            'status'=>'ONLINE',
            'time'=>'1692690022',),
            'db_name'=>'',
            'db_port'=>1,
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $bigdataPlatform -> modifyBigdataBackupHost($arr);
        $this->do_assert($res);
    }

    public function testDeleteBigdataBackupHost()
    {
        $bigdataPlatform = $this -> bigdataPlatform;
        $arr = array(
            'host_uuids'=>array(),
            'force'=>1,
        );
        
        
        $res = $bigdataPlatform -> deleteBigdataBackupHost($arr);
        $this->do_assert($res);
    }

    public function testListBigdataBackupHoststatus()
    {
        $bigdataPlatform = $this -> bigdataPlatform;
        $arr = array(
            'host_uuids'=>array(),
            'force_refresh'=>1,
        );
        
        
        $res = $bigdataPlatform -> listBigdataBackupHoststatus($arr);
        $this->do_assert($res);
    }

    public function testCreateBigdataPlatform()
    {
        $bigdataPlatform = $this -> bigdataPlatform;
        $arr = array(
            'platform_name'=>'',
            'host_uuid'=>'',
            'hdfs_ha'=>1,
            'hdfs_config_path'=>'',
            'hdfs_default_fs'=>'',
            'hdfs_kerberos'=>1,
            'hdfs_krb5_conf_path'=>'',
            'hdfs_keytab_path'=>'',
            'hdfs_principal'=>'',
            'hdfs_snapshot'=>1,
            'hive_settings'=>array(
            'hive_switch'=>1,
            'hive_ha'=>1,
            'hive_address'=>'',
            'hive_port'=>'',
            'hive_kerberos'=>1,
            'hive_krb5_conf_path'=>'',
            'hive_keytab_path'=>'',
            'hive_principal'=>'',
            'hive_username'=>'',
            'hive_config_path'=>'',),
            'hive_password'=>'',
            'hbase_settings'=>array(
            'hbase'=>1,
            'kerberos'=>1,
            'krb5_conf_path'=>'',
            'keytab_path'=>'',
            'kerberos_principal'=>'',
            'hbase_conf_path'=>'',),
            'open_kafka'=>1,
        );
        
        
        $res = $bigdataPlatform -> createBigdataPlatform($arr);
        $this->do_assert($res);
    }

    public function testDescribeBigdataPlatform()
    {
        $bigdataPlatform = $this -> bigdataPlatform;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $bigdataPlatform -> describeBigdataPlatform($arr);
        $this->do_assert($res);
    }

    public function testModifyBigdataPlatform()
    {
        $bigdataPlatform = $this -> bigdataPlatform;
        $arr = array(
            'platform_name'=>'',
            'platform_uuid'=>'',
            'host_uuid'=>'',
            'hdfs_ha'=>1,
            'hdfs_config_path'=>'',
            'hdfs_default_fs'=>'',
            'hdfs_kerberos'=>1,
            'hdfs_krb5_conf_path'=>'',
            'hdfs_keytab_path'=>'',
            'hdfs_principal'=>'',
            'hdfs_snapshot'=>1,
            'hive_settings'=>array(
            'hive_switch'=>1,
            'hive_ha'=>1,
            'hive_address'=>'',
            'hive_port'=>'',
            'hive_kerberos'=>1,
            'hive_krb5_conf_path'=>'',
            'hive_keytab_path'=>'',
            'hive_principal'=>'',
            'hive_username'=>'',
            'hive_password'=>'',
            'hive_config_path'=>'',),
            'username'=>'user',
            'biz_grp_list'=>'',
            'can_del'=>1,
            'can_up'=>1,
            'can_op'=>1,
            'is_biz_admin'=>'0',
            'status'=>'',
            'state'=>array(
            'platform_uuid'=>'62D0DAD4-8B60-9627-824D-A217F8489B89',
            'status'=>'ONLINE',
            'time'=>'1692690022',),
            'create_time'=>'',
            'user_uuid'=>'',
            'data_manager_uuid'=>'',
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $bigdataPlatform -> modifyBigdataPlatform($arr);
        $this->do_assert($res);
    }

    public function testListBigdataPlatform()
    {
        $bigdataPlatform = $this -> bigdataPlatform;
        $arr = array();
        
        
        $res = $bigdataPlatform -> listBigdataPlatform($arr);
        $this->do_assert($res);
    }

    public function testDeleteBigdataPlatform()
    {
        $bigdataPlatform = $this -> bigdataPlatform;
        $arr = array(
            'platform_uuids'=>'',
            'force'=>'',
        );
        
        
        $res = $bigdataPlatform -> deleteBigdataPlatform($arr);
        $this->do_assert($res);
    }

    public function testListBigdataPlatformStatus()
    {
        $bigdataPlatform = $this -> bigdataPlatform;
        $arr = array(
            'platform_uuids'=>array(),
            'force_refresh'=>1,
        );
        
        
        $res = $bigdataPlatform -> listBigdataPlatformStatus($arr);
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