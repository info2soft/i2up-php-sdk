<?php
namespace i2up\Test\v20260626\resource;

use i2up\resource\v20260626\DtoHost;
use i2up\common\Auth;
use PHPUnit\Framework\TestCase;
                
class DtoHostTest extends TestCase
 {
    private $dtoHost;
    
    public function setUp():void
    {
        parent::setup();
        $this -> dtoHost = new DtoHost(new Auth());
    }

    public function testAuthDtoHost()
    {
        $dtoHost = $this -> dtoHost;
        $arr = array(
            'host_ip'=>'192.168.72.70',
            'host_user'=>'exampleuser',
            'host_pwd'=>'dN5BejxqJsnEQOBRig7OBeZzQb1SEYAfs0keD+6z1l658pc/drceaMJa29FDdQpW6FfLLmb1cG1DWvOOGz9sZRUY4wnKNhpHQjVE4wAlLOnVZPGlYSgtURhbIOeLl5uZCWgCSGTbQFMTCD/wql4/8/cMgWspQBvwO/5UbYqcW64Sj8wnuWf6qt4KGqrP9ua2yDFj+5S0MgMLWnAXhBwCCFVBmmmngNr5CUMe4Hqm1/d4OhvTzqTWecLNFnr9NmN4fp1zAQMZstUiedgWGg7uU9Aez2Xf8RsekMeo3O7bnZXyHZL5wpOtiq3gD/12H4bNrgDYuShsGDfEEqzfwXpoew==',
            'host_port'=>'',
            'proxy_switch'=>1,
            'proxy_id'=>'',
        );
        
        
        $res = $dtoHost -> authDtoHost($arr);
        $this->do_assert($res);
    }

    public function testCreateDtoHost()
    {
        $dtoHost = $this -> dtoHost;
        $arr = array(
            'host_name'=>'',
            'host_ip'=>'',
            'host_user'=>'',
            'host_pwd'=>'',
            'sto_uuid'=>'CCF36C5F-CBA6-8A55-3CA2-C07CF8E0EC4F',
            'comment'=>'',
            'cc_ip'=>'',
            'cc_ip_uuid'=>'',
            'maintenance'=>0,
            'syncdb_host'=>'',
            'syncdb_username'=>'',
            'syncdb_password'=>'',
            'host_type'=>1,
            'syncdb_type'=>1,
            'node_list'=>array(
            '0'=>array(
            'address'=>'',
            'port'=>'',
            'uuid'=>'',),),
            'host_cluster_type'=>'',
            'syncdb_port'=>'',
            'syncdb_name'=>'',
            'host_port'=>'',
            'archive_db_type'=>1,
            'proxy_switch'=>1,
            'proxy_id'=>'',
        );
        
        
        $res = $dtoHost -> createDtoHost($arr);
        $this->do_assert($res);
    }

    public function testModifyDtoHost()
    {
        $dtoHost = $this -> dtoHost;
        $arr = array(
            'host_uuid'=>'',
            'host_name'=>'',
            'host_ip'=>'',
            'host_user'=>'',
            'host_pwd'=>'',
            'sto_uuid'=>0,
            'random_str'=>'',
            'cc_ip'=>'',
            'cc_ip_uuid'=>'',
            'maintenance'=>0,
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $dtoHost -> modifyDtoHost($arr);
        $this->do_assert($res);
    }

    public function testDescribeDtoHost()
    {
        $dtoHost = $this -> dtoHost;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $dtoHost -> describeDtoHost($arr);
        $this->do_assert($res);
    }

    public function testListDtoHost()
    {
        $dtoHost = $this -> dtoHost;
        $arr = array(
            'limit'=>1,
            'page'=>1,
            'search_value'=>'',
            'search_field'=>'',
        );
        
        
        $res = $dtoHost -> listDtoHost($arr);
        $this->do_assert($res);
    }

    public function testListDtoHostStatus()
    {
        $dtoHost = $this -> dtoHost;
        $arr = array(
            'host_uuids'=>array(),
            'force_refresh'=>1,
        );
        
        
        $res = $dtoHost -> listDtoHostStatus($arr);
        $this->do_assert($res);
    }

    public function testDeleteDtoHost()
    {
        $dtoHost = $this -> dtoHost;
        $arr = array(
            'force'=>1,
            'host_uuids'=>array(),
        );
        
        
        $res = $dtoHost -> deleteDtoHost($arr);
        $this->do_assert($res);
    }

    public function testListDtoHostClusterNode()
    {
        $dtoHost = $this -> dtoHost;
        $arr = array(
            'where_args'=>array(
            'host_uuid'=>'',),
        );
        
        
        $res = $dtoHost -> listDtoHostClusterNode($arr);
        $this->do_assert($res);
    }

    public function testDeleteDtoHostClusterNode()
    {
        $dtoHost = $this -> dtoHost;
        $arr = array(
            'node_uuid'=>'',
            'force'=>1,
        );
        
        
        $res = $dtoHost -> deleteDtoHostClusterNode($arr);
        $this->do_assert($res);
    }

    public function testListArchiveDate()
    {
        $dtoHost = $this -> dtoHost;
        $arr = array(
            'type'=>0,
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $dtoHost -> listArchiveDate($arr);
        $this->do_assert($res);
    }

    public function testListRcTimePoint()
    {
        $dtoHost = $this -> dtoHost;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $dtoHost -> listRcTimePoint($arr);
        $this->do_assert($res);
    }

    public function testListArchiveFile()
    {
        $dtoHost = $this -> dtoHost;
        $arr = array(
            'data_source'=>'2019',
            'page'=>1,
            'limit'=>100,
            'wk_path'=>'',
            'file_name'=>'',
            'create_begin_time'=>1,
            'create_end_time'=>1,
            'modify_begin_time'=>1,
            'modify_end_time'=>1,
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $dtoHost -> listArchiveFile($arr);
        $this->do_assert($res);
    }

    public function testListLoadRules()
    {
        $dtoHost = $this -> dtoHost;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $dtoHost -> listLoadRules($arr);
        $this->do_assert($res);
    }

    public function testListBakRecord()
    {
        $dtoHost = $this -> dtoHost;
        $arr = array(
            'file_name'=>'',
            'wk_path'=>'',
            'bk_path'=>'',
            'begin_backup_time'=>1,
            'end_backup_time'=>1,
            'page'=>'1',
            'limit'=>'100',
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $dtoHost -> listBakRecord($arr);
        $this->do_assert($res);
    }

    public function testUpgradeDtoHost()
    {
        $dtoHost = $this -> dtoHost;
        $arr = array(
            'host_uuids'=>array(),
            'operate'=>'',
            'switch'=>0,
        );
        
        
        $res = $dtoHost -> upgradeDtoHost($arr);
        $this->do_assert($res);
    }

    public function testMaintainDtoHost()
    {
        $dtoHost = $this -> dtoHost;
        $arr = array(
            'host_uuids'=>array(),
            'operate'=>'',
            'switch'=>0,
        );
        
        
        $res = $dtoHost -> maintainDtoHost($arr);
        $this->do_assert($res);
    }

    public function testRenewKeyDtoHost()
    {
        $dtoHost = $this -> dtoHost;
        $arr = array(
            'host_uuids'=>array(),
            'operate'=>'',
            'switch'=>0,
        );
        
        
        $res = $dtoHost -> renewKeyDtoHost($arr);
        $this->do_assert($res);
    }

    public function testRevertFile()
    {
        $dtoHost = $this -> dtoHost;
        $arr = array(
            'ids'=>array(
            '0'=>array(
            ''=>'',),),
            'data_source'=>'2021',
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $dtoHost -> revertFile($arr);
        $this->do_assert($res);
    }

    public function testListRevertRecord()
    {
        $dtoHost = $this -> dtoHost;
        $arr = array(
            'data_source'=>'2019',
            'page'=>1,
            'limit'=>100,
            'wk_path'=>'',
            'file_name'=>'',
            'create_begin_time'=>1,
            'create_end_time'=>1,
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $dtoHost -> listRevertRecord($arr);
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