<?php
namespace i2up\Test\v20260626\cdm;

use i2up\cdm\v20260626\FfoMount;
use i2up\common\Auth;
use PHPUnit\Framework\TestCase;
                
class FfoMountTest extends TestCase
 {
    private $ffoMount;
    
    public function setUp():void
    {
        parent::setup();
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
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $ffoMount -> modifyFfoMount($arr);
        $this->do_assert($res);
    }

    public function testDescribeFfomount()
    {
        $ffoMount = $this -> ffoMount;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
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
            'mount_uuids'=>array(),
            'force_refresh'=>1,
        );
        
        
        $res = $ffoMount -> listFfoMountStatus($arr);
        $this->do_assert($res);
    }

    public function testDeleteFfoMount()
    {
        $ffoMount = $this -> ffoMount;
        $arr = array(
            'mount_uuids'=>array(),
        );
        
        
        $res = $ffoMount -> deleteFfoMount($arr);
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