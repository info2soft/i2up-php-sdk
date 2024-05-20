<?php
namespace i2up\Test\v20240228\dto;

use i2up\dto\v20240228\Dto;
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
            'scan_obj_flag'=>1,
            'archive_object'=>array(
            'name_feature'=>'',
            'file_type'=>'',
            'create_time'=>1,
            'modify_time'=>1,
            'access_time'=>1,
            'type'=>'',),
            'valid_period'=>1,
            'rate_type'=>1,
            'real_path'=>array(),
            'volume_uuid'=>'',
            'file_record'=>1,
            'encrypt_key_type'=>1,
            'encrypt_type'=>'',
            'file_date_filter_switch'=>1,
            'file_date_filter_regex'=>'',
            'archive_name'=>1,
        );
        $res = $dto -> createDtoRule($arr);
        $this->do_assert($res);
    }

    public function testModifyDtoRule()
    {
        $dto = $this -> dto;
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111',
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
            'scan_obj_flag'=>1,
            'archive_object'=>array(
            'name_feature'=>'',
            'file_type'=>'',
            'create_time'=>1,
            'modify_time'=>1,
            'access_time'=>1,
            'type'=>'',),
            'real_path'=>'',
        );
        $res = $dto -> modifyDtoRule($arr);
        $this->do_assert($res);
    }

    public function testDescribeDtoRule()
    {
        $dto = $this -> dto;
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111',
        );
        $res = $dto -> describeDtoRule($arr);
        $this->do_assert($res);
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
            'status'=>'LIST_STOP',
        );
        $res = $dto -> listDtoRule($arr);
        $this->do_assert($res);
    }

    public function testListDtoRuleStatus()
    {
        $dto = $this -> dto;
        $arr = array(
            'rule_uuids'=>array('11111111-1111-1111-1111-111111111111'),
            'force_refresh'=>1,
        );
        $res = $dto -> listDtoRuleStatus($arr);
        $this->do_assert($res);
    }

    public function testDeleteDtoRule()
    {
        $dto = $this -> dto;
        $arr = array(
            'rule_uuids'=>array('11111111-1111-1111-1111-111111111111'),
            'force'=>1,
        );
        $res = $dto -> deleteDtoRule($arr);
        $this->do_assert($res);
    }

    public function testStartDtoRule()
    {
        $dto = $this -> dto;
        $arr = array(
            'operate'=>'start',
            'rule_uuids'=>array(
            '0'=>'dCf2732A-fBdA-5F3F-cE3f-7989AA8De4cd',
            '1'=>'17b99b8e-2e11-C1b2-7302-b8ee1BCdF3Bd',),
        );
        $res = $dto -> startDtoRule($arr);
        $this->do_assert($res);
    }

    public function testStopDtoRule()
    {
        $dto = $this -> dto;
        $arr = array(
            'operate'=>'stop',
            'rule_uuids'=>array(
            '0'=>'dCf2732A-fBdA-5F3F-cE3f-7989AA8De4cd',
            '1'=>'17b99b8e-2e11-C1b2-7302-b8ee1BCdF3Bd',),
        );
        $res = $dto -> stopDtoRule($arr);
        $this->do_assert($res);
    }

    public function testResumeDtoRule()
    {
        $dto = $this -> dto;
        $arr = array(
            'operate'=>'resume',
            'rule_uuids'=>array(
            '0'=>'dCf2732A-fBdA-5F3F-cE3f-7989AA8De4cd',
            '1'=>'17b99b8e-2e11-C1b2-7302-b8ee1BCdF3Bd',),
        );
        $res = $dto -> resumeDtoRule($arr);
        $this->do_assert($res);
    }

    public function testRestartDtoRule()
    {
        $dto = $this -> dto;
        $arr = array(
            'operate'=>'restart',
            'rule_uuids'=>array(
            '0'=>'dCf2732A-fBdA-5F3F-cE3f-7989AA8De4cd',
            '1'=>'17b99b8e-2e11-C1b2-7302-b8ee1BCdF3Bd',),
        );
        $res = $dto -> restartDtoRule($arr);
        $this->do_assert($res);
    }

    public function testDisableDtoRule()
    {
        $dto = $this -> dto;
        $arr = array(
            'operate'=>'disable',
            'rule_uuids'=>array(
            '0'=>'dCf2732A-fBdA-5F3F-cE3f-7989AA8De4cd',
            '1'=>'17b99b8e-2e11-C1b2-7302-b8ee1BCdF3Bd',),
        );
        $res = $dto -> disableDtoRule($arr);
        $this->do_assert($res);
    }

    public function testEnableDtoRule()
    {
        $dto = $this -> dto;
        $arr = array(
            'operate'=>'enable',
            'rule_uuids'=>array(
            '0'=>'dCf2732A-fBdA-5F3F-cE3f-7989AA8De4cd',
            '1'=>'17b99b8e-2e11-C1b2-7302-b8ee1BCdF3Bd',),
        );
        $res = $dto -> enableDtoRule($arr);
        $this->do_assert($res);
    }

    public function testListDtoRuleFile()
    {
        $dto = $this -> dto;
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111',
            'type'=>'',
            'page'=>1,
            'limit'=>1,
            'result_id'=>'',
        );
        $res = $dto -> listDtoRuleFile($arr);
        $this->do_assert($res);
    }

    public function testDeleteDtoRuleFile()
    {
        $dto = $this -> dto;
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111',
        );
        $res = $dto -> deleteDtoRuleFile($arr);
        $this->do_assert($res);
    }

    public function testListDtoRuleCmpResult()
    {
        $dto = $this -> dto;
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111',
        );
        $res = $dto -> listDtoRuleCmpResult($arr);
        $this->do_assert($res);
    }

    public function testListDtoRuleSourcePath()
    {
        $dto = $this -> dto;
        $arr = array(
            'host_uuid'=>'bfAcdbAA-cEA7-d2bd-EbcA-4fDdfdD9EDc3',
            'timepoint'=>'@timestamp()',
            'host_ip'=>'',
            'prefix'=>'',
            'mapper_path'=>'',
        );
        $res = $dto -> listDtoRuleSourcePath($arr);
        $this->do_assert($res);
    }

    private function do_assert($res)
    {
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}