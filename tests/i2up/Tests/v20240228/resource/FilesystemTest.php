<?php
namespace i2up\Test\v20240228\resource;

use i2up\resource\v20240228\Filesystem;
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
            'uuid' => '11111111-1111-1111-1111-111111111111',
            'name'=>'',
            'quota_switch'=>1,
            'quota_size'=>1,
            'compress'=>1,
            'dedup'=>1,
            'zfs_params'=>array(),
        );
        $res = $filesystem -> modifyFilesystem($arr);
        $this->do_assert($res);
    }

    public function testDescribeFilesystem()
    {
        $filesystem = $this -> filesystem;
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111'
        );
        $res = $filesystem -> describeFilesystem($arr);
        $this->do_assert($res);
    }

    public function testListFilesystemStatus()
    {
        $filesystem = $this -> filesystem;
        $arr = array(
            'uuids'=>array('11111111-1111-1111-1111-111111111111'),
            'force_refresh'=>'',
        );
        $res = $filesystem -> listFilesystemStatus($arr);
        $this->do_assert($res);
    }

    public function testDeleteFilesystem()
    {
        $filesystem = $this -> filesystem;
        $arr = array(
            'uuids'=>array('11111111-1111-1111-1111-111111111111'),
            'force'=>1,
        );
        $res = $filesystem -> deleteFilesystem($arr);
        $this->do_assert($res);
    }

    public function testListFilesystem()
    {
        $filesystem = $this -> filesystem;
        $arr = array('11111111-1111-1111-1111-111111111111');
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
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}