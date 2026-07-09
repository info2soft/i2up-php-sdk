<?php
namespace i2up\Test\v20260626\dto;

use i2up\dto\v20260626\Dto;
use i2up\common\Auth;
use PHPUnit\Framework\TestCase;
                
class DtoTest extends TestCase
 {
    private $dto;
    
    public function setUp():void
    {
        parent::setup();
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
            'acl_sync'=>1,
            'file_list_sto_uuid'=>'',
            'bucket_log_path'=>'',
            'snapshot_rc_point'=>'',
            'log_type'=>1,
            'log_time'=>1,
            'rpo_alarm_switch'=>1,
            'rpo_alarm_threshold'=>1,
            'rpo_interval_alarm_switch'=>1,
        );
        
        
        $res = $dto -> createDtoRule($arr);
        $this->do_assert($res);
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
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $dto -> modifyDtoRule($arr);
        $this->do_assert($res);
    }

    public function testDescribeDtoRule()
    {
        $dto = $this -> dto;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
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
            'where_args'=>array(
            'rule_uuid'=>'f31aB6bc-eccE-Be75-4B5D-b6e03E55CFC1',
            'status'=>'STOP',),
        );
        
        
        $res = $dto -> listDtoRule($arr);
        $this->do_assert($res);
    }

    public function testListDtoRuleStatus()
    {
        $dto = $this -> dto;
        $arr = array(
            'rule_uuids'=>array(),
            'force_refresh'=>1,
        );
        
        
        $res = $dto -> listDtoRuleStatus($arr);
        $this->do_assert($res);
    }

    public function testListDtoRuleSyncStatus()
    {
        $dto = $this -> dto;
        $arr = array(
            'rule_uuid'=>'',
            'limit'=>1,
            'page'=>1,
        );
        
        
        $res = $dto -> listDtoRuleSyncStatus($arr);
        $this->do_assert($res);
    }

    public function testDeleteDtoRule()
    {
        $dto = $this -> dto;
        $arr = array(
            'rule_uuids'=>array(),
            'force'=>1,
        );
        
        
        $res = $dto -> deleteDtoRule($arr);
        $this->do_assert($res);
    }

    public function testStartDtoRule()
    {
        $dto = $this -> dto;
        $arr = array(
            'operate'=>'',
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
            'operate'=>'',
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
            'operate'=>'',
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
            'operate'=>'',
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
            'operate'=>'',
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
            'operate'=>'',
            'rule_uuids'=>array(
            '0'=>'dCf2732A-fBdA-5F3F-cE3f-7989AA8De4cd',
            '1'=>'17b99b8e-2e11-C1b2-7302-b8ee1BCdF3Bd',),
        );
        
        
        $res = $dto -> enableDtoRule($arr);
        $this->do_assert($res);
    }

    public function testFailRestartReportDtoRule()
    {
        $dto = $this -> dto;
        $arr = array(
            'result_id'=>'',
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $dto -> failRestartReportDtoRule($arr);
        $this->do_assert($res);
    }

    public function testFailRestartReportDtoRuleResult()
    {
        $dto = $this -> dto;
        $arr = array(
            'result_id'=>'',
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $dto -> failRestartReportDtoRuleResult($arr);
        $this->do_assert($res);
    }

    public function testListDtoRuleFile()
    {
        $dto = $this -> dto;
        $arr = array(
            'type'=>'',
            'page'=>1,
            'limit'=>1,
            'result_id'=>'',
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $dto -> listDtoRuleFile($arr);
        $this->do_assert($res);
    }

    public function testDeleteDtoRuleFile()
    {
        $dto = $this -> dto;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $dto -> deleteDtoRuleFile($arr);
        $this->do_assert($res);
    }

    public function testListDtoRuleCmpResult()
    {
        $dto = $this -> dto;
        $arr = array(
            'page'=>1,
            'limit'=>10,
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $dto -> listDtoRuleCmpResult($arr);
        $this->do_assert($res);
    }

    public function testListDtoRuleSourcePath()
    {
        $dto = $this -> dto;
        $arr = array(
            'host_uuid'=>'48493c76-BEC1-db21-9Cdf-52f812EeEc67',
            'timepoint'=>'@timestamp()',
            'host_ip'=>'',
            'prefix'=>'',
            'mapper_path'=>'',
        );
        
        
        $res = $dto -> listDtoRuleSourcePath($arr);
        $this->do_assert($res);
    }

    public function testGetDtoRecoveryPoint()
    {
        $dto = $this -> dto;
        $arr = array(
            'host_uuid'=>'',
            'path'=>array(),
            'start'=>1,
            'end'=>1,
            'page'=>1,
            'limit'=>1,
        );
        
        
        $res = $dto -> getDtoRecoveryPoint($arr);
        $this->do_assert($res);
    }

    public function testDownloadDtoRuleReport()
    {
        $dto = $this -> dto;
        $arr = array(
            'rule_uuid'=>'',
            'exec_id'=>'',
        );
        
        
        $res = $dto -> downloadDtoRuleReport($arr);
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