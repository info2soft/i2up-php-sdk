<?php
namespace i2up\Test\v20250123\resource;

use i2up\resource\v20250123\Filesystem;
use i2up\common\Auth;
                
class FilesystemTest extends \PHPUnit_Framework_TestCase
 {
    private $filesystem;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> filesystem = new Filesystem(new Auth());
    }

    public function testCreateFilesystem()
    {
        $filesystem = $this -> filesystem;
        $arr = array(
            'name'=>'',
            'pool_uuid'=>'',
            'fs_name'=>'',
            'quota_switch'=>1,
            'quota_size'=>1,
            'compress'=>1,
            'dedup'=>1,
            'zfs_params'=>array(),
        );
        
        
        $res = $filesystem -> createFilesystem($arr);
        $this->do_assert($res);
    }

    public function testModifyFilesystem()
    {
        $filesystem = $this -> filesystem;
        $arr = array(
            'name'=>'',
            'quota_switch'=>1,
            'quota_size'=>1,
            'compress'=>1,
            'dedup'=>1,
            'zfs_params'=>array(),
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $filesystem -> modifyFilesystem($arr);
        $this->do_assert($res);
    }

    public function testDescribeFilesystem()
    {
        $filesystem = $this -> filesystem;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $filesystem -> describeFilesystem($arr);
        $this->do_assert($res);
    }

    public function testListFilesystemStatus()
    {
        $filesystem = $this -> filesystem;
        $arr = array(
            'uuids'=>array(),
            'force_refresh'=>'',
        );
        
        
        $res = $filesystem -> listFilesystemStatus($arr);
        $this->do_assert($res);
    }

    public function testDeleteFilesystem()
    {
        $filesystem = $this -> filesystem;
        $arr = array(
            'uuids'=>array(),
            'force'=>1,
        );
        
        
        $res = $filesystem -> deleteFilesystem($arr);
        $this->do_assert($res);
    }

    public function testListFilesystem()
    {
        $filesystem = $this -> filesystem;
        $arr = array();
        
        
        $res = $filesystem -> listFilesystem($arr);
        $this->do_assert($res);
    }

    public function testLoadFilesystemList()
    {
        $filesystem = $this -> filesystem;
        $arr = array(
            'pool_uuid'=>'',
        );
        
        
        $res = $filesystem -> loadFilesystemList($arr);
        $this->do_assert($res);
    }

    public function testImportFilesystemList()
    {
        $filesystem = $this -> filesystem;
        $arr = array(
            'filesystem_list'=>array(
            '0'=>array(
            'name'=>'',
            'fs_name'=>'',
            'quota_switch'=>1,
            'quota_size'=>1,
            'compress'=>1,
            'dedup'=>1,
            'pool_uuid'=>'',),),
        );
        
        
        $res = $filesystem -> importFilesystemList($arr);
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