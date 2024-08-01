<?php
namespace i2up\Test\v20240228\cdm;

use i2up\cdm\v20240228\FfoMount;
use i2up\common\Auth;
                
class FfoMountTest extends \PHPUnit_Framework_TestCase
 {
    private $ffoMount;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> ffoMount = new FfoMount(new Auth());
    }

    public function testCreateFfoMount()
    {
        $ffoMount = $this -> ffoMount;
        $arr = array(
            'vp_uuid'=>'',
            'bk_version'=>'',
            'os_version'=>'',
            'storage_uuid'=>'',
            'mount_name'=>'',
            'wk_uuid'=>'',
            'bk_uuid'=>'',
            'vm_disks'=>array(
                '0'=>array(
                    'path'=>'',
                    'size'=>'',
                    'interface'=>'',
                    'isBoot'=>'',),),
            'protocol'=>'',
            'fsp_uuid'=>'',
            'acl'=>'',
            'by_type'=>'',
            'wk_address'=>'',
            'wk_name'=>'',
            'client_uuid'=>'',
            'specify_client'=>0,
        );
        $res = $ffoMount -> createFfoMount($arr);
        $this->do_assert($res);
    }

    public function testModifyFfoMount()
    {
        $ffoMount = $this -> ffoMount;
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111',
            'vp_uuid'=>'',
            'bk_version'=>'',
            'os_version'=>'',
            'storage_uuid'=>'',
            'mount_name'=>'',
            'wk_uuid'=>'',
            'bk_uuid'=>'',
            'vm_disks'=>array(
                '0'=>array(
                    'path'=>'',
                    'size'=>'',
                    'interface'=>'',
                    'isBoot'=>'',),),
            'protocol'=>'',
            'acl'=>'',
            'random_str'=>'',
            'fsp_uuid'=>'',
            'specify_client'=>1,
            'client_uuid'=>'',
        );
        $res = $ffoMount -> modifyFfoMount($arr);
        $this->do_assert($res);
    }

    public function testDescribeFfomount()
    {
        $ffoMount = $this -> ffoMount;
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111',
        );
        $res = $ffoMount -> describeFfomount($arr);
        $this->do_assert($res);
    }

    public function testFfoMountList()
    {
        $ffoMount = $this -> ffoMount;
        $arr = array(
            'limit'=>10,
            'page'=>1,
            'search_field'=>'mount_name',
            'search_value'=>'mount_name',
        );
        $res = $ffoMount -> ffoMountList($arr);
        $this->do_assert($res);
    }

    public function testListFfoMountStatus()
    {
        $ffoMount = $this -> ffoMount;
        $arr = array(
            'mount_uuids'=>array('11111111-1111-1111-1111-111111111111'),
            'force_refresh'=>1,
        );
        $res = $ffoMount -> listFfoMountStatus($arr);
        $this->do_assert($res);
    }

    public function testDeleteFfoMount()
    {
        $ffoMount = $this -> ffoMount;
        $arr = array(
            'mount_uuids'=>array('11111111-1111-1111-1111-111111111111'),
        );
        $res = $ffoMount -> deleteFfoMount($arr);
        $this->do_assert($res);
    }

    private function do_assert($res)
    {
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}