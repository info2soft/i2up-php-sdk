<?php
namespace i2up\Test\v20250123\dto;

use i2up\dto\v20250123\DtoArchive;
use i2up\common\Auth;
                
class DtoArchiveTest extends \PHPUnit_Framework_TestCase
 {
    private $dtoArchive;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> dtoArchive = new DtoArchive(new Auth());
    }

    public function testListDtoArchive()
    {
        $dtoArchive = $this -> dtoArchive;
        $arr = array(
            'where_args'=>array(
            '0'=>array(
            'archive_year'=>'',
            'archive_time_start'=>1,
            'archive_time_end'=>1,
            'create_time_start'=>1,
            'create_time_end'=>1,
            'modify_time_start'=>1,
            'modify_time_end'=>1,
            'delete_time_start'=>1,
            'delete_time_end'=>1,),),
            'like_args'=>array(
            '0'=>array(
            'target_path'=>'',
            'sync_host_name'=>'',
            'sync_host_ip'=>'',
            'source_path'=>'',),),
        );
        
        
        $res = $dtoArchive -> listDtoArchive($arr);
        $this->do_assert($res);
    }

    public function testExportDtoArchiveData()
    {
        $dtoArchive = $this -> dtoArchive;
        $arr = array(
            'id'=>array(),
        );
        
        
        $res = $dtoArchive -> exportDtoArchiveData($arr);
        $this->do_assert($res);
    }

    public function testGetDtoArchiveYear()
    {
        $dtoArchive = $this -> dtoArchive;
        $arr = array();
        
        
        $res = $dtoArchive -> getDtoArchiveYear($arr);
        $this->do_assert($res);
    }

    public function testDownloadDtoArchiveData()
    {
        $dtoArchive = $this -> dtoArchive;
        $arr = array(
            'ids'=>array(),
        );
        
        
        $res = $dtoArchive -> downloadDtoArchiveData($arr);
        $this->do_assert($res);
    }

    public function testRestoreDtoArchiveData()
    {
        $dtoArchive = $this -> dtoArchive;
        $arr = array(
            'ids'=>array(),
        );
        
        
        $res = $dtoArchive -> restoreDtoArchiveData($arr);
        $this->do_assert($res);
    }

    public function testCreateDtoArchiveReportRule()
    {
        $dtoArchive = $this -> dtoArchive;
        $arr = array(
            'rule_name'=>'',
            'rule_uuids'=>'',
            'policy_type'=>'',
            'range'=>1,
            'policies'=>array(
            '0'=>array(
            'time'=>'12:00',
            'day'=>'',
            'month'=>'',
            'season_month'=>'',),),
            'mail_switch'=>1,
            'mail_address'=>array(
            '0'=>array(
            'email'=>'',
            'name'=>'',),),
            'retain_num'=>1,
            'stat_start'=>'',
            'stat_end'=>'',
        );
        
        
        $res = $dtoArchive -> createDtoArchiveReportRule($arr);
        $this->do_assert($res);
    }

    public function testModifyDtoArchiveReportRule()
    {
        $dtoArchive = $this -> dtoArchive;
        $arr = array(
            'rule_name'=>'',
            'rule_uuids'=>'',
            'policy_type'=>'',
            'range'=>1,
            'policies'=>array(
            '0'=>array(
            'time'=>'12:00',
            'season_month'=>'',
            'day'=>'',
            'month'=>'',),),
            'mail_switch'=>1,
            'mail_address'=>array(
            '0'=>array(
            'email'=>'',
            'name'=>'',),),
            'retain_num'=>1,
            'rule_uuid'=>'',
        );
        
        
        $res = $dtoArchive -> modifyDtoArchiveReportRule($arr);
        $this->do_assert($res);
    }

    public function testDescribeDtoArchiveReportRule()
    {
        $dtoArchive = $this -> dtoArchive;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $dtoArchive -> describeDtoArchiveReportRule($arr);
        $this->do_assert($res);
    }

    public function testDeleteDtoArchiveReportRule()
    {
        $dtoArchive = $this -> dtoArchive;
        $arr = array(
            'rule_uuids'=>array(),
        );
        
        
        $res = $dtoArchive -> deleteDtoArchiveReportRule($arr);
        $this->do_assert($res);
    }

    public function testListDtoArchiveReportRule()
    {
        $dtoArchive = $this -> dtoArchive;
        $arr = array(
            'limit'=>'',
            'page'=>'',
            'search_field'=>'',
            'search_value'=>'',
        );
        
        
        $res = $dtoArchive -> listDtoArchiveReportRule($arr);
        $this->do_assert($res);
    }

    public function testListDtoArchiveReportHistory()
    {
        $dtoArchive = $this -> dtoArchive;
        $arr = array(
            'limit'=>'',
            'page'=>'',
            'where_args'=>array(
            'rule_uuid'=>'',),
        );
        
        
        $res = $dtoArchive -> listDtoArchiveReportHistory($arr);
        $this->do_assert($res);
    }

    public function testListDtoArchiveReportStatistics()
    {
        $dtoArchive = $this -> dtoArchive;
        $arr = array(
            'where_args'=>array(
            'rule_uuid'=>'',
            'task_uuid'=>'',),
        );
        
        
        $res = $dtoArchive -> listDtoArchiveReportStatistics($arr);
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