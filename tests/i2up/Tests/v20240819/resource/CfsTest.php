<?php
namespace i2up\Test\v20240819\resource;

use i2up\resource\v20240819\Cfs;
use i2up\common\Auth;
                
class CfsTest extends \PHPUnit_Framework_TestCase
 {
    private $cfs;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> cfs = new Cfs(new Auth());
    }

    public function testCreateCfs()
    {
        $cfs = $this -> cfs;
        $arr = array(
            'cfs_name'=>'',
            'ip'=>'',
            'port'=>1,
            'user'=>'',
            'pwd'=>'',
            'biz_grp_list'=>array(),
            'maintenance'=>1,
            'db_name'=>'',
        );
        
        
        $res = $cfs -> createCfs($arr);
        $this->do_assert($res);
    }

    public function testModifyCfs()
    {
        $cfs = $this -> cfs;
        $arr = array(
            'cfs_name'=>'',
            'ip'=>'',
            'port'=>1,
            'user'=>'',
            'pwd'=>'',
            'biz_grp_list'=>array(),
            'random_str'=>'',
            'maintenance'=>1,
            'db_name'=>'',
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $cfs -> modifyCfs($arr);
        $this->do_assert($res);
    }

    public function testDescribeCfs()
    {
        $cfs = $this -> cfs;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $cfs -> describeCfs($arr);
        $this->do_assert($res);
    }

    public function testListCfs()
    {
        $cfs = $this -> cfs;
        $arr = array(
            'limit'=>15,
            'page'=>1,
        );
        
        
        $res = $cfs -> listCfs($arr);
        $this->do_assert($res);
    }

    public function testDeleteCfs()
    {
        $cfs = $this -> cfs;
        $arr = array(
            'cfs_uuids'=>array(),
            'force'=>1,
        );
        
        
        $res = $cfs -> deleteCfs($arr);
        $this->do_assert($res);
    }

    public function testListCfsStatus()
    {
        $cfs = $this -> cfs;
        $arr = array(
            'cfs_uuids'=>array(),
            'force_refresh'=>1,
        );
        
        
        $res = $cfs -> listCfsStatus($arr);
        $this->do_assert($res);
    }

    public function testMaintainCfs()
    {
        $cfs = $this -> cfs;
        $arr = array(
            'cfs_uuids'=>array(),
            'operate'=>'',
            'switch'=>1,
        );
        
        
        $res = $cfs -> maintainCfs($arr);
        $this->do_assert($res);
    }

    public function testTestConnect()
    {
        $cfs = $this -> cfs;
        $arr = array(
            'ip'=>'',
            'port'=>1,
            'user'=>'',
            'pwd'=>'',
            'db_name'=>'',
            'cfs_uuid'=>'',
        );
        
        
        $res = $cfs -> testConnect($arr);
        $this->do_assert($res);
    }

    public function testListCfsZoneFs()
    {
        $cfs = $this -> cfs;
        $arr = array(
            'cfs_uuid'=>'',
        );
        
        
        $res = $cfs -> listCfsZoneFs($arr);
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