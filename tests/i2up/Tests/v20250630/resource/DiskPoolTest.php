<?php
namespace i2up\Test\v20250630\resource;

use i2up\resource\v20250630\DiskPool;
use i2up\common\Auth;
                
class DiskPoolTest extends \PHPUnit_Framework_TestCase
 {
    private $diskPool;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> diskPool = new DiskPool(new Auth());
    }

    public function testListDiskPool()
    {
        $diskPool = $this -> diskPool;
        $arr = array(
            'like_args'=>array(
            'pool_name'=>'',),
            'where_args'=>array(
            'pool_type'=>1,
            'bk_uuid'=>array(),),
        );
        
        
        $res = $diskPool -> listDiskPool($arr);
        $this->do_assert($res);
    }

    public function testCreateDiskPool()
    {
        $diskPool = $this -> diskPool;
        $arr = array(
            'pool_name'=>'',
            'pool_uuid'=>'',
            'pool_type'=>1,
            'bk_uuid'=>'',
            'storage_path'=>'',
            'rootfs'=>1,
            'zfs_pool_uuid'=>'',
            'auto_expand'=>1,
            'zfs_fs_uuid'=>'',
            'max_concurrent'=>1,
            'dedupe_sto_uuid'=>'',
            'domain_uuid'=>'',
            'sto_uuid'=>'',
            'bucket_uuid'=>'',
            'nas_type'=>'NFS',
            'export_path'=>'',
        );
        
        
        $res = $diskPool -> createDiskPool($arr);
        $this->do_assert($res);
    }

    public function testModifyDiskPool()
    {
        $diskPool = $this -> diskPool;
        $arr = array(
            'pool_uuid'=>'',
            'pool_name'=>'',
            'random_str'=>'',
            'bk_uuid'=>'',
            'max_concurrent'=>1,
            'zfs_pool_uuid'=>'',
            'auto_expand'=>'',
            'zfs_fs_uuid'=>'',
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $diskPool -> modifyDiskPool($arr);
        $this->do_assert($res);
    }

    public function testDescribeDiskPool()
    {
        $diskPool = $this -> diskPool;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $diskPool -> describeDiskPool($arr);
        $this->do_assert($res);
    }

    public function testDeleteDiskPool()
    {
        $diskPool = $this -> diskPool;
        $arr = array(
            'pool_uuids'=>array(),
        );
        
        
        $res = $diskPool -> deleteDiskPool($arr);
        $this->do_assert($res);
    }

    public function testCheckDiskPool()
    {
        $diskPool = $this -> diskPool;
        $arr = array(
            'bk_uuid'=>'',
            'storage_path'=>'',
            'pool_uuid'=>'',
        );
        
        
        $res = $diskPool -> checkDiskPool($arr);
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