<?php
namespace i2up\Test\v20260209\common;

use i2up\common\v20260209\Dir;
use i2up\common\Auth;
                
class DirTest extends \PHPUnit_Framework_TestCase
 {
    private $dir;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> dir = new Dir(new Auth());
    }

    public function testListDir()
    {
        $dir = $this -> dir;
        $arr = array(
            'show_file'=>1,
            'node_uuid'=>'B8566905-411E-B2CD-A742-77B1346D8E84',
            'dev'=>0,
            'path'=>'',
            'rep_uuid'=>'',
            'bs_time'=>'2018-10-23_13-23-08',
            'host_uuid'=>'',
            'sto_uuid'=>'',
            'for_vp_file_rc'=>1,
            'ftp_uuid'=>'',
            'cred_uuid'=>'',
            'auth_user'=>'',
            'auth_key'=>'',
            'for_big_data'=>1,
            'mscs_group_ip'=>'',
            'vm_name'=>'',
            'cluster_config_path'=>'',
            'page'=>1,
            'type'=>'bk_snap',
            'mount_dir'=>'',
            'mount_uuid'=>'',
            'bk_path'=>'',
            'rc_point_in_time'=>'',
            'marker'=>'',
            'protocol'=>'',
            'fc_initiator_wwpn'=>'',
            'fc_target_wwpn'=>'',
            'timepoint'=>1,
            'mapper_path'=>'',
            'bk_type'=>'service_type',
            'task_uuid'=>'',
            'volume_uuid'=>'',
            'bucket'=>'',
            'is_ssl'=>1,
            'pool_uuid'=>'',
            'bk_storage'=>'',
            'dedupe_uuid'=>'',
            'is_history_rc'=>0,
            'platform_uuid'=>'',
            'for_dmdsc'=>1,
            'instance_uuid'=>'',
            'proxy_switch'=>1,
            'proxy_id'=>'',
            'config_addr'=>'',
            'config_port'=>1,
            'os_user'=>'',
            'os_pwd'=>'',
            'use_credential'=>1,
        );
        
        
        $res = $dir -> listDir($arr);
        $this->do_assert($res);
    }

    public function testCreateDir()
    {
        $dir = $this -> dir;
        $arr = array(
            'node_uuid'=>'A608F04B-0CA4-2ECD-794C-5AFD4580E5B9',
            'path'=>'C:\\test2\\12347\\',
            'type'=>'bigdata_wk',
        );
        
        
        $res = $dir -> createDir($arr);
        $this->do_assert($res);
    }

    public function testCheckDir()
    {
        $dir = $this -> dir;
        $arr = array(
            'node_uuid'=>'B8566905-411E-B2CD-A742-77B1346D8E84',
            'path'=>'E:\\test2\\',
        );
        
        
        $res = $dir -> checkDir($arr);
        $this->do_assert($res);
    }

    public function testDeleteDir()
    {
        $dir = $this -> dir;
        $arr = array(
            'sto_uuid'=>'',
            'path'=>'aliyun--oos:/TestDir',
            'names'=>array(
            '0'=>array(
            'name'=>'222 - 副本 (2).txt',
            'is_dir'=>'0',),),
            'host_uuid'=>'',
            'bucket'=>'',
        );
        
        
        $res = $dir -> deleteDir($arr);
        $this->do_assert($res);
    }

    public function testDescribeDirDelStatus()
    {
        $dir = $this -> dir;
        $arr = array(
            'sto_uuid'=>'',
            'task_uuid'=>'',
            'host_uuid'=>'',
        );
        
        
        $res = $dir -> describeDirDelStatus($arr);
        $this->do_assert($res);
    }

    public function testListEtcdDir()
    {
        $dir = $this -> dir;
        $arr = array(
            'node_uuid'=>'B8566905-411E-B2CD-A742-77B1346D8E84',
            'path'=>'',
        );
        
        
        $res = $dir -> listEtcdDir($arr);
        $this->do_assert($res);
    }

    public function testOperateDtoDir()
    {
        $dir = $this -> dir;
        $arr = array(
            'type'=>1,
            'sto_uuid'=>'',
            'host_uuid'=>'',
            'sto_type'=>'',
            'archive_data_direct'=>1,
            'valid_period'=>1,
            'rate_type'=>1,
            'path'=>array(),
            'names'=>array(
            '0'=>array(
            'name'=>'',
            'is_dir'=>'',),),
        );
        
        
        $res = $dir -> operateDtoDir($arr);
        $this->do_assert($res);
    }

    public function testListFileBackupDir()
    {
        $dir = $this -> dir;
        $arr = array(
            'bk_uuid'=>'',
            'rc_data_path'=>'',
            'bk_storage'=>1,
            'tape_pool_uuid'=>'',
            'tape_name'=>'',
            'library_sn'=>'',
            'dedupe_uuid'=>'',
            'rc_point'=>'',
            'sto_uuid'=>'',
            'bucket_name'=>'',
            'rc_pathlist_response'=>array(
            'bk_path'=>array(),
            'rc_time_point_list'=>array(),
            'bk_data_type'=>1,
            'wk_data_type'=>1,
            'backup_type'=>1,
            'task_uuid'=>'',
            'blk_direct_copy'=>'',
            'mount_point'=>'',),
            'path'=>'',
        );
        
        
        $res = $dir -> listFileBackupDir($arr);
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