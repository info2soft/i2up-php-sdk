<?php
namespace i2up\Test\dto;

use i2up\dto\v20200721\Dto;
use i2up\common\Auth;

class DtoTest extends \PHPUnit_Framework_TestCase
{
    private $dto;

    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> dto = new Dto(new Auth());
    }

    public function testCreateDtoRule()
    {
        $dto = $this -> dto;
        $arr = array(
            'enable'=>0,
            'rule_name'=>'',
            'rule_type'=>0,
            'sync_uuid'=>'',
            'policy_type'=>0,
            'policy_str'=>'',
            'wk_uuid'=>'',
            'wk_path'=>array(),
            'bk_uuid'=>'',
            'bk_path'=>array(),
            'excl_path'=>array(),
            'file_type_filter_switch'=>0,
            'file_type_filter'=>'',
            'compare_type'=>0,
            'oph_policy'=>0,
            'bk_name_opt'=>0,
            'trans_thread_num'=>0,
            'obj_scan_thread_num'=>0,
            'cmp_thread_num'=>0,
            'cmp_algorithm'=>0,
            'cmp_result_limit'=>0,
            'band_width'=>'',
            'app_db_up_switch'=>0,
            'app_db_up_type'=>'0',
            'app_db_up_sql'=>'0',
            'sync_type'=>1,
            'archive_flag'=>1,
            'archive_type'=>1,
            'archive_days'=>1,
            'compress'=>0,
            'encrypt'=>0,
            'encrypt_pass'=>'',
            'rc_point'=>1,
            'rc_type'=>1,
        );
        $res = $dto -> createDtoRule($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testModifyDtoRule()
    {
        $dto = $this -> dto;
        $arr = array(
            'enable'=>0,
            'rule_name'=>'',
            'sync_uuid'=>'',
            'policy_type'=>0,
            'policy_str'=>'',
            'wk_uuid'=>'',
            'wk_path'=>array(),
            'bk_uuid'=>'',
            'bk_path'=>array(),
            'excl_path'=>array(),
            'file_type_filter_switch'=>0,
            'file_type_filter'=>'',
            'compare_type'=>0,
            'oph_policy'=>0,
            'bk_name_opt'=>0,
            'trans_thread_num'=>0,
            'obj_scan_thread_num'=>0,
            'cmp_thread_num'=>0,
            'cmp_algorithm'=>0,
            'cmp_result_limit'=>0,
            'band_width'=>'',
            'app_db_up_switch'=>0,
            'app_db_up_type'=>0,
            'app_db_up_sql'=>0,
            'random_str'=>'',
            'sync_type'=>1,
            'archive_flag'=>1,
            'archive_type'=>1,
            'archive_days'=>1,
            'compress'=>0,
            'encrypt'=>0,
            'encrypt_pass'=>'',
        );
        $res = $dto -> modifyDtoRule($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeDtoRule()
    {
        $dto = $this -> dto;
        $arr = array(
        );
        $res = $dto -> describeDtoRule($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListDtoRule()
    {
        $dto = $this -> dto;
        $arr = array(
            'limit'=>1,
            'page'=>1,
            'search_value'=>'',
            'search_field'=>'',
            'type'=>1,
        );
        $res = $dto -> listDtoRule($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListDtoRuleStatus()
    {
        $dto = $this -> dto;
        $arr = array(
            'rule_uuids'=>array('11111111-1111-1111-1111-111111111111'),
        );
        $res = $dto -> listDtoRuleStatus($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDeleteDtoRule()
    {
        $dto = $this -> dto;
        $arr = array(
            'rule_uuids'=>array('11111111-1111-1111-1111-111111111111'),
        );
        $res = $dto -> deleteDtoRule($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testTempFuncName()
    {
        $dto = $this -> dto;
        $arr = array(
            'operate'=>'',
            'rule_uuids'=>array('11111111-1111-1111-1111-111111111111'),
        );
        $res = $dto -> tempFuncName($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListDtoRuleFile()
    {
        $dto = $this -> dto;
        $arr = array(
            'type'=>'',
            'page'=>1,
            'limit'=>1,
        );
        $res = $dto -> listDtoRuleFile($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDeleteDtoRuleFile()
    {
        $dto = $this -> dto;
        $arr = array(
        );
        $res = $dto -> deleteDtoRuleFile($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListDtoRuleCmpResult()
    {
        $dto = $this -> dto;
        $arr = array(
        );
        $res = $dto -> listDtoRuleCmpResult($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}